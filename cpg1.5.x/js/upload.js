/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.8
  $HeadURL$
  $Revision$
**********************************************/

jQuery(document).ready(function() {
    button_enabled_style = '.browse { font-family: Arial,Helvetica,sans-serif;}';
    button_disabled_style = '.browse { font-family: Arial,Helvetica,sans-serif; color: #D0CFD0;}';

    jQuery('#uploadMethod').change(function() {
        var param = 'method=' + jQuery(this).val();
        if (jQuery("select[name='album']").val()) {
            param += '&album=' + jQuery("select[name='album']").val();
        }
        window.location.href = 'upload.php?' + param;
    });
});