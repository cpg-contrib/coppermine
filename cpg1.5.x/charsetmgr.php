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

define('IN_COPPERMINE', true);
//define('DISPLAYIMAGE_PHP', true);
require('include/init.inc.php');


if (!GALLERY_ADMIN_MODE) die('Access denied');

// Displays a menu with a choice of charsets
function form_charset($optionvalue, $selected)
{
    global $CONFIG;


    $charsets = array(//'Default' => 'language file',
                      'Arabic' => 'iso-8859-6',
                      'Baltic' => 'iso-8859-4',
                      'Central European' => 'iso-8859-2',
                      'Chinese Simplified' => 'euc-cn',
                      'Chinese Traditional' => 'big5',
                      'Cyrillic (windows-1251)' => 'windows-1251',
                      'Cyrillic (koi8-r)' => 'koi8-r',
                      'Greek' => 'iso-8859-7',
                      'Hebrew' => 'iso-8859-8-i',
                      'Icelandic' => 'x-mac-icelandic',
                      'Japanese' => 'euc-jp',
                      'Korean' => 'euc-kr',
                      'Maltese' => 'iso-8859-3',
                      'Thai' => 'windows-874',
                      'Turkish' => 'iso-8859-9',
                      'Unicode' => 'utf-8',
                      'Vietnamese' => 'windows-1258',
                      'Western' => 'iso-8859-1'
                      );

    //$value = strtolower($CONFIG['charset']);

    echo "<select name=\"$optionvalue\">";
    foreach ($charsets as $country => $charset)
    {
        echo "<option value=\"$charset\" " . ($selected == $charset ? 'selected="selected"' : '') . ">$country ($charset)</option>\n";
    }
    echo "</select>";
}

// Converts a given column of a given table from one charset to another
function charset_convert($table_name, $column_name, $index_name, $charsetin, $charsetout, $doit = 0)
{
    global $CONFIG;
     $result = cpg_db_query("SELECT * FROM $table_name");

    while ($row = mysql_fetch_array($result))
    {
        if ($element = $row["$column_name"])
        {
            $elementid = $row[$index_name];
            if ($convstr = iconv($charsetin,$charsetout,$element))
            {

                $query = "UPDATE $table_name SET $column_name='".addslashes($convstr)."' WHERE $index_name=$elementid";
                $status = "<td>$query</td>";
                $conversion_possible = 1;
            }
            else
            {
                $convstr = $element;
                $status = "<td class=\"warning\">CONVERSION IMPOSSIBLE</td>";
                $conversion_possible = 0;
            }
            if ($doit)
            {

                if ($conversion_possible)
                {
                    $updateresult = cpg_db_query($query);
                    if ($updateresult )// check that the conversion was performed
                        $status = '<td class="done">DONE</td>';
                    else
                        $status = '<td class="failed">Query failed: '.mysql_error().' </td>';
                }
                else
                    $status = '<td >Query was impossible.</td>';

            }

            // We try to check if there are non-ascii characters in the string
            if (iconv($charsetin, 'us-ascii', $element))
                $asciionly = 1;
            else
                $asciionly = 0;

            // The test above does not work, so the user has to check all the strings:
            $asciionly = 0;

                echo '<tr><td class="'.($asciionly ? 'nocheck' : 'check')."\">$convstr</td><td>$table_name</td><td>$column_name</td><td>$elementid</td>$status</tr>\n";
        }


    }
    return $conversion_possible;


}

// Either checks or carries out the conversion in all the necessary fields
function register_changes()
{
    global $CONFIG;
    $superCage = Inspekt::makeSuperCage();

    //if (count($_POST) > 0) {
        if ($superCage->post->keyExists('check') ||$superCage->post->keyExists('convert')) {
        if ($superCage->post->keyExists('check')) {
            $doconvert = 0;
        } else if ($superCage->post->keyExists('convert')) {
            $doconvert = 1;
        }

        if (isset($doconvert)) // ambiguous! it means: if a button has been pushed!
        {
            //$charsetin = $_POST['charset_in'];
            $charsetin = $superCage->post->getEscaped('charset_in');
            //$charsetout = $_POST['charset_out'];
            $charsetout = $superCage->post->getEscaped('charset_out');

            // elements of the database that need converting
            // the first element in the array is the id name of the table
            $affected_elements = array(
                                       $CONFIG['TABLE_ALBUMS'] =>
                                       array('aid', 'title', 'description', 'keyword'),
                                       $CONFIG['TABLE_PICTURES'] =>
                                       array('pid', 'title', 'caption', 'keywords'),
                                       $CONFIG['TABLE_COMMENTS'] =>
                                       array('msg_id', 'msg_author', 'msg_body'),
                                       $CONFIG['TABLE_CATEGORIES'] =>
                                       array('cid', 'name', 'description'),
                                       $CONFIG['TABLE_USERGROUPS'] =>
                                       array('group_id', 'group_name'),
                                       $CONFIG['TABLE_USERS'] =>
                                       array('user_id', 'user_name', 'user_password', 'user_profile1', 'user_profile2', 'user_profile3', 'user_profile4', 'user_profile5', 'user_profile6')
                                       );


            header("Content-Type: text/html; charset=$charsetout");


            //echo $charsetin . " " .$charsetout;
            if (!$doconvert)
            {
                $windowtitle = "Charset Manager - 2/3 - Check";
                $title = "2/3 - Checking conversion from <strong>$charsetin</strong> to <strong>$charsetout</strong>";
            }
            else if ($doconvert)
            {
                $windowtitle = "Charset Manager - 3/3 - Conversion";
                $title = "3/3 - Converting from <strong>$charsetin</strong> to <strong>$charsetout</strong>";
            }
            html_header($windowtitle, $charsetout);
            html_logo();
            echo "<h1>$title</h1>";
            echo '<table border="1" class="charsetchecktable" cellpadding="3" cellspacing="0"  style="margin:auto;">';
            if (!$doconvert)
                echo '<p class="warning">You <strong>must check</strong> that all the cells in <span class="check">blue</span> are displayed properly.</p>';
            echo "<tr><th>String</th><th>Table</th><th>Column</th><th>Id</th><th>".($doconvert? "Result" : "Query")."</th></tr>";
            foreach($affected_elements as $table => $columns)
                for ($i = 1; $i < count($columns); ++$i)
                {

                    charset_convert($table, $columns[$i], $columns[0], $charsetin, $charsetout, $doconvert);

                }
                echo '</table>';
            if (!$doconvert)
            {
                echo  '<form action="'.$CPG_PHP_SELF.'" method="post" name="cpgform" id="cpgform">';
                echo '<input type="hidden" name="charset_in" value="'.$charsetin."\" />\n";
echo '<input type="hidden" name="charset_out" value="'.$charsetout."\" />\n";
echo <<<EOT
    <div class="warning">
    <p>Before converting you <strong>must</strong>:</p>
    <ol>
    <li>Make a backup of your database. <span class="bigwarning">A malfunction of this script will result in the partial or complete loss or corruption of your comments and other string data containing non-ascii characters.</span></li>
    <li>Check that all the strings above in <span class="check">blue</span> are displayed correctly.
    </ol>
    </div>
EOT;
echo '<div class="input"><input type="submit" class="button" name="convert" value="Convert" /></div>';
                echo '</form>';
            }
            if ($doconvert)
            {
                // the script has succeeded (hopefully): we change the charset accordingly in the database
                cpg_config_set('charset', $charsetout);

                echo <<<EOT
                    <div class="warning">
                    <p>The conversion has been carried out.<br/>
                If you did not get any errors, for security reasons, you may now <strong>remove the file charsetmgr.php</strong>, or make it unaccessible, since you will not need this file anymore.<br/>
                    You may now <a href="index.php">proceed to the main page.</a>
                    </p>
                    </div>
EOT;

            }

                    html_footer();
                exit;
        }
    }
}

function html_prereq_errors($error_msg)
{
    echo <<< EOT
    <h2>Welcome to Coppermine installation</h2>

    <form name="cpgform" id="cpgform" action="install.php">
    <h2 class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</h2>

        <p class="tableb"> Before you continue with the Coppermine upgrade, there are some problems that need to be fixed.<br /><br />
            <b>{$error_msg}</b>Once you are done, hit the "Try again" button.<br />
        </p>

        <div class="input">
        <input type="submit" value="Try again !" /><br /><br />
        </div>

        </form>

EOT;
}

function html_header($title, $charset = '')
{
    $charset = ($charset !='') ? '<meta http-equiv="Content-Type" content="text/html; charset=' . $charset . '" />' : '';
    echo <<< EOT
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>{$title}</title>
    $charset
    <meta http-equiv="Pragma" content="no-cache" />
    <link type="text/css" rel="stylesheet" href="installer.css">
</head>
<body>

EOT;
}

function html_logo()
{
    echo '<img class="logo" src="images/coppermine-logo.png" border="0" alt="" />';
}


function html_error($error_msg = '')
{
    global $im_installed;

    echo <<< EOT
      <table width="100%" border="0" cellpadding="0" cellspacing="1" class="maintable">
       <tr>
            <form name="cpgform" id="cpgform" action="upgrade.php" method="post">
        <td class="tableh1" colspan="2"><h2>Welcome to the Coppermine upgrade program</h2>
        </td>
       </tr>

EOT;
    if ($error_msg) {
        echo <<< EOT
       <tr>
        <td class="tableh2" colspan="2" align="center"><span class="error">&#149;&nbsp;&#149;&nbsp;&#149;&nbsp;ERROR&nbsp;&#149;&nbsp;&#149;&nbsp;&#149;</span>
        </td>
       </tr>
       <tr>
        <td class="tableb" colspan="2"> The following errors were encountered and need to be corrected first:<br /><br /><b>{$error_msg}</b>
        </td>
       </tr>

EOT;
    }

    echo <<< EOT
       </tr>
      </table>

EOT;
}


function html_install_success($notes)
{
    global $DFLT;
    // Coppermine is now upgraded and ready to roll.
    $loginaddress = '<a href="login.php?referer=charsetmgr.php">';
    echo <<< EOT
<h2>Upgrade completed</h2>

  <!--  <p class="tableb">Please {$loginaddress} login</a> and proceed to the <a href="charsetmgr.php">charset manager</a> to convert the encoding of your database, if needed.</p> -->
        <p style="align:center" class="tableh2">
                It's recommended to <a href="versioncheck.php">check your file versions</a> if you just upgraded from an older version of coppermine.<br />
                If you didn't (or you don't want to check), you can go to <a href="index.php">your gallery's start page</a><br />
</p>

EOT;
}

function html_footer()
{
    echo <<< EOT
</body>
</html>

EOT;
}

function html_auth_box($method)
{
    $superCage = Inspekt::makeSuperCage();
    $debug_mode = '';
    if ($superCage->get->keyExists('debug')) {
        $debug_mode = '?debug';
    }
    echo <<< EOT
    <h2>Welcome to Coppermine update</h2>

    <form name="cpgform" id="cpgform" method="post" action="update.php{$debug_mode}">
    <h2 class="error">Authentication</h2>

        <p class="tableb" align="center">
EOT;
        if($method=='MySQL') {
            echo 'Could not authenticate you via your admin details, if you think you entered the wrong details, click <a href=\'update.php\'>here</a> and try again.<br />Else, you can try to login with you MySQL account:';
        } else {
            echo 'Please provide your <b>admin</b> account details:';
        }
        echo <<< EOT
        </p>

        <div class="input">
        Username: <input type="text" name="user" /><br />
        Password: <input type="password" name="pass" /><br />
        <input type="hidden" name="method" value="{$method}" /><br />
        <input type="submit" value="Login" />
        </div>

        </form>
        <script language="javascript" type="text/javascript">
            <!--
            document.cpgform.user.focus();
            -->
        </script>

EOT;
}


// Charsetmgr start page
register_changes();

$languagefilecfg = 0;

if ($CONFIG['charset'] == 'language file') {
    $thecharset = $lang_charset;
    $languagefilecfg = 1;
    // we set the charset once and for all (better than 'language file')
    cpg_config_set('charset', $thecharset);
} else {
    $thecharset = $CONFIG['charset'];
}



html_header("Charset Manager - 1/3 - Start");
html_logo();
echo '<h1>1/3 - Charset Manager Start</h1>';

// We need these two to run the script
$alreadyunicode = 0;
$iconvavailable = 1;

// We test whether the converting function is available
if (!function_exists('iconv'))
{
    $iconvavailable = 0;
}


if ($languagefilecfg)
{
    /*
    echo <<<EOT
        <p class="warning">You are using the language default encoding. It means that:</p>
    <ol>
    <li> If there are comments left in different languages <strong>other than English</strong> and <strong>other than your default language</strong>, there might be some inconsistency in the encoding used for the comments. In that case, choose the encoding in which most of your comments are encoded.</li>
        <li>The default choice of the left menu <strong>might not be the right one</strong>. Change it if it seems unappropriate.</li>
        </ol>
EOT;
     */

}

if ($thecharset == 'utf-8')
{
    echo '<p class="warning">Your site is already configured to use utf-8. <strong>You don\'t need this script and should <a href="index.php">leave this page</a></strong>.</p>';
    $alreadyunicode = 1;
}

if (!$alreadyunicode && !$iconvavailable) // can't run the script but need it
{
    cpg_config_set('lang', 'english');
    echo '<p class="warning">The <a href="http://www.php.net/iconv">iconv</a> function is not available. <strong>You cannot use this script.</strong> Coppermine will now run in English. <br/>You may install iconv and start this script again. You should now <a href="index.php?lang=english">proceed to the main page</a>.</p>';
}


echo <<<EOT
<ul>
<li><strong>You should not change the value of the second menu (utf-8) unless you know what you are doing!</strong></li>
<li>Clicking on check will just allow you to check if the conversion is possible. The database will be left unchanged.
</ul>
EOT;

echo "<fieldset><legend>Charset Converter</legend>";
echo '<form action="'.$CPG_PHP_SELF.'" method="post" name="cpgform" id="cpgform">';
echo "Convert from ";
form_charset('charset_in', $thecharset);
echo " to ";
form_charset('charset_out', 'utf-8');
echo <<< EOT
<input type="submit" class="button" name="check" value="Check" />

EOT;
echo "</form>";
echo "</fieldset>";



ob_end_flush();
html_footer();
?>