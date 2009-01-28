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
  Coppermine version: 1.4.20
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Chinese (Traditional)', //cpg1.4
  'lang_name_native' => '繁體中文', //cpg1.4
  'lang_country_code' => 'tw', //cpg1.4
  'trans_name'=> 'CapriSkye and monkey',
  'trans_email' => 'admin@capriskye.com',
  'trans_website' => 'http://open.38.com/',
  'trans_date' => '2005-07-05',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$lang_month = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

// Some common strings
$lang_yes = '是';
$lang_no  = '否';
$lang_back = '返回';
$lang_continue = '繼續';
$lang_info = '訊息';
$lang_error = '錯誤';
$lang_check_uncheck_all = '勾選/勾選全部'; //cpg1.4

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
  'random' => '隨機圖片',
  'lastup' => '最新上傳',
  'lastalb'=> '最近更新',
  'lastcom' => '最新留言',
  'topn' => '熱門圖片',
  'toprated' => '最高評分',
  'lasthits' => '最近顯示',
  'search' => '搜尋結果',
  'favpics'=> '最愛圖片',
);

$lang_errors = array(
  'access_denied' => '你沒有使用本頁的權限。',
  'perm_denied' => '你沒有權限執行此動作。',
  'param_missing' => '程式被呼叫而沒有需要的參數。',
  'non_exist_ap' => '選擇的 相簿/圖片 不存在！',
  'quota_exceeded' => '超過空間配額<br /><br />您的配額有 [quota]K，已使用的有 [space]K，加入此圖片會超過擁有的配額。',
  'gd_file_type_err' => '當使用 GD 圖像程式庫只容許 JPEG / PNG 圖檔。',
  'invalid_image' => '你上傳的檔案己經損壞, 或是 GD 圖像程式庫不能處理',
  'resize_failed' => '無法建立縮圖或變更圖檔尺寸.',
  'no_img_to_display' => '沒有圖片可以顯示。',
  'non_exist_cat' => '所選擇的類別並不存在。',
  'orphan_cat' => '這個子類別存於一個不存在的母類別，請先至類別管理修正這個問題。',
  'directory_ro' => '目錄 \'%s\' 無法寫入，導致無法刪除圖片',
  'non_exist_comment' => '所選擇的留言並不存在。',
  'pic_in_invalid_album' => '此圖片存於不存在的相簿 (%s)!?',
  'banned' => '您目前被禁止使用本站。',
  'not_with_udb' => '由於本相簿已和論壇程式整合，此功能已停止使用。可能是目前設定不支援此功能，或已由論壇處理。', 
  'offline_title' => '離線',
  'offline_text' => '相簿目前是離線狀態 - 請稍後再試',
  'ecards_empty' => '目前沒有電子卡片的紀錄可顯示。請檢查相簿設定中是否啟用紀錄電子卡片功能！',
  'action_failed' => '動作失敗。Coppermine 無法執行您的要求。',
  'no_zip' => '無法執行ZIP壓縮檔。請聯絡您的相簿管理員。',
  'zip_type' => '您沒有上傳ZIP壓縮檔的權限。',
  'database_query' => '進行資料庫查詢時發生了錯誤', //cpg1.4
  'non_exist_comment' => '選擇的留言不存在', //cpg1.4
);

$lang_bbcode_help_title = 'bbcode 說明'; //cpg1.4
$lang_bbcode_help = '您可以用 bbcode 加入可點的連結，和其它的文字格式： <li>[b]粗體[/b] =&gt; <b>粗體</b></li><li>[i]斜體[/i] =&gt; <i>斜體</i></li><li>[url=http://yoursite.com/]網址[/url] =&gt; <a href="http://yoursite.com">網址</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]顏色[/color] =&gt; <span style="color:red">顏色</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => '回到首頁',
  'home_lnk' => '首頁',
  'alb_list_title' => '返回相簿目錄',
  'alb_list_lnk' => '相簿目錄',
  'my_gal_title' => '返回我的相簿',
  'my_gal_lnk' => '我的相簿',
  'my_prof_title' => '到我的個人資料', //cpg1.4
  'my_prof_lnk' => '我的個人資料',
  'adm_mode_title' => '轉為管理模式',
  'adm_mode_lnk' => '管理模式',
  'usr_mode_title' => '轉為會員模式',
  'usr_mode_lnk' => '會員模式',
  'upload_pic_title' => '上傳圖片至相簿',
  'upload_pic_lnk' => '上傳圖片',
  'register_title' => '建立會員帳號',
  'register_lnk' => '註冊',
  'login_title' => '登入', //cpg1.4
  'login_lnk' => '登入',
  'logout_title' => '登出', //cpg1.4
  'logout_lnk' => '登出',
  'lastup_title' => '瀏覽最新上傳', //cpg1.4
  'lastup_lnk' => '最新上傳',
  'lastcom_title' => '瀏覽最新留言', //cpg1.4
  'lastcom_lnk' => '最新留言',
  'topn_title' => '瀏覽熱門的圖片', //cpg1.4
  'topn_lnk' => '熱門圖片',
  'toprated_title' => '瀏覽評分最高的圖片', //cpg1.4
  'toprated_lnk' => '最高評分',
  'search_title' => '搜尋相簿', //cpg1.4
  'search_lnk' => '搜尋',
  'fav_title' => '到我的最愛', //cpg1.4    
  'fav_lnk' => '我的最愛',
  'memberlist_title' => '顯示會員名單',
  'memberlist_lnk' => '會員名單',
  'faq_title' => '&quot;Coppermine&quot; 相簿的常見問題解答',
  'faq_lnk' => '常見問題解答',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => '核准新上傳', //cpg1.4	
  'upl_app_lnk' => '核准上傳',
  'admin_title' => '進入設定', //cpg1.4    
  'admin_lnk' => '設定', //cpg1.4
  'albums_title' => '進入相簿設定', //cpg1.4
  'albums_lnk' => '相簿',
  'categories_title' => '進入類別設定', //cpg1.4    
  'categories_lnk' => '類別',
  'users_title' => '進入會員設定', //cpg1.4
  'users_lnk' => '會員',
  'groups_title' => '進入群組設定', //cpg1.4
  'groups_lnk' => '群組',
  'comments_title' => '檢查全部留言', //cpg1.4
  'comments_lnk' => '檢查留言',
  'searchnew_title' => '進入批量上傳功能', //cpg1.4
  'searchnew_lnk' => '批量上傳',
  'util_title' => '進入管理功能', //cpg1.4
  'util_lnk' => '管理功能',
  'key_title' => '進入關鍵字詞庫', //cpg1.4
  'key_lnk' => '關鍵字詞庫', //cpg1.4
  'ban_title' => '進入阻擋會員', //cpg1.4
  'ban_lnk' => '阻擋會員',
  'db_ecard_title' => '檢查電子卡片', //cpg1.4
  'db_ecard_lnk' => '顯示電子卡片',
  'pictures_title' => '排序相片', //cpg1.4
  'pictures_lnk' => '排序相片', //cpg1.4
  'documentation_lnk' => '使用說明', //cpg1.4
  'documentation_title' => 'CPG 使用手冊', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => '建立/排序 相簿', //cpg1.4
  'albmgr_lnk' => '建立/排序 相簿',
  'modifyalb_title' => '進入編輯相簿',  //cpg1.4
  'modifyalb_lnk' => '編輯相簿',
  'my_prof_title' => '進入個人資料', //cpg1.4
  'my_prof_lnk' => '個人資料',
);

$lang_cat_list = array(
  'category' => '類別',
  'albums' => '相簿',
  'pictures' => '圖片',
);

$lang_album_list = array(
  'album_on_page' => '%d 個相簿，共 %d 頁',
);

$lang_thumb_view = array(
  'date' => '日期',
  //Sort by filename and title
  'name' => '檔名',
  'title' => '標題',
  'sort_da' => '依日期排序 由遠至近',
  'sort_dd' => '依日期排序 由近至遠',
  'sort_na' => '依名稱排序 由小至大',
  'sort_nd' => '依名稱排序 由大至小',
  'sort_ta' => '依標題排序 由小至大',
  'sort_td' => '依標題排序 由大至小',
  'position' => '位置', //cpg1.4
  'sort_pa' => '小到大排序', //cpg1.4
  'sort_pd' => '大到小排序', //cpg1.4
  'download_zip' => '下載成 Zip 檔',
  'pic_on_page' => '%d 張圖片，共 %d 頁',
  'user_on_page' => '%d 名會員，共 %d 頁',
  'enter_alb_pass' => '輸入相簿密碼', //cpg1.4
  'invalid_pass' => '密碼錯誤', //cpg1.4
  'pass' => '密碼', //cpg1.4
  'submit' => '傳送', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => '返回縮圖頁',
  'pic_info_title' => '顯示/隱藏 圖片資訊',
  'slideshow_title' => '連續播放',
  'ecard_title' => '把圖片以電子卡片寄出',
  'ecard_disabled' => '電子卡片功能目前停用',
  'ecard_disabled_msg' => '您沒有寄電子卡片的權限', //js-alert
  'prev_title' => '顯示前一張圖片',
  'next_title' => '顯示下一張圖片',
  'pic_pos' => '圖片 %s/%s',
  'report_title' => '檢舉這個檔案', //cpg1.4
  'go_album_end' => '跳到最後', //cpg1.4
  'go_album_start' => '回到最先', //cpg1.4
  'go_back_x_items' => '退後 %s 個項目', //cpg1.4
  'go_forward_x_items' => '前進 %s 個項目', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => '對圖片評分',
  'no_votes' => '(還沒有人評分)',
  'rating' => '(目前得分 : %s / 5 於 %s 個評分)',
  'rubbish' => '昏倒 不看也罷',
  'poor' => '有點差勁',
  'fair' => '普普通通',
  'good' => '很好',
  'excellent' => '非常出色',
  'great' => '叫我第一名',
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
  CRITICAL_ERROR => '緊急錯誤',
  'file' => '檔案: ',
  'line' => '行數: ',
);

$lang_display_thumbnails = array(
  'filename' => '檔案名稱=', //cpg1.4
  'filesize' => '檔案大小=', //cpg1.4
  'dimensions' => '圖片尺寸=', //cpg1.4
  'date_added' => '加入日期=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s 個留言',
  'n_views' => '%s 次觀看',
  'n_votes' => '(%s 個評分)',
);

$lang_cpg_debug_output = array(
  'debug_info' => '除錯訊息',
  'select_all' => '全選',
  'copy_and_paste_instructions' => '如果你要在 CPG 的支援論壇上要求協助，複製並貼上這個除錯訊息到你的發表文章內，包括顯示的錯誤訊息。發佈文章前請注意用***來取代您的密碼。<br />注意：除錯訊息只是顯示相簿的訊息，並不代表您的相簿有問題。', //cpg1.4
  'phpinfo' => '顯示PHP訊息 (phpinfo)',
  'notices' => '通知', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => '預設語系',
  'choose_language' => '選擇你的語系',
);

$lang_theme_selection = array(
  'reset_theme' => '預設佈景',
  'choose_theme' => '選擇佈景',
);

$lang_version_alert = array(
  'version_alert' => '不支援的版本！', //cpg1.4
  'no_stable_version' => '您安裝的 CPG 相簿版本 %s (%s) 只是給有經驗的使用者 - 這個版本不會得到官方的支援。如果要得到支援請安裝官方提供的正式版本！', //cpg1.4
  'gallery_offline' => '目前相簿是屬於維修狀態，只有管理員才能進入。維修完畢之後記得將相簿設回正常狀態。', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => '上一個', //cpg1.4
  'next' => '下一個', //cpg1.4
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
  'error_wakeup' => "不能啟用外掛 '%s'", //cpg1.4
  'error_install' => "不能安裝外掛 '%s'", //cpg1.4
  'error_uninstall' => "不能移除外掛 '%s'", //cpg1.4
  'error_sleep' => "不能移除外掛 '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => '感歎',
  'Question' => '疑問',
  'Very Happy' => '很高興',
  'Smile' => '微笑',
  'Sad' => '悲哀',
  'Surprised' => '驚訝',
  'Shocked' => '震驚',
  'Confused' => '昏倒',
  'Cool' => '很棒',
  'Laughing' => '發笑',
  'Mad' => '發狂',
  'Razz' => '嘲笑',
  'Embarassed' => '尷尬',
  'Crying or Very sad' => '嚎哭',
  'Evil or Very Mad' => '惡毒',
  'Twisted Evil' => '古怪',
  'Rolling Eyes' => '旋轉的眼睛',
  'Wink' => '眨眼',
  'Idea' => '主意',
  'Arrow' => '箭頭',
  'Neutral' => '中立',
  'Mr. Green' => '格林先生',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => '離開管理模式...',
  1 => '進入管理模式...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => '您需要給相簿一個名稱 !', //js-alert
  'confirm_modifs' => '確定要做這些修改嗎 ?', //js-alert
  'no_change' => '您沒有做任何改變 !', //js-alert
  'new_album' => '新相簿',
  'confirm_delete1' => '確定要刪除此相簿嗎 ?', //js-alert
  'confirm_delete2' => '\n所有圖片及留言都會刪除 !', //js-alert
  'select_first' => '請先選擇一個相簿', //js-alert
  'alb_mrg' => '相簿管理員',
  'my_gallery' => '* 我的相簿 *',
  'no_category' => '* 沒有類別 *',
  'delete' => '刪除',
  'new' => '新增',
  'apply_modifs' => '修改',
  'select_category' => '選擇類別',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => '阻擋會員', //cpg1.4
  'user_name' => '會員名稱', //cpg1.4
  'ip_address' => 'IP 位置', //cpg1.4
  'expiry' => '期限 (空白如果沒有期限)', //cpg1.4
  'edit_ban' => '儲存', //cpg1.4
  'delete_ban' => '刪除', //cpg1.4
  'add_new' => '新增阻擋', //cpg1.4
  'add_ban' => '新增', //cpg1.4
  'error_user' => '找不到會員', //cpg1.4
  'error_specify' => '您必須提供會員名稱或 IP 位置', //cpg1.4
  'error_ban_id' => '錯誤的阻擋編號！', //cpg1.4
  'error_admin_ban' => '您不能阻擋自己！', //cpg1.4
  'error_server_ban' => '您要阻擋您自己的主機？不要鬧了...', //cpg1.4
  'error_ip_forbidden' => '您不能阻擋這個 IP - 這是不可路徑選擇的 (私人) IP！<br />如果您要允許阻擋私人 IP，在 <a href="admin.php">設定</a> 裡面可以修改。', //cpg1.4
  'lookup_ip' => '搜尋 IP 位置', //cpg1.4
  'submit' => '繼續！', //cpg1.4
  'select_date' => '選擇日期', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => '整合精靈',
  'warning' => '警告：用這個整合精靈，重要資料是以 HTML 傳送。建議您在自己的電腦上使用 (不是在網咖等其他公共場所)，然後確定把瀏覽器的記憶和暫時檔案刪除。',
  'back' => '返回',
  'next' => '下一步',
  'start_wizard' => '開始整合精靈',
  'finish' => '完成',
  'hide_unused_fields' => '隱藏沒用的欄位 (建議)',
  'clear_unused_db_fields' => '清除錯誤的資料庫項目 (建議)',
  'custom_bridge_file' => '自訂的整合檔案名稱 (如果整合檔是叫 <i>myfile.inc.php</i>，在這個欄位輸入 <i>myfile</i>)',
  'no_action_needed' => '不需要任何動作。請點 \'下一步\' 繼續。',
  'reset_to_default' => '重設回預設值',
  'choose_bbs_app' => '選擇整合 CPG 的軟體',
  'support_url' => '如需這個軟體的支援請到',
  'settings_path' => '論壇使用的路徑',
  'database_connection' => '資料庫連結',
  'database_tables' => '資料表',
  'bbs_groups' => '論壇群組',
  'license_number' => '執照號碼',
  'license_number_explanation' => '輸入執照號碼 (如果有)',
  'db_database_name' => '資料庫名稱',
  'db_database_name_explanation' => '輸入論壇使用的資料庫名稱',
  'db_hostname' => '資料庫主機',
  'db_hostname_explanation' => '您的 MySQL 資料庫的主機，通常是 &quot;localhost&quot;',
  'db_username' => '資料庫帳號',
  'db_username_explanation' => '論壇使用的資料庫的用戶帳號',
  'db_password' => '資料庫密碼',
  'db_password_explanation' => '資料庫的用戶帳號密碼',
  'full_forum_url' => '論壇網址',
  'full_forum_url_explanation' => '您的論壇網址 (包括 http:// 例如：http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => '論壇的相對路徑',
  'relative_path_of_forum_from_webroot_explanation' => '論壇的主機相對路徑 (範例：如果您的論壇在 http://www.yourdomain.tld/forum/，輸入 &quot;/forum/&quot;)',
  'relative_path_to_config_file' => '論壇設定檔的相對路徑',
  'relative_path_to_config_file_explanation' => '論壇的相對路徑，從 CPG 目錄計算 (範例 &quot;../forum/&quot; 如果您的論壇是 http://www.yourdomain.tld/forum/ 然後 CPG 是 http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie 前置字元',
  'cookie_prefix_explanation' => '這是論壇的 cookie 名稱',
  'table_prefix' => '資料表的前置字元',
  'table_prefix_explanation' => '論壇使用的資料表的前置字元。',
  'user_table' => '會員資料表',
  'user_table_explanation' => '(通常預設值不會有問題，除非您有改過論壇的安裝)',
  'session_table' => '工作階段的資料表',
  'session_table_explanation' => '(通常預設值不會有問題，除非您有改過論壇的安裝)',
  'group_table' => '群組資料表',
  'group_table_explanation' => '(通常預設值不會有問題，除非您有改過論壇的安裝)',
  'group_relation_table' => '群組關係的資料表',
  'group_relation_table_explanation' => '(通常預設值不會有問題，除非您有改過論壇的安裝)',
  'group_mapping_table' => '群組映像的資料表',
  'group_mapping_table_explanation' => '(通常預設值不會有問題，除非您有改過論壇的安裝)',
  'use_standard_groups' => '使用標準的論壇群組',
  'use_standard_groups_explanation' => '使用標準 (內建) 的群組 (建議)。這會讓自訂的群組無效。除非您知道在幹麻，不要關閉這個設定！',
  'validating_group' => '審核群組',
  'validating_group_explanation' => '論壇裡需要審核的群組編號是 (通常預設值不會有問題，建議不要改除非您知道它的用途)',
  'guest_group' => '訪客群組',
  'guest_group_explanation' => '論壇的訪客群組編號是 (通常預設值不會有問題，建議不要改除非您知道它的用途)',
  'member_group' => '會員群組',
  'member_group_explanation' => '論壇的 &quot;普通&quot; 會員群組編號是 (通常預設值不會有問題，建議不要改除非您知道它的用途)',
  'admin_group' => '管理員群組',
  'admin_group_explanation' => '論壇的管理員群組編號是 (通常預設值不會有問題，建議不要改除非您知道它的用途)',
  'banned_group' => '阻擋群組',
  'banned_group_explanation' => '論壇的阻擋群組編號是 (通常預設值不會有問題，建議不要改除非您知道它的用途)',
  'global_moderators_group' => '全區版主群組',
  'global_moderators_group_explanation' => '論壇的全區版主群組編號 (通常預設值不會有問題，建議不要改除非您知道它的用途)',
  'special_settings' => '論壇的特殊設定',
  'logout_flag' => 'phpBB 版本 (登出指示)',
  'logout_flag_explanation' => '您的論壇版本 (這項設定是用來指示系統如何登出)',
  'use_post_based_groups' => '使用文章群組？',
  'logout_flag_yes' => '2.0.5 或以上',
  'logout_flag_no' => '2.0.4 或以下',
  'use_post_based_groups_explanation' => '該使用論壇會員的文章數來做分類嗎？ (允許更堅固的權限管理) 或是使用預設群組 (可簡易管理，建議使用)。之後可以改變這個設定。',
  'use_post_based_groups_yes' => '是',
  'use_post_based_groups_no' => '否',
  'error_title' => '您必須解決這些錯誤才能繼續。回到上一頁。',
  'error_specify_bbs' => '您必須提供要整合的軟體。',
  'error_no_blank_name' => '您不能將自訂整合的名稱欄位留白。',
  'error_no_special_chars' => '整合檔案不能包括特殊字元，除了 (_) 和 (-)！',
  'error_bridge_file_not_exist' => '整合檔案 %s 不存在主機內。請檢查是否上傳成功。',
  'finalize' => '開啟/關閉 論壇整合',
  'finalize_explanation' => '目前整合資料已存入資料庫，但是整合還未開啟。您可以在任何時間開啟或關閉整合。記住相簿的管理帳號和密碼，要做改變時可能需要。如果出現問題，到 %s 然後關閉論壇整合，用整合前的 CPG 管理帳號 (您安裝 CPG 時提供的帳號)。',
  'your_bridge_settings' => '整合設定',
  'title_enable' => '開啟整合 %s',
  'bridge_enable_yes' => '開啟',
  'bridge_enable_no' => '關閉',
  'error_must_not_be_empty' => '不能空白',
  'error_either_be' => '必須是 %s 或 %s',
  'error_folder_not_exist' => '%s 不存在。. 改正 %s 的輸入值',
  'error_cookie_not_readible' => 'CPG 無法讀取 cookie 名稱 %s。改正 %s 的輸入值，或到論壇的設定裡面確定 CPG 有讀取它的 cookie 路徑。',
  'error_mandatory_field_empty' => '您不能空白欄位 %s - 請輸入正確值。',
  'error_no_trailing_slash' => '%s 欄位不能包括最後的斜線。',
  'error_trailing_slash' => '%s 欄位必須包括最後的斜線。',
  'error_db_connect' => '不能連結到資料庫。MySQL 的錯誤訊息：',
  'error_db_name' => '雖然 CPG 能夠連結到資料庫，它無法找到您輸入的資料表 %s。確定 %s 是正確的資料。MySQL 的錯誤訊息：',
  'error_prefix_and_table' => '%s 和 ',
  'error_db_table' => '找不到資料表 %s。確定 %s 是正確的資料。',
  'recovery_title' => '整合管理： 緊急修復',
  'recovery_explanation' => '如果您要管理論壇的整合設定，您必須先用管理帳號登入。如果不能登入，您可以先關閉論壇整合。輸入您的帳號和密碼不會將您登入，只會關閉整合。詳情請看說明檔。',
  'username' => '帳號',
  'password' => '密碼',
  'disable_submit' => '送出',
  'recovery_success_title' => '授權完成',
  'recovery_success_content' => '您已經成功關閉論壇的整合。CPG 目前不受整合影響。',
  'recovery_success_advice_login' => '登入管理帳號來編輯整合設定，或重新開啟整合。',
  'goto_login' => '進入登入頁面',
  'goto_bridgemgr' => '進入整合管理',
  'recovery_failure_title' => '授權失敗',
  'recovery_failure_content' => '您輸入錯誤的資料。您必須提供管理帳號 (您安裝 CPG 時提供的帳號)。',
  'try_again' => '重試',
  'recovery_wait_title' => '等待時間未運作',
  'recovery_wait_content' => '因為安全問題，您不能連續登入失敗後成功登入，您必須稍待一會才能繼續登入。',
  'wait' => '等待',
  'create_redir_file' => '建立轉址檔案 (建議)',
  'create_redir_file_explanation' => '如果要將會員在登入論壇時轉回 CPG，您必須建立一個轉址檔案到您的論壇目錄。勾選這個選項整合管理系統會自動幫您建立，或提供需要的程式碼讓您手動建立檔案。',
  'browse' => '瀏覽',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => '日曆', //cpg1.4
  'close' => '關閉', //cpg1.4
  'clear_date' => '清除日期', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '\'%s\'操作所需要的參數並未提供！',
  'unknown_cat' => '資料庫裡沒有您所選的類別',
  'usergal_cat_ro' => '會員相簿的類別不能刪除！',
  'manage_cat' => '類別管理',
  'confirm_delete' => '確定要刪除此類別嗎', //js-alert
  'category' => '類別',
  'operations' => '操作',
  'move_into' => '移動到',
  'update_create' => '更新/建立 類別',
  'parent_cat' => '母類別',
  'cat_title' => '類別標題',
  'cat_thumb' => '類別縮圖',
  'cat_desc' => '類別簡介',
  'categories_alpha_sort' => '小到大排序類別 (不用自訂排序)', //cpg1.4
  'save_cfg' => '儲存設定', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => '相簿設定', //cpg1.4
  'manage_exif' => '管理 exif 顯示', //cpg1.4
  'manage_plugins' => '外掛管理', //cpg1.4
  'manage_keyword' => '關鍵字管理', //cpg1.4
  'restore_cfg' => '設回預設值',
  'save_cfg' => '儲存設定',
  'notes' => '註解',
  'info' => '資訊',
  'upd_success' => 'CPG 設定已更新',
  'restore_success' => '原始設定已回復',
  'name_a' => '排序依名稱 由小至大',
  'name_d' => '排序依名稱 由大至小',
  'title_a' => '排序依標題 由小至大',
  'title_d' => '排序依標題 由大至小',
  'date_a' => '排序依日期 由遠至近',
  'date_d' => '排序依日期 由近至遠',
  'pos_a' => '小到大', //cpg1.4
  'pos_d' => '大到小', //cpg1.4
  'th_any' => '最大外觀',
  'th_ht' => '高度',
  'th_wd' => '寬度',
  'label' => '標籤',
  'item' => '項目',
  'debug_everyone' => '任何人',
  'debug_admin' => '管理員專用',
  'no_logs'=> '關閉', //cpg1.4
  'log_normal'=> '正常', //cpg1.4
  'log_all' => '全部', //cpg1.4
  'view_logs' => '瀏覽記錄', //cpg1.4
  'click_expand' => '點名稱展開', //cpg1.4
  'expand_all' => '全部展開', //cpg1.4
  'notice1' => '(*) 這些設定不能改變，如果你已經有檔案儲存於資料庫。', //cpg1.4 - (relocated)
  'notice2' => '(**) 改變這些設定只會影響之後加入的檔案。建議您不要改變這些設定，如果已有檔案存在。但是您可以改變現有的檔案，使用 &quot;<a href="util.php">管理功能</a> (重設尺寸)&quot; 的功能。', //cpg1.4 - (relocated)
  'notice3' => '(***) 全部的記錄檔是以英文顯示。', //cpg1.4 - (relocated)
  'bbs_disabled' => '整合論壇後關閉的功能', //cpg1.4
  'auto_resize_everyone' => '每個人', //cpg1.4
  'auto_resize_user' => '會員', //cpg1.4
  'ascending' => '小到大', //cpg1.4
  'descending' => '大到小', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  '基本設定',
  array('相簿名稱', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('相簿描述', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('相簿管理員的電子郵件', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('CPG 的網址目錄 (不要加上 \'index.php\')', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('首頁的網址', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('允許將最愛的圖片下載成ZIP檔', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('時區跟 GMT 的差別 (目前時間： ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('開啟加密密碼 (可以關閉)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('開啟說明圖示 (說明只以英文顯示)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('允許可點的關鍵字','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('允許外掛', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('允許阻擋私人的 IP 位置', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('可瀏覽的批量介面', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  '語系 &amp; 編碼設定',
  array('語系', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('用英文語系如果翻譯的字詞不存在？', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('文字編碼', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('顯示語系列表', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('顯示語系國旗', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('語系選單內顯示 &quot;重設&quot;', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('顯示 上一頁/下一頁 於頁面', 'previous_next_tab', 1), //cpg1.4

  '佈景設定',
  array('佈景', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('顯示佈景列表', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('佈景選單內顯示 &quot;重設&quot;', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('顯示 FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('自訂的選單連結', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('自訂選單的網址', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('顯示 bbcode 說明', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('顯示虛幻的佈景區塊，如果佈景通過 XHTML 和 CSS 測試','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('自訂標頭的路徑', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('自訂頁尾的路徑', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  '相簿目錄顯示',
  array('主要表格寬度 (像素或 %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('類別顯示的層次數量', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('相簿顯示數量', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('相簿列表的欄數', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('縮圖像素', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('主頁的內容', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('顯示分類中第一層的相簿縮圖','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('以小到大排列類別 (不使用自訂排列)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('顯示連結的檔案數量','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  '縮圖顯示',
  array('縮圖頁欄數', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('縮圖頁列數', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('顯示的標籤頁數量', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('縮圖下方顯示圖片說明 (連標題)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('縮圖下方顯示瀏覽次數', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('縮圖下方顯示留言', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('縮圖下方顯示上傳者名稱', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('縮圖下方顯示上傳的管理員', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('縮圖下方顯示檔案名稱', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('顯示相簿簡介', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('預設的檔案排序', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('\'熱門投票\' 需要的投票數', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  '圖片顯示', //cpg1.4
  array('顯示圖片的表格寬度 (像素或 %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('圖片資訊的預設為顯示', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('圖片簡介的允許字數', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('允許的文字數量', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('顯示圖片預覽列', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('圖片預覽列下方顯示檔案名稱', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('預覽列的數量', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('連續撥放間隔時間 (毫秒)。1 秒 = 1000 毫秒', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  '留言設定', //cpg1.4
  array('留言內過濾不良詞彙', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('留言內允許表情圖案', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('允許會員在同一張圖片連續發表留言 (關閉灌水保護)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('留言的最大行數', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('留言的最大長度', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('有留言時通知管理員', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('留言的排序', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('無名留言者的前置字元', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  '圖片及縮圖設定',
  array('JPEG 格式品質', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('縮圖最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('使用尺寸 (寬，高或縮圖最大邊長) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('建立中級圖片','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('中級圖片/影片的最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('傳圖檔的最大限制 (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('上傳圖片/影片的最大寬度或最高尺寸 (像素)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('自動重設超過限制的圖片尺寸', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  '圖片和縮圖的進階設定',
  array('可使用私人相簿 (注意：如果您從 \'是\' 換成 \'否\'，任何現有的私人相簿將會變成公共相簿)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('顯示私人相簿圖片給未登入的會員','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('檔案名不可使用的字詞', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('上傳圖檔可接受的副檔名', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('允許的圖片檔類型', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('允許的影片檔類型', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('自動播放影片', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('允許的聲音檔類型', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('允許的文件檔類型', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('建立縮圖的方法','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('ImageMagick 的 \'convert\' 程式路徑 (例如 /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('可接受的圖檔類型 (只對 ImageMagick 有效)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('ImageMagick 的命令列選項', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('讀取 JPEG 圖片的 EXIF 資料', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('讀取 JPEG 圖片的 IPTC 資料', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('相簿路徑 <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('會員圖檔路徑 <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('縮圖檔的前置字元 <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('縮圖的前置字元 <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('目錄的預設模式', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('檔案的預設模式', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  '會員設定',
  array('允許會員註冊', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('允許訪客進入', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('註冊需要電子郵件驗證', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('有新會員時通知管理員', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('管理員需審核註冊', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('允許兩個會員使用同一個電子郵件', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('通知管理員有等待審核的檔案', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('允許登入的會員瀏覽會員名單', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('允許會員改變電子郵件', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('允許會員保留自己在公共相簿裡的圖片', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('允許錯誤登入的次數 (避免相簿遭受攻擊)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('錯誤登入後的阻擋時間', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('允許向管理員檢舉檔案', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  '個人資料的自訂欄位 (空白如果不使用)。
  用資料 6 給長的資訊，例如說個人簡介', //cpg1.4
  array('資料 1 的名稱', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('資料 2 的名稱', 'user_profile2_name', 0), //cpg1.4
  array('資料 3 的名稱', 'user_profile3_name', 0), //cpg1.4
  array('資料 4 的名稱', 'user_profile4_name', 0), //cpg1.4
  array('資料 5 的名稱', 'user_profile5_name', 0), //cpg1.4
  array('資料 6 的名稱', 'user_profile6_name', 0), //cpg1.4

  '圖片簡介的自訂欄位 (空白如果不使用)',
  array('欄位 1 的名稱', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('欄位 2 的名稱', 'user_field2_name', 0),
  array('欄位 3 的名稱', 'user_field3_name', 0),
  array('欄位 4 的名稱', 'user_field4_name', 0),

  'Cookies 設定',
  array('Cookie 名稱', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie 路徑', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  '電子郵件設定  (通常可以不用作任何改變；如果不懂請不要更改)', //cpg1.4
  array('SMTP 主機 (如果空白會使用 sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP 帳號', 'smtp_username', 0), //cpg1.4
  array('SMTP 密碼', 'smtp_password', 0), //cpg1.4

  '記錄和統計', //cpg1.4
  array('記錄模式 <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('記錄電子卡片', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('記錄投票的統計','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('記錄瀏覽的統計','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  '維修設定', //cpg1.4
  array('開啟除錯模式', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('顯示除錯模式裡的通知', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('相簿維修 (離線)', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => '寄出電子卡片',
  'ecard_sender' => '寄件者',
  'ecard_recipient' => '收件者',
  'ecard_date' => '日期',
  'ecard_display' => '顯示電子卡片',
  'ecard_name' => '名稱',
  'ecard_email' => '電子郵件',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => '升冪',
  'ecard_descending' => '降冪',
  'ecard_sorted' => '排序',
  'ecard_by_date' => '依日期',
  'ecard_by_sender_name' => '依寄件者名稱',
  'ecard_by_sender_email' => '依寄件者郵件',
  'ecard_by_sender_ip' => '依寄件者的 IP 位址',
  'ecard_by_recipient_name' => '依收件者名稱',
  'ecard_by_recipient_email' => '依收件者郵件',
  'ecard_number' => '顯示紀錄 %s 到 %s 在 %s',
  'ecard_goto_page' => '到頁面',
  'ecard_records_per_page' => '頁面記錄',
  'check_all' => '全選',
  'uncheck_all' => '都不選',
  'ecards_delete_selected' => '刪除選取的卡片',
  'ecards_delete_confirm' => '你確定要刪除記錄嗎？請勾選。',
  'ecards_delete_sure' => '我確定',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => '請輸入您的名字和留言',
  'com_added' => '您的留言已經加入',
  'alb_need_title' => '您必須為相簿提供一個標題 !',
  'no_udp_needed' => '沒有更新的必要',
  'alb_updated' => '相簿已經更新',
  'unknown_album' => '所選擇的相簿不存在或您沒有權限上傳檔案到此相簿',
  'no_pic_uploaded' => '沒有檔案被上傳 !<br /><br />如果您確定有選擇檔案上傳, 請檢查伺服器是否允許上傳檔案...',
  'err_mkdir' => '無法建立目錄 %s！',
  'dest_dir_ro' => '目錄 %s 無法讀寫！',
  'err_move' => '無法移動 %s 到 %s！',
  'err_fsize_too_large' => '您上傳的圖片太大 (不能超過 %s x %s)！', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => '您上傳的圖檔太大 (不能超過 %s KB)！', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => '上傳的檔案並不是容許的圖片格式 !',
  'allowed_img_types' => '您只可以上傳 %s 張圖片.',
  'err_insert_pic' => '檔案 \'%s\' 無法加入此相簿 ',
  'upload_success' => '檔案上傳完成!<br /><br />當管理者核准後就可以看到檔案了.',
  'notify_admin_email_subject' => '%s - 上傳檔案通知',
  'notify_admin_email_body' => '%s有上傳檔案 需要你的核准. 請查閱 %s',
  'info' => '訊息',
  'com_added' => '留言已加入',
  'alb_updated' => '相簿已經更新',
  'err_comment_empty' => '留言是空的 !',
  'err_invalid_fext' => '只有下列的副檔名才允許上傳 : <br /><br />%s.',
  'no_flood' => '抱歉, 此圖片最後一個留言是您提供<br /><br />您只可以修改您的留言',
  'redirect_msg' => '頁面轉移中.<br /><br /><br />按 \'繼續\' 如果頁面沒有自動刷新',
  'upl_success' => '已經加入您的圖片',
  'email_comment_subject' => '相簿已有新留言',
  'email_comment_body' => '已經有留言發佈在您的相簿。請瀏覽',
  'album_not_selected' => '無選擇的相簿', //cpg1.4
  'com_author_error' => '已有註冊會員使用了這個名稱，請登入或使用其它名稱', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => '說明',
  'fs_pic' => '原圖',
  'del_success' => '完成刪除',
  'ns_pic' => '標準尺寸圖片',
  'err_del' => '無法刪除',
  'thumb_pic' => '縮圖',
  'comment' => '留言',
  'im_in_alb' => '相簿內圖片',
  'alb_del_success' => '相簿 &laquo;%s&raquo; 已刪除', //cpg1.4
  'alb_mgr' => '相簿管理',
  'err_invalid_data' => '接收到不正確的資料於 \'%s\'',
  'create_alb' => '建立相簿 \'%s\'',
  'update_alb' => '更新相簿 \'%s\' 標題為 \'%s\' 索引為 \'%s\'',
  'del_pic' => '刪除圖片',
  'del_alb' => '刪除相簿',
  'del_user' => '刪除會員',
  'err_unknown_user' => '所選擇的會員不存在！',
  'err_empty_groups' => '找不要群組的資料表，或沒有資料！', //cpg1.4
  'comment_deleted' => '留言已刪除',
  'npic' => '圖片', //cpg1.4
  'pic_mgr' => '圖片管理', //cpg1.4
  'update_pic' => '更新圖片 \'%s\' 的檔名為 \'%s\'，索引是 \'%s\'', //cpg1.4
  'username' => '帳號', //cpg1.4
  'anonymized_comments' => '%s 個無名的留言', //cpg1.4
  'anonymized_uploads' => '%s 個無名的公共上傳', //cpg1.4
  'deleted_comments' => '刪除了 %s 個留言', //cpg1.4
  'deleted_uploads' => '刪除了 %s 個公共上傳', //cpg1.4
  'user_deleted' => '會員 %s 已刪除', //cpg1.4
  'activate_user' => '啟用帳號', //cpg1.4
  'user_already_active' => '帳號已被啟用', //cpg1.4
  'activated' => '啟用', //cpg1.4
  'deactivate_user' => '關閉帳號', //cpg1.4
  'user_already_inactive' => '帳號已被關閉', //cpg1.4
  'deactivated' => '關閉', //cpg1.4
  'reset_password' => '重設密碼', //cpg1.4
  'password_reset' => '密碼重設成 %s', //cpg1.4
  'change_group' => '改變主要群組', //cpg1.4
  'change_group_to_group' => '從 %s 改成 %s', //cpg1.4
  'add_group' => '新增額外群組', //cpg1.4
  'add_group_to_group' => '加入會員 %s 到群組 %s。會員現在的主要群組是 %s，額外群組是 %s。', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => '您要使用的電子卡片資料有錯誤。請檢查連結。', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => '確定要刪除此圖片嗎 ? \\n留言也會被刪除.', //js-alert
  'del_pic' => '刪除此圖片',
  'size' => '%s x %s 像素',
  'views' => '%s 次',
  'slideshow' => '連續播放',
  'stop_slideshow' => '停止播放',
  'view_fs' => '點選圖片以觀看原圖',
  'edit_pic' => '編輯檔案資訊', //cpg1.4
  'crop_pic' => '裁剪與旋轉',
  'set_player' => '改變播放軟體',
);

$lang_picinfo = array(
  'title' =>'圖片資訊',
  'Filename' => '檔案名稱',
  'Album name' => '相簿名稱',
  'Rating' => '評分 (%s 次投票)',
  'Keywords' => '關鍵字',
  'File Size' => '檔案大小',
  'Date Added' => '增入日期', //cpg1.4
  'Dimensions' => '尺寸',
  'Displayed' => '顯示',
  'URL' => 'URL', //cpg1.4
  'Make' => '品牌', //cpg1.4
  'Model' => '型號', //cpg1.4
  'DateTime' => '日期時間', //cpg1.4
  'DateTimeOriginal' => '拍照日期', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => '孔徑最大值', //cpg1.4
  'FocalLength' => '焦點尺寸', //cpg1.4
  'Comment' => '留言',
  'addFav'=>'加到我的最愛',
  'addFavPhrase'=>'我的最愛',
  'remFav'=>'從我的最愛移除',
  'iptcTitle'=>'IPTC 標題',
  'iptcCopyright'=>'IPTC 版權',
  'iptcKeywords'=>'IPTC 關鍵字',
  'iptcCategory'=>'IPTC 類別',
  'iptcSubCategories'=>'IPTC 子類別',
  'ColorSpace' => '顏色空間', //cpg1.4
  'ExposureProgram' => '曝光軟體', //cpg1.4
  'Flash' => '閃光', //cpg1.4
  'MeteringMode' => '計量模式', //cpg1.4
  'ExposureTime' => '曝光時間', //cpg1.4
  'ExposureBiasValue' => '曝光偏好', //cpg1.4
  'ImageDescription' => ' 圖片簡介', //cpg1.4
  'Orientation' => '定位', //cpg1.4
  'xResolution' => 'X 解析度', //cpg1.4
  'yResolution' => 'Y 解析度', //cpg1.4
  'ResolutionUnit' => '解析度', //cpg1.4
  'Software' => '軟體', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif 偏移量', //cpg1.4
  'IFD1Offset' => 'IFD1 偏移量', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif 版本', //cpg1.4
  'DateTimeOriginal' => '原本日期', //cpg1.4
  'DateTimedigitized' => '電子日期', //cpg1.4
  'ComponentsConfiguration' => '零件設定', //cpg1.4
  'CompressedBitsPerPixel' => '壓縮量/像素', //cpg1.4
  'LightSource' => '光源', //cpg1.4
  'ISOSetting' => 'ISO 設定', //cpg1.4
  'ColorMode' => '顏色模式', //cpg1.4
  'Quality' => '品質', //cpg1.4
  'ImageSharpening' => '尖銳圖片', //cpg1.4
  'FocusMode' => '焦距模式', //cpg1.4
  'FlashSetting' => '閃光設定', //cpg1.4
  'ISOSelection' => 'ISO 選項', //cpg1.4
  'ImageAdjustment' => '圖片調整', //cpg1.4
  'Adapter' => '轉接器', //cpg1.4
  'ManualFocusDistance' => '手動的焦距距離', //cpg1.4
  'DigitalZoom' => '電子變焦', //cpg1.4
  'AFFocusPosition' => 'AF 焦距位置', //cpg1.4
  'Saturation' => '浸透度', //cpg1.4
  'NoiseReduction' => '減少干擾', //cpg1.4
  'FlashPixVersion' => '閃光版本', //cpg1.4
  'ExifImageWidth' => 'Exif 圖片寬度', //cpg1.4
  'ExifImageHeight' => 'Exif 圖片高度', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif 通用偏移量', //cpg1.4
  'FileSource' => '檔案來源', //cpg1.4
  'SceneType' => '場景類型', //cpg1.4
  'CustomerRender' => '顧客處理', //cpg1.4
  'ExposureMode' => '曝光模式', //cpg1.4
  'WhiteBalance' => '白色平衡', //cpg1.4
  'DigitalZoomRatio' => '電子變焦比率', //cpg1.4
  'SceneCaptureMode' => '場景拍攝模式', //cpg1.4
  'GainControl' => '獲得控制', //cpg1.4
  'Contrast' => '對比', //cpg1.4
  'Saturation' => '浸透度', //cpg1.4
  'Sharpness' => '尖銳度', //cpg1.4
  'ManageExifDisplay' => '管理 Exif 顯示', //cpg1.4
  'submit' => '送出', //cpg1.4
  'success' => '資料已更新完畢。', //cpg1.4
  'details' => '細節', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => '編輯此留言',
  'confirm_delete' => '確定要刪除此留言？', //js-alert
  'add_your_comment' => '發佈您的留言',
  'name'=>'名稱',
  'comment'=>'留言',
  'your_name' => '無名',
  'report_comment_title' => '檢舉這篇留言', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => '點選圖片來關閉視窗',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => '寄出 電子卡片',
  'invalid_email' => '<font color="red"><b>警告</b></font>：不正確的電子郵件：', //cpg1.4
  'ecard_title' => '%s 寄給你一張電子卡片',
  'error_not_image' => '電子卡片只能寄出圖片.',
  'view_ecard' => '如果電子卡片無法正確顯示，請按此連結', //cpg1.4
  'view_ecard_plaintext' => '請到這個網址瀏覽電子卡片：', //cpg1.4
  'view_more_pics' => '更多圖片！', //cpg1.4
  'send_success' => '你的 電子卡片 已寄出',
  'send_failed' => '抱歉, 本伺服器無法為你寄出 電子卡片...',
  'from' => '由',
  'your_name' => '你的名稱',
  'your_email' => '你的電子郵件',
  'to' => '給',
  'rcpt_name' => '收件者名稱',
  'rcpt_email' => '收件者電子郵件',
  'greetings' => '標題', //cpg1.4
  'message' => '訊息內容', //cpg1.4
  'ecards_footer' => '寄件人 %s 從 IP %s 在 %s (相簿主機時間)', //cpg1.4
  'preview' => '電子卡片預覽', //cpg1.4
  'preview_button' => '預覽', //cpg1.4
  'submit_button' => '寄送卡片', //cpg1.4
  'preview_view_ecard' => '這是電子卡片的替補連結，不能夠預覽。', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => '檢舉報告', //cpg1.4
  'invalid_email' => '<b>警告</b>：錯誤的電子郵件！', //cpg1.4
  'report_subject' => '檢舉信件從 %s 在相簿 %s', //cpg1.4
  'view_report' => '檢舉報告的替補連結，如果無法正常顯示。', //cpg1.4
  'view_report_plaintext' => '請到下面的網址瀏覽檢舉報告：', //cpg1.4
  'view_more_pics' => '相簿', //cpg1.4
  'send_success' => '您的檢舉已傳送', //cpg1.4
  'send_failed' => '抱歉，但是主機無法傳送您的檢舉報告...', //cpg1.4
  'from' => '從', //cpg1.4
  'your_name' => '您的名稱', //cpg1.4
  'your_email' => '您的信箱', //cpg1.4
  'to' => '到', //cpg1.4
  'administrator' => '管理員', //cpg1.4
  'subject' => '標題', //cpg1.4
  'comment_field_name' => '檢舉 "%s" 的留言', //cpg1.4
  'reason' => '原因', //cpg1.4
  'message' => '訊息', //cpg1.4
  'report_footer' => '寄件人 %s 從 IP %s 在 %s (相簿主機時間)', //cpg1.4
  'obscene' => '猥褻', //cpg1.4
  'offensive' => '攻擊性', //cpg1.4
  'misplaced' => '文不對題', //cpg1.4
  'missing' => '不存在', //cpg1.4
  'issue' => '錯誤/無法瀏覽', //cpg1.4
  'other' => '其它', //cpg1.4
  'refers_to' => '檢舉的檔案是', //cpg1.4
  'reasons_list_heading' => '檢舉理由：', //cpg1.4
  'no_reason_given' => '沒有理由', //cpg1.4
  'go_comment' => '瀏覽留言', //cpg1.4
  'view_comment' => '瀏覽完整報告和留言', //cpg1.4
  'type_file' => '檔案', //cpg1.4
  'type_comment' => '留言', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => '檔案資料',
  'album' => '相簿',
  'title' => '標題',
  'filename' => '檔案名', //cpg1.4
  'desc' => '描述',
  'keywords' => '關鍵字',
  'new_keyword' => '新關鍵字', //cpg1.4
  'new_keywords' => '找到新關鍵字', //cpg1.4
  'existing_keyword' => '存在的關鍵字', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s 次觀看 - %s 次評分',
  'approve' => '核准圖片',
  'postpone_app' => '延遲核准',
  'del_pic' => '刪除檔案',
  'del_all' => '刪除全部檔案', //cpg1.4
  'read_exif' => '再次讀取 EXIF 資料',
  'reset_view_count' => '清除瀏覽計數器',
  'reset_all_view_count' => '清除全部的瀏覽計數器', //cpg1.4
  'reset_votes' => '清除評分',
  'reset_all_votes' => '清除評分', //cpg1.4
  'del_comm' => '刪除留言',
  'del_all_comm' => '刪除全部留言', //cpg1.4
  'upl_approval' => '核准上傳', //cpg1.4
  'edit_pics' => '編輯圖片',
  'see_next' => '觀看下一張圖片',
  'see_prev' => '觀看前一張圖片',
  'n_pic' => '%s 張圖片',
  'n_of_pic_to_disp' => '圖片顯示數量',
  'apply' => '修改',
  'crop_title' => 'CPG 圖片編輯器',
  'preview' => '預覽',
  'save' => '存檔',
  'save_thumb' =>'存成縮圖',
  'gallery_icon' => '使用這個圖示', //cpg1.4
  'sel_on_img' =>'選擇的區域必須在圖片的範圍內！', //js-alert
  'album_properties' =>'相簿屬性', //cpg1.4
  'parent_category' =>'母類別', //cpg1.4
  'thumbnail_view' =>'縮圖顯示', //cpg1.4
  'select_unselect' =>'選擇/反選 全部', //cpg1.4
  'file_exists' => "目標檔案 '%s' 已經存在。", //cpg1.4
  'rename_failed' => "無法將 '%s' 改成 '%s'。", //cpg1.4
  'src_file_missing' => "來源檔案 '%s' 不存在。", // cpg 1.4
  'mime_conv' => "無法轉換檔案 '%s' 到 '%s'",//cpg1.4
  'forb_ext' => '不允許的副檔名。',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => '常見問題解答',
  'toc' => '目錄',
  'question' => '問題: ',
  'answer' => '解答: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '問題與解答',
  array('為什麼要註冊？', '管理員決定使用者是否需要註冊。註冊成為會員可獲得額外的功能，如 上傳檔案，有 我的最愛列表，對影像評分及發表留言 等等。', 'allow_user_registration', '1'), //cpg1.4
  array('如何註冊？', '到 &quot;註冊&quot; 去填寫欄位內的資料 (部分欄位是選填的)。<br />如果管理員開啟 Email 啟用功能，在你確認送出註冊資料後你會收到一封認證信寄到你所填寫的信箱內，裡面會說明如何啟用你的會員資格。會員登入前必須先完成啟用動作。', 'allow_user_registration', '1'), //cpg1.4
  array('如何登入?', '到 &quot;登入&quot;, 填入你的會員名稱及密碼 且勾選 &quot;記住我&quot; 下次你再來的時候就會自動登入了.<br /><b>注意:如果你點選 &quot;記住我 Me&quot; ,Cookies 功能必須開啟,且本站的cookie存在你的電腦中..</b>', 'offline', 0),
  array('為何無法登入?', '你已經註冊並啟用帳號了嗎(回覆認證郵件的連結)?. 那個連結將會啟用你的帳號. 其他登入問題 請聯絡網站管理員.', 'offline', 0),
  array('忘記密碼了怎麼辦 ?', '如果這個網站有 &quot;忘記密碼了&quot; 的連結,就按它. 不然就聯絡網站管理員 請他給你一個新的密碼.', 'offline', 0),
  //array('我的email變更了怎麼辦 ?', '只要登入 並且到 &quot;我的個人資料&quot; 變更你的電子郵件地址就可以了', 'offline', 0),
  array('如何把圖片存到  &quot;我的最愛 &quot;?', '點選圖片並且點按 &quot;影像資訊&quot; 連結 (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); 在影像資訊設定裡面按 &quot;加入我的最愛&quot;.<br />管理員可能有預設&quot;影像資訊; .<br />注意:Cookies 功能必須開啟,且本站的cookie存在你的電腦中.', 'offline', 0),
  array('如何對圖片評分 ?', '點按該影像縮圖,在影像底下可以點選你的評分.', 'offline', 0),
  array('如何發表留言 ?', '點按該影像縮圖,在影像底下可以發表留言.', 'offline', 0),
  array('如何上傳圖片 ?', '到 &quot;上傳圖片&quot;並選擇你要上傳到哪一個相簿,按 &quot;瀏覽&quot; 且點選要上傳的圖片 按 &quot;開啟&quot; (你可以加入影像標題及描述) 然後按 &quot;確認&quot;', 'allow_private_albums', 1), //cpg1.4
  array('要將圖片上傳到哪裡？', '你可以上傳圖片在 &quot;我的相簿&quot;. 管理員可能允許你上傳圖片到主相簿內.', 'allow_private_albums', 0),
  array('哪種格式或大小的影像可以上傳?', '格式跟大小 (jpg,gif,..etc.) 根據管理員的設定.', 'offline', 0),
  array('如何新增,修改 或刪除相簿 從 &quot;我的相簿&quot;?', '你必須在 &quot;管理模式&quot;<br />到 &quot;新增/排序 我的相簿&quot;按 &quot;新增New&quot;. 變更 &quot;新相簿&quot; 到你要的名稱.<br />你可以對你的每一個相簿重新命名.<br />按 &quot;修改;.', 'allow_private_albums', 0),
  array('我要如何禁止其他會員看我的相簿?', '你必須在 &quot;管理模式&quot;<br />到 &quot;變更我的相簿. 在 &quot;更新相簿&quot; 欄位, 選擇你要變更的相簿.<br />在這裡, 你可以變更相簿名稱 描述 縮圖 ,及限制觀看 留言 評分 的權限.<br />按 &quot;更新相簿&quot;.', 'allow_private_albums', 0),
  array('如何觀看其他會員的相簿?', '到 &quot;相簿目錄&quot; 選擇 &quot;會員相簿&quot;.', 'allow_private_albums', 0),
  array('什麼是 cookies?', 'Cookies 是網站放在你電腦中的文字資料.<br />Cookies 通常讓使用者再次回到網站時自動登入 並記錄其他設定資料.', 'offline', 0),
  array('在哪裡可以取得這個相簿程式?', 'Coppermine 是基於GNU GPL的免費多媒體相簿. 它是全功能的 且支援不同的平台. 請到<a href="http://coppermine.sf.net/">Coppermine 的網站</a> 取得更多的資訊 或是下載它.', 'offline', 0),

  '網站導引',
  array('什麼是 &quot;相簿目錄 &quot;?', '這將顯示整個相簿 包含每一個分類. 縮圖可以連結到類別中.', 'offline', 0),
  array('什麼是 &quot;我的相簿 &quot;?', '這項功能讓會員建立自己的相簿,可增加,刪除,修改相簿. 並且可上傳檔案到相簿裡.', 'allow_private_albums', 1), //cpg1.4
  array('有什麼差異在 &quot;管理模式&quot; 和 &quot;會員模式&quot;?', '這項功能, 在管理模式時, 允許會員修改他們自己的相簿 (如果管理員允許的話).', 'allow_private_albums', 0),
  array('什麼是 &quot;上傳圖片 &quot;?', '這項功能允許會員上傳影像(檔案大小及格式依管理員設定) 到指定的相簿.', 'allow_private_albums', 0),
  array('什麼是 &quot;最新上傳 &quot;?', '這項功能顯示最新上傳到相簿的檔案.', 'offline', 0),
  array('什麼是 &quot;最新留言 &quot;?', '這項功能會員對影像發表的最新留言.', 'offline', 0),
  array('什麼是 &quot;熱門圖片 &quot;?', '這項功能顯示被觀看最多次的影像,不論是會員或訪客.', 'offline', 0),
  array('什麼是 &quot;最高評分 &quot;?', '這項功能顯示會員評分最高的影像, 顯示平均分數(例如: 五個會員各給一個評分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: 影像將有平均評分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;五個會員評分從 1 到 5 (1,2,3,4,5) 平均結果將是 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />評分從 <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (最佳) 到 <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (最差).', 'offline', 0),
  array('什麼是 &quot;我的最愛 &quot;?', '這項功能讓會員儲存喜愛的影像,需要有cookie資訊.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => '忘記密碼',
  'err_already_logged_in' => '您已經登入了！',
  'enter_email' => '輸入您的電子信箱', //cpg1.4
  'submit' => '繼續',
  'illegal_session' => '忘記密碼的工作階段錯誤或已過期。', //cpg1.4
  'failed_sending_email' => '忘記密碼的郵件無法寄出！',
  'email_sent' => '新帳號和密碼的郵件已經寄到 %s', //cpg1.4
  'verify_email_sent' => '電子郵件已寄到 %s。請檢查您的信箱進行下一步動作。', //cpg1.4
  'err_unk_user' => '選擇的會員不存在！',
  'account_verify_subject' => '%s - 新密碼申請', //cpg1.4
  'account_verify_body' => '您已經申請了新的密碼。如果要新的密碼寄到您的信箱，請點下面的連結：

%s', //cpg1.4
  'passwd_reset_subject' => '%s - 您的新密碼', //cpg1.4
  'passwd_reset_body' => '這是您申請的新密碼：
帳號： %s
密碼： %s
請點 %s 登入。', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => '群組', //cpg1.4
  'permissions' => '權限', //cpg1.4
  'public_albums' => '允許公用相簿上傳', //cpg1.4
  'personal_gallery' => '私人相簿', //cpg1.4
  'upload_method' => '上傳方法', //cpg1.4
  'disk_quota' => '空間配額', //cpg1.4
  'rating' => '評分', //cpg1.4
  'ecards' => '電子卡片', //cpg1.4
  'comments' => '留言', //cpg1.4
  'allowed' => '允許 ', //cpg1.4
  'approval' => '審核', //cpg1.4
  'boxes_number' => '欄位數量', //cpg1.4
  'variable' => '更改', //cpg1.4
  'fixed' => '固定', //cpg1.4
  'apply' => '修改',
  'create_new_group' => '建立新群組',
  'del_groups' => '刪除所選擇的群組',
  'confirm_del' => '警告, 當刪除了一個群組, 屬於該群組的用戶將被轉移至 \'Registered\' 群組中 !\n\nn確定要刪除嗎 ?', //js-alert
  'title' => '管理會員群組',
  'num_file_upload' => '上傳欄位', //cpg1.4
  'num_URI_upload' => 'URI 上傳欄位', //cpg1.4
  'reset_to_default' => '重設為預設名稱 (%s) - 建議！', //cpg1.4
  'error_group_empty' => '群組資料表沒資料！<br /><br />重新建立預設群組，請刷新此頁面', //cpg1.4
  'explain_greyed_out_title' => '為什麼不能使用？', //cpg1.4
  'explain_guests_greyed_out_text' => '您不能改變這個群組的屬性因為設定裡面的 &quot;允許訪客進入&quot; 是設定為 &quot;否&quot;。 全部訪客 (這個群組的成員 %s) 無法做任何動作除了登入，所以不能改變群組的設定。', //cpg1.4
  'explain_banned_greyed_out_text' => '您不能改變這個群組 %s 的屬性因為它的成員無法做任何動作。', //cpg1.4
  'group_assigned_album' => '分配的相簿', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => '歡迎 !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '確定要刪除這相簿 ? \\n所有圖片及留言都會被刪除.', //js-alert
  'delete' => '刪除',
  'modify' => '屬性',
  'edit_pics' => '編輯',
);

$lang_list_categories = array(
  'home' => '相簿首頁',
  'stat1' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿及 <b>[cat]</b> 個類別, 有 <b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次',
  'stat2' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 被觀看 <b>[views]</b> 次',
  'xx_s_gallery' => '%s\'s 相簿',
  'stat3' => '<b>[pictures]</b> 張影像於 <b>[albums]</b> 個相簿, 有 <b>[comments]</b> 個留言, 被觀看 <b>[views]</b> 次',
);

$lang_list_users = array(
  'user_list' => '會員列表',
  'no_user_gal' => '還沒有會員相簿',
  'n_albums' => '%s 個相簿',
  'n_pics' => '%s 張影像',
);

$lang_list_albums = array(
  'n_pictures' => '%s 張影像',
  'last_added' => ', 最新影像於 %s',
  'n_link_pictures' => '%s 連結的檔案', //cpg1.4
  'total_pictures' => '%s 總檔案', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => '關鍵字管理', //cpg1.4
  'edit' => '編輯', //cpg1.4
  'delete' => '刪除', //cpg1.4
  'search' => '搜尋', //cpg1.4
  'keyword_test_search' => '搜尋 %s 於新視窗', //cpg1.4
  'keyword_del' => '刪除關鍵字 %s', //cpg1.4
  'confirm_delete' => '確定要刪除相簿裡的關鍵字 %s 嗎？', //cpg1.4  // js-alert
  'change_keyword' => '改變關鍵字', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => '登入',
  'enter_login_pswd' => '輸入會員名稱和密碼',
  'username' => '會員名稱',
  'password' => '密碼',
  'remember_me' => '記住我',
  'welcome' => '歡迎 %s ...',
  'err_login' => '*** 無法登入. 請重試 ***',
  'err_already_logged_in' => '您已經登入！',
  'forgot_password_link' => '忘記密碼',
  'cookie_warning' => '警告：您的瀏覽器不支援 cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => '登出',
  'bye' => '再見 %s ...',
  'err_not_loged_in' => '您還沒有登入！',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => '關閉', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => '上一個層次', //cpg1.4
  'current_path' => '目前的路徑', //cpg1.4
  'select_directory' => '請選擇目錄', //cpg1.4
  'click_to_close' => '點圖片關閉視窗',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => '更新相簿 %s',
  'general_settings' => '一般設定',
  'alb_title' => '相簿標題',
  'alb_cat' => '相簿類別',
  'alb_desc' => '相簿描述',
  'alb_keyword' => '相簿關鍵字', //cpg1.4
  'alb_thumb' => '相簿縮圖',
  'alb_perm' => '相簿權限',
  'can_view' => '允許觀看相簿的會員',
  'can_upload' => '訪客可上傳圖片',
  'can_post_comments' => '訪客可發表留言',
  'can_rate' => '訪客可為圖片評分',
  'user_gal' => '會員相簿',
  'no_cat' => '* 沒有類別 *',
  'alb_empty' => '相簿是空的',
  'last_uploaded' => '最近上傳',
  'public_alb' => '任何人 (公開相簿)',
  'me_only' => '只有我',
  'owner_only' => '只有相簿擁有人 (%s) ',
  'groupp_only' => ' \'%s\' 群組的會員',
  'err_no_alb_to_modify' => '資料庫內沒有您可修改的相簿.',
  'update' => '更新相簿',
  'reset_album' => '重設相簿', //cpg1.4
  'reset_views' => '清除 %s 的瀏覽計數到 &quot;0&quot;', //cpg1.4
  'reset_rating' => '清除 %s 的全部評分', //cpg1.4
  'delete_comments' => '刪除 %s 裡的留言', //cpg1.4
  'delete_files' => '%s無法改變%s 的刪除全部檔案，在 %s 裡面', //cpg1.4
  'views' => '瀏覽', //cpg1.4
  'votes' => '投票', //cpg1.4
  'comments' => '留言', //cpg1.4
  'files' => '檔案', //cpg1.4
  'submit_reset' => '傳送改變', //cpg1.4
  'reset_views_confirm' => '確定', //cpg1.4
  'notice1' => '(*) 依照 %s群組%s 設定',  //cpg1.4 //(do not translate %s!)
  'alb_password' => '相簿密碼', //cpg1.4
  'alb_password_hint' => '相簿的密碼提示', //cpg1.4
  'edit_files' =>'編輯檔案', //cpg1.4
  'parent_category' =>'母類別', //cpg1.4
  'thumbnail_view' =>'縮圖顯示', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP 資訊',
  'explanation' => '這是用 PHP 的函式來建立的資訊 <a href="http://www.php.net/phpinfo">phpinfo()</a>，在 CPG 相簿內顯示 (移除右邊的輸出)。',
  'no_link' => '讓其他人看到您的 phpinfo 會有安全問題，所以這個資訊只有在登入管理帳號後才能看到。您不能將這個頁面的連結給別人，他們會看不到任何資訊。',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => '圖片管理', //cpg1.4
  'select_album' => '選擇相簿', //cpg1.4
  'delete' => '刪除', //cpg1.4
  'confirm_delete1' => '確定要刪除這個圖片？', //cpg1.4
  'confirm_delete2' => '\n圖片會永遠被刪除。', //cpg1.4
  'apply_modifs' => '套用外掛', //cpg1.4
  'confirm_modifs' => '確定外掛', //cpg1.4
  'pic_need_name' => '圖片需要名稱！', //cpg1.4
  'no_change' => '您沒有做任何改變！', //cpg1.4
  'no_album' => '* 沒有相簿 *', //cpg1.4
  'explanation_header' => '這裡設定的自訂排序只有在這些標準下使用', //cpg1.4
  'explanation1' => '管理員在設定內將 "檔案的預設排序" 選成 "大到小" 或 "小到大" (會員在沒有設定排序下所使用的預設排序)', //cpg1.4
  'explanation2' => '會員在縮圖顯示頁面裡選擇 "大到小" 或 "小到大"', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => '確定要移除這個外掛嗎', //cpg1.4
  'confirm_delete' => '確定要刪除這個外掛嗎', //cpg1.4
  'pmgr' => '外掛管理', //cpg1.4
  'name' => '名稱', //cpg1.4
  'author' => '作者', //cpg1.4
  'desc' => '簡介', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => '安裝的外掛', //cpg1.4
  'n_plugins' => '未安裝的外掛', //cpg1.4
  'none_installed' => '沒有安裝', //cpg1.4
  'operation' => '運作', //cpg1.4
  'not_plugin_package' => '上傳的檔案不是外掛組件。', //cpg1.4
  'copy_error' => '複製外掛到外掛目錄時發生錯誤。', //cpg1.4
  'upload' => '上傳', //cpg1.4
  'configure_plugin' => '設定外掛', //cpg1.4
  'cleanup_plugin' => '清除外掛', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => '抱歉, 您已經為此圖片評分',
  'rate_ok' => '您的評分已經被接受',
  'forbidden' => '你不能對你自己的圖片評分.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
 {SITE_NAME} 的管理員會儘快整理會引起反感的資料, 但我們不可能審查每一份文件. 因此您必需同意所有文件只是代表作者的立場及意見, 不代表管理人員的立場 (除了由他們貼出) 並不負任何法律責任.<br />
<br />
您必需同意不可張貼任何色情, 暴力, 不良, 不正當, 不健康, 妨害國家安全, 或任何可能違法的文件.  {SITE_NAME} 人員在任何時候都有權過濾並編輯您張貼的內容. 並且會員留在本站內的資料已存在資料庫中. 末經您的同意, 我們不會將您的資料轉給其他人使用, 不過我們不會為任何因駭客行為而外洩的資料負任何責任.<br />
<br />
本站使用 cookies 在您的電腦上來儲存資訊. 這樣是方便您更愉快瀏覽. 您的電子郵件地址只是讓我們認證您的資料而已.<br />
<br />
按下 '我同意' 代表您同意以上條款.
EOT;

$lang_register_php = array(
  'page_title' => '會員註冊',
  'term_cond' => '條款與規則',
  'i_agree' => '我同意',
  'submit' => '確認註冊',
  'err_user_exists' => '您所填寫的會員名稱已被其他會員使用, 請重選一個',
  'err_password_mismatch' => '兩個密碼不合, 請重填一次',
  'err_uname_short' => '會員名稱至少需 2 個字元',
  'err_password_short' => '密碼至少需 2 個字元',
  'err_uname_pass_diff' => '會員名稱和密碼不可以相同',
  'err_invalid_email' => '電子郵件不正確',
  'err_duplicate_email' => '這個電子郵件已經被其他會員使用',
  'enter_info' => '輸入註冊資料',
  'required_info' => '必填的資料',
  'optional_info' => '選填的資料',
  'username' => '會員名稱',
  'password' => '會員密碼',
  'password_again' => '確認密碼',
  'email' => '電子郵件',
  'location' => '居住地區',
  'interests' => '興趣',
  'website' => '個人網站',
  'occupation' => '職業',
  'error' => '錯誤',
  'confirm_email_subject' => '%s - 註冊認證',
  'information' => '訊息',
  'failed_sending_email' => '所註冊的電子郵件無法寄出 !',
  'thank_you' => '感謝您的註冊.<br /><br />一封含有如何啟用帳號的電子郵件將會送到您所提供的信箱.',
  'acct_created' => '您的帳號已經建立, 現在您可以登入',
  'acct_active' => '您的帳號已經啟用, 現在您可以登入',
  'acct_already_act' => '帳號已經啟用！',
  'acct_act_failed' => '此帳號無法啟用！',
  'err_unk_user' => '所選擇的會員並不存在！',
  'x_s_profile' => '%s\'的個人資料',
  'group' => '群組',
  'reg_date' => '加入日期',
  'disk_usage' => '磁碟使用量',
  'change_pass' => '修改密碼',
  'current_pass' => '目前的密碼',
  'new_pass' => '新密碼',
  'new_pass_again' => '確認新密碼',
  'err_curr_pass' => '目前的密碼不正確',
  'apply_modif' => '修改',
  'change_pass' => '修改密碼',
  'update_success' => '你的個人資料已經更新',
  'pass_chg_success' => '你的密碼已經修改',
  'pass_chg_error' => '你的密碼沒有修改',
  'notify_admin_email_subject' => '%s - 註冊通知',
  'last_uploads' => '最新的上傳。<br />瀏覽全部此會員的上傳', //cpg1.4
  'last_comments' => '最新的留言。<br />流覽全部此會員的留言', //cpg1.4
  'notify_admin_email_body' => '新會員 "%s" 已經在您的相簿註冊',
  'pic_count' => '上傳的檔案', //cpg1.4
  'notify_admin_request_email_subject' => '%s - 註冊要求', //cpg1.4
  'thank_you_admin_activation' => '謝謝。<br /><br />您的註冊要求已經寄給管理員。准許完畢會通知您。', //cpg1.4
  'acct_active_admin_activation' => '帳號已經啟用，通知信件已經寄給會員。', //cpg1.4
  'notify_user_email_subject' => '%s - 啟用通知', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
感謝您在 {SITE_NAME} 的註冊

請到下面的網址起用您的帳號名稱 "{USER_NAME}"。

<a href="{ACT_LINK}">{ACT_LINK}</a>

歡迎你(妳)，

{SITE_NAME} 管理小組

EOT;

$lang_register_approve_email = <<<EOT
A new user with the username "{USER_NAME}" has registered in your gallery.

In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
您的帳號已經審核完畢，也已經啟用。

您現在可以到 <a href="{SITE_LINK}">{SITE_LINK}</a> 登入，用帳號名稱 "{USER_NAME}"


歡迎你(妳)，

{SITE_NAME} 管理小組

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => '觀看留言',
  'no_comment' => '還沒有留言可以觀看',
  'n_comm_del' => '%s 個留言已刪除',
  'n_comm_disp' => '顯示的留言數量',
  'see_prev' => '看前一個',
  'see_next' => '看下一個',
  'del_comm' => '刪除所選的留言',
  'user_name' => '名稱', //cpg1.4
  'date' => '日期', //cpg1.4
  'comment' => '留言', //cpg1.4
  'file' => '檔案', //cpg1.4
  'name_a' => '名稱小到大', //cpg1.4
  'name_d' => '名稱大到小', //cpg1.4
  'date_a' => '日期小到大', //cpg1.4
  'date_d' => '日期大到小', //cpg1.4
  'comment_a' => '留言小到大', //cpg1.4
  'comment_d' => '留言大到小', //cpg1.4
  'file_a' => '檔案小到大', //cpg1.4
  'file_d' => '檔案大到小', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php   
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => '搜尋檔案存庫', //cpg1.4
  'submit_search' => '搜尋', //cpg1.4
  'keyword_list_title' => '關鍵字列表', //cpg1.4
  'keyword_msg' => '上面的列表不包括圖片標題或簡介。試著用 full-text 搜尋。',  //cpg1.4
  'edit_keywords' => '編輯關鍵字', //cpg1.4
  'search in' => '搜尋：', //cpg1.4
  'ip_address' => 'IP 位置', //cpg1.4
  'fields' => '搜尋', //cpg1.4
  'age' => '年齡', //cpg1.4
  'newer_than' => '日期之後', //cpg1.4
  'older_than' => '日期之前', //cpg1.4
  'days' => '天', //cpg1.4
  'all_words' => '包含完整字詞 (AND)', //cpg1.4
  'any_words' => '包含任何字詞 (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => '名稱', //cpg1.4
  'caption' => '標題', //cpg1.4
  'keywords' => '關鍵字', //cpg1.4
  'owner_name' => '作者', //cpg1.4
  'filename' => '檔案名', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '搜尋新圖片',
  'select_dir' => '選擇目錄',
  'select_dir_msg' => '本功能可以讓你用 FTP 上傳整批的圖片。<br /><br />請選擇已上傳圖片的目錄。', //cpg1.4
  'no_pic_to_add' => '沒有圖片可以加入',
  'need_one_album' => '使用此功能必需至少要有一個相簿',
  'warning' => '警告',
  'change_perm' => '程式無法寫入這個目錄, 請修改權限至 755 或 777 後再試一次 !',
  'target_album' => '<b>把圖片由 &quot;</b>%s<b>&quot; 放到 </b>%s',
  'folder' => '資料夾',
  'image' => '圖片',
  'album' => '相簿',
  'result' => '結果',
  'dir_ro' => '無法寫入. ',
  'dir_cant_read' => '無法讀取. ',
  'insert' => '新增圖片至相簿',
  'list_new_pic' => '新圖片列表',
  'insert_selected' => '加入所選擇的圖片',
  'no_pic_found' => '沒有找到新圖片',
  'be_patient' => '請耐心等候, 程式需要一點時間來加入所選圖片',
  'no_album' => '沒有選擇的相簿',
  'result_icon' => '瀏覽細節或刷新',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : 表示圖片已成功被加入'.
                          '<li><b>DP</b> : 表示圖片重覆或已存在資料庫'.
                          '<li><b>PB</b> : 表示圖片無法加入, 請檢查設定或圖片存放目錄的權限'.
                          '<li><b>NA</b> : 表示你還沒有選擇圖片的相簿, 按 \'<a href="javascript:history.back(1)">返回</a>\' 並選擇相簿. 如果你沒有相簿 <a href="albmgr.php">請先建立一個</a></li>'.
                          '<li>如果 OK, DP, PB \'符號\' 沒有顯示請按壞掉的圖片查看 PHP 顯示的錯誤訊息'.
                          '<li>如果瀏覽器逾時, 請按重新整理'.
                          '</ul>',
  'select_album' => '選擇相簿',
  'check_all' => '全選',
  'uncheck_all' => '都不選',
  'no_folders' => '"albums" 目錄內沒有其它目錄。請建立最少一個目錄到 "albums" 裡面，然後上傳您的圖片。您不能上傳圖片到 "userpics" 或 "edit" 目錄，它們的用途是給 CPG 軟體和 http 的上傳功能。', //cpg1.4
   'albums_no_category' => '相簿沒有類別', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* 私人相簿', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => '可瀏覽介面 (建議)', //cpg1.4
  'edit_pics' => '編輯檔案', //cpg1.4
  'edit_properties' => '相簿屬性', //cpg1.4
  'view_thumbs' => '縮圖顯示', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => '顯示/隱藏 此欄位', //cpg1.4
  'vote' => '投票細節', //cpg1.4
  'hits' => '瀏覽細節', //cpg1.4
  'stats' => '投票統計', //cpg1.4
  'sdate' => '日期', //cpg1.4
  'rating' => '評分', //cpg1.4
  'search_phrase' => '搜尋字', //cpg1.4
  'referer' => '來源', //cpg1.4
  'browser' => '瀏覽器', //cpg1.4
  'os' => '操作系統', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => '排序 %s', //cpg1.4
  'ascending' => '小到大', //cpg1.4
  'descending' => '大到小', //cpg1.4
  'internal' => '內部', //cpg1.4
  'close' => '關閉', //cpg1.4
  'hide_internal_referers' => '隱藏內部的來源', //cpg1.4
  'date_display' => '日期顯示', //cpg1.4
  'submit' => '傳送 / 刷新', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => '上傳檔案',
  'custom_title' => '上傳選項表',
  'cust_instr_1' => '你可以從下列 選擇一個上傳框 進行上傳.',
  'cust_instr_2' => '選擇上傳框號',
  'cust_instr_3' => '檔案上傳框: %s',
  'cust_instr_4' => 'URI/URL 上傳框: %s',
  'cust_instr_5' => 'URI/URL 上傳框:',
  'cust_instr_6' => '檔案上傳框:',
  'cust_instr_7' => '請輸入您目前需要的 每一種上傳框的數量. 然後按 \'繼續\'. ',
  'reg_instr_1' => '無效的選項表動作.',
  'reg_instr_2' => '現在 你可以用以下的上傳框 上傳你的檔案. 每一個上傳檔案的大小不可以超過 %s KB . ZIP 檔案上傳在 \'檔案上傳\' and \'URI/URL 上傳\' 區 .',
  'reg_instr_3' => '如果你要上傳壓縮檔或要解壓縮, 必須使用檔案上傳框 \'解壓縮ZIP 上傳\' 區.',
  'reg_instr_4' => '如果選擇以 URI/URL 上傳, 請輸入檔案連結路徑 如: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => '完成選項表後,請按 \'繼續\'.',
  'reg_instr_6' => '解壓縮ZIP 上傳:',
  'reg_instr_7' => '檔案 上傳:',
  'reg_instr_8' => 'URI/URL 上傳:',
  'error_report' => '錯誤報告',
  'error_instr' => '下列上傳遇到錯誤:',
  'file_name_url' => '檔案 名稱/URL',
  'error_message' => '錯誤訊息',
  'no_post' => '檔案沒有被上傳。',
  'forb_ext' => '不允許的副檔名。',
  'exc_php_ini' => '檔案超過php.ini允許的大小。',
  'exc_file_size' => '檔案超過CPG允許的大小。',
  'partial_upload' => '只有部分上傳。',
  'no_upload' => '沒有上傳。',
  'unknown_code' => '未知的 PHP 上傳錯誤。',
  'no_temp_name' => '沒有上傳 - 無暫存檔名。',
  'no_file_size' => '沒有內容',
  'impossible' => '無法移動。',
  'not_image' => '這不是標準影像檔',
  'not_GD' => '這不是 GD 副檔名。',
  'pixel_allowance' => '影像尺寸太大了。',
  'incorrect_prefix' => '不正確的 URI/URL 前置字元',
  'could_not_open_URI' => '無法開啟URI。',
  'unsafe_URI' => '安全性未被認證。',
  'meta_data_failure' => '轉換資料失敗',
  'http_401' => '401 未被授權瀏覽',
  'http_402' => '402 此處需付費瀏覽',
  'http_403' => '403 目前此處關閉禁止瀏覽',
  'http_404' => '404 伺服器沒有回應',
  'http_500' => '500 內部伺服器錯誤',
  'http_503' => '503 伺服器等待過久 停止服務',
  'MIME_extraction_failure' => '無法確認 MIME。',
  'MIME_type_unknown' => '未知的 MIME type',
  'cant_create_write' => '無法新增寫入檔案。',
  'not_writable' => '無法讀寫。',
  'cant_read_URI' => '無法讀取 URI/URL',
  'cant_open_write_file' => '無法開啟檔案。',
  'cant_write_write_file' => '無法讀寫檔案。',
  'cant_unzip' => '無法解壓縮。',
  'unknown' => '未知的錯誤',
  'succ' => '成功上傳',
  'success' => '%s 上傳已經完成。',
  'add' => '請按 \'繼續\' 增加檔案到相簿。',
  'failure' => '上傳失敗',
  'f_info' => '檔案資訊',
  'no_place' => '先前的檔案無法被配置。',
  'yes_place' => '先前的檔案已經配置完成。',
  'max_fsize' => '最大允許檔案大小是 %s KB',
  'album' => '相簿',
  'picture' => '圖片',
  'pic_title' => '圖片標題',
  'description' => '圖片描述',
  'keywords' => '關鍵字 (以空格區隔)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">從列表輸入</a>', //cpg1.4
  'keywords_sel' =>'選擇關鍵字', //cpg1.4
  'err_no_alb_uploadables' => '目前尚未有相簿可以上傳圖片',
  'place_instr_1' => '請將圖片放到相簿，然後輸入這個檔案的相關資訊。',
  'place_instr_2' => '更多的圖片需要配置。請按 \'繼續\'。',
  'process_complete' => '恭喜，您已經成功的將全部檔案上傳了。',
   'albums_no_category' => '相簿沒有類別', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* 私人相簿', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => '選擇相簿', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => '關閉', //cpg1.4
  'no_keywords' => '抱歉，沒可用的關鍵字！', //cpg1.4
  'regenerate_dictionary' => '重新建立字庫', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => '會員名單', //cpg1.4
  'user_manager' => '會員管理', //cpg1.4
  'title' => '管理會員',
  'name_a' => '名稱 由小至大',
  'name_d' => '名稱 由大至小',
  'group_a' => '群組 由小至大',
  'group_d' => '群組 由大至小',
  'reg_a' => '註冊日期 由遠至近',
  'reg_d' => '註冊日期 由近至遠',
  'pic_a' => '圖片數 由小至大',
  'pic_d' => '圖片數 由大至小',
  'disku_a' => '磁碟用量 由小至大',
  'disku_d' => '磁碟用量 由大至小',
  'lv_a' => '最近來訪 由近至遠',
  'lv_d' => '最近來訪 由遠至近',
  'sort_by' => '會員排序依',
  'err_no_users' => '會員資料表是空的 !',
  'err_edit_self' => '您無法編輯您的個人資料, 請利用 \'我的個人資料\' 來編輯',
  'edit' => '編輯', //cpg1.4
  'with_selected' => '選項動作：', //cpg1.4
  'delete' => '刪除', //cpg1.4
  'delete_files_no' => '保留檔案 (不提供來源)', //cpg1.4
  'delete_files_yes' => '刪除全部檔案', //cpg1.4
  'delete_comments_no' => '保留留言 (不提供來源)', //cpg1.4
  'delete_comments_yes' => '刪除全部留言', //cpg1.4
  'activate' => '啟用', //cpg1.4
  'deactivate' => '停用', //cpg1.4
  'reset_password' => '重設密碼', //cpg1.4
  'change_primary_membergroup' => '改變主要群組', //cpg1.4
  'add_secondary_membergroup' => '改變額外群組', //cpg1.4
  'name' => '會員名稱',
  'group' => '群組',
  'inactive' => '未啟動',
  'operations' => '操作',
  'pictures' => '圖片',
  'disk_space_used' => '空間用量', //cpg1.4
  'disk_space_quota' => '空間配額', //cpg1.4
  'registered_on' => '註冊', //cpg1.4
  'last_visit' => '最近來訪',
  'u_user_on_p_pages' => '%d 個會員於 %d 頁',
  'confirm_del' => '確定要刪除這個會員嗎? \\n所有他的相簿及圖片都會被刪除.', //js-alert
  'mail' => '電子郵件',
  'err_unknown_user' => '所選擇的會員並不存在 !',
  'modify_user' => '編輯會員',
  'notes' => '注意',
  'note_list' => '<li>如果不想改變目前的密碼, 請將 "密碼" 位留下空白',
  'password' => '密碼',
  'user_active' => '會員已啟動',
  'user_group' => '會員群組',
  'user_email' => '會員電子郵件',
  'user_web_site' => '會員網址',
  'create_new_user' => '建立新會員',
  'user_location' => '會員地區',
  'user_interests' => '會員興趣',
  'user_occupation' => '會員職業',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => '最新上傳',
  'never' => '從未有',
  'search' => '會員搜尋', //cpg1.4
  'submit' => '傳送', //cpg1.4
  'search_submit' => '繼續！', //cpg1.4
  'search_result' => '搜尋結果： ', //cpg1.4
  'alert_no_selection' => '您必須選擇至少一個會員！', //cpg1.4 //js-alert
  'password' => '密碼', //cpg1.4
  'select_group' => '選擇群組', //cpg1.4
  'groups_alb_access' => '群組的相簿權限', //cpg1.4
  'album' => '相簿', //cpg1.4
  'category' => '類別', //cpg1.4
  'modify' => '修改？', //cpg1.4
  'group_no_access' => '這個群組無特殊權限', //cpg1.4
  'notice' => '通知', //cpg1.4
  'group_can_access' => '只有 "%s" 可以進入這個相簿', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'以檔案名更新標題', //cpg1.4
'刪除標題', //cpg1.4
'重新建立縮圖和調整尺寸', //cpg1.4
'用調整過的尺寸覆蓋並刪除原來的圖片', //cpg1.4
'刪除原來或中級圖片', //cpg1.4
'刪除零散的留言', //cpg1.4
'重新讀取檔案大小和尺寸 (如果您手動編輯圖片)', //cpg1.4
'清除瀏覽計數器', //cpg1.4
'顯示 phpinfo', //cpg1.4
'更新資料庫', //cpg1.4
'顯示記錄檔', //cpg1.4
);
$lang_util_php = array(
  'title' => '管理工具 (重設尺寸)',
  'what_it_does' => '功能',
  'file' => '檔案',
  'problem' => '問題', //cpg1.4
  'status' => '狀態', //cpg1.4
  'title_set_to' => '標題變更為',
  'submit_form' => '確認',
  'updated_succesfully' => '更新 已經完成',
  'error_create' => '產生錯誤',
  'continue' => '繼續執行其他的影像',
  'main_success' => '檔案 %s 已設為主圖', 
  'error_rename' => '錯誤 %s 改名為 %s', 
  'error_not_found' => '找不到檔案 %s ',
  'back' => '回主頁',
  'thumbs_wait' => '更新縮圖 且/或 調整影像尺寸, 請稍待...',
  'thumbs_continue_wait' => '繼續 更新縮圖 且/或 調整影像尺寸...',
  'titles_wait' => '更新標題, 請稍待...',
  'delete_wait' => '刪除標題, 請稍待...',
  'replace_wait' => '重新調整後的圖片將 取代原有的圖片中, 請稍待...',
  'instruction' => '簡易操作說明',
  'instruction_action' => '請選擇操作',
  'instruction_parameter' => '設定參數',
  'instruction_album' => '選擇相簿',
  'instruction_press' => '請按 %s',
  'update' => '更新縮圖 且/或 調整圖片大小',
  'update_what' => '要更新什麼',
  'update_thumb' => '只有縮圖',
  'update_pic' => '只調整圖片大小',
  'update_both' => '更新縮圖且調整圖片尺寸',
  'update_number' => '每點選一次要處理的圖片數目',
  'update_option' => '(如果您遇到操作程序逾時的問題，請試著降低此設定)',
  'filename_title' => '檔案名稱 &rArr; 圖片標題',
  'filename_how' => '如何修改檔名', 
  'filename_remove' => '刪除 .jpg 並將 _ (底線) 用空格取代', 
  'filename_euro' => '將 2003_11_23_13_20_20.jpg 改為 23/11/2003 13:20', 
  'filename_us' => '將 2003_11_23_13_20_20.jpg 改為 11/23/2003 13:20', 
  'filename_time' => '將 2003_11_23_13_20_20.jpg 改為 13:20', 
  'delete' => '刪除圖片標題或原始尺寸的圖片',
  'delete_title' => '刪除圖片標題',
  'delete_title_explanation' => '這會在您要的相簿內刪除檔案標題。', //cpg1.4
  'delete_original' => '刪除原始尺寸的圖片',
  'delete_original_explanation' => '這會移除原始尺寸的圖片。', //cpg1.4
  'delete_intermediate' => '刪除中級圖片', //cpg1.4
  'delete_intermediate_explanation' => '這會刪除中級 (normal) 圖片。<br />用這個功能來清除主機空間，如果您在設定內關閉了 \'建立中級圖片\'。', //cpg1.4
  'delete_replace' => '刪除原始尺寸的圖片並以調整尺寸的圖片取代',
  'titles_deleted' => '選擇相簿內的標題已刪除', //cpg1.4
  'deleting_intermediates' => '刪除中級圖片，請稍待...', //cpg1.4
  'searching_orphans' => '搜尋零散的資料，請稍待...', //cpg1.4
  'select_album' => '選擇相簿',
  'delete_orphans' => '刪除零散的留言', //cpg1.4
  'delete_orphans_explanation' => '這會移除已經被刪除的圖片裡的留言。<br />檢查全部相簿。', //cpg1.4
  'refresh_db' => '更新檔案尺寸和大小資訊', //cpg1.4
  'refresh_db_explanation' => '這會重新讀取檔案的大小和尺寸。用這個功能如果空間的配額有錯誤，或您有手動修改圖片。', //cpg1.4
  'reset_views' => '清除瀏覽計數器', //cpg1.4
  'reset_views_explanation' => '這會在選擇的相簿內重設瀏覽次數到 0。', //cpg1.4
  'orphan_comment' => '發現零散的留言',
  'delete' => '刪除',
  'delete_all' => '全部刪除',
  'delete_all_orphans' => '全部刪除？', //cpg1.4
  'comment' => '留言： ',
  'nonexist' => '依附於不存在的檔案 # ',
  'phpinfo' => '顯示 phpinfo',
  'phpinfo_explanation' => '包含了主機的資訊。<br /> - 尋求支援時可能會被要求提供裡面的資料。', //cpg1.4
  'update_db' => '更新資料庫',
  'update_db_explanation' => '如果妳有更新 CPG 檔案，加入修改或由以前的版本升級，請確定執行一次資料庫更新。這會在 CPG 的資料庫新增必要的資料表及/或設定值。',
  'view_log' => '瀏覽記錄檔', //cpg1.4
  'view_log_explanation' => 'CPG 可以記錄一些會員的動作。您可以瀏覽這些記錄如果您有在 <a href="admin.php">設定</a> 裡開啟記錄的功能。', //cpg1.4
  'versioncheck' => '檢查版本', //cpg1.4
  'versioncheck_explanation' => '顯查檔案的版本，看是否有完全更新成功。您也可以檢查 CPG 主程式的最新版本。', //cpg1.4
  'bridgemanager' => '整合管理', //cpg1.4
  'bridgemanager_explanation' => '開啟/關閉 整合到其它軟體 (例如論壇)。', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => '檢查版本', //cpg1.4
  'what_it_does' => '這個頁面是對剛更新相簿的管理員設定。這個程式會檢查您安裝的版本是否跟 CPG 的線上存庫 (http://coppermine.sourceforge.net) 裡的版本相同。<br />如果需要修改會顯示紅色。黃色表示需要檢查。綠色或者預設顏色表示沒問題。<br />詳情請點說明圖示。', //cpg1.4
  'online_repository_unable' => '無法連結到線上存庫', //cpg1.4
  'online_repository_noconnect' => 'CPG 無法連結到線上存庫。可能有兩種原因：', //cpg1.4
  'online_repository_reason1' => '線上存庫有問題 - 請檢查您是否能到這個網頁： %s - 如果不能請稍待重試。', //cpg1.4
  'online_repository_reason2' => '主機裡的 PHP 的設定有把 %s 關閉 (預設值是開啟)。如果是您自己的主機，請在 <i>php.ini</i> 裡將此設定開啟 (或者允許強制覆蓋 %s)。如果您的主機是買的，很抱歉，您可以無法使用這項功能。這個頁面就只會顯示下載的檔案版本 - 更新的版本不會顯示。', //cpg1.4
  'online_repository_skipped' => '連結到線上存庫暫停', //cpg1.4
  'online_repository_to_local' => '系統目前是使用主機內的檔案版本。這裡顯示的資料可能不正確如果你更新或未完全上傳 CPG 的檔案。', //cpg1.4
  'local_repository_unable' => '無法連結到主機存庫', //cpg1.4
  'local_repository_explanation' => 'CPG 無法連結到您主機內的存庫檔案 %s。這可能表示您還未上傳存庫檔案到您的主機。請現在上傳然後重新執行這個頁面 (刷新網頁)。<br />如果無法執行，您的主機可能關閉了一些 <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP 的檔案系統</a>。如果是這個原因，很抱歉您不能使用這項功能。', //cpg1.4
  'coppermine_version_header' => '安裝的 CPG 版本', //cpg1.4
  'coppermine_version_info' => '您目前安裝的是： %s', //cpg1.4
  'coppermine_version_explanation' => '如果您認為您安裝的不是這個版本，請確定您上傳的是最新的 <i>include/init.inc.php</i> 檔案', //cpg1.4
  'version_comparison' => '比較檔案', //cpg1.4
  'folder_file' => '目錄/檔案', //cpg1.4
  'coppermine_version' => 'CPG 版本', //cpg1.4
  'file_version' => '檔案版本', //cpg1.4
  'webcvs' => '線上 CVS', //cpg1.4
  'writable' => '可讀寫', //cpg1.4
  'not_writable' => '不可讀寫', //cpg1.4
  'help' => '說明', //cpg1.4
  'help_file_not_exist_optional1' => '目錄/檔案不存在', //cpg1.4
  'help_file_not_exist_optional2' => '目錄/檔案 %s 不存在於您的主機內。雖然可以不用，但是建議您如果有遇到問題請將它上傳 (用 FTP)。', //cpg1.4
  'help_file_not_exist_mandatory1' => '目錄/檔案不存在', //cpg1.4
  'help_file_not_exist_mandatory2' => '目錄/檔案 %s 不存在於您的主機內。您必須將它上傳。請用 FPT 軟體將檔案上傳到您的主機內。', //cpg1.4
  'help_no_local_version1' => '沒有主機版本', //cpg1.4
  'help_no_local_version2' => '系統無法取得主機內的檔案版本 - 您的檔案可能過時或已被修改過。建議您更新檔案。', //cpg1.4
  'help_local_version_outdated1' => '主機版本過時', //cpg1.4
  'help_local_version_outdated2' => '您的檔案可能是舊的 CPG 程式檔案 (可能更新時忘了步驟)。請確定更新這個檔案。', //cpg1.4
  'help_local_version_na1' => '無法取得 CVS 檔案版本', //cpg1.4
  'help_local_version_na2' => '系統無法取得主機內的 CVS 版本。請重新上傳檔案。', //cpg1.4
  'help_local_version_dev1' => '開發版本', //cpg1.4
  'help_local_version_dev2' => '檔案看起來比您使用的 CPG 版本還高。您可能用的是開發版本 (不建議使用)，或在更新時忘了上傳 include/init.inc.php', //cpg1.4
  'help_not_writable1' => '目錄無法讀寫', //cpg1.4
  'help_not_writable2' => '改變檔案的權限 (CHMOD) 到可讀寫目錄 %s，及裡面的全部檔案。', //cpg1.4
  'help_writable1' => '目錄可讀寫', //cpg1.4
  'help_writable2' => '目錄 %s 可以讀寫。可能有安全問題，CPG 只需要讀取跟執行這個目錄。', //cpg1.4
  'help_writable_undetermined' => 'CPG 無法確定這個目錄是否可讀寫。', //cpg1.4
  'your_file' => '您的檔案', //cpg1.4
  'reference_file' => '參照檔案', //cpg1.4
  'summary' => '概括', //cpg1.4
  'total' => '總檔案/目錄檢查完畢', //cpg1.4
  'mandatory_files_missing' => '必要檔案不存在', //cpg1.4
  'optional_files_missing' => '非必需檔案不存在', //cpg1.4
  'files_from_older_version' => '舊版本檔案', //cpg1.4
  'file_version_outdated' => '舊檔案版本', //cpg1.4
  'error_no_data' => '系統有錯誤，無法取得任何資訊。', //cpg1.4
  'go_to_webcvs' => '到 %s', //cpg1.4
  'options' => '選項', //cpg1.4
  'show_optional_files' => '顯示非必須檔案/目錄', //cpg1.4
  'show_mandatory_files' => '顯示必要檔案', //cpg1.4
  'show_file_versions' => '顯示檔案版本', //cpg1.4
  'show_errors_only' => '顯示有錯誤的檔案/目錄', //cpg1.4
  'show_permissions' => '顯示目錄權限', //cpg1.4
  'show_condensed_output' => '顯示壓縮的輸出資料', //cpg1.4
  'coppermine_in_webroot' => 'CPG 安裝於 webroot', //cpg1.4
  'connect_online_repository' => '試著連結到線上存庫', //cpg1.4
  'show_additional_information' => '顯示額外資訊', //cpg1.4
  'no_webcvs_link' => '不顯示線上 CVS 連結', //cpg1.4
  'stable_webcvs_link' => '顯示線上 CVS 給正式版本', //cpg1.4
  'devel_webcvs_link' => '顯示線上 CVS 給開發版本', //cpg1.4
  'submit' => '套用改變/刷新', //cpg1.4
  'reset_to_defaults' => '重設為預設值', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => '刪除全部記錄', //cpg1.4
  'delete_this' => '刪除這個記錄', //cpg1.4
  'view_logs' => '瀏覽記錄', //cpg1.4
  'no_logs' => '沒有記錄。', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web 發佈功能軟體</h1><p>這個模組可以讓您使用 <b>Windows XP</b> 的發佈功能。</p><p>程式碼是照此篇文章說明，作者是
EOT;

$lang_xp_publish_required = <<<EOT
<h2>需要什麼？</h2><ul><li>必須要有 Windows XP。</li><li>安裝好的 CPG 相簿，<b>而且上傳功能可運作。</b></li></ul><h2>如何安裝</h2><ul><li>按右鍵於
EOT;

$lang_xp_publish_select = <<<EOT
選擇 &quot;儲存檔案..&quot;。然後將檔案儲存在您的硬碟。儲存時記得檔案名必須是 <b>cpg_###.reg</b> (### 代表日期的數字)。您可以改變名稱 (不要改數字)。下載完後，執行那個檔案可以讓您的主機使用發佈功能。</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>測試</h2><ul><li>在 Windows Explorer，選一些檔案然後在左邊點 <b>Publish xxx on the web</b>。</li><li>檢查您所選的檔案，然後點 <b>Next</b>。</li><li>在出現的列表內選 CPG 相簿的服務 (會以您的相簿名稱顯示)。如果沒有顯示相簿的服務，檢查是否像上面描述的安裝成功 <b>cpg_pub_wizard.reg</b>。</li><li>必要時輸入您的帳號資料。</li><li>然後選擇要放圖片的相簿，或新建相簿。</li><li>之後點 <b>next</b>。接下來會開始上傳您的圖片。</li><li>完成後到您的相簿內檢查是否上傳完畢。</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>注意：</h2><ul><li>當正在上傳時，發佈功能不會顯示任何錯誤訊息，所以不能知道上傳有沒有成功，直到您檢查相簿。</li><li>如果上傳沒成功，在設定頁面內開啟 &quot;除錯模式&quot;，試著上傳一個圖片然後檢查錯誤訊息在
EOT;

$lang_xp_publish_flood = <<<EOT
CPG 目錄內的檔案。</li><li>為了避免用發佈功能一次上傳太多圖片，只有 <b>相簿管理員</b> 和 <b>可以有自己相簿的會員</b> 可以用這個功能。</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'CPG - XP Web 發佈功能', //cpg1.4
  'welcome' => '歡迎到 <b>%s</b>,', //cpg1.4
  'need_login' => '您必須先用瀏覽器登入到相簿內才能使用這個功能。<p/><p>登入後記得點選 <b>記得我</b> 選項。', //cpg1.4
  'no_alb' => '抱歉，目前沒有可以用發佈功能上傳圖片的相簿。', //cpg1.4
  'upload' => '上傳圖片到相簿', //cpg1.4
  'create_new' => '新建相簿', //cpg1.4
  'album' => '相簿', //cpg1.4
  'category' => '類別', //cpg1.4
  'new_alb_created' => '您的相簿 &quot;<b>%s</b>&quot; 已經新建', //cpg1.4
  'continue' => '按 &quot;Next&quot; 開始上傳圖片', //cpg1.4
  'link' => '這個連結', //cpg1.4
);
}
?>