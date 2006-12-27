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

define('IN_COPPERMINE', true);
define('STAT_DETAILS_PHP', true);
require('include/init.inc.php');

/**
 * initialize the vars
 */

$pid = $_GET['pid'] ? (int)$_GET['pid'] : 0;
$type_allowed = array('vote','hits','total');

if (in_array($_GET['type'],$type_allowed) == TRUE) {
 $type = $_GET['type'];
} else {
 $type = 'total';
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

// os and browser icon / name array
$browserArray = array(
                      'Adobe' => 'adobe.png',
                      'Alcatel' => 'alcatel.png',
                      'Amaya' => 'amaya.png',
                      'Amiga Voyager' => 'amigavoyager.png',
                      'APT' => 'apt.png',
                      'Avant' => 'avant.png',
                      'AWeb' => 'aweb.png',
                      'BPFTP' => 'bpftp.png',
                      'Bytel' => 'bytel.png',
                      'Chimera' => 'chimera.png',
                      'Cyberdog' => 'cyberdog.png',
                      'DA' => 'da.png',
                      'Dillo' => 'dillo.png',
                      'DreamCast' => 'dreamcast.png',
                      'eCatch' => 'ecatch.png',
                      'Encompass' => 'encompass.png',
                      'Epiphany' => 'epiphany.png',
                      'Ericsson' => 'ericsson.png',
                      'Feeddemon' => 'feeddemon.png',
                      'Feedreader' => 'feedreader.png',
                      'Firefox' => 'firefox.png',
                      'fpexpress' => 'fpexpress.png',
                      'Fresco' => 'fresco.png',
                      'Galeon' => 'galeon.png',
                      'Getright' => 'getright.png',
                      'Gozilla' => 'gozilla.png',
                      'HotJava' => 'hotjava.png',
                      'ibrowse' => 'ibrowse.png',
                      'iCab' => 'icab.png',
                      'java' => 'java.png',
                      'jetbrains' => 'jetbrains_omea.png',
                      'K-Meleon' => 'kmeleon.png',
                      'Konqueror' => 'konqueror.png',
                      'lg' => 'lg.png',
                      'Lotus Notes' => 'lotusnotes.png',
                      'Lynx' => 'lynx.png',
                      'MacWeb' => 'macweb.png',
                      'MediaPlayer' => 'mediaplayer.png',
                      'Motorola' => 'motorola.png',
                      'Mozilla' => 'mozilla.png',
                      'mplayer' => 'mplayer.png',
                      'MSIE 3.0' => 'msie.png',
                      'MSIE 4.0' => 'msie.png',
                      'MSIE 5.0' => 'msie.png',
                      'MSIE 5.5' => 'msie.png',
                      'MSIE 6.0' => 'msie.png',
                      'MSIE 7.0' => 'msie.png',
                      'MSIE' => 'msie.png',
                      'Multizilla' => 'multizilla.png',
                      'Mosaic' => 'ncsa_mosaic.png',
                      'Netnewswire' => 'netnewswire.png',
                      'netpositive' => 'netpositive.png',
                      'Netscape' => 'netscape.png',
                      'netshow' => 'netshow.png',
                      'newsfire' => 'newsfire.png',
                      'newsgator' => 'newsgator.png',
                      'newzcrawler' => 'newzcrawler.png',
                      'nokia' => 'nokia.png',
                      'Not Available' => 'notavailable.png',
                      'OmniWeb' => 'omniweb.png',
                      'Opera' => 'opera.png',
                      'Panasonic' => 'panasonic.png',
                      'PDA phone' => 'pdaphone.png',
                      'Philips' => 'philips.png',
                      'Phoenix' => 'phoenix.png',
                      'Pluck' => 'pluck.png',
                      'Pulpfiction' => 'pulpfiction.png',
                      'Real' => 'real.png',
                      'RSS' => 'rss.png',
                      'RSSbandit' => 'rssbandit.png',
                      'RSSowl' => 'rssowl.png',
                      'RSSreader' => 'rssreader.png',
                      'Safari' => 'safari.png',
                      'Sagem' => 'sagem.png',
                      'Samsung' => 'samsung.png',
                      'Sharp' => 'sharp.png',
                      'Sharp reader' => 'sharpreader.png',
                      'Shrook' => 'shrook.png',
                      'Siemens' => 'siemens.png',
                      'Sony' => 'sony.png',
                      'Staroffice' => 'staroffice.png',
                      'Teleport' => 'teleport.png',
                      'Trium' => 'trium.png',
                      'Unknown' => 'unknown.png',
                      'W3C' => 'w3c.png',
                      'WebCopier' => 'webcopier.png',
                      'Web TV' => 'webtv.png',
                      'webzip' => 'webzip.png',
);

$osArray = array(
                      'aix' => 'aix.png',
                      'Amiga OS' => 'amigaos.png',
                      'Apple' => 'apple.png',
                      'Atari' => 'atari.png',
                      'beOS' => 'beos.png',
                      'BSD' => 'bsd.png',
                      'BSD FreeBSD' => 'bsdfreebsd.png',
                      'bsdi' => 'bsdi.png',
                      'bsdnetbsd' => 'bsdnetbsd.png',
                      'bsdopenbsd' => 'bsdopenbsd.png',
                      'CP/m' => 'cpm.png',
                      'Debian' => 'debian.png',
                      'Digital' => 'digital.png',
                      'DOS' => 'dos.png',
                      'Dreamcast' => 'dreamcast.png',
                      'Fireball Spider' => 'fireball.png',
                      'Free BSD' => 'freebsd.png',
                      'Googlebot' => 'google.png',
                      'gnu' => 'gnu.png',
                      'HP UX' => 'hpux.png',
                      'IBM' => 'ibm.png',
                      'iMode' => 'imode.png',
                      'Irix' => 'irix.png',
                      'Java' => 'java.png',
                      'kFreeBSD' => 'kfreebsd.png',
                      'Linux' => 'linux.png',
                      'Linux CentOS' => 'linuxcentos.png',
                      'Linux Debian' => 'linuxdebian.png',
                      'Linux Fedora' => 'linuxfedora.png',
                      'Linux Mandrake' => 'linuxmandr.png',
                      'Linux RedHat' => 'linuxredhat.png',
                      'Linux Suse' => 'linuxsuse.png',
                      'Linux Ubuntu' => 'linuxubuntu.png',
                      'Lycos Spider' => 'lycos.png',
                      'Mac OS' => 'mac.png',
                      'Macintosh' => 'macintosh.png',
                      'Mac OS X' => 'macosx.png',
                      'NetBSD' => 'netbsd.png',
                      'Netware' => 'netware.png',
                      'neXt' => 'next.png',
                      'Open BSD' => 'openbsd.png',
                      'OS/2' => 'os2.png',
                      'osf' => 'osf.png',
                      'qnx' => 'qnx.png',
                      'Risc OS' => 'riscos.png',
                      'SCO' => 'sco.png',
                      'Sun OS' => 'sunos.png',
                      'Symbian' => 'symbian.png',
                      'Unix' => 'unix.png',
                      'Unknown' => 'unknown.png',
                      'vms' => 'vms.png',
                      'webtv' => 'webtv.png',
                      'Windows' => 'win.png',
                      'Windows 3.x' => 'win16.png',
                      'Windows 2000' => 'win2000.png',
                      'Windows 2003 Server' => 'win2003.png',
                      'Windows 95' => 'win95.png',
                      'Windows 98' => 'win98.png',
                      'Windows CE' => 'wince.png',
                      'Winlong' => 'winlong.png',
                      'Windows ME' => 'winme.png',
                      'Windows NT' => 'winnt.png',
                      'Windows XP' => 'winxp.png',
                      'Windows Vista' => 'winvista.png',
);


/**
 * Main Code
 */

$charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];

print  <<<EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">
<head>
    <title>Coppermine Photo Gallery - {$lang_stat_details_php['title']} ** under construction **</title>
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

starttable("-2", $lang_stat_details_php['stats'], 3);

while ($row = mysql_fetch_array($result)) {
      $voteArr[$row['rating']] = $row['totalVotes'];
      $loopCounter = 0;
}
    for ($i=0; $i<6;$i++){
        $voteArr[$i] = isset($voteArr[$i]) ? $voteArr[$i] : 0;
        $width = $voteArr[$i]*10;
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
                print theme_display_bar($voteArr[$i],200,'', '', ' '.$lang_stat_details_php['votes']);
        echo <<<EOT
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

  // has the form been submit?
  $configChangesApplied = '';
  if ($_GET['hit_details'] != $CONFIG['hit_details']) {
      cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$_GET['hit_details']}' WHERE name = 'hit_details'");
      $CONFIG['hit_details'] = $_GET['hit_details'];
      $configChangesApplied = $lang_stat_details_php['upd_success'];
  }
  if ($_GET['vote_details'] != $CONFIG['vote_details']) {
      cpg_db_query("UPDATE {$CONFIG['TABLE_CONFIG']} SET value = '{$_GET['vote_details']}' WHERE name = 'vote_details'");
      $CONFIG['vote_details'] = $_GET['vote_details'];
      $configChangesApplied = $lang_stat_details_php['upd_success'];
  }
  if ($_GET['emptyhitstats'] == TRUE || $_GET['emptyvotestats'] == TRUE) {
      $configChangesApplied = 'not implemented yet';
  }


  if ($type == 'hits') { // type == hits start
      print $line_break;
      print '<form method="get" action="'.$_SERVER['PHP_SELF'].'" name="editForm" id="cpgform">' . $line_break;
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
                  $row['referer'] = '<a href="'.$row['referer'].'">'.ltrim(ltrim($row['referer'],'http://'),'http%3A%2F%2F').'</a>';
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
                          if ($value == 'browser' && array_key_exists($row[$value],$browserArray)) {
                              print '      <img src="images/browser/'.$browserArray[$row[$value]].'" width="14" height="14" border="0" title="'.$row[$value].'" alt="" />'.$line_break;
                          } elseif ($value == 'os' && array_key_exists($row[$value],$osArray)) {
                              print '      <img src="images/os/'.$osArray[$row[$value]].'" width="14" height="14" border="0" title="'.$row[$value].'" alt="" />'.$line_break;
                          } else {
                              print '      '.$row[$value].$line_break;
                          }
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
  echo <<<EOT
  <br />

EOT;

  } else { // type == hits end // type == total start
      //pageheader($lang_stat_details_php['overall_stats']);
      $maxBarWidth = 300;
      foreach ($osArray as $key => $value) {
              $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_HIT_STATS']} WHERE os = '$key'"; // Now this is a very crude way to query the database which is bound to overload larger galleries. Should be reviewed!
              $result = cpg_db_query($query);
              $row = mysql_fetch_array($result);
              if ($row[0] != 0) {
                  $osResultArray[$key] = $row[0];
              }
      }
      array_multisort($osResultArray,SORT_DESC);
      $osTotal = array_sum($osResultArray);
      starttable('100%', $lang_stat_details_php['stats_by_os'], 5);
      print <<< EOT
      <tr>
        <td class="tableh2" colspan="2">{$lang_stat_details_php['os']}</td>
        <td class="tableh2" colspan="2" align="right">%</td>
        <td class="tableh2" align="right">{$lang_stat_details_php['number_of_hits']}</td>
      </tr>
EOT;
      $loopCounter = 0;
      foreach ($osResultArray as $key => $value) {
        $individualBarWidth = floor(($value * $maxBarWidth) / $osTotal);
        $individualPercentage = floor(($value * 1000) / $osTotal)/10;
        if ($individualPercentage == floor($individualPercentage)) {
          $individualPercentage .= '.0';
        }
        if ($loopCounter == 0) {
          $row_style_class = 'tableb';
          $loopCounter++;
        } else {
          $row_style_class = 'tableb tableb_alternate';
          $loopCounter = 0;
        }
        print <<< EOT
        <tr>
          <td class="{$row_style_class}" width="20"><img src="images/os/{$osArray[$key]}" width="14" height="14" border="0" title="{$key}" alt="" /></td>
          <td class="{$row_style_class}">{$key}</td>
          <td class="{$row_style_class}" align="right">
EOT;
              print theme_display_bar($value,100,'', '', ' ('.$individualPercentage.' %)');
        print <<< EOT
              <!--<img src="images/vote.jpg" width="{$individualBarWidth}" height="15" border="0" alt="" />-->
          </td>
          <td class="{$row_style_class}" align="right">{$individualPercentage}</td>
          <td class="{$row_style_class}" align="right">{$value}</td>
        </tr>
EOT;
      }
      print <<< EOT
      <tr>
        <td class="tablef" colspan="4">{$lang_stat_details_php['total']}</td>
        <td class="tablef" align="right">{$osTotal}</td>
      </tr>
EOT;
      endtable();

      print '<br />';

      foreach ($browserArray as $key => $value) {
              $query = "SELECT COUNT(*) FROM {$CONFIG['TABLE_HIT_STATS']} WHERE browser = '$key'"; // Now this is a very crude way to query the database which is bound to overload larger galleries. Should be reviewed!
              $result = cpg_db_query($query);
              $row = mysql_fetch_array($result);
              if ($row[0] != 0) {
                  $browserResultArray[$key] = $row[0];
              }
      }
      array_multisort($browserResultArray,SORT_DESC);
      $browserTotal = array_sum($browserResultArray);
      starttable('100%', $lang_stat_details_php['stats_by_browser'], 5);
      print <<< EOT
      <tr>
        <td class="tableh2" colspan="2">{$lang_stat_details_php['browser']}</td>
        <td class="tableh2" colspan="2" align="right">%</td>
        <td class="tableh2" align="right">{$lang_stat_details_php['number_of_hits']}</td>
      </tr>
EOT;
      $loopCounter = 0;
      foreach ($browserResultArray as $key => $value) {
        $individualBarWidth = floor(($value * $maxBarWidth) / $browserTotal);
        $individualPercentage = floor(($value * 1000) / $browserTotal)/10;
        if ($individualPercentage == floor($individualPercentage)) {
          $individualPercentage .= '.0';
        }
        if ($loopCounter == 0) {
          $row_style_class = 'tableb';
          $loopCounter++;
        } else {
          $row_style_class = 'tableb tableb_alternate';
          $loopCounter = 0;
        }
        print <<< EOT
        <tr>
          <td class="{$row_style_class}" width="20"><img src="images/browser/{$browserArray[$key]}" width="14" height="14" border="0" title="{$key}" alt="" /></td>
          <td class="{$row_style_class}">{$key}</td>
          <td class="{$row_style_class}" align="right"><img src="images/vote.jpg" width="{$individualBarWidth}" height="15" border="0" alt="" /></td>
          <td class="{$row_style_class}" align="right">{$individualPercentage}</td>
          <td class="{$row_style_class}" align="right">{$value}</td>
        </tr>
EOT;
      }
      print <<< EOT
      <tr>
        <td class="tablef" colspan="4">{$lang_stat_details_php['total']}</td>
        <td class="tablef" align="right">{$browserTotal}</td>
      </tr>
EOT;
      endtable();

      print '<br />';

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

      starttable('100%', $lang_stat_details_php['stats_config'], 5);
      print <<< EOT
      <tr>
        <td class="tableb" colspan="3">{$lang_stat_details_php['vote_details']}{$help_vote}</td>
        <td class="tableb" colspan="2">
          <input type="radio" id="vote_details_yes" name="vote_details" value="1"  $yes_selected_vote /><label for="vote_details_yes" class="clickable_option">{$lang_common['yes']}</label>
          &nbsp;&nbsp;
          <input type="radio" id="vote_details_no" name="vote_details" value="0"  $no_selected_vote /><label for="vote_details_no" class="clickable_option">{$lang_common['no']}</label>
        </td>
      </tr>
      <tr>
        <td class="tableb" colspan="3">{$lang_stat_details_php['hit_details']}{$help_hit}</td>
        <td class="tableb" colspan="2">
          <input type="radio" id="hit_details_yes" name="hit_details" value="1"  $yes_selected_hit /><label for="hit_details_yes" class="clickable_option">{$lang_common['yes']}</label>
          &nbsp;&nbsp;
          <input type="radio" id="hit_details_no" name="hit_details" value="0"  $no_selected_hit /><label for="hit_details_no" class="clickable_option">{$lang_common['no']}</label>
        </td>
      </tr>
      <tr>
        <td class="tablef" colspan="3" align="right">
          <input name="emptyhitstats" id="emptyhitstats" type="checkbox" onclick="if (this.checked) return confirm('{$lang_stat_details_php['empty_hits_table_confirm']}');" />
          <label for="emptyhitstats" class="clickable_option">{$lang_stat_details_php['empty_hits_table']}</label>
          &nbsp;
          <input name="emptyvotestats" id="emptyvotestats" type="checkbox" onclick="if (this.checked) return confirm('{$lang_stat_details_php['empty_votes_table_confirm']}');" />
          <label for="emptyvotestats" class="clickable_option">{$lang_stat_details_php['empty_votes_table']}</label>
        </td>
        <td class="tablef" colspan="2">
          <input type="submit" class="button" name="delete" value="{$lang_stat_details_php['submit']}"  />
        </td>
      </tr>
EOT;
      if ($configChangesApplied != '') {
          print <<< EOT
            <tr>
              <td class="tablef" colspan="4" align="center">
                <h2>{$configChangesApplied}</h2>
              </td>
            </tr>
EOT;
      }
      endtable();
      print '</form>';

      //pagefooter();
  } // type == total end
} // admin is logged in end

print  <<<EOT
<br />
<div align="center">
<a href="javascript:;" onclick="window.close();" class="admin_menu">{$lang_stat_details_php['close']}</a>
</div>
</body>
</html>
EOT;

?>