<?php
/**
 * errors.php - API for Coppermine 1.4
 *
 *
 * Tested with Coppermine 1.4
 *
 * @copyright Aditya Mooley <adityamooley@sanisoft.com>, Abbas Ali <abbas@sanisoft.com>, Tarique Sani <tarique@sanisoft.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License version 2 of the License, or
 * any later version.
 *
 */
$errArr = array(
                1 => 'Album id not posted',
                2 => 'File not posted',
                3 => 'Empty file name',
                4 => $lang_upload_php['invalid_album'],
                5 => $lang_upload_php['forb_ext'],
                6 => $error_message,
                7 => $lang_db_input_php['no_temp_name'],
                8 => $lang_upload_php['no_file_size'],
                9 => $lang_upload_php['exc_file_size'],
                10 => $lang_upload_php['no_post'],
                11 => sprintf($lang_db_input_php['err_mkdir'], $dest_dir),
                12 => $lang_upload_php['impossible'],
                13 => $lang_upload_php['not_image'],
                14 => $lang_upload_php['not_GD'],
                15 => 'PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed',
                16 => 'PHP running on your server does not support GD version 2.x, please switch to GD version 1.x on the admin page',
                17 => 'Error in inserting or resizing image',
                18 => 'Authentication failed',
                19 => $lang_db_input_php['unknown_album'],
                20 => $lang_errors['perm_denied'],
                21 => 'The group table does not contain the Anonymous group',
                22 => 'Quota for uploading files exceeded',
                23 => 'No categories and albums found.'
                );
?>