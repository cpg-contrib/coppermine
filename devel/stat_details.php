<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2007 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

// Todo list (stuff the hasn't been implemented yet):
// * overall stats taking AID into account
// * enable file column to be turned on or off (work in progress)
// * Pagination (currently, all hits are being fetched, which is bound to break large galleries)
// * Allow admin to delete single votes and corresponding stats entry (UI partly created and commented out. Tricky stuff in delete.php not even started)
// * Enable link to profile instead of just displaying the UID
// * Add stats about users, numbers of albums and other things stat lovers constantly request
// * Display file details for single file stats in full-screen mode and add a link back to the intermediate image view

define('IN_COPPERMINE', true);
define('STAT_DETAILS_PHP', true);
require_once('include/init.inc.php');

// initialize the vars - start
    $line_break = "\n";
    $charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];
// initialize the vars - end

// sanitize the GET parameters - start
    $pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;
    $type_allowed = array('vote','hits','total','blank');

    if (in_array($_GET['type'],$type_allowed) == TRUE) {
      $type = $_GET['type'];
    } else {
      $type = 'blank';
    }

    if ($type == 'vote') {
        $db_fields = array('sdate', 'ip', 'rating', 'referer', 'browser', 'os', 'uid');
        $icon = array('sdate' => 'calendar.gif', 'ip' => 'info.gif', 'rating' => 'rating.gif', 'referer' => 'referer.gif', 'browser' => 'www.gif', 'os' => 'os.gif', 'uid' => 'user.gif');
    }
    if ($type == 'hits') {
        $db_fields = array('sdate', 'ip', 'search_phrase', 'referer', 'browser', 'os');
        $icon = array('sdate' => 'calendar.gif', 'ip' => 'info.gif', 'search_phrase' => 'views.gif', 'referer' => 'referer.gif', 'browser' => 'www.gif', 'os' => 'os.gif');
    }

    foreach($db_fields as $value) {
        $$value = $_GET[$value] ? (int)$_GET[$value] : 0;
    }

    if (isset($_GET['sort'])) {
        if (in_array($_GET['sort'],$db_fields) == TRUE || $_GET['sort'] == 'file') {
            $sort = $_GET['sort'];
        } else {
            $sort = 'sdate';
        }
    } else {
        $sort = 'sdate';
    }

    if (isset($_GET['dir'])) {
        if ($_GET['dir'] == 'asc') {
            $dir = 'asc';
        } else {
            $dir = 'desc';
        }
    }

    if (isset($_GET['hide_internal'])) {
        if ($_GET['hide_internal'] == '0') {
            $hide_internal = 0;
        } else {
            $hide_internal = 1;
        }
    } else {
        $hide_internal = 0;
    }

    if (isset($_GET['date_display'])) {
        if ($_GET['date_display'] == '0') {
            $date_display = 0;
            $date_display_fmt = $album_date_fmt;
        } elseif($_GET['date_display'] == '1') {
            $date_display = 1;
            $date_display_fmt = $lastcom_date_fmt;
        } elseif($_GET['date_display'] == '2') {
            $date_display = 2;
            $date_display_fmt = $log_date_fmt;
        } elseif($_GET['date_display'] == '3') {
            $date_display = 3;
            $date_display_fmt = '%Y-%m-%d %H:%M:%S';;
        } else {
            $date_display = 4;
            $date_display_fmt = '%Y-%m-%d';
        }
    } else {
        $date_display = 4;
        $date_display_fmt = '%Y-%m-%d';
    }

    if ($_GET['mode'] == 'fullscreen') {
        $mode = 'fullscreen';
    } else {
        $mode = 'embedded';
    }
// sanitize the GET parameters - end

// end the script if we just need a blank page
    if ($type=='blank') {
        die();
    }

// perform database write queries if needed - start
  if (GALLERY_ADMIN_MODE) {
      $configChangesApplied = '';
      if ($_GET['hit_details'] != $CONFIG['hit_details'] && $_GET['go'] != '') {
          cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$_GET['hit_details']}' WHERE name = 'hit_details'");
          $CONFIG['hit_details'] = $_GET['hit_details'];
          $configChangesApplied = $lang_stat_details_php['upd_success'];
      }
      if ($_GET['vote_details'] != $CONFIG['vote_details'] && $_GET['go'] != '') {
          cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$_GET['vote_details']}' WHERE name = 'vote_details'");
          $CONFIG['vote_details'] = $_GET['vote_details'];
          $configChangesApplied = $lang_stat_details_php['upd_success'];
      }
      if ($_GET['emptyhitstats'] == TRUE || $_GET['emptyvotestats'] == TRUE) {
          $configChangesApplied = 'not implemented yet';
      }
  }
// perform database write queries if needed - end

// output the header depending on the mode (fullscreen vs embedded) - start
    if ($mode == 'fullscreen') {
        pageheader($lang_stat_details_php['title']);
        $statsTableWidth = '100%';
    } else {
        $statsTableWidth = '-1';
        print  <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<head>
    <title>{$CONFIG['gallery_name']} - {$lang_stat_details_php['title']}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=$charset" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body class="tableb">
EOT;
    }
// output the header depending on the mode (fullscreen vs embedded) - end

// include the stats function - start
require_once('include/stats.inc.php');
// include the stats function - end

// output the stuff the user can see - start
if ($type == 'vote' && $pid != '') { // type == vote start

    $query = "SELECT rating, count(rating) AS totalVotes FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid GROUP BY rating";
    $result = cpg_db_query($query);

    $rateArr = array();

    starttable($statsTableWidth, $lang_stat_details_php['stats'], 3);

    $totalVotesSum = 0;

    while ($row = mysql_fetch_array($result)) {
          $voteArr[$row['rating']] = $row['totalVotes'];
          $totalVotesSum = $totalVotesSum + $row['totalVotes'];
          $loopCounter = 0;
    }
    for ($i=0; $i<6;$i++){
        $voteArr[$i] = isset($voteArr[$i]) ? $voteArr[$i] : 0;
        if ($loop_counter == 0) {
            $row_style_class = 'tableb';
        } else {
            $row_style_class = 'tableb tableb_alternate';
        }
        $loop_counter++;
        if ($loop_counter > 1) {
            $loop_counter = 0;
        }
        echo <<<EOT
        <tr>
            <td class="{$row_style_class}">
                <img src="images/rating$i.gif" />
            </td>
            <td class="{$row_style_class}">
EOT;
        print theme_display_bar($voteArr[$i],$totalVotesSum,200,'', '', ' '.$lang_stat_details_php['votes']);
        echo <<<EOT
            </td>
        </tr>

EOT;
      }
  endtable();
  print "<br />\n";

  } // type == vote end
  if ($type == 'hits') { // type == hits start
      // do nothing here, as the regular user isn't suppossed to see the hit stats
  } // type == hits start
  individualStatsByOS($pid,$type,$statsTableWidth);
  individualStatsByBrowser($pid,$type,$statsTableWidth);
// output the stuff the user can see - end

// output the admin-only stuff - start
if (GALLERY_ADMIN_MODE) { // admin is logged in - start
      //  display fullscreen link
      if ($mode != 'fullscreen') {
           //get the url and all vars except $mode
           $statFullsizeUrl = $_SERVER["SCRIPT_NAME"]."?";
           foreach ($_GET as $key => $value) {
               if ($key!="lang") {
                   $statFullsizeUrl .= $key . "=" . $value . "&amp;";
               }
           }
           $statFullsizeUrl .= 'mode=fullscreen';
          print <<< EOT
          <div align="center">
          <a href="{$statFullsizeUrl}" class="admin_menu" target="_parent">{$lang_stat_details_php['fullscreen']}</a>
          </div>
          <br />
EOT;
      }
      print <<< EOT
      <form method="get" action="{$_SERVER['PHP_SELF']}" name="editForm" id="cpgform">
      <input type="hidden" name="type" value="{$type}" />
      <input type="hidden" name="pid" value="{$pid}" />
      <input type="hidden" name="sort" value="{$sort}" />
      <input type="hidden" name="dir" value="{$dir}" />
      <input type="hidden" name="mode" value="{$mode}" />
  <script type="text/javascript">
    <!--//
    function sendForm() {
      document.editForm.submit();
    }

    function sortthetable(sortcriteria,direction) {
      document.editForm.sort.value = sortcriteria;
      document.editForm.dir.value= direction;
      sendForm();
    }

    function confirmDelete() {
      if (document.editForm.reset_selected.checked = true) {
        check = confirm('{$lang_stat_details_php['reset_votes_individual_confirm']}');
        if (check == true) {
          //document.editForm.submit();
        } else {
          document.editForm.reset_selected.checked = false;
        }
      }
    }
    //-->
  </script>
EOT;
      if ($sort == 'file') {
          $sort = 'pid';
      }
      if ($pid != '') {
        if ($type == 'vote') {
            $query = "SELECT * FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid ORDER BY $sort $dir";
        }
        if ($type == 'hits') {
            $query = "SELECT * FROM {$CONFIG['TABLE_HIT_STATS']} WHERE pid=$pid ORDER BY $sort $dir";
        }
      } else {
            // query for overall stats
            // todo: include the join to get the picture_table data
            $query = "SELECT {$CONFIG['TABLE_HIT_STATS']}.*,
                             {$CONFIG['TABLE_PICTURES']}.filepath,
                             {$CONFIG['TABLE_PICTURES']}.filename,
                             {$CONFIG['TABLE_PICTURES']}.pwidth,
                             {$CONFIG['TABLE_PICTURES']}.pheight,
                             {$CONFIG['TABLE_PICTURES']}.url_prefix
                      FROM {$CONFIG['TABLE_HIT_STATS']},{$CONFIG['TABLE_PICTURES']}
                      WHERE {$CONFIG['TABLE_HIT_STATS']}.pid = {$CONFIG['TABLE_PICTURES']}.pid
                      ORDER BY $sort $dir";
/*
            $query = "SELECT {$CONFIG['TABLE_HIT_STATS']}.*
                      FROM {$CONFIG['TABLE_HIT_STATS']}
                      ORDER BY $sort $dir";
*/
      }
      $result = cpg_db_query($query);
      // display the table header - start
      $tableColumns = count($db_fields);
      if ($pid == '') {
          $tableColumns++;
      }
      starttable($statsTableWidth, $lang_stat_details_php[$type], $tableColumns + 1);
      print '  <tr>'.$line_break;
      print '    <td class="tableh2" align="center" valign="bottom">'.$line_break;
      if ($type == 'vote') {
          print '    <!-- *NOT IMPLEMENTED YET* <input type="checkbox" name="checkAll" onClick="selectAll(this,\'del\');" class="checkbox" title="'.$lang_common['check_uncheck_all'].'" />-->'.$line_break;
      }
      print '    </td>'.$line_break;
      foreach ($db_fields as $value) {
          $show_column_checked[$value] = ($$value == '1') ? 'checked="checked"' : '';
          print '    <td class="tableh2" valign="top">'.$line_break;
          print '      <input type="checkbox" name="'.$value.'" value="1" class="checkbox" title="'.$lang_stat_details_php['show_hide'].'" '.$show_column_checked[$value].' onclick="sendForm();" /><br />'.$line_break;
          print '      <img src="images/'.$icon[$value].'" border="0" width="16" height="16" alt="" title="'.$lang_stat_details_php[$value].'" />';
          if ($$value == 1) {
              print '<a href="#" onclick="return sortthetable(\''.$value.'\',\'asc\');">';
              print '<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $value).', '.$lang_stat_details_php['ascending'].'" />';
              print '</a>';
              print '<a href="#" onclick="return sortthetable(\''.$value.'\',\'desc\');">';
              print '<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $lang_stat_details_php[$value]).', '.$lang_stat_details_php['descending'].'" />';
              print '</a>';
          }
          print $line_break;
          print '    </td>'.$line_break;
      }
      if ($pid == '') {
          print '    <td class="tableh2">'.$line_break;
          print '      <input type="checkbox" name="file" value="1" class="checkbox" title="'.$lang_stat_details_php['show_hide'].'" '.$lang_common['file'].' onclick="sendForm();" /><br />'.$line_break;
          print '      '.$lang_common['file'];
          print '<a href="#" onclick="return sortthetable(\'file\',\'asc\');">';
          print '<img src="images/ascending.gif" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $lang_common['file']).', '.$lang_stat_details_php['ascending'].'" />';
          print '</a>';
          print '<a href="#" onclick="return sortthetable(\'file\',\'desc\');">';
          print '<img src="images/descending.gif" width="9" height="9" border="0" alt="" title="'.sprintf($lang_stat_details_php['sort_by_xxx'], $lang_common['file']).', '.$lang_stat_details_php['descending'].'" />';
          print '</a>';
          print '    </td>'.$line_break;
      }
      print "  </tr>\n";
      // display the table header - end
      if (mysql_num_rows($result) > 0) {
          $loop_counter = 0;
          while ($row = mysql_fetch_array($result)) {
              if ($loop_counter == 0) {
                  $row_style_class = 'tableb';
              } else {
                  $row_style_class = 'tableb tableb_alternate';
              }
              $loop_counter++;
              if ($loop_counter > 1) {
                  $loop_counter = 0;
              }
              $row['sdate'] = strftime($date_display_fmt,localised_timestamp($row['sdate']));
              $is_internal = '';
              $row['referer'] = rawurldecode($row['referer']);
              // is it an internal reference (most should be)?
              $match_coppermine_url = strpos($row['referer'],$CONFIG['ecards_more_pic_target']);
              if ($match_coppermine_url === FALSE) {
                  // make the referer url clickable
                  $row['referer'] = '<a href="'.$row['referer'].'">'.ltrim(ltrim($row['referer'],'http://'),'http%3A%2F%2F').'</a>';
              } else {
                  // make the referer url clickable
                  $row['referer'] = $lang_stat_details_php['internal'].': <a href="'.$row['referer'].'">'.substr($row['referer'],strlen(rtrim($CONFIG['ecards_more_pic_target'],'/'))).'</a>';
                  $is_internal = 1;
              }
              if ($hide_internal == 1 && $is_internal == 1) { // check internals start
              } else {
                  print '  <tr>'.$line_break;
                  print '    <td class="'.$row_style_class.'" align="center">'.$line_break;
                  if ($type == 'vote') {
                      print '      <!-- *NOT IMPLEMENTED YET* <input name="del'.$row['sid'].'" type="checkbox" value="" class="checkbox" />-->'.$line_break;
                  }
                  print '    </td>'.$line_break;
                  foreach($db_fields as $value) {
                      print '    <td class="'.$row_style_class.'">'.$line_break;
                      if ($$value == 1) {
                          if ($value == 'browser' && array_key_exists($row[$value],$browserArray)) {
                              print '      <img src="images/browser/'.$browserArray[$row[$value]].'" width="14" height="14" border="0" title="'.$row[$value].'" alt="" />'.$line_break;
                          } elseif ($value == 'os' && array_key_exists($row[$value],$osArray)) {
                              print '      <img src="images/os/'.$osArray[$row[$value]].'" width="14" height="14" border="0" title="'.$row[$value].'" alt="" />'.$line_break;
                          } elseif ($value == 'uid') {
                              if ($row[$value] != 0) {
                                  print '      <a href="profile.php?uid='.$row[$value].'">'.$row[$value].'</a>'.$line_break;
                              }  else {
                                  print '      <span title="'.$lang_stat_details_php['guest'].'">-</span>'.$line_break;
                              }
                          } else {
                              print '      '.$row[$value].$line_break;
                          }
                      }
                      print '    </td>'.$line_break;
                  }
              if ($pid == '') {
                  $thumb_url =  get_pic_url($row, 'thumb');
                  if (!is_image($row['filename'])) {
                      $image_info = getimagesize($thumb_url);
                      $row['pwidth'] = $image_info[0];
                      $row['pheight'] = $image_info[1];
                  }
                  $image_size = compute_img_size($row['pwidth'], $row['pheight'], $CONFIG['alb_list_thumb_size']);
                  print '    <td class="'.$row_style_class.'">'.$line_break;
                  print '      <a href="displayimage.php?pos='.$row['pid'].'"><img src="'.$thumb_url.'" '.$image_size['geom'].' class="image" border="0" alt="" /></a>';
                  print '    </td>'.$line_break;
              }
              print '  </tr>'.$line_break;
              } // check internals end
          }
      }
  // display table footer with options
  $hide_internal_selected = ($hide_internal == '1') ? 'checked="checked"' : '';
  $date_display_0_selected = ($date_display == '0') ? 'selected="selected"' : '';
  $date_display_1_selected = ($date_display == '1') ? 'selected="selected"' : '';
  $date_display_2_selected = ($date_display == '2') ? 'selected="selected"' : '';
  $date_display_3_selected = ($date_display == '3') ? 'selected="selected"' : '';
  $date_display_4_selected = ($date_display == '4') ? 'selected="selected"' : '';
  $localized_time[0] = strftime($album_date_fmt,localised_timestamp(time()));
  $localized_time[1] = strftime($lastcom_date_fmt,localised_timestamp(time()));
  $localized_time[2] = strftime($log_date_fmt,localised_timestamp(time()));
  $localized_time[3] = strftime('%Y-%m-%d %H:%M:%S',localised_timestamp(time()));
  $localized_time[4] = strftime('%Y-%m-%d',localised_timestamp(time()));
  print <<< EOT
  <tr>
      <td class="tablef" align="center" valign="top">
EOT;
  if ($type == 'vote') {
      print '    <!-- *NOT IMPLEMENTED YET* <input type="checkbox" name="checkAll2" onClick="selectAll(this,\'del\');" class="checkbox" title="'.$lang_common['check_uncheck_all'].'" />-->'.$line_break;
  }
  print <<< EOT
      </td>
      <td colspan="{$tableColumns}">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td class="tablef">
EOT;
  if ($type == 'vote') {
  print <<< EOT
              <!-- *NOT IMPLEMENTED YET* <input type="checkbox" name="reset_selected" id="reset_selected" value="" class="checkbox" title="{$lang_stat_details_php['hide_internal_referers']}" onclick="confirmDelete();" />
              <label for="reset_selected" class="clickable_option">{$lang_stat_details_php['reset_votes_individual']}</label>-->
EOT;
  }
  print <<< EOT
            </td>
            <td class="tablef" colspan="2" align="right">
              <input type="checkbox" name="hide_internal" id="hide_internal" value="1" class="checkbox" title="{$lang_stat_details_php['hide_internal_referers']}" {$hide_internal_selected} onclick="sendForm();" />
              <label for="hide_internal" class="clickable_option">{$lang_stat_details_php['hide_internal_referers']}</label>
            </td>
          </tr>
          <tr>
            <td class="tablef" colspan="2">
              {$lang_stat_details_php['date_display']}
              <select name="date_display" size="1" onchange="sendForm();">
                <option value="0" {$date_display_0_selected}>
                  {$localized_time[0]}
                </option>
                <option value="1" {$date_display_1_selected}>
                  {$localized_time[1]}
                </option>
                <option value="2" {$date_display_2_selected}>
                  {$localized_time[2]}
                </option>
                <option value="3" {$date_display_3_selected}>
                  {$localized_time[3]}
                </option>
                <option value="4" {$date_display_4_selected}>
                  {$localized_time[4]}
                </option>
              </select>
            </td>
            <td class="tablef" align="right">
              <input type="submit" name="go" value="{$lang_stat_details_php['submit']}" id="detail_submit" class="button" />
            </td>
          </tr>
        </table>
      </td>
    </tr>
EOT;
  endtable();
  echo <<< EOT
  </form>
  <br />
  <script type="text/javascript">
    <!--//
        // addonload("show_section('detail_submit')");

        function selectAll(d,box) {
          var f = document.editForm;
          for (i = 0; i < f.length; i++) {
            //alert (f[i].name.indexOf(box));
            if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
              if (d.checked) {
                f[i].checked = true;
              } else {
                f[i].checked = false;
              }
            }
          }
          if (d.name == "checkAll") {
              document.getElementsByName('checkAll2')[0].checked = document.getElementsByName('checkAll')[0].checked;
          } else {
              document.getElementsByName('checkAll')[0].checked = document.getElementsByName('checkAll2')[0].checked;
          }
        }
    //-->
  </script>
EOT;

      // Configuration shortcut: enable/disable hit stats here as well as in config
      $yes_selected_hit = $CONFIG['hit_details'] ? 'checked="checked"' : '';
      $no_selected_hit = !$CONFIG['hit_details'] ? 'checked="checked"' : '';
      $yes_selected_vote = $CONFIG['vote_details'] ? 'checked="checked"' : '';
      $no_selected_vote = !$CONFIG['vote_details'] ? 'checked="checked"' : '';
      $help_hit = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end&amp;top=1', '600', '400');
      $help_vote = '&nbsp;'.cpg_display_help('f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end&amp;top=1', '600', '400');
      print <<< EOT
      <form method="get" name="changestats" id="cpgform" action="{$_SERVER['PHP_SELF']}" onsubmit="return defaultagree(this)">
      <input type="hidden" name="type" value="{$_GET['type']}" />
      <input type="hidden" name="pid" value="{$_GET['pid']}" />
      <input type="hidden" name="sort" value="{$_GET['sort']}" />
      <input type="hidden" name="dir" value="{$_GET['dir']}" />
      <input type="hidden" name="sdate" value="{$_GET['sdate']}" />
      <input type="hidden" name="ip" value="{$_GET['ip']}" />
      <input type="hidden" name="rating" value="{$_GET['rating']}" />
      <input type="hidden" name="referer" value="{$_GET['referer']}" />
      <input type="hidden" name="browser" value="{$_GET['browser']}" />
      <input type="hidden" name="os" value="{$_GET['os']}" />
EOT;

    starttable('-2', $lang_stat_details_php['overall_stats_config'], 3);
    if ($type == 'vote' || $type == 'total') {
          print <<< EOT
      <tr>
        <td class="tableb">{$lang_stat_details_php['vote_details']}{$help_vote}</td>
        <td class="tableb">
          <input type="radio" id="vote_details_yes" name="vote_details" value="1"  $yes_selected_vote /><label for="vote_details_yes" class="clickable_option">{$lang_common['yes']}</label>
        </td>
        <td class="tableb">
          <input type="radio" id="vote_details_no" name="vote_details" value="0"  $no_selected_vote /><label for="vote_details_no" class="clickable_option">{$lang_common['no']}</label>
        </td>
      </tr>
EOT;
    }
    if ($type == 'hits' || $type == 'total') {
        print <<< EOT
      <tr>
        <td class="tableb">{$lang_stat_details_php['hit_details']}{$help_hit}</td>
        <td class="tableb">
          <input type="radio" id="hit_details_yes" name="hit_details" value="1"  $yes_selected_hit /><label for="hit_details_yes" class="clickable_option">{$lang_common['yes']}</label>
        </td>
        <td class="tableb">
          <input type="radio" id="hit_details_no" name="hit_details" value="0"  $no_selected_hit /><label for="hit_details_no" class="clickable_option">{$lang_common['no']}</label>
        </td>
      </tr>
EOT;
    }


    if ($type == 'vote' || $type == 'total') {
          print <<< EOT
      <tr>
        <td class="tableb" colspan="3">
            <input name="emptyvotestats" id="emptyvotestats" type="checkbox" onclick="if (this.checked) return confirm('{$lang_stat_details_php['empty_votes_table_confirm']}');" />
            <label for="emptyvotestats" class="clickable_option">{$lang_stat_details_php['empty_votes_table']}</label>
        </td>
      </tr>
EOT;
    }
    if ($type == 'hits' || $type == 'total') {
        print <<< EOT
      <tr>
        <td class="tableb" colspan="3">
            <input name="emptyhitstats" id="emptyhitstats" type="checkbox" onclick="if (this.checked) return confirm('{$lang_stat_details_php['empty_hits_table_confirm']}');" />
            <label for="emptyhitstats" class="clickable_option">{$lang_stat_details_php['empty_hits_table']}</label>
        </td>
      </tr>
EOT;
    }
    print <<< EOT
      <tr>
        <td class="tablef" colspan="3" align="right">
          <input type="submit" class="button" name="go" value="{$lang_stat_details_php['submit']}"  />
        </td>
      </tr>
EOT;

      if ($configChangesApplied != '') {
          print <<< EOT
            <tr>
              <td class="tablef" colspan="3" align="center">
                <h2>{$configChangesApplied}</h2>
              </td>
            </tr>
EOT;
      }
      endtable();
      print '</form>';


} // admin is logged in - end
// output the admin-only stuff - end

// output the footer depending on the mode (fullscreen vs embedded) - start
    if ($mode == 'fullscreen') {
      pagefooter();
      ob_end_flush();
    } else {
      print  <<<EOT
</body>
</html>
EOT;
    }
// output the footer depending on the mode (fullscreen vs embedded) - end
?>