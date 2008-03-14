<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $Source: /cvsroot/coppermine/devel/admin.php,v $
  $Revision: 4112 $
  $LastChangedBy: adityamooley $
  $Date: 2007-12-10 17:26:49 +0100 (Mo, 10 Dez 2007) $
**********************************************/

/**
 * Source file for Inspekt_Error
 *
 * @author Ed Finkler <coj@funkatron.com>
 * @package Inspekt
 */

/**
 * Error handling for Inspekt
 *
 * @package Inspekt
 *
 */
class Inspekt_Error {

	/**
	 * Constructor
	 *
	 * @return Inspekt_Error
	 */
	function Inspekt_Error() {

	}

	/**
	 * Raises an error.  In >= PHP5, this will throw an exception. In PHP4,
	 * this will trigger a user error.
	 *
	 * @param string $msg
	 * @param integer $type  One of the PHP Error Constants (E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE)
	 *
	 * @link http://www.php.net/manual/en/ref.errorfunc.php#errorfunc.constants
	 * @todo support PHP5 exceptions without causing a syntax error.  Probably should use factory pattern and instantiate a different class depending on PHP version
	 *
	 * @static
	 */
	function raiseError($msg, $type=E_USER_WARNING) {
		/*if (version_compare( PHP_VERSION, '5', '<' )) {
			Inspekt_Error::raiseErrorPHP4($msg, $type);
		} else {
			throw new Exception($msg, $type);
		}*/

		Inspekt_Error::raiseErrorPHP4($msg, $type);
	}

	/**
	 * Triggers a user error for PHP4-compatibility
	 *
	 * @param string $msg
	 * @param integer $type  One of the PHP Error Constants (E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE)
	 *
	 * @static
	 */
	function raiseErrorPHP4 ($msg, $type=NULL) {

		if (isset($type)) {
			trigger_error($msg);
		} else {
			trigger_error($msg, $type);
		}
	}
}