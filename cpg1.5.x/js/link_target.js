/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

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

$(document).ready(function() {
    //convert external links to open in new window (in comments);
    jQuery.each($("a[rel*='external']"), function(){
        $(this).click(function(){
            window.open(this.href);
            return false;
        });
        $(this).keypress(function(){
            window.open(this.href);
            return false;
        });
    });
});