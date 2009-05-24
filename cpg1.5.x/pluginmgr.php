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
  Coppermine version: 1.5.1
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
    
    cpg_config_set('enable_plugins', $value);
    
    header('Location: pluginmgr.php');
}

function display_plugin_list() {
    global $CPG_PLUGINS, $lang_pluginmgr_php, $lang_plugin_php, $lang_common, $CONFIG, $CPG_PHP_SELF;

    $help = '&nbsp;'.cpg_display_help('f=plugins.htm&amp;as=plugin_manager&amp;ae=plugin_manager_end&amp;top=1', '800', '600');
    $help_plugin_enable = cpg_display_help('f=configuration.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end', 400, 300);
    // configure plugin api (enabled or disabled)
    $yes_selected = $CONFIG['enable_plugins'] ? 'checked="checked"' : '';
    $no_selected = !$CONFIG['enable_plugins'] ? 'checked="checked"' : '';
    print '<form name="pluginenableconfig" id="cpgform2" action="'.$CPG_PHP_SELF.'" method="post" style="margin:0px;padding:0px">';
    starttable('-1', cpg_fetch_icon('plugin_mgr', 2) . $lang_pluginmgr_php['pmgr'].$help,3);
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
                <td class="tableb">
                    <input type="radio" id="enable_plugins1" name="enable_plugins" value="1"  onclick="document.pluginenableconfig.submit();" $yes_selected class="radio" /><label for="enable_plugins1" class="clickable_option">{$lang_common['yes']}</label>
                    &nbsp;&nbsp;
                    <input type="radio" id="enable_plugins0" name="enable_plugins" value="0"  onclick="document.pluginenableconfig.submit();" $no_selected class="radio" /><label for="enable_plugins0" class="clickable_option">{$lang_common['no']}</label>
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

    unset($installed_plugins);
    if ($CONFIG['enable_plugins'] == 1) {
      $loop_counter = 0;
      foreach ($CPG_PLUGINS as $thisplugin) {
        $installed_plugins[$loop_counter] = array(
          'index' => $thisplugin->index,
          'plugin_id' => $thisplugin->plugin_id,
          'path' => $thisplugin->path,
          'priority' => $thisplugin->priority,
          'error' => $thisplugin->error,
        );
        $loop_counter++;
      }
    } else {
      // If plugin system is turned off, grab installed plugins from database table
      $query = 'SELECT * FROM '.$CONFIG['TABLE_PLUGINS'].' ORDER BY priority ASC;';
      $result = cpg_db_query($query);
      $loop_counter = 0;
      while ($installed_plugin = mysql_fetch_assoc($result)) {
        $installed_plugins[$loop_counter] = array(
          'index' => $loop_counter,
          'plugin_id' => $installed_plugin['plugin_id'],
          'path' => $installed_plugin['path'],
          'priority' => $installed_plugin['priority'],
          'error' => array(),
        );
        $loop_counter++;
      }
    }

    $plugins_count = count($installed_plugins);
    $installed_count = 0;
    $loop_counter = 0;
    foreach ($installed_plugins as $thisplugin) {
        $installed_count++;
        unset($extra_info);
        unset($install_info);
        include('./plugins/'.$thisplugin['path'].'/configuration.php');
        $pluginPath = $thisplugin['path'];

        $safename = addslashes(str_replace('&nbsp;', '', $name));
        if (isset($extra_info) == TRUE) {
              $extra = $extra_info;
            } else {
              $extra = '';
            }

        if (sizeof($thisplugin['error']) > 0) {
            $error = $thisplugin['error']['desc'];
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
                        <td class="tableb" valign="top">{$lang_pluginmgr_php['author']}:</td>
                        <td class="tableb" valign="top">$author</td>
                    </tr>
                    <tr>
                        <td class="tableb tableb_alternate" valign="top">{$lang_pluginmgr_php['desc']}</td>
                        <td class="tableb tableb_alternate" valign="top">$description</td>
                    </tr>
                    <tr>
                        <td class="tableb" width="20%" valign="top">{$lang_pluginmgr_php['extra']}:</td>
                        <td class="tableb" valign="top">{$extra}</td>
                    </tr>
                </table>
            </td>
            <td class="{$row_style_class}" valign="top">
            <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
EOT;
        if (($thisplugin['index'] > 0) && ($plugins_count > 1)) {
            $up = cpg_fetch_icon('up', 0);
            echo <<<EOT
            <td width="3%" align="center" valign="middle">
                <a href="pluginmgr.php?op=moveu&amp;p={$thisplugin['plugin_id']}">{$up}</a>
            </td>
EOT;
        } else {
            echo '<td width="3%"><img src="images/spacer.gif" width="16" height="16" /></td>';
        }

        if ($thisplugin['index'] < ($plugins_count - 1)) {
            $down = cpg_fetch_icon('down', 0); 
            echo <<<EOT
            <td width="3%" align="center" valign="middle">
                <a href="pluginmgr.php?op=moved&amp;p={$thisplugin['plugin_id']}">{$down}</a>
            </td>
EOT;
        } else {
            echo '<td width="3%"><img src="images/spacer.gif" width="16" height="16" /></td>';
        }

        $confirm_function = ($CONFIG['enable_plugins'] == 1) ? 'confirmUninstall' : 'confirmRemove';
        $delete = cpg_fetch_icon('plugin_uninstall', 0);
        echo <<<EOT
            <td width="3%" align="center" valign="middle">
                <a href="pluginmgr.php?op=uninstall&amp;p={$thisplugin['plugin_id']}" onClick="return {$confirm_function}('$safename')" title="{$lang_pluginmgr_php['uninstall']}">
                    {$delete}
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

    // Note: CPGPluginAPI::installed() works even if Plugin API is disabled.
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
            // remove 'true ||' below to remove install button when plugin API is disabled
            $install_button = (true || ($CONFIG['enable_plugins'] == 1)) ? 
                '<a href="pluginmgr.php?op=install&amp;p='.$path.'" title="' . $lang_pluginmgr_php['install'] . '">' . cpg_fetch_icon('plugin_install', 0) . '</a>'
                : cpg_fetch_icon('blank', 0);
            $delete = cpg_fetch_icon('delete', 0);
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
                        {$install_button}
                    </td>
                    <td width="5%" align="center" valign="top">
                        <a href="pluginmgr.php?op=delete&amp;p=$path" onClick="return confirmDel('$safename')" title="{$lang_common['delete']}">
                            {$delete}
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

$uninstalled = false;  // initialize
$installed = false;  // initialize
$op = @$superCage->get->getAlpha('op');
$p = @$superCage->get->getEscaped('p');
switch ($op) {
    case 'uninstall':
        $plugin_id = $p;
        if ($CONFIG['enable_plugins'] == 1) {
          if (!is_numeric($p)) {
              $plugin_id = CPGPluginAPI::installed($plugin_id);
          }
          $uninstalled = CPGPluginAPI::uninstall($plugin_id);
        } else {
          $query = 'SELECT * FROM '.$CONFIG['TABLE_PLUGINS'].' WHERE plugin_id='.$plugin_id.' LIMIT 1;';
          $result = cpg_db_query($query);
          $installed_plugin = mysql_fetch_assoc($result);
          if ($installed_plugin) {
            $priority = $installed_plugin['priority'];
            $name = $installed_plugin['name'];
            $sql = 'DELETE FROM '.$CONFIG['TABLE_PLUGINS'].' '.
                'WHERE plugin_id='.$plugin_id.';';
            $result = cpg_db_query($sql);
            // Shift the plugins up
            $sql = 'UPDATE '.$CONFIG['TABLE_PLUGINS'].' SET priority=priority-1 WHERE priority>'.$priority.';';
            $result = cpg_db_query($sql);
            if ($CONFIG['log_mode']) {
              log_write("Plugin '".$name."' uninstalled at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
            }
          }
        }
        break;
    case 'install':
        if ($CONFIG['enable_plugins']) {
          $installed = CPGPluginAPI::install($p);
        } else {
          cpgRedirectPage('pluginmgr.php',$lang_pluginmgr_php['pmgr'],$lang_pluginmgr_php['plugin_disabled_note']);
        }
        break;
    case 'delete':
        $path = $p;
        if (is_bool(strpos('/',$path))) {
            deldir('./plugins/'.$path);
            if ($CONFIG['log_mode']) {
              log_write("Plugin '".$path."' deleted at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
            }
        }
        break;
    case 'moveu':
        $name = $installed_plugin['name'];
        unset($installed_plugin);
        unset($priority);
        $plugin_id = $p;
        if ($CONFIG['enable_plugins'] == 1) {
          $thisplugin = @$CPG_PLUGINS[$plugin_id];
          $installed_plugin = isset($thisplugin);
          $priority = $thisplugin->priority;
        } else {
          $query = 'SELECT * FROM '.$CONFIG['TABLE_PLUGINS'].' WHERE plugin_id='.$plugin_id.' LIMIT 1;';
          $result = cpg_db_query($query);
          $installed_plugin = mysql_fetch_assoc($result);
          if ($installed_plugin) {
            $priority = $installed_plugin['priority'];
          }
        }
        if ($installed_plugin && ($priority > 0)) {
          // Move the plugin above down
          $sql = 'UPDATE '.$CONFIG['TABLE_PLUGINS'].' SET priority='.$priority.' WHERE priority='.($priority-1).';';
          cpg_db_query($sql);
          // Move this plugin up
          $sql = 'UPDATE '.$CONFIG['TABLE_PLUGINS'].' '.
                 'SET priority='.($priority-1).' WHERE plugin_id='.$plugin_id.';';
          cpg_db_query($sql);
          if ($CONFIG['log_mode']) {
              $query = 'SELECT * FROM '.$CONFIG['TABLE_PLUGINS'].' WHERE plugin_id='.$plugin_id.' LIMIT 1;';
              $result = cpg_db_query($query);
              $installed_plugin = mysql_fetch_assoc($result);
              log_write("Plugin '".$installed_plugin['name']."' moved up in plugin list at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
          }
        }
        break;
    case 'moved':
        unset($installed_plugin);
        unset($priority);
        $installed_count = 0;
        $plugin_id = $p;
        if ($CONFIG['enable_plugins'] == 1) {
          $thisplugin = @$CPG_PLUGINS[$plugin_id];
          $installed_plugin = isset($thisplugin);
          $priority = $thisplugin->priority;
          $installed_count = count($CPG_PLUGINS);
        } else {
          $query = 'SELECT * FROM '.$CONFIG['TABLE_PLUGINS'].' WHERE plugin_id='.$plugin_id.' LIMIT 1;';
          $result = cpg_db_query($query);
          $installed_plugin = mysql_fetch_assoc($result);
          if ($installed_plugin) {
            $priority = $installed_plugin['priority'];
          }
          $query = 'SELECT * FROM '.$CONFIG['TABLE_PLUGINS'].' ORDER BY priority ASC;';
          $result = cpg_db_query($query);
          $installed_plugins = mysql_fetch_assoc($result);
          $installed_count = count($installed_plugins);
        }
        if ($installed_plugin && ($priority < ($installed_count-1))) {
            // Move the plugin below up
            $sql = 'UPDATE '.$CONFIG['TABLE_PLUGINS'].' SET priority='.($priority).' WHERE priority='.($priority+1).';';
            cpg_db_query($sql);
            // Move this plugin down
            $sql = 'UPDATE '.$CONFIG['TABLE_PLUGINS'].' '.
                   'SET priority='.($priority+1).' WHERE plugin_id='.$plugin_id.';';
            cpg_db_query($sql);
            if ($CONFIG['log_mode']) {
              $query = 'SELECT * FROM '.$CONFIG['TABLE_PLUGINS'].' WHERE plugin_id='.$plugin_id.' LIMIT 1;';
              $result = cpg_db_query($query);
              $installed_plugin = mysql_fetch_assoc($result);
              log_write("Plugin '".$installed_plugin['name']."' moved down in plugin list at ".date("F j, Y, g:i a"),CPG_GLOBAL_LOG);
          	}
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
    return confirm("{$lang_pluginmgr_php['confirm_uninstall']} (" + text + ")");
}

function confirmRemove(text)
{
    return confirm("{$lang_pluginmgr_php['confirm_remove']} (" + text + ")");
}

function confirmDel(text)
{
    return confirm("{$lang_pluginmgr_php['confirm_delete']} (" + text + ")");
}
</script>
EOT;


/**
 * Display the manager page or execute plugin_configure action
 */

// Plugin isn't being configured; Display the plugin list
if (($CONFIG['enable_plugins'] != 1) || (($op != 'install') && ($op != 'uninstall')) || (is_bool($installed) && $installed) || (is_bool($uninstalled) && $uninstalled)) {

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


echo '<br />' . $LINEBREAK;

pagefooter();
ob_end_flush();
?>