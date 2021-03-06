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
  $HeadURL: https://coppermine.svn.sourceforge.net/svnroot/coppermine/trunk/cpg1.5.x/delete.php $
  $Revision: 5129 $
  $LastChangedBy: gaugau $
  $Date: 2008-10-18 16:03:12 +0530 (Sat, 18 Oct 2008) $
**********************************************/

define('IN_COPPERMINE', true);
define('DELETE_PHP', true);

require('include/init.inc.php');

/**
 * Local functions definition
 */

$header_printed = false;
$need_caption = false;

function output_table_header()
{
    global $header_printed, $need_caption, $lang_delete_php;

    $header_printed = true;
    $need_caption = true;

echo <<<EOT
<tr>
<td class="tableh2"><strong>{$lang_delete_php['npic']}</strong></td>
<td class="tableh2" align="center"><strong>{$lang_delete_php['fs_pic']}</strong></td>
<td class="tableh2" align="center"><strong>{$lang_delete_php['ns_pic']}</strong></td>
<td class="tableh2" align="center"><strong>{$lang_delete_php['orig_pic']}</strong></td>
<td class="tableh2" align="center"><strong>{$lang_delete_php['thumb_pic']}</strong></td>
<td class="tableh2" align="center"><strong>{$lang_delete_php['comment']}</strong></td>
<td class="tableh2" align="center"><strong>{$lang_delete_php['im_in_alb']}</strong></td>
</tr>
EOT;
}

function delete_picture($pid, $tablecellstyle = 'tableb')
{
    global $CONFIG, $header_printed, $lang_errors, $lang_delete_php;
    #####################      DB      ######################
    global $cpg_db_delete_php;
    $cpgdb =& cpgDB::getInstance();
    $cpgdb->connect_to_existing($CONFIG['LINK_ID']);
    ##################################################	

    if (!$header_printed)
        output_table_header();

    $green = cpg_fetch_icon('ok', 0, $lang_delete_php['del_success']);
    $red = cpg_fetch_icon('stop', 0, $lang_delete_php['err_del']);

    // We will be selecting pid in the query as we need it in $pic array for the plugin filter
    /*if (GALLERY_ADMIN_MODE) {
        $query = "SELECT pid, aid, filepath, filename FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid'";
        $result = cpg_db_query($query);
        if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $pic = mysql_fetch_array($result);
    } else {
        $query = "SELECT pid, {$CONFIG['TABLE_PICTURES']}.aid as aid, category, filepath, filename, owner_id FROM {$CONFIG['TABLE_PICTURES']}, {$CONFIG['TABLE_ALBUMS']} WHERE {$CONFIG['TABLE_PICTURES']}.aid = {$CONFIG['TABLE_ALBUMS']}.aid AND pid='$pid'";
        $result = cpg_db_query($query);
        if (!mysql_num_rows($result)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $pic = mysql_fetch_array($result);
        if (!($pic['category'] == FIRST_USER_CAT + USER_ID || ($CONFIG['users_can_edit_pics'] && $pic['owner_id'] == USER_ID)) || !USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    } */
    ###################################		DB		#####################################
    if (GALLERY_ADMIN_MODE) {
        $cpgdb->query($cpg_db_delete_php['del_pic_gal_admin'], $pid);
        $rowset = $cpgdb->fetchRowSet();
        if (!count($rowset)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $pic = $rowset[0];
    } else {
        $cpgdb->query($cpg_db_delete_php['del_pic_user_admin'], $pid);
        $rowset = $cpgdb->fetchRowSet();
        if (!count($rowset)) cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
        $pic = $rowset[0];
        if (!($pic['category'] == FIRST_USER_CAT + USER_ID || ($CONFIG['users_can_edit_pics'] && $pic['owner_id'] == USER_ID)) || !USER_ID) cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
    }
    #####################################################################################

    $aid = $pic['aid'];
    $dir = $CONFIG['fullpath'] . $pic['filepath'];
    $file = $pic['filename'];


    if (!is_writable($dir)) cpg_die(CRITICAL_ERROR, sprintf($lang_errors['directory_ro'], htmlspecialchars($dir)), __FILE__, __LINE__);
    
    // Plugin filter to be called before deleting a file
    CPGPluginAPI::filter('before_delete_file', $pic);
    
    echo '<tr>';
    echo "<td class=\"".$tablecellstyle."\">" . htmlspecialchars($file) . "</td>";

    $files = array($dir . $file, $dir . $CONFIG['normal_pfx'] . $file, $dir . $CONFIG['orig_pfx'] . $file, $dir . $CONFIG['thumb_pfx'] . $file);
    foreach ($files as $currFile) {
        echo "<td class=\"".$tablecellstyle."\" align=\"center\">";
        if (is_file($currFile)) {
            if (@unlink($currFile))
                echo $green;
            else
                echo $red;
        } else
            echo "&nbsp;";
        echo "</td>";
    }

    /*$query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE pid='$pid'";
    $result = cpg_db_query($query);
    echo "<td class=\"".$tablecellstyle."\" align=\"center\">";
    if (mysql_affected_rows() > 0)
        echo $green;
    else
        echo "&nbsp;";
    echo "</td>";

    $query = "DELETE FROM {$CONFIG['TABLE_EXIF']} WHERE filename='".addslashes($dir.$file)."' LIMIT 1";
    $result = cpg_db_query($query);

    $query = "DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE pid='$pid' LIMIT 1";
    $result = cpg_db_query($query);
    echo "<td class=\"".$tablecellstyle."\" align=\"center\">";
    if (mysql_affected_rows() > 0)
        echo $green;
    else
        echo $red;
    echo "</td>";

    echo "</tr>\n";
    
    // Plugin filter to be called after a file is deleted
    CPGPluginAPI::filter('after_delete_file', $pic);
    
	return $aid;	*/
    #################################		DB		###################################
    $cpgdb->query($cpg_db_delete_php['del_pic_comment'], $pid);
    echo "<td class=\"".$tablecellstyle."\" align=\"center\">";
    if ($cpgdb->affectedRows() > 0)
        echo $green;
    else
        echo "&nbsp;";
    echo "</td>";

    $cpgdb->query($cpg_db_delete_php['del_pic_exif'], addslashes($dir.$file));

    $cpgdb->query($cpg_db_delete_php['delete_picture'], $pid);
    echo "<td class=\"".$tablecellstyle."\" align=\"center\">";
    if ($cpgdb->affectedRows() > 0)
        echo $green;
    else
        echo $red;
    echo "</td>";

    echo "</tr>\n";
    
    // Plugin filter to be called after a file is deleted
    CPGPluginAPI::filter('after_delete_file', $pic);
    
    return $aid;
    ##################################################################################
}

function delete_album($aid)
{
    global $CONFIG, $lang_errors, $lang_delete_php, $cpg_db_delete_php;
	#####################      DB      ######################
	$cpgdb =& cpgDB::getInstance();
	$cpgdb->connect_to_existing($CONFIG['LINK_ID']);
	##################################################

	$return = '';
	/*$query = "SELECT title, category FROM {$CONFIG['TABLE_ALBUMS']} WHERE aid ='$aid'";
	$result = cpg_db_query($query);
	if (!mysql_num_rows($result)) {
		cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
	}
	$album_data = mysql_fetch_array($result);	*/
	#######################          DB            #######################
	$cpgdb->query($cpg_db_delete_php['del_alb_get_title_cat'], $aid);
	$rowset = $cpgdb->fetchRowSet();
	if (!count($rowset)) {
		cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_ap'], __FILE__, __LINE__);
	}
	$album_data = $rowset[0];
	#########################################################

    if (!GALLERY_ADMIN_MODE) {
        if ($album_data['category'] != FIRST_USER_CAT + USER_ID) {
          cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
        }
    }

    /*$query = "SELECT pid FROM {$CONFIG['TABLE_PICTURES']} WHERE aid='$aid'";
    $result = cpg_db_query($query);
    // Delete all files
    $loopCounter = 0;
    while ($pic = mysql_fetch_array($result)) */
    ######################         DB         #######################
    $cpgdb->query($cpg_db_delete_php['del_alb_get_pic_id'], $aid);
    // Delete all files
    $loopCounter = 0;
    while ($pic = $cpgdb->fetchRow())
    ######################################################
    {
        if ($loopCounter/2 == floor($loopCounter/2)) {
        	$tablecellstyle = 'tableb';
        } else {
        	$tablecellstyle = 'tableb tableb_alternate';
        }
        ob_start();
        delete_picture($pic['pid'], $tablecellstyle);
        $return .= ob_get_contents();
        $loopCounter++;
        ob_end_clean();
    }
    // Delete album
    /*$query = "DELETE from {$CONFIG['TABLE_ALBUMS']} WHERE aid='$aid'";
    $result = cpg_db_query($query);
    if (mysql_affected_rows() > 0) {
        $return .= "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['alb_del_success'], $album_data['title']) . "</td></tr>\n";
    } */
    ######################           DB         #######################
    $cpgdb->query($cpg_db_delete_php['delete_album'], $aid);
    if ($cpgdb->affectedRows() > 0) {
        $return .= "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['alb_del_success'], $album_data['title']) . "</td></tr>\n";
    }
    ########################################################
    return $return;
}

/**
 * Album manager functions
 */

function parse_select_option($value)
{
    global $HTML_SUBST;

    if (!preg_match("/.+?no=(\d+),album_nm=(.+?),album_sort=(\d+),action=(\d)/", $value, $matches))
        return false;

    return array('album_no' => (int)$matches[1],
        //'album_nm' => get_magic_quotes_gpc() ? strtr(stripslashes($matches[2]), $HTML_SUBST) : strtr($matches[2], $HTML_SUBST),
        /**
         * TODO: Album name - Ideal case for using KSES. For now doing complete strip_tags
         */
        'album_nm' => strip_tags($matches[2]),
        'album_sort' => (int)$matches[3],
        'action' => (int)$matches[4]
        );
}

function parse_orig_sort_order($value)
{
    if (!preg_match("/(\d+)@(\d+)/", $value, $matches))
        return false;

    return array('aid' => (int)$matches[1],
        'pos' => (int)$matches[2],
        );
}

function parse_list($value)
{
    return preg_split("/,/", $value, -1, PREG_SPLIT_NO_EMPTY);
}

/**************************************************************************
* Picture manager functions
**************************************************************************/

function parse_pic_select_option($value)
{
   global $HTML_SUBST;

    if (!preg_match("/.+?no=(\d+),picture_nm='(.+?)',picture_sort=(\d+),action=(\d)/", $value, $matches)) {
        return false;
    }

   return array(
           'picture_no'   => (int)$matches[1],
           //'picture_nm'   => get_magic_quotes_gpc() ? strtr(stripslashes($matches[2]), $HTML_SUBST) : strtr($matches[2], $HTML_SUBST),
           /**
            * TODO: Picture name - Ideal case for using KSES. For now doing complete strip_tags
            */
           'picture_nm' => strip_tags($matches[2]),
           'picture_sort' => (int)$matches[3],
           'action'     => (int)$matches[4]
               );
}

function parse_pic_orig_sort_order($value)
{
    if (!preg_match("/(\d+)@(\d+)/", $value, $matches)) {
        return false;
    }

    return array(
        'aid'   => (int)$matches[1],
        'pos'   => (int)$matches[2],
    );
}

function parse_pic_list($value)
{
    return preg_split("/,/", $value, -1, PREG_SPLIT_NO_EMPTY);
}

/**
 * Main code starts here
 */


if ($superCage->get->keyExists('what')) {
    $what = $superCage->get->getAlpha('what');
} elseif ($superCage->post->keyExists('what')) {
    $what = $superCage->post->getAlpha('what');
} else {
    cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}


switch ($what) {
    // Album manager (don't necessarily delete something ;-)
    case 'albmgr':
        if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
            cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
        }

        if (!GALLERY_ADMIN_MODE) {
            //restrict to allowed categories of user
            //first get allowed categories
            global $USER_DATA;
            
            $group_id = $USER_DATA['group_id'];
            /*$result = cpg_db_query("SELECT DISTINCT cid FROM {$CONFIG[TABLE_CATMAP]} WHERE group_id = $group_id");
            $rowset = cpg_db_fetch_rowset($result);*/
			#######################          DB       ######################
			$cpgdb->query($cpg_db_delete_php['albmgr_dist_catmap_cid'], $group_id);
			$rowset = $cpgdb->fetchRowSet();
			######################################################
			
            //add allowed categories to the restriction     
            $restrict = "AND (category = '" . (FIRST_USER_CAT + USER_ID) . "'";
            
            foreach($rowset as $key => $value){
                $restrict .= " OR category = '" . $value['cid'] . "'";
            }
            $restrict .= ")";        
        } else {
            $restrict = '';
        }

        $returnOutput = ''; // the var that will later be shown as a result of the action performed
        //pageheader($lang_delete_php['alb_mgr']);
        $returnOutput .= '<table border="0" cellspacing="0" cellpadding="0" width="100%">';

        //prevent sorting of the albums if not admin or in own album
        $sort_list_matched = $superCage->post->getMatched('sort_order', '/^[0-9@,]+$/');
        if(GALLERY_ADMIN_MODE || $superCage->post->getInt('cat') == FIRST_USER_CAT + USER_ID){
            $orig_sort_order = parse_list($sort_list_matched[0]);
            foreach ($orig_sort_order as $album) {
                $op = parse_orig_sort_order($album);
                if (count ($op) == 2) {
                    /*$query = "UPDATE {$CONFIG[TABLE_ALBUMS]} SET pos='{$op['pos']}' WHERE aid='{$op['aid']}' $restrict LIMIT 1";
                    cpg_db_query($query);*/
					############################         DB        ##########################
					$cpgdb->query($cpg_db_delete_php['albmgr_set_pos'], $op['pos'], $op['aid'], $restrict);
					##############################################################
                } else {
                    cpg_die (sprintf(CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], $sort_list_matched), __FILE__, __LINE__);
                }
            }
        }

        $matches = $superCage->post->getMatched('delete_album', '/^[0-9,@]+$/');
        $to_delete = parse_list($matches[0]);
        foreach ($to_delete as $album_id) {
            $returnOutput .= delete_album((int)$album_id);
        }

        if ($superCage->post->keyExists('to')) {
            $to = $superCage->post->getEscaped('to');

            foreach ($to as $option_value) {

                $op = parse_select_option(stripslashes($option_value));

                switch ($op['action']) {
                    case '0':
                        break;
                    case '1':
                        $category = $superCage->post->getInt('cat');
                        $user_id = USER_ID;

                        $returnOutput .= "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['create_alb'], $cpgdb->removeQuotes($op['album_nm'])) . "</td></tr>\n";
                        /*$query = "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description, owner) VALUES ('$category', '" . addslashes($op['album_nm']) . "', 'NO',  '{$op['album_sort']}', '', '$user_id')";
                        cpg_db_query($query);*/
                        #############################            DB          #############################
                        $cpgdb->query($cpg_db_delete_php['albmgr_add_album'], $category, $cpgdb->removeQuotes($cpgdb->escape($op['album_nm'])), 
                                        $op['album_sort'], $user_id);
                        #####################################################################
                        break;
                    case '2':
                        $returnOutput .= "<tr><td colspan=\"6\" class=\"tableb\">" . sprintf($lang_delete_php['update_alb'], $op['album_no'], $op['album_nm'], $op['album_sort']) . "</td></tr>\n";
                        /*$query = "UPDATE $CONFIG[TABLE_ALBUMS] SET title='" . addslashes($op['album_nm']) . "', pos='{$op['album_sort']}' WHERE aid='{$op['album_no']}' $restrict LIMIT 1";
                        cpg_db_query($query);*/
                        ################################          DB       #################################
                        $cpgdb->query($cpg_db_delete_php['albmgr_update_album'], $cpgdb->removeQuotes($cpgdb->escape($op['album_nm'])), $op['album_sort'],
                                        $op['album_no'], $restrict);
                        ##########################################################################
                        break;
                    default:
                        // cpg_die (CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], __FILE__, __LINE__);
                }
            }
        }

        if ($need_caption) {
              ob_start();
              output_caption();
              $returnOutput .= ob_get_contents();
              ob_end_clean();
        }
        $returnOutput .= '</table>';
        //endtable();
        //pagefooter();
        //ob_end_flush();
        cpgRedirectPage('albmgr.php', $lang_common['information'], $returnOutput); // redirect the user
        break;

//
// Picture manager (don't necessarily delete something ;-)
//
	case 'picmgr':
		if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)){
			cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
		}

		if(!GALLERY_ADMIN_MODE){
			//$restrict = "AND category = '".(FIRST_USER_CAT + USER_ID)."'";
			$restrict = '';
		} else {
			$restrict = '';
		}

		pageheader($lang_delete_php['pic_mgr']);
		starttable("100%", $lang_delete_php['pic_mgr'], 6);

		$sort_order_matched = $superCage->post->getMatched('sort_order', '/^[0-9@,]+$/');
		$orig_sort_order = parse_pic_list($sort_order_matched[0]);
		foreach ($orig_sort_order as $picture){
			$op = parse_pic_orig_sort_order($picture);
			if (count ($op) == 2){
				/*$query = "UPDATE $CONFIG[TABLE_PICTURES] SET position='{$op['pos']}' WHERE pid='{$op['aid']}' $restrict LIMIT 1";
				cpg_db_query($query);	*/
				#############################         DB      ############################
				$cpgdb->query($cpg_db_delete_php['picmgr_set_op_pos'], $op['pos'], $op['aid'], $restrict);
				#################################################################
			} else {
				cpg_die (sprintf(CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], $sort_order_matched[0]), __FILE__, __LINE__);
			}
		}

      //Using getRaw(). The data is sanitized in foreach
      $to_delete = parse_pic_list($superCage->post->getRaw('delete_picture'));
      $loopCounter = 0;
      foreach ($to_delete as $picture_id){
         if ($loopCounter/2 == floor($loopCounter/2)) {
        	$tablecellstyle = 'tableb';
         } else {
        	$tablecellstyle = 'tableb tableb_alternate';
         }
         delete_picture((int)$picture_id, $tablecellstyle);
         $loopCounter++;
      }

      if ($superCage->post->keyExists('to')) {
          //Using getRaw(). The data is sanitized in parse_pic_select_option() function
          $to_arr = $superCage->post->getEscaped('to');
          foreach ($to_arr as $option_value){
             $op = parse_pic_select_option(stripslashes($option_value));
             switch ($op['action']){
                case '0':
	               break;
	            case '1':
                   if(GALLERY_ADMIN_MODE){
                      $category = $superCage->post->getInt('cat');
                   } else {
                      $category = FIRST_USER_CAT + USER_ID;
                   }
                   echo "<tr><td colspan=\"6\" class=\"tableb\">".sprintf($lang_delete_php['create_alb'], $cpgdb->removeQuotes($op['album_nm']))."</td></tr>\n";
                   /*$query = "INSERT INTO {$CONFIG['TABLE_ALBUMS']} (category, title, uploads, pos, description) VALUES ('$category', '".addslashes($op['album_nm'])."', 'NO',  '{$op['album_sort']}', '')";
                   cpg_db_query($query); */
					#####################        DB      #####################
					$cpgdb->query($cpg_db_delete_php['picmgr_add_album'], $category, 
								$cpgdb->removeQuotes($cpgdb->escape($op['album_nm'])), $op['album_sort']);
					##################################################
                   break;
	            case '2':
                   echo "<tr><td colspan=\"6\" class=\"tableb\">".sprintf($lang_delete_php['update_pic'], $op['picture_no'], $op['picture_nm'], $op['picture_sort'])."</td></tr>\n";
                   /*$query = "UPDATE $CONFIG[TABLE_PICTURES] SET position='{$op['picture_sort']}' WHERE pid='{$op['picture_no']}' $restrict LIMIT 1";
                   cpg_db_query($query); */
					##########################       DB      #########################
					$cpgdb->query($cpg_db_delete_php['picmgr_set_op_pic_sort'], $op['picture_sort'], 
								$op['picture_no'], $restrict);
					##########################################################
                   break;
	            default:
                   cpg_die (CRITICAL_ERROR, $lang_delete_php['err_invalid_data'], __FILE__, __LINE__);
             }
          }
      }

      echo "<tr><td colspan=\"6\" class=\"tablef\" align=\"center\">\n";
      echo "<div class=\"admin_menu\"><a href=\"index.php\">".$lang_common['continue']."</a></div>\n";
      echo "</td></tr>";
      endtable();
      pagefooter();
      ob_end_flush();
      break;

	// Comment
	case 'comment':
		$msg_id = $superCage->get->getInt('msg_id');

		/*$result = cpg_db_query("SELECT pid FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'");
		if (!mysql_num_rows($result)) {
			cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
		} else {
			$comment_data = mysql_fetch_array($result);
		}

		if (GALLERY_ADMIN_MODE) {
			$query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id'";
		} elseif (USER_ID) {
			$query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id' AND author_id ='" . USER_ID . "' LIMIT 1";
		} else {
			$query = "DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE msg_id='$msg_id' AND author_md5_id ='{$USER['ID']}' AND author_id = '0' LIMIT 1";
		}
		$result = cpg_db_query($query);	*/
		###################################            DB        ####################################
		$cpgdb->query($cpg_db_delete_php['comment_get_pic_id'], $msg_id);
		$rowset = $cpgdb->fetchRowSet();
		if (!count($rowset)) {
			cpg_die(CRITICAL_ERROR, $lang_errors['non_exist_comment'], __FILE__, __LINE__);
		} else {
			$comment_data = $rowset[0];
		}
		
		if (GALLERY_ADMIN_MODE) {
			$cpgdb->query($cpg_db_delete_php['coment_del_gal_admin'], $msg_id);
		} elseif (USER_ID) {
				$cpgdb->query($cpg_db_delete_php['comment_del_user_admin'], $msg_id, USER_ID);
		} else {
			$cpgdb->query($cpg_db_delete_php['comment_del_not_admin'], $msg_id, $USER['ID']);
		}
		#################################################################################

		$header_location = (@preg_match('/Microsoft|WebSTAR|Xitami/', getenv('SERVER_SOFTWARE'))) ? 'Refresh: 0; URL=' : 'Location: ';
		$redirect = "displayimage.php?pid=" . $comment_data['pid'];
		header($header_location . $redirect);
		pageheader($lang_common['information'], "<META http-equiv=\"refresh\" content=\"1;url=$redirect\">");
		msg_box($lang_common['information'], $lang_delete_php['comment_deleted'], $lang_common['continue'], $redirect);
		pagefooter();
		ob_end_flush();
		break;

	// Picture

	case 'picture':
		$pid = $superCage->get->getInt('id');

        pageheader($lang_delete_php['del_pic']);
        starttable("100%", $lang_delete_php['del_pic'], 7);
        output_table_header();
        $tablecellstyle = 'tableb';
        $aid = delete_picture($pid, $tablecellstyle);
        echo "<tr><td colspan=\"7\" class=\"tablef\" align=\"center\">\n";
        echo "<div class=\"admin_menu\"><a href=\"thumbnails.php?album=$aid\">".$lang_common['continue']."</a></div>\n";
        echo "</td></tr>\n";
        endtable();
        pagefooter();
        ob_end_flush();
        break;

	// Album

	case 'album':
		if (!(GALLERY_ADMIN_MODE || USER_ADMIN_MODE)) {
			cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
		}

		$aid = $superCage->get->getInt('id');

		pageheader($lang_delete_php['del_alb']);
		starttable("100%", $lang_delete_php['del_alb'], 7);

        print delete_album($aid);

        echo "<tr><td colspan=\"7\" class=\"tablef\" align=\"center\">\n";
        echo "<div class=\"admin_menu\"><a href=\"index.php\">".$lang_common['continue']."</a></div>\n";
        echo "</td></tr>";
        endtable();
        pagefooter();
        ob_end_flush();
        break;

	// User

	case 'user':
		$matches = $superCage->get->getMatched('id', '/^[u0-9,]+$/');
		$user_id = str_replace('u', '', $matches[0]);
		$users_scheduled_for_action = explode(',', $user_id);
		//if (!(GALLERY_ADMIN_MODE) || ($user_id == USER_ID) || UDB_INTEGRATION != 'coppermine') cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
		if (UDB_INTEGRATION != 'coppermine') {
			cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
		}

		if (GALLERY_ADMIN_MODE) { // admin mode start
			if ($user_id == USER_ID) { // make sure that the admin doesn't delete his own account
				cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
			}

			if ($superCage->get->keyExists('action') && ($matches = $superCage->get->getMatched('action', '/^[a-z_]+$/'))) {
				$user_action = $matches[0];
			} elseif ($superCage->post->keyExists('action') && ($matches = $superCage->post->getMatched('action', '/^[a-z_]+$/'))) {
				$user_action = $matches[0];
			} else {
                $user_action = '';
			}
			switch ($user_action) {
					case 'delete':
						pageheader($lang_delete_php['del_user']);
						starttable("100%", $lang_delete_php['del_user'], 6);
						foreach($users_scheduled_for_action as $key) {
							/*$result = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '".(int)$key."'");
							print '<tr>';
							if (!mysql_num_rows($result)) {
								print '<td class="tableb">'.$lang_delete_php['err_unknown_user'].'</td>';
							} else {
								$user_data = mysql_fetch_array($result);	*/
							##############################          DB       #############################
							$result = $cpgdb->query($cpg_db_delete_php['user_get_name'], (int)$key);
							$rowset = $cpgdb->fetchRowSet();
							print'<tr>';
							if (!count($rowset)) {
								print '<td class="tableb">'.$lang_delete_php['err_unknown_user'].'</td>';
							} else {
								$user_data = $rowset[0];
							####################################################################
								print '<td class="tableb">';
								// First delete the albums
								/*$result2 = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'");
								$user_alb_counter = 0;
								while ($album = mysql_fetch_array($result2)) */
								#########################          DB       #########################
								$result2 = $cpgdb->query($cpg_db_delete_php['user_get_alb_id'], (FIRST_USER_CAT + $key));
								$user_alb_counter = 0;
								while ($album = $cpgdb->fetchRow())
								###########################################################
								{
									starttable('100%');
									print delete_album($album['aid']);
									endtable();
									$user_alb_counter++;
								} // while
								//mysql_free_result($result2);	###########	cpgdb_AL
								$cpgdb->free();
								starttable('100%');
								print '<tr>';
								// Then anonymize comments posted by the user
								/*$comment_result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'");
								$comment_counter = mysql_fetch_array($comment_result);
								mysql_free_result($comment_result);	*/
								##########################          DB        ###########################
								$comment_result = $cpgdb->query($cpg_db_delete_php['user_count_comments'], (int)$key);
								$comment_counter = $cpgdb->fetchRow();
								$cpgdb->free();
								##############################################################
								print '<td class="tableb" width="25%">';

								if ($superCage->get->keyExists('delete_comments')) {
									$delete_comments_choice = $superCage->get->getAlpha('delete_comments');
								} elseif ($superCage->post->keyExists('delete_comments')) {
									$delete_comments_choice = $superCage->post->getAlpha('delete_comments');
								}

                                /*if ($delete_comments_choice == 'yes') {
                                    cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'");
                                    if ($comment_counter[0] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_comments'], $comment_counter[0]);
                                } else {
                                    cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '$key'");
                                    if ($comment_counter[0] > 0) {	
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_comments'], $comment_counter[0]);
                                } */
                                #########################            DB       #########################
                                if ($delete_comments_choice == 'yes') {
                                    $cpgdb->query($cpg_db_delete_php['user_del_comments'], (int)$key);
                                    if ($comment_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_comments'], $comment_counter['count']);
                                } else {
                                    $cpgdb->query($cpg_db_delete_php['user_update_comments'], (int)$key);
                                    if ($comment_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_comments'], $comment_counter['count']);
                                }
                                ############################################################
                                print '</td>';

                                // Do the same for pictures uploaded in public albums
                                /*$publ_upload_result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '$key'");
                                $publ_upload_counter = mysql_fetch_array($publ_upload_result);
                                mysql_free_result($publ_upload_result); */
                                #############################           DB         #############################
                                $publ_upload_result = $cpgdb->query($cpg_db_delete_php['user_count_pictures'], (int)$key);
                                $publ_upload_counter = $cpgdb->fetchRow();
                                $cpgdb->free();
                                ####################################################################
                                print '<td class="tableb" width="25%">';

                                if ($superCage->get->keyExists('delete_files')) {
                                    $delete_files_choice = $superCage->get->getAlpha('delete_files');
                                } elseif ($superCage->post->keyExists('delete_files')) {
                                    $delete_files_choice = $superCage->post->getAlpha('delete_files');
                                }

                                /*if ($delete_files_choice == 'yes') {
                                    cpg_db_query("DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE  owner_id = '$key'");
                                    if ($publ_upload_counter[0] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_uploads'], $publ_upload_counter[0]);
                                } else {
                                    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '$key'");
                                    if ($publ_upload_counter[0] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_uploads'], $publ_upload_counter[0]);
                                } */
                                ################################           DB       ###############################
                                if ($delete_files_choice == 'yes') {
                                    $cpgdb->query($cpg_db_delete_php['user_del_pictures'], $key);
                                    if ($publ_upload_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_uploads'], $publ_upload_counter['count']);
                                } else {
                                    $cpgdb->query($cpg_db_delete_php['user_update_pictures'], $key);
                                    if ($publ_upload_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_uploads'], $publ_upload_counter['count']);
                                }
                                #########################################################################
                                print '</td>';
                                // Finally delete the user
                                // cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                                #########################         DB       ########################
                                $cpgdb->query($cpg_db_delete_php['user_del_users'], (int)$key);
                                ##########################################################
                                print '<td class="tableb" width="50%">';
                                print '<strong>';
                                print cpg_fetch_icon('ok', 0).' ';
                                printf($lang_delete_php['user_deleted'],'&laquo;'.$user_data['user_name'].'&raquo;');
                                print '</strong>';
                                print '</td>';
                                print '</tr>';
                                endtable();
                                print '</td>';
                            }
                            // mysql_free_result($result);
                            $cpgdb->free();    ########    cpgdb_AL
                            print '</tr>';
                        }
                        echo "<tr><td colspan=\"6\" class=\"tablef\" align=\"center\">\n";
                        echo "<a href=\"usermgr.php\"  class=\"admin_menu\">".$lang_common['continue']."</a>\n";
                        echo "</td></tr>";
                        endtable();
                        pagefooter();
                        break; // end case "delete"
                    case 'activate':
                        pageheader($lang_delete_php['activate_user']);
                        starttable("100%", $lang_delete_php['activate_user'], 2);
                        print "<tr>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['username']}</strong></td>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['status']}</strong></td>\n";
                        print "</tr>\n";

                        foreach($users_scheduled_for_action as $key) {
                            /* $result = cpg_db_query("SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                            if (!mysql_num_rows($result)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = mysql_fetch_array($result); */
                            ############################          DB         #############################
                            $result = $cpgdb->query($cpg_db_delete_php['user_get_name_active'], (int)$key);
                            $rowset = $cpgdb->fetchRowSet();
                            if (!count($rowset)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = $rowset[0];
                            ###################################################################
                                print '<tr>';
                                print '<td class="tableb"><strong>';
                                print $user_data['user_name'];
                                print '</strong></td>';
                                print '<td class="tableb">';
                                if ($user_data['user_active'] == 'YES') {
                                    // user is already active
                                    print $lang_delete_php['user_already_active'];
                                } else {
                                    // activate this user
                                    // cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'YES' WHERE  user_id = '$key'");
                                    #######################           DB        #######################
                                    $cpgdb->query($cpg_db_delete_php['user_set_active_yes'], (int)$key);
                                    ########################################################
                                    print $lang_delete_php['activated'];
                                }
                                print '</strong></td>';
                            }
                            // mysql_free_result($result);
                            $cpgdb->free();    ########    cpgdb_AL
                        } // foreach --- end
                        echo "<tr><td colspan=\"2\" class=\"tablef\" align=\"center\">\n";
                        echo "<a href=\"usermgr.php\" class=\"admin_menu\">".$lang_common['continue']."</a>\n";
                        echo "</td></tr>";
                        endtable();
                        pagefooter();
                        break; // end case "activate"
                    case 'deactivate':
                        pageheader($lang_delete_php['deactivate_user']);
                        starttable("100%", $lang_delete_php['deactivate_user'], 2);
                        print "<tr>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['username']}</strong></td>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['status']}</strong></td>\n";
                        print "</tr>\n";

                        foreach($users_scheduled_for_action as $key) {
                            /* $result = cpg_db_query("SELECT user_name,user_active FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                            if (!mysql_num_rows($result)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = mysql_fetch_array($result); */
                            #############################        DB           ###############################
                            $result = $cpgdb->query($cpg_db_delete_php['user_get_name_active'], (int)$key);
                            $rowset = $cpgdb->fetchRowSet();
                            if (!count($rowset)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = $rowset[0];
                            ######################################################################
                                print '<tr>';
                                print '<td class="tableb"><strong>';
                                print $user_data['user_name'];
                                print '</strong></td>';
                                print '<td class="tableb">';
                                if ($user_data['user_active'] == 'NO') {
                                    // user is already inactive
                                    print $lang_delete_php['user_already_inactive'];
                                } else {
                                    // deactivate this user
                                    // cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_active = 'NO' WHERE  user_id = '$key'");
                                    ##########################         DB        ############################
                                    $cpgdb->query($cpg_db_delete_php['user_set_active_no'], (int)$key);
                                    ###############################################################
                                    print $lang_delete_php['deactivated'];
                                }
                                print '</strong></td>';
                            }
                            // mysql_free_result($result);
                            $cpgdb->free();    ########    cpgdb_AL
                        } // foreach --- end
                        echo "<tr><td colspan=\"2\" class=\"tablef\" align=\"center\">\n";
                        echo "<a href=\"usermgr.php\" class=\"admin_menu\">".$lang_common['continue']."</a>\n";
                        echo "</td></tr>";
                        endtable();
                        pagefooter();
                        break; // end case "deactivate"
                    case 'reset_password':
                        pageheader($lang_delete_php['reset_password']);
                        starttable("100%", $lang_delete_php['reset_password'], 2);
                        print "<tr>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['username']}</strong></td>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['status']}</strong></td>\n";
                        print "</tr>\n";

                        foreach($users_scheduled_for_action as $key) {
                            /*$result = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                            if (!mysql_num_rows($result)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = mysql_fetch_array($result); */
                            #################################            DB         ###############################
                            $result = $cpgdb->query($cpg_db_delete_php['user_get_name'], (int)$key);
                            $rowset = $cpgdb->fetchRowSet();
                            if (!count($rowset)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = $rowset[0];
                            ###########################################################################
                                print '<tr>';
                                print '<td class="tableb"><strong>';
                                print $user_data['user_name'];
                                print '</strong></td>';
                                print '<td class="tableb">';
                                // set this user's password
                                $new_password = md5($superCage->get->getEscaped('new_password'));
                                // cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_password = '$new_password' WHERE  user_id = '$key'");
                                ############################             DB          ##############################
                                $cpgdb->query($cpg_db_delete_php['user_set_password'], $new_password, (int)$key);
                                #####################################################################
                                printf($lang_delete_php['password_reset'], '&laquo;'.$superCage->get->getEscaped('new_password').'&raquo;');
                                print '</strong></td>';
                            }
                            // mysql_free_result($result);
                            $cpgdb->free();    ########    cpgdb_AL
                        } // foreach --- end
                        echo "<tr><td colspan=\"2\" class=\"tablef\" align=\"center\">\n";
                        echo "<a href=\"usermgr.php\" class=\"admin_menu\">".$lang_common['continue']."</a>\n";
                        echo "</td></tr>";
                        endtable();
                        pagefooter();
                        break; // end case "reset_password"
                    case 'change_group':
                        pageheader($lang_delete_php['change_group']);
                        starttable("100%", $lang_delete_php['change_group'], 2);
                        print "<tr>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['username']}</strong></td>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['status']}</strong></td>\n";
                        print "</tr>\n";
                        /* $result_group = cpg_db_query("SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']}");
                        if (!mysql_num_rows($result_group)) {
                            cpg_die(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
                        }
                        while ($row = mysql_fetch_array($result_group)) {
                            $group_label[$row['group_id']] = $row['group_name'];
                        } // while */
                        ################################             DB         ###############################
                        $result_group = $cpgdb->query($cpg_db_delete_php['user_get_usergrp']);
                        $rowset = $cpgdb->fetchRow();
                        if (!count($rowset)) {
                            cpg_die(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
                        }
                        foreach ($rowset as $row) {
                            $group_label[$row['group_id']] = $row['group_name'];
                        }
                        ##########################################################################
                        foreach($users_scheduled_for_action as $key) {
                            /* $result = cpg_db_query("SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                            if (!mysql_num_rows($result)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = mysql_fetch_array($result); */
                            #################################          DB      ################################
                            $result = $cpgdb->query($cpg_db_delete_php['user_get_name_group'], (int)$key);
                            $rowset = $cpgdb->fetchRowSet();
                            if (!count($rowset)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = $rowset[0];
                            ##########################################################################
                                print '<tr>';
                                print '<td class="tableb"><strong>';
                                print $user_data['user_name'];
                                print '</strong></td>';
                                print '<td class="tableb">';
                                // set this user's group
                                $group = $superCage->get->getInt('group');
                                // cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group = '$group' WHERE  user_id = '$key'");
                                ###############################          DB        ##############################
                                $cpgdb->query($cpg_db_delete_php['user_set_usergrp'], $group, (int)$key);
                                #######################################################################
                                printf($lang_delete_php['change_group_to_group'], '&laquo;'.$group_label[$user_data['user_group']].'&raquo;', '&laquo;'.$group_label[$group].'&raquo;');
                                print '</strong></td>';
                            }
                            // mysql_free_result($result);
                            $cpgdb->free();    #########    cpgdb_AL
                        } // foreach --- end
                        echo "<tr><td colspan=\"2\" class=\"tablef\" align=\"center\">\n";
                        echo "<a href=\"usermgr.php\" class=\"admin_menu\">".$lang_common['continue']."</a>\n";
                        echo "</td></tr>";
                        endtable();
                        pagefooter();
                        break; // end case "change_group"
                    case 'add_group':
                        pageheader($lang_delete_php['add_group']);
                        starttable("100%", $lang_delete_php['add_group'], 2);
                        print "<tr>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['username']}</strong></td>\n";
                        print "<td class=\"tableh2\"><strong>{$lang_delete_php['status']}</strong></td>\n";
                        print "</tr>\n";
                        /* $result_group = cpg_db_query("SELECT group_id,group_name FROM {$CONFIG['TABLE_USERGROUPS']} ORDER BY group_name");
                        if (!mysql_num_rows($result_group)) {
                            cpg_die(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
                        }
                        while ($row = mysql_fetch_array($result_group)) {
                            $group_label[$row['group_id']] = $row['group_name'];
                        } // while */
                        ###############################          DB       #############################
                        $result_group = $cpgdb->query($cpg_db_delete_php['user_get_usergrp_order']);
                        $rowset = $cpgdb->fetchRowSet();
                        if (!count($rowset)) {
                            cpg_die(CRITICAL_ERROR, $lang_delete_php['err_empty_groups'], __FILE__, __LINE__);
                        }
                        foreach ($rowset as $row) {
                            $group_label[$row['group_id']] = $row['group_name'];
                        }// foreach
                        #####################################################################
                        foreach($users_scheduled_for_action as $key) {
                            /* $result = cpg_db_query("SELECT user_name,user_group FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                            if (!mysql_num_rows($result)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = mysql_fetch_array($result); */
                            ##############################       DB     ##############################
                            $result = $cpgdb->query($cpg_db_delete_php['user_get_name_group'], (int)$key);
                            $rowset = $cpgdb->fetchRowSet();
                            if (!count($rowset)) {
                                print '<tr><td class="tableb" colspan="2">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_Data = $rowset[0];
                            ###################################################################
                                print '<tr>';
                                print '<td class="tableb"><strong>';
                                print $user_data['user_name'];
                                print '</strong></td>';
                                print '<td class="tableb">';
                                // check group membership of this particular user
                                /* $sql = "SELECT * FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'";
                                $result_user = cpg_db_query($sql);
                                if (!mysql_num_rows($result)) { print 'unknown user';}
                                $user_data = mysql_fetch_array($result_user);
                                mysql_free_result($result_user); */
                                ##########################           DB        #########################
                                $result_user = $cpgdb->query($cpg_db_delete_php['user_get_all'], (int)$key);
                                $user_rowset = $cpgdb->fetchRowSet();
                                if (!count($user_rowset)) { print 'unknown user';}
                                $user_data = $user_rowset[0];
                                $cpgdb->free();
                                #############################################################
                                $user_group = explode(',', $user_data['user_group_list']);
                                natcasesort($user_group);
                                $new_group = $superCage->get->getInt('group');
                                if (!in_array($new_group, $user_group)){
                                    $user_group[] =  $new_group;
                                }
                                $group_output = '';
                                $new_group_query = '';
                                foreach($user_group as $group) {
                                    if ($group !='') {
                                    $group_output .= '&laquo;'.$group_label[$group].'&raquo;, ';
                                    $new_group_query .= $group.',';
                                    }
                                }
                                $group_output = trim(trim($group_output), ',');
                                $new_group_query = trim($new_group_query, ',');
                                // set this user's group
                                // cpg_db_query("UPDATE {$CONFIG['TABLE_USERS']} SET user_group_list = '$new_group_query' WHERE  user_id = '$key'");
                                ##########################           DB          ###########################
                                $cpgdb->query($cpg_db_delete_php['user_set_usergrp_list'], $new_group_query, (int)$key);
                                ################################################################
                                printf($lang_delete_php['add_group_to_group'], '&laquo;'.$user_data['user_name'].'&raquo;', '&laquo;'.$group_label[$new_group].'&raquo;', '&laquo;'.$group_label[$user_data['user_group']].'&raquo;', $group_output);
                                print '</strong></td>';
                            }
                            // mysql_free_result($result);
                            $cpgdb->free();    ######    cpgdbAL
                        } // foreach --- end
                        echo "<tr><td colspan=\"2\" class=\"tablef\" align=\"center\">\n";
                        echo "<a href=\"usermgr.php\" class=\"admin_menu\">".$lang_common['continue']."</a>\n";
                        echo "</td></tr>";
                        endtable();
                        pagefooter();
                        break; // end case "add_group"
                    default:
                        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
                        break;
            }
        } else { // admin mode end, user mode start
            if ($superCage->get->keyExists('action') && ($matches = $superCage->get->getMatched('action', '/^[a-z_]+$/'))) {
                $user_action = $matches[0];
            } elseif ($superCage->post->keyExists('action') && ($matches = $superCage->post->getMatched('action', '/^[a-z_]+$/'))) {
                $user_action = $matches[0];
            } else {
                $user_action = '';
            }
            switch ($user_action) {
                    case 'delete':
                        pageheader($lang_delete_php['del_user']);
                        starttable("100%", $lang_delete_php['del_user'], 6);
                        foreach($users_scheduled_for_action as $key) {
                            if ($key != USER_ID) { // a user can only delete his own account
                                cpg_die(ERROR, $lang_errors['perm_denied'], __FILE__, __LINE__);
                            }
                            /* $result = cpg_db_query("SELECT user_name FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                            print '<tr>';
                            if (!mysql_num_rows($result)) {
                                print '<td class="tableb">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = mysql_fetch_array($result); */
                            ###############################           DB         #################################
                            $result = $cpgdb->query($cpg_db_delete_php['user_get_name'], (int)$key);
                            $rowset = $cpgdb->fetchRowSet();
                            print '<tr>';
                            if (!count($rowset)) {
                                print '<td class="tableb">'.$lang_delete_php['err_unknown_user'].'</td>';
                            } else {
                                $user_data = $rowset[0];
                            ##########################################################################
                                print '<td class="tableb">';
                                // First delete the albums
                                /* $result2 = cpg_db_query("SELECT aid FROM {$CONFIG['TABLE_ALBUMS']} WHERE category = '" . (FIRST_USER_CAT + $key) . "'");
                                $user_alb_counter = 0;
                                while ($album = mysql_fetch_array($result2)) { */
                                ###############################          DB       ##############################
                                $result2 = $cpgdb->query($cpg_db_delete_php['user_get_alb_id'], (FIRST_USER_CAT + $key) );
                                $user_alb_counter = 0;
                                while ($album = $cpgdb->fetchRow()) {
                                ######################################################################
                                    starttable('100%');
                                    print delete_album($album['aid']);
                                    endtable();
                                    $user_alb_counter++;
                                } // while
                                // mysql_free_result($result2);
                                $cpgdb->free();    #########    cpgdb_AL
                                starttable('100%');
                                print '<tr>';
                                // Then anonymize comments posted by the user
                                /* $comment_result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'");
                                $comment_counter = mysql_fetch_array($comment_result);
                                mysql_free_result($comment_result); */
                                ###########################            DB        ###########################
                                $comment_result = $cpgdb->query($cpg_db_delete_php['user_count_comments'], (int)$key);
                                $comment_counter = $cpgdb->fetchRow();
                                $cpgdb->free();
                                ################################################################
                                print '<td class="tableb" width="25%">';

                                if ($superCage->get->keyExists('delete_comments')) {
                                    $delete_comments_choice = $superCage->get->getAlpha('delete_comments');
                                } elseif ($superCage->post->keyExists('delete_comments')) {
                                    $delete_comments_choice = $superCage->post->getAlpha('delete_comments');
                                }

                                /*if ($delete_comments_choice == 'yes') {
                                    cpg_db_query("DELETE FROM {$CONFIG['TABLE_COMMENTS']} WHERE author_id = '$key'");
                                    if ($comment_counter[0] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_comments'], $comment_counter[0]);
                                } else {
                                    cpg_db_query("UPDATE {$CONFIG['TABLE_COMMENTS']} SET  author_id = '0' WHERE  author_id = '$key'");
                                    if ($comment_counter[0] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_comments'], $comment_counter[0]);
                                } */
                                ##############################             DB          ############################
                                if ($delete_comments_choice == 'yes') {
                                    $cpgdb->query($cpg_db_delete_php['user_del_comments'], (int)$key);
                                    if ($comment_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_comments'], $comment_counter['count']);
                                } else {
                                    $cpgdb->query($cpg_db_delete_php['user_update_comments'], (int)$key);
                                    if ($comment_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_comments'], $comment_counter['count']);
                                }
                                ######################################################################
                                print '</td>';
                                // Do the same for pictures uploaded in public albums
                                /*$publ_upload_result = cpg_db_query("SELECT COUNT(*) FROM {$CONFIG['TABLE_PICTURES']} WHERE owner_id = '$key'");
                                $publ_upload_counter = mysql_fetch_array($publ_upload_result);
                                mysql_free_result($publ_upload_result);	*/
                                ###########################           DB        ###########################
                                $publ_upload_result = $cpgdb->query($cpg_db_delete_php['user_count_pictures'], (int)$key);
                                $publ_upload_counter = $cpgdb->fetchRow();
                                $cpgdb->free();
                                ################################################################
                                print '<td class="tableb" width="25%">';

                                if ($superCage->get->keyExists('delete_files')) {
                                    $delete_files_choice = $superCage->get->getAlpha('delete_files');
                                } elseif ($superCage->post->keyExists('delete_files')) {
                                    $delete_files_choice = $superCage->post->getAlpha('delete_files');
                                }

                                /* if ($delete_files_choice == 'yes') {
                                    cpg_db_query("DELETE FROM {$CONFIG['TABLE_PICTURES']} WHERE  owner_id = '$key'");
                                    if ($publ_upload_counter[0] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_uploads'], $publ_upload_counter[0]);
                                } else {
                                    cpg_db_query("UPDATE {$CONFIG['TABLE_PICTURES']} SET  owner_id = '0' WHERE  owner_id = '$key'");
                                    if ($publ_upload_counter[0] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_uploads'], $publ_upload_counter[0]);
                                } */
                                #############################             DB           ##########################
                                if ($delete_files_choice == 'yes') {
                                    $cpgdb->query($cpg_db_delete_php['user_del_pictures'], (int)$key);
                                    if ($publ_upload_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['deleted_uploads'], $publ_upload_counter['count']);
                                } else {
                                    $cpgdb->query($cpg_db_delete_php['user_update_pictures'], (int)$key);
                                    if ($publ_upload_counter['count'] > 0) {
                                        print cpg_fetch_icon('ok', 0).' ';
                                    }
                                    printf($lang_delete_php['anonymized_uploads'], $publ_upload_counter['count']);
                                }
                                ###################################################################
                                print '</td>';
                                // Finally delete the user
                                // cpg_db_query("DELETE FROM {$CONFIG['TABLE_USERS']} WHERE user_id = '$key'");
                                ###########################        DB      ##########################
                                $cpgdb->query($cpg_db_delete_php['user_del_users'], (int)$key);
                                #############################################################
                                print '<td class="tableb" width="50%">';
                                print '<strong>';
                                print cpg_fetch_icon('ok', 0).' ';
                                printf($lang_delete_php['user_deleted'],'&laquo;'.$user_data['user_name'].'&raquo;');
                                print '</strong>';
                                print '</td>';
                                print '</tr>';
                                endtable();
                                print '</td>';
                            }
                            // mysql_free_result($result);
                            $cpgdb->free();     ######    cpgdbAL
                            print '</tr>';
                        }
                        echo "<tr><td colspan=\"6\" class=\"tablef\" align=\"center\">\n";
                        echo "<a href=\"index.php\"  class=\"admin_menu\">".$lang_common['continue']."</a>\n";
                        echo "</td></tr>";
                        endtable();
                        pagefooter();
                        break; // end case "delete"
                    default:
                      cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
                      break;
            }
        } // user mode end

        ob_end_flush();
        break;

    // Unknow command
    default:
        cpg_die(CRITICAL_ERROR, $lang_errors['param_missing'], __FILE__, __LINE__);
}

?>