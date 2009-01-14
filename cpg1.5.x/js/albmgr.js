
/** albumgr.js functon of album manager */
//write function to get the table serialize 
    function getSerialize ()
	{
        jQuery.tableDnD.currentTable = document.getElementById("album_sort"); // use your table ID obviously
        var bb = jQuery.tableDnD.serialize();
        return bb;
    } 

//write function to get the table serialize 
    function getSerializePic ()
	{
        jQuery.tableDnD.currentTable = document.getElementById("pic_sort"); // use your table ID obviously
        var bb = jQuery.tableDnD.serialize();
        return bb;
    } 

var Sort = {
    /**submit all the data to the upload.php*/
    updateAlbum: function(albumSelectedTr)
    {
        /**get aid from albumSelectedTr*/
        var serializeRegexp = /[^\-]*$/;
        var aid = albumSelectedTr.match(serializeRegexp)[0];

        /** get the name of the edited album value*/
        var editedName = $("#edit-name").val();
        /**check whether null and event to edit the album*/
        if(editedName.length > 0){
            $("td#edit-box").hide();
            /** loadaing image*/
            $("#loading").show();
            
        /**now we make ajax call to update the table*/
        $.getJSON("delete.php?what=albmgr&aid="+aid+"&updatedname="+editedName+"&op='update'", function(data){
            if(data['message']){
                /** get the DOM of change album name*/
                editedObject = $('#'+albumSelectedTr).find('span.albumName');
                //change the text which having album name.
                $(editedObject).empty().text(editedName);
                /**show user the changes*/
                $('#'+albumSelectedTr).css({'background-color': '#FFFFDD'});
                $("#loading").hide();
            }
        });
        
        }

        return false;
        
    },
    addAlbum: function(cat){
        var addedName = $("#add-name").val();
        
        // add new album check whether null and event
        if(addedName.length > 0){
        $("td#add-box").hide();

        /** get the position of the album*/
        if($("#album_sort tr").length>0){
            var albumCount = 100 + $("#album_sort tr").length ;
        }
        else{
            var albumCount = 100 ;  
        }
        /** loadaing image*/
        $("#loading").show();
        
        /**now we make ajax call to add the table*/
        $.getJSON("delete.php?what=albmgr&cat="+cat+"&op='add'&position="+albumCount+"&name="+addedName, function(data){

            if(data['message']){
                var album_tr = '<tr id="sort-'+data['newAid']+'" ><td class="dragHandle"></td><td class="album_text" width="96%"><span class="albumName">'+addedName+'</span><span class="editAlbum">Edit</span></td></tr>';
                $("#album_sort").append(album_tr);
                /**call the function to add the new TR on more action*/
                jQuery.tableDnD.currentTable = document.getElementById("album_sort");
                jQuery.tableDnD.makeDraggable(jQuery.tableDnD.currentTable);
                /**to empty the box value */
                Sort.addRowColors();
                /**empty the value*/
                $("#add-name").val("");
                $("#loading").hide();
            }
        });              
        }
        
        return false;   
    },
        /** styles to album list this consider to even TR which apply color #EFEFEF*/
    addRowColors: function(){
        jQuery("#album_sort tr:even").css("background-color", "#EEE");
        jQuery("#album_sort tr:odd").css("background-color", "#FFFFFF");
    },
        /**show the message*/
    showMessage: function(){
        $('.album_save').fadeIn('slow');
    },
    	/** Disable Form Submit on Enter Key Press */
    	// code: http://www.bloggingdeveloper.com/post/Disable-Form-Submit-on-Enter-Key-Press.aspx
    disableEnterKey: function(e){
	     var key;     
	     if(window.event)
	          key = window.event.keyCode; //IE
	     else
	          key = e.which; //firefox     
	     return (key != 13);
	}
};

// this jquery.tablednd is to drag and drop sort images. 
jQuery(document).ready(function()
    {
    /**get the lang variable to js file*/
        var change_album = js_vars.change_album;
		var confirm_modifs  =    js_vars.confirm_modifs;
    /**Keep hold the selected photo object*/
        var photoSelectedObject = null;
    /**Keep hold the selected photo color*/
        var photoselectedColor  = null;
    /**album changes option (it read that ok or not to change the albums)*/
        var albumSelectOption   = true;
        
    jQuery("#pic_sort").tableDnD();
    /** styles to photo list this consider to even TR which apply color #EFEFEF*/
    function addRowColorsPhoto(){
        jQuery("#pic_sort tr:even").css("backgroundColor", "#EEE");
        jQuery("#pic_sort tr:odd").css("backgroundColor", "#FFFFFF");
    }
    /**called to addRowColorsPhoto function to color*/
    addRowColorsPhoto();
    //add query to input hidden when drop the pic item..
        $('#pic_sort').tableDnD({
            onDrop: function(table, row) {
        /**call the getSerializePic() function to get query*/
           $("#picture_order").val(getSerializePic());
        /**set to category changes don't select if you have changed */
            albumSelectOption = false;  
        }
    });
    
    //highlight the album onclick event
        $("#pic_sort tr").livequery('mousedown click', function() {
            /**assign the last color to TR object and remove the selected class having the selected last object*/
            $(photoSelectedObject).css("background-color", photoselectedColor);
            $(photoSelectedObject).removeClass("selected");
            /**add the selected class to current selected object*/   
            $(this).addClass("selected");
            /**add the selected color to variable selectedColor*/
            photoselectedColor = $(this).css("background-color");
            //  alert(selectedColor)
            $(this).css("background-color", "#E0ECFF");
            /**set current selected item in the album*/
            photoSelectedObject = this;
        });
        
        //sort items up and down arrows using 
        $("a.photoUp").click(function(){
            if(photoSelectedObject){
                /**sort manually to up wards*/
                jQuery.tableDnD.sortManually(-1,photoSelectedObject,'pic_sort');
                /**after one click event called to doChanges function*/
                $("#picture_order").val(getSerializePic());  
                /**set to category changes don't select if you have changed */
                albumSelectOption = false;
                /**show the message to save changes*/
                Sort.showMessage();
            }

        });     
        $("a.photoDown").click(function(){
            if(photoSelectedObject){
                /**sort manually to down wards*/
                jQuery.tableDnD.sortManually(1,photoSelectedObject,'pic_sort');
                /**after one click event called to doChanges function*/
                $("#picture_order").val(getSerializePic());         
                /**set to category changes don't select if you have changed */
                albumSelectOption = false;  
                
                Sort.showMessage();
            }     
        
        });
    
            /**when user changes the album name if user has done some changes to the current album name then let's use known*/
            $("select[name='aid']").change(function(){
            /**selected value assigning*/
                var getSelectedOption = $(this).val();
                if(!albumSelectOption){
                    if(confirm(change_album)){
                         window.location.href = ("picmgr.php?aid="+getSelectedOption);
                        return true;
                    }else 
                    /**will not load a page*/
                    return false;
                }else{
                    /**load a page itself without any confirmation alert*/
                    window.location.href = ("picmgr.php?aid="+getSelectedOption);
                }
            }); 
    //load the form when click the submit button
    $("#cpgformPic").submit(function () { 
        
        $("#picture_order").val(getSerializePic());
        var a = $("input[name='picture_order']").attr("value");
        
        if(a.length > 0){
            if(confirm(confirm_modifs)) {
                return true;
            }
        }
        return false; 
    }); // so it won't submit

});




/** this jquery.tablednd is to drag and drop sort albums.*/ 
jQuery(document).ready(function() {
    /**Get messages to the javascript file*/
        var confirm_modifs  =    js_vars.confirm_modifs;
        var confirm_delete  =    js_vars.confirm_delete;
        var dontDelete      =    js_vars.dontDelete;
        var category_change =    js_vars.category_change;
        var category        =    js_vars.category;

        //variable defining which need to handle the events
        var object_edit =   null;
        var event       =   null;
        /**assign variable Keep hold the selected TR object*/
        var albumObjectSelectedTr   = null;
        /** assign a variabl to keep hold the selected Tr id*/
        var albumSelectedTr         = null;
        /**assign vaible to Keep hold the color of selected TR object*/
        var selectedColor           = null;
        /**category changes option (it read that ok or not to change the category)*/
        var categorySelectOption    = true;

    /**called to addRowColors function when document ready state*/
        Sort.addRowColors();
    
        /**If new TR object is added then input text field will ready to type album names*/
        $("#add_new_album").click(function(){
            /**when edit box is visible then just hide to show add box.*/
            $("td#edit-box").hide();
            $("td#add-box").show();
            $("#add-name").focus().val();
            event = 'addAlbumButton';            
        });
    
        /** Cancel when user don't want to add the album to the list'*/
        $(".album_cancel").click(function(){
            $("td#edit-box").hide();
        });
        
        /** Cancel when user don't want to add the album to the list'*/
        $(".add_cancel").click(function(){
            $("td#add-box").hide();
        });        
        
        /** visible the edit link ot the user edit the album name */
        $("#album_sort tr").livequery('mouseover', function () {
                $(this).find("span:last").show();   
        }).livequery('mouseout', function(){
                $(this).find("span:last").hide();
        }).livequery('mousedown click', function() {
                //addRowColors();
                /**assign the last color to TR object and remove the selected class having the selected last object*/
                $(albumObjectSelectedTr).css("background-color", selectedColor);
                $(albumObjectSelectedTr).removeClass("selected");
                /**add the slected class to current selected object*/   
                $(this).addClass("selected");
                /**add the selected color to variable selectedColor*/
                selectedColor = $(this).css("background-color");
          
                $(this).css("background-color", "#E0ECFF");
                /**set current selected item in the album*/
                albumObjectSelectedTr = this;
        });
        
        
        /** now user can edit the album name contain list*/
        $(".editAlbum").livequery("click", function(){                      
            /**selected item's text put into the input field'*/
            object_edit             = $(this).prev().text();
            albumSelectedTr   = $(this).parents("tr").attr("id");
            /** first hide the add box*/
            $("td#add-box").hide();
            $("td#edit-box").show();
            $("#edit-name").val(object_edit).focus();
 
        });
        
        /** Now update the album name*/
        $("#updateEvent").click(function(){
            /** call to updateAlbum function */
            Sort.updateAlbum(albumSelectedTr);
            return false;
        });
        
        /**
         * Bind the keypress event to album title edit box
         */
         $("#edit-name").keyup(function(e) {
              // If the pressed key is ENTER then call saveEvent function and return false so that form is not submitted
              if (e.which == 13 || e.keyCode == 13) {
                  Sort.updateAlbum(albumSelectedTr)
                  return false;
              }
          });
        
        /** Now add a album to the list*/
        $("#addEvent").livequery('click', function(){
                if(!isNaN(category)){
                    Sort.addAlbum(category)
                }
            return false;
        });
        
        /** Bind the keypress event to album title edit box*/
         $("#add-name").keyup(function(e) {
        // If the pressed key is ENTER then call saveEvent function and return false so that form is not submitted
              if (e.which == 13 || e.keyCode == 13) {
              		$("cpg_form_album").submit(function(){
						return false;
					});
                    if(!isNaN(category)){
                        Sort.addAlbum(category);
                        return false;
                    }
              }

          });
          
        /**delete the selected TR object items which having the  album list*/ 
        $("a#delete_album").livequery('click', function(){
            /**if there  isn't any TR object to select then user has to select, if not can't delete'*/
             if(!albumObjectSelectedTr){
                alert(dontDelete);
                return false;
            }
            /**get aid from albumSelectedTr*/
            var albumTrId       = $(albumObjectSelectedTr).attr("id");
            var serializeRegexp = /[^\-]*$/;
            var aid = albumTrId.match(serializeRegexp)[0];

            if(confirm(confirm_delete)) {
                window.location.href = ("delete.php?what=albmgr&op=delete&deleteAid="+aid+"&cat="+category);
                return true;
            }
            else
            return false;

                     
        }); 
        
            
        /**after drag and drop assigning a changes to the TR title*/
        $('#album_sort').tableDnD({
            onDrop: function(table, row) {
                $("#sort_order").val(getSerialize());
                /**set to category changes don't select if you have changed */
                categorySelectOption = false;    
            }    
        });
    
        //sort items up and down arrows using 
        $("#up_click").click(function(){
            if(albumObjectSelectedTr){
                /**sort manually to up wards*/
                jQuery.tableDnD.sortManually(-1,albumObjectSelectedTr,'album_sort');
                /**after one click event called to doChanges function*/
                $("#sort_order").val(getSerialize());   
                /**set to category changes don't select if you have changed */
                categorySelectOption = false;
                /**show the message to save changes*/
                Sort.showMessage();
            }
        });  
        
        //sort items up and down arrows using 
        $("#down_click").click(function(){
            if(albumObjectSelectedTr){
                /**sort manually to down wards*/
                jQuery.tableDnD.sortManually(1,albumObjectSelectedTr,'album_sort');
                /**after one click event called to doChanges function*/
                $("#sort_order").val(getSerialize());        
                /**set to category changes don't select if you have changed */
                categorySelectOption = false; 
                /**show the message to save changes*/
                Sort.showMessage();
            }          
        });
            
        
        //load the form when click the submit button
        $("#cpg_form_album").submit( "click", function () {          
            var a = $("input[name='sort_order']").attr("value");
            if(a.length > 0){
                if(confirm(confirm_modifs)) {
                    return true;
                }
            }
            return false; 
        }); // so it won't submit
        
        /**when user change the category if user has done some changes to the current category then let's use's known'*/
            $("select[name='cat']").change(function(){
            /**selected vale assigning*/
                var getSelectedOption = $(this).val();
                if(!categorySelectOption){
                    if(confirm(category_change)){
                         window.location.href = ("albmgr.php?cat="+getSelectedOption);
                        return true;
                    }else 
                    /**will not load a page*/
                    return false;
                }else{
                    /**load a page itself without any confirmation alert*/
                    window.location.href = ("albmgr.php?cat="+getSelectedOption);
                }
            });     
            
});

