<?php 
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR                                     //
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

// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting (E_ALL ^ E_NOTICE);

require ('include/sql_parse.php');
require ('include/config.inc.php');
// ---------------------------- TEST PREREQUIRED --------------------------- //
function test_fs()
{
    global $errors, $DFLT; 
    // No Filesystem Updates yet
} 
// ----------------------------- TEST FUNCTIONS ---------------------------- //
function test_sql_connection()
{
    global $errors, $HTTP_POST_VARS, $CONFIG;

    if (! $connect_id = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass'])) {
        $errors .= "<hr /><br />Could not create a mySQL connection, please check the SQL values in include/config.inc.php<br /><br />MySQL error was : " . mysql_error() . "<br /><br />";
    } elseif (! mysql_select_db($CONFIG['dbname'], $connect_id)) {
        $errors .= "<hr /><br />mySQL could not locate a database called '{$CONFIG['dbname']}' please check the value entered for this in include/config.inc.php<br /><br />";
    } 
} 
// ------------------------- HTML OUTPUT FUNCTIONS ------------------------- //
function html_header()
{

    ?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Coppermine - Upgrade</title><link type="text/css" rel="stylesheet" href="installer.css">
</head>
<body>
 <div align="center">
  <div style="width:600px;">
<?php
} 

function html_logo()
{

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
        <td valign="top" bgcolor="#EFEFEF"><img src="images/logo.gif"><br />
        </td>
       </tr>
      </table>
<?php
} 

function html_prereq_errors($error_msg)
{

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
	    <form action="install.php">
        <td class="tableh1" colspan="2"><h2>Welcome to Coppermine installation</h2>
        </td>
       </tr>
       <tr>
        <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> Before you continue with the Coppermine upgrade, there are some problems that need to be fixed.<br /><br /><b><?php echo $error_msg ?></b>Once you are done, hit the "Try again" button.<br />
        </td>
       </tr>
       <tr>
        <td colspan="2" align="center"><br />
       	 <input type="submit" value="Try again !"><br /><br />
        </td>
		</form>
       </tr>
      </table>
<?php
} 

function html_error($error_msg = '')
{
    global $HTTP_POST_VARS, $im_installed;

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
	    <form action="upgrade.php" method="post">
        <td class="tableh1" colspan="2"><h2>Welcome to the Coppermine upgrade program</h2>
        </td>
       </tr>
<?php
    if ($error_msg) {

        ?>
       <tr>
        <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> The following errors were encountered and need to be corrected first:<br /><br /><b><?php echo $error_msg ?></b>
        </td>
       </tr>
<?php
    } 

    ?>
    
       </tr>
      </table>
<?php
} 

function html_install_success($notes)
{
    global $DFLT, $HTTP_POST_VARS;

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
	    <td class="tableh1" colspan="2"><h2>Upgrade completed</h2>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> Coppermine is now upgraded and ready to roll.<br /><?php echo $notes ?>
        </td>
       </tr>
       <tr>
        <td colspan="2" align="center" class="tableh2"><br />
       	 <a href="index.php">Let's continue !</a><br />
        </td>
		</form>
       </tr>
      </table>
<?php
} 

function html_footer()
{

    ?>
  </div>
 </div>
</body>
</html>
<noscript><plaintext>
<?php
} 
// ------------------------- SQL QUERIES TO CREATE TABLES ------------------ //
function update_tables()
{
    global $HTTP_POST_VARS, $HTTP_SERVER_VARS, $errors, $CONFIG;

    $PHP_SELF = $HTTP_SERVER_VARS['PHP_SELF'];
    $gallery_dir = strtr(dirname($PHP_SELF), '\\', '/');
    $gallery_url_prefix = 'http://' . $HTTP_SERVER_VARS['HTTP_HOST'] . $gallery_dir . (substr($gallery_dir, -1) == '/' ? '' : '/');

    $db_update = 'sql/update.sql';
    $sql_query = fread(fopen($db_update, 'r'), filesize($db_update)); 
    // Update table prefix
    $sql_query = preg_replace('/CPG_/', $CONFIG['TABLE_PREFIX'], $sql_query);

    $sql_query = remove_remarks($sql_query);
    $sql_query = split_sql_file($sql_query, ';');

    ?>
	<table class="maintable">
    <tr>
      <th colspan=2 class="tableh1">Performing Database Updates</th>
    </tr>
 <?php

    foreach($sql_query as $q) {
        echo "<tr><td class='tableb'>$q</td>";
        if (mysql_query($q)) {
            echo "<td class='updatesOK'>OK</td>";
        } else {
            echo "<td class='updatesFail'>Already Done</td>";
        } 
    } 
} 
// --------------------------------- MAIN CODE ----------------------------- //
// The defaults values
$table_prefix = $HTTP_POST_VARS['table_prefix'];
$DFLT = array('lck_f' => 'install.lock', // Name of install lock file
    'cfg_d' => 'include', // The config file dir
    'cfg_f' => 'include/config.inc.php', // The config file name
    'alb_d' => 'albums', // The album dir
    'upl_d' => 'userpics' // The uploaded pic dir
    );

$errors = '';
$notes = ''; 
// The installer
html_header();
html_logo();

test_fs();
if ($errors != '')
    html_prereq_errors($errors);
else {
    test_sql_connection();
    if ($errors == '')
        update_tables();
    else
        html_error($errors);
    if ($errors == '')
        html_install_success($notes);
    else
        html_error($errors);
} 

html_footer();

?>
