<?php
// ------------------------------------------------------------------------- //
// Coppermine Photo Gallery 1.2.0                                            //
// ------------------------------------------------------------------------- //
// Copyright (C) 2002,2003 Gregory DEMAR <gdemar@wanadoo.fr>                 //
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
// to all devs: stop overwriting this file!

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Chinese(GB2312)',  //the name of your language in English, e.g. 'Greek' or 'Spanish'
'lang_name_native' => '中文(简体)', //the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. 'Ελληνικ?' or 'Espanol'
'lang_country_code' => 'cn', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
'trans_name'=> 'hotsnow', //the name of the translator - can be a nickname
'trans_email' => 'webmaster@qilu.tv', //translator's email address (optional)
'trans_website' => 'http://bbs.qilu.tv/', //translator's website (optional)
'trans_date' => '2003-10-16', //the date the translation was created / last modified
);

$lang_charset = 'GB2312';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');
$lang_month = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

// Some common strings
$lang_yes = '是';
$lang_no  = '否';
$lang_back = '返回';
$lang_continue = '继续';
$lang_info = '信息';
$lang_error = '错误';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y at %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y at %I:%M %p';
$comment_date_fmt =  '%B %d, %Y at %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
	'random' => '随机图片',
	'lastup' => '最新添加',
	'lastalb'=> '最新更新图集',
	'lastcom' => '最新评论',
	'topn' => '热门图片',
	'toprated' => '热门投票',
	'lasthits' => '最新浏览',
	'search' => '搜索结果',
	'favpics'=> '我的收藏',
);

$lang_errors = array(
	'access_denied' => '您没有权限访问该页.',
	'perm_denied' => '您没有权限执行该操作.',
	'param_missing' => '程序调用缺少参数.',
	'non_exist_ap' => '所选择的图集/图片不存在!',
	'quota_exceeded' => '空间使用已超过限额<br><br>您的空间限额为 [quota]K, 目前已使用 [space]K, 加入该图片可能会超过您的空间限额.',
	'gd_file_type_err' => '当前使用 GD 图形库,可用的图片格式为 JPEG 和 PNG.',
	'invalid_image' => '您上传的图片已损坏或无法被 GD 图形库处理',
	'resize_failed' => '无法生成缩图或大小合适的图片.',
	'no_img_to_display' => '目前尚无图片',
	'non_exist_cat' => '所选择的分类不存在',
	'orphan_cat' => '该子类别的父类别不存在,请进入类别管理修正.',
	'directory_ro' => '目录 \'%s\' 不可写, 图片无法删除',
	'non_exist_comment' => '所选择的评论不存在.',
	'pic_in_invalid_album' => '该图片位于不存在的图集 (%s)!?',
	'banned' => '您目前被禁止浏览该站点.',
	'not_with_udb' => '由于图集目前与论坛程序结合,因此该功能无法使用.在这种设定模式下不支持该功能,或是该功能由论坛程序处理.',
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => '返回图集列表',
	'alb_list_lnk' => '图集列表',
	'my_gal_title' => '返回个人图集',
	'my_gal_lnk' => '个人图集',
	'my_prof_lnk' => '我的个人资料',
	'adm_mode_title' => '进入管理模式',
	'adm_mode_lnk' => '管理模式',
	'usr_mode_title' => '进入用户模式',
	'usr_mode_lnk' => '用户模式',
	'upload_pic_title' => '上传图片至图集',
	'upload_pic_lnk' => '上传图片',
	'register_title' => '注册帐号',
	'register_lnk' => '注册',
	'login_lnk' => '登录',
	'logout_lnk' => '退出',
	'lastup_lnk' => '最新上传',
	'lastcom_lnk' => '最新评论',
	'topn_lnk' => '热门图片',
	'toprated_lnk' => '热门投票',
	'search_lnk' => '搜索',
	'fav_lnk' => '我的收藏',

);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => '审核上传',
	'config_lnk' => '设置',
	'albums_lnk' => '图集',
	'categories_lnk' => '类别',
	'users_lnk' => '用户',
	'groups_lnk' => '群组',
	'comments_lnk' => '评论',
	'searchnew_lnk' => '批量添加图片',
	'util_lnk' => '调整图片大小',
	'ban_lnk' => '屏蔽用户',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => '生成/重整 图集',
	'modifyalb_lnk' => '编辑我的图集',
	'my_prof_lnk' => '我的个人资料',
);

$lang_cat_list = array(
	'category' => '类别',
	'albums' => '图集',
	'pictures' => '图片',
);

$lang_album_list = array(
	'album_on_page' => '%d 个图集于 %d 页'
);

$lang_thumb_view = array(
	'date' => '日期',
	//Sort by filename and title
	'name' => '文件名',
	'title' => '标题',
	'sort_da' => '按日期升序排序',
	'sort_dd' => '按日期降序排序',
	'sort_na' => '按名称升序排序',
	'sort_nd' => '按名称降序排序',
	'sort_ta' => '按标题升序排序',
	'sort_td' => '按标题降序排序',
	'pic_on_page' => '%d 张图片于 %d 页',
	'user_on_page' => '%d 位用户于 %d 页'
);

$lang_img_nav_bar = array(
	'thumb_title' => '返回缩图页面',
	'pic_info_title' => '显示/隐藏 图片信息',
	'slideshow_title' => '连续播放',
	'ecard_title' => '发送电子贺卡',
	'ecard_disabled' => '电子贺卡暂不可用',
	'ecard_disabled_msg' => '您无权发送电子贺卡',
	'prev_title' => '前一张图片',
	'next_title' => '后一张图片',
	'pic_pos' => '图片 %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => '投票 ',
	'no_votes' => '(尚无投票)',
	'rating' => '(目前得分 : %s / 5 于 %s 个投票)',
	'rubbish' => '极差',
	'poor' => '较差',
	'fair' => '一般',
	'good' => '很好',
	'excellent' => '极佳',
	'great' => '太棒了',
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
	CRITICAL_ERROR => '系统错误',
	'file' => '文件: ',
	'line' => '行数: ',
);

$lang_display_thumbnails = array(
	'filename' => '文件名 : ',
	'filesize' => '文件大小 : ',
	'dimensions' => '尺寸 : ',
	'date_added' => '加入日期 : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s 个评论',
	'n_views' => '%s 次浏览',
	'n_votes' => '(%s 个投票)'
);

// ------------------------------------------------------------------------- //
// File include/init.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/picmgmt.inc.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
	'Exclamation' => '惊叹',
	'Question' => '疑问',
	'Very Happy' => '高兴',
	'Smile' => '微笑',
	'Sad' => '悲伤',
	'Surprised' => '惊讶',
	'Shocked' => '震惊',
	'Confused' => '疑惑',
	'Cool' => '酷',
	'Laughing' => '大笑',
	'Mad' => '疯',
	'Razz' => '冷笑',
	'Embarassed' => 'Embarassed',
	'Crying or Very sad' => '大哭或非常伤心',
	'Evil or Very Mad' => '邪恶的或疯狂的',
	'Twisted Evil' => 'Twisted Evil',
	'Rolling Eyes' => '转眼珠',
	'Wink' => '眨眼',
	'Idea' => 'Idea',
	'Arrow' => '箭',
	'Neutral' => '中立',
	'Mr. Green' => 'Mr. Green',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => '正离开管理模式...',
	1 => '正进入管理模式...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => '您需要给图集一个名称 !',
	'confirm_modifs' => '您确定要做这些修改吗 ?',
	'no_change' => '您没有做任何修改 !',
	'new_album' => '新图集',
	'confirm_delete1' => '您确定要删除此图集吗 ?',
	'confirm_delete2' => '\n此图集内的所有图片及评论都会被删除 !',
	'select_first' => '请先选择一个图集',
	'alb_mrg' => '图集管理',
	'my_gallery' => '* 我的图集 *',
	'no_category' => '* 没有类别 *',
	'delete' => '删除',
	'new' => '添加',
	'apply_modifs' => '提交修改',
	'select_category' => '选择类别',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => '\'%s\'操作缺少必要的参数 !',
	'unknown_cat' => '所选择的类别不存在',
	'usergal_cat_ro' => '用户图集类别无法删除 !',
	'manage_cat' => '类别管理',
	'confirm_delete' => '您确定要删除此类别吗 ?',
	'category' => '类别',
	'operations' => '操作',
	'move_into' => '移动到',
	'update_create' => '更新/创建 类别',
	'parent_cat' => '父类别',
	'cat_title' => '类别名称',
	'cat_desc' => '类别描述'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => '系统设置',
	'restore_cfg' => '恢复原始设置',
	'save_cfg' => '保存新设置',
	'notes' => '注意',
	'info' => '信息',
	'upd_success' => '设置已更新',
	'restore_success' => '原始设置已恢复',
	'name_a' => '名称递增',
	'name_d' => '名称递减',
	'title_a' => '标题递增',
	'title_d' => '标题递减',
	'date_a' => '日期递增',
	'date_d' => '日期递减',
        'th_any' => 'Max Aspect',
        'th_ht' => 'Height',
        'th_wd' => 'Width',

);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'基本设定',
	array('图集名称', 'gallery_name', 0),
	array('图集描述', 'gallery_description', 0),
	array('管理员电子邮件', 'gallery_admin_email', 0),
	array('在发送的电子贺卡内显示 \'欣赏更多图片\' 的链接网址', 'ecards_more_pic_target', 0),
	array('语言', 'lang', 5),
	//array('启用语言选择', 'lang_select_enable', 8 ),
	array('主题', 'theme', 6),
	//array('启用主题选择', 'theme_select_enable', 8),

	'图集列表显示设定',
	array('主表格宽度 (pixels or %)', 'main_table_width', 0),
	array('同一类别的子类别显示个数', 'subcat_level', 0),
	array('图集显示个数', 'albums_per_page', 0),
	array('图集列表的列数', 'album_list_cols', 0),
	array('显示缩图的大小(pixels)', 'alb_list_thumb_size', 0),
	array('主页内容', 'main_page_layout', 0),
	array('在类别中显示第一层图集的缩图','first_level',1), //new in cpg1.2.0

	'缩图设定',
	array('缩图页列数', 'thumbcols', 0),
	array('缩图页行数', 'thumbrows', 0),
	array('显示的最大 tab 数', 'max_tabs', 0),
	array('显示图片标题 (附加的标题) 于缩图下方', 'caption_in_thumbview', 1),
	array('显示评论数于缩图下方', 'display_comment_count', 1),
	array('图片的默认排列次序', 'default_sort_order', 3),
	array('要显示在 \'热门投票\' 内的图片最少需投几票', 'min_votes_for_rating', 0),

	'图片显示 &amp; 评论设定',
	array('图片显示的表格宽度 (pixels or %)', 'picture_table_width', 0),
	array('默认显示图片信息', 'display_pic_info', 1),
	array('过滤评论中的不良字符', 'filter_bad_words', 1),
	array('评论中可以使用笑脸图示', 'enable_smilies', 1),
	array('图片描述内容的最大长度', 'max_img_desc_length', 0),
	array('每个单词的最大字符数', 'max_com_wlength', 0),
	array('评论中每行允许的最大字符数', 'max_com_lines', 0),
	array('评论内容的最大长度', 'max_com_size', 0),
	array('显示图片预览列', 'display_film_strip', 1),
	array('图片预览列的图片数', 'max_film_strip_items', 0),

	'图片及缩图设定',
	array('JPEG 格式品质', 'jpeg_qual', 0),
	array('缩图的最大宽度及高度 <b>*</b>', 'thumb_width', 0),
	array('使用尺寸（宽、高或缩图最大尺寸）<b>*</b>', 'thumb_use', 7),
	array('生成适中大小的图片','make_intermediate',1),
	array('适中大小图片的宽度或高度 <b>*</b>', 'picture_width', 0),
	array('上传图片的最大限制 (KB)', 'max_upl_size', 0),
	array('上传图片的宽度或高度最大限制 (pixels)', 'max_upl_width_height', 0),

	'用户设定',
	array('允许新用户注册', 'allow_user_registration', 1),
	array('用户注册需要 Email 验证', 'reg_requires_valid_email', 1),
	array('允许不同用户使用同一个 Email', 'allow_duplicate_emails_addr', 1),
	array('允许用户创建私人图集', 'allow_private_albums', 1),

	'自定义的图片描述 (如果不用请留空)',
	array('图片描述1', 'user_field1_name', 0),
	array('图片描述2', 'user_field2_name', 0),
	array('图片描述3', 'user_field3_name', 0),
	array('图片描述4', 'user_field4_name', 0),

	'图片和缩图的高级设定',
	array('将个人图集图标显示给未登录的用户','show_private',1),
	array('文件名禁用的字符', 'forbiden_fname_char',0),
	array('上传图片允许的扩展名', 'allowed_file_extensions',0),
	array('生成缩图的方法','thumb_method',2),
	array('ImageMagick \'convert\' 程序的路径 (例如 /usr/bin/X11/)', 'impath', 0),
	array('允许图片的类型 (仅对 ImageMagick 有效)', 'allowed_img_types',0),
	array('ImageMagick 的命令行选项', 'im_options', 0),
	array('读取 JPEG 图片的 EXIF 信息', 'read_exif_data', 1),
	array('图集目录 <b>*</b>', 'fullpath', 0),
	array('用户图片目录 <b>*</b>', 'userpics', 0),
	array('生成适中图片的前置字符 <b>*</b>', 'normal_pfx', 0),
	array('生成缩图的前置字符 <b>*</b>', 'thumb_pfx', 0),
	array('目录的缺省 CHMOD', 'default_dir_mode', 0),
	array('图片文件的缺省 CHMOD', 'default_file_mode', 0),
	array('最大弹出窗口禁用鼠标右键 (JavaScript - 仅提供基本保护)', 'disable_popup_rightclick', 1),
	array('所有窗口禁用鼠标右键 (JavaScript - 仅提供基本保护)', 'disable_gallery_rightclick', 1),

	'Cookies &amp; 字符集 设定',
	array('本程序所使用的 cookie 名称', 'cookie_name', 0),
	array('本程序所使用的 cookie 路径', 'cookie_path', 0),
	array('字符集编码', 'charset', 4),

	'其他设置',
	array('启用调试模式', 'debug_mode', 1),

	'<br><div align="center">(*) 如果图集中已有图片,则标有 * 号的项不允许修改</div><br>'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => '请输入您的名字和评论',
	'com_added' => '您的评论已加入',
	'alb_need_title' => '您必须为图集提供一个标题 !',
	'no_udp_needed' => '没有必要更新.',
	'alb_updated' => '图集已更新',
	'unknown_album' => '所选择的图集不存在或您没有权限上传图片到此图集',
	'no_pic_uploaded' => '图片没有被上传 !<br><br>如果您确实选择了上传图片, 请检查服务器是或允许上传文件...',
	'err_mkdir' => '无法创建目录 %s !',
	'dest_dir_ro' => '目标目录 %s 无法写入 !',
	'err_move' => '无法移动 %s 到 %s !',
	'err_fsize_too_large' => '您上传的图片太大 (不能超过 %s x %s) !',
	'err_imgsize_too_large' => '您上传的文件太大 (不能超过 %s KB) !',
	'err_invalid_img' => '上传的文件不是有效的图片格式 !',
	'allowed_img_types' => '您仅可以上传 %s 张图片.',
	'err_insert_pic' => '图片 \'%s\' 无法加入此图集 ',
	'upload_success' => '图片上传完成<br><br>管理员审核后才可以显示.',
	'info' => '信息',
	'com_added' => '评论已加入',
	'alb_updated' => '图集已更新',
	'err_comment_empty' => '评论是空的 !',
	'err_invalid_fext' => '只允许具有下列扩展名的文件 : <br><br>%s.',
	'no_flood' => '抱歉,该图片的当前最后一个评论是您发表的<br><br>您可以修改发表过的评论',
	'redirect_msg' => '正在转向.<br><br><br>如果页面没有自动刷新,请按 \'继续\'',
	'upl_success' => '您的图片已成功加入',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => '标题',
	'fs_pic' => '实际大小图片',
	'del_success' => '成功删除',
	'ns_pic' => '标准大小图片',
	'err_del' => '无法删除',
	'thumb_pic' => '缩图',
	'comment' => '评论',
	'im_in_alb' => '图片于图集',
	'alb_del_success' => '图集 \'%s\' 已删除',
	'alb_mgr' => '图集管理',
	'err_invalid_data' => '接收到不正确的资料于 \'%s\'',
	'create_alb' => '创建图集 \'%s\'',
	'update_alb' => '更新图集 \'%s\' 标题为 \'%s\' 索引值为 \'%s\'',
	'del_pic' => '删除图片',
	'del_alb' => '删除图集',
	'del_user' => '删除用户',
	'err_unknown_user' => '所选择的用户不存在 !',
	'comment_deleted' => '评论已删除',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
	'confirm_del' => '确定要删除此图片吗 ? \\n连同评论也会被一起删除.',
	'del_pic' => '删除此图片',
	'size' => '%s x %s 像素',
	'views' => '%s 次',
	'slideshow' => '连续播放',
	'stop_slideshow' => '停止连续播放',
	'view_fs' => '点击观看整张图片',
);

$lang_picinfo = array(
	'title' =>'图片信息',
	'Filename' => '文件名',
	'Album name' => '图集名称',
	'Rating' => '评分 (%s 次投票)',
	'Keywords' => '关键字',
	'File Size' => '文件大小',
	'Dimensions' => '尺寸',
	'Displayed' => '显示',
	'Camera' => '相机型号',
	'Date taken' => '拍摄时间',
	'Aperture' => '光圈',
	'Exposure time' => '曝光时间',
	'Focal length' => '焦距',
	'Comment' => '注释',
	'addFav'=>'添加到我的收藏',
	'addFavPhrase'=>'我的收藏',
	'remFav'=>'从我的收藏删除',
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => '编辑评论',
	'confirm_delete' => '确定删除此评论 ?',
	'add_your_comment' => '发表评论',
	'name'=>'昵称',
	'comment'=>'评论',
	'your_name' => '您的名字',
);

$lang_fullsize_popup = array(
	'click_to_close' => '请点击图片关闭窗口',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => '发送电子贺卡',
	'invalid_email' => '<b>警告</b> : 无效的 Email 地址!',
	'ecard_title' => '请查收 %s 给您寄来的电子贺卡',
	'view_ecard' => '如果电子贺卡无法正确显示, 请点击这个链接',
	'view_more_pics' => '点击这里欣赏更多图片 !',
	'send_success' => '您的电子贺卡已发送',
	'send_failed' => '抱歉,当前无法为您发送电子贺卡...',
	'from' => '发送者',
	'your_name' => '您的名字',
	'your_email' => '您的 Email',
	'to' => '接收者',
	'rcpt_name' => '收件人姓名',
	'rcpt_email' => '收件人 Email',
	'greetings' => '祝福语',
	'message' => '信息内容',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '图片&nbsp;信息',
	'album' => '图集',
	'title' => '标题',
	'desc' => '描述',
	'keywords' => '关键字',
	'pic_info_str' => '%sx%s - %sKB - %s 次点击 - %s 次投票',
	'approve' => '审核图片',
	'postpone_app' => '暂不批准',
	'del_pic' => '删除图片',
	'reset_view_count' => '重置点击次数',
	'reset_votes' => '重置投票',
	'del_comm' => '删除评论',
	'upl_approval' => '批准上传',
	'edit_pics' => '编辑图片',
	'see_next' => '下一张图片',
	'see_prev' => '上一张图片',
	'n_pic' => '%s 张图片',
	'n_of_pic_to_disp' => '图片显示数量',
	'apply' => '提交修改'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => '群组名称',
	'disk_quota' => '磁盘限额',
	'can_rate' => '允许为图片评分',
	'can_send_ecards' => '允许发送电子贺卡',
	'can_post_com' => '允许发表评论',
	'can_upload' => '允许上传图片',
	'can_have_gallery' => '允许个人图集',
	'apply' => '提交修改',
	'create_new_group' => '创建新群组',
	'del_groups' => '删除所选择的群组',
	'confirm_del' => '警告, 如果删除一个群组, 则属于该群组的用户将被转移至 \'Registered\' 群组中 !也就是说,他们将失去部份权限\n\n确定要删除吗 ?',
	'title' => '管理用户群组',
	'approval_1' => '公用图集上传审核 (1)',
	'approval_2' => '个人图集上传审核 (2)',
	'note1' => '<b>(1)</b> 上传至公用图集的图片需管理者审核',
	'note2' => '<b>(2)</b> 上传至个人图集的图片需管理者审核',
	'notes' => '注意'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '欢迎!'
);

$lang_album_admin_menu = array(
	'confirm_delete' => '确定要删除该图集吗 ? \\n该图集内所有图片和评论将会同时被删除.',
	'delete' => '删除',
	'modify' => '属性',
	'edit_pics' => '编辑图片',
);

$lang_list_categories = array(
	'home' => '主页',
	'stat1' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个图集,<b>[cat]</b> 个类别,<b>[comments]</b> 个评论,点击 <b>[views]</b> 次',
	'stat2' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个图集,点击 <b>[views]</b> 次',
	'xx_s_gallery' => '%s 的图集',
	'stat3' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个图集,<b>[comments]</b> 个评论,点击 <b>[views]</b> 次'
);

$lang_list_users = array(
	'user_list' => '用户列表',
	'no_user_gal' => '尚未有用户图集',
	'n_albums' => '%s 个图集',
	'n_pics' => '%s 张图片'
);

$lang_list_albums = array(
	'n_pictures' => '%s 张图片',
	'last_added' => ', 最新添加于 %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => '登陆',
	'enter_login_pswd' => '请输入用户名和密码登陆',
	'username' => '用户名',
	'password' => '密码',
	'remember_me' => '记住密码',
	'welcome' => '欢迎 %s ...',
	'err_login' => '*** 无法登陆. 请重试 ***',
	'err_already_logged_in' => '您已经登陆 !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => '退出',
	'bye' => '再见,%s ...',
	'err_not_loged_in' => '您尚未登陆 !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '更新图集 %s',
	'general_settings' => '一般设置',
	'alb_title' => '图集标题',
	'alb_cat' => '图集类别',
	'alb_desc' => '图集描述',
	'alb_thumb' => '图集缩图',
	'alb_perm' => '图集许可权限',
	'can_view' => '图集允许观看被',
	'can_upload' => '访客可以上传图片',
	'can_post_comments' => '访客可以发表评论',
	'can_rate' => '访客可以为图片评分',
	'user_gal' => '用户图集',
	'no_cat' => '* 没有类别 *',
	'alb_empty' => '图集为空',
	'last_uploaded' => '最新上传',
	'public_alb' => '任何人 (公用图集)',
	'me_only' => '只有我',
	'owner_only' => '只有图集拥有人 (%s)',
	'groupp_only' => '只有群组会员 \'%s\'',
	'err_no_alb_to_modify' => '数据库内没有可以编辑的图集.',
	'update' => '更新图集'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => '抱歉,您已经为此图片评过分了',
	'rate_ok' => '您的投票已经被接受',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
管理员会尽快整理您的资料,但我们不可能随时详细察看每一个文件. 本站有权利在任何时候对您张贴的文件做适当的调整.<br>
<br>
您必须同意不能张贴任何色情、暴力、不良、不正当、不健康、妨害国家安全、或其他非正当取得的文件.本站在任何时候都有权利过滤并编辑您张贴的内容,
<br>
并有权修改您在本站内的资料.但请放心,我们不会将您的任何资料透漏给任何第三方.除此之外,您在本站张贴的内容本站都不负任何责任.<br>
<br>
本站使用COOKIES来储存信息.方便您更快速阅读本站信息. 您的 Email 只是用来认证您的资料,我们绝不会外泄.<br>
<br>
按下 '我同意' 继续.
EOT;

$lang_register_php = array(
	'page_title' => '用户注册',
	'term_cond' => '条件与规则',
	'i_agree' => '我同意',
	'submit' => '提交注册',
	'err_user_exists' => '该用户名已存在,请重填',
	'err_password_mismatch' => '两次密码不一致,请重填',
	'err_uname_short' => '用户名至少需要 2 个字符',
	'err_password_short' => '密码至少需要 2 个字符',
	'err_uname_pass_diff' => '用户名和密码不可以相同',
	'err_invalid_email' => 'Email 不正确',
	'err_duplicate_email' => '这个 Email 已经被其他人使用过了',
	'enter_info' => '输入注册者信息',
	'required_info' => '必需的资料',
	'optional_info' => '可选的资料',
	'username' => '用户名',
	'password' => '密码',
	'password_again' => '确认密码',
	'email' => 'Email',
	'location' => '位置',
	'interests' => '兴趣',
	'website' => '主页',
	'occupation' => '职业',
	'error' => '错误',
	'confirm_email_subject' => '%s - 注册确认',
	'information' => '信息',
	'failed_sending_email' => '无法发送注册确认 Email !',
	'thank_you' => '感谢您的注册.<br><br>一封内含如何激活帐号等信息的 Email 已被发送到您的信箱.',
	'acct_created' => '您的帐号已生成,现在您可以登陆',
	'acct_active' => '您的帐号已激活,现在您可以登陆',
	'acct_already_act' => '您的帐号已经激活 !',
	'acct_act_failed' => '该帐号无法激活 !',
	'err_unk_user' => '所选择的用户不存在 !',
	'x_s_profile' => '%s 的个人资料',
	'group' => '群组',
	'reg_date' => '加入',
	'disk_usage' => '空间使用量',
	'change_pass' => '修改密码',
	'current_pass' => '旧密码',
	'new_pass' => '新密码',
	'new_pass_again' => '确认密码',
	'err_curr_pass' => '旧密码不正确',
	'apply_modif' => '提交修改',
	'change_pass' => '修改密码',
	'update_success' => '您的个人资料已更新',
	'pass_chg_success' => '您的密码已修改',
	'pass_chg_error' => '您的密码没有修改',
);

$lang_register_confirm_email = <<<EOT
感谢您注册 {SITE_NAME}

您的帐号 : "{USER_NAME}"
您的密码 : "{PASSWORD}"

为了激活您的帐号,您必须点击一下下面的链接
或者先将这个链接存起来.以后再激活.

{ACT_LINK}

感谢您,

 {SITE_NAME} 敬上

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => '查看评论',
	'no_comment' => '尚无评论可以查看',
	'n_comm_del' => '%s 个评论已删除',
	'n_comm_disp' => '要显示的评论数量',
	'see_prev' => '看上一个',
	'see_next' => '看下一个',
	'del_comm' => '删除所选的评论',
);

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => '搜索图片',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => '搜索新图片',
	'select_dir' => '选择目录',
	'select_dir_msg' => '本功能可以让您批量加入您用 FTP 上传的图片.<br><br>请选择您所上传的图片目录',
	'no_pic_to_add' => '没有图片可以加入',
	'need_one_album' => '要使用此功能必需至少有一个图集',
	'warning' => '警告',
	'change_perm' => '无法写入这个目录, 请修改 CHMOD 为 755 或 777 后再试一次!',
	'target_album' => '<b>加入图片 &quot;</b>%s<b>&quot; 到 </b>%s',
	'folder' => '文件夹',
	'image' => '图片',
	'album' => '图集',
	'result' => '结果',
	'dir_ro' => '无法写入. ',
	'dir_cant_read' => '无法读取. ',
	'insert' => '新增图片至图集',
	'list_new_pic' => '列出新图片',
	'insert_selected' => '加入所选择的图片',
	'no_pic_found' => '没有找到新图片',
	'be_patient' => '请稍候,程序需要一些时间来加入所选图片',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : 表示图片已成功加入'.
				'<li><b>DP</b> : 表示图片重复或已存在'.
				'<li><b>PB</b> : 表示图片无法加入, 请检查系统设置或图片存放目录的访问权限'.
				'<li>如果 OK, DP, PB \'符号\' 没有显示,请点击损坏的图片查看 PHP 显示的错误信息'.
				'<li>如果浏览器超时, 请点刷新按钮'.
				'</ul>',
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
                'title' => '屏蔽用户',
                'user_name' => '用户名',
                'ip_address' => 'IP地址',
                'expiry' => '期限（空表示永久）',
                'edit_ban' => '保存设置',
                'delete_ban' => '删除',
                'add_new' => '添加屏蔽用户',
                'add_ban' => '添加',
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => '上传图片',
	'max_fsize' => '可允许的文件最大为 %s KB',
	'album' => '图集',
	'picture' => '图片',
	'pic_title' => '图片标题',
	'description' => '图片描述',
	'keywords' => '关键字 (请以空格分隔)',
	'err_no_alb_uploadables' => '目前尚无图集允许您上传图片',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => '用户管理',
	'name_a' => '名称升次排序',
	'name_d' => '名称降次排序',
	'group_a' => '群组升次排序',
	'group_d' => '群组降次排序',
	'reg_a' => '注册日期升次排序',
	'reg_d' => '注册日期降次排序',
	'pic_a' => '图片数升次排序',
	'pic_d' => '图片数降次排序',
	'disku_a' => '空间使用升次排序',
	'disku_d' => '空间使用降次排序',
	'sort_by' => '用户排序依',
	'err_no_users' => '用户资料表是空的 !',
	'err_edit_self' => '您无法编辑个人资料, 请使用 \'我的个人资料\' 来编辑',
	'edit' => '编辑',
	'delete' => '删除',
	'name' => '用户名',
	'group' => '群组',
	'inactive' => '未激活',
	'operations' => '操作',
	'pictures' => '图片',
	'disk_space' => '空间 使用量/总量',
	'registered_on' => '注册日期',
	'u_user_on_p_pages' => '%d 个用户于 %d 页',
	'confirm_del' => '确定要删除这个用户吗 ? \\n连同他的图集及图片都会被删除.',
	'mail' => 'MAIL',
	'err_unknown_user' => '所选择的用户不存在 !',
	'modify_user' => '编辑用户',
	'notes' => '注意',
	'note_list' => '<li>如果您不想修改当前密码, 请将 "密码" 栏留空',
	'password' => '密码',
	'user_active' => '用户激活',
	'user_group' => '用户群组',
	'user_email' => '用户 Email',
	'user_web_site' => '用户主页',
	'create_new_user' => '创建新用户',
	'user_location' => '用户位置',
	'user_interests' => '用户兴趣',
	'user_occupation' => '用户职业',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => '调整图片大小',
        'what_it_does' => '这是做什么用的',
        'what_update_titles' => '从文件名取得标题',
        'what_delete_title' => '删除标题',
        'what_rebuild' => '重设缩图及调整过大小的图片',
        'what_delete_originals' => '删除原始大小的图片并以调整过大小的取代',
        'file' => '文件',
        'title_set_to' => '标题已设成',
       'submit_form' => '提交',
        'updated_succesfully' => '更新成功',
        'error_create' => '新增错误',
        'continue' => '继续处理图片',
        'main_success' => '图片 %s 已成功设为主要图片',
        'error_rename' => '无法将 %s 更名成 %s',
        'error_not_found' => '文件 %s 不存在',
        'back' => '返回主界面',
        'thumbs_wait' => '正在更新缩图及(或)调整过大小的图片,请稍候...',
        'thumbs_continue_wait' => '继续更新缩图及(或)调整过大小的图片...',
        'titles_wait' => '标题更新中,请稍候...',
        'delete_wait' => '正在删除标题,请稍候...',
        'replace_wait' => '正在以调整过大小的图片取代原始大小图片,请稍候...',
        'instruction' => '简易操作说明',
        'instruction_action' => '请选择操作',
        'instruction_parameter' => '设定参数',
        'instruction_album' => '选择图集',
        'instruction_press' => '请按 %s',
        'update' => '更新缩图及(或)调整过大小的图片',
        'update_what' => '要更新什么',
        'update_thumb' => '只有缩图',
        'update_pic' => '只有调整过大小的图片',
        'update_both' => '缩图及调整过大小的图片',
        'update_number' => '每点选一次要处理的图片数目',
        'update_option' => '(如果您遇到操作程序超时的问题,请试着减小此设定)',
        'filename_title' => '文件名图片标题',
        'filename_how' => '如何修改文件名',
        'filename_remove' => '删除 .jpg 并将 _ (下划线) 用空格取代',
        'filename_euro' => '将 2003_11_23_13_20_20.jpg 改成 23/11/2003 13:20',
        'filename_us' => '将 2003_11_23_13_20_20.jpg 改成 11/23/2003 13:20',
        'filename_time' => '将 2003_11_23_13_20_20.jpg 改成 13:20',
        'delete' => '删除图片标题或原始尺寸的图片',
        'delete_title' => '删除图片标题',
        'delete_original' => '删除原始尺寸的图片',
        'delete_replace' => '删除原始尺寸的图片并以调整过大小的图片取代',
        'select_album' => '选择图集',
);

?>