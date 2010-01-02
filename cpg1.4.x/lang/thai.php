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
  Coppermine version: 1.4.26
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Thai', //cpg1.4
  'lang_name_native' => 'Thai', //cpg1.4
  'lang_country_code' => 'th', //cpg1.4
  'trans_name'=> 'สมศักดิ์ ยอดดำเนิน',
  'trans_email' => 'sanma2001@hotmail.com',
  'trans_website' => 'http://www.somsak2004.com/',
  'trans_date' => '2006-11-95',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('ไบท์', 'กิโลไบท์', 'เมกกะไบท์');

// Day of weeks and months
$lang_day_of_week = array('อาร์', 'จันท', 'อังค', 'พุธ', 'พฤห', 'ศุกร์', 'เสา');
$lang_month = array('มก.', 'กพ.', 'มีค.', 'มย.', 'พค.', 'มิย.', 'กค.', 'สค.', 'กย.', 'ตค.', 'พย.', 'ธค.');

// Some common strings
$lang_yes = 'ใช่';
$lang_no  = 'ไม่';
$lang_back = 'กลับ';
$lang_continue = 'ต่อไป';
$lang_info = 'ข้อมูล';
$lang_error = 'ผิดพลาด';
$lang_check_uncheck_all = 'ตรวจสอบ/ไม่ตรวจสอบ ทั้งหมด'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B  %Y';
$lastcom_date_fmt =  '%d/%m/%y เวลา %H:%M';
$lastup_date_fmt = ' %d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B, %Y ที่ %I:%M %p';
$comment_date_fmt =  '%d %B, %Y ที่ %I:%M %p';
$log_date_fmt = '%d %B %Y ที่ %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'ภาพแบบสุ่ม',
  'lastup' => 'ส่งภาพล่าสุด',
  'lastalb'=> 'ภาพล่าสุดของฉัน',
  'lastcom' => 'วิจารณ์ล่าสุด',
  'topn' => 'เข้าชมมากสุด',
  'toprated' => 'ภาพยอดนิยม',
  'lasthits' => 'เข้าชมล่าสุด',
  'search' => 'ผลการค้นหา',
  'favpics'=> 'ไฟล์ที่ชื่นชอบ',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'คุณไม่ได้รับอนุญาตให้เข้ามายังส่วนนี้.',
  'perm_denied' => 'คุณไม่สามารถกระทำการได้.',
  'param_missing' => 'ชุดคำสั่งทำงานโดยปราศจากตัวแปรที่จำเป็น',
  'non_exist_ap' => 'ไม่มี อัลบั้ม/ภาพ ที่ท่านเลือก !',
  'quota_exceeded' => 'ใช้พื้นที่เกินกำหนด<br /><br />คุณได้รับพื้นที่ [quota] กิโลไบต์  ขณะนี้คุณใช้พื้นที่ [space] กิโลไบต์, การเพิ่มรูปจะทำให้คุณใช้พื้นที่เกินกำหนด.',
  'gd_file_type_err' => 'เมื่อใช้งาน GD image library สามารถใช้งานภาพในแบบ JPEG และ PNG เท่านั้น',
  'invalid_image' => 'ภาพที่คุณส่งขึ้นไปมีปัญหาหรือไม่สามารถจัดการด้วย GD library',
  'resize_failed' => 'ไม่สามารถสร้างภาพขนาดย่อหรือลดขนาดภาพได้',
  'no_img_to_display' => 'ยังไม่มีภาพที่จะแสดง',
  'non_exist_cat' => 'ไม่มีหมวดหมู่ที่เลือก',
  'orphan_cat' => 'ไม่มีหมวดหมู่ภาพหลัก, ไปในส่วนจัดการหมวดหมู่เพื่อแก้ไขปัญหานี้นะ!',
  'directory_ro' => 'ไม่สามารถเขียน Directory \'%s\' ได้ ไม่สามารถลบภาพได้',
  'non_exist_comment' => 'ไม่มีคำวิจารณ์ที่เลือก.',
  'pic_in_invalid_album' => 'ไม่มีภาพในอัลบั้ม (%s)!?',
  'banned' => 'คุณถูกแบนในการใช้งานเวบไซด์นี้',
  'not_with_udb' => 'This function is disabled in Coppermine because it is integrated with forum software. Either what you are trying to do is not supported in this configuration, or the function should be handled by the forum software.',
  'offline_title' => 'ออฟไลน์',
  'offline_text' => 'Gallery is currently offline - check back soon',
  'ecards_empty' => 'There are currently no ecard records to display.',
  'action_failed' => 'Action failed.  Coppermine is unable to process your request.',
  'no_zip' => 'The necessary libraries to process ZIP files are not available.  Please contact your Coppermine administrator.',
  'zip_type' => 'คุณไม่ได้รับอนุณาติให้ส่งไป ZIP.',
  'database_query' => 'There was an error while processing a database query', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'การช่วยเหลือ bbcode'; //cpg1.4
$lang_bbcode_help = 'You can add clickable links and some formating to this field by using bbcode tags: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'ไปยังโฮมเพจ',
  'home_lnk' => 'หน้าแรก',
  'alb_list_title' => 'ไปรายการอัลบั้ม',
  'alb_list_lnk' => 'รายการอัลบั้ม',
  'my_gal_title' => 'ไปแกลเลอรี่ส่วนตัว',
  'my_gal_lnk' => 'แกลเลอรี่ส่วนตัว',
  'my_prof_title' => 'ไปที่ข้อมูลส่วนตัว', //cpg1.4
  'my_prof_lnk' => 'ข้อมูลส่วนตัว',
  'adm_mode_title' => 'ไปสถานะผู้ดูระบบ',
  'adm_mode_lnk' => 'สถานะผู้ดูแลระบบ',
  'usr_mode_title' => 'ไปสถานะสมาชิก',
  'usr_mode_lnk' => 'สถานะสมาชิก',
  'upload_pic_title' => 'ส่งภาพภาพสู่อัลบั้ม',
  'upload_pic_lnk' => 'ส่งภาพ',
  'register_title' => 'สร้างบัญชีผู้ใช้',
  'register_lnk' => 'ลงทะเบียน',
  'login_title' => 'เข้าสู่ระบบ', //cpg1.4
  'login_lnk' => 'เข้าสู่ระบบ',
  'logout_title' => 'ออกจากระบบ', //cpg1.4
  'logout_lnk' => 'ออกจากระบบ',
  'lastup_title' => 'แสดงภาพที่ส่งมา', //cpg1.4
  'lastup_lnk' => 'ภาพที่ส่งล่าสุด',
  'lastcom_title' => 'ภาพตามการวิจารณ์ล่าสุด', //cpg1.4
  'lastcom_lnk' => 'คำวิจารณ์ภาพล่าสุด',
  'topn_title' => 'แลดงรายการที่เข้าชมสูงสุด', //cpg1.4
  'topn_lnk' => 'ดูมากที่สุด',
  'toprated_title' => 'แสดงภาพยอดนิยมที่สุด', //cpg1.4
  'toprated_lnk' => 'ยอดนิยมที่สุด',
  'search_title' => 'ค้นหาภาพในแกลเลอรี่', //cpg1.4
  'search_lnk' => 'ค้นหา',
  'fav_title' => 'ไปที่รายการโปรด', //cpg1.4
  'fav_lnk' => 'รายการโปรด',
  'memberlist_title' => 'แสดงรายชื่อสมาชิก',
  'memberlist_lnk' => 'รายชื่อสมาชิก',
  'faq_title' => 'คำถามที่ถามกันบ่อยๆ',
  'faq_lnk' => 'ถาม-ตอบ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'ตรวจสอบการส่งภาพใหม่', //cpg1.4
  'upl_app_lnk' => 'ตรวจสอบการส่งภาพ',
  'admin_title' => 'ไปที่แก้ไข/กำหนดค่า', //cpg1.4
  'admin_lnk' => 'แก้ไข/กำหนดค่า', //cpg1.4
  'albums_title' => 'ไปที่แก้ไข/กำหนดค่าอัลบั้ม', //cpg1.4
  'albums_lnk' => 'อัลบั้ม',
  'categories_title' => 'ไปที่แก้ไข/กำหนดค่าหมวดหมู่', //cpg1.4
  'categories_lnk' => 'หมวดหมู่',
  'users_title' => 'ไปที่แก้ไข/กำหนดค่าสมาชิก', //cpg1.4
  'users_lnk' => 'สมาชิก',
  'groups_title' => 'ไปที่แก้ไข/กำหนดค่ากลุ่ม', //cpg1.4
  'groups_lnk' => 'กลุ่ม',
  'comments_title' => 'อ่านคำวิจารณ์ทั้งหมด', //cpg1.4
  'comments_lnk' => 'อ่านคำวิจารณ์',
  'searchnew_title' => 'ไปสู่การเพิ่มภาพเข้าสู่ระบบ', //cpg1.4
  'searchnew_lnk' => 'เพิ่มไฟล์ภาพ',
  'util_title' => 'ไปที่เครื่องมือผู้ดูแล', //cpg1.4
  'util_lnk' => 'เครื่องมือผู้ดูแล',
  'key_title' => 'ไปที่คำค้นหา', //cpg1.4
  'key_lnk' => 'คำค้นหา', //cpg1.4
  'ban_title' => 'ไปที่การแบนสมาชิก', //cpg1.4
  'ban_lnk' => 'การแบนสมาชิก',
  'db_ecard_title' => 'คำวิจารณ์อีการ์ด', //cpg1.4
  'db_ecard_lnk' => 'แสดง อีการ์ด',
  'pictures_title' => 'การจัดเรียงภาพ', //cpg1.4
  'pictures_lnk' => 'การจัดเรียงภาพ', //cpg1.4
  'documentation_lnk' => 'คู่มือ(ภาษาอังกฤษ)', //cpg1.4
  'documentation_title' => 'คู่มือ Coppermine ', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'สร้าง/จัดเรียง อัลบั้ม', //cpg1.4
  'albmgr_lnk' => 'สร้าง/จัดเรียง อัลบั้ม',
  'modifyalb_title' => 'แก้ไขอัลบั้ม',  //cpg1.4
  'modifyalb_lnk' => 'แก้ไขอัลบั้ม',
  'my_prof_title' => 'ไปที่ข้อมูลส่วนตัว', //cpg1.4
  'my_prof_lnk' => 'ข้อมูลส่วนตัว',
);

$lang_cat_list = array(
  'category' => 'หมวดหมู่ภาพ',
  'albums' => 'อัลบั้มภาพ',
  'pictures' => 'ภาพ',
);

$lang_album_list = array(
  'album_on_page' => '%d อัลบั้ม จำนวน %d หน้า',
);

$lang_thumb_view = array(
  'date' => 'วันที่',
  //Sort by filename and title
  'name' => 'ชื่อ',
  'title' => 'ชื่อเรื่อง',
  'sort_da' => 'เรียงตามวัน จากน้อยไปมาก',
  'sort_dd' => 'เรียงตามวัน จากมากไปน้อย',
  'sort_na' => 'เรียงตามชื่อ จากน้อยไปมาก',
  'sort_nd' => 'เรียงตามชื่อ จากมากไปน้อย',
  'sort_ta' => 'เรียงตามหัวเรื่อง จากน้อยไปมาก',
  'sort_td' => 'เรียงตามหัวเรื่อง จากมากไปน้อย',
  'position' => 'ตำแหน่ง', //cpg1.4
  'sort_pa' => 'เรียงตามตำแหน่ง จากน้อยไปมาก', //cpg1.4
  'sort_pd' => 'เรียงตามตำแหน่ง จากมากไปน้อย', //cpg1.4
  'download_zip' => 'ดาวน์โหลดแบบไฟล์ ZIP',
  'pic_on_page' => '%d ภาพ จำนวน %d หน้า',
  'user_on_page' => '%d ผู้ใช้งาน จำนวน %d หน้า',
  'enter_alb_pass' => 'ใส่รหัสผ่านอัลบั้ม', //cpg1.4
  'invalid_pass' => 'รหัสผ่านผิด!', //cpg1.4
  'pass' => 'รหัสผ่าน', //cpg1.4
  'submit' => 'ส่งข้อมูล', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'กลับไปยังหน้าแสดงภาพย่อ ',
  'pic_info_title' => 'แสดง/ซ่อน รายละเอียดของภาพ',
  'slideshow_title' => 'แสดงสไลด์โชว์',
  'ecard_title' => 'ส่งไฟล์นี้แบบ อีการ์ด',
  'ecard_disabled' => 'ไม่สามารถใช้งาน อีการ์ดได้',
  'ecard_disabled_msg' => 'ความสามารถนี้ใช้ได้เฉพาะสมาชิกเท่านั้น กรุณาสมัครสมาชิกก่อน', //js-alert
  'prev_title' => 'ดูไฟล์ก่อนหน้า',
  'next_title' => 'ดูไฟล์ต่อไป',
  'pic_pos' => 'ไฟล์  %s/%s',
  'report_title' => 'รายงานไฟล์นี้แก่ผู้ดูแลระบบ', //cpg1.4
  'go_album_end' => 'ข้ามเพื่อไปจบ', //cpg1.4
  'go_album_start' => 'กลับไปเริ่มใหม่', //cpg1.4
  'go_back_x_items' => 'ถอยกลับ %s รายการ', //cpg1.4
  'go_forward_x_items' => 'เดินหน้าไป %s รายการ', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'ให้คะแนน ',
  'no_votes' => '(ยังไม่มีการโหวต)',
  'rating' => '(คะแนน : %s / 5 จาก %s โหวต)',
  'rubbish' => 'แย่มาก',
  'poor' => 'แย่',
  'fair' => 'พอใช้',
  'good' => 'ดี',
  'excellent' => 'ดีมาก',
  'great' => 'วิเศษ!',
);

// ------------------------------------------------------------------------- //
// File include/exif.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die = array(
  INFORMATION => $lang_info,
  ERROR => $lang_error,
  CRITICAL_ERROR => 'ผิดพลาดร้ายแรง',
  'file' => 'ไฟล์: ',
  'line' => 'บรรทัด: ',
);

$lang_display_thumbnails = array(
  'filename' => 'ชื่อไฟล์=', //cpg1.4
  'filesize' => 'ขนาดไฟล์=', //cpg1.4
  'dimensions' => 'ขนาดภาพ=', //cpg1.4
  'date_added' => 'เพิ่มเมื่อวันที่=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s คำวิจารณ์',
  'n_views' => '%s ครั้ง',
  'n_votes' => '(%s โหวต)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'ข้อมูล Debug',
  'select_all' => 'เลือกทั้งหมด',
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting when requested, along with the error message you get (if any). Make sure to replace any passwords from the query with *** before posting. <br />Note: This is for information only and does not mean there is an error with your gallery.', //cpg1.4
  'phpinfo' => 'แสดง phpinfo',
  'notices' => 'หมายเหตุ', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'ภาษาเริ่มต้น',
  'choose_language' => 'เลือกภาษาของคุณ',
);

$lang_theme_selection = array(
  'reset_theme' => 'ธีมเริ่มต้น',
  'choose_theme' => 'เลือกธีมที่แสดง',
);

$lang_version_alert = array(
  'version_alert' => 'เอวร์ชั่นนี้ไม่รองรับ!', //cpg1.4
  'security_alert' => 'คำเตือนระบบความปลอดภัย!', //cpg1.4.3
  'relocate_exists' => 'ให้ลบไฟล์ <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> ออกจากระบบของเวบไซด์คุณด้วย!',
  'no_stable_version' => 'You are running Coppermine %s (%s) which is only meant for very experienced users - this version comes without support nor any warranties. Use it at your own risk or downgrade to the latest stable version if you need support!', //cpg1.4
  'gallery_offline' => 'The gallery is currently offline and will be only visible for you as admin. Don\'t forget to switch it back online after finishing maintenance.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'ก่อนหน้า', //cpg1.4
  'next' => 'ต่อไป', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File keyword.inc.php                                                      //
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api = array(
  'error_wakeup' => "ไม่สามารถทำให้ปลักอินทำงาน '%s'", //cpg1.4
  'error_install' => "ไม่สามารถติดตั้งปลั๊กอิน '%s'", //cpg1.4
  'error_uninstall' => "ไม่สามารถยกเลิกการติดตั้งปลั๊กอิน '%s'", //cpg1.4
  'error_sleep' => "ไม่สามารถยกเลิกการติดตั้งปลั๊กอิน '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'ร้องตะโกน',
  'Question' => 'คำถาม',
  'Very Happy' => 'มีความสุขมาก',
  'Smile' => 'ยิ้ม',
  'Sad' => 'เศร้า',
  'Surprised' => 'ประหลาดใจ',
  'Shocked' => 'ช็อค',
  'Confused' => 'งงมาก',
  'Cool' => 'แจ๋วนี่',
  'Laughing' => 'หัวเราะ',
  'Mad' => 'บ้าแล้ว',
  'Razz' => 'ล้อเล่น',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'ร้องไห้หรือเศร้ามากๆ',
  'Evil or Very Mad' => 'ปิศาจหรือบ้ามาก',
  'Twisted Evil' => 'ปิศาจตัวงอ',
  'Rolling Eyes' => 'ทำตากลิ้งไปมา',
  'Wink' => 'Wink',
  'Idea' => 'มีความคิด',
  'Arrow' => 'ลูกศร',
  'Neutral' => 'เป็นกลาง',
  'Mr. Green' => 'นายเขียว',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'ออกจากสถานะผู้ดูแล...',
  1 => 'เข้าสู่สถานะผู้ดูแล...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'กรุณาใส่ชื่ออัลบั้ม !', //js-alert
  'confirm_modifs' => 'แน่ใจว่า จะเปลี่ยนแปลงค่านี้   ?', //js-alert
  'no_change' => 'คุณยังไม่ได้เปลี่ยนแปลงอะไร !', //js-alert
  'new_album' => 'อัลบั้มใหม่',
  'confirm_delete1' => 'แน่ใจว่า จะลบอัลบั้มน ?', //js-alert
  'confirm_delete2' => '\nภาพและคำวิจารณ์ทั้งหมดจะถูกลบ !', //js-alert
  'select_first' => 'กรุณาเลือกอัลบั้มก่อน', //js-alert
  'alb_mrg' => 'ระบบจัดการอัลบั้ม',
  'my_gallery' => '* แกลอรีส่วนตัว *',
  'no_category' => '* ไม่มีหมวดหมู่ *',
  'delete' => 'ลบ',
  'new' => 'สร้างใหม่',
  'apply_modifs' => 'บันทึกการเปลี่ยนแปลง',
  'select_category' => 'เลือกหมวดหมู่',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'การแบนสมาชิก', //cpg1.4
  'user_name' => 'ชื่อสมาชิก', //cpg1.4
  'ip_address' => 'เลข ไอ.พี.', //cpg1.4
  'expiry' => 'วันหมดอายุการแบน (ปล่อยว่างหากจะแบนคนนี้ตลอดตลอด)', //cpg1.4
  'edit_ban' => 'จัดเก็บค่าแก้ไข', //cpg1.4
  'delete_ban' => ' ลบ ', //cpg1.4
  'add_new' => 'เพิ่มสมาชิกที่จะแบบ(งดใช้ระบบ)', //cpg1.4
  'add_ban' => 'เพิ่ม', //cpg1.4
  'error_user' => 'ไม่สามารถหาสมาชิก', //cpg1.4
  'error_specify' => 'คุณต้องเาะลงชื่อสมาชิกหรือเลข ไอ.พี.', //cpg1.4
  'error_ban_id' => 'รหัสแบนสมาชิกผิด!', //cpg1.4
  'error_admin_ban' => 'คุณไม่สามารถแบนตัวเองได้!', //cpg1.4
  'error_server_ban' => 'คุณจะแบนตัวเองออกจากระบบหรือ? ตาหลกแล้ว, มันทำไม่ได้...', //cpg1.4
  'error_ip_forbidden' => 'คุณไม่สามารถแบนไอพีนี้ได้ เพราะเป็นไอพีส่วนตัว<br />หากคุณต้องการที่จะทำกับไอพีนี้, เข้าไปแก้ไขในเมนู <a href="admin.php">แก้ไข/กำหนดค่า</a> (การทำแบบนี้เมื่อ Coppermine ทำงานบน LAN).', //cpg1.4
  'lookup_ip' => 'มองหาเลข ไอ.พี.', //cpg1.4
  'submit' => ' ต่อไป! ', //cpg1.4
  'select_date' => 'เลือกวัน', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Wizard',
  'warning' => 'Warning: when using this wizard you have to understand that sensitive data is being sent using html forms. Only run it on your own PC (not on a public client like an internet cafe), and make sure to clear the browser cache and temporary files after you have finished, or others might be able to access your data!',
  'back' => 'กลับ',
  'next' => 'ต่อไป',
  'start_wizard' => 'เริ่มต้นทำ bridging wizard',
  'finish' => 'เสร็จสิ้น',
  'hide_unused_fields' => 'ซ่อนที่ไม่ได้ใช้จากพิ้นที่ (เสนอแนะ)',
  'clear_unused_db_fields' => 'ล้างฐานข้อมูลที่ใช้ไม่ได้ (เสนอแนะ)',
  'custom_bridge_file' => 'your custom bridge file\'s name (if the bridge file\'s name is <i>myfile.inc.php</i>, enter <i>myfile</i> into this field)',
  'no_action_needed' => 'ไม่ต้องทำอะไรในขั้นตอนนี้. กดคลิ๊กที่ปุ่ม \'ต่อไป\' ได้เลย',
  'reset_to_default' => 'ล้างไปสู่ค่าเริ่มต้น',
  'choose_bbs_app' => 'เลือกโปรแกรมที่จะทำการเชื่อมโยงด้วย',
  'support_url' => 'ไปตรงนี้สำหรับการรองรับในโปรแกรมนี้',
  'settings_path' => 'โฟลเดอร์ของโปรแกรม  BBS หรือ CMS',
  'database_connection' => 'เชื่อมโยงฐานข้อมูล',
  'database_tables' => 'ตารางฐานข้อมูล',
  'bbs_groups' => 'กลุ่ม BBS',
  'license_number' => 'หมายเลขลิขสิทธิ์',
  'license_number_explanation' => 'ใส่เลขลิทสิทธ์ (บางโปรแกรมที่ต้องใช้)',
  'db_database_name' => 'Database name',
  'db_database_name_explanation' => 'Enter the name of the database your BBS app uses',
  'db_hostname' => 'Database host',
  'db_hostname_explanation' => 'Hostname where your mySQL database resides, usually &quot;localhost&quot;',
  'db_username' => 'Database user account',
  'db_username_explanation' => 'mySQL user account to use for connection with BBS',
  'db_password' => 'Database passsword',
  'db_password_explanation' => 'Passsword for this mySQL user account',
  'full_forum_url' => 'Forum URL',
  'full_forum_url_explanation' => 'Full URL of your BBS app (including the leading http:// bit, e.g. http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Relative forum path',
  'relative_path_of_forum_from_webroot_explanation' => 'Relative path to your BBS app from the webroot (Example: if your BBS is at http://www.yourdomain.tld/forum/, enter &quot;/forum/&quot; into this field)',
  'relative_path_to_config_file' => 'Relative path to your BBS\'s config file',
  'relative_path_to_config_file_explanation' => 'Relative path to your BBS, seen from your Coppermine folder (e.g. &quot;../forum/&quot; if your BBS is at http://www.yourdomain.tld/forum/ and Coppermine at http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie prefix',
  'cookie_prefix_explanation' => 'this has to be your BBS\'s cookie name',
  'table_prefix' => 'Table prefix',
  'table_prefix_explanation' => 'Must match the prefix you chose for your BBS when setting it up.',
  'user_table' => 'User table',
  'user_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'session_table' => 'Session table',
  'session_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_table' => 'Group table',
  'group_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_relation_table' => 'Group relation table',
  'group_relation_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'group_mapping_table' => 'Group mapping table',
  'group_mapping_table_explanation' => '(usually default value should be OK, unless your BBS install isn\'t standard)',
  'use_standard_groups' => 'Use standard BBS usergroups',
  'use_standard_groups_explanation' => 'Use standard (built-in) usergroups (recommended). This will make all custom usergroups settings made on this page become void. Only disable this option if you REALLY know what you\'re doing!',
  'validating_group' => 'Validating group',
  'validating_group_explanation' => 'The group ID of your BBS where users accounts that need validation are in (usually default value should be OK, unless your BBS install isn\'t standard)',
  'guest_group' => 'Guest group',
  'guest_group_explanation' => 'Group ID of your BBS where guests (anonymous users) are in (default value should be OK, only edit if you know what you\'re doing)',
  'member_group' => 'Member group',
  'member_group_explanation' => 'Group ID of your BBS where &quot;regular&quot; users accounts are in (default value should be OK, only edit if you know what you\'re doing)',
  'admin_group' => 'Admin group',
  'admin_group_explanation' => 'Group ID of your BBS where admins are in (default value should be OK, only edit if you know what you\'re doing)',
  'banned_group' => 'Banned group',
  'banned_group_explanation' => 'Group ID of your BBS where banned users are in (default value should be OK, only edit if you know what you\'re doing)',
  'global_moderators_group' => 'Global moderators group',
  'global_moderators_group_explanation' => 'Group ID of your BBS where global moderators of your BBS are in (default value should be OK, only edit if you know what you\'re doing)',
  'special_settings' => 'BBS-specific settings',
  'logout_flag' => 'phpBB version (logout flag)',
  'logout_flag_explanation' => 'What\'s your BBS version (this setting specifies how logouts are being handled)',
  'use_post_based_groups' => 'Use post-based groups?',
  'logout_flag_yes' => '2.0.5 or higher',
  'logout_flag_no' => '2.0.4 or lower',
  'use_post_based_groups_explanation' => 'Should the groups from the BBS that are defined by the number of posts be taken into account (allows a granular permissions management) or just the default groups (makes administration easier, recommended). You can change this setting later as well.',
  'use_post_based_groups_yes' => 'yes',
  'use_post_based_groups_no' => 'no',
  'error_title' => 'You need to correct these errors before you can continue. Go to the previous screen.',
  'error_specify_bbs' => 'You have to specify what application you want to bridge your Coppermine install with.',
  'error_no_blank_name' => 'You can\'t leave the name of your custom bridge file blank.',
  'error_no_special_chars' => 'The bridge file name mustn\'t contain any special chars except underscore (_) and dash (-)!',
  'error_bridge_file_not_exist' => 'The bridge file %s doesn\'t exist on the server. Check if you have actually uploaded it.',
  'finalize' => 'enable/disable BBS integration',
  'finalize_explanation' => 'So far, the settings you specified have been written into the database, but BBS integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable BBS integration there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).',
  'your_bridge_settings' => 'Your bridge settings',
  'title_enable' => 'Enable integration/bridging with %s',
  'bridge_enable_yes' => 'enable',
  'bridge_enable_no' => 'disable',
  'error_must_not_be_empty' => 'must not be empty',
  'error_either_be' => 'must either be %s or %s',
  'error_folder_not_exist' => '%s doesn\'t exist. Correct the value you entered for %s',
  'error_cookie_not_readible' => 'Coppermine can\'t read a cookie named %s. Correct the value you entered for %s, or go to your BBS administration panel and make sure that the cookie path is readible for coppermine.',
  'error_mandatory_field_empty' => 'You can not leave the field %s blank - fill in the proper value.',
  'error_no_trailing_slash' => 'There mustn\'t be a trailing slash in the field %s.',
  'error_trailing_slash' => 'There must be a trailing slash in the field %s.',
  'error_db_connect' => 'Could not connect to the mySQL database with the data you specified. Here\'s what mySQL said:',
  'error_db_name' => 'Although Coppermine could establish a connection, it wasn\'t able to find the database %s. Make sure you have specified %s properly. Here\'s what mySQL said:',
  'error_prefix_and_table' => '%s and ',
  'error_db_table' => 'Could not find the table %s. Make sure you have specified %s correctly.',
  'recovery_title' => 'Bridge Manager: emergency recovery',
  'recovery_explanation' => 'If you came here to administer the BBS integration of your Coppermine gallery, you have to log in first as admin. If you can not log in because bridging doesn\'t work as expected, you can disable BBS integration with this page. Entering your username and password will not log you in, it will only disable BBS integration. Refer to the documentation for details.',
  'username' => 'ชื่อผู้ใช้',
  'password' => 'รหัสผ่าน',
  'disable_submit' => 'ส่งข้อมูล',
  'recovery_success_title' => 'Authorization successful',
  'recovery_success_content' => 'You have successfully disabled BBS bridging. Your Coppermine install runs now in standalone mode.',
  'recovery_success_advice_login' => 'Log in as admin to edit your bridge settings and/or enable BBS integration again.',
  'goto_login' => 'Go to login page',
  'goto_bridgemgr' => 'Go to bridge manager',
  'recovery_failure_title' => 'Authorization failed',
  'recovery_failure_content' => 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).',
  'try_again' => 'try again',
  'recovery_wait_title' => 'Wait time has not elapsed',
  'recovery_wait_content' => 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit untill you\'re allowed to try to authenticate.',
  'wait' => 'รอสักครู่',
  'create_redir_file' => 'Create redirection file (recommended)',
  'create_redir_file_explanation' => 'To redirect users back to Coppermine once they logged into your BBS, you need a redirection file to be created within your BBS folder. When this option is checked, the bridge manager will attempt to create this file for you, or give you code ready to copy-and-paste to create the file manually.',
  'browse' => 'browse',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'ปฏิทิน', //cpg1.4
  'close' => '*  ปิด  *', //cpg1.4
 'clear_date' => ' ล้างวัน ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'ตัวแปรสำหรับ \'%s\'ไม่ถูกต้อง !',
  'unknown_cat' => 'ไม่มีหมวดหมู่ที่เลือก',
  'usergal_cat_ro' => 'ไม่สามารถลบแกลอรีได !',
  'manage_cat' => 'จัดการหมวดหมู่',
  'confirm_delete' => 'แน่ใจว่า จะลบหมวดหมู่น', //js-alert
  'category' => 'หมวดหมู่',
  'operations' => 'กระทำ',
  'move_into' => 'ย้ายไปยัง',
  'update_create' => 'ปรับปรุง/สร้างหมวดหมู่',
  'parent_cat' => 'ชื่อหมวดหมู่',
  'cat_title' => 'ชื่อหมวดหมู่',
  'cat_thumb' => 'ภาพย่อชื่อหมวดหมู่',
  'cat_desc' => 'รายละเอียดหมวดหมู่',
  'categories_alpha_sort' => 'จัดเรียงหมวดหมู่ภาพด้วยการเรียงตามอักษรไหม (ให้คุณจัดเรียงเองได้)', //cpg1.4
  'save_cfg' => 'จัดเก็บ การกำหนดค่า', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'กำหนดค่าแกลเลอรี่', //cpg1.4
  'manage_exif' => 'Manage exif display', //cpg1.4
  'manage_plugins' => 'จัดการปลั๊กอิน', //cpg1.4
  'manage_keyword' => 'จัดการคำค้นหา', //cpg1.4
  'restore_cfg' => 'กลับยังค่าเดิม',
  'save_cfg' => 'บันทึกค่าใหม่',
  'notes' => 'บันทึก',
  'info' => 'รายละเอียด',
  'upd_success' => 'ค่าแก้ไข/ติดตั้งของ Thai Coppermine ได้ปรับปรุงแล้ว',
  'restore_success' => 'ค่าเดิมของระบบ Thai Coppermine ได้ถูกเรียกคืนแล้ว',
  'name_a' => 'ชื่อ จากน้อยไปมาก',
  'name_d' => 'ชื่อ จากมากไปน้อย',
  'title_a' => 'หัวเรื่อง จากน้อยไปมาก',
  'title_d' => 'หัวเรื่อง จากมากไปน้อย',
  'date_a' => 'วันที่ จากน้อยไปมาก',
  'date_d' => 'วันที่ จากมากไปน้อย',
  'pos_a' => 'อันดับ จากน้อยไปมาก', //cpg1.4
  'pos_d' => 'อันดับ จากมากไปน้อย', //cpg1.4
  'th_any' => 'ลักษณะสูงสุด',
  'th_ht' => ' สูง ',
  'th_wd' => 'กว้าง',
  'label' => 'label',
  'item' => 'รายการ',
  'debug_everyone' => 'ทุกๆคน',
  'debug_admin' => 'เฉพาะผู้ดูแลระบบ',
  'no_logs'=> ' ปิด ', //cpg1.4
  'log_normal'=> 'ปกติ', //cpg1.4
  'log_all' => 'ทั้งหมด', //cpg1.4
  'view_logs' => 'ดูประวัติ', //cpg1.4
  'click_expand' => 'คลิ๊กที่ชื่อเพื่อขยายส่วนเพิ่มเติม', //cpg1.4
  'expand_all' => 'ขยายทั้งหมด', //cpg1.4
  'notice1' => '(*) หากมีไฟล์ในฐานข้อมูลแล้วคุณไม่สามารถเปลี่ยนแปลงค่าอะไรได้', //cpg1.4 - (relocated)
  'notice2' => '(**) เมื่อมีการเปลี่ยนค่า, ไฟล์ทั้งหมดที่เพิ่มจากจุดนี้จะได้รับผลกระทบ, ดังนั้นขอแนะนำหากมีไฟล์ในอัลบั้มแล้วไม่ควรมีการแก้ไขใดๆ  อย่างไรก็ตามคุณสามารถ เปลี่ยนแปลงไฟล์ต่างๆนั้นได้โดยใช้ &quot;<a href="util.php">เครื่องมือผู้ดูแล</a> (ปรับขนาดภาพ)&quot; จากเมนูของผู้ดูแลระบบ ', //cpg1.4 - (relocated)
  'notice3' => '(***) ทุกไฟล์ประวัต(ิLog Files) จะเขียนด้วยภาษาอังกฤษ.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'ฟังชั่นนี้ไม่สามารถทำงานได้หากคุณใช้ร่วมกับ BB ', //cpg1.4
  'auto_resize_everyone' => 'ทุกๆคน', //cpg1.4
  'auto_resize_user' => 'สมาชิกอย่างเดียว', //cpg1.4
  'ascending' => 'เรียงน้อยไปมาก', //cpg1.4
  'descending' => 'เรียงมากไปน้อย', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'แก้ไขค่าทั่วไป',
  array('ชื่อแกลเลอรี่(ชื่อเว็บ)', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('คำอธิบายเว็บของคุณ', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('อีเมล์ของผู้ดูแลระบบ', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL ของแกลเลอรี่คุณอยู่ในโฟลเดอร์ไฟลเดอร์ไหน (ไม่ต้องใส่ \'index.php\' หรืออื่นๆ)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('ไฟล์ URL ของโฮมเพจคุณ', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('อนุญาติให้ใช้ ดาว์นโหลดไฟล์ ZIP ของภาพโปรด ', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('เวลาของคุณต่างจากเวลามาตราฐานกี่ชั่งโมงของ GMT (เวลาปัจุบัน : ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('สามารถเข้ารหัสให้รหัสผ่านได้ (ไม่สามารถทำงานได้)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('สามารถให้ใช้ ไอคอนช่วยเหลือ (ไอคอนนี้มีแต่ภาษาอังกฤษ)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('ให้สามารถใช้คำค้นหาในเวบได้','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('สามารถใช้ปลั๊กอินได้', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('อนุณาติให้มีแบน สมาชิกด้วยเลยไอพี (ส่วนตัว)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('สามารถดูไฟล์ต่างๆในการเพิ่มไฟล์', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'ตั้งค่า ภาษา &amp; และตัวอักษร',
  array('ภาษา', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('ให้แสดงภาษาอังกฤษไหมหากหาถาษาที่คุณเลือกไม่พบ?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('รูปแบบการเข้ารหัสอักษร', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('ให้แสดงตัวเลือกภาษาไหม', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('ให้แสดงธงชาติของภาษาที่มีไหม', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('แสดง &quot;ยกเลิก&quot; ในการเลือกภาษาไหม', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'ตั้งค่าธีม',
  array('ธีมเริ่มต้น', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('แสดงการเลือกธีมไหม', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('แสดง &quot;ยกเลิก&quot; ในการเลือกธีมไหม', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('แสดง ถาม-ตอบ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('ชื่อเมนูเชื่อมโยงของคุณ', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('URL ของเมนูเชื่อโยงของคุณ', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('แสดงการช่วยเหลือแบบ bbcode ไหม ', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('แสดงกล่องว่างในธีมที่ใส่ค่า XHTML และ CSS ไหม','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('โพลเดอร์ที่จะให้เก็บตัว header ของคุณ', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('โฟลเดอร์ที่จะให้เก็บตัว footer ของคุณ', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'ดูรายการอัลบั้ม',
  array('ความกว่าของตารางหลัก (pixels หรือ %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('จำนวนระดับของหมวดหมู่ที่จะแสดง', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('จำนวนอัลบั้มที่แสดง', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('จำนวนคอลัมน์สำหรับแสดงอัลบั้ม', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('ขนาดของไฟล์ย่อในหน่วย pixels(จุด)', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('เนื้อหาของหน้าหลัก', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('แสดงภาพย่อระดับแรกในหมวดหมู่ภาพ','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('จัดเรียงหมวดหมู่ภาพด้วยการเรียงตามอักษรไหม (ให้คุณจัดเรียงเองได้)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('แสดงจำนวนของไฟล์เชื่อมโยงไหม','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'ดูภาพย่อ',
  array('จำนวนคอลัมน์ในหน้าภาพย่อ', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('จำนวนแถวในหน้าภาพย่อ', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('จำนวนสูงสุดของภาพย่อที่แสดง', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('แสดงค่าจ่าหน้าไฟล์ (ข้อเพิ่มเติมของหัวเรื่อง) ใต้ภาพย่อ', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('แสดงจำนวนคนดูใต้ภาพย่อ', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('แสดงจำนวนคำวิจารณ์ใต้ภาพย่อ', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('แสดงชื่อผู้อัพโหลดใต้ภาพย่อ', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('แสดงชื่อไฟล์ใต้ภาพย่อ', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('แสดงคำอธิบายของอัลบั้ม', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('ค่าเริ่มต้นของการจัดเรียงไฟล์', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('จำนวนโหวตสูงสุดสำหรับทำให้ไฟล์นั้นเป็นไฟล์หรือภาพยอดนิยม', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'ดูภาพ', //cpg1.4
  array('ความกว้างในตารางแสดงไฟล์ (pixels หรือ %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('ข้อมูลไฟล์สามารถเห็นได้โดยตั้งเป็นค่าเริ่มต้น', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('จำนวนความยาวตัวอักษรสูงสุดในการอธิบายภาพ', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('จำนวนตัวอักษรสูงสุดในคำ', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('แสดงแถบฟิลม์', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('แสดงชื่อไฟล์ใต้ภาพย่อในแถบฟิลม์', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('จำนวนภาพภายในแถบฟิลม์', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('ระยะเวลาการแสดงไฟล์ในหน่วยมิลลิวินาที (1 วินาที = 1000 มิลลิวินาที)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'ตั้งค่า คำวิจารณ์', //cpg1.4
  array('กรองคำไม่สุภาพในคำวิจารณ์', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('อนุญาติให้มีตัวยิ้มในคำวิจารณ์', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('อนุญาติให้หนึ่งสมาชิกสามารถวิจารณ์ภาพได้มากกว่า1คำวิจารณ์ในไฟล์เดิม (การป้องข้อความซ้ำไม่ทำงาน)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('จำนวนบรรทัดสูงสุดของคำวิจารณ์', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('ความยาวตัวอักษรสูงสุดของคำวิจารณ์', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('แจ้งบอกคำวิจารณ์ด้วยอีเมล์', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('การจัดเรียงคำวิจารณ์', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('คำนำหน้าคำวิจารณ์จากผู้มาเยือน', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'ตั้งค่าไฟล์และภาพย่อ',
  array('คุณภาพของไฟล์ภาพแบบ JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('ขนาดสูงสูงของภาพย่อ <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('ใช้มิติ(ขนาด) ( กว้างหรือสูงหรือรับค่าสูงสุดของภาพย่อ ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('สร้างสื่อกลางของภาพ','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('กว้างหรือสูงสูงสุดของสื่อกลางของ ภาพ/วีดีโอ <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('ขนาดไฟล์สูงสุดในการอัพโหลดไฟล์ (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('ขนาดกว้างหรือสูงของภาพ/วีดิโอ (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('ปรับขนาดภาพอัตโนมัติหากภาพนั้นกว้างหรือสูงกว่าขนาดสูงสุด', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'ตั้งค่าไฟล์และภาพย่อขั้นสูง',
  array('สามารถทำเป็นอัลบั้มส่วนบุคคลได้ (หมายเหตุ: หากเลือกจาก  \'ใช่\' ไปเป็น \'ไม่\' อัลบั้มส่วนบุคคลที่ดูอยู่จะเปลี่ยนเป็นอัลบั้มสาธารณะ)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('แสดงไอคอนอัลบั้มส่วนบุคคลให้ผู้มาชมได้เห็น','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('ตัวอักษรที่ไม่ให้ในชื่อไฟล์', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('ชนิดภาพต่างๆที่อนุญาติให้ใช้', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('ชนิดของไฟล์ภาพเคลื่อนไหวที่อนุญาติให้ใช้', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('ให้ภาพเคลื่อนไหวเริมเล่นใหม่เมื่อจบ(อัตโนมัติ)', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('ชนิดไฟล์เสียงที่อนุญาติให้ใช้', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('ชนิดไฟล์เอกสารที่อนุญาติให้ใช้', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('วิธีการปรับขนาดภาพ','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('โพลเดอร์ของ ImageMagick \'convert\'  (ตัวอย่างเช่น /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('คำสั่งสำหรับ ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('อ่านข้อมูล EXIF ในไฟล์ JPEG ', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('อ่านข้อมูล IPTC ในไฟล์ JPEG ', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('โฟลเดอร์ของอัลบั้ม <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('โฟลเดอร์ของไฟล์จากสมาชิก <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('คำนำหน้า(prefix)สำหรับสื่อกลางของภาพ <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('คำนำหน้า(prefix)สำหรับไฟล์ภาพย่อ <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('สถานะตั้งต้นของโฟลเดอร์ (การทำ Chmod) ', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('สถานะตั้งต้นของไฟล์ (การทำ Chmod) ', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'ตั้งค่าสมาชิก',
  array('อนุญาติให้สามชิกใหม่ลงทะเบียนได้', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('อนุญาติให้ผู้มาเยือน (ผู้ไม่ได้เป็นสมาชิก) เข้าดูได้', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('มีการตรวจสอบอีเมล์ของสมาชิกลงทะเบียน', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('แจ้งอีเมล์จากผู้ดูแลระบบเมื่อสมาชิกใหม่ทะเบียน', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('ผู้ดูแลระบบจะทำงานเมื่อลงทะเบียน', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('อนุญาติให้สมาชิกมีอีเมล์เหมือนกัน', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('แจ้งเมล์บอกสำหรับภาพที่รอการอนุมัติ', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('อนุญาติให้สมาชิกลงทะเบียนสามารถดูรายชื่อสมาชิกได้', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('อนุญาติให้เปลี่ยนอีเมล์ในข้อมูลส่วนตัว', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('อนุญาติให้สมาชิกควบคุมรูปของเขาได้ในแกลเลอรี่ที่เผยแพร่', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('จำนวนการเข้าระบบไม่ได้ในขณะการถูกแบน', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('ช่วงเวลาของแบนสมาชิกชั่วคราวหลังเข้าระบบไม่ได้', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('สามารถรายงานถึงผู้ดูแลระบบ', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'ข้อมูลส่วนตัว (ปล่อยให้ว่างหากไม่ต้องการใช้)  ให้ชื่อข้อมูล 6 ในการใส่ข้อมูลยาวๆเช่น ชีวประวัติ หรือ รายละเอียดอื่นๆ', //cpg1.4
  array('ชื่อข้อมูล 1 ', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('ชื่อข้อมูล 2', 'user_profile2_name', 0), //cpg1.4
  array('ชื่อข้อมูล 3', 'user_profile3_name', 0), //cpg1.4
  array('ชื่อข้อมูล 4', 'user_profile4_name', 0), //cpg1.4
  array('ชื่อข้อมูล 5', 'user_profile5_name', 0), //cpg1.4
  array('ชื่อข้อมูล 6', 'user_profile6_name', 0), //cpg1.4

  'คำอธิบายภาพ (ปล่อยให้ว่างหากไม่ต้องใช้)',
  array('ชื่อพื้นที่ 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('ชื่อพื้นที่ 2', 'user_field2_name', 0),
  array('ชื่อพื้นที่ 3', 'user_field3_name', 0),
  array('ชื่อพื้นที่ 4', 'user_field4_name', 0),

  'ตั้งค่า คุกกี้',
  array('ชื่อคุกกี้', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('โฟลเดอร์คุกกี้', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'ตั้งค่าอีเมล์  (ไม่ต้องทำอะไรหากไม่รู้ข้อมูลที่จะเติมปล่อยว่างๆได้)', //cpg1.4
  array('SMTP Host (ปล่อยว่าง, เดี๋ยวเมล์จะใช้คำสั่ง sendmail ในการส่งเมล์เอง)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Username', 'smtp_username', 0), //cpg1.4
  array('SMTP Password', 'smtp_password', 0), //cpg1.4

  'สถิติ', //cpg1.4
  array('สถานะการเก็บประวัติ <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('ประวัติอีการ์ด', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('เก็บรายละเอียดของสถิติการโหวต','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('เก็บรายละเอียดของสถิติการคลิ๊ก','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'ตั้งค่าการซ่อมบำรุง', //cpg1.4
  array('สามารถให้สถานะดีบั๊กทำงาน', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('แสดงข้อคิดเห็นในส่วนดีบั๊ก', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('ให้แกลเลอรี่ปิดการทำงาน', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ส่ง อีการ์ด',
  'ecard_sender' => 'ผู้ส่ง',
  'ecard_recipient' => 'ผู้รับ',
  'ecard_date' => 'วันที่',
  'ecard_display' => 'แสดง อีการ์ด',
  'ecard_name' => 'ชื่อ',
  'ecard_email' => 'อีเมล์',
  'ecard_ip' => 'เลขไอ.พี.#',
  'ecard_ascending' => 'เรียงจากน้อยไปมาก',
  'ecard_descending' => 'เรียงจากมากไปน้อย',
  'ecard_sorted' => 'จัดเรียง',
  'ecard_by_date' => 'โดยวันที่',
  'ecard_by_sender_name' => 'โดยชื่อผู้ส่ง',
  'ecard_by_sender_email' => 'โดยอีเมล์ผู้ส่ง',
  'ecard_by_sender_ip' => 'โดยเลขไอ.พี.',
  'ecard_by_recipient_name' => 'โดยชื่อผู้รับ',
  'ecard_by_recipient_email' => 'โดยอีเมล์ผู้รับ',
  'ecard_number' => 'แสดงข้อมูลจาก %s ถึง %s ของ %s',
  'ecard_goto_page' => 'ไปที่เว็บ',
  'ecard_records_per_page' => 'จำนวนบันทึก/หน้า',
  'check_all' => 'ตรวจสอบทั้งหมด',
  'uncheck_all' => 'ไม่ตรวจสอบทั้งหมด',
  'ecards_delete_selected' => 'ลบอีการ์ดที่เลือก',
  'ecards_delete_confirm' => 'คุณแน่ใหรือลบอีการ์ดที่เลือก? ติ๊กที่หน้ากล่อง!',
  'ecards_delete_sure' => 'ฉันแน่ใจ',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'คุณต้องใส่ชื่อและคำวิจารณ์',
  'com_added' => 'คำวิจารณ์ของคุณได้ถูกเพิ่มแล้ว',
  'alb_need_title' => 'คุณมีหัวเรื่องที่เตรียมให้สำหรับอัลบั้ม!',
  'no_udp_needed' => 'ไม่มีการปรับปรุง',
  'alb_updated' => 'อัลบั้นนี้ไปปรับปรุงแล้ว',
  'unknown_album' => 'ไม่ได้เลือกอัลบั้มหรือคุณไม่ได้รับอนุญาติให้ส่งไฟล์ในอัลบั้มนี้',
  'no_pic_uploaded' => 'ไม่มีการส่งไฟล์!<br /><br />หากต้องการจะส่งไฟล์จริงๆ, ลองตรวจสอบว่าไฟล์ชนิดนี้ได้รับการอนุญาติให้ส่งไหม...',
  'err_mkdir' => 'ผิดพลาดในการสร้างโฟลเดอร์ %s ของระบบ!',
  'dest_dir_ro' => 'โฟลเดอร์ปลายทาง %s ไม่สามารถเขียนได้ด้วยโปรแกรม !',
  'err_move' => 'ผิดพลาด ไม่สามารถย้าย %s ไป %s !',
  'err_fsize_too_large' => 'The size of file you have uploaded is too large (maximum allowed is %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'The size of the file you have uploaded is too large (maximum allowed is %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'ไฟล์ที่ส่งมาไม่มีอยู่ในรูปแบบของระบบ!',
  'allowed_img_types' => 'คุณสามารถส่งไฟล์(ภาพ) %s ได้',
  'err_insert_pic' => 'ไฟล์ \'%s\' ไม่สามารถนำเข้าอัลบั้มได้ ',
  'upload_success' => 'คุณได้ส่งไฟล์เป็นที่เรียบร้อยแล้ว<br /><br />ไฟล์นี่จะถูกเผยแพร่หลังจากผู้ดูแลระบบได้ให้การเห็นชอบก่อน.',
  'notify_admin_email_subject' => 'แจ้งบอกเรื่องการส่งไฟล์ %s ',
  'notify_admin_email_body' => 'ไฟล์ที่ส่งไปโดย %s ต้องการการอนุมัติ. ไปที่ %s   <br><br> หมายเหตุ โปรแกรม Thai Coppermine พัฒนาจาก www.Somsak2004.com ',
  'info' => 'ข้อมูล',
  'com_added' => 'เพิ่มคำวิจารณ์',
  'alb_updated' => 'ปรับปรุงอัลบั้มแล้ว',
  'err_comment_empty' => 'คำวิจารณ์ของคุณว่าง ไม่ได้เขียนอะไร !',
  'err_invalid_fext' => 'Only files with the following extensions are accepted : <br /><br />%s.',
  'no_flood' => 'Sorry but you are already the author of the last comment posted for this file<br /><br />Edit the comment you have posted if you want to modify it',
  'redirect_msg' => 'You are being redirected.<br /><br /><br />Click \'CONTINUE\' if the page does not refresh automatically',
  'upl_success' => 'ไฟล์ของคุณได้ถูกเพิ่มเติมสำเร็จแล้ว',
  'email_comment_subject' => 'คำวิจารณ์ใน Thai Coppermine Photo Gallery From Somsak2004',
  'email_comment_body' => 'มีบางคนได้เขียนคำวิจารณ์ในแกลเลอรี่ของคุณ ไปอ่านได้ที่',
  'album_not_selected' => 'ไม่ได้เลือกอัลบั้ม', //cpg1.4
  'com_author_error' => 'มีสมาชิกลงทะเบียนชื่อใช้งานนี้, ไปเข้าสู่ระบบหรือใช้ชื่ออื่น', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'จ่าหน้า(Caption)',
  'fs_pic' => 'ขนาดภาพเต็ม',
  'del_success' => 'ได้ลบเป็นที่เรียบร้อย',
  'ns_pic' => 'ขนาดภาพปกติ',
  'err_del' => 'ไม่สามารถลบได้',
  'thumb_pic' => 'ภาพย่อ',
  'comment' => 'คำวิจารณ์',
  'im_in_alb' => 'ภาพในอัลบั้ม',
  'alb_del_success' => 'อัลบั้ม &laquo;%s&raquo; ได้ถูกลบแล้ว', //cpg1.4
  'alb_mgr' => 'จัดการอัลบั้ม',
  'err_invalid_data' => 'รับข้อมูลผิดพลาดใน \'%s\'',
  'create_alb' => 'สร้างอัลบั้ม \'%s\'',
  'update_alb' => 'ปรับปรุงอัลบั้ม \'%s\' กับหัวเรื่อง \'%s\' และดัชนี \'%s\'',
  'del_pic' => 'ลบไฟล์',
  'del_alb' => 'ลบอัลบั้ม',
  'del_user' => 'ลบสมาชิก',
  'err_unknown_user' => 'ไม่มีสมาชิกที่เลือก!',
  'err_empty_groups' => 'ไม่มีตารางกล่ม, หรือตารางกลุ่มว่างเปล่า!', //cpg1.4
  'comment_deleted' => 'คำวิจารณ์ได้ถูกลบเป็นที่เรียบร้อยแล้ว',
  'npic' => 'ภาพ', //cpg1.4
  'pic_mgr' => 'จัดการภาพ', //cpg1.4
  'update_pic' => 'กำลังปรับปรุงภาพ \'%s\' กับชื่อไฟล์ \'%s\' และดัชนี \'%s\'', //cpg1.4
  'username' => 'ชือสมาชิก', //cpg1.4
  'anonymized_comments' => '%s คำวิจาร์จากผู้มาเยือน', //cpg1.4
  'anonymized_uploads' => '%s ไฟล์ผู้มาเยือนส่งมา', //cpg1.4
  'deleted_comments' => 'ลบ %s คำวิจารณ์', //cpg1.4
  'deleted_uploads' => 'ลบ %s ไฟล์ผู้เยือนส่งมา', //cpg1.4
  'user_deleted' => 'สมาชิก %s ได้ถูกลบแล้ว', //cpg1.4
  'activate_user' => 'สมาชิกสถานะทำงาน', //cpg1.4
  'user_already_active' => 'บัญชีผู้ใช้นี้พร้อมจะทำงาน', //cpg1.4
  'activated' => 'ทำงาน', //cpg1.4
  'deactivate_user' => 'สมาชิกสถานะไม่ทำงาน', //cpg1.4
  'user_already_inactive' => 'บัญชีผู้ใช้นี้ไม่ได้ทำงานแล้ว', //cpg1.4
  'deactivated' => 'ไม่ทำงาน', //cpg1.4
  'reset_password' => 'ล้างรหัสผ่าน', //cpg1.4
  'password_reset' => 'ล้างรหัสผ่านสำหรับ %s', //cpg1.4
  'change_group' => 'เปลี่ยนกลุ่มแรก', //cpg1.4
  'change_group_to_group' => 'เปลี่ยนจาก %s ไปเป็น %s', //cpg1.4
  'add_group' => 'เพิ่มกลุ่มที่สอง', //cpg1.4
  'add_group_to_group' => 'เพิ่มสมาชิก %s ไปอยู่กลุ่ม %s. ตอนนี้เขาเป็นสมาชิกของ %s ในกลุ่มแรกและเป็นสมาชิก %s ในกลุ่มที่สอง.', //cpg1.4
  'status' => 'สถานะ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'แนใจหรือจะลบไฟล์นี้? \\nข้อวิจารณ์ต่างๆก็จะถูกลบไปด้วย', //js-alert
  'del_pic' => 'ลบไฟล์นี้',
  'size' => '%s x %s พิกเซล',
  'views' => '%s ครั้ง',
  'slideshow' => 'สไลด์โชว์',
  'stop_slideshow' => 'หยุดการแสดงสไลด์',
  'view_fs' => 'คลิ๊กเพื่อดูขนาดภาพเต็ม',
  'edit_pic' => 'แก้ไขข้อมูลไฟล์', //cpg1.4
  'crop_pic' => 'ครอบและหมุนภาพ',
  'set_player' => 'เปลี่ยนตัวเล่น',
);

$lang_picinfo = array(
  'title' =>'ข้อมูลไฟล์',
  'Filename' => 'ชื่อไฟล์',
  'Album name' => 'ชื่ออัลบั้ม',
  'Rating' => 'Rating (%s โหวต)',
  'Keywords' => 'คำค้นหา',
  'File Size' => 'ขนาดไฟล์',
  'Date Added' => 'วันที่นำเข้าระบบ', //cpg1.4
  'Dimensions' => 'ขนาด(มิติ)',
  'Displayed' => 'แสดง',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Make', //cpg1.4
  'Model' => 'รุ่น', //cpg1.4
  'DateTime' => 'วัน เวลา', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Aperture', //cpg1.4
  'FocalLength' => 'Focal length', //cpg1.4
  'Comment' => 'คำวิจารณ์',
  'addFav'=>'เพิ่มในภาพโปรด',
  'addFavPhrase'=>'ภาพโปรด',
  'remFav'=>'เอาออกจากรายการภาพโปรด',
  'iptcTitle'=>'หัวเรือง IPTC',
  'iptcCopyright'=>'ลิขสิทธ์ IPTC ',
  'iptcKeywords'=>'คำค้นหา IPTC ',
  'iptcCategory'=>'หมวดหมู่ IPTC ',
  'iptcSubCategories'=>'หมวดหมู่(ย่อย) IPTC ',
  'ColorSpace' => 'Color Space', //cpg1.4
  'ExposureProgram' => 'Exposure Program', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Metering Mode', //cpg1.4
  'ExposureTime' => 'Exposure Time', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => ' คำอธิบายภาพ', //cpg1.4
  'Orientation' => 'กำหนดทิศทาง', //cpg1.4
  'xResolution' => 'X Resolution', //cpg1.4
  'yResolution' => 'Y Resolution', //cpg1.4
  'ResolutionUnit' => 'Resolution Unit', //cpg1.4
  'Software' => 'Software', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'DateTime Original', //cpg1.4
  'DateTimedigitized' => 'DateTime digitized', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
  'LightSource' => 'Light Source', //cpg1.4
  'ISOSetting' => 'ISO Setting', //cpg1.4
  'ColorMode' => 'Color Mode', //cpg1.4
  'Quality' => 'Quality', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Focus Mode', //cpg1.4
  'FlashSetting' => 'Flash Setting', //cpg1.4
  'ISOSelection' => 'ISO Selection', //cpg1.4
  'ImageAdjustment' => 'Image Adjustment', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Noise Reduction', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Image Width', //cpg1.4
  'ExifImageHeight' => 'Exif Image Height', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'File Source', //cpg1.4
  'SceneType' => 'Scene Type', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Exposure Mode', //cpg1.4
  'WhiteBalance' => 'White Balance', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Contrast', //cpg1.4
  'Sharpness' => 'Sharpness', //cpg1.4
  'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
  'submit' => 'ส่งข้อมูล', //cpg1.4
  'success' => 'ข้อมูลได้ปรับปรุงเรียบร้อยแล้ว', //cpg1.4
  'details' => 'รายละเอียด', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'แก้ไขคำวิจารณ์',
  'confirm_delete' => 'แนใจหรือจะลบคำวิจารณ์นี้?', //js-alert
  'add_your_comment' => 'เพิ่มคำวิจารณ์',
  'name'=>'ชื่อ',
  'comment'=>'คำวิจารณ์',
  'your_name' => 'Anon',
  'report_comment_title' => 'รายงานคำวิจารณ์นี้ถึงผู้ดูแลระบบ', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'คลิ๊กภาพนี้เพื่อปิดหน้าต่างนี้',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'ส่ง อีการ์ด',
  'invalid_email' => '<font color="red"><b>คำเตือน</b></font>: รูปแบบอีเมล์ไม่ถูกต้อง:', //cpg1.4
  'ecard_title' => 'มีอีการ์ดจาก %s ส่งถึงคุณ',
  'error_not_image' => 'ภาพอย่างเดียวเท่านั้นทึ่คุณจะส่งอีการ์ดได้',
  'view_ecard' => 'ลิงค์เพิ่มเติมในกรณีที่อีการ์ดแสดงได้ไม่ถูกต้อง', //cpg1.4
  'view_ecard_plaintext' => 'ในดารดูอีการ์ด, ทำการคัดลอก URL และไปวางใน Address Bar ของบราวเซอร์ของคุณ:', //cpg1.4
  'view_more_pics' => 'ดูภาพเพิ่มเติม !', //cpg1.4
  'send_success' => 'ได้ส่งอีการ์ดของคุณแล้ว',
  'send_failed' => 'เสียใจด้วยที่นี่ไม่สามารถส่งอีการ์ดได้...',
  'from' => 'จาก',
  'your_name' => 'ชื่อของคุณ',
  'your_email' => 'อีเมล์ของคุณ',
  'to' => 'ถึง',
  'rcpt_name' => 'ชื่อผู้รับ',
  'rcpt_email' => 'อีเมล์ผู้รับ',
  'greetings' => 'หัวข้อส่ง', //cpg1.4
  'message' => 'ข้อความ', //cpg1.4
  'ecards_footer' => 'ส่งโดย %s จากเลขไอพี %s ที่ %s (Gallery time)', //cpg1.4
  'preview' => 'ดูตัวอย่างอีการ์ด', //cpg1.4
  'preview_button' => 'ดูตัวอย่าง', //cpg1.4
  'submit_button' => 'ส่งอีการ์ด', //cpg1.4
  'preview_view_ecard' => 'This will be the alternate link to the ecard once it gets generated. It won\'t work for previews.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'รายงานถึงผู้ดูแลระบบ', //cpg1.4
  'invalid_email' => '<b>คำเตือน</b> : รูปแบบอีเมล์ไม่ถูกต้อง !', //cpg1.4
  'report_subject' => 'รายงานจาก %s ในแกลเลอรี่ %s', //cpg1.4
  'view_report' => 'เวบเชื่อมโยงที่แสดง กรณีรายงานเรื่องไม่ถูกต้อง', //cpg1.4
  'view_report_plaintext' => 'การอ่านรายงาน, คัดลอกแล้วไปวาง URL ในเวบบราวเซอร์(IE) ของคุณ', //cpg1.4
  'view_more_pics' => 'แกลเลอรี่', //cpg1.4
  'send_success' => 'รานงานของคุณได้ถูกส่งแล้ว', //cpg1.4
  'send_failed' => 'เสียใจ ระบบไม่สามารถส่งรายงานของคุณได้...', //cpg1.4
  'from' => 'จาก', //cpg1.4
  'your_name' => 'ชื่อคุณ', //cpg1.4
  'your_email' => 'อีเมล์ของคุณ', //cpg1.4
  'to' => 'ถึง', //cpg1.4
  'administrator' => 'สถานะผู้ดูแลระบบ', //cpg1.4
  'subject' => 'หัวข้อ', //cpg1.4
  'comment_field_name' => 'การรายงานคำวิจารณ์โดย "%s"', //cpg1.4
  'reason' => 'มีเหตุผล', //cpg1.4
  'message' => 'ข้อความ', //cpg1.4
  'report_footer' => 'ส่งโดย %s จากเลข ไอ.พี. %s ที่ %s (เวลาแกลเลอรี่)', //cpg1.4
  'obscene' => 'ไม่สุภาพ', //cpg1.4
  'offensive' => 'ก้าวร้าว', //cpg1.4
  'misplaced' => 'ไม่มีหัวข้อ/ผิดสถานที่', //cpg1.4
  'missing' => 'ไม่พบ', //cpg1.4
  'issue' => 'ผิดพลาด/ไม่สามารถชม', //cpg1.4
  'other' => 'อื่นๆ', //cpg1.4
  'refers_to' => 'รายงานไฟล์ส่งถึง', //cpg1.4
  'reasons_list_heading' => 'เหตุผลของการรายงาน:', //cpg1.4
  'no_reason_given' => 'ไม่มีเหตุผลที่ให้', //cpg1.4
  'go_comment' => 'ไปที่คำวิจารณ์', //cpg1.4
  'view_comment' => 'ดูรายงานเต็มกับคำวิจารณ์', //cpg1.4
  'type_file' => 'ไฟล์', //cpg1.4
  'type_comment' => 'คำวิจารณ์', //cpg1.4
  'invalid_data' => 'ข้อมูลของรายงานคุณกำลังจะส่งเข้าสู่ระบบแต่มีปัญหาเกี่ยวกับระบบเมล์. กรุณาตรวจสอบการเชื่อมโยง.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'ข้อมูลไฟล์',
  'album' => 'อัลบั้ม',
  'title' => 'หัวเรื่อง',
  'filename' => 'ชื่อไฟล์', //cpg1.4
  'desc' => 'คำอธิบาย',
  'keywords' => 'คำค้นหา',
  'new_keyword' => 'คำค้นหาใหม่', //cpg1.4
  'new_keywords' => 'พบคำค้นหาใหม่', //cpg1.4
  'existing_keyword' => 'คำค้นหาที่มีอยู่', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s คนดู - %s โหวต',
  'approve' => 'ไฟล์ผ่านอนุมัมิ',
  'postpone_app' => 'เลื่อนการอนุมัติ',
  'del_pic' => 'ลบไฟล์',
  'del_all' => 'ลบไฟล์ทั้งหมด', //cpg1.4
  'read_exif' => 'อ่านข้อมูล EXIF อีกครั้ง',
  'reset_view_count' => 'ล้างจำนวนผู้ชม',
  'reset_all_view_count' => 'ล้างจำนวนผู้ชมทั้งหมด', //cpg1.4
  'reset_votes' => 'ล้างการโหวต',
  'reset_all_votes' => 'ล้างการโหวตทั้งหมด', //cpg1.4
  'del_comm' => 'ลบคำวิจารณ์',
  'del_all_comm' => 'ลบคำวิจารณ์ทั้งหมด', //cpg1.4
  'upl_approval' => 'อนุมัติให้ส่งไฟล์', //cpg1.4
  'edit_pics' => 'แก้ไขไฟล์',
  'see_next' => 'ดูไฟล์ต่อไป',
  'see_prev' => 'ดูไฟล์ก่อนหน้า',
  'n_pic' => 'ไฟล์ %s ',
  'n_of_pic_to_disp' => 'จำนวนไฟล์ที่แสดง',
  'apply' => 'จัดเก็บค่าแก้ไข',
  'crop_title' => 'ตัวแก้ไขภาพ Thai Coppermine',
  'preview' => 'ดูตัวอย่าง',
  'save' => 'จัดเก็บภาพ',
  'save_thumb' =>'เก็บภาพย่อ',
  'gallery_icon' => 'สร้างอันนี้เป็นไอคอนของฉัน', //cpg1.4
  'sel_on_img' =>'กรเลืกนี้ได้เข้าภาพแล้ว!', //js-alert
  'album_properties' =>'อัลบั้ม พรอพเพอร์ตี้', //cpg1.4
  'parent_category' =>'หมวดหมู่หลัก', //cpg1.4
  'thumbnail_view' =>'ดูภาพย่อ', //cpg1.4
  'select_unselect' =>'เลือก/ไม่เลือก ทั้งหมด', //cpg1.4
  'file_exists' => "ไฟล์ปลายทาง '%s' มีอยู่แล้ว", //cpg1.4
  'rename_failed' => "ผิดพลาดในการเปลี่ยนชื่อไฟล์ '%s' เป็น '%s'.", //cpg1.4
  'src_file_missing' => "ไฟล์ต้นทาง '%s' หาไม่พบนะ", // cpg 1.4
  'mime_conv' => "ไม่สามารถแปลงไฟล์จาก '%s' เป็น '%s'",//cpg1.4
  'forb_ext' => 'มีการป้องกันไฟล์',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'ถาม-ตอบ',
  'toc' => 'ตารางเนื้อหา',
  'question' => 'คำถาม: ',
  'answer' => 'คำตอบ: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'ถาม-ตอบ ทั่วไป',
  array('Why do I need to register?', 'Registration may or may not be required by the administrator. Registration gives a member additional features such as uploading, having a favorite list, rating pictures and posting comments etc.', 'allow_user_registration', '1'),
  array('How do I register?', 'Go to &quot;Register&quot; and fill out the required fields (and the optional ones if you want to).<br />If the Administrator has Email Activation enabled, then after submitting your information you should recieve an email message at the address that you have submitted while registering, giving you instructions on how to activate your membership. Your membership must be activated in order for you to login.', 'allow_user_registration', '1'), //cpg1.4
  array('How Do I login?', 'Go to &quot;Login&quot;, submit your username and password and check &quot;Remember Me&quot; so you will be logged in on the site if you should leave it.<br /><b>IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted in order to use &quot;Remember Me&quot;.</b>', 'offline', 0),
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0),
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0),
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0),
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0),
  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0),
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0),
  array('How do I create, rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0),
  array('How can I modify and restrict users from viewing my albums?', 'You should already be in &quot;Admin Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0),
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0),
  array('What are cookies?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0),
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine-gallery.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0),

  'Navigating the Site',
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire category you are currently in, with a link to each album. If you are not in a category, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0),
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets users create their own galleries and add, delete or modify albums as well as upload to them.', 'allow_private_albums', 1), //cpg1.4
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0),
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0),
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0),
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0),
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0),
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0),
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'ลืมรหัสผ่าาน',
  'err_already_logged_in' => 'ตอนนี้คุณอยู่ในระบบแล้ว!',
  'enter_email' => 'ใส่อีเมล์ของคุณ', //cpg1.4
  'submit' => 'ส่งข้อมูล',
  'illegal_session' => 'Forgot password session invalid or has expired.', //cpg1.4
  'failed_sending_email' => 'อีเมล์ รหัสผ่านไม่สามารถส่งไปได้!',
  'email_sent' => 'อีเมล์ชื่อสมาชิกพร้อมรหัสผ่านใหม่ได้ส่งถึง %s', //cpg1.4
  'verify_email_sent' => 'อีมล์ได้ส่งถึง %s. กรุณาตรวจสอบอีเมล์ของคุณด้วย', //cpg1.4
  'err_unk_user' => 'ไม่มีสมาชิกที่เลือกSelected user does not exist!',
  'account_verify_subject' => '%s - ร้องขอรหัสผ่านใหม่', //cpg1.4
  'account_verify_body' => 'คุณได้ทำการร้องขอรหัสผ่านใหม่. หากคุณต้องการให้ส่งรหัสผ่านใหม่ถึงคุณ, กดที่ลิงค์ต่อไป %s<br><br> หมายเหตุ....โปรแกรม Thai Coppermine พัฒนาจาก www.Somsak2004.com ', //cpg1.4
  'passwd_reset_subject' => 'รหัาผ่านใหม่ของคุณ %s ', //cpg1.4
  'passwd_reset_body' => 'นี่คือรหัสผ่านใหม่ที่คุณต้องการ:
ชื่อสมาชิก: %s
รหัสผ่าน: %s
คลิ๊ก %s เพื่อเข้าสู่ระบบ.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'กลุ่ม', //cpg1.4
  'permissions' => 'อนุญาติให้ใช้', //cpg1.4
  'public_albums' => 'อัพโหลดภาพได้ทุกคน', //cpg1.4
  'personal_gallery' => 'แกลเลอรี่ส่วนตัว', //cpg1.4
  'upload_method' => 'วิธีการอัพโหลด', //cpg1.4
  'disk_quota' => 'ส่วนแบ่ง', //cpg1.4
  'rating' => 'ความนิยม', //cpg1.4
  'ecards' => 'อีการ์ด', //cpg1.4
  'comments' => 'คำวิจารณ์', //cpg1.4
  'allowed' => 'อนุญาติ', //cpg1.4
  'approval' => 'การเห็นด้วย', //cpg1.4
  'boxes_number' => 'จำนวนกล่อง', //cpg1.4
  'variable' => 'เปลี่ยนได้', //cpg1.4
  'fixed' => 'ไม่ให้เปลี่ยน', //cpg1.4
  'apply' => 'ใช้ค่าการปรับปรุงด้านบน',
  'create_new_group' => 'สร้างกลุ่มใหม่',
  'del_groups' => ' ลบกลุ่มนี้ ',
  'confirm_del' => 'คำเตือน,เมื่อคุณลบกลุ่ม, สมาชิกที่อยู่ในกลุ่มนี้จะถูกย้ายไปอยู่ในกลุ่ม \'สมาชิกลงทะเบียน\' !\n\nคุณต้องการจะทำไหม?', //js-alert
  'title' => 'จัดการกลุ่มสมาชิก',
  'num_file_upload' => 'กล่องอัพโหลดไฟล์', //cpg1.4
  'num_URI_upload' => 'กล่องอัพโหลด URI ', //cpg1.4
  'reset_to_default' => 'ล้างเพื่อกลับไปใช้ชื่อเริ่มต้น (%s) - ข้อแนะนำ!', //cpg1.4
  'error_group_empty' => 'ตารางกลุ่มว่างเปล่า !<br /><br />กลุ่มเริ่มต้นได้ถูกสร้าง, กรุณากดปุ่ม Refresh ใหม่', //cpg1.4
  'explain_greyed_out_title' => 'ทำไมแถวนี้ดูแปลกๆหรือ?', //cpg1.4
  'explain_guests_greyed_out_text' => 'คุณไม่สามรถเปลี่ยนแปลอะไรในกลุ่มได้ เพราะว่าคุณได้ตั้งค่าn &quot; อนุญาติให้ผู้มาเยือนเข้าใช้ได้ &quot; ถึง &quot;&quot; ในหน้า แก้ไข/กำหนดค่า. ทุกผู้มาเยือน (สมาชิกของกลุ่ม %s) ไม่สามารถทำอะไรได้', //cpg1.4
  'explain_banned_greyed_out_text' => 'คุณไม่สามารถเปลี่ยนแปลงค่าของกลุ่ม %s เพราะว่าสมาชิกไม่สามารถทำอะไรได้', //cpg1.4
  'group_assigned_album' => 'กำหนดอัลบั้ม', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'ยินดีต้อนรับ !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'แน่ใจหรือที่จะลบอัลบัมนี้? \\nไฟล์(ภาพ) และ คำวิจารณ์จะถูกกลบด้วย', //js-alert
  'delete' => '* ลบ *',
  'modify' => 'แก้ไข',
  'edit_pics' => 'แก้ไขไฟล์(ภาพ)',
);

$lang_list_categories = array(
  'home' => 'หน้าแรก',
  'stat1' => '<b>[pictures]</b> ไฟล์ใน <b>[albums]</b> อัลบั้ม และ<b>[cat]</b> หมวดหมู่ภาพ กับ <b>[comments]</b> คำวิจารณ์ในการชม <b>[views]</b> ครั้ง',
  'stat2' => '<b>[pictures]</b> ไฟล์ใน  <b>[albums]</b> อัลบั้ม ในการชม <b>[views]</b> ครั้ง',
  'xx_s_gallery' => '%s\'s แกลเลอรี่',
  'stat3' => '<b>[pictures]</b> ไฟล์ใน <b>[albums]</b> อัลบั้ม กับ <b>[comments]</b> คำวิจารณ์ในการชม <b>[views]</b> ครั้ง',
);

$lang_list_users = array(
  'user_list' => 'รายชื่อสมาชิก',
  'no_user_gal' => 'ไม่มีสมาชิกแกลเลอรี่',
  'n_albums' => '%s อัลบั้ม',
  'n_pics' => '%s ไฟล์',
);

$lang_list_albums = array(
  'n_pictures' => '%s ไฟล์',
  'last_added' => ', ไฟล์ล่าสุดเข้ามาเมื่อ %s',
  'n_link_pictures' => '%s ไฟล์เชื่อมโยง', //cpg1.4
  'total_pictures' => 'ทั้งหมด %s ไฟล์ ', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'จัดการคำค้นหา', //cpg1.4
  'edit' => 'แก้ไข', //cpg1.4
  'delete' => 'ลบ', //cpg1.4
  'search' => 'ค้นหา', //cpg1.4
  'keyword_test_search' => 'ค้นหาสำหรับ %s ในหน้าวิยโดว์ใหม่', //cpg1.4
  'keyword_del' => 'ลบคำค้นหา %s', //cpg1.4
  'confirm_delete' => 'คุณแน่ใจหรือที่จะลบคำค้นหา %s จากแกลเลอรี่ทั้งมด?', //cpg1.4  // js-alert
  'change_keyword' => 'เปลี่ยนคำค้นหา', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'เข้าสู่ระบบ',
  'enter_login_pswd' => 'กรุณาใส่ชื่อและรหัสผ่านในการเข้าสู่ระบบ',
  'username' => 'ชื่อใช้งาน',
  'password' => 'รหัสผ่าน',
  'remember_me' => 'จำรหัสผ่าน',
  'welcome' => 'ยินดีต้อนรับคุณ %s ...',
  'err_login' => '*** ไม่สามารถเข้าสู่ระบบ. กรุณาลองอีกครั้ง ***',
  'err_already_logged_in' => 'คุณได้เข้าสู่ระบบ Thai CPG 1.4.9 จาก www.Somsak2004.com แล้ว!',
  'forgot_password_link' => 'ลืมรหัสผ่าน',
  'cookie_warning' => 'คำเตือน บราวเซอร์ของคุณ ไม่ได้ให้มีการรับค่าcookies นะครับ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'ออกจากระบบ',
  'bye' => 'แล้วกลับมาเยี่ยมกันอีกนะคุณ %s ...',
  'err_not_loged_in' => 'คุณยังไม่ได้เข้าสู่ระบบ!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => ' ปิด ', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'ไประดับที่สูงขึ้น', //cpg1.4
  'current_path' => 'โฟลเดอร์ปัจจุบัน', //cpg1.4
  'select_directory' => 'กรุณาเลือกโฟลเดอร์', //cpg1.4
  'click_to_close' => 'คลิ๊กภาพเพื่อปิดหน้าต่างนี้',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'ปรับปรุง อัลบั้มนี้ %s',
  'general_settings' => 'แก้ไขค่าทั่วไป',
  'alb_title' => 'หัวเรื่องอัลบั้ม',
  'alb_cat' => 'หมวดหมู่อัลบั้มภาพ',
  'alb_desc' => 'คำอธิบายอัลบั้มภาพ',
  'alb_keyword' => 'คำค้นหาอัลบั้มภาพ', //cpg1.4
  'alb_thumb' => 'ภาพย่ออัลบั้ม',
  'alb_perm' => 'การให้เข้าถึงอัลบั้มนี้',
  'can_view' => 'อัลบั้มนี้ให้ชมโดย',
  'can_upload' => 'ผู้มาเยือนสามารถอัพโหลดไฟล์',
  'can_post_comments' => 'ผู้มาเยือนสามารถวิจารณ์ภาพได้',
  'can_rate' => 'ผู้มาเยือนให้คะแนนได้',
  'user_gal' => 'สมาชิกแกลเลอรี่',
  'no_cat' => '* ไม่มีหมวดหมู่ *',
  'alb_empty' => 'อัลบั้มนี้ว่าง',
  'last_uploaded' => 'อัพโหลดล่าสุด',
  'public_alb' => 'ทุกๆคน(อัลบั้มสาธารณะ)',
  'me_only' => 'ฉันคนเดียว',
  'owner_only' => 'เจ้าของอัลบั้มเท่านั้น (%s) ',
  'groupp_only' => 'สมาชิกในกลุ่ม \'%s\' ',
  'err_no_alb_to_modify' => 'ไม่มีอัลบั้ม คุณสามารถแก้ไขในฐานข้อมูล',
  'update' => 'ปรับปรุงอัลบั้ม',
  'reset_album' => 'ล้างอัลบั้ม', //cpg1.4
  'reset_views' => 'ล้างจำนวนผู้ชมไปเป็น &quot;0&quot; ใน %s', //cpg1.4
  'reset_rating' => 'ล้างความนืยมของไฟล์ทั้งหมดใน %s', //cpg1.4
  'delete_comments' => 'ลงทุกคำวิจารณ์ใน %s', //cpg1.4
  'delete_files' => '%sเปลี่ยนแปลงไม่ได้%s ลบทุกไฟล์ใน %s', //cpg1.4
  'views' => ' ชม ', //cpg1.4
  'votes' => ' โหวต ', //cpg1.4
  'comments' => ' วิจารณ์ ', //cpg1.4
  'files' => 'files', //cpg1.4
  'submit_reset' => 'ส่งข้อมูลการเปลี่ยนแปลง', //cpg1.4
  'reset_views_confirm' => 'ฉันแน่ใจ', //cpg1.4
  'notice1' => '(*) การตั้งค่าอยู่ที่ %s กลุ่ม%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'รหัสผ่านอัลบั้ม', //cpg1.4
  'alb_password_hint' => 'รหัสผ่านให้อัลบั้ม', //cpg1.4
  'edit_files' =>'แก้ไขไฟล์', //cpg1.4
  'parent_category' =>'หมวดหมู่หลัก', //cpg1.4
  'thumbnail_view' =>'ดูภาพย่อ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'ข้อมูล PHP',
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine (trimming the output at the right side).',
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'การจัดการภาพ', //cpg1.4
  'select_album' => 'เลือกอัลบั้ม', //cpg1.4
  'delete' => '* ลบ *', //cpg1.4
  'confirm_delete1' => 'แน่ใจหรือที่ต้องการจะลบภาพนี้?', //cpg1.4
  'confirm_delete2' => '\nภาพนี้ได้ถูกลบไปเป็นที่เรียบร้อยแล้ว', //cpg1.4
  'apply_modifs' => 'จัดเก็บค่าแก้ไข', //cpg1.4
  'confirm_modifs' => 'ยืนยันการแก้ไข', //cpg1.4
  'pic_need_name' => 'ภาพนี้ต้องการให้ใส่ชื่อด้วย!', //cpg1.4
  'no_change' => 'คุณไม่ได้ทำการเปลี่ยนแปลงใดๆ!', //cpg1.4
  'no_album' => '* ไม่ได้เลือกอัลบั้ม *', //cpg1.4
  'explanation_header' => 'ในการจัดเรียงคุณสามารถระบุในหน้านี้ให้ไปใช้ในบัญชีผู้ผู้ใช้ถ้า', //cpg1.4
  'explanation1' => 'ผู้ดูแลระบบได้ตั้งค่าใน "ค่าเริ่มต้นในการจัดเรียงไฟล์(ภาพ)" ในส่วนของ "ตำแหน่งการจัดเรียงมากไปน้อย" หรือ "ตำแหน่งการจัดเรียง น้อยไปมาก" (ค่าติดตั้งนี้จะใช้ทุกๆคนหากเขาไม่ได้เลือกการจัดเรียงวิธีอื่น)', //cpg1.4
  'explanation2' => 'หากสมาชิกเลือก "ตำแหน่งการจัดเรียงมากไปน้อย" หรือ "ตำแหน่งการจัดเรียงน้อยไปมาก" ในหน้าแสดงภาพย่อ', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'แน่ใจหรือที่จะยกเลิกการติดตั้งปลั๊กอินนี้', //cpg1.4
  'confirm_delete' => 'แน่ใจหรือที่ละลบปลั๊กอินนี้', //cpg1.4
  'pmgr' => 'จัดการปลั๊กอิน', //cpg1.4
  'name' => 'ชื่อ', //cpg1.4
  'author' => 'ผู้เขียน', //cpg1.4
  'desc' => 'คำอธิบาย', //cpg1.4
  'vers' => 'รุ่น', //cpg1.4
  'i_plugins' => 'ติดตั้งปลั๊กอิน', //cpg1.4
  'n_plugins' => 'ปลั๊กอินไม่ได้ติดตั้ง', //cpg1.4
  'none_installed' => 'ไม่ได้ติดตั้ง', //cpg1.4
  'operation' => 'การกระทำ', //cpg1.4
  'not_plugin_package' => 'ไฟล์อัพโหลดนี้ไม่ใช่ไฟล์ปลั๊กอิน', //cpg1.4
  'copy_error' => 'มีข้อผิดพลาดเกิดขึ้นขณะทำการคัดสำเนาชุดปลั๊กอิน', //cpg1.4
  'upload' => 'ส่งไฟล์', //cpg1.4
  'configure_plugin' => 'แก้ไข/ติดตั้ง ปลั๊กอิน', //cpg1.4
  'cleanup_plugin' => 'ชำระล้าง ปลั๊กอิน', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'เสียใจ! คุณได้โหวตภาพนี้แล้ว',
  'rate_ok' => 'ได้รับข้อมูลการโหวตของคุณแล้ว',
  'forbidden' => 'คุณไม่สามารถโหวตให้รูปตัวเองได้',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT

       ยินดีต้อนรับท่านสู่ {SITE_NAME} ทางเรายินดีรับคุณเข้าเป็นสมาชิกกับท่านทุกคน โดยมีข้อตกลกการใช้งานดังนี้ครับ<br><br>
		   1.ไม่นำภาพลามกอนาจารเข้าสู่ระบบของเรา หากพบท่านจะถูกแบนในระยะหนึ่ง และ อาจถูกเพิกถอนสมาชิกในครั้งต่อไป<br>
		   2.หากนำภาพที่จะหมิ่นเบื้องสูง หมิ่นศาสนา ภาพตัดต่อ ภาพหรือเพลงที่มีลิขสิทธิ์เข้สสู่ระบบ<br>
		   3.การวิจารณ์ภาพหรือคำพูดใด กรุณาใช้คำสุภาพ ห้ามใช้คำหยาบคายใดๆ<br>
	       4.ไม่สนับสนุนการเผยแพร่สื่อภาพเคลื่อไหว เพลง ที่มีลิขสิทธ์ แล้วมาแจกจ่าย<br><br>
		    
    หากท่านเข้าใจและยอมรับกฏกติกาต่างๆของเราให้คุณกดปุ่ม 'ยอมรับ' แล้วใส่ข้อมูลต่างๆของคุณให้ครบถ้วน<br>
    จากนั้นจะมีเมล์แจ้งกลับไปยังอีเมล์ของคุณ เพื่อเป็นการยืนยันการเป็นมาชิกของคุณ<br>
                                                                                                               ด้วยความนับถือ<br>
		                                                                                                        ผู้ดูและระบบ<br>
                                                                                                        {SITE_NAME} 
	******** หมายเหตุ โปรแกรม Thai Coppermine นี้พัฒนามาจาก www.Somsak2004.com
EOT;

$lang_register_php = array(
  'page_title' => 'ลงทะเบียนสมาชิก',
  'term_cond' => 'ข้อตกลงและเงื่อนไขการใช้งาน',
  'i_agree' => 'เข้าใจและยอมรับ',
  'submit' => 'ส่งข้อมูลการลงทะเบียน',
  'err_user_exists' => 'ชื่อนี้มีบุคคลใช้อยู่แล้ว, กรุณาเลือกชื่อใช้งานอื่นนะ!',
  'err_password_mismatch' => 'รหัสผ่านที่ใส่ 2 ครั้งไม่เหมือนกัน, กรุณาใส่รหัสใหม่อีกครั้ง',
  'err_uname_short' => 'ชื่อสมาชิกต้องมีอย่างน้อย 2 ตัวอักษรถึงจะใช้งานได้',
  'err_password_short' => 'รหัสผ่านต้องมีอย่างน้อย 2 ตัวอักษรถึงใช้งานได้',
  'err_uname_pass_diff' => 'ชื่อสมาชิกและรหัสผ่านต้องไม่เหมือนกันนะครับ',
  'err_invalid_email' => 'รูปแบบอีเมล์ไม่ถูกต้อง',
  'err_duplicate_email' => 'มีสมาชิกท่านอื่นได้ใช้อีเมล์นี้แล้ว กรุณาใช้อีเมล์อื่น',
  'enter_info' => 'ใส่ข้อมูลในการลงทะเบียนสมาชิก',
  'required_info' => 'จำเป็นต้องใส่ข้อมูล',
  'optional_info' => 'ส่วนเพิ่มเติมข้อมูล',
  'username' => 'ชื่อใช้งาน',
  'password' => 'รหัสผ่าน',
  'password_again' => 'ใส่รหัสผ่านอีกครั้ง',
  'email' => 'อีเมล์',
  'location' => 'สถานที่',
  'interests' => 'สนใจด้าน',
  'website' => 'โฮมเพจ',
  'occupation' => 'อาชีพ',
  'error' => 'ผิดพลาด',
  'confirm_email_subject' => 'ยืนยันการลงทะเบียนสมาชิกของคุณ %s ',
  'information' => ' ข้อมูล ',
  'failed_sending_email' => 'อีเมล์ยืนยันการเป็นสมาชิกไม่สามารถส่งได้!',
  'thank_you' => 'ขอบคุณมากสำหรับการลงทะเบียนเป็นสมาชิกของคุณ<br /><br />อีเมล์การยืนยันการเป็นสมาชิกให้คุณสามารถใช้งานในระบบ จะจัดส่งให้จากอีเมล์ที่ตคุณได้ให้ข้อมูลไว้อีกสักครู่ไปตรวจสอบได้',
  'acct_created' => 'บัญชีผู้ใช้ของคุณได้ถูกสร้างแล้ว คุณสามารถเข้าสู่ระบบด้วยชื่อใช้งานและรหัสผ่านของคุณ',
  'acct_active' => 'บัญชีผู้ใช้ของคุณได้ถูกสร้างแล้ว คุณสามารถเข้าสู่ระบบด้วยชื่อใช้งานและรหัสผ่านของคุณ ได้เลยนะครับ',
  'acct_already_act' => 'บัญชีพร้อมใช้งานแล้ว!', //cpg1.4
  'acct_act_failed' => 'บัญชีนี้ไม่พร้อมทำงาน!',
  'err_unk_user' => 'ไม่มีสมาชิกที่เลือก !',
  'x_s_profile' => 'ข้อมูลส่วนตัวของ %s',
  'group' => 'กลุ่ม',
  'reg_date' => 'วันลงทะเบียน',
  'disk_usage' => 'พื้นที่ใช้งาน',
  'change_pass' => 'เปลี่ยนรหัสผ่าน',
  'current_pass' => 'รหัสผ่านปัจจุบัน',
  'new_pass' => 'รหัสผ่านใหม่',
  'new_pass_again' => 'รหัสผ่านใหม่อีกครั้ง',
  'err_curr_pass' => 'รหัสผ่านปัจจุบันที่ใส่ผิด',
  'apply_modif' => ' จัดเก็บค่าแก้ไข ',
  'change_pass' => 'เปลี่ยนรหัสผ่าน',
  'update_success' => 'ข้อมูลส่วนตัวได้ปรับปรุงแล้ว',
  'pass_chg_success' => 'รหัสผ่านได้เปลี่ยนแล้ว',
  'pass_chg_error' => 'รหัสผ่านของคุณยังไม่ได้เปลี่ยน',
  'notify_admin_email_subject' => 'แจ้งเรื่องการสมัครสมาชิกของคุณ %s ',
  'last_uploads' => 'ไฟล์อัพโหลดล่าสุด<br />คลิ๊กเพื่อดูไฟล์อัพโหลดทั้งหมดโดย', //cpg1.4
  'last_comments' => 'คำวิจารณ์ล่าสุด<br />คลิ๊กเพื่ออ่านข้อวิจารณ์ทั้งหมดโดย', //cpg1.4
  'notify_admin_email_body' => 'สมาชิกใหม่ ที่ใช้ชื่อสมาชิกว่า "%s" ได้ลงทะเบียนในแกลเลอรี่ของคุณ<br /><br />หมายเหต ุโปรแกรม Thai Coppermine นี้พัฒนามาจาก www.Somsak2004.com ขอบคุณที่ใช้โปรแกรมจากเรา',
  'pic_count' => 'ไฟล์อัพโหลด', //cpg1.4
  'notify_admin_request_email_subject' => 'ร้องขอการลงทะเบียนสมาชิก %s ', //cpg1.4
  'thank_you_admin_activation' => 'ขอบคุณครับ<br /><br />การร้องขอรหัสทำงานของได้ส่งถึงผู้ดูแลระบบแล้ว.คุณจะได้รับอีเมล์ยืนยันในเวลาอันเร็วที่สุดครับ <br /><br />หมายเหต ุโปรแกรม Thai Coppermine นี้พัฒนามาจาก www.Somsak2004.com ขอบคุณที่ใช้โปรแกรมจากเรา', //cpg1.4
  'acct_active_admin_activation' => 'บัญชีผู้ใช้นี้ได้ทำงานแล้วและอีเมล์ได้ถูกส่งถึงสมาชิก', //cpg1.4
  'notify_user_email_subject' => 'แจ้งรหัสการทำงานของคุณ %s ', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
ขอบคุณสำหรับการสมัครสมาชิกที่ {SITE_NAME}

บัญชีผู้ใช้งานของคุณในชื่อ "{USER_NAME}" ได้ถูกสร้างแล้วคุณสามารถคลิ๊กเวบเชื่อมโยง<br />เพื่อยืนยันการเป็นสมาชิกของเวบเรา

<a href="{ACT_LINK}">{ACT_LINK}</a>

ด้วยความนับถือ,

ผู้ดูแลระบบของ {SITE_NAME}

หมายเหตุ.....โปแกรม Thai Coppermine นี้มาจาก www.Somsak2004.com 
EOT;

$lang_register_approve_email = <<<EOT
มีสมาชิกใหม่ที่ใช้ชื่อว่า "{USER_NAME}" ได้ลงทะเบียนในเวบของคุณ

เพื่อให้สมาชิกรายนี้ทำงานได้ในระบบของคุณ คุณต้องคลิ๊กเวบเชื่อมโยงด้านล่างเพื่อส่งเมล์ยืน
	
ยันการทำงานให้สมาชิกรายนี้ได้เข้าเป็นเป็นสมาชิกในระบบของคุณ.

<a href="{ACT_LINK}">{ACT_LINK}</a>

หมายเหตุ.....โปแกรม Thai Coppermine นี้มาจาก www.Somsak2004.com 

EOT;

$lang_register_activated_email = <<<EOT

บัญชีผู้ใช้ของคุณได้รับการอนุมัติให้ทำงานในระบบได้

คุณสามารถเข้าสู่ระบบได้ที่ <a href="{SITE_LINK}">{SITE_LINK}</a>  โดยการใช้ชื่อสมาชิก "{USER_NAME}"


ด้วยความนับถือ,

ผู้ดูแลระบบของ  {SITE_NAME}


หมายเหตุ.....โปแกรม Thai Coppermine นี้มาจาก www.Somsak2004.com 

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'อ่านคำวิจารณ์ภาพ',
  'no_comment' => 'ยังไม่มีคำวิจารณ์ภาพ',
  'n_comm_del' => 'ลบ %s คำวิจารณ์',
  'n_comm_disp' => 'จำนวนคำวิจารณ์ที่แสดง',
  'see_prev' => 'อ่านก่อนหน้า',
  'see_next' => 'อ่านต่อไป',
  'del_comm' => 'ลบคำวิจารณ์ที่เลือก',
  'user_name' => 'ชื่อ', //cpg1.4
  'date' => 'วันที่', //cpg1.4
  'comment' => 'คำวิจารณ์', //cpg1.4
  'file' => 'ไฟล์', //cpg1.4
  'name_a' => 'เรียงชื่อจากน้อยไปมาก', //cpg1.4
  'name_d' => 'เรียงชื่อจากมากไปน้อย', //cpg1.4
  'date_a' => 'เรียงวันที่จากน้อยไปมาก', //cpg1.4
  'date_d' => 'เรียงวันที่จากมากไปน้อย', //cpg1.4
  'comment_a' => 'เรียงคำวิจารณ์จากน้อยไปมาก', //cpg1.4
  'comment_d' => 'เรียงคำวิจารณ์จากมากไปน้อย', //cpg1.4
  'file_a' => 'เรียงไฟล์จากน้อยไปมาก', //cpg1.4
  'file_d' => 'เรียงไฟล์จากมากไปน้อย', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'ค้นหาไฟล์ต่างๆ', //cpg1.4
  'submit_search' => 'ค้นหา', //cpg1.4
  'keyword_list_title' => 'รายชื่อคำค้นหา', //cpg1.4
  'keyword_msg' => 'รายการด้านบนไม่ได้ครบคลุมทั้งหมด. เพราะไม่มีบางคำจากหัวเรื่องภาพหรือคำอธิบาย',  //cpg1.4
  'edit_keywords' => 'แก้ไขคำค้นหา', //cpg1.4
  'search in' => 'ค้นหาใน:', //cpg1.4
  'ip_address' => 'เลข ไอ.พี. ', //cpg1.4
  'fields' => 'ค้นหาใน', //cpg1.4
  'age' => 'อายุ', //cpg1.4
  'newer_than' => 'ใหม่กว่า', //cpg1.4
  'older_than' => 'เก่ากว่า', //cpg1.4
  'days' => 'วัน', //cpg1.4
  'all_words' => 'หาคำทั้งหมด (และ)', //cpg1.4
  'any_words' => 'หาบางคำที่มี (หรือ)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'หัวเรื่อง', //cpg1.4
  'caption' => 'จ่าหน้า', //cpg1.4
  'keywords' => 'คำค้นหา', //cpg1.4
  'owner_name' => 'ชื่อเจ้าของ', //cpg1.4
  'filename' => 'Fชื่อไฟล์', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'ค้นหาไฟล์ใหม่',
  'select_dir' => 'เลือกโฟลเดอร์',
  'select_dir_msg' => 'ในส่วนนี้จะทำให้คุณเพิ่มไฟล์ภาพหรือไฟล์อื่นๆด้วยการอัพโหลดด้วย FTP<br /><br />เลือกโฟล์เดอร์ที่คุณไปสร้างไว้ในโฟล์เดอร์ albums/ เพื่อดำเนินการต่อไป', //cpg1.4
  'no_pic_to_add' => 'ไม่มีไฟล์ให้เพิ่ม',
  'need_one_album' => 'คุณต้องมีอย่างน้อย 1 อัลบั้มในหนึ่งหมวดหมู่ภาพก่อนที่จะงาน',
  'warning' => 'คำเตือน',
  'change_perm' => 'โปรแกรมไม่สามารถเขียนในโฟลเดอร์นี้ได้, คุณต้องทำ CHMOD เป็น 755 หรือ 777 ก่อนที่จะทำการเพิ่มไฟล์!',
  'target_album' => '<b>นำไฟล์ &quot;</b>%s<b>&quot; เข้าสู่ </b>%s',
  'folder' => 'โฟลเดอร์',
  'image' => 'ไฟล์',
  'album' => 'อัลบั้ม',
  'result' => 'ผลลัพท์',
  'dir_ro' => 'ไม่สามารถเขียนได้. ',
  'dir_cant_read' => 'ไม่สามารถอ่านได้. ',
  'insert' => 'เพิ่มไฟล์ใหม่เข้าแกลเลอรี่',
  'list_new_pic' => 'แสดงไฟล์ใหม่',
  'insert_selected' => 'นำไฟล์ที่เลือกเข้าระบบ',
  'no_pic_found' => 'ไม่พบไฟล์ใหม่',
  'be_patient' => 'กรุณาอดทนรอสักนิด,โปรแกรมต้องใช้เวลาในเพิ่มไฟล์',
  'no_album' => 'ไม่ไดเลือกอัลบั้ม',
  'result_icon' => 'คลิ๊กสำหรับรายละเอียดหรือดูใหม่',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : ความหมาย ไฟล์นี้ได้เพิ่มเรียบร้อยแล้ว'.
                          '<li><b>DP</b> : ความหมาย ไฟล์ซ้ำและมีอยู่ในฐานข้อมูลแล้ว'.
                          '<li><b>PB</b> : ความหมาย ไม่สามารถเพิ่มเติมได้, กรุณาตรวจสอบค่าติดตั้ง แก้ไข และการอนุญาติให้เข้าใช้ ว่าไฟล์อยู่ตำแหน่งไหน'.
                          '<li><b>NA</b> : ความหมาย คุณไม่ได้เลือกไฟล์ในอัลบั้มใดๆ คลิ๊ก \'<a href="javascript:history.back(1)">ย้อนหลัง</a>\' และเลือกอัลบั้ม ถ้าคุณไม่มีอัลบั้ม กด <a href="albmgr.php">จัดการอัลบั้ม</a></li>'.
                          '<li>หากคำว่า OK, DP, PB \'ไม่ปรากฎ\' ให้เห็นกดไฟล์ที่เชื่อมโยงไม่ได้เพื่ออ่านข้อความจากระบบ PHP'.
                          '<li>บราวเซอร์หมดเวลา, กดปุ่มโหลดใหม่ (refresh)'.
                          '</ul>',
  'select_album' => 'เลือกอัลบั้ม',
  'check_all' => 'ตรวจทั้งหมด',
  'uncheck_all' => 'ไม่ตรวจทั้งหมด',
  'no_folders' => 'ไม่มีโฟลเดอร์ในโหลเดอร์ "/albums" ในตอนนี้. คุณต้องสร้างโฟลเดอร์ในโฟลเดอร์ด้านบน  "albums" แล้วทำการ อัพโหลดไฟล์ภาพของคุณด้วย FTP  ไปไว้ในโฟลเดอร์ที่สร้างในโฟลเดอร์ /albums', //cpg1.4
   'albums_no_category' => 'อัลบั้มไม่มีหมดหมู่ภาพ', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* อัลบั้มส่วนบุคคล', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'แสดงหน้าแบบรายละเอียดการเลือกโฟลเดอร์', //cpg1.4
  'edit_pics' => 'แก้ไขไฟล์', //cpg1.4
  'edit_properties' => 'พร็อพเพอร์ตี้ อัลบั้ม', //cpg1.4
  'view_thumbs' => 'ดูภาพย่อ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'แสดง/ซ่อน คอลัมน์นี้', //cpg1.4
  'vote' => 'รายละเอียดการโหวต', //cpg1.4
  'hits' => 'รายละเอียดการคลิ๊ก', //cpg1.4
  'stats' => 'สถิติการโหวต', //cpg1.4
  'sdate' => 'วันที่', //cpg1.4
  'rating' => 'ระดับความนิยม', //cpg1.4
  'search_phrase' => 'คำค้นหา', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'บราวเซอร์', //cpg1.4
  'os' => 'Operating System', //cpg1.4
  'ip' => 'เลข ไอ.พี.', //cpg1.4
  'sort_by_xxx' => 'จัดเรียงโดย %s', //cpg1.4
  'ascending' => 'น้อยไปมาก', //cpg1.4
  'descending' => 'มากไปน้อย', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => '* ปิด *', //cpg1.4
  'hide_internal_referers' => 'hide internal referers', //cpg1.4
  'date_display' => 'แสดงวันที่', //cpg1.4
  'submit' => 'ส่งข้อมูล/แสดงใหม่', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'อัพโหลดไฟล์',
  'custom_title' => 'จำเป็นต้องใส่ข้อมูลในฟอร์ม',
  'cust_instr_1' => 'คุณต้องเลือกจำนวนกล่องที่ส่งไฟล์ อย่างไรก็ตาม, คุณไม่ต้องเลือกเกิดกว่าจำนวนรายการด้านล่าง',
  'cust_instr_2' => 'จำนวนกล่อง(ต้องใส่)',
  'cust_instr_3' => 'กล่องส่งไฟล์: %s',
  'cust_instr_4' => 'กล่องส่ง URI/URL: %s',
  'cust_instr_5' => 'กล่องส่ง URI/URL:',
  'cust_instr_6' => 'กล่องส่งไฟล์(upload):',
  'cust_instr_7' => 'กรุณาใส่จำนวนและชนิดของกล่องส่งไฟล์. กรุณากดปุ่ม \'ต่อไป\'. ',
  'reg_instr_1' => 'มีการทำผิดพลาดจากฟอร์มที่สร้าง',
  'reg_instr_2' => 'Now you may upload your files using the upload boxes below. The size of files uploaded from your client to the server should not exceed %s KB each. ZIP files uploaded in the \'File Upload\' and \'URI/URL Upload\' sections will remain compressed.',
  'reg_instr_3' => 'If you want the zipped file or archive to be decompressed, you must use the file upload box provided in the \'Decompressive ZIP Upload\' area.',
  'reg_instr_4' => 'When using the URI/URL upload section, please enter the path to the file like so: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'หากกรอกข้อมูลเรียบร้อยกรุณากดปุ่ม \'ต่อไป\'.',
  'reg_instr_6' => 'ส่งไปบีบอัก ZIP :',
  'reg_instr_7' => 'ไฟล์อัพโหลด:',
  'reg_instr_8' => 'อัพโหลด URI/URL:',
  'error_report' => 'รายงานข้อผิดพลาด',
  'error_instr' => 'ไฟล์ที่ส่งมามีข้อผิดพลาด:',
  'file_name_url' => 'ชื่อไฟล์ /URL',
  'error_message' => 'ข้อความผิดพลาด',
  'no_post' => 'File not uploaded by POST.',
  'forb_ext' => 'นามสกุลไฟล์แบบนี้ใช้ไม่ได้',
  'exc_php_ini' => 'ขนาดไฟล์ใหญ่เกินไปโดย php.ini.',
  'exc_file_size' => 'ขนาดไฟล์ใหญ่เกินไปโดย CPG.',
  'partial_upload' => 'ส่งไฟล์ได้เพียงบางส่วน',
  'no_upload' => 'ไม่มีการส่งไฟล์.',
  'unknown_code' => 'ไฟล์ที่ส่งมารหัสนี้ PHP ไม่รู้รหัส.',
  'no_temp_name' => 'ไม่มีการส่งไฟล์ - ไม่มีชื่อ',
  'no_file_size' => 'ไม่มีข้อมูลของไฟล์',
  'impossible' => 'ไม่สามารถย้ายได้',
  'not_image' => 'ไม่ใช่ไฟล์ภาพ',
  'not_GD' => 'ไม่มีโปรแกรม GD ',
  'pixel_allowance' => 'ความสูง-กว้างของไฟล์ที่ส่งมา เกินกว่าที่ระบบอนุญาติ', //cpg1.4
  'incorrect_prefix' => 'ตัวนำหน้า URI/URL ผิดพลาด',
  'could_not_open_URI' => 'ไม่สามารถเปิด URI.',
  'unsafe_URI' => 'ไม่ปลอดภัยในการตรวจสอบ.',
  'meta_data_failure' => 'ข้อมูล Meta ผิดพลาด',
  'http_401' => '401 Unauthorized',
  'http_402' => '402 Payment Required',
  'http_403' => '403 Forbidden',
  'http_404' => '404 Not Found',
  'http_500' => '500 Internal Server Error',
  'http_503' => '503 Service Unavailable',
  'MIME_extraction_failure' => 'ไม่สามารถทำ MIME ',
  'MIME_type_unknown' => 'ไม่รู้จักชนิด MIME',
  'cant_create_write' => 'ไม่สามารถ สร้าง เขียน ไฟล์ได้',
  'not_writable' => 'ไม่สามารถเขียนไฟล์ได้',
  'cant_read_URI' => 'ไม่สามารถอ่าน URI/URL',
  'cant_open_write_file' => 'ไม่สามารถเปิด/เขียนไฟล์ URI ได้',
  'cant_write_write_file' => 'ไม่สามารถเขียน URI ได้',
  'cant_unzip' => 'ไม่สามารถทำ Unzip.',
  'unknown' => 'ผิดพลาด ไม่รู้จัก',
  'succ' => 'ส่งไฟล์/Upload สำเร็จแล้ว',
  'success' => 'ส่งไฟล์ %s สำเร็จเรียบร้อยแล้ว',
  'add' => 'กรุณากดปุ่ม \'ต่อไป\' เพื่อนำไฟล์เข้าอัลบั้ม',
  'failure' => 'ส่งไฟล์ไม่ได้',
  'f_info' => 'ข้อมูลไฟล์(ภาพ)',
  'no_place' => 'ไฟล์ก่อนหน้านี้ไม่สามารหาที่วางได้',
  'yes_place' => 'ไฟล์ก่อนหน้านี้ได้ที่วางเรียบร้อยแล้ว.',
  'max_fsize' => 'อนุญาติให้ไฟล์ขนาดสูงสุดที่ %s กิโลไบท์',
  'album' => 'อัลบั้ม',
  'picture' => 'ไฟล์(ภาพ)',
  'pic_title' => 'หัวเรื่องไฟล์',
  'description' => 'คำอธิบายไฟล์',
  'keywords' => 'คำค้นหา (แบ่งโดยใช้ช่องว่าง)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>', //cpg1.4
  'keywords_sel' =>'เลือกคำค้นหา', //cpg1.4
  'err_no_alb_uploadables' => 'เสียใจ ไม่มีอัลบั้มไหนอนุญาติให้คุณส่งไฟล์ได้',
  'place_instr_1' => 'กรุณาวางไฟล์ในอัลบั้มในตอนนี้.  คุณก็จัดการใส่ข้อมูลต่างสำหรับไฟล์ต่างๆ',
  'place_instr_2' => 'หากมีไฟล์จะเพิ่มในการวาง. กรุณากดปุ่ม \'ต่อไป\'.',
  'process_complete' => 'คุณได้ทำการวางไฟล์ทั้งหมดเรียบร้อยแล้ว',
   'albums_no_category' => 'อัลบั้มไม่มีหมวดหมู่', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* อัลบั้มส่วนบุคคล', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'เลือกอัลบั้ม', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => '* ปิด *', //cpg1.4
  'no_keywords' => 'เสียใจ, ไมีมีคำค้นหาในตอนนี้!', //cpg1.4
  'regenerate_dictionary' => 'Regenerate Dictionary', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'รายชื่อสมาชิก', //cpg1.4
  'user_manager' => 'การจัดการสมาชิก', //cpg1.4
  'title' => 'จัดการสมาชิก',
  'name_a' => 'เรียงชื่อจากน้อยไปมาก',
  'name_d' => 'เรียงชื่อจากมากไปน้อย',
  'group_a' => 'เรียงกลุ่มจากน้อยไปมาก',
  'group_d' => 'เรียงกลุ่มจากมากไปน้อย',
  'reg_a' => 'เรียงวันลงทะเบียนจากน้อยไปมาก',
  'reg_d' => 'เรียงวันลงทะเบียนจากมากไปน้อย',
  'pic_a' => 'เรียงจำนวนไฟล์จากน้อยไปมาก',
  'pic_d' => 'เรียงจำนวนไฟล์จากมากไปน้อย',
  'disku_a' => 'เรียงการใช้พื้นที่จากน้อยไปมาก',
  'disku_d' => 'เรียงการใช้พื้นที่จากมากไปน้อย',
  'lv_a' => 'เรียงโดยการเยี่ยมชมจากน้อยไปมาก',
  'lv_d' => 'เรียงโดยการเยี่ยมชมจากมากไปน้อย',
  'sort_by' => 'จัดเรียงสมาชิกโดย',
  'err_no_users' => 'ตารางสมาชิกว่าง!',
  'err_edit_self' => 'คุณสามารถแก้ไขข้อมูลของคุณได้, โดยใช้เมนู \'ข้อมูลส่วนตัว\' ในการแก้ไข',
  'edit' => 'แก้ไข', //cpg1.4
  'with_selected' => 'เลือกการกระทำกับสมาชิก:', //cpg1.4
  'delete' => 'ลบ', //cpg1.4
  'delete_files_no' => 'เก็บไฟล์นี้ (ของผู้มาเยือน)', //cpg1.4
  'delete_files_yes' => 'ลบไฟล์นี้', //cpg1.4
  'delete_comments_no' => 'เก็บคำวิจารณ์ (ของผู้มาเยือน)', //cpg1.4
  'delete_comments_yes' => 'ลบคำวิจารณ์นี้', //cpg1.4
  'activate' => 'ทำงาน', //cpg1.4
  'deactivate' => 'ไม่ทำงาน', //cpg1.4
  'reset_password' => 'ยกเลิกรหัสผ่าน', //cpg1.4
  'change_primary_membergroup' => 'เปลี่ยนกลุ่มสมาชิกระดับต้น', //cpg1.4
  'add_secondary_membergroup' => 'เพื่มกลุ่มสมาชิกระดับสอง', //cpg1.4
  'name' => 'ชื่อสมาชิก',
  'group' => 'กลุ่ม',
  'inactive' => 'ไม่ทำงาน',
  'operations' => 'การกระทำ',
  'pictures' => 'ไฟล์',
  'disk_space_used' => 'ใช้พื้นที่', //cpg1.4
  'disk_space_quota' => 'ส่วนแบ่งพื้นที่', //cpg1.4
  'registered_on' => 'วันลงทะเบียน', //cpg1.4
  'last_visit' => 'เข้าระบบล่าสุด',
  'u_user_on_p_pages' => '%d สมาชิกใน %d หน้า',
  'confirm_del' => 'แน่ใจหรือว่าจะลบสมาชิกรายนี้? \\nไฟล์ของเขาทั้งหมดและอัลบั้มจะถูกลบด้วย', //js-alert
  'mail' => 'เมล์',
  'err_unknown_user' => 'ไม่มีสมาชิกที่เลือก!',
  'modify_user' => 'แก้ไขสมาชิก',
  'notes' => 'หมายเหตุ',
  'note_list' => '<li>หากคุณไม่ต้องการเปลี่ยนรหัสผ่านปัจจุบัน, ปล่อยให้ช่อง "รหัสผ่าน" ว่างไว้นะ',
  'password' => 'รหัสผ่าน',
  'user_active' => 'สมาชิกสถานะทำงาน',
  'user_group' => 'กลุ่มสมาชิก',
  'user_email' => 'อีเมล์สมาชิก',
  'user_web_site' => 'เวบไซด์สมาชิก',
  'create_new_user' => 'สร้างสมาชิกใหม่',
  'user_location' => 'สถานที่ของสมาชิก',
  'user_interests' => 'ความสนใจของสมาชิก',
  'user_occupation' => 'อาชีพของสมาชิก',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'รับไฟล์อัพโหลด',
  'never' => 'never',
  'search' => 'ค้นหาสมาชิก', //cpg1.4
  'submit' => 'ส่งข้อมูล', //cpg1.4
  'search_submit' => ' ต่อไป! ', //cpg1.4
  'search_result' => 'ผลการค้นหาสำหรับ: ', //cpg1.4
  'alert_no_selection' => 'คุณต้องเลือกสมาชิกอย่างน้อย 1 คน!', //cpg1.4 //js-alert
  'password' => 'รหัสผ่าน', //cpg1.4
  'select_group' => 'เลือกกลุ่ม', //cpg1.4
  'groups_alb_access' => 'อัลบั้มอนุญาติโดยกลุ่ม', //cpg1.4
  'album' => 'อัลบั้ม', //cpg1.4
  'category' => 'หมวดหมู่', //cpg1.4
  'modify' => 'แก้ไข?', //cpg1.4
  'group_no_access' => 'กลุ่มนี้ไม่มีการเข้าถึงแบบพิเศษ', //cpg1.4
  'notice' => 'หมายเหตุ', //cpg1.4
  'group_can_access' => 'อัลบั้มทั้งหมด "%s" สามารถเข้าถึงได้', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'ปรับปรุงภาพย่อ และ/หรือ ปรับขนาดภาพ ', //cpg1.4
'ลบหัวเรื่องไฟล์ ', //cpg1.4
'ปรับปรุงภาพย่อ และ/หรือ ปรับขนาดภาพ ', //cpg1.4
'ลบขนาดไฟล์เดิมแล้วแทนที่ด้วยขนาดไฟล์ใหม่', //cpg1.4
'ลบสื่อภาพหรือภาพเดิมเพื่อเพิ่มพื้นที่ใช้งาน', //cpg1.4
'ลบคำวิจารณ์ต่างๆที่ไม่มีภาพ', //cpg1.4
'โหลดขนาดไฟล์และข้อมูลขนาดภาพ (ถ้าคุณต้องการแก้ไขภาพ)', //cpg1.4
'ล้างตัวนับจำนวนผู้ชม', //cpg1.4
'แสดง phpinfo', //cpg1.4
'ปรังปรุงฐานข้อมูล', //cpg1.4
'แสดงไฟล์ประวัติ', //cpg1.4
);
$lang_util_php = array(
  'title' => 'เครื่องมือผู้ดูแล (ปรับขนาดภาพ)',
  'what_it_does' => 'คุณต้องการทำอะไร',
  'file' => 'ไฟล์',
  'problem' => 'ปัญหา', //cpg1.4
  'status' => 'สถานะ', //cpg1.4
  'title_set_to' => 'ปรับหัวเรื่องเป็น',
  'submit_form' => 'ส่งข้อมูล',
  'updated_succesfully' => 'ปรับปรุงข้อมูลเรียบร้อย',
  'error_create' => 'ผิดพลาด ในการสร้าง',
  'continue' => 'ขั้นตอนเพิ่มเติมของภาพ',
  'main_success' => 'ไฟล์ %s ปรับปรุงสำเร็จในการเป็นไฟล์หลัก',
  'error_rename' => 'ผิดพลาดในการเปลี่ยนชื่อจาก %s เป็น %s',
  'error_not_found' => 'ไม่พบไฟล์ %s',
  'back' => 'กลับเมนู',
  'thumbs_wait' => 'กำลังปรับปรุงภาพย่อ และ/หรือ ปรับขนาดภาพ, กรุณารอสักครู่...',
  'thumbs_continue_wait' => 'ขั้นตอนต่อไปปรับปรุงภาพย่อ และ/หรือ ปรับขนาดภาพ...',
  'titles_wait' => 'ปรับปรุงหัวเรื่อง, กรุณารอสั่ครู่...',
  'delete_wait' => 'กำลังลบหัวเรื่อง, กรุณารอสักครู่...',
  'replace_wait' => 'กำลังไฟล์เดิมแล้วแทนที่ด้วยไฟล์ใหม่ที่ปรับขนาดภาพ, กรุณารอสักครู่..',
  'instruction' => 'ข้อแนะนำการใช้งาน',
  'instruction_action' => 'เลือกว่าจะทำอะไร',
  'instruction_parameter' => 'เลือกค่าต่างๆ',
  'instruction_album' => 'เลือกอัลบั้ม',
  'instruction_press' => 'กดปุ่ม %s',
  'update' => 'ปรับปรุงภาพย่อ และ/หรือ ปรับขนาดภาพ',
  'update_what' => 'เลือกว่าต้องการจะปรับปรุงอะไร',
  'update_thumb' => 'ภาพย่ออย่างเดียว',
  'update_pic' => 'ปรับขนาดภาพอย่างเดียว',
  'update_both' => 'ภาพย่อและปรับขนาดภาพ',
  'update_number' => 'จำนวนการกระทำต่อภาพในหนึ่งครั้ง',
  'update_option' => '(พยายามตั้งค่าให้น้อยหากว่ากลัวเกิดปัญหาเรื่องรอนาน)',
  'filename_title' => 'ชื่อไฟล์ &rArr; หัวเรื่องไฟล์',
  'filename_how' => 'เลือกว่าจะแก้ไขไฟล์อย่างไร',
  'filename_remove' => 'เอานามสกุลไฟล์ .jpg ออกแล้วแทนด้วย _ (ขีดเส้นใต้) กับช่องว่าง',
  'filename_euro' => 'เปลี่ยน 2003_11_23_13_20_20.jpg เป็น 23/11/2003 13:20',
  'filename_us' => 'เปลี่ยน 2003_11_23_13_20_20.jpg เป็น 11/23/2003 13:20',
  'filename_time' => 'เปลี่ยน 2003_11_23_13_20_20.jpg เป็น 13:20',
  'delete' => 'ลบหัวเรื่องไฟล์หรือขนาดไฟล์(ภาพ)เดิม',
  'delete_title' => 'ลบหัวเรื่องไฟล์',
  'delete_title_explanation' => 'จะเป็นการลบหัวเรื่องไฟล์ทั้งหมดในอัลบั้มที่คุณกำหนด', //cpg1.4
  'delete_original' => 'ลบขนาดไฟล์เดิมของภาพ',
  'delete_original_explanation' => 'จะเป็นการลบขนาดไฟล์เดิมหรือของแท้ภาพ', //cpg1.4
  'delete_intermediate' => 'ลบสื่อภาพ', //cpg1.4
  'delete_intermediate_explanation' => 'เป็นการลบสื่อของภาพ<br />ใช้รายการนี้สำหรับเพิ่มพื้นที่ของระบบ ถ้าคุณตั้งให้ ไม่ทำงานในส่วน \'สร้างสื่อภาพ\' ในการ แก้ไข/กำหนดค่า หลังจากการเพิ่มรูปภาพ', //cpg1.4
  'delete_replace' => 'ลบขนาดไฟล์เดิมแล้วแทนที่ด้วยขนาดไฟล์ใหม่',
  'titles_deleted' => 'หัวเรื่องทั้งหมดในอัลบั้มที่เลือกได้ลบแล้ว', //cpg1.4
  'deleting_intermediates' => 'กำลังลบสื่อภาพอยู่ ,กรุณารอสักครู่...', //cpg1.4
  'searching_orphans' => 'ค้นหาคำวิจารณ์ที่ไม่มีภาพ, กรุณารอสักครู่...', //cpg1.4
  'select_album' => 'เลือกอัลบั้ม',
  'delete_orphans' => 'ลบคำวิจารณ์ในไฟล์(ภาพ)ที่ไม่มี', //cpg1.4
  'delete_orphans_explanation' => 'เป็นการค้นหาคำวิจารณ์ต่างๆที่ไม่มีภาพอยู่แล้วในระบบ<br />ให้เลือก ทุกอัลบั้มในข้อ <3>', //cpg1.4
  'refresh_db' => 'โหลดขนาดไฟล์และข้อมูลขนาดภาพ', //cpg1.4
  'refresh_db_explanation' => 'จะเป็นการโหลดไฟล์และข้อมูลไฟล์ต่างๆ. ใช้อันนี้หากไฟล์ไหนมีปัญหาหรือต้องการแก้ไขด้วยตัวคุณเอง', //cpg1.4
  'reset_views' => 'ล้างตัวนับจำนวนผู้ชม', //cpg1.4
  'reset_views_explanation' => 'ทำให้จำนวนผู้ชมภาพกลับไปเป็นศูนย์ในอัลบั้มที่เลือก', //cpg1.4
  'orphan_comment' => 'พบคำวิจารณ์ที่ไม่มีภาพ',
  'delete' => '* ลบ *',
  'delete_all' => 'ลบทั้งหมด',
  'delete_all_orphans' => 'ลบคำวิจารณ์ที่ไม่มีภาพ?', //cpg1.4
  'comment' => 'คำวิจารณ์: ',
  'nonexist' => 'แนบไฟล์ไปยังไฟล์ที่ไม่มี # ',
  'phpinfo' => 'แสดง phpinfo',
  'phpinfo_explanation' => 'เป็นการแสดงข้อมูลของ php ใน host ที่คุณวางอยู่<br /> - ในกรณีที่สงสัยว่า php ที่คุณใช้มีอะไรไม่รองรับระบบก็สามารถสอบถามเจ้าของ host ได้.', //cpg1.4
  'update_db' => 'ปรับปรุงฐานข้อมูล',
  'update_db_explanation' => 'กรณีที่คุณแทนที่ไฟล์, เพิ่ม หรือ อัพเกรดโปรแกรมจากรุ่นก่อนหน้าของ Coppermine, ให้ตรวจสอบให้แน่ใจก่อนที่จะทำการปรับปรุงฐานข้อมูล. เพราะจะเป็นการสร้างตารางที่จำเป็นในฐานข้อมูลของ Coppermine.',
  'view_log' => 'ดูไฟล์ประวัติ(Log Files)', //cpg1.4
  'view_log_explanation' => 'Coppermine จะทำการเก็บไฟล์ประวัติต่างๆในทำงานของระบบ คุณต้องกำหนดให้มีการเก็บประวัติก่อนถึงจะมีไฟล์ประวัติเกิดขึ้น โดยไปกำหนดได้ที่เมนู <a href="admin.php">แก้ไข/กำหนดค่า</a>.', //cpg1.4
  'versioncheck' => 'ตรวจสอบรุ่น(เวอร์ชั่น)', //cpg1.4
  'versioncheck_explanation' => 'ตรวจสอบรุ่นของ Coppermine ค้นหาไฟล์เก่าแล้วทำการปรับปรุงในกรณีที่คุณจะอัพเกรด', //cpg1.4
  'bridgemanager' => 'การจัดการ Bridge(ต่อเชื่อมโปรแกรมอื่น)', //cpg1.4
  'bridgemanager_explanation' => 'ทำงาน/ไม่ทำงาน ในการเชื่อมโยง (bridging) ของ Coppermine กับโปรแกรมอื่นๆ (เช่น CMS ของคุณ).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'ตรวจสอบรุ่น(เวอร์ชั่น)', //cpg1.4
  'what_it_does' => 'This page is meant for users who have updated their coppermine install. This script goes through the files on your webserver and tries to determine if your local file versions on the webserver are the same as the ones from the repository at http://coppermine.sourceforge.net, this way displaying the files you were meant to update as well.<br />It will show everything in red that needs to be fixed. Entries in yellow need looking into. Entries in green (or your default font color) are OK.<br />Click on the help icons to find out more.', //cpg1.4
  'online_repository_unable' => 'Unable to connect to online repository', //cpg1.4
  'online_repository_noconnect' => 'Coppermine was unable to connect to the online repository. This can have two reasons:', //cpg1.4
  'online_repository_reason1' => 'the coppermine online repository is currently down - check if you can browse this page: %s - if you can\'t access this page, try again later.', //cpg1.4
  'online_repository_reason2' => 'PHP on your webserver is configured with %s turned off (by default, it\'s turned on). If the server is yours to administer, turn this option on in <i>php.ini</i> (at least allow it to be overridden with %s). If you\'re webhosted, you will probably have to live with the fact that you can\'t compare your files to the online repository. This page will then only display the file versions that came with your distribution - updates will not be displayed.', //cpg1.4
  'online_repository_skipped' => 'Connection to online repository skipped', //cpg1.4
  'online_repository_to_local' => 'The script is defaulting to the local copy of the version-files now. The data may be inacurate if you have upgraded Coppermine and you haven\'t uploaded all files. Changes to the files after the release won\'t be taken into account as well.', //cpg1.4
  'local_repository_unable' => 'Unable to connect to the repository on your server', //cpg1.4
  'local_repository_explanation' => 'Coppermine was unable to connect to the repository file %s on your webserver. This probably means that you haven\'t uploaded the repository file to your webserver. Do so now and then try to run this page once more (hit refresh).<br />If the script still fails, your webhost might have disabled parts of <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> completely. In this case, you simply won\'t be able to use this tool at all, sorry.', //cpg1.4
  'coppermine_version_header' => 'Installed Coppermine version', //cpg1.4
  'coppermine_version_info' => 'You have currently installed: %s', //cpg1.4
  'coppermine_version_explanation' => 'If you think this is entirely wrong and you\'re supposed to be running a higher version of Coppermine, you probably haven\'t uploaded the most recent version of the file <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Version comparison', //cpg1.4
  'folder_file' => 'folder/file', //cpg1.4
  'coppermine_version' => 'รุ่นของCoppermine', //cpg1.4
  'file_version' => 'รุ่นของไฟล์', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'เขียนได้', //cpg1.4
  'not_writable' => 'เขียนไม่ได้', //cpg1.4
  'help' => 'Help', //cpg1.4
  'help_file_not_exist_optional1' => 'ไม่มี ไฟล์/โฟลเดอร์', //cpg1.4
  'help_file_not_exist_optional2' => 'The file/folder %s has not been found on your server. Although it is optional you should upload it (using your FTP client) to your webserver if you are experiencing problems.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'ไม่พบไฟล์/โฟลเดอร์', //cpg1.4
  'help_file_not_exist_mandatory2' => 'The file/folder %s has not been found on your server, although it is mandatory. Upload the file to your webserver (using your FTP client).', //cpg1.4
  'help_no_local_version1' => 'No local file version', //cpg1.4
  'help_no_local_version2' => 'The script was unable to extract a local file version - your file is either outdated or you have modified it, removing the header information on the way. Updating the file is recommended.', //cpg1.4
  'help_local_version_outdated1' => 'Local version outdated', //cpg1.4
  'help_local_version_outdated2' => 'Your version of this file seems to be from an older version of Coppermine (you probably upgraded). Make sure to update this file as well.', //cpg1.4
  'help_local_version_na1' => 'Unable to extract cvs version info', //cpg1.4
  'help_local_version_na2' => 'The script could not determine what cvs version the file on your webserver is. You should upload the file from your package.', //cpg1.4
  'help_local_version_dev1' => 'Development version', //cpg1.4
  'help_local_version_dev2' => 'The file on your webserver seems to be newer than your Coppermine version. You are either using a development file (you should only do so if you know what you are doing), or you have upgraded your Coppermine install and not uploaded include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'โฟลเดอร์ไม่สามารถเขียนได้', //cpg1.4
  'help_not_writable2' => 'Change file permissions (CHMOD) to grant the script write access to the folder %s and everything within it.', //cpg1.4
  'help_writable1' => 'โฟลเดอร์เขียนได้', //cpg1.4
  'help_writable2' => 'The folder %s is writable. This is an unnecessary risk, coppermine only needs read/execute access.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine was not able to determine wether the folder is writable.', //cpg1.4
  'your_file' => 'ไฟล์ของคุณ', //cpg1.4
  'reference_file' => 'reference file', //cpg1.4
  'summary' => 'ผลรวม', //cpg1.4
  'total' => 'รวม ไฟล์/โฟลเดอร์ ที่ตรวจสอบ', //cpg1.4
  'mandatory_files_missing' => 'Mandatory files missing', //cpg1.4
  'optional_files_missing' => 'Optional files missing', //cpg1.4
  'files_from_older_version' => 'Files left over from outdated Coppermine version', //cpg1.4
  'file_version_outdated' => 'Outdated file versions', //cpg1.4
  'error_no_data' => 'The script made a boo, it was not able to retrieve any information. Sorry for the inconvenience.', //cpg1.4
  'go_to_webcvs' => 'go to %s', //cpg1.4
  'options' => 'Options', //cpg1.4
  'show_optional_files' => 'show optional folders/files', //cpg1.4
  'show_mandatory_files' => 'show mandatory files', //cpg1.4
  'show_file_versions' => 'แสดงรุ่นของไฟล์', //cpg1.4
  'show_errors_only' => 'show folders/files with errors only', //cpg1.4
  'show_permissions' => 'show folder permissions', //cpg1.4
  'show_condensed_output' => 'show condensed ouput (for easier screenshots)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine is installed in the webroot', //cpg1.4
  'connect_online_repository' => 'try connecting to the online repository', //cpg1.4
  'show_additional_information' => 'show additional information', //cpg1.4
  'no_webcvs_link' => 'don\'t display web svn link', //cpg1.4
  'stable_webcvs_link' => 'display web svn link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web svn link to devel branch', //cpg1.4
  'submit' => 'ส่งค่าเปลี่ยนแปลง/แสดงใหม่', //cpg1.4
  'reset_to_defaults' => 'ล้างแล้วกลับไปค่าเริ่มต้น', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'ลบไฟล์ประวัติทั้งหมด', //cpg1.4
  'delete_this' => 'ลบไฟล์ประวัตินี้', //cpg1.4
  'view_logs' => 'ดูไฟล์ประวัติ', //cpg1.4
  'no_logs' => 'ไม่มีไฟล์ประวัติสร้างขึ้นมา', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>This module allows to use <b>Windows XP</b> web publishing wizard with Coppermine.</p><p>Code is based on article posted by
EOT;

$lang_xp_publish_required = <<<EOT
<h2>What is required</h2><ul><li>Windows XP in order to have the wizard.</li><li>A working installation of Coppermine on which <b>the web upload function works properly.</b></li></ul><h2>How to install on client side</h2><ul><li>Right click on
EOT;

$lang_xp_publish_select = <<<EOT
Select &quot;save target as..&quot;. Save the file on your hard drive. When saving the file, check that the proposed file name is <b>cpg_###.reg</b> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers). When downloaded, double click on the file in order to register your server with the web publishing wizard.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>In Windows Explorer, select some files and click on <b>Publish xxx on the web</b> in the left pane.</li><li>Confirm your file selection. Click on <b>Next</b>.</li><li>In the list of services that appear, select the one for your photo gallery (it has the name of your gallery). If the service does not appear, check that you have installed <b>cpg_pub_wizard.reg</b> as described above.</li><li>Input your login information if required.</li><li>Select the target album for your pictures or create a new one.</li><li>Click on <b>next</b>. The upload of your pictures starts.</li><li>When it is completed, check your gallery to see if pictures have been properly added.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes :</h2><ul><li>Once the upload has started, the wizard can't display any error message returned by the script so you can't know if the upload failed or succeeded until you check your gallery.</li><li>If the upload fails, enable &quot;Debug mode&quot; on the Coppermine admin page, try with one single picture and check error messages in the
EOT;

$lang_xp_publish_flood = <<<EOT
file that is located in Coppermine directory on your server.</li><li>In order to avoid that the gallery be <i>flooded</i> by pictures uploaded through the wizard, only the <b>gallery admins</b> and <b>users that can have their own albums</b> can use this feature.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Thai Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'ยินดีต้อนรับคุณ <b>%s</b>,', //cpg1.4
  'need_login' => 'You need to login to the gallery using your web browser before you can use this wizard.<p/><p>When you login don\'t forget to select the <b>remember me</b> option if it is present.', //cpg1.4
  'no_alb' => 'Sorry but there is no album where you are allowed to upload pictures with this wizard.', //cpg1.4
  'upload' => 'ส่งภาพของคุณสู่อัลบั้มที่สร้าง', //cpg1.4
  'create_new' => 'สร้างอัลบั้มใหม่สำหรับภาพของคุณ', //cpg1.4
  'album' => 'อัลบั้มภาพ', //cpg1.4
  'category' => 'หมวดหมู่ภาพ', //cpg1.4
  'new_alb_created' => 'อัลบั้มใหม่ของคุณ &quot;<b>%s</b>&quot; ได้ถูกสร้างขึ้น', //cpg1.4
  'continue' => 'กด &quot;ต่อไป&quot; เพื่อเริ่มส่งภาพ(อัพโหลด)รูปของคุณ', //cpg1.4
  'link' => 'เชื่อมโยงตรงนี้', //cpg1.4
);
}
?>