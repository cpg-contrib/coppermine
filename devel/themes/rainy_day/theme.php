<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.1                                            //
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
// $Id$
// ------------------------------------------------------------------------- //
// This theme has had all redundant CORE items removed                           //
// ------------------------------------------------------------------------- //

define('THEME_HAS_RATING_GRAPHICS', 1);
define('THEME_IS_XHTML10_TRANSITIONAL',1);

// HTML meta_menu inherits sys_menu settings
// HTML template for sys_menu
$template_sys_menu = <<<EOT
  <div class="topmenu">
          <table border="0" cellpadding="0" cellspacing="0">
                  <tr>
  {BUTTONS}
                  </tr>
          </table>
  </div>
EOT;

// HTML template for template sys_menu buttons
$template_sys_menu_button = <<<EOT
<!-- BEGIN {BLOCK_ID} -->
  <td><img src="images/spacer.gif" width="5" height="25" border="0" alt="" /></td>
  <td><img src="themes/rainy_day/images/button1_r1_c1.gif" width="5" height="25" border="0" alt="" /></td>
  <td style="background-image:url(themes/rainy_day/images/button1_r1_c2.gif)">
          <a href="{HREF_TGT}" title="{HREF_TITLE}">{HREF_LNK}</a>
  </td>
  <td><img src="themes/rainy_day/images/button1_r1_c3.gif" width="5" height="25" border="0" alt="" /></td>
<!-- END {BLOCK_ID} -->
EOT;

?>