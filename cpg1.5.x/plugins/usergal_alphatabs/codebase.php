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
  Coppermine version: 1.5.3
  $HeadURL$
  $Revision$
  $LastChangedBy$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');
define('CORE_PLUGIN', true);
$superCage = Inspekt::makeSuperCage();

if ($superCage->get->keyExists('cat') && $superCage->get->getInt('cat') == USER_GAL_CAT){
    
    if ($superCage->get->keyExists('letter')) {
        $thisplugin->add_action('page_start','bridge_extender');
    }

    function makejumpbox(){
        global $lang_plugin_php;
        starttable('100%', $lang_plugin_php['usergal_alphatabs_jump_by_username'], 26);
        echo '<tr>';
        foreach (range('A', 'Z') as $letter){
            echo '<td width="'.(100/26).'%" align="center"><a href="index.php?cat=1&letter='.$letter.'"> '.$letter.' </a></td>';
        }
        echo '</tr>';
        endtable();
    }
    
    function theme_display_thumbnails(&$thumb_list, $nbThumb, $album_name, $aid, $cat, $page, $total_pages, $sort_options, $display_tabs, $mode = 'thumb')
    {
        global $CONFIG;
        global $template_thumb_view_title_row,$template_fav_thumb_view_title_row, $lang_thumb_view, $template_tab_display, $template_thumbnail_view, $lang_album_list;
        $superCage = Inspekt::makeSuperCage();
    
        static $header = '';
        static $thumb_cell = '';
        static $empty_cell = '';
        static $row_separator = '';
        static $footer = '';
        static $tabs = '';
        static $spacer = '';
    
        if ($header == '') {
            $thumb_cell = template_extract_block($template_thumbnail_view, 'thumb_cell');
            $tabs = template_extract_block($template_thumbnail_view, 'tabs');
            $header = template_extract_block($template_thumbnail_view, 'header');
            $empty_cell = template_extract_block($template_thumbnail_view, 'empty_cell');
            $row_separator = template_extract_block($template_thumbnail_view, 'row_separator');
            $footer = template_extract_block($template_thumbnail_view, 'footer');
            $spacer = template_extract_block($template_thumbnail_view, 'spacer');
        }
    
        $cat_link = is_numeric($aid) ? '' : '&amp;cat=' . $cat;
    
        $theme_thumb_tab_tmpl = $template_tab_display;
    
        if ($mode == 'thumb') {
            $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $aid == 'lastalb' ? $lang_album_list['album_on_page'] : $lang_thumb_view['pic_on_page']));
            $theme_thumb_tab_tmpl['page_link'] = strtr($theme_thumb_tab_tmpl['page_link'], array('{LINK}' => 'thumbnails.php?album=' . $aid . $cat_link . '&amp;page=%d'));
        } else {
            // start of modified section
            $pl =  $superCage->get->getAlpha('letter') ? ('&amp;letter=' . $superCage->get->getAlpha('letter')) : '';
            $theme_thumb_tab_tmpl['left_text'] = strtr($theme_thumb_tab_tmpl['left_text'], array('{LEFT_TEXT}' => $lang_thumb_view['user_on_page']));
            $theme_thumb_tab_tmpl['page_link'] = strtr($theme_thumb_tab_tmpl['page_link'], array('{LINK}' => 'index.php?cat=' . $cat . '&amp;page=%d' . $pl));
            // end of modified section
        }
    
        $thumbcols = $CONFIG['thumbcols'];
        $cell_width = ceil(100 / $CONFIG['thumbcols']) . '%';
    
        $tabs_html = $display_tabs ? create_tabs($nbThumb, $page, $total_pages, $theme_thumb_tab_tmpl) : '';
        // The sort order options are not available for meta albums
        if ($sort_options) {
            $param = array('{ALBUM_NAME}' => $album_name,
                '{AID}' => $aid,
                '{PAGE}' => $page,
                '{NAME}' => $lang_thumb_view['name'],
                '{TITLE}' => $lang_thumb_view['title'],
                '{DATE}' => $lang_thumb_view['date'],
                '{SORT_TA}' => $lang_thumb_view['sort_ta'],
                '{SORT_TD}' => $lang_thumb_view['sort_td'],
                '{SORT_NA}' => $lang_thumb_view['sort_na'],
                '{SORT_ND}' => $lang_thumb_view['sort_nd'],
                '{SORT_DA}' => $lang_thumb_view['sort_da'],
                '{SORT_DD}' => $lang_thumb_view['sort_dd'],
                '{POSITION}' => $lang_thumb_view['position'],
                '{SORT_PA}' => $lang_thumb_view['sort_pa'],
                '{SORT_PD}' => $lang_thumb_view['sort_pd'],
                );
            $title = template_eval($template_thumb_view_title_row, $param);
        } else if ($aid == 'favpics' && $CONFIG['enable_zipdownload'] == 1) { //Lots of stuff can be added here later
           $param = array('{ALBUM_NAME}' => $album_name,
                                 '{DOWNLOAD_ZIP}'=>$lang_thumb_view['download_zip']
                                   );
           $title = template_eval($template_fav_thumb_view_title_row, $param);
        }else{
            $title = $album_name;
        }
    
    
        if ($mode == 'thumb') {
            starttable('100%', $title, $thumbcols);
        } else {
            makejumpbox();
            starttable('100%');
        }
    
        echo $header;
    
        $i = 0;
        foreach($thumb_list as $thumb) {
            $i++;
            if ($mode == 'thumb') {
                if ($aid == 'lastalb') {
                    $params = array('{CELL_WIDTH}' => $cell_width,
                        '{LINK_TGT}' => "thumbnails.php?album={$thumb['aid']}",
                        '{THUMB}' => $thumb['image'],
                        '{CAPTION}' => $thumb['caption'],
                        '{ADMIN_MENU}' => $thumb['admin_menu']
                        );
                } else {
                    $params = array('{CELL_WIDTH}' => $cell_width,
                        '{LINK_TGT}' => "displayimage.php?album=$aid$cat_link&amp;pos={$thumb['pos']}",
                        '{THUMB}' => $thumb['image'],
                        '{CAPTION}' => $thumb['caption'],
                        '{ADMIN_MENU}' => $thumb['admin_menu']
                        );
                }
            } else {
                $params = array('{CELL_WIDTH}' => $cell_width,
                    '{LINK_TGT}' => "index.php?cat={$thumb['cat']}",
                    '{THUMB}' => $thumb['image'],
                    '{CAPTION}' => $thumb['caption'],
                    '{ADMIN_MENU}' => ''
                    );
            }
            echo template_eval($thumb_cell, $params);
    
            if ((($i % $thumbcols) == 0) && ($i < count($thumb_list))) {
                echo $row_separator;
            }
        }
        for (;($i % $thumbcols); $i++) {
            echo $empty_cell;
        }
        echo $footer;
    
        if ($display_tabs) {
            $params = array('{THUMB_COLS}' => $thumbcols,
                '{TABS}' => $tabs_html
                );
            echo template_eval($tabs, $params);
        }
    
        endtable();
        echo $spacer;
    }

    function bridge_extender()
    {
        global $cpg_udb;
    
        eval('
        
        class new_udb_class extends '. get_class($cpg_udb) . ' {
    
            function new_udb_class() {}
    
    function list_users_query(&$user_count)
    {
        global $CONFIG, $FORBIDDEN_SET, $PAGE;
        $superCage = Inspekt::makeSuperCage();
        $getLetter = $superCage->get->getAlpha("letter");

        $f =& $this->field;

        if ($FORBIDDEN_SET != "") {
            $forbidden_with_icon = "AND ($FORBIDDEN_SET or p.galleryicon=p.pid)";
            $forbidden = "AND ($FORBIDDEN_SET)";
        } else {
            $forbidden_with_icon = "";
            $forbidden = "";
        }

        $users_per_page = $CONFIG["thumbcols"] * $CONFIG["thumbrows"];
        $lower_limit = ($PAGE-1) * $users_per_page;

        if ($this->can_join_tables){
            
            $sql  = "SELECT {$f[\'user_id\']} as user_id,";
            $sql .= "{$f[\'username\']} as user_name,";
            $sql .= "COUNT(DISTINCT a.aid) as alb_count,";
            $sql .= "COUNT(DISTINCT pid) as pic_count,";
            $sql .= "MAX(pid) as thumb_pid, ";
            $sql .= "MAX(galleryicon) as gallery_pid ";
            $sql .= "FROM {$CONFIG[\'TABLE_ALBUMS\']} AS a ";
            $sql .= "INNER JOIN {$this->usertable} as u on u.{$f[\'user_id\']} = a.category - " . FIRST_USER_CAT . " ";
            $sql .= "INNER JOIN {$CONFIG[\'TABLE_PICTURES\']} AS p ON p.aid = a.aid ";
            $sql .= "WHERE ((isnull(approved) or approved=\'YES\') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon ";
            if ($l = $getLetter) $sql .= "AND {$f[\'username\']} LIKE \'$l%\' ";
            $sql .= "GROUP BY category ";
            $sql .= "ORDER BY category ";
            //$sql .= "LIMIT $lower_limit, $users_per_page ";
    
    
            $result = cpg_db_query($sql);
    
            while ($row = mysql_fetch_array($result)) {
                $users[] = $row;
            }
            mysql_free_result($result);
            
        } else {
            // This is the way we collect the data without a direct join to the forums user table

            // This query determines which users we need to collect usernames of - ie just those which have albums with pics
            // and are on the page we are looking at
            $sql  = "SELECT category - 10000 as user_id ";
            $sql .= "FROM {$CONFIG[\'TABLE_ALBUMS\']} AS a ";
            $sql .= "INNER JOIN {$CONFIG[\'TABLE_PICTURES\']} AS p ON p.aid = a.aid ";
            $sql .= "WHERE ((isnull(approved) or approved=\"YES\") ";
            $sql .= "AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ";
            //$sql .= "LIMIT $lower_limit, $users_per_page ";
    
            $result = cpg_db_query($sql);
            
            $user_ids = array();
            
            while ($row = mysql_fetch_array($result)) {
                $user_ids[] = $row["user_id"];
            }
            mysql_free_result($result);
            
            $userlist = implode(",", $user_ids);
            
            // This query collects an array of user_id -> username mappings for the user ids collected above 
            $sql = "SELECT {$this->field[\'user_id\']} AS user_id, {$this->field[\'username\']} AS user_name FROM {$this->usertable} WHERE {$this->field[\'user_id\']} IN ($userlist)";
            if ($l = $getLetter) $sql .= " AND {$f[\'username\']} LIKE \'$l%\' ";           
            $result = cpg_db_query($sql, $this->link_id);
        
            $userdata = array();
            
            while ($row = mysql_fetch_array($result)) {
                $userdata[$row["user_id"]] = $row["user_name"];
            }
            
            mysql_free_result($result);
            
            // This is the main query, similar to the one in the join implementation above but without the join to the user table
            // We use the pics owner_id field as the user_id instead of using category - 10000 as the user_id
            $sql  = "SELECT owner_id as user_id,";
            $sql .= "COUNT(DISTINCT a.aid) as alb_count,";
            $sql .= "COUNT(DISTINCT pid) as pic_count,";
            $sql .= "MAX(pid) as thumb_pid, ";
            $sql .= "MAX(galleryicon) as gallery_pid ";
            $sql .= "FROM {$CONFIG[\'TABLE_ALBUMS\']} AS a ";
            $sql .= "INNER JOIN {$CONFIG[\'TABLE_PICTURES\']} AS p ON p.aid = a.aid ";
            $sql .= "WHERE ((isnull(approved) or approved=\'YES\') AND category > " . FIRST_USER_CAT . ") $forbidden_with_icon GROUP BY category ";
            $sql .= "ORDER BY category ";
    
            $result = cpg_db_query($sql);
            
            // Here we associate the username with the album details.
            while ($row = mysql_fetch_array($result)) {
                if (strtolower($userdata[$row["user_id"]]{0}) == strtolower($getLetter)) $users[] = array_merge($row, array("user_name" => $userdata[$row["user_id"]]));
            }
            
            mysql_free_result($result);
        }
        
        $user_count = count($users);
        $totalPages = ceil($user_count / $users_per_page);
        if ($PAGE > $totalPages) $PAGE = 1;

        return $users;
    }
}
        ');
    
        $vars = get_object_vars($cpg_udb);
        $cpg_udb = new new_udb_class;
        foreach ($vars as $name => $value) $cpg_udb->$name = $value;
    }


}
?>