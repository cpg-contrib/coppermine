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
  Coppermine version: 1.4.25
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

// ------------------------------------------------------------------------- //
// The theme "Fruity" has been done by GauGau (http://gaugau.de/) based on   //
// the framed template of studicasa.nl (their website has gone down, so I    //
// guess no one will care). The usage of this theme is free for personal     //
// use, not for commercial use (according to the disclaimer of studiocasa)!  //
// ------------------------------------------------------------------------- //

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_HAS_NAVBAR_GRAPHICS', 1);
define('THEME_IS_XHTML10_TRANSITIONAL',1);  // Remove this if you edit this template until
                                            // you have validated it. See docs/theme.htm.

// HTML template for main menu
$template_sys_menu = <<<EOT
                <div class="topmenu">
                     {BUTTONS}
                </div>
EOT;

// HTML template for template sys_menu spacer
$template_sys_menu_spacer ='';


?>
