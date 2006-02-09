<?php
/**
 * cpgImgFactory.class.php
 *
 * Factory Class which returns the object of image class according to the value set in config
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */
 
/**
 * This is a small factory class as of now. In future each image manupulation will contain number of functions.
 */
/**
 * cpgImgFactory
 * 
 * @package 
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 **/
class cpgImgFactory {

  /**
   * cpgImgFactory::getInstance()
   * 
   * @return 
   **/
  function getInstance()
  {
    $config = cpgConfig::getInstance();
  
    $method = $config->conf['thumb_method'];
    switch($method) {
      case 'gd2':
        include('classes/cpgGD2ImageResize.class.php');
        break;
      case 'im':
        include('classes/cpgIMImageResize.class.php');
        break;
    }
    
    $obj = new cpgImageResize;
    return($obj);
  }
}
?>