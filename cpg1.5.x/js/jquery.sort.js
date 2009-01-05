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

//write function to get the table serialize 
    function getSerialize (){
        jQuery.tableDnD.currentTable = document.getElementById("album_sort"); // use your table ID obviously
        var bb = jQuery.tableDnD.serialize();
        return bb;
    } 

//write function to get the table serialize 
    function getSerializePic (){
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
			$("#loadin").show();
			
		/**now we make ajax call to update the table*/
	  	$.getJSON("delete.php?what=albmgr&aid="+aid+"&updatedname="+editedName+"&op='update'", function(data){
			if(data['message']){
		        /** get the DOM of change album name*/
		        editedObject = $('#'+albumSelectedTr).find('span.albumName');
		        //change the text which having album name.
		        $(editedObject).empty().text(editedName);
		        /**show user the changes*/
		        $('#'+albumSelectedTr).css({'background-color': '#FFFFDD'});
				$("#loadin").hide();
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
		$("#loadin").show();
		
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
			    $("#loadin").hide();
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
		$('.album-save').fadeIn('slow');
	}
};

// this jquery.tablednd is to drag and drop sort images. 
jQuery(document).ready(function()
    {
    /**get the lang variable to js file*/
        var change_album = js_vars.change_album;
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
           $("#pictur_order").val(getSerializePic());
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
           		$("#pictur_order").val(getSerializePic());  
	        	/**set to category changes don't select if you have changed */
            	albumSelectOption = false;
	            /**show the message to save changes*/
	            //Sort.showMessage();
            }

        });     
        $("a.photoDown").click(function(){
        	if(photoSelectedObject){
	        	/**sort manually to down wards*/
	            jQuery.tableDnD.sortManually(1,photoSelectedObject,'pic_sort');
	        	/**after one click event called to doChanges function*/
				$("#pictur_order").val(getSerializePic());         
	        	/**set to category changes don't select if you have changed */
	            albumSelectOption = false;  
	            
	            //Sort.showMessage();
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
    	
        $("#pictur_order").val(getSerializePic());
        var a = $("input[name='pictur_order']").attr("value");
        
        if(a.length > 0){
        	if(confirm('Confirm modifications!')) {
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
        var albumSelectedTr			= null;
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
	        categorySelectOption = false;
	        
	    });
    
	    /** Cancel when user don't want to add the album to the list'*/
	    $(".albumCancel").click(function(){
			$("td#edit-box").hide();
		});
		
		/** Cancel when user don't want to add the album to the list'*/
	    $(".addCancel").click(function(){
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
            object_edit     		= $(this).prev().text();
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
	          if (e.which == KEY_CODES.ENTER) {
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
	     	  if (e.which == KEY_CODES.ENTER) {
	     	  		if(!isNaN(category)){
	          			Sort.addAlbum(category)
	          		}
	          return false;
		      }
	      });
	      
        /**delete the selected TR object items which having the  album list*/ 
        $("a#deleteEvent").livequery('click', function(){
            /**if there  isn't any TR object to select then user has to select, if not can't delete'*/
             if(!albumObjectSelectedTr){
                alert(dontDelete);
                return false;
            }
	   		/**get aid from albumSelectedTr*/
	   		var albumTrId		= $(albumObjectSelectedTr).attr("id");
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
        $("#cpgformAlbum").submit(function () {          
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




jQuery.tableDnD = {
    /** Keep hold of the current table being dragged */
    currentTable : null,
    /** Keep hold of the current drag object if any */
    dragObject: null,
    /** Keep hold of the current select object if any */
    selectObject: null,
    /** Keep hold of the Height.y current selected object on mouseDown */
    selectObjectY: null,
    /** The current mouse offset */
    mouseOffset: null,
    /** Assign first TR element height from the top of the browser */
    firstObjectHeight: null,
    /** Assign last TR element height from the top of the browser */
    lastObjectHeight: null,
    /** Keep hold of the current dragged object */
    currentHeight : null,
    /** Remember the old value of Y so that we don't do too much processing */
    oldY: 0,

    /** Actually build the structure */
    build: function(options) {
        // Make sure options exists
        options = options || {};
        // Set up the defaults if any

        this.each(function() {
            // Remember the options
            this.tableDnDConfig = {
                onDragStyle: options.onDragStyle,
                onDropStyle: options.onDropStyle,
                // Add in the default class for whileDragging
                onDragClass: options.onDragClass ? options.onDragClass : "tDnD_whileDrag",
                /**add in the default calls for selected (this operation will be done to onmouseUp event)*/
                onSelectedClass:options.onSelectedClass? options.onSelectedClass : "selected",
                onDrop: options.onDrop,
                onDragStart: options.onDragStart,
                scrollAmount: options.scrollAmount ? options.scrollAmount : 5
            };
            // Now make the rows draggable
            jQuery.tableDnD.makeDraggable(this);
        });

        // Now we need to capture the mouse up and mouse move event
        // We can use bind so that we don't interfere with other event handlers
        jQuery(document)
            .bind('mousemove', jQuery.tableDnD.mousemove)
            .bind('mouseup', jQuery.tableDnD.mouseup);
        // Don't break the chain
        
        return this;
    },

    /** This function makes all the rows on the table draggable apart from those marked as "NoDrag" */
    makeDraggable: function(table) {
        // Now initialize the rows
        var rows = table.rows; //getElementsByTagName("tr")
        var config = table.tableDnDConfig;
     
			// We only need to add the event to the specified cells
			var cells = jQuery("td.dragHandle", table);
			cells.each(function() {
				
               jQuery(this).mousedown(function(ev) {
                        jQuery.tableDnD.dragObject = this.parentNode;
                        /**select the tr object when sort manually */
                        jQuery.tableDnD.selectObject  = this.parentNode;
                        jQuery(this.parentNode).addClass("selected");
                        /**get the y length of the selected TR object when sort manually*/
                        jQuery.tableDnD.selectObjectY  = jQuery.tableDnD.getPosition(this.parentNode).y;
                        /**get the first element height*/
                        jQuery.tableDnD.firstObjectHeight = jQuery.tableDnD.getPosition(rows[0]).y;
                        /**get the last element height*/
                        jQuery.tableDnD.lastObjectHeight  = jQuery.tableDnD.getPosition(rows[(rows.length-1)]).y;
                        jQuery.tableDnD.currentTable = table;
                        jQuery.tableDnD.mouseOffset = jQuery.tableDnD.getMouseOffset(this, ev);
                        if (config.onDragStart) {
                            // Call the onDrop method if there is one
                            config.onDragStart(table, this);
                        }
                        return false;
                }).css("cursor", "move"); // Store the tableDnD object
                
            });
      
    },

    /** Get the mouse coordinates from the event (allowing for browser differences) */
    mouseCoords: function(ev){
        if(ev.pageX || ev.pageY){
            return {x:ev.pageX, y:ev.pageY};
        }
        return {
            x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
            y:ev.clientY + document.body.scrollTop  - document.body.clientTop
        };
    },

    /** Given a target element and a mouse event, get the mouse offset from that element.
        To do this we need the element's position and the mouse position */
    getMouseOffset: function(target, ev) {
        ev = ev || window.event;

        var docPos    = this.getPosition(target);
        var mousePos  = this.mouseCoords(ev);
     //   alert(mousePos.y);
        return {x:mousePos.x - docPos.x, y:mousePos.y - docPos.y};
    },

    /** Get the position of an element by going up the DOM tree and adding up all the offsets */
    getPosition: function(e){
        var left = 0;
        var top  = 0;
        /** Safari fix -- thanks to Luis Chato for this! */
        if (e.offsetHeight == 0) {
            /** Safari 2 doesn't correctly grab the offsetTop of a table row */
            e = e.firstChild; // a table cell
        }

        while (e.offsetParent){
            left += e.offsetLeft;
            top  += e.offsetTop;
            e     = e.offsetParent;
        }

        left += e.offsetLeft;
        top  += e.offsetTop;

        return {x:left, y:top};
    },

    mousemove: function(ev) {
        if (jQuery.tableDnD.dragObject == null) {
            return;
        }

        var dragObj = jQuery(jQuery.tableDnD.dragObject);
        var config = jQuery.tableDnD.currentTable.tableDnDConfig;
        var mousePos = jQuery.tableDnD.mouseCoords(ev);
        var y = mousePos.y - jQuery.tableDnD.mouseOffset.y;
        //auto scroll the window
        var yOffset = window.pageYOffset;
        if (document.all) {
            // Windows version
            //yOffset=document.body.scrollTop;
            if (typeof document.compatMode != 'undefined' &&
                 document.compatMode != 'BackCompat') {
               yOffset = document.documentElement.scrollTop;
            }
            else if (typeof document.body != 'undefined') {
               yOffset=document.body.scrollTop;
            }

        }
            
        if (mousePos.y-yOffset < config.scrollAmount) {
            window.scrollBy(0, -config.scrollAmount);
        } else {
            var windowHeight = window.innerHeight ? window.innerHeight
                    : document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;
            if (windowHeight-(mousePos.y-yOffset) < config.scrollAmount) {
                window.scrollBy(0, config.scrollAmount);
            }
        }


        if (y != jQuery.tableDnD.oldY) {
            // work out if we're going up or down...
            var movingDown = y > jQuery.tableDnD.oldY;
            // update the old value
            jQuery.tableDnD.oldY = y;
            // update the style to show we're dragging
            if (config.onDragClass) {
                dragObj.addClass(config.onDragClass);
            } else {
                dragObj.css(config.onDragStyle);
            }
            // If we're over a row then move the dragged row to there so that the user sees the
            // effect dynamically
            var currentRow = jQuery.tableDnD.findDropTargetRow(dragObj, y);
            if (currentRow) {
                // TODO worry about what happens when there are multiple TBODIES
                if (movingDown && jQuery.tableDnD.dragObject != currentRow) {
                    jQuery.tableDnD.dragObject.parentNode.insertBefore(jQuery.tableDnD.dragObject, currentRow.nextSibling);
                    /**show the message to save changes*/
	            	Sort.showMessage();
                } else if (! movingDown && jQuery.tableDnD.dragObject != currentRow) {
                    jQuery.tableDnD.dragObject.parentNode.insertBefore(jQuery.tableDnD.dragObject, currentRow);
                    /**show the message to save changes*/
	            	Sort.showMessage();
                }
            }
        }

        return false;
    },

    /** We're only worried about the y position really, because we can only move rows up and down */
    findDropTargetRow: function(draggedRow, y) {
        var rows = jQuery.tableDnD.currentTable.rows;
        for (var i=0; i<rows.length; i++) {
            var row = rows[i];
            var rowY    = this.getPosition(row).y;
            var rowHeight = parseInt(row.offsetHeight)/2;
            if (row.offsetHeight == 0) {
                rowY = this.getPosition(row.firstChild).y;
                rowHeight = parseInt(row.firstChild.offsetHeight)/2;
            }
            // Because we always have to insert before, we need to offset the height a bit
            if ((y > rowY - rowHeight) && (y < (rowY + rowHeight))) {
                // that's the row we're over
                // If it's the same as the current row, ignore it
                if (row == draggedRow) {return null;}
                var config = jQuery.tableDnD.currentTable.tableDnDConfig;
                if (config.onAllowDrop) {
                    if (config.onAllowDrop(draggedRow, row)) {
                        return row;
                    } else {
                        return null;
                    }
                } else {
                    // If a row has nodrop class, then don't allow dropping (inspired by John Tarr and Famic)
                    var nodrop = $(row).hasClass("nodrop");
                    if (! nodrop) {
                        return row;
                    } else {
                        return null;
                    }
                }
                return row;
            }
        }
        return null;
    },

    mouseup: function(e) {
        if (jQuery.tableDnD.currentTable && jQuery.tableDnD.dragObject) {
            var droppedRow = jQuery.tableDnD.dragObject;
            var config = jQuery.tableDnD.currentTable.tableDnDConfig;
            // If we have a dragObject, then we need to release it,
            /**remove the selected class when mouseUp*/
            jQuery.tableDnD.makeDraggable(jQuery.tableDnD.currentTable);
            //get the current height of the Dragged object//
            jQuery.tableDnD.currentHeight = jQuery.tableDnD.getPosition(droppedRow).y;

            if (config.onDragClass) {
                jQuery(droppedRow).removeClass(config.onDragClass);
            } else {
                jQuery(droppedRow).css(config.onDropStyle);
            }
            jQuery.tableDnD.dragObject   = null;
            if (config.onDrop) {
                // Call the onDrop method if there is one
                config.onDrop(jQuery.tableDnD.currentTable, droppedRow);
            }
        }
    },
    //**this edit by Nuwan sameera for manually sorting*/
    sortManually: function(count,albumObjectSelectedTr,tableName){
    	
    	var table = jQuery.tableDnD.currentTable = document.getElementById(tableName);
    	
        var downOrUp    = count;
        if(downOrUp>0){
            downCount = 20;
        }
        if(downOrUp<0){
            downCount = -20;
        }
        var dragObj     = albumObjectSelectedTr;
        jQuery.tableDnD.currentHeight = jQuery.tableDnD.getPosition(dragObj).y;
  
            if(jQuery.tableDnD.currentHeight){
               jQuery.tableDnD.selectObjectY = jQuery.tableDnD.currentHeight;
               jQuery.tableDnD.currentHeight = null;
            }
        var prevY = jQuery.tableDnD.selectObjectY;
        var y = (jQuery.tableDnD.selectObjectY + downCount);
            jQuery.tableDnD.selectObjectY =y;
            
            /**get rows*/
            var rows = table.rows;
            jQuery.tableDnD.firstObjectHeight = jQuery.tableDnD.getPosition(rows[0]).y;
            /**get the last element height*/
            jQuery.tableDnD.lastObjectHeight  = jQuery.tableDnD.getPosition(rows[(rows.length-1)]).y;
                        
        
        if((jQuery.tableDnD.firstObjectHeight > jQuery.tableDnD.selectObjectY) || (jQuery.tableDnD.lastObjectHeight < jQuery.tableDnD.selectObjectY)){
            jQuery.tableDnD.selectObjectY = prevY;
            return false;
        }
        //auto scroll the window
        if (y != jQuery.tableDnD.oldY) {
            // work out if we're going up or down...
                var movingDown = true;
            if(count<1){
                var movingDown = false;
            }
            //    jQuery.tableDnD.oldY = y;
            // If we're over a row then move the dragged row to there so that the user sees the
            var currentRow = jQuery.tableDnD.findDropTargetRow(dragObj, y);
            if (currentRow) {
                // TODO worry about what happens when there are multiple TBODIES
                if (movingDown && albumObjectSelectedTr != currentRow) {
                    albumObjectSelectedTr.parentNode.insertBefore(albumObjectSelectedTr, currentRow.nextSibling);
                } else if (! movingDown && jQuery.tableDnD.selectObject != currentRow) {
                    albumObjectSelectedTr.parentNode.insertBefore(albumObjectSelectedTr, currentRow);
                }
            }
        }

        return true;
    },
    
    serialize: function() {
        if (jQuery.tableDnD.currentTable) {
            var result = "";
            var tableId = jQuery.tableDnD.currentTable.id;
            var rows = jQuery.tableDnD.currentTable.rows;
            for (var i=0; i<rows.length; i++) {
    
				var serializeRegexp = /[^\-]*$/;
				var aid = (rows[i].id).match(serializeRegexp)[0];
                result += aid+",";
            }
            return result;
        } else {
            return "Error: No Table id set, you need to set an id on your table and every row";
        }
    }
    
}

jQuery.fn.extend(
    {
        tableDnD : jQuery.tableDnD.build
    }
);


/**************************************************************************************
    usrd to livequery jQuery plugin to to make sure new items event handling
***************************************************************************************/
(function($) {
$.extend($.fn, {
    livequery: function(type, fn, fn2) {
        var self = this, q;
        if ($.isFunction(type))
            fn2 = fn, fn = type, type = undefined;  
        $.each( $.livequery.queries, function(i, query) {
            if ( self.selector == query.selector && self.context == query.context &&
                type == query.type && (!fn || fn.$lqguid == query.fn.$lqguid) && (!fn2 || fn2.$lqguid == query.fn2.$lqguid) )
                    return (q = query) && false;
        });
        q = q || new $.livequery(this.selector, this.context, type, fn, fn2);
        q.stopped = false;
        $.livequery.run( q.id );
        return this;
    },
    expire: function(type, fn, fn2) {
        var self = this;
        if ($.isFunction(type))
            fn2 = fn, fn = type, type = undefined;
        $.each( $.livequery.queries, function(i, query) {
            if ( self.selector == query.selector && self.context == query.context && 
                (!type || type == query.type) && (!fn || fn.$lqguid == query.fn.$lqguid) && (!fn2 || fn2.$lqguid == query.fn2.$lqguid) && !this.stopped )
                    $.livequery.stop(query.id);
        });
        return this;
    }
});
$.livequery = function(selector, context, type, fn, fn2) {
    this.selector = selector;
    this.context  = context || document;
    this.type     = type;
    this.fn       = fn;
    this.fn2      = fn2;
    this.elements = [];
    this.stopped  = false;
    this.id = $.livequery.queries.push(this)-1;
    fn.$lqguid = fn.$lqguid || $.livequery.guid++;
    if (fn2) fn2.$lqguid = fn2.$lqguid || $.livequery.guid++;
    return this;
};
$.livequery.prototype = {
    stop: function() {
        var query = this;
        if ( this.type )
            this.elements.unbind(this.type, this.fn);
        else if (this.fn2)
            this.elements.each(function(i, el) {
                query.fn2.apply(el);
            }); 
        this.elements = [];
        this.stopped = true;
    },
    run: function() {
        if ( this.stopped ) return;
        var query = this;
        var oEls = this.elements,
            els  = $(this.selector, this.context),
            nEls = els.not(oEls);
        this.elements = els;
        if (this.type) {
            nEls.bind(this.type, this.fn);
            if (oEls.length > 0)
                $.each(oEls, function(i, el) {
                    if ( $.inArray(el, els) < 0 )
                        $.event.remove(el, query.type, query.fn);
                });
        }
        else {
            nEls.each(function() {
                query.fn.apply(this);
            });
            if ( this.fn2 && oEls.length > 0 )
                $.each(oEls, function(i, el) {
                    if ( $.inArray(el, els) < 0 )
                        query.fn2.apply(el);
                });
        }
    }
};
$.extend($.livequery, {
    guid: 0,
    queries: [],
    queue: [],
    running: false,
    timeout: null,  
    checkQueue: function() {
        if ( $.livequery.running && $.livequery.queue.length ) {
            var length = $.livequery.queue.length;
            while ( length-- )
                $.livequery.queries[ $.livequery.queue.shift() ].run();
        }
    },
    pause: function() {
        $.livequery.running = false;
    },
    play: function() {
        $.livequery.running = true;
        $.livequery.run();
    },  
    registerPlugin: function() {
        $.each( arguments, function(i,n) {
            if (!$.fn[n]) return;   
            var old = $.fn[n];      
            $.fn[n] = function() {
                var r = old.apply(this, arguments);     
                $.livequery.run();  
                return r;
            }
        });
    },
    run: function(id) {
        if (id != undefined) {
            if ( $.inArray(id, $.livequery.queue) < 0 )
                $.livequery.queue.push( id );
        }
        else
            $.each( $.livequery.queries, function(id) {
                if ( $.inArray(id, $.livequery.queue) < 0 )
                    $.livequery.queue.push( id );
            }); 
        if ($.livequery.timeout) clearTimeout($.livequery.timeout);
        $.livequery.timeout = setTimeout($.livequery.checkQueue, 20);
    },
    stop: function(id) {
        if (id != undefined)
            $.livequery.queries[ id ].stop();
        else
            $.each( $.livequery.queries, function(id) {
                $.livequery.queries[ id ].stop();
            });
    }
});
$.livequery.registerPlugin('append', 'prepend', 'after', 'before', 'wrap', 'attr', 'removeAttr', 'addClass', 'removeClass', 'toggleClass', 'empty', 'remove');
$(function() { $.livequery.play(); });
var init = $.prototype.init;
$.prototype.init = function(a,c) {
    var r = init.apply(this, arguments);    
    if (a && a.selector)
        r.context = a.context, r.selector = a.selector;
    if ( typeof a == 'string' )
        r.context = c || document, r.selector = a;  
    return r;
};
$.prototype.init.prototype = $.prototype;
})(jQuery);
