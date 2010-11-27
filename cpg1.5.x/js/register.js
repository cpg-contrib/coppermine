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

jQuery(document).ready(function() {
    jQuery('.formFieldWarning').hide();})

function checkRegisterFormSubmit() {
    jQuery('.formFieldWarning').hide();
    var errors = 0;
    // Check the user name
    if(jQuery('#username').val() == '') {
        jQuery('#username_warning1').show();
        errors++;
    } else {
        if (jQuery('#username').val().length < 2 ) {
            jQuery('#username_warning2').show();
            errors++;
        }
    }
    // Check the password
    if (jQuery('#password').val().length < 2 ) {
        jQuery('#password_warning1').show();
        errors++;
    } else {
        if (jQuery('#password').val() == jQuery('#username').val() ) {
            jQuery('#password_warning2').show();
            errors++;
        }
    }
    // Check the password_verification
    if (jQuery('#password_verification').val() != jQuery('#password').val() ) {
        jQuery('#password_verification_warning1').show();
        errors++;
    }
    // Check the email address
    if(jQuery('#email').val() == '') {
        jQuery('#email_warning1').show();
        errors++;
    } else {
        if (jQuery('#email').val().search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1) {
            jQuery('#email_warning2').show();
            errors++;
        }
    }
    if (errors != 0) {
        jQuery('#form_not_submit_top').show();
        jQuery('#form_not_submit_bottom').show();
        return false;
    } else {
        return true;
    }
}


