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
  Coppermine version: 1.4.25
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE',1);
define('VIEWLOG_PHP',1);

require('include/init.inc.php');

function display_log_list()
{
	global $lang_viewlog_php;

	$log_list = getloglist('logs/');
	if (count($log_list)>0) {
			foreach ($log_list as $log) {
					echo <<<EOT
								<tr>
										<td class="tableb">
												<img src="images/folder.gif" alt="" />&nbsp;<a href= "{$_SERVER['PHP_SELF']}?log={$log['logname']}">{$log['logname']}</a>
												&nbsp;&nbsp;&nbsp; ( <i>{$log['filesize']} KB</i> )
										</td>
								</tr>
EOT;
			}
			echo <<<EOT
								<tr>
										<td class="tableb" align="center">
												<input class="button" type="button" value="{$lang_viewlog_php['delete_all']}" name="dall" id="dall" onclick="window.location='viewlog.php?action=dall';" />
										</td>
								</tr>
EOT;
	} else {
			cpg_die(INFORMATION,$lang_viewlog_php['no_logs'], __FILE__,1);
	}
}

function display_log($logname)
{
		global $lang_viewlog_php;

		echo <<<EOT
				<tr>
						<td class="tableb" align="center">
								<input class="button" type="button" value="{$lang_viewlog_php['delete_all']}" name="dall1" id="dall1" onclick="window.location='viewlog.php?action=dall';" />
								<input class="button" type="button" value="{$lang_viewlog_php['view_logs']}" name="back1" id="back1" onclick="window.location='viewlog.php';" />
								<input class="button" type="button" value="{$lang_viewlog_php['delete_this']}" name="dthis1" id="dthis1" onclick="window.location='viewlog.php?action=dthis&amp;log=$logname';" />
						</td>
				</tr>
				<tr>
						<td class="tableb">
								<pre>
EOT;
		log_read($logname);
		echo <<<EOT
								</pre>
						</td>
				</tr>
				<tr>
						<td class="tableb" align="center">
								<input class="button" type="button" value="{$lang_viewlog_php['delete_all']}" name="dall2" id="dall2" onclick="window.location='viewlog.php?action=dall';" />
								<input class="button" type="button" value="{$lang_viewlog_php['view_logs']}" name="back2" id="back2" onclick="window.location='viewlog.php';" />
								<input class="button" type="button" value="{$lang_viewlog_php['delete_this']}" name="dthis2" id="dthis2" onclick="window.location='viewlog.php?action=dthis&amp;log=$logname';" />
						</td>
				</tr>

EOT;
}

$log = @$_GET['log'];
$action = @$_GET['action'];

pageheader('Logs :: '.$log);

if (!$USER_DATA['has_admin_access']) {
		// Write access attempt to 'security' log file
		if ($CONFIG['log_mode']) {
				log_write('Denied privileged access to viewlog.php from user '.$USER_DATA['user_name'].' at '.$_SERVER['REMOTE_HOST'].' on '.date("F j, Y, g:i a"),CPG_SECURITY_LOG);
		}
		cpg_die(CRITICAL_ERROR,$lang_errors['access_denied'], __FILE__,1);
}

starttable("100%", "Logs :: ".$log);


if (isset($action)) {
		if ($action=='dthis' && isset($log)) {
				log_delete($log);
				unset($log);
		} elseif ($action=='dall') {
				unset($log);
				log_delete();
		}
}

// If log variable not set or log file's directory is not current directory then display logs list else display log with given name stripping risky characters from it
if (!isset($log) || dirname($log) != '.') {
	display_log_list();
} else {
	display_log(ereg_replace('\.|/|%00', '', $log));
}

endtable();
pagefooter();
?>