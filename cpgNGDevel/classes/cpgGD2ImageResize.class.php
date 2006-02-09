<?php
/**
 * cpgGD2ImageResize.class.php
 *
 * Class to resize image using gd2
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
class cpgImageResize {

  var $db;
  var $config;
  var $auth;
  var $error = '';
  
  function cpgImageResize()
  {
    $this->db     = cpgDB::getInstance();
    $this->config = cpgConfig::getInstance();
    $this->auth   = cpgAuth::getInstance();  
  }

  /**
  * resize_image()
  *
  * Create a file containing a resized image
  *
  * @param  $src_file the source file
  * @param  $dest_file the destination file
  * @param  $new_size the size of the square within which the new image must fit
  * @return 'true' in case of success
  */
  function resizeImage($src_file, $dest_file, $new_size, $thumb_use)
  {
      global $lang_errors;
  
      $imginfo = getimagesize($src_file);
      
      if ($imginfo == null) {
        return false;
      }
      
      // GD can only handle JPG & PNG images
      if ($imginfo[2] != GIS_JPG && $imageinfo[2] != GIS_PNG && $this->config->conf['GIF_support'] == 0) {
          $this->error = $lang_errors['gd_file_type_err'];
          return false;
      }
      
      // height/width
      $srcWidth = $imginfo[0];
      $srcHeight = $imginfo[1];
      if ($thumb_use == 'ht') {
          $ratio = $srcHeight / $new_size;
      } elseif ($thumb_use == 'wd') {
          $ratio = $srcWidth / $new_size;
      } else {
          $ratio = max($srcWidth, $srcHeight) / $new_size;
      }
      
      $ratio = max($ratio, 1.0);
      $destWidth = (int)($srcWidth / $ratio);
      $destHeight = (int)($srcHeight / $ratio);
      
      if (!function_exists('imagecreatefromjpeg')) {
          echo 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed';
          exit;
      }
      if (!function_exists('imagecreatetruecolor')) {
          echo 'PHP running on your server does not support GD version 2.x, please switch to GD version 1.x on the admin page';
          exit;
      }
      
      if ($imginfo[2] == GIS_GIF && $this->config->conf['GIF_support'] == 1)
          $src_img = imagecreatefromgif($src_file);
      elseif ($imginfo[2] == GIS_JPG)
          $src_img = imagecreatefromjpeg($src_file);
      else
          $src_img = imagecreatefrompng($src_file);
      if (!$src_img) {
          $this->error = $lang_errors['invalid_image'];
          return false;
      }
      if ($imginfo[2] == GIS_GIF) {
        $dst_img = imagecreate($destWidth, $destHeight);
      } else {
        $dst_img = imagecreatetruecolor($destWidth, $destHeight);
      }
      
      imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
      imagejpeg($dst_img, $dest_file, $this->config->conf['jpeg_qual']);
      imagedestroy($src_img);
      imagedestroy($dst_img);
              
      // Set mode of uploaded picture
      @chmod($dest_file, octdec($this->config->conf['default_file_mode'])); //silence the output in case chmod is disabled
      // We check that the image is valid
      $imginfo = getimagesize($dest_file);
      if ($imginfo == null) {
          $this->error = $lang_errors['resize_failed'];
          @unlink($dest_file);
          return false;
      } else {
          return true;
      }
  }
}
?>