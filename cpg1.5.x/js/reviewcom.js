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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/js/scripts.js $
  $Revision: 5163 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-22 18:32:07 +0200 (Mi, 22 Okt 2008) $
**********************************************/

function textCounter(field, maxlimit) {
        if (field.value.length > maxlimit) // if too long...trim it!
        field.value = field.value.substring(0, maxlimit);
}

function selectAll(d,box) {
  var f = document.editForm;
  for (i = 0; i < f.length; i++) {
    //alert (f[i].name.indexOf(box));
    if (f[i].type == "checkbox" && f[i].name.indexOf(box) >= 0) {
      if (d.checked) {
        f[i].checked = true;
      } else {
        f[i].checked = false;
      }
    }
  }
  if (d.name == "checkAll") {
      document.getElementsByName('checkAll2')[0].checked = document.getElementsByName('checkAll')[0].checked;
  } else {
      document.getElementsByName('checkAll')[0].checked = document.getElementsByName('checkAll2')[0].checked;
  }
}

function approveCommentEnable(id) {
    if (document.getElementById('approved'+id+'yes').checked == true) {
        document.getElementById('status_approved_yes'+id).value = id;
        document.getElementById('status_approved_no'+id).value = '';
    }
    if (document.getElementById('approved'+id+'no').checked == true) {
        document.getElementById('status_approved_yes'+id).value = '';
        document.getElementById('status_approved_no'+id).value = id;
    }
}