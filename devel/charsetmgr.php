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

define('IN_COPPERMINE', true);
//define('DISPLAYIMAGE_PHP', true);
require('include/init.inc.php');
require('include/update.inc.php');


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
                      'Cyrillic' => 'koi8-r',
                      'Greek' => 'iso-8859-7',
                      'Hebrew' => 'iso-8859-8-i',
                      'Icelandic' => 'x-mac-icelandic',
                      'Japanese' => 'euc-jp',
                      'Korean' => 'euc-kr',
                      'Maltese' => 'iso-8859-3',
                      'Thai' => 'windows-874 ',
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
                
                $convstr = addslashes($convstr);
                $query = "UPDATE $table_name SET $column_name='$convstr' WHERE $index_name=$elementid";
                $conversion_possible = 1;
            }
            else 
            {
                $convstr = $element;
                $query = "<span class=\"warning\">CONVERSION IMPOSSIBLE</span>";
                $conversion_possible = 0;
            }
            if ($doit)
            {
                
                if ($conversion_possible)
                {
                    $updateresult = cpg_db_query($query);
                    if ($updateresult )// check that the conversion was performed
                        $query = '<span class="done">DONE</span>';
                    else
                        $query = '<span class="failed">Query failed: '.mysql_error().' </span>';
                }
                else
                    $query = '<span >Query was impossible.</span>';
                    
            }
            
            echo "<tr><td>$table_name</td><td>$column_name</td><td>$elementid</td><td class=\"check\">$convstr</td><td>$query</td></tr>\n";
        }
        
                
    }
    return $conversion_possible;
     
    
}

// Carries out the conversion in all the necessary fields
function register_changes()
{
    global $CONFIG;
    if (count($_POST) > 0) {
        if (isset($_POST['check']))
            $doconvert = 0;
        else if (isset($_POST['convert']))
            $doconvert = 1;
        if (isset($doconvert)) // ambiguous! it means: if a button has been pushed!
        {
            $charsetin = $_POST['charset_in'];
            $charsetout = $_POST['charset_out'];
            
            $affected_elements = array(
                                       $CONFIG['TABLE_ALBUMS'] =>
                                       array('aid', 'title', 'description', 'keyword'),
                                       $CONFIG['TABLE_PICTURES'] =>
                                       array('pid', 'title', 'caption', 'keywords'),
                                       $CONFIG['TABLE_COMMENTS'] =>
                                       array('msg_id', 'author', 'msg_body'),
                                       $CONFIG['TABLE_CATEGORIES'] =>
                                       array('cid', 'name', 'description'),
                                       $CONFIG['TABLE_USERGROUPS'] =>
                                       array('group_id', 'group_name'),
                                       $CONFIG['TABLE_USERS'] =>
                                       array('user_id', 'user_name', 'user_password', 'user_location', 'user_interests', 'user_occupations')
                                       );
            
            
            header("Content-Type: text/html; charset=$charsetout");
/*            echo <<<EOT

                <meta http-equiv="Content-Type" content="text/html; charset=$charsetout" />

            */
            

            //echo $charsetin . " " .$charsetout;
            if (!$doconvert)
            {
                $title = "Checking conversion from $charsetin to $charsetout";
            }
            else if ($doconvert)
            {
                $title = "Converting from $charsetin to $charsetout";
            }
            html_header($title);
            html_logo();
            echo "<h1>$title</h1>";
            echo '<table border="1" class="maintable">';
            if (!$doconvert)
                echo '<p class="warning">You <b>must check</b> that all the cells in <span class="check">blue</span> are displayed right.</p>';
            echo "<tr><th>Table</th><th>Column</th><th>Id</th><th>String</th><th>".($doconvert? "Result" : "Query")."</th></tr>";
            foreach($affected_elements as $table => $columns)
                for ($i = 1; $i < count($columns); ++$i)
                {
                    
                    charset_convert($table, $columns[$i], $columns[0], $charsetin, $charsetout, $doconvert);                
                
                }
                echo '</table>';
            if (!$doconvert)
            {
                echo  "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
                echo '<input type="hidden" name="charset_in" value="'.$charsetin."\">\n";
echo '<input type="hidden" name="charset_out" value="'.$charsetout."\">\n";
echo <<<EOT
    <div class="warning">
    <p>Before converting you <b>must</b>:</p>
    <ol>
    <li>Make a backup of your database. <span class="bigwarning">A malfunction of this script will result in the partial or complete loss or corruption of your comments and other string data containing non-ascii characters.</span></li>
    <li>Check that all the strings above in <span class="check">blue</span> are displayed correctly.
    </ol>
    </div>
EOT;
                echo '<input type="submit" class="button" name="convert" value="Convert" />';
                echo '</form>';
            }
            if ($doconvert)
            {
                cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value='$charsetout' WHERE name='charset'");
                echo <<<EOT
                    <div class="warning">
                    <p>The conversion has been carried out.</p>
                    <ul>
                <li>You may have to go to the <a href="admin.php">configuration page</a> and choose your language <b>with a utf-8 extension</b></li>
                <li> If you did not get any errors, you should remove the file charsetmgr.php, or make it unaccessible, for security reasons. You will not need this file anymore.</li>
                    </ul>
                    </div>
EOT;
                
            }
            
                    html_footer();
                exit;
        } 
    }
}

// Charsetmgr start page
register_changes();


pageheader($lang_picinfo['CharsetManager']);


if ($CONFIG['charset'] == 'language file')
{
    $thecharset = $lang_charset;
    echo <<<EOT
        <p class="warning">You are using the language default encoding. It means that:</p>
    <ol>
    <li> If there are comments left in different languages <b>other than English</b> and <b>other than your default language</b>, there might be some inconsistency in the encoding used for the comments. In that case, choose the encoding in which most of your comments are encoded.</li>
        <li>The default choice of the left menu <b>might not be the right one</b>. Change it if it seems unappropriate.</li>
        </ol>
EOT;
    
}
else
{
    $thecharset = $CONFIG['charset'];
    if ($thecharset == 'utf-8')
        echo '<p class="warning">Your site is already configured to use utf-8. <b>You should <a href="index.php">leave this page</a></b>.</p>';
}

echo <<<EOT
<ul>
<li><b>You should not change the value of the second menu (utf-8) unless you know what you are doing!</b></li>
<li>Clicking on check will just allow you to check if the conversion is possible.
</ul>
EOT;

echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
echo "Convert from ";
form_charset('charset_in', $thecharset);
echo " to ";
form_charset('charset_out', 'utf-8');
echo <<<EOT
<input type="submit" class="button" name="check" value="Check" />

EOT;
echo "</form>";



ob_end_flush();
pagefooter();
?>