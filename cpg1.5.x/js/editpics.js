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

function selectAll(d,box) {
    var f = document.editForm;
    for (i = 0; i < f.length; i++) {
        if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
            if (d.checked) {
                f[i].checked = true;
            } else {
                f[i].checked = false;
            }
        }
    }
}

$(document).ready (function() {
    $('textarea.autogrow').autogrow({
        maxHeight: 200,
        minHeight: 10,
        lineHeight: 16
    });
});
