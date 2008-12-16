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
define('KEYWORDMGR_PHP', true);
define('SEARCH_PHP', true);
require('include/init.inc.php');
//Die if not admin_mode
if (!GALLERY_ADMIN_MODE) {
    cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

pageheader($lang_keywordmgr_php['title']);

starttable("100%", cpg_fetch_icon('keyword_mgr', 2) . $lang_keywordmgr_php['title'], 3);
echo <<<EOT
      <tr>
          <td class="tablef"><strong>{$lang_common['edit']}</strong></td>
          <td class="tablef"><strong>{$lang_common['delete']}</strong></td>
          <td class="tablef"><strong>{$lang_keywordmgr_php['search']}</strong></td>
      </tr>

EOT;
$page = '';  // initialize
if ($superCage->get->keyExists('page')) {
    $page = $superCage->get->getAlpha('page');
} elseif ($superCage->post->keyExists('page')) {
    $page = $superCage->post->getAlpha('page');
}

$keysep = $CONFIG['keyword_separator'];
switch ($page) {

default :
case 'display':

$result = cpg_db_query("select keywords from {$CONFIG['TABLE_PICTURES']}");
if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap']);
  // Find unique keywords
   $total_array = array();

   while (list($keywords) = mysql_fetch_row($result)) {
       $array = explode($keysep,$keywords);

       foreach($array as $word)
       {
         if ($word == '.' || $word == '' || $word == ' ' || $word == $keysep ) {
            continue;
        }
        $orig_word = $word;
        $orig_word_param = addslashes(str_replace(' ','+',$orig_word));
        $orig_word_label = addslashes($orig_word);
         $lowercase_word = utf_strtolower($orig_word);
         $lowercase_word = addslashes($lowercase_word);
         $edit = cpg_fetch_icon('edit', 2);

         $word = <<<EOT
         <td class="tableb">
         <input type="radio" class="radio" name="keywordEdit" value="$lowercase_word" onClick="document.keywordForm.newword.value='$orig_word_label'" id="$lowercase_word" />
         <label for="$lowercase_word" class="clickable_option" title="{$lang_common['edit']} &quot;{$orig_word}&quot;">
         {$edit} &quot;$orig_word&quot;
         </label>
         </td>
EOT;

         $word .= '<td class="tableb"><a href="keywordmgr.php?page=delete&amp;remove='.$orig_word_param.'" onclick="return confirm(\''.sprintf($lang_keywordmgr_php['confirm_delete'], '&quot;'.$orig_word_label.'&quot;').'\')" title="'.sprintf($lang_keywordmgr_php['keyword_del'],'&quot;'.$orig_word.'&quot;').'">';
         $word .= cpg_fetch_icon('delete', 2);
         $word .= $orig_word;

         $word .= <<<EOT
         </a></td>
         <td class="tableb"><a href="thumbnails.php?album=search&amp;search=$orig_word_param" target="_blank">
EOT;

         $word .= cpg_fetch_icon('search', 2);
         $word .= sprintf($lang_keywordmgr_php['keyword_test_search'], '&quot;'.$orig_word.'&quot;');
         $word .= '</a></td>';

           if (!in_array($word,$total_array)) {
               $total_array[] = $word;
           }
       }
   }

   sort($total_array);

   $output = implode("</tr>\n<tr>", $total_array);
   unset($total_array);

   echo <<<EOT
<form name="keywordForm" id="cpgform" action="keywordmgr.php?page=changeword" method="post">
$output
<tr><td colspan="5" class="tablef" align="center">
   <input type="text" name="newword" />
   <input type="submit" value="{$lang_keywordmgr_php['change_keyword']}" />
</td></tr>
</form>
EOT;

break;

case 'changeword':
    if ($superCage->get->keyExists('keywordEdit')) {
        $request_keywordEdit = $superCage->get->getEscaped('keywordEdit');
    } elseif ($superCage->post->keyExists('keywordEdit')) {
        $request_keywordEdit = $superCage->post->getEscaped('keywordEdit');
    }

    if ($superCage->get->keyExists('newword')) {
        $request_newword = $superCage->get->getEscaped('newword');
    } elseif ($superCage->post->keyExists('newword')) {
        $request_newword = $superCage->post->getEscaped('newword');
    }

   if ($request_keywordEdit && $request_newword) {
       $keywordEdit = addslashes($request_keywordEdit);

        $query = <<< EOT
            SELECT `pid`,`keywords` 
                FROM {$CONFIG['TABLE_PICTURES']} 
            WHERE CONCAT('$keysep',`keywords`,'$keysep') LIKE '%{$keysep}{$keywordEdit}{$keysep}%'
EOT;
       $result = cpg_db_query($query) or die(mysql_error());

       while (list($id,$keywords) = mysql_fetch_row($result))
       {
           $array_new = array();
           $array_old = explode($keysep, addslashes(trim($keywords)));

           foreach($array_old as $word)
           {
               // convert old to new if it's the same word
               if (utf_strtolower($word) == $keywordEdit) $word = addslashes($request_newword);

               // rebuild array to reprocess it
               $array_new[] = $word;
           }

           $keywords = implode($keysep, $array_new);
           $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'";
       }
   }
   $newquerys[] = <<< EOT
        UPDATE {$CONFIG['TABLE_PICTURES']} 
        SET `keywords` = TRIM(REPLACE(`keywords`,'{$keysep}{$keysep}','{$keysep}'))
EOT;

    foreach ($newquerys as $query) {
        $result = cpg_db_query($query) or die($query."<br />".mysql_error());
    }

   header("Location: keywordmgr.php?page=display");

break;

case 'delete':
        if ($superCage->get->keyExists('remove')) {
            $remove = $superCage->get->getEscaped('remove');
        } elseif ($superCage->post->keyExists('remove')) {
            $remove = $superCage->post->getEscaped('remove');
        }
        $query = <<< EOT
            SELECT `pid`,`keywords` 
                FROM {$CONFIG['TABLE_PICTURES']} 
            WHERE CONCAT('$keysep',`keywords`,'$keysep') LIKE '%{$keysep}{$remove}{$keysep}%'
EOT;
       $result = cpg_db_query($query) or die(mysql_error());

       while (list($id,$keywords) = mysql_fetch_row($result))
       {
           $array_new = array();
           $array_old = explode($keysep, addslashes(trim($keywords)));

           foreach($array_old as $word)
           {
               // convert old to new if it's the same word
               if (utf_strtolower($word) == utf_strtolower($remove)) $word = '';

               // rebuild array to reprocess it
               $array_new[] = $word;
           }

           $keywords = implode($keysep, $array_new);
           $newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'";
       }

    $newquerys[] = <<< EOT
        UPDATE {$CONFIG['TABLE_PICTURES']} 
        SET `keywords` = TRIM(REPLACE(`keywords`,'{$keysep}{$keysep}','{$keysep}'))
EOT;

    foreach ($newquerys as $query) {
        $result = cpg_db_query($query) or die($query."<br />".mysql_error());
    }

   header("Location: keywordmgr.php?page=display");

break;

}
endtable();
if ($CONFIG['clickable_keyword_search'] != 0) {
    include('include/keyword.inc.php');
}
pagefooter();
ob_end_flush();
?>