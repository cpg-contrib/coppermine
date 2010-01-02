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

define('THEME_HAS_NO_SUB_MENU_BUTTONS', 1);

// HTML template for template sys_menu spacer
$template_sys_menu_spacer = "|";

// HTML template for sub_menu
if ($CONFIG['custom_lnk_url'] != '') {

    $template_sub_menu = <<< EOT
                        <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
<!-- BEGIN custom_link -->
                                                                                <td class="top_menu_left_bttn">
                                                <a href="{CUSTOM_LNK_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{CUSTOM_LNK_TITLE}">{CUSTOM_LNK_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
<!-- END custom_link -->
                                        <td class="top_menu_bttn">
                                                <a href="{ALB_LIST_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="javascript:;" onmouseover="MM_showHideLayers('SYS_MENU','','show')">@</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTUP_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTUP_TITLE}" rel="nofollow">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTCOM_LNK}" rel="nofollow">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPN_LNK}" rel="nofollow">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPRATED_LNK}" rel="nofollow">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{FAV_LNK}" rel="nofollow">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{BROWSEBYDATE_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{BROWSEBYDATE_LNK}" rel="nofollow" class="greybox">{BROWSEBYDATE_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_right_bttn">
                                                <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                </tr>
                        </table>
EOT;



} else {

    $template_sub_menu = <<< EOT
                        <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
<!-- BEGIN custom_link -->
<!-- END custom_link -->
                                        <td class="top_menu_left_bttn">
                                                <a href="{ALB_LIST_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0" alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="javascript:;" onmouseover="MM_showHideLayers('SYS_MENU','','show')">@</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTUP_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTUP_TITLE}" rel="nofollow">{LASTUP_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{LASTCOM_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{LASTCOM_LNK}" rel="nofollow">{LASTCOM_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPN_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPN_LNK}" rel="nofollow">{TOPN_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{TOPRATED_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{TOPRATED_LNK}" rel="nofollow">{TOPRATED_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{FAV_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{FAV_LNK}" rel="nofollow">{FAV_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_bttn">
                                                <a href="{BROWSEBYDATE_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{BROWSEBYDATE_LNK}" rel="nofollow" class="greybox">{BROWSEBYDATE_LNK}</a>
                                        </td>
                                        <td><img src="themes/project_vii/images/menu_spacer.gif" width="2" height="35" border="0"  alt="" /><br /></td>
                                        <td class="top_menu_right_bttn">
                                                <a href="{SEARCH_TGT}" onmouseover="MM_showHideLayers('SYS_MENU','','hide')" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                                        </td>
                                </tr>
                        </table>
EOT;
}

// Function for the JavaScript inside the <head>-section
function theme_javascript_head()
{
    global $CONFIG, $JS, $LINEBREAK;
    $return = '';
    // Check if we have any variables being set using set_js_vars function
    if (isset($JS['vars']) && count($JS['vars'])) {
        // Convert the $JS['vars'] array to json object string
        $json_vars = json_encode($JS['vars']);
        // Output the json object
        $return .= '<script type="text/javascript">var js_vars = ' . $json_vars . ";</script>" . $LINEBREAK;
    }

    // Check if we have any js includes
    if (isset($JS['includes']) && count($JS['includes'])) {
    	// Bring the jquery core library to the very top of the list 
    	if (in_array('js/jquery-1.3.2.js', $JS['includes']) == TRUE) {
    		$key = array_search('js/jquery-1.3.2.js', $JS['includes']);
    		unset($JS['includes'][$key]);
    		array_unshift($JS['includes'], 'js/jquery-1.3.2.js');
    	}
        // Include all the file which were set using js_include() function
        foreach ($JS['includes'] as $js_file) {
            $return .= '<script type="text/javascript" src="' . $js_file . '"></script>' . $LINEBREAK;
        }
    }
    $return .= <<< EOT

<script language="JavaScript" type="text/javascript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
EOT;
    return $return;
}

?>