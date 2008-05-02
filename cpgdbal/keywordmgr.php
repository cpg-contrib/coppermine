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
  $Revision: 4224 $
  $LastChangedBy: gaugau $
  $Date: 2008-01-26 17:12:00 +0530 (Sat, 26 Jan 2008) $
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

starttable("100%", $lang_keywordmgr_php['title'], 3);
echo <<<EOT
      <tr>
          <td class="tablef"><b>{$lang_keywordmgr_php['edit']}</b></td>
          <td class="tablef"><b>{$lang_keywordmgr_php['delete']}</b></td>
          <td class="tablef"><b>{$lang_keywordmgr_php['search']}</b></td>
      </tr>

EOT;
if ($superCage->get->keyExists('page')) {
    $page = $superCage->get->getAlpha('page');
} elseif ($superCage->post->keyExists('page')) {
    $page = $superCage->post->getAlpha('page');
}

switch ($page) {

default :
case 'display':

/*$result = cpg_db_query("select keywords from {$CONFIG['TABLE_PICTURES']}");
if (!mysql_num_rows($result)) cpg_die(ERROR, $lang_errors['non_exist_ap']);
// Find unique keywords
	$total_array = array();

	while (list($keywords) = mysql_fetch_row($result))  {*/
##########################         DB       ###########################
$cpgdb->query($cpg_db_keywordmgr_php['display_get_keywords']);
$rowset = $cpgdb->fetchRowSet();
if (!count($rowset)) cpg_die(ERROR, $lang_errors['non_exist_ap']);
// Find unique keywords
	$total_array = array();
	foreach ($rowset as $row) {
		$keywords = $row['keywords'];//array_shift($row);
##############################################################
       $array = explode(' ',$keywords);

       foreach($array as $word)
       {
         if ($word == '.' || $word == '' || $word == ' ' ) {
            continue;
         }
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

           if (!in_array($word,$total_array)) {
               $total_array[] = $word;
           }
       }
   }

   sort($total_array);

   $output = implode("</tr>\n<tr>", $total_array);

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

		/*$query = "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$keywordEdit} %'";
		$result = cpg_db_query($query) or die(mysql_error());

		while (list($id,$keywords) = mysql_fetch_row($result)) {	*/
		##############################           DB          ###############################
		$cpgdb->query($cpg_db_keywordmgr_php['get_pic_keywords'], "%".$keywordEdit."%");
		while ($row = $cpgdb->fetchRow()) {
			$id = $row['pid'];
			$keywords = $row['keywords'];
		########################################################################
			$array_new = array();
			$array_old = explode(" ", addslashes(trim($keywords)));

			foreach($array_old as $word)
			{
				// convert old to new if its the same word
				if (utf_strtolower($word) == $keywordEdit) $word = addslashes($request_newword);

				// rebuild array to reprocess it
				$array_new[] = $word;
			}

			$keywords = implode(" ", $array_new);
			//$newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'";
			###############################           DB        ###############################
			$newquerys[] = sprintf($cpg_db_keywordmgr_php['set_pic_keywords'], $keywords, $id);
			########################################################################
		}
	}
	//$newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))";
	##########################         DB       #########################
	$newquerys[] = sprintf($cpg_db_keywordmgr_php['set_pic_trim_keywords']);
	###########################################################

	foreach ($newquerys as $query) {
		//$result = cpg_db_query($query) or die($query."<br />".mysql_error());
		##########################       DB     ##########################
		$result = $cpgdb->query($query);
		###########################################################
	}

	header("Location: keywordmgr.php?page=display");

break;

case 'delete':
		if ($superCage->get->keyExists('remov')) {
			$remov = $superCage->get->getEscaped('remov');
		} elseif ($superCage->post->keyExists('remov')) {
			$remov = $superCage->post->getEscaped('remov');
		}

		/*$query = "SELECT `pid`,`keywords` FROM {$CONFIG['TABLE_PICTURES']} WHERE CONCAT(' ',`keywords`,' ') LIKE '% {$remov} %'";
		$result = cpg_db_query($query) or die(mysql_error());

		while (list($id,$keywords) = mysql_fetch_row($result)) {	*/
		##############################           DB          ###############################
		$cpgdb->query($cpg_db_keywordmgr_php['get_pic_keywords'], "%".$remov."%");
		while ($row = $cpgdb->fetchRow()) {
			$id = $row['pid'];
			$keywords = $row['keywords'];
		########################################################################
		
			$array_new = array();
			$array_old = explode(" ", addslashes(trim($keywords)));

			foreach($array_old as $word)
			{
				// convert old to new if its the same word
				if (utf_strtolower($word) == $remov) $word = '';

				// rebuild array to reprocess it
				$array_new[] = $word;
			}

			$keywords = implode(" ", $array_new);
			//$newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = '$keywords' WHERE `pid` = '$id'";
			###############################           DB        ###############################
			$newquerys[] = sprintf($cpg_db_keywordmgr_php['set_pic_keywords'], $keywords, $id);
			########################################################################
		}

		//$newquerys[] = "UPDATE {$CONFIG['TABLE_PICTURES']} SET `keywords` = TRIM(REPLACE(`keywords`,'  ',' '))";
		##########################         DB       #########################
		$newquerys[] = sprintf($cpg_db_keywordmgr_php['set_pic_trim_keywords']);
		###########################################################

		foreach ($newquerys as $query) {
			//$result = cpg_db_query($query) or die($query."<br />".mysql_error());
			###############        DB      ###############
			$result = $cpgdb->query($query);
			######################################
		}

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