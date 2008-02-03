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
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

// ------------------------------------------------------------------------- //
//  Open Plugin API (OpenPAPI) for Coppermine Photo Gallery                  //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2004  Christopher Brown-Floyd                              //
//  http://www.brownfloyd.com/                                               //
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('PLUGINMGR_PHP', true);
define('CORE_PLUGIN', true);

require('include/init.inc.php');

if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

// write the plugin enable/disable change to the db
    if ($superCage->post->keyExists('update_config')) {
        $value = $superCage->post->getInt('enable_plugins');
        cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'enable_plugins'");
        $CONFIG['enable_plugins'] = $value;
        if ($CONFIG['log_mode'] == CPG_LOG_ALL) {
            log_write('CONFIG UPDATE SQL: '.
              "UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'enable_plugins'\n".
              'TIME: '.date("F j, Y, g:i a")."\n".
              'USER: '.$USER_DATA['user_name'],
              CPG_DATABASE_LOG
              );
        }
    }

function display_plugin_list() {
    global $CPG_PLUGINS, $lang_pluginmgr_php, $lang_plugin_php, $lang_common, $CONFIG, $CPG_PHP_SELF;

    $help = '&nbsp;'.cpg_display_help('f=plugins.htm&amp;as=plugin_manager&amp;ae=plugin_manager_end&amp;top=1', '800', '600');
    $help_plugin_enable = cpg_display_help('f=configuration.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end', 400, 300);
    // configure plugin api (enabled or disabled)
    $yes_selected = $CONFIG['enable_plugins'] ? 'checked="checked"' : '';
    $no_selected = !$CONFIG['enable_plugins'] ? 'checked="checked"' : '';
    print '<form name="pluginenableconfig" id="cpgform2" action="'.$CPG_PHP_SELF.'" method="post" style="margin:0px;padding:0px">';
    starttable('-1', $lang_pluginmgr_php['pmgr'].$help,3);
echo <<< EOT
        <tr>
                <td class="tableh2" colspan="3">
                    {$lang_pluginmgr_php['explanation']}
                </td>
        </tr>
        <tr>
                <td class="tableb">
                    {$lang_pluginmgr_php['plugin_enabled']}
                </td>
                <td class="table">
                    <input type="radio" id="enable_plugins1" name="enable_plugins" value="1"  onclick="document.pluginenableconfig.submit();" $yes_selected /><label for="enable_plugins1" class="clickable_option">{$lang_common['yes']}</label>
                    &nbsp;&nbsp;
                    <input type="radio" id="enable_plugins0" name="enable_plugins" value="0"  onclick="document.pluginenableconfig.submit();" $no_selected /><label for="enable_plugins0" class="clickable_option">{$lang_common['no']}</label>
                    <input type="hidden" name="update_config" value="1" />
                </td>
                <td class="tableb">
                    {$help_plugin_enable}
                </td>
        </tr>
EOT;
    endtable();
    print '</form>';
echo <<< EOT
        <br />
EOT;


    $help = '&nbsp;'.cpg_display_help('f=plugins.htm&amp;as=plugin_manager_uninstall&amp;ae=plugin_manager_uninstall_end&amp;top=1', '640', '480');
    $available_plugins = cpg_get_dir_list('./plugins/');
    starttable('100%');

echo <<<EOT
        <tr>
                <td class="tableh1" width="90%"><strong><span class="statlink">{$lang_pluginmgr_php['i_plugins']}</span></strong></td>
                <td colspan="3" class="tableh1" align="center" width="10%"><strong><span class="statlink">{$lang_pluginmgr_php['operation']}</span></strong>{$help}</td>
        </tr>
EOT;

    $installed_count = 0;
    $loop_counter = 0;
    foreach ($CPG_PLUGINS as $thisplugin) {
        $installed_count++;
        unset($extra_info);
        unset($install_info);
        include('./plugins/'.$thisplugin->path.'/configuration.php');
        $pluginPath = $thisplugin->path;

        $safename = addslashes(str_replace('&nbsp;', '', $name));
        if (isset($extra_info) == TRUE) {
              $extra = $extra_info;
            } else {
              $extra = '';
            }

        if (sizeof($thisplugin->error) > 0) {
            $error = $thisplugin->error['desc'];
            $extra = '<tr><td class="tableb" width="100%" colspan="2">'.
                     '<strong>'.$lang_common['error'].':</strong> <span style="color:red;">'.$error.'</span>'.
                     '</td></tr>'.$extra;
        }

        if ($loop_counter == 0) {
            $row_style_class = 'tableb';
        } else {
            $row_style_class = 'tableb tableb_alternate';
        }
        $loop_counter++;
        if ($loop_counter > 1) {
            $loop_counter = 0;
        }

        echo <<<EOT
        <tr>
            <td width="90%" class="{$row_style_class}">
                <table border="0" width="100%" cellspacing="0" cellpadding="0" class="maintable">
                    <tr>
                        <td colspan="2" class="tableh1">{$name} ({$pluginPath}): {$lang_pluginmgr_php['vers']}$version</td>
                    </tr>
                    <tr>
                        <td class="tableb" width="20%" valign="top">{$lang_pluginmgr_php['extra']}:</td>
                        <td class="tableb" valign="top">{$extra}</td>
                    </tr>
                    <tr>
                        <td class="tableb tableb_alternate" valign="top">{$lang_pluginmgr_php['author']}:</td>
                        <td class="tableb tableb_alternate" valign="top">$author</td>
                    </tr>
                    <tr>
                        <td class="tableb" valign="top">{$lang_pluginmgr_php['desc']}</td>
                        <td class="tableb" valign="top">$description</td>
                    </tr>
                </table>
            </td>
            <td class="{$row_style_class}" valign="top">
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
EOT;
        if ($thisplugin->index > 0 && count($CPG_PLUGINS) > 1) {
            echo <<<EOT
            <td width="3%" align="center" valign="middle">
                <a href="pluginmgr.php?op=moveu&amp;p={$thisplugin->plugin_id}"><img src="images/up.gif"  border="0" alt="" /></a>
            </td>
EOT;
        } else {
            echo '<td width="3%"><img src="images/spacer.gif" width="16" height="16" /></td>';
        }

        if ($thisplugin->index < (count($CPG_PLUGINS)-1)) {
            echo <<<EOT
            <td width="3%" align="center" valign="middle">
                <a href="pluginmgr.php?op=moved&amp;p={$thisplugin->plugin_id}"><img src="images/down.gif"  border="0" alt="" /></a>
            </td>
EOT;
        } else {
            echo '<td width="3%"><img src="images/spacer.gif" width="16" height="16" /></td>';
        }

        echo <<<EOT
            <td width="3%" align="center" valign="middle">
                <a href="pluginmgr.php?op=uninstall&amp;p={$thisplugin->plugin_id}" onClick="return confirmUninstall('$safename')">
                    <img src="images/delete.gif"  border="0" alt="" />
                </a>
            </td>

        </tr>
        </table>
        </td>
        </tr>
EOT;
    }

    if ($installed_count == 0) {
            echo ('<tr><td colspan="4" class="tableb" align="center">'.$lang_pluginmgr_php['none_installed'].'</td></tr>');
    }
    endtable();

    echo('<p>&nbsp;</p>');
    echo('<form name="cpgform" id="cpgform" action="pluginmgr.php?op=upload" method="post" enctype="multipart/form-data">');

    $help_upload = '&nbsp;'.cpg_display_help('f=plugins.htm&amp;as=plugin_manager_upload&amp;ae=plugin_manager_upload_end&amp;top=1', '640', '480');
    $help_install = '&nbsp;'.cpg_display_help('f=plugins.htm&amp;as=plugin_manager_install&amp;ae=plugin_manager_install_end&amp;top=1', '640', '480');
    starttable('100%');
echo <<<EOT
        <tr>
                <td class="tableh1" width="90%">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td align="left">
                                <strong><span class="statlink">{$lang_pluginmgr_php['n_plugins']}</span></strong>{$help_install}
                            </td>
                            <td align="right">
                                    <input type="file" size="40" name="plugin" class="textinput" />
                                    <input type="submit" class="button" value="{$lang_pluginmgr_php['upload']}" />
                                    {$help_upload}
                            </td>
                        </tr>
                    </table>
                </td>
                <td colspan="3" class="tableh1" align="center" width="10%"><strong><span class="statlink">{$lang_pluginmgr_php['operation']}</span></strong></td>
        </tr>
EOT;

    $loop_counter = 0;

    foreach ($available_plugins as $path) {
        if (($plugin_id = CPGPluginAPI::installed($path))===false) {

            // If codebase.php and configuration.php don't exist, skip this folder
            if (!(file_exists('./plugins/'.$path.'/codebase.php') && file_exists('./plugins/'.$path.'/configuration.php'))) {
                continue;
            }

            unset($extra_info);
            unset($install_info);
            include('./plugins/'.$path.'/configuration.php');
            $pluginPath = $path;

            $safename = addslashes(str_replace('&nbsp;', '', $name));
            if (isset($install_info) == TRUE) {
              $extra = $install_info;
            } else {
              $extra = '';
            }

            if ($loop_counter == 0) {
                $row_style_class = 'tableb';
            } else {
                $row_style_class = 'tableb tableb_alternate';
            }
            $loop_counter++;
            if ($loop_counter > 1) {
                $loop_counter = 0;
            }

            echo <<<EOT
            <tr>
            <td width="90%" class="{$row_style_class}">
                <table border="0" width="100%" cellspacing="0" cellpadding="0" class="maintable">
                    <tr>
                        <td colspan="2" class="tableh1">{$name} ({$pluginPath}): {$lang_pluginmgr_php['vers']}$version</td>
                    </tr>
                    <tr>
                        <td class="tableb tableb_alternate" width="20%" valign="top">{$lang_pluginmgr_php['author']}:</td>
                        <td class="tableb tableb_alternate" valign="top">$author</td>
                    </tr>
                    <tr>
                        <td class="tableb" valign="top">{$lang_pluginmgr_php['desc']}:</td>
                        <td class="tableb" valign="top">$description</td>
                    </tr>
EOT;
            if ($extra != '') {
              echo <<<EOT
                    <tr>
                        <td class="tableb tableb_alternate" width="20%" valign="top">{$lang_pluginmgr_php['install_info']}:</td>
                        <td class="tableb tableb_alternate" valign="top">{$extra}</td>
                    </tr>
EOT;
            }
            echo <<<EOT
                </table>
            </td>
            <td class="{$row_style_class}" valign="top">
                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="5%" align="center" valign="top">
                        <img src="images/spacer.gif" width="16" height="16" />
                    </td>
                    <td width="5%" align="center" valign="top">
                        <a href="pluginmgr.php?op=install&amp;p=$path"><img src="images/info.gif"  border="0" alt="" /></a>
                    </td>
                    <td width="5%" align="center" valign="top">
                        <a href="pluginmgr.php?op=delete&amp;p=$path" onClick="return confirmDel('$safename')">
                            <img src="images/delete.gif"  border="0" alt="" />
                        </a>
                    </td>
                </tr>
                </table>
            </td>
            </tr>
EOT;
        }
    }
    echo('</form>');
    endtable();
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


/**
 * Main code
 */


/**
 * Plugin manager events
 *
 * Executes manager events
 */

$op = @$superCage->get->getAlpha('op');
$p = @$superCage->get->getEscaped('p');
switch ($op) {
    case 'uninstall':
        $plugin_id = $p;
        if (!is_numeric($p)) {
            $plugin_id = CPGPluginAPI::installed($plugin_id);
        }
        $uninstalled = CPGPluginAPI::uninstall($plugin_id);
        break;
    case 'install':
        $installed = CPGPluginAPI::install($p);
        break;
    case 'delete':
        $path = $p;
        if (is_bool(strpos('/',$path))) {
            deldir('./plugins/'.$path);
        }
        break;
    case 'moveu':
        $thisplugin = @$CPG_PLUGINS[$p];
        if (isset($thisplugin) && ($priority = $thisplugin->priority) > 0) {

            // Move the plugin above down
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.$priority.' where priority='.($priority-1).';';
            cpg_db_query($sql);

            // Move this plugin up
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' '.
                   'set priority='.($priority-1).' where plugin_id='.$thisplugin->plugin_id.';';
            cpg_db_query($sql);
        }
        break;
    case 'moved':
        $thisplugin = @$CPG_PLUGINS[$p];
        if (isset($thisplugin) && ($priority = $thisplugin->priority) < (count($CPG_PLUGINS)-1)) {

            // Move the plugin below up
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' set priority='.($priority).' where priority='.($priority+1).';';
            cpg_db_query($sql);

            // Move this plugin down
            $sql = 'update '.$CONFIG['TABLE_PLUGINS'].' '.
                   'set priority='.($priority+1).' where plugin_id='.$thisplugin->plugin_id.';';
            cpg_db_query($sql);
        }
        break;
    case 'upload':
        //Using getRaw() since we need the actual name of the file uploaded by the user
        if (is_uploaded_file($superCage->files->getRaw('plugin/tmp_name'))) {
            //$file =& $_FILES['plugin'];
            $file = $superCage->files->getRaw('plugin');
            $info = pathinfo($file['name']);

            if (strtolower($info['extension'] != 'zip')) {
                cpg_die(CRITICAL_ERROR,$lang_pluginmgr_php['not_plugin_package'],__FILE__,__LINE__);
            }

            if (!is_dir('./plugins/receive')) {
                $mask = umask(0);
                mkdir('./plugins/receive',0777);
                umask($mask);
            }

            if (!move_uploaded_file($file['tmp_name'],'./plugins/receive/'.$file['name'])) {
                cpg_die(CRITICAL_ERROR,$lang_pluginmgr_php['copy_error'],__FILE__,__LINE__);
            }

            require_once('./include/zip.lib.php');

            $zip =& new Zip();
            $zip->Extract('./plugins/receive/'.$file['name'],'./plugins',array(-1));

            unlink('./plugins/receive/'.$file['name']);
        }
        break;
}

pageheader($lang_pluginmgr_php['pmgr']);
echo <<<EOT

<script language="javascript" type="text/javascript">
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


/**
 * Display the manager page or execute plugin_configure action
 */

// Plugin isn't being configured; Display the plugin list
if ((($op != 'install') && ($op != 'uninstall')) || (is_bool($installed) && $installed) || (is_bool($uninstalled) && $uninstalled)) {

    // Refresh the page; An operation was just performed
    if  ($superCage->get->keyExists('op')) {
        header('Location: pluginmgr.php');
    }
    display_plugin_list();

// Plugin is being configured; Execute 'plugin_configure' action
} elseif ($op == 'install') {

    // Display configure page table header
    starttable('100%',$lang_pluginmgr_php['configure_plugin'] . ': ' . $CPG_PLUGINS['new']->name);

    echo <<< EOT
    <tr>
        <td class="tableb" valign="top" width="100%">
EOT;

        // Execute 'plugin_configure' action on the new plugin
        CPGPluginAPI::action('plugin_configure',$installed,CPG_EXEC_NEW);
    echo <<< EOT
        </td>
    </tr>
EOT;

    // End the table
    endtable();
} else {

    // Display cleanup page table header
    starttable('100%',$lang_pluginmgr_php['cleanup_plugin'] . ': ' . $CPG_PLUGINS[$plugin_id]->name);

    echo <<< EOT
    <tr>
        <td class="tableb" valign="top" width="100%">
EOT;

        // Execute 'plugin_cleanup' action on the plugin
        CPGPluginAPI::action('plugin_cleanup',$uninstalled,$plugin_id);
    echo <<< EOT
        </td>
    </tr>
EOT;

    // End the table
    endtable();
}


echo "<br />\n";

pagefooter();
ob_end_flush();
?>