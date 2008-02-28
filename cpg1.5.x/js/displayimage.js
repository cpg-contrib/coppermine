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
  $Revision: 4220 $
  $LastChangedBy: saweyyy $
  $Date: 2008-01-24 23:08:30 +0100 (Do, 24 Jan 2008) $
**********************************************/

/**
 * This file contains displayimage.php specific javascript
 */
// When the document is ready
$(document).ready(function() {
	/**
	 * Function to bind behaviors on elements
	 */
	var bind_behaviors = function(scope) {
		// Bind a onclick event on element with id filmstrip_next
		$('#filmstrip_next', scope).click(function() {
			// Get the url for next set of thumbnails. This will be the href of 'next' link
			var next_url = $('#filmstrip_next', scope).attr('href');
			// We will fade the thumbnails to a value of 0.1.
			// We are not fading it out completely as we need to preserve the height of filmstrip div
			$('td.thumbnails').fadeTo(2000, 0.1);
			// Send the ajax request for getting next set of filmstrip thumbnails
			$.get(next_url, {}, function(data) {
				// Fill the filmstrip div with the html we got as a response of ajax request
				$('div#filmstrip').html(data);
				// The td will be hidden in above html. Slowly fade it in.
				$('td.thumbnails').fadeIn(1500);
				show_next_prev_links();
				// Re-bind the behaviors on the new dom content
				bind_behaviors($('div#filmstrip'));
				return false;
			})
			return false;
		});

		// Bind a onclick event on element with id filmstrip_prev
		$('#filmstrip_prev', scope).click(function() {
			// Get the url for previous set of thumbnails. This will be the href of 'previous' link
			var prev_url = $('#filmstrip_prev', scope).attr('href');
			$('td.thumbnails').fadeTo(2000, 0.1);
			$.get(prev_url, {}, function(data) {
				$('div#filmstrip').html(data);
				$('td.thumbnails').fadeIn(1500);
				show_next_prev_links();
				bind_behaviors($('div#filmstrip'));
				return false;
			})
			return false;
		})
    }

    // Show the previous and next links for filmstrip. The links are by default hidden and are shown using javascript
    // This is done so that if javascript is off then the links won't be shown.
    var show_next_prev_links = function() {
    	$('span#filmstrip_prev_link').show();
    	$('span#filmstrip_next_link').show();
    }

    // Show the filmstrip navigation links
    show_next_prev_links();
	bind_behaviors(this);
})

/**
* This part is the rating part of displayimage.php
*/
var displayRating = '';
var currentId = '';
var root = '';

function rate(obj, rating, theme_dir){
	var id = obj.title;
	var fullId = obj.id;
	var vote_id = document.getElementById('vote_id').innerHTML;
	var idName = fullId.substr(0, fullId.indexOf('_'));
	//window.location = root+'ratepic.php?rate=' + id + '&pic=' + idName + '&id=' + vote_id;
	$.get('ratepic.php?rate=' + id + '&pic=' + idName + '&id=' + vote_id, function(data){
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
