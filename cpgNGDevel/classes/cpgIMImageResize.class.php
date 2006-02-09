<?php
/**
 * cpgIMImageResize.class.php
 * 
 * Resizing image class for Image Magick
 * 
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com> 
 * @version $Id$
 */
/**
 * cpgImageResize
 * 
 * @package 
 * @author tarique 
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public 
 */
class cpgImageResize {
    var $db;
    var $config;
    var $auth;
    var $error = '';

    /**
     * cpgImageResize::cpgImageResize()
     * 
     * @return 
     */
    function cpgImageResize()
    {
        $this->db = cpgDB::getInstance();
        $this->config = cpgConfig::getInstance();
        $this->auth = cpgAuth::getInstance();
    } 

    /**
     * cpgImageResize::resizeImage()
     * 
     * @param  $src_file 
     * @param  $dest_file 
     * @param  $new_size 
     * @param  $thumb_use 
     * @return 
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

        if (preg_match("#[A-Z]:|\\\\#Ai", __FILE__)) {
            // get the basedir, remove '/include'
            $cur_dir = substr(dirname(__FILE__), 0, -8);
            $src_file = '"' . $cur_dir . '\\' . strtr($src_file, '/', '\\') . '"';
            $im_dest_file = str_replace('%', '%%', ('"' . $cur_dir . '\\' . strtr($dest_file, '/', '\\') . '"'));
        } else {
            $src_file = escapeshellarg($src_file);
            $im_dest_file = str_replace('%', '%%', escapeshellarg($dest_file));
        } 

        $output = array();
        /*
      * Hack for working with ImageMagick on WIndows even if IM is installed in C:\Program Files.
      * By Aditya Mooley <aditya@sanisoft.com>
      */
        if (eregi("win", $_ENV['OS'])) {
            $cmd = "\"" . str_replace("\\", "/", $this->config->conf['impath']) . "convert\" -quality {$this->config->conf['jpeg_qual']} {$this->config->conf['im_options']} -geometry {$destWidth}x{$destHeight} " . str_replace("\\", "/" , $src_file) . " " . str_replace("\\", "/" , $im_dest_file);
            exec ("\"$cmd\"", $output, $retval);
        } else {
            $cmd = "{$this->config->conf['impath']}convert -quality {$this->config->conf['jpeg_qual']} {$this->config->conf['im_options']} -geometry {$destWidth}x{$destHeight} $src_file $im_dest_file";
            exec ($cmd, $output, $retval);
        } 

        if ($retval) {
            $this->error = "Error executing ImageMagick - Return value: $retval";
            if ($this->config->conf['debug_mode']) {
                // Re-execute the command with the backtit operator in order to get all outputs
                // will not work is safe mode is enabled
                $output = `$cmd 2>&1`;
                $this->error .= "<br /><br /><div align=\"left\">Cmd line : <br /><font size=\"2\">" . nl2br(htmlspecialchars($cmd)) . "</font></div>";
                $this->error .= "<br /><br /><div align=\"left\">The convert program said:<br /><font size=\"2\">";
                $this->error .= nl2br(htmlspecialchars($output));
                $this->error .= "</font></div>";
            } 
            @unlink($dest_file);
            return false;
        } 
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