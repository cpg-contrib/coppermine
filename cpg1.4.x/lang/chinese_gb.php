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
  Coppermine version: 1.4.21
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Chinese (Simplified)', //cpg1.4
  'lang_name_native' => '简体中文', //cpg1.4
  'lang_country_code' => 'cn', //cpg1.4
  'trans_name'=> '流溪，CapriSkye and monkey',
  'trans_email' => 'ben@smf.cn',
  'trans_website' => 'http://www.smf.cn/',
  'trans_date' => '2006-01-03',
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
$lang_continue = '继续';
$lang_info = '信息';
$lang_error = '错误';
$lang_check_uncheck_all = '勾选/勾选全部'; //cpg1.4

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
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*','共产党','法轮功','他妈的','操你');

$lang_meta_album_names = array(
  'random' => '随机图片',
  'lastup' => '最新上传',
  'lastalb'=> '最近更新',
  'lastcom' => '最新留言',
  'topn' => '热门图片',
  'toprated' => '最高评分',
  'lasthits' => '最近显示',
  'search' => '搜索结果',
  'favpics'=> '最爱图片',
);

$lang_errors = array(
  'access_denied' => '你没有使用本页的权限。',
  'perm_denied' => '你没有权限执行此操作。',
  'param_missing' => '程序被调用而没有需要的参数。',
  'non_exist_ap' => '选择的 相册/图片 不存在！',
  'quota_exceeded' => '超过空间配额<br /><br />您的配额有 [quota]K，已使用的有 [space]K，加入此图片会超过拥有的配额。',
  'gd_file_type_err' => '当使用 GD 图像链接库只容许 JPEG / PNG 图片。',
  'invalid_image' => '你上传的文件己经损坏, 或是 GD 图像链接库不能处理',
  'resize_failed' => '无法建立缩略图或改变图片尺寸.',
  'no_img_to_display' => '没有图片可以显示。',
  'non_exist_cat' => '所选择的类别并不存在。',
  'orphan_cat' => '这个子类别存于一个不存在的母类别，请先至类别管理修正这个问题。',
  'directory_ro' => '目录 \'%s\' 无法写入，导致无法删除图片',
  'non_exist_comment' => '所选择的留言并不存在。',
  'pic_in_invalid_album' => '此图片存于不存在的相册 (%s)!?',
  'banned' => '您目前被禁止使用本站。',
  'not_with_udb' => '由于本相册已和论坛程序整合，此功能已停止使用。可能是目前设定不支持此功能，或已由论坛处理。', 
  'offline_title' => '关闭',
  'offline_text' => '相册目前是关闭状态 - 请稍后再访问',
  'ecards_empty' => '目前没有电子贺卡的纪录可显示。请检查相册设定中是否启用纪录电子贺卡功能！',
  'action_failed' => '操作失败。Coppermine 无法执行您的要求。',
  'no_zip' => '无法执行ZIP压缩文件。请联络您的相册管理员。',
  'zip_type' => '您没有上传ZIP压缩文件的权限。',
  'database_query' => '进行数据库查询时发生了错误', //cpg1.4
  'non_exist_comment' => '选择的留言不存在', //cpg1.4
);

$lang_bbcode_help_title = 'bbcode 帮助'; //cpg1.4
$lang_bbcode_help = '您可以用 bbcode 加入可点的连接，和其它的文字格式： <li>[b]粗体[/b] =&gt; <b>粗体</b></li><li>[i]斜体[/i] =&gt; <i>斜体</i></li><li>[url=http://yoursite.com/]网址[/url] =&gt; <a href="http://yoursite.com">网址</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]颜色[/color] =&gt; <span style="color:red">颜色</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => '回到首页',
  'home_lnk' => '首页',
  'alb_list_title' => '返回相册目录',
  'alb_list_lnk' => '相册目录',
  'my_gal_title' => '返回我的相册',
  'my_gal_lnk' => '我的相册',
  'my_prof_title' => '到我的个人资料', //cpg1.4
  'my_prof_lnk' => '我的个人资料',
  'adm_mode_title' => '转为管理模式',
  'adm_mode_lnk' => '管理模式',
  'usr_mode_title' => '转为会员模式',
  'usr_mode_lnk' => '会员模式',
  'upload_pic_title' => '上传图片至相册',
  'upload_pic_lnk' => '上传图片',
  'register_title' => '建立会员账号',
  'register_lnk' => '注册',
  'login_title' => '登录', //cpg1.4
  'login_lnk' => '登录',
  'logout_title' => '注销', //cpg1.4
  'logout_lnk' => '注销',
  'lastup_title' => '浏览最新上传', //cpg1.4
  'lastup_lnk' => '最新上传',
  'lastcom_title' => '浏览最新留言', //cpg1.4
  'lastcom_lnk' => '最新留言',
  'topn_title' => '浏览热门的图片', //cpg1.4
  'topn_lnk' => '热门图片',
  'toprated_title' => '浏览评分最高的图片', //cpg1.4
  'toprated_lnk' => '最高评分',
  'search_title' => '搜索相册', //cpg1.4
  'search_lnk' => '搜索',
  'fav_title' => '到我的最爱', //cpg1.4    
  'fav_lnk' => '我的最爱',
  'memberlist_title' => '显示会员名单',
  'memberlist_lnk' => '会员名单',
  'faq_title' => '&quot;Coppermine&quot; 相册的常见问题解答',
  'faq_lnk' => '常见问题解答',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => '核准新上传', //cpg1.4	
  'upl_app_lnk' => '核准上传',
  'admin_title' => '进入设定', //cpg1.4    
  'admin_lnk' => '设定', //cpg1.4
  'albums_title' => '进入相册设定', //cpg1.4
  'albums_lnk' => '相册',
  'categories_title' => '进入类别设定', //cpg1.4    
  'categories_lnk' => '类别',
  'users_title' => '进入会员设定', //cpg1.4
  'users_lnk' => '会员',
  'groups_title' => '进入群设定', //cpg1.4
  'groups_lnk' => '群',
  'comments_title' => '检查全部留言', //cpg1.4
  'comments_lnk' => '检查留言',
  'searchnew_title' => '进入批量上传功能', //cpg1.4
  'searchnew_lnk' => '批量上传',
  'util_title' => '进入管理功能', //cpg1.4
  'util_lnk' => '管理功能',
  'key_title' => '进入关键词词库', //cpg1.4
  'key_lnk' => '关键词词库', //cpg1.4
  'ban_title' => '进入限制会员', //cpg1.4
  'ban_lnk' => '限制会员',
  'db_ecard_title' => '检查电子贺卡', //cpg1.4
  'db_ecard_lnk' => '显示电子贺卡',
  'pictures_title' => '排序相片', //cpg1.4
  'pictures_lnk' => '排序相片', //cpg1.4
  'documentation_lnk' => '使用帮助', //cpg1.4
  'documentation_title' => 'CPG 使用手册', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => '建立/排序 相册', //cpg1.4
  'albmgr_lnk' => '建立/排序 相册',
  'modifyalb_title' => '进入编辑相册',  //cpg1.4
  'modifyalb_lnk' => '编辑相册',
  'my_prof_title' => '进入个人数据', //cpg1.4
  'my_prof_lnk' => '个人资料',
);

$lang_cat_list = array(
  'category' => '类别',
  'albums' => '相册',
  'pictures' => '图片',
);

$lang_album_list = array(
  'album_on_page' => '%d 个相册，共 %d 页',
);

$lang_thumb_view = array(
  'date' => '日期',
  //Sort by filename and title
  'name' => '文件名',
  'title' => '标题',
  'sort_da' => '根据日期排序 由远至近',
  'sort_dd' => '根据日期排序 由近至远',
  'sort_na' => '根据名称排序 由小至大',
  'sort_nd' => '根据名称排序 由大至小',
  'sort_ta' => '根据标题排序 由小至大',
  'sort_td' => '根据标题排序 由大至小',
  'position' => '位置', //cpg1.4
  'sort_pa' => '小到大排序', //cpg1.4
  'sort_pd' => '大到小排序', //cpg1.4
  'download_zip' => '下载成 Zip 文件',
  'pic_on_page' => '%d 张图片，共 %d 页',
  'user_on_page' => '%d 名会员，共 %d 页',
  'enter_alb_pass' => '输入相册密码', //cpg1.4
  'invalid_pass' => '密码错误', //cpg1.4
  'pass' => '密码', //cpg1.4
  'submit' => '传送', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => '返回缩略图页',
  'pic_info_title' => '显示/隐藏 图片信息',
  'slideshow_title' => '连续播放',
  'ecard_title' => '把图片以电子贺卡寄出',
  'ecard_disabled' => '电子贺卡功能目前停用',
  'ecard_disabled_msg' => '您没有寄电子贺卡的权限', //js-alert
  'prev_title' => '显示前一张图片',
  'next_title' => '显示下一张图片',
  'pic_pos' => '图片 %s/%s',
  'report_title' => '检举这个文件', //cpg1.4
  'go_album_end' => '跳到最后', //cpg1.4
  'go_album_start' => '回到最先', //cpg1.4
  'go_back_x_items' => '退后 %s 个项目', //cpg1.4
  'go_forward_x_items' => '前进 %s 个项目', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => '对图片评分',
  'no_votes' => '(还没有人评分)',
  'rating' => '(目前得分 : %s / 5 于 %s 个评分)',
  'rubbish' => '昏倒 不看也罢',
  'poor' => '有点差劲',
  'fair' => '普普通通',
  'good' => '很好',
  'excellent' => '非常出色',
  'great' => '顶-没有比这更好的了',
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
  CRITICAL_ERROR => '致命错误',
  'file' => '文件: ',
  'line' => '行数: ',
);

$lang_display_thumbnails = array(
  'filename' => '文件名称=', //cpg1.4
  'filesize' => '文件大小=', //cpg1.4
  'dimensions' => '图片尺寸=', //cpg1.4
  'date_added' => '加入日期=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s 个留言',
  'n_views' => '%s 次查看',
  'n_votes' => '(%s 个评分)',
);

$lang_cpg_debug_output = array(
  'debug_info' => '除错信息',
  'select_all' => '全选',
  'copy_and_paste_instructions' => '如果你要在 CPG 的支持论坛上要求协助，复制并贴上这个除错信息到你的发表文章内，包括显示的错误信息。发表文章前请注意用***来替换您的密码。<br />注意：这只是给我们提供改进的信息，并不代表您的相册有问题。', //cpg1.4
  'phpinfo' => '显示PHP信息 (phpinfo)',
  'notices' => '信息', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => '预设语言',
  'choose_language' => '选择你的语言',
);

$lang_theme_selection = array(
  'reset_theme' => '预设风格',
  'choose_theme' => '选择风格',
);

$lang_version_alert = array(
  'version_alert' => '不支持的版本！', //cpg1.4
  'no_stable_version' => '您安装的 CPG 相册版本 %s (%s) 只是给有经验的用户 - 这个版本不会得到官方的支持。如果要得到支持请安装官方提供的正式版本！', //cpg1.4
  'gallery_offline' => '目前相册是属于维护状态，只有管理员才能进入。维护完毕之后记得将相册设回正常状态。', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => '上一个', //cpg1.4
  'next' => '下一个', //cpg1.4
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
  'error_wakeup' => "不能启用插件 '%s'", //cpg1.4
  'error_install' => "不能安装插件 '%s'", //cpg1.4
  'error_uninstall' => "不能删除插件 '%s'", //cpg1.4
  'error_sleep' => "不能删除插件 '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => '感叹',
  'Question' => '疑问',
  'Very Happy' => '很高兴',
  'Smile' => '微笑',
  'Sad' => '悲哀',
  'Surprised' => '惊讶',
  'Shocked' => '震惊',
  'Confused' => '昏倒',
  'Cool' => '很棒',
  'Laughing' => '发笑',
  'Mad' => '发狂',
  'Razz' => '嘲笑',
  'Embarassed' => '尴尬',
  'Crying or Very sad' => '嚎哭',
  'Evil or Very Mad' => '恶毒',
  'Twisted Evil' => '古怪',
  'Rolling Eyes' => '转眼睛',
  'Wink' => '眨眼',
  'Idea' => '主意',
  'Arrow' => '箭头',
  'Neutral' => '中立',
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
  0 => '退出管理模式...',
  1 => '进入管理模式...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => '您需要给相册一个名称 !', //js-alert
  'confirm_modifs' => '确定要做这些修改吗 ?', //js-alert
  'no_change' => '您没有做任何改变 !', //js-alert
  'new_album' => '新相册',
  'confirm_delete1' => '确定要删除此相册吗 ?', //js-alert
  'confirm_delete2' => '\n所有图片及留言都会删除 !', //js-alert
  'select_first' => '请先选择一个相册', //js-alert
  'alb_mrg' => '相册管理员',
  'my_gallery' => '* 我的相册 *',
  'no_category' => '* 没有类别 *',
  'delete' => '删除',
  'new' => '新增',
  'apply_modifs' => '修改',
  'select_category' => '选择类别',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => '限制会员', //cpg1.4
  'user_name' => '会员名称', //cpg1.4
  'ip_address' => 'IP 位置', //cpg1.4
  'expiry' => '期限 (空白如果没有期限)', //cpg1.4
  'edit_ban' => '储存', //cpg1.4
  'delete_ban' => '删除', //cpg1.4
  'add_new' => '新增限制', //cpg1.4
  'add_ban' => '新增', //cpg1.4
  'error_user' => '找不到会员', //cpg1.4
  'error_specify' => '您必须提供会员名称或 IP 位置', //cpg1.4
  'error_ban_id' => '错误的限制编号！', //cpg1.4
  'error_admin_ban' => '您不能限制自己！', //cpg1.4
  'error_server_ban' => '您要限制您自己的主机？别搞笑啦...', //cpg1.4
  'error_ip_forbidden' => '您不能限制这个 IP - 这是不可路径选择的 (私人) IP！<br />如果您要允许限制私人 IP，在 <a href="admin.php">设定</a> 里面可以修改。', //cpg1.4
  'lookup_ip' => '搜索 IP 位置', //cpg1.4
  'submit' => '继续！', //cpg1.4
  'select_date' => '选择日期', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => '整合精灵',
  'warning' => '警告：用这个整合精灵，重要数据是以 HTML 传送。建议您在自己的计算机上使用 (不是在网咖等其它公共场所)，然后确定把浏览器的缓存和临时文件删除。',
  'back' => '返回',
  'next' => '下一步',
  'start_wizard' => '开始整合精灵',
  'finish' => '完成',
  'hide_unused_fields' => '隐藏没用的字段 (建议)',
  'clear_unused_db_fields' => '清除错误的数据库项目 (建议)',
  'custom_bridge_file' => '自定义的整合文件名称 (如果整合文件是叫 <i>myfile.inc.php</i>，在这个字段输入 <i>myfile</i>)',
  'no_action_needed' => '不需要任何操作。请点 \'下一步\' 继续。',
  'reset_to_default' => '重设回默认值',
  'choose_bbs_app' => '选择整合 CPG 的软件',
  'support_url' => '如需这个软件的支持请到',
  'settings_path' => '论坛使用的路径',
  'database_connection' => '数据库连接',
  'database_tables' => '数据表',
  'bbs_groups' => '论坛群',
  'license_number' => '执照号码',
  'license_number_explanation' => '输入执照号码 (如果有)',
  'db_database_name' => '数据库名称',
  'db_database_name_explanation' => '输入论坛使用的数据库名称',
  'db_hostname' => '数据库主机',
  'db_hostname_explanation' => '您的 MySQL 数据库的主机，通常是 &quot;localhost&quot;',
  'db_username' => '数据库账号',
  'db_username_explanation' => '论坛使用的数据库的用户账号',
  'db_password' => '数据库密码',
  'db_password_explanation' => '数据库的用户账号密码',
  'full_forum_url' => '论坛网址',
  'full_forum_url_explanation' => '您的论坛网址 (包括 http:// 例如：http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => '论坛的相对路径',
  'relative_path_of_forum_from_webroot_explanation' => '论坛的主机相对路径 (范例：如果您的论坛在 http://www.yourdomain.tld/forum/，输入 &quot;/forum/&quot;)',
  'relative_path_to_config_file' => '论坛设定文件的相对路径',
  'relative_path_to_config_file_explanation' => '论坛的相对路径，从 CPG 目录计算 (范例 &quot;../forum/&quot; 如果您的论坛是 http://www.yourdomain.tld/forum/ 然后 CPG 是 http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Cookie 前导符',
  'cookie_prefix_explanation' => '这是论坛的 cookie 名称',
  'table_prefix' => '数据表的前导符',
  'table_prefix_explanation' => '论坛使用的数据表的前导符。',
  'user_table' => '会员数据表',
  'user_table_explanation' => '(通常默认值不会有问题，除非您有改过论坛的安装)',
  'session_table' => '会话(session)的数据表',
  'session_table_explanation' => '(通常默认值不会有问题，除非您有改过论坛的安装)',
  'group_table' => '群数据表',
  'group_table_explanation' => '(通常默认值不会有问题，除非您有改过论坛的安装)',
  'group_relation_table' => '群关系的数据表',
  'group_relation_table_explanation' => '(通常默认值不会有问题，除非您有改过论坛的安装)',
  'group_mapping_table' => '群映射的数据表',
  'group_mapping_table_explanation' => '(通常默认值不会有问题，除非您有改过论坛的安装)',
  'use_standard_groups' => '使用标准的论坛群',
  'use_standard_groups_explanation' => '使用标准 (内建) 的群 (建议)。这会让自定义的群无效。除非您知道在干麻，不要关闭这个设定！',
  'validating_group' => '审核群',
  'validating_group_explanation' => '论坛里需要审核的群编号是 (通常默认值不会有问题，建议不要改除非您知道它的用途)',
  'guest_group' => '访客群',
  'guest_group_explanation' => '论坛的访客群编号是 (通常默认值不会有问题，建议不要改除非您知道它的用途)',
  'member_group' => '会员群',
  'member_group_explanation' => '论坛的 &quot;普通&quot; 会员群编号是 (通常默认值不会有问题，建议不要改除非您知道它的用途)',
  'admin_group' => '管理员群',
  'admin_group_explanation' => '论坛的管理员群编号是 (通常默认值不会有问题，建议不要改除非您知道它的用途)',
  'banned_group' => '限制群',
  'banned_group_explanation' => '论坛的限制群编号是 (通常默认值不会有问题，建议不要改除非您知道它的用途)',
  'global_moderators_group' => '全区版主群',
  'global_moderators_group_explanation' => '论坛的全区版主群编号 (通常默认值不会有问题，建议不要改除非您知道它的用途)',
  'special_settings' => '论坛的特殊设定',
  'logout_flag' => 'phpBB 版本 (注销标签)',
  'logout_flag_explanation' => '您的论坛版本 (这项设定是用来指示系统如何注销)',
  'use_post_based_groups' => '使用文章群？',
  'logout_flag_yes' => '2.0.5 或以上',
  'logout_flag_no' => '2.0.4 或以下',
  'use_post_based_groups_explanation' => '该使用论坛会员的文章数来做分类吗？ (允许更完善的权限管理) 或是使用预设群 (可简易管理，建议使用)。之后可以改变这个设定。',
  'use_post_based_groups_yes' => '是',
  'use_post_based_groups_no' => '否',
  'error_title' => '您必须解决这些错误才能继续。回到上一页。',
  'error_specify_bbs' => '您必须提供要整合的软件。',
  'error_no_blank_name' => '您不能将自定义整合的名称字段留白。',
  'error_no_special_chars' => '整合文件不能包括特殊字符，除了 (_) 和 (-)！',
  'error_bridge_file_not_exist' => '整合文件 %s 不存在主机内。请检查是否上传成功。',
  'finalize' => '开启/关闭 论坛整合',
  'finalize_explanation' => '目前整合数据已存入数据库，但是整合还未开启。您可以在任何时间开启或关闭整合。记住相册的管理账号和密码，要做改变时可能需要。如果出现问题，到 %s 然后关闭论坛整合，用整合前的 CPG 管理账号 (您安装 CPG 时建立的账号)。',
  'your_bridge_settings' => '整合设定',
  'title_enable' => '开启整合 %s',
  'bridge_enable_yes' => '开启',
  'bridge_enable_no' => '关闭',
  'error_must_not_be_empty' => '不能空白',
  'error_either_be' => '必须是 %s 或 %s',
  'error_folder_not_exist' => '%s 不存在。. 改正 %s 的输入值',
  'error_cookie_not_readible' => 'CPG 无法读取 cookie 名称 %s。改正 %s 的输入值，或到论坛的设定里面确定 CPG 有读取它的 cookie 路径。',
  'error_mandatory_field_empty' => '您不能空白字段 %s - 请输入正确值。',
  'error_no_trailing_slash' => '%s 字段不能包括最后的斜线。',
  'error_trailing_slash' => '%s 字段必须包括最后的斜线。',
  'error_db_connect' => '不能连接到数据库。MySQL 的错误信息：',
  'error_db_name' => '虽然 CPG 能够连接到数据库，它无法找到您输入的数据表 %s。确定 %s 是正确的数据。MySQL 的错误信息：',
  'error_prefix_and_table' => '%s 和 ',
  'error_db_table' => '找不到数据表 %s。确定 %s 是正确的数据。',
  'recovery_title' => '整合管理： 修复',
  'recovery_explanation' => '如果您要管理论坛的整合设定，您必须先用管理账号登录。如果不能登录，您可以先关闭论坛整合。输入您的账号和密码不会将您登录，只会关闭整合。详情请看帮助文档。',
  'username' => '账号',
  'password' => '密码',
  'disable_submit' => '提交',
  'recovery_success_title' => '授权完成',
  'recovery_success_content' => '您已经成功关闭论坛的整合。CPG 目前不受整合影响。',
  'recovery_success_advice_login' => '登录管理账号来编辑整合设定，或重新开启整合。',
  'goto_login' => '进入登录页面',
  'goto_bridgemgr' => '进入整合管理',
  'recovery_failure_title' => '授权失败',
  'recovery_failure_content' => '您输入错误的数据。您必须提供管理账号 (您安装 CPG 时建立的账号)。',
  'try_again' => '重试',
  'recovery_wait_title' => '锁定时间还没过',
  'recovery_wait_content' => '因为安全问题，您不能连续登录失败后成功登录，您必须稍待一会才能继续登录。',
  'wait' => '等待',
  'create_redir_file' => '建立重定向(redirect)文件 (建议)',
  'create_redir_file_explanation' => '如果要将会员在登录论坛时转回 CPG，您必须建立一个转址文件到您的论坛目录。勾选这个选项整合管理系统会自动帮您建立，或提供需要的程序代码让您手动建立文件。',
  'browse' => '浏览',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => '日历', //cpg1.4
  'close' => '关闭', //cpg1.4
  'clear_date' => '清除日期', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '\'%s\'操作所需要的参数并未提供！',
  'unknown_cat' => '数据库里没有您所选的类别',
  'usergal_cat_ro' => '会员相册的类别不能删除！',
  'manage_cat' => '类别管理',
  'confirm_delete' => '确定要删除此类别吗', //js-alert
  'category' => '类别',
  'operations' => '操作',
  'move_into' => '移动到',
  'update_create' => '更新/建立 类别',
  'parent_cat' => '母类别',
  'cat_title' => '类别标题',
  'cat_thumb' => '类别缩略图',
  'cat_desc' => '类别简介',
  'categories_alpha_sort' => '小到大排序类别 (不用自定义排序)', //cpg1.4
  'save_cfg' => '储存设定', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => '相册设定', //cpg1.4
  'manage_exif' => '管理 exif 显示', //cpg1.4
  'manage_plugins' => '插件管理', //cpg1.4
  'manage_keyword' => '关键词管理', //cpg1.4
  'restore_cfg' => '设回默认值',
  'save_cfg' => '储存设定',
  'notes' => '批注',
  'info' => '信息',
  'upd_success' => 'CPG 设定已更新',
  'restore_success' => '原始设定已回复',
  'name_a' => '排序根据名称 由小至大',
  'name_d' => '排序根据名称 由大至小',
  'title_a' => '排序根据标题 由小至大',
  'title_d' => '排序根据标题 由大至小',
  'date_a' => '排序根据日期 由远至近',
  'date_d' => '排序根据日期 由近至远',
  'pos_a' => '小到大', //cpg1.4
  'pos_d' => '大到小', //cpg1.4
  'th_any' => '最大外观',
  'th_ht' => '高度',
  'th_wd' => '宽度',
  'label' => '标签',
  'item' => '项目',
  'debug_everyone' => '任何人',
  'debug_admin' => '管理员专用',
  'no_logs'=> '关闭', //cpg1.4
  'log_normal'=> '正常', //cpg1.4
  'log_all' => '全部', //cpg1.4
  'view_logs' => '浏览记录', //cpg1.4
  'click_expand' => '点名称展开', //cpg1.4
  'expand_all' => '全部展开', //cpg1.4
  'notice1' => '(*) 这些设定不能改变，如果你已经有文件储存于数据库。', //cpg1.4 - (relocated)
  'notice2' => '(**) 改变这些设定只会影响之后加入的文件。建议您不要改变这些设定，如果已有文件存在。但是您可以改变现有的文件，使用 &quot;<a href="util.php">管理功能</a> (重设尺寸)&quot; 的功能。', //cpg1.4 - (relocated)
  'notice3' => '(***) 全部的记录文件是以英文显示。', //cpg1.4 - (relocated)
  'bbs_disabled' => '整合论坛后关闭的功能', //cpg1.4
  'auto_resize_everyone' => '每个人', //cpg1.4
  'auto_resize_user' => '会员', //cpg1.4
  'ascending' => '小到大', //cpg1.4
  'descending' => '大到小', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  '基本设定',
  array('相册名称', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('相册描述', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('相册管理员的电子邮件', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('CPG 的网址 (不要加上 \'index.php\')', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('首页的网址', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('允许将最爱的图片下载成ZIP文件', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('时区跟 GMT 的差别 (目前时间： ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('开启加密密码 (可以关闭)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('开启帮助图示 (帮助只以英文显示)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('允许可点的关键词','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('允许插件', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('允许限制非路由地址（私有）', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('可浏览的批量接口', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  '语言 &amp; 编码设定',
  array('语言', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('如果翻译的字句不存在使用英文替回', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('文字编码', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('显示语言列表', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('显示语言国旗', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('语言菜单内显示 &quot;重设&quot;', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('显示 上一页/下一页 于页面', 'previous_next_tab', 1), //cpg1.4

  '风格设定',
  array('风格', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('显示风格列表', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('风格菜单内显示 &quot;重设&quot;', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('显示 FAQ', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('自定义的菜单连接', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('自定义菜单的网址', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('显示 bbcode 帮助', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('显示 vanity 区域（下面的四个php,mysql,xhtml,css图片标签），来显示我们通过了 XHTML 和 CSS 测试','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('自定义标头的路径', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('自定义页尾的路径', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  '相册目录显示',
  array('主要表格宽度 (像素或 %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('类别显示的层次数量', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('相册显示数量', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('相册列表的栏数', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('缩略图像素', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('主页的内容', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('显示分类中第一层的相册缩略图','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('以小到大排列类别 (不使用自定义排列)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('显示连接的文件数量','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  '缩略图显示',
  array('缩略图页栏数', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('缩略图页列数', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('显示的卷标页数量', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('缩略图下方显示图片帮助 (连标题)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('缩略图下方显示浏览次数', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('缩略图下方显示留言', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('缩略图下方显示上传者名称', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('缩略图下方显示上传的管理员', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('缩略图下方显示文件名称', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('显示相册简介', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('预设的文件排序', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('\'热门投票\' 需要的投票数', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  '图片显示', //cpg1.4
  array('显示图片的表格宽度 (像素或 %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('图片信息的预设为显示', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('图片简介的允许字数', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('允许的文字数量', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('显示图片预览列', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('图片预览列下方显示文件名称', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('预览列的数量', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('连续拨放间隔时间 (毫秒)。1 秒 = 1000 毫秒', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  '留言设定', //cpg1.4
  array('留言内过滤不良词汇', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('留言内允许表情图案', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('允许会员在同一张图片连续发表留言 (关闭灌水保护)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('留言的最大行数', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('留言的最大长度', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('有留言时通知管理员', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('留言的排序', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('无名留言者的前导符', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  '图片及缩略图设定',
  array('JPEG 格式质量', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('缩略图最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('使用尺寸 (宽，高或缩略图最大边长) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('建立中级图片','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('中级图片/影片的最大尺寸 <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('传图片的最大限制 (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('上传图片/影片的最大宽度或最高尺寸 (像素)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('自动重设超过限制的图片尺寸', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  '图片和缩略图的高级设定',
  array('可使用私人相册 (注意：如果您从 \'是\' 换成 \'否\'，任何现有的私人相册将会变成公共相册)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('显示私人相册图片给未登录的会员','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('文件名不可使用的字词', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('上传图片可接受的扩展名', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('允许的图片文件类型', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('允许的影片文件类型', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('自动播放影片', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('允许的声音文件类型', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('允许的文件文件类型', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('建立缩略图的方法','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('ImageMagick 的 \'convert\' 程序路径 (例如 /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('可接受的图片类型 (只对 ImageMagick 有效)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('ImageMagick 的命令列选项', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('读取 JPEG 图片的 EXIF 数据', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('读取 JPEG 图片的 IPTC 数据', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('相册路径 <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('会员图文件路径 <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('缩略图片的前导符 <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('缩略图的前导符 <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('目录的预设模式', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('文件的预设模式', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  '会员设定',
  array('允许会员注册', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('允许访客进入', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('注册需要电子邮件验证', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('有新会员时通知管理员', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('管理员需审核注册', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('允许两个会员使用同一个电子邮件', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('通知管理员有等待审核的文件', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('允许登录的会员浏览会员名单', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('允许会员改变电子邮件', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('允许会员保留自己在公共相册里的图片', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('允许错误登录的次数 (避免相册遭受攻击)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('错误登录后的限制时间', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('允许向管理员检举文件', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  '个人数据的自定义字段 (空白如果不使用)。
  用“数据 6” 给字数长的信息，例如说个人简介', //cpg1.4
  array('数据 1 的名称', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('数据 2 的名称', 'user_profile2_name', 0), //cpg1.4
  array('数据 3 的名称', 'user_profile3_name', 0), //cpg1.4
  array('数据 4 的名称', 'user_profile4_name', 0), //cpg1.4
  array('数据 5 的名称', 'user_profile5_name', 0), //cpg1.4
  array('数据 6 的名称', 'user_profile6_name', 0), //cpg1.4

  '图片简介的自定义字段 (空白如果不使用)',
  array('字段 1 的名称', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('字段 2 的名称', 'user_field2_name', 0),
  array('字段 3 的名称', 'user_field3_name', 0),
  array('字段 4 的名称', 'user_field4_name', 0),

  'Cookies 设定',
  array('Cookie 名称', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Cookie 路径', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  '电子邮件设定  (通常可以不用作任何改变；如果不懂请不要更改)', //cpg1.4
  array('SMTP 主机 (如果空白会使用 sendmail)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP 账号', 'smtp_username', 0), //cpg1.4
  array('SMTP 密码', 'smtp_password', 0), //cpg1.4

  '记录和统计', //cpg1.4
  array('记录模式 <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('记录电子贺卡', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('记录投票的统计','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('记录浏览的统计','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  '维护设定', //cpg1.4
  array('开启除错模式', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('显示除错模式里的通知', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('相册维护 (关闭)', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => '发送电子贺卡',
  'ecard_sender' => '发件人',
  'ecard_recipient' => '收件人',
  'ecard_date' => '日期',
  'ecard_display' => '显示电子贺卡',
  'ecard_name' => '名称',
  'ecard_email' => '电子邮件',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => '升序',
  'ecard_descending' => '降序',
  'ecard_sorted' => '排序',
  'ecard_by_date' => '根据日期',
  'ecard_by_sender_name' => '根据发件人名称',
  'ecard_by_sender_email' => '根据发件人邮件',
  'ecard_by_sender_ip' => '根据发件人的 IP 地址',
  'ecard_by_recipient_name' => '根据收件人名称',
  'ecard_by_recipient_email' => '根据收件人邮件',
  'ecard_number' => '显示纪录 %s 到 %s 在 %s',
  'ecard_goto_page' => '到页面',
  'ecard_records_per_page' => '页面记录',
  'check_all' => '全选',
  'uncheck_all' => '都不选',
  'ecards_delete_selected' => '删除选取的贺卡',
  'ecards_delete_confirm' => '你确定要删除记录吗？请勾选。',
  'ecards_delete_sure' => '我确定',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => '请输入您的名字和留言',
  'com_added' => '您的留言已经加入',
  'alb_need_title' => '您必须为相册提供一个标题 !',
  'no_udp_needed' => '没有更新的必要',
  'alb_updated' => '相册已经更新',
  'unknown_album' => '所选择的相册不存在或您没有权限上传文件到此相册',
  'no_pic_uploaded' => '没有文件被上传 !<br /><br />如果您确定有选择文件上传, 请检查服务器是否允许上传文件...',
  'err_mkdir' => '无法建立目录 %s！',
  'dest_dir_ro' => '目录 %s 无法读写！',
  'err_move' => '无法移动 %s 到 %s！',
  'err_fsize_too_large' => '您上传的图片太大 (不能超过 %s x %s)！', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => '您上传的图片太大 (不能超过 %s KB)！', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => '上传的文件并不是容许的图片格式 !',
  'allowed_img_types' => '您只可以上传 %s 张图片.',
  'err_insert_pic' => '文件 \'%s\' 无法加入此相册 ',
  'upload_success' => '文件上传完成!<br /><br />当管理者核准后就可以看到文件了.',
  'notify_admin_email_subject' => '%s - 上传文件通知',
  'notify_admin_email_body' => '%s有上传文件 需要你的核准. 请查阅 %s',
  'info' => '信息',
  'com_added' => '留言已加入',
  'alb_updated' => '相册已经更新',
  'err_comment_empty' => '留言是空的 !',
  'err_invalid_fext' => '只有下列的扩展名才允许上传 : <br /><br />%s.',
  'no_flood' => '抱歉, 此图片最后一个留言是您提供<br /><br />您只可以修改您的留言',
  'redirect_msg' => '页面转移中.<br /><br /><br />按 \'继续\' 如果页面没有自动刷新',
  'upl_success' => '已经加入您的图片',
  'email_comment_subject' => '相册已有新留言',
  'email_comment_body' => '已经有留言发表在您的相册。请浏览',
  'album_not_selected' => '无选择的相册', //cpg1.4
  'com_author_error' => '已有注册会员使用了这个名称，请登录或使用其它名称', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => '帮助',
  'fs_pic' => '原图',
  'del_success' => '完成删除',
  'ns_pic' => '标准尺寸图片',
  'err_del' => '无法删除',
  'thumb_pic' => '缩略图',
  'comment' => '留言',
  'im_in_alb' => '相册内图片',
  'alb_del_success' => '相册 &laquo;%s&raquo; 已删除', //cpg1.4
  'alb_mgr' => '相册管理',
  'err_invalid_data' => '接收到不正确的数据于 \'%s\'',
  'create_alb' => '建立相册 \'%s\'',
  'update_alb' => '更新相册 \'%s\' 标题为 \'%s\' 索引为 \'%s\'',
  'del_pic' => '删除图片',
  'del_alb' => '删除相册',
  'del_user' => '删除会员',
  'err_unknown_user' => '所选择的会员不存在！',
  'err_empty_groups' => '找不要群的数据表，或没有资料！', //cpg1.4
  'comment_deleted' => '留言已删除',
  'npic' => '图片', //cpg1.4
  'pic_mgr' => '图片管理', //cpg1.4
  'update_pic' => '更新图片 \'%s\' 的文件名为 \'%s\'，索引是 \'%s\'', //cpg1.4
  'username' => '账号', //cpg1.4
  'anonymized_comments' => '%s 个无名的留言', //cpg1.4
  'anonymized_uploads' => '%s 个无名的公共上传', //cpg1.4
  'deleted_comments' => '删除了 %s 个留言', //cpg1.4
  'deleted_uploads' => '删除了 %s 个公共上传', //cpg1.4
  'user_deleted' => '会员 %s 已删除', //cpg1.4
  'activate_user' => '启用账号', //cpg1.4
  'user_already_active' => '账号已被启用', //cpg1.4
  'activated' => '启用', //cpg1.4
  'deactivate_user' => '关闭账号', //cpg1.4
  'user_already_inactive' => '账号已被关闭', //cpg1.4
  'deactivated' => '关闭', //cpg1.4
  'reset_password' => '重设密码', //cpg1.4
  'password_reset' => '密码重设成 %s', //cpg1.4
  'change_group' => '改变主要群', //cpg1.4
  'change_group_to_group' => '从 %s 改成 %s', //cpg1.4
  'add_group' => '新增额外群', //cpg1.4
  'add_group_to_group' => '加入会员 %s 到群 %s。会员现在的主要群是 %s，额外群是 %s。', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => '您要使用的电子贺卡数据有错误。请检查连接。', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => '确定要删除此图片吗 ? \\n留言也会被删除.', //js-alert
  'del_pic' => '删除此图片',
  'size' => '%s x %s 像素',
  'views' => '%s 次',
  'slideshow' => '连续播放',
  'stop_slideshow' => '停止播放',
  'view_fs' => '点选图片以查看原图',
  'edit_pic' => '编辑文件信息', //cpg1.4
  'crop_pic' => '裁剪与旋转',
  'set_player' => '改变播放软件',
);

$lang_picinfo = array(
  'title' =>'图片信息',
  'Filename' => '文件名称',
  'Album name' => '相册名称',
  'Rating' => '评分 (%s 次投票)',
  'Keywords' => '关键词',
  'File Size' => '文件大小',
  'Date Added' => '加入日期', //cpg1.4
  'Dimensions' => '尺寸',
  'Displayed' => '显示',
  'URL' => 'URL', //cpg1.4
  'Make' => '品牌', //cpg1.4
  'Model' => '型号', //cpg1.4
  'DateTime' => '日期时间', //cpg1.4
  'DateTimeOriginal' => '拍照日期', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => '光圈最大值', //cpg1.4
  'FocalLength' => '焦点尺寸', //cpg1.4
  'Comment' => '留言',
  'addFav'=>'加到我的最爱',
  'addFavPhrase'=>'我的最爱',
  'remFav'=>'从我的最爱删除',
  'iptcTitle'=>'IPTC 标题',
  'iptcCopyright'=>'IPTC 版权',
  'iptcKeywords'=>'IPTC 关键词',
  'iptcCategory'=>'IPTC 类别',
  'iptcSubCategories'=>'IPTC 子类别',
  'ColorSpace' => '颜色空间', //cpg1.4
  'ExposureProgram' => '曝光软件', //cpg1.4
  'Flash' => '闪光', //cpg1.4
  'MeteringMode' => '计量模式', //cpg1.4
  'ExposureTime' => '曝光时间', //cpg1.4
  'ExposureBiasValue' => '曝光补光', //cpg1.4
  'ImageDescription' => ' 图片简介', //cpg1.4
  'Orientation' => '定位', //cpg1.4
  'xResolution' => 'X 分辨率', //cpg1.4
  'yResolution' => 'Y 分辨率', //cpg1.4
  'ResolutionUnit' => '分辨率', //cpg1.4
  'Software' => '软件', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif 偏移量', //cpg1.4
  'IFD1Offset' => 'IFD1 偏移量', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif 版本', //cpg1.4
  'DateTimeOriginal' => '原本日期', //cpg1.4
  'DateTimedigitized' => '电子日期', //cpg1.4
  'ComponentsConfiguration' => '零件设定', //cpg1.4
  'CompressedBitsPerPixel' => '压缩量/像素', //cpg1.4
  'LightSource' => '光源', //cpg1.4
  'ISOSetting' => 'ISO 设定', //cpg1.4
  'ColorMode' => '颜色模式', //cpg1.4
  'Quality' => '品质', //cpg1.4
  'ImageSharpening' => '尖锐图片', //cpg1.4
  'FocusMode' => '焦距模式', //cpg1.4
  'FlashSetting' => '闪光设定', //cpg1.4
  'ISOSelection' => 'ISO 选项', //cpg1.4
  'ImageAdjustment' => '图片调整', //cpg1.4
  'Adapter' => '转接器', //cpg1.4
  'ManualFocusDistance' => '手动的焦距距离', //cpg1.4
  'DigitalZoom' => '电子变焦', //cpg1.4
  'AFFocusPosition' => 'AF 焦距位置', //cpg1.4
  'Saturation' => '浸透度', //cpg1.4
  'NoiseReduction' => '减少干扰', //cpg1.4
  'FlashPixVersion' => '闪光版本', //cpg1.4
  'ExifImageWidth' => 'Exif 图片宽度', //cpg1.4
  'ExifImageHeight' => 'Exif 图片高度', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif 通用偏移量', //cpg1.4
  'FileSource' => '文件来源', //cpg1.4
  'SceneType' => '场景类型', //cpg1.4
  'CustomerRender' => '顾客处理', //cpg1.4
  'ExposureMode' => '曝光模式', //cpg1.4
  'WhiteBalance' => '白色平衡', //cpg1.4
  'DigitalZoomRatio' => '电子变焦比率', //cpg1.4
  'SceneCaptureMode' => '场景拍摄模式', //cpg1.4
  'GainControl' => '获得控制', //cpg1.4
  'Contrast' => '对比', //cpg1.4
  'Saturation' => '浸透度', //cpg1.4
  'Sharpness' => '尖锐度', //cpg1.4
  'ManageExifDisplay' => '管理 Exif 显示', //cpg1.4
  'submit' => '提交', //cpg1.4
  'success' => '数据已更新完毕。', //cpg1.4
  'details' => '细节', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => '编辑此留言',
  'confirm_delete' => '确定要删除此留言？', //js-alert
  'add_your_comment' => '发表您的留言',
  'name'=>'名称',
  'comment'=>'留言',
  'your_name' => '无名',
  'report_comment_title' => '检举这篇留言', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => '点选图片来关闭窗口',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => '寄出 电子贺卡',
  'invalid_email' => '<font color="red"><b>警告</b></font>：不正确的电子邮件：', //cpg1.4
  'ecard_title' => '%s 寄给你一张电子贺卡',
  'error_not_image' => '电子贺卡只能寄出图片.',
  'view_ecard' => '如果电子贺卡无法正确显示，请按此连接', //cpg1.4
  'view_ecard_plaintext' => '请到这个网址浏览电子贺卡：', //cpg1.4
  'view_more_pics' => '更多图片！', //cpg1.4
  'send_success' => '你的 电子贺卡 已寄出',
  'send_failed' => '抱歉, 本服务器无法为你寄出 电子贺卡...',
  'from' => '由',
  'your_name' => '你的名称',
  'your_email' => '你的电子邮件',
  'to' => '给',
  'rcpt_name' => '收件人名称',
  'rcpt_email' => '收件人电子邮件',
  'greetings' => '标题', //cpg1.4
  'message' => '信息内容', //cpg1.4
  'ecards_footer' => '寄件人 %s 从 IP %s 在 %s (相册主机时间)', //cpg1.4
  'preview' => '电子贺卡预览', //cpg1.4
  'preview_button' => '预览', //cpg1.4
  'submit_button' => '寄送贺卡', //cpg1.4
  'preview_view_ecard' => '这是电子贺卡生成后的替补连接，预览模式下无法查看。', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => '检举报告', //cpg1.4
  'invalid_email' => '<b>警告</b>：错误的电子邮件！', //cpg1.4
  'report_subject' => '检举信件从 %s 在相册 %s', //cpg1.4
  'view_report' => '检举报告的替补连接，如果无法正常显示。', //cpg1.4
  'view_report_plaintext' => '请到下面的网址浏览检举报告：', //cpg1.4
  'view_more_pics' => '相册', //cpg1.4
  'send_success' => '您的检举已传送', //cpg1.4
  'send_failed' => '抱歉，但是主机无法传送您的检举报告...', //cpg1.4
  'from' => '从', //cpg1.4
  'your_name' => '您的名称', //cpg1.4
  'your_email' => '您的信箱', //cpg1.4
  'to' => '到', //cpg1.4
  'administrator' => '管理员', //cpg1.4
  'subject' => '标题', //cpg1.4
  'comment_field_name' => '检举 "%s" 的留言', //cpg1.4
  'reason' => '原因', //cpg1.4
  'message' => '信息', //cpg1.4
  'report_footer' => '寄件人 %s 从 IP %s 在 %s (相册主机时间)', //cpg1.4
  'obscene' => '猥亵的', //cpg1.4
  'offensive' => '攻击性', //cpg1.4
  'misplaced' => '文不对题', //cpg1.4
  'missing' => '不存在', //cpg1.4
  'issue' => '错误/无法浏览', //cpg1.4
  'other' => '其它', //cpg1.4
  'refers_to' => '检举的文件是', //cpg1.4
  'reasons_list_heading' => '检举理由：', //cpg1.4
  'no_reason_given' => '没有理由', //cpg1.4
  'go_comment' => '浏览留言', //cpg1.4
  'view_comment' => '浏览完整报告和留言', //cpg1.4
  'type_file' => '文件', //cpg1.4
  'type_comment' => '留言', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => '文件数据',
  'album' => '相册',
  'title' => '标题',
  'filename' => '文件名', //cpg1.4
  'desc' => '描述',
  'keywords' => '关键词',
  'new_keyword' => '新关键词', //cpg1.4
  'new_keywords' => '找到新关键词', //cpg1.4
  'existing_keyword' => '存在的关键词', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s 次查看 - %s 次评分',
  'approve' => '核准图片',
  'postpone_app' => '延迟核准',
  'del_pic' => '删除文件',
  'del_all' => '删除全部文件', //cpg1.4
  'read_exif' => '再次读取 EXIF 数据',
  'reset_view_count' => '清除浏览计数器',
  'reset_all_view_count' => '清除全部的浏览计数器', //cpg1.4
  'reset_votes' => '清除评分',
  'reset_all_votes' => '清除评分', //cpg1.4
  'del_comm' => '删除留言',
  'del_all_comm' => '删除全部留言', //cpg1.4
  'upl_approval' => '核准上传', //cpg1.4
  'edit_pics' => '编辑图片',
  'see_next' => '查看下一张图片',
  'see_prev' => '查看前一张图片',
  'n_pic' => '%s 张图片',
  'n_of_pic_to_disp' => '图片显示数量',
  'apply' => '修改',
  'crop_title' => 'CPG 图片编辑器',
  'preview' => '预览',
  'save' => '保存',
  'save_thumb' =>'存成缩略图',
  'gallery_icon' => '使用这个图示', //cpg1.4
  'sel_on_img' =>'选择的区域必须在图片的范围内！', //js-alert
  'album_properties' =>'相册属性', //cpg1.4
  'parent_category' =>'母类别', //cpg1.4
  'thumbnail_view' =>'缩略图显示', //cpg1.4
  'select_unselect' =>'选择/反选 全部', //cpg1.4
  'file_exists' => "目标文件 '%s' 已经存在。", //cpg1.4
  'rename_failed' => "无法将 '%s' 改成 '%s'。", //cpg1.4
  'src_file_missing' => "来源文件 '%s' 不存在。", // cpg 1.4
  'mime_conv' => "无法转换文件 '%s' 到 '%s'",//cpg1.4
  'forb_ext' => '不允许的扩展名。',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => '常见问题解答',
  'toc' => '目录',
  'question' => '问题: ',
  'answer' => '解答: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '问题与解答',
  array('为什么要注册？', '管理员决定用户是否需要注册。注册成为会员可获得额外的功能，如 上传文件，有 我的最爱列表，对影像评分及发表留言 等等。', 'allow_user_registration', '1'), //cpg1.4
  array('如何注册？', '到 &quot;注册&quot; 去填写字段内的数据 (部分字段是选填的)。<br />如果管理员开启 Email 启用功能，在你确认发送注册数据后你会收到一封认证信寄到你所填写的信箱内，里面会帮助如何启用你的会员资格。会员登录前必须先完成启用操作。', 'allow_user_registration', '1'), //cpg1.4
  array('如何登录?', '到 &quot;登录&quot;, 填入你的会员名称及密码 且勾选 &quot;记住我&quot; 下次你再来的时候就会自动登录了.<br /><b>注意:如果你点选 &quot;记住我 Me&quot; ,Cookies 功能必须开启,且本站的cookie存在你的计算机中..</b>', 'offline', 0),
  array('为何无法登录?', '你已经注册并启用账号了吗(回复认证邮件的连接)?. 那个连接将会启用你的账号. 其它登录问题 请联络网站管理员.', 'offline', 0),
  array('忘记密码了怎么办 ?', '如果这个网站有 &quot;忘记密码了&quot; 的连接,就按它. 不然就联络网站管理员 请他给你一个新的密码.', 'offline', 0),
  //array('我的email改变了怎么办 ?', '只要登录 并且到 &quot;我的个人资料&quot; 改变你的电子邮件地址就可以了', 'offline', 0),
  array('如何把图片存到  &quot;我的最爱 &quot;?', '点选图片并且点按 &quot;影像信息&quot; 连接 (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); 在影像信息设定里面按 &quot;加入我的最爱&quot;.<br />管理员可能有预设&quot;影像信息; .<br />注意:Cookies 功能必须开启,且本站的cookie存在你的计算机中.', 'offline', 0),
  array('如何对图片评分 ?', '点按该影像缩略图,在影像底下可以点选你的评分.', 'offline', 0),
  array('如何发表留言 ?', '点按该影像缩略图,在影像底下可以发表留言.', 'offline', 0),
  array('如何上传图片 ?', '到 &quot;上传图片&quot;并选择你要上传到哪一个相册,按 &quot;浏览&quot; 且点选要上传的图片 按 &quot;开启&quot; (你可以加入影像标题及描述) 然后按 &quot;确认&quot;', 'allow_private_albums', 1), //cpg1.4
  array('要将图片上传到哪里？', '你可以上传图片在 &quot;我的相册&quot;. 管理员可能允许你上传图片到主相册内.', 'allow_private_albums', 0),
  array('哪种格式或大小的影像可以上传?', '格式跟大小 (jpg,gif,..etc.) 根据管理员的设定.', 'offline', 0),
  array('如何新增,修改 或删除相册 从 &quot;我的相册&quot;?', '你必须在 &quot;管理模式&quot;<br />到 &quot;新增/排序 我的相册&quot;按 &quot;新增New&quot;. 改变 &quot;新相册&quot; 到你要的名称.<br />你可以对你的每一个相册重新命名.<br />按 &quot;修改;.', 'allow_private_albums', 0),
  array('我要如何禁止其它会员看我的相册?', '你必须在 &quot;管理模式&quot;<br />到 &quot;改变我的相册. 在 &quot;更新相册&quot; 字段, 选择你要改变的相册.<br />在这里, 你可以改变相册名称 描述 缩略图 ,及限制查看 留言 评分 的权限.<br />按 &quot;更新相册&quot;.', 'allow_private_albums', 0),
  array('如何查看其它会员的相册?', '到 &quot;相册目录&quot; 选择 &quot;会员相册&quot;.', 'allow_private_albums', 0),
  array('什么是 cookies?', 'Cookies 是网站放在你计算机中的纪录信息的文本文件。<br />Cookies 通常让用户再次回到网站时自动登录 并记录其它设定数据.', 'offline', 0),
  array('在哪里可以取得这个相册程序?', 'Coppermine 是基于GNU GPL的免费多媒体相册. 它是全功能的 且支持不同的平台. 请到<a href="http://coppermine.sf.net/">Coppermine 的网站</a> 获得更多的信息 或是下载它.', 'offline', 0),

  '网站导引',
  array('什么是 &quot;相册目录 &quot;?', '这将显示整个相册 包含每一个分类. 缩略图可以连接到类别中.', 'offline', 0),
  array('什么是 &quot;我的相册 &quot;?', '这项功能让会员建立自己的相册,可增加,删除,修改相册. 并且可上传文件到相册里.', 'allow_private_albums', 1), //cpg1.4
  array('有什么差异在 &quot;管理模式&quot; 和 &quot;会员模式&quot;?', '这项功能, 在管理模式时, 允许会员修改他们自己的相册 (如果管理员允许的话).', 'allow_private_albums', 0),
  array('什么是 &quot;上传图片 &quot;?', '这项功能允许会员上传影像(文件大小及格式根据管理员设定) 到指定的相册.', 'allow_private_albums', 0),
  array('什么是 &quot;最新上传 &quot;?', '这项功能显示最新上传到相册的文件.', 'offline', 0),
  array('什么是 &quot;最新留言 &quot;?', '这项功能会员对影像发表的最新留言.', 'offline', 0),
  array('什么是 &quot;热门图片 &quot;?', '这项功能显示被查看最多次的影像,不论是会员或访客.', 'offline', 0),
  array('什么是 &quot;最高评分 &quot;?', '这项功能显示会员评分最高的影像, 显示平均分数(例如: 五个会员各给一个评分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: 影像将有平均评分 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;五个会员评分从 1 到 5 (1,2,3,4,5) 平均结果将是 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />评分从 <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (最佳) 到 <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (最差).', 'offline', 0),
  array('什么是 &quot;我的最爱 &quot;?', '这项功能让会员储存喜爱的影像,需要有cookie信息.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => '忘记密码',
  'err_already_logged_in' => '您已经登录了！',
  'enter_email' => '输入您的电子信箱', //cpg1.4
  'submit' => '继续',
  'illegal_session' => '忘记密码的会话(session)错误或已过期。', //cpg1.4
  'failed_sending_email' => '忘记密码的邮件无法寄出！',
  'email_sent' => '新账号和密码的邮件已经寄到 %s', //cpg1.4
  'verify_email_sent' => '电子邮件已寄到 %s。请检查您的信箱进行下一步操作。', //cpg1.4
  'err_unk_user' => '选择的会员不存在！',
  'account_verify_subject' => '%s - 新密码申请', //cpg1.4
  'account_verify_body' => '您已经申请了新的密码。如果要新的密码寄到您的信箱，请点下面的连接：

%s', //cpg1.4
  'passwd_reset_subject' => '%s - 您的新密码', //cpg1.4
  'passwd_reset_body' => '这是您申请的新密码：
账号： %s
密码： %s
请点 %s 登录。', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => '群', //cpg1.4
  'permissions' => '权限', //cpg1.4
  'public_albums' => '允许公用相册上传', //cpg1.4
  'personal_gallery' => '私人相册', //cpg1.4
  'upload_method' => '上传方法', //cpg1.4
  'disk_quota' => '空间配额', //cpg1.4
  'rating' => '评分', //cpg1.4
  'ecards' => '电子贺卡', //cpg1.4
  'comments' => '留言', //cpg1.4
  'allowed' => '允许 ', //cpg1.4
  'approval' => '审核', //cpg1.4
  'boxes_number' => '字段数量', //cpg1.4
  'variable' => '更改', //cpg1.4
  'fixed' => '固定', //cpg1.4
  'apply' => '修改',
  'create_new_group' => '建立新群',
  'del_groups' => '删除所选择的群',
  'confirm_del' => '警告, 当删除了一个群, 属于该群的用户将被转移至 \'Registered\' 群中 !\n\nn确定要删除吗 ?', //js-alert
  'title' => '管理会员群',
  'num_file_upload' => '上传字段', //cpg1.4
  'num_URI_upload' => 'URI 上传字段', //cpg1.4
  'reset_to_default' => '重设为预设名称 (%s) - 建议！', //cpg1.4
  'error_group_empty' => '群数据表没数据！<br /><br />重新建立预设群，请刷新此页面', //cpg1.4
  'explain_greyed_out_title' => '为什么不能使用？', //cpg1.4
  'explain_guests_greyed_out_text' => '您不能改变这个群的属性因为设定里面的 &quot;允许访客进入&quot; 是设定为 &quot;否&quot;。 全部访客 (这个群的成员 %s) 无法做除了登录以外的任何操作，所以不能改变群的设定。', //cpg1.4
  'explain_banned_greyed_out_text' => '您不能改变这个群 %s 的属性因为它的成员无法做任何操作。', //cpg1.4
  'group_assigned_album' => '分配的相册', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => '欢迎 !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '确定要删除这相册 ? \\n所有图片及留言都会被删除.', //js-alert
  'delete' => '删除',
  'modify' => '属性',
  'edit_pics' => '编辑',
);

$lang_list_categories = array(
  'home' => '相册首页',
  'stat1' => '<b>[pictures]</b> 张影像于 <b>[albums]</b> 个相册及 <b>[cat]</b> 个类别, 有 <b>[comments]</b> 个留言, 被查看 <b>[views]</b> 次',
  'stat2' => '<b>[pictures]</b> 张影像于 <b>[albums]</b> 个相册, 被查看 <b>[views]</b> 次',
  'xx_s_gallery' => '%s\'s 相册',
  'stat3' => '<b>[pictures]</b> 张影像于 <b>[albums]</b> 个相册, 有 <b>[comments]</b> 个留言, 被查看 <b>[views]</b> 次',
);

$lang_list_users = array(
  'user_list' => '会员列表',
  'no_user_gal' => '还没有会员相册',
  'n_albums' => '%s 个相册',
  'n_pics' => '%s 张影像',
);

$lang_list_albums = array(
  'n_pictures' => '%s 张影像',
  'last_added' => ', 最新影像于 %s',
  'n_link_pictures' => '%s 连接的文件', //cpg1.4
  'total_pictures' => '%s 总文件', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => '关键词管理', //cpg1.4
  'edit' => '编辑', //cpg1.4
  'delete' => '删除', //cpg1.4
  'search' => '搜索', //cpg1.4
  'keyword_test_search' => '搜索 %s 于新窗口', //cpg1.4
  'keyword_del' => '删除关键词 %s', //cpg1.4
  'confirm_delete' => '确定要删除相册里的关键词 %s 吗？', //cpg1.4  // js-alert
  'change_keyword' => '改变关键词', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => '登录',
  'enter_login_pswd' => '输入会员名称和密码',
  'username' => '会员名称',
  'password' => '密码',
  'remember_me' => '记住我',
  'welcome' => '欢迎 %s ...',
  'err_login' => '*** 无法登录. 请重试 ***',
  'err_already_logged_in' => '您已经登录！',
  'forgot_password_link' => '忘记密码',
  'cookie_warning' => '警告：您的浏览器不支持 cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => '注销',
  'bye' => '再见 %s ...',
  'err_not_loged_in' => '您还没有登录！',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => '关闭', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => '上一个层次', //cpg1.4
  'current_path' => '目前的路径', //cpg1.4
  'select_directory' => '请选择目录', //cpg1.4
  'click_to_close' => '点图片关闭窗口',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => '更新相册 %s',
  'general_settings' => '一般设定',
  'alb_title' => '相册标题',
  'alb_cat' => '相册类别',
  'alb_desc' => '相册描述',
  'alb_keyword' => '相册关键词', //cpg1.4
  'alb_thumb' => '相册缩略图',
  'alb_perm' => '相册权限',
  'can_view' => '允许查看相册的会员',
  'can_upload' => '访客可上传图片',
  'can_post_comments' => '访客可发表留言',
  'can_rate' => '访客可为图片评分',
  'user_gal' => '会员相册',
  'no_cat' => '* 没有类别 *',
  'alb_empty' => '相册是空的',
  'last_uploaded' => '最近上传',
  'public_alb' => '任何人 (公开相册)',
  'me_only' => '只有我',
  'owner_only' => '只有相册拥有人 (%s) ',
  'groupp_only' => ' \'%s\' 群的会员',
  'err_no_alb_to_modify' => '数据库内没有您可修改的相册.',
  'update' => '更新相册',
  'reset_album' => '重设相册', //cpg1.4
  'reset_views' => '清除 %s 的浏览计数到 &quot;0&quot;', //cpg1.4
  'reset_rating' => '清除 %s 的全部评分', //cpg1.4
  'delete_comments' => '删除 %s 里的留言', //cpg1.4
  'delete_files' => '%s无法改变%s 的删除全部文件，在 %s 里面', //cpg1.4
  'views' => '浏览', //cpg1.4
  'votes' => '投票', //cpg1.4
  'comments' => '留言', //cpg1.4
  'files' => '文件', //cpg1.4
  'submit_reset' => '传送改变', //cpg1.4
  'reset_views_confirm' => '确定', //cpg1.4
  'notice1' => '(*) 根据照 %s群%s 设定',  //cpg1.4 //(do not translate %s!)
  'alb_password' => '相册密码', //cpg1.4
  'alb_password_hint' => '相册的密码提示', //cpg1.4
  'edit_files' =>'编辑文件', //cpg1.4
  'parent_category' =>'母类别', //cpg1.4
  'thumbnail_view' =>'缩略图显示', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP 信息',
  'explanation' => '这是用 PHP 的函式来建立的信息 <a href="http://www.php.net/phpinfo" target="_blank">phpinfo()</a>，在 CPG 相册内显示 (删除右边的输出)。',
  'no_link' => '让其它人看到您的 phpinfo 会有安全问题，所以这个信息只有在登录管理账号后才能看到。您不能将这个页面的连接给别人，他们会看不到任何信息。',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => '图片管理', //cpg1.4
  'select_album' => '选择相册', //cpg1.4
  'delete' => '删除', //cpg1.4
  'confirm_delete1' => '确定要删除这个图片？', //cpg1.4
  'confirm_delete2' => '\n图片会永远被删除。', //cpg1.4
  'apply_modifs' => '套用插件', //cpg1.4
  'confirm_modifs' => '确定插件', //cpg1.4
  'pic_need_name' => '图片需要名称！', //cpg1.4
  'no_change' => '您没有做任何改变！', //cpg1.4
  'no_album' => '* 没有相册 *', //cpg1.4
  'explanation_header' => '这里设定的自定义排序只有在这些标准下使用', //cpg1.4
  'explanation1' => '管理员在设定内将 "文件的预设排序" 选成 "大到小" 或 "小到大" (会员在没有设定排序下所使用的预设排序)', //cpg1.4
  'explanation2' => '会员在缩略图显示页面里选择 "大到小" 或 "小到大"', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => '确定要删除这个插件吗', //cpg1.4
  'confirm_delete' => '确定要删除这个插件吗', //cpg1.4
  'pmgr' => '插件管理', //cpg1.4
  'name' => '名称', //cpg1.4
  'author' => '作者', //cpg1.4
  'desc' => '简介', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => '安装的插件', //cpg1.4
  'n_plugins' => '未安装的插件', //cpg1.4
  'none_installed' => '没有安装', //cpg1.4
  'operation' => '运作', //cpg1.4
  'not_plugin_package' => '上传的文件不是插件组件。', //cpg1.4
  'copy_error' => '复制插件到插件目录时发生错误。', //cpg1.4
  'upload' => '上传', //cpg1.4
  'configure_plugin' => '设定插件', //cpg1.4
  'cleanup_plugin' => '清除插件', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => '抱歉, 您已经为此图片评分',
  'rate_ok' => '您的评分已经被接受',
  'forbidden' => '你不能对你自己的图片评分.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
 {SITE_NAME} 的管理员会尽快整理会引起反感的数据, 但我们不可能审查每一份文件. 因此您必需同意所有文件只是代表作者的立场及意见, 不代表管理人员的立场 (除非是由他们本身贴出) 并不负任何法律责任.<br />
<br />
您必需同意不可张贴任何色情, 暴力, 不良, 不正当, 不健康, 妨害国家安全, 或任何可能违法的文件.  {SITE_NAME} 人员在任何时候都有权过滤并编辑您张贴的内容. 并且会员留在本站内的数据已存在数据库中. 末经您的同意, 我们不会将您的数据转给其它人使用, 不过我们不会为任何因黑客行为而外泄的数据负任何责任.<br />
<br />
本站使用 cookies 在您的计算机上来储存信息. 这样是方便您更愉快浏览. 您的电子邮件地址只是让我们认证您的数据而已.<br />
<br />
按下 '我同意' 代表您同意以上条款.
EOT;

$lang_register_php = array(
  'page_title' => '会员注册',
  'term_cond' => '条款与规则',
  'i_agree' => '我同意',
  'submit' => '确认注册',
  'err_user_exists' => '您所填写的会员名称已被其它会员使用, 请重选一个',
  'err_password_mismatch' => '两个密码不合, 请重填一次',
  'err_uname_short' => '会员名称至少需 2 个字符',
  'err_password_short' => '密码至少需 2 个字符',
  'err_uname_pass_diff' => '会员名称和密码不可以相同',
  'err_invalid_email' => '电子邮件不正确',
  'err_duplicate_email' => '这个电子邮件已经被其它会员使用',
  'enter_info' => '输入注册数据',
  'required_info' => '必填的资料',
  'optional_info' => '选填的资料',
  'username' => '会员名称',
  'password' => '会员密码',
  'password_again' => '确认密码',
  'email' => '电子邮件',
  'location' => '居住地区',
  'interests' => '兴趣',
  'website' => '个人网站',
  'occupation' => '职业',
  'error' => '错误',
  'confirm_email_subject' => '%s - 注册认证',
  'information' => '信息',
  'failed_sending_email' => '所注册的电子邮件无法寄出 !',
  'thank_you' => '感谢您的注册.<br /><br />一封含有如何启用账号的电子邮件将会送到您所提供的信箱.',
  'acct_created' => '您的账号已经建立, 现在您可以登录',
  'acct_active' => '您的账号已经启用, 现在您可以登录',
  'acct_already_act' => '账号已经启用！',
  'acct_act_failed' => '此账号无法启用！',
  'err_unk_user' => '所选择的会员并不存在！',
  'x_s_profile' => '%s\'的个人资料',
  'group' => '群',
  'reg_date' => '加入日期',
  'disk_usage' => '磁盘使用量',
  'change_pass' => '修改密码',
  'current_pass' => '目前的密码',
  'new_pass' => '新密码',
  'new_pass_again' => '确认新密码',
  'err_curr_pass' => '目前的密码不正确',
  'apply_modif' => '修改',
  'change_pass' => '修改密码',
  'update_success' => '你的个人资料已经更新',
  'pass_chg_success' => '你的密码已经修改',
  'pass_chg_error' => '你的密码没有修改',
  'notify_admin_email_subject' => '%s - 注册通知',
  'last_uploads' => '最新的上传。<br />浏览全部此会员的上传', //cpg1.4
  'last_comments' => '最新的留言。<br />浏览全部此会员的留言', //cpg1.4
  'notify_admin_email_body' => '新会员 "%s" 已经在您的相册注册',
  'pic_count' => '上传的文件', //cpg1.4
  'notify_admin_request_email_subject' => '%s - 注册要求', //cpg1.4
  'thank_you_admin_activation' => '谢谢。<br /><br />您的注册要求已经寄给管理员。通过认证后会通知您。', //cpg1.4
  'acct_active_admin_activation' => '账号已经启用，通知信件已经寄给会员。', //cpg1.4
  'notify_user_email_subject' => '%s - 启用通知', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
感谢您在 {SITE_NAME} 的注册

请到下面的网址起用您的账号名称 "{USER_NAME}"。

<a href="{ACT_LINK}">{ACT_LINK}</a>

敬启，

{SITE_NAME} 管理小组

EOT;

$lang_register_approve_email = <<<EOT
A new user with the username "{USER_NAME}" has registered in your gallery.

In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
您的账号已经审核完毕，也已经启用。

您现在可以到 <a href="{SITE_LINK}">{SITE_LINK}</a> 登录，用账号名称 "{USER_NAME}"


敬启，

{SITE_NAME} 管理小组

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => '查看留言',
  'no_comment' => '还没有留言可以查看',
  'n_comm_del' => '%s 个留言已删除',
  'n_comm_disp' => '显示的留言数量',
  'see_prev' => '看前一个',
  'see_next' => '看下一个',
  'del_comm' => '删除所选的留言',
  'user_name' => '名称', //cpg1.4
  'date' => '日期', //cpg1.4
  'comment' => '留言', //cpg1.4
  'file' => '文件', //cpg1.4
  'name_a' => '名称小到大', //cpg1.4
  'name_d' => '名称大到小', //cpg1.4
  'date_a' => '日期小到大', //cpg1.4
  'date_d' => '日期大到小', //cpg1.4
  'comment_a' => '留言小到大', //cpg1.4
  'comment_d' => '留言大到小', //cpg1.4
  'file_a' => '文件小到大', //cpg1.4
  'file_d' => '文件大到小', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php   
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => '搜索文件仓库', //cpg1.4
  'submit_search' => '搜索', //cpg1.4
  'keyword_list_title' => '关键词列表', //cpg1.4
  'keyword_msg' => '上面的列表不包括图片标题或简介。试着用全文搜索。',  //cpg1.4
  'edit_keywords' => '编辑关键词', //cpg1.4
  'search in' => '搜索：', //cpg1.4
  'ip_address' => 'IP 位置', //cpg1.4
  'fields' => '搜索', //cpg1.4
  'age' => '年龄', //cpg1.4
  'newer_than' => '日期之后', //cpg1.4
  'older_than' => '日期之前', //cpg1.4
  'days' => '天', //cpg1.4
  'all_words' => '包含完整字词 (AND)', //cpg1.4
  'any_words' => '包含任何字词 (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => '名称', //cpg1.4
  'caption' => '标题', //cpg1.4
  'keywords' => '关键词', //cpg1.4
  'owner_name' => '作者', //cpg1.4
  'filename' => '文件名', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '搜索新图片',
  'select_dir' => '选择目录',
  'select_dir_msg' => '本功能可以让你用 FTP 上传整批的图片。<br /><br />请选择已上传图片的目录。', //cpg1.4
  'no_pic_to_add' => '没有图片可以加入',
  'need_one_album' => '使用此功能必需至少要有一个相册',
  'warning' => '警告',
  'change_perm' => '程序无法写入这个目录, 请修改权限至 755 或 777 后再试一次 !',
  'target_album' => '<b>把图片由 &quot;</b>%s<b>&quot; 放到 </b>%s',
  'folder' => '资料夹',
  'image' => '图片',
  'album' => '相册',
  'result' => '结果',
  'dir_ro' => '无法写入. ',
  'dir_cant_read' => '无法读取. ',
  'insert' => '新增图片至相册',
  'list_new_pic' => '新图片列表',
  'insert_selected' => '加入所选择的图片',
  'no_pic_found' => '没有找到新图片',
  'be_patient' => '请耐心等候, 程序需要一点时间来加入所选图片',
  'no_album' => '没有选择的相册',
  'result_icon' => '浏览细节或刷新',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : 表示图片已成功被加入'.
                          '<li><b>DP</b> : 表示图片重复或已存在数据库'.
                          '<li><b>PB</b> : 表示图片无法加入, 请检查设定或图片存放目录的权限'.
                          '<li><b>NA</b> : 表示你还没有选择图片的相册, 按 \'<a href="javascript:history.back(1)">返回</a>\' 并选择相册. 如果你没有相册 <a href="albmgr.php">请先建立一个</a></li>'.
                          '<li>如果 OK, DP, PB \'符号\' 没有显示请点那个红色叉的图片查看 PHP 显示的错误信息'.
                          '<li>如果浏览器超时, 请按刷新按钮'.
                          '</ul>',
  'select_album' => '选择相册',
  'check_all' => '全选',
  'uncheck_all' => '都不选',
  'no_folders' => '"albums" 目录内没有其它目录。请建立最少一个目录到 "albums" 里面，然后上传您的图片。您不能上传图片到 "userpics" 或 "edit" 目录，它们的用途是给 CPG 软件和 http 的上传功能。', //cpg1.4
   'albums_no_category' => '相册没有类别', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* 私人相册', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => '可浏览接口 (建议使用)（不支持时请选否）', //cpg1.4
  'edit_pics' => '编辑文件', //cpg1.4
  'edit_properties' => '相册属性', //cpg1.4
  'view_thumbs' => '缩略图显示', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => '显示/隐藏 此字段', //cpg1.4
  'vote' => '投票细节', //cpg1.4
  'hits' => '浏览细节', //cpg1.4
  'stats' => '投票统计', //cpg1.4
  'sdate' => '日期', //cpg1.4
  'rating' => '评分', //cpg1.4
  'search_phrase' => '搜索字', //cpg1.4
  'referer' => '来源', //cpg1.4
  'browser' => '浏览器', //cpg1.4
  'os' => '操作系统', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => '排序 %s', //cpg1.4
  'ascending' => '小到大', //cpg1.4
  'descending' => '大到小', //cpg1.4
  'internal' => '内部', //cpg1.4
  'close' => '关闭', //cpg1.4
  'hide_internal_referers' => '隐藏内部的来源', //cpg1.4
  'date_display' => '日期显示', //cpg1.4
  'submit' => '传送 / 刷新', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => '上传文件',
  'custom_title' => '上传选项表',
  'cust_instr_1' => '你可以从下列 选择一个上传框 进行上传.',
  'cust_instr_2' => '选择上传框号',
  'cust_instr_3' => '文件上传框: %s',
  'cust_instr_4' => 'URI/URL 上传框: %s',
  'cust_instr_5' => 'URI/URL 上传框:',
  'cust_instr_6' => '文件上传框:',
  'cust_instr_7' => '请输入您目前需要的 每一种上传框的数量. 然后按 \'继续\'. ',
  'reg_instr_1' => '无效的选项表操作.',
  'reg_instr_2' => '现在你可以用以下的上传框上传你的文件，每一个文件的大小不可以超过 %s KB . ZIP 文件上传在 \'文件上传\' 和 \'URI/URL 上传\' 区 .',
  'reg_instr_3' => '如果你要上传压缩文件或要解压缩, 必须使用文件上传框 \'解压缩ZIP 上传\' 区.',
  'reg_instr_4' => '如果选择以 URI/URL 上传, 请输入文件连接路径 如: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => '完成选项表后,请按 \'继续\'.',
  'reg_instr_6' => '解压缩ZIP 上传:',
  'reg_instr_7' => '文件 上传:',
  'reg_instr_8' => 'URI/URL 上传:',
  'error_report' => '错误报告',
  'error_instr' => '下列上传遇到错误:',
  'file_name_url' => '文件 名称/URL',
  'error_message' => '错误信息',
  'no_post' => '文件没有被上传。',
  'forb_ext' => '不允许的扩展名。',
  'exc_php_ini' => '文件超过php.ini允许的大小。',
  'exc_file_size' => '文件超过CPG允许的大小。',
  'partial_upload' => '只有部分上传。',
  'no_upload' => '没有上传。',
  'unknown_code' => '未知的 PHP 上传错误。',
  'no_temp_name' => '没有上传 - 无暂存文件名。',
  'no_file_size' => '没有内容',
  'impossible' => '无法移动。',
  'not_image' => '这不是标准影像文件',
  'not_GD' => '这不是 GD 扩展名。',
  'pixel_allowance' => '影像尺寸太大了。',
  'incorrect_prefix' => '不正确的 URI/URL 前导符',
  'could_not_open_URI' => '无法开启URI。',
  'unsafe_URI' => '安全性未被认证。',
  'meta_data_failure' => '转换数据失败',
  'http_401' => '401 未被授权浏览',
  'http_402' => '402 此处需付费浏览',
  'http_403' => '403 目前此处关闭禁止浏览',
  'http_404' => '404 服务器没有回应',
  'http_500' => '500 内部服务器错误',
  'http_503' => '503 服务器等待过久 停止服务',
  'MIME_extraction_failure' => '无法确认 MIME。',
  'MIME_type_unknown' => '未知的 MIME 类型',
  'cant_create_write' => '无法写入新增文件。',
  'not_writable' => '无法读写。',
  'cant_read_URI' => '无法读取 URI/URL',
  'cant_open_write_file' => '无法开启文件。',
  'cant_write_write_file' => '无法读写文件。',
  'cant_unzip' => '无法解压缩。',
  'unknown' => '未知的错误',
  'succ' => '成功上传',
  'success' => '%s 上传已经完成。',
  'add' => '请按 \'继续\' 增加文件到相册。',
  'failure' => '上传失败',
  'f_info' => '文件信息',
  'no_place' => '先前的文件无法被配置。',
  'yes_place' => '先前的文件已经配置完成。',
  'max_fsize' => '最大允许文件大小是 %s KB',
  'album' => '相册',
  'picture' => '图片',
  'pic_title' => '图片标题',
  'description' => '图片描述',
  'keywords' => '关键词 (以空格区隔)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">从列表输入</a>', //cpg1.4
  'keywords_sel' =>'选择关键词', //cpg1.4
  'err_no_alb_uploadables' => '目前尚未有相册可以上传图片',
  'place_instr_1' => '请将图片放到相册，然后输入这个文件的相关信息。',
  'place_instr_2' => '更多的图片需要配置。请按 \'继续\'。',
  'process_complete' => '恭喜，您已经成功的将全部文件上传了。',
   'albums_no_category' => '相册没有类别', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* 私人相册', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => '选择相册', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => '关闭', //cpg1.4
  'no_keywords' => '抱歉，没可用的关键词！', //cpg1.4
  'regenerate_dictionary' => '重新建立字库', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => '会员名单', //cpg1.4
  'user_manager' => '会员管理', //cpg1.4
  'title' => '管理会员',
  'name_a' => '名称 由小至大',
  'name_d' => '名称 由大至小',
  'group_a' => '群 由小至大',
  'group_d' => '群 由大至小',
  'reg_a' => '注册日期 由远至近',
  'reg_d' => '注册日期 由近至远',
  'pic_a' => '图片数 由小至大',
  'pic_d' => '图片数 由大至小',
  'disku_a' => '磁盘用量 由小至大',
  'disku_d' => '磁盘用量 由大至小',
  'lv_a' => '最近来访 由近至远',
  'lv_d' => '最近来访 由远至近',
  'sort_by' => '会员排序根据',
  'err_no_users' => '会员数据表是空的 !',
  'err_edit_self' => '您无法编辑您的个人数据, 请利用 \'我的个人数据\' 来编辑',
  'edit' => '编辑', //cpg1.4
  'with_selected' => '选项操作：', //cpg1.4
  'delete' => '删除', //cpg1.4
  'delete_files_no' => '保留文件 (不提供来源)', //cpg1.4
  'delete_files_yes' => '删除全部文件', //cpg1.4
  'delete_comments_no' => '保留留言 (不提供来源)', //cpg1.4
  'delete_comments_yes' => '删除全部留言', //cpg1.4
  'activate' => '启用', //cpg1.4
  'deactivate' => '停用', //cpg1.4
  'reset_password' => '重设密码', //cpg1.4
  'change_primary_membergroup' => '改变主要群', //cpg1.4
  'add_secondary_membergroup' => '改变额外群', //cpg1.4
  'name' => '会员名称',
  'group' => '群',
  'inactive' => '未启动',
  'operations' => '操作',
  'pictures' => '图片',
  'disk_space_used' => '空间用量', //cpg1.4
  'disk_space_quota' => '空间配额', //cpg1.4
  'registered_on' => '注册', //cpg1.4
  'last_visit' => '最近来访',
  'u_user_on_p_pages' => '%d 个会员于 %d 页',
  'confirm_del' => '确定要删除这个会员吗? \\n所有他的相册及图片都会被删除.', //js-alert
  'mail' => '电子邮件',
  'err_unknown_user' => '所选择的会员并不存在 !',
  'modify_user' => '编辑会员',
  'notes' => '注意',
  'note_list' => '<li>如果不想改变目前的密码, 请将 "密码" 位留下空白',
  'password' => '密码',
  'user_active' => '会员已启动',
  'user_group' => '会员群',
  'user_email' => '会员电子邮件',
  'user_web_site' => '会员网站',
  'create_new_user' => '建立新会员',
  'user_location' => '会员地区',
  'user_interests' => '会员兴趣',
  'user_occupation' => '会员职业',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => '最新上传',
  'never' => '从未有',
  'search' => '会员搜索', //cpg1.4
  'submit' => '传送', //cpg1.4
  'search_submit' => '继续！', //cpg1.4
  'search_result' => '搜索结果： ', //cpg1.4
  'alert_no_selection' => '您必须选择至少一个会员！', //cpg1.4 //js-alert
  'password' => '密码', //cpg1.4
  'select_group' => '选择群', //cpg1.4
  'groups_alb_access' => '群的相册权限', //cpg1.4
  'album' => '相册', //cpg1.4
  'category' => '类别', //cpg1.4
  'modify' => '修改？', //cpg1.4
  'group_no_access' => '这个群无特殊权限', //cpg1.4
  'notice' => '通知', //cpg1.4
  'group_can_access' => '只有 "%s" 可以进入这个相册', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'以文件名更新标题', //cpg1.4
'删除标题', //cpg1.4
'重新建立缩略图和调整尺寸', //cpg1.4
'用调整过的尺寸覆盖并删除原始的图片', //cpg1.4
'删除原始或中级图片', //cpg1.4
'删除零散的留言', //cpg1.4
'重新读取文件大小和尺寸 (如果您手动编辑图片)', //cpg1.4
'清除浏览计数器', //cpg1.4
'显示 phpinfo', //cpg1.4
'更新数据库', //cpg1.4
'显示记录文件', //cpg1.4
);
$lang_util_php = array(
  'title' => '管理工具 (重设尺寸)',
  'what_it_does' => '功能',
  'file' => '文件',
  'problem' => '问题', //cpg1.4
  'status' => '状态', //cpg1.4
  'title_set_to' => '标题改变为',
  'submit_form' => '确认',
  'updated_succesfully' => '更新 已经完成',
  'error_create' => '产生错误',
  'continue' => '继续执行其它的影像',
  'main_success' => '文件 %s 已设为主图', 
  'error_rename' => '错误 %s 改名为 %s', 
  'error_not_found' => '找不到文件 %s ',
  'back' => '回主页',
  'thumbs_wait' => '更新缩略图 且/或 调整影像尺寸, 请稍待...',
  'thumbs_continue_wait' => '继续 更新缩略图 且/或 调整影像尺寸...',
  'titles_wait' => '更新标题, 请稍待...',
  'delete_wait' => '删除标题, 请稍待...',
  'replace_wait' => '重新调整后的图片将 取代原有的图片中, 请稍待...',
  'instruction' => '简易操作帮助',
  'instruction_action' => '请选择操作',
  'instruction_parameter' => '设定参数',
  'instruction_album' => '选择相册',
  'instruction_press' => '请按 %s',
  'update' => '更新缩略图 且/或 调整图片大小',
  'update_what' => '要更新什么',
  'update_thumb' => '只有缩略图',
  'update_pic' => '只调整图片大小',
  'update_both' => '更新缩略图且调整图片尺寸',
  'update_number' => '每点选一次要处理的图片数目',
  'update_option' => '(如果您遇到操作程序超时的问题，请试着降低此设定)',
  'filename_title' => '文件名称 &rArr; 图片标题',
  'filename_how' => '如何修改文件名', 
  'filename_remove' => '删除 .jpg 并将 _ (底线) 用空格取代', 
  'filename_euro' => '将 2003_11_23_13_20_20.jpg 改为 23/11/2003 13:20', 
  'filename_us' => '将 2003_11_23_13_20_20.jpg 改为 11/23/2003 13:20', 
  'filename_time' => '将 2003_11_23_13_20_20.jpg 改为 13:20', 
  'delete' => '删除图片标题或原始尺寸的图片',
  'delete_title' => '删除图片标题',
  'delete_title_explanation' => '这会在您要的相册内删除文件标题。', //cpg1.4
  'delete_original' => '删除原始尺寸的图片',
  'delete_original_explanation' => '这会删除原始尺寸的图片。', //cpg1.4
  'delete_intermediate' => '删除中级图片', //cpg1.4
  'delete_intermediate_explanation' => '这会删除中级 (normal) 图片。<br />用这个功能来清除主机空间，如果您在设定内关闭了 \'建立中级图片\'。', //cpg1.4
  'delete_replace' => '删除原始尺寸的图片并以调整尺寸的图片取代',
  'titles_deleted' => '选择相册内的标题已删除', //cpg1.4
  'deleting_intermediates' => '删除中级图片，请稍待...', //cpg1.4
  'searching_orphans' => '搜索零散的数据，请稍待...', //cpg1.4
  'select_album' => '选择相册',
  'delete_orphans' => '删除零散的留言', //cpg1.4
  'delete_orphans_explanation' => '这会删除已经被删除的图片里的留言。<br />检查全部相册。', //cpg1.4
  'refresh_db' => '更新文件尺寸和大小信息', //cpg1.4
  'refresh_db_explanation' => '这会重新读取文件的大小和尺寸。用这个功能如果空间的配额有错误，或您有手动修改图片。', //cpg1.4
  'reset_views' => '清除浏览计数器', //cpg1.4
  'reset_views_explanation' => '这会在选择的相册内重设浏览次数到 0。', //cpg1.4
  'orphan_comment' => '发现零散的留言',
  'delete' => '删除',
  'delete_all' => '全部删除',
  'delete_all_orphans' => '全部删除？', //cpg1.4
  'comment' => '留言： ',
  'nonexist' => '根据附于不存在的文件 # ',
  'phpinfo' => '显示 phpinfo',
  'phpinfo_explanation' => '包含了主机的信息。<br /> - 寻求支持时可能会被要求提供里面的数据。', //cpg1.4
  'update_db' => '更新数据库',
  'update_db_explanation' => '如果妳有更新 CPG 文件，加入修改或由以前的版本升级，请确定执行一次数据库更新。这会在 CPG 的数据库新增必要的数据表及/或设定值。',
  'view_log' => '浏览记录文件', //cpg1.4
  'view_log_explanation' => 'CPG 可以记录一些会员的操作。您可以浏览这些记录如果您有在 <a href="admin.php">设定</a> 里开启记录的功能。', //cpg1.4
  'versioncheck' => '检查版本', //cpg1.4
  'versioncheck_explanation' => '显查文件的版本，看是否有完全更新成功。您也可以检查 CPG 主程序的最新版本。', //cpg1.4
  'bridgemanager' => '整合管理', //cpg1.4
  'bridgemanager_explanation' => '开启/关闭 整合到其它软件 (例如论坛)。', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => '检查版本', //cpg1.4
  'what_it_does' => '这个页面是对刚更新相册的管理员设定。这个程序会检查您安装的版本是否跟 CPG 的在线仓库 (http://coppermine.sourceforge.net) 里的版本相同。<br />如果需要修改会显示红色。黄色表示需要检查。绿色或者预设颜色表示没问题。<br />详情请点帮助图示。', //cpg1.4
  'online_repository_unable' => '无法连接到在线仓库', //cpg1.4
  'online_repository_noconnect' => 'CPG 无法连接到在线仓库。可能有两种原因：', //cpg1.4
  'online_repository_reason1' => '在线仓库有问题 - 请检查您是否能到这个网页： %s - 如果不能请稍待重试。', //cpg1.4
  'online_repository_reason2' => '主机里的 PHP 的设定有把 %s 关闭 (默认值是开启)。如果是您自己的主机，请在 <i>php.ini</i> 里将此设定开启 (或者允许强制覆盖 %s)。如果您的主机是买的，很抱歉，您可以无法使用这项功能。这个页面就只会显示下载的文件版本 - 更新的版本不会显示。', //cpg1.4
  'online_repository_skipped' => '连接到在线仓库暂停', //cpg1.4
  'online_repository_to_local' => '系统目前是使用主机内的文件版本。这里显示的数据可能不正确如果你更新或未完全上传 CPG 的文件。', //cpg1.4
  'local_repository_unable' => '无法连接到主机仓库', //cpg1.4
  'local_repository_explanation' => 'CPG 无法连接到您主机内的仓库文件 %s。这可能表示您还未上传仓库文件到您的主机。请现在上传然后重新执行这个页面 (刷新网页)。<br />如果无法执行，您的主机可能关闭了一些 <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP 的文件系统</a>。如果是这个原因，很抱歉您不能使用这项功能。', //cpg1.4
  'coppermine_version_header' => '安装的 CPG 版本', //cpg1.4
  'coppermine_version_info' => '您目前安装的是： %s', //cpg1.4
  'coppermine_version_explanation' => '如果您认为您安装的不是这个版本，请确定您上传的是最新的 <i>include/init.inc.php</i> 文件', //cpg1.4
  'version_comparison' => '比较文件', //cpg1.4
  'folder_file' => '目录/文件', //cpg1.4
  'coppermine_version' => 'CPG 版本', //cpg1.4
  'file_version' => '文件版本', //cpg1.4
  'webcvs' => '在线 CVS', //cpg1.4
  'writable' => '可擦写', //cpg1.4
  'not_writable' => '不可擦写', //cpg1.4
  'help' => '帮助', //cpg1.4
  'help_file_not_exist_optional1' => '目录/文件不存在', //cpg1.4
  'help_file_not_exist_optional2' => '目录/文件 %s 不存在于您的主机内。虽然可以不用，但是建议您如果有遇到问题请将它上传 (用 FTP)。', //cpg1.4
  'help_file_not_exist_mandatory1' => '目录/文件不存在', //cpg1.4
  'help_file_not_exist_mandatory2' => '目录/文件 %s 不存在于您的主机内。您必须将它上传。请用 FPT 软件将文件上传到您的主机内。', //cpg1.4
  'help_no_local_version1' => '没有主机版本', //cpg1.4
  'help_no_local_version2' => '系统无法取得主机内的文件版本 - 您的文件可能过时或已被修改过。建议您更新文件。', //cpg1.4
  'help_local_version_outdated1' => '主机版本过时', //cpg1.4
  'help_local_version_outdated2' => '您的文件可能是旧的 CPG 程序文件 (可能更新时忘了步骤)。请确定更新这个文件。', //cpg1.4
  'help_local_version_na1' => '无法取得 CVS 文件版本', //cpg1.4
  'help_local_version_na2' => '系统无法取得主机内的 CVS 版本。请重新上传文件。', //cpg1.4
  'help_local_version_dev1' => '开发版本', //cpg1.4
  'help_local_version_dev2' => '文件看起来比您使用的 CPG 版本还高。您可能用的是开发版本 (不建议使用)，或在更新时忘了上传 include/init.inc.php', //cpg1.4
  'help_not_writable1' => '目录无法读写', //cpg1.4
  'help_not_writable2' => '改变文件的权限 (CHMOD) 到可擦写目录 %s，及里面的全部文件。', //cpg1.4
  'help_writable1' => '目录可擦写', //cpg1.4
  'help_writable2' => '目录 %s 可以读写。可能有安全问题，CPG 只需要读取跟执行这个目录。', //cpg1.4
  'help_writable_undetermined' => 'CPG 无法确定这个目录是否可擦写。', //cpg1.4
  'your_file' => '您的文件', //cpg1.4
  'reference_file' => '参照文件', //cpg1.4
  'summary' => '概括', //cpg1.4
  'total' => '总文件/目录检查完毕', //cpg1.4
  'mandatory_files_missing' => '必需文件不存在', //cpg1.4
  'optional_files_missing' => '非必需文件不存在', //cpg1.4
  'files_from_older_version' => '旧版本文件', //cpg1.4
  'file_version_outdated' => '旧文件版本', //cpg1.4
  'error_no_data' => '系统有错误，无法取得任何信息。', //cpg1.4
  'go_to_webcvs' => '到 %s', //cpg1.4
  'options' => '选项', //cpg1.4
  'show_optional_files' => '显示非必须文件/目录', //cpg1.4
  'show_mandatory_files' => '显示必要文件', //cpg1.4
  'show_file_versions' => '显示文件版本', //cpg1.4
  'show_errors_only' => '显示有错误的文件/目录', //cpg1.4
  'show_permissions' => '显示目录权限', //cpg1.4
  'show_condensed_output' => '显示压缩的输出数据', //cpg1.4
  'coppermine_in_webroot' => 'CPG 安装于 webroot', //cpg1.4
  'connect_online_repository' => '试着连接到在线仓库', //cpg1.4
  'show_additional_information' => '显示额外信息', //cpg1.4
  'no_webcvs_link' => '不显示在线 CVS 连接', //cpg1.4
  'stable_webcvs_link' => '显示在线 CVS 给正式版本', //cpg1.4
  'devel_webcvs_link' => '显示在线 CVS 给开发版本', //cpg1.4
  'submit' => '套用改变/刷新', //cpg1.4
  'reset_to_defaults' => '重设为默认值', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => '删除全部记录', //cpg1.4
  'delete_this' => '删除这个记录', //cpg1.4
  'view_logs' => '浏览记录', //cpg1.4
  'no_logs' => '没有记录。', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web 发布软件</h1><p>这个模块可以让您使用 <b>Windows XP</b> 的发表功能。</p><p>程序代码是照此篇文章帮助，作者是
EOT;

$lang_xp_publish_required = <<<EOT
<h2>需要什么？</h2><ul><li>必须要有 Windows XP。</li><li>安装好的 CPG 相册，<b>而且上传功能可运作。</b></li></ul><h2>如何安装</h2><ul><li>按右键于
EOT;

$lang_xp_publish_select = <<<EOT
选择 &quot;储存文件..&quot;。然后将文件储存在您的硬盘。储存时记得文件名必须是 <b>cpg_###.reg</b> (### 代表日期的数字)。您可以改变名称 (不要改数字)。下载完后，执行那个文件可以让您的主机使用发表功能。</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>测试</h2><ul><li>在 Windows 资源管理器，选一些文件然后在左边点 <b>将这个文件发布到 Web</b>。</li><li>检查您所选的文件，然后点 <b>Next</b>。</li><li>在出现的列表内选 CPG 相册的服务 (会以您的相册名称显示)。如果没有显示相册的服务，检查是否像上面描述的安装成功 <b>cpg_pub_wizard.reg</b>。</li><li>必要时输入您的账号数据。</li><li>然后选择要放图片的相册，或新建相册。</li><li>之后点 <b>next</b>。接下来会开始上传您的图片。</li><li>完成后到您的相册内检查是否上传完毕。</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>注意：</h2><ul><li>当正在上传时，发表功能不会显示任何错误信息，所以不能知道上传有没有成功，直到您检查相册。</li><li>如果上传没成功，在设定页面内开启 &quot;除错模式&quot;，试着上传一个图片然后检查错误信息在
EOT;

$lang_xp_publish_flood = <<<EOT
CPG 目录内的文件。</li><li>为了避免用发表功能一次上传太多图片，只有 <b>相册管理员</b> 和 <b>可以有自己相册的会员</b> 可以用这个功能。</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'CPG - XP Web 发表功能', //cpg1.4
  'welcome' => '欢迎到 <b>%s</b>,', //cpg1.4
  'need_login' => '您必须先用浏览器登录到相册内才能使用这个功能。<p/><p>登录后记得点选 <b>记得我</b> 选项。', //cpg1.4
  'no_alb' => '抱歉，目前没有可以用发表功能上传图片的相册。', //cpg1.4
  'upload' => '上传图片到相册', //cpg1.4
  'create_new' => '新建相册', //cpg1.4
  'album' => '相册', //cpg1.4
  'category' => '类别', //cpg1.4
  'new_alb_created' => '您的相册 &quot;<b>%s</b>&quot; 已经新建', //cpg1.4
  'continue' => '按 &quot;Next&quot; 开始上传图片', //cpg1.4
  'link' => '这个连接', //cpg1.4
);
}
?>
