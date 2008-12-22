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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/js/displayimage.js $
  $Revision: 5405 $
  $LastChangedBy: saweyyy $
  $Date: 2008-12-15 22:23:58 +0100 (Mo, 15 Dez 2008) $
**********************************************/

var swfu;

SWFUpload.onload = function () {
    var settings = {
        flash_url : "js/swfupload/swfupload.swf",
        upload_url: js_vars.site_url + "/upload.php",    // Relative to the SWF file
        post_params: {"process" : "1", "user" : js_vars.user},
        file_size_limit : "100 MB",
        file_types : "*.*", //js_vars.allowed_file_types,
        file_types_description : js_vars.lang_upload_swf_php.all_files,
        file_upload_limit : 10,
        file_queue_limit : 10,
        custom_settings : {
            progressTarget : "upload_progress",
            cancelButtonId : "button_cancel"
        },
        debug: false,

        // Button settings
        button_width: "93",
        button_height: "24",
        button_image_url: "images/browse_swf.png",
        button_placeholder_id: "browse_button_place_holder",
        // By default browse button will be disabled. It will get enabled when some album is chosen
        button_disabled : true,

        // The event handler functions are defined in handlers.js
        file_queued_handler : fileQueued,
        file_queue_error_handler : fileQueueError,
        //file_dialog_start_handler : fileDialogStart,
        file_dialog_complete_handler : fileDialogComplete,
        upload_start_handler : uploadStart,
        upload_progress_handler : uploadProgress,
        upload_error_handler : uploadError,
        upload_success_handler : uploadSuccess,
        upload_complete_handler : uploadComplete,
        queue_complete_handler : queueComplete,    // Queue plugin event
        swfupload_loaded_handler : swfUploadLoaded,
        // SWFObject settings
        minimum_flash_version : "9.0.28",
        swfupload_pre_load_handler : swfUploadPreLoad,
        swfupload_load_failed_handler : swfUploadLoadFailed
    };

    swfu = new SWFUpload(settings);

    // Bind a change event on album drop down
    $("select[name='album']").change(function() {
        // Enable the browse button only if some album is selected
       if ($(this).val()) {
           swfu.setButtonDisabled(false);
       } else {
           // If no album is selected then disable the browse button
           swfu.setButtonDisabled(true);
       }
    });
 }

 function continue_upload() {
     window.location = js_vars.site_url + '/editpics.php?album=' + $("select[name='album']").val();
     return false;
 }

$(document).ready(function() {
    $('#uploadMethod').change(function() {
        var param = 'method=' + $(this).val();
        if ($("select[name='album']").val()) {
            param += '&album=' + $("select[name='album']").val();
        }
        window.location.href = 'upload.php?' + param;
    });
});