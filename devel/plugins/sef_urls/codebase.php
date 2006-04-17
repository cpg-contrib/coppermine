<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2005 Coppermine Dev Team
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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// Add plugin_install action
$thisplugin->add_action('plugin_install','sef_urls_install');

// Add plugin_uninstall action
$thisplugin->add_action('plugin_uninstall','sef_urls_uninstall');

// Add plugin_configure action
$thisplugin->add_action('plugin_configure','sef_urls_configure');

// Add plugin_cleanup action
$thisplugin->add_action('plugin_cleanup','sef_urls_cleanup');

// Add page_html filter
$thisplugin->add_filter('page_html','sef_urls_convert');


/**
 * Convert urls to search-engine friendly (SEF) urls
 */
function sef_urls_convert(&$html) {

    // Rewrite index.php?cat=[category]&page=[page] URLs to index-[category]-page-[page].html
    $html = preg_replace('/index\.php\?cat=([0-9]+)(\&|\&amp;)page=([0-9]+)/i','index-$1-page-$3.html',$html);

    // Rewrite index.php?cat=[category] URLs to index-[category].html
    $html = preg_replace('/index\.php\?cat=([0-9]+)/i','index-$1.html',$html);

    // Rewrite thumbnails.php?album=[album]&cat=[category]&page=[category] URLs to thumbnails-[album]-[category]-page-[page].html
    $html = preg_replace('/thumbnails\.php\?album=([a-z0-9]+)(\&|\&amp;)cat=([\-0-9]+)(\&|\&amp;)page=([0-9]+)/i','thumbnails-$1-$3-page-$5.html',$html);

    // Rewrite thumbnails.php?album=[album]&cat=[category] URLs to thumbnails-[album]-[category].html
    $html = preg_replace('/thumbnails\.php\?album=([a-z0-9]+)(\&|\&amp;)cat=([\-0-9]+)/i','thumbnails-$1-$3.html',$html);

    // Rewrite thumbnails.php?album=[album]&page=[category] URLs to thumbnails-[album]-page-[page].html
    $html = preg_replace('/thumbnails\.php\?album=([a-z0-9]+)(\&|\&amp;)page=([0-9]+)/i','thumbnails-$1-page-$3.html',$html);

    // Rewrite thumbnails.php?album=search&search=[searchterm] URLs to thumbnails-search-[searchterm].html
    $html = preg_replace('/thumbnails\.php\?album=search(\&|\&amp;)search=([^"]+)/i','thumbnails-search-$2.html',$html);

    // Rewrite thumbnails.php?album=[album] URLs to thumbnails-[album].html
    $html = preg_replace('/thumbnails\.php\?album=([a-z0-9]+)/i','thumbnails-$1.html',$html);

    // Rewrite displayimage.php?album=[album]&cat=[category]&pos=[position] URLs to displayimage-[album]-[category]-[position].html
    $html = preg_replace('/displayimage\.php\?album=([a-z0-9]+)(\&|\&amp;)cat=([\-0-9]+)(\&|\&amp;)pos=([\-0-9]+)/i','displayimage-$1-$3-$5.html',$html);

    // Rewrite displayimage.php?album=[album]&pos=[position] URLs to displayimage-[album]-[position].html
    $html = preg_replace('/displayimage\.php\?album=([a-z0-9]+)(\&|\&amp;)pos=([\-0-9]+)/i','displayimage-$1-$3.html',$html);

    // Rewrite displayimage.php?pos=-[pid] URLs to displayimage-[pid].html
    $html = preg_replace('/displayimage\.php\?pos=-([0-9]+)/i','displayimage-$1.html',$html);

         // Rewrite displayimage.php?album=[album]&pid=[pid]&slideshow=[interval] URLs to slideshow-[album]-[pid]-[interval].html
        $html = preg_replace('/displayimage\.php\?album=([a-z0-9]+)(\&|\&amp;)pid=([0-9]+)(\&|\&amp;)slideshow=([0-9]+)/i','slideshow-$1-$3-$5.html',$html);

         // Rewrite displayimage.php?album=[metaalbum]&cat=[category]&pid=[pid]&slideshow=[interval] URLs to slideshow-[album]-[category]-[pid]-[interval].html
        $html = preg_replace('/displayimage\.php\?album=([a-z]+)(\&|\&amp;)cat=([\-0-9]+)(\&|\&amp;)pid=([0-9]+)(\&|\&amp;)slideshow=([0-9]+)/i','slideshow-$1-$3-$5-$7.html',$html);


    // Return modified HTML
    return $html;
}


/**
 * Configure plugin for install
 */
function sef_urls_configure($action) {
    global $thisplugin;

    if ($action===1) {
        $code = implode('',file($thisplugin->fullpath.'/ht.txt'));
        echo <<< EOT
    <form name="cpgform" id="cpgform" action="{$_SERVER['REQUEST_URI']}" method="post">
        <p>
            You already have a .htaccess file in your root Coppermine folder.<br />
            Is it ok to overwrite it?
        </p>
        <div style="margin:25;">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><input type="radio" name="create" value="1" /></td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><input type="radio" name="create" checked="checked" value="0" /></td>
                <td>No</td>
            </tr>
        </table>
        </div>
        <span>
           <input type="submit" name="submit" value="Submit" /> &nbsp;&nbsp;&nbsp;
            <input type="button" name="cancel" onClick="window.location='pluginmgr.php';" value="Cancel" />
        </span>

        <p>&nbsp;</p>

        <p style="color:red;font-weight:bold;">STOP! READ THE FOLLOWING!</p>

        <p>
            If you don't want your .htaccess file to be overwritten, you'll have to insert the following code:
        </p>

        <div align="right">
            <a class="link" href="{$thisplugin->fullpath}/ht.txt" target="_blank">Open in a seperate window</a>
        </div>
        <pre style="border:1;border-color:black;background-color:white;font-family:fixedsys;">
            $code
        </pre>
    </form>
EOT;
    }
}


/**
 * Display cleanup options for uninstall
 */
function sef_urls_cleanup($action) {
    if ($action===1) {
        echo <<< EOT
    <form name="cpgform" id="cpgform" action="{$_SERVER['REQUEST_URI']}" method="post">
        <p>
            Delete the .htaccess file in your Coppermine root? (If this file was created by this plugin,
            It's ok to delete it.)
        </p>
        <div style="margin:25;">
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td><input type="radio" name="delete" value="1" /></td>
                <td>Yes</td>
            </tr>
            <tr>
                <td><input type="radio" name="delete" checked="checked" value="0" /></td>
                <td>No</td>
            </tr>
        </table>
        </div>
        <span>
           <input type="submit" name="submit" value="Submit" /> &nbsp;&nbsp;&nbsp;
            <input type="button" name="cancel" onClick="window.location='pluginmgr.php';" value="Cancel" />
        </span>
    </form>
EOT;
    }
}


/**
 * Install the plugin
 */
function sef_urls_install() {
    global $thisplugin;

    $create = @$_POST['create'];

    // There's no .htaccess file or user has clicked 'yes' on the create form
    if (!file_exists('.htaccess') || $create) {
        copy($thisplugin->fullpath.'/ht.txt','.htaccess');
        return true;

    // An htaccess file exists; display the configure form
    } elseif (!isset($create)) {
        return 1;

    // User has clicked 'no' on the configure form. Install plugin. Don't create .htaccess file
    } else {
        return true;
    }
}


/**
 * Uninstall the plugin
 */
function sef_urls_uninstall() {
    global $thisplugin;

    $delete = @$_POST['delete'];

    // There's an .htaccess file and user has clicked 'yes' on the cleanup form; delete the .htaccess file
    if (file_exists('.htaccess') && $delete) {
        unlink('.htaccess');
        return true;

    // An .htaccess file exists; display the cleanup form
    } elseif (file_exists('.htaccess') && !isset($delete)) {
        return 1;

    // User has clicked 'no' on the cleanup form. Uninstall plugin. Don't delete '.htaccess' file
    } else {
        return true;
    }
}
?>