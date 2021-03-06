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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/bridgemgr.php $
  $Revision: 5126 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-17 13:10:13 +0530 (Fri, 17 Oct 2008) $
**********************************************/


define('IN_COPPERMINE', true);
define('BRIDGEMGR_PHP', true);

require('include/init.inc.php');

///////////// function defintions start /////////////////////////////

function write_to_db($step) {
    global $BRIDGE,$CONFIG,$default_bridge_data,$lang_bridgemgr_php, $previous_step, $next_step, $posted_var;
    global $cpg_db_bridgemgr_php;
    ################            DB           #################	
    $cpgdb =& cpgDB::getInstance();
    $cpgdb->connect_to_existing($CONFIG['LINK_ID']);
    ############################################	
    $error = 0;
    // do the check for plausibility of posted data
    foreach($posted_var as $key => $value) { // loop through the posted data -- start
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
            } // only continue with this loop if there really is an option to check --- end
        } // post data exists as db key -- end
    } // loop through the posted data -- end


    // loop through the expected data
    //void


    // do some checking according to the step we're currently in
    switch ($step) {
    case "choose_bbs":
    if ($posted_var['short_name'] == '') {
        $return['short_name'] = $lang_bridgemgr_php['error_specify_bbs'];
        $error++;
    }
    if ($posted_var['short_name'] == 'custom_selector') {
        $posted_var['short_name'] = $posted_var['custom_filename'];
        if ($posted_var['short_name'] == '') {
            $return['short_name'] = $lang_bridgemgr_php['error_no_blank_name'];
        }
        if (ereg('[^A-Za-z0-9_-]',$posted_var['short_name'])) {
            $return['short_name'] = $lang_bridgemgr_php['error_no_special_chars'];
        }
    }
    // check if the bridge file actually exists
    if (file_exists('bridge/'.$posted_var['short_name'].'.inc.php') == false) {
        $return['bridge_file_not_exist'] = sprintf($lang_bridgemgr_php['error_bridge_file_not_exist'],'<i>bridge/'.$posted_var['short_name'].'.inc.php</i>');
    }
       break;

    case "settings_path":
    //if ($posted_var['short_name'] == '') {
    //    $return['short_name'] = $lang_bridgemgr_php['error_specify_bbs'];
    //}

       break;

    /*case "db_connect":
        if ($default_bridge_data[$BRIDGE['short_name']]['db_hostname_used'] != '') { // check the db connection --- start
            @mysql_close(); //temporarily disconnect from the coppermine database
            ob_start();
            $link = mysql_connect($posted_var['db_hostname'], $posted_var['db_username'], $posted_var['db_password']);
            $mysql_error_output = ob_get_contents();
            ob_end_clean();
            if (!$link) {
                $return[$step] = $lang_bridgemgr_php['error_db_connect'].'<tt>'.$mysql_error_output.'</tt>';
            } elseif ($default_bridge_data[$BRIDGE['short_name']]['db_database_name_used'] != '') { // check the database
                ob_start();
                $db_selected = mysql_select_db($posted_var['db_database_name'], $link);
                print mysql_error();
                $mysql_error_output = ob_get_contents();
                ob_end_clean();
                if (!$db_selected) {
                   $return['db_database_name'] = sprintf($lang_bridgemgr_php['error_db_name'], '<i>'.$posted_var['db_database_name'].'</i>', '<i>'.$lang_bridgemgr_php['db_database_name'].'</i>'). ' <tt>'.$mysql_error_output.'</tt>';
                }
            }
            @mysql_close($link);
            cpg_db_connect(); // connect back to coppermine db
        } // check the db connection --- end
       break; */
    ################################################          DB       ###############################################
    case "db_connect":
		if($CONFIG['dbservername'] == 'mysql') {
			if ($default_bridge_data[$BRIDGE['short_name']]['db_hostname_used'] != '') { // check the db connection --- start
				@mysql_close(); //temporarily disconnect from the coppermine database
				ob_start();
				$link = mysql_connect($posted_var['db_hostname'], $posted_var['db_username'], $posted_var['db_password']);
				$sql_error_output = ob_get_contents();
				ob_end_clean();
				if (!$link) {
					$return[$step] = $lang_bridgemgr_php['error_db_connect'].'<tt>'.$sql_error_output.'</tt>';
				} elseif ($default_bridge_data[$BRIDGE['short_name']]['db_database_name_used'] != '') { // check the database
					ob_start();
					$db_selected = mysql_select_db($posted_var['db_database_name'], $link);
					print mysql_error();
					$sql_error_output = ob_get_contents();
					ob_end_clean();
					if (!$db_selected) {
						$return['db_database_name'] = sprintf($lang_bridgemgr_php['error_db_name'], '<i>'.$posted_var['db_database_name'].'</i>', '<i>'.$lang_bridgemgr_php['db_database_name'].'</i>'). ' <tt>'.$sql_error_output.'</tt>';
					}
				}
				@mysql_close($link);
				$cpgdb->connect($CONFIG['dbname'], $CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']);	//	connect back to coppermine db
			}	// check the db connection --- end
		} elseif ($CONFIG['dbservername'] == 'mssql') {
			if ($default_bridge_data[$BRIDGE['short_name']]['db_hostname_used'] != '') { // check the db connection --- start
				@sqlsrv_close($cpgdb->Link_ID); // temporarily disconnect from the coppermine database
				if ($CONFIG['auth_mode'] == 'sqlserver') {
					$conn_info = array('UID' => $posted_var['db_username'], 'PWD' => $posted_var['db_password']);
				} else {
					$conn_info = array();
				}
				ob_start();
				$link = sqlsrv_connect($posted_var['db_hostname'], $conn_info);
				$sql_error_output = ob_get_contents();
				ob_get_clean();
				if (!$link) {
					$return[$step] = $lang_bridgemgr_php['error_db_connect'].'<tt>'.$sql_error_output.'</tt>';
				} elseif ($default_bridge_data[$BRIDGE['short_name']]['db_database_name_used'] != '') { // check the database
					$sqlsrv_close($link);	//  now try to connect with the database using the database name
					$conn_info['Database'] = $posted_var['db_database_name'];
					ob_start();
					$link = sqlsrv_connect($posted_var['db_hostname'], $conn_info);
					print_r(sqlsrv_errors());
					$sql_error_output = ob_get_contents();
					ob_end_clean();
					if (!$link) {
						$return['db_database_name'] = sprintf($lang_bridgemgr_php['error_db_name'], '<i>'.$posted_var['db_database_name'].'</i>', '<i>'.$lang_bridgemgr_php['db_database_name'].'</i>'). ' <tt>'.$sql_error_output.'</tt>';
					}
				}
				$sqlsrv_close($link);
				$cpgdb->connect($CONFIG['dbname'], $CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']);	//	connect back to coppermine db
			}
		}
	########################################################################################################

    /*case "db_tables":
        if ($default_bridge_data[$BRIDGE['short_name']]['table_prefix_used'] != '') {
            $prefix_and_table = sprintf($lang_bridgemgr_php['error_prefix_and_table'], '<i>'.$lang_bridgemgr_php['table_prefix'].'</i>');
        }
        @mysql_close(); //temporarily disconnect from the coppermine database
        $link = @mysql_connect($BRIDGE['db_hostname'], $BRIDGE['db_username'], $BRIDGE['db_password']);
        $db_selected = @mysql_select_db($BRIDGE['db_database_name'], $link);
        $loop_table_names = array ('user_table', 'session_table', 'group_table', 'group_table', 'group_relation_table', 'group_mapping_table');
        foreach ($loop_table_names as $key) { // loop through the possible tables --- start
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] != '') { // check if table exists --- start
                $temp_tablename = $posted_var['table_prefix'].$posted_var[$key];
                $result = mysql_query('SELECT * FROM '.$temp_tablename);
                if (!$result) {
                    $return['db_'.$key] = sprintf($lang_bridgemgr_php['error_db_table'], '<i>'.$temp_tablename.'</i>', $prefix_and_table.'<i>'.$lang_bridgemgr_php[$key].'</i>'). ' <tt>'.$mysql_error_output.'</tt>';
                }
                @mysql_free_result($result);
            } // check if table exists --- end
        } // loop through the possible tables --- end
        @mysql_close($link);
        cpg_db_connect(); // connect back to coppermine db
       break; */
    #####################################################        DB        #################################################
    case "db_tables":
        if ($default_bridge_data[$BRIDGE['short_name']]['table_prefix_used'] != '') {
            $prefix_and_table = sprintf($lang_bridgemgr_php['error_prefix_and_table'], '<i>'.$lang_bridgemgr_php['table_prefix'].'</i>');
        }
        $cpgsql =& cpdDB :: getInstance();
        $cpgsql->connect_to_existing($CONFIG['LINK_ID']);
        @$cpgsql->close(); //temporarily disconnect from the coppermine database
        $link = @$cpgsql->connect($BRIDGE['db_database_name'], $BRIDGE['db_hostname'], $BRIDGE['db_username'], $BRIDGE['db_password']);

        $loop_table_names = array ('user_table', 'session_table', 'group_table', 'group_table', 'group_relation_table', 'group_mapping_table');
        foreach ($loop_table_names as $key) { // loop through the possible tables --- start
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] != '') { // check if table exists --- start
                $temp_tablename = $posted_var['table_prefix'].$posted_var[$key];
                $result = $cpgsql->query($cpg_db_bridgemgr_php['get_db_tables'], $temp_tablename);
                if (!$result) {
                    $return['db_'.$key] = sprintf($lang_bridgemgr_php['error_db_table'], '<i>'.$temp_tablename.'</i>', $prefix_and_table.'<i>'.$lang_bridgemgr_php[$key].'</i>'). ' <tt>'.$sql_error_output.'</tt>';
                }
                @$cpgsql->free();
            } // check if table exists --- end
        } // loop through the possible tables --- end
        @$cpgsql->close($link);
        @$cpgdb->connect($CONFIG['dbname'], $CONFIG['dbserver'], $CONFIG['dbuser'], $CONFIG['dbpass']); // connect back to coppermine db
        break;	
    ##############################################################################################################

    } // end switch

    // write the post data to the database
    foreach($posted_var as $key => $value) {
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
                //cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$value' WHERE name = '$key'");
				############################      DB     #########################
				$cpgdb->query($cpg_db_bridgemgr_php['update_bridge'], $value, $key);
				#############################################################
            }
            //print '<br />';
        }
    }
    $value = $posted_var['bridge_enable'];
    if ($value != '0' && $value != '1') {
        $value = $CONFIG['bridge_enable'];
    }
    
    cpg_config_set('bridge_enable', $value);
    
    if ($posted_var['clear_unused_db_fields'] == 1) {
        // clear all database entries that aren't actually used with the current bridge file
        // not implemented yet (not sure if necessary after all)
    }

    // ouput error messages, if any
    if (is_array($return)) {
        starttable(-1, $lang_bridgemgr_php['error_title']);
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
    global $lang_bridgemgr_php,$new_line, $posted_var;
    $checked = '';

    if ($posted_var['hide_unused_fields'] != 1) {
        $checked = 'checked="checked"';
    }
    $return = '    <tr>'.$new_line;
    $return .= '        <td colspan="'.$columns.'" class="tablef" align="center">'.$new_line;
    $return .= '            <table border="0" cellspacing="0" cellpadding="0" width="100%"><tr>'.$new_line;
    $return .= '            <td align="left">'.$new_line;
    $return .= '            <input type="hidden" name="hide_unused_fields" id="hide_unused_fields" value="1" class="checkbox" '.$checked.' onclick="toggleUnusedFields(this);" />'.$new_line;
    $return .= '            <!--<label for="hide_unused_fields" class="clickable_option">'.$new_line;
    $return .= '            <span class="explanation">'.$new_line;
    $return .= '                '.$lang_bridgemgr_php['hide_unused_fields'].$new_line;
    $return .= '            </span>'.$new_line;
    $return .= '            </label>-->&nbsp;'.$new_line;
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
    $return .= '        <td align="right">'.$new_line;
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

/*function cpg_refresh_config_db_values() {
    global $CONFIG;
    // Retrieve DB stored configuration
    $results = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");
    while ($row = mysql_fetch_array($results)) {
        $CONFIG[$row['name']] = $row['value'];
    } // while
    mysql_free_result($results);
    return $CONFIG;
} */
##################		DB		##################
function cpg_refresh_config_db_values() {
    global $CONFIG, $cpg_db_bridgemgr_php;
    $cpgdb =& cpgDB::getInstance();
    $cpgdb->connect_to_existing($CONFIG['LINK_ID']);
    // Retrieve DB stored configuration
    $cpgdb->query($cpg_db_bridgemgr_php['get_all_config']);
    while ($row = $cpgdb->fetchRow()) {
        $CONFIG[$row['name']] = $row['value'];
    } // while
    $cpgdb->free();
    return $CONFIG;
}
###################################################

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

//////////////// main code start //////////////////////

// Sanitize superglobals
if ($superCage->post->keyExists('hide_unused_fields')) {
    $posted_var['hide_unused_fields'] = $superCage->post->getDigits('hide_unused_fields');
}
//$posted_var['hide_unused_fields'] = 0;//override the posted var for debugging purposes
if ($superCage->post->keyExists('step')) {
    $matches = $superCage->post->getMatched('step', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['step'] = $matches[0];
}
if ($superCage->post->keyExists('force_startpage')) {
    $posted_var['force_startpage'] = $superCage->post->getDigits('force_startpage');
}
if ($superCage->post->keyExists('wizard_finished')) {
    $posted_var['wizard_finished'] = $superCage->post->getAlpha('wizard_finished');
}
if ($superCage->post->keyExists('submit')) {
    $posted_var['submit'] = 1;
}
if ($superCage->post->keyExists('short_name')) {
    $matches = $superCage->post->getMatched('short_name', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['short_name'] = $matches[0];
}
if ($superCage->post->keyExists('custom_filename')) {
    $matches = $superCage->post->getMatched('custom_filename', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['custom_filename'] = $matches[0];
}
if ($superCage->post->keyExists('use_standard_groups')) {
    $posted_var['use_standard_groups'] = $superCage->post->getAlnum('use_standard_groups');
}
if ($superCage->post->keyExists('dummy_use_standard_groups')) {
    $posted_var['dummy_use_standard_groups'] = $superCage->post->getAlnum('dummy_use_standard_groups');
}
if ($superCage->post->keyExists('create_redir_file')) {
    $posted_var['create_redir_file'] = $superCage->post->getDigits('create_redir_file');
}
if ($superCage->post->keyExists('bridge_enable')) {
    $posted_var['bridge_enable'] = $superCage->post->getDigits('bridge_enable');
}
if ($superCage->post->keyExists('db_database_name')) {
    // Let's assume that the database name is sane 
    $matches = $superCage->post->getMatched('db_database_name', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['db_database_name'] = $matches[0];
}
if ($superCage->post->keyExists('table_prefix')) {
    // Let's assume that the table_prefix is sane 
    $matches = $superCage->post->getMatched('table_prefix', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['table_prefix'] = $matches[0];
}
if ($superCage->post->keyExists('clear_unused_db_fields')) {
    $posted_var['clear_unused_db_fields'] = $superCage->post->getDigits('clear_unused_db_fields');
}
if ($superCage->post->keyExists('user_table')) {
    $matches = $superCage->post->getMatched('user_table', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['user_table'] = $matches[0];
}
if ($superCage->post->keyExists('session_table')) {
    $matches = $superCage->post->getMatched('session_table', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['session_table'] = $matches[0];
}
if ($superCage->post->keyExists('group_table')) {
    $matches = $superCage->post->getMatched('group_table', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['group_table'] = $matches[0];
}
if ($superCage->post->keyExists('group_relation_table')) {
    $matches = $superCage->post->getMatched('group_relation_table', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['group_relation_table'] = $matches[0];
}
if ($superCage->post->keyExists('group_mapping_table')) {
    $matches = $superCage->post->getMatched('group_mapping_table', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['group_mapping_table'] = $matches[0];
}
if ($superCage->post->keyExists('username')) {
    $posted_var['username'] = $superCage->post->getEscaped('username');
}
if ($superCage->post->keyExists('password')) {
    $posted_var['password'] = $superCage->post->getEscaped('password');
}
if ($superCage->post->keyExists('full_forum_url')) {
    $posted_var['full_forum_url'] = $superCage->post->getEscaped('full_forum_url');
}
if ($superCage->post->keyExists('relative_path_of_forum_from_webroot')) {
    $posted_var['relative_path_of_forum_from_webroot'] = $superCage->post->getEscaped('relative_path_of_forum_from_webroot');
}
if ($superCage->post->keyExists('relative_path_to_config_file')) {
    $posted_var['relative_path_to_config_file'] = $superCage->post->getEscaped('relative_path_to_config_file');
}
if ($superCage->post->keyExists('cookie_prefix')) {
    $matches = $superCage->post->getMatched('cookie_prefix', '/^[a-zA-Z0-9_\-]*$/');
    $posted_var['cookie_prefix'] = $matches[0];
}
if ($superCage->post->keyExists('use_post_based_groups')) {
    $posted_var['use_post_based_groups'] = $superCage->post->getDigits('use_post_based_groups');
}
//print_r($posted_var); // uncomment to see the array of post vars

// initialize vars
$step = $posted_var['step'];
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

// Loop through the bridge folder
$foldername = 'bridge';
$dir = opendir($foldername);
while ($file = readdir($dir)) {
      $extension = ltrim(substr($file,strrpos($file,'.inc.php')),'.');
      $bridge_lookup = str_replace('.' . $extension, '', $file);
      if ($bridge_lookup != '' && $bridge_lookup != 'coppermine' && $bridge_lookup != 'udb_base') {
          include_once $foldername . '/' . $bridge_lookup . '.inc.php';
      }
}
closedir($dir);
unset($bridge_lookup);


// get the bridge db vars first
$BRIDGE = cpg_get_bridge_db_values();
//print_r($BRIDGE);
//print '<hr>';

switch ($step) {
case "choose_bbs":
$BRIDGE = cpg_get_bridge_db_values();
print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
//print '<input type="hidden" name="hide_unused_fields" value="1" />';
starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['choose_bbs_app'].'&nbsp;'.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_app_start&amp;ae=bridge_manager_app_end', '800', '450'),2);
$checked[$BRIDGE['short_name']] = 'checked="checked"';
foreach($default_bridge_data as $key => $value) {
    print '<tr>'.$new_line;
    print '    <td class="tableb">'.$new_line;
    print '        <input type="radio" name="short_name" id="'.$key.'" class="radio" value="'.$key.'" '.$checked[$key].' />'.$new_line;
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


print cpg_submit_button($next_step[$step], 'false', '2');
endtable();
print "</form>\n";
   break;

case "settings_path":
    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
        starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['settings_path'].'&nbsp;'.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_path_start&amp;ae=bridge_manager_path_end', '800', '450'), 3);
        $loop_array = array('full_forum_url','relative_path_of_forum_from_webroot','relative_path_to_config_file', 'cookie_prefix');
        $rows_displayed = 0;
        $section_number = 0;
        $folder_icon = cpg_fetch_icon('folder', 0, $lang_bridgemgr_php['browse']);
        foreach($loop_array as $key) {
            $prefill = cpg_bridge_prefill($BRIDGE['short_name'],$key);
            if ($key == 'relative_path_of_forum_from_webroot') {
                $minibrowser = '<a href="javascript:;" onclick="MM_openBrWindow(\'minibrowser.php?startfolder='.rawurlencode($prefill).'&amp;parentform='.rawurlencode($step).'&amp;formelementname='.rawurlencode($key).'\',\''.uniqid(rand()) .'\',\'scrollbars=yes,toolbar=no,status=no,locationbar=no,resizable=yes,width=600,height=400\')">' . $folder_icon . '</a>';
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
                    $reset_to_default = '<a href="javascript:;" onclick="document.getElementById(\''.$key.'\').value=\''.$default_bridge_data[$BRIDGE['short_name']][$key.'_default'].'\'">' . cpg_fetch_icon('stop', 0, $lang_bridgemgr_php['reset_to_default']) . '</a>';
                }
            }
            if ($posted_var['hide_unused_fields'] != 1 || $disabled == '')
            {
                print '<tr>'.$new_line;
                print '    <td class="tableb" width="30%">'.$new_line;
                print '        '.$lang_bridgemgr_php[$key].':'.$new_line;
                print '    </td>'.$new_line;
                print '    <td class="tableb" width="60%" style="overflow:visible">'.$new_line;
                print '        <input type="text" name="'.$key.'" id="'.$key.'" size="50" class="textinput" style="width:80%" value="'.$prefill.'" '.$disabled.' />'.$minibrowser.$reset_to_default.$new_line;
                print '    </td>'.$new_line;
                print '    <td class="tableb" width="10%">'.$new_line;
                print $display1.$new_line;
                print '        ';
                print cpg_display_help('f=bridging.htm&amp;as=bridge_manager_path_'.$key.'&amp;ae=bridge_manager_path_'.$key.'_end', '800', '450').'</span>'.$new_line;
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

case "special_settings":

    $error = write_to_db($previous_step[$step]);
    if (!$error) {
        $BRIDGE = cpg_get_bridge_db_values();
        print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
        starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['special_settings'].'&nbsp;'.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_specific_start&amp;ae=bridge_manager_specific_end', '800', '450'), 3);
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
            if ($options[0] == 'radio') {$option_yes = $options[1]; $option_no = $options[2];}
            if ($BRIDGE[$key] == $options[1]) {
                $checked_yes = 'checked="checked"';
                $checked_no = '';
            } elseif ($BRIDGE[$key] == $options[2]) {
                $checked_yes = '';
                $checked_no = 'checked="checked"';
            }
            if ($default_bridge_data[$BRIDGE['short_name']][$key.'_used'] == 'password') {$fieldtype = 'password';} else {$fieldtype = 'text';}
            if ($posted_var['hide_unused_fields'] != 1 || $disabled == '') { // actually display the row? --- start
                if ($options[0] == 'radio') { // radio button --- start
                    print '<tr>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        '.$lang_bridgemgr_php[$key].':'.$new_line;
                    print '    </td>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        <input type="radio" name="'.$key.'" id="'.$key.'_yes" class="radio" value="'.$option_yes.'" '.$disabled.' '.$checked_yes.' />'.$new_line;
                    print '        <label for="'.$key.'_yes" class="clickable_option">'.$new_line;
                    print '            '.$lang_bridgemgr_php[$key.'_yes'].$new_line;
                    print '        </label>&nbsp;'.$new_line;
                    print '        &nbsp;&nbsp;&nbsp;'.$new_line;
                    print '        <input type="radio" name="'.$key.'" id="'.$key.'_no" class="radio" value="'.$option_no.'" '.$disabled.' '.$checked_no.' /><label for="'.$key.'_no" class="clickable_option">'.$lang_bridgemgr_php[$key.'_no'].'</label>'.$new_line;
                    print '    </td>'.$new_line;
                    print '    <td class="tableb">'.$new_line;
                    print '        '.cpg_display_help('f=bridging.htm&amp;as=bridge_manager_'.$key.'&amp;ae=bridge_manager_'.$key.'_end', '800', '450').'</span>'.$new_line;
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
                        /*cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");	*/
						#########################		DB		#######################
						$cpgdb->query($cpg_db_bridgemgr_php['usergroup_delete']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_admin']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_registered']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_anonymous']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_banned']);
						###############################################################
                }
        print '<form name="'.$step.'" id="cpgform" action="'.$CPG_PHP_SELF.'" method="post">';
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
        starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['title'].': '.$lang_bridgemgr_php['finalize'],2);
        if ($posted_var['submit'] && $CONFIG['bridge_enable'] != 1) {
            print '<tr>';
            print '<td class="tableb" colspan="2">';
            print '<span class="explanation">';
            printf($lang_bridgemgr_php['finalize_explanation'],rtrim($CONFIG['ecards_more_pic_target'], '/').'/bridgemgr.php');
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
            printf($lang_bridgemgr_php['title_enable'], '<strong>'.$default_bridge_data[$BRIDGE['short_name']]['full_name'].'</strong>');
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
        if ($posted_var['submit'] == '' || $posted_var['wizard_finished'] != '' || $posted_var['force_startpage'] == '1') {
            if ($BRIDGE['short_name'] != '') {// display the enable/disable option only if there's at least a db entry about the file to bridge with --- start
                print '<tr>';
                print '    <td class="tableb" width="50%">';
                print '        <input type="radio" name="bridge_enable" id="bridge_enable_yes" class="radio" value="1" '.$disabled_yes.' '.$checked_yes.' onclick="changeSubmitButton();" /><label for="bridge_enable_yes" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_yes'].'</label>';
                print '    </td>';
                print '    <td class="tableb" width="50%">';
                print '        <input type="radio" name="bridge_enable" id="bridge_enable_no" class="radio" value="0" '.$disabled_no.' '.$checked_no.' onclick="changeSubmitButton();" /><label for="bridge_enable_no" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_no'].'</label>';
                print '    </td>';
                print '</tr>';
            } // display the enable/disable option only if there's at least a db entry about the file to bridge with --- end
            print '<tr>'.$new_line;
            print '        <td colspan="2" class="tablef" align="center">'.$new_line;
            print '            <table border="0" cellspacing="0" cellpadding="0" width="100%">'.$new_line;
            print '                <tr>'.$new_line;
            print '                    <td align="left">'.$new_line;
            print '                        <input type="hidden" name="hide_unused_fields" id="hide_unused_fields" value="1" class="checkbox"  />'.$new_line;
            print '                        <!--<label for="hide_unused_fields" class="clickable_option"><span class="explanation">hide unused form fields (recommended)</span></label>-->'.$new_line;
            print '                   </td>'.$new_line;
            print '                   <td align="right">'.$new_line;
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
            print '        <input type="radio" name="bridge_enable" id="bridge_enable_yes" class="radio" value="1" '.$disabled_yes.' '.$checked_yes.' /><label for="bridge_enable_yes" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_yes'].'</label>';
            print '    </td>';
            print '    <td class="tableb" width="50%">';
            print '        <input type="radio" name="bridge_enable" id="bridge_enable_no" class="radio" value="0" '.$disabled_no.' '.$checked_no.' /><label for="bridge_enable_no" class="clickable_option">'.$lang_bridgemgr_php['bridge_enable_no'].'</label>';
            print '    </td>';
            print '</tr>';
            print '<tr>'.$new_line;
            print '        <td colspan="2" class="tablef" align="center">'.$new_line;
            print '            <table border="0" cellspacing="0" cellpadding="0" width="100%">'.$new_line;
            print '                <tr>'.$new_line;
            print '                    <td align="left">'.$new_line;
            //print '                        <input type="checkbox" name="clear_unused_db_fields" id="clear_unused_db_fields" value="1" class="checkbox"  checked="checked" />'.$new_line;
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
    $step = $posted_var['step'];
    $new_line = "\n";

    pageheader($lang_bridgemgr_php['title']);
    switch ($step) {
    case "attempt_to_disable":
    // check if the wait time is over; if it isn't, send them back
    /*$results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'");
	if (mysql_num_rows($results)) {
		$row = mysql_fetch_array($results);
	}	*/
	################       DB       ################
	$cpgdb->query($cpg_db_bridgemgr_php['get_recovery_logon_timestamp']);
	$rowset = $cpgdb->fetchRowSet();
	if (count($rowset)) {
		$row = $rowset[0];
	}
	########################################
    $recovery_logon_timestamp = $row['value'];
    //print $recovery_logon_timestamp;
    /*$results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
	if (mysql_num_rows($results)) {
		$row = mysql_fetch_array($results);
	}	*/
	################       DB       ################
	$cpgdb->query($cpg_db_bridgemgr_php['get_recovery_logon_failures']);
	$rowset = $cpgdb->fetchRowSet();
	if (count($rowset)) {
		$row = $rowset[0];
	}
	########################################
    $recovery_logon_failures = $row['value'];
    $logon_allowed = cpg_check_allowed_emergency_logon($recovery_logon_timestamp,$recovery_logon_failures);
    if ($logon_allowed > 0) {
        // the user is not allowed to logon yet, the wait time has not elapsed yet
        msg_box($lang_bridgemgr_php['recovery_wait_title'], $lang_bridgemgr_php['recovery_wait_content'], $lang_bridgemgr_php['try_again'], $CPG_PHP_SELF, "-1");
    } else { // the logon wait time has passed, the user is allowed to try to logon now
        // go through the list of standalone admins and check if we have a match
        $temp_user_table = $CONFIG['TABLE_PREFIX'].'users';

        $encpassword = md5(addslashes($posted_var['password']));


        /*$results = cpg_db_query("SELECT user_id, user_name, user_password FROM $temp_user_table WHERE user_name = '" . addslashes($posted_var['username']) . "' AND BINARY user_password = '" . $encpassword . "' AND user_active = 'YES' AND user_group = '1'");
        if (mysql_num_rows($results)) {
            $retrieved_data = mysql_fetch_array($results);
        } */
		########################         DB        ########################
		$cpgdb->query($cpg_db_bridgemgr_php['get_user_data'], $temp_user_table, addslashes($posted_var['username']), $encpassword);
		$rowset = $cpgdb->fetchRowSet();
		if (count($rowset)) {
			$retrived_data = $rowset[0];
		}
		#########################################################
        if ($retrieved_data['user_name'] == $posted_var['username'] && $retrieved_data['user_password'] == $encpassword && $retrieved_data['user_name'] != '' ) {
            // authentification successfull
            
            cpg_config_set('bridge_enable', '0');
            
            /*cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '0' WHERE name = 'bridge_enable'");
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '0' WHERE name = 'recovery_logon_failures'");
            cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'");*/
            ########################      DB      ######################
            $cpgdb->query($cpg_db_bridgemgr_php['reset_recovery_logon_failures']);
            $cpgdb->query($cpg_db_bridgemgr_php['set_recovery_logon_timestamp']);
            #####################################################

                        // ok, then restore group table
                        /*cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERGROUPS']} WHERE 1");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3)");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3)");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");
						cpg_db_query("INSERT INTO {$CONFIG['TABLE_USERGROUPS']}
						VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3)");	*/
						#########################		DB		#######################
						$cpgdb->query($cpg_db_bridgemgr_php['usergroup_delete']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_admin']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_registered']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_anonymous']);
						$cpgdb->query($cpg_db_bridgemgr_php['insert_banned']);
						###############################################################

            if (USER_ID) { //user already logged in
                msg_box($lang_bridgemgr_php['recovery_success_title'], $lang_bridgemgr_php['recovery_success_content'], $lang_bridgemgr_php['goto_bridgemgr'], $CPG_PHP_SELF, "-1");
            } else { // user not logged in yet
                msg_box($lang_bridgemgr_php['recovery_success_title'], $lang_bridgemgr_php['recovery_success_content'].'<br />'.$lang_bridgemgr_php['recovery_success_advice_login'], $lang_bridgemgr_php['goto_login'], "login.php?referer=".$CPG_PHP_SELF, "-1");
            }
        } else {
            // authentification failed
            /*cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = NOW() WHERE name = 'recovery_logon_timestamp'");
			$results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
			if (mysql_num_rows($results)) {
				$row = mysql_fetch_array($results);
			}	*/
			############################         DB         #############################
			$cpgdb->query($cpg_db_bridgemgr_php['set_recovery_logon_timestamp']);
			$cpgdb->query($cpg_db_bridgemgr_php['get_recovery_logon_failures']);
			$rowset = $cpgdb->fetchRowSet();
			if (count($rowset)) {
				$row = $rowset[0];
			}
			##################################################################
            $number_of_failed_attempts = $row['value'] + 1;
            //cpg_db_query("UPDATE {$CONFIG['TABLE_BRIDGE']} SET value = '$number_of_failed_attempts' WHERE name = 'recovery_logon_failures'");
			##########################       DB       ##########################
			$cpgdb->query($cpg_db_bridgemgr_php['set_recovery_logon_failures'], $number_of_failed_attempts);
			###########################################################
            msg_box($lang_bridgemgr_php['recovery_failure_title'], $lang_bridgemgr_php['recovery_failure_content'], $lang_bridgemgr_php['try_again'], $CPG_PHP_SELF, "-1");
        }
    }
    break;
    default:
    // check if the wait time is over; if it isn't, disable the submit button
    /*$results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_timestamp'");
	if (mysql_num_rows($results)) {
		$row = mysql_fetch_array($results);
	}	*/
	################       DB       ################
	$cpgdb->query($cpg_db_bridgemgr_php['get_recovery_logon_timestamp']);
	$rowset = $cpgdb->fetchRowSet();
	if (count($rowset)) {
		$row = $rowset[0];
	}
	########################################
	
    $recovery_logon_timestamp = $row['value'];
    //print $recovery_logon_timestamp;
    /*$results = cpg_db_query("SELECT value FROM {$CONFIG['TABLE_BRIDGE']} WHERE name = 'recovery_logon_failures'");
	if (mysql_num_rows($results)) {
		$row = mysql_fetch_array($results);
	}	*/
	################       DB       ################
	$cpgdb->query($cpg_db_bridgemgr_php['get_recovery_logon_failures'], $number_of_failed_attempts);
	$rowset = $cpgdb->fetchRowSet();
	if (count($rowset)) {
		$row = $rowset[0];
	}
	########################################
    $recovery_logon_failures = $row['value'];
    $logon_allowed = cpg_check_allowed_emergency_logon($recovery_logon_timestamp,$recovery_logon_failures);
    if ($logon_allowed < 0) {$logon_allowed = 0;}
    starttable(-1, cpg_fetch_icon('bridge_mgr', 2) . $lang_bridgemgr_php['recovery_title'],2);
        echo <<<EOT
        <form name="disable_integration" id="cpgform" action="{$CPG_PHP_SELF}" method="post">
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
        addonload('countDown()');
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