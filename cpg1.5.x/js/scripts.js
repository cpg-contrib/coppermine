/*************************
    Coppermine Photo Gallery
    ************************
    Copyright (c) 2003-2009 Coppermine Dev Team
    v1.1 originaly written by Gregory DEMAR

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 3
    as published by the Free Software Foundation.

    ********************************************
    Coppermine version: 1.5.2
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

var GB_ANIMATION = true;

$(function() {
    $(".cpg_zebra tr:even").addClass("tableb");
	$(".cpg_zebra tr:odd").addClass("tableb tableb_alternate");
});

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
    $('#' + e).toggle();
}

function expand() {
    $("table[id^='section']").show();
}

function hideall() {
    $("table[id^='section']").hide();
}

function selectAll(form_name) {
    $('#' + form_name).data('boxes_checked', $('#' + form_name).data('boxes_checked') ? false : true);
    $('#' + form_name + ' input:checkbox').each(function(){
        this.checked = $('#' + form_name).data('boxes_checked');
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
// end function sprintf


// This prototype is from the public domain.
// Source: http://www.hunlock.com/blogs/Mastering_Javascript_Arrays
Array.prototype.find = function(searchStr) {
  var returnArray = false;
  for (i=0; i<this.length; i++) {
    if (typeof(searchStr) == 'function') {
      if (searchStr.test(this[i])) {
        if (!returnArray) { returnArray = [] }
        returnArray.push(i);
      }
    } else {
      if (this[i]===searchStr) {
        if (!returnArray) { returnArray = [] }
        returnArray.push(i);
      }
    }
  }
  return returnArray;
}
// end function prototype array.find


//This prototype is provided by the Mozilla foundation and
//is distributed under the MIT license.
//http://www.ibiblio.org/pub/Linux/LICENSES/mit.license

if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(elt /*, from*/)
  {
    var len = this.length;

    var from = Number(arguments[1]) || 0;
    from = (from < 0)
         ? Math.ceil(from)
         : Math.floor(from);
    if (from < 0)
      from += len;

    for (; from < len; from++)
    {
      if (from in this &&
          this[from] === elt)
        return from;
    }
    return -1;
  };
}
// end function prototype array.indexOf

function bookmarks(){
    
}

$(document).ready(function() {
    for (func in onloads) {
		eval(onloads[func]);
	}

	//hide all elements with class detail_body
	$(".detail_body").hide();
	//toggle the component with class detail_body
	$(".detail_head_collapsed").click(function()
	{
		$(this).toggleClass("detail_head_expanded").next(".detail_body").slideToggle(600);
	});
	$(".detail_expand_all").click(function()
	{
		$(".detail_body").slideDown(1200);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
		$(".detail_expand_all").hide();
		$(".detail_collapse_all").show();

	});
	$(".detail_collapse_all").click(function()
	{
		$(".detail_body").slideUp(1200);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
		$(".detail_expand_all").show();
		$(".detail_collapse_all").hide();

	});
	$(".detail_toggle_all").click(function()
	{
		$(".detail_body").slideToggle(600);
		$(".detail_head_collapsed").toggleClass("detail_head_expanded");
	});
    
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
	
	// Greybox plugin initialization for the help system
    $("a.greybox").click(function(){
      var t = this.title || $(this).text() || this.href;
      GB_show(t,this.href,470,600);
      return false;
    });
	$("a.greyboxfull").click(function(){
      var t = this.title || $(this).text() || this.href;
      GB_show(t,this.href,700,800);
      return false;
    });
    $('.elastic').elastic();
});
