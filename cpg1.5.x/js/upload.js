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
  $Revision: 4502 $
  $LastChangedBy: pvanrompay $
  $Date: 2008-06-06 00:21:20 +0200 (Fr, 06 Jun 2008) $
**********************************************/

/**
 * This file contains upload.php specific javascript
 */

function cpgUploadToggleProgressBar() {
	document.getElementById('cpg_progress_bar').style.display = 'block';
	document.getElementById('cpg_upload_button').style.display = 'none';
}