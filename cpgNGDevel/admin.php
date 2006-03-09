<?php

/**
 * admin.php
 *
 * This script is used to configure the gallery
 *
 * @package cpgNG
 * @author Amit <amit@sanisoft.com>
 * @version $Id$
 */

/**
 * Constant to prevent direct execution of config.inc.php
 */
define('IN_COPPERMINE', true);
define('ADMIN_PHP', true);
define('CONFIG_PHP', true); // added for backwards compatibility (language fallback)

/**
 * Require files
 */
require('include/init.inc.php');
require_once('classes/cpgTemplate.class.php');
require_once('classes/cpgWidgetFactory.class.php');

/**
 * If logged in member is not admin then stop further execution of script
 */
if (!GALLERY_ADMIN_MODE) cpgUtils::cpgDie(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

/**
 * List of options to disable in coppermine is bridged with another application
 */
$optionsToDisable = array(
                          'reg_notify_admin_email',
                          'reg_requires_valid_email',
                          'allow_duplicate_emails_addr',
                          'allow_email_change',
                          'login_threshold',
                          'login_expiry',
                          'user_profile1_name',
                          'user_profile2_name',
                          'user_profile3_name',
                          'user_profile4_name',
                          'user_profile5_name',
                          'user_profile6_name',
                          'enable_encrypted_passwords'
                          );

/**
 * If admin chooses to update config values
 */
if (isset($_POST['update_config'])) {
  $needToBePositive = array(
                            'albums_per_page',
                            'album_list_cols',
                            'max_tabs',
                            'picture_width',
                            'subcat_level',
                            'thumb_width',
                            'thumbcols',
                            'thumbrows',
                            // Show filmstrip
                            'max_film_strip_items'
                            );

  /**
   * Code to rename system thumbs in images folder
   */
  $oldThumbPfx = $config->conf['thumb_pfx'];

  if ($oldThumbPfx != $_POST['thumb_pfx']) {
    $folders = array('images/', $THEME_DIR.'images/');

    foreach ($folders as $folder) {
      $thumbs = cpgUtils::cpgGetSystemThumbList($folder);

      foreach ($thumbs as $thumb) {
        @rename($folder.$thumb['filename'], $folder.str_replace($oldThumbPfx, $_POST['thumb_pfx'], $thumb['filename']));
      }
    }
  }

  foreach ($needToBePositive as $parameter) {
    $_POST[$parameter] = max(1, (int)$_POST[$parameter]);
  }

  foreach($lang_admin_data as $element) {
    if ((is_array($element)) && isset($_POST[$element[1]]) && $element[2] != 3) {
      $value = addslashes($_POST[$element[1]]);

      if ($element[1] == 'ecards_more_pic_target' && substr($value, -1, 1) != '/') $value .= '/';

      if ($config->conf[$element[1]] !== stripslashes($value)) {
        /**
         * Query to check value exists in database or not
         */
        $query = 'SELECT * FROM '.$config->conf['TABLE_CONFIG']." WHERE name = '".$element[1]."'";
        $db->query($query);

        if ($db->nf() > 0) {
          $query = "UPDATE ".$config->conf['TABLE_CONFIG']." SET value = '$value' WHERE name = '".$element[1]."'";
          $db->query($query);

          if ($config->conf['log_mode'] == CPG_LOG_ALL) {
            log_write('CONFIG UPDATE SQL: '.
                      'UPDATE '.$config->conf['TABLE_CONFIG']." SET value = '$value' WHERE name = '".$element[1]."'\n".
                      'TIME: '.date("F j, Y, g:i a")."\n".
                      'USER: '.$auth->userData['user_name'],
                      CPG_DATABASE_LOG);
          }
        } else {
          $query = 'INSERT INTO '.$config->conf['TABLE_CONFIG']." SET name = '".$element[1]."', value = '$value'";
          $db->query($query);

          if ($config->conf['log_mode'] == CPG_LOG_ALL) {
            log_write('CONFIG UPDATE SQL: '.
                      'INSERT INTO '.$config->conf['TABLE_CONFIG']." SET name = '".$element[1]."', value = '$value'\n".
                      'TIME: '.date("F j, Y, g:i a")."\n".
                      'USER: '.$auth->userData['user_name'],
                      CPG_DATABASE_LOG);
          }
        }

        if ($element[1] == 'enable_encrypted_passwords' && $value) {
          $query = "UPDATE ".$config->conf['TABLE_USERS']." SET user_password = MD5(user_password)";
          $db->query($query);
        }
      }
    }
  }

  cpgUtils::msgBox($lang_admin_php['info'], $lang_admin_php['upd_success'], $lang_continue, 'index.php');
  exit;
}

/**
 * Create new template object
 */
$t = new cpgTemplate;

/**
 * Create new widget object
 */
$widgetObject = new cpgWidgetFactory;

reset($lang_admin_data);

foreach ($lang_admin_data as $element) {
  /**
   * Get widget for config section
   */
  $widgetObject->createWidget($element);
}

$t->assign('lang_admin_php', $lang_admin_php);
$t->assign('configContent', $widgetObject);

/**
 * Fetch page content
 */
$t->assign('CONTENT', $t->fetchHTML('common/admin.html'));

/**
 * Code to display 'Logout' link
 */
$t->assign('loggedin', 1);

/**
 * Assign sub-title of page
 */
$t->assign('SUB_TITLE', $lang_admin_php['title']);

/**
 * Cleanup connections, freeze objects in session, set user cookie.
 */
include ('include/cleanUp.inc.php');

/**
 * Display common template
 */
$t->display('main.html');

?>
