<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.1                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

define('IN_COPPERMINE', true);
define('SEARCH_PHP', true);

require('include/init.inc.php');

pageheader($lang_search_php['title']);
echo <<< EOT
<script language="javascript" type="text/javascript">
<!--
document.searchcpg.search.focus();
-->
</script>
<form method="post" action="thumbnails.php" name="searchcpg">
EOT;

starttable('60%', $lang_search_php['title']);

$ip = GALLERY_ADMIN_MODE ? '<tr><td><input type="checkbox" name="params[pic_raw_ip]">'.$lang_search_php['ip_address'].'</td>' : '<td>&nbsp;</td><td>&nbsp;</td></tr>';

$customs = '';

$result = cpg_db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']} WHERE name LIKE 'user_field%_name' AND value <> '' ORDER BY name ASC");

while ($row = mysql_fetch_assoc($result)){
	$name = str_replace(array('_field', '_name'), '', $row['name']);
	$customs .= <<< EOT
		<tr>
			<td><input type="checkbox" name="params[$name]">{$row['value']}</td>
		</tr>
EOT;
}
echo <<< EOT
        <tr>
            <td class="tableb" align="center" >
                <input type="input" style="width: 80%" name="search" maxlength="255" value="" class="textinput">
                <input type="submit" value="{$lang_search_php['submit_search']}" class="button">
                <input type="hidden" name="album" value="search">
            </td>
        </tr>
		<tr>
			<td>
				<table align="center" width="60%">
					<tr>
						<td>{$lang_search_php['fields']}:</td>
						<td align="center">{$lang_search_php['age']}:</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="params[title]" checked="checked">{$lang_adv_opts['title']}</td>
						<td align="right">{$lang_search_php['newer_than']} <input type="text" name="newer_than" size="3" maxlength="4"> {$lang_search_php['days']}</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="params[caption]" checked="checked">{$lang_adv_opts['caption']}</td>
						<td align="right">{$lang_search_php['older_than']} <input type="text" name="older_than" size="3" maxlength="4"> {$lang_search_php['days']}</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="params[keywords]" checked="checked">{$lang_adv_opts['keywords']}</td>
						<td>&nbsp;</td>

					</tr>
					<tr>
						<td><input type="checkbox" name="params[owner_name]">{$lang_adv_opts['owner_name']}</td>
						<td align="right"><select name="type">
							<option value="AND" selected="selected">{$lang_search_php['all_words']}</option>
							<option value="OR">{$lang_search_php['any_words']}</option></select>
						</td>
					</tr>
					<tr>
						<td><input type="checkbox" name="params[filename]">{$lang_adv_opts['filename']}</td>
						<td>&nbsp;</td>
					</tr>
						$customs
						$ip
				</table>
			</td>
		</tr>
</form>
EOT;

if ($CONFIG['clickable_keyword_search'] != 0) {
    include('include/keyword.inc.php');
}
endtable();

pagefooter();
ob_end_flush();

?>
