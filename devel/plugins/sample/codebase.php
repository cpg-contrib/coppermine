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

// Add an install action
$thisplugin->add_action('plugin_install','sample_install');

// Add a configure action
$thisplugin->add_action('plugin_configure','sample_configure');

// Add a filter for the gallery header
$thisplugin->add_filter('gallery_header','sample_header');

// Sample function to modify gallery header html
function sample_header($html) {
    global $thisplugin;
    return '<p style="color:red;"><b>This is sample data returned from plugin "'.$thisplugin->name.'".</b></p>'.$html;
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
    <form action="{$_SERVER['REQUEST_URI']}" method="post">
        uid:<input type="text" name="uid" /><br />
        pwd:<input type="text" name="pwd" /><br />
        <input type="submit" value="Go!" />
    </form>
EOT;
}
?>
