/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.9
  $HeadURL$
  $Revision$
**********************************************/

jQuery(document).ready(function() {
    //convert external links to open in new window (in comments);
    jQuery.each(jQuery("a[rel*='external']"), function(){
        jQuery(this).click(function(){
            window.open(this.href);
            return false;
        });
        jQuery(this).keypress(function(){
            window.open(this.href);
            return false;
        });
    });
});