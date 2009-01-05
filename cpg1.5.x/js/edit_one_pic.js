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

$(document).ready (function() {
	$('textarea.autogrow').autogrow({
		maxHeight: 150,
		minHeight: 10,
		lineHeight: 16
	});
});