<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.1
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('LOGOUT_PHP', true);

require('include/init.inc.php');

if (!USER_ID) {
    cpg_die(ERROR, $lang_logout_php['err_not_logged_in'], __FILE__, __LINE__);
}

if (defined('UDB_INTEGRATION')) {
    $cpg_udb->logout_page();
}

cpgRedirectPage($CPG_REFERER, $lang_logout_php['logout'], sprintf($lang_logout_php['bye'], stripslashes(USER_NAME)), 3);

?>