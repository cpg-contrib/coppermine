<?php
/**
 * $Id$
 */
  define('IN_COPPERMINE', true);
  define('DISPLAYIMAGE_PHP', true);
  define('INDEX_PHP', true);
  //define('SMILIES_PHP', true);

  require('include/init.inc.php');
  require_once('classes/cpgAlbumData.class.php');
  require_once('classes/cpgTemplate.class.php');

  $t = new cpgTemplate;
  $picData = new cpgAlbumData;

  if (isset($_GET['picfile'])) {
      if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

      $picfile = $_GET['picfile'];
      $picname = $CONFIG['fullpath'] . $picfile;
      $imagesize = @getimagesize($picname);
      $t->assign("picUrl", path2url($picname));
      $t->assign("imagesize", $imagesize[3]);
      $t->assign("picTitle", $picfile."\n".$lang_fullsize_popup['click_to_close']);
  } elseif (isset($_GET['pid'])) {
      $pid = (int)$_GET['pid'];
      $sql = "SELECT * " . "FROM {$CONFIG['TABLE_PICTURES']} " . "WHERE pid='$pid' $ALBUM_SET";
      $result = cpg_db_query($sql);

      if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);

      $row = mysql_fetch_array($result);
      $picUrl = $picData->__getPicUrl($row, 'fullsize');
      $geom = 'width="' . $row['pwidth'] . '" height="' . $row['pheight'] . '"';
      $t->assign("picUrl", $picUrl);
      $t->assign("imagesize", $geom);
      $t->assign("picTitle", htmlspecialchars($row['filename'])."\n".$lang_fullsize_popup['click_to_close']);
  } else {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
  }
  $t->assign("CONTENT", $t->fetch("2bornot2b/common/displayFullSizeImage.html"));
  $t->display("2bornot2b/common/popup.html");
?>