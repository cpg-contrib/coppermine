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
class cpgAuth {

  function getInstance() 
  {
    static $instance;

    if (!isset($instance)) {
      $instance = new cpgAuth;
    }

    return ($instance);
  }
    
  function isDefined($constant)
  {
    return constant($constant);
  }
}
?>
