<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 4015 $
  $LastChangedBy: SaWeyy $
  $Date: 2007-10-31 10:23:22 +0100 (wo, 31 okt 2007) $
**********************************************/
########################
####Install Main Code###
########################
//include Inspekt for sanitization
$incp = get_include_path().PATH_SEPARATOR.dirname(__FILE__).PATH_SEPARATOR.dirname(__FILE__).DIRECTORY_SEPARATOR.'include';
set_include_path($incp);
require_once "include/Inspekt.php";
$superCage = Inspekt::makeSuperCage();

$install = new CPGInstall();

//get installation step
if($superCage->get->keyExists('step') && is_array($install->config['steps_done']) &&  in_array($superCage->get->getInt('step'), $install->config['steps_done'])) {
	$step = $superCage->get->getInt('step');
} else {
	if(isset($install->config['step'])) {
		$step = $install->config['step'];
	} else {
		$step = '1';
	}
}

//check if we have an update instead of a next step request
if($superCage->post->keyExists('update_lang')) $step = 1;
if($superCage->post->keyExists('update_im_path')) $step = 4;
if($superCage->post->keyExists('update_check_connection')) $step = 6;
if($superCage->post->keyExists('update_create_db')) $step = 7;

//if installation is done, only show last page
if(isset($install->config['install_finished'])) $step = 10;


$install->setTmpConfig('steps_done', $step, true);
//check if the installer has already been run succefully
if($install->error != '') {
	html_header();
	html_installer_locked();
	html_footer();
	exit;
}

//check if we have new user input and put it in the temp config
if($superCage->post->keyExists('thumb_method')) $install->setTmpConfig('thumb_method', $superCage->post->getAlnum('thumb_method'));
if($superCage->post->keyExists('im_path') && $superCage->post->getPath('im_path') != (dirname($superCage->server->getPath('SCRIPT_FILENAME') . DIRECTORY_SEPARATOR))) $install->setTmpConfig('im_path', $superCage->post->getPath('im_path'));

switch($step) {
	case 1:		//Initialisation & natural language selection
		$install->page_title = $install->language['title_welcome'];
		html_header();
		html_welcome();
		html_footer();
		break;
		
	case 2:		//Are all mandatory files there (versioncheck has to be completed first)
		$install->page_title = $install->language['title_file_check'];
		html_header();
		html_content($install->language['version_check']); 
		html_footer();
		$install->setTmpConfig('step', '3');
		break;
		
	case 3:		//Check if the folder permissions are set up properlyµ
		$install->page_title = $install->language['title_dir_check'];
		if(!$install->checkPermissionAndExist()) {
			//not all permissions were set right, or folder doesn't exist
			html_header();
			html_error();
			html_content();//show all checked folders?
			html_footer();
		} else {
			//permissions are set alright, continue
			html_header();
			html_content($install->language['perm_ok']);//show all checked folders?
			html_footer();
			$install->setTmpConfig('step', '4');
		}
		break;
		
	case 4:		//Check available image processors & let user choose
		$install->page_title = $install->language['title_imp'];
		$image_processors = $install->checkImageProcessor();
		html_header();
		if($install->error != '') {
			html_error();
		} else {
			$install->setTmpConfig('step', '5');
		}
			$content = $install->language['im_packages'] . '<br /><br />';
		$imp_list = '<select name="thumb_method" >';
		if(isset($image_processors['gd2']))	{
			//gd2 is avilable, add it to the list
			$imp_list .= '<option value="gd2">GD2</option>';
			$content .= '<b>GDlib</b> Version 2. <br />';
			$selected = 'gd2';
		} elseif(isset($image_processors['gd1']))	{
			//gd1 is avilable, add it to the list
			$imp_list .= '<option value="gd">GD</option>';
			$content .= '<b>GDlib</b> Version 1. <br />';
			$selected = 'gd1';
		}
		//check configuration options of im_path
		if(isset($image_processors['im']))	{
			//im is available, add it to the list
			$path = str_replace(array('.exe', '"'), '',$image_processors['im']['path']);
			$path = substr($path, 0, (strlen($path) - 7));
			$imp_list .= '<option value="im">ImageMagick</option>';
			$content .= '<b>ImageMagick</b> Version ' . substr($image_processors['im']['version'], 20, 7) . '(at: ' . $path .')';
			$selected = 'im';
		} else {
			$im_not_found .= '<br /><br /><fieldset style="width:90%" title="ImageMagick">' . $install->language['im_not_found'] .'</fieldset>';
		}
		//check configuration options
		if(isset($install->config['thumb_method'])) $selected = $install->config['thumb_method'];
		$imp_list .= '</select>';
		$imp_list = str_replace($selected . '"', $selected . '" selected="selected"', $imp_list);
		
		//if no image library is found, tell the user so, and select gd2
		if(!isset($selected)) {
			$content .= '<br /><br /><fieldset style="width:90%" title="GD">' . $install->language['no_gd'] . '</fieldset><br /><br />' . $im_not_found;
		} else {
			$content .= '<br /><br />' . $install->language['installer_selected'] . ' \'' . $selected . '\'<br /><br />' . $imp_list . $im_not_found;
		}
		
		//add IM path box
		(isset($install->config['im_path']) && $superCage->post->getPath('im_path') != (dirname($superCage->server->getPath('SCRIPT_FILENAME') . DIRECTORY_SEPARATOR))) ? $path = $install->config['im_path'] : $path = $path;
		$content .= '<br /><br />' . $install->language['im_path'] . '<br /><input type="text" size="70" name="im_path" value="' . $path . '" /><input type="submit" name="update_im_path" value="' . $install->language['check_path'] . '" />';
		
		html_content($content);
		html_footer();
		break;
		
	case 5:		//Check if the image library information has been set up properly - display some basic test images created with the image library selected
		$install->page_title = $install->language['title_imp_test'];
		html_header();
		if($install->error != '') {
			html_error();
		} else {
			$install->setTmpConfig('step', '6');
		}
		html_content($content);
		html_footer();
		break;
		
	case 6:		//Ask user for mysql host, username and password, try to establish a connection using that info
		$install->page_title = $install->language['title_mysql_user'];
		//check if we are trying to test the connection
		if($superCage->post->keyExists('update_check_connection') || (isset($install->config['db_host']) && $superCage->post->keyExists('db_host'))) {
			//here we do not use the setTmpConfig funtion, as this function always writes the new file
			//and it will be written in the third step...
			$install->config['db_host'] = $superCage->post->getRaw('db_host');
			$install->config['db_user'] = $superCage->post->getRaw('db_user');
			$install->setTmpConfig('db_password', $superCage->post->getRaw('db_password'));
			
			//test the connection
			$install->checkSqlConnection();	
		}
		html_header();
		if($install->error != '') {
			html_error();
		} else {
			if(isset($install->config['db_password'])) $install->setTmpConfig('step', '7');
		}
		html_mysql_start();
		html_footer();
		break;
		
	case 7:		//Ask the user if he wants to use an existing db or if he wants the installer to create a new database. Try to perform the selected choice. Ask for the table prefix
		$install->page_title = $install->language['title_mysql_db_sel'];
		//save the db data from previous step
		if($superCage->post->keyExists('db_host')  && !isset($install->config['db_populated'])) {
			//here we do not use the setTmpConfig funtion, as this function always writes the new file
			//and it will be written in the third step...
			$install->config['db_host'] = $superCage->post->getRaw('db_host');
			$install->config['db_user'] = $superCage->post->getRaw('db_user');
			$install->setTmpConfig('db_password', $superCage->post->getRaw('db_password'));
			if($install->error != '') {
				$install->error .= '<br /><br />' . sprintf($install->language['please_go_back'], ($step - 1));
			}
		} elseif($superCage->post->keyExists('update_create_db') && trim($superCage->post->getRaw('new_db_name')) != '') {
			//try to create a new database.
			$install->createMysqlDb(trim($superCage->post->getRaw('new_db_name')));
			//save table prefix
			$install->setTmpConfig('db_prefix', $superCage->post->getRaw('db_prefix'));
		}
		$install->checkSqlConnection();	
		html_header();
		if($install->error != '') {
			html_error();
		} else {
			html_mysql_select_db();
			$install->setTmpConfig('step', '8');
		}
		html_footer();
		break;
		
	case 8:		//save db_prefix/_name and finally create the tables
		$install->page_title = $install->language['title_mysql_pop'];
		//save the db data from previous step
		if($superCage->post->keyExists('db_name') && !isset($install->config['db_populated'])) {
			$install->setTmpConfig('db_name', $superCage->post->getRaw('db_name'));
			$install->setTmpConfig('db_prefix', $superCage->post->getRaw('db_prefix'));
		}
		//populate db if not done yet
		$set_populated = false;
		if(!isset($install->config['db_populated']) && isset($install->config['db_name'])) {
			$msg = $install->language['db_populating'];
			if($install->populateMysqlDb()) {
				$set_populated = true;
			}
		} elseif(!isset($install->config['db_populated']) && !isset($install->config['db_name'])) {
			$msg = sprintf($install->language['not_here_yet'], 7);
		}

		if(isset($install->config['db_populated']))	{
			html_header();
			if($install->error != '') {
				html_error();
			}
			$install->temp_data = '<tr><td><br /><br /><br />' . $install->language['db_alr_populated'] . '<br /><br /><br /><br /></td></tr>';
			html_content($install->language['db_populating']);
			html_footer();
			$install->setTmpConfig('step', '9');
		} else {
			if($set_populated) {
				//this is a lock to see if the db has been created yet	
				$install->setTmpConfig('db_populated', 'done');	
				$install->setTmpConfig('step', '9');
			}
			html_header();
			if($install->error != '') {
				html_error();
			}
			html_content($msg);
			html_footer();
			break;
		}
		break;
		
	case 9:		//Ask for coppermine admin username, password and email address
		$install->page_title = $install->language['title_admin'];
		if($superCage->post->keyExists('admin_username')) {
			//check validity of admin details
			$admin_username = $superCage->post->getMatched('admin_username', '/\A\w*\Z/');
			if($admin_username[0] == '' || !$admin_username) {
				//admin username not correct
				$install->error .= $install->language['user_err'] . '<br />';
			} else {
				$install->setTmpConfig('admin_username', $superCage->post->getAlnum('admin_username'));
			}
			$admin_password = $superCage->post->getMatched('admin_password', '/\A\w*\Z/');
			$admin_password_verif = $superCage->post->getMatched('admin_password_verif', '/\A\w*\Z/');
			if($admin_password[0] != $admin_password_verif[0] || !$admin_password || $admin_password[0] == '') {
				//admin password not correct
				$install->error .= $install->language['pass_err'] . '<br />';
			} else {
				$install->setTmpConfig('admin_password', $superCage->post->getAlnum('admin_password'));
			}
			$email = $superCage->post->getMatched('admin_email', '/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i');
			$ver_email = $superCage->post->getMatched('admin_email_verif', '/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i');
			if($email[0] != $ver_email[0] || $email[0] == '') {
				//admin email not correct
				$install->error .= $install->language['email_no_match'] . '<br />';
			} else {
				$install->setTmpConfig('admin_email', $email[0]);
			}		
		}
		
		if(isset($install->config['admin_username']) && isset($install->config['admin_password']) && isset($install->config['admin_email']) && !isset($install->config['install_finished'])){
			//create admin
			if($install->createAdmin()) {
				//add finished flag to config
				$install->setTmpConfig('install_finished', 'done');
				//redirect to last page
				header('Location: install.php?step=' . ($step + 1));
				exit;
			}
		}
		html_header();
		if($install->error != '') {
			html_error();
		} else {
			if(isset($install->config['admin_username'])) $install->setTmpConfig('step', '10');
		}
		html_admin();
		html_footer();
		break;

	case 10:	//Finally check if everything is set up properly and tell the user so
		//write real config file
		$install->writeConfig();
		
		$install->page_title = $install->language['title_finished'];
		html_header();
		if($install->error != '') {
			html_error();
		}
		html_finish();
		html_footer();
		//delete temp config!!
		break;	
}


########################
####Install Templates###
########################

/* html_header()
 * 
 * prints the header
 */
function html_header() {
?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Coppermine - <?php echo $install->language['installer']; ?></title><link type="text/css" rel="stylesheet" href="installer.css">
</head>
<body>
 <div align="center">
  <div style="width:600px;">
  <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
    <tr>
      <td valign="top" style="background-color:#EFEFEF"><img src="images/coppermine-logo.png" width="260" height="60" border="0" alt="" /><br />
      </td>
    </tr>
  </table>
<?php
html_stepper();
}

/* html_footer()
 * 
 * prints the footer
 */
function html_footer() {
?>
  </div>
 </div>
</body>
</html>
<noscript><plaintext>
<?php
}

/* html_stepper()
 * 
 * prints current installation step with links to the next ones
 */
function html_stepper() {
	global $install, $step;
	$stepper = '';
	$tpl_step_done = '<td class="stepper_d" onMouseOver="this.className=\'stepper_do\'" onMouseOut="this.className=\'stepper_d\'" onClick="document.location=\'install.php?step=%s\'"><a href="install.php?step=%s" title="Step: %s">%s</a></td>';
	$tpl_step_current = '<td class="stepper_c"><span title="Step: %s">%s</span></td>';
	$tpl_step_notyet = '<td class="stepper_n"><span title="Step: %s">%s</span></td>';
	for($i = 1; $i < 11; $i++) {
		if($i == $step) {
			$stepper .= sprintf($tpl_step_current, $i, $i);
		} elseif(is_array($install->config['steps_done']) && in_array($i, $install->config['steps_done'])) {
			$stepper .= sprintf($tpl_step_done, $i, $i, $i, $i);
		} else {
			$stepper .= sprintf($tpl_step_notyet, $i, $i);
		}
	}
?>
	<table class="stepper_table">
	<tr height="20">
	<td>&nbsp;</td><?php echo $stepper; ?>
	</tr>
	</table>
	<table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
      <tr>
       <td class="tableh1" colspan="2"><h2><?php echo $install->page_title; ?></h2>
       </td>
      </tr>
       <tr>
      <td valign="top" style="background-color:#FF0000; color:#FFFFFF;"><h5>Warning, this installer is still in alpha, you can use the old one by going <a href="install_old.php">here</a></h5><br />
      </td>
    </tr>
	</table>
<?php
}

/* html_installer_locked()
 * 
 * prints the error when the installer is locked
 */
function html_installer_locked() {
	global $install;
?>
      <form action="index.php" style="margin:0px;padding:0px" name="cpgform" id="cpgform">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableh1" colspan="2"><h2><?php echo $install->language['installer_locked']; ?></h2>
          </td>
         </tr>
         <tr>
          <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;<?php echo $install->language['error']; ?>&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2"><?php echo $install->error; ?>
          </td>
         </tr>
         <tr>
          <td colspan="2" align="center" class="tableb"><br />
            <input type="submit" value="<?php echo $install->language['go_to_main']; ?>" /><br /><br />
          </td>
         </tr>
		</table>
      </form>
<?php
}

/* html_welcome()
 * 
 * prints the welcome message at the start of installation + language selection
 */
function html_welcome() {
    global $install;
	if(!$install->setTmpConfig('step', '2')) {
		$next_step = 1;
	} else {
		$next_step = 2;
	}
?>
      <form action="install.php?step=<?php echo $next_step; ?>" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2"><?php echo $install->language['cpg_info']; ?></a>.
          </td>
         </tr>
		
<?php
    if ($install->error != '') {	
?>
         <tr>
          <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;<?php echo $install->language['error']; ?>&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2"><?php echo $install->language['error_need_corr']; ?><br /><br /><b><?php echo $install->error; ?></b>
          </td>
         </tr>
<?php
    }
    ?>
    	 <tr>
          <td class="tableh1" colspan="2"><b><?php echo $install->language['select_lang']; ?></b>
          </td>
         </tr>
         <tr>
          <td class="tableb" align="center" colspan="2"><?php echo $install->getLangSelect(); ?><input type="submit" name="update_lang" value="<?php echo $install->language['change_lang']; ?>" />
          </td>
         </tr>
		<tr>
		  <td colspan="2" align="center" class="tableh2"><br />
            <input type="submit" value="<?php echo $install->language['lets_go']; ?>" /><br /><br />
          </td>
         </tr>
	</table>
  </form>
	<?php
}

/* html_content()
 * 
 * prints standard page with variable content
 */
function html_content($content) {
	global $install, $step;
?>
      <form action="install.php?step=<?php echo ($step + 1); ?>" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2"><?php echo $content; ?><br /><br /><br /></td>
         </tr>
         <?php
		 if($install->temp_data != '') {
			echo $install->temp_data;
		 }
		 ?>
		 <tr>
		  <td colspan="2" align="center" class="tableh2"><br />
            <input type="submit" value="<?php echo $install->language['continue']; ?>" /><br /><br />
          </td>
         </tr>
		</table>
	  </form>	
<?php
}

/* html_error()
 * 
 * prints error message
 */
function html_error() {
	global $install, $step;
?>
      <form action="install.php?step=<?php echo $step; ?>" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
		 <tr>
          <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;<?php echo $install->language['error']; ?>&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
          </td>
         </tr>
         <tr>
          <td class="tableb" colspan="2"><?php echo $install->language['error_need_corr']; ?><br /><br /><b><?php echo $install->error; ?></b>
          </td>
         </tr>
		 <tr>
		  <td colspan="2" align="center" class="tableh2"><br />
            <input type="submit" value="<?php echo $install->language['try_again']; ?>" /><br /><br />
          </td>
         </tr>
		</table>
	 </form>	
<?php
}

/* html_mysql_start()
 * 
 * prints page with basic MySql config
 */
function html_mysql_start() {
	global $install, $step;
?>
      <form action="install.php?step=<?php echo ($step + 1); ?>" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
		  <?php echo $install->language['sect_mysql_info']; ?><br /><br />
		  </td>
         </tr>
		 <tr>
          <td colspan="2">&nbsp;</td>
         </tr>
		 <?php 
		 	if($install->mysql_connected) {
				?>
		<tr>
			<td colspan="2" align="center"><fieldset><?php echo $install->language['mysql_succ']; ?></fieldset></td>
		</tr>	
				<?php 
			}
		 ?>
		 <tr>
          <td align="right"><?php echo $install->language['mysql_host']; ?></td>
		  <td><input type="text" name="db_host" value="<?php echo (isset($install->config['db_host'])) ? $install->config['db_host'] : 'localhost'; ?>" /></td>
         </tr>
		 <tr>
          <td align="right">MySql <?php echo $install->language['username']; ?></td>
		  <td><input type="text" name="db_user" value="<?php echo $install->config['db_user']; ?>" /></td>
         </tr>
		 <tr>
          <td align="right">MySql <?php echo $install->language['password']; ?></td>
		  <td><input type="password" name="db_password" value="<?php echo $install->config['db_password']; ?>" /></td>
         </tr>
		 <tr>
		 <td colspan="2" align="center">
		  	<input type="submit" name="update_check_connection" value="<?php echo $install->language['mysql_test_connection']; ?>" /><br />
          </td>
         </tr>
         <?php 
		 	if($install->mysql_connected) {
				?>
		<tr>
		  <td colspan="2" align="center" class="tableh2">
            <input type="submit" value="<?php echo $install->language['continue']; ?>" /><br /><br />
          </td>
         </tr>	
				<?php 
			} else {
				?>
		<tr>
		  <td colspan="2" align="center" class="tableh2">&nbsp;<br /><br /></td>
         </tr>	
				<?php 
			}
		 ?>
		 
		</table>
	  </form>	
<?php
}


/* html_mysql_select_db()
 * 
 * prints page for db selection
 */
function html_mysql_select_db() {
	global $install, $step;
?>
      <form action="install.php?step=<?php echo ($step + 1); ?>" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
		  <?php echo $install->language['sect_mysql_sel_db']; ?><br /><br />
		  </td>
         </tr>
		 <tr>
          <td colspan="2">&nbsp;</td>
         </tr>
		 <tr>
          <td align="right"><?php echo $install->language['mysql_db_name']; ?></td>
		  <td><?php echo $install->getMysqlDbs(); ?></td>
         </tr>
		 <tr>
          <td align="right"><?php echo $install->language['mysql_create_db']; ?></td>
		  <td><input type="text" name="new_db_name" /><input type="submit" name="update_create_db" value="<?php echo $install->language['mysql_create_btn']; ?>" /></td>
         </tr>
		 <tr>
		 <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
          <td align="right"><?php echo $install->language['mysql_tbl_pref']; ?></td>
		  <td><input type="text" name="db_prefix" value="<?php echo isset($install->config['db_prefix']) ? $install->config['db_prefix'] : 'cpg15x_'; ?>" /></td>
         </tr>
		 <tr>
		  <td colspan="2" align="center" class="tableh2">
            <input type="submit" value="<?php echo $install->language['populate_db']; ?>" /><br /><br />
          </td>
         </tr>
		</table>
	  </form>	
<?php
}

/* html_admin()
 * 
 * prints page for admin details
 */
function html_admin() {
	global $install, $step;
?>
      <form action="install.php?step=<?php echo $step; ?>" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
		  <?php echo $install->language['sect_create_adm']; ?><br /><br />
		  </td>
         </tr>
		 <tr>
          <td colspan="2">&nbsp;</td>
         </tr>
		 <tr>
          <td align="right"><?php echo $install->language['username']; ?></td>
		  <td><input type="text" name="admin_username" value="<?php echo $install->config['admin_username']; ?>"  /></td>
         </tr>
         <tr>
          <td align="right"><?php echo $install->language['password']; ?></td>
		  <td><input type="password" name="admin_password" value="<?php echo $install->config['admin_password']; ?>" /></td>
         </tr>
          <tr>
          <td align="right"><?php echo $install->language['password_verif']; ?></td>
		  <td><input type="password" name="admin_password_verif" value="<?php echo $install->config['admin_password']; ?>" /></td>
         </tr>
         <tr>
          <td align="right"><?php echo $install->language['email']; ?></td>
		  <td><input type="text" name="admin_email" value="<?php echo $install->config['admin_email']; ?>" /></td>
         </tr>
          <tr>
          <td align="right"><?php echo $install->language['email_verif']; ?></td>
		  <td><input type="text" name="admin_email_verif" value="<?php echo $install->config['admin_email']; ?>" /></td>
         </tr>
		 <tr>
		 <td colspan="2">&nbsp;</td>
         </tr>
		 <tr>
		  <td colspan="2" align="center" class="tableh2">
            <input type="submit" value="<?php echo $install->language['last_step'] ?>" /><br /><br />
          </td>
         </tr>
		</table>
	  </form>	
<?php
}


/* html_finish()
 * 
 * prints last page of installer
 */
function html_finish() {
	global $install;
?>
      <form action="index.php" name="cpgform" id="cpgform" method="post" style="margin:0px;padding:0px">
        <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
         <tr>
          <td class="tableb" colspan="2">
		  <?php echo $install->language['ready_to_roll']; ?><br /><br />
		  </td>
         </tr>
		 <tr>
		 <td colspan="2">&nbsp;</td>
         </tr>
		 <tr>
		  <td colspan="2" align="center" class="tableh2">
            <input type="submit" value="<?php echo $install->language['finish'] ?>" /><br /><br />
          </td>
         </tr>
		</table>
	  </form>	
<?php
}

########################
#####CPGInstall Class###
########################
class CPGInstall{
	var $language;	//(array) holds the language
	var $config;	//(array) temp configuration and checks
	var $error;		//(string) holds errors
	var $tmp_config = 'include/config.tmp'; //(string) temporary config file
	var $mysql_connection; 			//(mysql_connection) connection to the db
	var $mysql_connected = false;	//(bool) connected to the db?
	var $page_title; //(string) holds the title of the current installation step
	var $temp_data;	//holds various data
	var $available_languages; //(array) holds available langs in first step
	
	/*
	* CPGInstall()
	*
	* Init function, loads the configuration
	*
	*/
	function CPGInstall() {
		$this->loadTempConfig();
		$this->getLanguage();
	}
	
	/*
	* loadTempConfig()
	*
	* Check if install has already been done, else load temporary config.
	* if the unserialize doesn't work, it will be tried again for 10 times before showing an error
	*
	* @param int $rp
	*/
	function loadTempConfig($rp=0) {
		if (file_exists('include/config.inc.php')) {
			$this->getLanguage();
			$this->error = $this->language['already_succ'];
			return false;
		} else {
			//read the temporary file
			if(file_exists($this->tmp_config)) {
				if($handle = fopen($this->tmp_config, 'r')) {
					$conf = fgets($handle);
					if(!$uns_conf = unserialize($conf)) {
						if($rp < 10) {
							$this->loadTempConfig($rp + 1);
						} else {
							die($this->language['tmp_conf_ser_err']);
						}
					} else {
						$this->config = $uns_conf;
					}
					fclose($handle);
				} else {
					//could not read tmp config, add error
					$this->error = $this->language['cant_read_tmp_conf'];
				}
			} else {
				$this->config = array();
			}
		}
	}
	
	/* setTmpConfig()
	 * 
	 * Adds a value to the temp config
	 *
	 * @param string $key
	 * @param string $value
	 * @param bool $isarray
	 *
	 * @return bool
	 */
	function setTmpConfig($key, $value, $isarray = false) {
		if(!$isarray) {
			$this->config[$key] = $value;
		} else {
			$this->config[$key][] = $value;
			$this->config[$key] = array_unique($this->config[$key]);
		}
		if(!$this->createTempConfig()) {
			//can't write temp config, set error
			$this->error .= '<br /><br />' . $this->language['tmp_conf_error'];
			return false;
		}
		return true;
	}
	
	/*
	* createTempConfig()
	*
	* Creates a temporary config file or appends new config vars.
	*
	* @return bool $success
	*/
	function createTempConfig() {
		if($handle = @fopen($this->tmp_config, 'w')) {
			$conf = serialize($this->config);			
			fwrite($handle, $conf);
			fclose($handle);
			$success = true;
		} else {
			//could not write tmp config, add error
			$this->error = $this->language['cant_write_tmp_conf'];
			$success = false;
		}
		return $success;
	}
	
	/*
	* getLanguage()
	*
	* Tries to find the default lang of the user
	*
	* @return array $language
	*/
	function getLanguage() {
		define('IN_COPPERMINE', true);
		define('INSTALLER', true);
		$superCage = Inspekt::makeSuperCage();
		
		//try to find the users language if we don't have one defined yet
		if(!isset($this->config['lang'])) {
			include_once('include/select_lang.inc.php');
			$this->available_languages = $available_languages;
			$this->setTmpConfig('lang', $USER['lang']);
			$this->loadTempConfig();
		}

		//change default language
		if($lang = $superCage->post->getMatched('lang_list', '/^[a-z0-9_-]+$/')) {
			$this->setTmpConfig('lang', $lang[0]);
			$this->loadTempConfig();
		} 
		if($this->language == '') {
			include('lang/english.php');
			$lang_en = $lang_install;
			if (file_exists('lang/' . $this->config['lang'] . '.php')) {
				//include this lang
				include('lang/' . $this->config['lang'] . '.php');
			}
			//provide fallback
			$this->language = array_merge($lang_en, $lang_install);
			
		}
		return $this->language;
	}
	
	/*
	* getLangSelect()
	*
	* Returns a select box to choose the default labguage
	*
	* @return string $lang_select
	*/
	function getLangSelect() {
		$superCage = Inspekt::makeSuperCage();
		
		if(!is_array($this->available_languages)) {
			include_once('include/select_lang.inc.php');
			$this->available_languages = $available_languages;
		}
		
		$lang_select = '<select name="lang_list">' . "\n";
		foreach($this->available_languages as $lang_code => $lang_array) {
			$lang_select .= "				    	<option " . (($this->config['lang'] == $lang_array[1]) ? 'selected' : '') . " value=\"{$lang_array[1]}\">{$lang_array[1]}</option>" . "\n";
		}
		$lang_select .= '				</select>';
		
		return $lang_select;
	}
	
	/*
	* checkFiles()
	*
	* Checks if all mandatory files are available via versioncheck.php
	* The returned array has an element 'status' to indicate if it went fine.
	*
	* @return array $fileCheck
	*/
	function checkFiles() {
		return $fileCheck;
	}
	
	/*
	* checkPermissionAndExist()
	*
	* Checks if all folders have the right permissions and exist
	*
	* @return bool $peCheck
	*/
	function checkPermissionAndExist() {
		$peCheck = true;
		$files_to_check = array(
			'./albums'	=> array('777', '755'),
			'./include'	=> array('777', '755'),
			'./albums/userpics'	=> array('777', '755'),
			'./albums/edit'		=> array('777', '755'),
		);
		$only_folders = array(
			'./sql',
		);
		clearstatcache(); 
		$this->temp_data = "<tr><td align=\"center\"><table><tr><td><b>{$this->language['directory']}</b></td><td width=\"25%\"><b>{$this->language['c_mode']}</b></td><td width=\"25%\"><b>{$this->language['r_mode']}</b></td><td width=\"10%\"><b>{$this->language['status']}</b></td></tr>";
		foreach($files_to_check as $file => $perm) {
			$or = '';
			foreach($perm as $p){
				$or .= " '" . $p . "' " . $this->language['or'];
			}
			$or = substr($or, 0, (strlen($or) - 3));
			//check folder existance
			if(!is_dir($file)) {
				$peCheck = false;
				$this->error .= sprintf($this->language['subdir_called'], $file) . '<br />';
				$this->temp_data .= "<tr><td>$file</td><td>{$this->language['n_a']}</td><td>$or</td><td>{$this->language['nok']}</td></tr>";
			} else {
				//check permissions
				$mode = substr(sprintf('%o', fileperms($file)), -3);  
				if(!in_array($mode, $perm)) {
					$peCheck = false;
					$this->error .= sprintf($this->language['perm_error'], $file, $or) . " '" . $perm . "'.<br />";
					$this->temp_data .= "<tr><td>$file</td><td>'$mode'</td><td>$or</td><td>{$this->language['nok']}</td></tr>";
				} else {
					$this->temp_data .= "<tr><td>$file</td><td>'$mode'</td><td>$or</td><td>{$this->language['ok']}</td></tr>";
				}
			}
			
		}
		foreach($only_folders as $folder) {
			//check folder existance
			if(!is_dir($folder)) {
				$peCheck = false;
				$this->error .= sprintf($this->language['subdir_called'], $folder) . '<br />';
				$this->temp_data .= "<tr><td>$folder</td><td colspan=\"2\">{$this->language['no_dir']}</td><td>{$this->language['nok']}</td></tr>";
			} else {
				$this->temp_data .= "<tr><td>$folder</td><td colspan=\"2\">{$this->language['dir_ok']}</td><td>{$this->language['ok']}</td></tr>";
			}
		}
		$this->temp_data .= '</table></td></tr>';
		return $peCheck;
	}
	
	/*
	* checkImageProcessor()
	*
	* Checks which image processors are available and tries to find IM.
	*
	* @return array $imagesProcessors
	*/
	function checkImageProcessor() {
		if($im = $this->getIM()) {
			$imagesProcessors['im'] = $im;
		}
		$gd = $this->getGDVersion();
		switch($gd) {
			case 1:
				//check basic functionality
				if($this->checkBasicGD(1)) {
					$imagesProcessors['gd1'] = 'installed';
				}
				break;
			case 2:
				//check basic functionalityµ
				if($this->checkBasicGD()) {
					$imagesProcessors['gd2'] = 'installed';
				}
				break;
			default:
				break;
		}
		return $imagesProcessors;
	}
	
	/**
	* getGDVersion()
	*
	* Get which version of GD is installed, if any. 
	* Returns the version (1 or 2) of the GD extension.
	* 
	* @return int $version
	*/
	function getGDVersion() {	
		if (!extension_loaded('gd')) {
			$version = 0; 
		} else {
			// Use the gd_info() function if possible.
			if (function_exists('gd_info')) {
				$ver_info = gd_info();
				preg_match('/\d/', $ver_info['GD Version'], $match);
				$version = $match[0];
			} else {
				$gd_functions = get_extension_funcs('gd');
				if(in_array('imagecreatetruecolor', $gd_functions)) {
					$version = 2;
				} elseif(in_array('imagecreate', $gd_functions)) {
					$version = 1;
				} else {
					$version = 0;
				}
			}
		}
		return $version;
	} 
	
	/*
	* checkBasicGD()
	*
	* Some basic testing if GD is working correctly.
	*
	* @param int $gd_version
	*
	* @return bool $results
	*/
	function checkBasicGD($gd_version = 2) {
		if($gd_version == 1) {
			$im = imagecreate(1, 1);
			$tst_image = "albums/gd1.jpg";
			imagejpeg($im, $tst_image);
			$size = @getimagesize($tst_image);
			@unlink($tst_image);
			if($size[2] == 2) {
				return true;
			} else {
				return false;
			}
		} else {
			$im = imagecreatetruecolor(1, 1);
			$tst_image = "albums/gd2.jpg";
			imagejpeg($im, $tst_image);
			$size = @getimagesize($tst_image);
			@unlink($tst_image);
			if($size[2] == 2) {
				return true;
			} else {
				return false;
			}	
		}
	}
	
	/*
	* getIM()
	*
	* Some basic testing if IM is installed & working correctly.
	*
	* @return array $im
	*/
	function getIM() {
		$im_paths = array(
			'convert',
			'/imagemagick/convert',
			'/imagemagick/bin/convert',
			'/local/bin/convert',
			'/local/bin/imagemagick/convert',
			'/local/bin/imagemagick/bin/convert',
			'/usr/local/convert',
			'/usr/local/bin/convert',
			'/usr/local/bin/imagemagick/convert',
			'/usr/local/bin/imagemagick/bin/convert',
			'/usr/bin/convert',
			'C:/Program Files/ImageMagick/convert.exe',
			'C:/ImageMagick/convert.exe',
			'/usr/bin/imagemagick/convert',
			'/usr/bin/imagemagick/bin/convert',
			'/usr/sbin/convert',
			'/bin/convert',
			'/bin/imagemagick/convert',
			'/bin/imagemagick/bin/convert'
			);
		if (!preg_match('|[/\\\\]\Z|', $this->config['im_path']) && $this->config['im_path'] != '') {
            $this->config['im_path'] .= '/';
		}
		if($this->config['im_path'] != '') {
			$im_paths[] = $this->config['im_path'] . 'convert';
			$im_paths[] = '"' . $this->config['im_path'] . 'convert.exe"';
		}
		
		//check if IM is on default path
		foreach ($im_paths as $key => $path) {
			if(stristr($path, ':/')) {
				$path = '"' . $path . '"';
			}
			$command = "$path --version";
			@exec($command, $exec_output, $exec_retval);
			$version = @$exec_output[0] . @$exec_output[1];
			if($version != '') {
				//check for spaces in the path
				if(preg_match('/ /', $path)) {
					$path = str_replace(array('.exe', '"'), '',$path);
					$path = substr($path, 0, (strlen($path) - 7));
					$this->error = sprintf($this->language['im_path_space'], $path);
					return false;
				}
				//do a real image conversion check
				$tst_image = "albums/userpics/im.gif";
				exec ("$path images/coppermine-logo.png $tst_image", $output, $result);
				$size = @getimagesize($tst_image);
				@unlink($tst_image);
				$im_installed = ($size[2] == 1);
				//convert tool found, but did not work as expected
				if (!$im_installed) {
					$this->error = sprintf($this->language['im_no_convert_ex'], $path);
					return false;
				}
				//convert tool returned errors
				if ($result && count($output)) {
					$this->error = $this->language['conv_said'] . '<br /></pre>';
					foreach($output as $line) $this->error .= htmlspecialchars($line);
					$this->error .= "</pre>";
					return false;
            	}
				
				//all went fine, return version info
				$im = array(
					'version' => $version, 
					'path' => $path
				);
				return $im;
				break;
			}
		}
		return false;
		
	}
	
	/*
	* checkSqlConnection()
	*
	* Tests if we can create a MySql connection
	*
	* @return bool
	*/
	function checkSqlConnection() {
		//we only need 1 connection
		if($this->mysql_connected) {
			return true;
		} else {
			$user = $this->config['db_user'];
			$password = $this->config['db_password'];
			$host = $this->config['db_host'];
			(isset($this->config['db_name'])) ? $db_name = $this->config['db_name'] : $db_name = '';
			if (!function_exists('mysql_connect')){
				$this->error = $this->language['no_mysql_support'];
				return false;
			} elseif (! $connect_id = @mysql_connect($host, $user, $password)) {
				$this->error = $this->language['no_mysql_conn'] . '<br />' . $this->language['mysql_error'] . mysql_error();
				return false;
			} elseif ($db_name != '') {
				if( !mysql_select_db($db_name, $connect_id)) {
					$this->error = sprintf($this->language['mysql_wrong_db'], $db_name);
					return false;
				}
			}
			$this->mysql_connection = $connect_id;
			$this->mysql_connected = true;
			return true;
		}
	}
	
	/*
	* getMysqlDbs()
	*
	* Gets all available mysql databases to create coppermine in.
	* If users doesn't have permission, it returns false.
	*
	* @return string $db_select
	*/
	function getMysqlDbs() {
		if(!$this->mysql_connected) {
			//test connection
			if(!$this->checkSqlConnection()) {
				return false;
			}
		}
		if($db_list = mysql_list_dbs($this->mysql_connection)) {
			$db_select = '<select name="db_name">';
			while ($row = mysql_fetch_object($db_list)) {
				$db = $row->Database;
				($db == $this->config['db_name']) ? $sel = ' selected="selected"' : $sel = '';
				$db_select .= '<option name="' . $db . '"' . $sel . ' >' . $db . '</option>';
			}
			$db_select .= '</select>';
			return $db_select;
		} else {
			//probably no permission to do this.
			$this->error = $this->language['mysql_no_sel_dbs'] . '<br />' . $this->language['mysql_error'] . '<br />' . mysql_error($this->mysql_connection);
			return false;
		}
	}
	
	/*
	* createMysqlDb()
	*
	* Tries to create CPG database.
	* If users doesn't have permission, it returns false.
	*
	* @return bool
	*/
	function createMysqlDb($db_name) {
		if(!$this->mysql_connected) {
			//test connection
			if(!$this->checkSqlConnection()) {
				return false;
			}
		}
		$query = 'CREATE DATABASE ' . $db_name;
		if(!mysql_query($query, $this->mysql_connection)) {
			$this->error = $this->language['mysql_no_create_db'] . '<br />' . $this->language['mysql_error'] . '<br />' . mysql_error($this->mysql_connection);
			return false;
		} else {
			$this->setTmpConfig('db_name', $db_name);
		}
		return true;
	}
	
	/*
	* populateMysqlDb()
	*
	* Executes sql file commands in db
	*
	* @return bool
	*/
	function populateMysqlDb() {
		//check if all config values are present
		if(!isset($this->config['thumb_method'])) 	{ $this->error = $this->language['no_thumb_method']; 	return false;}

		if(!$this->mysql_connected) {
			//test connection
			if(!$this->checkSqlConnection()) {
				return false;
			}
		}
		if (@get_magic_quotes_runtime()) set_magic_quotes_runtime(0);
		$db_schema = "sql/schema.sql";
		$db_basic = "sql/basic.sql";
		if (($sch_open = fopen($db_schema, 'r')) === FALSE){
			$this->error = sprintf($this->language['sql_file_not_found'], $db_schema);
			return false;
		} else {
			$sql_query = fread($sch_open, filesize($db_schema));
			if (($bas_open = fopen($db_basic, 'r')) === FALSE){
				$this->error = sprintf($this->language['sql_file_not_found'], $db_basic);
			return false;
			} else {
				$sql_query .= fread($bas_open, filesize($db_basic));
			}
		}
		$superCage = Inspekt::makeSuperCage();
		require_once('include/sql_parse.php');
		$possibilities = array('REDIRECT_URL', 'PHP_SELF', 'SCRIPT_URL', 'SCRIPT_NAME','SCRIPT_FILENAME');
		foreach ($possibilities as $test){
			if ($matches = $superCage->server->getMatched($test, '/([^\/]+\.php)$/')) {
				$CPG_PHP_SELF = $matches[1];
				break;
			}
		}
		
		$gallery_dir = strtr(dirname($CPG_PHP_SELF), '\\', '/');
		$gallery_url_prefix = 'http://' . $superCage->server->getEscaped('HTTP_HOST') . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');
					
		// Set configuration values for image package
		$sql_query .= "REPLACE INTO CPG_config VALUES ('thumb_method', '{$this->config['thumb_method']}');\n";
		$sql_query .= "REPLACE INTO CPG_config VALUES ('impath', '{$this->config['im_path']}');\n";
		$sql_query .= "REPLACE INTO CPG_config VALUES ('ecards_more_pic_target', '$gallery_url_prefix');\n";
		$sql_query .= "REPLACE INTO CPG_config VALUES ('gallery_admin_email', '{$this->config['admin_email']}');\n";
		// Enable silly_safe_mode if test has shown that it is not configured properly
		if ($this->checkSillySafeMode()) {
			$sql_query .= "REPLACE INTO CPG_config VALUES ('silly_safe_mode', '1');\n";
		}
		// Test write permissions for main dir
		if (!is_writable('.')) {
			$sql_query .= "REPLACE INTO CPG_config VALUES ('default_dir_mode', '0777');\n";
			$sql_query .= "REPLACE INTO CPG_config VALUES ('default_file_mode', '0666');\n";
		}
		// Update table prefix
		$sql_query = preg_replace('/CPG_/', $this->config['db_prefix'], $sql_query);
	
		$sql_query = remove_remarks($sql_query);
		$sql_query = split_sql_file($sql_query, ';');
		
		$this->temp_data .= '<tr><td>';
		foreach($sql_query as $q) {
			$is_table = false;
			if (preg_match('/(CREATE TABLE IF NOT EXISTS `?|CREATE TABLE `?)([\w]*)`?/i', $q, $table_match)) {
				$table = $table_match[2];
				$is_table = true;
			}
			if (! mysql_query($q, $this->mysql_connection)) {
				$this->error = $this->language['mysql_error'] . mysql_error($this->mysql_connection) . ' ' . $this->language['on_q'] . " '$q'";
				if($is_table) $this->temp_data .= "<br />" . sprintf($this->language['create_table'], $table) . '&nbsp;&nbsp;&nbsp;&nbsp;' . $this->language['status'] . ':... ' . $this->language['nok'];
				return false;
			} else {
				if($is_table) $this->temp_data .= "<br />" . sprintf($this->language['create_table'], $table). '&nbsp;&nbsp;&nbsp;&nbsp;' . $this->language['status'] . ':... ' . $this->language['ok'];
			}
		}
		$this->temp_data .= '<br /><br /><br /></td></tr>';
		return true;
	}
	
	/*
	* createAdmin()
	*
	* Creates the Coppermine admin.
	*
	* @return bool
	*/
	function createAdmin() {
		if(!isset($this->config['admin_username']) || $this->config['admin_username'] == '') { $this->error = $this->language['no_admin_username']; 	return false;}
		if(!isset($this->config['admin_password']) || $this->config['admin_password'] == '') { $this->error = $this->language['no_admin_password']; 	return false;}
		if(!isset($this->config['admin_email']) || $this->config['admin_email'] == '') 	{ $this->error = $this->language['no_admin_email']; 	return false;}
		
		// Insert the admin account
		$sql_query .= "INSERT INTO {$this->config['db_prefix']}users (user_id, user_group, user_active, user_name, user_password, user_lastvisit, user_regdate, user_group_list, user_email, user_profile1, user_profile2, user_profile3, user_profile4, user_profile5, user_profile6, user_actkey ) VALUES (1, 1, 'YES', '{$this->config['admin_username']}', md5('{$this->config['admin_password']}'), NOW(), NOW(), '', '{$this->config['admin_email']}', '', '', '', '', '', '', '');\n";
		if(!$this->mysql_connected) {
			//test connection
			if(!$this->checkSqlConnection()) {
				return false;
			}
		}
		if (! mysql_query($sql_query, $this->mysql_connection)) {
			$this->error = $this->language['mysql_error'] . mysql_error($this->mysql_connection) . ' ' . $this->language['on_q'] . " '$sql_query'";
			return false;
		}
		return true;
	}
	
	
	/*
	* checkSillySafeMode()
	*
	* Test if safe mode is misconfigured
	*
	* @return bool
	*/
	function checkSillySafeMode() {
		$test_file = "albums/userpics/dummy/dummy.txt";
		@mkdir(dirname($test_file), 0755);
		$fd = @fopen($test_file, 'w');
		if (!$fd) {
			@rmdir(dirname($test_file));
			return true;
		}
		fclose($fd);
		@unlink($test_file);
		@rmdir(dirname($test_file));
		return false;
	}
	
	/*
	* finalCheck()
	*
	* Check if everything is configured correctly
	*
	* @return array $results
	*/
	function writeConfig() {
		//this is used to prevent sc#rwing up the color coding in my editor.
		$end_php_tag = '?>';
		$config = <<<EOT
<?php
// Coppermine configuration file
// MySQL configuration
\$CONFIG['dbserver'] =                         '{$this->config['db_host']}';        // Your database server
\$CONFIG['dbuser'] =                         '{$this->config['db_user']}';        // Your mysql username
\$CONFIG['dbpass'] =                         '{$this->config['db_password']}';                // Your mysql password
\$CONFIG['dbname'] =                         '{$this->config['db_name']}';        // Your mysql database name


// MySQL TABLE NAMES PREFIX
\$CONFIG['TABLE_PREFIX'] =                '{$this->config['db_prefix']}';
$end_php_tag
EOT;
		if ($fd = @fopen('include/config.inc.php', 'wb')) {
			fwrite($fd, $config);
			fclose($fd);
		} else {
			$this->error = '<hr /><br />' . $this->language['unable_write_config'] . '<br /><br />';
		}
	}
}
?>