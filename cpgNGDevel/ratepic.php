<?php
/**
 * ratepic.php
 *
 * Script to rate the picture
 *
 * @package cpgNG
 * @author Himlal Pun <Himlal@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('THUMBNAILS_PHP', true);
//define('INDEX_PHP', true);
define('RATEPIC_PHP',true);
/**
 * Include all the classes
 */
require('include/init.inc.php');

/**
 * Include the class
 */
require_once('classes/cpgRatePicture.class.php');
require_once('classes/cpgTemplate.class.php');

// Check if required parameters are present
if (!isset($_GET['pic']) || !isset($_GET['rate'])) cpgUtils::cpgDie(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);

$pic  = (int)$_GET['pic'];
$rate = (int)$_GET['rate'];
$rate = min($rate, 5);
$rate = max($rate, 0);

$ratepic = new cpgRatePicture($pic, $rate);
$ratepic->ratePicture();

$location = "displayimage.php?pid=" . $pic;
$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
header('Location: '. $location);

//pageheader($lang_info, "<META http-equiv=\"refresh\" content=\"1;url=$location\">");
cpgUtils::msgBox($lang_info, $lang_rate_pic_php['rate_ok'], $lang_continue, $location);
//exit();

?>
