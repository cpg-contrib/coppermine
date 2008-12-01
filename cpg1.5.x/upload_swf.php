<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/upload.php $
  $Revision: 5229 $
  $LastChangedBy: saweyyy $
  $Date: 2008-11-08 21:06:48 +0530 (Sat, 08 Nov 2008) $
**********************************************/

// Confirm we are in Coppermine and set the language blocks.
define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);
define('DB_INPUT_PHP', true);
define('ADMIN_PHP', true);

// Call basic functions, etc.
require('include/init.inc.php');
require('include/picmgmt.inc.php');
js_include('js/swfupload/swfupload.js');
js_include('js/swfupload/swfupload.queue.js');
js_include('js/swfupload/fileprogress.js');
js_include('js/swfupload/handlers.js');
js_include('js/upload_swf.js');
// Set the lang_upload_swf_php language array for use in js
set_js_var('lang_upload_swf_php', $lang_upload_swf_php);

// Some placeholders.
$customize = CUSTOMIZE_UPLOAD_FORM;
$user_form = USER_UPLOAD_FORM;
$allowed_URI_boxes = NUM_URI_BOXES;
$allowed_file_boxes = NUM_FILE_BOXES;

// Check to see if user can upload pictures.  Quit with an error if he cannot.
if (!USER_CAN_UPLOAD_PICTURES && !USER_CAN_CREATE_ALBUMS) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

// Globalize $CONFIG.
global $CONFIG, $lang_upload_php, $user_form, $max_file_size;

//___________________________________Function Block_______________________________________

// The function to create the album list drop down.
function form_alb_list_box($text, $name) 
{
    $superCage = Inspekt::makeSuperCage();
    // Pull the $CONFIG array and the GET array into the function
    global $CONFIG, $lang_upload_php, $lang_common;

    // Also pull the album lists into the function
    global $user_albums_list, $public_albums_list;

    // Check to see if an album has been preselected by URL addition or the last selected album. If so, make $sel_album the album number. Otherwise, make $sel_album 0.
    if ($superCage->get->keyExists('album')) {
      $sel_album = $superCage->get->getInt('album');
    } elseif ($superCage->post->keyExists('album')) {
      $sel_album = $superCage->post->getInt('album');
    } else {
      $sel_album = 0;
    }

    // Create the opening of the drop down box
    echo <<<EOT
    <tr>
        <td class="tableb" width="50">
            $text
        </td>
        <td class="tableb" valign="top">
            <select name="$name" class="listbox">

EOT;

    // Get the ancestry of the categories
    $vQuery = "SELECT cid, parent, name FROM " . $CONFIG['TABLE_CATEGORIES'] . " WHERE 1";
    $vResult = cpg_db_query($vQuery);
    $vRes = cpg_db_fetch_rowset($vResult);
    mysql_free_result($vResult);
    foreach ($vRes as $vResI => $vResV) {
        $vResRow = $vRes[$vResI];
        $catParent[$vResRow['cid']] = $vResRow['parent'];
        $catName[$vResRow['cid']] = $vResRow['name'];
    }
    $catAnces = array();
    foreach ($catParent as $cid => $cid_parent) {
        $catAnces[$cid] = '';
        while ($cid_parent != 0) {
            $catAnces[$cid] = $catName[$cid_parent] . ($catAnces[$cid]?' - '.$catAnces[$cid]:'');
            $cid_parent = $catParent[$cid_parent];
        }
    }

    // Reset counter
    $list_count = 0;

    // Cycle through the User albums
    foreach($user_albums_list as $album) {

        // Add to multi-dim array for later sorting
        $listArray[$list_count]['cat'] = $lang_common['personal_albums'];
        $listArray[$list_count]['aid'] = $album['aid'];
        $listArray[$list_count]['title'] = $album['title'];
        $listArray[$list_count]['cid'] = -1;
        $list_count++;
    }

    // Cycle through the public albums
    foreach($public_albums_list as $album) {

        // Set $album_id to the actual album ID
        $album_id = $album['aid'];

        // Add to multi-dim array for sorting later
        if (array_key_exists('name', $album) && $album['name']) {
            $listArray[$list_count]['cat'] = $catAnces[$album['cid']] . ($catAnces[$album['cid']]?' - ':'') . $album['name'];
            $listArray[$list_count]['cid'] = $album['cid'];
        } else {
            $listArray[$list_count]['cat'] = $lang_common['albums_no_category'];
            $listArray[$list_count]['cid'] = 0;
        }
        $listArray[$list_count]['aid'] = $album['aid'];
        $listArray[$list_count]['title'] = $album['title'];
        $list_count++;
    }

    // Sort the pulldown options by category and album name
    $listArray = array_csort($listArray,'cat','title');     // alphabetically by category name
    // $listArray = array_csort($listArray,'cid','title');  // numerically by category ID
    // print_r($listArray); exit;

    // Finally, print out the nicely sorted and formatted drop down list
    // $alb_cat = '';
    $alb_cid = '';
    echo '                <option value="">' . $lang_common['select_album'] . "</option>\n";
    foreach ($listArray as $val) {
        //if ($val['cat'] != $alb_cat) {  // old method compared names which might not be unique
        if ($val['cid'] !== $alb_cid) {
            if ($alb_cid) {
                echo "                </optgroup>\n";
            }
            echo '                <optgroup label="' . $val['cat'] . '">' . "\n";
            $alb_cid = $val['cid'];
        }
        echo '                <option value="' . $val['aid'] . '"' . ($val['aid'] == $sel_album ? ' selected' : '') . '>   ' . $val['title'] . "</option>\n";
    }
    if ($alb_cid) {
        echo "                </optgroup>\n";
    }

    // Close the drop down
    echo <<<EOT
            </select>
        </td>
    </tr>

EOT;
}

function form_instructions() 
{
    global $CONFIG, $lang_upload_php, $user_form, $max_file_size;

    echo "<tr><td colspan=\"2\">";

    printf ($lang_upload_php['up_instr_1'], $CONFIG['max_upl_size']);
    
    //show allowed filetypes
    echo "<br />{$lang_upload_php['allowed_types']}";
    printf ($lang_upload_php['allowed_img_types'], $CONFIG['allowed_img_types']);
    print "<br />\r\n";
    printf ($lang_upload_php['allowed_mov_types'], $CONFIG['allowed_mov_types']);
    print "<br />\r\n";
    printf ($lang_upload_php['allowed_snd_types'], $CONFIG['allowed_snd_types']);
    print "<br />\r\n";
    printf ($lang_upload_php['allowed_doc_types'], $CONFIG['allowed_doc_types']);

    echo "<br /><br />{$lang_upload_php['up_instr_2']}";

    echo "</td></tr>";

}

// Function to create the swfupload form
function create_form() {
    global $lang_common;
    form_alb_list_box($lang_common['album'], 'album');
    
    $cancel_icon = cpg_fetch_icon('cancel', 0);
    $ok_icon = cpg_fetch_icon('ok', 0);
    
    echo <<<EOT
    <tr>
        <td colspan="2">
            <div id="upload_form" style="display: none;">
			<div>
				<span id="browse_button_place_holder"></span>
				<button id="button_cancel" onclick="swfu.cancelQueue();" disabled="disabled" class="button">
                    {$cancel_icon}
                    Cancel All Uploads
                </button>
			</div>
            <br />
			<div class="fieldset flash" id="upload_progress">
    			<span class="legend">Upload Queue</span>
			</div>
            <div id="upload_status"><span id="upload_count">0</span> Files Uploaded</div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button id="button_continue" type="button" onclick="return continue_upload();" style="display: none; margin-top: 5px;">
                {$ok_icon}
                Continue
            </button>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div id="uploadedThumbnails"></div>
        </td>
    </tr>
EOT;
}

// Function to set the allowed file extensions string as required by swfupload
// This function is currently not being used.
function set_allowed_file_extensions_swf() {
    global $CONFIG;
    $allowed_types = '';
    $allowed_img_types = explode('/', $CONFIG['allowed_img_types']);
    if (count($allowed_img_types)) {
        $allowed_types = '*.' . implode(';*.', $allowed_img_types) . ';';
    }
    
    $allowed_mov_types = explode('/', $CONFIG['allowed_mov_types']);
    if (count($allowed_mov_types)) {
        $allowed_types .= '*.' . implode(';*.', $allowed_mov_types) . ';';
    }
    
    $allowed_snd_types = explode('/', $CONFIG['allowed_snd_types']);
    if (count($allowed_snd_types)) {
        $allowed_types .= '*.' . implode(';*.', $allowed_snd_types) . ';';
    }
    
    $allowed_doc_types = explode('/', $CONFIG['allowed_doc_types']);
    if (count($allowed_doc_types)) {
        $allowed_types .= '*.' . implode(';*.', $allowed_doc_types) . ';';
    }

    set_js_var('allowed_file_types', $allowed_types);
}
//################################# MAIN CODE BLOCK ##################################################

// Check whether we are getting album id through _GET or _POST
if ($superCage->get->keyExists('album')) {
    $sel_album = $superCage->get->getInt('album');
} elseif ($superCage->post->keyExists('album')) {
    $sel_album = $superCage->post->getInt('album');
} else {
    $sel_album = 0;
}


//Use the default settings for the number of boxes.

$num_URI_boxes = NUM_URI_BOXES;
$num_file_boxes = NUM_FILE_BOXES;

if (empty($num_URI_boxes) && empty($num_file_boxes)) {
    $num_URI_boxes = 0;
    $num_file_boxes = 1;
}

// Get public and private albums, and set maximum individual file size.

if (GALLERY_ADMIN_MODE) {
    $public_albums = cpg_db_query("SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT);
    //select albums that don't belong to a category
    $public_albums_no_cat = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0");
} else {
        $public_albums = cpg_db_query("SELECT aid, title, cid, name FROM {$CONFIG['TABLE_ALBUMS']} INNER JOIN {$CONFIG['TABLE_CATEGORIES']} ON cid = category WHERE category < " . FIRST_USER_CAT . " AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.")) OR (owner=".USER_ID."))");
        //select albums that don't belong to a category
        $public_albums_no_cat = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = 0 AND ((uploads='YES' AND (visibility = '0' OR visibility IN ".USER_GROUP_SET.")) OR (owner=".USER_ID."))");   
}


if (mysql_num_rows($public_albums)) {
    $public_albums_list = cpg_db_fetch_rowset($public_albums);
} else {
    $public_albums_list = array();
}

//do the same for non categorized albums
if (mysql_num_rows($public_albums_no_cat)) {
    $public_albums_list_no_cat = cpg_db_fetch_rowset($public_albums_no_cat);
} else {
    $public_albums_list_no_cat = array();
}

//merge the 2 album arrays
$public_albums_list = array_merge($public_albums_list, $public_albums_list_no_cat);


if (USER_ID) {
    $user_albums = cpg_db_query("SELECT aid, title FROM {$CONFIG['TABLE_ALBUMS']} WHERE category='" . (FIRST_USER_CAT + USER_ID) . "' ORDER BY title");
    if (mysql_num_rows($user_albums)) {
        $user_albums_list = cpg_db_fetch_rowset($user_albums);
    } else {
        $user_albums_list = array();
    }
} else {
    $user_albums_list = array();
}

if (!count($public_albums_list) && !count($user_albums_list)) {  // there's no album where the user is allowed to upload to
    if (USER_CAN_CREATE_ALBUMS) {
        cpg_die (ERROR, $lang_upload_php['err_no_alb_uploadables'].'<br />&nbsp;<br /><a href="albmgr.php" title="'.$lang_user_admin_menu['albmgr_title'].'" class="admin_menu">'.$lang_user_admin_menu['albmgr_lnk'].'</a>', __FILE__, __LINE__);
    } else {
        cpg_die (ERROR, $lang_upload_php['err_no_alb_uploadables'], __FILE__, __LINE__);
    }
}

// Assign maximum file size for browser crontrols.
$max_file_size = $CONFIG['max_upl_size'] << 10;

// Create the upload forms using the upload congfiguration.

if (!$superCage->post->keyExists('process')) {
    // Get the user password hash
    $user_pass = $cpg_udb->get_user_pass(USER_ID);
    // Serialize and base64 encode the password
    set_js_var('user', base64_encode(serialize($user_pass)));
    // Do some cleanup in the edit directory.
    spring_cleaning('./'.$CONFIG['fullpath'].'edit',CPG_HOUR);

    // Create upload form headers.
    pageheader($lang_upload_php['title']);
    
    // Open the form table.
    starttable("100%", cpg_fetch_icon('upload',2).$lang_upload_php['title'], 2);
    form_instructions();
    // Create the form.
    create_form();
    // Close the table, create footers, and flush the output buffer.
    endtable();
    
    if ($CONFIG['display_xp_publish_link'] == 1) {
    	print '<br />';
    	starttable('100%', cpg_fetch_icon('info', 2) . $lang_upload_php['alternative_upload'],1);
    	print <<< EOT
    	<tr>
    		<td class="tableb">
    			{$lang_upload_php['xp_publish_promote']}<br />
    			[<a href="xp_publish.php">{$lang_upload_php['more']}</a>]
    		</td>
    	</tr>
EOT;
    	endtable();
    }
    pagefooter();
    ob_end_flush();

    // Exit the script.

    exit;

} elseif ($superCage->post->keyExists('process')) {
    if (!$superCage->files->getRaw('/Filedata/name')) {
        echo "Filename unavailable";
        exit;
    }

    if (!$superCage->files->getRaw('/Filedata/tmp_name')) {
        echo "Unable to upload";
        exit;
    }
    
    // Check to make sure the file was uploaded via POST.
    if (!is_uploaded_file($superCage->files->getRaw("/Filedata/tmp_name"))) {

        // We reject the file, and make return the error.
        echo $lang_upload_php['no_post'];
        exit;
    }
    
    // Check filename and extension:
    // Check that the file uploaded has a valid name and extension, and replace forbidden chars with underscores.
    // Initialise the $matches array.
    $matches = array();
    // If magic quotes is on, remove the slashes it added to the file name.
    if (get_magic_quotes_gpc()) {
        //Using getRaw() as we have custom sanitization code below
        $picture_name = stripslashes($superCage->files->getRaw("/Filedata/name"));
    } else {
        $picture_name = $superCage->files->getRaw("/Filedata/name");
    }

    // Create the holder $picture_name by translating the file name. Translate any forbidden character into an underscore.
    $picture_name = replace_forbidden($picture_name);

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
        echo $lang_upload_php['forb_ext'];
        exit;
    }

    $error_code = $superCage->files->getInt("/Filedata/error");
    // Check for upload errors
    if (!($error_code == '0')) {
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
        echo $error_message;

        // There is no need for further tests or action, so skip the remainder of the iteration.
        exit;
    }

    // Now we need to move the file into the /edit directory.
    // We need specify the path for the transitory file.
    // Create a prefix for easier human recognition.
    $prefix = "mHTTP_temp_";

    //Set the correct file extension.
    $suffix = $matches[2];

    // Generate the unique name. Keep generating new names until one that is not in use is found.
    do {

        // Create a random seed by taking the first 8 characters of an MD5 hash of a concatenation of the current UNIX epoch time and the current server process ID.
        $seed = substr(md5(uniqid("")), 0, 8);

        // Assemble the file path.
        $path_to_image = './'.$CONFIG['fullpath'].'edit/'. $prefix . $seed . '.' . $suffix;

    } while (file_exists($path_to_image));

    // Create a holder called $tempname.
    $tempname = $prefix . $seed . '.' . $suffix;

    //Now we upload the file.
    if (!(move_uploaded_file($superCage->files->getRaw("/Filedata/tmp_name"), $path_to_image))) {
        // The file upload has failed.
        echo $lang_upload_php['impossible'];
        // There is no need for further tests or action, so skip the remainder of the iteration.
        exit;
    }

    // Change file permission
    @chmod($path_to_image, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled

    // Create a testing alias.
    $picture_alias = $matches[1].".".$matches[2];

    // Check to see if the filename is consistent with that of a picture.
    if (is_image($picture_alias)) {
        // If it is, get the picture information
        $imginfo = cpg_getimagesize($path_to_image);
        
        // If cpg_getimagesize does not recognize the file as a picture, delete the picture.
        if ($imginfo === 'FALSE') {
            @unlink($path_to_image);

            // The file upload has failed -- the image is not an image or it is corrupt.
            echo $lang_upload_php['not_image'];
            // There is no need for further tests or action, so skip the remainder of the iteration.
            exit;

        // JPEG and PNG only are allowed with GD. If the image is not allowed for GD,delete it.
        } elseif ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG && $CONFIG['GIF_support'] == 0) {
            @unlink($path_to_image);

            // The file upload has failed -- the image is not allowed with GD.
            echo $lang_upload_php['not_GD'];

            // There is no need for further tests or action, so skip the remainder of the iteration.
            exit;

        // Check that picture size (in pixels) is lower than the maximum allowed. If not, delete it.
        } elseif (max($imginfo[0], $imginfo[1]) > $CONFIG['max_upl_width_height']) {
            if ((USER_IS_ADMIN && $CONFIG['auto_resize'] == 1) || (!USER_IS_ADMIN && $CONFIG['auto_resize'] > 0)) //($CONFIG['auto_resize']==1)
            {
                resize_image($uploaded_pic, $uploaded_pic, $CONFIG['max_upl_width_height'], $CONFIG['thumb_method'], $CONFIG['thumb_use']);
            }
            else
            {
                @unlink($path_to_image);
                // The file upload has failed -- the image dimensions exceed the allowed amount.
                echo $lang_upload_php['pixel_allowance'];
                
                // There is no need for further tests or action, so skip the remainder of the iteration.
                exit;
            }
        }
    // Image is ok
    }
    
    // Check if user selected an album to upload picture to. If not, die with error.
    // added by frogfoot
    $album = $superCage->post->getInt('album');
    
    // If no album was select then give an error
    if (!$album) {
        echo $lang_db_input_php['album_not_selected'];
        exit;
    }

    // Check if the album id provided is valid
    if (!GALLERY_ADMIN_MODE) {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album' and (uploads = 'YES' OR category = '" . (USER_ID + FIRST_USER_CAT) . "' OR owner = '" . USER_ID . "')");
        if (mysql_num_rows($result) == 0) {
            echo $lang_db_input_php['unknown_album'];
            exit;
        }
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        $category = $row['category'];
    } else {
        $result = cpg_db_query("SELECT category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid='$album'");
        if (mysql_num_rows($result) == 0) {
            echo $lang_db_input_php['unknown_album'];
            exit;
        }
        $row = mysql_fetch_array($result);
        mysql_free_result($result);
        $category = $row['category'];
    }

    // Pictures are moved in a directory named 10000 + USER_ID
    if (USER_ID && $CONFIG['silly_safe_mode'] != 1) {
        $filepath = $CONFIG['userpics'] . (USER_ID + FIRST_USER_CAT);
        $dest_dir = $CONFIG['fullpath'] . $filepath;
        if (!is_dir($dest_dir)) {
            mkdir($dest_dir, octdec($CONFIG['default_dir_mode']));
            if (!is_dir($dest_dir)) {
                echo sprintf($lang_db_input_php['err_mkdir'], $dest_dir);
                exit;
            }
            @chmod($dest_dir, octdec($CONFIG['default_dir_mode'])); //silence the output in case chmod is disabled
            $fp = fopen($dest_dir . '/index.html', 'w');
            fwrite($fp, ' ');
            fclose($fp);
        }
        $dest_dir .= '/';
        $filepath .= '/';
    } else {
        $filepath = $CONFIG['userpics'];
        $dest_dir = $CONFIG['fullpath'] . $filepath;
    }

    // Check that target dir is writable
    if (!is_writable($dest_dir)) {
        echo sprintf($lang_db_input_php['dest_dir_ro'], $dest_dir);
        exit;
    }
    
    //Add the Perl regex to break the actual name.
    preg_match("/(.+)\.(.*?)\Z/", $picture_alias, $matches);
    
    // Create a unique name for the uploaded file
    $nr = 0;
    $picture_name = $matches[1] . '.' . $matches[2];
    while (file_exists($dest_dir . $picture_name)) {
        $picture_name = $matches[1] . '~' . $nr++ . '.' . $matches[2];
    }
    
    // Create path for final location.
    $uploaded_pic = $dest_dir . $picture_name;
    
    // Form path to temporary image.
    $path_to_image = './'.$CONFIG['fullpath'].'edit/'.$tempname;
    
    // prevent moving the edit directory...
    if (is_dir($path_to_image)) {
        echo $lang_upload_php['failure'] . " - '$path_to_image'";
        exit;
    }
    
    // Move the picture into its final location
    if (rename($path_to_image, $uploaded_pic)) {

        // Change file permission
        @chmod($uploaded_pic, octdec($CONFIG['default_file_mode'])); //silence the output in case chmod is disabled
        $CURRENT_PIC_DATA = array();
        // Create thumbnail and intermediate image and add the image into the DB
        $result = add_picture($album, $filepath, $picture_name);

        if (!$result) {

            // The file could not be placed.
            $file_placement = 'no';

        } else {
            $CURRENT_PIC_DATA['url_prefix'] = 0;
            // The file was placed successfully.
            $file_placement = 'yes';
            $thumb_url = get_pic_url($CURRENT_PIC_DATA, 'thumb');
        }

    } else {

        // The file was not placed successfully.
        $file_placement = 'no';

    }
    
    if ($file_placement == 'yes') {

        // The previous picture was placed successfully.
        echo "success-" . $thumb_url;
    } else {
        // The previous image placement failed.
        echo "{$lang_upload_php['no_place']}";
    }
    
    exit;
}
?>