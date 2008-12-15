var swfu;

SWFUpload.onload = function () {
	var settings = {
		flash_url : "js/swfupload/swfupload.swf",
		upload_url: js_vars.site_url + "/upload.php",	// Relative to the SWF file
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
		queue_complete_handler : queueComplete,	// Queue plugin event
		swfupload_loaded_handler : swfUploadLoaded,
		// SWFObject settings
		minimum_flash_version : "9.0.28",
		swfupload_pre_load_handler : swfUploadPreLoad,
		swfupload_load_failed_handler : swfUploadLoadFailed
	};

	swfu = new SWFUpload(settings);
    
    // Bind a change event on album drop down
    $("select[name='album']").change(function() {
        // Show the upload form only if some album is selected
       if ($(this).val()) {
           $('#upload_form').slideDown();
       } else {
           // If no album is selected then hide the form
           $('#upload_form').slideUp();
       }
    });
 }
 
 $(document).ready(function() {
    // Fire the album select box change event
    $('#upload_form').slideUp();
 });
 
 function continue_upload() {
     window.location = js_vars.site_url + '/editpics.php?album=' + $("select[name='album']").val();
     return false;
 }
