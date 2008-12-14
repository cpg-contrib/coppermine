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
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

/**
 * This file contains displayimage.php specific javascript
 */
// When the document is ready
		
$(document).ready(function() {
	
			var nextPosition 	= js_vars.position; 
			var NumberOfPics 	= js_vars.count;
			var album 			= js_vars.album; 
			var maxItems   		= parseInt(js_vars.max_item);
			var width			= js_vars.thumb_width;
				
			if(maxItems%2==0){
				maxItems 	= maxItems +1;
			}
			/**stop, if we don't have enugh images than maxItem*/
			if(NumberOfPics <= maxItems){				
				return false;
			}
			
			//variables to handle the next - prev button
			var picQeueu		=  (maxItems+1)/2;
			var $go_next 		= parseInt(maxItems/2);
			//cache the images RULs 
			//create a objects to keep an array
			var url_cache 		= new Array(NumberOfPics);
			var link_cache		= new Array(NumberOfPics);
			var img 	  		= new Image();
			//checking position is zero and assign $go_next to zero
			if(nextPosition < picQeueu){
				var	cacheIndex		= 0;
					
			} else if(nextPosition > (NumberOfPics-picQeueu)){
				var cacheIndex		= NumberOfPics - maxItems;
					url_cache[0]="";
			}else{
				var	cacheIndex		= (nextPosition-$go_next);
					url_cache[0]="";
			}
			//checking position is last thumb image..
				
			for(var i=0; i<maxItems; i++){ 
				url_cache[cacheIndex+i] = $("img.strip_image").eq(i).attr("src");
				link_cache[cacheIndex+i]= $("a.thumbLink").eq(i).attr("href");
			}

			var prev_link = nextPosition > (picQeueu-1) ? "<a id=\"filmstrip_prev\" rel=\"nofollow\" style=\"cursor: pointer;\"><img src=\"./images/icons/left.png\" border=\"0\" /></a>" : "<a id=\"filmstrip_prev\" rel=\"nofollow\" style=\"cursor: pointer;display:none\"><img src=\"./images/icons/left.png\" border=\"0\" /></a>";			
			var next_link = nextPosition < (NumberOfPics - picQeueu) ? "<a id=\"filmstrip_next\" rel=\"nofollow\" style=\"cursor: pointer;\"><img src=\"./images/icons/right.png\" border=\"0\" /></a>" : "<a id=\"filmstrip_next\" rel=\"nofollow\" style=\"cursor: pointer;display:none\"><img src=\"./images/icons/right.png\" border=\"0\" /></a>";

			$('td.prve_strip').html(prev_link);
			$('td.next_strip').html(next_link);
			
				//set position if it is not zero 
				if(nextPosition < $go_next){
					nextPosition 	= $go_next;
				}
				//set postion if it is at end 
				if(nextPosition > (NumberOfPics-picQeueu)){
					nextPosition	= (NumberOfPics-picQeueu);
				}		
			// Bind a onclick event on element with id filmstrip_next
		$('#filmstrip_next').click(function() {
			// Get the url for next set of thumbnails. This will be the href of 'next' link; 
			nextPosition = nextPosition +1;
			
			if(((NumberOfPics-1)-(picQeueu-1)) <= nextPosition ){
				$('#filmstrip_next').hide();
			}
			//assign a variable to check initial position to next 
			if(nextPosition < (picQeueu-1)){
			// nextPosition = picQeueu-1;
			}

			if(nextPosition > (picQeueu-1)){
				$('#filmstrip_prev').show();			
			}
				
			if (!url_cache[nextPosition + $go_next]) {
				var next_url = "displayimage.php?film_strip=1&album=" + album + "&ajax_call=2&pos=" + nextPosition;
				// Send the ajax request for getting next set of filmstrip thumbnails
				$.getJSON(next_url, function(data){

					url_cache[nextPosition+$go_next] = data['url'];
					link_cache[nextPosition+$go_next] = data['target'];
					
					var itemLength = $(".tape tr > .thumb").length;
					var itemsToRemove = maxItems+1;
					if (itemLength == itemsToRemove) {
						$('.remove').remove();
					}
					$('.tape').css("marginLeft", '0px');
					var thumb = '<td align="center" class="thumb" ><a style="width: '+width+'px; float: left" href="' + data['target'] + '"><img border="0"  class="strip_image" src="' + data['url'] + '"/></a></td>';
					$('.tape tr').append(thumb);
						tempWidth = parseInt(width) +3;
					$('.tape').animate({
						marginLeft: "-"+tempWidth+"px"
					});
					
					$('.thumb').eq(0).addClass("remove");
					
					
				});
			}
			else {
				var itemLength = $(".tape tr > .thumb").length;
				if (itemLength == (maxItems+1)) {
					$('.remove').remove();
				}
				$('.tape').css("marginLeft", '0px');
				var thumb = '<td align="center"  class="thumb" ><a style="width: '+width+'px; float: left" href="' + link_cache[nextPosition + $go_next] + '"><img border="0"  class="strip_image" src="' + url_cache[nextPosition + $go_next] + '"/></a></td>';
				$('.tape tr').append(thumb);
					tempWidth = parseInt(width) +3;
				$('.tape').animate({
					marginLeft: "-"+tempWidth+"px"
				});
				
				$('.thumb').eq(0).addClass("remove");
			}
		});


		// Bind a onclick event on element with id filmstrip_prev
		$('#filmstrip_prev').click(function() {
			// Get the url for previous set of thumbnails. This will be the href of 'previous' link
		
			nextPosition = nextPosition -1;
		
			if(nextPosition >= ((NumberOfPics-1)-(picQeueu-1))){
			var	nextPosition_to = (NumberOfPics-1)-(picQeueu-1);
			}
			else{
			var	nextPosition_to = nextPosition;	
			}
			if(nextPosition_to <= (NumberOfPics-(picQeueu))){
				$('#filmstrip_next').show();	
			}
			if(nextPosition_to < (picQeueu)){
				$('#filmstrip_prev').hide();			
			}
						
		if(!url_cache[nextPosition-$go_next]) {
			var prev_url = "displayimage.php?film_strip=1&album="+album+"&ajax_call=1&pos="+nextPosition;  
			$.getJSON(prev_url, function(data){
			
				url_cache[nextPosition-$go_next]	 	= data['url'];
				link_cache[nextPosition-$go_next] 	= data['target'];
			
				var itemLength = $(".tape tr> .thumb").length;
				if (itemLength == (maxItems+1)) {
					$('.remove').remove();
				}
				
				$('.tape').css("marginLeft", '-'+width+'px');
				var thumb_prev = '<td align="center" class="thumb" ><a style="width: '+width+'px; float: left" href="'+data['target']+'"><img border="0" class="strip_image" src="'+data['url']+'"/></a></td>';
				$('.tape tr').prepend(thumb_prev);

 				$('.tape').animate({
 					marginLeft: "0px"
  				});
 

				$('.thumb').eq((maxItems)).addClass("remove");
				
			});
		}
		else{
				var itemLength = $(".tape tr > .thumb").length;
				if (itemLength == (maxItems+1)) {
					$('.remove').remove();
				}
		
				$('.tape').css("marginLeft", '-'+width+'px');
				var thumb_prev = '<td align="center" class="thumb" ><a style="width: '+width+'px; float: left" href="'+link_cache[nextPosition-$go_next]+'"><img border="0"  class="strip_image" src="'+url_cache[nextPosition-$go_next]+'"/></a></td>';
				$('.tape tr').prepend(thumb_prev);
				
  				$('.tape').animate({
  					marginLeft: "0px"
  				});

				$('.thumb').eq(maxItems).addClass("remove");
		}
		
		})
	
});


/**
* This part is the rating part of displayimage.php
*/
var displayRating = '';
var currentId = '';
var root = '';

function rate(obj, rating, theme_dir){
	var id = obj.title;
	var fullId = obj.id;
	var idName = fullId.substr(0, fullId.indexOf('_'));
	$.get('ratepic.php?rate=' + id + '&pic=' + idName, function(data){
		//create a JSON object of the returned data
		var json_data = eval('(' + data + ')');
		//check the data and respond upon it
		if(json_data.status == 'error'){
			//something went wrong, tell the user what it was
			$('#rating_stars').next().html( json_data.msg ); 
		}else if(json_data.status == 'success'){
			//vote casted, update rating and show user
			$('#rating_stars').html( '<center>' + json_data.msg + '<br />' + buildRating(json_data.new_rating, 'null', theme_dir, false) + '</center>');
			$('#voting_title').html( json_data.new_rating_text );	
		}
	});

}

function changeover(obj, rating, theme_dir){
	var imageName = obj.src;
	var id = obj.title;
	var index = imageName.lastIndexOf('/');
	var filename = imageName.substring(index+1);
	var fullId = obj.id;
	var idName = fullId.substr(0, fullId.indexOf('_'));
	var totalRating = rating;

	for(i=0; i<id; i++) {
		var num = i+1;
		document.getElementById(idName+'_'+num).src = theme_dir + 'images/rate_new.gif';			
	}

}

function changeout(obj, rating, theme_dir){
	var imageName = obj.src;
	var id = obj.title;
	var index = imageName.lastIndexOf('/');
	var filename = imageName.substring(index+2);
	var fullId = obj.id;
	var idName = fullId.substr(0, fullId.indexOf('_'));
	var totalRating = rating;
	
	for(i=0; i<id; i++) {
		var num = i+1;
		if(i < totalRating) {
			document.getElementById(idName+'_'+num).src = theme_dir + 'images/rate_full.gif';			
		}
		else {
			document.getElementById(idName+'_'+num).src = theme_dir + 'images/rate_empty.gif';			
		}
	}
}

function displayStars(rating, idName, theme_dir, allow_vote, help_line){
	var fallback = document.getElementById("stars_amount").innerHTML;
	if(fallback != 'fallback'){
		document.write('<center>');
		if(allow_vote){
			document.write(help_line + '<br />');
		}
		document.write(buildRating(rating, idName, theme_dir, allow_vote));
		document.write('</center>');
	}
}

function buildRating(rating, idName, theme_dir, allow_vote){
	var stars_amount = document.getElementById("stars_amount").innerHTML;
	var rating_stars = '';
	
	if(!isNumber(stars_amount)){
		//default to 5 stars
		stars_amount = 5;
	}
	
	for(i=0; i < stars_amount; i++ ){
		if(i < rating) {
			if(allow_vote){
				rating_stars += '<img style="cursor:pointer" src="'+theme_dir+'images/rate_full.gif" id="'+idName+'_'+(i+1)+'" title="'+(i+1)+'" onmouseout="changeout(this, '+rating+', \''+theme_dir+'\')" onmouseover="changeover(this, '+rating+', \''+theme_dir+'\')" onclick="rate(this, '+rating+', \''+theme_dir+'\')" />';
			}else{
				rating_stars += '<img src="'+theme_dir+'images/rate_new.gif" alt="' + rating + '"/>';
			}
		}
		else {
			if(allow_vote){
				rating_stars += '<img style="cursor:pointer" src="'+theme_dir+'images/rate_empty.gif" id="'+idName+'_'+(i+1)+'" title="'+(i+1)+'" onmouseout="changeout(this, '+rating+', \''+theme_dir+'\')" onmouseover="changeover(this, '+rating+', \''+theme_dir+'\')" onclick="rate(this, '+rating+', \''+theme_dir+'\')" />';
			}else{
				rating_stars += '<img src="'+theme_dir+'images/rate_empty.gif" alt="' + rating + '"/>';
			}
		}		
	}
	return rating_stars;
}

function isNumber(test_input){
	var possible_numbers = "1234567890";
	var n;

	for (i = 0; i < test_input.length; i++){ 
    	n = test_input.charAt(i); 
    	if(possible_numbers.indexOf(n) == -1){
        	return false;
		}
	}
	return true;
}
