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


// ------------------------- HTML OUTPUT FUNCTIONS ------------------------- //
function html_prereq_errors($error_msg)
{
    ?>
    <h2>Welcome to Coppermine installation</h2>

    <form name="cpgform" id="cpgform" action="install.php">
    <h2 class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</h2>

        <p class="tableb"> Before you continue with the Coppermine upgrade, there are some problems that need to be fixed.<br /><br /><b><?php echo $error_msg ?></b>Once you are done, hit the "Try again" button.<br />
        </p>

        <div class="input">
        <input type="submit" value="Try again !" /><br /><br />
        </div>

        </form>

        <?php
}

function html_header($title, $charset = '')
{

    ?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title><?php echo $title; ?></title>
        <?php if ($charset !='') echo '<meta http-equiv="Content-Type" content="text/html; charset='.$charset.'" />'; ?>
    <meta http-equiv="Pragma" content="no-cache" />
    <link type="text/css" rel="stylesheet" href="installer.css">
</head>
<body>

<?php
}

function html_logo()
{
    echo '<img class="logo" src="images/coppermine-logo.png" border="0" alt="" />';
}


function html_error($error_msg = '')
{
    global $im_installed;

    ?>
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
            <form name="cpgform" id="cpgform" action="upgrade.php" method="post">
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
//Coppermine is now upgraded and ready to roll.
    $loginaddress = '<a href="login.php?referer=charsetmgr.php">';
    ?>
<h2>Upgrade completed</h2>

  <!--  <p class="tableb">Please <?php echo $loginaddress ?>login</a> and proceed to the <a href="charsetmgr.php">charset manager</a> to convert the encoding of your database, if needed.</p> -->
        <p style="align:center" class="tableh2">
                It's recommended to <a href="versioncheck.php">check your file versions</a> if you just upgraded from an older version of coppermine.<br />
                If you didn't (or you don't want to check), you can go to <a href="index.php">your gallery's start page</a><br />
</p>
                    <?php
}

function html_footer()
{

    ?>
</body>
</html>

<?php
}

function html_auth_box($method){
?>
    <h2>Welcome to Coppermine update</h2>

    <form name="cpgform" id="cpgform" method="post" action="update.php">
    <h2 class="error">Authentication</h2>

        <p class="tableb" align="center">
		<?php if($method=='MySQL'){
			echo 'Could not authenticate you via your admin details, if you think you entered the wrong details, click <a href=\'update.php\'>here</a> and try again.<br />Else, you can try to login with you MySQL account:';
		}else{
			echo 'Please provide your <b>admin</b> account details:';
		}
        ?>
        </p>

        <div class="input">
        Username: <input type="text" name="user" /><br />
        Password: <input type="password" name="pass" /><br />
        <input type="hidden" name="method" value="<?php echo $method; ?>" /><br />
        <input type="submit" value="Login" /><br /><br />
        </div>

        </form>

<?php
}


?>