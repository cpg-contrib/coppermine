<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.4.1                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002-2004 Gregory DEMAR                                     //
// http://www.chezgreg.net/coppermine/                                       //
// ------------------------------------------------------------------------- //
// Updated by the Coppermine Dev Team                                        //
// (http://coppermine.sf.net/team/)                                          //
// see /docs/credits.html for details                                        //
// ------------------------------------------------------------------------- //
// This program is free software; you can redistribute it and/or modify      //
// it under the terms of the GNU General Public License as published by      //
// the Free Software Foundation; either version 2 of the License, or         //
// (at your option) any later version.                                       //
// ------------------------------------------------------------------------- //
// $Id$
// ------------------------------------------------------------------------- //

// HTML template for main menu
$template_main_menu = <<<EOT
                <span class="topmenu">
<!-- BEGIN album_list -->
                        <a href="{ALB_LIST_TGT}" title="{ALB_LIST_TITLE}">{ALB_LIST_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END album_list -->
<!-- BEGIN my_gallery -->
                        <a href="{MY_GAL_TGT}" title="{MY_GAL_TITLE}">{MY_GAL_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END my_gallery -->
<!-- BEGIN allow_memberlist -->
                        <a href="{MEMBERLIST_TGT}" title="{MEMBERLIST_TITLE}">{MEMBERLIST_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END allow_memberlist -->
<!-- BEGIN my_profile -->
                        <a href="{MY_PROF_TGT}" title="{MY_PROF_LNK}">{MY_PROF_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END my_profile -->
<!-- BEGIN faq -->
                        <a href="{FAQ_TGT}" title="{FAQ_TITLE}">{FAQ_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END faq -->
<!-- BEGIN enter_admin_mode -->
                        <a href="{ADM_MODE_TGT}" title="{ADM_MODE_TITLE}">{ADM_MODE_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END enter_admin_mode -->
<!-- BEGIN leave_admin_mode -->
                        <a href="{USR_MODE_TGT}" title="{USR_MODE_TITLE}">{USR_MODE_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END leave_admin_mode -->
<!-- BEGIN upload_pic -->
                        <a href="{UPL_PIC_TGT}" title="{UPL_PIC_TITLE}">{UPL_PIC_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END upload_pic -->
<!-- BEGIN register -->
                        <a href="{REGISTER_TGT}" title="{REGISTER_TITLE}">{REGISTER_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
<!-- END register -->
<!-- BEGIN login -->
                        <a href="{LOGIN_TGT}" title="{LOGIN_LNK}">{LOGIN_LNK}</a>
<!-- END login -->
<!-- BEGIN logout -->
                        <a href="{LOGOUT_TGT}" title="{LOGOUT_LNK}">{LOGOUT_LNK}</a>
<!-- END logout -->
                        <br />
                        <a href="{LASTUP_TGT}" title="{LASTUP_LNK}">{LASTUP_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
                        <a href="{LASTCOM_TGT}" title="{LASTCOM_LNK}">{LASTCOM_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
                        <a href="{TOPN_TGT}" title="{TOPN_LNK}">{TOPN_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
                        <a href="{TOPRATED_TGT}" title="{TOPRATED_LNK}">{TOPRATED_LNK}</a>
                        <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
                                                <a href="{FAV_TGT}" title="{FAV_LNK}">{FAV_LNK}</a>
                                                <img src="themes/water_drop/images/orange_carret.gif" width="8" height="8" border="0" alt="" />
                        <a href="{SEARCH_TGT}" title="{SEARCH_LNK}">{SEARCH_LNK}</a>
                </span>
EOT;
// HTML template for gallery admin menu




?>