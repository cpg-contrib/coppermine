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
  Coppermine version: 1.4.28
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Persian',
  'lang_name_native' => 'فارسي',
  'lang_country_code' => 'ir',
  'trans_name'=> 'B.Mossavari ',
  'trans_email' => 'bmossavari@gmail.com',
  'trans_website' => 'http://lab.kishmate.com/gallery144/',
  'trans_date' => '2006-04-04',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'rtl'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('بايت', 'كيلوبايت', 'مگابايت');

// Day of weeks and months
$lang_day_of_week = array('يكشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه', 'شنبه');
$lang_month = array('ژانويه', 'فوريه', 'مارس', 'آپريل', 'مي', 'جون', 'جولاي', 'آگوست', 'سبتامبر', 'اكتبر', 'نوامبر', 'دسامبر');

// Some common strings
$lang_yes = 'بله';
$lang_no  = 'خير';
$lang_back = 'بازگشت';
$lang_continue = 'ادامه';
$lang_info = 'اطلاعات';
$lang_error = 'خطا';
$lang_check_uncheck_all = 'انتخاب كردن/نكردن همه'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M'; //cpg1.3.0
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.3.0
$comment_date_fmt =  '%B %d, %Y at %I:%M %p'; //cpg1.3.0
$log_date_fmt = '%B %d, %Y at %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*','كس','*كون*','كير','*جنده*','*فاحشه*','دول','دودول','*قرمساق*','*ديوس*','*قهبه*','خفه','خفه شو','بي شعور','اجمق','حمال','سگ','الاغ','خر');

$lang_meta_album_names = array(
 'random' => 'فايلهاي انتخاب شده  به صورت تصادفي',
 'lastup' => 'آخرين ارسال شده ها',
 'lastalb'=> 'آخرين آلبوم تغيير يافته',
 'lastcom' => 'آخرين نظرات',
 'topn' => 'بيشترين بازديد',
 'toprated' => 'بالاترين امتياز',
 'lasthits' => 'آخرين امتياز',
 'search' => 'جستجوي نتايج',
 'favpics'=> 'فايلهاي مورد علاقه'
);

$lang_errors = array(
  'access_denied' => 'شما اجازه دسترسي به اين صفحه را نداريد.',
  'perm_denied' => 'شما اجازه انجام اين عمليات را نداريد.',
  'param_missing' => 'اطلاعات براي انجام عمليات كافي نيست.',
  'non_exist_ap' => 'آلبوم/فايل انتخاب شده وجود ندارد!',
  'quota_exceeded' => 'بيشتر از فضاي تخصيص داده شده<br /><br />به شما [quota]K فضا تخصيص داده شده است, فايل شما به [space]K فضا نياز دارد, با اضافه كردن اين فايل فضا استفاده شده توسط شما از فضاي تخصيص داده شده به شما بيشتر مي گردد.',
  'gd_file_type_err' => 'در حالت استفاده از GD Library تنها فرمت هاي پذيرفته شده JPEG و PNG مي باشند.',
  'invalid_image' => 'تصوير ارسال شده خراب است يا GD Library نمي تواند تصوير را پردازش كند.',
  'resize_failed' => 'امكان ساخت thumbnail يا تغيير سايز تصوير نيست!',
  'no_img_to_display' => 'چيزي وجود ندارد.',
  'non_exist_cat' => 'موضوع انتخاب شده وجود ندارد',
  'orphan_cat' => 'يك موضوع بدون parent وجود دارد ، مديريت موضوع را اجرا كنيد تا اشكال را برطرف كند.',
  'directory_ro' => 'زير شاخه \'%s\' غير قابل تغيير است, نمي توانيد تصوير را پاك كنيد.',
  'non_exist_comment' => 'نظر (Comment)انتخاب شده موجود نيست.',
  'pic_in_invalid_album' => 'تصوير در آلبومي (%s)كه موجود نيست!?',
  'banned' => 'متاسفانه در حال حاضر امكان دسترسي شما به سايت محدود شده.',
  'not_with_udb' => 'بدليل مجهز شدن برنامه به فروم (يا انواع ديگر برنامه ها) اين قابليت در برنامه گالري از كار افتاده است . يا شايد قابليتي كه ميخواهيد در اين پيكربندي ارائه نشده ، يا يا اين قابليت بايد توسط نرم افزار فروم اجرا شود.',
  'offline_title' => 'خارج از سرويس', //cpg1.3.0
  'offline_text' => 'در حال حاضر گالري تعطيل ! است ، به زودي راه اندازي مجدد مي شود', //cpg1.3.0
  'ecards_empty' => 'در حال حاضر هيچ كارتي براي نمايش موجود نيست.در پيكربندي  ، حفظ كارت پستال را فعال كنيد.', //cpg1.3.0
  'action_failed' => 'درخواست رد شد،امكان اجراي در خواست شما نيست', //cpg1.3.0
  'no_zip' => 'برنامه هاي مورد نياز براي استفاده از فايلهاي فشرده (zip) موجود نيست، با مديريت تماس بگيريد.', //cpg1.3.0
  'zip_type' => 'شما اجازه ارسال فايل ZIP را نداريد.', //cpg1.3.0
  'database_query' => 'خطايي در زمان اجراي دستورات بر روي ديتابيس بوجود آمده.', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = '<span dir=rtl>راهنماي bbcode<span>'; //cpg1.4
$lang_bbcode_help = '<span dir=rtl>بوسيله اين كدها شما ميتوانيد در اين فيلد لينكهاي قابل كليك كردن و متون متنوع ايجاد كنيد:</span><span dir=ltr> <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]متن لينك[/url] =&gt; <a href="http://yoursite.com">متن لينك</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]متن شما[/color] =&gt; <span style="color:red">متن شما</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li></span>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'رفتن به صفحه اصلی',
  'home_lnk' => 'صفحه اصلی',
  'alb_list_title' => 'رفتن به ليست آلبوم',
  'alb_list_lnk' => 'ليست آلبوم',
  'my_gal_title' => 'رفتن به گالری شخصی',
  'my_gal_lnk' => 'گالری شما',
  'my_prof_title' => 'رفتن به مشخصات شخصی', //cpg1.4
  'my_prof_lnk' => 'مشخصات شما',
  'adm_mode_title' => 'تغيير به حالت مديريت',
  'adm_mode_lnk' => 'محیط مدیریت',
  'usr_mode_title' => 'تغيير به حالت كاربر',
  'usr_mode_lnk' => 'محیط کاربری',
  'upload_pic_title' => 'ارسال فايل به آلبوم',
  'upload_pic_lnk' => 'ارسال فايل',
  'register_title' => 'ايجاد كاربر جديد',
  'register_lnk' => 'ثبت نام',
  'login_title' => 'ورود با سايت', //cpg1.4
  'login_lnk' => 'ورود',
  'logout_title' => 'رفتن تو حياط براي بازی!', //cpg1.4
  'logout_lnk' => 'خروج',
  'lastup_title' => 'نمايش آخرين ارسال ها', //cpg1.4
  'lastup_lnk' => 'آخرين ارسال',
  'lastcom_title' => 'نمايش آحرين نظرات', //cpg1.4
  'lastcom_lnk' => 'آخرين نظرات',
  'topn_title' => 'نمايش آيتمهايی كه بيشترين بازديد را داشته اند', //cpg1.4
  'topn_lnk' => 'بيشترين بازديد',
  'toprated_title' => 'نمايش آيتمهايی كه بيشترين امتياز را داشته اند', //cpg1.4
  'toprated_lnk' => 'بالاترين امتياز',
  'search_title' => 'جستجوی گالری', //cpg1.4
  'search_lnk' => 'جستجو',
  'fav_title' => 'رفتن به مورد علاقه های شما', //cpg1.4
  'fav_lnk' => 'مورد علاقه های شما',
  'memberlist_title' => 'نمايش ليست اعضا', //cpg1.3.0
  'memberlist_lnk' => 'ليست اعضا', //cpg1.3.0
  'faq_title' => 'سوال های متداول پرسيده شده در "Coppermine"', //cpg1.3.0
  'faq_lnk' => 'سوال های متداول', //cpg1.3.0
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'تائيد ارسال شده ها', //cpg1.4
  'upl_app_lnk' => 'تائيد ارسال',
  'admin_title' => 'رفتن به پيكر بندي', //cpg1.4
  'admin_lnk' => 'پيكربندي', //cpg1.4
  'albums_title' => 'رفتن به مديريت آلبوم', //cpg1.4
  'albums_lnk' => 'آلبوم ها',
  'categories_title' => 'رفتن به مديريت موضوعات', //cpg1.4
  'categories_lnk' => 'موضوعات',
  'users_title' => 'رفتن به مديريت كاربران', //cpg1.4
  'users_lnk' => 'كاربرها',
  'groups_title' => 'رفتن به مديريت گروهها', //cpg1.4
  'groups_lnk' => 'گروه ها',
  'comments_title' => 'بازنگري نظرات', //cpg1.4
  'comments_lnk' => 'نظرات', //cpg1.3.0
  'searchnew_title' => 'رفتن به سيستم اتوماتيك افزودن فايل', //cpg1.4
  'searchnew_lnk' => 'افزودن فايل به صورت اتوماتيك', //cpg1.3.0
  'util_title' => 'رفتن به ابزار مديريت', //cpg1.4
  'util_lnk' => 'ابزار مديريت', //cpg1.3.0
  'key_title' => 'رفتن به ديكشنري كلمات', //cpg1.4
  'key_lnk' => 'ديكشنري كلمات', //cpg1.4
  'ban_title' => 'رفتن به بخش كاربران محدود شده', //cpg1.4
  'ban_lnk' => 'كاربرهاي محدود شده',
  'db_ecard_title' => 'بازنگري كارتها', //cpg1.4
  'db_ecard_lnk' => 'مشاهده كارتها', //cpg1.3.0
  'pictures_title' => 'مرتب كردن تصویرها', //cpg1.4
  'pictures_lnk' => 'مرتب كردن تصویرها', //cpg1.4
  'documentation_lnk' => 'راهنما', //cpg1.4
  'documentation_title' => 'راهنماي گالري', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'ايجاد ومرتب سازي آلبوم شما', //cpg1.4
  'albmgr_lnk' => 'ايجاد/مرتب كردن آلبوم شما',
  'modifyalb_title' => 'رفتن به بخش تغييرات آلبوم هاي شما',  //cpg1.4
  'modifyalb_lnk' => 'تغيير آلبوم هاي شما',
  'my_prof_title' => 'رفتن به مشخصات شخصي شما', //cpg1.4
  'my_prof_lnk' => 'مشخصات شخصي شما',
);

$lang_cat_list = array(
  'category' => 'موضوعات',
  'albums' => 'آلبوم ها',
  'pictures' => 'فايلها',
);

$lang_album_list = array(
  'album_on_page' => '%d در آلبوم %d صفحه'
);

$lang_thumb_view = array(
        'date' => 'تاريخ',
  //Sort by filename and title
  'name' => 'نام فايل',
  'title' => 'عنوان',
  'sort_da' => 'مرتب سازي بر حسب تاريخ (صعودي)',
  'sort_dd' => 'مرتب سازي بر حسب تاريخ (نزولي)',
  'sort_na' => 'مرتب سازي بر حسب نام (صعودي)',
  'sort_nd' => 'مرتب سازي بر حسب نام (نزولي)',
  'sort_ta' => 'مرتب سازي بر حسب عنوان (صعودي)',
  'sort_td' => 'مرتب سازي بر حسب عنوان (نزولي)',
  'position' => 'محل قرار گيري', //cpg1.4
  'sort_pa' => 'مرتب سازي بر حسب محل (صعودي)', //cpg1.4
  'sort_pd' => 'مرتب سازي بر حسب محل (نزولي)', //cpg1.4
  'download_zip' => 'دريافت به صورت ZIP', //cpg1.3.0
  'pic_on_page' => '%d فايل در %d صفحه',
  'user_on_page' => '%d كاربر در %d صفحه', //cpg1.3.0
  'enter_alb_pass' => 'رمز عبور آلبوم', //cpg1.4
  'invalid_pass' => 'رمز عبور اشتباه', //cpg1.4
  'pass' => 'رمز عبور', //cpg1.4
  'submit' => 'ارسال', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'بازگشت به ليست تصاوير',
  'pic_info_title' => 'نمايش/عدم نمايش مشخصات فايل', //cpg1.3.0
  'slideshow_title' => 'نمايش پشت سر هم تصاوير',
  'ecard_title' => 'ارسال اين تصوير به صورت كارت پستال', //cpg1.3.0
  'ecard_disabled' => 'امكان ارسال كارت پستال محدود شده است.',
  'ecard_disabled_msg' => 'شما امكان ارسال كارت پستال نداريد.', //js-alert //cpg1.3.0
  'prev_title' => 'مشاهده تصویر قبلي', //cpg1.3.0
  'next_title' => 'مشاهده تصویر بعدي', //cpg1.3.0
  'pic_pos' => 'فايل %s/%s', //cpg1.3.0
  'report_title' => 'گزارش اين فايل به مديريت', //cpg1.4
  'go_album_end' => 'رفتن به انتها', //cpg1.4
  'go_album_start' => 'رفتن به ابتدا', //cpg1.4
  'go_back_x_items' => '%s آيتم به عقب', //cpg1.4
  'go_forward_x_items' => '%s آيتم به جلو', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'چه امتيازي ميدهيد؟',
  'no_votes' => '(هنوز امتيازي داده نشده)',
  'rating' => '(رتبه: %s / 5 با %s راي)',
  'rubbish' => 'بي خود',
  'poor' => 'ضعيف',
  'fair' => 'قابل قبول',
  'good' => 'خوب',
  'excellent' => 'عالي',
  'great' => 'باور نكردني',
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
  CRITICAL_ERROR => 'خطاي سيستم',
  'file' => 'فايل: ',
  'line' => 'خط: ',
);

$lang_display_thumbnails = array(
  'filename' => 'نام فايل : ',
  'filesize' => 'حجم فايل : ',
  'dimensions' => 'ابعاد : ',
  'date_added' => 'تاريخ ارسال : '
);

$lang_get_pic_data = array(
  'n_comments' => '%s نوشته(نظر)',
  'n_views' => '%s مشاهده',
  'n_votes' => '(%s راي)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'اطلاعات ديباگَ', //cpg1.3.0
  'select_all' => 'انتخاب همه', //cpg1.3.0
  'copy_and_paste_instructions' => 'اگر از ساپورت درخواست كمك داريد اطلاعات ديباگ را در پست خود copy and paste كنيد. دقت كنيد كه تمامي رمزهاي كاربري را با علامت **** جايگزين كنيد.', //cpg1.3.0
  'phpinfo' => 'نمايش مشخصات سرور', //cpg1.3.0
  'notices' => 'نكته ها', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'زبان پيش فرض', //cpg1.3.0
  'choose_language' => 'انتخاب زبان', //cpg1.3.0
);

$lang_theme_selection = array(
  'reset_theme' => 'تم پيش فرض', //cpg1.3.0
  'choose_theme' => 'انتخاب تم', //cpg1.3.0
);

$lang_version_alert = array(
  'version_alert' => 'نسخه حمايت نشده!', //cpg1.4
  'security_alert' => 'پيغام امنيتي!', //cpg1.4.3
  'relocate_exists' => 'فايل <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> را از روي سرور و وب سايت خود پاك كنيد!!!',
  'no_stable_version' => 'شما در حال اجراي يك نسخه تستي از اين نرم افزار هستيد (نسحه شما %s) - اين نسخه حمايت شده نيست و استفاده از اين نسخه توصيه نمي شود. لطفا نسخه Stable را نصب نمائيد در غير اين صورت عواقب ناشي از استفاده از اين نسخه تستي به عهده خودتان است!!!', //cpg1.4
  'gallery_offline' => 'گالري در حال حاضر به صورت آفلاين است (غير فعال) و فقط توسط شما قابل رويت است . فراموش نكنيد كه آن را فعال كنيد', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'قبلي', //cpg1.4
  'next' => 'بعدي', //cpg1.4
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
  'error_wakeup' => "PlugIn '%s' اجرا نشد!", //cpg1.4
  'error_install' => "PlugIn '%s' نصب نشد!", //cpg1.4
  'error_uninstall' => "PlugIn '%s' حذف نشد!", //cpg1.4
  'error_sleep' => "PlugIn '%s' حذف نشد!<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'تعجب',
  'Question' => 'سوال',
  'Very Happy' => 'خيلي خوشحال',
  'Smile' => 'خندان',
  'Sad' => 'ناراحت',
  'Surprised' => 'متعجب',
  'Shocked' => 'ترسيده',
  'Confused' => 'قاطي كرده',
  'Cool' => 'جالب',
  'Laughing' => 'مي خندد',
  'Mad' => 'عصباني',
  'Razz' => 'سروصدا',
  'Embarassed' => 'تحقير شده',
  'Crying or Very sad' => 'گريان يا خيلي ناراحت',
  'Evil or Very Mad' => 'ديوانه يا خيلي عصباني',
  'Twisted Evil' => 'در حال انفجار',
  'Rolling Eyes' => 'سرگردان',
  'Wink' => 'چشمك',
  'Idea' => 'ايده',
  'Arrow' => 'نشانه',
  'Neutral' => 'عادي',
  'Mr. Green' => 'عصبي',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'در حال خروج از حالت مديريت. . .',
  1 => 'در حال ورود به حالت مديريت...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'آلبوم ها به اسم احتياج دارند! اين طور نيست!!؟',
  'confirm_modifs' => 'مطمئنيدكه مي خواهيد اين تغييرات را انجام دهيد؟',
  'no_change' => 'شما تغييري انجام نداديد!',
  'new_album' => 'آلبوم جديد',
  'confirm_delete1' => 'مطمئنيد كه مي خواهيد اين آلبوم را حذف كنيد ؟',
  'confirm_delete2' => '\nتمامي فايلها و نظرات اين آلبوم از بين خواهد رفت !',
  'select_first' => 'ابتدا آلبوم را انتخاب كنيد',
  'alb_mrg' => 'مديريت آلبوم',
  'my_gallery' => '* گالري من *',
  'no_category' => '* موضوعي موجود نيست *',
  'delete' => 'حذف',
  'new' => 'جديد',
  'apply_modifs' => 'اعمال تغييرات ',
  'select_category' => 'انتخاب موضوع ',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'كاربران محدود شده',
  'user_name' => 'نام كاربر',
  'ip_address' => 'آدرس آي پي',
  'expiry' => 'پايان محدوديت (خالي يعني براي هميشه)',
  'edit_ban' => 'ثبت تغييرات',
  'delete_ban' => 'حدف',
  'add_new' => 'اضافه كردن محدوديت جديد',
  'add_ban' => 'اضافه كردن',
  'error_user' => 'كاربر پيدا نشد', //cpg1.3.0
  'error_specify' => 'شما بايد نام كاربر يا آدري آي پي آن را وارد نمائيد', //cpg1.3.0
  'error_ban_id' => 'مشخصات محدوديت اشتباه است!', //cpg1.3.0
  'error_admin_ban' => 'شما نمي توانيد خودتان را محدود كنيد!', //cpg1.3.0
  'error_server_ban' => 'شما داريد سرور خودتان را محدود ميكنيد؟!!اومجا چه خبره هوا خوبه!!!, نمي توانيد...', //cpg1.3.0
  'error_ip_forbidden' => 'شما نمي توانيد اين آدرس آي پي را محدود كنيد - اين آدرس Routable نيست!اگر بر روي شبكه Lan گالري را نصب كرديد از طريق پيكربندي ميتوانيد آنرا اعلام كنيد', //cpg1.3.0
  'lookup_ip' => 'بررسي آدرس آي پي(Lookup)', //cpg1.3.0
  'submit' => 'تائيد!', //cpg1.3.0
  'select_date' => 'انتخاب تاريخ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'ويزارد هماهنگ سازي (Bridge)',
  'warning' => 'اخطار: اين ويزارد اطلاعات شما را از طريق فرم عاي HTML و به صورت رمزگزاري نشده ارسال ميكند بنابراين اينويزارد را فقط در كامپيوتر  شخصي خودتان  اجرا كنيد و از كامپيوترهاي عمومي استفاده نكنيد!(مثل اينترنت كافي ها) و مطمئن شويد كه پس از اتمام كار history  و  Cache كامپيوتر را پاك كرده ايد در غير اين صورت كاربران ديگر به اطلاعات شما دسترسي خواهند داشت!',
  'back' => 'بازگشت',
  'next' => 'بعدي',
  'start_wizard' => 'شروع ويزارد هماهنگ سازي',
  'finish' => 'پايان',
  'hide_unused_fields' => 'عدم نمايش فيلدهاي بي استفاده (توصيه مي شود)',
  'clear_unused_db_fields' => 'حذف اطلاعات اشتباه ديتابيس (توصيه مي شود)',
  'custom_bridge_file' => 'فايل هماهنگ كننده برنامه مخصوص شما (اگر نام فايل شما <i>myfile.inc.php</i> است در اين فيلد <i>myfile</i>را وارد كنيد.)',
  'no_action_needed' => 'در اين قسمت كار خاصي لازم نيست  فقط بر روي \'بعدي\' كليك كنيد',
  'reset_to_default' => 'برگشت به مقدار پيش فرض',
  'choose_bbs_app' => 'نرم افزاري را كه مي خواهيد با گالري هماهنگ كنيد انتخاب نمائيد.',
  'support_url' => 'براي ساپورت اين نرم افزار به اينجا برويد',
  'settings_path' => 'path(s) used by your BBS app',
  'database_connection' => 'database connection',
  'database_tables' => 'database tables',
  'bbs_groups' => 'BBS groups',
  'license_number' => 'شماره مجوز',
  'license_number_explanation' => 'شماره مجوز خود را وارد نمائيد (اگر داريد)',
  'db_database_name' => 'نام ديتابيس',
  'db_database_name_explanation' => 'نام ديتابيسي كه نرم افزار BBS شما استفاده ميكند را وارد نمائيد.',
  'db_hostname' => 'نام Host',
  'db_hostname_explanation' => 'نام host اي كه ديتابيس Mysql شما در آن است معمولا "localhost"',
  'db_username' => 'نام كاربر ديتابيس',
  'db_username_explanation' => 'نام كاربري كه به ديتابيس MySql شما در نرم افزار BBS دسترسي دارد',
  'db_password' => 'رمز عبور ديتابيس',
  'db_password_explanation' => 'رمز عبور براي اين كاربر Mysql',
  'full_forum_url' => 'آدرس نرم افزار',
  'full_forum_url_explanation' => 'آدرس كامل نرم افزاري كه ميخواهيد با گالري هماهنگ كنيد (همراه با HTTP:// در ابتدا، براي مثال http://www.yourdomain.com/forum)',
  'relative_path_of_forum_from_webroot' => 'آدرس نسبي نرم افزار',
  'relative_path_of_forum_from_webroot_explanation' => 'آدرس نسبي نرم افزاري كه مي خواهيد با گالري هماهنگ كنيد از ريشه (براي مثال اگر نرم افزار شما در http://www.yourdomain.com/forum ، "/forum/" را وارد كنيد)',
  'relative_path_to_config_file' => 'آدرس نسبی فایل پیکربندی BBS',
  'relative_path_to_config_file_explanation' => 'آدرس نسبی BBS، نسبت به محل گالری شما (برای مثال اگر گالری شما در http://www.yourdomain.tld/gallery/ باشد و BBS شما در http://www.yourdomain.tld/forum/ باشد آدرسی که باید وارد کنید "../forum/" می شود)',
  'cookie_prefix' => 'پیشوند کوکی ها (Cookie prefix)',
  'cookie_prefix_explanation' => 'نام کوکی های BBS شما',
  'table_prefix' => 'پیشوند جدولهای دیتابیس',
  'table_prefix_explanation' => 'باید دقیقا با پیشوندی که هنگام نصب BBS استفاده کرده اید یکی باشد.',
  'user_table' => 'جدول کاربران (User table)',
  'user_table_explanation' => '(معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'session_table' => 'جدول Session',
  'session_table_explanation' => '(معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'group_table' => 'جدول گروه',
  'group_table_explanation' => '(معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'group_relation_table' => 'جدول ارتباط گروه',
  'group_relation_table_explanation' => '(معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'group_mapping_table' => 'جدول Mapping گروه',
  'group_mapping_table_explanation' => '(معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'use_standard_groups' => 'استفاده از گروه کاربران استاندارد BBS',
  'use_standard_groups_explanation' => 'استفاده از گروه کاربران استاندارد (داخلی)(توصیه می شود).این گزینه تمام تنظیمات گروههای کاربری دیگر را بی استفاده می کند.فقط در صورتیکه می دانید چه کار می کنید این گزینه را غیر فعال کنید!',
  'validating_group' => 'تعیین صلاحیت گروه',
  'validating_group_explanation' => 'گروهی از BBS که کاربرانی که نیاز به تائید صلاحیت دارند  در آن هستند (معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'guest_group' => 'گروه میهمان',
  'guest_group_explanation' => 'گروهی از BBS که کاربرانی که میهمان هستند در آن هستند (معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'member_group' => 'کروه اعضاء',
  'member_group_explanation' => 'گروهی از BBS که کاربرانی که عضو هستند در آن هستند (معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'admin_group' => 'گروه مدیریت',
  'admin_group_explanation' => 'گروهی از BBS که اعضای آن مدیران BBS هستند (معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'banned_group' => 'گروه محدود شده ها',
  'banned_group_explanation' => 'گروهی از BBS  که اعضای آن کاربران محدود شده BBS هستند (معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'global_moderators_group' => 'گروه مدیریت عمومی',
  'global_moderators_group_explanation' => 'گروهی از BBS که اعضای آن مدیران عمومی BBS هستند (معمولا مقدار پیش فرض درست است مگر اینکه شما BBS را بصورت استاندارد معمول نصب نکرده باشید)',
  'special_settings' => 'تنظیمات مخصوص BBS',
  'logout_flag' => 'نسخه phpBB(نشانه خروج)',
  'logout_flag_explanation' => 'نسخه BBS شما چیست (این تنظیمات نحوه خورج از سیستم را تعیین می کند)',
  'use_post_based_groups' => 'استفاده از گروههای پستی؟?',
  'logout_flag_yes' => '2.0.5 یا بالاتر',
  'logout_flag_no' => '2.0.4 یا پائین تر',
  'use_post_based_groups_explanation' => 'آیا گروههای BBS که با تعداد ارسالهایشان شناخته می شوند به این اکانت انتقال پیدا کنند یا فقط گروههای پیش فرض (مدیریت را آسان می کند،توصیه شده) میتوانید در آینده این تنظیمات را تغییر دهید.',
  'use_post_based_groups_yes' => 'بله',
  'use_post_based_groups_no' => 'خیر',
  'error_title' => 'باید خطای بوجود آمده را تصحیح کنید.به صفحه قبل برگردید.',
  'error_specify_bbs' => 'باید نرم افزاری را که می خواهید با گالری هماهنگ کنید مشخص کنید!',
  'error_no_blank_name' => 'نمی توانید فیلد نام فایل هماهنگ کننده اضافی را خالی بگذارید.',
  'error_no_special_chars' => 'نام فایل هماهنگ کننده نمیتواند شامل کاراکتر های خاص بجز خط زیر (_) و خط فاصله (-) باشد!',
  'error_bridge_file_not_exist' => 'فایل هماهنگ کننده %s روی سرور پیدا نشد.ممکن است آنرا نصب نکرده باشید!',
  'finalize' => 'فعال/غیر فعال کردن سیستم هماهنگ ساز',
  'finalize_explanation' => 'به هر حال ، تنظیمات انجام شده در دیتابیس نگهداری می شوند اما سیستم هماهنگ ساز فعال نشده. شما در هر لحظه می توانید آنرا فعال یا غیر فعال کنید. نام کاربری و رمز عبور اصلی گالری راهمیشه به خاطر داشته باشید ، زیرا برای دادن تغییرات به آن نیازمند هستید. اگر خطایی رخ داد به %s بروید و سیستم هماهنگ سازی را غیر فعال کنید البته برای این کار به نام کاربری و رمز عبور گالری (معمولا نام کاربری و رمزی که هنگام نصب گالری معین کرده اید)احتیاج دارید.',
  'your_bridge_settings' => 'تنظیمات برنامه هماهنگ شده',
  'title_enable' => 'فعال کردن ، تجحیز/هماهنکی با %s',
  'bridge_enable_yes' => 'فعال',
  'bridge_enable_no' => 'غیر فعال',
  'error_must_not_be_empty' => 'نباید خالی باشد',
  'error_either_be' => 'باید %s یا %s باشد',
  'error_folder_not_exist' => '%s وجود ندارد. مقداری را که برای %s وارد نموده اید تصحیح کنید',
  'error_cookie_not_readible' => 'گالری قادر به خواندن کوکی با نام %s نیست. مقدار وارد شده برای %s را تصحیح کنید ، یا به بخش مدیریت BBS بروید و مطمئن شوید که آدرس داده شده برای کوکی ، برای گالری قابل خواندن است.',
  'error_mandatory_field_empty' => 'شما نمی توانید فیلد %s را خالی بگذارید. - مقدار مخصوص به این فیلد را وارد نمائید.',
  'error_no_trailing_slash' => 'علامت اسلش در انتهای فیلد %s نباید باشد.',
  'error_trailing_slash' => 'علامت اسلش باید در انتهای فیلد %s باشد.',
  'error_db_connect' => 'امکان برقراری اتصال با سرور MySql با اطلاعاتی که دادید نیست. پیغام داده شده از طرف سرور این است:',
  'error_db_name' => 'گالری ارتباط را برقرار کرده است اما قادر به پیدا کردن دیتابیس %s نیست. مطمئن شوید که تنظیمات %s را درست وارد کرده اید.پیغام سرور این است:',
  'error_prefix_and_table' => '%s و',
  'error_db_table' => 'جدول %s پیدا نشد. مطمئن شوید که %s درست باشد.',
  'recovery_title' => 'مدیریت هماهنگ سازی : بازسازی حیاتی',
  'recovery_explanation' => 'اگر برای مدیریت سیستم هماهنگ ساز اینجا آمده اید، ابتدا باید ابا دسترسی مدیریت وارد شوید. اگر نمی توانید وارد شوید احتمالا سیستم هماهنگ ساز درست کار نمی کند ، شما می توانید این سیستم را از طریق این صفحه غیر فعال کنید. ورود نام کاربری و رمز عبور شما را به سیستم وارد نمی کند ، با این کار فقط سیستم هماهنگ ساز غیر فعال می شود. برای اطلاعات بیشتر به توضیحات تکمیلی مراجعه کنید.',
  'username' => 'نام کاربری',
  'password' => 'رمز عبور',
  'disable_submit' => 'ارسال',
  'recovery_success_title' => 'شناسایی با موفقیت انجام شد',
  'recovery_success_content' => 'سیستم هماهنگ ساز با موفقیت غیر فعال شد. گالری در خال خاضر به صورت تنها کار می کند.',
  'recovery_success_advice_login' => 'برای تنظیم یا راه اندازی سیستم هماهنگ ساز با دسترسی مدیریت وارد شوید',
  'goto_login' => 'رفتن به صفحه ورود',
  'goto_bridgemgr' => 'رفتن به مدبربت هماهنگ سازی',
  'recovery_failure_title' => 'شناسایی موفق نبود',
  'recovery_failure_content' => 'اطلاعات وارد شده اشتباه است. شما باید اطلاعات مدیریت اصلی گالری را وارد کنید (اطلاعاتی که در هنگام نصب گالری استفاده شده).',
  'try_again' => 'سعی مجدد',
  'recovery_wait_title' => 'زمان انتظار هنوز تمام نشده',
  'recovery_wait_content' => 'برای امنیت بیشتر امکان سعی مجدد پس از زمان کوتاه نیست ، باید مدتی صبر کنید تا سیستم امکان سعی مجدد به شما بدهد.',
  'wait' => 'صبر کنید',
  'create_redir_file' => 'ساخت فایل تغییر جهت (توصیه می شود)',
  'create_redir_file_explanation' => 'برای تغییر جهت کاربران و برگشت آنها به گالری بعد از ورود به BBS باید ، فایلی برای تغییر جهت در زیرشاخه BBS بسازید. وقتی این گزینه انتخاب شده باشد، مدیریت هماهنگ سازی سعی در ساخت این فایل خواهد کرد و یا کدی را برای ساخت دستی این فایل به شما می دهد.',
  'browse' => 'مرور کردن',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'تقويم', //cpg1.4
  'close' => 'بسته', //cpg1.4
  'clear_date' => 'clear date', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'پارامتر هاي لازم براي  \'%s\'داده نشده !',
  'unknown_cat' => 'موضوع انتخاب شده در ديتابيس نيست!',
  'usergal_cat_ro' => 'موضوع گالري هاي كاربر قابل حذف نيست !',
  'manage_cat' => 'مديريت موضوعات',
  'confirm_delete' => 'مطمئنيد كه مي خواهيد اين موضوع را حذف كنيد ?',
  'category' => 'موضوع',
  'operations' => 'عمليات',
  'move_into' => 'انتقال به',
  'update_create' => 'تغيير/تصحيح موضوع',
  'parent_cat' => 'موضوع مادر',
  'cat_title' => 'عنوان موضوع',
  'cat_thumb' => 'ریز عكس(Thumbnail) موضوع', //cpg1.3.0
  'cat_desc' => 'شرح موضوع',
  'categories_alpha_sort' => 'مرتب سازي موضوع بر اساس حروف الفبا (بجاي مرتب سازي هاي ديگر)', //cpg1.4
  'save_cfg' => 'ثبت پيكربندي', //cpg1.4);
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'پيكربندي گالري', //cpg1.4
  'manage_exif' => 'مديريت نمايش exif', //cpg1.4
  'manage_plugins' => 'مديريت PlugIn', //cpg1.4
  'manage_keyword' => 'مديريت كليد واژه', //cpg1.4
  'restore_cfg' => 'بازگشت به حالت پيكربندي اوليه',
  'save_cfg' => 'ثبت پيكربندي جديد',
  'notes' => 'نكته ها',
  'info' => 'اطلاعات',
  'upd_success' => 'پيكربندي گالري به روز رساني شد',
  'restore_success' => 'پيكربندي پيش فرض گالري بازسازي شد',
  'name_a' => 'نام (صعودي)',
  'name_d' => 'نام (نزولي)',
  'title_a' => 'عنوان (صعودي)',
  'title_d' => 'عنوان (نزولي)',
  'date_a' => 'تاريخ (صعودي)',
  'date_d' => 'تاريخ (نزولي)',
  'pos_a' => 'محل (صعودي)', //cpg1.4
  'pos_d' => 'محل (نزولي)', //cpg1.4
  'th_any' => 'Max Aspect',
  'th_ht' => 'ارتفاع',
  'th_wd' => 'عرض',
  'label' => 'نام زبان',
  'item' => 'آيتم',
  'debug_everyone' => 'همه',
  'debug_admin' => 'فقط مديريت',
  'no_logs'=> 'خاموش', //cpg1.4
  'log_normal'=> 'عادي', //cpg1.4
  'log_all' => 'همه', //cpg1.4
  'view_logs' => 'نمايش گزارشها', //cpg1.4
  'click_expand' => 'بر روي نام هر قسمت كليك كنيد تا باز شود', //cpg1.4
  'expand_all' => 'باز كردن همه', //cpg1.4
  'notice1' => '(*) در صورتي كه در ديتابيس شما فايلي وجود دارد هرگز اين تنظيمات را تغيير ندهيد.', //cpg1.4 - (relocated)
  'notice2' => '(**) وقتي اين تنظيمات را تغيير مي دهيد ، تنها فايل هايي كه از اين لحظه اضافه مي گردند شامل تغييرات مي شوند ، بنابراين در صورتي كه فايلي در ديتابيس داريد بهتر است اين تنظيمات را تغيير ندهيد. شما ميتوانيد براي تغيير تنظيمات فايل هاي موجود از "<a href="util.php">ابزار مديريت</a> (resize pictures)" كه در بخش مديريت است استفاده كنيد.</div><br />', //cpg1.4 - (relocated)
  'notice3' => '(***) همه گزارشات به زبان انگليسي ثبت ميگردند', //cpg1.4 - (relocated)
  'bbs_disabled' => 'وقتي در حالت هماهنگ سازي با ديگر نرم افزار ها هستيد اين عمليات (فانكشن) غير فعال است', //cpg1.4
  'auto_resize_everyone' => 'همه', //cpg1.4
  'auto_resize_user' => 'فقط كاربر', //cpg1.4
  'ascending' => 'صعودي', //cpg1.4
  'descending' => 'نزولي', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'تنظيمات اصلي',
  array('نام گالري', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('شرح گالري', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('ايميل مدير گالري', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('آدرس گالري شما (براي لينك  در كارت) براي ديدن تصویرهاي بيشتر', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('آدرس صفحه اصلي', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('امكان دريافت فايلهاي مورد علاقه (Favorites) به صورت فشرده', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('تفاوت زمان محلي مسبت به GMT (رمان جاري: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('فعال سازي كد كزدن رمز عبور (غير قابل برگشت)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('فعال سازي آيكون هاي راهنما (فقط در حالت انگليسي)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('فعال سازي قابليت كليك كردن بر روي واژه ها در جستجو','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('فغال سازي PlugIn ها', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('امكان محدود كردن آي پي هاي شخصي (آي پي هاي محلي و غير قابل روت)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('امكان جستجو(Browse)در سيستم افزودن فايل اتوماتيك', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'زبان و تنظيمات كاراكتر ست',
  array('زبان', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('استفاده از انگليسي در صورت عدم دسترسي به ترجمه لغت؟', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('سيستم كد پيج و كاراكتر ست', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('نمايش ليست زبانها', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('نمايش پرچم زبانها', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('نمايش "تنظيم مجدد" در بخش زبانها', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'تنظيمات تم',
  array('تم', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('نمايش ليست تم ها', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('نمايش "تنظيم مجدد" در بخش تم ها', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('نمايش سوالات متداول', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('نام لينكهاي اضافي در منو', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('آدرس لينكهاي اضافي در منو', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('نمايش راهنماي bbcode', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('نمایش بلوكی كه شامل لوگوهای تائیدW3 و همچنین PHP & Mysqlاست در حالتی كه تم قابلیت CSS و XHTML دارد.','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('آدرس فايل Header', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('آدرس فايل Footer', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'نحوه نمايش ليست آلبوم',
  array('عرض جدول (Table) اصلي (پيكسل يا %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('تعداد سطوح موضوعات براي نمايش', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('تعداد آلبوم ها براي نمايش', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('تعداد ستونها ليست آلبوم براي نمايش', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('ابعاد ريز عكسها (Thumbnails) به پيكسل', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('محتواي صفحه اصلي', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('نمايش ريز عكسهاي آلبوم سطح اول در موضوع','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('مرتب سازي موضوعات بر حسب حروف الفبا (بجاي مرتب سازي هاي ديگر)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('نمايش تعداد فايلعاي لينك شده','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'نجوه نمايش ريز عكسها (Thumbnails)',
  array('تعداد ستونها در صفحه ريز عكسها', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('تعداد رديفها در صفحه ريز عكسها', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('بيشترين تعداد Tab براي نمايش', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('نمايش توضيحات تصویر(علاوه بر عنوان)زير ريزعكسها', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('نمايش دفعات مشاهده تصویر زير ريزعكسها', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('نمايش تعداد نظرات نوشته شده زير ريزعكسها', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('نمايش نام ارسال كننده زير ريزعكسها', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('نمايش نام مدير ارسال كننده زير ريزعكسها', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('نمايش نام فايل در زير ريز عكسها', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  //array('نمايش توضيحات آلبوم', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('پيش فرض نحوه مرتب سازي فايلها', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('حداقل تعداد راي براي نمايش فايل در ليست  \'بالاترين امتيازات\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'نحوه نمايش تصویرها', //cpg1.4
  array('عرض جدول نمايش فايل (به پيكسل يا %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('به صورت پيش فرض اطلاعات فايل قابل مشاهده است', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('جداكثر طول توضيحات فايل', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('حداكثر تعداد حرف در يك كلمه', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('نمايش بصورت فيلم', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('نمايش نام در زير ريز عكسها در حالت فيلم', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('تعداد آيتمها در حالت فيلم', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('مكث بين هر اسلايد در حالت نمايش اسلايد پشت سر هم به ميلي ثانيه (1 ثانيه = 1000 ميلي ثانيه)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'تنظيمات نظر دهي', //cpg1.4
  array('كلمات زشت از نظرات حذف شود', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('اجازه استفاده از شكلك در نظرات', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('اجازه نظر دهي مجدد و مختلف به يك كاربر براي يك تصویر(از كار انداختن سيستم حفاظت نظرات)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('حداكثر تعداد خطوط در نظر', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('حداكثر تعداد كاراكتر در يك نظر', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('ارسال ايميل به مديريت در صورت نظر دهي به هر تصویر', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('نحوه مرتب سازي نظرات', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('پيشوند براي نظر كاربران ناشناخته', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'تنظيمات فايلها و ريز عكسها (Thumbnails)',
  array('كيفيت فايلهاي JPEG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('حداكثر اندازه ريزعكسها <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('اندازه مورد استفاده (عرض يا ارتفاع يا نسبت عرض به ارتفاع) <a href="#notice2" class="clickable_option"><b>**</b></a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('ايجاد تصاوير متوسط','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('حداكثر عرض يا ارتفاع تصوير/فيلم متوسط <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('حداكثر حجم فايل ارسالي (كيلوبايت)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('حداكثر عرض يا ارتفاع تصوير/فيلم ارسالي ( پيكسل )', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('تغيير اندازه اتوماتيك فايلهايي كه ابعادشان بيش از اندازه تعيين شده است', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'تنظيمات پيشرفته فايلها و ريز عكسها',
  array('آلبومها مي توانند خصوصي باشند (نكته:اگر از حالت \'بله\' به حالت \'خير\' برويد تمامي آلبومهاي خصوصي جاري نيز به حالت عمومي در خواهند آمد.)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('نمايش آيكون آلبوم خصوصي به كاربران وارد نشده به سيستم','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('كاركترهاي ممنوع براي نام فايل', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('پسوندهاي قابل قبول براي ارسال فايل', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('نوع تصاوير مجاز (png,jpeg,...)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('نوع فيلمهاي مجاز', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('نمايش اتوماتيك فيلم', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('نوع موزيك هاي مجاز', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('نوع متنهاي مجاز', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('روش تغيير اندازه فايل','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('آدرس نرم افزار تغيير اندازه ImageMagick(اگر انتخاب شده)(مثال /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('دستورات خط فرمان براي ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('خواندن اطلاعات EXIF فايل هايِ JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('خواندن IPTC فايل هاي JPEG', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('زيرشاخه براي آلبوم ها <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('زيرشاخه براي فايل كاربران <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('پيشوند تصاوير متوسط <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('پيشوند ريزعكسها <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('حالت پيش فرض زيرشاخه ها', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('حالت پيش فرض فايلها', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'تنظيمات كاربران',
  array('امكان ثبت نام كاربران جديد', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('امكان دسترسي كاربران وارد نشده به سيستم', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('ايجاد كاربر جديد منوط به كنترل از طريق ارسال نامه الكترونيك و دريافت جواب (eMail verification)', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('اطلاع به مديريت در مورد ايجاد كاربر جديد از طريق نامه الكترونيك', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('تائيديه مديريت براي ثبت نام نهايي', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('امكان استفاده دو كاربر از يك آدرس پست الكترونيك', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('اطلاع به مديريت در مورد فايلهاي ارسال شده و منتظر براي تائيد', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('امكان ديدن ليست كاربران براي كاربران وارد شده به سيستم', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('امكان تغيير آدرس پست الكترونيك به كاربران در بخش مشخصات شخصي', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('امكان دادن كنترل به كاربران در مورد تصویرهاي شخصي خودشان در گالريهاي عمومي', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('تعداد دفعات دادن رمز عبور اشتباه تا بسته شدن موقت اكانت (براي جلوگيري از حملات Brute Force)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('مدت زمان بسته شدن موقت اكانت بعد از دادن رمز عبور اشتباه', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('ارسال گزارش به مديريت', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'اطلاعات اضافي براي مشخصات كاربران (در صورت عدم استفاده خالي بگذاريد)
  از اطلاعات شخصي 6 براي اطلاعات طولاني مثل بيوگرافي استفاده كنيد', //cpg1.4
  array('نوع اطلاعات شخصي 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('نوع اطلاعات شخصي 2', 'user_profile2_name', 0), //cpg1.4
  array('نوع اطلاعات شخصي 3', 'user_profile3_name', 0), //cpg1.4
  array('نوع اطلاعات شخصي 4', 'user_profile4_name', 0), //cpg1.4
  array('نوع اطلاعات شخصي 5', 'user_profile5_name', 0), //cpg1.4
  array('نوع اطلاعات شخصي 6', 'user_profile6_name', 0), //cpg1.4

  'فيلدهاي اضافي براي مشخصات فايلها (در صورت عدم استفاده خالي بگذاريد)',
  array('نام فيلد اول', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('نام فيلد دوم', 'user_field2_name', 0),
  array('نام فيلد سوم', 'user_field3_name', 0),
  array('نام فيلد چهارم', 'user_field4_name', 0),

  'تنظيمات كوكي',
  array('نام كوكي', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('آدرس كوكي', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'تنظيمات سرور پست الكترونيك  (معمولا هيچ تغييري داده نمي شود ، اگر مطمئن نيستيد تغييري ندهيد)', //cpg1.4
  array('سرور SMTP (اگر خالي بگذاريد از Sendmail استفاده خواهد شد)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('نام كاربري SMTP (اين نام نام مديريتي شما نيست!)', 'smtp_username', 0), //cpg1.4
  array('رمز عبور SMTP', 'smtp_password', 0), //cpg1.4

  'گزارشات و وضعيت سايت', //cpg1.4
  array('گزارش گيري <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('گزارش كارتها', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('نگهداري وضعيت راي گيري ها','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('نگهداري وضعيت هيت (Hit)هاي سايت','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'تنظيمات نگهداري و برنامه نويسي', //cpg1.4
  array('فعال سازي حالت ديباگ', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('نمايش نكته ها در حالت ديباگ', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('گالري خارج از سرويس', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ارسال كارت پستال الكترونيك', //cpg1.3.0
  'ecard_sender' => 'ارسال كننده', //cpg1.3.0
  'ecard_recipient' => 'دريافت كننده', //cpg1.3.0
  'ecard_date' => 'تاريخ', //cpg1.3.0
  'ecard_display' => 'نمايش كارت', //cpg1.3.0
  'ecard_name' => 'نام', //cpg1.3.0
  'ecard_email' => 'آدرس پست الكترونيك', //cpg1.3.0
  'ecard_ip' => 'IP #', //cpg1.3.0
  'ecard_ascending' => 'صعودي', //cpg1.3.0
  'ecard_descending' => 'نزولي', //cpg1.3.0
  'ecard_sorted' => 'ثبت شده', //cpg1.3.0
  'ecard_by_date' => 'در تاريخ', //cpg1.3.0
  'ecard_by_sender_name' => ' نام ارسال كننده ', //cpg1.3.0
  'ecard_by_sender_email' => ' آدرس پست الكترونيك ارسال كننده', //cpg1.3.0
  'ecard_by_sender_ip' => 'IP address ارسال كننده', //cpg1.3.0
  'ecard_by_recipient_name' => 'نام دريافت كننده', //cpg1.3.0
  'ecard_by_recipient_email' => 'آدرس پست الكترونيك دريافت كننده', //cpg1.3.0
  'ecard_number' => 'نمايش آمار ثبتِ %s تا %s از %s', //cpg1.3.0
  'ecard_goto_page' => 'برو به صفحه', //cpg1.3.0
  'ecard_records_per_page' => 'تعداد آماد در هر صفحه', //cpg1.3.0
  'check_all' => 'انتخاب همه', //cpg1.3.0
  'uncheck_all' => 'عدم انتخاب همه', //cpg1.3.0
  'ecards_delete_selected' => 'حذف كارت انتخاب شده', //cpg1.3.0
  'ecards_delete_confirm' => 'مطمئنيد كه مي خواهيد كارت مورد نظر را حذف كنيد؟! چك باكس را علامت بزنيد !!', //cpg1.3.0
  'ecards_delete_sure' => 'مطمئن هستم!', //cpg1.3.0
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
        'empty_name_or_com' => 'لطفا نام و نظر خود را قيد بفرمائيد',
        'com_added' => 'نظر شما ارسال شد',
        'alb_need_title' => 'لطفا براي آلبوم عنوان ذكر كنيد !',
        'no_udp_needed' => 'به روز رساني احتياج نيست.',
        'alb_updated' => 'آلبوم به روز رساني شده است',
        'unknown_album' => 'آلبوم انتخاب شده موجود نيست يا شما اجازه ارسال فايل به اين آلبوم را نداريد',
        'no_pic_uploaded' => 'فايلي ارسال نشد!<br /><br />اگر فايلي را براي ارسال انتخاب كرده بوديد ،چك كنيد كه آيا سرور اجازه ارسال فايل را ميدهد يا خير...',
        'err_mkdir' => 'عدم امكان ايجاد دايركتوري %s !',
        'dest_dir_ro' => 'ودايركتوري مقصد %s براي نوشتن توسط برنامه غير قابل دسترسي است !',
        'err_move' => 'امكان فرستادن %s به %s نيست!',
        'err_fsize_too_large' => 'اندازه فايل ارسالي شما از حد مجاز بيشتر است (حداكثر اندازه مجاز %s x %s است) !',
        'err_imgsize_too_large' => 'حجم فايل ارسالي شما از حد مجاز بيشتر است (حداكثر حجم مجاز %s KB است) !',
        'err_invalid_img' => 'فايل ارسالي شما يك فايل تصويري نيست !',
        'allowed_img_types' => 'شما فقط مي توانيد تصاوير با فرمت %s ارسال نمائيد.',
        'err_insert_pic' => 'فايل \'%s\' نمي تواند در آلبوم قرار بگيرد ',
        'upload_success' => 'فايل شما با موفقيت ارسال شد<br /><br />بعد از اجازه مديريت فايل شما قابل بازديد مي گردد.',
        'notify_admin_email_subject' => '%s - نتيجه ارسال', //cpg1.3.0
        'notify_admin_email_body' => 'تصويري توسط %s ارسال شده كه به اجازه شما براي بازديد نياز دارد. %s ببينيد', //cpg1.3.0
        'info' => 'اطلاعات',
        'com_added' => 'نظر اضافه شد',
        'alb_updated' => 'آلبوم به روز رساني شد',
        'err_comment_empty' => 'متن نظر شما خالي است !',
        'err_invalid_fext' => 'پسوندهاي قابل قبول براي فايلهاي ارسالي : <br /><br />%s.',
        'no_flood' => 'متاسفانه شما  آخرين نفري هستيد كه در حال حاضر نظر داده است<br /><br />ميتوانيد نظر خود را ويرايش كنيد',
        'redirect_msg' => 'شما در حال تغيير مسير هستيد.<br /><br /><br />اگر مسير به طور اتوماتيك تغيير نكرد بر روي  \'ادامه\' كليك كنيد',
        'upl_success' => 'فايل شما با موفقيت اضافه شد.',
  'email_comment_subject' => 'Comment posted on Coppermine Photo Gallery', //cpg1.3.0
  'email_comment_body' => 'Someone has posted a comment on your gallery. See it at', //cpg1.3.0
  'album_not_selected' => 'آلبوم انتخاب نشده', //cpg1.4
  'com_author_error' => 'اين نام قبلا ثبت شده اگر رمز عبور داريد آنرا وارد نمائيد در غير اين صورت نام ديگري وارد نمائيد', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'عنوان',
  'fs_pic' => 'بزرگترين اندازه تصوير',
  'del_success' => 'با موفقيت حذف شد',
  'ns_pic' => 'انداره طبيعي تصوير',
  'err_del' => 'امكان حدف نيست',
  'thumb_pic' => 'ريزعكس (Thumbnail)',
  'comment' => 'نظر',
  'im_in_alb' => 'تصوير در آلبوم',
  'alb_del_success' => 'آلبوم \'%s\' با موفقيت حذف شد',
  'alb_mgr' => 'مديريت آلبوم',
  'err_invalid_data' => 'اطلاعات اشتباه از \'%s\' دريافت شد',
  'create_alb' => 'آلبوم \'%s\' با موفقيت ايجاد شد',
  'update_alb' => 'به روز رساني آلبوم \'%s\' با عنوان \'%s\' و ايندكس \'%s\'',
  'del_pic' => 'حدف فايل',
  'del_alb' => 'حدف آلبوم',
  'del_user' => 'حدف كاربر',
  'err_unknown_user' => 'كاربر انتخاب شده موجود نيست !',
  'err_empty_groups' => 'جدول گروه وجود ندارد يا خالي است!', //cpg1.4
  'comment_deleted' => 'نظر با موفقيت حدف شد',
  'npic' => 'تصوير', //cpg1.4
  'pic_mgr' => 'مديريت تصوير', //cpg1.4
  'update_pic' => 'به روزرساني تصویر \'%s\' با نام فايل \'%s\' و با ايندكس \'%s\'', //cpg1.4
  'username' => 'نام كاربري', //cpg1.4
  'anonymized_comments' => '%s نظر ناشناخته', //cpg1.4
  'anonymized_uploads' => '%s ارسال عمومي ناشناخته', //cpg1.4
  'deleted_comments' => '%s نظر حذف شد', //cpg1.4
  'deleted_uploads' => '%s ارسال عمومي حذف شد', //cpg1.4
  'user_deleted' => 'كاربر %s حذف شد', //cpg1.4
  'activate_user' => 'كاربر فعال', //cpg1.4
  'user_already_active' => 'اكانت  فعال شده است', //cpg1.4
  'activated' => 'فعال شده', //cpg1.4
  'deactivate_user' => 'غير فعال كردن كاربر', //cpg1.4
  'user_already_inactive' => 'اكانت غير فعال شد', //cpg1.4
  'deactivated' => 'غير فعال شده', //cpg1.4
  'reset_password' => 'دوباره سازي رمز عبور(ها)', //cpg1.4
  'password_reset' => 'رمز عبور دوباره سازي شد به %s', //cpg1.4
  'change_group' => 'تعيير گروه اوليه', //cpg1.4
  'change_group_to_group' => 'تغيير گروه از %s به %s انجام شد.', //cpg1.4
  'add_group' => 'افزودن گروه ثانويه', //cpg1.4
  'add_group_to_group' => 'كاربر %s به گروه %s افزوده شد.اين كاربر هم اكنون عضو %s  به عنوان گروه اوليه و %s به عنوان گروه ثانويه است.', //cpg1.4
  'status' => 'وضعيت', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'اطلاعات كارت توسط نرم افزار پست الكترونيك شما از بين رفته است،آزمايش لينك تمام شد', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'مطمئنيد كه مي خواهيد اين فايل را حدف كنيد؟ \\nنظرات مربوط به اين فايل نيز حدف خواهند شد', //js-alert //cpg1.3.0
  'del_pic' => 'حذف اين فايل', //cpg1.3.0
  'size' => '%s در %s پيكسل',
  'views' => '%s دفعه',
  'slideshow' => 'نمايش پيوسته ( Slideshow )',
  'stop_slideshow' => 'توقف نمايش پيوسته',
  'view_fs' => 'براي نمايش بزرگترين اندازه كليك كنيد',
  'edit_pic' => 'ويرايش اطلاعات فايل', //cpg1.4
  'edit_pic' => 'ويرايش توضيحات', //cpg1.3.0
  'crop_pic' => 'برش و چرخاندن', //cpg1.3.0
);

$lang_picinfo = array(
  'title' =>'مشخصات فايل',
  'Filename' => 'نام فايل',
  'Album name' => 'نام آلبوم',
  'Rating' => 'رتبه (%s راي)',
  'Keywords' => 'كلمات كليدي',
  'File Size' => 'حجم فايل',
  'Date Added' => 'تاريخ ارسال', //cpg1.4
  'Dimensions' => 'ابعاد فايل ',
  'Displayed' => 'دفعات مشاهده',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Make', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Date Time', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Aperture', //cpg1.4
  'FocalLength' => 'Focal length', //cpg1.4
  'Comment' => 'نظر',
  'addFav'=>'افزودن به مورد علاقه ها',
  'addFavPhrase'=>'مورد علاقه ها',
  'remFav'=>'حذف از مورد علاقه ها',
  'iptcTitle'=>'IPTC Title',
  'iptcCopyright'=>'IPTC Copyright',
  'iptcKeywords'=>'IPTC Keywords',
  'iptcCategory'=>'IPTC Category',
  'iptcSubCategories'=>'IPTC Sub Categories',
  'ColorSpace' => 'Color Space', //cpg1.4
  'ExposureProgram' => 'Exposure Program', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Metering Mode', //cpg1.4
  'ExposureTime' => 'Exposure Time', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => ' Image Description', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
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
  'submit' => 'ارسال', //cpg1.4
  'success' => 'اطلاعات با موفقيت به روز رساني شد.', //cpg1.4
  'details' => 'جزئيات', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'تائيد',
  'edit_title' => 'ويرايش اين نظر',
  'confirm_delete' => 'مطمئنيد كه مي خواهيد اين نظر را حدف كنيد؟',
  'add_your_comment' => 'نظر بدهيد',
  'name'=>'نام',
  'comment'=>'نظر',
  'your_name' => 'نامعلوم',
  'report_comment_title' => 'گزارش اين نظر به مديريت', //cpg1.4
);

$lang_fullsize_popup = array(
        'click_to_close' => 'بر روي تصوير كليك كنيد تا اين پنجره بسته شود',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'ارسال كارت پستال',
  'invalid_email' => '<font color="red"><b>Warning</b></font> : آدرس پست الكترونيك اشتباه است :', //cpg1.4
  'ecard_title' => 'كارت پستالي از  %s براي شما',
  'error_not_image' => 'فقظ تصاوير را مي توان به صورت كارت پستال ارسال كرد.', //cpg1.3.0
  'view_ecard' => 'اگر كارت پستال صحيح نمايش داده نشد اينجا كليك كنيد',
  'view_ecard_plaintext' => 'براي مشاهده كارت لطفا اين آدرس را در قسمت آدرس بروزر خود وارد نمائيد :', //cpg1.4
  'view_more_pics' => 'براي ديدن تصویرهاي بيشتر اينجا كليك كنيد', //cpg1.4
  'send_success' => 'كارت شما با موفقيت ارسال شد',
  'send_failed' => 'متاسفانه سرور نمي تواند كارت شما را ارسال نمايد...',
  'from' => 'از',
  'your_name' => 'نام فرستنده',
  'your_email' => 'آدرس پست الكترونيك فرسنتده',
  'to' => 'به',
  'rcpt_name' => 'نام گيرنده',
  'rcpt_email' => 'آدرس پست الكترونيك گيرنده',
  'greetings' => 'عنوان پيام',
  'message' => 'پيام',
  'ecards_footer' => 'ارسال شده توسط %s از آي پي آدرس %s در %s (زمان گالري)', //cpg1.4
  'preview' => 'پيش نمايش كارت', //cpg1.4
  'preview_button' => 'پيش نمايش', //cpg1.4
  'submit_button' => 'ارسال كارت', //cpg1.4
  'preview_view_ecard' => 'اين لينك كمكي در زمان ساخت كارت توليد مي شود و براي پيش نمايش نيست', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'گزارش به مديريت', //cpg1.4
  'invalid_email' => '<b>اخطار</b> : آدرس پست الكترونيك اشتباه است!', //cpg1.4
  'report_subject' => ' گزارشي از %s از گالري %s', //cpg1.4
  'view_report' => 'لينك كمكي اگر گزارش درست نمايش داده نشد', //cpg1.4
  'view_report_plaintext' => 'براي مشاهده گزارش اين آدرس را در قسمت آدرس بروزر خود وارد نمائيد :', //cpg1.4
  'view_more_pics' => 'گالري', //cpg1.4
  'send_success' => 'گزارش شما ارسال شد', //cpg1.4
  'send_failed' => 'متاسفانه سرور نمي تواند گزارش شما را ارسال كند...', //cpg1.4
  'from' => 'از', //cpg1.4
  'your_name' => 'نام شما', //cpg1.4
  'your_email' => 'آدرس پست الكترونيك شما', //cpg1.4
  'to' => 'To', //cpg1.4
  'administrator' => 'مديريت', //cpg1.4
  'subject' => 'موضوع', //cpg1.4
  'comment_field_name' => 'گزارش نظر توسط "%s"', //cpg1.4
  'reason' => 'دليل', //cpg1.4
  'message' => 'پيغام', //cpg1.4
  'report_footer' => 'ارسال شده توسط %s از آي پي %s در %s (زمان گالري)', //cpg1.4
  'obscene' => 'زشت/وقيح', //cpg1.4
  'offensive' => 'حمله /تجاوز', //cpg1.4
  'misplaced' => 'بي مورد/بي محل', //cpg1.4
  'missing' => 'گم شده', //cpg1.4
  'issue' => 'خطا/غير قابل مشاهده', //cpg1.4
  'other' => 'ديگر', //cpg1.4
  'refers_to' => 'گزارش بر ميگردد به', //cpg1.4
  'reasons_list_heading' => 'دليل (هاي) گزارش :', //cpg1.4
  'no_reason_given' => 'دليل ارائه نشد', //cpg1.4
  'go_comment' => 'برو به نظر', //cpg1.4
  'view_comment' => 'نمايش كامل گزارش ونظر', //cpg1.4
  'type_file' => 'فايل', //cpg1.4
  'type_comment' => 'نظر', //cpg1.4
  'invalid_data' => 'اطلاعات گزارش توسط نرم افزار پست الكترونیك خراب شده است .برای دسترسی به اطلاعات از لینك استفاده كنید.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'مشخصات فايل', //cpg1.3.0
  'album' => 'آلبوم',
  'title' => 'عنوان تصویر',
  'filename' => 'نام فايل', //cpg1.4
  'desc' => 'توضيحات',
  'keywords' => 'كليد واژه ها',
  'new_keyword' => 'كليد واژه جديد', //cpg1.4
  'new_keywords' => 'كليد واژه هلي جديد پيدا شدند', //cpg1.4
  'existing_keyword' => 'كليد واژه موجود', //cpg1.4
  'pic_info_str' => '%s &times; %s - %sكيلوبايت - %s مشاهده - %s راي',
  'approve' => 'فايل مجوز', //cpg1.3.0
  'postpone_app' => 'منتظر مجوز',
  'del_pic' => 'حدف فايل', //cpg1.3.0
  'del_all' => 'حذف تمام فايلها', //cpg1.4
  'read_exif' => 'خواندن مجدد اطلاعات EXIF ً', //cpg1.3.0
  'reset_view_count' => 'صفر كردن شمارنده مشاهده',
  'reset_all_view_count' => 'صفز كزدن تمام شمارنده هاي مشاهده', //cpg1.4
  'reset_votes' => 'صفر كردن شمارنده راي',
  'reset_all_votes' => 'صفر كردن تمام شمارنده هاي راي', //cpg1.4
  'del_comm' => 'حدف نظرات',
  'upl_approval' => 'مجوز ارسال',
  'del_all_comm' => 'حذف تمامي نظرات', //cpg1.4
  'edit_pics' => 'ويرايش فايلها', //cpg1.3.0
  'see_next' => 'فايل بعدي', //cpg1.3.0
  'see_prev' => 'فايل قبلي', //cpg1.3.0
  'n_pic' => '%s فايل', //cpg1.3.0
  'n_of_pic_to_disp' => 'تعداد نمايش تصوير', //cpg1.3.0
  'apply' => 'اعمال تغييرات', //cpg1.3.0
  'crop_title' => 'Main Image Editor', //cpg1.3.0
  'preview' => 'پيش نمايش', //cpg1.3.0
  'save' => 'ثبت تصوير', //cpg1.3.0
  'save_thumb' =>'ثبت به صورت ريزعكس ( Thumbnail )', //cpg1.3.0
  'gallery_icon' => 'اين را آيكون من كن', //cpg1.4
  'sel_on_img' =>'منطقه انتخاب شده بايد كاملا داخل تصوير باشد!', //js-alert
  'album_properties' =>'مشخصات آلبوم', //cpg1.4
  'parent_category' =>'موضوع مادر', //cpg1.4
  'thumbnail_view' =>'نمايش بصورت ريز عكس', //cpg1.4
  'select_unselect' =>'انتخاب/عدم انتخاب همه', //cpg1.4
  'file_exists' => " فايل مقصد '%s' وجود دارد!", //cpg1.4
  'rename_failed' => "تغيير نام از %s به %s انجام نشد!", //cpg1.4
  'src_file_missing' => "فايل مبدا '%s' پيدا نشد!", // cpg 1.4
  'mime_conv' => "امكان تبديل فايل از '%s' به '%s' نيست!",//cpg1.4
  'forb_ext' => 'اين پسوند فايل غير مجاز است.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'سئوال هاي متداول', //cpg1.3.0
  'toc' => 'محتويات', //cpg1.3.0
  'question' => 'سئوال: ', //cpg1.3.0
  'answer' => 'جواب: ', //cpg1.3.0
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'سئوال هاي متداول اصلي', //cpg1.3.0
  array('چرا بايد حتما ثبت نام (رجيستر) كنم؟', ' حتما لازم نيست نام نويسي كنيد اما اعضا اين گالري مي توانند از امكاناتي نظير  ارسال تصوير و داشتن ليستي از علاقمندي شخصي ، رتبه دهي به تصاوير و ارسال نظر و ...استفاده كنند.', 'allow_user_registration', '0'), //cpg1.3.0
  array('چگونه ثبت نام كنم؟', 'بر روي لينك "كاربر جديد "، كليك كنيد و فرم مربوط را به طور كامل پر كنيد ، اگر مديريت سيستم فعال سازي با نامه الكترونيك را فعال كرده باشد ، پس از ارسال فرم نامه اي از طرف سيستم براي آدرس شما ارسال مي گردد كه در آن نحوه فعال سازي عضويت شما توضيح داده شده. عضويت شما از اولين ورود شما به سيستم شروع مي گردد.', 'allow_user_registration', '1'), //cpg1.3.0
  array('چگونه وارد سيستم شوم؟', 'بر روي لينك "ورود"، كليك كنيد و نام كاربري و رمز ورودي كه در هنگام ثبت نام استفاده نموده ايد را وارد كنيد، اگر ميخواهيد سيستم در دفعات بعدي شما را بدون پرسيدن نام و رمز وارد كند بايد  " مرا فراموش نكن "، را تيك بزنيد <br /><b>مهم : شما بايد كوكي خود را فعال كنيد در غير اين صورت سيستم قادر به شناساي شما در دفعات بعدي نخواهد بود و همچنين نبايد كوكي سايت را از روي كامپيوتر خود حدف كنيد.</b>', 'offline', 0), //cpg1.3.0
  array('چرا نمي توانم وارد شوم؟', 'آيا ثبت نام كرده ايد؟ شگر ثبت نام كرده ايد آيا بر روي لينكي كه توسط نامه براي شما فرستاده شده كليك كرده ايد؟ در ساير موارد با مديريت سايت ( bmossavari@gmail.com )تماس بگيريد.', 'offline', 0), //cpg1.3.0
  array('رمز ورود را گم كرده ام چه كار كنم؟', 'اگر سايت به شما لينك "رمز فراموش شده"، را داده از آن استفاده كنيد در غير اينصورت با مديريت تماس بگيريد.', 'offline', 0), //cpg1.3.0
  //array('What if I changed my email address?', 'Just simply login and change your email address through "Profile"', 'offline', 0), //cpg1.3.0
  array('چگونه تصويري را در "علاقمندي هاي من"، ثبت كنم؟', 'بر روي تصوير كليك كنيد و سپس بر روي "مشخصات تصوير"(<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />) كليك كنيد ; به پايين صفحه برويد و بر روي "به علاقمندي ها اضافه كن"، كليك كنيد<br /> مديريت بايد امكان مشخصات فايل را به صورت پيش فرض فعال كرده باشد.<br />مهم :كوكي بايد فعال باشد و حدف نشده باشد.', 'offline', 0), //cpg1.3.0
  array('چگونه به یک فایل امتیاز بدهم؟', 'بر روی ریز عکس کلیک کنید و به انتهای صفحه بروید و امتیازبندی را انتخاب کنید.', 'offline', 0),
  array('چگونه به یک عکس نظر بدهم؟', 'بر روی ریز عکس کلیک کنید به انتهای صفحه بروید و نظرتان را تایپ کنید.', 'offline', 0),
  array('چگونه فایل ارسال کنم؟', 'بر روی "ارسال فایل" کلیک کنید آلبوم را انتخاب کنید. بر روی دکمه "مرور" کلیک کنید و فایل مورد نظرتان را انتخاب کنید ، بر روی "باز کردن" کلیک کنید ، تیتر و توضیح را اگر می خواهید اضافه کنید. بر روی "ارسال" کلیک کنید.<br /><br />روش دیگر ، برای کاربرانی که از ویندوز ایکس پی استفاده میکنند ، شما می توانید چند فایل هم زمان را با استفاده از XP Publishing Wizard مستقیما در زیرشاخه شخصی خودتان کپی کنید.<br />برای دریافت دستور العمل و دریافت فایل رجیستری مورد نیاز ، بر <a href="xp_publish.php">اینجا</a> کلیک کنید.', 'allow_private_albums', 1), //cpg1.4
  array('کجا فایل را ارسال کنم؟', 'شما می توانید فایلها را به هر آلبومی در "گالری من" ارسال کنید. ممکن است مدیریت امکان ارسال فایل به آلبومهای دیگری در گالری اصلی را داده باشد.', 'allow_private_albums', 0),
  array('چه نوع و اندازه از فایل می توانم ارسال کنم؟', 'اندزه و نوع (jpg, png, ...) فایل به مدیریت بستگی دارد.', 'offline', 0),
  array('چگونه در "گالری من" آلبوم بسازم ، حذف کنم یا تغییر نام بدهم؟?', 'شما باید در "محیط مدیریت" باشید <br /> به قسمت " ساخت / مرتب کردن آلبومهای من" بروید و بر روی "جدید" کلیک کنید. "آلبوم جدید" را به نام دلخواه خود تغییر دهید.<br />همچنین می تونید نام آلبومهای موجود را تغییر دهید.<br />بر روی "تائید تغییرات" کلیک کنید.', 'allow_private_albums', 0),
  array('چکونه میتوانم دسترسی کاربران را به آلبوم خودم محدود کنم؟', 'شما باید در "محیط مدیریت" باشید <br />به قسمت "تغییرات آلبوم" بروید. در بخش "به روز رسانی آلبوم" آلبومی را که می خواهید تغییر دهید انتخاب کنید.<br />در این قسمت شما می توانید نام ، توضیحات ، ریز عکس ، محدود کردن مشاهده و مجوز نظر دهی / امتیاز بندی را تعیین کنید و تغییر دهید.<br />بر روی "به روز رسانی آلبوم" کلیک کنید.', 'allow_private_albums', 1),
  array('چگونه می توانم گالری کاربران دیگر را ببینم؟', 'به قسمت "لیست آلبوم ها" برویدو "گالری کاربران " را انتخاب کنبد.', 'allow_private_albums', 1),
  array('کوکی چیست؟', 'کوکی اطلاعاتی متنی است که از طرف سایت بر روی رایانه شما ثبت می شود.<br />کوکی ها معمولا برای شناسایی کاربران در آینده و نگهداری اطلاعات ورود کاربر برای جلوگیری از درخواست مجدد رمز عبور  استفاده می شود.', 'offline', 0),
  array('از کجا می توانم این برنامه را برای نصب بر روی سایت خودم تهیه کنم؟', 'این گالری به صورت کد باز تحت حمایت GNU GPL نوشته شده. این برنامه توانایی های زیادی دارد و بر روی پلتفورمهای زیادی نصب می شود. برای دریافت این برنامه از وب سایت اصلی اینجا <a href="http://coppermine-gallery.net/">Coppermine Home Page</a> کلیک کنید و برای دریافت این برنامه با توانایی های فارسی به سایت <a href="http://www.kishmate.com">KISH MATE</a> مراجعه کنید.', 'offline', 0),

  'مرور در سایت',
  array('لیست آلبوم چیست؟', 'این بخش تمام آلبومهایی را که در موضوع جاری هستند با لینک به هر آلبوم نمایش می دهد. اگر داخل یک موضوع نیستید ، این بخش تمام موضوعاتی را که در کل گالری وجود دارد را با لینک به هر موضوع نمایش می دهد. ریز عکسها به هر موضوع لینک هستند.', 'offline', 0),
  array('گالری شما چیست؟', 'این قابلیت به کاربران امکان می دهد گالری شخصی خود را بسازند ، حذف کنند ، آلبوم ها را تغییر دهند و هم چنین فایل به آنها ارسال کنند.', 'allow_private_albums', 1), //cpg1.4
  array('فرق "محیط مدیریت" با "محیط کاربری" چیست؟', 'در این محیط کاربر می تواند گالری خود و در صورت مجوز مدیریت گالری دیگران را تغییر دهد.', 'allow_private_albums', 0),
  array('ارسال عکس چیست؟', 'این قابلیت به کاربر اجازه می دهد فایل به گالری ارسال کند (اندازه و نوع فایل توسط مدیریت تعیین می شود).', 'allow_private_albums', 0),
  array('آخرین ارسال چیست؟', 'این قابلیت آخرین فایل ارسالها را به سایت نمایش می دهد.', 'offline', 0),
  array('آخرین نظرها چیست؟', 'این قابلیت آخرین نظرهایی که به فایل ها توسط کاربران داده شده نمایش می دهد.', 'offline', 0),
  array('بیشترین بازدید شده چیست؟', 'این قابلیت فایلهایی را که بیشترین بازدید را داشته اند نمایش می دهد (چه کاربر به سیستم وارد شده باشد یا نشده باشد).', 'offline', 0),
  array('بالاترین امتیاز چیست؟', 'این قابلیت فایلهای با بالاترین امتیاز داده شده توسط کاربران را نمایش می دهد ، نمایش امتیاز متوسط (برای مثال : پنج کاربر هر کدام امتیاز <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />:امتیاز متوسط فایل <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> خواهد بود اگر پنج کاربر به یک فایل به ترتیب امتیاز 1 تا 5 بدهند امتیاز متوسط فایل <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> خواهد بود. )<br /> امتیاز بندی بین <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (بهترین) تا <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (بدترین) است.', 'offline', 0),
  array('مورد علاقه های شما چیست؟', 'این قابلیت به کاربر اجازه می دهد تا فایلهای مورد علاقه خود را مشخص کند تا همیشه در دسترسش باشند ، این بخش از کوکی برای نگهداری اطلاعات استفاده می کند.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'يادآوري رمز ورود', //cpg1.3.0
  'err_already_logged_in' => 'شما هم اكنون وارد شده ايد !', //cpg1.3.0
  'enter_email' => 'آدرس پست الكترونيك خود را وارد نمائيد', //cpg1.4
  'submit' => 'ارسال', //cpg1.3.0
  'illegal_session' => 'مدت زمان مجاز اجراي اين صفحه به پايان رسيده و يا مجوز اجرا اشتباه است', //cpg1.4
  'failed_sending_email' => 'امكان ارسال نامه يادآوري رمز عبور نيست!', //cpg1.3.0
  'email_sent' => 'نامه اي به همراه نام كاربري و رمز ورود شما به آدرس %s ارسال شد', //cpg1.3.0
  'verify_email_sent' => 'نامه اي به %s ارسال شد.براي اتمام عمليات لطفا صندوق پست الكترونيك خود را مشاهده فرمائيد.', //cpg1.4
  'err_unk_user' => 'اخطار: كاربري با اين نام موجود نيست', //cpg1.3.0
  'account_verify_subject' => '%s - (درخواست رمز عبور جديد)New password request', //cpg1.4
  'account_verify_body' => 'درخواست شما براي رمز عبور جديد دريافت شد.اگر ميخواهيد عمليات به اتمام برسد و رمز عبور جديد براي شما فرستاده شود بر روي لينك زير كليك كنيد:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - (رمز عبور جديد شما)Your New Password', //cpg1.4
  'passwd_reset_body' => 'رمز عبور جديدي كه درحواست كرده بوديد:
Username: %s
Password: %s
براي ورود اينجا كليك كنيد %s.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'گروه',
  'permissions' => 'مجوزها', //cpg1.4
  'public_albums' => 'ارسال به آلبوم هاي عمومي', //cpg1.4
  'personal_gallery' => 'گالري شخصي', //cpg1.4
  'upload_method' => 'روش ارسال', //cpg1.4
  'disk_quota' => 'سهم فضا',
  'rating' => 'شركت در رتبه بندي', //cpg1.4
  'ecards' => 'ارسال كارت', //cpg1.4
  'comments' => 'ارائه نظر', //cpg1.4
  'allowed' => 'اجازه دارد', //cpg1.4
  'approval' => 'تائيديه', //cpg1.4
  'boxes_number' => 'تعداد فيلدها', //cpg1.4
  'variable' => 'متغيير', //cpg1.4
  'fixed' => 'ثابت', //cpg1.4
  'apply' => 'تائيد تغييرات',
  'create_new_group' => 'ساخت گروه جديد',
  'del_groups' => 'حذف گروه (هاي) انتخاب شده',
  'confirm_del' => 'اخطار : وقتي گروهي را حذف مي كنيد كاربران آن گروه به گروه \'Registered\' منتقل مي گردند!\n\n ميخواهيد ادامه دهيد؟', //js-alert
  'title' => 'مديريت گروه كاربران',
  'num_file_upload' => 'تعداد حداكثر/دقيق فيلدهاي ارسال فايل', //cpg1.4
  'num_URI_upload' => 'تعداد حداكثر/دقيق فيلدهاي ارسال URI', //cpg1.4
  'reset_to_default' => 'تغيير به نام پيش فرض اوليه (%s) - توصيه مي شود!', //cpg1.4
  'error_group_empty' => 'جدول گروه خالي بود!<br /><br />گروه هاي پيش فرض ساخته شد ، لطفا اين صفحه را بازخواني (Refresh) كنيد', //cpg1.4
  'explain_greyed_out_title' => 'چرا اين رديف غير فعال شده؟', //cpg1.4
  'explain_guests_greyed_out_text' => ' شما نمي توانيد تنظيمات اين گروه را تغيير دهيد زيرا در صفحه پيكربندي گزينه \'امكان دسترسي كاربران وارد نشده به سيستم \' را \'خير\' وارد كرده ايد.هيچكدام از ميهمانان (اعضاي گروه %s) نمي توانند كاري انجام دهند بجز ورود! به هر حال تنظيمات گروه براي آنها اثري ندارد.', //cpg1.4
  'explain_banned_greyed_out_text' => '<span dir=rtl>شما نمي توانيد تنظيمات گروه %s را تغيير دهيد زيرا اعضاي اين گروه به هر حال نمي توانند كاري انجام دهند!</span>', //cpg1.4
  'group_assigned_album' => 'آلبوم (هاي) مربوط', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'خوش آمديد !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'آيا مطمئنيد كه مي خواهيد اين آلبوم را حدف نماييد؟ \\nهمه تصاوير و همچنين نظرات حدف خواهند شد.',
  'delete' => 'حدف',
  'modify' => 'متعلقات آلبوم',
  'edit_pics' => 'ويرايش فايل',
);

$lang_list_categories = array(
  'home' => 'صفحه اصلي',
  'stat1' => '<b>[pictures]</b> تصوير در <b>[albums]</b> آلبوم و <b>[cat]</b> موضوع با <b>[comments]</b> نظر <b>[views]</b> دفعه مشاهده شده',
  'stat2' => '<b>[pictures]</b> تصوير در <b>[albums]</b> آلبوم <b>[views]</b> دفعه مشاهده شده',
  'xx_s_gallery' => 'گالري %s',
  'stat3' => '<b>[pictures]</b> تصوير در <b>[albums]</b> آلبوم با <b>[comments]</b> نظر <b>[views]</b>  دفعه مشاهده شده'
);

$lang_list_users = array(
  'user_list' => 'ليست كاربران',
  'no_user_gal' => 'گالري كاربري يافت نشد',
  'n_albums' => '%s آلبوم',
  'n_pics' => '%s تصوير'
);

$lang_list_albums = array(
  'n_pictures' => '%s تصوير',
  'last_added' => ' آخرين ارسال در %s',
  'n_link_pictures' => '%s فايل لينك شده', //cpg1.4
  'total_pictures' => 'در كل %s وجود دارد', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'مديريت كليد واژه ها', //cpg1.4
  'edit' => 'ويرايش', //cpg1.4
  'delete' => 'حذف', //cpg1.4
  'search' => 'جستجو', //cpg1.4
  'keyword_test_search' => 'جستجوي %s در پنجره جديد', //cpg1.4
  'keyword_del' => 'حذف كليد واژه %s', //cpg1.4
  'confirm_delete' => 'مي خواهيد كليد واژه %s را از كل گالري حذف نمائيد! مطمئن هستيد؟', //cpg1.4  // js-alert
  'change_keyword' => 'تغيير كليد واژه', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'ورود',
  'enter_login_pswd' => 'براي ورود به سايت نام كاربري و رمز عبور را وارد نماييد',
  'username' => 'نام كاربري',
  'password' => 'رمز عبور',
  'remember_me' => 'مرا فراموش نكن',
  'welcome' => '%s خوش آمدید ...',
  'err_login' => '*** خطاي ورود ، دوباره امتحان كنيد ***',
  'err_already_logged_in' => 'شما در حال حاضر در سايت وارد شده ايد !',
  'forgot_password_link' => 'رمز فراموش شده', //cpg1.3.0
  'cookie_warning' => 'اخطار ! بروزر شما از Cookie ها حمايت نميكند', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
        'logout' => 'خروج',
        'bye' => 'خداحافظ %s ...',
        'err_not_loged_in' => 'شما وارد سايت نشده ايد !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'بسته', //cpg1.4
  'submit' => 'تائيد', //cpg1.4
  'up' => 'يك سطح بالاتر', //cpg1.4
  'current_path' => 'آدرس جاري', //cpg1.4
  'select_directory' => 'لطفا يك زير شاخه انتخاب نمائيد.', //cpg1.4
  'click_to_close' => 'براي بستن اين پنجره بر روي تصویر كليك كنيد.',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'به روز رساني آلبوم %s',
  'general_settings' => 'تنظيمات اصلي',
  'alb_title' => 'عنوان آلبوم',
  'alb_cat' => 'موضوع آلبوم',
  'alb_desc' => 'شرح آلبوم',
  'alb_keyword' => 'كلید واژه آلبوم', //cpg1.4
  'alb_thumb' => 'ريزعكس آلبوم',
  'alb_perm' => 'سطح دسترسي آلبوم',
  'can_view' => 'آلبوم قابل مشاهده است براي',
  'can_upload' => 'بيننده ها مي توانند فايل ارسال كنند',
  'can_post_comments' => 'بيننده ها مي توانند نظر بدهند',
  'can_rate' => 'بيننده ها مي توانند به اين فايل راي بدهند',
  'user_gal' => 'گالري كاربران',
  'no_cat' => '* بدون موضوع *',
  'alb_empty' => 'آلبوم خالي است',
  'last_uploaded' => 'آخرين ارسال',
  'public_alb' => 'همه (آلبوم عمومي)',
  'me_only' => 'فقط براي من',
  'owner_only' => 'صاحب آلبوم (%s) فقط',
  'groupp_only' => 'اعضا گروه \'%s\'',
  'err_no_alb_to_modify' => 'آلبومي براي ويرايش توسط شما در ديتابيس موجود نيست.',
  'update' => 'به روز رساني آلبوم', //cpg1.3.0
  'reset_album' => 'بازسازی مجدد آلبوم', //cpg1.4
  'reset_views' => 'صفر كردن شمارنده نمایشها در %s', //cpg1.4
  'reset_rating' => 'صفر كردن رتبه بندی همه فایلها در %s', //cpg1.4
  'delete_comments' => 'حذف تمام نظرات داده شده به %s', //cpg1.4
  'delete_files' => ' %sبدون بازگشت%s حذف تمام فایلهای %s', //cpg1.4
  'views' => 'دفعات مشاهده', //cpg1.4
  'votes' => 'آرا', //cpg1.4
  'comments' => 'نظرات', //cpg1.4
  'files' => 'فایلها', //cpg1.4
  'submit_reset' => 'ارسال تغییرات', //cpg1.4
  'reset_views_confirm' => 'مطمئن هستم', //cpg1.4
  'notice1' => '(*)وابسته به تنظیمات %sگروه%s',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'رمز عبور آلبوم', //cpg1.4
  'alb_password_hint' => 'كلمه كمكی رمز عبور', //cpg1.4
  'edit_files' =>'ویرایش فایلها', //cpg1.4
  'parent_category' =>'موضوع مادر', //cpg1.4
  'thumbnail_view' =>'نمایش به صورت ریز عكس', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php //cpg1.3.0
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info', //cpg1.3.0
  'explanation' => 'This is the output generated by the PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Copermine (trimming the output at the right corner).', //cpg1.3.0
  'no_link' => 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You can not post a link to this page for others, they will be denied access.', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'مدیریت تصاویر', //cpg1.4
  'select_album' => 'انتخاب آلبوم', //cpg1.4
  'delete' => 'حذف', //cpg1.4
  'confirm_delete1' => 'میحواهید این تصویر را حذف كنید! مطمئن هستید؟', //cpg1.4
  'confirm_delete2' => '\nتصویر به صورت كامل وبدون بازگشت حذف خواهد شد.', //cpg1.4
  'apply_modifs' => 'اعمال تغییرات', //cpg1.4
  'confirm_modifs' => 'تائید تغییرات', //cpg1.4
  'pic_need_name' => 'تصویر بی نام كه نمی شود!!!؟', //cpg1.4
  'no_change' => 'شما تغییری انجام ندادید!!!', //cpg1.4
  'no_album' => '* آلبومی نيست *', //cpg1.4
  'explanation_header' => 'نحوه مرتب سازی که در این بخش تعیین می کنید فقط در صورتی اعمال می شود که', //cpg1.4
  'explanation1' => 'مدیریت نحوه مرتب سازی پیش فرض را در پیکربندی "پیش فرض مرتب سازی برای فایلها" را "محل قرارگیری صعودی" یا محل قرارگیری نزولی" تعیین کرده باشد.(تنظیمات کلی برای کاربرانی که نحوه مرتب سازی را مشخص نکرده اند)', //cpg1.4
  'explanation2' => 'کاربر "محل قرارگیری صعودی" یا "محل قرارگیری نزولی" را در صفحه ریز عکسها انتخاب کرده باشد.(تنمظیمات شخصی کاربر)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'می خواهید PlugIn را از حالت نصب خارج كنید ، مطمئنید؟', //cpg1.4
  'confirm_delete' => 'می خواهید این PlugIn را حذف كنید، مطمئنید؟', //cpg1.4
  'pmgr' => 'مدیریت PlugIn', //cpg1.4
  'name' => 'نام', //cpg1.4
  'author' => 'نویسنده', //cpg1.4
  'desc' => 'شرح', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'PlugIn های نصب شده', //cpg1.4
  'n_plugins' => 'PlugIn های نصب نشده', //cpg1.4
  'none_installed' => 'هیچی نصب نشده', //cpg1.4
  'operation' => 'عملبات', //cpg1.4
  'not_plugin_package' => 'فایل ارسال شده PlugIn نیست!!!', //cpg1.4
  'copy_error' => 'خطایی در زمان ارسال این PlugIn به زیر شاخه Plugins رخ داده!', //cpg1.4
  'upload' => 'ارسال', //cpg1.4
  'configure_plugin' => 'تنظیمات PlugIn', //cpg1.4
  'cleanup_plugin' => 'پاكسازی PlugIn', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
        'already_rated' => 'متاسفانه شما همين الان به فايل راي داديد',
        'rate_ok' => 'راي شما پذيرفته شد',
  'forbidden' => 'شما نمي توانيد به فايل هاي خودتان راي بدهيد!', //cpg1.3.0
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
مديريت {SITE_NAME} حق هرگونه تغيير يا حذف مطالب را براي خود محفوظ نگه داشته و در زمان تغييرات مشاهده تمامي ارسالها غير ممكن خواهد بود. همچنين مسئوليت استفاده غير قانوني از اين سايت به عهده استفاده كننده ميباشد و هر گونه عمل غير قانوني به مراجع ذي صلاح ارجاع داده مي شود.<br />
<br />
به عنوان كاربر شما تعهد ميكنيد كه هيچگونه فايل سكسي ، ترسناك ، تحريك كننده به خشونت ، آزار دهنده ، شخصي(مربوط به ديگران بدون رضايت شخص)و هر گونه اطلاعاتي كه خلاف قوانين دولتي باشد به سايت ارسال نكنيد و شما مي پذيريد كه مديريت {SITE_NAME} حق حذف يا ويرايش هر گونه از اين نوع مطالب را دارد.به عنوان كاربر شما مي پذيريد كه اطلاعات شما در ديتابيس {SITE_NAME} ثبت و نگهداري گردد و  اين اطلاعات مگر در موارد ذكر شده قبلي به شخص سومي داده نخواهد شد، البته اين سايت مسئوليتي در قبال حملات هكري قبول نميكند.<br />
<br />
اين سايت براي نگهداري اطلاعات شما از كوكي استفاده مي نمايد. همچنين از آدرس پست الكترونيك شما تنها جهت فعال سازي نام كاربري و ارسال رمز فراموش شده استفاده خواهد شد.<br />
<br />
با كليك كردن بر روي دكمه 'مي پذيرم' شما كليه موارد بالا را قبول ميكنيد.
EOT;

$lang_register_php = array(
  'page_title' => 'ثبت نام كاربران',
  'term_cond' => 'قوانين و مقررات سايت',
  'i_agree' => 'مي پذيرم',
  'submit' => 'ارسال فرم ثبت نام',
  'err_user_exists' => 'لطفا نام كاربري ديگري انتخاب كنيد اين نام قبلا استفاده شده',
  'err_password_mismatch' => 'لطفا مجددا پسورد را وارد نماييد ، دو پسورد مشابه هم نيستند',
  'err_uname_short' => 'نام كاربري حداقل بايد 2 حرف داشته باشد',
  'err_password_short' => 'رمز ورود حداقل بايد 2 حرف داشته باشد',
  'err_uname_pass_diff' => 'نام كاربري و رمز عبور بايد متفاوت باشند',
  'err_invalid_email' => 'آدرس پست الكترونيك اشتباه است',
  'err_duplicate_email' => 'با اين آدرس پست الكترونيك ، كاربر ديگري ثبت نام كرده',
  'enter_info' => 'ورود اطلاعات ثبت نام',
  'required_info' => 'اطلاعات مورد نياز',
  'optional_info' => 'اطلاعات اختياري',
  'username' => 'نام كاربري',
  'password' => 'رمز ورود',
  'password_again' => 'تكرار مجدد رمز عبور',
  'email' => 'آدرس پست الكترونيك',
  'location' => 'محل اقامت',
  'interests' => 'علاقمنديها',
  'website' => 'وب سايت',
  'occupation' => 'شغل',
  'error' => 'خطا',
  'confirm_email_subject' => '%s - اطلاعات ثبت نام تائيد شد',
  'information' => 'اطلاعات',
  'failed_sending_email' => 'امكان ارسال نامه ثبت نام نيست !',
  'thank_you' => 'از ثبت نام شما متشكريم.<br /><br />نامه اي به آدرس شما ارسال شد كه در آن نحوه فعال سازي اشتراك شما اعلام گرديده.',
  'acct_created' => 'اشتراك شما ايجاد شد و شما مي توانيد با ورود نام كاربري و دادن رمز ورود به سايت وارد شويد.',
  'acct_active' => 'اشتراك شما فعال شد و شما مي توانيد با ورود نام كاربري و دادن رمز ورود به سايت وارد شويد.',
  'acct_already_act' => 'اشتراك شما قبلا فعال شده است !',
  'acct_act_failed' => 'اين اشتراك قابل فعال سازي نيست !',
  'err_unk_user' => 'كاربر انتخاب شده وجود ندارد !',
  'x_s_profile' => 'مشخصات شخصي %s',
  'group' => 'گروه',
  'reg_date' => 'عضو شده در',
  'disk_usage' => 'فضاي استفاده شده',
  'change_pass' => 'تغيير رمز ورود',
  'current_pass' => 'رمز ورود سابق',
  'new_pass' => 'رمز ورود جديد',
  'new_pass_again' => 'تكرار مجدد رمز ورود جديد',
  'err_curr_pass' => 'پسورد سابق اشتباه است',
  'apply_modif' => 'تغييرات انجام شد',
  'change_pass' => 'تغيير رمز ورود من',
  'update_success' => 'اطلاعات شخسي شما به روز رساني شد',
  'pass_chg_success' => 'رمز ورود شما تغيير يافت',
  'pass_chg_error' => 'رمز ورود شما تغيير نيافت',
  'notify_admin_email_subject' => '%s - خطاي ثبت نام', //cpg1.3.0
  'last_uploads' => 'آخرین فایل ارسال شده.<br />برای دیدن كلیك كنید، تمام ارسالهای', //cpg1.4
  'last_comments' => 'آخرین نظر.<br />برای دیدن كلیك كنید،تمام نظرات', //cpg1.4
  'notify_admin_email_body' => 'يك كاربر جديد با نام  "%s" به گالري شما اضافه شد.', //cpg1.3.0
  'pic_count' => 'فایلها ارسال شدند', //cpg1.4
  'notify_admin_request_email_subject' => '%s - درخواست ثبت نام', //cpg1.4
  'thank_you_admin_activation' => 'از شما متشكریم.<br /><br />درخواست شما برای فعال سازی اشتراكتان برای مدیریت ارسال شد.به زودی نامه تائیدیه برای شما ارسال می گردد.', //cpg1.4
  'acct_active_admin_activation' => 'اشتراك فعال شد و یك نامه الكترونیك برای كاربر ارسال گردید.', //cpg1.4
  'notify_user_email_subject' => '%s - اعلام فعال سازی', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Thank you for registering at {SITE_NAME}
In order to activate your account, you need to click on the link below
or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,
The management of {SITE_NAME}

in Persian:
از اینكه در سایت {SITE_NAME} ثبت نام نموده اید ممنونیم
 برای فعال سازی اشتراك خود با نام كاربری "{USER_NAME}" ابتدا باید بر روی لینك زیر كلیك كنید یا آنرا در قسمت آدرس مرورگر خودكپی نمائید و دكمه go را بزنید.

<a href="{ACT_LINK}">{ACT_LINK}</a>

مدیریت سایت {SITE_NAME}
با تشكر
EOT;

$lang_register_activated_email = <<<EOT
Your account has been approved and activated.
You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"

Regards,
The management of {SITE_NAME}

In Persian:
اشتراك شما تائید و فعال شد.
شما می توانید با استفاده از نام كاربری "{USER_NAME}" وارد سایت <a href="{SITE_LINK}">{SITE_LINK}</a> شوید.
با تشكر
مدیریت سایت {SITE_NAME}
EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'بازنگري نظرات',
  'no_comment' => 'نظري براي بازنگري وجود ندارد',
  'n_comm_del' => '%s نظر حدف شد',
  'n_comm_disp' => 'تعداد نظرات براي نمايش',
  'see_prev' => 'قبلي',
  'see_next' => 'بعدي',
  'del_comm' => 'حدف نظرات انتخاب شده',
  'user_name' => 'نام', //cpg1.4
  'date' => 'تاریخ', //cpg1.4
  'comment' => 'نظر', //cpg1.4
  'file' => 'فایل', //cpg1.4
  'name_a' => 'نام كاربر صعودی', //cpg1.4
  'name_d' => 'نام كاربر نزولی', //cpg1.4
  'date_a' => 'تاریخ صعودی', //cpg1.4
  'date_d' => 'تاریخ نزولی', //cpg1.4
  'comment_a' => 'نظر صعودی', //cpg1.4
  'comment_d' => 'نظر نزولی', //cpg1.4
  'file_a' => 'فایل صعودی', //cpg1.4
  'file_d' => 'فایل نزولی', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')) {

$lang_search_php = array(
  'title' => 'جستجوی مجموعه فایلها', //cpg1.4
  'submit_search' => 'جستجو', //cpg1.4
  'keyword_list_title' => 'لیست كلید واژه ها', //cpg1.4
  'keyword_msg' => 'لیست بالا كامل نیست.كلمات تیتر و شرح عكس در لیست بالا نیست، برای جستجوی آنها از جستجوی دقیق كلمات استفاده كنید.',  //cpg1.4
  'edit_keywords' => 'ویرایش كلید واژه ها', //cpg1.4
  'search in' => 'جستجو در:', //cpg1.4
  'ip_address' => 'آدرس آی پی', //cpg1.4
  'fields' => 'جستجو در', //cpg1.4
  'age' => 'سن', //cpg1.4
  'newer_than' => 'جدید تر از', //cpg1.4
  'older_than' => 'قدیمی تر از', //cpg1.4
  'days' => 'روز', //cpg1.4
  'all_words' => 'تطابق كامل با تمام كلمه ها (AND)', //cpg1.4
  'any_words' => 'تطابق كامل با هر كدام از كلمات (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'تیتر', //cpg1.4
  'caption' => 'عنوان', //cpg1.4
  'keywords' => 'كلید واژه ها', //cpg1.4
  'owner_name' => 'نام مالك', //cpg1.4
  'filename' => 'نام فایل', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'جستجوي فايل جديد',
  'select_dir' => 'انتخاب زير شاخه',
  'select_dir_msg' => 'اين گزينه به شما اجازه مي دهد تا فايلهايي را كه از طريق FTP بروي سرور خود ارسال كرده ايد، اضافه كنيد.<br /><br />زيرشاخه اي كه فايل ها در آن هستند را انتخاب كنبد',
  'no_pic_to_add' => 'فايلي براي اضافه نمودن وجود ندارد.',
  'need_one_album' => 'شما حداقل به يك آلبوم براي اجراي اين گزينه احتياج داريد',
  'warning' => 'اخطار',
  'change_perm' => 'برنامه نمي تواند بر روي زيرشاخه بنويسد لطفا زيرشاخه را از حالت 755 به 777 تغيير دهيد و مجددا سعي نمائيد. !',
  'target_album' => '<b>فرستادن فايل هاي "</b>%s<b>" به </b>%s',
  'folder' => 'زيرشاخه',
  'image' => 'تصوير',
  'album' => 'آلبوم',
  'result' => 'نتايج',
  'dir_ro' => 'غير قابل نوشتن! ',
  'dir_cant_read' => 'غير قابل خواندن! ',
  'insert' => 'اضافه كردن فايل هاي جديد به گالري',
  'list_new_pic' => 'ليست فايل هاي جديد',
  'insert_selected' => 'ورود فايل هاي انتخاب شده',
  'no_pic_found' => 'فايل جديدي پيدا نشد',
  'be_patient' => 'برنامه براي اضافه نمودن فايل ها به زمان نياز دارد، صبر كنيد ...',
  'no_album' => 'آلبومي انتخاب نشد',  //cpg1.3.0
  'result_icon' => 'برای دیدن ریز مشخصات و یا بارگزاری مجدد كلیك كنید.',  //cpg1.4
  'notes' =>  '<ul>'.
                                '<li><b>OK</b> : يعني فايل با موفقيت اضافه شد'.
                                '<li><b>DP</b> : يعني فايل قبلا در ديتابيس موجود بوده'.
                                '<li><b>PB</b> : يعني فايل نمي تواند اضافه شود ، تنظيمات خود و سطح دسترسي زيرشاخه حاوي فايل ها را بررسي كنيد'.
                        		'<li><b>NA</b> : يعني آلبومي كه فايل ها بايد به آن اضافه شوند مشحص نشده , بر روي \'<a href="javascript:history.back(1)">بازگشت</a>\' كليك كنيد و آلبوم را انتخاب نمائيد. اگر آلبوم نداريد <a href="albmgr.php"> آلبوم بسازيد </a></li>'.
                                '<li>اگر پيام هاي OK, DP, PB نمايش داده نشد بر روي فايل خراب شده كليك كنيد تا پيغام PHP را ببينيد'.
                                '<li>اگر پيغام Timeout دريافت نموديد يك بار ديگر صفحه را Reload كنيد'.
                          '</ul>', //cpg1.3.0
  'select_album' => 'انتخاب آلبوم', //cpg1.3.0
  'check_all' => 'انتخاب همه', //cpg1.3.0
  'uncheck_all' => 'عدم انتخاب همه', //cpg1.3.0
  'no_folders' => '<span dir=rtl>هنوز زیر شاخه ای در زیر شاخه "albums" وجود ندارد.مطمئن شوید كه حتما یك زیر شاخه در زیر شاخه "albums" ساخته اید و فایلهای خود را از طریق FTP در این زیر شاخه كپی كرده اید.هرگز فایلی در زیر شاخه "userpics" كپی نكنید ، همچنین آنرا ویرایش نكنید این زیر شاخه ها برای ارسال از طریق http طراحی شده اند ونباید تغییری در آنها اعمال گردد.</span>', //cpg1.4
  'albums_no_category' => 'آلبومهای طبقه بندی نشده', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* آلبومها شخصی', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'قابلیت مرور در زیرشاخه ها (توصیه شده)', //cpg1.4
  'edit_pics' => 'ویرایش فایلها', //cpg1.4
  'edit_properties' => 'تنظیمات آلبوم', //cpg1.4
  'view_thumbs' => 'نمایش بصورت ریز عكس', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'نمایش/عدم نمایش این ستون', //cpg1.4
  'vote' => 'اطلاعات آراء', //cpg1.4
  'hits' => 'اطلاعات بازدیدها', //cpg1.4
  'stats' => 'مشخصات آراء', //cpg1.4
  'sdate' => 'تاریخ', //cpg1.4
  'rating' => 'امتیاز', //cpg1.4
  'search_phrase' => 'عبارات جستجو شده', //cpg1.4
  'referer' => 'توصیه كننده ها', //cpg1.4
  'browser' => 'مرورگر', //cpg1.4
  'os' => 'سیستم هامل', //cpg1.4
  'ip' => 'آی پی', //cpg1.4
  'sort_by_xxx' => 'مرتب شده بر حسب %s', //cpg1.4
  'ascending' => 'صعودی', //cpg1.4
  'descending' => 'نزولی', //cpg1.4
  'internal' => 'داخلی', //cpg1.4
  'close' => 'بسته', //cpg1.4
  'hide_internal_referers' => 'توصیه كنندگان داخلی را نمایش نده', //cpg1.4
  'date_display' => 'نمایش تاریخ', //cpg1.4
  'submit' => 'ارسال/بارگزاری مجدد', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'ارسال فايل', //cpg1.3.0
  'custom_title' => 'تنظیم فرم ارسال', //cpg1.3.0
  'cust_instr_1' => 'شما ميتوانيد تعداد فايل هاي ارسالي همزمان را مشخص كنيد. اما به هر حال, بيشتر از تعداد زير اجازه ارسال همزمان نداريد.', //cpg1.3.0
  'cust_instr_2' => 'تعداد درخواست ارسال همزمان', //cpg1.3.0
  'cust_instr_3' => 'تعداد ارسال همزمان فايل: %s', //cpg1.3.0
  'cust_instr_4' => '‌‌‌‌‌‌‌‌تعداد ارسال همزمان ‌اينتر فيس ‌:‌ ‌‌%s‌‌', //cpg1.3.0
  'cust_instr_5' => 'تعداد در خواست ارسال همزمان ‌اينتر فيس:', //cpg1.3.0
  'cust_instr_6' => 'تعداد درخواست ارسال همزمان فايل:', //cpg1.3.0
  'cust_instr_7' => 'لطفا تعداد درخواست ارسال همزمان خود را ذكر كنيد.  سپس بر روي \'ادامه\' كليك كنيد. ', //cpg1.3.0
  'reg_instr_1' => 'عمل خطا در ايجاد فرم.', //cpg1.3.0
  'reg_instr_2' => 'شما مي توانيد در زير فايل خود را ارسال نمائيد. حجم هر كدام از فايل هاي ارسالي شما نبايد از %s KB بيشتر باشد. فايل هاي ZIP ارسالي به صورت فشرده باقي خواهند ماند.', //cpg1.3.0
  'reg_instr_3' => 'اگر مي خواهيد فايل فشرده خود را باز كنيد از بخش باز كننده فايل فشرده استفاده نمائيد.', //cpg1.3.0
  'reg_instr_4' => 'وقتي از قسمت ارسال URI/URL uاستفاده مي كنيد, لطفا آدرس را به صورت: http://www.mysite.com/images/example.jpg وارد نمائيد', //cpg1.3.0
  'reg_instr_5' => 'هنگامي مه فرم تكميل شد ،لطفا بر روي \'ادامه\' كليك كنيد.', //cpg1.3.0
  'reg_instr_6' => 'باز كردن فايل فشرده ارسالي:', //cpg1.3.0
  'reg_instr_7' => 'فايل هاي ارسالي:', //cpg1.3.0
  'reg_instr_8' => 'ارسال URI/URL :', //cpg1.3.0
  'error_report' => 'گزارش دهي خطا', //cpg1.3.0
  'error_instr' => 'ارسال هاي مشروحه داراي خطا هستند:', //cpg1.3.0
  'file_name_url' => 'نام فايل/URL', //cpg1.3.0
  'error_message' => 'پيغام خطا', //cpg1.3.0
  'no_post' => 'فايل بوسيله پست ارسال نشده.', //cpg1.3.0
  'forb_ext' => 'فايل با اين پسوند قابل قبول نيست.', //cpg1.3.0
  'exc_php_ini' => 'ارسال فايلي با بيش از حجم اعلام شده در php.ini.', //cpg1.3.0
  'exc_file_size' => 'ارسال فايلي با بيش از حجم اعلام شده در تنظيمات.', //cpg1.3.0
  'partial_upload' => 'Only a partial upload.', //cpg1.3.0
  'no_upload' => 'ارسالي اتفاق نيفتاد.', //cpg1.3.0
  'unknown_code' => 'خطاي نامشخص PHPدر ارسال.', //cpg1.3.0
  'no_temp_name' => 'عدم ارسال - عدم نام موقت.', //cpg1.3.0
  'no_file_size' => 'شامل اطلاعات نيست/خراب است', //cpg1.3.0
  'impossible' => 'غير قابل حركت.', //cpg1.3.0
  'not_image' => 'تصوير نيست/خراب شده', //cpg1.3.0
  'not_GD' => 'پسوند يك GD نيست.', //cpg1.3.0
  'pixel_allowance' => 'بيشتر از حداكثر پيكسل قابل قبول.', //cpg1.3.0
  'incorrect_prefix' => 'URI/URL اشتباه', //cpg1.3.0
  'could_not_open_URI' => 'نمي توان URI را باز كرد.', //cpg1.3.0
  'unsafe_URI' => 'امنيت قابل بررسي نيست.', //cpg1.3.0
  'meta_data_failure' => 'خرابي اطلاعات سر خط', //cpg1.3.0
  'http_401' => '401 Unauthorized', //cpg1.3.0
  'http_402' => '402 Payment Required', //cpg1.3.0
  'http_403' => '403 Forbidden', //cpg1.3.0
  'http_404' => '404 Not Found', //cpg1.3.0
  'http_500' => '500 Internal Server Error', //cpg1.3.0
  'http_503' => '503 Service Unavailable', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME could not be determined.', //cpg1.3.0
  'MIME_type_unknown' => 'Unknown MIME type', //cpg1.3.0
  'cant_create_write' => 'Cannot create write file.', //cpg1.3.0
  'not_writable' => 'Cannot write to write file.', //cpg1.3.0
  'cant_read_URI' => 'Cannot read URI/URL', //cpg1.3.0
  'cant_open_write_file' => 'Cannot open URI write file.', //cpg1.3.0
  'cant_write_write_file' => 'Cannot write to URI write file.', //cpg1.3.0
  'cant_unzip' => 'عدم توانايي در باز كردن.', //cpg1.3.0
  'unknown' => 'خطاي ناشناخته', //cpg1.3.0
  'succ' => 'ارسال با موفقيت انجام شد', //cpg1.3.0
  'success' => '%s ارسال با موفقيت انجام شدند.', //cpg1.3.0
  'add' => 'لطفا بر روي \'ادامه\' كليك كنيد تا فايل ها به آلبوم اضافه گردند.', //cpg1.3.0
  'failure' => 'خطاي ارسال', //cpg1.3.0
  'f_info' => 'اطلاعات فايل', //cpg1.3.0
  'no_place' => 'فايل قبلي نتوانسته در جاي خود قرار بگيرد.', //cpg1.3.0
  'yes_place' => 'فايل قبلي با موفقيت مستقر شد.', //cpg1.3.0
  'max_fsize' => 'حداكثر حجم اجازه داده شده %s KB',
  'album' => 'آلبوم',
  'picture' => 'فايل', //cpg1.3.0
  'pic_title' => 'عنوان فايل', //cpg1.3.0
  'description' => 'شرح فايل', //cpg1.3.0
  'keywords' => 'كلید واژه ها (با جاي خالي جداسازي كنيد)<a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">افزودن از لیست</a>', //cpg1.4
  'keywords_sel' =>'یك كلید واژه انتخاب كنید', //cpg1.4
  'err_no_alb_uploadables' => 'متاسفانه آلبومی وحود ندارد كه شما اجازه ارسال در آن داشته باشيد', //cpg1.3.0
  'place_instr_1' => 'لطفا حالا فايل ها را در اين آلبوم قرار دهيد و اطلاعات مربوط به هر فايل را وارد كنيد.', //cpg1.3.0
  'place_instr_2' => 'فايل بيشتری احتياج به اسقرار دارد. لطفا بر روی \'ادامه\'كليك كنيد.', //cpg1.3.0
  'process_complete' => 'تمامي فايل ها با موفقيت مستقر شدند.', //cpg1.3.0
  'albums_no_category' => 'آلبومهای طبقه بندی نشده', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* آلبومهای شخصی', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'انتخاب آلبوم', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'بستن', //cpg1.4
  'no_keywords' => 'متاسفانه كلید واژه ای وجود ندارد', //cpg1.4
  'regenerate_dictionary' => 'باز سازی مجدد دیكشنری', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'لیست اعضا', //cpg1.4
  'user_manager' => 'سیستم مدیریت كاربران', //cpg1.4
  'title' => 'مديريت كاربران',
  'name_a' => 'نام(صعودي)',
  'name_d' => 'نام(نزولي)',
  'group_a' => 'گروه(صعودي)',
  'group_d' => 'گروه(نزولي)',
  'reg_a' => 'تاريخ ثبت نام(صعودي)',
  'reg_d' => 'تاريخ ثبت نام(نزولي)',
  'pic_a' => 'تعداد تصوير(صعودي)',
  'pic_d' => 'تعداد تصوير(نزولي)',
  'disku_a' => 'ميزان استفاده از فضا(صعودي)',
  'disku_d' => 'ميزان استفاده از فضا(نزولي)',
  'lv_a' => 'آخرين بار مشاهده(صعودي)', //cpg1.3.0
  'lv_d' => 'آخرين بار مشاهده(نزولي)', //cpg1.3.0
  'sort_by' => 'مرتب سازي كاربران بر حسب',
  'err_no_users' => 'جدول كاربران خالي است !',
  'err_edit_self' => 'شما نمي توانيد مشخصات شخصي خود را از اينجا ويرايش كنيد از \'مشخصات شخصي\' استفاده كنيد',
  'edit' => 'ويرايش',
  'with_selected' => 'با انتخاب:', //cpg1.4
  'delete' => 'حذف', //cpg1.4
  'delete_files_no' => 'نگهداشتن فايلهای عمومی (اما بصورت ناشناس)', //cpg1.4
  'delete_files_yes' => 'فايلهای عمومی را هم حذف كن', //cpg1.4
  'delete_comments_no' => 'نگهداشتن نظرات (اما بصورت ناشناس)', //cpg1.4
  'delete_comments_yes' => 'نظرات را هم حذف كن', //cpg1.4
  'activate' => 'فعال سازی', //cpg1.4
  'deactivate' => 'از كار انداختن', //cpg1.4
  'reset_password' => 'باز سازی رمز عبور', //cpg1.4
  'change_primary_membergroup' => 'تغییر عضویت اوليه', //cpg1.4
  'add_secondary_membergroup' => 'افزودن عضویت ثانويه', //cpg1.4
  'name' => 'نام كاربري',
  'group' => 'گروه',
  'inactive' => 'در حال فعالیت',
  'operations' => 'عمليات',
  'pictures' => 'فايل ها', //cpg1.3.0
  'disk_space_used' => 'فضای استفاده شده', //cpg1.4
  'disk_space_quota' => 'فضای اختصاص داده شده', //cpg1.4
  'registered_on' => 'ثبت نام', //cpg1.4
  'last_visit' => 'آحرين مشاهده در', //cpg1.3.0
  'u_user_on_p_pages' => '%d كاربر در %d صفحه',
  'confirm_del' => 'شما مطمئنيد كه مي خواهيد اين كاربر را حدف نمائيد؟ \\nتمامي فايل ها و آلبوم هاي وي نيز حدف خواهند شد.',
  'mail' => 'نامه',
  'err_unknown_user' => 'كاربر انتخاب شده وجود ندارد !',
  'modify_user' => 'تغييرات كاربر',
  'notes' => 'ملاحظات',
  'note_list' => '<li>اگر نمي خواهيد رمز ورود را تغيير دهيد آن را خالي بگذاريد',
  'password' => 'رمز ورود',
  'user_active' => 'كاربر فعال است',
  'user_group' => 'گروه كاربر',
  'user_email' => 'آدرس پست الكترونيك كاربر',
  'user_web_site' => 'آدرس وب سايت كاربر',
  'create_new_user' => 'ايجاد كاربر جديد',
  'user_location' => 'محل زندگي كاربر',
  'user_interests' => 'علايق كاربر',
  'user_occupation' => 'شغل كاربر',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'ارسال هاي تازه', //cpg1.3.0
  'never' => 'هرگز', //cpg1.3.0
  'search' => 'جستجوی كاربر', //cpg1.4
  'submit' => 'ارسال', //cpg1.4
  'search_submit' => 'جستجو', //cpg1.4
  'search_result' => 'نتایج جستجو برای: ', //cpg1.4
  'alert_no_selection' => 'حداقل باید یك كاربر را انتخاب كنید', //cpg1.4 //js-alert
  'password' => 'رمز عبور', //cpg1.4
  'select_group' => 'انتخاب گروه', //cpg1.4
  'groups_alb_access' => 'مجوزهای آلبوم بر اساس گروه', //cpg1.4
  'album' => 'آلبوم', //cpg1.4
  'category' => 'موضوع', //cpg1.4
  'modify' => 'میخواهید تغییر بدهید؟', //cpg1.4
  'group_no_access' => 'این گروه دسترسی خواصی ندارد.', //cpg1.4
  'notice' => 'نكته', //cpg1.4
  'group_can_access' => 'آلبوم(هایی) كه فقط "%s" اجازه دسترسی دارند', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'بروز رسانی تیترها با استفاده از نام فایل', //cpg1.4
'حذف تیترها', //cpg1.4
'باز سازی مجدد ریز عكسها و تغییر اندازه عكسها', //cpg1.4
'حذف عكسهای با اندازه اصلی و جایگزینی آنها با عكسهای تغییر اندازه داده شده', //cpg1.4
'حذف عكسهای اصلی و یا دوباره تغییر داده شده برای پاكسازی فضای وب', //cpg1.4
'حذف نظرات یتیم!(بی نام نشان)', //cpg1.4
'بازخوانی ابعاد و اندازه فایل (اگر تصویر را بصورت دستی ویرایش كرده اید', //cpg1.4
'صفر كردن شمارنده بازدیدها', //cpg1.4
'نمایش مشخصات سرور PHP', //cpg1.4
'به روز رسانی دیتابیس', //cpg1.4
'نمایش فایل گزارشها', //cpg1.4
);
if (defined('UTIL_PHP')) $lang_util_php = array(
  'title' => 'مديريت ابزار (تغيير اندازه تصاوير)', //cpg1.3.0
  'what_it_does' => 'چگونگي كار با ابزار',
  'file' => 'فايل',
  'problem' => 'مشكل', //cpg1.4
  'status' => 'وضعیت', //cpg1.4
  'title_set_to' => 'عنوان مخدود به',
  'submit_form' => 'ارسال',
  'updated_succesfully' => 'به روز رساني با موفقيت انجام شد',
  'error_create' => 'در حال ايجاد خطا',
  'continue' => 'پردازش تصاوير بيشتر',
  'main_success' => 'فايل %s با موفقيت به عنوان فايل اصلي استفاده شد',
  'error_rename' => 'خطا در تغيير نام از %s به %s',
  'error_not_found' => 'فايل %s موجود نيست',
  'back' => 'بازگشت به اصلي',
  'thumbs_wait' => 'در حال به روز رساني ريزعكسها/ويا تغيير اندازه تصاوير، لطفا كمي صبر كنيد...',
  'thumbs_continue_wait' => 'به روز رساني ريز عكسها/ويا تغيير اندازه تصاوير ادامه دارد ...',
  'titles_wait' => 'به روز رساني عناوين، لطفا كمي صبر كنيد...',
  'delete_wait' => 'حذف يك عنوان، لطفا كمي صبر كنيد...',
  'replace_wait' => 'حذف فايل اصلي و جايگزيني تصوير تغيير اندازه يافته به جاي اصلي، لطفا كمي صبر كنيد..',
  'instruction' => 'توضيحات سريع',
  'instruction_action' => 'نوع عمل را انتخاب كنيد',
  'instruction_parameter' => 'آيتم ها را ست كنيد',
  'instruction_album' => 'آلبوم را انتخاب كنيد',
  'instruction_press' => '%s را فشار دهيد',
  'update' => 'به روز رساني ريزعكسها/ويا تغيير اندازه تصاوير',
  'update_what' => 'چه چيزي بايد به روز رساني شود',
  'update_thumb' => 'فقط ريزعكسها',
  'update_pic' => 'فقط تصاوير تغيير اندازه يافته',
  'update_both' => 'ريزعكسها و تصاوير تغيير اندازه يافته',
  'update_number' => 'تعداد تصاوير پردازش شده در هر كليك',
  'update_option' => '(در صورتي كه با خطاي اتمام زمان پردازش مواجه شديد اين مقدار را كمتر كنيد )',
  'filename_title' => 'نام قايل &rArr; عنوان فايل',
  'filename_how' => 'چه تغييري در نام فايل ميدهيد',
  'filename_remove' => 'برداشتن .jpg از انتها و تبديل _ (خط فاصله زير) به جاي خالي',
  'filename_euro' => 'تبديل 2003_11_23_13_20_20.jpg به 23/11/2003 13:20',
  'filename_us' => 'تبديل  2003_11_23_13_20_20.jpg به  11/23/2003 13:20',
  'filename_time' => 'تبديل  2003_11_23_13_20_20.jpg به 13:20',
  'delete' => 'حدف عنوان فايل يا فايل با اندازه اصلي',
  'delete_title' => 'حدف عنوان فايل',
  'delete_title_explanation' => 'حذف تمام تيترها از فايلهای موجود در آلبوم انتخاب شده.', //cpg1.4
  'delete_original' => 'حدف فايل با اندازه اصلي',
  'delete_original_explanation' => 'حذف تمام عكسهای با ابعاد كامل(Full size)', //cpg1.4
  'delete_intermediate' => 'حذف عكسهای اصلی ارسال شده', //cpg1.4
  'delete_intermediate_explanation' => 'این عملیات عكسهای اولیه و ابتدایی را كه برای ساخت عكس نهایی ارسال شده اند حذف می كند.<br />اگر گزینه \'ايجاد تصاوير متوسط\' را در بخش پیكربندی غیر فعال كرده اید از این عملیات استفاده كنید تا فضای وب اشغال شده شما پاك سازی گردد.', //cpg1.4
  'delete_replace' => 'حدف فايل اصلي و جايگزين كردن فايل تغيير اندازه يافته',
  'titles_deleted' => 'تمام تیترهای آلبوم انتخاب شده حذف شد', //cpg1.4
  'deleting_intermediates' => 'در حال حذف عكسهای متوسط ، لطفا صبر كنید...', //cpg1.4
  'searching_orphans' => 'در حال جستجو برای سرگردانها ، لطفا صبر كنید', //cpg1.4
  'select_album' => 'انتخاب آلبوم',
  'delete_orphans' => 'حذف نظرات فایلهای گم شده', //cpg1.4
  'delete_orphans_explanation' => 'این روش به شما امكان می دهد تا تمام نظراتی را كه به فایلهای گم شده داده شده اند پیدا و حذف كنید.<br />همه آلبومها را چك كن.', //cpg1.4
  'refresh_db' => 'بازخوانی مجدد اندازه و ابعاد فایل', //cpg1.4
  'refresh_db_explanation' => 'این روش اندازه و ابعاد فایل را مجددا می خواند.وقتی فایلی را بصورت دستی تغییر میدهید و یا فضای تخصیص داده شده اشتباه است از این روش استفاده كنید.', //cpg1.4
  'reset_views' => 'صفر كردن شمارنده بازدیدها', //cpg1.4
  'reset_views_explanation' => 'شمارنده تمام فایلهای یك آلبوم را صفر میكند.', //cpg1.4
  'orphan_comment' => 'نظر سرگردان پيدا شد', //cpg1.3.0
  'delete' => 'حذف', //cpg1.3.0
  'delete_all' => 'حدف همه', //cpg1.3.0
  'delete_all_orphans' => 'تمام نظرات سرگردان را حذف میكنید؟', //cpg1.4
  'comment' => 'نظر: ', //cpg1.3.0
  'nonexist' => 'مربوط به فايلي كه موجود نيست # ', //cpg1.3.0
  'phpinfo' => 'مشاهده مشخصات php', //cpg1.3.0
  'phpinfo_explanation' => 'نمایش مشخصات تكنیكی سرور.<br /> - وقتی درخواست كمك میكنید ممكن است این اطلاعات از شما خواسته شود.', //cpg1.4
  'update_db' => 'به روز رساني ديتابيس', //cpg1.3.0
  'update_db_explanation' => ' اگر تغييري در فايلهاي اصلي برنامه داده ايد و يا نرم افزار را به نسخه بالاتري ارتقاء داده ايد حتما ديتابيس را به روز رساني كنيد چون با اين كار جداول ديتابيس ساخته و يا به روز رساني مي شوند.', //cpg1.3.0
  'view_log' => 'نمایش گزارشات و وقایع', //cpg1.4
  'view_log_explanation' => 'گالری میتواند فعالیتهايی را كه یك كاربر انجام میدهد تحت نظر بگیرد.شما میتوانید این گزارشها را مرور كنید اگر سیستم گزارشگیری و ثبت وقایع را در <a href="admin.php">پیكربندی گالری </a>فعال كرده باشید.', //cpg1.4
  'versioncheck' => 'كنترل نسخه نرم افزار', //cpg1.4
  'versioncheck_explanation' => 'نسخه فایلهای خود را كنترل كنید.ممكن است بعد از ارتقا نسخه و یا حتی بعد از نصب نرم افزار نسخه جدیدتری وجود داشته باشد.', //cpg1.4
  'bridgemanager' => 'مدیریت هماهنگ سازی (Bridge)', //cpg1.4
  'bridgemanager_explanation' => 'فعال كردن / از كار انداختن سیستم پیشرفته هماهنگ سازی (bridging) گالری با نرم افزارهای دیگر (برای مثال BBS ها).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'كنترل نسخه', //cpg1.4
  'what_it_does' => '<span dir=rtl>برای به روز رسانی نسخه نصب شده از این صفحه استفاده كنید. این برنامه با مقایسه نسخه فایلهای نصب شده بر روی سرور شما با نسخه جاری موجود در منبع گالری (http://coppermine.sourceforge.net) اختلاف میان آنها را به شما نشان می دهد، در این روش برنامه فایلهایی را كه باید به روز رسانی شوند مشخص میكند.<br />آن فایلهایی كه نیاز به به روز رسانی داشته باشند قرمز ، آنهایی كه نیاز به بازدید داشته باشند زرد و آنهایی كه مشكلی ندارند سبز نمایش داده می شوند.<br />برای اطلاعات بیشتر بر روی آیكون راهنما كلیك كنید.</span>', //cpg1.4
  'online_repository_unable' => 'امكان اتصال به منبع آنلاین نیست!', //cpg1.4
  'online_repository_noconnect' => ' دو دلیل برای عدم موفقیت در برقراری اتصال بین منبع و گالری شما وجود دارد:', //cpg1.4
  'online_repository_reason1' => 'منبع آنلاین در حال حاضر فعال نیست - برای اطمینان از این موضوع آدرس:%s را كنترل كنید ، اگر قابل مشاهده نیست بعدا كنترل كنید.', //cpg1.4
  'online_repository_reason2' => 'سرور PHP شما در  پیكربندی خود %s را غیر فعال كرده است (به صورت پیش فرض فعال است).اگر این سرور را خودتان مدیریت می كنید از طریق فایل <i>php.ini</i> این گزینه را فعال كنید  (حداقل اجازه بدهید تا توسط %s بازنویسی شود).اگر از امكانات اجاره فضا برای گالری خود استفاده می كنید از مدیریت فضای وب خود بخواهید این گزینه را فعال كند ، در صورتیكه مدیریت فضای وب شما این امر را نپذیرد شما نمی توانید از امكان كنترل نسخه این صفحه استفاده كنید و تنها نسخه برنامه نصب شده شما نمایش داده خواهد شد - نسخه های به روز رسانی ها نمایش داده نمی شوند.', //cpg1.4
  'online_repository_skipped' => 'اتصال به منبع آنلاین قطع شد', //cpg1.4
  'online_repository_to_local' => 'برنامه برای مقایسه از نسخه موجود بر روی سرور (local) استفاده میكند.اگر در هنگام ارتقاء تمام فایلها را ارسال نكرده اید ، اطلاعات نمایش داده شده دقیق نیست. تغییراتی كه بعد از انتشار این نسخه در فایلها بوجود آمده است در این صفحه نمایش داده نمی شوند.', //cpg1.4
  'local_repository_unable' => 'امكان اتصال به منبع بر روی سرور شما نیست', //cpg1.4
  'local_repository_explanation' => 'گالری قادر به بر قراری اتصال با فایل منبع %s بر روی سرور شما نیست. ممكن است شما این فایل را بر روی سرور خود ارسال نكرده باشید. این فایل را نصب كنید و دوباره این صفحه را فراخوانی كنید (refresh را بزنید).<br />اگر برنامه هنوز خطا نشان میدهد ، شركت اجاره دهنده فضای شما بخشی از <a href="http://www.php.net/manual/en/ref.filesystem.php">توابع سیستمی PHP</a> را غیر فعال نموده است. در این حالت متاسفانه شما نمیتوانید از این برنامه استفاده كنید.', //cpg1.4
  'coppermine_version_header' => 'نسخه نصب شده گالری', //cpg1.4
  'coppermine_version_info' => 'نسخه نصب شده شما : %s', //cpg1.4
  'coppermine_version_explanation' => 'اگر فكر میكنید نسخه ای كه نصب كرده اید این نیست ، به احتمال زیاد آخرین نسخه فایل <i>include/init.inc.php</i> را ارسال نكرده اید.', //cpg1.4
  'version_comparison' => 'مقایسه نسخه ها', //cpg1.4
  'folder_file' => 'فایل/زیرشاخه', //cpg1.4
  'coppermine_version' => 'نسخه گالری', //cpg1.4
  'file_version' => 'نسخه فایل', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'قابل نوشتن', //cpg1.4
  'not_writable' => 'غیر قابل نوشتن', //cpg1.4
  'help' => 'كمك', //cpg1.4
  'help_file_not_exist_optional1' => 'فایل/زیرشاخه وجود ندارد', //cpg1.4
  'help_file_not_exist_optional2' => '<span dir=rtl>فایل/زیرشاخه %s بر روی سرور شما پیدا نشد! در حقیقت در صورت بروز مشكل شما باید این فایل را بر روی سرور خود ارسال كنید(توسط نرم افزار FTP).</span>', //cpg1.4
  'help_file_not_exist_mandatory1' => 'فایل/زیرشاخه وجود ندارد', //cpg1.4
  'help_file_not_exist_mandatory2' => '<span dir=rtl>فایل/زیرشاخه %s بر روی سرور شما پیدا نشد! شما باید حتما این فایل را بر روی سرور خود ارسال كنید(توسط نرم افزار FTP).</span>', //cpg1.4
  'help_no_local_version1' => 'فایل محلی نسخه ها پیدا نشد!', //cpg1.4
  'help_no_local_version2' => 'برنامه قادر به تشخیص نسخه فایلهای محلی - فایلهای شما یا از تاریخ گذشته اند یا شما آنها را تغییر داده اید، و اطلاعات سرآیند را حذف كرده اید. به روز رسانی فایل توصیه می شود.', //cpg1.4
  'help_local_version_outdated1' => 'نسخه های محلی موجود خارج از تاریخ است', //cpg1.4
  'help_local_version_outdated2' => 'بنظر می رسد كه این فایل مربوط به نسخه های قدیمی گالری باشد(احتمالا شما نسخه گالری خود را ارتقاء داده اید) اطمینان پیدا كنید كه این فایل را هم ارتقاء داده اید.', //cpg1.4
  'help_local_version_na1' => 'امكان پیدا كردن اطلاعات نسخه CVS نیست', //cpg1.4
  'help_local_version_na2' => 'برنامه قادر به تشخیص نسخه cvs موجود بر روی سرور شما نیست. شما باید فایلهای اصلی را بر روی سرور خود ارسال كنید.', //cpg1.4
  'help_local_version_dev1' => 'نسخه در حال گسترش (آزمایشی)', //cpg1.4
  'help_local_version_dev2' => 'فایلهای موجود بر روی سرور شما جدیدتر از نسخه گالری شما هستند!!! شما یا در حال استفاده از یك نسخه در حال گسترش وآزمایشی هستید(فقط در صورتی این كار را انجام دهید كه بدانید چه كاری می كنید!) و یا گالری خود را ارتقاء داده اید و فایل include/init.inc.php را ارسال نكرده اید.', //cpg1.4
  'help_not_writable1' => 'زیرشاخه قابل نوشتن نیست', //cpg1.4
  'help_not_writable2' => 'مجوز های دسترسی فایل را تغییر دهید(CHMOD) تا به برنامه اجازه دسترسی نوشتن بر روی زیرشاخه %s و تمام زیر مجموعه های آن داده شود.', //cpg1.4
  'help_writable1' => 'زیر شاخه قابل نوشتن است', //cpg1.4
  'help_writable2' => 'زیرشاخه %s قابل نوشتن است!این زیرشاخه احتیاجی به مجوز نوشتن ندارد ، گالری فقط احتیاج به مجوز خواندن/اجرا دارد.', //cpg1.4
  'help_writable_undetermined' => 'گالری موفق به تشخیص اینكه آیا زیرشاخه قابل نوشتن است نشد!', //cpg1.4
  'your_file' => 'فایل شما', //cpg1.4
  'reference_file' => 'فایل مبداء', //cpg1.4
  'summary' => 'خلاصه', //cpg1.4
  'total' => 'كل فایلها/زیرشاخه های كنترل شده', //cpg1.4
  'mandatory_files_missing' => 'فایل سیستمی گم شده', //cpg1.4
  'optional_files_missing' => 'فایل عادی گم شده', //cpg1.4
  'files_from_older_version' => 'فایلهای كنار گذاشته شده از نسخه های از تاریخ گذشته', //cpg1.4
  'file_version_outdated' => 'فایلهای از تاریخ گذشته', //cpg1.4
  'error_no_data' => 'در برنامه خطایی بوجود آمده ، برنامه امكان دادن اطلاعات بیشتری ندارد.از مشكل پیش آمده متاسفیم!', //cpg1.4
  'go_to_webcvs' => 'برو به %s', //cpg1.4
  'options' => 'انتخابها', //cpg1.4
  'show_optional_files' => 'نمایش فایلها/زیرشاخه های عادی', //cpg1.4
  'show_mandatory_files' => 'نمایش فایلهای سیستمی', //cpg1.4
  'show_file_versions' => 'نمایش نسخه فایل', //cpg1.4
  'show_errors_only' => 'نمایش فقط زیرشاخه ها /فایلهای دارای خطا', //cpg1.4
  'show_permissions' => 'نمایش مجوزهای زیرشاخه', //cpg1.4
  'show_condensed_output' => 'نمایش خروجی به صورت فشرده (برای سهولت در گرفتن نسخه چاپی از صفحه نمایش)', //cpg1.4
  'coppermine_in_webroot' => 'گالری در ریشه اصلی نصب شده', //cpg1.4
  'connect_online_repository' => 'سعی در برقراری ارتباط با منبع آنلاین', //cpg1.4
  'show_additional_information' => 'نمایش اطلاعات اضافی', //cpg1.4
  'no_webcvs_link' => 'عدم نمایش لینكهای cvs', //cpg1.4
  'stable_webcvs_link' => 'نمایش لینك cvs به شاخه های ایستا تر (stable)', //cpg1.4
  'devel_webcvs_link' => 'نمایش لینك cvs به شاخه های در حال گسترش', //cpg1.4
  'submit' => 'تائید تغییرات / فراخوانی مجدد(Refresh)', //cpg1.4
  'reset_to_defaults' => 'بازگشت به مشخصات پیش فرض', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'حذف همه گزارش ها', //cpg1.4
  'delete_this' => 'حذف این گزارش', //cpg1.4
  'view_logs' => 'نمایش گزارش ها', //cpg1.4
  'no_logs' => 'گزارشی ساخته نشد.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>این ماژول اجازه میدهد تا از ویزارد انتشار در وب <b>Windows XP</b> برای گالری استفاده کنید.</p><p>کد استفاده شده در این بخش از مقاله ای گرفته شده ، نام نویسنده مقاله:
EOT;

$lang_xp_publish_required = <<<EOT
<h2>چه چیزی مورد نیاز است</h2><ul><li>برای استفاده از ویزارد به Windows XP احتیاج دارید.</li><li>یک نسخه نصب شده از گالری تا <b>تابع ارسال به وب درست کار کند.</b></li></ul><h2>چگونه در طرف مشتری (client side) نصب می شود</h2><ul><li>کلیک راست بر روی
EOT;

$lang_xp_publish_select = <<<EOT
"save target as.." را اتخاب کنید. فایل را بر روی سخت دیسک خود ظبط نمائید. در هنگام ظبط شدن دقت کنید که نام فایل به شکل <b>cpg_###.reg</b> (### نشان دهنده اعداد تاریخ هستند )باشد. اگر احتیاج بود نام را تغییر دهید (اعداد را نگه دارید). وقتی دریافت تمام شد ، برای ثبت سرورتان در ویزارد انتشار وب بر روی فایل دوبار کلیک کنید.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>آزمایش</h2><ul><li>در مرورگر ویندوز، چند فایل را انتخاب کنید و بر روی<b>Publish xxx on the web</b> در قسمت چپ کلیک کنید.</li><li>تائید انتخاب فایل. بر روی <b>Next</b>کلیک کنید.</li><li>در لیست ظاهر شده از سرویسها ، یکی از گالری های عکس را انتخاب نمائید (هم نام گالری شما خواهد بود). اگر سرویس نمایش داده نشد، کنترل کنید که <b>cpg_pub_wizard.reg</b> با توجه به توضیحات بالا نصب شده باشد.</li><li>مشخصات ورود خود را در صورت نیاز وارد نمائید.</li><li>آلبوم مقصد را مشخص نمائید یا بسازید.</li><li>بر روی<b>next</b> کلیک کنید. ارسال عکسهای شما شروع خواهد شد.</li><li>وقتی تمام شد ، گالری را کنترل کنید و مطمئن شوید که عکسها درست اضافه شده اند.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>نکته:</h2><ul><li>از لحظه ای که ارسال شروع شود ، ویزارد نمی تواند خطا های بوجود آمده و ارسال شده توسط اسکریپت را نمایش دهد بنابراین برای اطلاع از صحت ارسال باید گالری را کنترل کنید.</li><li>اگر ارسال  فایل با اشکال مواجه شد ، "حالت دیباگ" را فعال کنید و با ارسال یک عکس پیغام خطا را کنترل کنید در
EOT;

$lang_xp_publish_flood = <<<EOT
فایلی در زیرشاخه گالری در سرور شما.</li><li>برای جلوگیری از <i>سر ریز</i> گالری از عکس های ارسال شده توسط ویزارد ، فقط <b>مدیریت گالری</b> و <b>کاربرانی که اجازه داشتن گالری شخصی</b> دارند می توانند از این قابلیت استفاده کنند.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'ویزارد انتشار وب XP-گالری', //cpg1.4
  'welcome' => 'خوش آمدید <b>%s</b>,', //cpg1.4
  'need_login' => 'قبل از استفاده از این ویزارد شما باید بوسیله مرورگر خود به گالری وارد شوید (با استفاده از نام كاربری و رمز عبور خودتان).<p/><p>در هنگام ورود فراموش نكنید كه در صورتیكه گزینه </b>مرا بخاطر بسپار <b> وجود دارد آنرا انتخاب كنید.', //cpg1.4
  'no_alb' => 'متاسفانه آلبومی كه شما مجوز ارسال فایل از طریق این ویزارد به آن داشته باشید وجود ندارد.', //cpg1.4
  'upload' => 'ارسال عكس به آلبوم های موجود', //cpg1.4
  'create_new' => 'ساخت آلبوم جدید برای عكسها', //cpg1.4
  'album' => 'آلبوم', //cpg1.4
  'category' => 'موضوع', //cpg1.4
  'new_alb_created' => 'آلبوم جدید شما "<b>%s</b>" ساخته شد.', //cpg1.4
  'continue' => 'برای شروع ارسال عكسها دكمه "بعدی" را فشار دهید', //cpg1.4
  'link' => 'this link', //cpg1.4
);
}
?>