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
  $Revision: 5686 $
  $LastChangedBy: pvanrompay $
  $Date: 2009-01-15 05:15:49 +0100 (Do, 15 Jan 2009) $
**********************************************/

function confirmUserDelete() {
	if (document.cpgform2.confirmation.checked = true) {
	  check = confirm('{$lang_register_php['really_delete']}');
	  if (check == true) {
		//document.cpgform2.submit();
	  } else {
		document.cpgform2.confirmation.checked = false;
		document.cpgform2.delete_submit.disabled = true;
		return;
	  }
	}
}

