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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/themes/fruity/theme.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

// ------------------------------------------------------------------------- //
// The theme "Fruity" has been done by GauGau (http://gaugau.de/) based on   //
// the framed template of studicasa.nl (their website has gone down, so I    //
// guess no one will care). The usage of this theme is free for personal     //
// use, not for commercial use (according to the disclaimer of studiocasa)!  //
// ------------------------------------------------------------------------- //

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NAVBAR_GRAPHICS', 1);
define('THEME_HAS_PROGRESS_GRAPHICS',1);

// HTML template for main menu
$template_sys_menu = <<<EOT
                <div class="topmenu">
                     {BUTTONS}
                </div>
EOT;

// HTML template for template sys_menu spacer
$template_sys_menu_spacer ='';


?>
