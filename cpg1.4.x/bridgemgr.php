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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/


define('IN_COPPERMINE', true);
define('BRIDGEMGR_PHP', true);

require('include/init.inc.php');

///////////// function defintions start /////////////////////////////

function write_to_db($step) {
    global $BRIDGE,$CONFIG,$default_bridge_data,$lang_bridgemgr_php, $previous_step, $next_step;
    $error = 0;
    // do the check for plausibility of posted data
    foreach($_POST as $key => $value) { // loop through the posted data -- start
        // filter the post data that doesn't get written
        if (array_key_exists($key, $BRIDGE)) { // post data exists as db key -- start
            // do the lookups
            $options = explode(',', $default_bridge_data[$BRIDGE['short_name']][$key.'_used']);
            foreach($options as $key2) {
                $options[$key2] = trim($options[$key2], ','); // get rid of the delimiters
            }
            if ($options[0] != '') { // only continue with this loop if there really is an option to check --- start
                if ($options[0] == 'lookfor') { // check for the existance of a local file/folder --- start
                    if (file_exists($value.$options[1]) == false) {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_folder_not_exist'], '<tt>'.$value.$options[1].'</tt>','<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for the existance of a file/folder --- end
                if ($options[0] == 'cookie') { // check for the existance of a cookie --- start
                    foreach ($_COOKIE as $key2 => $value2) { // loop through the cookie global var --- start
                        //print '<br>cookie:'.$key2.', content:'.$value2."<br />\n";
                        if (@strstr($key2,$value) == false && $options[1] == 'not_empty') {
                            $return[$key] = sprintf($lang_bridgemgr_php['error_cookie_not_readible'], '&quot;<tt>'.$value.'</tt>*&quot;','<i>'.$lang_bridgemgr_php[$key].'</i>');
                        }
                    }  // loop through the cookie global var --- end
                                        if (isset($temp_err)) $return[$key] = $temp_err;
                } // check for the existance of a cookie --- end
                if ($options[1] == 'not_empty') { // check for empty mandatory fields --- start
                    if ($value == '') {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_mandatory_field_empty'], '<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for empty mandatory fields --- end
                if ($options[0] == 'no_trailing_slash' || $options[1] == 'no_trailing_slash' || $options[2] == 'no_trailing_slash') { // check for unneeded trailing slashes --- start
                    if ($value != rtrim($value, '/')) {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_no_trailing_slash'], '<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for unneeded traling slashes --- end
                if ($options[0] == 'trailing_slash' || $options[1] == 'trailing_slash' || $options[2] == 'trailing_slash') { // check for needed trailing slashes --- start
                    if ($value == rtrim($value, '/')) {
                        $return[$key] = sprintf($lang_bridgemgr_php['error_trailing_slash'], '<i>'.$lang_bridgemgr_php[$key].'</i>');
                    }
                } // check for needed traling slashes --- end
                //print "<hr />\n";
                //print $options[0].':'.$options[1].','.$options[2];
                //print "<hr />\n";
            } // only continue with this loop if there really is an option to check --- end
        } // post data exists as db key -- end
    } // loop through the posted data -- end


    // loop through the expected data
    //void


    // do some checking according to the step we're currently in
    switch ($step) {
    case "choose_bbs":
    if ($_POST['short_name'] == '') {
        $return['short_name'] = $lang_bridgemgr_php['error_specify_bbs'];
        $error++;
    }
    if ($_POST['short_name'] == 'custom_selector') {
        $_POST['short_name'] = $_POST['custom_filename'];
        if ($_POST['short_name'] == '') {
            $return['short_name'] = $lang_bridgemgr_php['error_no_blank_name'];
        }
        if (ereg('[^A-Za-z0-9_-]',$_POST['short_name'])) {
            $return['short_name'] = $lang_bridgemgr_php['error_no_special_chars'];
        }
    }
    // check if the bridge file actually exists
    if (file_exists('bridge/'.$_POST['short_name'].'.inc.php') == false) {
        $return['bridge_file_not_exist'] = sprintf($lang_bridgemgr_php['error_bridge_file_not_exist'],'<i>bridge/'.$_POST['short_name'].'.inc.php</i>');
    }
       break;

    case "settings_path":
    //if ($_POST['short_name'] == '') {
    //    $return['short_name'] = $lang_bridgemgr_php['error_specify_bbs'];
    //}

       break;

    case "db_group":
    //if ($_POST['use_standard_groups'] == '') {
    //    $_POST['use_standard_groups'] = 0 ;
    //}
       break;

    case "db_connect":
        if ($default_bridge_data[$BRIDGE['short_name']]['db_hostname_used'] != '') { // check the db connection --- start
            @mysql_close(); //temporarily disconnect from the coppermine database
            ob_start();
            $link = mysql_connect($_POST['db_hostname'], $_POST['db_username'], $_POST['db_password']);
            $mysql_error_output = ob_get_contents();
            ob_end_clean();
            if (!$link) {
                $return[$step] = $lang_bridgemgr_php['error_db_connect'].'<tt>'.$mysql_error_output.'</tt>';
            } elseif ($default_bridge_data[$BRIDGE['short_name']]['db_database_name_used'] != '') { // check the database
                ob_start();
                $db_selected = mysql_select_db($_POST['db_database_name'], $link);
                print mysql_error();
                $mysql_error_output = ob_get_contents();
                ob_end_clean();
                if (!$db_selected) {
                   $return['db_database_name'] = sprintf($lang_bridgemgr_php['error_db_name'], '<i>'.$_POST['db_database_name'].'</i>', '<i>'.$lang_bridgemgr_php['db_database_name'].'</i>'). ' <tt>'.$mysql_error_output.'</tt>';
                }
            }
            @mysql_close($link);
            cpg_db_connect(); // connect back to coppermine db
        } // check the db connection --- end
       break;

    case "db_tables":
        if ($default_bridge_data[$BRIDGE['short_name']]['table_prefix_used'] != '') {
            $prefix_and_table = sprintf($lang_bridgemgr_php['error_prefix_and_table'], '<i>'.$lang_bridgemgr_php['table_prefix'].'</i>');
        }
        @mysql_close(); //temporarily disconnect from the coppermine database
        $link = @mysql_connect($BRIDGE['db_hostname'], $BRIDGE['db_username'], $BRIDGE['db_password']);
        $db_selected = @mysql_select_db($BRIDGE['db_database_name'], $link);
        $loop_table_names = array ('user_table', 'session_table', 'group_table', 'group_table', 'group_relation_table', 'group_mapping_table');
        foreach ($loop_table_names as $key) { // loop through the possible tables --- start
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] != '') { // check if table exists --- start
                $temp_tablename = $_POST['table_prefix'].$_POST[$key];
                $result = mysql_query('SELECT * FROM '.$temp_tablename);
                if (!$result) {
                    $return['db_'.$key] = sprintf($lang_bridgemgr_php['error_db_table'], '<i>'.$temp_tablename.'</i>', $prefix_and_table.'<i>'.$lang_bridgemgr_php[$key].'</i>'). ' <tt>'.$mysql_error_output.'</tt>';
                }
                @mysql_free_result($result);
            } // check if table exists --- end
        } // loop through the possible tables --- end
        @mysql_close($link);
        cpg_db_connect(); // connect back to coppermine db
       break;


    } // end switch

    // write the post data to the database
    //print_r($_POST);
    foreach($_POST as $key => $value) {
        // filter the post data that doesn't get written
        if (array_key_exists($key, $BRIDGE)) {
            if ($CONFIG['debug_mode'] != 0) { // print what actually get's written when in debug_mode
                print '<span class="explanation">Writing to database: ';
                print $key . '|' . $value;
                print '<br /></span>';
            }
            if ($return[$key] != '') {
                //print '|Error in this key';
            } else {
                cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$value' WHERE name = '$key'");
            }
            //print '<br />';
        }
    }
    $value = $_POST['bridge_enable'];
    if ($value != '0' && $value != '1') {
        $value = $CONFIG['bridge_enable'];
    }
    cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '$value' WHERE name = 'bridge_enable'");
    if ($_POST['clear_unused_db_fields'] == 1) {
        // clear all database entries that aren't actually used with the current bridge file
        // not implemented yet (not sure if necessary after all)
    }

    // ouput error messages, if any
    if (is_array($return)) {
        starttable('100%',$lang_bridgemgr_php['error_title']);
        print '<tr><td class="tableb" align="left"><ul>';
        foreach($return as $key) {
            print '<li>'.$key.'</li>';
        }
        print '</ul></td></tr>';
        print '<tr>'.$new_line;
        print '    <td class="tablef" align="center">'.$new_line;
        print '        <a href="javascript:history.back()" class="admin_menu" title="'.$lang_bridgemgr_php['back'].'" />&laquo;'.$lang_bridgemgr_php['back'].'</a>'.$new_line;
        print '    </td>'.$new_line;
        print '</tr>'.$new_line;
        endtable();
        $error = 1;
    }
    print '<br />';
    if ($error != '') {return 'error';}
}

function cpg_check_allowed_emergency_logon($timestamp,$failures = '') {
    //define the wait time (in seconds)
    $wait_time = array('0','5','10','20','30','60','120', '300', '1500', '6000');
    // make a real timestamp out of the date
    $timestamp = strtotime($timestamp);
    // if failed more than x times, the wait time will keep the same
    if ($failures > count($wait_time)) {$failures = count($wait_time);}
    //print 'Last logon:'.$timestamp.'|'.date('Y-m-d H:i:s', $timestamp);
    //print '<br>';
    $current_timestamp = time();
    //print 'Current time:'.$current_timestamp.'|'.date('Y-m-d H:i:s',$current_timestamp);
    //print '<br>';
    $allowed_timestamp = $timestamp+($wait_time[$failures]);
    //print 'Allowed logon:'.$allowed_timestamp.'|'.date('Y-m-d H:i:s', $allowed_timestamp).'|'.$wait_time[$failures];
    //print '<hr>';
    $difference = $allowed_timestamp - $current_timestamp;
    //print 'Difference in seconds:'.$difference;
    return $difference;
}

function cpg_bridge_prefill( $bridge = '', $key = '') {
global $BRIDGE,$default_bridge_data;
if ($BRIDGE[$key]) {
    return $BRIDGE[$key];
    } else {
    return $default_bridge_data[$bridge][$key.'_default'];
    }
}

function cpg_submit_button($step, $back = 'true', $columns = '3', $next = 'true')
{
global $lang_bridgemgr_php,$new_line;
$checked = '';

if ($_POST['hide_unused_fields'] != '' || $back != 'true') {
    $checked = 'checked="checked"';
}
$return = '    <tr>'.$new_line;
$return .= '        <td colspan="'.$columns.'" class="tablef" align="center">'.$new_line;
$return .= '            <table border="0" cellspacing="0" cellpadding="0" width="100%"><tr>'.$new_line;
$return .= '            <td align="left">'.$new_line;
$return .= '            <input type="Checkbox" name="hide_unused_fields" id="hide_unused_fields" value="1" class="checkbox" '.$checked.' onclick="toggleUnusedFields(this);" />'.$new_line;
$return .= '            <label for="hide_unused_fields" class="clickable_option">'.$new_line;
$return .= '            <span class="explanation">'.$new_line;
$return .= '                '.$lang_bridgemgr_php['hide_unused_fields'].$new_line;
$return .= '            </span>'.$new_line;
$return .= '            </label>'.$new_line;
$return .= '            <script type="text/javascript">';
$return .= '            <!--'.$new_line;
$return .= '            //function toggleUnusedFields(el_name) {'.$new_line;
$return .= '            //var elems = el_name.getElementsById("hide_row");'.$new_line;
$return .= '            '.$new_line;
$return .= '            '.$new_line;
$return .= '            }'.$new_line;
$return .= '            -->'.$new_line;
$return .= '            </script>'.$new_line;
$return .= '        </td>'.$new_line;
$return .= '        <td align="center">'.$new_line;
if ($back == 'true') {
    $return .= '            <input type="button" name="back" value="&laquo;'.$lang_bridgemgr_php['back'].'" class="button" onclick="javascript:history.back()" />'.$new_line;
}
if ($next != 'false') {
    $return .= '            <input type="submit" name="submit" value="'.$lang_bridgemgr_php['next'].'&raquo;" class="button" />'.$new_line;
}
$return .= '            <input type="hidden" name="step" value="'.$step.'" />'.$new_line;
$return .= '            </td>';
$return .= '                </tr></table>';
$return .= '        </td>'.$new_line;
$return .= '    </tr>'.$new_line;
return $return;
}

function remote_file_exists ($url)
{
// currently not used - will have to be looked into: we need a reliable way to check if an url exists, even if we can not use fopen, because it is disabled in php.ini
/*
   Return error codes:
   1 = Invalid URL host
   2 = Unable to connect to remote host
*/
   $head = "";
   $url_p = parse_url ($url);

   if (isset ($url_p["host"]))
   { $host = $url_p["host"]; }
   else
   { return 1; }

   if (isset ($url_p["path"]))
   { $path = $url_p["path"]; }
   else
   { $path = ""; }

   $fp = fsockopen ($host, 80, $errno, $errstr, 20);
   if (!$fp)
   { return 2; }
   else
   {
       $parse = parse_url($url);
       $host = $parse['host'];

       fputs($fp, "HEAD ".$url." HTTP/1.1\r\n");
       fputs($fp, "HOST: ".$host."\r\n");
       fputs($fp, "Connection: close\r\n\r\n");
       $headers = "";
       while (!feof ($fp))
       { $headers .= fgets ($fp, 128); }
   }
   fclose ($fp);
   $arr_headers = explode("\n", $headers);
   $return = false;
   if (isset ($arr_headers[0]))
   { $return = strpos ($arr_headers[0], "404") === false; }
   return $return;
}

function cpg_refresh_config_db_values() {
global $CONFIG;
// Retrieve DB stored configuration
$results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");
while ($row = mysql_fetch_array($results)) {
    $CONFIG[$row['name']] = $row['value'];
} // while
mysql_free_result($results);
return $CONFIG;
}

function cpg_is_writable($folder)
{
$return = 0;
$file_content = "this is just a test file that hasn't been deleted properly.\nIt's safe to delete it now";
@unlink($folder.'/cpgvc_tf.txt');
if ($fd = @fopen($folder.'/cpgvc_tf.txt', 'w')) {
    @fwrite($fd, $file_content);
    @fclose($fd);
    @unlink($folder.'/cpgvc_tf.txt');
    $return = 1;
} else {
    $return = -1;
}
return $return;
}

///////////// function defintions end /////////////////////////////


if (GALLERY_ADMIN_MODE) { // gallery admin mode --- start

// define the var array

// status: bridge ok, manager was ok a while ago ..
$default_bridge_data['invisionboard20'] = array(
  'full_name' => 'Invision Power Board 2.x',
  'short_name' => 'invisionboard20',
  'support_url' => 'http://forums.invisionpower.com/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,conf_global.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

// status: bridge ok, manager ok
$default_bridge_data['mambo'] = array(
  'full_name' => 'Mambo server',
  'short_name' => 'mambo',
  'support_url' => 'http://www.mamboserver.com/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,configuration.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

// status: bridge ok, manager ok
$default_bridge_data['phpbb'] = array(
  'full_name' => 'phpBB versions prior to 2.0.18',
  'short_name' => 'phpbb20',
  'support_url' => 'http://www.phpbb.com/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,config.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
   'cookie_prefix_default' => 'phpbb2mysql',
   'cookie_prefix_used' => 'cookie',
);

$default_bridge_data['phpbb2018'] = array(
  'full_name' => 'phpBB version 2.0.18 or better',
  'short_name' => 'phpbb2018',
  'support_url' => 'http://www.phpbb.com/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,config.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
   'cookie_prefix_default' => 'phpbb2mysql',
   'cookie_prefix_used' => 'cookie',
);

// status: bridge ok, manager unknown
$default_bridge_data['phpbb22'] = array(
  'full_name' => 'phpBB 2.2',
  'short_name' => 'phpbb22',
  'support_url' => 'http://www.phpbb.com/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,config.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

// status: bridge unknown, manager unknown
$default_bridge_data['punbb115'] = array(
  'full_name' => 'PunBB v1.1.5',
  'short_name' => 'punbb115',
  'support_url' => 'http://www.punbb.org/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,config.php',
  'use_post_based_groups_default' => '0',
);

// status: bridge ok, manager ok
$default_bridge_data['punbb12'] = array(
  'full_name' => 'PunBB v1.2',
  'short_name' => 'punbb12',
  'support_url' => 'http://www.punbb.org/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,config.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

// status: bridge ok, manager ok
$default_bridge_data['smf10'] = array(
  'full_name' => 'Simple Machines (SMF) 1.x',
  'short_name' => 'smf10',
  'support_url' => 'http://www.simplemachines.org/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,Settings.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

// status: bridge ok, manager ok
$default_bridge_data['smf20'] = array(
  'full_name' => 'Simple Machines (SMF) 2.x',
  'short_name' => 'smf20',
  'support_url' => 'http://www.simplemachines.org/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,Settings.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

// status: bridge unknown, manager unknown
$default_bridge_data['vbulletin30'] = array(
  'full_name' => 'vBulletin 3.0',
  'short_name' => 'vbulletin30',
  'support_url' => 'http://www.vbulletin.com/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,includes/config.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

$default_bridge_data['mybb'] = array(
  'full_name' => 'MyBB 1.02',
  'short_name' => 'mybb',
  'support_url' => 'http://www.mybboard.com/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/inc',
  'relative_path_to_config_file_used' => 'lookfor,config.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

$default_bridge_data['xmb'] = array(
  'full_name' => 'XMB 1.9.10 or better',
  'short_name' => 'xmb',
  'support_url' => 'http://www.xmbforum.com/',
  'full_forum_url_default' => '',
  'full_forum_url_used' => '',
  'relative_path_to_config_file_default' => '../XMB/',
  'relative_path_to_config_file_used' => 'lookfor,config.php',
  'use_post_based_groups_default' => '1',
  'use_post_based_groups_used' => 'radio,1,0',
);

$default_bridge_data['xoops'] = array(
  'full_name' => 'Xoops 2.0',
  'short_name' => 'xoops',
  'support_url' => 'http://www.xoops.org/',
  'full_forum_url_default' => 'http://www.yoursite.com/board',
  'full_forum_url_used' => 'mandatory,not_empty,no_trailing_slash',
  'relative_path_to_config_file_default' => '../board/',
  'relative_path_to_config_file_used' => 'lookfor,mainfile.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

$default_bridge_data['phorum'] = array(
  'full_name' => 'Phorum 5',
  'short_name' => 'phorum',
  'support_url' => 'http://www.phorum.org/',
  'full_forum_url_default' => '',
  'full_forum_url_used' => '',
  'relative_path_to_config_file_default' => '../phorum/',
  'relative_path_to_config_file_used' => 'lookfor,common.php',
  'use_post_based_groups_default' => '0',
  'use_post_based_groups_used' => 'radio,1,0',
);

//////////////// main code start //////////////////////

// initialize vars
$step = $_POST['step'];
if (!$step) {
    $step = 'finalize';
}
$new_line = "\n";
/*
$next_step = array( // this defines the order of steps
  'choose_bbs' => 'settings_path',
  'settings_path' => 'db_connect',
  'db_connect' => 'db_tables',
  'db_tables' => 'db_groups',
  'db_groups' => 'special_settings',
  'special_settings' => 'finalize',
  'finalize' => 'finalize',
);
*/

$next_step = array( // this defines the order of steps
  'choose_bbs' => 'settings_path',
  'settings_path' => 'special_settings',
  'special_settings' => 'finalize',
  'finalize' => 'finalize',
);

$previous_step = array_flip($next_step);


pageheader($lang_bridgemgr_php['title']);
echo <<<EOT
<style type="text/css">
.explanation {font-size: 80%;}
.important {color:red;}
</style>
EOT;

//print 'Current step:'.$step.', previous step:'.$previous_step[$step].', next step:'.$next_step[$step];  // debug ouput

// get the bridge db vars first
$BRIDGE = cpg_get_bridge_db_values();
//print_r($BRIDGE);
//print '<hr>';

switch ($step) {
case "choose_bbs":
$BRIDGE = cpg_get_bridge_db_values();
print '<form name="'.$step.'" action="'.$_SERVER['PHP_SELF'].'" method="post">';
//print '<input type="hidden" name="hide_unused_fields" value="1" />';
starttable('100%', $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['choose_bbs_app'],2);
$checked[$BRIDGE['short_name']] = 'checked="checked"';
foreach($default_bridge_data as $key => $value) {
    print '<tr>'.$new_line;
    print '    <td class="tableb">'.$new_line;
    print '        <input type="Radio" name="short_name" id="'.$key.'" class="radio" value="'.$key.'" '.$checked[$key].' />'.$new_line;
    print '        <label for="'.$key.'" class="clickable_option">'.$new_line;
    print '            '.$value['full_name'].$new_line;
    print '        </label>'.$new_line;
    print '    </td>'.$new_line;
    print '    <td class="tableb">'.$new_line;
    print '        <span class="explanation">'.$new_line;
    print '            <a href="'.$value['support_url'].'" title="'.$lang_bridgemgr_php['support_url'].'" rel="external">'.$value['support_url'].'</a>'.$new_line;
    print '        </span>'.$new_line;
    print '    </td>'.$new_line;
    print '</tr>'.$new_line;
} // end foreach

// loop through the pre-made bridges. If there's one in the db that doesn't exist in the bridges, that's our custom theme; prefill the form fields with it.
$prefill = '';
$checked = '';
$custom_bridge_counter_exist = 0;
foreach($default_bridge_data as $key => $value) {
    if ($BRIDGE['short_name'] == $key) {
        $custom_bridge_counter_exist++;
    }
}
if ($custom_bridge_counter_exist == 0) { // we have a custom bridge --- start
    $prefill = $BRIDGE['short_name'];
    $checked = 'checked="checked"';
} // we have a custom bridge --- end

// form field for the custom bridge
    print '<tr>'.$new_line;
    print '    <td class="tableb">'.$new_line;
    print '        <input type="Radio" name="short_name" id="custom_selector" class="radio" value="custom_selector" '.$checked.' onclick="document.'.$step.'.custom_filename.focus();" />'.$new_line;
    //print '        <label for="custom_selector" class="clickable_option">'.$new_line;
    print '            <input type="text" name="custom_filename" value="'.$prefill.'" size="30" class="textinput" onclick="document.getElementById(\'custom_selector\').checked=true;" />'.$new_line;
    //print '        </label>'.$new_line;
    print '    </td>'.$new_line;
    print '    <td class="tableb">'.$new_line;
    print '        <span class="explanation">'.$new_line;
    print '            '.$lang_bridgemgr_php['custom_bridge_file'].$new_line;
    print '        </span>'.$new_line;
    print '    </td>'.$new_line;
    print '</tr>'.$new_line;

print cpg_submit_button($next_step[$step], 'false', '2');
endtable();
print "</form>\n";
   break;

case "settings_path":
    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" action="'.$_SERVER['PHP_SELF'].'" method="post">';
        starttable('100%',$lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['settings_path'], 3);
        $loop_array = array('full_forum_url','relative_path_of_forum_from_webroot','relative_path_to_config_file', 'cookie_prefix');
        $rows_displayed = 0;
        $section_number = 0;
        foreach($loop_array as $key) {
            $prefill = cpg_bridge_prefill($BRIDGE['short_name'],$key);
            if ($key == 'relative_path_of_forum_from_webroot') {
                $minibrowser = '<a href="javascript:;" onclick="MM_openBrWindow(\'minibrowser.php?startfolder='.rawurlencode($prefill).'&amp;parentform='.rawurlencode($step).'&amp;formelementname='.rawurlencode($key).'\',\''.uniqid(rand()) .'\',\'scrollbars=yes,toolbar=no,status=no,locationbar=no,resizable=yes,width=600,height=400\')"><img src="images/folder.gif" width="16" height="16" border="0" alt="" title="'.$lang_bridgemgr_php['browse'].'" /></a>';
            } else {
                $minibrowser = '';
            }
            $reset_to_default = '';
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == '') {
                $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
                $minibrowser = '';
            } else {
                $disabled = '';
                $rows_displayed++;
                if ($default_bridge_data[$BRIDGE['short_name']][$key.'_default'] != '') {
                    $reset_to_default = '<img src="images/flags/reset.gif" width="16" height="11" border="0" alt="" title="'.$lang_bridgemgr_php['reset_to_default'].'" style="cursor:pointer" onclick="document.getElementById(\''.$key.'\').value=\''.$default_bridge_data[$BRIDGE['short_name']][$key.'_default'].'\'" />';
                }
            }
            if ($_POST['hide_unused_fields'] != 1 || $disabled == '')
            {
                print '<tr>'.$new_line;
                print '    <td class="tableb">'.$new_line;
                print '        '.$lang_bridgemgr_php[$key].':'.$new_line;
                print '    </td>'.$new_line;
                print '    <td class="tableb" style="overflow:visible">'.$new_line;
                print '        <input type="text" name="'.$key.'" id="'.$key.'" class="textinput" value="'.$prefill.'" '.$disabled.' size="50" />'.$minibrowser.$reset_to_default.$new_line;
                print '    </td>'.$new_line;
                print '    <td class="tableb">'.$new_line;
                print $display1.$new_line;
                print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>'.$new_line;
                print $display2.$new_line;
                print '    </td>'.$new_line;
                print '</tr>'.$new_line;
            }
        }
        if ($rows_displayed == 0) {
            print '<tr>';
            print '    <td class="tableh2" colspan="3" align="center">';
            print '        <h2>'.$lang_bridgemgr_php['no_action_needed'].'</h2>';
            print '    </td>';
            print '</tr>';
        }
        print cpg_submit_button($next_step[$step]);
        endtable();
        print "</form>\n";
    } // end if not error
   break;

case "db_connect":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" action="'.$_SERVER['PHP_SELF'].'" method="post">';
        starttable('100%',$lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['database_connection'], 3);
        $loop_array = array('db_database_name','db_hostname','db_username','db_password');
        $rows_displayed = 0;
        foreach($loop_array as $key) {
            $prefill = cpg_bridge_prefill($BRIDGE['short_name'],$key);
            $reset_to_default = '';
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == '') {
                $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
            } else {
                $disabled = '';
                $rows_displayed++;
                if ($default_bridge_data[$BRIDGE['short_name']][$key.'_default'] != '') {
                    $reset_to_default = '<img src="images/flags/reset.gif" width="16" height="11" border="0" alt="" title="'.$lang_bridgemgr_php['reset_to_default'].'" style="cursor:pointer" onclick="document.getElementById(\''.$key.'\').value=\''.$default_bridge_data[$BRIDGE['short_name']][$key.'_default'].'\'" />';
                }
            }
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {$fieldtype = 'password';} else {$fieldtype = 'text';}
            if ($_POST['hide_unused_fields'] != 1 || $disabled == '')
            {
                //print $default_bridge_data[$BRIDGE['short_name']][$key.'_used'].'|<br>';
                print '<tr>';
                print '    <td class="tableb">';
                print '        '.$lang_bridgemgr_php[$key].':';
                print '    </td>';
                print '    <td class="tableb">';
                print '        <input type="'.$fieldtype.'" name="'.$key.'" id="'.$key.'" class="textinput" value="'.$prefill.'" '.$disabled.' size="30"  style="width:80%" />'.$reset_to_default;
                print '    </td>';
                print '    <td class="tableb">';
                print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>';
                print '    </td>';
                print '</tr>';
            }
        }
        if ($rows_displayed == 0) {
            print '<tr>';
            print '    <td class="tableh2" colspan="3" align="center">';
            print '        <h2>'.$lang_bridgemgr_php['no_action_needed'].'</h2>';
            print '    </td>';
            print '</tr>';
        }


        print cpg_submit_button($next_step[$step]);
        endtable();
        print "</form>\n";
    } // end if error
    break;

case "db_tables":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" action="'.$_SERVER['PHP_SELF'].'" method="post">';
        starttable('100%',$lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['database_tables'], 3);
        $loop_array = array('table_prefix', 'user_table', 'session_table', 'group_table', 'group_relation_table', 'group_mapping_table');
        $rows_displayed = 0;
        foreach($loop_array as $key) {
            $prefill = cpg_bridge_prefill($BRIDGE['short_name'],$key);
            $reset_to_default = '';
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == '') {
                $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
            } else {
                $disabled = '';
                $rows_displayed++;
                if ($default_bridge_data[$BRIDGE['short_name']][$key.'_default'] != '') {
                    $reset_to_default = '<img src="images/flags/reset.gif" width="16" height="11" border="0" alt="" title="'.$lang_bridgemgr_php['reset_to_default'].'" style="cursor:pointer" onclick="document.getElementById(\''.$key.'\').value=\''.$default_bridge_data[$BRIDGE['short_name']][$key.'_default'].'\'" />';
                }
            }
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {$fieldtype = 'password';} else {$fieldtype = 'text';}
            if ($_POST['hide_unused_fields'] != 1 || $disabled == '')
            {
                //print $default_bridge_data[$BRIDGE['short_name']][$key.'_used'].'|<br>';
                print '<tr>';
                print '    <td class="tableb">';
                print '        '.$lang_bridgemgr_php[$key].':';
                print '    </td>';
                print '    <td class="tableb">';
                print '        <input type="'.$fieldtype.'" name="'.$key.'" id="'.$key.'" class="textinput" value="'.$prefill.'" '.$disabled.' size="30"  style="width:80%" />'.$reset_to_default;
                print '    </td>';
                print '    <td class="tableb">';
                print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>';
                print '    </td>';
                print '</tr>';
            }
        }
        if ($rows_displayed == 0) {
            print '<tr>'.$new_line;
            print '    <td class="tableh2" colspan="3" align="center">'.$new_line;
            print '        <h2>'.$lang_bridgemgr_php['no_action_needed'].'</h2>'.$new_line;
            print '    </td>'.$new_line;
            print '</tr>'.$new_line;
        }


        print cpg_submit_button($next_step[$step]);
        endtable();
        print "</form>\n";
    } // end if error
    break;

case "db_groups":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" action="'.$_SERVER['PHP_SELF'].'" method="post">';
        starttable('100%',$lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['bbs_groups'], 3);
        if ($default_bridge_data[$BRIDGE['short_name']]['use_standard_groups_used'] != '')
        {
            if ($BRIDGE['use_standard_groups'] != '') {
                $prefill = $BRIDGE['use_standard_groups'];
            } else {
                $prefill = $default_bridge_data[$BRIDGE['short_name']]['use_standard_groups_default'];
            }
            if ($prefill == 1) {
                $checked = 'checked="checked"';
            } else {
                $checked = '';
            }
            print '<tr>'.$new_line;
            print '    <td class="tableb" colspan="2" align="left">'.$new_line;
            print '        <input type="hidden" name="use_standard_groups" id="use_standard_groups" value="'.$prefill.'" />'.$new_line;
            print '        <input type="checkbox" name="dummy_use_standard_groups" id="dummy_use_standard_groups" class="checkbox" value="1" '.$checked.' onclick="toggleGroupFields();" />'.$new_line;
            print '        <label for="dummy_use_standard_groups" class="clickable_option">'.$lang_bridgemgr_php['use_standard_groups'].'</label>'.$new_line;
            print '    </td>'.$new_line;
            print '    <td class="tableb">'.$new_line;
            print '        <span class="explanation">'.$lang_bridgemgr_php['use_standard_groups_explanation'].'</span>'.$new_line;
            print '    </td>'.$new_line;
            print '</tr>'.$new_line;
        }
        $loop_array = array('validating_group', 'guest_group', 'member_group', 'admin_group', 'banned_group', 'global_moderators_group');
        $rows_displayed = 0;
        foreach($loop_array as $key) { // foreach loop start
            $prefill = cpg_bridge_prefill($BRIDGE['short_name'],$key);
            $reset_to_default = '';
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == '') {
                $disabled = 'disabled="disabled" style="background-color:InactiveCaptionText;color:GrayText"';
            } else {
                $disabled = '';
                $rows_displayed++;
                if ($default_bridge_data[$BRIDGE['short_name']][$key.'_default'] != '') {
                    $reset_to_default = '<img src="images/flags/reset.gif" width="16" height="11" border="0" alt="" title="'.$lang_bridgemgr_php['reset_to_default'].'" style="cursor:pointer" onclick="document.getElementById(\''.$key.'\').value=\''.$default_bridge_data[$BRIDGE['short_name']][$key.'_default'].'\'" />';
                }
            }
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {$fieldtype = 'password';} else {$fieldtype = 'text';}
            if ($_POST['hide_unused_fields'] != 1 || $disabled == '')
            {
                print '<tr>'.$new_line;
                print '    <td class="tableb">'.$new_line;
                print '        '.$lang_bridgemgr_php[$key].':'.$new_line;
                print '    </td>'.$new_line;
                print '    <td class="tableb">'.$new_line;
                print '        <input type="'.$fieldtype.'" name="'.$key.'" id="'.$key.'" class="textinput" value="'.$prefill.'" '.$disabled.' size="30"  style="width:80%" />'.$reset_to_default.$new_line;
                print '    </td>'.$new_line;
                print '    <td class="tableb">'.$new_line;
                print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>'.$new_line;
                print '    </td>'.$new_line;
                print '</tr>'.$new_line;
                $keywords[] = $key;
            }
        } // foreach loop end
        if ($rows_displayed == 0) {
            print '<tr>'.$new_line;
            print '    <td class="tableh2" colspan="3" align="center">'.$new_line;
            print '        <h2>'.$lang_bridgemgr_php['no_action_needed'].'</h2>'.$new_line;
            print '    </td>'.$new_line;
            print '</tr>'.$new_line;
        } else {
            // dome dhtml magic to disable the input fields in case they get overridden with the option 'use_standard_groups' anyway
    print '<script type="text/javascript">'.$new_line;
    print '<!--'.$new_line;
    print 'toggleGroupFields();'.$new_line;
    print 'function toggleGroupFields() {'.$new_line;
    print '    var use_standard_groups = document.getElementById("dummy_use_standard_groups").checked;'.$new_line;
    print '    if (use_standard_groups == true) {'.$new_line;
    print '        AllGroupFieldsDisable();'.$new_line;
    print '        document.getElementById("use_standard_groups").value = 1;'.$new_line;
    print '    }'.$new_line;
    print '    if (use_standard_groups == false) {'.$new_line;
    print '        AllGroupFieldsEnable();'.$new_line;
    print '        document.getElementById("use_standard_groups").value = 0;'.$new_line;
    print '    }'.$new_line;
    print '}'.$new_line;
    print 'function AllGroupFieldsDisable() {'.$new_line;
    foreach($keywords as $key) {
    print '    document.getElementById("'.$key.'").disabled = true;'.$new_line;
    print '    document.getElementById("'.$key.'").style.backgroundColor = \'InactiveCaptionText\';'.$new_line;
    print '    document.getElementById("'.$key.'").style.color = \'GrayText\';'.$new_line;
    }
    print '}'.$new_line;
    print 'function AllGroupFieldsEnable() {'.$new_line;
    foreach($keywords as $key) {
    print '    document.getElementById("'.$key.'").disabled = false;'.$new_line;
    print '    document.getElementById("'.$key.'").style.backgroundColor = \'Window\';'.$new_line;
    print '    document.getElementById("'.$key.'").style.color = \'MenuText\';'.$new_line;
    }
    print '}'.$new_line;
    print '-->'.$new_line;
    print '</script>'.$new_line;
        }
        print cpg_submit_button($next_step[$step]);
        endtable();
        print "</form>\n";
    } // end if error
    break;

case "special_settings":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" action="'.$_SERVER['PHP_SELF'].'" method="post">';
        starttable('100%',$lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['special_settings'], 3);
        $loop_array = array('logout_flag', 'use_post_based_groups','license_number');
        $rows_displayed = 0;
        foreach($loop_array as $key) { // foreach loop_array --- start
            if ($BRIDGE[$key]) {
                $prefill = $BRIDGE[$key];
            } else {
                $prefill = $default_bridge_data[$BRIDGE['short_name']][$key.'_default'];
            }
            //print 'key:'.$key.',prefill:'.$prefill.'<br>';
            //print_r($default_bridge_data[$BRIDGE['short_name']]);
            //if ($default_bridge_data['phpbb']['logout_flag_default'] == true){print '<h1>true</h1>';}else{print '<h1>not true</h1>';}
            $reset_to_default = '';
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == '') {
                $disabled = 'disabled="disabled"';
            } else {
                $disabled = '';
                $rows_displayed++;
            }
            // get the possible options for the value
            //  e.g. 'option_name_used' => 'radio,1,0',
            $option_yes = '';
            $option_no = '';
            $options = explode(',', $default_bridge_data[$BRIDGE['short_name']][$key.'_used']);
            //print_r($options);
            if ($options[0] == 'radio') {$option_yes = $options[1]; $option_no = $options[2];}
            if ($BRIDGE[$key] == $options[1]) {
                $checked_yes = 'checked="checked"';
                $checked_no = '';
            } elseif ($BRIDGE[$key] == $options[2]) {
                $checked_yes = '';
                $checked_no = 'checked="checked"';
            }
            //if ($BRIDGE[$key] == 1){print $key.'true<br>';}
            //if ($BRIDGE[$key] == 0){print $key.'false<br>';}
            //print $key.$BRIDGE[$key];
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {$fieldtype = 'password';} else {$fieldtype = 'text';}
            if ($_POST['hide_unused_fields'] != 1 || $disabled == '') { // actually display the row? --- start
                if ($options[0] == 'radio') { // radio button --- start
                    print '<tr>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        '.$lang_bridgemgr_php[$key].':'.$new_line;
                    print '    </td>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        <input type="Radio" name="'.$key.'" id="'.$key.'_yes" class="radio" value="'.$option_yes.'" '.$disabled.' '.$checked_yes.' />'.$new_line;
                    print '        <label for="'.$key.'_yes" class="clickable_option">'.$new_line;
                    print '            '.$lang_bridgemgr_php[$key.'_yes'].$new_line;
                    print '        </label>&nbsp;'.$new_line;
                    print '        <br />'.$new_line;
                    print '        <input type="Radio" name="'.$key.'" id="'.$key.'_no" class="radio" value="'.$option_no.'" '.$disabled.' '.$checked_no.' /><label for="'.$key.'_no" class="clickable_option">'.$lang_bridgemgr_php[$key.'_no'].'</label>'.$new_line;
                    print '    </td>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>'.$new_line;
                    print '    </td>'.$new_line;
                    print '</tr>'.$new_line;
                } // radio button --- end
                if ($options[0] == 'mandatory') { // input field --- start
                    print '<tr>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        '.$lang_bridgemgr_php[$key].':'.$new_line;
                    print '    </td>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        <input type="'.$fieldtype.'" name="'.$key.'" id="'.$key.'" class="textinput" value="'.$prefill.'" '.$disabled.' size="30"  style="width:80%" />'.$reset_to_default.$new_line;
                    print '    </td>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>'.$new_line;
                    print '    </td>'.$new_line;
                    print '</tr>'.$new_line;
                } // input field --- end
                if ($options[0] == 'checkbox') { // checkbox --- start
                    print '<tr>'.$new_line;
                    print '    <td class="tableb" colspan="2">'.$new_line;
                    print '        <input type="checkbox" name="'.$key.'" id="'.$key.'" class="checkbox" value="1" '.$checked.' />'.$new_line;
                    print '        <label for="'.$key.'" class="clickable_option">'.$new_line;
                    print '            '.$lang_bridgemgr_php[$key].$new_line;
                    print '        </label>&nbsp;'.$new_line;
                    print '    </td>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        <span class="explanation">'.$lang_bridgemgr_php[$key.'_explanation'].'</span>'.$new_line;
                    print '    </td>'.$new_line;
                    print '</tr>'.$new_line;
                } // checkbox --- end
            } // actually display the row? --- end
        } // foreach loop_array --- end

        if ($default_bridge_data[$BRIDGE['short_name']]['create_redir_file_content'] != '') { // create redirection file question --- start
            // sub-step1: make up the content of the redir file
            $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_content'] = str_replace('{COPPERMINE_URL}', rtrim($CONFIG['ecards_more_pic_target'], '/').'/', $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_content']);
            // sub-step2: can we read the folder it's suppossed to go into?
            // sub-step3: is the redir file already in place and if yes: does it match the content we have come up with?
            // sub-step4: is the folder writable?
            // if we can't write (for whatever reason), just output the contents for copy and paste
            // what do we need: write the file, display it only or do both?
            $redir_action = explode(',', $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action']);
            if (in_array('write',$redir_action)) { // the file should be created --- start
                // come up with the folder the bbs resides in
                if ($BRIDGE['relative_path_of_forum_from_webroot'] != '' && $default_bridge_data[$BRIDGE['short_name']]['relative_path_of_forum_from_webroot_used'] != '') {
                    // we have a db entry and the user appears to have it configured
                    $redir_folder = $BRIDGE['relative_path_of_forum_from_webroot'];
                } elseif ($BRIDGE['relative_path_to_config_file'] != '' && $default_bridge_data[$BRIDGE['short_name']]['relative_path_to_config_file_used'] != '') {
                    // we have a relative path. We'll use it if we don't have a folder already
                    $redir_folder = $BRIDGE['relative_path_to_config_file'];
                } else {
                    // something strange happened: there is no path set at all. We won't be able to write the file. Change the option to "display_only"
                    $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action'] = @str_replace(',write', '', $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action']);
                    $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action'] = @str_replace('write,', '', $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action']);
                    $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action'] = @str_replace('write', '', $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action']);
                    $redir_action = explode(',', $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_action']);
                }
                // check if the redir file already exists
                print $redir_folder;
                $redir_folder_writable = cpg_is_writable($redir_folder);
                if ($redir_folder_writable == '-1') {
                    // the redir folder is not writable
                    print 'Not writable';
                }
            } // the file should be created --- end
            // display the option
            // temporarily removed this section, as it's still under construction
            print '<!--';
            print '<tr>'.$new_line;
            print '    <td class="tableb" colspan="2">'.$new_line;
            print '        <input type="checkbox" name="create_redir_file" id="create_redir_file" class="checkbox" value="1" checked="checked" />'.$new_line;
            print '        <label for="create_redir_file" class="clickable_option">'.$new_line;
            print '        <span class="explanation">'.$new_line;
            print '            '.$lang_bridgemgr_php['create_redir_file'].$new_line;
            print '        </span>'.$new_line;
            print '        </label>&nbsp;'.$new_line;
            print '    </td>'.$new_line;
            print '    <td class="tableb">'.$new_line;
            print '        <span class="explanation">'.$new_line;
            print '        '.$lang_bridgemgr_php['create_redir_file_explanation'].$new_line;
            print '        </span>'.$new_line;
            print '    </td>'.$new_line;
            print '</tr>'.$new_line;
            print '<tr>'.$new_line;
            print '    <td class="tableb" colspan="3">'.$new_line;
            print '        <textarea style="width:100%">';
            print $default_bridge_data[$BRIDGE['short_name']]['create_redir_file_content'];
            print '        </textarea>';
            print '    </td>'.$new_line;
            print '</tr>'.$new_line;
            print '-->';
            // temporarily removed this section, as it's still under construction --- end
        } // create redirection file question --- end

        if ($rows_displayed == 0) {
            print '<tr>';
            print '    <td class="tableh2" colspan="3" align="center">';
            print '        <h2>'.$lang_bridgemgr_php['no_action_needed'].'</h2>';
            print '    </td>';
            print '</tr>';
        }
        print cpg_submit_button($next_step[$step]);
        endtable();
        print "</form>\n";
    } // end if error
    break;


case "finalize":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        $CONFIG = cpg_refresh_config_db_values();

                // sync groups here now :)
                if ($CONFIG['bridge_enable']){
                                                include_once 'bridge/' . $BRIDGE['short_name'] . '.inc.php';
                        $cpg_udb->synchronize_groups();
                } else {
                        // ok, then restore group table
                        cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                        VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)");
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                        VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)");
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                        VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");
                        cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                        VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");
                }
        print '<form name="'.$step.'" action="'.$_SERVER['PHP_SELF'].'" method="post">';
        echo <<<EOT
    <script type="text/javascript">
    <!--
    function changeSubmitButton() {
        document.finalize.submit.value='{$lang_bridgemgr_php['finish']}';
        document.finalize.step.value='finalize';
        document.finalize.force_startpage.value='1';
    }
    -->
    </script>
EOT;
        starttable(-1,$lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['finalize'],2);
        if ($_POST['submit'] && $CONFIG['bridge_enable'] != 1) {
            print '<tr>';
            print '<td class="tableb" colspan="2">';
            print '<span class="explanation">';
            printf($lang_bridgemgr_php['finalize_explanation'],$CONFIG['ecards_more_pic_target'].'/bridgemgr.php');
            print '</span>';
            print '</td>';
            print '</tr>';
        }
        if (is_array($BRIDGE)) { // there are entries in the db already --- start
            print '<tr>';
            print '<td class="tableh2" colspan="2">';
            print $lang_bridgemgr_php['your_bridge_settings'];
            print '</td>';
            print '</tr>';
            $mandatory_fields_missing = 0;
            foreach($BRIDGE as $key => $value) {
                if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] != '') {
                    print '<tr>';
                    print '    <td class="tableb" width="50%">';
                    print '        <span class="explanation">'.$lang_bridgemgr_php[$key].':</span>';
                    print '    </td>';
                    print '    <td class="tableb" width="50%">';
                    if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {
                        $pw = '';
                        for ($i=1; $i <= strlen($value);$i++) {
                            $pw = $pw.'*';
                        }
                        $value = $pw;
                    }
                    print '        <span class="explanation">'.$value;
                    // check if we really can allow enabling bridging: are all required fields in the db?
                    if (strstr($default_bridge_data[$BRIDGE['short_name']][$key.'_used'], 'not_empty') != false && $value == '') {
                        print ' (<span class="important">'.$lang_bridgemgr_php['error_must_not_be_empty'].'</span>)';
                        $mandatory_fields_missing++;
                    }
                    $explode = explode(',', $default_bridge_data[$BRIDGE['short_name']][$key.'_used']);
                    if ($explode[0] == radio && ($value != $explode[1] && $value != $explode[2])) {
                        printf(' ('.$lang_bridgemgr_php['error_either_be'].')',$explode[1],$explode[2]);
                        $mandatory_fields_missing++;
                    }
                    //print '<br>';
                    print '</span>';
                    print '    </td>';
                    print '</tr>';
                }
            }
        }  // there are entries in the db already --- end
        if ($BRIDGE['short_name'] != '') {// display the enable/disable option only if there's at least a db entry about the file to bridge with --- start
            print '<tr>';
            print '<td class="tableh2" colspan="2">';
            printf($lang_bridgemgr_php['title_enable'], '<b>'.$default_bridge_data[$BRIDGE['short_name']]['full_name'].'</b>');
            print '</td>';
            print '</tr>';
            //print 'bridge enabled:'.$CONFIG['bridge_enable'];
            if ($CONFIG['bridge_enable'] == 1) {
                $checked_yes = 'checked="checked"';
                $checked_no = '';
                $disabled_yes = '';
                $disabled_no = '';
            } else {
                $checked_yes = '';
                $checked_no = 'checked="checked"';
                if ($mandatory_fields_missing != 0) {
                    $disabled_yes = 'disabled="disabled"';
                    $disabled_no = '';
                } else {
                    $disabled_yes = '';
                    $disabled_no = '';
                }
            }
        } // display the enable/disable option only if there's at least a db entry about the file to bridge with --- end
        if ($_POST['submit'] == '' || $_POST['wizard_finished'] != '' || $_POST['force_startpage'] == '1') {
            if ($BRIDGE['short_name'] != '') {// display the enable/disable option only if there's at least a db entry about the file to bridge with --- start
                print '<tr>';
                print '    <td class="tableb" width="50%">';
                print '        <input type="Radio" name="bridge_enable" id="bridge_enable_yes" class="radio" value="1" '.$disabled_yes.' '.$checked_yes.' onclick="changeSubmitButton();" /><label for="bridge_enable_yes" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_yes'].'</label>';
                print '    </td>';
                print '    <td class="tableb" width="50%">';
                print '        <input type="Radio" name="bridge_enable" id="bridge_enable_no" class="radio" value="0" '.$disabled_no.' '.$checked_no.' onclick="changeSubmitButton();" /><label for="bridge_enable_no" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_no'].'</label>';
                print '    </td>';
                print '</tr>';
            } // display the enable/disable option only if there's at least a db entry about the file to bridge with --- end
            print '<tr>'.$new_line;
            print '        <td colspan="2" class="tablef" align="center">'.$new_line;
            print '            <table border="0" cellspacing="0" cellpadding="0" width="100%">'.$new_line;
            print '                <tr>'.$new_line;
            print '                    <td align="left">'.$new_line;
            print '                        <!--<input type="Checkbox" name="hide_unused_fields" id="hide_unused_fields" value="1" class="checkbox"  />'.$new_line;
            print '                        <label for="hide_unused_fields" class="clickable_option"><span class="explanation">hide unused form fields (recommended)</span></label>-->'.$new_line;
            print '                   </td>'.$new_line;
            print '                   <td align="center">'.$new_line;
            print '                        <!--<input type="button" name="back" value="&laquo;back" class="button" onclick="javascript:history.back()" />-->'.$new_line;
            print '                        <input type="submit" name="submit" value="'.$lang_bridgemgr_php['start_wizard'].'" class="button" />'.$new_line;
            print '                        <input type="hidden" name="step" value="choose_bbs" />'.$new_line;
            print '                        <input type="hidden" name="force_startpage" value="0" />'.$new_line;
            print '                   </td>'.$new_line;
            print '                 </tr>'.$new_line;
            print '             </table>'.$new_line;
            print '        </td>'.$new_line;
            print '</tr>'.$new_line;
        } else {
            print '<tr>';
            print '    <td class="tableb" width="50%">';
            print '        <input type="Radio" name="bridge_enable" id="bridge_enable_yes" class="radio" value="1" '.$disabled_yes.' '.$checked_yes.' /><label for="bridge_enable_yes" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_yes'].'</label>';
            print '    </td>';
            print '    <td class="tableb" width="50%">';
            print '        <input type="Radio" name="bridge_enable" id="bridge_enable_no" class="radio" value="0" '.$disabled_no.' '.$checked_no.' /><label for="bridge_enable_no" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_no'].'</label>';
            print '    </td>';
            print '</tr>';
            print '<tr>'.$new_line;
            print '        <td colspan="2" class="tablef" align="center">'.$new_line;
            print '            <table border="0" cellspacing="0" cellpadding="0" width="100%">'.$new_line;
            print '                <tr>'.$new_line;
            print '                    <td align="left">'.$new_line;
            //print '                        <input type="Checkbox" name="clear_unused_db_fields" id="clear_unused_db_fields" value="1" class="checkbox"  checked="checked" />'.$new_line;
            //print '                        <label for="clear_unused_db_fields" class="clickable_option"><span class="explanation">'.$lang_bridgemgr_php['clear_unused_db_fields'].'</span></label>'.$new_line;
            print '                   </td>'.$new_line;
            print '                   <td align="center">'.$new_line;
            print '                        <input type="button" name="back" value="&laquo;'.$lang_bridgemgr_php['back'].'" class="button" onclick="javascript:history.back()" />'.$new_line;
            print '                        <input type="submit" name="submit" value="'.$lang_bridgemgr_php['finish'].'" class="button" />'.$new_line;
            print '                        <input type="hidden" name="step" value="finalize" />'.$new_line;
            print '                        <input type="hidden" name="wizard_finished" value="finished" />'.$new_line;
            print '                   </td>'.$new_line;
            print '                 </tr>'.$new_line;
            print '             </table>'.$new_line;
            print '        </td>'.$new_line;
            print '</tr>'.$new_line;
        }
        endtable();
        print '</form>';
    } // end if error
    break;
}


print "<br />\n";
pagefooter();
} // gallery admin mode --- end
else { // not in gallery admin mode --- start
    if ($CONFIG['bridge_enable'] != 1) { cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__); }

    // initialize vars
    $step = $_POST['step'];
    $new_line = "\n";

    pageheader($lang_bridgemgr_php['title']);
    switch ($step) {
    case "attempt_to_disable":
    // check if the wait time is over; if it isn't, send them back
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_timestamp = $row['value'];
    //print $recovery_logon_timestamp;
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_failures = $row['value'];
    $logon_allowed = cpg_check_allowed_emergency_logon($recovery_logon_timestamp,$recovery_logon_failures);
    if ($logon_allowed > 0) {
        // the user is not allowed to logon yet, the wait time has not elapsed yet
        msg_box($lang_bridgemgr_php['recovery_wait_title'], $lang_bridgemgr_php['recovery_wait_content'], $lang_bridgemgr_php['try_again'], $_SERVER['PHP_SELF'], "-1");
    } else { // the logon wait time has passed, the user is allowed to try to logon now
        // go through the list of standalone admins and check if we have a match
        $temp_user_table = $CONFIG['TABLE_PREFIX'].'users';

        // Check if encrypted passwords are enabled
        if ($CONFIG['enable_encrypted_passwords']) {
                $encpassword = md5(addslashes($_POST['password']));
        } else {
                $encpassword = addslashes($_POST['password']);
        }

        $results = cpg_db_query("SELECT user_id, user_name, user_password FROM $temp_user_table WHERE user_name = '" . addslashes($_POST['username']) . "' AND BINARY user_password = '" . $encpassword . "' AND user_active = 'YES' AND user_group = '1'");
        if (mysql_num_rows($results)) {
            $retrieved_data = mysql_fetch_array($results);
        }
        if ($retrieved_data['user_name'] == $_POST['username'] && $retrieved_data['user_password'] == $encpassword && $retrieved_data['user_name'] != '' ) {
            // authentification successfull
            cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '0' WHERE name = 'bridge_enable'");
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '0' WHERE name = 'recovery_logon_failures'");
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'");

                        // ok, then restore group table
                                cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
                                cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                                VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)");
                                cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                                VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)");
                                cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                                VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");
                                cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
                                VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");

            if (USER_ID) { //user already logged in
                msg_box($lang_bridgemgr_php['recovery_success_title'], $lang_bridgemgr_php['recovery_success_content'], $lang_bridgemgr_php['goto_bridgemgr'], $_SERVER['PHP_SELF'], "-1");
            } else { // user not logged in yet
                msg_box($lang_bridgemgr_php['recovery_success_title'], $lang_bridgemgr_php['recovery_success_content'].'<br />'.$lang_bridgemgr_php['recovery_success_advice_login'], $lang_bridgemgr_php['goto_login'], "login.php?referer=".$_SERVER['PHP_SELF'], "-1");
            }
        } else {
            // authentification failed
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'");
            $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
            if (mysql_num_rows($results)) {
                $row = mysql_fetch_array($results);
            }
            $number_of_failed_attempts = $row['value'] + 1;
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$number_of_failed_attempts' WHERE name = 'recovery_logon_failures'");
            msg_box($lang_bridgemgr_php['recovery_failure_title'], $lang_bridgemgr_php['recovery_failure_content'], $lang_bridgemgr_php['try_again'], $_SERVER['PHP_SELF'], "-1");
        }
    }
    break;
    default:
    // check if the wait time is over; if it isn't, disable the submit button
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_timestamp = $row['value'];
    //print $recovery_logon_timestamp;
    $results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
    if (mysql_num_rows($results)) {
        $row = mysql_fetch_array($results);
    }
    $recovery_logon_failures = $row['value'];
    $logon_allowed = cpg_check_allowed_emergency_logon($recovery_logon_timestamp,$recovery_logon_failures);
    if ($logon_allowed < 0) {$logon_allowed = 0;}
    starttable(-1,$lang_bridgemgr_php['recovery_title'],2);
        echo <<<EOT
        <form name="disable_integration" action="{$_SERVER['PHP_SELF']}" method="post">
        <tr>
            <td class="tableb" colspan="2">
                {$lang_bridgemgr_php['recovery_explanation']}
            </td>
        </tr>
        <tr>
              <td class="tableb" width="40%">{$lang_bridgemgr_php['username']}</td>
              <td class="tableb" width="60%"><input type="text" class="textinput" name="username" style="width: 100%" /></td>
        </tr>
        <tr>
            <td class="tableb">{$lang_bridgemgr_php['password']}</td>
            <td class="tableb"><input type="password" class="textinput" name="password" style="width: 100%" /></td>
        </tr>
        <tr>
            <td class="tablef" colspan="2" align="center">
                <input type="submit" name="submit" id="submit" value="{$lang_bridgemgr_php['disable_submit']}" class="button" />
                <input type="hidden" name="step" value="attempt_to_disable" />
            </td>
        </tr>
        <script language="javascript" type="text/javascript">
        <!--
        document.disable_integration.username.focus();
        document.disable_integration.submit.disabled = true;

EOT;
print '        var countDownTime = '.$logon_allowed;
echo <<<EOT

        counter=setTimeout("countDown()", 1000);
        var aktiv = window.setInterval("countDown()",1000);
        var message = '{$lang_bridgemgr_php['wait']}';
        function countDown(){
                countDownTime--;
                if (countDownTime <=0) {
                    message = '{$lang_bridgemgr_php['disable_submit']}';
                    document.getElementById('submit').disabled = false;
                    countDownTime='';
                    clearTimeout(counter);
                    //return;
                }
                document.getElementById('submit').value = message +' '+countDownTime;
        }
        window.onload=countDown();
        -->
        </script>
EOT;
        endtable();
        print '</form>';
    break;
    }
    pagefooter();
} // not in gallery admin mode --- end



//////////////////////// main code end /////////////////////////////////

?>