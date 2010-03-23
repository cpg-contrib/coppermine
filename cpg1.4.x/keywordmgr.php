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
  Coppermine version: 1.4.27
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

define('IN_COPPERMINE', true);
define('KEYWORDMGR_PHP', true);
define('SEARCH_PHP', true);
require('include/init.inc.php');
//Die if not admin_mode
if (!GALLERY_ADMIN_MODE) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);

pageheader($lang_keywordmgr_php['title']);

starttable("100%", $lang_keywordmgr_php['title'], 3);
echo <<<EOT
      <tr>
          <td class="tablef"><b>{$lang_keywordmgr_php['edit']}</b></td>
          <td class="tablef"><b>{$lang_keywordmgr_php['delete']}</b></td>
          <td class="tablef"><b>{$lang_keywordmgr_php['search']}</b></td>
      </tr>

EOT;

switch($_REQUEST['page']) {

default :
case 'display':

$result = cpg_db_query("select keywords from {$CONFIG['TABLE_PICTURES']}");
if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap']);
  // Find unique keywords
   $total_array = array();

   while (list($keywords) = mysql_fetch_row($result)) {
       $array = explode(' ',$keywords);

       foreach($array as $word)
       {
         if ($word == '.' || $word == '' || $word == ' ' ) continue;
         $orig_word = $word;
         $single_word = addslashes($word);
         $lowercase_word = utf_strtolower($single_word);
         $lowercase_word = addslashes($lowercase_word);
         $word = <<<EOT
         <td class="tableb">
         <input type="radio" class="radio" name="keywordEdit" value="$lowercase_word" onClick="document.keywordForm.newword.value='$single_word'" id="$lowercase_word" />
         <label for="$lowercase_word" class="clickable_option">
         <img src="images/edit.gif" width="16" height="16" border="0" alt="" title="{$lang_keywordmgr_php['edit']} &quot;$orig_word&quot;" /> &quot;<i>$orig_word</i>&quot;
         </label>
         </td>
EOT;
         $word .= '<td class="tableb"><a href="keywordmgr.php?page=delete&amp;remov='.$single_word.'" onclick="return confirm(\''.sprintf($lang_keywordmgr_php['confirm_delete'], '&quot;'.$single_word.'&quot;').'\')">';
         $word .= '<img src="images/delete.gif" width="16" height="16" border="0" alt="" title="'.sprintf($lang_keywordmgr_php['keyword_del'],'&quot;'.$orig_word.'&quot;').'" /> '.$orig_word;
         $word .= <<<EOT
         </a></td>
         <td class="tableb"><a href="thumbnails.php?album=search&amp;search=$orig_word" target="_blank">
EOT;

         $word .= sprintf($lang_keywordmgr_php['keyword_test_search'], '&quot;<i>'.$orig_word.'</i>&quot;');
         $word .= '</a></td>';

           if (!in_array($word,$total_array)) $total_array[] = $word;
       }
   }

   sort($total_array);

   $output = implode("</tr>\n<tr>", $total_array);
   unset($total_array);

   echo <<<EOT
<form name="keywordForm" action="keywordmgr.php?page=changeword" method="post">
$output
<tr><td colspan="5" class="tablef" align="center">
   <input type="text" name="newword" />
   <input type="submit" value="{$lang_keywordmgr_php['change_keyword']}" />
</td></tr>
</form>
EOT;



break;


case 'changeword':

   if ($_REQUEST['keywordEdit'] && $_REQUEST['newword'])
   {
       $keywordEdit = addslashes($_REQUEST['keywordEdit']);

       $query = "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$keywordEdit} %'";
       $result = cpg_db_query($query) or die(mysql_error());

       while (list($id,$keywords) = mysql_fetch_row($result))
       {
           $array_new = array();
           $array_old = explode(" ", addslashes(trim($keywords)));

           foreach($array_old as $word)
           {
               // convert old to new if its the same word
               if (utf_strtolower($word) == $keywordEdit) $word = addslashes($_REQUEST['newword']);

               // rebuild array to reprocess it
               $array_new[] = $word;
           }

           $keywords = implode(" ", $array_new);
           $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'";
       }
   }
   $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))";

   foreach ($newquerys as $query) { $result = cpg_db_query($query) or die($query."<br />".mysql_error()); }

   header("Location: keywordmgr.php?page=display");

break;

case 'delete':

       $keywordEdit = addslashes($_REQUEST['remov']);

       $query = "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$keywordEdit} %'";
       $result = cpg_db_query($query) or die(mysql_error());

       while (list($id,$keywords) = mysql_fetch_row($result))
       {
           $array_new = array();
           $array_old = explode(" ", addslashes(trim($keywords)));

           foreach($array_old as $word)
           {
               // convert old to new if its the same word
               if (utf_strtolower($word) == $keywordEdit) $word = '';

               // rebuild array to reprocess it
               $array_new[] = $word;
           }

           $keywords = implode(" ", $array_new);
           $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'";
       }

   $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))";

   foreach ($newquerys as $query) { $result = cpg_db_query($query) or die($query."<br />".mysql_error()); }

   header("Location: ?page=display");

break;

}
endtable();
if ($CONFIG['clickable_keyword_search'] != 0) {
    include('include/keyword.inc.php');
}
pagefooter();
ob_end_flush();
?>
