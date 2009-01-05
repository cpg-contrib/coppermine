/*************************
	Coppermine Photo Gallery
	************************
	Copyright (c) 2003-2009 Coppermine Dev Team
	v1.1 originaly written by Gregory DEMAR

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License version 3
	as published by the Free Software Foundation.

	********************************************
	Coppermine version: 1.5.1
	$HeadURL$
	$Revision$
	$LastChangedBy$
	$Date$
**********************************************/

// Object to hold javascript keyCodes for various keys
var KEY_CODES = {
    TAB   : 9,
    ENTER : 13
};

function MM_openBrWindow(theURL,winName,features) { //v2.0
	window.open(theURL,winName,features);
}

function writeCookie(name, data, noDays) {
	var cookieStr = name + "="+ data;
	if (writeCookie.arguments.length > 2){
	 cookieStr += "; expires=" + getCookieExpireDate(noDays);
	 }
	document.cookie = cookieStr;
}

function readCookie(cookieName) {
	var searchName = cookieName + "=";
	var cookies = document.cookie;
	var start = cookies.indexOf(cookieName);
	if (start == -1){ // cookie not found
		return "";
		}
	start += searchName.length; //start of the cookie data
	var end = cookies.indexOf(";", start);
	if (end == -1){
		end = cookies.length;
	}
	return cookies.substring(start, end);
}

function blocking(nr, cookie, vis_state) {
	display = ($("#" + nr).css('display') == 'none') ? vis_state : 'none';
	if (cookie != ''){
		writeCookie(nr, display);
	}
	$('#' + nr).css('display', display);
}


function show_section(e) {
	if ($('#' + e).css('display') == 'none') {
		$('#' + e).css('display', 'block');
	} else {
		$('#' + e).css('display', 'none');
	}
}


function expand() {
	jQuery.each($("table[id^='section']"), function(){
		$(this).css('display', 'block');							  
	});
}

function hideall() {
	jQuery.each($("table[id^='section']"), function(){
		$(this).css('display', 'none');							  
	});
}

function redirect(url) {
	window.location=url;
}

// Function used to not allow user to enter default username as username for comment
function notDefaultUsername(f, defaultUsername, defaultUsernameMessage) {
	 // If username for comment is default username then display error message and return false
	if (f.msg_author.value == defaultUsername) {
		alert(defaultUsernameMessage);
		return false;
	}
	// By default return true
	return true;
}

function HighlightAll(theField) {
	var tempval=eval("document."+theField);
	tempval.focus();
	tempval.select();
}

var onloads = new Array()

function addonload(func){
	onloads.push(func);
}

/**
 * sprintf() for JavaScript v.0.4
 *
 * Copyright (c) 2007 Alexandru Marasteanu <http://alexei.417.ro/>
 * Thanks to David Baird (unit test and patch).
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 */

function str_repeat(i, m) { for (var o = []; m > 0; o[--m] = i); return(o.join('')); }

function sprintf () {
	var i = 0, a, f = arguments[i++], o = [], m, p, c, x;
	while (f) {
	 if (m = /^[^\x25]+/.exec(f)) o.push(m[0]);
	 else if (m = /^\x25{2}/.exec(f)) o.push('%');
	 else if (m = /^\x25(?:(\d+)\$)?(\+)?(0|'[^$])?(-)?(\d+)?(?:\.(\d+))?([b-fosuxX])/.exec(f)) {
		if (((a = arguments[m[1] || i++]) == null) || (a == undefined)) throw("Too few arguments.");
		if (/[^s]/.test(m[7]) && (typeof(a) != 'number'))
			throw("Expecting number but found " + typeof(a));
		switch (m[7]) {
			case 'b': a = a.toString(2); break;
			case 'c': a = String.fromCharCode(a); break;
			case 'd': a = parseInt(a); break;
			case 'e': a = m[6] ? a.toExponential(m[6]) : a.toExponential(); break;
			case 'f': a = m[6] ? parseFloat(a).toFixed(m[6]) : parseFloat(a); break;
			case 'o': a = a.toString(8); break;
			case 's': a = ((a = String(a)) && m[6] ? a.substring(0, m[6]) : a); break;
			case 'u': a = Math.abs(a); break;
			case 'x': a = a.toString(16); break;
			case 'X': a = a.toString(16).toUpperCase(); break;
		}
		a = (/[def]/.test(m[7]) && m[2] && a > 0 ? '+' + a : a);
		c = m[3] ? m[3] == '0' ? '0' : m[3].charAt(1) : ' ';
		x = m[5] - String(a).length;
		p = m[5] ? str_repeat(c, x) : '';
		o.push(m[4] ? a + p : p + a);
	 }
	 else throw ("Huh ?!");
	 f = f.substring(m[0].length);
	}
	return o.join('');
}

function bookmarks(){
	
}

$(document).ready(function() {
	for (func in onloads) eval(onloads[func]);
	
	//Add bookmarks if available
	if(js_vars.bookmark != undefined){
		$('#bookmarkIt').click(function() { 
			var offset = $('#bookmarkIt').offset(); 
			$('#popupBookmark').css('left', offset.left).css('top', offset.top + $('#bookmarkIt').height() + 2); 
			$('#popupBookmark,#popupClose').toggle(); 
		}); 
		$('#popupBookmark').bookmark( 
			{
				compact: true, 
				addEmail: false, 
				addFavorite: true,
				manualBookmark: js_vars.bookmark.favorite_close,
				sites: js_vars.bookmark.bookmark_list,
				icons: 'images/bookmarks.png',
				iconSize: 16,
				target: '_blank',
				favoriteText: js_vars.bookmark.favorite,
				favoriteIcon: 0
			}
		);
	}
	
	//convert external links to open in new window (in comments);
	jQuery.each($("a[rel*='external']"), function(){
		$(this).click(function(){
			window.open(this.href);
			return false;
		});
		$(this).keypress(function(){
			window.open(this.href);
			return false;
		});
	});
});
