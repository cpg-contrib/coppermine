<?php
/**
 * index.php - API for Coppermine 1.4
 *
 *
 * Tested with Coppermine 1.4
 *
 * @copyright Aditya Mooley <adityamooley@sanisoft.com>, Abbas Ali <abbas@sanisoft.com>, Tarique Sani <tarique@sanisoft.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License version 2 of the License, or
 * any later version.
 *
 */
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