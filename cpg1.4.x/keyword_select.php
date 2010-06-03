<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2010 Coppermine Dev Team
  v1.0 originally written by Gregory Demar

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

// +----------------------------------------------------------------------+
// | Filename: keyword_select.php                                         |
// +----------------------------------------------------------------------+
// | Copyright (c) http://www.sanisoft.com                                |
// +----------------------------------------------------------------------+
// | Description:                                                         |
// +----------------------------------------------------------------------+
// | Authors: Original Author                                             |
// |          SANIsoft Developement Team                                  |
// +----------------------------------------------------------------------+

define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);

require('include/init.inc.php');

if (!USER_CAN_UPLOAD_PICTURES) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

$query = "SELECT * FROM {$CONFIG['TABLE_PREFIX']}dict ORDER BY keyword";
$result = cpg_db_query($query);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $keywordIds[] = $row["keyId"];
    $keywords[]   = $row["keyword"];
}

$total = mysql_num_rows($result);


mysql_free_result($result);

$charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];

$html_header = <<<EOT
<html dir="ltr">
<head>
<title>{$CONFIG['gallery_name']}</title>
<meta http-equiv="Content-Type" content="text/html; charset=$charset" />
<meta http-equiv="Pragma" content="no-cache" />

<link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
</head>
<body>
EOT;

print $html_header;
starttable("100%",$lang_upload_php['keywords_sel'], 3);
if ($total > 0) {

    $form = '
    <script type="text/javascript">
    <!--
    var str;

    function CM_select(f)
    {
        str = window.document.form.elements[0].value;
        var substrings = window.opener.document.getElementById(\'keywords\').value.split(str);
        if (substrings.length <= 1){
                window.opener.document.getElementById(\'keywords\').value += \' \' + str;
        }


        return false;

    }

    //-->
    </script>

    <form name="form" name="keywordform">
    <table align="center">
    <tr>
        <td align="center"><select name="keyword" size="15" onChange="CM_select(this)">';

        foreach ($keywords as $keyword) {
            $form.= '<option value="'.$keyword.'">'.$keyword.'</option>';
        }
    $form .= '
            </select>
        </td>
    </tr>
    <tr>
        <td align="center"><a href="#" onClick="window.close()">'.$lang_upload_php['close'].'</a></td>
    </tr>
    </table>
    </form>';
} else {
    echo '<b>'.$lang_upload_php['no_keywords'].'</b>';
}
print($form);
endtable();

if (GALLERY_ADMIN_MODE) {
        echo '<center><a href="keyword_create_dict.php">'.$lang_upload_php['regenerate_dictionary'].'</a></center>';
}
?>
</body>
</html>
