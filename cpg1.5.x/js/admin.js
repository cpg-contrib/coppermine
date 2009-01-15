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

function resetToDefault(theFieldId, fieldType, numberOfItems) 
{
    var user_input = $('#' + theFieldId);
    var default_input = $('#reset_default_' + theFieldId);

    if(fieldType == 'textfield' || fieldType == 'password') {
        user_input.attr('value', default_input.attr('value'));
    }else if(fieldType == 'checkbox') {
        user_input.attr('checked', (default_input.attr('value') == 1) ? true : false);
    }else if(fieldType == 'radio') {
        $('#' + theFieldId + default_input.attr('value')).attr('checked', true);
    }else if(fieldType == 'select') {
        user_input.attr('value', default_input.attr('value'));
    }
    default_input.attr('checked', true);
    default_input.css('display', 'none');
}

function checkDefaultBox(theFieldId, fieldType, numberOfItems, warning) 
{
    // Each time a config field is being changed (onblur/onchange), this JS is being run to enable/disable the default checkbox
    if(warning != '') {
        alert(warning + ' ' + js_vars.lang_warning_dont_submit);
    }
    var user_input = $('#' + theFieldId);
    var default_input = $('#reset_default_' + theFieldId);
    var show = false;
    
    if((fieldType == 'textfield' || fieldType == 'password' || fieldType == 'select') && (user_input.attr('value') != default_input.attr('value'))) {
        show = true;
    }else if(fieldType == 'checkbox' && (user_input.attr('checked') != default_input.attr('value'))) {
        show = true;
    }else if(fieldType == 'radio') {
        //for radio buttons we have to create a new default as it is a special one
        default_input = $('#reset_default_' + theFieldId.substring(0, (theFieldId.length - 1)));
        if (user_input.attr('value') != default_input.attr('value')) {
            show = true;
        }
    }
    
    if(show){
        default_input.css('display', 'inline');
        default_input.attr({checked: false, title: js_vars.lang_reset_to_default});
    }else{
        default_input.css('display', 'none');
        default_input.attr({checked: true, title: js_vars.lang_reset_to_default + ': ' + js_vars.lang_no_change_needed + ' (' + default_input.attr('value') + ')'});
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
    
    //TODO
    //due to a bug in webkit based browsers, the onfocus event isn't fired
    //affects Safari and Chrome but not sure what versions
    /*jQuery.each($('input[type=radio]'), function(){
        $(this).blur($(this).focus());      
    });*/
}
addonload('adminPageLoaded()');