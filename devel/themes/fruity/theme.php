<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.3.2                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// CVS version: $Id$
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
