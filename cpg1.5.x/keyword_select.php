<?php
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

define('IN_COPPERMINE', true);
define('UPLOAD_PHP', true);

require('include/init.inc.php');

if (!USER_CAN_UPLOAD_PICTURES) {
    cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
}

$query = "SELECT * FROM {$CONFIG['TABLE_PREFIX']}dict ORDER BY keyword";
$result = cpg_db_query($query);
while ($row = mysql_fetch_assoc($result)) {
    $keywordIds[] = $row["keyId"];
    $keywords[]   = $row["keyword"];
}

$total = mysql_num_rows($result);

mysql_free_result($result);

$charset = $CONFIG['charset'] == 'language file' ? $lang_charset : $CONFIG['charset'];
$html_header = <<<EOT
<html dir="ltr">
<head>
<title>{$lang_upload_php['keywords_sel']}</title>
<meta http-equiv="Content-Type" content="text/html; charset=$charset" />
<meta http-equiv="Pragma" content="no-cache" />

<link rel="stylesheet" href="themes/{$CONFIG['theme']}/style.css" />
</head>
<body>
EOT;

print $html_header;
/*if (ISSET($_GET['id'])) {
  $formFieldId = (int)$_GET['id'];
}*/
if ($superCage->get->keyExists('id')) {
	$formFieldId = $superCage->get->getInt('id');
}
print '    <form name="form" name="keywordform" id="cpgform2">'."\n";
starttable("100%", $lang_upload_php['keywords_sel'], 3);
$keyword_separator = $CONFIG['keyword_separator'];
if ($total > 0) {

    $form = '
    <script type="text/javascript">
    <!--
    var str;

    function CM_select(f)
    {
        new_keyword = window.document.form.elements[0].value;
        var current_keywords = window.opener.document.getElementById(\'keywords' . $formFieldId . '\').value;
        var substrings = current_keywords.split(new_keyword);
        if (substrings.length <= 1) {
                keyword_separator = (current_keywords.length == 0) ? \'\' : \'' . $keyword_separator . '\';
                window.opener.document.getElementById(\'keywords' . $formFieldId . '\').value += keyword_separator + new_keyword;
        }


        return false;

    }

    //-->
    </script>


    <tr>
        <td class="tableb" align="center"><select name="keyword" size="15" onchange="CM_select(this)" class="listbox">';

    foreach ($keywords as $keyword) {
        $form .= '<option value="'.$keyword.'">'.$keyword.'</option>';
    }
    
    $form .= '
            </select>
        </td>
    </tr>
    <tr>
        <td class="tablef" align="center"><a href="#" onClick="window.close()" class="admin_menu">'.$lang_upload_php['close'].'</a></td>
    </tr>';
} else {
    $form .= <<< EOT
    <tr>
        <td class="tablef" align="center"><a href="#" onclick="window.close()" class="admin_menu">{$lang_upload_php['no_keywords']}</a></td>
    </tr>
EOT;
}
print($form);
if (GALLERY_ADMIN_MODE) {
        echo <<< EOT
    <tr>
        <td class="tablef" align="center"><a href="keyword_create_dict.php" class="admin_menu">{$lang_upload_php['regenerate_dictionary']}</a></td>
    </tr>
EOT;
}
endtable();
print '    </form>'."\n";

?>
</body>
</html>