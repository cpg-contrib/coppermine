/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.1 originaly written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.8
  $HeadURL$
  $Revision$
**********************************************/

function init_utils(){
    jQuery.each(jQuery("div[id$='_wrapper']"), function(){
        jQuery(this).css('display', 'none');                   
    });
    jQuery.each(jQuery("input[type='radio'][name='action']"), function(){
        jQuery(this).change(function(){
            jQuery.each(jQuery("input[type='radio'][name='action']"), function(){
                jQuery('#' + jQuery(this).attr('id') + '_wrapper').css('display', (jQuery(this).attr('checked')) ? 'block' : 'none');                    
            });
        });               
    });
}

addonload('init_utils()');