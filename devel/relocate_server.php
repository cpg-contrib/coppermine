<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.1                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //

// This is an experimental server relocation script.

// Common information
global $lang, $config_inc;

// Load up the name/language array
$lang = array(
	'dbserver' => 'Your database server',
	'dbuser' => 'Your MySQL username',
	'dbpass' => 'Your MySQL password',
	'dbname' => 'Your MySQL database name',
	'TABLE_PREFIX' => 'Your MySQL table names prefix',
	'ecards_more_pic_target' => 'URL of your coppermine gallery folder',
	'gallery_admin_email' => 'Gallery administrator email',
	'smtp_host' => 'SMTP Host',
	'smtp_username' => 'SMTP Username',
	'smtp_password' => 'SMTP Password',
	'impath' => 'Path to ImageMagick \'convert\' utility',
	'thumb_method' => 'Method for resizing images',
	'gd1' => 'GD Version 1.x',
	'gd2' => 'GD Version 2.x',
	'im' => 'ImageMagick'
);

session_start();

// Functions

function pageheader()
{
echo '<html>
<head>
<title>Relocate Coppermine</title>
<style type="text/css">
body {
  font-family : Verdana, Arial, Helvetica, sans-serif;
  font-size: 12px;
  background : #CCCCCC;
  color : Black;
  margin: 0px;
}

table {
  font-size: 12px;
}

h1 {
  font-weight: bold;
  font-size: 22px;
  font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
  text-decoration: underline;
  line-height : 120%;
  color : #000000;
  margin: 2px;
  text-align: center;
}

h2 {
  font-weight: normal;
  font-style: italic;
  font-size: 18px;
  font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
  color: #000000;
  margin: 2px;
  text-align: center;
}

li {
  margin-left: 10px;
  margin-top: 4px;
  margin-bottom: 4px;
  padding: 0px;
  list-style-position: outside;
  list-style-type: disc;
}

.textinput {
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: 100%;
  padding-right: 3px;
  padding-left: 3px;
}

.maintable {
  border: 1px solid #0E72A4;
  border-inside: 1px solid #0E72A4;
  background-color: #efefef;
  margin-top: 1px;
  margin-bottom: 1px;
}

TD.border {
  padding-right: 5px;
}

TR.bold {
  font-weight: bold;
}

.button {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 100%;
  border: 1px solid #005D8C;
  background-position : bottom;
}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="20" cellspacing="20">
<tr>
<td valign="top" style="border: 1px solid #666666;background-color:#FFFFFF;"><h1>Relocate Coppermine</h1>
';
}

function pagefooter()
{
echo '
</td></tr></table></p>
</body></html>
';
}

function introduction()
{
  echo '
<p>This script will help you relocate your Coppermine gallery to another server.</p>
<p>The following items must be completed before using this script:</p>
<ul>
<li>Move all the Coppermine files to their new location.</li>
<li>Set proper file and directory permissions per the documentation.</li>
<li>Create a new database for Coppermine.</li>
<li>Create a database user with permissions necessary to administer the Coppermine database.</li>
<li>Upload this script to your root Coppermine directory.</li>
</ul>
<p>
If all of these steps are complete, click the continue button.</p>
<form name="mysql" method="post" action="' . $_SERVER["PHP_SELF"] . '">
<p><input type="submit" class="button" value="Continue">
</p>
<input type="hidden" name="continue" value="1">
</form>
';
}

function config_inc($errors='')
{
  global $lang;

  if (!$_SESSION['config_inc'])
  {
  // Get the data from config.inc.php and read it into an array
  $line_array = file("include/config.inc.php");

  // We have the array, now to find the variables and their values...
  foreach ($line_array as $values)
  {
	  if (strpos($values, '='))
	  {
		  $tempc = substr($values, 0, strpos($values, '='));
		  $value = str_replace($tempc.'=', '', $values);
		  $tempc = str_replace('$CONFIG[\'', '', $tempc);
		  $tempc = str_replace('\']', '', $tempc);
		  $value = str_replace("'", '', substr($value, 0, strpos($value, ";")));
		  $value = str_replace('"', '', $value);
		  $tempc = trim($tempc);
		  $value = trim($value);
		  $config_inc[$tempc]=$value;
    }
  }
  $_SESSION['config_inc'] = $config_inc;
  }
  // Let's see what we have!
  echo '<h2>Step 1: Edit your config.inc.php file</h2>
';
echo ($errors) ? '<br />' . $errors . '<br /><br />' : '<br /><br /><br />';
echo '<form name="mysql" method="post" action="' . $_SERVER["PHP_SELF"] . '">
<table class="maintable">
<tr class="bold"><td>Name</td>
<td>Old</td><td>New</td></tr>';
  foreach ($_SESSION['config_inc'] as $key => $value)
  {
	  echo '<tr><td class="border">' . $lang[$key] . '</td>
<td class="border">'. $value . '</td>
<td class="border"><input name="' . $key . '" type="text" size="30" maxlength="75"' . (isset($_SESSION['config_inc_new']) ? ' value="' . $_SESSION['config_inc_new'][$key] . '"' : '') . '></td></tr>
';
  }
  echo '</table>
<p>
<input type="submit" class="button" value="Continue">
</p>
<input type="hidden" name="continue" value="2">
</form>
<p>The left column contains the variables from your config.inc.php file.</p>
<p>The middle column contains the old values from your config.inc.php file.</p>
<p>Fill in the new values in the right column. If a value doesn\'t need to be changed, leave it blank.</p>';
}

function config_table($errors='')
{
  global $lang;
  
  // We need to know where the gallery is now located.
  $gallery_dir = strtr(dirname($_SERVER['PHP_SELF']), '\\', '/');
  $gallery_url_prefix = 'http://' . $_SERVER['HTTP_HOST'] . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');
  
  // Let's pull the info from the config table now.
  if (!$_SESSION['config_table'])
  {
  $result = mysql_query("select * from " . $_SESSION['config_inc_new']['TABLE_PREFIX'] . "config where name = 'ecards_more_pic_target' or name = 'gallery_admin_email' or name = 'smtp_host' or name = 'smtp_username' or name = 'smtp_password' or name = 'impath' or name = 'thumb_method'");
  while ($arr = mysql_fetch_array($result))
  {
    $temp[$arr['name']] = $arr['value'];
  }
  
  // Load the config table into the session variable
  
  $_SESSION['config_table'] = array(
      'ecards_more_pic_target' => $temp['ecards_more_pic_target'], 
      'gallery_admin_email' => $temp['gallery_admin_email'], 
      'smtp_host' => $temp['smtp_host'], 
      'smtp_password' => $temp['smtp_password'], 
      'smtp_username' => $temp['smtp_username'],
      'thumb_method' => $temp['thumb_method'],
      'impath' => $temp['impath']
    );
  }
  
  // Display the stuff
  echo '<h2>Step 2: Edit your ' . $_SESSION['config_inc_new']['TABLE_PREFIX'] .'config table</h2>
';
echo ($errors) ? '<br />' . $errors . '<br /><br />' : '<br /><br /><br />';
echo '<form name="mysql" method="post" action="' . $_SERVER["PHP_SELF"] . '">
<table class="maintable">
<tr class="bold"><td>Name</td>
<td>Old</td><td>New</td></tr>';
  foreach ($_SESSION['config_table'] as $key => $c)
  {
    echo '<tr><td class="border">'.$lang[$key] . '</td>
<td class="border">';
if ($key == 'thumb_method')
{
  echo $lang[$c] . '</td>
<td class="border"><select name="' . $key . '">';
  $value = $_SESSION['config_table_new']['thumb_method'] ? $_SESSION['config_table_new']['thumb_method'] : $c;
  $im_selected = ($value == 'im') ? 'selected="selected"' : '';
  $gd1_selected = ($value == 'gd1') ? 'selected="selected"' : '';
  $gd2_selected = ($value == 'gd2') ? 'selected="selected"' : '';
  echo '
<option value="im" ' . $im_selected . '>ImageMagick</option>
<option value="gd1" ' . $gd1_selected .'>GD version 1.x</option>
<option value="gd2" ' . $gd2_selected .'>GD version 2.x</option>
</select>';
}
else
{
  echo $c . '&nbsp;</td>
<td class="border"><input name="' . $key . '" type="text" size="30" maxlength="75"';
if (! isset($_SESSION['config_table_new']) && $key == 'ecards_more_pic_target')
  echo ' value="' . $gallery_url_prefix . '">';
elseif (isset($_SESSION['config_table_new']))
  echo ' value="' . $_SESSION['config_table_new'][$key] . '">';
}
echo '</td></tr>
';
  }
  echo '</table>
<p>
<input type="submit" class="button" value="Continue">
</p>
<input type="hidden" name="continue" value="3">
</form>
<p>The left column contains the variables from your config table.</p>
<p>The middle column contains the old values from your config table.</p>
<p>Fill in the new values in the right column.  The gallery url is already filled in for you.
If a value doesn\'t need to be changed, leave it blank.</p>';
}

function finalize()
{
  global $lang;
  echo '<h2>Step 3: Confirm your changes</h2>
';
  echo 'Your new config.inc.php settings:<br /><br />
';
  foreach ($_SESSION['config_inc_new'] as $key => $c)
  {
    echo $lang[$key] . ' : ' . $c . '<br />
';
  }
  echo '
<hr><br />Your new config table settings:<br /><br />
';
  foreach ($_SESSION['config_table_new'] as $key => $c)
  {
    echo $lang[$key] . ' : ' . ($key == 'thumb_method' ? $lang[$c] : $c) . '<br />
';
  }
  echo '
<hr><br /><br />If this is correct, click the continue button.  Otherwise, click the change button.<br /><br />
<form name="cont" method="post" action="' . $_SERVER['PHP_SELF'] . '">
<input type="submit" name="go" class="button" value="Continue">
<input type="submit" name="stop" class="button" value="Change">
<input type="hidden" name="continue" value="4">
</form>
';
}

function error_check()
{
  if ($_POST['continue'] == '2' || $_POST['continue'] =='4')
  {
    $config_inc_new = $_SESSION['config_inc_new'];
    if (! mysql_connect($config_inc_new['dbserver'], $config_inc_new['dbuser'], $config_inc_new['dbpass']))
      $errors = 'Could not create a MySQL connection.  Check your database server, username, and password and try again.';
    elseif (! mysql_select_db($config_inc_new['dbname']))
      $errors .= 'Could not connect to the database.  Check your database name and try again.';
    elseif (! mysql_query("select * from " . $config_inc_new['TABLE_PREFIX'] . "config"))
      $errors .= 'Could not find the config table.  Check your table prefix and try again.';
  }
  elseif ($_POST['continue'] == '3')
  {
    if ($_SESSION['config_table_new']['thumb_method'] == 'im' && !$_SESSION['config_table_new']['impath'])
    {
      $errors = 'You did not enter the path to the ImageMagick convert utility.  Check your path and try again.';
    }
      
  }
  return $errors;
}

function make_changes()
{
  global $lang;
  mysql_connect($_SESSION['config_inc_new']['dbserver'], $_SESSION['config_inc_new']['dbuser'], $_SESSION['config_inc_new']['dbpass']);
  mysql_select_db($_SESSION['config_inc_new']['dbname']);
  foreach ($_SESSION['config_table_new'] as $key => $c)
    mysql_query("update {$_SESSION['config_inc_new']['TABLE_PREFIX']}config set value = '$c' where name = '$key'");
  echo '<h2>Confirmation</h2>
Your database is updated.';
  $config = "<?php
// Coppermine configuration file
$silly_safe_mode
// MySQL configuration
\$CONFIG['dbserver'] =                       '{$_SESSION['config_inc_new']['dbserver']}';        // Your database server
\$CONFIG['dbuser'] =                         '{$_SESSION['config_inc_new']['dbuser']}';        // Your mysql username
\$CONFIG['dbpass'] =                         '{$_SESSION['config_inc_new']['dbpass']}';                // Your mysql password
\$CONFIG['dbname'] =                         '{$_SESSION['config_inc_new']['dbname']}';        // Your mysql database name


// MySQL TABLE NAMES PREFIX
\$CONFIG['TABLE_PREFIX'] =                '{$_SESSION['config_inc_new']['TABLE_PREFIX']}';
?>";
  @unlink('include/config.inc.php');
  if ($fd = @fopen('include/config.inc.php', 'wb')) {
    fwrite($fd, $config);
    fclose($fd);
    echo '<br /><br />Your config.inc.php file is updated.
<br /><br />Verify your Coppermine gallery is functioning correctly.';
  }
  else
  {
    echo '<br /><br />Unable to write the config file.<br /><br />
Verify the config.inc.php is writable and run this script again, or you can open your config.inc.php file and change these variables:<br /><br />';
foreach ($_SESSION['config_inc_new'] as $key => $c)
  echo $key . ' : ' . $c;
  }
  echo '
<br /><br />Delete this file immediately.<br /><br />
Enjoy your Coppermine gallery!
';
}

// Main code
pageheader();

$steps = $_POST['continue'];

switch($steps)
{
  case '1':
    config_inc();
    break;
  case '2':
    $_SESSION['config_inc_new'] = array(
      'dbserver' => $_POST['dbserver'] ? $_POST['dbserver'] : $_SESSION['config_inc']['dbserver'], 
      'dbuser' => $_POST['dbuser'] ? $_POST['dbuser'] : $_SESSION['config_inc']['dbuser'], 
      'dbpass' => $_POST['dbpass'] ? $_POST['dbpass'] : $_SESSION['config_inc']['dbpass'], 
      'dbname' => $_POST['dbname'] ? $_POST['dbname'] : $_SESSION['config_inc']['dbname'], 
      'TABLE_PREFIX' => $_POST['TABLE_PREFIX'] ? $_POST['TABLE_PREFIX'] : $_SESSION['config_inc']['TABLE_PREFIX']
    );
    $errors = error_check();
    if ($errors)
      config_inc($errors);
    else
      config_table();
    break;
  case '3':
    $_SESSION['config_table_new'] = array(
      'ecards_more_pic_target' => $_POST['ecards_more_pic_target'] ? $_POST['ecards_more_pic_target'] : $_SESSION['config_table']['ecards_more_pic_target'], 
      'gallery_admin_email' => $_POST['gallery_admin_email'] ? $_POST['gallery_admin_email'] : $_SESSION['config_table']['gallery_admin_email'], 
      'smtp_host' => $_POST['smtp_host'] ? $_POST['smtp_host'] : $_SESSION['config_table']['smtp_host'], 
      'smtp_password' => $_POST['smtp_password'] ? $_POST['smtp_password'] : $_SESSION['config_table']['smtp_password'], 
      'smtp_username' => $_POST['smtp_username'] ? $_POST['smtp_username'] : $_SESSION['config_table']['smtp_username'],
      'thumb_method' => $_POST['thumb_method'] ? $_POST['thumb_method'] : $_SESSION['config_table']['thumb_method'],
      'impath' => $_POST['impath'] ? $_POST['impath'] : $_SESSION['config_table']['impath']
    );
    $errors = error_check();
    if ($errors)
      config_table($errors);
    else
      finalize();
    break;
  case '4':
    if ($_POST['go'])
    {
      make_changes();
      session_destroy();
      break;
    }
    else
    {
      config_inc();
    }
    break;
  default:
    introduction();
    break;
}
pagefooter();
?>
