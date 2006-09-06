<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2006 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision: 3267 $
  $LastChangedBy: gaugau $
  $Date: 2006-09-01 11:38:25 +0200 (Fr, 01 Sep 2006) $
**********************************************/

define('IN_COPPERMINE', true);

require('include/init.inc.php');

if (isset($_GET['pid']) && !GALLERY_ADMIN_MODE && $CONFIG['slideshow_hits'] != 0) {
  // Add 1 to hit counter
  $pid = (int)$_GET['pid'];
  if (!in_array($pid, $USER['liv']) && isset($HTTP_COOKIE_VARS[$CONFIG['cookie_name'] . '_data'])) {
      add_hit($pid);
      if (count($USER['liv']) > 4) array_shift($USER['liv']);
      array_push($USER['liv'], $pid);
      user_save_profile();
  }
}
?>