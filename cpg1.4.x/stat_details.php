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
  Coppermine version: 1.4.25
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('STAT_DETAILS_PHP', true);
require('include/init.inc.php');

/**
 * initialize the vars
 */

$pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;
$type_allowed = array('vote','hits');

if (in_array($_GET['type'],$type_allowed) == TRUE) {
 $type = $_GET['type'];
} else {
 $type = 'hits';
}

if ($type == 'vote') {
    $db_fields = array('sdate', 'ip', 'rating', 'referer', 'browser', 'os');
}
if ($type == 'hits') {
    $db_fields = array('sdate', 'ip', 'search_phrase', 'referer', 'browser', 'os');
}

foreach($db_fields as $value) {
    $$value = $_GET[$value] ? (int)$_GET[$value] : 0;
}

if (isset($_GET['sort'])) {
    if (in_array($_GET['sort'],$db_fields) == TRUE) {
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
    } else {
        $date_display = 3;
        $date_display_fmt = '%Y-%m-%d %H:%M:%S';
    }
} else {
    $date_display = 0;
    $date_display_fmt = $album_date_fmt;
}

$line_break = "\n";

/**
 * Main Code
 */

$charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];

print  <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<head>
    <title>Coppermine Photo Gallery - {$lang_stat_details_php['title']}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=$charset" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
    <script type="text/javascript" src="scripts.js"></script>
</head>
<body>
EOT;

if ($type == 'vote') { // type == vote start

$query = "SELECT rating, count(rating) AS totalVotes FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid GROUP BY rating";
$result = cpg_db_query($query);

$rateArr = array();

starttable("100%", $lang_stat_details_php['stats'], 2);

while ($row = mysql_fetch_array($result)) {
      $voteArr[$row['rating']] = $row['totalVotes'];
}
    for ($i=0; $i<6;$i++){
        $voteArr[$i] = isset($voteArr[$i]) ? $voteArr[$i] : 0;
        $width = $voteArr[$i]*10;
        echo <<<EOT
        <tr class="tableh2">
            <td width="20%">
                <img src="images/rating$i.gif" />
            </td>
            <td>
                <img src="images/vote.jpg" width="$width" height="15" border="0" alt="" />
                {$voteArr[$i]}
            </td>
        </tr>

EOT;
    }
endtable();

print "<br />\n";
} // type == vote end

/**
 * Fetch the vote details like IP, referer if the user is ADMIN
 */
if (GALLERY_ADMIN_MODE) { // admin is logged in start
    print $line_break;
    print '<form method="get" action="'.$_SERVER['PHP_SELF'].'" name="editForm">' . $line_break;
    print '<input type="hidden" name="type" value="'.$type.'" />'                 . $line_break;
    print '<input type="hidden" name="pid" value="'.$pid.'" />'                   . $line_break;
    print '<input type="hidden" name="sort" value="'.$sort.'" />'                 . $line_break;
    print '<input type="hidden" name="dir" value="'.$dir.'" />'                   . $line_break;
    print <<<EOT
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
  //-->
</script>
EOT;
    if ($type == 'vote') {
        $query = "SELECT * FROM {$CONFIG['TABLE_VOTE_STATS']} WHERE pid=$pid ORDER BY $sort $dir";
    }
    if ($type == 'hits') {
        $query = "SELECT * FROM {$CONFIG['TABLE_HIT_STATS']} WHERE pid=$pid ORDER BY $sort $dir";
    }
    $result = cpg_db_query($query);
    // display the table header start
    starttable("100%", $lang_stat_details_php[$type], count($db_fields));
    print "  <tr>\n";
    foreach ($db_fields as $value) {
        $show_column_checked[$value] = ($$value == '1') ? 'checked="checked"' : '';
        print '    <td class="tableh2" valign="top">'.$line_break;
        print '      ';
        print '<input type="checkbox" name="'.$value.'" value="1" class="checkbox" title="'.$lang_stat_details_php['show_hide'].'" '.$show_column_checked[$value].' onclick="sendForm();" />'.$line_break;
        print '      '.$lang_stat_details_php[$value];
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
    print "  </tr>\n";
    // display the table header end
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
            $row['sdate'] = strftime($date_display_fmt,localised_timestamp($row['sdate']));
            $is_internal = '';
            // is it an internal reference (most should be)?
            $match_coppermine_url = strpos($row['referer'],$CONFIG['ecards_more_pic_target']);
            if ($match_coppermine_url === FALSE) {
                // make the referer url clickable
                $row['referer'] = '<a href="'.$row['referer'].'">'.ltrim($row['referer'],'http://').'</a>';
            } else {
                // make the referer url clickable
                $row['referer'] = $lang_stat_details_php['internal'].': <a href="'.$row['referer'].'">'.substr($row['referer'],strlen(rtrim($CONFIG['ecards_more_pic_target'],'/'))).'</a>';
                $is_internal = 1;
            }
            if ($hide_internal == 1 && $is_internal == 1) { // check internals start
            } else {
                print '  <tr>'.$line_break;
                foreach($db_fields as $value) {
                    print '    <td class="tableb">'.$line_break;
                    if ($$value == 1) {
                        print '      '.$row[$value].$line_break;
                    }
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
print '  <tr>'.$line_break;
print '    <td class="tableh2" colspan="'.count($db_fields).'">'.$line_break;
print '      <table border="0" cellspacing="0" cellpadding="0" width="100%">'.$line_break;
print '        <tr>'.$line_break;
print '          <td class="tablef">'.$line_break;
print '            <input type="checkbox" name="hide_internal" id="hide_internal" value="1" class="checkbox" title="'.$lang_stat_details_php['hide_internal_referers'].'" '.$hide_internal_selected.' onclick="sendForm();" />';
print '            <label for="hide_internal" class="clickable_option">'.$lang_stat_details_php['hide_internal_referers'].'</label>'."\n";
print '          </td>'.$line_break;
print '          <td class="tablef">'.$line_break;
print '            '.$lang_stat_details_php['date_display'].$line_break;
print '            <select name="date_display" size="1" onchange="sendForm();">'.$line_break;
print '              <option value="0" '.$date_display_0_selected.'>'.$line_break;
print '                '.strftime($album_date_fmt,localised_timestamp(time())).$line_break;
print '              </option>'.$line_break;
print '              <option value="1" '.$date_display_1_selected.'>'.$line_break;
print '                '.strftime($lastcom_date_fmt,localised_timestamp(time())).$line_break;
print '              </option>'.$line_break;
print '              <option value="2" '.$date_display_2_selected.'>'.$line_break;
print '                '.strftime($log_date_fmt,localised_timestamp(time())).$line_break;
print '              </option>'.$line_break;
print '              <option value="3" '.$date_display_3_selected.'>'.$line_break;
print '                '.strftime('%Y-%m-%d %H:%M:%S',localised_timestamp(time())).$line_break;
print '              </option>'.$line_break;
print '            </select>'.$line_break;
print '          </td>'.$line_break;
print '          <td class="tablef">'.$line_break;
print '            <input type="submit" name="go" value="'.$lang_stat_details_php['submit'].'" class="button" />'.$line_break;
print '          </td>'.$line_break;
print '        </tr>'.$line_break;
print '      </table>'.$line_break;
print '    </td>'.$line_break;
print '  </tr>'.$line_break;
endtable();
print '</form>'.$line_break;
} // admin is logged in end

echo <<<EOT
<br />
<div align="center">
    <a href="javascript:window.close()" class="admin_menu">
        {$lang_stat_details_php['close']}
    </a>
</div>
<br />&nbsp;
EOT;
print $line_break;
?>
</body>
</html>
