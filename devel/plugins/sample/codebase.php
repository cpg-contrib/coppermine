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
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// Add an install action
$thisplugin->add_action('plugin_install','sample_install');

// Add a configure action
$thisplugin->add_action('plugin_configure','sample_configure');

// Add a filter for the gallery header
$thisplugin->add_filter('gallery_header','sample_header');

$thisplugin->add_filter('plugin_block','sample_block_mgr');


// Sample function to modify gallery header html
function sample_header($html) {
    global $thisplugin;
    return '<p style="color:red;"><b>This is sample data returned from plugin "'.$thisplugin->name.'".</b></p>'.$html;
}

function sample_block_mgr($block) {
    return $block;
}


// Install function
// Checks if uid is 'me' and pwd is 'you'; If so, then install the plugin
function sample_install() {

    // Install
    if ($_POST['uid']=='me' && $_POST['pwd']=='you') {

        return true;

    // Loop again
    } else {

        return 1;
    }
}

// Configure function
// Displays the form
function sample_configure() {
    echo <<< EOT
    <h3>Enter the username ('me') and password ('you') to install</h3>
    <form name="cpgform" id="cpgform" action="{$_SERVER['REQUEST_URI']}" method="post">
        uid:<input type="text" name="uid" /><br />
        pwd:<input type="text" name="pwd" /><br />
        <input type="submit" value="Go!" />
    </form>
EOT;
}
?>