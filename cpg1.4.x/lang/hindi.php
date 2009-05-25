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
  'lang_name_english' => 'Hindi', //cpg1.4
  'lang_name_native' => 'हिन्दी', //cpg1.4
  'lang_country_code' => 'in', //cpg1.4
  'trans_name'=> 'Anand Maheshwari',
  'trans_email' => 'hindi@b4uindia.com',
  'trans_website' => 'http://www.b4uindia.com/',
  'trans_date' => '2006-12-11',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('रवी', 'सोम', 'मंगल', 'बुध', 'गुरू', 'शुक', 'शनी');
$lang_month = array('जनवरी', 'फरवरी', 'मार्च', 'अपरैल', 'मई', 'जून', 'जुलाई', 'अगस्त', 'सितम्बर', 'अक्टूबर', 'नवम्बर', 'दिसम्बर');

// Some common strings
$lang_yes = 'हाँ';
$lang_no  = 'नही';
$lang_back = 'पीछे';
$lang_continue = 'चलने दे';
$lang_info = 'सूचना';
$lang_error = 'गलती';
$lang_check_uncheck_all = 'सभी/कोई नही'; //cpg1.4

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
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'chut*', 'Boshya', 'Gandu', 'Haram');

$lang_meta_album_names = array(
  'random' => 'घुमती फाईल',
  'lastup' => 'अंतिम फाईल',
  'lastalb'=> 'अंतिम अपडेटेड',
  'lastcom' => 'आखरी कमेंट',
  'topn' => 'मुख्य देखी गई',
  'toprated' => 'मुख्य रेटेड',
  'lasthits' => 'आखिरी देखी गयी',
  'search' => 'पाये गये',
  'favpics'=> 'पसंदीदा फाइले',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'आपको यह प्रष्ट देखने की अनुमती नही है.',
  'perm_denied' => 'आपको यह काम करने की आनुमति नहीं है.',
  'param_missing' => 'स्करिप्ट बिना पैरामीटर के मांगी गयी',
  'non_exist_ap' => 'चुना गया एल्बम/फाईल नहीं हैं.!',
  'quota_exceeded' => 'डिस्क कोटा से अधिक.<br /><br />आपके पास [quota]K की जगह है और आपकी फाइले [space]K की जगह घेर रही हैं. यह फाईल जोडनें पर आपका डिस्क क़ोटा भर सकता हैं.',
  'gd_file_type_err' => 'GD image library में JPEG और PNG फाईल की ही अनुमती हैं.',
  'invalid_image' => 'आपके द्वारा अपलोड की गयी इमेज खराब हैं या फिर GD library इस पर काम नहीं कर सकती है.',
  'resize_failed' => 'थम्बनेल या कम आकार की इमेज बनाने मॅ असफलता.',
  'no_img_to_display' => 'दिखाने के लिये कोई इमेज नहीं हैं.',
  'non_exist_cat' => 'चुनी गयी केटेगरी अस्तित्व मॅ नही है.',
  'orphan_cat' => 'एक केटेगरी की माता-पिता केटेगरी नहीं हैं. इस समस्या के समाधान के लिये केटेगरी प्रबंधक चालायॅ!',
  'directory_ro' => 'डायरेक्टरी \'%s\' मॅ लिखने की अनुमती नहीं हैं, अतः फाइलें हटाई नहीं जा सकती है.',
  'non_exist_comment' => 'चुना गया कमेन्ट अस्तित्व मॅ नही हैं.',
  'pic_in_invalid_album' => 'फाईल (%s) एल्बम मॅ है. जो की अस्तित्व मॅ नहीं है!',
  'banned' => 'आपको अभी इस वेबसाइट को काम मॅ लेने से रोका गया है.',
  'not_with_udb' => 'यह फंक्शन कोपरमाइन मॅ बंद है क्योंकि इसे फोरम सोफ्टवेयर के साथ जोडा गया है. या तो आप जो करना चाहते है वो वर्तमान सैटिंग में संभव नहीं है या फिर यह फंक्शन किसी फोरम के द्वारा ही चलाया जा सकता हैं.',
  'offline_title' => 'ओफलाईन',
  'offline_text' => 'गैलेरी अभी ओफलाईन है - कॄपया थोडी देर बाद वापस आयें.',
  'ecards_empty' => 'अभी कोइ भी ecard रिकोर्ड दिखाने के लिये नहीं है.',
  'action_failed' => 'कर्म असफल. कोपरमाइन इस कार्य को करने मॅ असफल',
  'no_zip' => 'ZIP फाईल के लिये आवश्यक लाईब्रेरी उपलब्द नही हैं. कॄपया अपने कोपरमाइन एडमिन से सम्पर्क करॅ.',
  'zip_type' => 'आपको ZIP फाईल अपलोड करने की अनुमति नही हैं.',
  'database_query' => 'डाटाबेस क्युरी को चलाते समय व्यव्धान!', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'bbcode सहायता'; //cpg1.4
$lang_bbcode_help = 'आप क्लिक करने योग्य लिंक और कुछेक फोरमेटिंग इस जगह bbcode की सहायता से काम में ले सकते हैं: <li>[b]बोल्ड[/b] =&gt; <b>बोल्ड</b></li><li>[i]इटालिक[/i] =&gt; <i>इटालिक</i></li><li>[url=http://yoursite.com/]Url शब्द[/url] =&gt; <a href="http://yoursite.com">Url शब्द</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some शब्द[/color] =&gt; <span style="color:red">some शब्द</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'मुख्य प्रष्ट पर जायॅ',
  'home_lnk' => 'घर',
  'alb_list_title' => 'एल्बम सूची पर जायॅ',
  'alb_list_lnk' => 'एल्बम सूची',
  'my_gal_title' => 'सव्यं की गैलेरी पर जायॅ',
  'my_gal_lnk' => 'मेरी गैलेरी',
  'my_prof_title' => 'सव्यं की प्रोफाईल पर जायॅ', //cpg1.4
  'my_prof_lnk' => 'मेरी प्रोफाईल',
  'adm_mode_title' => 'एडमिन मोड मॅ जायॅ',
  'adm_mode_lnk' => 'एडमिन मोड',
  'usr_mode_title' => 'यूजर मोड मॅ जायॅ',
  'usr_mode_lnk' => 'यूजर मोड',
  'upload_pic_title' => 'एक एल्बम मॅ फाईल अपलोड करॅ',
  'upload_pic_lnk' => 'फाईल अपलोड',
  'register_title' => 'एक खाता बनायॅ',
  'register_lnk' => 'पंजीकरण',
  'login_title' => 'मुझे लोग-ईन करॅ', //cpg1.4
  'login_lnk' => 'लोग-ईन',
  'logout_title' => 'मुझे लोग-आउट करॅ', //cpg1.4
  'logout_lnk' => 'लोग-आउट',
  'lastup_title' => 'हालहिं के अपलोड दिखायॅ', //cpg1.4
  'lastup_lnk' => 'आखरी अपलोड',
  'lastcom_title' => 'हालहिं के कमेन्ट दिखायॅ', //cpg1.4
  'lastcom_lnk' => 'आखरी कमेन्ट',
  'topn_title' => 'मुख्य देखी गयी चीजॅ', //cpg1.4
  'topn_lnk' => 'मुख्य देखी गयी',
  'toprated_title' => 'मुख्य मुख्य रेटेड चीजॅ', //cpg1.4
  'toprated_lnk' => 'मुख्य रेटेड',
  'search_title' => 'गैलेरी मॅ ढूंढॅ', //cpg1.4
  'search_lnk' => 'ढूंढॅ',
  'fav_title' => 'मेरे पसंदीदा मॅ जायॅ', //cpg1.4
  'fav_lnk' => 'मेरे पसंदीदा',
  'memberlist_title' => 'सदस्यगण सूची दिखायॅ',
  'memberlist_lnk' => 'सदस्यगण सूची',
  'faq_title' => 'फोटो गैलेरी पर बार-बार पूछे गये सवाल(FAQs)&quot;कोपरमाइन&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'नये अपलोडों को स्वीक्रति', //cpg1.4
  'upl_app_lnk' => 'अपलोड स्वीक्रति',
  'admin_title' => 'कोन्फिग मॅ जायॅ', //cpg1.4
  'admin_lnk' => 'कोन्फिग', //cpg1.4
  'albums_title' => 'एल्बम कोन्फिगुरेशन मॅ जायॅ', //cpg1.4
  'albums_lnk' => 'एल्बम',
  'categories_title' => 'केटेगरी कोन्फिगुरेशन मॅ जायॅ', //cpg1.4
  'categories_lnk' => 'केटेगरियां',
  'users_title' => 'यूजर कोन्फिगुरेशन मॅ जायॅ', //cpg1.4
  'users_lnk' => 'यूजरगण',
  'groups_title' => 'समूह कोन्फिगुरेशन मॅ जायॅ', //cpg1.4
  'groups_lnk' => 'समूह',
  'comments_title' => 'सभी कमेन्टों को रीव्यु करॅ', //cpg1.4
  'comments_lnk' => 'कमेन्टों को जांचे',
  'searchnew_title' => 'बेच मोड से जोडनॅ के लिये जायॅ', //cpg1.4
  'searchnew_lnk' => 'बेच मोड से जोडॅ',
  'util_title' => 'एडमिन टूल्स मॅ जायॅ', //cpg1.4
  'util_lnk' => 'एडमिन टूल्स',
  'key_title' => 'की-शब्द शब्दसूची मॅ जायॅ', //cpg1.4
  'key_lnk' => 'की-शब्द शब्दसूची', //cpg1.4
  'ban_title' => 'रोके गये यूजरगण मॅ जायॅ', //cpg1.4
  'ban_lnk' => 'रोके गये यूजरगण',
  'db_ecard_title' => 'ई-पत्रों को रिव्यु करॅ', //cpg1.4
  'db_ecard_lnk' => 'ई-पत्र दिखायॅ',
  'pictures_title' => 'मेरी पिक्चर्स को क्रमबद्ध करॅ', //cpg1.4
  'pictures_lnk' => 'मेरी पिक्चर्स को क्रमबद्ध करॅ', //cpg1.4
  'documentation_lnk' => 'पुस्तिका', //cpg1.4
  'documentation_title' => 'कोपरमाइन सहायता पुस्तिका', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'मेरे एल्बम को जोडॅ और व्यवस्थित करॅ', //cpg1.4
  'albmgr_lnk' => 'एल्बम को जोडॅ/व्यवस्थित करॅ',
  'modifyalb_title' => 'मेरे एल्बम को बदलनॅ जायॅ',  //cpg1.4
  'modifyalb_lnk' => 'मेरे एल्बम को बदलॅ',
  'my_prof_title' => 'मेरे स्वयं की प्रोफाईल मॅ जायॅ', //cpg1.4
  'my_prof_lnk' => 'मेरी प्रोफाईल',
);

$lang_cat_list = array(
  'category' => 'केटेगरी',
  'albums' => 'एल्बम',
  'pictures' => 'फाइलॅ',
);

$lang_album_list = array(
  'album_on_page' => '%d एल्बम %d page(s) प्रष्टों पर',
);

$lang_thumb_view = array(
  'date' => 'तारीख',
  //Sort by filename and title
  'name' => 'फाईल का नाम',
  'title' => 'टाइटल',
  'sort_da' => 'तारीख आरोही क्रम से क्रमबद्ध करॅ',
  'sort_dd' => 'तारीख अवरोही क्रम से क्रमबद्ध करॅ',
  'sort_na' => 'नाम आरोही क्रम से क्रमबद्ध करॅ',
  'sort_nd' => 'नाम अवरोही क्रम से क्रमबद्ध करॅ',
  'sort_ta' => 'टाइटल आरोही क्रम से क्रमबद्ध करॅ',
  'sort_td' => 'टाइटल अवरोही क्रम से क्रमबद्ध करॅ',
  'position' => 'स्थिती', //cpg1.4
  'sort_pa' => 'स्थिती आरोही क्रम से क्रमबद्ध करॅ', //cpg1.4
  'sort_pd' => 'स्थिती अवरोही क्रम से क्रमबद्ध करॅ', //cpg1.4
  'download_zip' => 'जिप फाईल के रूप मॅ डाउनलोड करॅ',
  'pic_on_page' => '%d फाइलॅ %d प्रष्टों पर',
  'user_on_page' => '%d यूजरगण %d प्रष्टों पर',
  'enter_alb_pass' => 'एलबम कूटशब्द डालॅ', //cpg1.4
  'invalid_pass' => 'गलत कूटशब्द', //cpg1.4
  'pass' => 'कूटशब्द', //cpg1.4
  'submit' => 'भेजॅ', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'थम्बनेल प्रष्ट पर जायॅ',
  'pic_info_title' => 'फाईल सूचना दिखायॅ/छुपाऍ',
  'slideshow_title' => 'चलचित्र',
  'ecard_title' => 'इस फाईल को ई-पत्र के रूप मॅ भेजॅ',
  'ecard_disabled' => 'ई-पत्र अभी बंद हॅ.',
  'ecard_disabled_msg' => 'आपको अभी ई-पत्रों को भेजनॅ की आनुमती नहीं हैं.', //js-alert
  'prev_title' => 'पिछली फाईल देखॅ',
  'next_title' => 'अगली फाईल देखॅ',
  'pic_pos' => 'फाईल %s/%s',
  'report_title' => 'इस फाईल को एडमिन को रिपोर्ट करॅ', //cpg1.4
  'go_album_end' => 'आखरी तक छोड दें', //cpg1.4
  'go_album_start' => 'शुरूआत पर जाय़ॅ', //cpg1.4
  'go_back_x_items' => '%s सामान पीछॅ जाय़ॅ', //cpg1.4
  'go_forward_x_items' => '%s सामान आगे जायॅ', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'इस फाईल को रेट करॅ',
  'no_votes' => '(अभी तक कोइ वोट नहीं)',
  'rating' => '(वर्तमान रेटिंग : %s / 5 %s वोटो के साथ)',
  'rubbish' => 'फालतू',
  'poor' => 'कमजोर',
  'fair' => 'ठीक',
  'good' => 'अच्छी',
  'excellent' => 'बहुत अच्छा',
  'great' => 'महान्',
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
  CRITICAL_ERROR => 'कठिन गलती',
  'file' => 'फाईल: ',
  'line' => 'रेखा: ',
);

$lang_display_thumbnails = array(
  'filename' => 'फाईल का नाम=', //cpg1.4
  'filesize' => 'फाईल का आकार=', //cpg1.4
  'dimensions' => 'रूपरेखा=', //cpg1.4
  'date_added' => 'तारीख को जोडी गयी=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s कमेन्ट',
  'n_views' => '%s देखा गया',
  'n_votes' => '(%s वोट)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'डीबग सूचना',
  'select_all' => 'सभी चुनॅ',
  'copy_and_paste_instructions' => 'अगर आप कोपरमाइन सहायता-बोर्ड पर सहायता मांगने जा रहे हैं तो, मांगे जाने पर यह डीबग आउटपुट आपनी पोस्टिंग के साथ कोपी-और-पेस्ट करॅ, एरर संदेश के साथ जो आपको मिला हैं(अगर कोई). पोस्टिंग से पहले यह जांच ले की अगर कोई कूटशब्द हैं तो आपने उसे *** से बदल दिया हैं <br />ध्यान दॅः यह एक सूचना मात्र हैं और इसका यह मतलब कभी भी नहीं है कि आपकी गैलेरी मॅ कोई गलती हैं', //cpg1.4
  'phpinfo' => 'phpinfo दिखायॅ',
  'notices' => 'सूचनायॅ', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'स्वतः भाषा',
  'choose_language' => 'अपनी भाषा चुनॅ',
);

$lang_theme_selection = array(
  'reset_theme' => 'स्वतः थीम',
  'choose_theme' => 'आपनी थीम चुनॅ',
);

$lang_version_alert = array(
  'version_alert' => 'असहायक वर्जन!', //cpg1.4
  'security_alert' => 'सुरक्शा चेतावनी!', //cpg1.4.3
  'relocate_exists' => '<a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0">relocate_server.php</a>फाईल आपनी वेबसाइट से हटायॅ!',
  'no_stable_version' => 'आप कोपरमाइन %s (%s) चला रहे हैं, जोकि केवल बहुत ज्यादा अनुभवी युजरो के लिए हैं - यह वर्जन ना हि किसी सहायता और ना हि किसी वारंटी के साथ हैं. इसे अपनी जोखिम पर चलायॅ या फिर किसी हालहिं के स्थिर वर्जन से डाउनग्रेड करॅ!', //cpg1.4
  'gallery_offline' => 'गैलेरी अभी ओफलाईन है और मात्र अपके लिये एडमिन के नाते चालू रहेगी. मरम्मत के बाद इसे वापस से ओनलाईन करना ना भूलॅ', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'पीछे', //cpg1.4
  'next' => 'आगे', //cpg1.4
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
  'error_wakeup' => "'%s' प्लगिन को जगाने मॅ असमर्थ", //cpg1.4
  'error_install' => "'%s' प्लगिन को डालने मॅ असमर्थ", //cpg1.4
  'error_uninstall' => "'%s' प्लगिन को हटाने मॅ असमर्थ", //cpg1.4
  'error_sleep' => "'%s' प्लगिन को नहीं हटा सकें<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'ताज्जुब',
  'Question' => 'प्रश्न',
  'Very Happy' => 'बहुत खुश',
  'Smile' => 'मुस्कान',
  'Sad' => 'दुःखी',
  'Surprised' => 'अचम्भित',
  'Shocked' => 'झटका',
  'Confused' => 'परेशान',
  'Cool' => 'ठंडा',
  'Laughing' => 'हंसना',
  'Mad' => 'पागल',
  'Razz' => 'खुशी',
  'Embarassed' => 'परेशान',
  'Crying or Very sad' => 'रो रहा या बहुत दुःखी',
  'Evil or Very Mad' => 'दुश्मन या बहुत पागल',
  'Twisted Evil' => 'बहुत दुष्ट',
  'Rolling Eyes' => 'घुमती आंखे',
  'Wink' => 'आंख-मारना',
  'Idea' => 'विचार',
  'Arrow' => 'तीर',
  'Neutral' => 'संतुलित',
  'Mr. Green' => 'क्ष्रीमान हरे',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'एडमिन मोड छोडते हुए...',
  1 => 'एडमिन मोड मॅ जाते हुए...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'एल्बम को एक नाम की आवश्यकता हैं !', //js-alert
  'confirm_modifs' => 'क्या आप परिवर्तनों के संदर्भ मॅ पक्का हैं?', //js-alert
  'no_change' => 'आपने कोई बदलाव नहीं किया!', //js-alert
  'new_album' => 'नया एल्बम',
  'confirm_delete1' => 'क्या आप एल्बम को हटाने के संदर्भ मॅ पक्का हैं?', //js-alert
  'confirm_delete2' => '\nसभी फाइलें और कमेन्ट जो इसके अंदर हैं, नष्ट हो जायॅगे!', //js-alert
  'select_first' => 'पहले कोई एक एल्बम चुनॅ', //js-alert
  'alb_mrg' => 'एल्बम प्रबंधक',
  'my_gallery' => '* मेरी गैलेरी *',
  'no_category' => '* कोई केटेगरी नहीं *',
  'delete' => 'हटाये',
  'new' => 'नया',
  'apply_modifs' => 'परिवर्तनों को लागू करॅ',
  'select_category' => 'केटेगरी चुनॅ',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'यूजरगणों को रोकॅ', //cpg1.4
  'user_name' => 'यूजर का नाम', //cpg1.4
  'ip_address' => 'आई-पी पता', //cpg1.4
  'expiry' => 'हट जायेगा(खाली का मतलब हमेशा के लिये)', //cpg1.4
  'edit_ban' => 'परिवर्तनों को सुरक्शित करॅ', //cpg1.4
  'delete_ban' => 'हटाये', //cpg1.4
  'add_new' => 'नया रूकाव जोडें', //cpg1.4
  'add_ban' => 'जोडना', //cpg1.4
  'error_user' => 'यूजर नहीं मिला', //cpg1.4
  'error_specify' => 'आपको या तो एक यूजर का नाम और या फिर एक आई-पी पता बताना पडेगा', //cpg1.4
  'error_ban_id' => 'गलत रूकाव संख्या!', //cpg1.4
  'error_admin_ban' => 'आप अपने आपको नहीं रोक सकते!', //cpg1.4
  'error_server_ban' => 'आप स्वयं के सर्वर को रोकने जा रहे हैं? Tsk tsk, ऐसा नहीं कर सकते...', //cpg1.4
  'error_ip_forbidden' => 'आप इस आई-पी को नहीं रोक सकते - यह नोन-राउटेबल(प्राईवेट)कुछ भी हो!<br />अगर आप प्राईवेट आई-पी को भी रोकना चाहते हैं तो, तो इसे अपने <a href="admin.php">कोन्फिग</a> मॅ बदलॅ(केवल मतलब रखता हैं जब कोपरमाइन किसी स्थानीय नेटवर्क या लेन पर चलाया जा रहा हो).', //cpg1.4
  'lookup_ip' => 'एक आई-पी पते को जांचे', //cpg1.4
  'submit' => 'भेजे!', //cpg1.4
  'select_date' => 'तारीख चुनों', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'पुल विजार्ड',
  'warning' => 'चेतावनी: इस विजार्ड को काम मॅ लेते समय आपको यह समझ लेना चाहिए की संवेदनशील डाटा HTML-फोर्मस के द्वारा भेजा जा रहा हैं. इसे केवल अपने स्वयं के कम्प्युटर पर हि चलाये (नाकि किसी जनसामान्य क्लाइंट पर जैसे की इंटरनेट कैफे), और यह भी पक्का कर लॅ कि इसको पूरा होने के बाद आपने अपने ब्राउजर की केशे और अस्थाई फाइले हटा दी हैं अन्यथा कोई दूसरा आपके डाटा को पाने मॅ समर्थ हो सकता हैं!',
  'back' => 'पीछे',
  'next' => 'आगे',
  'start_wizard' => 'पुल विजार्ड चालू करॅ',
  'finish' => 'समाप्त',
  'hide_unused_fields' => 'काम मॅ नहीं आने वाले फोर्म खानो को छुपाये(जरूरी बताया गया)',
  'clear_unused_db_fields' => 'गलत डाटबेस प्रविष्टियों को हटाएं(जरूरी बताया गया)',
  'custom_bridge_file' => 'आपकी कस्टम पुल फाईल(अगर पुल फाईल का नाम <i>myfile.inc.php</i>है तो, इस खाने मॅ <i>myfile</i> डालॅ)',
  'no_action_needed' => 'इस समय किसी कर्म की आवश्यकता नहीं हैं. आगे बढने के लिये केवल \'आगे\' पर क्लिक करॅ',
  'reset_to_default' => 'पुनः स्वतः वाली संगणना पर जायॅ',
  'choose_bbs_app' => 'एप्लिकेशन चुनॅ, कोपरमाइन के साथ पुल बांधने के लिये',
  'support_url' => 'इस एप्लिकेशन पर सहायता के लिये, यहां जायें',
  'settings_path' => 'आपके BBS एप्लिकेशन के द्वारा काम मॅ लिया गया रास्ता',
  'database_connection' => 'डाटाबेस का जुडाव',
  'database_tables' => 'डाटाबेस की टेबलॅ',
  'bbs_groups' => 'BBS समूह',
  'license_number' => 'लाईसेंस की संख्या',
  'license_number_explanation' => 'अपनी लाईसेंस दर्ज करॅ (अगर लागू हो तो)',
  'db_database_name' => 'डाटाबेस का नाम',
  'db_database_name_explanation' => 'अपने BBS एप्लिकेशन के द्वारा काम मॅ लिया जा रहा डाटाबेस का नाम डालॅ',
  'db_hostname' => 'डाटाबेस होस्ट',
  'db_hostname_explanation' => 'होस्ट का नाम, जहां पर mySQL डाटाबेस हैं, ज्यादातर &quot;localhost&quot;',
  'db_username' => 'डाटाबेस का यूजर खाता',
  'db_username_explanation' => 'mySQL का यूजर खाता जो BBS के जुडाव के काम मॅ लिया जा रहा हैं',
  'db_password' => 'डाटाबेस का कूटशब्द',
  'db_password_explanation' => 'इस mySQL डाटाबेस खाते के लिये कूटशब्द',
  'full_forum_url' => 'फोरम का यू-आर-एल',
  'full_forum_url_explanation' => 'आपकी BBS app का पूरा यू-आर-एल(शुरूआत मॅ http:// के साथ, उदारहण: http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'रिश्ते मॅ फोरम का रास्ता',
  'relative_path_of_forum_from_webroot_explanation' => 'आपकी BBS app का वेब रूट से रिश्ते का रास्ता (उदारहण: अगर आपका BBS http://www.yourdomain.tld/forum/ पर हैं, तो इस खाने मॅ &quot;/forum/&quot; डालॅ)',
  'relative_path_to_config_file' => 'आपकी BBS की कोन्फिग फाईल का रिश्ते का रास्ता',
  'relative_path_to_config_file_explanation' => 'आपके BBS से रिश्ते का रास्ता, आपके कोपरमाइन फोल्डर मॅ देखा गया (उदारहण: &quot;../forum/&quot; अगर आपका BBS http://www.yourdomain.tld/forum/ और कोपरमाइन http://www.yourdomain.tld/gallery/ पर हैं.)',
  'cookie_prefix' => 'कूकी के पहले के शब्द',
  'cookie_prefix_explanation' => 'इसे आपके कूकी का नाम होना चाहिये',
  'table_prefix' => 'टेबल के पहले के शब्द',
  'table_prefix_explanation' => 'इसे आपके BBS को सेट करते समय काम मॅ लिये गये पहले के शब्दों से मिलान खाना चाहिये',
  'user_table' => 'यूजर टेबल',
  'user_table_explanation' => '(ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, जब तक कि आपका BBS install सामान्य नहीं हैं)',
  'session_table' => 'सेशन टेबल',
  'session_table_explanation' => '(ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, जब तक कि आपका BBS install सामान्य नहीं हैं)',
  'group_table' => 'समूह टेबल',
  'group_table_explanation' => '(ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, जब तक कि आपका BBS install सामान्य नहीं हैं)',
  'group_relation_table' => 'समूह रिश्ते की टेबल',
  'group_relation_table_explanation' => '(ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, जब तक कि आपका BBS install सामान्य नहीं हैं)',
  'group_mapping_table' => 'समूह मानचित्री टेबल',
  'group_mapping_table_explanation' => '(ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, जब तक कि आपका BBS install सामान्य नहीं हैं)',
  'use_standard_groups' => 'सामान्य BBS यूजरसमूह को काम मे लॅ',
  'use_standard_groups_explanation' => 'सामान्य(बने हुए) यूजरसमूह को काम मे लॅ(आवश्यक बताया गया). यह सभी कस्टम यूजरसमूह जो कि इस प्रष्ट पर बने हैं, को व्यर्थ कर देगा. इसे केवल तभी बंद करॅ जबकि आप वास्तव मॅ जानते हो कि आप क्या कर रहे हैं!',
  'validating_group' => 'समूह को संभालते हुए',
  'validating_group_explanation' => 'आपके BBS की समूह संख्या, जहां पर यूजर खाते जो कि संभाल की आवश्यकता रखते हैं अंदर हैं (ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, जब तक कि आपका BBS install सामान्य नहीं हैं)',
  'guest_group' => 'अतिथी समूह',
  'guest_group_explanation' => 'आपके BBS की समूह संख्या जहां अतिथी (अंजान यूजर) अंदर हैं (ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, केवल तभी बदलॅ जब आप जानते हैं कि आप क्या कर रहॅ हैं)',
  'member_group' => 'सदस्य समूह',
  'member_group_explanation' => 'आपके BBS की समूह संख्या, जहां &quot;सामन्य&quot; यूजर खाते हैं (ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, केवल तभी बदलॅ जब आप जानते हैं कि आप क्या कर रहॅ हैं)',
  'admin_group' => 'एडमिन समूह',
  'admin_group_explanation' => 'आपके BBS की समूह संख्या, जहां एडमिन अंदर हैं (ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, केवल तभी बदलॅ जब आप जानते हैं कि आप क्या कर रहॅ हैं)',
  'banned_group' => 'रोके गये का समूह',
  'banned_group_explanation' => 'आपके BBS की समूह संख्या, जहां रोके गये यूजर अंदर हैं  (ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, केवल तभी बदलॅ जब आप जानते हैं कि आप क्या कर रहॅ हैं)',
  'global_moderators_group' => 'वैश्विक मोडरेटर्स समूह',
  'global_moderators_group_explanation' => 'आपके BBS की समूह संख्या, जहां आपके BBS के वैश्विक मोडरेटर्स अंदर हैं (ज्यादातर स्वतः संगणना को \'ठीक हैं\' होना चाहिए, केवल तभी बदलॅ जब आप जानते हैं कि आप क्या कर रहॅ हैं)',
  'special_settings' => 'BBS-पर निर्भर सैटिंग्स',
  'logout_flag' => 'phpBB वर्जन (लोग-आउट झंडा)',
  'logout_flag_explanation' => 'आपके BBS का वर्जन कौन-सा हैं (यह सैटिंग यह बताती है कि कैसे लोग-आउटो से निपटा जायेगा)',
  'use_post_based_groups' => 'पोस्ट पर निर्भर समुहों को काम मॅ लिया जायॅ?',
  'logout_flag_yes' => '2.0.5 या ज्यादा',
  'logout_flag_no' => '2.0.4 या कम',
  'use_post_based_groups_explanation' => 'क्या BBS के समूह जोकि पोस्टों की संख्या के आधार पर बने हैं को खाते मॅ ले जाना हैं (ग्रेन्युलर आग्या प्रबंध को अनुमति) या केवल स्वतः समूह (एडमिनिस्ट्रेटर को सरल बनायें, आवश्यक बताया गया). आप इस सैटिंग को बाद मॅ भी परिवर्तित कर सकते हैं.',
  'use_post_based_groups_yes' => 'हां',
  'use_post_based_groups_no' => 'नहीं',
  'error_title' => 'आपको इन गलतियों को आगे बढने से पहले सुधारना होगा. पिछले पर्दे पर जायॅ.',
  'error_specify_bbs' => 'आपको यह बताना होगा कि आप किस एप्पलिकेशन को कोपरमाइन के साथ पुल के द्वारा जोडना चाहते हैं.',
  'error_no_blank_name' => 'आप आपनी कस्टम पुल फाईल के नाम को खाली नहीं छोड सकते.',
  'error_no_special_chars' => 'अंडरस्कोर(_) और डेश(-) के अलावा पुल फाईल के नाम मॅ कोई अन्य विशेष अक्शर नहीं होना चाहिये!',
  'error_bridge_file_not_exist' => 'पुल फाईल %s सर्वर पर नहीं हैं. जांच लें, कि वास्तव मॅ हि आपने उसे अपलोड कर दिया हैं.',
  'finalize' => 'BBS समन्वय को चालू/बंद करॅ',
  'finalize_explanation' => 'अभी तक, आपके द्वारा बतायी गयी सैटिंग्स डाटबेस मॅ लिख दी गयी हैं, लेकिन BBS समन्वय चालू नहीं हो सका हैं. आप समन्वय को चालू या बंद बाद मॅ भी कर सकते हैं. अकेले कोपरमाइन के एडमिन का यूजरनाम और कूटशब्द हमेशा याद रखॅ, आपको बाद मॅ भी परिवर्तन करने के लिये इसकी जरूरत पड सकती हैं. अगर कुछ गलत हो जाये तो, %s पर जायॅ और BBS समन्वय को बंद कर दें, अपने अकेले(बिना पुल के) एडमिन खाते(अधिकतर वह जो आपने कोपरमाइन को इंस्टाल करते समय बनाया था) से.',
  'your_bridge_settings' => 'आपकी पुल सैटिंग्स',
  'title_enable' => 'चालू करॅ समन्वय/पुल %s के साथ',
  'bridge_enable_yes' => 'चालू करॅ',
  'bridge_enable_no' => 'बंद करॅ',
  'error_must_not_be_empty' => 'खाली नहीं रहना चाहिये',
  'error_either_be' => 'या तो %s या फिर %s होना चाहिये',
  'error_folder_not_exist' => '%s अस्तित्व मॅ नहीं हैं. %s के लिये डाली हुई वेल्यु को सही करॅ',
  'error_cookie_not_readible' => 'कोपरमाइन %s कूकी को नहीं पढ पा रहा हैं. %s के लिये डाली हुई वेल्यु को सही करॅ, or go to your BBS administration panel and make sure that the cookie path is readible for coppermine.',
  'error_mandatory_field_empty' => 'आप %s फील्ड को खाली नहीं छोड सकते हैं - कॄपया सही वेल्यु डालॅ.',
  'error_no_trailing_slash' => '%s फील्ड मॅ कोई उल्टा स्लेश नहीं होना चाहिये.',
  'error_trailing_slash' => '%s फील्ड मॅ कोई उल्टा स्लेश होना चाहिये.',
  'error_db_connect' => 'आपके द्वारा दिये गये डाटा से mySQL डाटाबेस से सम्पर्क नहीं हो पा रहा हैं. mySQL ने क्या कहा वो यहां हैं:',
  'error_db_name' => 'हालंकि कोपरमाइन सम्पर्क कर सकती हैं लेकिन , यह %s डाटाबेस को ढूंढ पाने में असमर्थ थी. पक्का कर लॅ कि आपने %s सही बताया हैं. mySQL ने क्या कहा वो यहां हैं:',
  'error_prefix_and_table' => '%s और ',
  'error_db_table' => '%s टेबल को ढूंढ पाने मॅ असमर्थ. पक्का कर लॅ कि आपने %s सही बताया हैं.',
  'recovery_title' => 'पुल प्रबंधक: आपातकालीन वापसी',
  'recovery_explanation' => 'अगर आप यहां अपनी कोपरमाइन गैलेरी के साथ BBS के समन्वय का प्रबंध करने आये हैं, तो आपको सबसे पहले एडमिन की तरह लोग-ईन करना होगा. अगर आप लोग-ईन करने मॅ असमर्थ हैं क्योंकि पुल सोचे गये तरीके से कार्य नहीं कर रहा हैं, आप के BBS समन्वय को इस प्रष्ट से बंद कर सकते हैं. अपना यूजर का नाम और कूटशब्द डालने से आप लोग-ईन नहीं होंगे, यह केवल BBS समन्वय को बंद करेगा. अधिक जानकारी के लिये सहायता पुस्तिका मॅ जायॅ.',
  'username' => 'यूजर का नाम',
  'password' => 'कूटशब्द',
  'disable_submit' => 'भेजें',
  'recovery_success_title' => 'जांच पडताल सफल',
  'recovery_success_content' => 'आपने BBS समन्वय को सफलतापूर्वक बंद कर दिया हैं. आपकी कोपरमाइन अब अकेले काम करेगी.',
  'recovery_success_advice_login' => 'आपकी कोपरमाइन अब अकेले काम करेगी और BBS समन्वय को वापस चालू करॅ.',
  'goto_login' => 'लोग-ईन प्रष्ट पर जायॅ',
  'goto_bridgemgr' => 'पुल प्रबंधक मॅ जायॅ',
  'recovery_failure_title' => 'जांच पडताल असफल',
  'recovery_failure_content' => 'आपने गलत यूजर सूचना भेजी हैं. आपको अकेले चलने वाले वर्जन के एडमिन खाते के डाटा देने हैं (सामान्यतया वह खाता जो आपने कोपरमाइन को डालते समय बनाया था).',
  'try_again' => 'दुबारा कोशिश करॅ',
  'recovery_wait_title' => 'इंतजार का समय पूरा नहीं हुआ हैं',
  'recovery_wait_content' => 'सुरक्शा कारणों से यह स्करिप्ट असफल लोग-ईनों को थोडे समय मॅ वापस अनुमति नहीं देती हैं, इसलिये आपको थोडे समय के लिये इंतजार करना होगा जब तक कि आपको पुनः जांच-पडताल की अनुमती नहीं मिल जाती हैं.',
  'wait' => 'इंतजार',
  'create_redir_file' => 'री-डायरेक्शन फाईल बनायें(आवश्यक बताया गया)',
  'create_redir_file_explanation' => 'यूजर को वापस से कोपरमाइन पर भेजने के लिये (जब एक बार वो आपके BBS मॅ लोग-ईन कर लें), आपको अपने BBS फोल्डर मॅ एक री-डायरेक्शन फाईल बनाने की आवश्यकता हैं. जब यह चुनाव सही हो, पुल प्रबंधक आपके लिये यह फाईल बानने की कोशिश करेगा या फिर आपको कोपी-पेस्ट के लिये तैयार कोड देगा ताकी आप अपने हाथों से फाईल बना सकॅ.',
  'browse' => 'ब्राउजर',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'कैलेंडर', //cpg1.4
  'close' => 'बंद', //cpg1.4
  'clear_date' => 'तारीख साफ करॅ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '\'%s\' के काम करने के लिये आवश्यक पैरामीटर नहीं भेजे गये !',
  'unknown_cat' => 'चुनी गयी केटेगरी डाटबेस मॅ अस्तित्व मॅ नहीं हैं',
  'usergal_cat_ro' => 'यूजर गैलेरियों की केटेगरी को हटाया जा सकता हैं!',
  'manage_cat' => 'केटेगरी प्रबंधन',
  'confirm_delete' => 'आप इस केटेगरी को हटाने के बारे मॅ पक्का हैं', //js-alert
  'category' => 'केटेगरी',
  'operations' => 'क्रियायॅ',
  'move_into' => 'मॅ ले जायॅ',
  'update_create' => 'अपडेट/नया केटेगरी',
  'parent_cat' => 'माता-पिता केटेगरी',
  'cat_title' => 'केटेगरी टाईटल',
  'cat_thumb' => 'केटेगरी थम्बनेल',
  'cat_desc' => 'केटेगरी विवरण',
  'categories_alpha_sort' => 'केटेगरियों को अक्शरानुसार क्रमबद्ध करॅ(कस्टम क्रमबद्ध के तरीके से हट के)', //cpg1.4
  'save_cfg' => 'कोन्फिगुरेशन को सुरक्शित करॅ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'गैलेरी की कोन्फिगुरेशन', //cpg1.4
  'manage_exif' => 'एक्जिफ दिखावे का प्रबंध करॅ', //cpg1.4
  'manage_plugins' => 'प्लग-इनो का प्रबन्ध करॅ', //cpg1.4
  'manage_keyword' => 'की-शब्दों का प्रबंध करॅ', //cpg1.4
  'restore_cfg' => 'फैक्टरी स्वतः पर रिस्टोर करॅ',
  'save_cfg' => 'नयी कोन्फिगुरेशन को सुरक्शित करॅ',
  'notes' => 'टिप्पणियां',
  'info' => 'सूचना',
  'upd_success' => 'कोपरमाइन की कोन्फिगुरेशन अपडेट हो चुकी हैं',
  'restore_success' => 'कोपरमाइन की स्वतः कोन्फिगुरेशन रिस्टोर हो चुकी हैं',
  'name_a' => 'नाम आरोही',
  'name_d' => 'नाम अवरोही',
  'title_a' => 'टाइटल आरोही',
  'title_d' => 'टाइटल अवरोही',
  'date_a' => 'तारीख आरोही',
  'date_d' => 'तारीख अवरोही',
  'pos_a' => 'स्थिती आरोही', //cpg1.4
  'pos_d' => 'स्थिती अवरोही', //cpg1.4
  'th_any' => 'जितना ज्यादा हो सके',
  'th_ht' => 'ऊंचाई',
  'th_wd' => 'चौडाई',
  'label' => 'लेबल',
  'item' => 'सामान',
  'debug_everyone' => 'प्रत्येक',
  'debug_admin' => 'केवल एडमिन',
  'no_logs'=> 'बंद', //cpg1.4
  'log_normal'=> 'सामान्य', //cpg1.4
  'log_all' => 'सभी', //cpg1.4
  'view_logs' => 'लोग्स देखे', //cpg1.4
  'click_expand' => 'खांचे के नाम पर क्लिक करॅ बढाने के लिये', //cpg1.4
  'expand_all' => 'सभी को बढायॅ', //cpg1.4
  'notice1' => '(*) ये सैटिंग्स आपको नहीं बदलनी चाहिए यदि आपकी डाटबेस मॅ पहले से ही फाइलॅ हैं', //cpg1.4 - (relocated)
  'notice2' => '(**) यह सैटिंग बदलते समय, केवल वो फाइले प्रभावित होंगी जोकि इस परिवर्तन के बाद जोडी जावेगी, इसलिये यह राय देने योग्य हैं कि यदि अगर आपकी गैलेरी मॅ पहले से फाइलॅ हैं तो इस सैटिंग नहीं बदलना चाहिये. हालांकि आप पहले की फाइलों पर भी एडमिन मेन्यु के&quot;<a href="util.php">एडमिन टूल्स</a> (पिक्चर पुनःआकार)&quot; से परिवर्तन लागू कर सकते हैं', //cpg1.4 - (relocated)
  'notice3' => '(***) सभी लोग फाइलें इंग्लिश भाषा मॅ लिखी जाती हैं.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'bb समन्वय करने पर यह फंक्शन बंद हो जावेगा', //cpg1.4
  'auto_resize_everyone' => 'प्रत्येक', //cpg1.4
  'auto_resize_user' => 'केवल यूजर', //cpg1.4
  'ascending' => 'आरोही', //cpg1.4
  'descending' => 'अवरोही', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'सामान्य सैटिंग्स',
  array('गैलेरी का नाम', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('गैलेरी का विवरण', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('गैलेरी एडमिन का ई-मेल', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('कोपरमाइन गैलेरी के फोल्डर का यू-आर-एल (\'index.php\' नहीं या मिलता-झुलता आखरी मॅ नहीं)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('मुख्य प्रष्ट का यू-आर-एल', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('पसंदीदा के जिप-डाउनलोड की अनुमती', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('जी-एम-टी के संदर्भ मॅ समय-जोन का अंतर (अभी का समय: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('एनक्रिप्टेड कूटशब्द को चालू करॅ (बिना किया नहीं कर सकते)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('सहायता-निशानों को चालू करॅ (सहायता केवल इंग्लिश भाषा मॅ हि उपलब्ध)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('क्लिक करने योग्य कि-शब्दों को सर्च मॅ चालू करॅ','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('प्लग-इन चालू करॅ', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('नोन-राउटेबल(स्वयं के) आई-पी पतों को रोकना चालू करॅ', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('ब्राउजेबल बेच-मोड मॅ जोडने का इंटरफेस', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'भाषा और शब्द सैटिंग',
  array('भाषा', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('इंग्लिश पर वापस आ जायॅ अगर कोई शब्द बदली हुई भाषा मॅ नहीं मिले?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('शब्द एनकोडिंग', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('भाषा सूची दिखायॅ', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('भाषा झंडें दिखायॅ', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('दिखायॅ &quot;पुनः सेट&quot; भाषा चुनाव मॅ', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'थीम्स सैटिंग',
  array('थीम', 'थीम', 6, 'f=idex.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('थीम सूची दिखायॅ', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('दिखायॅ &quot;पुनः सेट&quot; थीम चुनाव मॅ', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('FAQ दिखायॅ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('कस्टम मेन्यु लिंक नाम', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('कस्टम मेन्यु लिंक यू-आर-एल', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('bbcode सहायता दिखायॅ', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('वेंटिटी बक्सा उन थीम्स पर दिखायॅ जो कि XHTML और CSS के अनुरूप बातायॅ गये हैं','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('कस्टम हेडर को जोडने का रास्ता', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('कस्टम फुटर को जोडने का रास्ता', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'एल्बम सूची का दिखना',
  array('मुख्य टेबल की चौडाई (पिक्सल्स या %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('केटेगरी स्तर दिखाने की संख्या', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('एल्बम दिखाने की संख्या', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('एल्बम सूची के खाने दिखाने की संख्या', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('पिक्सल्स मॅ थम्बनेल का आकार', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('मुख्य प्रष्ट के अवयव', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('केटेगरी मॅ पहले स्तर के एल्बम की थम्बनेल को दिखायॅ','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('केटेगरियों को नाम के हिसाब के कॄमबद्ध करॅ (कस्टम कॄमबद्ध तरीके की जगह)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('लिंक्ड फाइलों की संख्या दिखायॅ','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'थम्बनेल दिखना',
  array('थम्बनेल प्रष्ट पर खानों की संख्या', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('थम्बनेल प्रष्ट पर कतारों की संख्या', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('अधिक से अधिक टेब दिखाने कि संख्या', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('थम्बनेल के नीचे, फाईल केप्शन दिखाये(टाइटल के अलावा)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('थम्बनेल के नीचे, कितने लोगो ने देखा हैं दिखाये', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('थम्बनेल के नीचे, कमेन्टों की कुल संख्या दिखाये', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('थम्बनेल के नीचे, अपलोड करने वाले का नाम दिखाये', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Display name of admin uploaders below the thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('थम्बनेल के नीचे, फाईल का नाम दिखाये', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('एल्बम का विवरण दिखायॅ', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('फाइलों का स्वतः क्रम ', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('कम से कम वोटों की आवश्यकता, मुख्य-रेटेड सूची मॅ आने के लिये', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'ईमेज दिखना', //cpg1.4
  array('फाईल दिखाने के लिये टेबल की चौडाई (पिक्सल्स or %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('फाईल सूचना स्वतः दिखती रहे', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('एक ईमेज के विवरण की अधिकाधिक लम्बाई', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('एक शब्द मॅ अक्शरों की अधिकाधिक संख्या', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('फिल्म पट्टी दिखायॅ', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('फिल्म पट्टी थम्बनेल के नीचे फाईल का नाम दिखायॅ', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('फिल्म पट्टी मॅ अवयवों की संख्या', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('चलचित्र का मिलि-सेकंड्स मॅ अंतराल (1 second = 1000 milliseconds)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'कंमॅट सैटिंग्स', //cpg1.4
  array('गंदे शब्दों को कमेंटो से साफ करॅ', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('कमेंटो मॅ मुस्कान को अनुमति दॅ', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('विविध लगातार कमॅटो को एक हि यूजर के द्वारा अनुमति हॅ (बंद करॅ बाढ की रोकथाम के लिये)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('एक कमेन्ट मॅ अधिकाधिक लाईनों की संख्या', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('एक कंमॅट की अधिकधिक लम्बाई', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('एडमिन को कमॅटो के बारे मॅ ई-मेल से सूचित करॅ', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('कमॅटो को क्रमबद्ध करने का तरीका', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('अंजान कमेन्ट के लेखक के लिये आगे जोडें', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'फाईल और थम्बनेल सैटिंग्स',
  array('JPEG फाईल के लिये गुणवत्ता', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('एक थम्बनेल का अधिकाधिक आकार-प्रकार <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('आकार-प्रकार काम मॅ लॅ (चौडाई या लम्बाई या अधिकाधिक थम्बनेल) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('बीच की पिक्चर बनायॅ','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('एक बीच की पिक्चर या चलचित्र की अधिकतम लम्बाई या चौडाई <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('अपलोड फाईल के लिये अधिकतम आकार (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('अपलोड पिक्चर या चलचित्र के लिये अधिकतम लम्बाई या चौडाई (पिक्सल्स)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('जो पिक्चर आधिकतम लम्बाई और चौडाई से आधिक हैं उनको अपने आप पुनः आकारित करॅ', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'फाइलो और थम्बनेलों की अधिक उन्नत सैटिंग्स',
  array('एल्बम प्राईवेट हो सकता हैं (ध्यान रखॅ: अगर आप हां से ना पर गये तो वर्तमान के कोई भी प्राईवेट एल्बम जनसाधारण हो जायॅगे)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('बिना लोग-ईन किये हुए यूजरगणों को प्राईवेट एल्बम का निशान दिखायॅ','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('फाईल के नाम मॅ छुपे हुए शब्द', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('अपलोडेड फाइलों के स्वीक्रत फाईल ऐक्स्टेंशन', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('स्वीक्रत इमेजो के प्रकार', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('स्वीक्रत चलचित्रों के प्रकार', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('चलचित्र को अपने आप चालू करॅ', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('स्वीक्रत आवाज फाइलों के प्रकार', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('स्वीक्रत पुस्तक फाइलों के प्रकार', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('इमेज को पुनःआकरित करने क तरीका','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('ImageMagick का रास्ता\'कन्वर्ट \' युटिलिटी (उदारहण /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('अनुमति प्राप्त इमेजों के प्रकार (केवल ImageMagick के लिये उपयुक्त)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('निर्देश रेखा चयन ImageMagick के लिये', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('JPEG फाइलों मॅ EXIF डाटा को पढॅ', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('JPEG फाइलों मॅ IPTC डाटा को पढॅ', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('एल्बम डायरेक्टरी <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('यूजर फाइलों के लिये डायरेक्टरी <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('बीच वाली पिक्चर के आगे लगने वाला शब्द (प्रिफिक्स) <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('थम्बनेल के आगे लगने वाला शब्द (प्रिफिक्स) <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('डायरेक्टरियों के लिये स्वतः मोड', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('फाइलों के लिये स्वतः मोड', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'यूजर सैटिंग्स',
  array('नये यूजर के पंजीकरण को अनुमती', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('बिना लोग-ईन किये यूजरगणों को अनुमती (अतिथी या अन्जान) access', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('यूजर पंजीकरण मॅ ई-मेल जांच जरूरी', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('एडमिन को यूजर पंजीकरण की ई-मेल द्वारा सूचना', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('पंजीकरण का एडमिन एक्टिवेशन', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('दो युजरों को एक ही ई-मेल पता होने पर अनुमती', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('एडमिन को ई-मेल द्वारा अनुमती का इंतजार कर रहे यूजर अपलोड की सूचना', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('लोग्ड-ईन यूजर को सदस्यगण सूची दिखाने की अनुमती', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('यूजर को अपने ई-मेल पते को बदलने की अनुमती', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('जनसामान्य गैलेरी मॅ यूजर का उसके पिक्चरों पर नियंत्रण रहने दें', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('अस्थाई रोक से पहले लोग-ईन प्रयासों के असफल की संख्या(ब्रूट फोर्स खतरे को रोकने के लिये)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('असफल लोग-ईन प्रयासों के बाद अस्थाई रोक का समयकाल', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('एडमिन को रिपोर्ट चालू करॅ', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'यूजर प्रोफाईल के लिये कस्टम फील्ड (काम मॅ नहीं आये तो खाली रहने दें).
  प्रोफाईल 6 को ज्यादा लम्बी प्रविष्टियों के लिये काम मॅ लॅ, जैसे की जीवनवर्णन', //cpg1.4
  array('प्रोफाईल 1 नाम', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('प्रोफाईल 2 नाम', 'user_profile2_name', 0), //cpg1.4
  array('प्रोफाईल 3 नाम', 'user_profile3_name', 0), //cpg1.4
  array('प्रोफाईल 4 नाम', 'user_profile4_name', 0), //cpg1.4
  array('प्रोफाईल 5 नाम', 'user_profile5_name', 0), //cpg1.4
  array('प्रोफाईल 6 नाम', 'user_profile6_name', 0), //cpg1.4

  'इमेज विवरण के लिये कस्टम फील्ड (काम मॅ नहीं आये तो खाली रहने दें)',
  array('फील्ड 1 नाम', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('फील्ड 2 नाम', 'user_field2_name', 0),
  array('फील्ड 3 नाम', 'user_field3_name', 0),
  array('फील्ड 4 नाम', 'user_field4_name', 0),

  'कूकी सैटिंग्स',
  array('कूकी का नाम', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('कूकी का रास्ता', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'ई-मेल सैटिंग्स (सामान्यतया यहां कुछ भी परिवर्तन नहीं करना हैं; पक्का नहीं हैं तो, सभी खाने खाली हि छोड दें)', //cpg1.4
  array('SMTP होस्ट (जब खाली छोडा जायेगा, sendmail काम मॅ लिया जावेगा)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP यूजर का नाम', 'smtp_username', 0), //cpg1.4
  array('SMTP कूटशब्द', 'smtp_password', 0), //cpg1.4

  'लोगिंग और सांख्यिकी', //cpg1.4
  array('लोगिंग मोड <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('ई-पत्र लोग करॅ', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('विवरण सहित वोटों की सांख्यिकी','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('विवरण सहित हिट की सांख्यिकी','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'मरम्मत सैटिंग्स', //cpg1.4
  array('डी-बग मोड चालू करॅ', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('डी-बग मोड मॅ सूचनायॅ दिखायॅ', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('गैलेरी ओफलाईन हैं', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);



// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ई-पत्र भेजे',
  'ecard_sender' => 'भेजने वाला',
  'ecard_recipient' => 'पाने वाला',
  'ecard_date' => 'तारीख',
  'ecard_display' => 'ई-पत्र दिखायें',
  'ecard_name' => 'नाम',
  'ecard_email' => 'ई-मेल',
  'ecard_ip' => 'आई-पी #',
  'ecard_ascending' => 'आरोही',
  'ecard_descending' => 'अवरोही',
  'ecard_sorted' => 'क्रमित',
  'ecard_by_date' => 'तारीख के द्वारा',
  'ecard_by_sender_name' => 'भेजने वाले के नाम के द्वारा',
  'ecard_by_sender_email' => 'भेजने वाले के ई-मेल के द्वारा',
  'ecard_by_sender_ip' => 'भेजने वाले के आई-पी के द्वारा',
  'ecard_by_recipient_name' => 'पाने वाले के नाम के द्वारा',
  'ecard_by_recipient_email' => 'पाने वाले के ई-मेल के द्वारा',
  'ecard_number' => '%s to %s of %s रिकोर्ड दिखा रहे है',
  'ecard_goto_page' => 'प्रष्ट पर जाओ',
  'ecard_records_per_page' => 'प्रति प्रष्ट पर रिकोर्ड',
  'check_all' => 'सभी को चुनो',
  'uncheck_all' => 'किसी को मत चुनो',
  'ecards_delete_selected' => 'चुने गये ई-पत्रों को हटाओ',
  'ecards_delete_confirm' => 'क्या आप रिकोर्डो को हटाने के बारे मॅ पक्का हैं? चेकबोक्स पर टिक करॅ!',
  'ecards_delete_sure' => 'मॅ पक्का हूं',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'आपको अपना नाम और कमेन्ट टाइप करने की आवश्यकता हैं',
  'com_added' => 'आपका कमेन्ट जोड दिया गया हैं',
  'alb_need_title' => 'आपको एल्बम को एक टाइटल देने की आवश्यकता हैं!',
  'no_udp_needed' => 'कोई अपडेट की आवश्यकता नहीं है',
  'alb_updated' => 'एल्बम अपडेट हो चुका हैं',
  'unknown_album' => 'चुना गया एल्बम अस्तित्व मॅ नहीं है या फिर आपको इस एल्बम मॅ अपलोड करने की इजाजत नहीं हैं',
  'no_pic_uploaded' => 'कोई फाईल अपलोड नहीं हुई हैं<br /><br />',
  'err_mkdir' => '%s डायरेक्टरी बनाने मॅ असफल!',
  'dest_dir_ro' => 'गन्तव्य डायरेक्टरी %s स्करिप्ट के द्वारा लिखने योग्य नहीं हैं!',
  'err_move' => 'भेजने मॅ असमर्थ %s to %s !',
  'err_fsize_too_large' => 'आपने जो फाईल आपलोड की है उसका आकार बहुत ज्यादा हैं (ज्यादा से ज्यादा अनुमति %s x %s आकार को है) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => 'आपने जो फाईल आपलोड की है को बहुत बडी हैं (ज्यादा से ज्यादा अनुमति %s KB को है) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => 'आपने जो फाईल आपलोड की है वह एक मान्य इमेज फाईल नहीं हैं!',
  'allowed_img_types' => 'आप केवल %s इमेजों को अपलोड कर सकते हैं',
  'err_insert_pic' => '\'%s\' फाईल एल्बम मॅ नहीं डाली जा सकती हैं ',
  'upload_success' => 'आपकी फाईल सफलतापूर्वक अपलोड हो चुकी हैं<br /><br />यह एडमिन की अनुमती कि बाद दिखना चालू हो जायेगी',
  'notify_admin_email_subject' => '%s - अपलोड की जानकारी',
  'notify_admin_email_body' => 'एक पिक्चर %s के द्वारा अपलोड कर दी गयी हैं जिसे आपकी अनुमती की आवश्यकता हैं. देखें %s',
  'info' => 'सूचना',
  'com_added' => 'कमेन्ट जोडे गये',
  'alb_updated' => 'एल्बम अपडेटेड',
  'err_comment_empty' => 'आपका कमेन्ट खाली हैं!',
  'err_invalid_fext' => 'केवल आगे दिखाये गये एक्स्टॅशन वाली फाइलों को ही स्वीकारा जाता हैं : <br /><br />%s.',
  'no_flood' => 'माफ करॅ लेकिन इस फाईल पर आखरी कमेन्ट आपका ही था.<br /><br />आपने कमेन्ट को जो आपने पहले डाला था, उसे बदलॅ अगर आपको उसे बदलना हो तो',
  'redirect_msg' => 'आपको रिडायरेक्ट किया जा रहा हैं<br /><br /><br />क्लिक करॅ \'CONTINUE\'पर अगर प्रष्ट अपने आप रिफ्रेश नहीं हो तो',
  'upl_success' => 'आपकी फाईल को सफलतापूर्वक जोड दिया गया हैं',
  'email_comment_subject' => 'कोपरमाइन फोटो गैलेरी पर कमेन्ट जोड दिया गया हैं',
  'email_comment_body' => 'किसी ने आपकी गैलिरी मॅ कमेन्ट जोडा हैं. उसे यहां से देखे',
  'album_not_selected' => 'एल्बम नहीं चुना गया', //cpg1.4
  'com_author_error' => 'पहले से पंजीक्रत यूजर के द्वारा यह यूजरनेम काम मॅ लिया जा रहा हैं, या तो लोग-इन करॅ या फिर कोई दूसरा काम मॅ लॅ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'केप्शन',
  'fs_pic' => 'पूरे आकार की इमेज',
  'del_success' => 'सफलतापूर्वक हटाया जा चुका हैं',
  'ns_pic' => 'साधारण आकार की इमेज',
  'err_del' => 'हटाई नहीं जा सकी',
  'thumb_pic' => 'थम्बनेल',
  'comment' => 'कमेन्ट',
  'im_in_alb' => 'एल्बम मॅ इमेज',
  'alb_del_success' => '&laquo;%s&raquo; एल्बम हटाया जा चुका हैं', //cpg1.4
  'alb_mgr' => 'एल्बम प्रबंधक',
  'err_invalid_data' => '\'%s\' मॅ गलत डाटा मिला ',
  'create_alb' => '\'%s\' एल्बम बनाते हुए',
  'update_alb' => '\'%s\' एल्बम अपडेट करते हुए, \'%s\' टाइटल और \'%s\' इंडेक्श के साथ',
  'del_pic' => 'फाईल हटाओ',
  'del_alb' => 'एल्बम हटाओ',
  'del_user' => 'यूजर हटाओ',
  'err_unknown_user' => 'चुना गया यूजर अस्तित्व मॅ नहीं हैं!',
  'err_empty_groups' => 'वहां पर कोई समूह टेबल नहीं हैं, या फिर समूह टेबल खाली हैं!', //cpg1.4
  'comment_deleted' => 'कमेन्ट सफलतापूर्वक हटा दिये गये हैं',
  'npic' => 'पिक्चर', //cpg1.4
  'pic_mgr' => 'पिक्चर प्रबंधक', //cpg1.4
  'update_pic' => '\'%s\' पिक्चर अपडेट कर रहे हैं, फाईल का नाम \'%s\' और इंडेक्स \'%s\' के साथ', //cpg1.4
  'username' => 'यूजरनेम', //cpg1.4
  'anonymized_comments' => '%s कमेन्ट anonymized', //cpg1.4
  'anonymized_uploads' => '%s जनसाधारण अपलोड(s) anonymized', //cpg1.4
  'deleted_comments' => '%s कमेन्ट हटाये गये', //cpg1.4
  'deleted_uploads' => '%s जनसाधारण अपलोड हटाये गये', //cpg1.4
  'user_deleted' => 'यूजर %s हटाया गया', //cpg1.4
  'activate_user' => 'यूजर को एक्टिवेट करॅ', //cpg1.4
  'user_already_active' => 'खाता पहले से ही एक्टिवेट किया हुआ हैं', //cpg1.4
  'activated' => 'एक्टिवेट किया हुआ', //cpg1.4
  'deactivate_user' => 'डी-एक्टिवेट यूजर', //cpg1.4
  'user_already_inactive' => 'खाता पहले से ही इनएक्टिव हैं', //cpg1.4
  'deactivated' => 'डी-एक्टिवेट किया हुआ', //cpg1.4
  'reset_password' => 'कूटशब्द पुनःनियोजित करॅ', //cpg1.4
  'password_reset' => 'कूटशब्द %s से पुनःनियोजित', //cpg1.4
  'change_group' => 'प्राथमिक समूह बदलॅ', //cpg1.4
  'change_group_to_group' => '%s से %s को बदलते हुए', //cpg1.4
  'add_group' => 'द्वितियक समूह बनायॅ', //cpg1.4
  'add_group_to_group' => 'जोड रहे यूजर %s को %s समूह मॅ. \'s का %s अब प्राथमिक और %s अब द्वितियक.', //cpg1.4
  'status' => 'स्थिती', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'वह डाटा जो आप पाना चाहते हैं, आपके मेल क्लाइंट के द्वारा खराब कर दिया गया हैं. देखे कि लिंक पूरा हैं.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'आप पक्का हैं कि आप चाहते है कि इस फाईल को हटा दिया जायें? \\nकमेन्ट भी साथ में हट जायॅगें', //js-alert
  'del_pic' => 'इस फाईल को हटायें',
  'size' => '%s x %s पिक्सल्स',
  'views' => '%s बार',
  'slideshow' => 'चलचित्र',
  'stop_slideshow' => 'चलचित्र रोकें',
  'view_fs' => 'पूरे आकार की इमेज कि लिये क्लिक करॅ',
  'edit_pic' => 'फाईल सूचना को एडिट करॅ', //cpg1.4
  'crop_pic' => 'काटॅ और घुमायॅ',
  'set_player' => 'प्लेयर बदलें',
);

$lang_picinfo = array(
  'title' =>'फाईल सूचना',
  'Filename' => 'फाईल का नाम',
  'Album name' => 'एल्बम का नाम',
  'Rating' => 'रेटिंग (%s वोट)',
  'Keywords' => 'की-शब्द',
  'File Size' => 'फाईल का आकार',
  'Date Added' => 'तारीख को जोडी गयी', //cpg1.4
  'Dimensions' => 'आकार-प्रकार',
  'Displayed' => 'दिखाई गयी',
  'URL' => 'यू-आर-एल', //cpg1.4
  'Make' => 'बनना', //cpg1.4
  'Model' => 'मोडल', //cpg1.4
  'DateTime' => 'तारीख समय', //cpg1.4
  'ISOSpeedRatings'=>'आईएसओ', //cpg1.4
  'MaxApertureValue' => 'सबसे ज्यादा अपर्चर', //cpg1.4
  'FocalLength' => 'फोकल लम्बाई', //cpg1.4
  'Comment' => 'कमेन्ट',
  'addFav'=>'पसंदीदा मॅ जोडे',
  'addFavPhrase'=>'पसंदीदा',
  'remFav'=>'पसंदीदा से हटायॅ',
  'iptcTitle'=>'आइपीटीसी टाइटल',
  'iptcCopyright'=>'आइपीटीसी कोपीराइट',
  'iptcKeywords'=>'आइपीटीसी की-शब्द',
  'iptcCategory'=>'आइपीटीसी केटेगरी',
  'iptcSubCategories'=>'आइपीटीसी सब-केटेगरी',
  'ColorSpace' => 'रंग माप', //cpg1.4
  'ExposureProgram' => 'दिखावे का कार्यकम', //cpg1.4
  'Flash' => 'फ्लेश', //cpg1.4
  'MeteringMode' => 'मापने का तरीका', //cpg1.4
  'ExposureTime' => 'दिखावे का समय', //cpg1.4
  'ExposureBiasValue' => 'दिखावे का बायस', //cpg1.4
  'ImageDescription' => 'इमेज का वर्णन', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
  'xResolution' => 'एक्स रिजोल्युशन', //cpg1.4
  'yResolution' => 'वाई रिजोल्युशन', //cpg1.4
  'ResolutionUnit' => 'रिजोल्युशन की इकाई', //cpg1.4
  'Software' => 'सोफ्टवेयर', //cpg1.4
  'YCbCrPositioning' => 'वायबीसीआर स्थिती', //cpg1.4
  'ExifOffset' => 'एक्सिफ ओफसेट', //cpg1.4
  'IFD1Offset' => 'इफडिवन ओफसेट', //cpg1.4
  'FNumber' => 'एफनंबर', //cpg1.4
  'ExifVersion' => 'एक्सिफ वर्जन', //cpg1.4
  'DateTimeOriginal' => 'असली तारीख समय', //cpg1.4
  'DateTimedigitized' => 'डिजिटाइज्ड तारीख समय', //cpg1.4
  'ComponentsConfiguration' => 'अवयवों की कोन्फिगुरेशन', //cpg1.4
  'CompressedBitsPerPixel' => 'कमप्रेशड कमप्रेशड बिट्स प्रति पिक्सल', //cpg1.4
  'LightSource' => 'हल्का स्त्रोत', //cpg1.4
  'ISOSetting' => 'आइएसओ सैटिंग', //cpg1.4
  'ColorMode' => 'रंग मोड', //cpg1.4
  'Quality' => 'गुण', //cpg1.4
  'ImageSharpening' => 'इमेज की चमक', //cpg1.4
  'FocusMode' => 'फोकस मोड', //cpg1.4
  'FlashSetting' => 'फ्लेश सैटिंग', //cpg1.4
  'ISOSelection' => 'आइएसओ चुनाव', //cpg1.4
  'ImageAdjustment' => 'इमेज Adjustment', //cpg1.4
  'Adapter' => 'एडप्टर', //cpg1.4
  'ManualFocusDistance' => 'हाथ से फोकल दूरी', //cpg1.4
  'DigitalZoom' => 'डिजिटल जूम', //cpg1.4
  'AFFocusPosition' => 'ए-एफ फोकस स्थिती', //cpg1.4
  'Saturation' => 'सेचुरेशन', //cpg1.4
  'NoiseReduction' => 'नोइस रिडक्शन', //cpg1.4
  'FlashPixVersion' => 'फ्लेश पिक्स वर्जन', //cpg1.4
  'ExifImageWidth' => 'एक्जिफ इमेज की चौडाई', //cpg1.4
  'ExifImageHeight' => 'एक्जिफ इमेज की ऊंचाई', //cpg1.4
  'ExifInteroperabilityOffset' => 'एक्जिफ इंटरपोर्टेबिलिटी ओफसेट', //cpg1.4
  'FileSource' => 'फाईल का स्त्रोत', //cpg1.4
  'SceneType' => 'सीन का प्रकार', //cpg1.4
  'CustomerRender' => 'ग्राहक रॅडर', //cpg1.4
  'ExposureMode' => 'एक्स्पोजर मोड', //cpg1.4
  'WhiteBalance' => 'सफेद का संतुलन', //cpg1.4
  'DigitalZoomRatio' => 'डिजिटल जूम अनुपात', //cpg1.4
  'SceneCaptureMode' => 'सीन केप्चर मोड', //cpg1.4
  'GainControl' => 'गैन कंट्रोल', //cpg1.4
  'Contrast' => 'कंट्रास्ट', //cpg1.4
  'Sharpness' => 'तीखापन', //cpg1.4
  'ManageExifDisplay' => 'एक्जिफ डिस्प्ले को मेनेज करॅ', //cpg1.4
  'submit' => 'भेजें', //cpg1.4
  'success' => 'सूचना सफलतापूर्वक अपडेटेड.', //cpg1.4
  'details' => 'विवरण', //cpg1.4
);


$lang_display_comments = array(
  'OK' => 'ठीक हैं',
  'edit_title' => 'इस कंमेंट को एडिट करॅ',
  'confirm_delete' => 'आप इस कंमॅट को हटाने के बारे मॅ पक्का हैं ?', //js-alert
  'add_your_comment' => 'आपना कंमॅट जोडॅ',
  'name'=>'नाम',
  'comment'=>'कंमॅट',
  'your_name' => 'अंजान',
  'report_comment_title' => 'इस कंमॅट को एडमिन को रिपोर्ट करॅ', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'इस खिडकी को बंद करने के लिए इमेज पर क्लिक करॅ',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'एक ई-पत्र भेजॅ',
  'invalid_email' => '<font color="red"><b>चेतावनी</b></font>: गलत ई-मेल पता:', //cpg1.4
  'ecard_title' => 'एक ई-पत्र %s के द्वारा आपके लिए',
  'error_not_image' => 'एक ई-पत्र के रूप मॅ केवल इमेज भेजी जा सकती हैं.',
  'view_ecard' => 'दूसरा लिंक अगर ई-पत्र सहीं ढंग से नहीं दिखता है', //cpg1.4
  'view_ecard_plaintext' => 'ई-पत्र को देखने के लिये, इस यू-आर-एल को अपने बरौजर के पते के खाने मॅ कोपी-पेस्ट करॅ:', //cpg1.4
  'view_more_pics' => 'और अधिक पिक्चर्स देखें !', //cpg1.4
  'send_success' => 'आपका ई-पत्र भेजा जा चुका हैं',
  'send_failed' => 'माफ कीजियेगा लेकिन आपका ई-पत्र सरवर के द्वारा नहीं भेजा जा सका हैं...',
  'from' => 'के द्वारा',
  'your_name' => 'आपका नाम',
  'your_email' => 'आपका ई-मेल पता',
  'to' => 'को',
  'rcpt_name' => 'पाने वाले का नाम',
  'rcpt_email' => 'पाने वाले का ई-मेल पता',
  'greetings' => 'मुख्य शब्द', //cpg1.4
  'message' => 'संदेश', //cpg1.4
  'ecards_footer' => '%sके द्वारा भेजा गया, IP %s के द्वारा %s पर(गैलेरी का समय)', //cpg1.4
  'preview' => 'ई-पत्र का प्रिव्यु', //cpg1.4
  'preview_button' => 'प्रिव्यु', //cpg1.4
  'submit_button' => 'ई-पत्र भेजे', //cpg1.4
  'preview_view_ecard' => 'यह ई-पत्र के लिये दूसरा लिंक होगा एक बार इसके बनने के बाद, इसे प्रिव्यु के लिये काम मॅ नहीं लिया जा सकता.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'एडमिन को रिपोर्ट करॅ', //cpg1.4
  'invalid_email' => '<b>चेतावनी</b> : गलत ई-मेल पता !', //cpg1.4
  'report_subject' => 'एक रिपोर्ट %s के द्वारा,%s गैलेरी पर', //cpg1.4
  'view_report' => 'दूसरा लिंक अगर रिपोर्ट सहीं ढंग से नहीं दिखता है', //cpg1.4
  'view_report_plaintext' => 'रिपोर्ट को देखने के लिये, इस यू-आर-एल को अपने ब्राउजर के पते के खाने मॅ कोपी-पेस्ट करॅ:', //cpg1.4
  'view_more_pics' => 'गैलेरी', //cpg1.4
  'send_success' => 'आपकी रिपोर्ट को भेजा जा चुका हैं', //cpg1.4
  'send_failed' => 'माफ करॅ लेकिन आपकी रिपोर्ट सरवर के द्वारा नहीं भेजी जा सकी हैं...', //cpg1.4
  'from' => 'के द्वारा', //cpg1.4
  'your_name' => 'आपका नाम', //cpg1.4
  'your_email' => 'आपका ई-मेल पता', //cpg1.4
  'to' => 'को', //cpg1.4
  'administrator' => 'एडमिनिस्ट्रेटर/मोड', //cpg1.4
  'subject' => 'विषय', //cpg1.4
  'comment_field_name' => 'रिपोर्ट कर रहा है, "%s" के कंमॅट पर', //cpg1.4
  'reason' => 'कारण', //cpg1.4
  'message' => 'संदेश', //cpg1.4
  'report_footer' => '%sके द्वारा भेजा गया, IP %s के द्वारा %s पर(गैलेरी का समय)', //cpg1.4
  'obscene' => 'ओबसीन', //cpg1.4
  'offensive' => 'दुष्टता', //cpg1.4
  'misplaced' => 'विषय से परे/गलत स्थान पर', //cpg1.4
  'missing' => 'भूली हुई', //cpg1.4
  'issue' => 'गलती का संदेश/नहीं देखा जा सका', //cpg1.4
  'other' => 'कोई और', //cpg1.4
  'refers_to' => 'फाईल रिपोर्ट पर कैंद्रित', //cpg1.4
  'reasons_list_heading' => 'रिपोर्ट के कारण:', //cpg1.4
  'no_reason_given' => 'कोई कारण नहीं दिया गया', //cpg1.4
  'go_comment' => 'कंमॅट पर जायॅ', //cpg1.4
  'view_comment' => 'पूरी रिपोर्ट मय कंमॅट के देखें', //cpg1.4
  'type_file' => 'फाईल', //cpg1.4
  'type_comment' => 'कंमॅट', //cpg1.4
  'invalid_data' => 'रिपोर्ट के डाटा जिन्हें आप देखना चाहते हैं, आपके ई-मेल क्लाईंट के द्वारा खराब हो चुके हैं. Check the link is complete.', //cpg1.4

);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'फाईल सूचना',
  'album' => 'एल्बम',
  'title' => 'टाइटल',
  'filename' => 'फाईल का नाम', //cpg1.4
  'desc' => 'विवरण',
  'keywords' => 'की-शब्द',
  'new_keyword' => 'नया की-शब्द', //cpg1.4
  'new_keywords' => 'नया की-शब्द मिला', //cpg1.4
  'existing_keyword' => 'पहले के की-शब्द', //cpg1.4
  'pic_info_str' => '%s बार; %s - %s KB - %s देखा गया - %s वोट',
  'approve' => 'फाईल को अनुमति दॅ',
  'postpone_app' => 'फाईल को अनुमति को स्थगित करॅ',
  'del_pic' => 'फाईल को हटायॅ',
  'del_all' => 'सभी फाइलों को हटायॅ', //cpg1.4
  'read_exif' => 'एक्जिफ सूचना को दुबारा पढॅ',
  'reset_view_count' => 'देखे गये के काउंटर को पुनःनियोजित करॅ',
  'reset_all_view_count' => 'सभी देखे गये के काउंटरो को पुनःनियोजित करॅ', //cpg1.4
  'reset_votes' => 'वोटो को पुनःनियोजित करॅ',
  'reset_all_votes' => 'सभी वोटो को पुनःनियोजित करॅ', //cpg1.4
  'del_comm' => 'कमॅटो को हटायॅ',
  'del_all_comm' => 'सभी कमॅटो को हटायॅ', //cpg1.4
  'upl_approval' => 'अपलोड अनुमती', //cpg1.4
  'edit_pics' => 'फाइलों को एडिट करॅ',
  'see_next' => 'अगली फाईल को देखॅ',
  'see_prev' => 'पिछ्ली फाईल को देखॅ',
  'n_pic' => '%s फाइलॅ',
  'n_of_pic_to_disp' => 'दिखायी जाने के लिये फाइलों की संख्या',
  'apply' => 'परिवर्तनों को लागू करॅ',
  'crop_title' => 'कोपरमाइन पिक्चर एडिटर',
  'preview' => 'प्रिव्यु',
  'save' => 'पिक्चर को सुरक्शित करॅ',
  'save_thumb' =>'थम्बनेल के रूप मॅ सुरक्शित करॅ',
  'gallery_icon' => 'इसे मेरा निशान बनायॅ', //cpg1.4
  'sel_on_img' =>'चुनाव सारी इमेज के लिये होना चाहिये!', //js-alert
  'album_properties' =>'एल्बम प्रोपरटीज', //cpg1.4
  'parent_category' =>'माता-पिता केटेगरी', //cpg1.4
  'thumbnail_view' =>'थम्बनेल दिखाना', //cpg1.4
  'select_unselect' =>'चुनॅ/किसी को ना चुनॅ', //cpg1.4
  'file_exists' => "गन्तव्य फाईल '%s' पहले से ही वहां हैं.", //cpg1.4
  'rename_failed' => "'%s' को '%s' से पुनःनामकरण करने मॅ असमर्थ.", //cpg1.4
  'src_file_missing' => "स्त्रोत फाईल '%s' गुम हो रही हैं.", // cpg 1.4
  'mime_conv' => "'%s' को '%s' मॅ बदलने मॅ असमर्थ",//cpg1.4
  'forb_ext' => 'छुपे हुए फाईल एक्सटेंशन.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'बार-बार पूछे जाने वाले सवाल',
  'toc' => 'टेबल के अवयव',
  'question' => 'प्रश्न: ',
  'answer' => 'उत्तर: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'सामान्य FAQ',
  array('मुझे पंजीकरण की आवश्यकता क्यों है?', 'पंजीकरण एडमिन के द्वारा जरूरी किया हुआ हो भी सकता हैं और नहीं भी. पंजीकरण एक सदस्य को अतिरिक्त फीचर्स प्रदान करता है. जैसे की अपलोडिंग, एक पंसन्दीदा की सूची, पिक्चर्स की रेटिंग और कमेन्ट डालना.', 'allow_user_registration', '1'),
  array('मैं पंजीकरण कैसे कर सकता हूं?', '&quot;पंजीकरण&quot; पर जायॅ और मांगे गये जरूरी खाने को भरॅ (और गैर-जरूरी भी अगर आप चाहॅ तो).<br />अगर एडमिनिस्ट्रेटर ने ई-मेल एक्टिवेशन चालू कर रखा होगा, तो अपनी सूचना को भेजने के बाद आपको एक ई-मेल मिलेगी उस पते पर जो आपने पंजीकरण के साथ भेजा हैं, जोकि आपको सूचना देगा कि आप अपनी सदस्यता को कैसे चालू करॅ. लोग-ईन करने से पहले आपकी सदस्यता आवश्यक रूप से चालू होनी चाहिये.', 'allow_user_registration', '1'), //cpg1.4
  array('मॅ लोग-ईन कैसे करूं?', '&quot;लोग-ईन&quot; लोग-ईन पर क्लिक करॅ, अपना यूजर-नाम और कूटशब्द दॅ और &quot;मुझे याद रखॅ&quot; पर सही का क्लिक करॅ, ताकि आप हमेशा लोग्ड-ईन रहॅ भले हि आप इस साईट से चलॅ हि क्यों ना जायॅ.<br /><b>महत्वपूर्ण: कूकिज चालू होना जरूरी हैं और इस साईट के कूकीज नहीं हाटायॅ जाने चाहिये यदि आप  &quot;मुझे याद रखॅ&quot; को काम मॅ लेना चाहते हैं.</b>', 'ओफलाईन', 0),
  array('मैं लोग-ईन क्यों नहीं कर पा रहा हूं?', 'क्या आपने पंजीकरण कर रखा हैं और आपने उस लिंक पर भी क्लिक कर दिया हैं जो आपको भेजा गया था? वह लिंक आपके खाते को चालू कर पायेगा. अन्य किसी लोग-ईन समस्या के लिये साइट एडमिनिस्ट्रेटर से सम्पर्क करॅ.', 'ओफलाईन', 0),
  array('क्या होगा यदि मैं अपना कूटशब्द भूल गया हूं?', 'यदि इस साइट पर &quot;कूटशब्द की यादाश्ति&quot का लिंक हैं; तो उसे काम मॅ लॅ. नहीं तो साइट एडमिनिस्ट्रेटर से नये कूटशब्द के लिये सम्पर्क करॅ. .', 'ओफलाईन', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'ओफलाईन', 0),
  array('कैसे मॅ किसी पिक्चर को &quot;मेरे पसंदीदा&quot; सूची मॅ सुरक्शित कर सकता हूं?', 'पिक्चर पर क्लिक करॅ और &quot;पिक्चर सूचना&quot; पर क्लिक करॅ. लिंक (<img src="images/info.gif" width="16" height="16" border="0" alt="पिक्चर सूचना" />); पिक्चर सूचना के लिये नीचे की तरफ जायॅ और &quot;पसंदीदा मॅ जोडें&quot; पर क्लिक करॅ.<br />एडमिनिस्ट्रेटर &quot;पिक्चर सूचना&quot; को सामन्यतया चालू रखते हैं.<br />महत्वपूर्ण:कूकिज चालू होना जरूरी हैं और इस साईट के कूकीज नहीं हाटायॅ जाने चाहिये', 'ओफलाईन', 0),
  array('मैं कैसे किसी फाईल को रेट कर सकता हूं?', 'थम्बनेल पर क्लिक करॅ और नीचे जाकर कोई एक रेटिंग चुनें.', 'ओफलाईन', 0),
  array('मैं किसी पिक्चर पर अपना कमेंट कैसे डाल सकता हूं?', 'थम्बनेल पर क्लिक करॅ और नीचे जाकर अपना कमेंट डालॅ .', 'ओफलाईन', 0),
  array('मैं कोई फाईल कैसे अपलोड कर सकता हूं?', '&quot;अपलोड&quot; पर जायें और कोई एल्बम चुनॅ जहां पर आप अपनी फाईल अपलोड करना चाहते हैं. &quot;ब्राउज,&quot; पर क्लिक करॅ अपलोड करने के लिये फाईल को ढूंढॅ और&quot;open.&quot; क्लिक करॅ और एक टाइटल एवं विवरण डालॅ अगर आप चाहें तो. &quot;भेजें&quot; पर क्लिक करॅ.<br /><br />दूसरा तरीका, जो यूजरगण <b>विंडोज XP </b>काम मॅ ले रहे हैं, आप XP पब्लिशिंग विजार्ड को काम मॅ लेकर कई सारी फाइलें एक साथ भी अपलोड कर सकते हैं.<br />निर्देशों के लिये की कैसे करॅ और काम मॅ ली जाने वाली रजिस्टरी फाईल को पाने के लिये, <a href="xp_publish.php">यहां पर क्लिक करॅ.</a>', 'allow_private_albums', 1), //cpg1.4
  array('मुझे एक पिक्चर को कहां पर अपलोड करना चाहिये?', 'आप अपनी फाईल को &quot;मेरी गैलेरी&quot मॅ स्थित अपने किसी एल्बम मॅ अपलोड कर सकते हैं ;. एडमिन्स्टरेटर आपको मुख्य गैलेरी के किसी एल्बम मॅ भी फाईल अपलोड करने की अनुमती दे सकते हैं.', 'allow_private_albums', 0),
  array('मैं किस आकार और प्रकार की फाईल अपलोड कर सकता हूं?', 'आकार और प्रकार (jpg, png, और भी.) एडमिनिस्टरेटर पर निर्भर करता हैं.', 'ओफलाईन', 0),
  array('मैं &quot;मेरी गैलेरी&quot; मॅ स्थित अपने किसी एल्बम को कैसे बनाने, नाम बदलने और हटाने का कार्य कर सकता हूं?', 'आपको पहले से &quot;एडमिन-मोड&quot; मॅ होना चाहिये<br />&quot;एल्बम को जोडॅ/व्यवस्थित करॅ&quot; पर जायॅ और &quot;नया&quot; पर क्लिक करॅ. &quot;नया एल्बम&quot; को अपने पसंदीदा नाम से परिवर्तित करॅ.<br />आप अपनी गैलेरी के किसी भी एल्बम का भी नाम परिवर्तित कर सकते हैं.<br />&quot;परिवर्तनों को लागू करॅ&quot; पर क्लिक करॅ.', 'allow_private_albums', 0),
  array('मॅ यूजरगणों को कैसे मेरे एल्बमों को देखने से रोक या बदल सकता हूं?', 'आपको पहले से &quot;एडमिन-मोड&quot; मॅ होना चाहिये<br />&quot;मेरे एल्बम को बदलॅ&quot; पर जायॅ. &quot;अपडेट एल्बम&quot; स्थान, उस एल्बम को चुनॅ जिसे आप बदलना चाहते हैं.<br />यहां आप नाम, विवरण, थम्बनेल, देखने से रोके और कमेन्ट/रेटिंग की इजाजतों को बदल सकते हैं.<br />&quot;अपडेट एल्बम&quot; पर क्लिक करॅ.', 'allow_private_albums', 0),
  array('मॅ कैसे दूसरे यूजरगण की गैलेरियां देख सकता हूं?', '&quot;एल्बम सूची&quot; पर जायॅ और &quot;यूजर गैलेरियां&quot; को चुनॅ.', 'allow_private_albums', 0),
  array('कूकीज क्या हैं?', 'कूकीज साधारण शब्दों के टुकडें है, जोकि एक वेबसाईट के द्वारा भेजे जाते हैं और आपके कम्प्युटर पर रखॅ जाते हैं.<br />सामान्यतया कूकीज एक यूजर को बिना बार-बार लोग-ईन की आवश्यकता के अनुमति देतें है और ऐसे हि अलग कई कार्य करते हैं.', 'ओफलाईन', 0),
  array('मैं कहां से यह प्रोगराम आपनी साइट के लिये पा सकता हूं?', 'कोपरमाइन एक मुफ्त की मल्टीमीडिया गैलेरी हैं, जोकि GNU GPL के अंतर्गत आती हैं. यह सुविधाओं से युक्त हैं और कई प्लेटफार्मों पर रखी जा चुकी हैं. <a href="http://coppermine-gallery.net/">कोपरमाइन मुख्य प्रष्ट</a> पर अधिक जानकारी और इसे डाउनलोड करने कि लिये जायॅ', 'ओफलाईन', 0),

  'Navigating the Site',
  array('&quot;एल्बम सूची&quot; क्या हैं?', 'यह आपको वह सम्पूर्ण केटेगरी दिखायेगी जिसमॅ आप अभी है, प्रत्येक एल्बम के एक लिंक के साथ. अगर आप किसी भी केटेगरी मॅ नहीं है, तो यह आपको पूरी गैलेरी प्रत्येक केटेगरी के लिंक के साथ दिखायेगी. थम्बनेल भी एक केटेगरी का लिंक हो सकता हैं.', 'ओफलाईन', 0),
  array('&quot;मेरी गैलेरी&quot; क्या हैं ?', 'यह फीचर युजरों को अपने स्वयं की गैलिरियां बनाने, हटाने और एल्बम को बदलने करने देता हैं.', 'allow_private_albums', 1), //cpg1.4
  array('&quot;एडमिन मोड&quot; और &quot;यूजर मोड&quot; के बीच अंतर क्या हैं?', 'यह फीचर, जब आप एडमिन मोड मॅ हों, एक यूजर को अपनी गैलेरी को बदलने देता हैं (ऐसे ही अन्य के लिये भी यदि आपको एडमिन के द्वारा अनुमती हो तो).', 'allow_private_albums', 0),
  array('&quot;फाईल अपलोड&quot; क्या हैं?', 'यह फीचर एक यूजर को फाईल अपलोड करने की अनुमती देता है (आकार और प्रकार एडमिनिस्ट्रेटर के द्वारा तय किये जातें हैं) एक गैलिरी मॅ जोकि आपके या एडमिनिस्ट्रेटर कि द्वारा चुनी गयी हो.', 'allow_private_albums', 0),
  array('&quot;आखरी अपलोड&quot; क्या हैं?', 'यह फीचर आपको साइट के आखरी अपलोड दिखाती हैं.', 'ओफलाईन', 0),
  array('&quot;आखरी कमेन्ट&quot; क्या हैं?', 'यह फीचर आपको फाईल के साथ युजरों के द्वारा डाले गये आखरी कमैंट्स दिखाती हैं.', 'ओफलाईन', 0),
  array('&quot;मुख्य देखी गयी&quot; क्या हैं?', 'यह फीचर आपको सभी यूजरगणों कि द्वारा सबसे ज्यादा देखी गयी फाइलों को दिखाती हैं (भलें हि वो लोग्ड-ईन हो या नहीं).', 'ओफलाईन', 0),
  array('&quot;मुख्य रेटेड&quot; क्या हैं?', 'यह फीचर आपको सर्वोत्तम रेटेड फाइलॅ, रेटिंग के आधार पर जोकि यूजरगणों के द्वारा दी गयी हैं दिखाती हैं, समानुपात रेटिंग के साथ (e.g: पांच यूजर सभी ने <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> रेटिंग दी हैं: तो फाईल की समानुपात रेटिंग होगी <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;पांच यूजरगण जिन्होनॅ फाईल को 1 से 5 तक की रेटिंग दी हैं (1,2,3,4,5) का समानुपात के आधार पर नतीजा होगा <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />रेटिंग्स जाती है <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (सर्वोत्तम) से <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (बेकार).', 'ओफलाईन', 0),
  array('&quot;मेरे पसंदीदा&quot; क्या हैं?', 'यह फीचर यूजर को कूकी मॅ एक पसंदीदा की फाईल बनाने देती हैं जोकि आपके कम्प्युटर को भेजी जा चुकी थी.', 'ओफलाईन', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'कूटशब्द की यादाश्ति',
  'err_already_logged_in' => 'आप पहले से ही लोग्ड-ईन है !',
  'enter_email' => 'अपना ई-मेल पता डालॅ', //cpg1.4
  'submit' => 'जाओ',
  'illegal_session' => 'भूले कूटशब्द का समय-काल(सेशन) गलत हैं या पुराना हो गया हैं.', //cpg1.4
  'failed_sending_email' => 'कूटशब्द की यादाश्ति ई-मेल नहीं भेजी जा सकी हैं!',
  'email_sent' => 'एक ई-मेल आपके यूजर-नाम और कूटशब्द के साथ %s पर भेजी जा चुकी हैं', //cpg1.4
  'verify_email_sent' => '%s को एक ई-मेल भेजी जा चुकी हैं. क्रिपया क्रिया को पूरा करने के लिये आपना ई-मेल पता जांचे .', //cpg1.4
  'err_unk_user' => 'चुना गया यूजर अस्तित्व मॅ नहीं हैं!',
  'account_verify_subject' => '%s - नये कूटशब्द की विनिती', //cpg1.4
  'account_verify_body' => 'आपने एक नये कूटशब्द की मांग की है. अगर आप चाहते हैं कि एक नया कूटशब्द आपको भेजा जाये, तो आगे वाले लिंक पर क्लिक करॅ:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - आपका नया पारवर्ड', //cpg1.4
  'passwd_reset_body' => 'यहां पर नया कूटशब्द हैं जिसकी आपने विनती कि थी:
यूजर का नाम: %s
कूटशब्द: %s
%s पर लोग-ईन के लिये क्लिक करॅ.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'समूह', //cpg1.4
  'permissions' => 'अनुमतियां', //cpg1.4
  'public_albums' => 'जनसाधारण एल्बम अपलोडेड', //cpg1.4
  'personal_gallery' => 'स्वयं की गैलेरी', //cpg1.4
  'upload_method' => 'अपलोड का तरीका', //cpg1.4
  'disk_quota' => 'कोटा', //cpg1.4
  'rating' => 'रेटिंग', //cpg1.4
  'ecards' => 'ई-पत्र', //cpg1.4
  'comments' => 'कमेंट्स', //cpg1.4
  'allowed' => 'अनुमति प्राप्त', //cpg1.4
  'approval' => 'अनुमती', //cpg1.4
  'boxes_number' => 'बक्सों की संख्या', //cpg1.4
  'variable' => 'बदल सकने वाली', //cpg1.4
  'fixed' => 'द्रढ', //cpg1.4
  'apply' => 'परिवर्तनों को लागू करॅ',
  'create_new_group' => 'नया समूह बनायॅ',
  'del_groups' => 'चुने गये समुहों को हटाओ',
  'confirm_del' => 'चेतावनी, जब आप एक समूह को हटाते हो, यूजर जोकि इस समूह से सम्बंध रखता है उनको \'पंजीक्रत\' समूह मॅ भेज दिया जाता है !\n\nक्या आप आगे बढना चाहते है ?', //js-alert
  'title' => 'यूजर समुहो का प्रबंध',
  'num_file_upload' => 'फाईल अपलोड करने के बक्से', //cpg1.4
  'num_URI_upload' => 'यू-आर-एल अपलोड करने के बक्से', //cpg1.4
  'reset_to_default' => '(%s) स्वतः नाम पर पुनः सेट किया- आवश्यक बताया गया!', //cpg1.4
  'error_group_empty' => 'समूह टेबल खाली पडी हैं !<br /><br />स्वतः समूह बनाये गये, करिपया प्रष्ट को पुनः लोड कर लॅ', //cpg1.4
  'explain_greyed_out_title' => 'यह कतार गरेय्ड आउट क्यों हुई हैं?', //cpg1.4
  'explain_guests_greyed_out_text' => 'आप इस समूह की प्रोपरटीज को नहीं बदल सकते है क्योंकि, आपने चुनाव सेट किया हैं &quot; बिना लोग-ईन के युजरों को अनुमती दॅ (अथिती या अंजान) एक्सेस&quot; को &quot;नहीं&quot; कोन्फिग प्रष्ट पर. सभी अथिती (%s समूह के सदस्य) कुछ नहीं कर सकते केवल लोग-ईन के अलावा, इसलिये समूह सैटिंग उन पर लागू नहीं होती हैं.', //cpg1.4
  'explain_banned_greyed_out_text' => 'आप %s समूह की प्रोपरटीज को नहीं बदल सकते है क्योंकि, क्योंकि यह सदस्य हैं और किसी भी तरह से कुछ नहीं कर सकता.', //cpg1.4
  'group_assigned_album' => 'एल्बमों की अनुमती को सेट करॅ)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'स्वागतम !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'क्या आप इस एल्बम को हटाने के बारे मॅ पक्का हैं ? \\nसभी फाइलें व कमैंट्स भी हट जायॅगे.', //js-alert
  'delete' => 'हटायॅ',
  'modify' => 'प्रोपरटीज',
  'edit_pics' => 'फाईल को एडिट करॅ',
);

$lang_list_categories = array(
  'home' => 'घर',
  'stat1' => '<b>[pictures]</b> फाइलॅ <b>[albums]</b> एल्बमों मॅ और <b>[cat]</b> कैटेगरियां <b>[comments]</b> कमैंट्स के साथ <b>[views]</b> बार देखी गयी',
  'stat2' => '<b>[pictures]</b> फाइलॅ <b>[albums]</b> एल्बमों मॅ <b>[views]</b> देखी गयी',
  'xx_s_gallery' => '%s\'s गैलेरी',
  'stat3' => '<b>[pictures]</b> फाइलॅ <b>[albums]</b> एल्बमों मॅ with <b>[comments]</b> कमैंट्स <b>[views]</b> बार देखी गयी',
);

$lang_list_users = array(
  'user_list' => 'यूजर सूची',
  'no_user_gal' => 'यहं कोई यूजर गैलेरी नहीं हैं',
  'n_albums' => '%s एल्बम',
  'n_pics' => '%s फाइलें',
);

$lang_list_albums = array(
  'n_pictures' => '%s फाइलें',
  'last_added' => ', आखरी %s को जोडी गयी',
  'n_link_pictures' => '%s जुडी हुई फाइलॅ', //cpg1.4
  'total_pictures' => '%s कुल फाइलॅ', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'की-शब्द प्रबंधन', //cpg1.4
  'edit' => 'बदलॅ', //cpg1.4
  'delete' => 'बदलॅ', //cpg1.4
  'search' => 'ढूंढॅ', //cpg1.4
  'keyword_test_search' => '%s के लिये नयी खिडकी मॅ ढूंढॅ', //cpg1.4
  'keyword_del' => '%s की-शब्द को हटायॅ', //cpg1.4
  'confirm_delete' => 'क्या आप %s की-शब्द को पूरी गैलेरी से हटाने के बारे मॅ पक्का हैं?', //cpg1.4  // js-alert
  'change_keyword' => 'की-शब्द बदलॅ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'लोग-ईन',
  'enter_login_pswd' => 'लोग-ईन करने के लिये अपना यूजरनाम और कूटशब्द डालॅ',
  'username' => 'यूजर का नाम',
  'password' => 'कूटशब्द',
  'remember_me' => 'मुझे याद रखॅ',
  'welcome' => '%s आपका स्वागत हैं...',
  'err_login' => '*** लोग-ईन नहीं कर सके. दुबारा कोशिश करें ***',
  'err_already_logged_in' => 'आप पहले से लोग्ड-ईन हैं!',
  'forgot_password_link' => 'मैं अपना कूटशब्द भूल गया हूं',
  'cookie_warning' => 'चेतावनी - आपका ब्राउजर स्क्रिप्ट के कूकीज को नहीं ले रहा हैं', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'लोग-आउट',
  'bye' => 'अलविदा %s ...',
  'err_not_loged_in' => 'आप लोग्ड-ईन नहीं हैं!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'बंद', //cpg1.4
  'submit' => 'ठीक हैं', //cpg1.4
  'up' => 'एक स्तर ऊपर', //cpg1.4
  'current_path' => 'वर्तमान रास्ता', //cpg1.4
  'select_directory' => 'कॄपया एक डायरेक्टरी चुनॅ', //cpg1.4
  'click_to_close' => 'इस खिडकी को बंद करने कि लिये इमेज पर क्लिक करॅ',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => '%s को अपडेट करॅ',
  'general_settings' => 'सामान्य सैटिंग्स',
  'alb_title' => 'एल्बम का टाइटल',
  'alb_cat' => 'एल्बम की केटेगरी',
  'alb_desc' => 'एल्बम का विवरण',
  'alb_keyword' => 'एल्बम के की-शब्द', //cpg1.4
  'alb_thumb' => 'एल्बम की थम्बनेल',
  'alb_perm' => 'इस एल्बम के लिये अनुमतियां',
  'can_view' => 'एल्बम देख सकते हैं',
  'can_upload' => 'अतिथी फाईल अपलोड कर सकते हैं',
  'can_post_comments' => 'अतिथी कमेन्ट डाल सकते हैं',
  'can_rate' => 'अतिथी फाइलों को रेट कर सकते हैं',
  'user_gal' => 'यूजर गैलेरी',
  'no_cat' => '* कोई केटेगरी नहीं *',
  'alb_empty' => 'एल्बम खाली हैं',
  'last_uploaded' => 'आखरी अपलोड',
  'public_alb' => 'हर कोई (जनता का एल्बम)',
  'me_only' => 'केवल मुझे',
  'owner_only' => 'एल्बम मालिक (%s) केवल',
  'groupp_only' => '\'%s\'समूह के सदस्य',
  'err_no_alb_to_modify' => 'डाटबेस मॅ कोई एल्बम नहीं जिसे आप बदल सकॅ.',
  'update' => 'एल्बम को अपडेट करॅ',
  'reset_album' => 'एल्बम को पुनः सेट करॅ', //cpg1.4
  'reset_views' => 'देखे गये के काउंटर को &quot;0&quot; पर सेट करॅ %s मॅ', //cpg1.4
  'reset_rating' => '%s की सभी फाइलों पर रेटिंग्स को पुनःसेट करॅ', //cpg1.4
  'delete_comments' => '%s मॅ बनायें हुए सभी कमेन्टों को हटायें', //cpg1.4
  'delete_files' => '%s बिना किया नहीं हो सकता%s %s की सभी फाइलों को हटायॅ', //cpg1.4
  'views' => 'देखी गयी', //cpg1.4
  'votes' => 'वोट', //cpg1.4
  'comments' => 'कमेंट', //cpg1.4
  'files' => 'फाइलॅ', //cpg1.4
  'submit_reset' => 'परिवर्तनों को भेजें', //cpg1.4
  'reset_views_confirm' => 'मैं पक्का हूं', //cpg1.4
  'notice1' => '(*) %sसमूह%s सैटिंगों पर निर्भर कर रहा हैं',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'एल्बम का कूटशब्द', //cpg1.4
  'alb_password_hint' => 'एल्बम के कूटशब्द का ईशारा', //cpg1.4
  'edit_files' =>'फाइलों को एडिट करॅ', //cpg1.4
  'parent_category' =>'माता-पिता केटेगरी', //cpg1.4
  'thumbnail_view' =>'थम्बनेल दिखना', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP सूचना',
  'explanation' => 'यह दिखावा PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a> के द्वारा तैयार किया गया हैं, कोपरमाइन के साथ दिखाया गया (दिखावे को दाहिने तरफ से ट्रिम करते हुए).',
  'no_link' => 'दूसरो का आपकी phpinfo देखना सुरक्शा जोखिम हो सकता हैं, इसीलिये यह प्रष्ट केवल तभी दिखता है जब आप एडमिन के नाते लोग्ड-ईन होते हो. आप इस प्रष्ट का लिंक दूसरो के लिये नहीं डाल सकते, अन्यथा उनको इसे पाने से मना कर दिया जावेगा.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'पिक्चर प्रबंधक', //cpg1.4
  'select_album' => 'एल्बम चुनें', //cpg1.4
  'delete' => 'हटायें', //cpg1.4
  'confirm_delete1' => 'क्या आप इस पिक्चर को हटाने के बारे मॅ पक्का हैं?', //cpg1.4
  'confirm_delete2' => '\n पिक्चर हमेशा के लिये हि हटा दी जावेगी.', //cpg1.4
  'apply_modifs' => 'परिवर्तनों को लागू करॅ', //cpg1.4
  'confirm_modifs' => 'परिवर्तनों की पुष्टि', //cpg1.4
  'pic_need_name' => 'पिक्चर को एक नाम की आवश्यकता !', //cpg1.4
  'no_change' => 'आपने कोई बदलाव नहीं किया !', //cpg1.4
  'no_album' => '* कोई एल्बम नहीं *', //cpg1.4
  'explanation_header' => 'कस्टम क्रमबध्दीकरण का तरीका जो आप इस प्रषट पर बता सकते हैं केवल तभी काम मॅ लिया जावेगा यदि', //cpg1.4
  'explanation1' => 'एडमिन ने "फाइलों का स्वतः क्रम तरीका" को "स्थिती अवरोही" या "स्थिती आरोही" सेट किया है (वैश्विक सैटिंग सभी यूजरगणों के लिये जिन्होनॅ अपने स्तर पर कोई दूसरा क्रम तरीका नहीं अपनाया हैं)', //cpg1.4
  'explanation2' => 'यूजर ने "स्थिती अवरोही" या "स्थिती आरोही" थम्बनेल प्रषट पर सेट किया हैं (प्रति यूजर सैटिंग)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'क्या आप इस प्लग-ईन को बिना डाला हुआ करने के बारे मॅ पक्का हैं', //cpg1.4
  'confirm_delete' => 'क्या आप इस प्लग-ईन को हटाने के बारे मॅ पक्का हैं', //cpg1.4
  'pmgr' => 'प्लग-ईन प्रबंधक', //cpg1.4
  'name' => 'नाम', //cpg1.4
  'author' => 'लेखक', //cpg1.4
  'desc' => 'विवरण', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'डाले हुए प्लग-ईन', //cpg1.4
  'n_plugins' => 'प्लग-ईन्स डाले हुए नहीं हैं', //cpg1.4
  'none_installed' => 'कोई डाला हुआ नहीं हैं', //cpg1.4
  'operation' => 'कर्म', //cpg1.4
  'not_plugin_package' => 'जो फाईल अपलोड की गयी है वो एक प्लग-ईन नहीं हैं.', //cpg1.4
  'copy_error' => 'वहां पर पैकेज को प्लग-ईन फोल्डर मॅ कापी करके ले जाते समय एक गलती सामने आई हैं.', //cpg1.4
  'upload' => 'अपलोड', //cpg1.4
  'configure_plugin' => 'प्लग-ईन को कोन्फिगर करॅ', //cpg1.4
  'cleanup_plugin' => 'प्लग-ईन को साफ करॅ', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'माफ कीजियेगा लेकिन आप पहले से ही इस फाईल को रेट कर चुके हैं',
  'rate_ok' => 'आपका वोट प्राप्त कर लिया गया हैं',
  'forbidden' => 'आप अपनी स्वयं की फाईल को रेट नहीं कर सकते.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
हालांकि {SITE_NAME} के एडमिनिस्ट्रेटर सामान्यतया जितना ज्यादा हो सके विवादों वाले सामानों को हमेशा हटाने की कोशिश करते हैं, इसलिये यह सम्भव है कि प्रत्येक पोस्ट की जांच हो. आप जानते हैं कि सभी पोस्ट जोकि इस साइट मॅ की जाती हैं लेखक की धारणा और मत को संबोधित करती हैं नाकि एडमिनिस्ट्रेटर या वेबमास्टर (इन लोगो को छोड कर) और इसलिये उत्तरदायी नहीं होंगे.<br />
<br />
आप सहमत हैं कि आप कोई भी प्रकार का गाली देने लायक, गलत, बुराई से भरा हुआ, चोरी किया हुआ, सेक्स से भरा हुआ या ऐसा कोई भी सामान जोकि विधी का उल्लंघन कराता हो इस साइट पर नहीं डालॅगे. आप सहमत हैं कि {SITE_NAME} साइट के एडमिनिस्ट्रेटर, वेबमास्टर और मोडरेटर वो जिस भी सामान को चाहे उसे हटाने या बदलने का अधिकार रखते हैं. एक यूजर के नाते आप सहमत हैं कि कोई भी सूचना जो आपने ऊपर डाली हैं उसे डाटाबेस मॅ सुरक्शित कर दिया जायॅ. जबकि यह सूचना कभी भी आपकी जानकारी के बिना किसी भी तीसरे पक्श के सामने नहीं रखी जायेगी वेबमास्टर और एडमिनिस्ट्रेटर कभी भी हैकिंग प्रयासों जोकि डाटा को चुरा सकते हैं के लिये उत्तरदायी नहीं हैं.<br />
<br />
यह साइट आपके स्थानीय कम्प्युटर पर सूचनायें रखने के लिये कूकीज का इस्तेमाल करती हैं. यह कूकीज केवल आपके दिखने के आनन्द को बढाने के लिये ही भेजी जाती हैं. ई-मेल केवल आपके खाते के पंजीकरण के विवरण और कूटशब्द की पुष्टि के लिये ही काम मॅ ली जाती हैं.<br />
<br />
'मैं सहमत हूं' पर क्लिक करने का मतलब यह हैं कि आप इन शर्तों के लिये बाध्य हैं.
EOT;

$lang_register_php = array(
  'page_title' => 'यूजर का पंजीकरण',
  'term_cond' => 'बातें और स्थितियां',
  'i_agree' => 'मैं सहमत हूं',
  'submit' => 'पंजीकरण को भेजें',
  'err_user_exists' => 'आपने जो यूजरनाम मांगा हैं वह पहले से हि कोई दूसरा काम मॅ ले रहा हैं कॄपया कोई दूसरा पसंद करॅ',
  'err_password_mismatch' => 'दोनों कूटशब्द मिलान नहीं खा रहे हैं, कॄपया उन्हॅ दुबारा डालॅ',
  'err_uname_short' => 'यूजरनाम कम से कम 2 अक्शर बडा होना चाहिये',
  'err_password_short' => 'कूटशब्द कम से कम 2 अक्शर बडा होना चाहिये',
  'err_uname_pass_diff' => 'यूजरनाम और कूटशब्द अलग-अलग चाहिये',
  'err_invalid_email' => 'ई-मेल पता गलत हैं',
  'err_duplicate_email' => 'आपके द्वारा डालॅ गये ई-मेल पते से पहले से हि कोई पंजीक्रत हैं',
  'enter_info' => 'पंजीकरण सूचना डालॅ',
  'required_info' => 'मांगी गयी सूचना',
  'optional_info' => 'पसंद पर निर्भर सूचना',
  'username' => 'यूजर का नाम',
  'password' => 'कूटशब्द',
  'password_again' => 'कूटशब्द दुबारा डालॅ',
  'email' => 'ई-मेल',
  'location' => 'स्थान',
  'interests' => 'पसंदें',
  'website' => 'घर का प्रष्ट',
  'occupation' => 'व्यवसाय',
  'error' => 'गलती',
  'confirm_email_subject' => '%s - पंजीकरण पुष्टी',
  'information' => 'सूचना',
  'failed_sending_email' => 'पंजीकरण पुष्टी की ई-मेल नहीं भेजी जा सकी हैं!',
  'thank_you' => 'पंजीकरण करने के लिये धन्यवाद.<br /><br />एक ई-मेल इस सूचना के साथ की आपके खाते को कैसे चालू किया जाये, आपके बताये गये ई-मेल पते पर भेज दी गयी हैं.',
  'acct_created' => 'आपका खाता बना चुका हैं और आप अब अपने यूजरनाम और कूटशब्द की सहायता से लोग-ईन कर सकते हैं',
  'acct_active' => 'आपका खाता चालू हो चुका हैं और आप अब अपने यूजरनाम और कूटशब्द की सहायता से लोग-ईन कर सकते हैं',
  'acct_already_act' => 'खाता पहले से चालू हैं!', //cpg1.4
  'acct_act_failed' => 'यह खाता चालू नहीं किया जा सका हैं !',
  'err_unk_user' => 'चुना गया यूजर अस्तित्व मॅ नहीं हैं !',
  'x_s_profile' => '%s\'की प्रोफाईल',
  'group' => 'समूह',
  'reg_date' => 'जुडा',
  'disk_usage' => 'डिस्क काम मॅ ली जा रही हैं',
  'change_pass' => 'कूटशब्द बदलॅ',
  'current_pass' => 'वर्तमान कूटशब्द',
  'new_pass' => 'नया कूटशब्द',
  'new_pass_again' => 'नया कूटशब्द दुबारा से',
  'err_curr_pass' => 'वर्तमान कूटशब्द गलत हैं',
  'apply_modif' => 'परिवर्तनों को लागू करॅ',
  'change_pass' => 'मेरा कूटशब्द बदलॅ',
  'update_success' => 'आपकी प्रोफाईल अपडेट हो चुकी हैं',
  'pass_chg_success' => 'आपका कूटशब्द बदला जा चुका हैं',
  'pass_chg_error' => 'आपका कूटशब्द नहीं बदला जा सका हैं',
  'notify_admin_email_subject' => '%s - पंजीकरण सूचना',
  'last_uploads' => 'आखरी अपलोड की गई फाईल.<br />क्लिक करॅ इसके सभी अपलोड देखने के लिये', //cpg1.4
  'last_comments' => 'आखरी कमेन्ट.<br />क्लिक करॅ इसके सभी कमेन्ट देखने के लिये', //cpg1.4
  'notify_admin_email_body' => 'एक नया यूजर "%s" यूजरनाम से आपकी गैलेरी मॅ पंजीकर्त हो चुका हैं',
  'pic_count' => 'फाइलें अपलोड हो चुकी हैं', //cpg1.4
  'notify_admin_equest_email_subject' => '%s - पंजीकरण का निवेदन', //cpg1.4
  'thank_you_admin_activation' => 'धन्यवाद.<br /><br />आपके खाते को चालू करने के संदर्भ मॅ निवेदन एडमिन को भेज दिया गया हैं. यदि आपको अनुमति मिल जाती है तो एक ई-मेल मिल जायेगा.', //cpg1.4
  'acct_active_admin_activation' => 'खाता अब चालू हो गया हैं और उस खाते के यूजर को भी एक ई-मेल भेज दिया गया हैं', //cpg1.4
  'notify_user_email_subject' => '%s - खात सूचनायें', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME} पर पंजीकरण के लिये धन्यवाद

"{USER_NAME}" के यूजरनाम से आपके खाते को चालू करने के लिये, आपको नीचे दिये गये लिंक पर क्लिक करने या इसे अपने बराउजर मॅ कोपी और पेस्ट करने की आवश्यकता हैं.

<a href="{ACT_LINK}">{ACT_LINK}</a>

सम्मान के साथ,

{SITE_NAME} प्रबंधन समूह

EOT;

$lang_register_approve_email = <<<EOT
एक नया यूजर "{USER_NAME}" यूजरनाम के साथ आपकी गैलेरी मॅ पंजीकर्त हो चुका हैं.

आपको खाते को चालू करने के लिये, नीचे दिये गये लिंक पर क्लिक करने या इसे अपने बराउजर मॅ कोपी और पेस्ट करने की आवश्यकता हैं.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
आपका खाते को अनुमती मिल गयी है और आपका खाता चालू हो गया हैं.

अब आप <a href="{SITE_LINK}">{SITE_LINK}</a> से अपने खाते में "{USER_NAME}" यूजरनाम से लोग-ईन कर सकते हैं


सम्मान के साथ,

{SITE_NAME} प्रबंधन समूह

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'कमेन्टों को रिव्यु करॅ',
  'no_comment' => 'रिव्यु करने के लिये कोई कमेन्ट नहीं हैं',
  'n_comm_del' => '%s कमेन्ट हटाये गये',
  'n_comm_disp' => 'दिखाये जाने वाले कमेन्टों की संख्या',
  'see_prev' => 'पिछला देखॅ',
  'see_next' => 'अगला देखॅ',
  'del_comm' => 'चुनॅ गये कमेन्टों को हटायॅ',
  'user_name' => 'नाम', //cpg1.4
  'date' => 'तारीख', //cpg1.4
  'comment' => 'कमेन्ट', //cpg1.4
  'file' => 'फाईल', //cpg1.4
  'name_a' => 'यूजरनाम आरोही', //cpg1.4
  'name_d' => 'यूजरनाम अवरोही', //cpg1.4
  'date_a' => 'तारीख आरोही', //cpg1.4
  'date_d' => 'तारीख अवरोही', //cpg1.4
  'comment_a' => 'कमेन्ट संदेश आरोही', //cpg1.4
  'comment_d' => 'कमेन्ट संदेश अवरोही', //cpg1.4
  'file_a' => 'फाईल आरोही', //cpg1.4
  'file_d' => 'फाईल अवरोही', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'फाइलों के संग्रह मॅ ढूंढॅ', //cpg1.4
  'submit_search' => 'ढूंढॅ', //cpg1.4
  'keyword_list_title' => 'की-शब्द सूची', //cpg1.4
  'keyword_msg' => 'ऊपर दिखाई गयी सूची अपने आप मॅ पूरी नहीं हैं. यह फोटो के टाईटल और विवरण मॅ होने वाले शब्दों को सम्मिलित नहीं करती हैं. पूरण शब्द से ढूंढॅ.',  //cpg1.4
  'edit_keywords' => 'कीवर्डों को बदलॅ', //cpg1.4
  'search in' => 'मॅ ढूंढॅ:', //cpg1.4
  'ip_address' => 'आई-पी पता', //cpg1.4
  'fields' => 'मॅ ढूंढॅ', //cpg1.4
  'age' => 'आयु', //cpg1.4
  'newer_than' => 'से नया', //cpg1.4
  'older_than' => 'से पुराना', //cpg1.4
  'days' => 'दिन', //cpg1.4
  'all_words' => 'सभी शब्दों को ढूढॅ(और)', //cpg1.4
  'any_words' => 'कोई भी शब्द ढूंढॅ(या)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'टाईटल', //cpg1.4
  'caption' => 'केप्शन', //cpg1.4
  'keywords' => 'की-शब्द', //cpg1.4
  'owner_name' => 'मालिक का नाम', //cpg1.4
  'filename' => 'फाईल का नाम', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'नयी फाइलों को ढूढॅ',
  'select_dir' => 'डायरेक्टरी',
  'select_dir_msg' => 'यह फंक्शन आपको फाइलों को बेच मोड मॅ जोडने की अनुमती देता हैं जोकि आपने FTP से अपने सर्वर मॅ अपलोड की हैं.<br /><br />वह डायरेक्टरी चुनॅ जहां आपने फाइलॅ अपलोड की हैं.', //cpg1.4
  'no_pic_to_add' => 'यहां पर कोई फाईल अपलोड करने के लिये नहीं हैं',
  'need_one_album' => 'आपको यह फंक्शन काम मॅ लेने के लिये कम-से-कम एक एल्बम की आवश्यकता हैं',
  'warning' => 'चेतावनी',
  'change_perm' => 'स्करिप्ट इस डायरेक्टरी मॅ नहीं लिख सकती हैं, आपको फाइलॅ जोडने से पहले इसके मोड को 755 या 777 करने की जरूरत हैं.!',
  'target_album' => '<b>&quot;</b>%s<b>&quot; की फाइलों को  </b>%s मॅ डालॅ',
  'folder' => 'फोल्डर',
  'image' => 'फाईल',
  'album' => 'एल्बम',
  'result' => 'परिणाम',
  'dir_ro' => 'लिखने योग्य नहीं. ',
  'dir_cant_read' => 'पढनॅ योग्य नहीं. ',
  'insert' => 'नई फाइलों को गैलेरी मॅ जोडते हुए',
  'list_new_pic' => 'नई फाइलो की सूची',
  'insert_selected' => 'चुनी गयी फाइलों को डालॅ',
  'no_pic_found' => 'कोई नयी फाइल नहीं मिली',
  'be_patient' => 'कॄपया शांती रखें, स्क्रिप्ट को फाइलॅ जोडने ले लिये समय की आवश्यकता हैं',
  'no_album' => 'कोई एल्बम नहीं चुना गया',
  'result_icon' => 'विवरण के लिये क्लिक करॅ या दुबारा लोड करॅ',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : का मतलब हैं फाईल सफलतापूर्वक जोड दी गई हैं'.
                          '<li><b>DP</b> : का मतलब हैं फाईल दुबारा डाली जा रही है और पहले से डाटाबेस मॅ है.'.
                          '<li><b>PB</b> : का मतलब हैं फाईल नहीं जोडी जा सकी हैं, अपनी कोन्फिगुरेशन और डायरेक्टरियों जहां पर फाइलॅ स्थित हैं की अनुमती को जांचें'.
                          '<li><b>NA</b> : का मतलब हैं आपने कोई एल्बम नहीं चुना जहां पर फाइलों को जान था, \'<a href="javascript:history.back(1)">पीछे जायॅ</a>\' पर क्लिक करॅ, और एक एल्बम चुनॅ. यदि आपके पास कोई एल्बम नहीं हैं तो <a href="albmgr.php">पहले एक बनायॅ</a></li>'.
                          '<li>यदि OK, DP, PB \'के निशान\' टूटी हुई फाइल पर क्लिक करने से नहीं आते हैं तो PHP के द्वारा बनाया गया कोई गलती का संदेश देखॅ'.
                          '<li>अगर ब्राउजर समय से बाहर चला गया हैं तो दुबारा लोड करने के बटन पर क्लिक करॅ'.
                          '</ul>',
  'select_album' => 'एल्बम चुनॅ',
  'check_all' => 'सभी चुनॅ',
  'uncheck_all' => 'किसी को नहीं चुनॅ',
  'no_folders' => 'यहां पर "albums" फोल्डर मॅ अभी तक कोई फोल्डर नहीं हैं. कम से कम एक फोल्डर को "albums" फोल्डर के अंदर बनाने को पक्का कर लॅ और अपनी फाइलों को FTP की सहयता से वहां अपलोड करॅ. आपको नाहि "userpics" और नाहि "edit" फोल्डरों मॅ अपने अपलोड करने चाहियॅ. वो http अपलोडों और अंदर के उद्देश्य से बाधित हैं.', //cpg1.4
   'albums_no_category' => 'किसी केटेगरी मॅ नहीं वाले एल्बम', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* स्वयं के एल्बम', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'ब्राउज करने लायक इंटरफेस (आवश्यक बताया गया)', //cpg1.4
  'edit_pics' => 'फाइलों को बदलॅ', //cpg1.4
  'edit_properties' => 'एल्बम की प्रोपरटीज', //cpg1.4
  'view_thumbs' => 'थम्बनेल का दिखना', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'इस कोलम को दिखायॅ/छुपायॅ', //cpg1.4
  'vote' => 'वोटों का विवरण', //cpg1.4
  'hits' => 'हिट्स का विवरण', //cpg1.4
  'stats' => 'वोटों की सांख्यिकी', //cpg1.4
  'sdate' => 'तारीख', //cpg1.4
  'rating' => 'रेटिंग', //cpg1.4
  'search_phrase' => 'ढूंढनॅ के शब्द-समूह', //cpg1.4
  'referer' => 'भेजने वाला', //cpg1.4
  'browser' => 'ब्राउजर', //cpg1.4
  'os' => 'ओपरेटिंग सिस्टम', //cpg1.4
  'ip' => 'आई-पी', //cpg1.4
  'sort_by_xxx' => '%s से क्र्मबध्द करॅ', //cpg1.4
  'ascending' => 'आरोही', //cpg1.4
  'descending' => 'अवरोही', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'बंद करॅ', //cpg1.4
  'hide_internal_referers' => 'अंदर से भेजने वालो को छुपायॅ', //cpg1.4
  'date_display' => 'तारीख दिखाना', //cpg1.4
  'submit' => 'भेजॅ/रिफ्रेश करॅ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP'))$lang_upload_php = array(
  'title' => 'फाईल अपलोड',
  'custom_title' => 'कस्टम निवेदन फोर्म',
  'cust_instr_1' => 'आप एक कस्टुमाइज्ड अपलोड बक्सों की संख्या चुन सकते हैं. हालांकि, आप नीचे दिये गयी सीमा से अधिक नहीं चुन सकते.',
  'cust_instr_2' => 'बक्सा निवेदनों की संख्या',
  'cust_instr_3' => 'फाईल अपलोड के बक्से: %s',
  'cust_instr_4' => 'URI/URL अपलोड के बक्से: %s',
  'cust_instr_5' => 'URI/URL अपलोड के बक्से:',
  'cust_instr_6' => 'फाईल अपलोड के बक्से:',
  'cust_instr_7' => 'कॄपया इस समय आपको प्रत्येक प्रकार के बक्सों की जितनी आवश्यकता हो, डालॅ.  उसके बाद \'आगे बढें\' पर क्लिक करॅ.',
  'reg_instr_1' => 'फोर्म बनाने के लिये गलत क्रिया.',
  'reg_instr_2' => 'अब आप अपनी फाइलों को नीचे दिये गये अपलोड बक्सों की सहयता से अपलोड कर सकते हैं. आपकी प्रत्येक फाइल आपके क्लाइंट से सर्वर का आकार %s KB से अधिक नहीं होना चाहिये. फाइल अपलोड और \'URI/URL Upload\' अपलोड के द्वारा अपलोड की गयी जिप फाइलॅ कम्प्रेस्ड ही रहेगीं.',
  'reg_instr_3' => 'अगर आप जिप्ड फाईल या आर्काइव फाइल को डीकम्प्रेस करना चाहते हैं तो आपको,\'डीकम्प्रेसिव जिप अपलोड\' शेत्र मॅ दिये गये फाईल अपलोड बक्शे को काम मॅ लेना होगा.',
  'reg_instr_4' => 'URI/URL अपलोड शेत्र को काम मॅ लेते समय, इस तरीके से फाईल को अपलोड करने का लिंक दें: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => 'जब आप फोर्म को पूरा कर दें तो, कॄपया\'आगे बढॅ\' पर क्लिक करॅ.',
  'reg_instr_6' => 'डीकम्प्रेसिव जिप अपलोड:',
  'reg_instr_7' => 'फाईल अपलोड:',
  'reg_instr_8' => 'URI/URL अपलोड:',
  'error_report' => 'गलती की रिपोर्ट',
  'error_instr' => 'आगे बताये गये अपलोडों मॅ समस्या आयी हैं:',
  'file_name_url' => 'फाईल का नाम/URL',
  'error_message' => 'गलती का संदेश',
  'no_post' => 'फाईल को पोस्ट के द्वारा अपलोड नहीं किया जा सका हैं.',
  'forb_ext' => 'रोके गये फाइलों के एक्स्टेन्शन.',
  'exc_php_ini' => 'php.ini मॅ अधिक फाइल आकर वाली फाइलों को अनुमती हैं.',
  'exc_file_size' => 'CPG के द्वारा अधिक फाइल आकर वाली फाइलों को अनुमती हैं.',
  'partial_upload' => 'केवल एक टुकडा अपलोड.',
  'no_upload' => 'कोई अपलोड नहीं हुआ.',
  'unknown_code' => 'अंजान PHP अपलोड गलती का कोड.',
  'no_temp_name' => 'अपलोड नहीं - अस्थाई नाम नहीं.',
  'no_file_size' => 'कोई डाटा नही रखती/खराब हैं',
  'impossible' => 'भेजना संभव नहीं हैं.',
  'not_image' => 'ईमेज नहीं है/खराब हैं',
  'not_GD' => 'GD एक्स्टेन्शन नहीं हैं.',
  'pixel_allowance' => 'अपलोड की गई पिक्चर की ऊंचाई ओर या चौडाई गैलेरी की कोन्फिग की अनुमती से अधिक हैं.', //cpg1.4
  'incorrect_prefix' => 'गलत URI/URL पिछे वाला शब्द',
  'could_not_open_URI' => 'URI को खोलने मॅ असमर्थ.',
  'unsafe_URI' => 'सुरक्शा संतोषजनक नहीं हैं.',
  'meta_data_failure' => 'मेटा डाटा मॅ असमर्थता',
  'http_401' => '401 बिना अनुमती के',
  'http_402' => '402 पैसो की जरूरत हैं',
  'http_403' => '403 रोका गया',
  'http_404' => '404 नहीं मिला',
  'http_500' => '500 सर्वर के अंदर की गलती',
  'http_503' => '503 सेवायॅ उपलब्ध नहीं',
  'MIME_extraction_failure' => 'MIME का पता नहीं चल पाया हैं.',
  'MIME_type_unknown' => 'अंजान MIME प्रकार',
  'cant_create_write' => 'लिखने वाली फाईल नहीं बना सके.',
  'not_writable' => 'लिखने वाली फाईल मॅ नहीं लिख पाये.',
  'cant_read_URI' => 'URI/URL को नहीं पढ पाये',
  'cant_open_write_file' => 'URI के लिखने वाली फाइल को कोल नहीं पायॅ .',
  'cant_write_write_file' => 'URI के लिखने वाली फाईल मॅ नहीं लिख पाये.',
  'cant_unzip' => 'अनजिप नहीं कर पायॅ.',
  'unknown' => 'अंजान गलती',
  'succ' => 'अपलोड सफलतापूर्वक हो गये हैं',
  'success' => '%s अपलोड सफलतापूर्वक थे.',
  'add' => 'कॄपया \'आगे बढॅ\' पर फाइलों को एल्बम मॅ जोडने के लिये क्लिक करॅ.',
  'failure' => 'अपलोड गलती',
  'f_info' => 'फाइल की सूचना',
  'no_place' => 'पिछली फाईल को नहीं रखा जा सका हैं.',
  'yes_place' => 'पिछली फाईल को सफलतापूर्वक रखा जा चुका हैं.',
  'max_fsize' => 'Maximum allowed file size is %s KB',
  'album' => 'एल्बम',
  'picture' => 'फाईल',
  'pic_title' => 'फाईल टाइटल',
  'description' => 'फाईल विवरण',
  'keywords' => 'की-शब्द (खाली स्पेसों से अलग-अलग करॅ)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">सूची से डालॅ</a>', //cpg1.4
  'keywords_sel' =>'कोई एक की-शब्द चुनॅ', //cpg1.4
  'err_no_alb_uploadables' => 'माफ कीजियेगा लेकिन वहां कोई एल्बम नहीं हैं जहां आप अपनी फाइलॅ अपलोड कर सकॅ',
  'place_instr_1' => 'फाइलों को इस स्थान पर एल्बमों मॅ डालॅ. आप प्रत्येक फाईल से संदर्भित सूचना भी अब डाल सकते हैं.',
  'place_instr_2' => 'अभिक फाइलॅ स्थान चाहती हैं. कॄपया \'आगे बढॅ\' पर क्लिक करॅ.',
  'process_complete' => 'आपने सभी फाइलों को सफलतापूर्वक रख दिया हैं.',
   'albums_no_category' => 'बिना किसी केटेगरी के एल्बम', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* स्वयं के एल्बम', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'एल्बम चुनॅ', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'बंद करॅ', //cpg1.4
  'no_keywords' => 'माफ कीजियेगा, लेकिन कोई की-शब्द उपलब्ध्द नहीं हैं!', //cpg1.4
  'regenerate_dictionary' => 'शब्द सूची को दुबारा बनायॅ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'सदस्य सूची', //cpg1.4
  'user_manager' => 'यूजर प्रबंधक', //cpg1.4
  'title' => 'युजरों का प्रबंध करॅ',
  'name_a' => 'नाम आरोही',
  'name_d' => 'नाम अवरोही',
  'group_a' => 'समूह आरोही',
  'group_d' => 'समूह अवरोही',
  'reg_a' => 'पंजीकरण दिनांक आरोही',
  'reg_d' => 'पंजीकरण दिनांक अवरोही',
  'pic_a' => 'फाईल संख्या आरोही',
  'pic_d' => 'फाईल संख्या अवरोही',
  'disku_a' => 'डिस्क उपभोग आरोही',
  'disku_d' => 'डिस्क उपभोग अवरोही',
  'lv_a' => 'आखरी आगमन आरोही',
  'lv_d' => 'आखरी आगमन अवरोही',
  'sort_by' => 'यूजरगणों को क्रमबध्द करॅ',
  'err_no_users' => 'यूजर टेबल खाली हैं !',
  'err_edit_self' => 'आप अपनी प्रोफाइल को एडिट नहीं कर सकते हैं, इसके लिये \'मेरी प्रोफाइल\' के लिंक को काम मॅ लॅ',
  'edit' => 'बदलॅ', //cpg1.4
  'with_selected' => 'चुने गये के साथ:', //cpg1.4
  'delete' => 'हटायॅ', //cpg1.4
  'delete_files_no' => 'जनता की फाइलों को रखें (लेकिन अंजान)', //cpg1.4
  'delete_files_yes' => 'जनता की फाइलों को भी हटाये', //cpg1.4
  'delete_comments_no' => 'कमॅटो को रखॅ (लेकिन अंजान)', //cpg1.4
  'delete_comments_yes' => 'कमॅटो को भी हटाये', //cpg1.4
  'activate' => 'चालू करॅ', //cpg1.4
  'deactivate' => 'बंद करॅ', //cpg1.4
  'reset_password' => 'कूटशब्द दुबारा सेट करॅ', //cpg1.4
  'change_primary_membergroup' => 'प्राथमिक सदस्यसमूह को बदलॅ', //cpg1.4
  'add_secondary_membergroup' => 'द्वितियक सदस्यसमूह जोडॅ', //cpg1.4
  'name' => 'यूजर का नाम',
  'group' => 'समूह',
  'inactive' => 'बंद',
  'operations' => 'क्रियायॅ',
  'pictures' => 'फाइलॅ',
  'disk_space_used' => 'स्पेस काम मॅ लिया गया', //cpg1.4
  'disk_space_quota' => 'स्पेस कोटा', //cpg1.4
  'registered_on' => 'पंजीकरण', //cpg1.4
  'last_visit' => 'आखरी आगमन',
  'u_user_on_p_pages' => '%d यूजर %d प्रष्टों पर',
  'confirm_del' => 'क्या आप इस यूजर को हटानॅ के संदर्भ मॅ पक्का हैं ? \\nसभी फाइलॅ और एल्बम भी साथ मॅ हि हटेंगे.', //js-alert
  'mail' => 'मेल',
  'err_unknown_user' => 'चुना गया यूजर अस्तित्व मॅ नहीं हैं !',
  'modify_user' => 'यूजर को बदलॅ',
  'notes' => 'टिप्पणियां',
  'note_list' => '<li>अगर आप वर्तमान कूटशब्द को नहीं बदलना चाहतें हैं तो, "कूटशब्द" के फील्ड को खाली छोड दॅ',
  'password' => 'कूटशब्द',
  'user_active' => 'यूजर का खाता चालू हैं',
  'user_group' => 'यूजर का समूह',
  'user_email' => 'यूजर का ई-मेल',
  'user_web_site' => 'यूजर की वेबसाइट',
  'create_new_user' => 'नया यूजर बनायॅ',
  'user_location' => 'यूजर का स्थान',
  'user_interests' => 'यूजर की पसंदॅ',
  'user_occupation' => 'यूजर का व्यवसाय',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'हालहि के अपलोड्स',
  'never' => 'कभी नहीं',
  'search' => 'यूजर ढूंढॅ', //cpg1.4
  'submit' => 'भेजें', //cpg1.4
  'search_submit' => 'जाओ!', //cpg1.4
  'search_result' => 'के लिये परिणाम ढूंढॅ: ', //cpg1.4
  'alert_no_selection' => 'आपको पहले कम-से-कम एक यूजर चुनना पडेगा!', //cpg1.4 //js-alert
  'password' => 'कूटशब्द', //cpg1.4
  'select_group' => 'समूह चुनॅ', //cpg1.4
  'groups_alb_access' => 'समूह आधारित एल्बम अनुमती', //cpg1.4
  'album' => 'एल्बम', //cpg1.4
  'category' => 'केटेगरी', //cpg1.4
  'modify' => 'बदलॅ?', //cpg1.4
  'group_no_access' => 'इस समूह को कोई भी विशेष अनुमती नहीं हैं', //cpg1.4
  'notice' => 'टिप्पणियां', //cpg1.4
  'group_can_access' => 'एल्बम जिनमॅ केवल "%s" को अनुमती हैं', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'फाइलनाम से टाइटलों को अपडेट करता हैं', //cpg1.4
'टाइटलों को हटाता हैं', //cpg1.4
'थम्बनेल और दुबारा-आकरित इमेज को वापस बनाता हैं', //cpg1.4
'वास्तविक आकार वाली फोटो को हटाता है और उनको दुबारा-आकारित फोटो से बदलता हैं', //cpg1.4
'जगह को खाली करने के लिये वाक्तिविक और बीच वाली फोटो को हटाता हैं', //cpg1.4
'अनाथ कमेन्टों को हटाता हैं', //cpg1.4
'फाइल को आकर और प्रकार को वापस पढता हैं (अगर आपने सामान्यत्या फोटो को बदला है)', //cpg1.4
'देखे गये की गणना संख्या को पुनःनियोजित करता हैं', //cpg1.4
'phpinfo दिखाता हैं', //cpg1.4
'डाटाबेस को अपडेट करता हैं', //cpg1.4
'लोग फाइलों को दिखाता ह', //cpg1.4
);
$lang_util_php = array(
  'title' => 'एडमिन युटिलिटीज (दुबारा-आकारित पिक्चर्स)',
  'what_it_does' => 'ये क्या करता हैं',
  'file' => 'फाईल',
  'problem' => 'सम्सया', //cpg1.4
  'status' => 'स्थिती', //cpg1.4
  'title_set_to' => 'टाईटल को सेट करें',
  'submit_form' => 'भेजें',
  'updated_succesfully' => 'अपलोड सफलतापूर्वक हो चुका हैं',
  'error_create' => 'गलती बना रहा हैं',
  'continue' => 'और अधिक इमेजों को प्रोसेस करॅ',
  'main_success' => '%s फाइल को सफलतापूर्वक मुख्य फाईल को रूप मॅ काम मॅ लिया जा चुका हैं',
  'error_rename' => '%s से नाम को %s बदलने मॅ दिक्कत आ रही हैं',
  'error_not_found' => '%s फाईल नहीं मिली',
  'back' => 'मुख्य मॅ जायॅ',
  'thumbs_wait' => 'थम्बनेल और/या दुबारा-आकारित इमेज को अपडेट कर रहॅ हैं, कॄपया इंतजार करॅ...',
  'thumbs_continue_wait' => 'थम्बनेल और/या दुबारा-आकारित इमेज के अपडेट को जारी रखते हुए...',
  'titles_wait' => 'टाईटल को अपडेट करते हुए, कॄपया इंतजार करॅ...',
  'delete_wait' => 'टाईटल को अपडेट हटाते हुए, कॄपया इंतजार करॅ...',
  'replace_wait' => 'वास्तिविक को हटाते हुए और उनको दुबारा-आकारित इमेज से बदलते हुए, कॄपया इंतजार करॅ...',
  'instruction' => 'तेजगति वाली सूचना',
  'instruction_action' => 'क्रिया चुनॅ',
  'instruction_parameter' => 'पेरामीटर्स को सेट करॅ',
  'instruction_album' => 'एल्बम को चुनॅ',
  'instruction_press' => '%s दबायॅ',
  'update' => 'थम्ब्स और/या दुबारा-आकारित फोटों को अपडेट करॅ',
  'update_what' => 'क्या अपडेट करना चाहिये',
  'update_thumb' => 'केवल थम्बनेल',
  'update_pic' => 'केवल दुबारा-आकारित पिक्चरों को',
  'update_both' => 'थम्बनेल और दुबारा-आकरित पिक्चर्स दोनों',
  'update_number' => 'प्रत्येक क्लिक पर प्रोसेस्ड इमेजो की संख्या',
  'update_option' => '(इस सैटिंग के चुनाव को कम करें यदि आपको समय से बाहर होने की समस्या हो रही हैं)',
  'filename_title' => 'फाईल का नाम &rArr; फाईल का टाईटल',
  'filename_how' => 'कैसे फाईल का नाम परिवर्तित होना चाहिये',
  'filename_remove' => '.jpg के अंत को हटाये और उसे _(अंडरस्कोर) से परिवर्तित करॅ',
  'filename_euro' => '2003_11_23_13_20_20.jpg को 23/11/2003 13:20 से परिवर्तित करॅ',
  'filename_us' => '2003_11_23_13_20_20.jpg को 11/23/2003 13:20 से परिवर्तित करॅ',
  'filename_time' => '2003_11_23_13_20_20.jpg को 13:20 से परिवर्तित करॅ',
  'delete' => 'फाईल के टाईटलों और वास्तिविक आकार वाली फोटों को हटायॅ',
  'delete_title' => 'फाईल के टाईटलों को हटायॅ',
  'delete_title_explanation' => 'यह आपके द्वारा बताये गये एल्बम की सभी फाइलों के टाईटलों को हटायेगा.', //cpg1.4
  'delete_original' => 'वास्तिविक आकार वाली फोटों को हटायॅ',
  'delete_original_explanation' => 'यह पूर्ण आकारा वाली फोटो को हटायेगा.', //cpg1.4
  'delete_intermediate' => 'बीच के आकार वाली पिक्चरों को हटायॅ', //cpg1.4
  'delete_intermediate_explanation' => 'यह बीच के आकार वाली(सामान्य) पिक्चरों को हटायेगा.<br />इस चुनाव को चुनॅ यदि आप अपने डिस्क स्थान को खाली करने के लिये काम मॅ लॅ अगर आपने \'बीच के आकार वाली फोटो बनायॅ\' को कोन्फिग मॅ पिक्चरों को जोडने से पहले बंद कर रखा हैं.', //cpg1.4
  'delete_replace' => 'वास्तिविक आकार वाली इमेजों को हटाकर उनको आकारित इमेजों से परिवर्तित करॅ',
  'titles_deleted' => 'बताये गये एल्बम से सभी टाईटल हट जायेंगे', //cpg1.4
  'deleting_intermediates' => 'बीच के आकार वाली इमेजो को हटाते हुए, कॄपया इंतजार करॅ...', //cpg1.4
  'searching_orphans' => 'अनाथों को ढूंढते हुए, कॄपया इंतजार करॅ...', //cpg1.4
  'select_album' => 'एल्बम चुनें',
  'delete_orphans' => 'खोयी हुए फाइलों से कमॅटो को हटायॅ', //cpg1.4
  'delete_orphans_explanation' => 'यह आपको बतायेगा और आपको किसी भी कमेन्ट को हटाने की अनुमती देगा जोकि केसी ऐसी फाईल से जुडा हुआ है जोकि इस गैलेरी मॅ हि नहीं हैं.<br />सभी एल्बमों को चुनॅ.', //cpg1.4
  'refresh_db' => 'फाईल के आकार-प्रकार और आकार की सूचना को दुबारा लोड करॅ', //cpg1.4
  'refresh_db_explanation' => 'यह फाईल के आकार-प्रकार और आकार को दुबारा पढेगा. इसे काम मॅ लॅ यदि कोटा गलत हैं या आपने साधारणतया किसी फाईल को हाथों से बदला हैं.', //cpg1.4
  'reset_views' => 'देखे गये की संगणना को दुबारा से सेट करॅ', //cpg1.4
  'reset_views_explanation' => 'बताये गये एल्बमों की सभी फाईलों के देखे गये की गणना को शून्य पर सेट करॅ.', //cpg1.4
  'orphan_comment' => 'अनाथ कमेन्ट मिले',
  'delete' => 'हटायॅ',
  'delete_all' => 'सभी को हटायॅ',
  'delete_all_orphans' => 'सभी अनाथों को हटायॅ?', //cpg1.4
  'comment' => 'कमेन्ट: ',
  'nonexist' => 'अस्तित्व मॅ नहीं फाईल से जुडा हुआ हैं # ',
  'phpinfo' => 'phpinfo दिखायॅ',
  'phpinfo_explanation' => 'आपके सर्वर के बारॅ मॅ तकनीकी सूचनाओं को रखता हैं.<br /> - आपको यहां से यह सूच्ना बताने के लिये पूछा जा सकता हैं जब आप मदद मांगेंगे.', //cpg1.4
  'update_db' => 'डाटाबेस को अपडेट करॅ',
  'update_db_explanation' => 'अगर आपने कोपरमाइन की फाइलों को बदला हैं, उनमॅ कोई परिवर्तन जोडा है या किसी पुराने कोपरमाइन के वर्जन को नये से बदला हैं, तो एक बार डाटाबेस अपडेट को चलाना पक्का कर लॅ. यह आवश्यक टेबलॅ बनायेगा और/या वेल्युज को आपकी कोपरमाइन डाटाबेस मॅ सेट करेगा.',
  'view_log' => 'लोग फाइलॅ देखें', //cpg1.4
  'view_log_explanation' => 'कोपरमाइन यूजर के द्वरा की गई विविध क्रियाओं का विवरण रख सकता हैं. आप इन लोग्स को देख सकते हैं यदि आपने इसको चालू कर रखा हैं <a href="admin.php">कोपरमाइन कोन्फिग</a>.', //cpg1.4
  'versioncheck' => 'वर्जनों को जांचें', //cpg1.4
  'versioncheck_explanation' => 'अपनी फाइलों के वर्जन को जांचें की आपने अपग्रेड के समय सभी फाइलों को सही तरह से बदल दिया हैं, या यदि कोपरमाइन स्त्रोत फाइलॅ एक पैकेज के निकलने के बाद अपडेट हो चुकी हैं.', //cpg1.4
  'bridgemanager' => 'पुल प्रबंधक', //cpg1.4
  'bridgemanager_explanation' => 'चालू/बंद करॅ समन्वय(पुल) कोपरमाइन का दूसरी एप्पलिकेशनों के साथ (उदारहणः आपका BBS).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'वर्जन जांच', //cpg1.4
  'what_it_does' => 'यह प्रष्ट उन यूजरगणों के मतलब का हैं जिन्होनॅ हालहिं मॅ अपना कोपरमाइन को अपडेट किया हैं. यह स्करिप्ट आपके वेबसर्वर की फाइलों मॅ जाती हैं और यह जानने की कोशिश करती हैं कि आपकी स्थानीय फाइलॅ जोकि वेबसर्वर पर हैं किस एक http://coppermine.sourceforge.net रिपोजिटरी  की हैं, इस तरह दिखा रहा हैं फाइलॅ जिनको भी आपको अपडेट करना हैं.<br />यह उन सभी को लाल मॅ दिखाता हैं जिनको फिक्स करना जरूरी हैं. जो प्रविष्टियां पीले रंग मॅ है उनको देखने की जरूरत हैं. हरे रंग वाली प्रविष्टियां (या आपका स्वतः फोंट का रंग) ठीक हैं.<br />सहायता निशानों पर अधिक जानकारी के लिये क्लिक करॅ.', //cpg1.4
  'online_repository_unable' => 'ओनलाईन रिपोजिटरी से संपर्क करने मॅ असमर्थ', //cpg1.4
  'online_repository_noconnect' => 'कोपरमाइन आपकी ओनलाईन रिपोजिटरी से संपर्क करने मॅ असमर्थ रही, इसके यहां दो कारण हो सकते हैं:', //cpg1.4
  'online_repository_reason1' => 'ओनलाईन कोपरमाइन रिपोजिटरी वर्तमान मॅ बंद हैं. जांचे की आप इस प्रष्ट को ब्राउज करने मॅ समर्थ हैं: %s - अगर आप इस प्रष्ट से सम्पर्क करने मॅ असमर्थ हैं तो, बाद मॅ कोशिश करॅ.', //cpg1.4
  'online_repository_reason2' => 'आपके सर्वर पर PHP को %s के साथ कोन्फिगर कर बंद कर दिया गया हैं(स्वतः रूप से यह चालू था). अगर सर्वर का एडमिनिस्टरेशन आपके पास हैं तो इसे <i>php.ini</i> मॅ ओन करॅ(कम-से-कम इसे %s से बदलने की अनुमती दें). अगर आप वेबहोस्टेड हैं तो आपको इस सत्यता से परिचित होना पडेगा की आप अपने फाइलों की ओनलाईन रिपोजिटरी से तुलना नहीं कर सकते हैं. यह प्रष्ट तब केवल आपके वितरण के साथ आई हुई फाइलों का हि वर्जन बता सकेगा - अपडेट नहीं दिखाये जा सकेंगे.', //cpg1.4
  'online_repository_skipped' => 'ओनलाईन रिपोजिटरी से संपर्क छोड दिया गया हैं', //cpg1.4
  'online_repository_to_local' => 'स्करिप्ट आपके स्थानीय फाइलों के वर्जन का पता लगाने मॅ असमर्थ. डाटा सही नहीं हो सकता यदि आपने कोपरमाइन को अपग्रेड किया है लेकिन सभी फाइलों को अपलोड नहीं किया हैं. फाइलों को जारी करने के बाद उनमॅ किये गये परिवर्तनों को भी नहीं माना जावेगा.', //cpg1.4
  'local_repository_unable' => 'आपके सर्वर पर स्थित रिपोजिटरी से सम्पर्क करने मॅ असमर्थ', //cpg1.4
  'local_repository_explanation' => 'कोपरमाइन आपके सर्वर पर स्थित %s रिपोजिटरी फाईल से सपर्क करनॅ मॅ असमर्थ थी. इसका संभवतया यह अर्थ हैं कि आपने संदर्भित रिपोजिटरी फाईल अपने वेबसर्वर पर अपलोड नहीं की हैं. यह अब करॅ और इस प्रष्ट को दुबारा चलाने की कोशिश करॅ (रिफ्रेश पर क्लिक करॅ).<br />अगर यह तब भी असमर्थ रहे तो, आपके वेबहोस्ट ने <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s filesystem functions</a> के टुकडों को बंद कर रखा हैं. इस स्थिति मॅ आप, इस टूल को काम मॅ लेने मॅ असमर्थ रहेंगें, माफ कीजियेगा.', //cpg1.4
  'coppermine_version_header' => 'कोपरमाइन का डाला हुआ वर्जन', //cpg1.4
  'coppermine_version_info' => 'आपने वर्तमान मॅ डाला हुआ हैं: %s', //cpg1.4
  'coppermine_version_explanation' => 'अगर आप सकझते हैं कि यह पूरा गलत हैं और आप कोपरमाइअन का कोई नया वर्जन चला रहे हैं तो, <i>include/init.inc.php</i> आपने फाईल का हालहिं  का वर्जन अपलोड नहीं किया हैं', //cpg1.4
  'version_comparison' => 'वर्जन की तुलना', //cpg1.4
  'folder_file' => 'फोल्डर/फाईल', //cpg1.4
  'coppermine_version' => 'cpg का वर्जन', //cpg1.4
  'file_version' => 'फाईल का वर्जन', //cpg1.4
  'webcvs' => 'वेब cvs', //cpg1.4
  'writable' => 'लिखने योग्य', //cpg1.4
  'not_writable' => 'लिखने योग्य नहीं', //cpg1.4
  'help' => 'सहायता', //cpg1.4
  'help_file_not_exist_optional1' => 'फाईल/फोल्डर नहीं मिला', //cpg1.4
  'help_file_not_exist_optional2' => '%s फाईल/फोल्डर सर्वर पर नहीं मिला. हालांकि यह आप के चुनाव पर निर्भर हैं. फाईल को वेबसर्वर पर अपडेट करॅ (FTP क्लाइंट को काम मॅ लेकर) यदि आपको कोई समस्या महसूस होती हैं.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'फाईल/फोल्डर अस्तितव मॅ नहीं हैं', //cpg1.4
  'help_file_not_exist_mandatory2' => '%s फाईल/फोल्डर नहीं मिला, जबकि यह आवश्यक है. फाईल को वेबसर्वर पर अपडेट करॅ (FTP क्लाइंट को काम मॅ लेकर).', //cpg1.4
  'help_no_local_version1' => 'कोई स्थानीय फाईल का वर्जन नहीं', //cpg1.4
  'help_no_local_version2' => 'स्करिप्ट स्थानीय फाईल के वर्जन का पता लगाने मॅ असमर्थ रही - या तो आपकी फाईल बहुत पुरानी है, और या फिर आपने इसे परिवर्तित कर दिया हैं, हैडर सूचना को किसी तरह हटाकर. फाईल को अपडेट करना आवश्यक बताया गया हैं', //cpg1.4
  'help_local_version_outdated1' => 'स्थानीय वर्जन बहुत पुराना हैं', //cpg1.4
  'help_local_version_outdated2' => 'आपके फाईल का वर्जन कोपरमाइन के एक पुराने वर्जन का हैं(संभवतया जिसे आपने अपग्रेड किया हैं). इस फाईल को भी अपडेट करना सुनिश्चित कर लॅ.', //cpg1.4
  'help_local_version_na1' => 'cvs वर्जन सूचना का पता लगाने मॅ असमर्थ', //cpg1.4
  'help_local_version_na2' => 'स्किरिप्ट यह जानने मॅ असमर्थ रही कि आपके वेबसर्वर पर रखी फाइल का cvs वर्जन कौनसा हैं. आपको अपने पैकेज से फाईल को अपलोड करना चाहिये.', //cpg1.4
  'help_local_version_dev1' => 'Development version', //cpg1.4
  'help_local_version_dev2' => 'आपके वेबसर्वर पर रखी फाईल कोपरमाइन के वर्जन से नयी हैं. या तो आप कोई विकासरत फाइल काम मॅ ले रहे हैं(ऐसा आप केवल तब करॅ जब आप जानते हैं कि आप क्या कर रहॅ हैं),या फिर आपने अपनी कोपरमाइन को अपगर्ड कर लिया हैं लेकिन include/init.inc.php को अपलोड नहीं किया हैं', //cpg1.4
  'help_not_writable1' => 'फोल्डर लिखने योग्य नहीं हैं', //cpg1.4
  'help_not_writable2' => 'फाईल की अनुमती को बदलॅ (CHMOD) स्करिप्ट को %s फोल्डर मॅ लिखने की अनुमती देने के लिये और इसमें कुछ भी करने के लिये.', //cpg1.4
  'help_writable1' => 'फोल्डर लिखने योग्य', //cpg1.4
  'help_writable2' => '%s फोल्डर लिखने योग्य हैं. यह एक अनावश्यक खतरा हैं, कोपरमाइन को केवन पढनॅ/एक्जीक्युट करनें की हि आवाश्यकता हैं.', //cpg1.4
  'help_writable_undetermined' => 'कोपरमाइन यह पता लगाने मॅ असमर्थ था की फोल्डर लिखने योग्य हैं या नहीं.', //cpg1.4
  'your_file' => 'आपकी फाईल', //cpg1.4
  'reference_file' => 'संदर्भित फाईल', //cpg1.4
  'summary' => 'छोटा वर्णन', //cpg1.4
  'total' => 'कुल फाइलॅ/फोल्डर जांचें जा चुके हैं', //cpg1.4
  'mandatory_files_missing' => 'जरूरी फाइलें खो रही हैं', //cpg1.4
  'optional_files_missing' => 'जरूरी नहीं वाली फाइलें खो रही हैं', //cpg1.4
  'files_from_older_version' => 'फाइल कोपरमाइन के पुराने काफी वर्जन से आगे हैं', //cpg1.4
  'file_version_outdated' => 'काफी पुराने फाईल के वर्जन', //cpg1.4
  'error_no_data' => 'स्क्रिप्ट नॅ सही कार्य नहीं किया हैं, यह किसी प्रकार की सूचना को पाने मॅ असमर्थ थी. असुविधा के लिये माफी चाहते हैं.', //cpg1.4
  'go_to_webcvs' => '%s पर जायॅ', //cpg1.4
  'options' => 'चुनाव बिंदु', //cpg1.4
  'show_optional_files' => 'जरूरी नहीं वाले फोल्डर/फाइलें दिखायॅ', //cpg1.4
  'show_mandatory_files' => 'आवश्यक फाइलें दिखायॅ', //cpg1.4
  'show_file_versions' => 'फाइलों के वर्जन को दिखायॅ', //cpg1.4
  'show_errors_only' => 'केवल गलती वाले फोल्डरों/फाइलों को दिखाये', //cpg1.4
  'show_permissions' => 'फोल्डर की अनुमती को दिखायॅ', //cpg1.4
  'show_condensed_output' => 'छोटा आउटपुट दिखायॅ (सरल स्क्रिनशूट के लिये)', //cpg1.4
  'coppermine_in_webroot' => 'कोपरमाइन वेबरूट पर डाल दिया गया हैं', //cpg1.4
  'connect_online_repository' => 'ओनलाईन रिपोजिटरी से सम्पर्क करने की कोशिश करॅ', //cpg1.4
  'show_additional_information' => 'अतिरिक्त सूचनाओं को दिखायॅ', //cpg1.4
  'no_webcvs_link' => 'वेब लिंक को नहीं दिखायॅ', //cpg1.4
  'stable_webcvs_link' => 'वेब cvs लिंक को स्थिर शाखा पर दिखायॅ', //cpg1.4
  'devel_webcvs_link' => 'वेब cvs लिंक को devel शाखा पर दिखायॅ', //cpg1.4
  'submit' => 'परिवर्तनों को लागू करॅ / रिफ्रेश', //cpg1.4
  'reset_to_defaults' => 'स्वतः वाली संगणना पर दुबारा सेट करॅ', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'सभी लोग हटायॅ', //cpg1.4
  'delete_this' => 'यह लोग हटायॅ', //cpg1.4
  'view_logs' => 'लोग देखें', //cpg1.4
  'no_logs' => 'कोई लोग बनी हुई नहीं हैं.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP पब्लिशिंग विजार्ड क्लाइन्ट</h1><p>यह मोड्युल, <b>Windows XP</b>वेब पब्लिशिंग विजार्ड को काम मॅ लेने की आपको अनुमति देता हैं</p><p>कोड आर्टिकल के द्वारा बना हुआ हैं 
EOT;

$lang_xp_publish_required = <<<EOT
<h2>क्या चाहिए</h2><ul><li>Windows XP इस विजार्ड को काम मॅ लेने के लिए.</li><li>एक कोपरमाइन के काम मॅ लेने लायक इंस्टालेशन जिस पर <b>वेब अपलोड फंक्शन सही तरीके से काम करता हैं</b></li></ul><h2>क्लाइंट की तरफ कैसे इंस्टाल करॅ</h2><ul><li>पर दांया क्लिक करॅ
EOT;

$lang_xp_publish_select = <<<EOT
चुनॅ &quot;save target as..&quot;. फाईल को अपने हार्ड डिस्क पर जमा करॅ. फाईल को जमा करते समय, यह जांच लॅ कि सोचा गया नाम <b>cpg_###.reg</b> (### एक गणितीय टाइम-मोहर को व्यक्त करता हैं). इसे उस नाम से बदलॅ, अगर आवश्यकता हो तो (अंको को रहने दॅ). डाउनलोड होने के बाद, उस फाईल पर दो-बार क्लिक करॅ, अपने सर्वर को वेब-पब्लिशिंग विजार्ड से पंजीकर्त करनॅ के लिये</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>विंडोज एक्सप्लोरर मॅ, कुछ फाइलॅ चुनॅ और<b>xxx वेब पर प्बलिश करॅ/b>पर बांया तरफ क्लिक कऱॅ</li><li>अपनी चुनी फाईल की पुष्टि करॅ.<b>Next</b> पर क्लिक करॅ.</li><li>सेवाओं की जो सूची आती है, वहां से अपनी फोटो गैलेरी के लिये कोई एक चुनॅ(यदि आपकी गैलेरी कोई नाम रखती है). अगर सेवा नहीं आती हैं तो यह जांचें की आपने <b>cpg_pub_wizard.reg</b> डाल रखी हैं. जैसा की ऊपर दिखाया गया है. </li><li>अगर जरूरत पडॅ तो अपनी लोग-ईन सूचना डालॅ.</li><li> अपनी पिक्चरों के लिये कोई एल्बम चुनॅ या कोई नया जोडॅ. </li><li><b>आगें बढॅ</b> पर क्लिक करॅ. आपकी पिक्चरों का अपलोड शुरू होता हैं.</li><li> जब यह पूरा हो जायें तो अपनी गैलेरी मॅ जांच लॅ की पिक्चरॅ सही तरीके से अपलोड हो गयी हैं.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>टिप्पणियां :</h2><ul><li>एक बार अपलोड शुरू होने के बाद, विजार्ड स्क्रिप्ट के द्वारा भेजा गय कोई गलती का संदेश नहीं दिखा पायेगा इसलिये जब तक आप गैलेरी को नहीं देखेंगे आप यह नहीं जान पायेंगे की अपलोड असफल हुआ हैं या सफल.</li><li>अगर अपलोड असफल होता हैं तो कोपरमाइन एडमिन प्रष्ट से &quot;डीबग मोड&quot; को शुरू करॅ एक अकेली पिक्चर से दुबारा कोशिश करॅ और गलती के संदेश को देखें
EOT;

$lang_xp_publish_flood = <<<EOT
फाईल आपके सर्वर की कोपरमाइन डायरेक्टरी मॅ हैं.</li><li>उसे रोकने के लिये गैलेरी <i>बाढगरस्त</i> पिक्चरॅ जोकि विजार्ड के द्वारा अपलोड की गयी हैं, केवल <b>गैलेरी एडमिन</b> और <b>यूजर जो अपने स्वयं के एल्बम रख सकते हैं</b> इस फीचर को काम मॅ ले सकते हैं .</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'कोपरमाइन - XP पब्लिशिंग विजार्ड', //cpg1.4
  'welcome' => 'स्वागतम् <b>%s</b>,', //cpg1.4
  'need_login' => 'आपको यह विजार्ड काम मॅ लेने से पहले अपने वेबब्राउजर को लोग-इन करना पडेगा<p/><p>लोग-इन करते समय <b>मुझे याद रखॅ</b>चुनना ना भूलॅ, यदि यह उपलब्ध हो.', //cpg1.4
  'no_alb' => 'माफ करॅ लेकिन कोई भी एल्बम उपलब्ध नहीं हैं, जहां आप इस विजार्ड से पिक्चर अपलोड कर सकॅ', //cpg1.4
  'upload' => 'किसी पहले से बनें हुए एल्बम मॅ पिक्चर अपलोड करॅ', //cpg1.4
  'create_new' => 'अपनी पिक्चर के लिये नया एल्बम बनायॅ', //cpg1.4
  'album' => 'एल्बम', //cpg1.4
  'category' => 'केटेगरी', //cpg1.4
  'new_alb_created' => 'आपका नया एल्बम &quot;<b>%s</b>&quot; बन चुका हैं', //cpg1.4
  'continue' => 'दबायॅ &quot;अगला&quot; अपनी पिक्चरों को अपलोड करने के लिये', //cpg1.4
  'link' => 'यह लिंक', //cpg1.4
);
}
?>