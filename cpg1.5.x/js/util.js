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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/js/banning.js $
  $Revision: 5258 $
  $LastChangedBy: gaugau $
  $Date: 2008-11-17 21:43:14 +0100 (Mo, 17 Nov 2008) $
**********************************************/

function init_utils(){
	jQuery.each($("span[id$='_wrapper']"), function(){
		$(this).css('display', 'none');					  
	});
	jQuery.each($("input[type='radio'][name='action']"), function(){
		$(this).change(function(){
			jQuery.each($("input[type='radio'][name='action']"), function(){
				$('#' + $(this).attr('id') + '_wrapper').css('display', ($(this).attr('checked')) ? 'block' : 'none');					  
			});
		});				  
	});
}

addonload('init_utils()');