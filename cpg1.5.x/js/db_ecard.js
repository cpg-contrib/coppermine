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

function check(state){
	jQuery.each($("input[name='eid[]']"), function(){
		$(this).attr('checked', state);					  
	});
}

function agreesubmit(){
	$("input[type='submit'][name='delete']").attr('disabled', ($('#agreecheck').attr('checked')) ? false : true);
}

function defaultagree(){
	if ($('#agreecheck').attr('checked'))
		return true;
	else{
		alert(js_vars.ecards_delete_confirm);
		return false;
	}
}