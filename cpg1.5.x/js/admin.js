/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originaly written by Gregory DEMAR

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

function resetToDefault(theFieldId, fieldType, numberOfItems) 
{
    //var foo = theFieldId + fieldType + numberOfItems;
    //alert(numberOfItems);
    //alert(fieldType);
    if(fieldType == 'textfield' || fieldType == 'password') {
        $('#' + theFieldId).attr('value', $('#reset_default_' + theFieldId).attr('value'));
        $('#reset_default_' + theFieldId).css('display', 'none');
        $('#reset_default_' + theFieldId).attr('checked', true);
        return;
    }
    if(fieldType == 'checkbox') {
        if ($('#reset_default_' + theFieldId).value == 1) {
            $('#' + theFieldId).attr('checked', true);
        } else {
            $('#' + theFieldId).attr('checked', false);
        }
        $('#reset_default_' + theFieldId).css('display', 'none');
        $('#reset_default_' + theFieldId).attr('checked', true);
        return;
    }
    if(fieldType == 'radio') {
        $('#' + theFieldId + $('#reset_default_' + theFieldId).attr('value')).attr('checked', true);
        $('#reset_default_' + theFieldId).css('display', 'none');
        $('#reset_default_' + theFieldId).attr('checked', true);
        return;
    }
    if(fieldType == 'select') {
        for (var i = 0; i < numberOfItems; i++) {
            //alert($('#' + theFieldId).options[i].value);
            if ($('#' + theFieldId).options[i].value == $('#reset_default_' + theFieldId).value) {
                $('#' + theFieldId).options[i].selected = true;
                $('#reset_default_' + theFieldId).css('display', 'none');
                $('#reset_default_' + theFieldId).attr('checked', true);
                return; 
            }
        }
    }
}

function checkDefaultBox(theFieldId, fieldType, numberOfItems, warning) 
{
    // Each time a config field is being changed (onblur/onchange), this JS is being run to enable/disable the default checkbox
    if(warning != '') {
        alert(warning + ' ' + lang_warning_dont_submit);
    }
    if(fieldType == 'textfield' || fieldType == 'password') {
        if ($('#' + theFieldId).attr('value') != $('#reset_default_' + theFieldId).attr('value')) {
            $('#reset_default_' + theFieldId).css('display', 'inline');
            $('#reset_default_' + theFieldId).attr('checked', false);
            $('#reset_default_' + theFieldId).title = lang_reset_to_default;
        } else {
            $('#reset_default_' + theFieldId).css('display', 'none');
            $('#reset_default_' + theFieldId).attr('checked', true);
            $('#reset_default_' + theFieldId).attr('title', lang_reset_to_default + ': '+  lang_no_change_needed + ' (' + $('#' + 'reset_default_' + theFieldId).attr('value') + ')');
        }
        return;
    }
    if(fieldType == 'checkbox') {
        var checkboxNeedsChangeToChecked = 0;
        if ($('#' + theFieldId).checked == true && $('#reset_default_' + theFieldId).attr('value') == 1) {
            checkboxNeedsChangeToChecked = 1;
        }
        if ($('#' + theFieldId).checked == false && $('#reset_default_' + theFieldId).attr('value') == 0) {
            checkboxNeedsChangeToChecked = 1;
        }
        if (checkboxNeedsChangeToChecked == 0) {
            $('#reset_default_' + theFieldId).css('display', 'inline');
            $('#reset_default_' + theFieldId).attr('checked', false);
            $('#reset_default_' + theFieldId).attr('title', lang_reset_to_default);
        } else {
            $('#reset_default_' + theFieldId).css('display', 'none');
            $('#reset_default_' + theFieldId).attr('checked', true);
            $('#reset_default_' + theFieldId).attr('title', lang_reset_to_default + ': ' + lang_no_change_needed + ' (' + $('#reset_default_' + theFieldId).value + ')');
        }
        return;
    }
    if(fieldType == 'radio') {
        // theFieldId has got a number appended to it - let's strip it
        theLoopCounterIndex = theFieldId.slice((theFieldId.length - 1),theFieldId.length); 
        theFieldId = theFieldId.slice(0,(theFieldId.length - 1));
        if (theLoopCounterIndex != $('#reset_default_' + theFieldId).attr('value')) {
            $('#reset_default_' + theFieldId).css('display', 'inline');
            $('#reset_default_' + theFieldId).attr('checked', false);
            $('#reset_default_' + theFieldId).attr('title', lang_reset_to_default);
        } else {
            $('#reset_default_' + theFieldId).css('display', 'none');
            $('#reset_default_' + theFieldId).attr('checked', true);
            $('#reset_default_' + theFieldId).attr('title', lang_reset_to_default + ': ' + lang_no_change_needed + ' (' + $('#reset_default_' + theFieldId).attr('value') + ')');
        }
        return;
    }
    if(fieldType == 'select') {
        for (var i = 0; i < numberOfItems; i++) {
            if ($('#' + theFieldId).options[i].selected == true) {
                if ($('#' + theFieldId).options[i].attr('value') == $('#reset_default_' + theFieldId).attr('value')) {
                    $('#reset_default_' + theFieldId).css('display', 'none');
                    $('#reset_default_' + theFieldId).attr('checked', true);
                    $('#reset_default_' + theFieldId).attr('title', lang_reset_to_default + ': ' + lang_no_change_needed + ' (' + $('#reset_default_' + theFieldId).attr('value') + ')');
                    return;
                } else {
                    $('#reset_default_' + theFieldId).css('display', 'inline');
                    $('#reset_default_' + theFieldId).attr('checked', false);
                    $('#reset_default_' + theFieldId).attr('title', lang_reset_to_default);
                    return;
                }
            }
        }
    }
}

function deleteUnneededFields() 
{
    $('.deleteOnSubmit').remove();
    return true;
}

function toggleExpandCollpaseButtons(action) 
{
	jQuery.each($("img[id^='expand']"), function(){
		$(this).css('display', (action == 'collapse') ? 'block' : 'none');							  
	});
	jQuery.each($("img[id^='collapse']"), function(){
		$(this).css('display', (action == 'collapse') ? 'none' : 'block');							  
	});
}

function adminPageLoaded(){
	$('span[id^=expand_all]').click(function(){
			expand();
			show_section('expand_all_top');
			show_section('collapse_all_top');
			show_section('expand_all_bottom');
			show_section('collapse_all_bottom');
			toggleExpandCollpaseButtons('expand');							   
		});
	
	$('span[id^=collapse_all]').click(function(){
			hideall();
			show_section('expand_all_top');
			show_section('collapse_all_top');
			show_section('expand_all_bottom');
			show_section('collapse_all_bottom');
			toggleExpandCollpaseButtons('collapse');					   
		});
	show_section('expand_all_top');
	show_section('expand_all_bottom');
	
	jQuery.each($("table[id^='section']"), function(){
		$(this).css('display', 'none');
	});
	
}
addonload('adminPageLoaded()');