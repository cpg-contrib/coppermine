<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/


// ------------------------- HTML OUTPUT FUNCTIONS ------------------------- //
function html_header($title)
{

    ?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?php echo $title; ?></title>
    <link type="text/css" rel="stylesheet" href="installer.css">
</head>
<body>

<?php
}

function html_logo()
{

    ?>
      
    <img class="logo" src="images/logo.gif">
<?php
}


function html_error($error_msg = '')
{
    global $im_installed;

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
    global $DFLT;

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
                It's recommended to <a href="versioncheck.php">check your file versions</a> if you just upgraded from an older version of coppermine.<br />
                If you didn't (or you don't want to check), you can go to <a href="index.php">your gallery's start page</a><br />
        </td>
                </form>
       </tr>
      </table>
<?php
}

function html_footer()
{

    ?>
</body>
</html>

<?php
}


?>