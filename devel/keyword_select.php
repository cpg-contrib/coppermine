<?php  
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | Filename: .php                                                           |
// +----------------------------------------------------------------------+
// | Copyright (c) http://www.sanisoft.com                                |
// +----------------------------------------------------------------------+
// | Description:                                                         |
// +----------------------------------------------------------------------+
// | Authors: Original Author <author@example.com>                        |
// |          SANIsoft Developement Team  <you@example.com>               |
// +----------------------------------------------------------------------+
//
// $Id$

define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);

require('include/init.inc.php');

if (!USER_CAN_UPLOAD_PICTURES) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

$query = "SELECT * FROM {$CONFIG['TABLE_PREFIX']}dict ORDER BY keyword";
$result = db_query($query);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) { 
    $keywordIds[] = $row["keywordId"];
    $keywords[]   = $row["keyword"];
}

$total = mysql_num_rows($result);


mysql_free_result($result);

$html_header = <<<EOT
<html dir="ltr">
<head>
<title>{$CONFIG['gallery_name']}</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Pragma" content="no-cache" />

<link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
EOT;

print $html_header;
starttable("100%",$lang_upload_php['keywords_sel'], 3);
if ($total > 0) {

    $form = "
    <script language='JavaScript'>
    <!--
    var str;
	
    function CM_select(f)
    {
        str = window.document.form.elements[0].value;
        var substrings = window.opener.document.getElementById('keywords').value.split(str);
        if (substrings.length <= 1){
                window.opener.document.getElementById('keywords').value += ' ' + str;
        }


        return false;

    }

    //-->
    </script>
    
    <form name='form'>
    <table align='center'>
    <tr>
        <td align=center ><select name='keyword' size='15' onChange='CM_select(this)'>";
        foreach ($keywords as $keyword) {
            $form.= "<option value='$keyword'>$keyword</option>";
        }
    $form .= "
            </select>
        </td>
    </tr>
    <tr>
        <td align=center ><a href='#' onClick='window.close()'>Close</a></td>
    </tr>     
    </table>
    </form>";
} else {
    echo "<b><font color='red'><b>Sorry, No keywords available !</b></font> ";
}
print($form);
endtable();

if (GALLERY_ADMIN_MODE) {
	echo "<center><a href='keyword_create_dict.php>Regenerate Dictionary</a></center>";
}
?>
</html>
