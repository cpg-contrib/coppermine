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
  Coppermine version: 1.4.1
  $Source$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'English_British',
  'lang_name_native' => 'English_British',
  'lang_country_code' => 'gb',
  'trans_name'=> 'Coppermine dev team',
  'trans_email' => '',
  'trans_website' => 'http://coppermine.sourceforge.net/',
  'trans_date' => '11-01-2005',
);

$lang_charset = 'iso-8859-1';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'Yes';
$lang_no  = 'No';
$lang_back = 'BACK';
$lang_continue = 'CONTINUE';
$lang_info = 'Information';
$lang_error = 'Error';
$lang_check_uncheck_all = 'check/uncheck all'; // cpg1.4.0

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%e.%B %Y';
$lastcom_date_fmt =  '%e.%m.%y um %H:%M';
$lastup_date_fmt = '%e %B %Y';
$register_date_fmt = '%e %B %Y';
$lasthit_date_fmt = '%e %B %Y um %H:%M';
$comment_date_fmt =  '%e %B %Y um %H:%M';

$lang_meta_album_names = array(
   'favpics'=> 'Favourite Files',
);


// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(

  'fav_title' => 'Go to my favourites', //cpg1.4.0
  'fav_lnk' => 'My Favourites',
);


// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //


if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'General settings',
  array('Allow ZIP-download of favourites', 'enable_zipdownload', 1, 'f=index.htm&as=admin_general_zip-download&ae=admin_general_zip-download_end'),
 
);
// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_picinfo = array(
	'ColorSpace' => 'Colour Space',
	 'ColorMode' => 'Colour Mode',
);

$lang_picinfo = array(
  'addFav'=>'Add to Favourites',
  'addFavPhrase'=>'Favourites',
  'remFav'=>'Remove from Favourites',
);
}
// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ',
  array('Why do I need to register?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favourite list, rating pictures and posting comments etc.', 'allow_user_registration', '1'),
   array('How do I save a picture to &quot;My Favourites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0),
  array('What\'s &quot;My Favourites&quot;?', 'This feature will let a user store a favourite file in the cookie that was sent to your computer.', 'offline', 0),
);

// ------------------------------------------------------------------------- //
// File versioncheck.php                                                     // cpg 1.4.0
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck',
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font colour) are OK.<br />Click on the help icons to find out more.',
);

?>