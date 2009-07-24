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

$name = $lang_plugin_php['onlinestats_name'];
$description = $lang_plugin_php['onlinestats_description'];
$author = 'Originally created by <a href="http://coppermine-gallery.net/forum/index.php?action=profile;u=941">Nibbler</a>, <acronym title="internationalization">i18n</acronym> by <a href="http://coppermine-gallery.net/forum/index.php?action=profile;u=9980">Frantz</a>';
$version = '2.2';
$extra_info = <<< EOT
	<a href="index.php?file=onlinestats/index&amp;action=configure" class="admin_menu">{$lang_pluginmgr_php['configure_plugin']}</a>&nbsp;
	 {$lang_plugin_php['onlinestats_config_extra']}
EOT;
$install_info = $lang_plugin_php['onlinestats_config_install'];
?>