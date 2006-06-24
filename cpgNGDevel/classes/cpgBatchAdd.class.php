<?php
/**
 * Coppermine Photo Gallery Next Gen
 *
 * Copyright (c) 2003-2005 Coppermine Dev Team
 * v1.1 originaly written by Gregory DEMAR
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Coppermine version: 1.4.1
 * $Source: /home/cvs/cpgNGDevel/classes/cpgBatchAdd.class.php,v $
 * $Revision$
 * $Author$
 * $Date$
 */

/**
 * cpgBatchAdd
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgBatchAdd {
  var $dirTree = array(); // Variable to store the directory structure.
  var $config;
  var $auth;
  var $db;
  var $expicArr = array(); //Array to store all the pictures in the given path so that we can exclude them
  var $picArr = array();
  var $dirArr = array();
  var $finalPicArr = array();

  /**
   * cpgBatchAdd::cpgBatchAdd()
   *
   * @return
   */
  function cpgBatchAdd()
  {
    $this->config = cpgConfig::getInstance();
    $this->auth = cpgAuth::getInstance();
    $this->db = cpgDB::getInstance();
  }

  /**
   * cpgBatchAdd::createDirTree()
   *
   * @param String $folder
   * @param Integer $ident
   * @return
   */
  function createDirTree($folder='', $ident=0)
  {
    global $lang_search_new_php;

    $dirPath = $this->config->conf['fullpath'] . $folder;

    if (!is_readable($dirPath)) {
      return;
    }

    $dir = opendir($dirPath);

    while ($file = readdir($dir)) { // loop looking for files - start
      if (is_dir($this->config->conf['fullpath'] . $folder . $file) && substr($file,0,1) != "." && strpos($file,"'") == FALSE &&   strpos($file,trim($this->config->conf['userpics'],'/')) === FALSE && strpos($file,'edit') === FALSE && strpos($file,'CVS') === FALSE) {
        $startTarget = $folder . $file;
        $dirPath = $this->config->conf['fullpath'] . $folder . $file;

        $warnings = '';
        if (!is_writable($dirPath)) {
          $warnings .= $lang_search_new_php['dir_ro'];
        }
        if (!is_readable($dirPath)) {
          $warnings .= $lang_search_new_php['dir_cant_read'];
        }

        $this->dirTree[] = array('startTarget' => $startTarget, 'file' => $file, 'ident' => $ident, 'warnings' => $warnings);

        $this->createDirTree($folder . $file . '/', $ident + 1);
      }
    } // loop looking for files - end
    closedir($dir);
  }

  /**
   * getallpicindb()
   *
   * Fill an array where keys are the full path of all images in the picture table
   *
   * @param  $startdir
   * @return
   */
  function getAllpics($startdir)
  {
    $query = "SELECT filepath, filename " . "FROM {$this->config->conf['TABLE_PICTURES']} " . "WHERE filepath LIKE '$startdir%'";
    $this->db->query($query);
    while ($row = $this->db->fetchRow()) {
      $picFile = $row['filepath'] . $row['filename'];
      $this->expicArr[$picFile] = 1;
    }
  }

  /**
   * CPGscandir()
   *
   * recursive function that scan a directory, create the HTML code for each
   * picture and add new pictures in an array
   *
   * @param  $dir the directory to be scanned
   * @return
   */
  function CPGscandir($dir)
  {
    $dir = str_replace(".","" ,$dir);
    static $dir_id = 0;
    static $count = 0;
    static $pic_id = 0;

    $this->picArr = array();
    $this->dirArr = array();
    $this->__getFolderContent($dir);

    if (count($this->picArr) > 0) {
      $dir_id_str = sprintf("d%04d", $dir_id++);

      foreach ($this->picArr as $picture) {
        $count++;
        $pic_id_str = sprintf("i%04d", $pic_id++);
        $this->__picRow($dir . $picture, $pic_id_str, $dir_id_str);
      }
    }
    if (count($this->dirArr) > 0) {
      foreach ($this->dirArr as $directory) {
        if (substr($directory,0,1) != ".") {// added do not show folders with dots: gaugau 03-11-02
          $this->CPGscandir($dir . $directory . '/');
        }
      }
    }
    //return $count;
  }

  /**
   * getFolderContent()
   *
   * return the files and directories of a folder in two arrays
   *
   * @param  $folder the folder to read
   * @return
   */
  function __getFolderContent($folder)
  {
    global $lang_db_input_php;

    $dir = opendir($this->config->conf['fullpath'] . $folder);

    while ($file = readdir($dir)) {
      if (is_dir($this->config->conf['fullpath'] . $folder . $file)) {
        if ($file != "." && $file != ".." && $this->config->conf['fullpath'] . $folder . $file != $this->config->conf['fullpath'].'/edit' && $this->config->conf['fullpath'] . $folder . $file != $this->config->conf['fullpath'].'/'.substr($this->config->conf['userpics'],0,strlen($this->config->conf['userpics'])-1)) {
            $this->dirArr[] = $file;
        }
      }
      if (is_file($this->config->conf['fullpath'] . $folder . $file)) {
        if (strncmp($file, $this->config->conf['thumb_pfx'], strlen($this->config->conf['thumb_pfx'])) != 0 && strncmp($file, $this->config->conf['normal_pfx'], strlen($this->config->conf['normal_pfx'])) != 0 && $file != 'index.html') {
	        $newfile = cpgUtils::replaceForbidden($file);
	        if ($newfile != $file) {
	          //File name has been changed, let's get a unique filename and rename the existing file.
	          $matches = array();
	          if (!preg_match("/(.+)\.(.*?)\Z/", $newfile, $matches)) {
	              $matches[1] = 'invalid_fname';
	              $matches[2] = 'xxx';
	          }

	          if ($matches[2] == '' || !is_known_filetype($matches)) {
	              cpgUtils::cpgDie(ERROR, sprintf($lang_db_input_php['err_invalid_fext'], $this->config->conf['allowed_file_extensions']), __FILE__, __LINE__);
	          }

	          // Create a unique name for the uploaded file
	          $nr = 0;
	          $picture_name = $matches[1] . '.' . $matches[2];
	          while (file_exists($this->config->conf['fullpath'] . $folder . $picture_name)) {
	            $picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
	          }
	          @rename($this->config->conf['fullpath'] . $folder . $file, $this->config->conf['fullpath'] . $folder . $picture_name);
	          $file = $picture_name;
	        }
	        $this->picArr[] = $file;
        }
      }
    }
    closedir($dir);

    natcasesort($this->dirArr);
    natcasesort($this->picArr);
  }

  /**
   * picRow()
   *
   * return the HTML code for a row to be displayed for an image
   * the row contains a checkbox, the image name, a thumbnail
   *
   * @param  $picfile the full path of the file that contains the picture
   * @param  $picid the name of the check box
   * @return the HTML code
   */
  function __picRow($picfile, $picid, $albid)
  {
    $encoded_picfile = base64_encode($picfile);
    $picname = $this->config->conf['fullpath'] . $picfile;
    $picUrl = urlencode($picfile);
    $picFname = basename($picfile);
    $picDirname = dirname($picname);

    $thumbFile = dirname($picname) . '/' . $this->config->conf['thumb_pfx'] . $picFname;
    if (file_exists($thumbFile)) {
      $thumbInfo = getimagesize($picname);
      $img = cpgUtils::path2Url($thumbFile);
    } elseif (is_image($picname)) {
      $img = "showthumb.php?picfile=$picUrl&amp;size=48";
    } else {
      $file['filepath'] = $picDirname.'/'; //substr($picname,0,strrpos($picname,'/'))
      $file['filename'] = $picFname;
      $filepathname = cpgUtils::getPicUrl($file,'thumb');
      $img = $filepathname;
    }

    if (filesize($picname) && is_readable($picname)) {
      $checked = isset($this->expicArr[$picfile]) ? '' : 'checked';
      $winsizeX = ($fullimagesize[0] + 16);
      $winsizeY = ($fullimagesize[1] + 16);
      $this->finalPicArr[$albid][$picid] = array('fileAvailable' => 1, 'checked' => $checked, 'encodedFile' => $encoded_picfile, 'winSizeX' => $winsizeX, 'winSizeY' => $winsizeY, 'picFile' => $picFname, 'picUrl' => $picUrl, 'img' => $img, 'picid' => $picid, 'albid' => $albid);
    } else {
      $winsizeX = (300);
      $winsizeY = (300);

      $this->finalPicArr[$albid][$picid] = array('winSizeX' => $winsizeX, 'winSizeY' => $winsizeY, 'picFile' => $picFname, 'picUrl' => $picUrl);
    }
  }

  /**
   * getAllAlbums()
   *
   * Fill an array with all albums where keys are aid of albums and values are
   * album title
   *
   * @param  $album_array the array to be filled
   * @return
   */
  function getAllAlbums()
  {
    $sql = "SELECT aid, title " . "FROM {$this->config->conf['TABLE_ALBUMS']} " . "WHERE 1";
    $this->db->query($sql);

    $albumArr = array();
    while ($row = $this->db->fetchRow()) {
        $albumArr[$row['aid']] = $row['title'];
    }
    return $albumArr;
  }
}