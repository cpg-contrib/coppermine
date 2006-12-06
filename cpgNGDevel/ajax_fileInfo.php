<?php

/**
 * ajax_fileInfo.php
 *
 * This script is used to show file information using mini toolbar below thumbnails
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('DISPLAYIMAGE_PHP', true);

/**
 * Require files
 */
require('include/init.inc.php');
require_once('include/iptc.inc.php');
require_once('include/exif_php.inc.php');
require_once('classes/cpgTemplate.class.php');

/**
 * Create new template object
 */
$t = cpgTemplate::getInstance();

$pid = (int)$_GET['pid'];

if ($pid > 0) {
  /**
   * Query to fetch file details
   */
  $query = 'SELECT * FROM '.$config->conf['TABLE_PICTURES']." WHERE pid = '$pid'";
  $db->query($query);

  $row = $db->fetchRow();

  $picInfo = array();

  $picInfo['pid'] = $pid;
  $picInfo['ownerUid'] = (int)$row['owner_id'];
  $picInfo['ownerName'] = $row['owner_name'];
  $picInfo['fileName'] = htmlspecialchars($row['filename']);

  if (GALLERY_ADMIN_MODE && !empty($row['pic_raw_ip'])) {
    if (empty($row['pic_hdr_ip'])) {
      $picInfo['ipinfo'] = ' ('.$row['pic_raw_ip'].') / ';
    } else {
      $picInfo['ipinfo'] = ' ('.$row['pic_hdr_ip'].' ['.$row['pic_raw_ip'].']) / ';
    }
  } else {
    if (empty($picInfo['ownerUid'])) {
      $picInfo['ipinfo'] = '';
    } else {
      $picInfo['ipinfo'] = ' / ';
    }
  }

  $picInfo['aid'] = (int)$row['aid'];
  $picData['votes'] = (int)$row['votes'];
  $picData['pic_rating'] = (int)$row['pic_rating'];

  if ($picData['votes'] > 0) {
    if (defined('THEME_HAS_RATING_GRAPHICS')) {
      $prefix = $THEME_DIR;
    } else {
      $prefix = '';
    }

    if (GALLERY_ADMIN_MODE) {
      $picInfo['width'] = 978;
      $picInfo['height'] = 504;
    } else {
      $picInfo['width'] = 418;
      $picInfo['height'] = 232;
    }

    $picInfo['rating'] = sprintf($lang_picinfo['Rating'], $picData['votes']);
    $picInfo['ratingImgPath'] = $prefix.'images/rating'.round($picData['pic_rating'] / 2000).'.gif';
  }

  if (!empty($row['keywords'])) {
    $picInfo['keywords'] = preg_replace('/(\S+)/', '<a href="thumbnails.php?album=search&amp;search=\\1">\\1</a>', $row['keywords']);
  }

  $picInfo['userFields'] = array();

  for ($i = 1; $i <= 4; $i++) {
    if (!empty($config->conf['user_field'.$i.'_name'])) {
      if (!empty($row['user'.$i])) {
        $picInfo['userFields'][$config->conf['user_field'.$i.'_name']] = cpgUtils::makeClickable($row['user'.$i]);
      }
    }
  }

  $picInfo['dateAdded'] = cpgUtils::localisedDate($row['ctime'], $lastup_date_fmt);
  $picInfo['displayed'] = sprintf($lang_display_image_php['views'], (int)$row['hits']);
  $picInfo['dimensions'] = sprintf($lang_display_image_php['size'], (int)$row['pwidth'], (int)$row['pheight']);
  $picInfo['fileSize'] = ((int)$row['filesize'] > 10240 ? ((int)$row['filesize'] >> 10).'&nbsp;'.$lang_byte_units[1] : (int)$row['filesize'].'&nbsp;'.$lang_byte_units[0]);

  $picInfo['exifInfo'] = array();

  if ($config->conf['read_exif_data']) {
    $exifInfo = exif_parse_file($config->conf['fullpath'].$row['filepath'].$row['filename']);

    if (isset($exifInfo) && is_array($exifInfo)) {
      reset($exifInfo);

      foreach ($exifInfo as $key => $data) {
        $picInfo['exifInfo'][$key] = htmlentities(strip_tags(trim($data, "\x7f..\xff\x0..\x1f")), ENT_QUOTES);
      }
    }
  }

  if ($config->conf['read_iptc_data']) {
    $iptc = get_IPTC($config->conf['fullpath'].$row['filepath'].$row['filename']);

    if (isset($iptc) && is_array($iptc)) {
      reset($iptc);

      foreach ($iptc as $key => $data) {
        if (is_array($data)) {
          reset($data);

          foreach ($data as $k => $v) {
            $iptc[$key][$k] = htmlentities(strip_tags(trim($v, "\x7f..\xff\x0..\x1f")), ENT_QUOTES); // sanitize data against sql/html injection; trim any nongraphical non-ASCII character
          }
        } else {
          $iptc[$key] = htmlentities(strip_tags(trim($data, "\x7f..\xff\x0..\x1f")), ENT_QUOTES); // sanitize data against sql/html injection; trim any nongraphical non-ASCII character
        }
      }

      if (!empty($iptc['Title'])) {
        $picInfo['iptcTitle'] = trim($iptc['Title']);
      }

      if (!empty($iptc['Copyright']))  {
        $picInfo['iptcCopyright'] = trim($iptc['Copyright']);
      }

      if (!empty($iptc['Keywords']))  {
        $picInfo['iptcKeywords'] = trim(implode(' ', $iptc['Keywords']));
      }

      if (!empty($iptc['Category']))  {
        $picInfo['iptcCategory'] = trim($iptc['Category']);
      }

      if (!empty($iptc['SubCategories']))  {
        $picInfo['iptcSubCategories'] = trim(implode(' ', $iptc['SubCategories']));
      }
    }
  }

  /**
   * Query to fetch album title
   */
  $query = 'SELECT title FROM '.$config->conf['TABLE_ALBUMS']." WHERE aid = '".$picInfo['aid']."'";
  $db->query($query);

  $row = $db->fetchRow();

  $picInfo['albumName'] = $row['title'];

  if ($config->conf['short_url']) {
    $picInfo['URL'] = $config->conf['ecards_more_pic_target'].(substr($config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/').'image/'.$pid;
  } else {
    $picInfo['URL'] = $config->conf['ecards_more_pic_target'].(substr($config->conf['ecards_more_pic_target'], -1) == '/' ? '' : '/').'displayimage.php?pid='.$pid;
  }

  $t->assign('showFileInfo', 1);
  $t->assign('picInfo', $picInfo);
  $t->assign('lang_picinfo', $lang_picinfo);
  $t->assign('showHitDetailsLink', (((int)$row['hits'] > 0 && $config->conf['vote_details'] == 1 && GALLERY_ADMIN_MODE) ? 1 : 0));
} else {
  $t->assign('lang_errors', $lang_errors);
}

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display content
 */
echo $t->fetch('common/ajax_fileInfo.html');

flush();

?>
