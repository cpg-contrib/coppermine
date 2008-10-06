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
  $Source: /cvsroot/coppermine/devel/admin.php,v $
  $Revision: 5049 $
  $LastChangedBy: pvanrompay $
  $Date: 2008-09-22 00:22:33 +0200 (Mo, 22 Sep 2008) $
**********************************************/
 
define('IN_COPPERMINE', true);
define('ADMIN_PHP', true);
define('LANGMGR_PHP', true);


require_once('include/init.inc.php');
require_once('include/sql_parse.php');



$lineBreak = "\r\n";

if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

// Let's populate the language list from the database
$results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_LANGUAGE']}");
while ($row = mysql_fetch_array($results)) {
        $lang_language_data[$row['lang_id']] = $row;
} // while
mysql_free_result($results);

// todo: add the list of files inside the lang folder

// sort the array by English name
ksort($lang_language_data);


pageheader($lang_langmgr_php['title']);
starttable('100%', cpg_fetch_icon('warning', 2) . 'Under construction', 1);
print <<< EOT
    <tr>
        <td class="tableb">
          This file is "work in progress". I'm trying to come up with a comprehensive language setup tool that let's coppermine admins determine what languages actually to choose.<br />
          Joachim
        </td>
    </tr>
EOT;
endtable();
print '<br />'.$lineBreak;

// Populate an array of available flags
$flag_array = form_get_foldercontent('images/flags/', 'file', 'gif');
$lang_file_array = form_get_foldercontent('lang/', 'file', 'php');

starttable('100%', cpg_fetch_icon('blank', 2) . $lang_langmgr_php['title'], 9);
print <<< EOT
    <tr>
        <th class="tableh2">
          {$lang_langmgr_php['default']}
        </th>
        <th class="tableh2">
          {$lang_langmgr_php['english_language_name']}
        </th>
        <th class="tableh2">
          {$lang_langmgr_php['native_language_name']}
        </th>
        <th class="tableh2">
          {$lang_langmgr_php['custom_language_name']}
        </th>
        <th class="tableh2">
          {$lang_langmgr_php['flag']}
        </th>
        <th class="tableh2">
          {$lang_langmgr_php['file_available']}
        </th>
        <th class="tableh2">
          {$lang_langmgr_php['enabled']}
        </th>
        <th class="tableh2">
          {$lang_langmgr_php['complete']}
        </th>
    </tr>
EOT;
$loopCounter = 0;
foreach ($lang_language_data as $language) {
    if ($language['available'] == 'YES' || in_array($language['lang_id'], $lang_file_array) == TRUE) {
    // Alternating colors
        if ($loopCounter/2 == floor($loopCounter/2)) {
            $cellstyle = 'tableb';
        } else {
            $cellstyle = 'tableb tableb_alternate';
        }
        // Default language
        if ($language['lang_id'] == DEFAULT_LANGUAGE) {
            $default_checked = 'checked="checked"';
        } else {
            $default_checked = '';
        }
    
        print <<< EOT
    <tr>
        <td class="{$cellstyle}">
          <input name="default" id="default_{$language['lang_id']}" type="radio" value="{$language['lang_id']}" class="radio" $default_checked />
        </td>
EOT;
        print <<< EOT
        <td class="{$cellstyle}">
          {$language['english_name']}
        </td>
EOT;
        print <<< EOT
        <td class="{$cellstyle}">
          {$language['native_name']}
        </td>
EOT;
        print <<< EOT
        <td class="{$cellstyle}">
          <input type="text" name="" id="" class="textinput" value="{$language['custom_name']}" />
        </td>
EOT;
        print <<< EOT
        <td class="{$cellstyle}">
            <img src="images/flags/{$language['flag']}.gif" width="16" height="11" border="0" alt="" name="image_{$loopCounter}" />
            <select id="nav{$loopCounter}" name="nav{$loopCounter}" size="1" onchange="if(document.images) document.images['image_{$loopCounter}'].src='images/flags/'+this.options[this.selectedIndex].value+'.gif';" class="listbox_lang" style="width:100px">
>
EOT;
        foreach ($flag_array as $flags) {
            if ($flags == $language['flag']) {
                $flag_selected = 'selected="selected"';
            } else {
                $flag_selected = '';
            }
            print '            <option style="background-image:url(images/flags/' . $flags . '.gif);" value="' . $flags . '" '.$flag_selected.'>' . $flags . '</option>';
        }
        print <<< EOT
            </ul>    
        </td>
EOT;
        print <<< EOT
        <td class="{$cellstyle}">
EOT;
        if ($language['available'] == 'YES') {
            if (in_array($language['lang_id'], $lang_file_array) == TRUE) {
                // Language file is in database and in lang folder
                print cpg_fetch_icon('ok', 0);
            } else {
                //  Language file is in database, but not in lang folder
                print cpg_fetch_icon('stop', 0) . $lang_langmgr_php['missing'];
            }
        } else {
            if (in_array($language['lang_id'], $lang_file_array) == TRUE) {
                // Language file is not database but in lang folder
                print cpg_fetch_icon('add', 0);
            } else {
                //  Language file is not database nor in lang folder - this case should never be true
                print cpg_fetch_icon('stop', 0) . $lang_langmgr_php['missing'];
            }
        }
        print <<< EOT
        </td>
EOT;
        print <<< EOT
        <td class="{$cellstyle}">
EOT;
        if ($language['enabled'] == 'YES') {
            $enable_checked = 'checked="checked"';
        } else {
            $enable_checked = '';
        }
        print <<< EOT
            <input type="checkbox" name="enable{$loopCounter}" id="enable{$loopCounter}" class="checkbox" {$enable_checked} />
        </td>
EOT;
        print <<< EOT
        <td class="{$cellstyle}">
          {$language['complete']}
        </td>
    </tr>
EOT;
        $loopCounter++;
    }
}
endtable();

pagefooter();
ob_end_flush();
?>