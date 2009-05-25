<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2009 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License version 3
  as published by the Free Software Foundation.
  
  ********************************************
  Coppermine version: 1.4.24
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Arabic', //cpg1.4
  'lang_name_native' => 'العربيه', //cpg1.4
  'lang_country_code' => 'SA', //cpg1.4
  'trans_name'=> 'سمو المشاعر',
  'trans_email' => '',
  'trans_website' => '',
  'trans_date' => '2006-03-18',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('بايت', 'كيلوبايت', 'ميجابايت');

// Day of weeks and months
$lang_day_of_week = array('الاحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعه', 'السبت');
$lang_month = array('يناير', 'فبراير', 'مارس', 'ابريل', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// Some common strings
$lang_yes = 'نعم';
$lang_no  = 'لا';
$lang_back = 'العوده';
$lang_continue = 'تابع';
$lang_info = 'معلومات';
$lang_error = 'خطأ';
$lang_check_uncheck_all = 'تحديد / ازالة تحديد الكل'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'ملفات عشوائيه',
  'lastup' => 'آخر ما أضيف',
  'lastalb'=> 'آخر الألبومات المضافه',
  'lastcom' => 'آخر التعليقات',
  'topn' => 'الأكثر تصفحاً',
  'toprated' => 'الأفضل ترشيحاً',
  'lasthits' => 'آخر مشاهده',
  'search' => 'نتائج البحث',
  'favpics'=> 'الملفات المفضله',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'لا تملك الصلاحيه لدخول هذه الصفحه.',
  'perm_denied' => 'لا تملك الصلاحيه للقيام بهذا العمل.',
  'param_missing' => 'تم نداء السكريبت بدون وجود البراميتر المطلوب.',
  'non_exist_ap' => 'الفايل المختير لي موجوداً!',
  'quota_exceeded' => 'لا تملك المساحه الكافيه<br /><br />لديك [quota]Kمن المساحه, فايلاتك تستخدم [space]K, بإضافة هذا الفايل ستكون قد تعديت المساحه المسموح بها.',
  'gd_file_type_err' => 'عندما تستخدم مكتبة الجي دي فإن المسموح به هو JPEG and PNGفقط.',
  'invalid_image' => 'الصوره التي وضعتها غير صالحه أو أن مكتبة الجي دي لا يمكنها التعامل معها',
  'resize_failed' => 'لم يمكن صناعة دلاله مصغره للصوره ولم يمكن حجم الصوره.',
  'no_img_to_display' => 'لا يوجد صوره للعرض',
  'non_exist_cat' => 'المجلد التي احترته لا يوجد',
  'orphan_cat' => 'مجلد ليس له أصل يعود له, افتح ادراة المجلدات لحل المشكله!',
  'directory_ro' => 'Directory \'%s\' لا يمكن تغييره, لا يمكن حذف الملفات',
  'non_exist_comment' => 'التعليق الذي اخترته غير موجود.',
  'pic_in_invalid_album' => 'الملف ليس في مجلد (%s)!?',
  'banned' => 'أنت محظور من استخدام هذا الموقع.',
  'not_with_udb' => 'هذا الأمر تم توقيفه لأنه يمكن أن يكون متعارضاً مع خواص المنتدى أو قد يوفره المنتدى فلا حاجة له هنا.',
  'offline_title' => 'غير متصل',
  'offline_text' => 'المعرض مغلق حالياً الرجاء العوده لاحقاً ^_^',
  'ecards_empty' => 'لا يوجد كروت لعرضها حالياً.',
  'action_failed' => 'فشل تنفيذ الأمر.لا يمكن تنفيذ طلبك.',
  'no_zip' => 'المكتبات المطلوبه لصنع ZIP فايل غير موجوده .  الرجاء مراجعة الإداره.',
  'zip_type' => 'لا تملك الصلاحيه لرفع ملفات ZIP.',
  'database_query' => 'حصل خطا عند التعامل مع الداتا بيس', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'مساعده في كود بي بي'; //cpg1.4
$lang_bbcode_help = 'تستطيع اضافة لنكات بستخدام أكواد البي بي : <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'العوده للصفحه الرئيسيه',
  'home_lnk' => 'الصفحه الرئيسيه',
  'alb_list_title' => 'الذهاب لقائمة الألبومات',
  'alb_list_lnk' => 'قائمة الألبومات',
  'my_gal_title' => 'الذهاب لمعرضي الخاص',
  'my_gal_lnk' => 'معرضي الخاص',
  'my_prof_title' => 'الذهاب للملف الخاص', //cpg1.4
  'my_prof_lnk' => 'الملف الخاص',
  'adm_mode_title' => 'الذهاب لحالة الآدمن',
  'adm_mode_lnk' => 'حالة الآدمن',
  'usr_mode_title' => 'الذهاب لحالة العضو',
  'usr_mode_lnk' => 'حالة العضو',
  'upload_pic_title' => 'رفع ملف للألبوم',
  'upload_pic_lnk' => 'رفع ملف',
  'register_title' => 'تسجيل العضويه',
  'register_lnk' => 'تسجيل',
  'login_title' => 'الدخول', //cpg1.4
  'login_lnk' => 'دخول',
  'logout_title' => 'الخروج', //cpg1.4
  'logout_lnk' => 'خروج',
  'lastup_title' => 'عرض أحدث الملفات المرفوعه', //cpg1.4
  'lastup_lnk' => 'آخر الملفات المرفوعه',
  'lastcom_title' => 'عرض أحدث التعليقات', //cpg1.4
  'lastcom_lnk' => 'آخر التعليقات',
  'topn_title' => 'الملفات الأكثر تصفحاً', //cpg1.4
  'topn_lnk' => 'الأكثر تصفحاً',
  'toprated_title' => 'عرض الأفضل ترشيحاً', //cpg1.4
  'toprated_lnk' => 'الأفضل ترشيحاً',
  'search_title' => 'بحث في المعرض', //cpg1.4
  'search_lnk' => 'بحث',
  'fav_title' => 'الذهاب للمفضله', //cpg1.4
  'fav_lnk' => 'المفضله',
  'memberlist_title' => 'عرض لائحة الأعضاء',
  'memberlist_lnk' => 'لائحة الأعضاء',
  'faq_title' => 'الأسئله المسؤوله عادةً &quot;Coppermine&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'الموافقه على الملفات المرفوعه', //cpg1.4
  'upl_app_lnk' => 'قبول الرفع',
  'admin_title' => 'الذهاب للتعديلات', //cpg1.4
  'admin_lnk' => 'تعديلات', //cpg1.4
  'albums_title' => 'الذهاب للتحكم بالألبومات', //cpg1.4
  'albums_lnk' => 'ألبومات',
  'categories_title' => 'الذهاب للتحكم بالتصنيفات', //cpg1.4
  'categories_lnk' => 'التصنيفات',
  'users_title' => 'الذهاب لتعديلات المستخدمين', //cpg1.4
  'users_lnk' => 'المستخدمين',
  'groups_title' => 'الذهاب لتعديلات المجموعات', //cpg1.4
  'groups_lnk' => 'المحموعات',
  'comments_title' => 'عرض جميع التعليقات', //cpg1.4
  'comments_lnk' => 'مراجعة التعليقات',
  'searchnew_title' => 'الذهاب للباتش و اضافة عمليه', //cpg1.4
  'searchnew_lnk' => 'اضافة ملفات الباتش',
  'util_title' => 'الذهاب لأدوات الآدمن', //cpg1.4
  'util_lnk' => 'أدوات الآدمن',
  'key_title' => 'الذهاب الى معجم الكلمه المفتاحيه', //cpg1.4
  'key_lnk' => 'معجم الكلمه المفتاحيه', //cpg1.4
  'ban_title' => 'الذهاب للأعضاء المحظورين', //cpg1.4
  'ban_lnk' => 'الأعضاء المحظورين',
  'db_ecard_title' => 'معاينة الكروت', //cpg1.4
  'db_ecard_lnk' => 'عرض الكروت',
  'pictures_title' => 'ترتيب صوري', //cpg1.4
  'pictures_lnk' => 'ترتيب صوري', //cpg1.4
  'documentation_lnk' => 'الوثائق', //cpg1.4
  'documentation_title' => 'مرجع الكوبر ماين', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'صنع و ترتيب البومات', //cpg1.4
  'albmgr_lnk' => 'صنع و ترتيب الألبومات',
  'modifyalb_title' => 'الذهاب لتعديل الألبومات',  //cpg1.4
  'modifyalb_lnk' => 'تعديل الألبومات',
  'my_prof_title' => 'الذهاب لملفي الشخصي', //cpg1.4
  'my_prof_lnk' => 'ملفي الشخصي',
);

$lang_cat_list = array(
  'category' => 'تصنيفات',
  'albums' => 'البومات',
  'pictures' => 'ملفات',
);

$lang_album_list = array(
  'album_on_page' => '%d الألبومات على الصفحات %d ',
);

$lang_thumb_view = array(
  'date' => 'التاريخ',
  //Sort by filename and title
  'name' => 'اسم الملف',
  'title' => 'العنوان',
  'sort_da' => 'الترتيب بالتاريخ تصاعدياً',
  'sort_dd' => 'الترتيب بالتاريخ تنازلياً',
  'sort_na' => 'الترتيب بالأسم تصاعدياً',
  'sort_nd' => 'الترتيب بالإسم تنازلياً',
  'sort_ta' => 'الترتيب بالعنوان تصاعدياً',
  'sort_td' => 'الترتيب بالعنوان تنازلياً',
  'position' => 'الموقع', //cpg1.4
  'sort_pa' => 'الترتيب بالموقع تصاعدياً', //cpg1.4
  'sort_pd' => 'الترتيب بالموقع تنازلياً', //cpg1.4
  'download_zip' => 'التنزيل كـ ZIPفايل',
  'pic_on_page' => '%d ملف على %d صفحات',
  'user_on_page' => '%d مستخدم على %d صفحات',
  'enter_alb_pass' => 'ادخل الكلمه السريه للألبوم', //cpg1.4
  'invalid_pass' => 'كلمه سريه خاطئه', //cpg1.4
  'pass' => 'كلمه سريه', //cpg1.4
  'submit' => 'تقديم', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'العوده لصفحة الصور الرئيسيه',
  'pic_info_title' => 'اخفاء او عرض معلومات الملف',
  'slideshow_title' => 'معرض الصور',
  'ecard_title' => 'ارسال هذا الملف كـ كارد',
  'ecard_disabled' => ' الكروت غير مفعله (يعني ما يشتغلن) ',
  'ecard_disabled_msg' => 'ليس لك الصلاحيه لإرسال كرت', //js-alert
  'prev_title' => 'رؤية الملف السابق',
  'next_title' => 'رؤية الملف التالي',
  'pic_pos' => 'الملف %s/%s',
  'report_title' => 'الإبلاغ عن هذا الملف عند الإداره', //cpg1.4
  'go_album_end' => 'الذهاب للنهايه', //cpg1.4
  'go_album_start' => 'العوده للبدايه', //cpg1.4
  'go_back_x_items' => 'العوده %s ملف', //cpg1.4
  'go_forward_x_items' => 'التقدم %s ملف', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'قيّم هذا الملف ',
  'no_votes' => '(لا يوجد تصويت)',
  'rating' => '(التصويت حالياً : %s / 5 مع %s صوت)',
  'rubbish' => 'خايسه',
  'poor' => 'مش حلوه',
  'fair' => 'عاديه',
  'good' => 'حلوه',
  'excellent' => 'وايد حلوه',
  'great' => 'رووعه',
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
  CRITICAL_ERROR => 'خطأ خطير!!',
  'file' => 'ملف: ',
  'line' => 'خط: ',
);

$lang_display_thumbnails = array(
  'filename' => 'اسم الملف=', //cpg1.4
  'filesize' => 'حجم الملف=', //cpg1.4
  'dimensions' => 'الأبعاد=', //cpg1.4
  'date_added' => 'تاريخ الإضافه=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s تعليقات',
  'n_views' => '%s مشاهده',
  'n_votes' => '(%s صوت)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'معلومات الدي بق',
  'select_all' => 'تحديد الكل',
  'copy_and_paste_instructions' => 'If you\'re going to request help on the coppermine support board, copy-and-paste this debug output into your posting when requested, along with the error message you get (if any). Make sure to replace any passwords from the query with *** before posting. <br />Note: This is for information only and does not mean there is an error with your gallery.', //cpg1.4
  'phpinfo' => 'عرض معلومات بي اتش بي',
  'notices' => 'نوتات', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'اللغه المفضله',
  'choose_language' => 'اختر لغتك',
);

$lang_theme_selection = array(
  'reset_theme' => 'الستايل المفضل',
  'choose_theme' => 'اختر ستايلك',
);

$lang_version_alert = array(
  'version_alert' => 'نسخه غير مرفقه!', //cpg1.4
  'security_alert' => 'انذار أمني!', //cpg1.4.3
  'relocate_exists' => 'Remove the <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> file from your website!',
  'no_stable_version' => 'You are running Coppermine %s (%s) which is only meant for very experienced users - this version comes without support nor any warranties. Use it at your own risk or downgrade to the latest stable version if you need support!', //cpg1.4
  'gallery_offline' => ' المعرض مغلق و مفتوح فقط للأدمن. لا تنسى تشغيله بعد الا نتهاء من التعديلات.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'السابق', //cpg1.4
  'next' => 'التالي', //cpg1.4
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
  'error_wakeup' => "لم يمكن تشغيل البلق إن'%s'", //cpg1.4
  'error_install' => "لم يمكن تركيب البلق ان '%s'", //cpg1.4
  'error_uninstall' => "لم يمكن حذف البلق ان '%s'", //cpg1.4
  'error_sleep' => "لم يمكن اغلاق البلق ان '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamation',
  'Question' => 'Question',
  'Very Happy' => 'Very Happy',
  'Smile' => 'Smile',
  'Sad' => 'Sad',
  'Surprised' => 'Surprised',
  'Shocked' => 'Shocked',
  'Confused' => 'Confused',
  'Cool' => 'Cool',
  'Laughing' => 'Laughing',
  'Mad' => 'Mad',
  'Razz' => 'Razz',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => 'Crying or Very sad',
  'Evil or Very Mad' => 'Evil or Very Mad',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Rolling Eyes',
  'Wink' => 'Wink',
  'Idea' => 'Idea',
  'Arrow' => 'Arrow',
  'Neutral' => 'Neutral',
  'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'مغادرة حالة الآدمن و يعلك عالقوه',
  1 => 'الدخول لحالة الأدمن مرحبا بك فمكتبك :D',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'يحب ان تسمي الألبوم !', //js-alert
  'confirm_modifs' => 'أأنت متأكد من هذه التعديلات?', //js-alert
  'no_change' => 'لم تغير شي !', //js-alert
  'new_album' => 'البوم جديد',
  'confirm_delete1' => 'أأنت متأكد من حذف هذا الألبوم ?', //js-alert
  'confirm_delete2' => '\nكل التعليقات ستحذف !', //js-alert
  'select_first' => 'اختر البوماً أولاً', //js-alert
  'alb_mrg' => 'مدير الألبومات',
  'my_gallery' => '* ألبومي *',
  'no_category' => '* لا تصنيفات *',
  'delete' => 'حذف',
  'new' => 'جديد',
  'apply_modifs' => 'تنفيذ التعديلات',
  'select_category' => 'اختيار تصنيفات',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'حظر مستخدم', //cpg1.4
  'user_name' => 'اسم المستخدم', //cpg1.4
  'ip_address' => 'رقم الآي بي', //cpg1.4
  'expiry' => 'تاريخ الإنتهاء(اتركه فارغاً اذا كان للأبد)', //cpg1.4
  'edit_ban' => 'تخزين التعديلات', //cpg1.4
  'delete_ban' => 'حذف', //cpg1.4
  'add_new' => 'وضع حظر جديد', //cpg1.4
  'add_ban' => 'اضافه', //cpg1.4
  'error_user' => 'لم نحد المستخدم', //cpg1.4
  'error_specify' => 'يجب تحديد اسم مستخدم أو رقم آي بي', //cpg1.4
  'error_ban_id' => 'رقم البان خاطئ!', //cpg1.4
  'error_admin_ban' => 'لا يمكن حظر نفسك!', //cpg1.4
  'error_server_ban' => 'كنت بتسوي بان للسيرفر..هلو..ما تقدر -_-', //cpg1.4
  'error_ip_forbidden' => 'You cannnot ban this IP - it is non-routable (private) anyway!<br />If you want to allow banning for private IPs, change this in your <a href="admin.php">Config</a> (only makes sense when Coppermine runs on a LAN).', //cpg1.4
  'lookup_ip' => 'بحث عن آي بي', //cpg1.4
  'submit' => 'اذهب!', //cpg1.4
  'select_date' => 'اختر التاريخ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Bridge Wizard',
  'warning' => 'Warning: when using this wizard you have to understand that sensitive data is being sent using html forms. Only run it on your own PC (not on a public client like an internet cafe), and make sure to clear the browser cache and temporary files after you have finished, or others might be able to access your data!',
  'back' => 'عوده',
  'next' => 'التالي',
  'start_wizard' => 'Start bridging wizard',
  'finish' => 'انتهى',
  'hide_unused_fields' => 'hide unused form fields (recommended)',
  'clear_unused_db_fields' => 'clear invalid database entries (recommended)',
  'custom_bridge_file' => 'your custom bridge file\'s name (if the bridge file\'s name is <i>myfile.inc.php</i>, enter <i>myfile</i> into this field)',
  'no_action_needed' => 'No action needed in this step. Just click \'next\' to continue.',
  'reset_to_default' => 'Reset to default value',
  'choose_bbs_app' => 'choose application to bridge coppermine with',
  'support_url' => 'Go here for support on this application',
  'settings_path' => 'path(s) used by your BBS app',
  'database_connection' => 'database connection',
  'database_tables' => 'database tables',
  'bbs_groups' => 'BBS groups',
  'license_number' => 'License number',
  'license_number_explanation' => 'enter your license number (if applicable)',
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
  'username' => 'Username',
  'password' => 'Password',
  'disable_submit' => 'submit',
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
  'wait' => 'wait',
  'create_redir_file' => 'Create redirection file (recommended)',
  'create_redir_file_explanation' => 'To redirect users back to Coppermine once they logged into your BBS, you need a redirection file to be created within your BBS folder. When this option is checked, the bridge manager will attempt to create this file for you, or give you code ready to copy-and-paste to create the file manually.',
  'browse' => 'browse',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'التقويم', //cpg1.4
  'close' => 'اغلاق', //cpg1.4
  'clear_date' => 'حذف التاريخ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'المعلومات المطلوبة للعملية \'%s\'لم تعطى  !',
  'unknown_cat' => 'لتصنيف المختار غير معروف',
  'usergal_cat_ro' => 'لايسمح بالغاء تصنيف المستخدمين !',
  'manage_cat' => 'ادارة التصنيفات',
  'confirm_delete' => 'هل انت متأكد من الغاء هذا التصنيف',
  'category' => 'التصنيف',
  'operations' => 'العمليات',
  'move_into' => 'انقل الى',
  'update_create' => 'اضافة تعديل تصنيف',
  'parent_cat' => 'التصنيف الرئيسي',
  'cat_title' => 'عنوان التصنيف',
  'cat_thumb' => 'تصنيف فرعي', //cpg1.3.0
  'cat_desc' => 'شرح التصنيف',
  'save_cfg' => 'حفظ التغييرات', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'خصائص المعرض', //cpg1.4
  'manage_exif' => 'Manage exif display', //cpg1.4
  'manage_plugins' => 'ادارة البلق انز', //cpg1.4
  'manage_keyword' => 'ادارة الكي ووردز', //cpg1.4
  'restore_cfg' => 'اعادة برمجة المصنع',
  'save_cfg' => 'حفظ التغييرات الجديده',
  'notes' => 'النوتات',
  'info' => 'المعلومات',
  'upd_success' => 'Coppermine configuration was updated',
  'restore_success' => 'Coppermine default configuration restored',
  'name_a' => 'Name ascending',
  'name_d' => 'Name descending',
  'title_a' => 'Title ascending',
  'title_d' => 'Title descending',
  'date_a' => 'Date ascending',
  'date_d' => 'Date descending',
  'pos_a' => 'Position ascending', //cpg1.4
  'pos_d' => 'Position descending', //cpg1.4
  'th_any' => 'Max Aspect',
  'th_ht' => 'Height',
  'th_wd' => 'Width',
  'label' => 'label',
  'item' => 'item',
  'debug_everyone' => 'Everyone',
  'debug_admin' => 'Admin only',
  'no_logs'=> 'Off', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'All', //cpg1.4
  'view_logs' => 'View logs', //cpg1.4
  'click_expand' => 'click section name to expand', //cpg1.4
  'expand_all' => 'Expand All', //cpg1.4
  'notice1' => '(*) These settings mustn\'t be changed if you already have files in your database.', //cpg1.4 - (relocated)
  'notice2' => '(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting must not be changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.', //cpg1.4 - (relocated)
  'notice3' => '(***) All log files are written in english.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Function disabled when using bb integration', //cpg1.4
  'auto_resize_everyone' => 'Everyone', //cpg1.4
  'auto_resize_user' => 'User only', //cpg1.4
  'ascending' => 'ascending', //cpg1.4
  'descending' => 'descending', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'General settings',
  array('Gallery name', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Gallery description', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Gallery administrator email', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL of your coppermine gallery folder (no \'index.php\' or similar at the end)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL of your home page', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Allow ZIP-download of favorites', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Timezone difference relative to GMT (current time: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Enable encrypted passwords (can not be undone)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Enable help-icons (help available in English only)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Enable clickable keywords in search','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Enable plugins', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Allow banning of non-routable (private) IP addresses', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Browsable batch-add interface', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Language &amp; Charset settings',
  array('Language', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Fallback to English if translated phrase not found?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Character encoding', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Display language list', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Display language flags', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Display &quot;reset&quot; in language selection', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Themes settings',
  array('Theme', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Display theme list', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Display &quot;reset&quot; in theme selection', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Display FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Custom menu link name', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Custom menu link URL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Display bbcode help', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Show the vanity block on themes that are defined as XHTML and CSS compliant','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Path to custom header include', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Path to custom footer include', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Album list view',
  array('Width of the main table (pixels or %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Number of levels of categories to display', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Number of albums to display', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Number of columns for the album list', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Size of thumbnails in pixels', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('The content of the main page', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Show first level album thumbnails in categories','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Sort categories alphabetically (instead of custom sort order)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Show number of linked files','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Thumbnail view',
  array('Number of columns on thumbnail page', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Number of rows on thumbnail page', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Maximum number of tabs to display', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Display file caption (in addition to title) below the thumbnail', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Display number of views below the thumbnail', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Display number of comments below the thumbnail', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Display uploader name below the thumbnail', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Display file name below the thumbnail', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('Display album description', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Default sort order for files', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Minimum number of votes for a file to appear in the \'top-rated\' list', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Image view', //cpg1.4
  array('Width of the table for file display (pixels or %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('File information is visible by default', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Max length for an image description', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Max number of characters in a word', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Show film strip', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Display file name under film strip thumbnail', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Number of items in film strip', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Slideshow interval in milliseconds (1 second = 1000 milliseconds)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Comment settings', //cpg1.4
  array('Filter bad words in comments', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Allow smiles in comments', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Allow several consecutive comments on one file from the same user (disable flood protection)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Max number of lines in a comment', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Maximum length of a comment', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Notify admin of comments by email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Sort order of comments', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Prefix for anonymous comments authors', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Files and thumbnails settings',
  array('Quality for JPEG files', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Max dimension of a thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Use dimension ( width or height or Max aspect for thumbnail ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Create intermediate pictures','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Max width or height of an intermediate picture/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Max size for uploaded files (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Max width or height for uploaded pictures/videos (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Auto resize images that are larger than max width or height', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Files and thumbnails advanced settings',
  array('Albums can be private (Note: if you switch from \'yes\' to \'no\' any current private albums will become public)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Show private album Icon to unlogged user','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Characters forbidden in filenames', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Allowed image types', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Allowed movie types', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Movie Playback Autostart', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Allowed audio types', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Allowed document types', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Method for resizing images','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Path to ImageMagick \'convert\' utility (example /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Command line options for ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Read EXIF data in JPEG files', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Read IPTC data in JPEG files', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('The album directory <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('The directory for user files <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('The prefix for intermediate pictures <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('The prefix for thumbnails <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Default mode for directories', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('Default mode for files', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'User settings',
  array('Allow new user registrations', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Allow unlogged users (guest or anonymous) access', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('User registration requires email verification', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Notify admin of user registration by email', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Admin activation of registrations', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Allow two users to have the same email address', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Notify admin of user upload awaiting approval', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Allow logged in users to view memberlist', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Allow users to change their email address in profile', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Allow users to retain control over their pics in public galleries', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Number of failed login attempts until temporary ban (to avoid brute force attacks)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Duration of a temporary ban after failed logins', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Enable Report to Admin', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Custom fields for user profile (leave blank if unused).
  Use Profile 6 for long entries, such as biographies', //cpg1.4
  array('Profile 1 name', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Profile 2 name', 'user_profile2_name', 0), //cpg1.4
  array('Profile 3 name', 'user_profile3_name', 0), //cpg1.4
  array('Profile 4 name', 'user_profile4_name', 0), //cpg1.4
  array('Profile 5 name', 'user_profile5_name', 0), //cpg1.4
  array('Profile 6 name', 'user_profile6_name', 0), //cpg1.4

  'Custom fields for image description (leave blank if unused)',
  array('Field 1 name', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Field 2 name', 'user_field2_name', 0),
  array('Field 3 name', 'user_field3_name', 0),
  array('Field 4 name', 'user_field4_name', 0),

  'Cookies settings',
  array('Cookie name', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie path', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Email settings  (usually nothing has to be changed here; leave all fields blank when not sure)', //cpg1.4
  array('SMTP Host (when left blank, sendmail will be used)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP Username', 'smtp_username', 0), //cpg1.4
  array('SMTP Password', 'smtp_password', 0), //cpg1.4

  'Logging and statistics', //cpg1.4
  array('Logging mode <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Log ecards', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Keep detailed vote statistics','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Keep detailed hit statistics','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Maintenance settings', //cpg1.4
  array('Enable debug mode', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Display notices in debug mode', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Gallery is offline', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'البطايق المرسله',
  'ecard_sender' => 'المرسل',
  'ecard_recipient' => 'المستقبل',
  'ecard_date' => 'التاريخ',
  'ecard_display' => 'عرض البطايق',
  'ecard_name' => 'الأسم',
  'ecard_email' => 'الإيميل',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => 'تصاعدياً',
  'ecard_descending' => 'تنازلياً',
  'ecard_sorted' => 'مرتبه',
  'ecard_by_date' => 'بالتاريخ',
  'ecard_by_sender_name' => 'باسم المرسل',
  'ecard_by_sender_email' => 'بايميل المرسل',
  'ecard_by_sender_ip' => 'برقم آي بي المرسل',
  'ecard_by_recipient_name' => 'باسم المستقبل',
  'ecard_by_recipient_email' => 'بايميل المستقبل',
  'ecard_number' => 'عَرْض السجلِ %s إلى %s %s', //cpg1.3.0
  'ecard_goto_page' => 'اذهب الى الصفحة', //cpg1.3.0
  'ecard_records_per_page' => 'سجلات لكلّ صفحةِ', //cpg1.3.0
  'check_all' => 'دقق الكل', //cpg1.3.0
  'uncheck_all' => 'لا تدقق الكل', //cpg1.3.0
  'ecards_delete_selected' => 'احدف البطاقات المختارة', //cpg1.3.0
  'ecards_delete_confirm' => 'انت متأكد من عملية الحذف !!', //cpg1.3.0
  'ecards_delete_sure' => 'نعم متأكد', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'يجب ان تكتب اسمك وتعليقك',
  'com_added' => 'تم اضافة التعليق',
  'alb_need_title' => 'يجب ان تحدد عنوان للالبوم !',
  'no_udp_needed' => 'لا حاجة للتحديث.',
  'alb_updated' => 'تم تحديث الالبوم',
  'unknown_album' => 'الالبوم المختار غير موجود او ليس لك الصلاحية للتحميل في هذا الالبوم',
  'no_pic_uploaded' => 'لا توجد صور محملة !<br /><br />اذا كنت فعلا اخترت صور للتحميل, تأكد من ان خادم الصفحات يسمح بالتحميل...',
  'err_mkdir' => 'لم استطع تكوين المجلد %s !',
  'dest_dir_ro' => 'وجهة الملف %s غير قابل للكتابة !',
  'err_move' => 'من المستحيل نقل %s الى %s !',
  'err_fsize_too_large' => 'الصور التي تريد تحميلها كبيرة جدا (اكبر حجم للصورة هو %s x %s) !',
  'err_imgsize_too_large' => 'الصور التي تريد تحميلها كبيرة جدا (اكبر حجم للصورة هو %s KB) !',
  'err_invalid_img' => 'الصورة التي تم تحميلها غير صالحة !',
  'allowed_img_types' => 'تستطيع تحميل %s صورة.',
  'err_insert_pic' => 'الصورة \'%s\' لا يمكن تخزيها في الالبوم ',
  'upload_success' => 'تمم تحميل الصورة بنجاح<br /><br />سوف تراها بعد موافقة المدير.',
  'notify_admin_email_subject' => '%s - التبليغ', //cpg1.3.0
  'notify_admin_email_body' => 'ي صورة أُرسلتْ مِن قِبل %s الذي تَحتاجُ موافقتَكِ. زيارة %s', //cpg1.3.0
  'info' => 'معلومات',
  'com_added' => 'تم اضافة التعليق',
  'alb_updated' => 'تم تحديث الالبوم',
  'err_comment_empty' => 'لم تكتب التعليق !',
  'err_invalid_fext' => 'سوف يسمح بالملفات التي تنتهي بـ : <br /><br />%s.',
  'no_flood' => 'نأسف لكنك انت كنت آخر معلق على هذه الصورة<br /><br />تستطيع تغيير تعليقك على الصورة',
  'redirect_msg' => 'سيتم تحوليك الى صفحة اخرى.<br /><br /><br />اضغط على  \'استمــر\' ان لم يتم اعادة تنشيط الصفحة تلقائيا',
  'upl_success' => 'تم تحميل الصورة بنجاح',
  'email_comment_subject' => 'ارسل التعليق للمعرض', //cpg1.3.0
  'email_comment_body' => 'مستخدم ارسل تعليق على البومك شاهده', //cpg1.3.0
  'album_not_selected' => 'لم يتم اختيار الألبوم', //cpg1.4
  'com_author_error' => 'مستخدم ثاني يستخدم هذا الاسم سجل دخولك أو ادخل باسم ثاني', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
        'caption' => 'العنوان',
        'fs_pic' => 'صورة بالحجم الطبيعي',
        'del_success' => 'تم الغاءها بنجاح',
        'ns_pic' => 'صورة بالحجم الطبيعي',
        'err_del' => 'لا يمكن الغاءه',
        'thumb_pic' => 'مختصر',
        'comment' => 'تعليق',
        'im_in_alb' => 'صورة في الالبوم',
  'alb_del_success' => 'الألبوم &laquo;%s&raquo; قد حذف', //cpg1.4
  'alb_mgr' => 'مدير الالبوم',
  'err_invalid_data' => 'بيانات غير صالحة تم استقبالها في \'%s\'',
  'create_alb' => 'جاري تكوين الالبوم \'%s\'',
  'update_alb' => 'جاري تحديث الالبوم \'%s\' بالعنوان \'%s\' والفهرس \'%s\'',
  'del_pic' => 'الغاء الصورة',
  'del_alb' => 'الغي الالبوم',
  'del_user' => 'الغي المستخدم',
  'err_unknown_user' => 'المستخدم المختار غير موجود !',
  'err_empty_groups' => 'لا توجد موجموعه .ربما تكون القائمه فارغه!', //cpg1.4
  'comment_deleted' => 'تم الغاء التعليق بنجاح',
  'comment_deleted' => 'تم حذف التعليق',
  'npic' => 'صوره', //cpg1.4
  'pic_mgr' => 'مدير الصور', //cpg1.4
  'update_pic' => 'تحديث الصوره \'%s\' مع اسم الملف \'%s\' و المعلومات \'%s\'', //cpg1.4
  'username' => 'المستخدم', //cpg1.4
  'anonymized_comments' => '%s تعليقات لغير المسجلين', //cpg1.4
  'anonymized_uploads' => '%s ملفات الرفع لغير المسجلين', //cpg1.4
  'deleted_comments' => '%s تعليقات تم حذفها', //cpg1.4
  'deleted_uploads' => '%s ملفات مرفوعه لغير المسجلين تم حذفها', //cpg1.4
  'user_deleted' => 'مستخدم %s حذف', //cpg1.4
  'activate_user' => 'مستخدم فعّال', //cpg1.4
  'user_already_active' => 'الأكاونت لا يزال يعمل', //cpg1.4
  'activated' => 'تم تشغيله', //cpg1.4
  'deactivate_user' => 'تم ايقافه', //cpg1.4
  'user_already_inactive' => 'لم يعمل المستخدم', //cpg1.4
  'deactivated' => 'تم ايقافه', //cpg1.4
  'reset_password' => 'اعادة كلمات السر', //cpg1.4
  'password_reset' => 'اعادة كلمة السر لـ %s', //cpg1.4
  'change_group' => 'تغيير المجموعه الرئيسيه', //cpg1.4
  'change_group_to_group' => 'التغيير من  %s الى %s', //cpg1.4
  'add_group' => 'اضافة مجموعه ثانويه', //cpg1.4
  'add_group_to_group' => 'اضافة مستخدم %s لمجموعة %s. الآن هو عضو في %s كمجموعه أساسيه و %s كمجموعه ثانويه.', //cpg1.4
  'status' => 'الحالات', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'تم تخريب الكرت عن طريقك مقدم خدمة الإيميل. تأكد أنه الوصله صحيحه.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php = array(
  'confirm_del' => 'هل أنت متأكد لإلغاء الصورة ? \\nسيتم الغاء التعليقات ايضا', //js-alert //cpg1.3.0
  'del_pic' => 'أضغط لمسـح هذه الصورة', //cpg1.3.0
  'size' => '%s في %s نقطة',
  'views' => '%s مـرات',
  'slideshow' => 'عرض الشرائح',
  'stop_slideshow' => 'ايقاف عرض الشرائح',
  'view_fs' => 'اضغط لتكبيـر الصورة',
  'edit_pic' => 'حرر وصف الصورة', //cpg1.3.0
  'crop_pic' => 'قطع و تدوير', //cpg1.3.0
  'set_player' => 'تغيير المشغل',
);

$lang_picinfo = array(
  'title' =>'معلومات عن الصورة',
  'Filename' => 'اسم الملف',
  'Album name' => 'اسم الألبوم',
  'Rating' => 'تقييم (%s تصويت)',
  'Keywords' => 'الكلمات الرّئيسيّة ',
  'File Size' => 'حجم الملف',
  'Date Added' => 'تاريخ الإضافه', //cpg1.4
  'Dimensions' => 'الأبعاد',
  'Displayed' => 'تم عرضها',
  'URL' => 'الوصله', //cpg1.4
  'Make' => 'اصنع', //cpg1.4
  'Model' => 'المودل', //cpg1.4
  'DateTime' => 'التاريخ الوقت', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'العدسه', //cpg1.4
  'FocalLength' => 'البعد البؤري', //cpg1.4
  'Comment' => 'تعليق',
  'addFav'=>'اضف للمفضله',
  'addFavPhrase'=>'المفضله',
  'remFav'=>'الحذف من المفضله',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC حقوق',
  'iptcKeywords'=>'IPTC نص',
  'iptcCategory'=>'IPTC قسم لـ',
  'iptcSubCategories'=>'IPTC القسم الفرعي لـ',
  'ColorSpace' => 'تلوين الفضاء', //cpg1.4
  'ExposureProgram' => 'Exposure Program', //cpg1.4
  'Flash' => 'فلاش', //cpg1.4
  'MeteringMode' => 'حالة الوزن', //cpg1.4
  'ExposureTime' => 'وقت الواجهه', //cpg1.4
  'ExposureBiasValue' => 'توجيه الواجهه', //cpg1.4
  'ImageDescription' => ' معلومات الصوره', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
  'xResolution' => 'X وضوح', //cpg1.4
  'yResolution' => 'Y وضوح', //cpg1.4
  'ResolutionUnit' => 'Resolution Unit', //cpg1.4
  'Software' => 'البرنامج', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'الوقت و التاريخ الأصليان', //cpg1.4
  'DateTimedigitized' => 'الوقت و التاريخ بالحروف', //cpg1.4
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
  'submit' => 'Submit', //cpg1.4
  'success' => 'Information updated successfully.', //cpg1.4
  'details' => 'Details', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'تم',
  'edit_title' => 'تعديل التعليق',
  'confirm_delete' => 'هل أنت واثق من حذف هذا التعليق؟', //js-alert
  'add_your_comment' => 'اضافة تعليق',
  'name'=>'اسم',
  'comment'=>'تعليق',
  'your_name' => 'غير مسجل',
  'report_comment_title' => 'التبليغ عن هذا التعليق عند الإداره', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'اضغط على الصوره لإغلاق الصفحه',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'ارسال الكرت',
  'invalid_email' => '<font color="red"><b>تحذير</b></font>: الإيميل خاطئ:', //cpg1.4
  'ecard_title' => 'هذا الكرد مرسل من %s لك',
  'error_not_image' => 'الصور فقط يمكن ارسالها ككارد.',
  'view_ecard' => 'وصله اضافيه اذا لم يتم عرض الصوره بالشكل الصحيح', //cpg1.4
  'view_ecard_plaintext' => 'لعرض الصوره الرجاء انسخ الوصله لمتصفحك:', //cpg1.4
  'view_more_pics' => 'عرض المزيد من الصور !', //cpg1.4
  'send_success' => 'تم ارسال كرتك',
  'send_failed' => 'نأسف لأن السيرفر لم يستطع ارسال الكارد...',
  'from' => 'من',
  'your_name' => 'اسمك',
  'your_email' => 'ايميلك',
  'to' => 'لـ',
  'rcpt_name' => 'اسم المستقبل',
  'rcpt_email' => 'ايميل المستقبل',
  'greetings' => 'المقدمه', //cpg1.4
  'message' => 'الرساله', //cpg1.4
  'ecards_footer' => 'ارسلت من %s صاحب رقم  IP %s في %s (Gallery time)', //cpg1.4
  'preview' => 'عرض الكارد قبل ارساله', //cpg1.4
  'preview_button' => 'عرض الكارد', //cpg1.4
  'submit_button' => 'ارسال الكارد', //cpg1.4
  'preview_view_ecard' => 'هذا سيكون وصله اضافيه لكاردك . لن تعمل قبل ارسال الرساله.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'التبليغ عند الإداره', //cpg1.4
  'invalid_email' => '<b>تحذير</b> : خطأ في الإيميل !', //cpg1.4
  'report_subject' => 'شكوى من %s في المعرض %s', //cpg1.4
  'view_report' => 'وصله اضافيه اذا الشكوى لم تكن واضحه', //cpg1.4
  'view_report_plaintext' => 'لعرض الشكوى الرجاء نسخ الرابط لـ متصفحك', //cpg1.4
  'view_more_pics' => 'المعرض', //cpg1.4
  'send_success' => 'تم ارسال البلاغ', //cpg1.4
  'send_failed' => 'نأسف لكن السيرفر لم يستطع ارسال كاردك...', //cpg1.4
  'from' => 'من', //cpg1.4
  'your_name' => 'اسمك', //cpg1.4
  'your_email' => 'ايميلك', //cpg1.4
  'to' => 'لـ', //cpg1.4
  'administrator' => 'الإداره', //cpg1.4
  'subject' => 'العنوان', //cpg1.4
  'comment_field_name' => 'التبليغ عن تعليق كتب بواسطة "%s"', //cpg1.4
  'reason' => 'السبب', //cpg1.4
  'message' => 'الرساله', //cpg1.4
  'report_footer' => 'ارسل من قبل %s من IP %s في %s (Gallery time)', //cpg1.4
  'obscene' => 'قذر', //cpg1.4
  'offensive' => 'يسبب مشاكل', //cpg1.4
  'misplaced' => 'خارج موضوعه', //cpg1.4
  'missing' => 'مفقود', //cpg1.4
  'issue' => 'لا يمكن عرضه', //cpg1.4
  'other' => 'غيره', //cpg1.4
  'refers_to' => 'بلاغ الملف يعود ل', //cpg1.4
  'reasons_list_heading' => 'سبب البلاغ:', //cpg1.4
  'no_reason_given' => 'لا يوجد اسباب', //cpg1.4
  'go_comment' => 'الذهاب للتعليق', //cpg1.4
  'view_comment' => 'عرض البلاغ كاملاً مع التعليق', //cpg1.4
  'type_file' => 'ملف', //cpg1.4
  'type_comment' => 'تعليق', //cpg1.4
  'invalid_data' => 'The data for the report you are trying to access has been corrupted by your mail client. Check the link is complete.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'معلومات الملف',
  'album' => 'الألبوم',
  'title' => 'العنوان',
  'filename' => 'اسم الملف', //cpg1.4
  'desc' => 'وصف',
  'keywords' => 'نص',
  'new_keyword' => 'نص جديد', //cpg1.4
  'new_keywords' => 'وجد نص جديد', //cpg1.4
  'existing_keyword' => 'نص موجود', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s ك.ب - %s مشاهدات - %s أصوات',
  'approve' => 'قبول الملف',
  'postpone_app' => 'قبول التأخير',
  'del_pic' => 'حذف الملف',
  'del_all' => 'حذف كل الملفات', //cpg1.4
  'read_exif' => 'اعادة قرائة معلومات الإكسف',
  'reset_view_count' => 'اعادة عداد المشاهدات',
  'reset_all_view_count' => 'اعادة كل العدادات', //cpg1.4
  'reset_votes' => 'اعادة التصويتات',
  'reset_all_votes' => 'اعادة كل التصويتات', //cpg1.4
  'del_comm' => 'حذف التعليقات',
  'del_all_comm' => 'حذف كل التعليقات', //cpg1.4
  'upl_approval' => 'قبول الرفع', //cpg1.4
  'edit_pics' => 'تعديل الملف',
  'see_next' => 'مشاهدة الملفات التاليه',
  'see_prev' => 'مشاهدة الملفات السابقه',
  'n_pic' => '%s ملف',
  'n_of_pic_to_disp' => 'عدد الملفات للعرض',
  'apply' => 'تنفيذ التعديلات',
  'crop_title' => 'معدل الصور لكوبر ماين',
  'preview' => 'مشاهده مسبقه',
  'save' => 'تخزين الصوره',
  'save_thumb' =>'التخزين كمصغره',
  'gallery_icon' => 'اجعلها صورتي الشخصيه', //cpg1.4
  'sel_on_img' =>'المختير يجب أن يكون كلياً على الصوره!', //js-alert
  'album_properties' =>'خاصية الألبوم', //cpg1.4
  'parent_category' =>'التصنيف الأم', //cpg1.4
  'thumbnail_view' =>'المشاهده المصغره', //cpg1.4
  'select_unselect' =>'تحديد و الغاء تحديد الكل', //cpg1.4
  'file_exists' => "موقع الملف '%s' موجود مسبقاً.", //cpg1.4
  'rename_failed' => "فشل اعادة التسميه من '%s' الى '%s'.", //cpg1.4
  'src_file_missing' => "الملف الرئيسي '%s' مفقود.", // cpg 1.4
  'mime_conv' => "لم نستطع تحويل الملف من '%s' الى '%s'",//cpg1.4
  'forb_ext' => 'تعريف ملف ممنوع.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
 'faq' => 'الاسئلة المتكررة', //cpg1.3.0
  'toc' => 'جدول المحتويات', //cpg1.3.0
  'question' => 'السؤال: ', //cpg1.3.0
  'answer' => 'الجواب: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ',
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
  'forgot_passwd' => 'مذكر بالكلمه السريه',
  'err_already_logged_in' => 'أنت مسجل دخول من قبل !',
  'enter_email' => 'أدخل ايميلك', //cpg1.4
  'submit' => 'اذهب',
  'illegal_session' => 'صفحة اعادة الباسورد انتهت.', //cpg1.4
  'failed_sending_email' => 'رسالة تعديل الباسوورد لم ترسل !',
  'email_sent' => 'سيتم ارسال اسم المستخدم و الكلمه السريه عبر الإيميل %s', //cpg1.4
  'verify_email_sent' => 'سيتم ارسال ايميل لـ %s. الرجاء مراجعة ايميلك لإتمام العمليه.', //cpg1.4
  'err_unk_user' => 'اسم المستخدم غير موجود!',
  'account_verify_subject' => '%s - طلب الباسوورد الجديد', //cpg1.4
  'account_verify_body' => 'أنت طلبت باسوورد جديده. اذا كنت تريد أن تصلك الباسوورد الجديده عبر ايميلك, اضغط على اللنك التالي:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - باسسوردك الجديده', //cpg1.4
  'passwd_reset_body' => 'هذي هي باسووردك التي طلبتها:
اسم المستخدم: %s
الباسوورد: %s
اضغط %s لتسجيل الدخول.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'مجموعه', //cpg1.4
  'permissions' => 'تراخيص', //cpg1.4
  'public_albums' => 'رفع البوم عام', //cpg1.4
  'personal_gallery' => 'معرض خاص', //cpg1.4
  'upload_method' => 'طريقة الرفع', //cpg1.4
  'disk_quota' => 'Quota', //cpg1.4
  'rating' => 'الترشيحات', //cpg1.4
  'ecards' => 'الكاردز', //cpg1.4
  'comments' => 'التعليقات', //cpg1.4
  'allowed' => 'مسموح', //cpg1.4
  'approval' => 'بعد القبول', //cpg1.4
  'boxes_number' => 'عدد الصناديق', //cpg1.4
  'variable' => 'الأعداد', //cpg1.4
  'fixed' => 'معدل', //cpg1.4
  'apply' => 'تثبيت التعديلات',
  'create_new_group' => 'صنع مجموعه جديده',
  'del_groups' => 'حذف المجموعه المختاره',
  'confirm_del' => 'تحذير, عندما تحذف المجموعه, الأعضاء سيتحولون لـ \'مسجل\' أي مجموعة المسجلين !\n\nDo you want to proceed ?', //js-alert
  'title' => 'ادارة مجموعات المستخدمين',
  'num_file_upload' => 'صناديق تحديد الملفات المرفوعه', //cpg1.4
  'num_URI_upload' => 'URI صناديق رفع الـ', //cpg1.4
  'reset_to_default' => 'Reset to default name (%s) - recommended!', //cpg1.4
  'error_group_empty' => 'Group table was empty !<br /><br />Default groups created, please reload this page', //cpg1.4
  'explain_greyed_out_title' => 'Why is this row greyed out?', //cpg1.4
  'explain_guests_greyed_out_text' => 'You can not change the properties of this group because you set the option &quot; Allow unlogged users (guest or anonymous) access&quot; to &quot;No&quot; on the config page. All guest (members of the group %s) can\'t do anything but login; therefor group settings don\'t apply for them.', //cpg1.4
  'explain_banned_greyed_out_text' => 'You can not change the properties of the group %s because it\'s members can\'t do anything anyway.', //cpg1.4
  'group_assigned_album' => 'assigned album(s)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'هلا !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'هل أنت متأكد من أنك تريد حذف هذا الألبوم؟  ستحذف معه كل الملفات و التعليقات.', //js-alert
  'delete' => 'حذف',
  'modify' => 'خصائص',
  'edit_pics' => 'تعديل الملف',
);

$lang_list_categories = array(
  'home' => 'الرئيسيه',
  'stat1' => '<b>[pictures]</b> ملف in <b>[albums]</b> البوم و <b>[cat]</b> تصنيفات مع <b>[comments]</b> تعليق شوهدت <b>[views]</b> مره',
  'stat2' => '<b>[pictures]</b> ملف in <b>[albums]</b> البوم شوهدت <b>[views]</b> مره',
  'xx_s_gallery' => 'معرض %s',
  'stat3' => '<b>[pictures]</b> صورة في <b>[albums]</b> البوم مع <b>[comments]</b> تعليقات شوهدت <b>[views]</b> مرة'
);

$lang_list_users = array(
  'user_list' => 'قائمة المستخدمين',
  'no_user_gal' => 'لا يوجد مستخدمين يمكن ان يكون لهم البومات',
  'n_albums' => '%s البوم',
  'n_pics' => '%s صورة/صور'
);

$lang_list_albums = array(
  'n_pictures' => '%s ملف',
  'last_added' => ', آخر ملف أضيف في %s',
  'n_link_pictures' => '%s ملفات موصوله', //cpg1.4
  'total_pictures' => '%s ملف كمجموع', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'ادارة النص', //cpg1.4
  'edit' => 'تعديل', //cpg1.4
  'delete' => 'حذف', //cpg1.4
  'search' => 'بحث', //cpg1.4
  'keyword_test_search' => 'البحث عن %s في نافذه جديده', //cpg1.4
  'keyword_del' => 'حذف النص %s', //cpg1.4
  'confirm_delete' => 'هل أنت متأكد من حذف النص %s من المعرض كاملاً?', //cpg1.4  // js-alert
  'change_keyword' => 'تغيير النص', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'الدخول',
  'enter_login_pswd' => 'ادخل الكنية وكلمة السر للدخول',
  'username' => 'اسم المتسخدم',
  'password' => 'كلمة المرور',
  'remember_me' => 'تذكرني',
  'welcome' => 'حياك الله  %s ...',
  'err_login' => '*** لم استطع الدخول حاول مرة اخرى ***',
  'err_already_logged_in' => 'لقد تم تسجيل دخولك مسبقا !',
  'forgot_password_link' => 'لقد نسيت كلمة المرور', //cpg1.3.0
  'cookie_warning' => 'تحذير متصفحك لا يدعم الكوكيز', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'خروج',
        'bye' => 'في حفظ الله ورعايته يا %s ...',
        'err_not_loged_in' => 'لم تسجل الدخول !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'اغلاق', //cpg1.4
  'submit' => 'تم', //cpg1.4
  'up' => 'الارتقاء درجه', //cpg1.4
  'current_path' => 'الموقع الحالي', //cpg1.4
  'select_directory' => 'الرجاء اختيار موقع', //cpg1.4
  'click_to_close' => 'اضغط على الصوره لإغلاق النافذه',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Update album %s',
  'general_settings' => 'General settings',
  'alb_title' => 'Album title',
  'alb_cat' => 'Album category',
  'alb_desc' => 'Album description',
  'alb_keyword' => 'Album Keyword', //cpg1.4
  'alb_thumb' => 'Album thumbnail',
  'alb_perm' => 'Permissions for this album',
  'can_view' => 'Album can be viewed by',
  'can_upload' => 'Visitors can upload files',
  'can_post_comments' => 'Visitors can post comments',
  'can_rate' => 'Visitors can rate files',
  'user_gal' => 'User Gallery',
  'no_cat' => '* No category *',
  'alb_empty' => 'Album is empty',
  'last_uploaded' => 'Last uploaded',
  'public_alb' => 'Everybody (public album)',
  'me_only' => 'Me only',
  'owner_only' => 'Album owner (%s) only',
  'groupp_only' => 'Members of the \'%s\' group',
  'err_no_alb_to_modify' => 'No album you can modify in the database.',
  'update' => 'Update album',
  'reset_album' => 'Reset album', //cpg1.4
  'reset_views' => 'Reset views counter to &quot;0&quot; in %s', //cpg1.4
  'reset_rating' => 'Reset ratings on all files in %s', //cpg1.4
  'delete_comments' => 'Delete all comments made in %s', //cpg1.4
  'delete_files' => '%sIrreversibly%s delete all files in %s', //cpg1.4
  'views' => 'views', //cpg1.4
  'votes' => 'votes', //cpg1.4
  'comments' => 'comments', //cpg1.4
  'files' => 'files', //cpg1.4
  'submit_reset' => 'submit changes', //cpg1.4
  'reset_views_confirm' => 'I\'m sure', //cpg1.4
  'notice1' => '(*) depending on %sgroups%s settings',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Album password', //cpg1.4
  'alb_password_hint' => 'Album password hint', //cpg1.4
  'edit_files' =>'Edit files', //cpg1.4
  'parent_category' =>'Parent category', //cpg1.4
  'thumbnail_view' =>'Thumbnail view', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine (trimming the output at the right side).',
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Picture Manager', //cpg1.4
  'select_album' => 'Select Album', //cpg1.4
  'delete' => 'Delete', //cpg1.4
  'confirm_delete1' => 'Are you sure you want to delete this picture ?', //cpg1.4
  'confirm_delete2' => '\nPicture will be permanently deleted.', //cpg1.4
  'apply_modifs' => 'Apply modifications', //cpg1.4
  'confirm_modifs' => 'Confirm modifications', //cpg1.4
  'pic_need_name' => 'Picture needs to have a name !', //cpg1.4
  'no_change' => 'You did not make any change !', //cpg1.4
  'no_album' => '* No album *', //cpg1.4
  'explanation_header' => 'The custom sort order you can specify on this page will only be taken into account if', //cpg1.4
  'explanation1' => 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)', //cpg1.4
  'explanation2' => 'the user has chosen "Position descending" or "Position ascending" on the thumbail page (per user setting)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Are you sure you want to UNINSTALL this plugin', //cpg1.4
  'confirm_delete' => 'Are you sure you want to DELETE this plugin', //cpg1.4
  'pmgr' => 'Plugin Manager', //cpg1.4
  'name' => 'Name', //cpg1.4
  'author' => 'Author', //cpg1.4
  'desc' => 'Description', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Installed Plugins', //cpg1.4
  'n_plugins' => 'Plugins Not installed', //cpg1.4
  'none_installed' => 'None Installed', //cpg1.4
  'operation' => 'Operation', //cpg1.4
  'not_plugin_package' => 'The file uploaded is not a plugin package.', //cpg1.4
  'copy_error' => 'There was an error copying the package to the plugins folder.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Configure plugin', //cpg1.4
  'cleanup_plugin' => 'Cleanup plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'نأسف لكن كنت قد قيمت هذه الصورة مسبقا',
  'rate_ok' => 'تم قبول تقييمك',
  'forbidden' => 'لايمكنك تقييم صورك الخاصة دع الآخرين يقيمونها.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-orientated or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;

$lang_register_php = array(
  'page_title' => 'تسجيل المستخدم',
  'term_cond' => 'النظم و القوانين',
  'i_agree' => 'أوافق',
  'submit' => 'تسجيل الطلب',
  'err_user_exists' => 'اسم المستخدم الذي اخترته مأخود, الرجاء اختيار اسم آخر',
  'err_password_mismatch' => 'الباسووردين لي وضعتهم غير متشابهات, الرجاء ادخالهن مره أخرى',
  'err_uname_short' => 'أقل عدد لأحرف اسم المستخدم هو حرفين',
  'err_password_short' => 'أقل عدد لحروف الكلمه السريه حرفين',
  'err_uname_pass_diff' => 'اسم المستخدم يجب أن يكون مختلفاً عن اسم الكلمه السريه',
  'err_invalid_email' => 'الإيميل غير مناسب',
  'err_duplicate_email' => 'قد سجل عضو آخر بهذا الإيميل',
  'enter_info' => 'أدخل معلومات التسجيل',
  'required_info' => 'المعلومات المطلوبه',
  'optional_info' => 'المعلومات العمليه',
  'username' => 'اسم المستخدم',
  'password' => 'الكلمه السريه',
  'password_again' => 'اعد ادخال الكلمه السريه',
  'email' => 'الإيميل',
  'location' => 'المكان',
  'interests' => 'الهوايات',
  'website' => 'الموقع الرئيسي',
  'occupation' => 'الوظيفه',
  'error' => 'خطأ',
  'confirm_email_subject' => '%s - تأكيد التسجيل',
  'information' => 'معلومات',
  'failed_sending_email' => 'لم نتمكن من ارسال رسالة تأكيد الإشتراك !',
  'thank_you' => 'شكرا على التسجيل.<br /><br />تم ارسال بريد يوضح كيفية تفعيل الاشتراك.',
  'acct_created' => 'تم تكوين اشتراكك وتستطيع الدخول بكنيتك وكلمة السر',
  'acct_active' => 'اشتراكك فعال الآن وتستطيع الدخول بكنيتك وكلمة السر',
  'acct_already_act' => 'اشتراكك فعال مسبقا !',
  'acct_act_failed' => 'لا يمكن تفعيل هذا الحساب !',
  'err_unk_user' => 'المستخدم المختار غير موجود !',
  'x_s_profile' => 'بيانات %s',
  'group' => 'المجموعة',
  'reg_date' => 'مشارك',
  'disk_usage' => 'استهلاك التخزين',
  'change_pass' => 'تغيير كلمة السر',
  'current_pass' => 'كلمة السر الحالية',
  'new_pass' => 'كلمة سر جديدة',
  'new_pass_again' => 'كلمة السر الجديدة مرة اخرى',
  'err_curr_pass' => 'كلمة السر الحالية غير صحيحة',
  'apply_modif' => 'تطبيق التغييرات',
  'change_pass' => 'غير كلمة السر',
  'update_success' => 'تم تحديث بياناتك',
  'pass_chg_success' => 'تم تغيير كلمة السر',
  'pass_chg_error' => 'لم تتغير كلمة السر',
  'notify_admin_email_subject' => '%s - إخطار تسجيل', //cpg1.3.0
  'last_uploads' => 'آخر ملف مرفوع.<br />اضغط لتشاهد كل الملفات المرفوعه من قبل', //cpg1.4
  'last_comments' => 'آخر تعليق.<br />اضغط لترى كل تعليقات', //cpg1.4
  'notify_admin_email_body' => 'A new user with the username "%s" has registered in your gallery',
  'pic_count' => 'الملفات المرفوعه', //cpg1.4
  'notify_admin_request_email_subject' => '%s - طلب التحاق', //cpg1.4
  'thank_you_admin_activation' => 'شكراً.<br /><br />طلبك لإكمال عملية التسجيل ارسل للمدير. ستتلقى ايميل إذا قبل بك.', //cpg1.4
  'acct_active_admin_activation' => 'المستخدم يعمل و سيتم ارسال رساله لإعلامه.', //cpg1.4
  'notify_user_email_subject' => '%s - تنبيه بقبول العضويه', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.
انسخ هذا الرابط لمتصفح لكي تكمل عملية التسجيل
<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

ادارة بيكاتي

EOT;

$lang_register_approve_email = <<<EOT
A new user with the username "{USER_NAME}" has registered in your gallery.

In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'مراجعة التعليقات',
  'no_comment' => 'لا يوجد تعليقات للعرض',
  'n_comm_del' => '%s تعليق تم حذفه',
  'n_comm_disp' => 'عدد التعليقات المعروضه',
  'see_prev' => 'مشاهدة السابق',
  'see_next' => 'مشاهدة التالي',
  'del_comm' => 'حذف التعليقات المختيره',
  'user_name' => 'الأسم', //cpg1.4
  'date' => 'التاريخ', //cpg1.4
  'comment' => 'التعليق', //cpg1.4
  'file' => 'الملف', //cpg1.4
  'name_a' => 'باسم المستخدم تصاعدياً', //cpg1.4
  'name_d' => 'باسم العضو تنازلياً', //cpg1.4
  'date_a' => 'بالتاريخ تصاعدياً', //cpg1.4
  'date_d' => 'بالتاريخ تنازلياً', //cpg1.4
  'comment_a' => 'بالتعليق تصاعدياً', //cpg1.4
  'comment_d' => 'بالتعليق تنازلياً', //cpg1.4
  'file_a' => 'بالملف تصاعدياً', //cpg1.4
  'file_d' => 'بالملف تنازلياً', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'ابحث في المعرض', //cpg1.4
  'submit_search' => 'بحث', //cpg1.4
  'keyword_list_title' => 'قائمة النصوص', //cpg1.4
  'keyword_msg' => 'القائمه السابقه ليست شامله. جرب البحث في البحث الشامل.',  //cpg1.4
  'edit_keywords' => 'تعديل :النصوص', //cpg1.4
  'search in' => 'ابحث في:', //cpg1.4
  'ip_address' => 'IP عنوان', //cpg1.4
  'fields' => 'ابحث في', //cpg1.4
  'age' => 'العمر', //cpg1.4
  'newer_than' => 'أحدث من', //cpg1.4
  'older_than' => 'أقدم من', //cpg1.4
  'days' => 'ايام', //cpg1.4
  'all_words' => 'يشابه كل الكلمات (و)', //cpg1.4
  'any_words' => 'يشابه أي كلمه (أو)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'العنوان الرئيسي', //cpg1.4
  'caption' => 'عنوان', //cpg1.4
  'keywords' => 'النص', //cpg1.4
  'owner_name' => 'اسم المالك', //cpg1.4
  'filename' => 'اسم الملف', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'البحث عن ملفات جديده',
  'select_dir' => 'اختار موقع',
  'select_dir_msg' => 'This function allows you to add a batch of files that your have uploaded to your server by FTP.<br /><br />Select the directory where you have uploaded your files.', //cpg1.4
  'no_pic_to_add' => 'لا يوجد ملفات للبحث',
  'need_one_album' => 'تحتاج على الأقل الى ألبوم للقيام بهذه الخاصيه',
  'warning' => 'تحذير',
  'change_perm' => 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files !',
  'target_album' => '<b>ضع ملفات  &quot;</b>%s<b>&quot; في </b>%s',
  'folder' => 'مجلد',
  'image' => 'ملف',
  'album' => 'البوم',
  'result' => 'نتيجه',
  'dir_ro' => 'لا يمكن الكتابه فيه. ',
  'dir_cant_read' => 'لايمكن قرائته. ',
  'insert' => 'اضافة ملفات جديده للمعرض',
  'list_new_pic' => 'قائمة الملفات الجديده',
  'insert_selected' => 'ادخال الملفات المختيره',
  'no_pic_found' => 'لم نجد ملفات جديده',
  'be_patient' => 'الرجاء الإنتظار, نحتاج بعض الوقت لرفع الملفات',
  'no_album' => 'لا يوجد البوم مختير',
  'result_icon' => 'اضغط للمعلومات أو لتجديد الصفحه',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : تعني أنه تم اضافة الملفات'.
                          '<li><b>DP</b> : تعني أنه الملفات موجوده فالموقع و هذه مكرره'.
                          '<li><b>PB</b> : تعني عدم استطاعة اضافة الملف, تحقق من الضبط و تحقق من صلاحيتك لرفع الملف'.
                          '<li><b>NA</b> : تعني أنك لم تختر البوماً لوضع الملف فيه, اضغط \'<a href="javascript:history.back(1)">back</a>\' و أختر البوماً.اذا ليس لديك ألبوم <a href="albmgr.php">اصنع واحداً أولاً</a></li>'.
                          '<li>اذا لم تظهر علامات OK, DP, PB   اضغط على الفايل المكسور لتشاهد اخطاء الـ PHP'.
                          '<li>اذا توقف متصفحك فأعد تنزيل الصفحه'.
                          '</ul>',
  'select_album' => 'اختر البوماً',
  'check_all' => 'تحديد الكل',
  'uncheck_all' => 'الغاء التحديد عن الكل',
  'no_folders' => 'لا يوجد مجلد في "albums" حتى الآن. تأكد من وضع على الأقل مجلد في "albums" و رفع الملفات فيه.لا يجب رفع فولدر "userpics" ولا "edit" folders, لأنها موضوعه لأغراض الرفع بالإتش تي تي بي.', //cpg1.4
   'albums_no_category' => 'ألبومات بدون تصنيف', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* الألبومات الخاصه', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'الشاكله التصفحيه (recommended)', //cpg1.4
  'edit_pics' => 'تعديل الملفات', //cpg1.4
  'edit_properties' => 'خصائص الألبومات', //cpg1.4
  'view_thumbs' => 'الشاكله المصغره', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'اضهار و اخفاء العمود', //cpg1.4
  'vote' => 'Vote Details', //cpg1.4
  'hits' => 'Hit Details', //cpg1.4
  'stats' => 'Vote Statistics', //cpg1.4
  'sdate' => 'Date', //cpg1.4
  'rating' => 'Rating', //cpg1.4
  'search_phrase' => 'Search phrase', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Operating System', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sort by %s', //cpg1.4
  'ascending' => 'ascending', //cpg1.4
  'descending' => 'descending', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'close', //cpg1.4
  'hide_internal_referers' => 'hide internal referers', //cpg1.4
  'date_display' => 'Date display', //cpg1.4
  'submit' => 'submit / refresh', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file',
  'custom_title' => 'شكل الطلب الخاص',
  'cust_instr_1' => 'تستطيع اختيار عدد مختلف من صناديق الرفع. لكن لا تستطيع رفع اكثر من المسموح فالأسفل.',
  'cust_instr_2' => 'طلب عدد الصناديق',
  'cust_instr_3' => 'صناديق رفع الملفات: %s',
  'cust_instr_4' => 'URI/URL صناديق رفع: %s',
  'cust_instr_5' => 'URI/URL صناديق رفع:',
  'cust_instr_6' => 'صناديق رفع الملفات:',
  'cust_instr_7' => 'الرجاء ادخال عدد الملفات التي تريد ادخالها هذه المره.  ثم اضغط تابع \'Continue\'. ',
  'reg_instr_1' => 'أمر غير معروف للصنع.',
  'reg_instr_2' => 'الآن يمكنك رفع الملفات مستخدماً الصناديق أدناه. لا يمكن لحجم ملفاتك ان تتعدى %s كب للواحد. ملفات الـ ZIP  ترفع من \'رفع الملفات\' and \'URI/URL رفع\' ستبقى كما هي.',
  'reg_instr_3' => 'اذا كنت تريد أن تزيل الضغط من الzip فيجب عليك أن ترفعها في,  \'رفع ملفات zip مع الفتح\' area.',
  'reg_instr_4' => 'عند رفع URI/URL , الرجاء ادخاله على المثال الآتي: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'عندما تنتهي الرجاء الضغط على,  \'تابع\'.',
  'reg_instr_6' => 'رفع ملفات zip مع الفتح:',
  'reg_instr_7' => 'رفع ملفات:',
  'reg_instr_8' => 'URI/URL رفع:',
  'error_report' => 'بلاغ عن خطأ',
  'error_instr' => 'الرفع السابق واجه أخطاء:',
  'file_name_url' => 'اسم الملف و وصلته',
  'error_message' => 'رسالة خطأ',
  'no_post' => 'لم ترفع للـPOST.',
  'forb_ext' => 'تعريف الرابط ممنوع.',
  'exc_php_ini' => 'تعديت الحجم المسموح به php.ini.',
  'exc_file_size' => 'تعديت الحجم المسموح به.',
  'partial_upload' => 'فقط للرفع الفردي.',
  'no_upload' => 'لم يرفع اي شي.',
  'unknown_code' => 'خطأ بي اتش بي غير معروف حصل اثناء الرفع.',
  'no_temp_name' => 'لا رفع ولا أسماء مؤقته.',
  'no_file_size' => 'لا يحتوي على معلومات أو مدمر',
  'impossible' => 'يستحيل تحريكه.',
  'not_image' => 'ليس صوره أو مدمر',
  'not_GD' => 'ليس من التعريفات المسموحه.',
  'pixel_allowance' => 'الطول و العرض أكثر من المسموح به فالمنتدى.', //cpg1.4
  'incorrect_prefix' => 'وصلة URI/URL خاطئه',
  'could_not_open_URI' => 'لم يمكن فتح الـ URI.',
  'unsafe_URI' => 'لم نستطع تأكيد الأمان.',
  'meta_data_failure' => 'خطأ فالمعلومات',
  'http_401' => '401 غير مخول',
  'http_402' => '402 تحتاج دفع',
  'http_403' => '403 ممنوع',
  'http_404' => '404 غير موجود',
  'http_500' => '500 خطأ سيرفر داخلي',
  'http_503' => '503 لا يوجد سيرفر',
  'MIME_extraction_failure' => ' لم يمكن تحديد الـMIME.',
  'MIME_type_unknown' => 'نوع MIME غير معروف',
  'cant_create_write' => 'لم يمكن صنع ملف كتابه.',
  'not_writable' => 'لم نتمكن من الكتابه في ملف الكتابه.',
  'cant_read_URI' => 'لم نتمكن من قرائة الـ URI/URL',
  'cant_open_write_file' => 'لم نتمكن من فتح URI كتابة ملف.',
  'cant_write_write_file' => 'لم نتمكن من كتابة URI كتابة ملف.',
  'cant_unzip' => 'لم نتمكن من فتح الأرشبف ZIP.',
  'unknown' => 'خطأ غير معروف',
  'succ' => 'رفع ناجح',
  'success' => '%s رفوعات ناجحه.',
  'add' => 'أرجو أن تضغط \'تابع\' لتضيفها للألبومات.',
  'failure' => 'فشل الرفع',
  'f_info' => 'معلومات الملف',
  'no_place' => 'لم نتمكن من وضع الملف السابق.',
  'yes_place' => 'تم وضع الملف السابق.',
  'max_fsize' => 'أقصى حجم مسموح هو %s KB',
  'album' => 'ألبوم',
  'picture' => 'ملف',
  'pic_title' => 'عنوان الملف',
  'description' => 'وصف الملف',
  'keywords' => 'نص<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>', //cpg1.4
  'keywords_sel' =>'اختر نص', //cpg1.4
  'err_no_alb_uploadables' => 'نأسف لا يوجد البوم يسمح لك بالرفع فيه',
  'place_instr_1' => 'الرجاء اضافة الفايلات للألبوم الآن.  تستطيع اضافة معلومات لكل فايل.',
  'place_instr_2' => 'المزيد من الملفات تحتاج للتحديد. اضغط \'تابع\'.',
  'process_complete' => 'لقد رفعت كل الملفات.',
   'albums_no_category' => 'الألبومات التي لا تصنيف لها', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* الألبوم الخاص', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'أختر ألبوم', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'اغلاق', //cpg1.4
  'no_keywords' => 'نأسف لا يوجد نص!', //cpg1.4
  'regenerate_dictionary' => 'اعادة الموقع', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'قائمة الأعضاء', //cpg1.4
  'user_manager' => 'ادارة المستخدم', //cpg1.4
        'title' => 'ادارة المستخدمين',
        'name_a' => 'تصاعدي حسب الاسم',
        'name_d' => 'تنازلي حسب الاسم',
        'group_a' => 'تصاعدي حسب المجموعة',
        'group_d' => 'تنازلي حسب المجموعة',
        'reg_a' => 'تصاعدي حسب تاريخ التسجيل',
        'reg_d' => 'تنازلي حسب تاريخ التسجيل',
        'pic_a' => 'تصاعدي حسب عد الصور',
        'pic_d' => 'تنازلي حسب عد الصور',
        'disku_a' => 'تصاعدي حسب مساحة التخزين',
        'disku_d' => 'تنازلي حسب مساحة التخزين',
  'lv_a' => 'حسب اخر الزيارات تصاعدي', //cpg1.3.0
  'lv_d' => 'حسب اخر الزيارات تنازلي', //cpg1.3.0
        'sort_by' => 'رتب المستخدمين حسب',
        'err_no_users' => 'جدول المستخدم فارغ !',
        'err_edit_self' => 'لا تستطيع تعديل بياناتك الخاصة, استعمل زر \'بياناتي\' لذلك',
  'edit' => 'تعديل', //cpg1.4
  'with_selected' => 'مع المختير:', //cpg1.4
  'delete' => 'حذف', //cpg1.4
  'delete_files_no' => 'ترك الملفات العامه', //cpg1.4
  'delete_files_yes' => 'حذف الملفات العامه', //cpg1.4
  'delete_comments_no' => 'ابقاء التعليقات', //cpg1.4
  'delete_comments_yes' => 'حذف التعليقات العامه', //cpg1.4
  'activate' => 'تشغيل', //cpg1.4
  'deactivate' => 'ايقاف', //cpg1.4
  'reset_password' => 'اعادة كلمة السر', //cpg1.4
  'change_primary_membergroup' => 'تغيير المجموعه الأساسيه', //cpg1.4
  'add_secondary_membergroup' => 'اضافة مجموعه ثانويه', //cpg1.4
  'name' => 'اسم المستخدم',
  'group' => 'المجموعه',
  'inactive' => 'لا يعمل',
  'operations' => 'العمليات',
  'pictures' => 'الملفات',
  'disk_space_used' => 'الحجم المستخدم', //cpg1.4
  'disk_space_quota' => 'تخطى حدود التخزين', //cpg1.4
  'registered_on' => 'التسجيل', //cpg1.4
  'last_visit' => 'آخر زياره',
  'u_user_on_p_pages' => '%d مستخدم في %d صفحه',
  'confirm_del' => 'Are you sure you want to DELETE this user ? \\nAll his files and albums will also be deleted.', //js-alert
  'mail' => 'رساله',
  'err_unknown_user' => 'المستخدم المختير غير موجود !',
  'modify_user' => 'تعديل المستخدم',
  'notes' => 'النوتات',
  'note_list' => '<li>اذا كنت لا تريد تعديل كلمة السر اترك المكان خالياً',
  'password' => 'كلمة السر',
  'user_active' => 'المستخدم يعمل',
  'user_group' => 'مجموهة المستخدم',
  'user_email' => 'ايميل المستخدم',
  'user_web_site' => 'صفحة المستخدم',
  'create_new_user' => 'صنع مستخدم جديد',
  'user_location' => 'مكان المستخدم',
  'user_interests' => 'اهتمامات المستخدم',
  'user_occupation' => 'وظيفة المستخدم',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'أقرب الملفات المرفوعه له',
  'never' => 'أبداً',
  'search' => 'بحث عن مستخدم', //cpg1.4
  'submit' => 'اضافه', //cpg1.4
  'search_submit' => 'اذهب!', //cpg1.4
  'search_result' => 'نتائج البحث عن: ', //cpg1.4
  'alert_no_selection' => 'على الأقل اختر مستخدم واحد على الأقل!', //cpg1.4 //js-alert
  'password' => 'كلمة السر', //cpg1.4
  'select_group' => 'اختر مجموعه', //cpg1.4
  'groups_alb_access' => 'صلاحيات المجموعات', //cpg1.4
  'album' => 'ألبوم', //cpg1.4
  'category' => 'تصنيف', //cpg1.4
  'modify' => 'تعديل؟', //cpg1.4
  'group_no_access' => 'هذه المجموعه لا يوجد لها تخصيص خاص', //cpg1.4
  'notice' => 'تذكير', //cpg1.4
  'group_can_access' => 'الألبومات التي يتسنى فقط لـ "%s" الوصول لها', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Updates titles from filename', //cpg1.4
'Deletes titles', //cpg1.4
'Rebuilds thumbnails and resized photos', //cpg1.4
'Deletes original sized photos replacing them with the resized version', //cpg1.4
'Deletes original or intermediate size photos to free webspace', //cpg1.4
'Deletes orphaned comments', //cpg1.4
'Re-reads file sizes and dimensions (if you manually edited pics)', //cpg1.4
'Resets views counter', //cpg1.4
'Displays phpinfo', //cpg1.4
'Updates the database', //cpg1.4
'Displays log files', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Admin utilities (Resize pictures)',
  'what_it_does' => 'What it does',
  'file' => 'File',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'title set to',
  'submit_form' => 'submit',
  'updated_succesfully' => 'updated succesfully',
  'error_create' => 'ERROR creating',
  'continue' => 'Process more images',
  'main_success' => 'The file %s was successfully used as main file',
  'error_rename' => 'Error renaming %s to %s',
  'error_not_found' => 'The file %s was not found',
  'back' => 'back to main',
  'thumbs_wait' => 'Updating thumbnails and/or resized images, please wait...',
  'thumbs_continue_wait' => 'Continuing to update thumbnails and/or resized images...',
  'titles_wait' => 'Updating titles, please wait...',
  'delete_wait' => 'Deleting titles, please wait...',
  'replace_wait' => 'Deleting originals and replacing them with resized images, please wait..',
  'instruction' => 'Quick instructions',
  'instruction_action' => 'Select action',
  'instruction_parameter' => 'Set parameters',
  'instruction_album' => 'Select album',
  'instruction_press' => 'Press %s',
  'update' => 'Update thumbs and/or resized photos',
  'update_what' => 'What should be updated',
  'update_thumb' => 'Only thumbnails',
  'update_pic' => 'Only resized pictures',
  'update_both' => 'Both thumbnails and resized pictures',
  'update_number' => 'Number of processed images per click',
  'update_option' => '(Try setting this option lower if you experience timeout problems)',
  'filename_title' => 'Filename &rArr; File title',
  'filename_how' => 'How should the filename be modified',
  'filename_remove' => 'Remove the .jpg ending and replace _ (underscore) with spaces',
  'filename_euro' => 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20',
  'filename_us' => 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20',
  'filename_time' => 'Change 2003_11_23_13_20_20.jpg to 13:20',
  'delete' => 'Delete file titles or original size photos',
  'delete_title' => 'Delete file titles',
  'delete_title_explanation' => 'This will remove all titles on files in the album you specify.', //cpg1.4
  'delete_original' => 'Delete original size photos',
  'delete_original_explanation' => 'This will remove the full sized pictures.', //cpg1.4
  'delete_intermediate' => 'Delete intermediate pictures', //cpg1.4
  'delete_intermediate_explanation' => 'This will delete intermediate (normal) pictures.<br />Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.', //cpg1.4
  'delete_replace' => 'Deletes the original images replacing them with the sized versions',
  'titles_deleted' => 'All titles in specified album removed', //cpg1.4
  'deleting_intermediates' => 'Deleting intermediate images, please wait...', //cpg1.4
  'searching_orphans' => 'Searching for orphans, please wait...', //cpg1.4
  'select_album' => 'Select album',
  'delete_orphans' => 'Delete comments on missing files', //cpg1.4
  'delete_orphans_explanation' => 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.', //cpg1.4
  'refresh_db' => 'Reload file dimensions and size information', //cpg1.4
  'refresh_db_explanation' => 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.', //cpg1.4
  'reset_views' => 'Reset view counters', //cpg1.4
  'reset_views_explanation' => 'Sets all file view counts to zero in the album specified.', //cpg1.4
  'orphan_comment' => 'orphan comments found',
  'delete' => 'Delete',
  'delete_all' => 'Delete all',
  'delete_all_orphans' => 'Delete all orphans?', //cpg1.4
  'comment' => 'Comment: ',
  'nonexist' => 'attached to non existant file # ',
  'phpinfo' => 'Display phpinfo',
  'phpinfo_explanation' => 'Contains technical information about your server.<br /> - You may be asked to provide information from this when requesting support.', //cpg1.4
  'update_db' => 'Update database',
  'update_db_explanation' => 'If you have replaced coppermine files, added a modification or upgraded from a previous version of coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your coppermine database.',
  'view_log' => 'View log files', //cpg1.4
  'view_log_explanation' => 'Coppermine can keep track of various actions users perform. You can browse those logs if you have enabled logging in <a href="admin.php">coppermine config</a>.', //cpg1.4
  'versioncheck' => 'Check versions', //cpg1.4
  'versioncheck_explanation' => 'Check your file versions to find out if you have replaced all files after an upgrade, or if coppermine source files have been updated after the release of a package.', //cpg1.4
  'bridgemanager' => 'Bridge Manager', //cpg1.4
  'bridgemanager_explanation' => 'Enable/disable integration (bridging) of Coppermine with another application (e.g. your BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck', //cpg1.4
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
  'coppermine_version' => 'cpg version', //cpg1.4
  'file_version' => 'file version', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'writable', //cpg1.4
  'not_writable' => 'not writable', //cpg1.4
  'help' => 'Help', //cpg1.4
  'help_file_not_exist_optional1' => 'file/folder does not exist', //cpg1.4
  'help_file_not_exist_optional2' => 'The file/folder %s has not been found on your server. Although it is optional you should upload it (using your FTP client) to your webserver if you are experiencing problems.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'file/folder does not exist', //cpg1.4
  'help_file_not_exist_mandatory2' => 'The file/folder %s has not been found on your server, although it is mandatory. Upload the file to your webserver (using your FTP client).', //cpg1.4
  'help_no_local_version1' => 'No local file version', //cpg1.4
  'help_no_local_version2' => 'The script was unable to extract a local file version - your file is either outdated or you have modified it, removing the header information on the way. Updating the file is recommended.', //cpg1.4
  'help_local_version_outdated1' => 'Local version outdated', //cpg1.4
  'help_local_version_outdated2' => 'Your version of this file seems to be from an older version of Coppermine (you probably upgraded). Make sure to update this file as well.', //cpg1.4
  'help_local_version_na1' => 'Unable to extract cvs version info', //cpg1.4
  'help_local_version_na2' => 'The script could not determine what cvs version the file on your webserver is. You should upload the file from your package.', //cpg1.4
  'help_local_version_dev1' => 'Development version', //cpg1.4
  'help_local_version_dev2' => 'The file on your webserver seems to be newer than your Coppermine version. You are either using a development file (you should only do so if you know what you are doing), or you have upgraded your Coppermine install and not uploaded include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Folder not writable', //cpg1.4
  'help_not_writable2' => 'Change file permissions (CHMOD) to grant the script write access to the folder %s and everything within it.', //cpg1.4
  'help_writable1' => 'Folder writable', //cpg1.4
  'help_writable2' => 'The folder %s is writable. This is an unnecessary risk, coppermine only needs read/execute access.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine was not able to determine wether the folder is writable.', //cpg1.4
  'your_file' => 'your file', //cpg1.4
  'reference_file' => 'reference file', //cpg1.4
  'summary' => 'Summary', //cpg1.4
  'total' => 'Total files/folders checked', //cpg1.4
  'mandatory_files_missing' => 'Mandatory files missing', //cpg1.4
  'optional_files_missing' => 'Optional files missing', //cpg1.4
  'files_from_older_version' => 'Files left over from outdated Coppermine version', //cpg1.4
  'file_version_outdated' => 'Outdated file versions', //cpg1.4
  'error_no_data' => 'The script made a boo, it was not able to retrieve any information. Sorry for the inconvenience.', //cpg1.4
  'go_to_webcvs' => 'go to %s', //cpg1.4
  'options' => 'Options', //cpg1.4
  'show_optional_files' => 'show optional folders/files', //cpg1.4
  'show_mandatory_files' => 'show mandatory files', //cpg1.4
  'show_file_versions' => 'show file versions', //cpg1.4
  'show_errors_only' => 'show folders/files with errors only', //cpg1.4
  'show_permissions' => 'show folder permissions', //cpg1.4
  'show_condensed_output' => 'show condensed ouput (for easier screenshots)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine is installed in the webroot', //cpg1.4
  'connect_online_repository' => 'try connecting to the online repository', //cpg1.4
  'show_additional_information' => 'show additional information', //cpg1.4
  'no_webcvs_link' => 'don\'t display web svn link', //cpg1.4
  'stable_webcvs_link' => 'display web svn link to stable branch', //cpg1.4
  'devel_webcvs_link' => 'display web svn link to devel branch', //cpg1.4
  'submit' => 'apply changes / refresh', //cpg1.4
  'reset_to_defaults' => 'reset to default values', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Delete All Logs', //cpg1.4
  'delete_this' => 'Delete This Log', //cpg1.4
  'view_logs' => 'View Logs', //cpg1.4
  'no_logs' => 'No logs created.', //cpg1.4
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
  'title' => 'Coppermine - XP Web Publishing Wizard', //cpg1.4
  'welcome' => 'Welcome <b>%s</b>,', //cpg1.4
  'need_login' => 'You need to login to the gallery using your web browser before you can use this wizard.<p/><p>When you login don\'t forget to select the <b>remember me</b> option if it is present.', //cpg1.4
  'no_alb' => 'Sorry but there is no album where you are allowed to upload pictures with this wizard.', //cpg1.4
  'upload' => 'Upload your pictures into an existing album', //cpg1.4
  'create_new' => 'Create a new album for your pictures', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Category', //cpg1.4
  'new_alb_created' => 'Your new album &quot;<b>%s</b>&quot; was created.', //cpg1.4
  'continue' => 'Press &quot;Next&quot; to start to upload your pictures', //cpg1.4
  'link' => 'this link', //cpg1.4
);
}
?>