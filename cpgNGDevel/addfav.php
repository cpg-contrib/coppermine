<?php
/**
 * addfav.php
 *
 * Script to make or remove the particular picture my favorite
 *
 * @package cpgNG
 * @author Himlal Pun <Himlal@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
define('INDEX_PHP', true);
/**#@-*/

/**#@+
 * Include all the classes
 */
require('include/init.inc.php');
/**#@-*/

/**#@+
 * Include the class
 */
require_once('classes/cpgAddFavorite.class.php');
/**#@-*/

if (!isset($_GET['pid'])) cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$pic = (int)$_GET['pid'];
$fav = new cpgAddFavorite($pic);
$fav->addFavoritePicture();

/**
 * after add or remove from my favorite, redirect
 */
$location = "displayimage.php?pid=" . $pic;
$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header($header_location . $location);

?>