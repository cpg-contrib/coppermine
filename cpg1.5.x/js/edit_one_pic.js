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

function textCounter(field, maxlimit) {
        if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}

$(document).ready (function() {
    $('textarea.autogrow').autogrow({
        maxHeight: 150,
        minHeight: 10,
        lineHeight: 16
    });
    /*
    $('#album').change(function() {
        var confirm_move_public  = js_vars.confirm_move_public;
        var confirm_move_private = js_vars.confirm_move_private;
        var confirm_move_public = js_vars.confirm_move_public;
        var param = $(this).val();
        // if (/^(?:bobby|sue|smith)$/.test(name))
        // if (confirm(msg)) 
    });
    */
});