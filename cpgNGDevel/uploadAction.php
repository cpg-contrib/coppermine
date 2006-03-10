<?php
/**
 * uplaodAction.php
 *
 * Script to upload the files in edit folder and insert all the data in session.
 *
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com>
 * @version $Id$
 */

/**#@+
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);
define('DB_INPUT_PHP', true);
define('ADMIN_PHP', true);
/**#@-*/

require('include/init.inc.php');

/**#@+
 * Include all the classes
 */
require_once('classes/cpgTemplate.class.php');
/**#@-*/

$t = new cpgTemplate;

// Start the session
session_start();
/**
 * If user submit's the form
 */
if (count($_FILES) && !isset($_SESSION['fileUpload'])) {
  if (!$auth->isDefined('USER_CAN_UPLOAD_PICTURES')) {
    cpgUtils::cpgDie(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
  }

  $file_upload_count = count($_FILES['userpicture']['name']);

  if ($file_upload_count > 0) {

/*      
      if (isset($_SESSION['fileUpload'])) {
        unset($_SESSION['fileUpload']);
      }
*/  
      // Assign maximum file size for browser crontrols.
      $max_file_size = $config->conf['max_upl_size'] << 10;


      // Check for error code support. Set the error code.

      if (count($_FILES['userpicture']['error']) == 0) {

          // This version of PHP does not support error codes (PHP < 4.2.0).  Create our own error code.

          $error_code = 'default';

      } else {

          // We have error support.
          $error_support = 'TRUE';

      }

      for ($counter = 0; $counter < $file_upload_count; $counter++) {

          // Check for error code support. Set the error code.

          if ($error_support) {
              $error_code = $_FILES['userpicture']['error'][$counter];

          }

          // Create the failure ordinal for ordering the report of failed uploads.

          $failure_cardinal = $counter + 1;

          $failure_ordinal = ''.$failure_cardinal.'. ';

          // If there is no file name, make a dummy name for the error reporting system.

          if (($_FILES['userpicture']['name'][$counter] == '')) {

              $file_name = 'filename_unavailable';

          } else {

              $file_name = $_FILES['userpicture']['name'][$counter];

          }

          // Test for a blank file upload box.
          if (empty($_FILES['userpicture']['name'][$counter])) {

              // There is no need for further tests or action as there was no uploaded file, so skip the remainder of the iteration.
              continue;

          }
          
          // Test for a blank album id.
          if (empty($_POST['album'][$counter])) {
          
              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['no_album'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;          

              // There is no need for further tests or action as there was no uploaded file, so skip the remainder of the iteration.
              continue;

          }

          /**
           * Get the album name from aid
           */
          $query = "SELECT title FROM {$config->conf['TABLE_ALBUMS']} WHERE aid = '".(int)$_POST['album'][$counter]."'";
          $db->query($query);
          if ($db->nf()) {
            $row = $db->fetchRow();
            $_SESSION['fileUpload'][$counter]['albumName'] = $row['title'];
          } else {
              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['invalid_album'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;          

              // There is no need for further tests or action as there was no uploaded file, so skip the remainder of the iteration.
              continue;          
          }

          // Check filename and extension:

          // Check that the file uploaded has a valid name and extension, and replace forbidden chars with underscores.

          // Initialise the $matches array.
          $matches = array();

          // Get the forbidden characters from the Admin console string, and do any necessary translation. Return the translated string.
          $forbidden_chars = strtr($config->conf['forbiden_fname_char'], array('&amp;' => '&', '&quot;' => '"', '&lt;' => '<', '&gt;' => '>'));

          // If magic quotes is on, remove the slashes it added to the file name.
          if (get_magic_quotes_gpc()) {
            $_FILES['userpicture']['name'][$counter] = stripslashes($_FILES['userpicture']['name'][$counter]);
          }

          // Create the holder $picture_name by translating the file name. Translate any forbidden character into an underscore.
          $picture_name = strtr($_FILES['userpicture']['name'][$counter], $forbidden_chars, str_repeat('_', strlen($config->conf['forbiden_fname_char'])));

          // Analyze the file extension using regular expressions.
          if (!preg_match("/(.+)\.(.*?)\Z/", $picture_name, $matches)) {

              // The file name is invalid.
              $matches[1] = 'invalid_fname';

              // Make a bogus file extension to trigger Coppermine's defenses.
              $matches[2] = 'xxx';
          }

          // If there is no extension, or if the extension is unknown/not permitted by Coppermine, zap the intruder.
          if ($matches[2] == '' || !is_known_filetype($matches)) {

              // We reject the file, and make a note of the error.
              $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['forb_ext']);

              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['forb_ext'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
              // There is no need for further tests or action, so skip the remainder of the iteration.
              continue;

          }

          // Check for upload errors.

          if (!($error_code == '0') and !($error_code == 'default')) {

              // PHP has detected a file upload error.
              if ($error_code == '1') {
                  $error_message = $lang_upload_php['exc_php_ini'];
              } elseif ($error_code == '2') {
                  $error_message = $lang_upload_php['exc_file_size'];
              } elseif ($error_code == '3') {
                  $error_message = $lang_upload_php['partial_upload'];
              } elseif ($error_code == '4') {
                  $error_message = $lang_upload_php['no_upload'];
              } else {
                  $error_message = $lang_upload_php['unknown_code'];
              }

              //Make a note in the error array.
              $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$error_message);

              $_SESSION['fileUpload'][$counter]['error'] = $error_message;
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
              // There is no need for further tests or action, so skip the remainder of the iteration.
              continue;

          } elseif ($_FILES['userpicture']['tmp_name'][$counter] == '') {

              // There is no temporary file, so the file did not upload. Make a note of it in the file_failure_array and flip the failure switch to generate the ordinal.

              $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['no_temp_name']);
              
              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['no_temp_name'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
              // There is no need for further tests or action, so skip the remainder of the iteration.
              continue;

          } elseif ($_FILES['userpicture']['size'][$counter] <= 0) {

              // The file contains no data or was corrupted. Make a note of it in the error array.

              $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['no_file_size']);

              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['no_file_size'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
              // There is no need for further tests or action, so skip the remainder of the iteration.
              continue;

          } elseif ($_FILES['userpicture']['size'][$counter] > $max_file_size) {

              // The file exceeds the amount specified by the max upload directive. Either the browser is stupid, or somebody isn't playing nice. (Ancient browser - MAX_UPLOAD forgery)

              $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['exc_file_size']);

              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['exc_file_size'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
              // There is no need for further tests or action, so skip the remainder of the iteration.
              continue;

          }
          
          // Check to make sure the file was uploaded via POST.

          if (!is_uploaded_file($_FILES['userpicture']['tmp_name'][$counter])) {

              // We reject the file, and make a note of the error.
              $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['no_post']);
              
              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['no_post'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;

              // There is no need for further tests or action, so skip the remainder of the iteration.
              continue;
          }          

          // Now we need to move the file into the /edit directory.

          // We need specify the path for the transitory file.

          // Create a prefix for easier human recognition.
          $prefix = "mHTTP_temp_";

          //Set the correct file extension.

          $suffix = $matches[2];

          // Generate the unique name. Keep generating new names until one that is not in use is found.

          do {

               // Create a random seed by taking the first 8 characters of an MD5 hash of a concatenation of the current UNIX epoch time and the  current server process ID.
               $seed = substr(md5(uniqid("")), 0, 8);

               // Assemble the file path.
               $path_to_image = './'.$config->conf['fullpath'].'edit/'. $prefix . $seed . '.' . $suffix;

          } while (file_exists($path_to_image));

          // Create a holder called $tempname.
          $tempname = $prefix . $seed . '.' . $suffix;

          //Now we upload the file.
          if (!(move_uploaded_file($_FILES['userpicture']['tmp_name'][$counter], $path_to_image))) {

              // The file upload has failed.

              $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['impossible']);

              $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['impossible'];
              $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
              // There is no need for further tests or action, so skip the remainder of the iteration.
              continue;

          }

          // Change file permission
          @chmod($path_to_image, octdec($config->conf['default_file_mode'])); //silence the output in case chmod is disabled

          // Create a testing alias.
          $picture_alias = $matches[1].".".$matches[2];

          // Check to see if the filename is consistent with that of a picture.
          if (is_image($picture_alias)) {

              // If it is, get the picture information
              $imginfo = getimagesize($path_to_image);

              // If getimagesize does not recognize the file as a picture, delete the picture.
              if ($imginfo === 'FALSE') {
                  @unlink($path_to_image);

                  // The file upload has failed -- the image is not an image or it is corrupt.
                  $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['not_image']);

                  $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['not_image'];
                  $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
                  // There is no need for further tests or action, so skip the remainder of the iteration.
                  continue;

              // JPEG and PNG only are allowed with GD. If the image is not allowed for GD,delete it.
              //} elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && ($config->conf['thumb_method'] == 'gd1' || $config->conf['thumb_method'] == 'gd2')) {
              } elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $config->conf['GIF_support'] == 0) {
                  @unlink($path_to_image);

                  // The file upload has failed -- the image is not allowed with GD.
                  $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['not_GD']);

                  $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['not_GD'];
                  $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
                  // There is no need for further tests or action, so skip the remainder of the iteration.
                  continue;

              // Check that picture size (in pixels) is lower than the maximum allowed. If not, delete it.
              } elseif (max($imginfo[0], $imginfo[1]) > $config->conf['max_upl_width_height']) {
                if (($auth->isDefined('USER_IS_ADMIN') && $config->conf['auto_resize'] == 1) || (!$auth->isDefined('USER_IS_ADMIN') && $config->conf['auto_resize'] > 0)) {
                  //resize_image($uploaded_pic, $uploaded_pic, $config->conf['max_upl_width_height'], $config->conf['thumb_method'], $imginfo[0] > $config->conf['max_upl_width_height'] ? 'wd' : 'ht');
                  resize_image($uploaded_pic, $uploaded_pic, $config->conf['max_upl_width_height'], $config->conf['thumb_method'], $config->conf['thumb_use']);
                } else {
                  @unlink($path_to_image);

                  // The file upload has failed -- the image dimensions exceed the allowed amount.
                  $file_failure_array[] = array( 'failure_ordinal'=>$failure_ordinal, 'file_name'=> $file_name, 'error_code'=>$lang_upload_php['pixel_allowance']);

                  $_SESSION['fileUpload'][$counter]['error'] = $lang_upload_php['pixel_allowance'];
                  $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
                  // There is no need for further tests or action, so skip the remainder of the iteration.
                  continue;
                }
              }

          // Image is ok
          }

          foreach($_POST as $field => $values) {
            $_SESSION['fileUpload'][$counter][$field] = (get_magic_quotes_gpc() ? stripslashes($_POST[$field][$counter]) : $_POST[$field][$counter]);
          }
          $_SESSION['fileUpload'][$counter]['tmpName']    = $tempname;
          $_SESSION['fileUpload'][$counter]['actualName'] = $file_name;
          
          // Pictures will be moved in a directory named 10000 + USER_ID
          if ($auth->isDefined('USER_ID') && !defined('SILLY_SAFE_MODE')) {
              $filepath = $config->conf['userpics'] . ($auth->isDefined('USER_ID') + FIRST_USER_CAT);
              $dest_dir = $config->conf['fullpath'] . $filepath;
              if (!is_dir($dest_dir)) {
                  mkdir($dest_dir, octdec($config->conf['default_dir_mode']));
                  if (!is_dir($dest_dir)) {
                    return(sprintf($lang_db_input_php['err_mkdir'], $dest_dir));
                  }
                  @chmod($dest_dir, octdec($config->conf['default_dir_mode'])); //silence the output in case chmod is disabled
                  $fp = fopen($dest_dir . '/index.html', 'w');
                  fwrite($fp, ' ');
                  fclose($fp);
              }
              $dest_dir .= '/';
              $filepath .= '/';
          } else {
              $filepath = $config->conf['userpics'];
              $dest_dir = $config->conf['fullpath'] . $filepath;
          }   

          // Create a unique name for the file to be uploaded
          $nr = 0;
          $uniqueName = $matches[1] . '.' . $matches[2];
          while (file_exists($dest_dir . $uniqueName)) {
              $uniqueName = $matches[1] . '~' . $nr++ . '.' . $matches[2];
          }          

          $_SESSION['fileUpload'][$counter]['fileName'] = $uniqueName;          
      } // end for loop
  } // end if statement    
}

//print_r($_SESSION['fileUpload']);

$t->assign('files', $_SESSION['fileUpload']);
$t->assign('lang_upload_php', $lang_upload_php);
$t->assign("CONTENT", $t->fetchHTML("common/uploadAction.html"));
  
$t->assign("SUB_TITLE", $lang_upload_php['title']);

/**
 * Assign user related data
 */
if (!$auth->isDefined('USER_ID')) {
  $t->assign("loggedin", 0);
} else {
  $t->assign("loggedin", 1);
}

/**
* Cleanup connections, freeze objects in session, set user cookie.
*/
include ('include/cleanUp.inc.php');

/**
 * Display the common html file
 */
$t->display ("main.html");
?>
