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
  Coppermine version: 1.5.2
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

$name = 'Visible HookPoints';
$description =  <<< EOT
Tool for plugin developers to locate plugin entry points (plugin hooks) and array information. Do not enable this plugin unless you want to start developing your own plugin.<br />
<span class="detail_head_collapsed">Details</span>
<div class="detail_body">
    In some cases the output of a hookpoint is not the same as its "echo" point.  A good example of this is the 'gallery_footer'; it is processed very early and its echo point is above the doctype declaration, while the hookpoints actual  output is just above the "powered by" text at the bottom of the document.
    <ul>
        <li>The first marker is placed in the HTML at the hookpoints "echo" point.</li>
        <li>If the hookpoint is an array then the marker has "_ARRAY" appended to it</li>
        <li>If the hookpoint is not an array it has "_HTML" appended to it and the marker without any appendage is tacked onto the filtered var</li>
        <li>In all cases a var_dump of that filtered variable is output to the source html as an html remark just below the echo point</li>
    </ul>
    There is now a statistics output showing how many times each hookpoint was called. There is also a timeline of when each hookpoint was executed relative to the scripts start time.
</div>
EOT;
$extra_info = <<<EOT
    <table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td class="admin_menu">
          <a href="index.php?file=visiblehookpoints/index&action=config" title="Configuration">Visible HookPoints configuration</a>
        </td>
        <td>&nbsp;</td>
        <td class="admin_menu">
          <a href="http://cpg-contrib.org/board/index.php?board=27.0" title="Support">Plugin support</a>
        </td>
    </tr>
    </table>
EOT;
$install_info = 'Plugin comes with a configuration page (accessible via the config manager) that will allow you to specify if the hookpoints should be displayed only if the parameter &quot;hookpoints&quot; is set in the URL or if they are supposed to be display always to every visitor. Second option is only meant for plugin development on testbeds - do not use on production sites, as this plugin will output information about the hookpoints directly on all pages.';
$author = <<< EOT
<a href="mailto:Donnoman@donovanbray.com">Donnoman</a> from <a href="http://cpg-contrib.org">cpg-contrib.org</a> (v1.x and 2.x)<br />
Plugin config section added by <a href="http://coppermine-gallery.net/forum/index.php?action=profile;u=2">Joachim M&uuml;ller</a> (v3.0)
EOT;
$version='3.0';
?>