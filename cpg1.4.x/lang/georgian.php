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

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Georgian', //cpg1.4
  'lang_name_native' => 'ქართული', //cpg1.4
  'lang_country_code' => 'ka', //cpg1.4
  'trans_name'=> 'Giasher (Gia Shervashidze)',
  'trans_email' => 'giasher at google mail',
  'trans_website' => 'http://www.gia.ge/',
  'trans_date' => '2009-05-05',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('ბაიტი', 'კბ', 'მბ');

// Day of weeks and months
$lang_day_of_week = array('კვი', 'ორშ', 'სამ', 'ოთხ', 'ხუთ', 'პარ', 'შაბ');
$lang_month = array('იან', 'თებ', 'მარ', 'აპრ', 'მაი', 'ივნ', 'ივლ', 'აგვ', 'სექ', 'ოქტ', 'ნოე', 'დეკ');

// Some common strings
$lang_yes = 'დიახ';
$lang_no  = 'არა';
$lang_back = 'უკან';
$lang_continue = 'გაგრძელება';
$lang_info = 'ინფორმაცია';
$lang_error = 'შეცდომა';
$lang_check_uncheck_all = 'ყველას მონიშვნა/მონიშვნის მოხსნა'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B, %Y';
$lastcom_date_fmt =  '%d/%m/%y - %H:%M';
$lastup_date_fmt = '%d %B, %Y';
$register_date_fmt = '%d %B, %Y';
$lasthit_date_fmt = '%d %B, %Y at %H:%M';
$comment_date_fmt =  '%d %B, %Y - %H:%M';
$log_date_fmt = '%d %B, %Y - %H:%M'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'შემთხვევითი ფაილები',
  'lastup' => 'ბოლო დამატებები',
  'lastalb'=> 'ბოლო განახლებული ალბომები',
  'lastcom' => 'ბოლო კომენტარები',
  'topn' => 'ყველაზე პოპულარული',
  'toprated' => 'ყველაზე რეიტინგული',
  'lasthits' => 'ბოლო მონახულებული',
  'search' => 'ძიების შედეგები',
  'favpics'=> 'რჩეული ფაილები',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'თქვენ არ გაქვთ ამ გვერდის ნახვის უფლება.',
  'perm_denied' => 'თქვენ არ გაქვთ ამ ოპერაციის შესრულების უფლება.',
  'param_missing' => 'სკრიპტი მოთხოვნილი პარამეტრების გარეშეა გამოძახებული.',
  'non_exist_ap' => 'მითითებული ალბომი/ფაილი არ არსებობს!',
  'quota_exceeded' => 'დისკის ქვოტა გადავსებულია<br /><br />თქვენი ქოტაა [quota]К, თქვენ ფაილებს უკავიათ [space]К, ამ ფაილის დამატება ქვოტის გადავსებას გამოიწვევს.',
  'gd_file_type_err' => 'როცა GD ბიბლიოთეკა გამოიყენება, დასაშვებია მხოლოდ JPEG და PNG ტიპის ფაილების გამოყენება.',
  'invalid_image' => 'ნახატი რომელიც ჩამოტვირთეთ დაზიანებულია ან GD ბიბლიოთეკის მიერ ვერ დამუშავდება',
  'resize_failed' => 'ვერ ვქმნი მინიატურას ან შემცირებული ზომის ნახატს.',
  'no_img_to_display' => 'ფოტო არ არის',
  'non_exist_cat' => 'მითითებული კატეგორია არ არსებობს',
  'orphan_cat' => 'კატეგორიას ზედა დონის კატეგორია არ გააჩნია, პრობლემის გადასაწყვეტად გამოიყენეთ კატეგორიების მმართველი!',
  'directory_ro' => 'დასტა \'%s\' ჩაწერადი არაა, ფაილები ვერ წაიშლება',
  'non_exist_comment' => 'მითითებული კომენტარი არ არსებობს.',
  'pic_in_invalid_album' => 'ფაილი არარსებულ ალბომშია (%s)!?',
  'banned' => 'მოცემულ მომენტში საიტის გამოყენება გეკრძალებათ.',
  'not_with_udb' => 'ეს ფუნქცია გამორთულია, რადგან ინტეგრირებულია ფორუმის პროგრამასთან. ის, რისი გაკეთებაც გსურთ ამ კონფიგურაციით შეუძლებელია ან ფუნქცია უნდა დამუშავდეს ფორუმის პროგრამის საშუალებით.',
  'offline_title' => 'გამორთულია',
  'offline_text' => 'გალერეა ამჯერად ამორთულია. დაუბრუნდით მოგვიანებით',
  'ecards_empty' => 'ამჟამად ბარათების ჩანაწერები არ არსებობს. პროგრამის პარამეტრებში გადაამოწმეთ, ჩართულია თუ არა ბარათების ჟურნალი!',
  'action_failed' => 'ქმედება ვერ განხორციელდა. პროგრამ თქვენს მოთხოვნას ვერ ამუშავებს.',
  'no_zip' => 'არქივული ZIP ფაილების დამუშავების ბიბლიოთეკები მიუწვდომელია. გთხოვთ დაუკავშირდეთ პროგრამის საიტის ადმინისტრატორს.',
  'zip_type' => 'თქვენ არ გაქვთ ZIP ფაილების ატვირთვის უფლება.',
  'database_query' => 'შეცდომა მონაცემთა ბაზის მოთხოვნის დამუშავებისას', //cpg1.4
  'register_globals_on' => 'PHP პარამეტრი register_globals თქვენს სერვერზე ჩართულია, რაც საკმაოდ სახიფათოა უსაფრთხოების მხრივ. მკაცრად რეკომენდებულია მისი ამორთვა. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">დაწვრილებით</a>]',
);

$lang_bbcode_help_title = 'bbcode - დახმარება'; //cpg1.4
$lang_bbcode_help = 'bbcode ჭდეების საშუალებით ბმებისა და გაფორმების ელემენტების დამატება შეგიძლიათ: <li>[b]მუქი[/b] =&gt; <b>მუქი</b></li><li>[i]კურსივი[/i] =&gt; <i>კურსივი</i></li><li>[url=http://sangu.ge/]საიტის აღწერა[/url] =&gt; <a href="http://sangu.ge">საიტის აღწერა</a></li><li>[email]user@domain.ge[/email] =&gt; <a href="mailto:user@domain.ge">user@domain.ge</a></li><li>[color=red]წითელი ტექსტი[/color] =&gt; <span style="color:red">წითელი ტექსტი</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'გადასვლა თავფურცელზე',
  'home_lnk' => 'თავფურცელი',
  'alb_list_title' => 'გადასვლა ალბომების სიაზე',
  'alb_list_lnk' => 'ალბომების სია',
  'my_gal_title' => 'გადასვლა პირად გალერეაზე',
  'my_gal_lnk' => 'ჩემი გალერეა',
  'my_prof_title' => 'გადასვლა პირად პროფილზე', //cpg1.4
  'my_prof_lnk' => 'ჩემი პროფილი',
  'adm_mode_title' => 'გადასვლა ადმინის რეჟიმში',
  'adm_mode_lnk' => 'ადმინის რეჟიმი',
  'usr_mode_title' => 'გადასვლა მონაწილის რეჟიმში',
  'usr_mode_lnk' => 'მონაწილის რეჟიმი',
  'upload_pic_title' => 'ფაილის ალბომში ატვირთვა',
  'upload_pic_lnk' => 'ფაილის ატვირთვა',
  'register_title' => 'ანგარიშის შექმნა',
  'register_lnk' => 'რეგისტრაცია',
  'login_title' => 'შესვლა', //cpg1.4
  'login_lnk' => 'შესვლა',
  'logout_title' => 'გამოსვლა', //cpg1.4
  'logout_lnk' => 'გამოსვლა',
  'lastup_title' => 'ბოლო ატვირთვების ჩვენება', //cpg1.4
  'lastup_lnk' => 'ბოლო ატვირთვები',
  'lastcom_title' => 'ბოლო კომენტარების ჩვენება', //cpg1.4
  'lastcom_lnk' => 'ბოლო კომენტარები',
  'topn_title' => 'ყველაზე პოპულარულების ჩვენება', //cpg1.4
  'topn_lnk' => 'ყველაზე პოპულარულები',
  'toprated_title' => 'ყველაზე რეიტინგულების ჩვენება', //cpg1.4
  'toprated_lnk' => 'ყველაზე რეიტინგულები',
  'search_title' => 'ძიება გალერეაში', //cpg1.4
  'search_lnk' => 'ძიება',
  'fav_title' => 'გადასვლა ჩემს რჩეულებზე', //cpg1.4
  'fav_lnk' => 'ჩემი რჩეულები',
  'memberlist_title' => 'წევრთა სიის ჩვენება',
  'memberlist_lnk' => 'წევრთა სია',
  'faq_title' => 'ძირითადი კითხვები &quot;Coppermine&quot; გალერეის შესახებ',
  'faq_lnk' => 'ძირითადი კითხვები',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'ახალი ატვირთვების უფლება', //cpg1.4
  'upl_app_lnk' => 'ატვირთვის დასტური',
  'admin_title' => 'გადასვლა გამართვაზე', //cpg1.4
  'admin_lnk' => 'გამართვა', //cpg1.4
  'albums_title' => 'გადასვლა ალბომების კონფიგურაციაზე', //cpg1.4
  'albums_lnk' => 'ალბომები',
  'categories_title' => 'გადასვლა კატეგორიების კონფიგურაციაზე', //cpg1.4
  'categories_lnk' => 'კატეგორიები',
  'users_title' => 'გადასვლა მონაწილის კონფიგურაციაზე', //cpg1.4
  'users_lnk' => 'მონაწილეები',
  'groups_title' => 'გადასვლა ჯგუფის კონფიგურაციაზე', //cpg1.4
  'groups_lnk' => 'ჯგუფები',
  'comments_title' => 'ყველა კომენტარის დათვალიერება', //cpg1.4
  'comments_lnk' => 'კომენტარების დათვალიერება',
  'searchnew_title' => 'გადასვლა ჯგუფურ დამატებაზე', //cpg1.4
  'searchnew_lnk' => 'ფაილების ჯგუფური დამატება',
  'util_title' => 'გადასვლა ადმინის სამარჯვებზე', //cpg1.4
  'util_lnk' => 'ადმინის სამარჯვები',
  'key_title' => 'გადასვლა საკვანძო სიტყვების ლექსიკონზე', //cpg1.4
  'key_lnk' => 'საკვანძო სიტყვების ლექსიკონი', //cpg1.4
  'ban_title' => 'გადასვლა აკრძალულ მონაწილეებზე', //cpg1.4
  'ban_lnk' => 'მონაწილეთა აკრძალვა',
  'db_ecard_title' => 'ბარათების დათვალიერება', //cpg1.4
  'db_ecard_lnk' => 'ბარათების ჩვენება',
  'pictures_title' => 'ჩემი ნახატების დალაგება', //cpg1.4
  'pictures_lnk' => 'ჩემი ნახატების დალაგება', //cpg1.4
  'documentation_lnk' => 'დოკუმენტაცია', //cpg1.4
  'documentation_title' => 'გალერეის დოკუმენტაცია', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'გადასვლა ალბომების შექმნასა და მოწესრიგებაზე', //cpg1.4
  'albmgr_lnk' => 'ჩემი ალბომების შექმნა / მოწესრიგება',
  'modifyalb_title' => 'გადასვლა ალბომების შეცვლაზე',  //cpg1.4
  'modifyalb_lnk' => 'ჩემი ალბომების შეცვლა',
  'my_prof_title' => 'გადასვლა პირად პროფილზე', //cpg1.4
  'my_prof_lnk' => 'ჩემი პროფილი',
);

$lang_cat_list = array(
  'category' => 'კატეგორიები',
  'albums' => 'ალბომები',
  'pictures' => 'ფაილები',
);

$lang_album_list = array(
  'album_on_page' => '%d ალბომი %d გვერდზე',
);

$lang_thumb_view = array(
  'date' => 'თარიღი',
  //Sort by filename and title
  'name' => 'ფაილის სახელი',
  'title' => 'სათაური',
  'sort_da' => 'სორტირება თარიღით [აღმავალი]',
  'sort_dd' => 'სორტირება თარიღით [დაღმავალი]',
  'sort_na' => 'სორტირება სახელით [აღმავალი]',
  'sort_nd' => 'სორტირება სახელით [დაღმავალი]',
  'sort_ta' => 'სორტირება სათაურით [აღმავალი]',
  'sort_td' => 'სორტირება სათაურით [დაღმავალი]',
  'position' => 'პოზიცია', //cpg1.4
  'sort_pa' => 'აღმავალი სორტირება პოზიციით', //cpg1.4
  'sort_pd' => 'დაღმავალი სორტირება პოზიციით', //cpg1.4
  'download_zip' => 'გადმოწერა Zip ფაილად',
  'pic_on_page' => '%d ფაილი %d გვერდზე',
  'user_on_page' => '%d მონაწილე %d გვერდზე',
  'enter_alb_pass' => 'მიუთითეთ ალბომის პაროლი', //cpg1.4
  'invalid_pass' => 'მცდარი პაროლი', //cpg1.4
  'pass' => 'პაროლი', //cpg1.4
  'submit' => 'გაგზავნა', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'დაბრუნება მინიატურების გვერდზე',
  'pic_info_title' => 'ფაილის მონაცემების ჩვენება/დამალვა',
  'slideshow_title' => 'სლაიდების ჩვენება',
  'ecard_title' => 'ფაილის ბარათის სახით გაგზავნა',
  'ecard_disabled' => 'ბარათები ამორთულია',
  'ecard_disabled_msg' => 'თქვენ არ გაქვთ ბარათების გაგზავნის უფლება', //js-alert
  'prev_title' => 'წინა ფაილის ნახვა',
  'next_title' => 'შემდეგი ფაილის ნახვა',
  'pic_pos' => 'ფაილ(ებ)ი %s/%s',
  'report_title' => 'ამ ფაილის ადმინისთვის პატაკი', //cpg1.4
  'go_album_end' => 'გადასვლა ბოლოში', //cpg1.4
  'go_album_start' => 'დაბრუნება თავში', //cpg1.4
  'go_back_x_items' => 'უკან %s ელემენტით', //cpg1.4
  'go_forward_x_items' => 'წინ %s ელემენტით', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'ფაილის შეფასება ',
  'no_votes' => '(ხმები ჯერ არ მიცემულა)',
  'rating' => '(მიმდინარე რეიტინგი: %s / 5 - ხმა: %s)',
  'rubbish' => 'უვარგისი',
  'poor' => 'ცუდი',
  'fair' => 'საშუალო',
  'good' => 'კარგი',
  'excellent' => 'საუცხოო',
  'great' => 'საუკეთესო',
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
  CRITICAL_ERROR => 'კრიტიკული შეცდომა',
  'file' => 'ფაილი: ',
  'line' => 'სტრიქონი: ',
);

$lang_display_thumbnails = array(
  'filename' => 'ფაილი: ', //cpg1.4
  'filesize' => 'ფაილის ზომა: ', //cpg1.4
  'dimensions' => 'ზომები: ', //cpg1.4
  'date_added' => 'თარიღი:', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => 'კომენტარი: %s ',
  'n_views' => 'ნახვა: %s',
  'n_votes' => '(%s ხმა)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'გამართვის მონაცემები',
  'select_all' => 'ყველას არჩევა',
  'copy_and_paste_instructions' => 'თუ პროგრამის ფორუმზე დახმარების მოთხოვნას აპირებთ, გამართვის მონაცემები დააკოპირეთ და მოთხოვნისას თქვენს შეტყობინებაში თქვენს მიერ მიღებული (თუ იქნა) შეცდომის შეტყობინების მითითებით ჩასვით. გაგზავნამდე არ დაგავიწყდეთ პაროლის *** სიმბოლოებით შეცვლა. <br />შენიშვნა: ეს მხოლოდ საინფორმაციო დატვირთვას ატარებს და არ ნიშნავს რომ თქვენს გალერეაში შეცდომაა.',
  'phpinfo' => 'phpinfo–ს ჩვენება',
  'notices' => 'შენიშვნები', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'ნაგულისხმები ენა',
  'choose_language' => 'ენის არჩევა',
);

$lang_theme_selection = array(
  'reset_theme' => 'ნაგულისხმები თემა',
  'choose_theme' => 'თემის არჩევა',
);

$lang_version_alert = array(
  'version_alert' => 'მიუღებელი ვერსია!', //cpg1.4
  'security_alert' => 'უსაფრთხოების გაფრთხილება!', //cpg1.4.3
  'relocate_exists' => 'ამოშალეთ <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a> ფაილი თქვენი საიტიდან!',
  'no_stable_version' => 'თქვენ იყენებთ გალერეას %s (%s) ვერსიით, რომელიც მხოლოდ გამოცდილი მომხმარებლებისთვისაა გათვალისწინებული - ამ ვერსიის მხარდაჭერა შეჩერებულია. გამოიყენეთ საკუთარი რისკით ან, თუ მხარდაჭერა გსურთ, ჩამოაძველვერსიეთ!', //cpg1.4
  'gallery_offline' => 'გალერეა ავტონომიურ რეჟიმშია და მხოლოდ ადმინისთვისაა მისაწვდომი. ტექმომსახურების დასრულების შემდეგ არ დაგავიწყდეთ კავშირის რეჟიმში დაბრუნება.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'წინა', //cpg1.4
  'next' => 'შემდეგი', //cpg1.4
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
  'error_wakeup' => "ვერ ვააქტივებ მოდულს '%s'", //cpg1.4
  'error_install' => "ვერ ვდგამ მოდულს '%s'", //cpg1.4
  'error_uninstall' => "ვერ ვიღებ მოდულს '%s'", //cpg1.4
  'error_sleep' => "ვერ ვიღებ მოდულს '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'წამოძახილი',
  'Question' => 'შეკითხვა',
  'Very Happy' => 'ბედნიერება',
  'Smile' => 'ღიმილი',
  'Sad' => 'დაღვრემა',
  'Surprised' => 'გაკვირვება',
  'Shocked' => 'შეძრწუნება',
  'Confused' => 'შეცბუნება',
  'Cool' => 'მაგარია!',
  'Laughing' => 'სიცილი',
  'Mad' => 'გიჟი',
  'Razz' => 'ფაციფუცი',
  'Embarassed' => 'დარცხვენა',
  'Crying or Very sad' => 'დამწუხრება',
  'Evil or Very Mad' => 'გაბოროტება',
  'Twisted Evil' => 'განრისხება',
  'Rolling Eyes' => 'გადმოკარკვლა',
  'Wink' => 'თვალის ჩაკვრა',
  'Idea' => 'ევრიკა!',
  'Arrow' => 'ისარი',
  'Neutral' => 'ნეიტრალური',
  'Mr. Green' => 'მისტერ გრინი',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'ადმინის რეჟიმიდან გამოსვლა...',
  1 => 'ადმინის რეჟიმში შესვლა...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'ალბომებს სახელი უნდა ერქვათ!', //js-alert
  'confirm_modifs' => 'ნამდვილად გსურთ ეს ცვლილებები?', //js-alert
  'no_change' => 'ცვლილებები არ გაგიკეთებიათ!', //js-alert
  'new_album' => 'ახალი ალბომი',
  'confirm_delete1' => 'ნამდვილად გსურთ ამ ალბომის წაშლა?', //js-alert
  'confirm_delete2' => '\nყველა ფაილი და კომენტარი დაიკარგება!', //js-alert
  'select_first' => 'ჯერ ალბომი აირჩიეთ', //js-alert
  'alb_mrg' => 'ალბომების მმართველი',
  'my_gallery' => '* ჩემი გალერეა *',
  'no_category' => '* უკატეგორიო *',
  'delete' => 'წაშლა',
  'new' => 'ახალი',
  'apply_modifs' => 'ცვლილებების ფიქსაცია',
  'select_category' => 'კატეგორიის არჩევა',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'მონაწილეთა აკრძალვა', //cpg1.4
  'user_name' => 'მონაწილის სახელი', //cpg1.4
  'ip_address' => 'IP მისამართი', //cpg1.4
  'expiry' => 'ვადა (ცარიელი თუ მუდმივია)', //cpg1.4
  'edit_ban' => 'ცვლილებების შენახვა', //cpg1.4
  'delete_ban' => 'წაშლა', //cpg1.4
  'add_new' => 'ახალი აკრძალვის დამატება', //cpg1.4
  'add_ban' => 'დამატება', //cpg1.4
  'error_user' => 'მონაწილე ვერ მოიძებნა', //cpg1.4
  'error_specify' => 'უნდა მიუთითოთ მონაწილის სახელი ან IP მისამართი', //cpg1.4
  'error_ban_id' => 'აკრძალვის მცდარი კოდი!', //cpg1.4
  'error_admin_ban' => 'საკუთარ თავს ვერ აკრძალავთ!', //cpg1.4
  'error_server_ban' => 'საკუთარი სერვერის აკრძალვა გსურთ? ნწუუ, ასეთი რამ შეუძლებელია...', //cpg1.4
  'error_ip_forbidden' => 'ამ IP-ის ვერ აკრძალავთ - იგი კერძოა, და მაინც!<br />თუ კერძო IP-ბის აკრძლვა გსურთ, შეცვალეთs, შეცვალეთ პარამეტრი <a href="admin.php">კონფიგურაციაში</a> (აზრი აქვს მხოლოდ ლოკალურ ქსელში გალერეის გამოყენებისას).', //cpg1.4
  'lookup_ip' => 'IP მისამართის ძებნა', //cpg1.4
  'submit' => 'გასწი!', //cpg1.4
  'select_date' => 'თარიღის შერჩევა', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'დაკავშირების მეგზური',
  'warning' => 'გაფრთხილება: ამ მეგზურის გამოყენებისას უნდა გაითვალისწინოთ, რომ მნიშვნელოვანი მონაცემები html ფორმით გაიგზავნება. გამოიყენეთ მხოლოდ საკუთარ კომპიუტერზე (და არა საზოგადო კომპიუტერზე ან ინტერნეტ კაფეში) და დასრულების შემდეგ გადაამოწმეთ, რომ ბუფერი გასუფთავებულია და დროებითი ფაილები წაშლილი, რათა სხვებმა თქვენი მონაცემების წაკითხვა ვერ შეძლონ!',
  'back' => 'უკან',
  'next' => 'შემდეგ',
  'start_wizard' => 'დაკავშირების მეგზურის დაწყება',
  'finish' => 'დასრულება',
  'hide_unused_fields' => 'ფორმის გამოუყენებელი ველების დამალვა (რეკომენდებულია)',
  'clear_unused_db_fields' => 'მონაცემთა ბაზის მცდარი ჩანაწერების წაშლა (რეკომენდებულია)',
  'custom_bridge_file' => 'თქვენი საკუთარი შეხიდების ფაილის სახელი (თუ შეხიდების ფაილია <i>myfile.inc.php</i>, ამ ველში <i>myfile</i> მიუთითეთ)',
  'no_action_needed' => 'ამ ჯერზე ქმედება საჭირო არაა. დაწკაპეთ \'შემდეგ\' გასაგრძელებლად.',
  'reset_to_default' => 'მიმდინარე მნიშვნელობის აღდგენა',
  'choose_bbs_app' => 'გალერეასთან დასაკავშირებელი ფორუმის არჩევა',
  'support_url' => 'დახმარების მისაღებად აქ გადადით',
  'settings_path' => 'გეზ(ებ)ი თქვენი ფორუმის პროგრამისთვის',
  'database_connection' => 'კავშირი მონაცემთა ბაზასთან',
  'database_tables' => 'მონაცემთა ბაზის ცხრილები',
  'bbs_groups' => 'ფორუმის ჯგუფები',
  'license_number' => 'ლიცენზიის ნომერი',
  'license_number_explanation' => 'მიუთითეთ თქვენი ლიცენზიის ნომერი (თუ შესაძლებელია)',
  'db_database_name' => 'მონაცემთა ბაზის სახელი',
  'db_database_name_explanation' => 'მიუთითეთ მონაცემთა ბაზის სახელი თქვენი ფორუმისთვის',
  'db_hostname' => 'მონაცემთა ბაზის ჰოსტი',
  'db_hostname_explanation' => 'ჩვეულებრივ, თქვენი mySQL მონაცემთა ბაზის ჰოსტის სახელია &quot;localhost&quot;',
  'db_username' => 'მონაცემთა ბაზის ანგარიში',
  'db_username_explanation' => 'mySQL ანგარიში ფორუმთან დასაკავშირებლად',
  'db_password' => 'მონაცემთა ბაზის პაროლი',
  'db_password_explanation' => 'პაროლი ამ mySQL ანგარიშისთვის',
  'full_forum_url' => 'ფორუმის მისამართი',
  'full_forum_url_explanation' => 'თქვენი ფორუმის სრული მისამართი (წინმსწრები http://-ს ჩათვლით, მაგ., http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'ფორუმის ფარდობითი გეზი',
  'relative_path_of_forum_from_webroot_explanation' => 'თქვენი ფორუმის ფარდობითი გეზი (მაგალითი: თუ თქვენი ფორუმის პროგრამაა http://www.yourdomain.tld/forum/, ამ ველში &quot;/forum/&quot; მიუთითეთ)',
  'relative_path_to_config_file' => 'თქვენი ფორუმის პროგრამის კონფიგურაციის ფაილის ფარდობითი გეზი',
  'relative_path_to_config_file_explanation' => 'თქვენი ფორუმის პროგრამის ფარდობითი გეზი, თქვენი გალერეის დასტიდან (მაგ., &quot;../forum/&quot; თუ თქვენი ფორუმის პროგრამის გეზია http://www.yourdomain.tld/forum/, ხოლო გალერეის გეზი - http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'ნაჭდევის პრეფიქსი',
  'cookie_prefix_explanation' => 'ეს თქვენი ფორუმის ნაჭდევის პრეფიქსი იქნება',
  'table_prefix' => 'ცხრილის პრეფიქსი',
  'table_prefix_explanation' => 'უნდა ემთხვეოდეს ფორუმის ჩადგმისას მითითებულ პრეფიქსს.',
  'user_table' => 'საკუთარი ცხრილი',
  'user_table_explanation' => '(ჩვეულებრივ, ნაგულისხმებია "დიახ", თუ ფორუმი სტანდარტულადაა ჩადგმული',
  'session_table' => 'სეანსის ცხრილი',
  'session_table_explanation' => '(ჩვეულებრივ, ნაგულისხმებია "დიახ", თუ ფორუმი სტანდარტულადაა ჩადგმული)',
  'group_table' => 'ჯგუფის ცხრილი',
  'group_table_explanation' => '(ჩვეულებრივ, ნაგულისხმებია "დიახ", თუ ფორუმი სტანდარტულადაა ჩადგმული)',
  'group_relation_table' => 'ჯგუფთან დაკავშირებული ცხრილი',
  'group_relation_table_explanation' => '(ჩვეულებრივ, ნაგულისხმებია "დიახ", თუ ფორუმი სტანდარტულადაა ჩადგმული)',
  'group_mapping_table' => 'ჯგუფის სქემის ცხრილი',
  'group_mapping_table_explanation' => '(ჩვეულებრივ, ნაგულისხმებია "დიახ", თუ ფორუმი სტანდარტულადაა ჩადგმული)',
  'use_standard_groups' => 'ფორუმის მონაწილეთა სტანდარტული ჯგუფების გამოყენება',
  'use_standard_groups_explanation' => 'იყენებს მონაწილეთა სტანდარტულ (ჩადგმულ) ჯგუფებს (რეკომენდებულია). ამ შემთხვევაში ამ გვერდზე მითითებული მონაწილეთა საკუთარი ჯგუფების პარამეტრები დეაქტივირდება. გამორთეთ ეს პარამეტრი თუ ნამდვილად იცით რისი გაკეთება გსურთ!',
  'validating_group' => 'ჯგუფების უფლებამოსილება',
  'validating_group_explanation' => 'თქვენი ფორუმის ჯგუფების კოდი სადაც ჯგუფები უფლებამოსილებაა მითითებული (ჩვეულებრივ ნაგულისხმები მნიშვნელობაა &quot;დიახ&quot;, თუ ფორუმი სტანდარტულადაა ჩადგმული)',
  'guest_group' => 'სტუმართა ჯგუფი',
  'guest_group_explanation' => 'თქვენი ფორუმის &quot;სტუმართა&quot; (ანონიმურ მონაწილეთა) ჯგუფის კოდი (ნაგულისხმები მნიშვნელობა &quot;დიახ&quot;&quot;. შეცვალეთ ეს პარამეტრი თუ ნამდვილად იცით რისი გაკეთება გსურთ)',
  'member_group' => 'წევრთა ჯგუფი',
  'member_group_explanation' => 'თქვენი ფორუმის &quot;წევრთა&quot; (რეგისტრირებულ მონაწილეთა) ჯგუფის კოდი (ნაგულისხმები მნიშვნელობა &quot;დიახ&quot;&quot;. შეცვალეთ ეს პარამეტრი თუ ნამდვილად იცით რისი გაკეთება გსურთ)',
  'admin_group' => 'ადმინთა ჯგუფი',
  'admin_group_explanation' => 'თქვენი ფორუმის &quot;ადმინთა&quot; ჯგუფის კოდი (ნაგულისხმები მნიშვნელობა &quot;დიახ&quot;&quot;. შეცვალეთ ეს პარამეტრი თუ ნამდვილად იცით რისი გაკეთება გსურთ)',
  'banned_group' => 'აკრძალულთა ჯგუფი',
  'banned_group_explanation' => 'თქვენი ფორუმის &quot;აკრძალულ წევრთა&quot; ჯგუფის კოდი (ნაგულისხმები მნიშვნელობა &quot;დიახ&quot;&quot;. შეცვალეთ ეს პარამეტრი თუ ნამდვილად იცით რისი გაკეთება გსურთ)',
  'global_moderators_group' => 'გლობალურ მოდერატორთა ჯგუფი',
  'global_moderators_group_explanation' => 'თქვენი ფორუმის &quot;გლობალურ მოდერატორთა&quot; ჯგუფის კოდი (ნაგულისხმები მნიშვნელობა &quot;დიახ&quot;&quot;. შეცვალეთ ეს პარამეტრი თუ ნამდვილად იცით რისი გაკეთება გსურთ)',
  'special_settings' => 'ფორუმის სპეციფიური პარამეტრები',
  'logout_flag' => 'phpBB ვერსია (გასვლის ალამი)',
  'logout_flag_explanation' => 'თქვენი ფორუმის ვერსია (ეს პარამეტრი მიუთითებს გასვლის ქმედების დამუშავების წესს)',
  'use_post_based_groups' => 'გამოვიყენო გამოხმაურებათა რაოდენობაზე დამყარებული ჯგუფები?',
  'logout_flag_yes' => '2.0.5 ან მაღალი',
  'logout_flag_no' => '2.0.4 ან დაბალი',
  'use_post_based_groups_explanation' => 'დანაწილდეს თუ არა ჯგუფები ფორუმის გამოხმაურებათა რაოდენობის მიხედვით (იძლევა უფლებების ბიჯობრივი მართვის საშუალებას) თუ გათვალისწინდეს ნაგულისხმები ჯგუფები (რეკომენდებულია). ამ პარამეტრის შეცვლა მოგვიანებითაც შეიძლება.',
  'use_post_based_groups_yes' => 'დიახ',
  'use_post_based_groups_no' => 'არა',
  'error_title' => 'გაგრძელებამდე ეს შეცდომა უნდა გამოსწორდეს. დაუბრუნდით წინა ეკრანს.',
  'error_specify_bbs' => 'უნდა მიუთითოთ პროგრამა, რომლის შეხიდებაც გსურთ გალერეის ჩადგმულ ვერსიასთან.',
  'error_no_blank_name' => 'საკუთარი შეხიდების ფაილის ველს ცარიელს ვერ დატოვებთ.',
  'error_no_special_chars' => 'შეხიდების ფაილის სახელი არ შეიძლება შეიცავდეს სპეციალურ სიმბოლოებს გარდა ხაზგასმისა (_) და დეფისის (-)!',
  'error_bridge_file_not_exist' => 'შეხიდების ფაილი %s სერვერზე არ არსებობს. გადაამოწმეთ, ატვირთულია თუ არა იგი.',
  'finalize' => 'ფორუმის ინტეგრაციის ჩართვა/ამორთვა',
  'finalize_explanation' => 'აქამდე, თქვენს მიერ მითითებული პარამეტრები მონაცემთა ბაზაში იწერებოდა, მაგრამ ფორუმის ინტეგრაცია ჩართული არ იყო. ინტეგრაციის ჩართვა/ამორთვა მოგვიანებით ნებისმიერ დროს შეიძლება. არ შეიძლება გალერეის ადმინის საწყისი სახელისა და პაროლის დავიწყება, რადგან შეიძლება მოგვიანებით დაგჭირდეთ. თუ რაიმე მცდარად წარიმართა დაბრუნდით აქ %s და ამორთეთ ფორუმის ინტეგრაცია, გალერეის ცალკე მდგომი (შეუხიდავი) ვერსიის ანგარიშის საშუალებით (ჩვეულებრივ, რაც მიუთითეთ გალერეის ჩადგმისას).',
  'your_bridge_settings' => 'თქვენი შეხიდების პარამეტრები',
  'title_enable' => '%s პროგრამასთან ინტერაციის/ხიდის გააქტივება',
  'bridge_enable_yes' => 'ჩართვა',
  'bridge_enable_no' => 'ამორთვა',
  'error_must_not_be_empty' => 'ცარიელი არ უნდა იყოს',
  'error_either_be' => 'უნდა იყოს %s ან %s',
  'error_folder_not_exist' => '%s არ არსებობს. შეასწორეთ მითითებული მნიშვნელობა %s პარამეტრისთვის',
  'error_cookie_not_readible' => 'გალერეა ვერ კითხულობს ნაჭდევს სახელით %s. შეასწორეთ მითითებული მნიშვნელობა %s პარამეტრისთვის, ან გადადით ფორუმის ადმინის პანელში და გადაამოწმეთ ნაჭდევის გეზის მისაწვდომობა გალერეისთვის.',
  'error_mandatory_field_empty' => '%s ველს ცარიელს ვერ დატოვებთ - მიუთითეთ მართებული მნიშვნელობა.',
  'error_no_trailing_slash' => '%s ველში თანმდევი დახრილი ხაზი არ უნდა იყოს.',
  'error_trailing_slash' => '%s ველში თანმდევი დახრილი ხაზი უნდა იყოს.',
  'error_db_connect' => 'თქვენი მონაცემებით mySQL მონაცემთა ბაზას ვერ ვუკავშირდები. აი mySQL შეტყობინება:',
  'error_db_name' => 'თუმცა გალერეამ კავშირი დაამყარა, მაგრამ %s მონაცემთა ბაზას ვერ პოულობს. გადაამოწმეთ, რომ მითითებული %s მართებულია. აი mySQL შეტყობინება:',
  'error_prefix_and_table' => '%s და ',
  'error_db_table' => 'ცხრილი %s ვერ მოიძებნა. გადაამოწმეთ, რომ მითითებული %s მართებულია.',
  'recovery_title' => 'შეხიდების მმართველი: გაუთვალისწინებელი აღდგენა',
  'recovery_explanation' => 'თუ ფორუმის თქვენს გალერეასთან ინტეგრაციას აპირებთ უნდა შემოხვიდეთ როგორც ადმინი. თუ ადმინის სტატუსით შემოსვლას შეხიდების მცდარი ფუნქციონირების გამო ვერ ახერხებთ, ფორუმის ინტეგრაცია ამ გვერდიდან შეგიძლიათ ამორთოთ. სახელისა და პაროლის მითითება სისტემაში არ შეგიშვებთ - იგი მხოლოდ ფორუმის ინტეგრაციას გააუქმებს. დეტალებისთვის გადახედეთ დოკუმენტაციას.',
  'username' => 'სახელი',
  'password' => 'პაროლი',
  'disable_submit' => 'გაგზავნა',
  'recovery_success_title' => 'ავტორიზება შედგა',
  'recovery_success_content' => 'თქვენ წარმატებით ამორთეთ ფორუმის შეხიდება. თქვენი გალერეა ამჟამად დამოუკიდებლად მუშაობს.',
  'recovery_success_advice_login' => 'შეხიდების პარამეტრების შესაცვლელად შედით როგორც ადმინი და/ან კვლავ ჩართეთ ფორუმის ინტეგრაციის რეჟიმი.',
  'goto_login' => 'გადასვლა შესვლის გვერდზე',
  'goto_bridgemgr' => 'გადასვლა შეხიდების მმართველზე',
  'recovery_failure_title' => 'ავტორიზება არ შედგა',
  'recovery_failure_content' => 'თქვენ არასაკმარისი უფლებამოსილება გაგაჩნიათ. უნდა გაგაჩნდეთ ადმინის ანგარიში გალერეის ცალკეული ვერსიისთვის (ჩვეულებრივ, ანგარიში პროგრამის ჩადგმისას).',
  'try_again' => 'კვლავ სცადეთ',
  'recovery_wait_title' => 'დაცდის ვადა არ გასულა',
  'recovery_wait_content' => 'უსაფრთხოების მიზნით ეს სკრიპტი კრძალავს უშედეგო მცდელობებს მოკლე დროის განმავლობაში. ამგვარად შესვლის შემდეგ მცდელობამდე გარკვეული ხნით დაცდა მოგიწევთ.',
  'wait' => 'დაცდა',
  'create_redir_file' => 'გადამისამართების ფაილის შექმნა (რეკომენდებულია)',
  'create_redir_file_explanation' => 'ფორუმში შესვლის შემდეგ მონაწილის გალერეაში გადამისამართებლად აუცილებელია თქვენი ფორუმის დასტაში შექმნილი გადამისამართების ფაილი. როცა ეს პარამეტრი ჩართულია, შეხიდების მმართველი შეეცდება ამ ფაილის შექმნას ან მოგაწვდით გამზადებულ დასაკოპირებელ და ჩასასმელ კოდს ფაილის ხელით შესაქმნელად.',
  'browse' => 'ნუსხა',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'კალენდარი', //cpg1.4
  'close' => 'დახურვა', //cpg1.4
  'clear_date' => 'თარიღის წაშლა', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'პარამეტრები \'%s\' ოპერაციის შესასრულებლად არ მითითებულა!',
  'unknown_cat' => 'შერჩეული კატეგორიები ბაზაში არ არსებობენ',
  'usergal_cat_ro' => 'მონაწილეთა გალერეების კატეგორია ვერ წაიშლება!',
  'manage_cat' => 'კატეგორიების მართვა',
  'confirm_delete' => 'ნამდვილად გსურთ ამ კატეგორიის წაშლა?', //js-alert
  'category' => 'კატეგორია',
  'operations' => 'ოპერაციები',
  'move_into' => 'გადატანა',
  'update_create' => 'კატეგორიის განახლება/შექმნა',
  'parent_cat' => 'ზედა დონის კატეგორია',
  'cat_title' => 'კატეგორიის სათაური',
  'cat_thumb' => 'კატეგორიის მინიატურა',
  'cat_desc' => 'კატეგორიის აღწერა',
  'categories_alpha_sort' => 'კატეგორიების ანბანური დალაგება (დალაგების საკუთარი რიგის ნაცვლად)', //cpg1.4
  'save_cfg' => 'კონფიგურაციის შენახვა', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'გალერეის კონფიგურაცია', //cpg1.4
  'manage_exif' => 'exif ჩვენების მართვა', //cpg1.4
  'manage_plugins' => 'მოდულების მართვა', //cpg1.4
  'manage_keyword' => 'საკვანძო სიტყვების მართვა', //cpg1.4
  'restore_cfg' => 'საწყისი პარამეტრების აღდგენა',
  'save_cfg' => 'ახალი კონფიგურაციის შენახვა',
  'notes' => 'შენიშვნები',
  'info' => 'ინფორმაცია',
  'upd_success' => 'გალერეის კონფიგურაცია განახლდა',
  'restore_success' => 'გალერეის საწყისი კონფიგურაცია აღდგა',
  'name_a' => 'სახელი [აღმავალი]',
  'name_d' => 'სახელი [დაღმავალი]',
  'title_a' => 'სათაური [აღმავალი]',
  'title_d' => 'სათაური [დაღმავალი]',
  'date_a' => 'თარიღი [აღმავალი]',
  'date_d' => 'თარიღი [აღმავალი]',
  'pos_a' => 'პოზიცია [აღმავალი]', //cpg1.4
  'pos_d' => 'პოზიცია [დაღმავალი]', //cpg1.4
  'th_any' => 'მაქს. ზომა',
  'th_ht' => 'სიმაღლე',
  'th_wd' => 'სიგანე',
  'label' => 'წარწერა',
  'item' => 'ალამი',
  'debug_everyone' => 'ყველა',
  'debug_admin' => 'მხოლოდ ადმინი',
  'no_logs'=> 'ამორთვა', //cpg1.4
  'log_normal'=> 'ჩვეულებრივი', //cpg1.4
  'log_all' => 'ყველა', //cpg1.4
  'view_logs' => 'დავთრის ნახვა', //cpg1.4
  'click_expand' => 'დაწკაპეთ სექციის სახელი ჩამოსაშლელად', //cpg1.4
  'expand_all' => 'ყველას ჩამოშლა', //cpg1.4
  'notice1' => '(*) თუ მონაცემთა ბაზაში ფაილები უკვე გაქვთ ეს პარამეტრები არ უნდა შეიცვალოს.', //cpg1.4 - (relocated)
  'notice2' => '(**) ამ პარამეტრების ცვლილება შეეხება მხოლოდ ამ ცვლილების შემდეგ ჩამოტვირთულ ფაილებს, ამიტომ ამ პარამეტრების შეცვლა თუ გალერეაში უკვე გაქვთ ფაილები რეკომენდებული არაა. თუმცა ცვლილებები შეგიძლიათ განახოციელოთ უკვე არსებული ფაილებისთვისაც &quot;<a href="util.php">ადმინის სამარჯვებით</a> (ზომის შეცვლა)&quot; ადმინის მენიუდან.', //cpg1.4 - (relocated)
  'notice3' => '(***) დავთრის ყველა ფაილი ინგლისურადაა.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'ფუნქცია ამორთულია bb ინტეგრაციისას', //cpg1.4
  'auto_resize_everyone' => 'ყველა', //cpg1.4
  'auto_resize_user' => 'მხოლოდ მონაწილე', //cpg1.4
  'ascending' => 'აღმავალი', //cpg1.4
  'descending' => 'დაღმავალი', //cpg1.4
        );

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'ძირითადი პარამეტრები',
  array('გალერეის სახელი', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('გალერეის აღწერა', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('ადმინისტრატორის ელფოსტა', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('თქვენი გალერეის დასტის მისამართი (\'index.php\' ან მსგავსის გარეშე)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('თქვენი საიტის სათაო გვერდი', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('რჩეულებში ZIP ფაილების ჩამოტვირთვის უფლება', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('საათობრივი სხვაობა გრინვიჩის დროსთან (მიმდინარე დრო: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('პაროლების დაშიფვრის ჩართვა (შეუქცევადია)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('დახმარების პიქტოგრამების ჩართვა (მხოლოდ ინგლისურად)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('ძებნისას დაწკაპვადი საკვანძო სიტყვების გამოყენება','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('მოდულების ჩართვა', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('კერძო IP მისამართების აკრძალვის უფლება', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('ჯგუფური დამატების სიის სახით ჩვენება', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'ენები და კოდირება',
  array('ენა', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('დავუბრუნდე ინგლისურს თუ ნათარგმნი ფრაზა ვერ მოიძებნა?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('კოდირება', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('ენების სიის ჩვენება', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('ალმების ჩვენება', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('ენის შერჩევისას &quot;აღდგენის&quot; ჩვენება', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('წინა/შემდეგი ან დაფების გვერდების ჩვენება', 'previous_next_tab', 1), //cpg1.4

  'თემის პარამეტრები',
  array('თემა', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('თემების სიის ჩვენება', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('თემის შერჩევისას &quot;აღდგენის&quot; ჩვენება', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('ძირითადი კითხვების ჩვენება', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('საკუთარი მენიუს ბმის სახელი', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('საკუთარი მენიუს ბმის მისამართი', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('bbcode დახმარების ჩვენება', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('ბლოკების ჩვენება XHTML და CSS შესაბამისად მითითებული თემებისთვის','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('საკუთარი თავსართის გეზი', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('საკუთარი ქვესართის გეზი', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'ალბომების სიის ჩვენება',
  array('მთავარი ცხრილის სიგანე (პიქსელი ან %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('კატეგორიების დონეების რაოდენობა საჩვენებლად', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('ალბომების რაოდენობა საჩვენებლად', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('სვეტების რაოდენობა ალბომების სიისთვის', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('მინიატურების ზომა პიქსელებში', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('თავფურცლის შიგთავსი', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('კატეგორიებში პირველი დონის ალბომების მინიატურების ჩვენება','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('კატეგორიების ანბანურად დალაგება (ნაცვლად საკუთარი რიგისა)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('ბმის ფაილების რაოდენობის ჩვენება','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'მინიატურების ჩვენება',
  array('სვეტების რაოდენობა მინიატურების გვერდზე', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('მწკრივების რაოდენობა მინიატურების გვერდზე', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('ნაჩვენები დაფების მაქსიმალური რაოდენობა', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('ფაილის წარწერის ჩვენება (სათაურის გარდა) მინიატურის ქვეშ', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('ნახვის რაოდენობის ჩვენება მინიატურის ქვეშ', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('კომენტარების რაოდენობის ჩვენება მინიატურის ქვეშ', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('ფაილის ამტვირთავის სახელის ჩვენება მინიატურის ქვეშ', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('ფაილის ადმინი ამტვირთავის სახელის ჩვენება მინიატურის ქვეშ', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('ფაილის სახელის ჩვენება მინიატურის ქვეშ', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('ალბომის აღწერილობის ჩვენება', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('ფაილების სორტირების ნაგულისხმები რიგი', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('ხმათა მინიმალური რაოდენობა \'ყველაზე რეიტინგულ\' ფაილთა სიაში', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'ნახატების ჩვენება', //cpg1.4
  array('ფაილების ჩვენების ცხრილის სიგანე (პიქსელი ან %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('ფაილის ინფორმაცია ხილულია ნაგულისხმებად', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('ფაილის აღწერილობის მაქსიმალური ზომა', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('სიტყვაში ასო-ნიშანთა მაქსიმალური რაოდენობა', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('დიაფილმის ჩვენება', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('დიაფილმის ფაილის სახელის ჩვენება მინიატურის ქვეშ', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('კადრების რაოდენობა დიაფილმში', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('სლაიდების ჩვენების ინტერვალი მილიწამებში (1 წამი = 1000 მილიწამი)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'კომენტარების პარამეტრები', //cpg1.4
  array('უცენზურო სიტყვების გაფილტვრა კომენტარებში', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('კომენტარებში მიმიკების დაშვება', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('ერთი და იგივე მონაწილისთვის ერთი ფაილისთვის რამდენიმე კომენტარის ნებართვა (გადავსების დაცვის გამორთვა)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('სტრიქონების მაქსიმალური რაოდენობა კომენტარში', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('კომენტარის მაქსიმალური ზომა', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('კომენტარის დამატების ადმინისტრატორისთვის ელფოსტით შეტყობინება', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('კომენტარების სორტირების რიგი', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('პრეფიქსი ანონიმური კომენტარებისთვის', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'ფაილებისა და მინიატურების პარამეტრები',
  array('JPEG ფაილების ხარისხი', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('მინიატურის მაქსიმალური ზომები <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('ზომების გამოყენება (მინიატურის სიგანე, სიმაღლე ან მაქსიმალური ზომა ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('შუალედური ნახატების შექმნა','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('შუალედური ნახატის/ვიდეოს მაქსიმალური სიგანე და სიმაღლე <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('ატვირთული ფაილების მაქსიმალური ზომა (კბ)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('ატვირთული ნახატის/ვიდეოს მაქსიმალური სიგანე ან სიმაღლე (პიქსელი)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('მაქსიმალურ სიგანეზე მეტი ზომის ნახატების თვითშემცირება', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'ფაილებისა და მინიატურების დეტალური პარამეტრები',
  array('ალბომები შესაძლოა პირადიც იყოს (შენიშვნა: თუ \'დიახ\'-ს \'არა\'-ზე გადართავთ ნებისმიერი პირადი ალბომი საზოგადოდ გარდაიქმნება)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('სტუმრებისთვსი პირადი ალბომის პიქტოგრამის ჩვენება','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('აკრძალული სიმბოლოები ფაილის სახელებში ', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('ჩამოსატვირთი ნახატების ფაილების დასაშვები ტიპები', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('ნახატების დასაშვები ტიპები', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('ვიდეოფაილების დასაშვები ტიპები', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('ფილმის ჩვენების ავტომატური დაწყება', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('აუდიოფაილების დასაშვები ტიპები', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('დოკუმენტების დასაშვები ტიპები', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('ნახატების ზომის შეცვლის მეთოდი','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('ImageMagick \'გარდაქმნის\' პროგრამის გეზი (მაგალითი /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('ნახატების დასაშვები ტიპები (მხოლოდ ImageMagick-ისთვის)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('ImageMagick ბრძანების პარამეტრები', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('EXIF მონაცემების კითხვა JPEG ფაილებში', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('IPTC მონაცემების კითხვა JPEG ფაილებში', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('ალბომის დასტა <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('მონაწილის ფაილების დასტა <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('შუალედური ნახატების პრეფიქსი <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('მინიატურების პრეფიქსი <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('დასტების საწყისი რეჟიმი', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('ფაილების საწყისი რეჟიმი', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'მონაწილის პარამეტრები',
  array('ახალი მონაწილეების რეგისტრაციის ნებართვა', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('სტუმრების (ან ანონიმურების) დაშვება', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('მონაწილის რეგისტრაცია ითხოვს ელფოსტით შემოწმებას', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('ახალი მონაწილის რეგისტრაციის ადმინისთვის ელფოსტით შეტყობინება', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('რეგისტრაციის ადმინის მიერ გააქტივება', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('ორი მონაწილისთვის ერთი და იგივე ელფოსტის ნებართვა', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('ატვირთვის თანხმობის მოლოდინის ადმინისთვის ელფოსტით შეტყობინება', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('შემოსული მონაწილეებისთვის მონაწილეთა სიის ნახვის ნებართვა', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('მონაწილეთათვის საკუთარ პროფილში ელფოსტის შეცვლის ნებართვა', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('საზოგადო გალერეებში მონაწილეთათვის საკუთარი სურათების განკარგვის უფლება', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('შესვლის უშედეგო მცდელობების რაოდენობა დროებით აკრძალვამდე (ფორსირებული შეტევების ასაცილებლად)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('დროებითი აკრძალვის ხანგრძლივობა შემოსვლის უშედეგო მცდელობების შემდეგ', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('პატაკის ჩართვა ადმინისადმი', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// პროფილის დამტებითი ველები,  //cpg1.4
  'პროფილის დამტებითი ველები (თუ გამოყენება არ გსურთ - ცარიელი დატოვეთ).
  პროფილი 6 გამოიყენება დიდი ზომის მონაცემებისთვის. მაგ., ბიოგრაფიული', //cpg1.4
  array('პროფილის სახელი 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('პროფილის სახელი 2', 'user_profile2_name', 0), //cpg1.4
  array('პროფილის სახელი 3', 'user_profile3_name', 0), //cpg1.4
  array('პროფილის სახელი 4', 'user_profile4_name', 0), //cpg1.4
  array('პროფილის სახელი 5', 'user_profile5_name', 0), //cpg1.4
  array('პროფილის სახელი 6', 'user_profile6_name', 0), //cpg1.4

  'დამატებითი ველები ნახატების აღწერისთვის (თუ გამოყენება არ გსურთ - ცარიელი დატოვეთ)',
  array('ველის სახელი 1', 'user_field1_name', 0),
  array('ველის სახელი 2', 'user_field2_name', 0),
  array('ველის სახელი 3', 'user_field3_name', 0),
  array('ველის სახელი 4', 'user_field4_name', 0),

  'ნაჭდევების პარამეტრები',
  array('ნაჭდევის სახელი', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('ნაჭდევის გეზი', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'ელფოსტის პარამეტრები  (ჩვეულებრივ, აქ არაფრის შეცვლაა საჭირო; თუ დარწმუნებული არ ხართ, ყველა ველი ცარიელი დატოვეთ)', //cpg1.4
  array('SMTP სერვერი (თუ ცარიელია, გამოიყენება sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP სახელი', 'smtp_username', 0), //cpg1.4
  array('SMTP პაროლი', 'smtp_password', 0), //cpg1.4

  'დავთარი და სტატისტიკა', //cpg1.4
  array('დავთრის რეჟიმი <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('ბარათების დავთარი', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('კენჭისყრის დეტალური სტატისტიკის შენახვა','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('გვერდების ნახვის დეტალური სტატისტიკის შენახვა','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'მომსახურების პარამეტრები', //cpg1.4
  array('გამართვის რეჟიმის ჩართვა', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('შეტყობინებების ჩვენება გამართვისას', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('გალერეა ავტონომიურ რეჟიმშია', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ბარათების გაგზავნა',
  'ecard_sender' => 'გამგზავნი',
  'ecard_recipient' => 'ადრესატი',
  'ecard_date' => 'თარიღი',
  'ecard_display' => 'ბარათის ჩვენება',
  'ecard_name' => 'სახელი',
  'ecard_email' => 'ელფოსტა',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => '[აღმავალი]',
  'ecard_descending' => '[დაღმავალი]',
  'ecard_sorted' => 'დასორტირებულია',
  'ecard_by_date' => 'თარიღით',
  'ecard_by_sender_name' => 'გამგზავნის სახელით',
  'ecard_by_sender_email' => 'გამგზავნის ელფოსტით',
  'ecard_by_sender_ip' => 'გამგზავნის IP მისამართით',
  'ecard_by_recipient_name' => 'ადრესატის სახელით',
  'ecard_by_recipient_email' => 'ადრესატის ელფოსტით',
  'ecard_number' => 'ჩანაწერის ჩვენება %s - %s აქედან %s',
  'ecard_goto_page' => 'გადასვლა გვერდზე',
  'ecard_records_per_page' => 'ჩანაწერი გვერდზე',
  'check_all' => 'ყველას მონიშვნა',
  'uncheck_all' => 'მონიშვნის მოხსნა',
  'ecards_delete_selected' => 'შერჩეული ბარათების წაშლა',
  'ecards_delete_confirm' => 'ნამდვილად გსურთ ჩანაწერების წაშლა? მონიშნეთ!',
  'ecards_delete_sure' => 'დიახ, მსურს',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'უნდა შეიტანოთ თქვენის სახელი და კომენტარი',
  'com_added' => 'თქვენი კომენტარი დაემატა',
  'alb_need_title' => 'უნდა მიუთითოთ ალბომის სახელი!',
  'no_udp_needed' => 'განახლება საჭირო არაა.',
  'alb_updated' => 'ალბომი განახლდა',
  'unknown_album' => 'მითითებული ალბომი არ არსებობს ან მისი ატვირთვის უფლება არ გაქვთ',
  'no_pic_uploaded' => 'არცერთი ფაილი არ ატვირთულა!<br /><br />თუ ნამდვილად შეარჩიეთ ასატვირთი ფაილი, შეამოწმეთ სერვერის ატვირთვის შესაძლებლობა...',
  'err_mkdir' => 'შეცდომა %s დასტის შექმნისას !',
  'dest_dir_ro' => 'სამიზნე დასტა %s ჩაწერადი არაა !',
  'err_move' => 'ვერ გადამაქვს %s აქ %s !',
  'err_fsize_too_large' => 'ატვირთული ფაილის ზომა მეტისმეტად დიდია (მაქსიმალური დასაშვები ზომაა %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'ატვირთული ფაილის მოცულობა მეტისმეტად დიდია  (მაქსიმუმია %s კბ) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'ატვირთული ფაილი ნახატი არაა !',
  'allowed_img_types' => 'შეგიძლიათ ატვირთოთ მხოლოდ %s ნახატი.',
  'err_insert_pic' => 'ფაილი \'%s\' ალბომში ვერ დაემატება ',
  'upload_success' => 'თქვენი ფაილი წარმატებით აიტვირთა.<br /><br />იგი ხილული გახდება ადმინისტრაციის თანხმობის შემდეგ.',
  'notify_admin_email_subject' => '%s - ფაილის ატვირთვის შეტყობინება',
  'notify_admin_email_body' => 'ფაილი აიტვირთა %s მონაწილის მიერ, რომელიც თანხმობას ითხოვს. მინახულეთ %s',
  'info' => 'ინფორმაცია',
  'com_added' => 'კომენტარი დაემატა',
  'alb_updated' => 'ალბომი განახლდა',
  'err_comment_empty' => 'თქვენი კომენტარი ცარიელია!',
  'err_invalid_fext' => 'დასაშვებია ფაილები შემდეგი ტიპით: <br /><br />%s.',
  'no_flood' => 'უკაცრავად, თქვენ უკვე ამ ფაილის ბოლო კომენტარის ავტორი ხართ.<br /><br />თუ შეცვლა გსურთ დაარედაქტირეთ არსებული კომენტარი.',
  'redirect_msg' => 'თქვენ გადამისამართდით.<br /><br /><br />დაწკაპეთ \'გაგრძელება\', თუ გვერდი ავტომატურად არ განახლდა.',
  'upl_success' => 'თქვენი ფაილი წარმატებით დაემატა',
  'email_comment_subject' => 'გია გალერეაში კომენტარი დაემატა',
  'email_comment_body' => 'ვიღაცამ თქვენს გალერეაში კომენტარი განათავსა. ნახეთ იგი.',
  'album_not_selected' => 'ალბომი არ შერჩეულა', //cpg1.4
  'com_author_error' => 'ამ მეტსახელს რეგისტრირებული მონაწილე იყენებს, გამოიყენეთ სხვა', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'აღწერილობა',
  'fs_pic' => 'სრული ზომის ნახატი',
  'del_success' => 'წარმატებით წაიშალა',
  'ns_pic' => 'ჩვეულებრივი ზომის ნახატი',
  'err_del' => 'ვერ წაიშლება',
  'thumb_pic' => 'მინიატურა',
  'comment' => 'კომენტარი',
  'im_in_alb' => 'ნახატი ალბომში',
  'alb_del_success' => 'ალბომი &laquo;%s&raquo; წაიშალა', //cpg1.4
  'alb_mgr' => 'ალბომის მორგება',
  'err_invalid_data' => 'მიღებულია მცდარი მონაცემები - \'%s\'',
  'create_alb' => 'ვქმნი ალბომს \'%s\'',
  'update_alb' => 'ვაახლებ ალბომს \'%s\' სახელით \'%s\' და საძიებლით \'%s\'',
  'del_pic' => 'ფაილის წაშლა',
  'del_alb' => 'ალბომის წაშლა',
  'del_user' => 'მონაწილის წაშლა',
  'err_unknown_user' => 'მითითებული მონაწილე არ არსებობს!',
  'err_empty_groups' => 'ჯგუფის ცხრილი არ არსებობს ან ცარიელია!', //cpg1.4
  'comment_deleted' => 'კომენტარი წარმატებით წაიშალა',
  'npic' => 'ნახატი', //cpg1.4
  'pic_mgr' => 'ნახატების მმართველი', //cpg1.4
  'update_pic' => 'განახლება: ნახატი - \'%s\', ფაილის სახელი - \'%s\', ინდექსი - \'%s\'', //cpg1.4
  'username' => 'სახელი', //cpg1.4
  'anonymized_comments' => 'გაუქმდა %s კომენტარი', //cpg1.4
  'anonymized_uploads' => 'გაუქმდა %s საზოგადო ატვირთვა', //cpg1.4
  'deleted_comments' => 'წაიშალა %s კომენტარი', //cpg1.4
  'deleted_uploads' => 'წაიშალა %s საზოგადო ატვირთვა', //cpg1.4
  'user_deleted' => 'მონაწილე %s წაიშალა', //cpg1.4
  'activate_user' => 'მონაწილის გააქტივება', //cpg1.4
  'user_already_active' => 'ანგარიში უკვე აქტიური იყო', //cpg1.4
  'activated' => 'გააქტივდა', //cpg1.4
  'deactivate_user' => 'მონაწილის დეაქტივაცია', //cpg1.4
  'user_already_inactive' => 'ანგარიში უკვე დეაქტივირებული იყო', //cpg1.4
  'deactivated' => 'დეაქტივირებული', //cpg1.4
  'reset_password' => 'პაროლ(ებ)ის აღდგენა', //cpg1.4
  'password_reset' => 'პაროლი აღდგა – %s', //cpg1.4
  'change_group' => 'პირველადი ჯგუფის შეცვლა', //cpg1.4
  'change_group_to_group' => 'ჯგუფის შეცვლა %s - %s', //cpg1.4
  'add_group' => 'მეორადი ჯგუფის დამატება', //cpg1.4
  'add_group_to_group' => '%s მონაწილის დამატება %s ჯგუფში. იგი %s პირველადი და %s მეორადი ჯგუფ(ებ)ის წევრია.', //cpg1.4
  'status' => 'სტატუსი', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'ბარათის მონაცემები დაზიანებულია თქვენი ელფოსტის კლიენტის მიერ. გადაამოწმეთ ბმის სისრულე.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'ნამდვილად გსურთ ამ ფაილის წაშლა?\\nკომენტარებიც წაიშლება.', //js-alert
  'del_pic' => 'ამ ფაილის წაშლა',
  'size' => '%s x %s პიქსელი',
  'views' => '%s -ჯერ',
  'slideshow' => 'სლაიდების ჩვენება',
  'stop_slideshow' => 'სლაიდების ჩვენების შეჩერება',
  'view_fs' => 'დაწკაპეთ ნახატის სრული ზომით სანახავად',
  'edit_pic' => 'ფაილის მონაცემების შეცვლა', //cpg1.4
  'crop_pic' => 'ჩამოჭრა და დატრიალება',
  'set_player' => 'სლაიდოსკოპის შეცვლა',
);

$lang_picinfo = array(
  'title' =>'ფაილის ინფორმაცია',
  'Filename' => 'ფაილის სახელი',
  'Album name' => 'ალბომი',
  'Rating' => 'რეიტინგი (ხმა: %s)',
  'Keywords' => 'საკვანძო სიტყვები',
  'File Size' => 'ფაილის ზომა',
  'Date Added' => 'დამატების თარიღი', //cpg1.4
  'Dimensions' => 'ნახატის ზომა',
  'Displayed' => 'ნაჩვენებია',
  'URL' => 'მისამართი',
  'Make' => 'აპარატი', //cpg1.4
  'Model' => 'მოდელი', //cpg1.4
  'DateTime' => 'თარიღი დრო', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'მაქსიმალური აპერტურა', //cpg1.4
  'FocalLength' => 'ფოკალური მანძილი',
  'Comment' => 'კომენტარი',
  'addFav'=>'რჩეულებში დამატება',
  'addFavPhrase'=>'რჩეულები',
  'remFav'=>'რჩეულებიდან ამოღება',
  'iptcTitle'=>'IPTC სათაური',
  'iptcCopyright'=>'IPTC საავტორო უფლება',
  'iptcKeywords'=>'IPTC საკვანძო სიტყვები',
  'iptcCategory'=>'IPTC კატეგორია',
  'iptcSubCategories'=>'IPTC ქვეკატეგორია',
  'ColorSpace' => 'ფერთა დიაპაზონი', //cpg1.4
  'ExposureProgram' => 'ექსპოზიციის პროგრამა', //cpg1.4
  'Flash' => 'გაელვება', //cpg1.4
  'MeteringMode' => 'მანძილის რეჟიმი', //cpg1.4
  'ExposureTime' => 'ექსპოზიციის დრო', //cpg1.4
  'ExposureBiasValue' => 'ექსპოზიციის გადახრა', //cpg1.4
  'ImageDescription' => ' ნახატის აღწერილობა', //cpg1.4
  'Orientation' => 'ორიენტაცია', //cpg1.4
  'xResolution' => 'X გარჩევადობა', //cpg1.4
  'yResolution' => 'Y გარჩევადობა', //cpg1.4
  'ResolutionUnit' => 'გარჩევადობის ერთეული', //cpg1.4
  'Software' => 'პროგრამა', //cpg1.4
  'YCbCrPositioning' => 'YCbCr პარამეტრები', //cpg1.4
  'ExifOffset' => 'Exif წანაცვლება', //cpg1.4
  'IFD1Offset' => 'IFD1 წანაცვლება', //cpg1.4
  'FNumber' => 'F ყოვნი', //cpg1.4
  'ExifVersion' => 'Exif ვერსია', //cpg1.4
  'DateTimeOriginal' => 'რეალური თარიღი', //cpg1.4
  'DateTimedigitized' => 'ციფრული თარიღი', //cpg1.4
  'ComponentsConfiguration' => 'კომპონენტების კონფიგურაცია', //cpg1.4
  'CompressedBitsPerPixel' => 'შეკუმშვა ბიტი/პიქსელი', //cpg1.4
  'LightSource' => 'სინათლის წყარო', //cpg1.4
  'ISOSetting' => 'ISO პარამეტრი', //cpg1.4
  'ColorMode' => 'ფერის რეჟიმი', //cpg1.4
  'Quality' => 'ხარისხი', //cpg1.4
  'ImageSharpening' => 'გამკვეთრება', //cpg1.4
  'FocusMode' => 'ფოკუსის რეჟიმი', //cpg1.4
  'FlashSetting' => 'გაელვების პარამეტრები', //cpg1.4
  'ISOSelection' => 'ISO არჩევანი', //cpg1.4
  'ImageAdjustment' => 'ნახატის მორგება', //cpg1.4
  'Adapter' => 'გადამყვანი', //cpg1.4
  'ManualFocusDistance' => 'ხელოვნური ფოკუსური მანძილი', //cpg1.4
  'DigitalZoom' => 'ციფრული მასშტაბი', //cpg1.4
  'AFFocusPosition' => 'AF ფოკუსური მდგომარეობა', //cpg1.4
  'Saturation' => 'სიმსუყე', //cpg1.4
  'NoiseReduction' => 'ხმაურის ჩახშობა', //cpg1.4
  'FlashPixVersion' => 'გაელვების ვერსია', //cpg1.4
  'ExifImageWidth' => 'Exif ნახატის სიგანე', //cpg1.4
  'ExifImageHeight' => 'Exif ნახატის სიმაღლე', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif შუალედური წანაცვლება', //cpg1.4
  'FileSource' => 'ფაილის წყარო', //cpg1.4
  'SceneType' => 'სცენის ტიპი', //cpg1.4
  'CustomerRender' => 'ასახვის საკუთარი მეთოდი', //cpg1.4
  'ExposureMode' => 'ექსპოზიციის რეჟიმი', //cpg1.4
  'WhiteBalance' => 'თეთრის ბალანსი', //cpg1.4
  'DigitalZoomRatio' => 'ციფრული მასშტაბის ზომა', //cpg1.4
  'SceneCaptureMode' => 'სცენის აღბეჭდვის რეჟიმი', //cpg1.4
  'GainControl' => 'გაძლიერება', //cpg1.4
  'Contrast' => 'კონტრასტი', //cpg1.4
  'Sharpness' => 'სიმკვეთრე', //cpg1.4
  'ManageExifDisplay' => 'Exif ეკრანის მართვა', //cpg1.4
  'submit' => 'გაგზავნა', //cpg1.4
  'success' => 'ინფორმაცია წარმატებით განახლდა.', //cpg1.4
  'details' => 'დეტალები', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'დიახ',
  'edit_title' => 'ამ კომენტარის შეცვლა',
  'confirm_delete' => 'ნამდვილად გსურთ ამ კომენტარის წაშლა?', //js-alert
  'add_your_comment' => 'თქვენი კომენტარის დამატება',
  'name'=>'სახელი',
  'comment'=>'კომენტარი',
  'your_name' => 'სტუმარი',
  'report_comment_title' => 'ამ კომენტარის ადმინისთვის პატაკი', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'დაწკაპეთ ნახატი ამ სარკმლის დასახურად',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'ბარათის გაგზავნა',
  'invalid_email' => '<font color="red"><b>ყურადღება</b></font>: ელფოსტის მისამართი მცდარია:', //cpg1.4
  'ecard_title' => 'თქვენთვის ბარათია, გამომგზავნი: %s',
  'error_not_image' => 'ბარათის სახით მხოლოდ ნახატების გაგზავნა შეიძლება.',
  'view_ecard' => 'თუ ბარათი მცდარადაა ნაჩვენები, დაწკაპეთ ეს ბმა', //cpg1.4
  'view_ecard_plaintext' => 'ბარათის სანახავად მონიშნეთ და ჩასვით ეს მისამართი თქვენი ბრაუზერის მისამართების ზოლში:', //cpg1.4
  'view_more_pics' => 'სხვა ნახატების ნახვა !', //cpg1.4
  'send_success' => 'თქვენი ბარათი გაიგზავნა',
  'send_failed' => 'უკაცრავად, სერვერი თქვენს ბარათს ვერ აგზავნის...',
  'from' => 'ვისგან',
  'your_name' => 'თქვენი სახელი',
  'your_email' => 'თქვენი ელფოსტა',
  'to' => 'ვის',
  'rcpt_name' => 'ადრესატის სახელი',
  'rcpt_email' => 'ადრესატის ელფოსტა',
  'greetings' => 'მისალმება',
  'message' => 'წერილი',
  'ecards_footer' => 'გამგზავნი - %s, IP - %s, დრო - %s (გალერიის დრო)', //cpg1.4
  'preview' => 'ბარათის ესკიზი', //cpg1.4
  'preview_button' => 'ესკიზი', //cpg1.4
  'submit_button' => 'ბარათის გაგზავნა', //cpg1.4
  'preview_view_ecard' => 'შექმნის შემდეგ ეს ბარათის ალტერნატული ბმა გახდება. ესკიზებისთვის იგი არ გამოდგება.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'პატაკი ადმინთან', //cpg1.4
  'invalid_email' => '<b>გაფრთხილება</b> : მცდარი ელფოსტის მისამართი !', //cpg1.4
  'report_subject' => 'პატაკი - %s, გალერეა - %s', //cpg1.4
  'view_report' => 'ალტერნატული ბმა პატაკის მცდარი ჩვენებისას', //cpg1.4
  'view_report_plaintext' => 'პატაკის სანახავად დააკოპირეთ და ჩასვით ეს მისამართი თქვენი ბრაუზერის მისამართების ზოლში:', //cpg1.4
  'view_more_pics' => 'გალერეა', //cpg1.4
  'send_success' => 'თქვენი პატაკი გაიგზავნა', //cpg1.4
  'send_failed' => 'ვწუხვართ, მაგრამ სერვერი თქვენს პატაკს ვერ აგზავნის...', //cpg1.4
  'from' => 'ვისგან', //cpg1.4
  'your_name' => 'თქვენი სახელი', //cpg1.4
  'your_email' => 'თქვენი ელფოსტა', //cpg1.4
  'to' => 'ვის', //cpg1.4
  'administrator' => 'ადმინი/მოდერატორი', //cpg1.4
  'subject' => 'თემა', //cpg1.4
  'comment_field_name' => 'პატაკი კომენტარზე - "%s"', //cpg1.4
  'reason' => 'მიზეზი', //cpg1.4
  'message' => 'წერილი', //cpg1.4
  'report_footer' => 'გაგზავნა - %s, IP - %s, თარიღი %s (გალერეის დროით)', //cpg1.4
  'obscene' => 'უზრდელურია', //cpg1.4
  'offensive' => 'შეურაცხმყოფელია', //cpg1.4
  'misplaced' => 'უშინაარსოა/სხვა თემაა', //cpg1.4
  'missing' => 'ამოვარდნილია', //cpg1.4
  'issue' => 'შეცდომა/არ ჩანს', //cpg1.4
  'other' => 'სხვა', //cpg1.4
  'refers_to' => 'ფაილის პატაკი ეხება', //cpg1.4
  'reasons_list_heading' => 'პატაკის მიზეზ(ებ)ი:', //cpg1.4
  'no_reason_given' => 'მიზიზი არ მითითებულა', //cpg1.4
  'go_comment' => 'გადასვლა კომენტარზე', //cpg1.4
  'view_comment' => 'პატაკის სრული ჩვენება კომენტარებით', //cpg1.4
  'type_file' => 'ფაილი', //cpg1.4
  'type_comment' => 'კომენტარი', //cpg1.4
  'invalid_data' => 'ანგარიშის მონაცემები, რომლის ნახვაც გსურთ დაზიანებულია თქვენი ელფოსტის კლიენტის მიერ. გადაამოწმეთ ბმის სისრულე.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'ინფორმაცია',
  'album' => 'ალბომი',
  'title' => 'სათაური',
  'filename' => 'ფაილის სახელი', //cpg1.4
  'desc' => 'აღწერილობა',
  'keywords' => 'საკვანძო სიტყვები',
  'new_keyword' => 'ახალი საკვანძო სიტყვა', //cpg1.4
  'new_keywords' => 'ნაპოვნია ახალი საკვანძო სიტყვა', //cpg1.4
  'existing_keyword' => 'არსებული საკვანძო სიტყვა', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s კბ - ნახვა %s - ხმა %s',
  'approve' => 'ფაილის თანხმობა',
  'postpone_app' => 'თანხმობის გადადება',
  'del_pic' => 'ფაილის წაშლა',
  'del_all' => 'ყველა ფაილის წაშლა', //cpg1.4
  'read_exif' => 'EXIF მონაცემთა კვლავ წაკითხვა',
  'reset_view_count' => 'ჩვენებების მრიცხველის განულება',
  'reset_all_view_count' => 'ყველა მრიცხველის განულება', //cpg1.4
  'reset_votes' => 'ხმების განულება',
  'reset_all_votes' => 'ყველა ხმის განულება', //cpg1.4
  'del_comm' => 'კომენტარების წაშლა',
  'del_all_comm' => 'ყველა კომენტარის წაშლა', //cpg1.4
  'upl_approval' => 'ატვირთვის თანხმობა', //cpg1.4
  'edit_pics' => 'ფაილების რედაქტირება',
  'see_next' => 'შემდეგი ფაილების ნახვა',
  'see_prev' => 'წინა ფაილების ნახვა',
  'n_pic' => '%s ფაილი',
  'n_of_pic_to_disp' => 'საჩვენებელი ფაილების რაოდენობა',
  'apply' => 'ცვლილებების გამოყენება',
  'crop_title' => 'გალერეის ნახატების რედაქტორი',
  'preview' => 'ესკიზი',
  'save' => 'ნახატის შენახვა',
  'save_thumb' =>'შენახვა მინიატურად',
  'gallery_icon' => 'ჩემს პიქტოგრამად მითითება', //cpg1.4
  'sel_on_img' =>'არჩეული მთლიანად ნახატზე უნდა იყოს განთავსებული!', //js-alert
  'album_properties' =>'ალბომის პარამეტრები', //cpg1.4
  'parent_category' =>'ძირეული კატეგორია', //cpg1.4
  'thumbnail_view' =>'ჩვენება მინიატურებით', //cpg1.4
  'select_unselect' =>'ყველას მონიშვნა/მონიშვნის მოხსნა', //cpg1.4
  'file_exists' => "დანიშნულების ფაილი '%s' უკვე არსებობს.", //cpg1.4
  'rename_failed' => "გადარქმევა '%s' - '%s' ვერ მოხერხდა.", //cpg1.4
  'src_file_missing' => "პირველწყარო ფაილი '%s' უმართებლოა.", // cpg 1.4
  'mime_conv' => "ფაილის გარდაქმნა '%s' - '%s' ვერ მოხერხდა",//cpg1.4
  'forb_ext' => 'ფაილის აკრძალული ტიპი.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'ძირითადი შეკითხვები',
  'toc' => 'საძიებელი',
  'question' => 'შეკითხვა: ',
  'answer' => 'პასუხი: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'ძირითადი კითხვები',
  array('რატომაა რეგისტრაცია აუცილებელი?', 'ადმინისტრაციას შეუძლია მოითხოვოს ან არ მოითხოვოს რეგისტრაცია.  რეგისტრაცია მონაწილეს დამატებით უფლებებს ანიჭებს: ფაილების ატვირთვა, რჩეული ფაილების საკუთარი სია, გამოსახულებათ შეფასებისა და კომენტირების შესაძლებლობა და ა.შ.', 'allow_user_registration', '1'),
  array('როგორ შემიძლია დარეგისტრირება?', 'გადადით პუნქტზე &quot;რეგისტრაცია&quot; და მიუთითეთ აუცილებელი მონაცემები (სასურველია არაუცილებელი მონაცემების მითითებაც).<br />თუ ადმინისტრაცია რეგისტრაციის გააქტივებას ელფოსტით ითხოვს, თქვენს მითითებულ მისამართზე მიიღებთ წერილს თქვენი წევრობის გასააქტივებლად საჭირო ინსტრუქციებით.  საიტზე შესასვლელად თქვენი წევრობა უნდა გააქტივდეს.', 'allow_user_registration', '1'), //cpg1.4
  array('როგორ შევიდე სისტემაში?', 'გადადით პუნქტზე &quot;შესვლა&quot; დამიუთითეთ მონაწილის თქვენი სახელი და პაროლი და თუ გსურთ მონიშნეთ &quot;ავტომატური შესვლა &quot;, რათა მომავალში სისტემაში შესვლისას სახელისა და პაროლის მითითება ხელახლა აღარ დაგჭირდეთ.<br /><b>მნიშვნელოვანია: ამ საიტიდან ნაჭდევების მიღება ნებადართული უნდა გქონდეთ.  მომავალში ამ საიტის ნაჭდევები არ უნდა წაიშალოს რათა &quot;ავტომატური შესვლა&quot;.</b> კვლავ მუშაობდეს', 'offline', 0),
  array('რატომ ვერ შევდივარ სისტემაში?', 'გახსენით მოსული წერილი და დაწკაპეთ შესაბამისი ბმა?.  ეს ბმა თქვენს ანგარიშს ააქტივებს.  სხვა ტიპის პრობლემების შემთხვევაში დაუკავშირდით საიტის ადმინისტრაციას.', 'offline', 0),
  array('როგორ მოვიქცე პაროლის დაკარგვის შემთხვევაში?', 'თუ საიტზე არის ბმა(&quot;პაროლი დამავიწყდა&quot;) გამოიყენეთ იგი.  წინააღმდეგ შემთხვევაში ახალი პაროლის მისაღებად ადმინისტრატორს დაუკავშირდით.', 'offline', 0),
  //array('რა მოხდება თუ ელფოსტის მისამართი შევიცვალე?', 'უბრალოდ შედით საიტზე და შეცვლეთ თქვენი ელფოსტის მისამართი გვერდზე &quot;პროფილი&quot;', 'offline', 0),
  array('როგორ შემიძლია ნახატის დამატება &quot;რჩეულებში&quot;?', 'დაწკაპეთ გამოსახალება და შემდეგ ბმა &quot;ინფორმაცია ნახატზე&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="ინფორმაცია ნახატზე" />), გადაფურცლეთ ქვემოთ და დაწკაპეთ &quot;რჩეულებში დამატება&quot;.<br />ადმინისტრატორის მიერ &quot;ინფორმაცია ნახატზე&quot; შესაძლოა თავიდანვე ჩართული იყოს.<br /><b>მნიშვნელოვანია: ნაჭდევების მიღება დაშვებული უნდა იყოს და ვმულები ამ საიტიდან არ უნდა წაიშალოს.', 'offline', 0),
  array('როგორ შევაფასო ფაილი (რეიტინგი)?', 'დაწკაპეთ მინიატურა, გადადით ბოლოში და აირჩიეთ შეფასება.', 'offline', 0),
  array('როგორ დავამატო ფაილის კომენტარი?', 'დაწკაპეთ მინიატურა, გადადით ბოლოში და დაამატეთ კომენტარი.', 'offline', 0),
  array('როგორ ავტვირთო ფაილი?', 'გადადით პუნქტზე &quot;ატვირთვა;, და აირჩიეთ ალბომი ასატვირთად.  დაწკაპეთ &quot;ნუსხა&quot;, აირჩიეთ სასურველი ფაილი და დაწკაპეთ &quot;გახსნა&quot;  დაამატეთ სასურველი სათაური და აღწერილობა.  დაწკაპეთ &quot;გაგზავნა&quot;.<br /><br />გარდა ამისა, <b>Windows XP</b> მომხმარებლებს შეუძლია მრავალი ფაილის საკუთარ ალბომებში ერთდროული ატვირთვა XP Publishing მეგზურის გამოყენებით.<br />ინსტრუქციებისა და აუცილებელი ფაილის მისაღებად დაწკაპეთ <a href="xp_publish.php">ეს ბმა.</a>', 'allow_private_albums', 1),
  array('სად უნდა ავტვირთო გამოსახულება?', 'ფაილის ატვირთვა შეგიძლიათ ალბომებში &quot;ჩემი გალერეადან&quot;. ადმინისტრატორს შეუძლია ნება დაგრთოთ ატვირთოთ ფაილები ძირითადი გალერეის ერთ ან რამდენიმე ალბომში.', 'allow_private_albums', 0),
  array('რა ტიპისა და ზომის ფაილების ატვირთვაა შესაძლებელი?', 'შესაძლო ასატვირთი ფაილების ტიპსა და ზომას (jpg, png, და ა.შ.) წყვეტს ადმინისტრატორი.', 'offline', 0),
  array('როგორ შემიძლია ალბომის შექმნა, გადარქმევა ან წაშლა &quot;ჩემს გალერეაში&quot;?', 'უნდა გადახვიდეთ &quot;ადმინისტრირების რეჟიმში&quot;.<br />გადახვიდეთ გვერდზე &quot;ალბომების შექმნა/მოწესრიგება&quot; და დაწკაპეთ &quot;ახალი&quot;. შეცვალეთ &quot;ახალი ალბომი&quot; სასურველი სახელით.<br />ასევე შეგიძლიათ გადაარქვათ სახელი გალერეის სხვა ალბომებსაც.<br />დაწკაპეთ &quot;ცვლილებების გამოყენება&quot;.', 'allow_private_albums', 1),
  array('როგორ შემიძლია შევცვალო მონაწილეების მიერ ჩემი ალბომების ნახვის უფლებები?', 'უნდა გადახვიდეთ &quot;ადმინისტრირების რეჟიმში&quot;.<br />აირჩიოთ &quot;ჩემი ალბომების შეცვლა&quot;. პანელზე &quot;ალბომის განახლება&quot; მიუთითეთ სასურველი ალბომი.<br />აქ შეგიძლიათ ალბომის სათაურის, აღწერილობისა და მინიატურის შეცვლა. შეგიძლიათ შეზღუდოთ მონაწილეების მიერ დათვალიერების, კომენტარების დატოვებისა და შეფასების მიცემის უფლებები.<br />დაწკაპეთ &quot;ალბომის განახლება&quot;.', 'allow_private_albums', 1),
  array('როგორ შემიძლია სხვა მონაწილეთა გალერეების დათვალიერება?', 'გადადით &quot;ალბომების სიაში&quot; და მიუთითეთ &quot;მონაწილეთა გალერეები&quot;.', 'allow_private_albums', 1),
  array('რა არის ნაჭდევი?', 'ნაჭდევი გახლავთ მონაცემთა ჯგრო, რომელიც საიტიდან იგზავნება თქვენს კომპიუტერში შესანახად.<br />როგორც წესი, ეს ნაჭდევები მონაწილეეებს საიტის დატოვების შემდეგ მასზე დაბრუნებისას სახელისა და პაროლის მითითების გარეშე ავტომატური შესვლის შესაძლებლობას აძლევს.', 'offline', 0),
  array('სად შემიძლია ამ პროგრამის მოპოვება ჩემი საიტისთვის?', 'Coppermine - ეს უფასო მულტიმედია გალერეის პროგრამაა რომელიც GNU GPL ლიცენზიით ვრცელდება.  მისი მრავალი ფუნქცია სხვადასხვა პლატფორმაზე მუშაობს.  დამატებითი ინფორმაციის მისაღებად მოინახულეთ <a href="http://coppermine-gallery.net/">Coppermine პროგრამის სათაო გვერდი</a>.', 'offline', 0),

  'ნავიგაცია საიტში',
  array('რა არის &quot;ალბომების სია&quot;?', 'მისი დაწკაპვისას გამოჩნდება მიმდინარე კატეგორიის ყველა ალბომი თითოეული ალბომის შესაბამისი ბმით. თუ რომელიმე კატეგორიაში არ ხართ, ნაჩვენები იქნება მთელი გალერეა თითოეული კატეგორიის შესაბამისი ბმით. კატეგორიის ბმები შესაძლოა მინიატურებიც იყოს.', 'offline', 0),
  array('რა არის &quot;ჩემი გალერეა&quot;?', 'მონაწილეებს საკუთარი გალერეების შექმნისა და მათში ალბომების დამატების, წაშლის, შეცვლისა და მათში ფაილების ატვირთვის საშუალებას აძლევს.', 'allow_private_albums', 1), //cpg1.4
  array('რა სხვაობაა &quot;ადმინისტრირების რეჟიმსა&quot; და &quot;მონაწილის რეჟიმს&quot; შორის?', 'ადმინისტრირების რეჟიმში მონაწილეს შეუძლია საკუთარი გალერეების შეცვლა (ადმინისტრატორისგან უფლების შემთხვევაში სხვა მონაწილეების გალერეებისაც).', 'allow_private_albums', 1),
  array('რა არის &quot;ნახატის ატვირთვა&quot;?', 'მონაწილეს საშუალება ეძლევა ატვირთოს (ადმინისტრატორის მიერ განსაზღვრული ტიპისა და ზომის) ფაილი მონაწილის ან ადმინისტრატორის მიერ შერჩეულ გალერეაში.', 'offline', 0),
  array('რა არის &quot;ბოლო ატვირთვები&quot;?', 'მისი დაწკაპვისას გამოჩნდება საიტზე ატვირთული ბოლო ფაილები.', 'offline', 0),
  array('რა არის &quot;ბოლო კომენტარები&quot;?', 'მისი დაწკაპვისას გამოჩნდება ბოლო დამატებული კომენტარები და შესაბამისი ფაილები.', 'offline', 0),
  array('რა არის &quot;ყველაზე პოპულარული&quot;?', 'მისი დაწკაპვისას გამოჩნდება ყველა მონაწილის მიერ ყველაზე ხშირად ნანახი ფაილები (მიუხედავად იმის ახაზზე არიან თუ არა).', 'offline', 0),
  array('რა არის &quot;საუკეთესო რეიტინგი&quot;?', 'შესაძლებლობა გეძლევათ ნახოთ მონაწილეთა მიერ შეფასებული საუკეთესო რეიტინგის ფაილები.  ასევე საშუალო შეფასება/რეიტინგი.<br />მაგალითად, ხუთმა მონაწილემ შეაფასა <img src="images/rating4.gif" width="65" height="14" border="0" alt="" />: ფაილის შეფასება/რეიტინგი იქნება <img src="images/rating4.gif" width="65" height="14" border="0" alt="" />.<br />თუ ხუთმა მონაწილემ შეაფასა 1–დან 5–მდე (1,2,3,4,5), ფაილის ჯამური შეფასება/რეიტინგი იქნება <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />. 1+2+3+4+5=15 15/5=3<br />რეიტინგის მნიშვნელობა გამომდინარეობს აქედან <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (საუკეთესო) <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (ყველაზე ცუდი).', 'offline', 0),
  array('რა არის &quot;ჩემი რჩეულები&quot;?', 'მონაწილეს რჩეული ფაილების თქვენს კომპიუტერში გამოგზავნილი ნაჭდევების სახით შენახვის შესაძლებლობა აქვს.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'პაროლის შეხსენება',
  'err_already_logged_in' => 'თქვენ უკვე სისტემაში ხართ !',
  'enter_email' => 'მიუთითეთ თქვენი ელფოსტა', //cpg1.4
  'submit' => 'წინ',
  'illegal_session' => 'პაროლის შეხსენების სეანსი მცდარია ან ვადა გაუვიდა.', //cpg1.4
  'failed_sending_email' => 'პაროლის შეხსენების ელფოსტა ვერ იგზავნება!',
  'email_sent' => 'წერილი თქვენი სახელითა და ახალი პაროლით გამოიგზავნა - %s', //cpg1.4
  'verify_email_sent' => 'წერილი გაიგზავნა - %s. გთხოვთ გადაამოწმოთ ელფოსტა პროცესის დასასრულებლად.', //cpg1.4
  'err_unk_user' => 'მითითებული მონაწილე არ არსებობს!',
  'account_verify_subject' => '%s - ახალი პაროლის მოთხოვნა', //cpg1.4
  'account_verify_body' => 'თქვენ ახალი პაროლი მოითხოვეთ. თუ გაგრძელება თქვენთვის გამოგზავნილი ახლაი პაროლით გსურთ, მიჰყევით შემდეგ ბმას:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - თქვენი ახალი პაროლი', //cpg1.4
  'passwd_reset_body' => 'ეს თქვენს მიერ მოთხოვნილი ახალი პაროლია:
სახელი: %s
პაროლი: %s
დაწკაპეთ %s შესასვლელად.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'ჯგუფის სახელი',
  'permissions' => 'უფლებები', //cpg1.4
  'public_albums' => 'საზოგადო ალბომების ატვირთვა', //cpg1.4
  'personal_gallery' => 'პირადი გალერეა', //cpg1.4
  'upload_method' => 'ატვირთვის მეთოდი', //cpg1.4
  'disk_quota' => 'დისკის ქვოტა',
  'rating' => 'შეფასება', //cpg1.4
  'ecards' => 'ბარათები', //cpg1.4
  'comments' => 'კომენტარები', //cpg1.4
  'allowed' => 'ნებადართულია', //cpg1.4
  'approval' => 'დამტკიცება', //cpg1.4
  'boxes_number' => 'უჯრათა რაოდ.', //cpg1.4
  'variable' => 'ცვლადი', //cpg1.4
  'fixed' => 'ფიქსირებული', //cpg1.4
  'apply' => 'ცვლილებების გამოყენება',
  'create_new_group' => 'ახალი ჯგუფის შექმნა',
  'del_groups' => 'შერჩეული ჯგუფების წაშლა',
  'confirm_del' => 'ყურადღება, ჯგუფის წაშლისას ამ ჯგუფის წევრები ავტომატურად გაბადავლენ ჯგუფში \'რეგისტრირებული\'!\n\nგნებავთ გაგრძელე?', //js-alert
  'title' => 'ჯგუფების მართვა',
  'num_file_upload' => 'ფაილის ატვირთვის უჯრები', //cpg1.4
  'num_URI_upload' => 'URI ატვირთვის უჯრები', //cpg1.4
  'reset_to_default' => 'ნაგულისხმები სახელის აღდგენა (%s) - რეკომენდებულია!', //cpg1.4
  'error_group_empty' => 'ჯგუფის ცხრილი ცარიელია !<br /><br />შეიქმნა საწყისი ჯგუფი, გთხოვდ ეს გვერდი განაახლოთ', //cpg1.4
  'explain_greyed_out_title' => 'რატომაა ეს მწკრივი ნაცრისფერი?', //cpg1.4
  'explain_guests_greyed_out_text' => 'ამ ჯგუფის პარამეტრებს ვერ შეცვლით, რადგან კონფიგურაციის გვერდზე პარამეტრისთვის &quot; სტუმრების (ან ანონიმურების) დაშვება&quot; მიუთითეთ &quot;არა&quot;. ვერცერთი სტუმარი (%s ჯგუფის წევრი) შესვლის გარდა ვერაფერს შეძლებს; შესაბამისად, ჯგუფის პარამეტრები მათ არ ეხებათ.', //cpg1.4
  'explain_banned_greyed_out_text' => '%s ჯგუფის პარამეტრებს ვერ შეცვლით, რადგან მათ წევრებს ისედაც არაფრის უფლება აქვთ.', //cpg1.4
  'group_assigned_album' => 'მინიჭებული ალბომ(ებ)ი', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'მოგესალმებით!',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'ნამდვილად გსურთ ამ ალბომის წაშლა? \\nყველა ფაილი და კომენტარი ასევე წაიშლება.', //js-alert
  'delete' => 'წაშლა',
  'modify' => 'პარამეტრები',
  'edit_pics' => 'ფაილების რედაქტირება',
);

$lang_list_categories = array(
  'home' => 'თავფურცელი',
  'stat1' => '<b>[pictures]</b> ფაილი <b>[albums]</b> ალბომში და <b>[cat]</b> კატეგორიაში <b>[comments]</b> კომენტარით გახსნილია <b>[views]</b>-ჯერ',
  'stat2' => '<b>[pictures]</b> ფაილი <b>[albums]</b> ალბომში გახსნილია <b>[views]</b>-ჯერ',
  'xx_s_gallery' => '%s - პირადი ალბომი',
  'stat3' => '<b>[pictures]</b> ფაილი <b>[albums]</b> ალბომში <b>[comments]</b> კომენტარით გახსნილია <b>[views]</b>-ჯერ',
);

$lang_list_users = array(
  'user_list' => 'მონაწილეთა სია',
  'no_user_gal' => 'მონაწილეთა გალერეა არ არის',
  'n_albums' => 'ალბომი: %s',
  'n_pics' => 'ფაილი: %s',
);

$lang_list_albums = array(
  'n_pictures' => 'ფაილი: %s',
  'last_added' => '. ბოლო: %s',
  'n_link_pictures' => 'ბმის ფაილები: %s', //cpg1.4
  'total_pictures' => 'ფაილი სულ: %s', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'საკვანძო სიტყვების მართვა', //cpg1.4
  'edit' => 'რედაქტირება', //cpg1.4
  'delete' => 'წაშლა', //cpg1.4
  'search' => 'ძიება', //cpg1.4
  'keyword_test_search' => 'ძიება ახალ სარკმელში - %s', //cpg1.4
  'keyword_del' => 'საკვანძო სიტყვის წაშლა - %s', //cpg1.4
  'confirm_delete' => 'ნამდვილად გსურთ %s საკვანძო სიტყვის მთელი გალერეიდან წაშლა?', //cpg1.4  // js-alert
  'change_keyword' => 'საკვანძო სიტყვის შეცვლა', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'შესვლა',
  'enter_login_pswd' => 'მიუთითეთ მონაწილის სახელი და პაროლი',
  'username' => 'სახელი',
  'password' => 'პაროლი',
  'remember_me' => 'ავტომატური შესვლა',
  'welcome' => 'მოგესალმებით %s',
  'err_login' => '*** სისტემაში ვერ შევდივარ.  სცადეთ კვლავ ***',
  'err_already_logged_in' => 'თქვენ უკვე სისტემაშI ხართ!',
  'forgot_password_link' => 'პაროლი დაგავიწყდათ?',
  'cookie_warning' => 'თქვენი ბრაუზერის გაფრთხილება არ მიიღოს სკრიპტის ნაჭდევები', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'გამოსვლა',
  'bye' => 'ნახვამდის %s',
  'err_not_loged_in' => 'სისტემაში არ შესულხართ!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'დახურვა', //cpg1.4
  'submit' => 'დიახ', //cpg1.4
  'up' => 'ერთი დონით ზემოთ', //cpg1.4
  'current_path' => 'მიმდინარე გეზი', //cpg1.4
  'select_directory' => 'გთხოვთ დასტა აირჩიოთ', //cpg1.4
  'click_to_close' => 'დაწკაპეთ ნახატი ამ სარკმლის დასახურად',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'ალბომის განახლება -> %s',
  'general_settings' => 'ძირითადი პარამეტრები',
  'alb_title' => 'ალბომის სათაური',
  'alb_cat' => 'ალბომის კატეგორია',
  'alb_desc' => 'ალბომის აღწერილობა',
  'alb_keyword' => 'ალბომის საკვანძო სიტყვა', //cpg1.4
  'alb_thumb' => 'ალბომის მინიატურა',
  'alb_perm' => 'ამ ალბომის წვდომის უფლებები',
  'can_view' => 'ალბომის დათვალიერება შეუძლიათ',
  'can_upload' => 'მნახველებს შეუძლიათ ფაილების ატვირთვა',
  'can_post_comments' => 'მნახველებს შეუძლიათ კომენტარების გაკეთება',
  'can_rate' => 'მნახველებს შეუძლიათ შეფასება',
  'user_gal' => 'მონაწილის გალერეა',
  'no_cat' => '* კატეგორიის გარეშე *',
  'alb_empty' => 'ალბომი ცარიელია',
  'last_uploaded' => 'ბოლო ჩატვირთული ფაილი',
  'public_alb' => 'ყველა (საზოგადო ალბომი)',
  'me_only' => 'მხოლოდ მე',
  'owner_only' => 'მხოლოდ ალბომის მფლობელი (%s)',
  'groupp_only' => '\'%s\' ჯგუფის წევრი',
  'err_no_alb_to_modify' => 'მონაცემთა ბაზაში არცერთი ალბომის შეცვლა არ შეგიძლიათ.',
  'update' => 'ალბომის განახლება',
  'reset_album' => 'ალბომის განულება', //cpg1.4
  'reset_views' => 'ნახვათა მრიცხველის განულება - &quot;0&quot; ალბომში %s', //cpg1.4
  'reset_rating' => 'ყველა ფაილის შეფასების განულება - %s', //cpg1.4
  'delete_comments' => 'ყველა კომენტარის წაშლა - %s', //cpg1.4
  'delete_files' => 'ყველა ფაილის %sშეუქცევადად%s წაშლა - %s', //cpg1.4
  'views' => 'ნახვა', //cpg1.4
  'votes' => 'ხმა', //cpg1.4
  'comments' => 'კომენტარი', //cpg1.4
  'files' => 'ფაილი', //cpg1.4
  'submit_reset' => 'ცვლილებების გაგზავნა', //cpg1.4
  'reset_views_confirm' => 'დარწმუნებული ვარ', //cpg1.4
  'notice1' => '(*) დამოკიდებულია %sჯგუფების%s პარამეტრებზე',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'ალბომის პაროლი', //cpg1.4
  'alb_password_hint' => 'ალბომის პაროლის მინიშნება', //cpg1.4
  'edit_files' =>'ფაილების რედაქტირება', //cpg1.4
  'parent_category' =>'ძირეული კატეგორია', //cpg1.4
  'thumbnail_view' =>'ჩვენება მინიატურებით', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP მონაცემები',
  'explanation' => 'ეს გვერდი შექმნილია PHP ფუნქციით <a href="http://www.php.net/phpinfo">phpinfo()</a>, რომელიც გალერეაშია ჩადგმული (ჩასწორება მარჯვენა მხრიდან).',
  'no_link' => 'თქვენი PHP მონაცემების სხვებისთვის ჩვენება შესაძლოა უსაფრთხო არ იყოს, ამიტომ ეს გვერდი მხოლოდ მაშინ გამოჩნდება თუ სისტემაში შესული ხართ როგორც ადმინი. ამ გვერდის ბმის სხვებისთვის გაგზავნა არ შეიძლება.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'ნახატების მმართველი', //cpg1.4
  'select_album' => 'ალბომის არჩევა', //cpg1.4
  'delete' => 'წაშლა', //cpg1.4
  'confirm_delete1' => 'ნამდვილად გსურთ ამ ნახატის წაშლა ?', //cpg1.4
  'confirm_delete2' => '\nნახატი შეუქცევადად წაიშლება.', //cpg1.4
  'apply_modifs' => 'ცვლილებების გამოყენება', //cpg1.4
  'confirm_modifs' => 'ცვლილებების დასტური', //cpg1.4
  'pic_need_name' => 'ნახატს სახელი ესაჭიროება !', //cpg1.4
  'no_change' => 'თქვენ არაფერი შეგიცვლიათ !', //cpg1.4
  'no_album' => '* ალბომი არაა *', //cpg1.4
  'explanation_header' => 'დალაგების საკუთარი რიგი, რომლის მითითებაც ამ გვერდზე შეგიძლიათ გაითვალისწინება მხოლოდ მაშინ თუ', //cpg1.4
  'explanation1' => 'ადმინი "ფაილების სორტირების ნაგულისხმები რიგი" კონფიგურაციაში მიუთითებს "პოზიცია [აღმავალი]" ან "პოზიცია [დაღმავალი]" (გლობალური პარამეტრი ყველა მონაწილისთვის, რომელთაც სორტირების სხვა ინდივიდუალური წესი არ შეურჩევიათ)', //cpg1.4
  'explanation2' => 'მონაწილე მიუთითებს "პოზიცია [აღმავალი]" ან "პოზიცია [დაღმავალი]" მინიატურების გვერდზე (მონაწილის პარამეტრი)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'ნამდვილად გსურთ ამ მოდულის ამოღება', //cpg1.4
  'confirm_delete' => 'ნამდვილად გსურთ ამ მოდულის წაშლა', //cpg1.4
  'pmgr' => 'მოდულების მმართველი', //cpg1.4
  'name' => 'სახელი', //cpg1.4
  'author' => 'ავტორი', //cpg1.4
  'desc' => 'აღწერილობა', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'ჩადგმული მოდულები', //cpg1.4
  'n_plugins' => 'არჩადგმული მოდულები', //cpg1.4
  'none_installed' => 'არაფერია ჩადგმული', //cpg1.4
  'operation' => 'ოპერაცია', //cpg1.4
  'not_plugin_package' => 'ატვირთული ფაილი მოდული არ გახლავთ.', //cpg1.4
  'copy_error' => 'შეცდომა პაკეტის მოდულების ტასტაში კოპირებისას.', //cpg1.4
  'upload' => 'ატვირთვა', //cpg1.4
  'configure_plugin' => 'მოდულის გამართვა', //cpg1.4
  'cleanup_plugin' => 'მოდულის გასუფთავება', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'უკაცრავად, მაგრამ ეს ფაილი უკვე შეაფასეთ',
  'rate_ok' => 'თქვენი შეფასება გათვალისწინებულია',
  'forbidden' => 'თქვენ გეკრძალებათ საკუთარი ფაილების შეფასება.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
მიუხედავად იმისა, რომ {SITE_NAME} საიტის ადმინისტრატორები ცდილობენ რაც შეიძლება სწრაფად ამოიღონ ან შეცვალონ უცენზურო და მიუღებელი ინფორმაცია, ყველა გამოხმაურების თვალმიდევნება შეუძლებელია.  ამგვარად, უნდა აღიაროთ და დაგვეთანხმოთ, რომ ყველა გამოგზავნილი შეტყობინება ასახავს მათი ავტორების და არა საიტის ადმინისტრაციის აზრს (გარდა ადმინისტრაციის მიერ განთავსებული შეტყობინებებისა) და ადმინისტრაცია პასუხს ვერ აგებს მათ შინაარსზე.<br />
<br />
თქვენ ეთანხმებით, რომ არ განათავსოთ შეურაცხმყოფელი, მუქარის, ცილისმწამებლური, პორნოგრაფიული და სხვა მსგავსი ტიპის მასალები.  ასევე ეროვნული შუღლის გაღვივების და კანონსაწინააღმდეგო მოწოდებები.  ასევე ეთანხმებით, რომ {SITE_NAME} საიტის სუპერვიზორს, ადმინისტრაციასა და მოდერატორებს თქვენი მსგავსი მასალის ამოშლის ან რედაქტირების უფლება აქვთ.  როგორც მონაწილე თქვენ ეთანხმებით, რომ თქვენი მიერ განთავსებული მონაცემები მონაცემთა ბაზაში შეინახება.  თუმცა ეს მონაცემები ვერ მიეწოდება მესამე პირებს თქვენი თანხმობის გარეშე.  ამავე დროს, ადმინისტრაცია ვერ იქნება პასუხისმგებელი ამ მასალების გახმაურებისა ჰაკერობის შემთხვევაში.<br />
<br />
ეს საიტი თქვენს კომპიუტერში ინფორმაციის შესანახად ნაჭდევებს იყენებს.  ეს ნაჭდევები არ შეიცვს თქვენს მიერ შეტანილ ინფორმაციას და მხოლოდ საიტის უკეთ მუშაობას ემსახურება.  თქვენი ელფოსტა გამოიყენება რეგისტრაციის გასააქტივებლად და დავიწყების შემთხვევაში ახალი პაროლის გამოსაგზავნად.<br />
<br />
დაწკაპვით 'ვეთანხმები', თქვენ გამოხატავთ თანხმობას ამ პირობებზე.<br />
EOT;

$lang_register_php = array(
  'page_title' => 'მონაწილეების რეგისტრაცია',
  'term_cond' => 'რეგისტრაციის პირობები',
  'i_agree' => 'ვეთანხმები',
  'submit' => 'რეგისტრაციის თანხმობა',
  'err_user_exists' => 'თქვენ მიერ არჩეული მონაწილის სახელი (თიკუნი)უკვე გამოიყენება.  გთხოვთ აირჩიოთ სხვა',
  'err_password_mismatch' => 'პაროლები არ ემთხვევა, გთხოვთ კიდევ ერთხელ მიუთითოთ.',
  'err_uname_short' => 'მონაწილის სახელი (თიკუნი) არანაკლებ ორ სიმბოლოს უნდა შეიცავდეს',
  'err_password_short' => 'პაროლი არანაკლებ ორ სიმბოლოს უნდა შეიცავდეს',
  'err_uname_pass_diff' => 'მონაწილის სახელი (თიკუნი) და პაროლი უნდა განსხვავდებოდეს',
  'err_invalid_email' => 'ელფოსტის მისამართის მცდარი ფორმატი',
  'err_duplicate_email' => 'ელფოსტის ეს მისამართი სხვა მონაწილის მიერ გამოიყენება',
  'enter_info' => 'რეგისტრაციის მონაცემები',
  'required_info' => 'შესავსებად აუცილებელი ველები',
  'optional_info' => 'შესავსებად არააუცილებელი ველები',
  'username' => 'სახელი',
  'password' => 'პაროლი',
  'password_again' => 'პაროლის გადამოწმება',
  'email' => 'ელფოსტა',
  'location' => 'ადგილმდებარეობა',
  'interests' => 'ინტერესები',
  'website' => 'ვებგვერდი',
  'occupation' => 'თანამდებობა',
  'error' => 'შეცდომა',
  'confirm_email_subject' => '%s - რეგისტრაციის დასტური',
  'information' => 'ინფორმაცია',
  'failed_sending_email' => 'რეგისტრაციის დასტურის ელფოსტა ვერ იგზავნება!',
  'thank_you' => 'გმადლობთ რეგისტრაციისთვის.<br /><br />წერილი ინფორმაციით თუ როგორ გაააქტივოთ ანგარიში გამოიგზავნა თქვენს მიერ მითითებულ ელფოსტის მისამართზე.',
  'acct_created' => 'თქვენი ანგარიში შეიქმნა.  სისტემაში შესვლა შეგიძლიათ სახელისა და პაროლის ჩამოყენებით.',
  'acct_active' => 'თქვენი ანგარიში გააქტივდა.  სისტემაში შესვლა შეგიძლიათ სახელისა და პაროლის ჩამოყენებით.',
  'acct_already_act' => 'ანგარიში უკვე გააქტივებულია!', //cpg1.4
  'acct_act_failed' => 'ეს ანგარიში ვერ გააქტივდება !',
  'err_unk_user' => 'მითითებული მონაწილე არ არსებობს!',
  'x_s_profile' => '%s მონაწილის პროფილი',
  'group' => 'ჯგუფი',
  'reg_date' => 'დარეგისტრირდა',
  'disk_usage' => 'გამოყენებული ადგილი დისკზე',
  'change_pass' => 'პაროლის შეცვლა',
  'current_pass' => 'მიმდინარე პაროლი',
  'new_pass' => 'ახალი პაროლი',
  'new_pass_again' => 'ახალი პაროლის დასტური',
  'err_curr_pass' => 'მიმდინარე პაროლი მცდარია',
  'apply_modif' => 'ცვლილებების გამოყენება',
  'change_pass' => 'ჩემი პაროლის შეცვლა',
  'update_success' => 'თქვენი პროფილი განახლდა',
  'pass_chg_success' => 'თქვენი პაროლი შეიცვალა',
  'pass_chg_error' => 'თქვენი პაროლი არ შეცვლილა',
  'notify_admin_email_subject' => '%s - რეგისტრაციის შეტყობინება',
  'last_uploads' => 'ბოლო ატვირთული ფაილი.<br />დაწკაპეთ ყველა ატვირთვის სანახავად -', //cpg1.4
  'last_comments' => 'ბოლო კომენტარი.<br />დაწკაპეთ ყველა კომენტარის სანახავად -', //cpg1.4
  'notify_admin_email_body' => 'ახალი მონაწილე "%s" დარეგისტრირდა ჩვენს გალერეაში',
  'pic_count' => 'ფაილი აიტვირთა', //cpg1.4
  'notify_admin_request_email_subject' => '%s - რეგისტრაციის მოთხოვნა', //cpg1.4
  'thank_you_admin_activation' => 'გმადლობთ.<br /><br />ანგარისშის გააქტივების თქვენი მოთხოვნა ადმინს გადაეგზავნა. დაელოდეთ დამტკიცების წერილს.', //cpg1.4
  'acct_active_admin_activation' => 'ანგარიში გააქტივდა და მონაწილეს წერილი გაეგზავნა.', //cpg1.4
  'notify_admin_email_body' => 'თქვენს გალერეაში დარეგისტრირდა ახალი მონაწილე "%s"',
);

$lang_register_confirm_email = <<<EOT
გმადლობთ რეგისტრაციისთვის - {SITE_NAME}

იმისათვის, რომ გააქტივოთ თქვენი ანგარიში "{USER_NAME}" სახელით, მიჰყევით ქვედა ბმას ან დააკოპირეთ და ჩასვით იგი თქვენს ბრაუზერში.

<a href="{ACT_LINK}">{ACT_LINK}</a>

პატივისცემით,

{SITE_NAME} გუნდი

EOT;

$lang_register_approve_email = <<<EOT
ახალი მონაწილე "{USER_NAME}" დარეგისტრირდა ჩვენს გალერეაში.

იმისათვის, რომ გააქტივოთ თქვენი ანგარიში "{USER_NAME}" სახელით, მიჰყევით ქვედა ბმას ან დააკოპირეთ და ჩასვით იგი თქვენს ბრაუზერში.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
თქვენი ანგარიში დამტკიცდა და გააქტივდა.

სისტემაში <a href="{SITE_LINK}">{SITE_LINK}</a> შესვლა შეგიძლიათ სახელით - "{USER_NAME}"


პატივისცემით,

{SITE_NAME} გუნდი

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'კომენტარის დათვალიერება',
  'no_comment' => 'კომენტარი არ არსებობს',
  'n_comm_del' => 'წაიშალა %s კომენტარი',
  'n_comm_disp' => 'კომენტარების რაოდენობა საჩვენებლად',
  'see_prev' => 'წინას ნახვა',
  'see_next' => 'შემდეგის ნახვა',
  'del_comm' => 'მონიშნული კომენტარების წაშლა',
  'user_name' => 'სახელი', //cpg1.4
  'date' => 'თარიღი', //cpg1.4
  'comment' => 'კომენტარი', //cpg1.4
  'file' => 'ფაილი', //cpg1.4
  'name_a' => 'სახელი [აღმავალი]', //cpg1.4
  'name_d' => 'სახელი [დაღმავალი]', //cpg1.4
  'date_a' => 'თარიღი [აღმავალი]', //cpg1.4
  'date_d' => 'თარიღი [დაღმავალი]', //cpg1.4
  'comment_a' => 'კომენტარი [აღმავალი]', //cpg1.4
  'comment_d' => 'კომენტარი [დაღმავალი]', //cpg1.4
  'file_a' => 'ფაილი [აღმავალი]', //cpg1.4
  'file_d' => 'ფაილი [დაღმავალი]', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'ფაილთა კოლექციის ძიება', //cpg1.4
  'submit_search' => 'ძიება', //cpg1.4
  'keyword_list_title' => 'საკვანძო სიტყვათა სია', //cpg1.4
  'keyword_msg' => 'ჩამონათვალი ყველას არ მოიცავს. იგი არ შეიცავს სიტყვებს ფოტოების სათაურებისა და აღწერილობებიდან. სცადეთ ძიება სრულ ტექსტში.',  //cpg1.4
  'edit_keywords' => 'საკვანძო სიტყვათა რედაქტირება', //cpg1.4
  'search in' => 'ძიება აქ:', //cpg1.4
  'ip_address' => 'IP მისამართი', //cpg1.4
  'fields' => 'ძიება', //cpg1.4
  'age' => 'ასაკი', //cpg1.4
  'newer_than' => 'უფრო ახალი ვიდრე', //cpg1.4
  'older_than' => 'უფრო ძველი ვიდრე', //cpg1.4
  'days' => 'დღე', //cpg1.4
  'all_words' => 'ყველა სიტყვა (AND)', //cpg1.4
  'any_words' => 'რომელიმე სიტყვა (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'სათაური', //cpg1.4
  'caption' => 'წარწერა', //cpg1.4
  'keywords' => 'საკვანძო სიტყვები', //cpg1.4
  'owner_name' => 'მფლობელი', //cpg1.4
  'filename' => 'ფაილის სახელი', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'ახალი ფაილების ძიება',
  'select_dir' => 'დასტის მითითება',
  'select_dir_msg' => 'ეს ფუნქცია FTP სერვერზე ატვირთული რამდენი ფაილის ერთდროულად დამატების საშუალებას გაძლევთ.<br /><br />მიუთითეთ ატვირთული ფაილების დასტა.', //cpg1.4
  'no_pic_to_add' => 'დასამატებელი ფაილები არ არის',
  'need_one_album' => 'ამ ფუნქციის გამოსაყენებლად გესაჭიროებათ ერთი ალბომი მაინც',
  'warning' => 'გაფრთხილება',
  'change_perm' => 'სკრიპტი ვერ წერს ამ დასტაში, ფაილების დასამატებლად უნდა მიუთითოთ უფლებები 755 ან 777 !',
  'target_album' => '<b>ფაილების აქედან &quot;</b>%s<b>&quot; აქ </b>%s გადმოტანა',
  'folder' => 'დასტა',
  'image' => 'ფაილი',
  'album' => 'ალბომი',
  'result' => 'შედეგი',
  'dir_ro' => 'არაჩაწერადია. ',
  'dir_cant_read' => 'არაკითხვადია. ',
  'insert' => 'ფაილების გალერეაში დამატება',
  'list_new_pic' => 'ახალი ფაილების სია',
  'insert_selected' => 'შერჩეული ფაილების დამატება',
  'no_pic_found' => 'ახალი ფაილები ვერ მოიძებნა',
  'be_patient' => 'გთხოვთ მოითმინოთ, ფაილების დასამატებლად სკრიპტს დრო ესაჭიროება',
  'no_album' => 'ალბომი არ მითითებულა',
  'result_icon' => 'დაწკაპეთ დეტალებისთვის ან გასაახლებლად',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : ნიშნავს, რომ ფაილი წარმატებით დაემატა'.
                          '<li><b>DP</b> : ნიშნავს, რომ ფაილი ასლია და მონაცემთა ბაზაში უკვე არსებობს'.
                          '<li><b>PB</b> : ნიშნავს, რომ ფაილი ვერ დაემატება.  გადაამოწმეთ თქვენი კონფიგურაცია და დასტებში დაშვების უფლებები'.
                          '<li><b>NA</b> : ნიშნავს, რომ ფაილების ალბომი არ მიგითითებიათ, დაწკაპეთ \'<a href="javascript:history.back(1)">უკან</a>\' მიუთითეთ ალბომი. თუ ალბომი არ გაქვთ ჯერ <a href="albmgr.php">შექმენით ერთი მაინც</a></li>'.
                          '<li>თუ OK, DP, PB \'ნიშნები\' დაწკაპეთ დაზიანებული ფაილი PHP–ის შეცდომების სანახავად'.
                          '<li>თვენი ბროუზერში დროის ზღვრის გადაცილების შემთხვევაში დაწკაპეთ განახლება'.
                          '</ul>',
  'select_album' => 'ალბომის არჩევა',
  'check_all' => 'ყველას მონიშვნა',
  'uncheck_all' => 'მონიშვნის მოხსნა',
  'no_folders' => 'ჯერჯერობით "ალბომების" დასტაში სხვა დასტები არაა. გადაამოწმეთ, რომ დასტაში "ალბომები" შექმნილია ერთი საკუთარი დასტა მაინც და ftp-ს საშუალებით ატვირთეთ ფაილები მასში. თქვენ არ უნდ ატვირთოთ "userpics" ან "edit" დასტებში - შიდა მოხმარების სარეზერვო http ატვირთვებისთვის.', //cpg1.4
   'albums_no_category' => 'ალბომები კატეგორიის გარეშე', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* პირადი ალბომები', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'ჩვენება ნუსხის სახით (რეკომენდებულია)', //cpg1.4
  'edit_pics' => 'ფაილების რედაქტირება', //cpg1.4
  'edit_properties' => 'ალბომის პარამეტრები', //cpg1.4
  'view_thumbs' => 'ჩვენება მინიატურებით', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'ამ სვეტის ჩვენება/დამალვა', //cpg1.4
  'vote' => 'ხმის მიცემის დეტალები', //cpg1.4
  'hits' => 'ნახვის დეტალები', //cpg1.4
  'stats' => 'ხმის მიცემის სტატისტიკა', //cpg1.4
  'sdate' => 'თარიღი', //cpg1.4
  'rating' => 'შეფასება', //cpg1.4
  'search_phrase' => 'ფრაზის ძიება', //cpg1.4
  'referer' => 'დამოწმება', //cpg1.4
  'browser' => 'ბრაუზერი', //cpg1.4
  'os' => 'საოპერაციო სისტემა', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'სორტირება - %s', //cpg1.4
  'ascending' => 'აღმავალი', //cpg1.4
  'descending' => 'დაღმავალი', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'დახურვა', //cpg1.4
  'hide_internal_referers' => 'შიდა დამოწმებების დამალვა', //cpg1.4
  'date_display' => 'თარიღის ეკრანი', //cpg1.4
  'submit' => 'გაგზავნა / გამოყენება', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'ფაილის ატვირთვა',
  'custom_title' => 'მოთხოვნის მორგებული ფორმა',
  'cust_instr_1' => 'შეგიძლიათ მიუთითოთ ატვირთვის რამდენიმე ველი.<br />იმავე დროს, ქვემოთ მითითებულ ზღვარზე მეტს ვერ გამოიყენებთ.',
  'cust_instr_2' => 'ველების რაოდენობის მოთხოვნა',
  'cust_instr_3' => 'ფაილების ატვირთვის ველები: %s',
  'cust_instr_4' => 'ბმების ატვირთვის ველები: %s',
  'cust_instr_5' => 'ბმის ატვირთვა:',
  'cust_instr_6' => 'ფაილის ატვირთვა:',
  'cust_instr_7' => 'გთხოვთ მიუთითოთ ამ დროისთვის თქვენთვის სასურველი ატვირთვის ველების რაოდენობა.  სემდეგ დაწკაოეთ \'გაგრძელება\'. ',
  'reg_instr_1' => 'უმართებლო ქმედება ფორმის შესაქმნელად.',
  'reg_instr_2' => 'ახალ შეგიძლიათ თქვენი ფაილების ატვირთვა ქვემოთმოტანილი ველების საშუალებით.  თქვენი კლიენტიდან სერვერზე ასატვირთი თითოეული ფაილის მოცულობა არ უნდა აღემატებოდეს %s კბ–ს. ZIP ფაილები რომლებიც აიტვირთება სექციებში \'ფაილის ატვირთვა\' და \'ბმის ატვირთვა\' დაარქივებული დარჩება.',
  'reg_instr_3' => 'თუ ZIP ფაილის ან სხვა არქვივის ატვირთვის შემდეგ გახსნა გსურთ, უნდა გამოიყენოთ შესაბამისი ველი \'ZIP ატვირთვები გასახსნელად\' არეში.',
  'reg_instr_4' => 'როცა ბმების ატვირთვას იყენებთ, ფაილის გეზი გთხოვთ ამ სახით მიუთითოთ: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'ფორმის შევსების შემდეგ გთხოვთ დაწკაპოთ \'გაგრძელება\'.',
  'reg_instr_6' => 'ZIP ატვირთვები გასახსნელად:',
  'reg_instr_7' => 'ფაილის ატვირთვა:',
  'reg_instr_8' => 'ბმის ატვირთვა:',
  'error_report' => 'შეცდომების ოქმი',
  'error_instr' => 'შეცდომებია შემდეგი ატვირთვებისას:',
  'file_name_url' => 'ფაილის სახელი/ბმა',
  'error_message' => 'შეცდომის შეტყობინება',
  'no_post' => 'ფაილი POST–იდან არ ატვირთულა.',
  'forb_ext' => 'ფაილის დაუშვებელი ტიპი.',
  'exc_php_ini' => 'ფაილის დაშვებული მაქსიმალური მოცულობა php.ini–ში გადამეტებულია.',
  'exc_file_size' => 'ფაილის დაშვებული მაქსიმალური მოცულობა გალერეაში გადამეტებულია.',
  'partial_upload' => 'არასრული ატვირთვა.',
  'no_upload' => 'ატვირთვა ვერ მოხერხდა.',
  'unknown_code' => 'ატვირთვის უცნობი PHP შეცდომის კოდი.',
  'no_temp_name' => 'ვერ აიტვირთა - არაა დროებითი სახელი.',
  'no_file_size' => 'არ შეიცავს მონაცემებს/დაზიანებულია',
  'impossible' => 'ვერ გადაიტანება.',
  'not_image' => 'ნახატი არაა/დაზიანებულია',
  'not_GD' => 'არა GD ტიპი.',
  'pixel_allowance' => 'ატვირთული ნახატის სიმაღლე ან სიგანე გალერეის კონფიგურაციაში მითითებულ პარამეტრებს აჭარბებს.', //cpg1.4
  'incorrect_prefix' => 'ბმის მცდარი პრეფიქსი',
  'could_not_open_URI' => 'ვერ ვხსნი მისამართს.',
  'unsafe_URI' => 'უსაფრთხოება ვერ მოწმდება.',
  'meta_data_failure' => 'მეტამონაცემთა შეცდომა',
  'http_401' => '401 სისტემის გარე',
  'http_402' => '402 საჭიროა გადახდა',
  'http_403' => '403 აკრძალულია',
  'http_404' => '404 ვერ მოიძებნა',
  'http_500' => '500 სერვერის შიდა შეცდომა',
  'http_503' => '503 მომსახურება ჯერ არ დანერგილა',
  'MIME_extraction_failure' => 'ვერ განისაზღვრა MIME ტიპი.',
  'MIME_type_unknown' => 'უცნობი MIME ტიპი',
  'cant_create_write' => 'ვერ ვქმნი ჩაწერად ფაილს.',
  'not_writable' => 'ვერ ვწერ ჩაწერად ფაილში.',
  'cant_read_URI' => 'ბმას ვერ ვკითხულობ',
  'cant_open_write_file' => 'ვერ ვხსნი URI ჩაწერად ფაილს.',
  'cant_write_write_file' => 'ვერ ვწერ URI ჩაწერად ფაილში.',
  'cant_unzip' => 'ვერ ვხსნი არქივს.',
  'unknown' => 'უცნობი შეცდომა',
  'succ' => 'წარმატებული ატვირთვა',
  'success' => 'წარმატებული ატვირთვა: %s.',
  'add' => 'ფაილების ალბომში დასამატებლათ გთხოვთ დაწკაპოთ \'გაგრძელება\'.',
  'failure' => 'ატვირთვა ვერ მოხერხდა',
  'f_info' => 'ფაილის ინფორმაცია',
  'no_place' => 'წინა ფაილი ვერ განთავსდება.',
  'yes_place' => 'წინა ფაილი წარმატებით განთავსდა.',
  'max_fsize' => 'მაქსიმალური დასაშვები მოცულობაა %s კბ',
  'album' => 'ალბომი',
  'picture' => 'ფაილი',
  'pic_title' => 'ფაილის სახელი',
  'description' => 'ფაილის აღწერილობა',
  'keywords' => 'საკვანძო სიტყვები (გამოიყოფა შორისებით)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>', //cpg1.4
  'keywords_sel' =>'საკვანძო სიტყვის არჩევა', //cpg1.4
  'err_no_alb_uploadables' => 'უკაცრავად, ვერ მოიძებნა ალბომი რომელშიც ფაილების ატვირთვის უფლება გაქვთ',
  'place_instr_1' => 'გთხოვთ განათავსოთ ფაილები ალბომებში.  ასევე შეგიძლიათ თითოეული ფაილის შესაბამისი ინფორმაციის მითითებაც.',
  'place_instr_2' => 'განსათავსებელია სხვა ფაილებიც. გთხოვთ დაწკაპოთ \'გაგრძელება\'.',
  'process_complete' => 'თქვენ წარმატებით განათავსეთ ყველა ფაილი.',
   'albums_no_category' => 'ალბომები კატეგორიის გარეშე', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* პირადი ალბომები', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'ალბომის არჩევა', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'დახურვა', //cpg1.4
  'no_keywords' => 'ვწუხვართ, საკვანძო სიტყვები მიუწვდომელია!', //cpg1.4
  'regenerate_dictionary' => 'ლექსიკონის ხელახლა შექმნა', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'მონაწილეთა სია', //cpg1.4
  'user_manager' => 'მონაწილეთა მართვა', //cpg1.4
  'title' => 'მონაწილეთა მართვა',
  'name_a' => 'სახელით [აღმავალი]',
  'name_d' => 'სახელით [დაღმავალი]',
  'group_a' => 'ჯგუფით [აღმავალი]',
  'group_d' => 'ჯგუფით [დაღმავალი]',
  'reg_a' => 'რეგისტრაციის თარიღით [აღმავალი]',
  'reg_d' => 'რეგისტრაციის თარიღით [დაღმავალი]',
  'pic_a' => 'ფაილების რაოდენობით [აღმავალი]',
  'pic_d' => 'ფაილების რაოდენობით [დაღმავალი]',
  'disku_a' => 'გამოყენებული ადგილით [აღმავალი]',
  'disku_d' => 'გამოყენებული ადგილით [დაღმავალი]',
  'lv_a' => 'ბოლო სტუმრობით [აღმავალი]',
  'lv_d' => 'ბოლო სტუმრობით [დაღმავალი]',
  'sort_by' => 'მონაწილეთა სორტირება',
  'err_no_users' => 'მონაწილეთა ცხრილი ცარიელია!',
  'err_edit_self' => 'თქვენ არ შეგიძლიათ საკუთAრი პროფილის რედაქტირება, ამისათვის გამოიყენეთ ბმა \'პროფილი\'',
  'edit' => 'რედაქტირება', //cpg1.4
  'with_selected' => 'მონიშნულის:', //cpg1.4
  'delete' => 'წაშლა', //cpg1.4
  'delete_files_no' => 'საზოგადო ფაილების შენარჩუნებით (მაგრამ ანონიმურად გადაქცევა)', //cpg1.4
  'delete_files_yes' => 'საზოგადო ფაილების ჩათვლით', //cpg1.4
  'delete_comments_no' => 'კომენტარების შენარჩუნებით (მაგრამ ანონიმურად გადაქცევა)', //cpg1.4
  'delete_comments_yes' => 'კომენტარების ჩათვლით', //cpg1.4
  'activate' => 'გააქტივება', //cpg1.4
  'deactivate' => 'დეაქტივაცია', //cpg1.4
  'reset_password' => 'პაროლის განახლება', //cpg1.4
  'change_primary_membergroup' => 'წევრთა პირველადი ჯგუფის შეცვლა', //cpg1.4
  'add_secondary_membergroup' => 'წევრთა მეორადი ჯგუფის დამატება', //cpg1.4
  'name' => 'მონაწილის სახელი',
  'group' => 'ჯგუფი',
  'inactive' => 'არააქტიური',
  'operations' => 'ქმედებები',
  'pictures' => 'ფაილები',
  'disk_space_used' => 'გამოყენებული ადგილი', //cpg1.4
  'disk_space_quota' => 'გამოყოფილი ადგილი', //cpg1.4
  'registered_on' => 'რეგისტრაცია', //cpg1.4
  'last_visit' => 'ბოლო სტუმრობა',
  'u_user_on_p_pages' => 'მონაწილა: %d / გვერდი: %d',
  'confirm_del' => 'ნამდვილად გსურთ ამ მონაწილის წაშლა? \\nმისი ყველა ფაილი და ალბომი აგრეთვე წაიშლება.', //js-alert
  'mail' => 'ფოსტა',
  'err_unknown_user' => 'მითითებული მონაწილე არ არსებობს',
  'modify_user' => 'მონაწილის შეცვლა',
  'notes' => 'შენიშვნები',
  'note_list' => '<li>თუ მიმდინარე პაროლის შეცვლა გსურთ ველი "პაროლი" ცარიელი დატოვეთ',
  'password' => 'პაროლი',
  'user_active' => 'მონაწილე აქტიურია',
  'user_group' => 'მონაწილეთა ჯგუფი',
  'user_email' => 'მონაწილის ელფოსტა',
  'user_web_site' => 'მონაწილის ვებგვერდი',
  'create_new_user' => 'ახალი მონაწილის შექმნა',
  'user_location' => 'მონაწილის ადგილმდებარეობა',
  'user_interests' => 'მონაწილის ინტერესები',
  'user_occupation' => 'მონაწილის თანამდებობა',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'ბოლო განახლებები',
  'never' => 'არასოდეს',
  'search' => 'მონაწილის ძიება', //cpg1.4
  'submit' => 'გაგზავნა', //cpg1.4
  'search_submit' => 'წინ!', //cpg1.4
  'search_result' => 'ძიების შედეგები: ', //cpg1.4
  'alert_no_selection' => 'ჯერ ერთი მაინც მონაწილე უნდა შეარჩიოთ!', //cpg1.4 //js-alert
  'password' => 'პაროლი', //cpg1.4
  'select_group' => 'ჯგუფის არჩევა', //cpg1.4
  'groups_alb_access' => 'უფლებები ალბომზე ჯგუფების მიხედვით', //cpg1.4
  'album' => 'ალბომი', //cpg1.4
  'category' => 'კატეგორია', //cpg1.4
  'modify' => 'შევცვალო?', //cpg1.4
  'group_no_access' => 'ამ ჯგუფს განსაკუთრებული წვდომის უფლება არ გააჩნია', //cpg1.4
  'notice' => 'შენიშვნა', //cpg1.4
  'group_can_access' => 'ალბომ(ებ)ი, რომელთა წვდომის უფლებამოსილია მხოლოდ "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'განაახლებს სათაურებს ფაილიდან', //cpg1.4
'წაშლის სათაურებს', //cpg1.4
'განაახლებს მინიატურებს და შეცვლის ფოტოების ზომებს', //cpg1.4
'წაშლის საწყის ფოტოებს და ჩაანაცვლებს ზომაშეცვლილებით', //cpg1.4
'წაშლის საწყის და შუალედური ზომების ფოტოებს დისკზე ადგილის გამოსათავისუფლებლად', //cpg1.4
'წაშლის განცალკევებულ კომენტარებს', //cpg1.4
'გადაიკითხავს ფაილთა ზომებსა და განზომილებებს (ნახატების ხელით ჩასწორების შემთხვევაში)', //cpg1.4
'განულებს მონახულებათა მრიცხველს', //cpg1.4
'აჩვენებს PHP მონაცემებს', //cpg1.4
'განაახლებს მონაცემთა ბაზას', //cpg1.4
'აჩვენებს დავთრის ფაილებს', //cpg1.4
);
$lang_util_php = array(
  'title' => 'ადმინისტრატორის ხელსაწყოები (ნახატის ზომების შეცვლა)',
  'what_it_does' => 'რას აკეთებს',
  'file' => 'ფაილი',
  'problem' => 'პრობლემა', //cpg1.4
  'status' => 'სტატუსი', //cpg1.4
  'title_set_to' => 'სახელის მითითება',
  'submit_form' => 'გამოყენება',
  'updated_succesfully' => 'წარმატებით განახლდა',
  'error_create' => 'შექმნის შეცდომა',
  'continue' => 'სხვა ნახატების დამუშავება',
  'main_success' => 'ფაილი %s წარმატებით გამოიყენება როგორც ძირითადი',
  'error_rename' => 'გადარქმევის შეცდომა %s - %s',
  'error_not_found' => 'ფაილი %s ვერ მოიძებნა',
  'back' => 'მთავარ გვერდზე დაბრუნება',
  'thumbs_wait' => 'მიმდინარეობს მინიატურებისა და/ან ზომაშეცვლილი ნახატების განახლება, გთხოვთ შეიცადოთ...',
  'thumbs_continue_wait' => 'გრძელდება მინიატურებისა და/ან ზომაშეცვლილი ნახატების განახლება, გთხოვთ შეიცადოთ...',
  'titles_wait' => 'მიმდინარეობს სათაურების განახლება, გთხოვთ შეიცადოთ...',
  'delete_wait' => 'მიმდინარეობს ფაილების წაშლა, გთხოვთ შეიცადოთ...',
  'replace_wait' => 'მიმდინარეობს საწყისი ფაილების წაშლა და მათი ზომაშეცვლილი ფაილებით ჩანაცვლება, გთხოვთ შეიცადოთ...',
  'instruction' => 'სწრაფი ინსტრუქციები',
  'instruction_action' => 'ქმედების არჩევა',
  'instruction_parameter' => 'პარამეტრების მითითება',
  'instruction_album' => 'ალბომის არჩევა',
  'instruction_press' => 'დააჭირეთ ღილაკს %s',
  'update' => 'მინიატურებისა და/ან ზომაშეცვლილი ნახატების განახლება',
  'update_what' => 'რა უნდა შეიცვალოს',
  'update_thumb' => 'მხოლოდ მინიატურები',
  'update_pic' => 'მხოლოდ ზომაშეცვლილი ნახატები',
  'update_both' => 'მინიატურებიც და ზომაშეცვლილი ნახატებიც',
  'update_number' => 'ერთი დაწკაპვით დასამუშევებელ ნახატთა რაოდენობა',
  'update_option' => '(თუ დროის და ვადის პრობლემები გქონიათ, გთხოვთ დაბალი მნიშვნელობა მიუთითოთ)',
  'filename_title' => 'ფაილის სახელი &rArr; ფაილის სათაური',
  'filename_how' => 'როგორ უნდა შეიცვალოს ფაილის სახელი?',
  'filename_remove' => 'მოცილდეს .jpg დაბოლოება და ნიშნანი _ (ხაზგასმა) შეიცვალოს შორისებით',
  'filename_euro' => 'შეცვლა 2003_11_23_13_20_20.jpg - 23/11/2003 13:20',
  'filename_us' => 'შეცვლა 2003_11_23_13_20_20.jpg - 11/23/2003 13:20',
  'filename_time' => 'შეცვლა 2003_11_23_13_20_20.jpg - 13:20',
  'delete' => 'ფაილების სათაურების ან პირველწყარო ფოტოების წაშლა',
  'delete_title' => 'ფაილების სათაურების წაშლა',
  'delete_title_explanation' => 'ამოშლის ყველა ფაილის სათაურს თქვენს მიერ მითითებული ალბომში.', //cpg1.4
  'delete_original' => 'პირველწყარო ფოტოების წაშლა',
  'delete_original_explanation' => 'ამოიღებს სრული ზომის ფოტოებს.', //cpg1.4
  'delete_intermediate' => 'შუალედური ფოტოების წაშლა', //cpg1.4
  'delete_intermediate_explanation' => 'ამოიღებს შუალედურ (ჩვეულებრივ) ფოტოებს.<br />გამოიყენეთ თუ დისკზე ადგილის გამოთავისუფლება გსურთ. კონფიგურაციაში უნდა მორთოთ \'შუალედური ნახატების შექმნა\' ნახატების დამატების შემდეგ.', //cpg1.4
  'delete_replace' => 'პირველწყარო ფოტოების წაშლა და ზომაშეცვლილებით ჩანაცვლება',
  'titles_deleted' => 'მითითებულ ალბომში ყველა სათაური ამოღებულია', //cpg1.4
  'deleting_intermediates' => 'შუალედური ფოტოების წაშლა, შეიცადეთ...', //cpg1.4
  'searching_orphans' => 'განცალკევებულების ძებნა, შეიცადეთ...', //cpg1.4
  'select_album' => 'ალბომის არჩევა',
  'delete_orphans' => 'ცალკეული კომენტარების წაშლა (მუშაობს ყველა ალბომში)',
  'delete_orphans_explanation' => 'ეს დაგეხმარებათ აღმოაჩინოთ და წაშალოთ კომენტარები, რომლებიც გალერეის ფაილებთან აღარ არიან დაკავშირებული.<br />ამოწმებს ყველა ალბომს.', //cpg1.4
  'refresh_db' => 'ფაილთა განზომილებებისა და ზომის ხელახალი ჩატვირთვა', //cpg1.4
  'refresh_db_explanation' => 'ხელახლა წაიკითხავს ფაილების განზომილებებსა და ზომას. გამოიყენეთ თუ ქვოტები მცდარია ან თუ ფაილები ხელით შეცვალეთ.', //cpg1.4
  'reset_views' => 'ნახვის მრიცხველთა გაუქმება', //cpg1.4
  'reset_views_explanation' => 'გაანულებს ფაილების ნახვათა რაოდენობას მითითებულ ალბომში.', //cpg1.4
  'orphan_comment' => 'ნაპოვნია ცალკეული კომენტარები',
  'delete' => 'წაშლა',
  'delete_all' => 'ყველას წაშლა',
  'delete_all_orphans' => 'წავშალო ყველა განცალკევებული?', //cpg1.4
  'comment' => 'კომენტარი: ',
  'nonexist' => 'დაერთვის არარსებულ ფაილს # ',
  'phpinfo' => 'phpinfo–ს ჩვენება',
  'phpinfo_explanation' => 'შეიცავს ტექნიკურ ინფორმაციას თქვენი სერვერის შესახებ.<br /> - დახმარების მოთხოვნისას შესაძლოა ამ მონაცემების მითითებას დაგეკითხნონ.', //cpg1.4
  'update_db' => 'მონაცემთა ბაზის განახლება',
  'update_db_explanation' => 'თუ გალერეის სიტემური ფაილი შეცვალეთ, დაამატეთ მოდიფიკაციები ან თავად პროგრამა განაახლეთ, აუცილებელია მონაცემთა ბაზის ერთხელ მაინც განახლება. ამ დროს შეიქმნება თქვენი მონაცემთა ბაზისთვის აუცილებელი ცხრილები და/ან პარამეტრები.',
  'view_log' => 'დავთრის ფაილების ჩვენება', //cpg1.4
  'view_log_explanation' => 'გალერეას შეუძლია მონაწილეთა ქმედებების დავთარში შენახვა. დავთრის დათვალიერება შეგიძლიათ თუ შესაბამისი უფლება გააქტივებულია <a href="admin.php">გალერეის კონფიგურაციაში</a>.', //cpg1.4
  'versioncheck' => 'ვერსიების შემოწმება', //cpg1.4
  'versioncheck_explanation' => 'შეამოწმებს თქვენი ფაილების ვერსიებს, რათა გადაამოწმოს ფაილების განახლება ან შეამოწმოს ახალი ვერსიების არსებობა უკვე ჩადგმული ვერსიისთვის.', //cpg1.4
  'bridgemanager' => 'შეხიდების მმართველი', //cpg1.4
  'bridgemanager_explanation' => 'გალერეის სხვა პროგრამებთან (მაგალითად ფორუმთან) ინტეგრაციის (შეხიდების) ჩართვა/ამორთვა.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'ვერსიის შემოწმება', //cpg1.4
  'what_it_does' => 'ეს გვერდი განკუთვნილია იმ მომხმარებელთათვის, რომელთაც ჩადგმა განაახლეს. ეს სკრიპტი ჩამოივლის თქვენი ვებ სერვერის ფაილებს და შეეცდება დაადგინოს ემთხვევა თუ არა სერვერის ლოკალური ფაილების ვერსია იმ ფაილების ვერსიას, რომლებიც განთავსებულია საცავში http://coppermine.sourceforge.net, და შესაბამისად აჩვენებს განსხვავებებს.<br />ყველაფერი, რაც წითლად იქნება ნაჩვენები - გასაახლებელია. ყვითლად ნაჩვენები ელემენტები - გადასახედია. მწვანე (ან შრიფტის ნაგულისხმები ფერის) ელემენტები - წესრიგშია.<br />დეტალებისთვის დაწკაპეთ დახმარების პიქტოგრამებზე.', //cpg1.4
  'online_repository_unable' => 'ვერ ვუკავშირდები ინტერნეტ საცავს', //cpg1.4
  'online_repository_noconnect' => 'გალერეა ინტერნეტ საცავს ვერ დაუკავშირდა. შესაძლოა ამის ორი მიზეზი იყოს:', //cpg1.4
  'online_repository_reason1' => 'გალერეის ინტერნეტ საცავი ამორთულია - შეამოწმეთ ეს გვერდი: %s - თუ ამ გვერდს ვერ ხედავთ, სცადეთ მოგვიანებით.', //cpg1.4
  'online_repository_reason2' => 'თქვენი ვებ სერვერის PHP კონფიგურაციაში %s ამორთულია (ჩვეულებრივ, იგი ჩართულია). თუ სერვერის ადმინისტრირება შეგიძლიათ - ჩართეთ იგი <i>php.ini</i> ფაილში (ან %s ჩანაცვლების შესაძლებლობის უფლება). წინააღმდეგ შემთხვევაში უნდა შეეგუოთ იმ აზრს, რომ თქვენს და ინტერნეტ საცავის ფაილებს ვერ შეადარებთ. ამ გვერდზე ნაჩვენებია იქნება მხოლოდ თვენი ფაილების ვერსიები - განახლებები ნაჩვენები არ იქნება.', //cpg1.4
  'online_repository_skipped' => 'კავშირი ინტერნეტ საცავთან გამოტოვებულია', //cpg1.4
  'online_repository_to_local' => 'სკრიპტი ძირითადად გადააქცევს ვერსიული ფაილების ლოკალურ ასლებს. მონაცემები შესაძლოა უზუსტო გამოდგეს თუ გალერეის განახლებისას ყველა ახალი ფაილი არ აიტვირთა. ფაილთა ცვლილებები გამოშვების ვერსიის შემდეგ მხედველობაში არ მიიღება.', //cpg1.4
  'local_repository_unable' => 'ვერ ვუკავშირდები საცავს თქვენს სერვერზე', //cpg1.4
  'local_repository_explanation' => 'გალერეა ვერ დაუკავშირდა %s ფაილს თქვენს ვებ სერვერზე. როგორც ჩანს საცავის ფაილი ვებ სერვერზე არ აგიტვირთავთ. გააკეთეთ ეს ახლა და შემდეგ კვლავ სცადეთ (დააჭირეთ განახლებას).<br />თუ სკრიპტი კვლავ არ მუშაობს, შესაძლოა ჰოსტმა გააუქმა <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP ფაილური სისტემის ფუნქციები</a> completely. ასეთ შემთხვევაში ამ ხელსაწყოს საერთოდ ვერ გამოიყენებთ, ვწუხვართ.', //cpg1.4
  'coppermine_version_header' => 'გალერეის ჩადგმული ვერსია', //cpg1.4
  'coppermine_version_info' => 'თქვენ ჩადგით ვერსია: %s', //cpg1.4
  'coppermine_version_explanation' => 'თუ ფიქრობთ რომ ეს არასწორია და სინამდვილეში გალერეის უფრო მაღალ ვერსიას იყენებთ, შესაძლოა არ აგიტვირთავთ <i>include/init.inc.php</i> ფაილის უახლესი ვერსია', //cpg1.4
  'version_comparison' => 'ვერსიათა შედარება', //cpg1.4
  'folder_file' => 'დასტა/ფაილი', //cpg1.4
  'coppermine_version' => 'გალერეის ვერსია', //cpg1.4
  'file_version' => 'ფაილის ვერსია', //cpg1.4
  'webcvs' => 'ვებ cvs', //cpg1.4
  'writable' => 'ჩაწერადი', //cpg1.4
  'not_writable' => 'მხოლოდ კითხვადი', //cpg1.4
  'help' => 'დახმარება', //cpg1.4
  'help_file_not_exist_optional1' => 'ფაილი/დასტა არ არსებობს', //cpg1.4
  'help_file_not_exist_optional2' => 'ფაილი/დასტა %s თქვენს სერვერზე ვერ მოიძებნა. თუ პრობლემები გაქვთ შეგიძლიათ მისი ვებ სერვერზე ატვირთვა (FTP კლიენტის გამოყენებით).', //cpg1.4
  'help_file_not_exist_mandatory1' => 'ფაილი/დასტა არ არსებობს', //cpg1.4
  'help_file_not_exist_mandatory2' => 'ფაილი/დასტა %s თქვენს სერვერზე ვერ მოიძებნა. აუცილებელია მისი ვებ სერვერზე ატვირთვა (FTP კლიენტის გამოყენებით).', //cpg1.4
  'help_no_local_version1' => 'ფაილის ლოკალური ვერსია არაა', //cpg1.4
  'help_no_local_version2' => 'სკრიპტი ფაილის ლოკალურ ვერსიას ვერ ხსნის - თქვენი ფაილი მოძველებულია ან თქვენ შეცვალეთ მისი თავსართის მონაცემები. რეკომენდებულია ფაილის განახლება.', //cpg1.4
  'help_local_version_outdated1' => 'ლოკალური ვერსია მოძველებულია', //cpg1.4
  'help_local_version_outdated2' => 'თქვენი ფაილის ეს ვერსია ჩანს გალერეის ძველ ვერსიას ეკუთვნის (რომელიც ალბათ განაახლეთ). გადაამოწმეთ, რომ ეს ფაილიც განახლეებულია.', //cpg1.4
  'help_local_version_na1' => 'ვერ ხერხდება cvs ვერსიის მონაცემების წაკითხვა', //cpg1.4
  'help_local_version_na2' => 'სკრიპტი ვერ ახერხებს ფაილის cvs ვერსიის განსაზღვრას ვებ სერვერზე. თქვენ იგი უნდა ატვირთოთ პირველწყარო პაკეტიდან.', //cpg1.4
  'help_local_version_dev1' => 'პროგრამისტის ვერსია', //cpg1.4
  'help_local_version_dev2' => 'ფაილი ვებ სერვერზე უფრო ახალია ვიდრე გალერეის მიმდინარე ვერსია. თქვენ ან პროგრამისტისის ვერსიას იყენებთ (და ამ შემთხვევაში უნდა იცოდეთ რას აკეთებთ), ან განაახლეთ გალერეის ჩადგმა ისე, რომ არ აგითვირთვათ include/init.inc.php ფაილი', //cpg1.4
  'help_not_writable1' => 'დასტა ჩაწერადი არაა', //cpg1.4
  'help_not_writable2' => 'შეცვალეთ ფაილის ჩაწერის უფლებები (CHMOD) რათა სკრიპტს %s დასტაში ჩაწერის უფლება ჰქონდეს.', //cpg1.4
  'help_writable1' => 'დასტა ჩაწერადია', //cpg1.4
  'help_writable2' => 'დასტა %s ჩაწერადია. ეს გაუმართლებელი რისკია, გალერეა მხოლოდ კითხვა/შესრულების უფლებას საჭიროებს.', //cpg1.4
  'help_writable_undetermined' => 'გალერეა დასტის ჩაწერადობის განსაზღვრას ვერ ახერხებს.', //cpg1.4
  'your_file' => 'თქვენი ფაილი', //cpg1.4
  'reference_file' => 'დამოწმებული ფაილი', //cpg1.4
  'summary' => 'რეზიუმე', //cpg1.4
  'total' => 'სულ შემოწმებული ფაილები/დასტები', //cpg1.4
  'mandatory_files_missing' => 'გამოტოვებულია აუცილებელი ფაილები', //cpg1.4
  'optional_files_missing' => 'გამოტოვებულია დამხმარე ფაილები', //cpg1.4
  'files_from_older_version' => 'გალერეის მოძველებული ვერსიიდან შემორჩენილი ფაილები', //cpg1.4
  'file_version_outdated' => 'ფაილთა მოძველებული ვერსიები', //cpg1.4
  'error_no_data' => 'სკრიპტი ჩაიშალა, ვერანაირი ინფორმაციის წაკითხვა ვერ მოხერხდა. ვწუხვართ.', //cpg1.4
  'go_to_webcvs' => 'გადასვლა - %s', //cpg1.4
  'options' => 'პარამეტრები', //cpg1.4
  'show_optional_files' => 'დამხმარე დასტები/ფაილები', //cpg1.4
  'show_mandatory_files' => 'აუცილებელი ფაილების ჩვენება', //cpg1.4
  'show_file_versions' => 'ფაილთა ვერსიების ჩვენება', //cpg1.4
  'show_errors_only' => 'მხოლოდ შეცდომითი დასტების/ფაილების ჩვენება', //cpg1.4
  'show_permissions' => 'დასტის უფლებების ჩვენება', //cpg1.4
  'show_condensed_output' => 'შეკუმშული ანგარიში (მარტივი ჩვენება)', //cpg1.4
  'coppermine_in_webroot' => 'გალერეა ჩადგა ვების ძირეულ დასტაში', //cpg1.4
  'connect_online_repository' => 'სცადეთ ინტერნეტ საცავთან დაკავშირება', //cpg1.4
  'show_additional_information' => 'დამატებითი მონაცემების ჩვენება', //cpg1.4
  'no_webcvs_link' => 'ვებ cvs ბმის დამალვა', //cpg1.4
  'stable_webcvs_link' => 'ვებ cvs ბმის ჩვენება სტაბილური შტოსთვის', //cpg1.4
  'devel_webcvs_link' => 'ვებ cvs ბმის ჩვენება განვითარებადი შტოსთვის', //cpg1.4
  'submit' => 'ცვლილებების გამოყენება / განახლება', //cpg1.4
  'reset_to_defaults' => 'ნაგულისხმები მნიშვნელობების აღდგენა', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'ყველა ჩანაწერის წაშლა', //cpg1.4
  'delete_this' => 'ამ ჩანაწერის წაშლა', //cpg1.4
  'view_logs' => 'ჩანაწერების ჩვენება', //cpg1.4
  'no_logs' => 'ჩანაწერები არ შექმნილა.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP ვებ გამოცემის მეგზურის მოდული</h1><p>ეს მოდული გალერეის <b>Windows XP</b> ვებ გამოცემის მეგზურის გამოყენების საშუალებას იძლევა.</p><p>კოდი დაფუძნებულია სტატიაზე რომელის ავტორია
EOT;

$lang_xp_publish_required = <<<EOT
<h2>რა არის საჭირო</h2><ul><li>Windows XP შესაბამისი მეგზურით.</li><li>გალერეის ჩადგმული მუშა ვერსია, რომელშიც <b>ვებ ატვირთვის ფუნქცია გამართულად მუშაობს.</b></li></ul><h2>როგორ ჩაიდგას კლიენტის მხარეს</h2><ul><li>გამოიყენეთ მარჯვენა დაწკაპვა
EOT;

$lang_xp_publish_select = <<<EOT
აირჩიეთ &quot;შენახვა როგორც..&quot;. შეინახეთ ფაილი თქვენს ხისტ დისკზე. შენახვისას გადაამოწმეთ, რომ შემოთავაზებული სახელია <b>cpg_###.reg</b> (სადაც ### დროის შტამპია). თუ აუცილებელია შეცვალეთ სახელი (რიცხვები დატოვეთ). ჩამოტვირთვის შემდეგ ორმაგად დაწკაპეთ ფაილი სერვერზე ვებ გამოცემის გამძროლის დასარეგისტრირებლად.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>შემოწმება</h2><ul><li>შეარჩიეთ რამდენიმე ფაილი Windows მეგზურში და მარცხენა პანელში დაწკაპეთ <b>xxx გამოცემა ვებზე</b>.</li><li>დაადასტურეთ ფაილის თქვენი არჩევანი. დაწკაპეთ <b>შემდეგ</b>.</li><li>სერვისების სიაში შეარჩიეთ ერთერთი ფოტოგალერეა (თქვენი ერთერთი გალერეის სახელი). თუ სერვისები არ გამოჩნდა გადაამოწმეთ, რომ <b>cpg_pub_wizard.reg</b> ჩადგმულია არსებული ინსტრუქციების მიხედვით.</li><li>თუ საჭიროა მიუთითეთ თქვენი შესვლის მონაცემები.</li><li>მიუთითეთ თქვენი ნახატების დანიშნულების ალბომი ან შექმენით ახალი.</li><li>დაწკაპეთ <b>შემდეგ</b>. დაიწყება თქვენი ნახატების ატვირთვა.</li><li>დასრულების შემდეგ გადაამოწმეთ რამდენად მართებულად აიტვირთა ნახატები გალერეაში.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes :</h2><ul><li>ატვირთვის დაწყების შემდეგ მეგზური სკრიპტის შეცდომის შეტყობინებებს ვეღარ აჩვენებს, ასე რომ, გალერეის შემოწმებამდე ვერ დაადგენთ თუ რამდენად მართებულად აიტვირთა ნახატები.</li><li>თუ ატვირთვა ვერ მოხერხდა, გალერეის მართვის გვერდზე ჩართეთ &quot;გამართვის რეჟიმი&quot;, ჯერ ერთი ნახატი სცადეთ და შემდეგ შეამოწმეთ შეცდომათა შეტყობინებები
EOT;

$lang_xp_publish_flood = <<<EOT
რომელიც თქვენს სერვერზე გალერეის დასტაშია განთავსებული.</li><li>მეგზურის მიერ ატვირთული ნახატებით გალერეის <i>გადავსების</i> თავიდან ასაცილებლად ამ ფუნქციის გამოყენება მხოლოდ <b>გალერეის ადმინსა</b> და <b>საკუთარი ალბომების მქონე მონაწილეებს</b> შეუძლიათ.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'გალერეა - XP ვებ გამოცემის მეგზური', //cpg1.4
  'welcome' => 'მოგესალმებით <b>%s</b>,', //cpg1.4
  'need_login' => 'ამ მეგზურის გამოსაყენებლად ჯერ გალერეაში უნდა შეხვიდეთ ვებ ბრაუზერის საშუალებით.<p/><p>შესვლისას არ დაგავიწყდეთ <b>დამიმახსოვრე</b> პარამეტრის ჩართვა (თუ არის).', //cpg1.4
  'no_alb' => 'ვწუხვართ, მაგრამ ალბომი, რომელშიც ამ მეგზურით ფაილების ატვირთვა შეგიძლიათ არ არსებობს.', //cpg1.4
  'upload' => 'ატვირთეთ თქვენი ფაილები არსებულ ალბომში', //cpg1.4
  'create_new' => 'ახალი ალბომის შექმნა ფოტოებისთვის', //cpg1.4
  'album' => 'ალბომი', //cpg1.4
  'category' => 'კატეგორია', //cpg1.4
  'new_alb_created' => 'თქვენი ახალი ალბომი &quot;<b>%s</b>&quot; შეიქმნა.', //cpg1.4
  'continue' => 'დააჭირეთ ღილაკს &quot;შემდეგ&quot; თქვენი ფოტოების ატვირთვის დასაწყებად', //cpg1.4
  'link' => 'ეს ბმა', //cpg1.4
);
}
?>