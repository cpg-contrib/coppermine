/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

function resetToDefault(theFieldId, fieldType, numberOfItems) 
{
    var user_input = jQuery('#' + theFieldId);
    var default_input = jQuery('#reset_default_' + theFieldId);

    if(fieldType == 'textfield' || fieldType == 'password') {
        user_input.attr('value', default_input.attr('value'));
    }else if(fieldType == 'checkbox') {
        user_input.attr('checked', (default_input.attr('value') == 1) ? true : false);
    }else if(fieldType == 'radio') {
        jQuery('#' + theFieldId + default_input.attr('value')).attr('checked', true);
    }else if(fieldType == 'select') {
        user_input.attr('value', default_input.attr('value'));
    }
    default_input.attr('checked', true);
    default_input.css('display', 'none');
}

function checkDefaultBox(theFieldId, fieldType, numberOfItems, warning) 
{
    if (js_vars.display_reset_boxes != '1' ) {
        return;
    }
    // Each time a config field is being changed (onblur/onchange), this JS is being run to enable/disable the default checkbox
    if(warning != '') {
        alert(warning + ' ' + js_vars.lang_warning_dont_submit);
    }
    var user_input = jQuery('#' + theFieldId);
    var default_input = jQuery('#reset_default_' + theFieldId);
    var show = false;
    
    if((fieldType == 'textfield' || fieldType == 'password' || fieldType == 'select') && (user_input.attr('value') != default_input.attr('value'))) {
        show = true;
    }else if(fieldType == 'checkbox' && (user_input.attr('checked') != default_input.attr('value'))) {
        show = true;
    }else if(fieldType == 'radio') {
        //for radio buttons we have to create a new default as it is a special one
        default_input = jQuery('#reset_default_' + theFieldId.substring(0, (theFieldId.length - 1)));
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
    jQuery('.deleteOnSubmit').remove();
    return true;
}

function toggleExpandCollapseButtons(action) 
{
    jQuery.each(jQuery("img[id^='expand']"), function(){
        jQuery(this).css('display', (action == 'collapse') ? 'block' : 'none');
    });
    jQuery.each(jQuery("img[id^='collapse']"), function(){
        jQuery(this).css('display', (action == 'collapse') ? 'none' : 'block');
    });
}

function adminPageLoaded(){
    
    jQuery('a.direct_config_link').click(function(){
        
        var aname = jQuery(this).attr('hash').replace('#', '');
        var container = jQuery('div.detail_body:has(a[name="' + aname + '"])');
        show_section(container.attr('id'));
    });
    
    jQuery('span[id^=expand_all]').click(function(){
            expand();
            show_section('expand_all_top');
            show_section('collapse_all_top');
            show_section('expand_all_bottom');
            show_section('collapse_all_bottom');
            toggleExpandCollapseButtons('expand');
        });
    
    jQuery('span[id^=collapse_all]').click(function(){
            hideall();
            show_section('expand_all_top');
            show_section('collapse_all_top');
            show_section('expand_all_bottom');
            show_section('collapse_all_bottom');
            toggleExpandCollapseButtons('collapse');
        });
    show_section('expand_all_top');
    show_section('expand_all_bottom');
    
    hideall();
    
    // Add the checkDefaultBox events only if the settings is enabled
    if (js_vars.display_reset_boxes == '1') {
        jQuery.each(js_vars.default_values_check.textfield, function(){
            var key = this.key;
            var warning = this.warning;
            jQuery('#' + this.key).change(function(){
                checkDefaultBox(key, 'textfield', '', warning);
            });
        });
        jQuery.each(js_vars.default_values_check.checkbox, function(){
            var key = this.key;
            var warning = this.warning;
            jQuery('#' + this.key).click(function(){
                checkDefaultBox(key, 'checkbox', '', warning);
            });
        });
        jQuery.each(js_vars.default_values_check.radio, function(){
            var key = this.key;
            var warning = this.warning;
            if (jQuery.support.cssFloat) {
                //non IE browsers
                jQuery('#' + this.key).change(function(){
                    checkDefaultBox(key, 'radio', '', warning);
                });
            }
            else {
                jQuery('#' + this.key).focus(function(){
                    checkDefaultBox(key, 'radio', '', warning);
                });
                
            }
        });
        jQuery.each(js_vars.default_values_check.select, function(){
            var key = this.key;
            var warning = this.warning;
            var count = this.count;
            jQuery('#' + this.key).change(function(){
                checkDefaultBox(key, 'select', '', warning, count);
            });
        });
    }
}

addonload('adminPageLoaded()');
