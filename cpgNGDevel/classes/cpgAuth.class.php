<?php
/**
 * cpgDbMysql.class.php
 *
 * Database abstraction layer class
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**
 * This is the auth class for cpg. As of now this class only returns the constants defined by using define() function.
 * In future this class will contain all the authencation code and object constants which will be PHP5 specific.
 */

/**
 * This class is first instanciated in init.inc.php
 */
/**
 * cpgAuth
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 **/
class cpgAuth {

  /**
   * cpgAuth::getInstance()
   *
   * @param string $bridge
   * @return
   **/
  function &getInstance($bridge='')
  {
    global $BRIDGE;
    static $instance;

    if ($bridge && !isset($instance)) {
      require("bridge/$bridge.inc.php");
      $instance = $cpg_udb;
    }

    return ($instance);
  }
}
?>