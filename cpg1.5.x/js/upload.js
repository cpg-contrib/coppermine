/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2008 Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.

  ********************************************
  Coppermine version: 1.5.0
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

/**
 * This file contains upload.php specific javascript
 */

function cpgUploadToggleProgressBar() {
	document.getElementById('cpg_progress_bar').style.display = 'block';
	document.getElementById('cpg_upload_button').style.display = 'none';
}