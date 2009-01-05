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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/js/admin.js $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

// When the document is ready i.e. on page load
$(document).ready(function() {
    // See if password_protect checkbox is checked
    if ($('#password_protect:checked').val() != null) {
        // If password protect checkbox is checked then show the password related fields
        $('#password_protect').parent().parent().next().show();
        $('#password_protect').parent().parent().next().next().show();
    } else {
        // Else hide the password related fields
        $('#password_protect').parent().parent().next().hide();
        $('#password_protect').parent().parent().next().next().hide();
    }
    
    // Bind the onclick event to password protect checkbox
    $('#password_protect').click(function() {
       // Toggle the display of password fields
        $('#password_protect').parent().parent().next().toggle();
        $('#password_protect').parent().parent().next().next().toggle();
    });
});
