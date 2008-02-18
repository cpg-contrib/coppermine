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
  $Revision: 4264 $
  $LastChangedBy: gaugau $
  $Date: 2008-02-11 19:11:06 +0100 (Mo, 11 Feb 2008) $
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