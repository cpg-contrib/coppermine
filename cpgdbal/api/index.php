<?php
/**
 * index.php - API for Coppermine 1.4
 *
 *
 * Tested with Coppermine 1.4
 *
 * @copyright Aditya Mooley <adityamooley@sanisoft.com>, Abbas Ali <abbas@sanisoft.com>, Tarique Sani <tarique@sanisoft.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License version 3 of the License.
 *
 */
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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/api/index.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/
$function = $_POST['function'];
$fp = fopen("post.txt", "w");
foreach ($_POST as $k => $v) {
  fwrite ($fp, "$k => $v\n");
}
fclose($fp);

function apidebug($str)
{
  $fp = fopen("post.txt", "a+");
  fwrite ($fp, "$str\n");
  fclose($fp);
}
apidebug($function);
switch(trim($function)) {
  case 'cpgAPI.upload':
    include('cpgAPIupload.php');
    break;

  case 'cpgAPI.catList':
    apidebug("IN cpgAPI.catList");
    include ('cpgAPIcatList.php');
    break;
  default:
    print "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<cpg>
  <status>fail</status>
  <error>100</error>
  <verbose>Invalid function name passed</verbose>
</cpg>";
      break;
  }
?>