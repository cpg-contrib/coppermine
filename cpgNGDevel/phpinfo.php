<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
**********************************************/
/**
 * phpinfo.php
 *
 * Script to display the php information(configuration)
 *
 * @package cpgNG
 * @author Himlal Pun <himlal@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('PHPINFO_PHP', true);

/**
 * include the required classes
 */
include('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');

if (!GALLERY_ADMIN_MODE) {
    cpgUtils::cpgDie(ERROR, $lang_errors['access_denied']);
}

ob_end_clean();
ob_start();
phpinfo();
$string = ob_get_contents();
$string = strchr($string, '</style>');
$string = str_replace('</style>','',$string);
$string = str_replace('class="p"','',$string);
$string = str_replace('class="e"','class="tableb"',$string);
$string = str_replace('class="v"','class="tablef"',$string);
$string = str_replace('class="h"','class="tableh2"',$string);
$string = str_replace('class="center"','',$string);
ob_end_clean();

/**
 * create instance of the template class
 * and assign all the values to template
 */
$t = cpgTemplate::getInstance();

$t->assign('SUB_TITLE', $lang_cpg_debug_output['phpinfo']);
$t->assign('lang_phpinfo_php',$lang_phpinfo_php);
$t->assign('string', $string);
$t->assign('CONTENT', $t->fetchHTML('common/phpinfo.html'));

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * display the content
 */
$t->display('main.html');

?>