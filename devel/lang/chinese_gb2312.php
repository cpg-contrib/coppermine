<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery                                                 //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stoverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  Hacked by Tarique Sani <tarique@sanisoft.com> and Girsh Nair             //
//  <girish@sanisoft.com> see http://www.sanisoft.com/cpg/README.txt for     //
//  details                                                                  //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'chinese',  //the name of your language in English, e.g. 'Greek' or 'Spanish'
'lang_name_native' => '中文', //the name of your language in your mother tongue (for non-latin alphabets, use unicode), e.g. '&#917;&#955;&#955;&#951;&#957;&#953;&#954;&#940;' or 'Espa&ntilde;ol'
'lang_country_code' => 'cn', //the two-letter code for the country your language is most-often spoken (refer to http://www.iana.org/cctld/cctld-whois.htm), e.g. 'gr' or 'es'
'trans_name'=> 'Jking Jin', //the name of the translator - can be a nickname
'trans_email' => 'jkingyy@eyou.com', //translator's email address (optional)
'trans_website' => 'http://jking.vip.cn/', //translator's website (optional)
'trans_date' => '2003-10-13', //the date the translation was created / last modified
);

$lang_charset = 'GB2312';
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
$lang_info = '讯息';
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
        'lastup' => '最新增加图片',
        'lastalb'=> '最后更新的相册', //new in cpg1.2.0
        'lastcom' => '最新的评论',
        'topn' => '热门图片',
        'toprated' => '热门投票',
        'lasthits' => '最新观看',
        'search' => '搜索结果', //new in cpg1.2.0
        'favpics'=> '收藏的图片' //new in cpg1.2.0
);

$lang_errors = array(
        'access_denied' => '你没有权限访问此页面.',
        'perm_denied' => '你没有权限执行此操作.',
        'param_missing' => '程序缺少需要的参数.',
        'non_exist_ap' => '选择的相册/图片不存在!',
        'quota_exceeded' => '空间超出<br><br>你可以使用的空间有 [quota]K, 目前使用了 [space]K, 加入此图片可能超出你可以使用的空间大小.',
        'gd_file_type_err' => '使用GD图形程序库时可使用的图片格式为JPEG和PNG.',
        'invalid_image' => '你上传的图片已经损坏或无法被GD程序库处理',
        'resize_failed' => '无法建立微缩图或适中的图片.',
        'no_img_to_display' => '没有可以显示的图片',
        'non_exist_cat' => '选择的类别不存在',
        'orphan_cat' => '这个类别的父类别不存在, 请先在类别管理中修正这个问题.',
        'directory_ro' => '目录 \'%s\' 是不可写的, 图片不能删除',
        'non_exist_comment' => '选择的评论不存在.',
        'pic_in_invalid_album' => '图片在一个不存在的相册 (%s)!?', //new in cpg1.2.0
        'banned' => '你已经被禁止浏览这个网站.', //new in cpg1.2.0
        'not_with_udb' => '相册中这个功能是不可用的，因为它是和论坛集成的，或着相册的配置不支持，或着这个功能应该籍由论坛来完成.', //new in cpg1.2.0
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
        'alb_list_title' => '返回到专辑列表',
        'alb_list_lnk' => '专辑列表',
        'my_gal_title' => '返回到我的个人相册',
        'my_gal_lnk' => '我的相册',
        'my_prof_lnk' => '我的个人资料',
        'adm_mode_title' => '切换到管理模式',
        'adm_mode_lnk' => '管理模式',
        'usr_mode_title' => '切换到用户模式',
        'usr_mode_lnk' => '用户模式',
        'upload_pic_title' => '上传一个图片到相册中',
        'upload_pic_lnk' => '上传图片',
        'register_title' => '建立一个帐户',
        'register_lnk' => '注册',
        'login_lnk' => '登入',
        'logout_lnk' => '登出',
        'lastup_lnk' => '最新上传',
        'lastcom_lnk' => '最新评论',
        'topn_lnk' => '热门图片',
        'toprated_lnk' => '热门投票',
        'search_lnk' => '搜索',
        'fav_lnk' => '我的收藏夹', //new in cpg1.2.0

);

$lang_gallery_admin_menu = array(
      	'upl_app_lnk' => '审核上传',
	'config_lnk' => '配置',
	'albums_lnk' => '专辑',
	'categories_lnk' => '类别',
	'users_lnk' => '用户',
	'groups_lnk' => '用户组',
	'comments_lnk' => '评论',
	'searchnew_lnk' => '批量上传图片',
        'util_lnk' => '调整图片大小', //new in cpg1.2.0
        'ban_lnk' => '禁止用户', //new in cpg1.2.0
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => '专辑管理',
	'modifyalb_lnk' => '编辑我的专辑',
	'my_prof_lnk' => '个人资料',
);

$lang_cat_list = array(
	'category' => '类别',
	'albums' => '专辑',
	'pictures' => '图片',
);

$lang_album_list = array(
        'album_on_page' => '%d 个专辑于 %d 页'
);

$lang_thumb_view = array(
        'date' => '日期',
        //Sort by filename and title
        'name' => '文件名', //new in cpg1.2.0
        'title' => '标题', //new in cpg1.2.0
        'sort_da' => '按日期升序排列',
        'sort_dd' => '按日期降序排列',
        'sort_na' => '按文件名升序排列',
        'sort_nd' => '按文件名降序排列',
        'sort_ta' => '按标题升序排列', //new in cpg1.2.0
        'sort_td' => '按标题降序排列', //new in cpg1.2.0
        'pic_on_page' => '%d 张图片于 %d 页',
        'user_on_page' => '%d 用户于 %d 页'
);

$lang_img_nav_bar = array(
	'thumb_title' => '返回到微缩图页',
	'pic_info_title' => '显示/隐藏图片讯息',
	'slideshow_title' => '幻灯片播放',
	'ecard_title' => '作为电子卡片寄送出这个图片',
	'ecard_disabled' => '电子卡片不可用',
	'ecard_disabled_msg' => '你不被允许送出这个电子卡片',
	'prev_title' => '观看前一张图片',
	'next_title' => '观看下一张图片',
	'pic_pos' => '图片 %s/%s',
);

$lang_rate_pic = array(
        'rate_this_pic' => '投票',
        'no_votes' => '(没有投票)',
        'rating' => '(目前的投票 : %s / 5 于 %s 投票)',
        'rubbish' => '很差',
        'poor' => '差',
        'fair' => '一般',
        'good' => '好',
        'excellent' => '极佳的',
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
        CRITICAL_ERROR => '错误 ',
        'file' => '文件 : ',
        'line' => '行号 : ',
);

$lang_display_thumbnails = array(
        'filename' => '文件名 : ',
        'filesize' => '文件大小 : ',
        'dimensions' => '维度 : ',
        'date_added' => '新增日期 : '
);

$lang_get_pic_data = array(
        'n_comments' => '%s 评论',
        'n_views' => '%s 次观看',
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
        'Question' => '问题',
        'Very Happy' => '非常高兴',
        'Smile' => '微笑',
        'Sad' => '难过',
        'Surprised' => '惊奇',
        'Shocked' => '震惊',
        'Confused' => '困惑',
        'Cool' => '酷',
        'Laughing' => '大笑',
        'Mad' => '发狂',
        'Razz' => '嘲笑',
        'Embarassed' => 'Embarassed',
        'Crying or Very sad' => '非常难过',
        'Evil or Very Mad' => 'Evil or Very Mad',
        'Twisted Evil' => 'Twisted Evil',
        'Rolling Eyes' => '转动的眼睛',
        'Wink' => '眨眼',
        'Idea' => '想法',
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
        'alb_need_name' => '专辑必须有一个名字！',
        'confirm_modifs' => '确定要做这些修改吗？',
        'no_change' => '你没有做任何改变！',
        'new_album' => '新专辑',
        'confirm_delete1' => '确定要删除此专辑吗？',
        'confirm_delete2' => '\n此专辑里所有的图片和评论都将被删除！',
        'select_first' => '先选择一个专辑',
        'alb_mrg' => '专辑管理',
        'my_gallery' => '* 我的相册 *',
        'no_category' => '* 没有类别 *',
        'delete' => '删除',
        'new' => '新增',
        'apply_modifs' => '提交修改',
        'select_category' => '选择类别',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
        'miss_param' => ' \'%s\' 操作需要的参数没有被提供！',
        'unknown_cat' => '选择的类别不存在',
        'usergal_cat_ro' => '用户相册类别不能被删除',
        'manage_cat' => '类别管理',
        'confirm_delete' => '确定要删除此类别吗',
        'category' => '类别',
        'operations' => '操作',
        'move_into' => '移动到',
        'update_create' => '更新/建立 类别',
        'parent_cat' => '父类别',
        'cat_title' => '类别名称',
        'cat_desc' => '类别描述'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
        'title' => '配置',
        'restore_cfg' => '恢复到默认配置',
        'save_cfg' => '保存新的配置',
        'notes' => '注释',
        'info' => '讯息',
        'upd_success' => '配置已经更新',
        'restore_success' => '缺省配置已经恢复',
        'name_a' => '名称升序排列',
        'name_d' => '名称降序排列',
        'title_a' => '配置升序排列', //new in cpg1.2.0
        'title_d' => '配置降序排列', //new in cpg1.2.0
        'date_a' => '日期升序排列',
        'date_d' => '日期降序排列'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
        '基本设定',
        array('相册名', 'gallery_name', 0),
        array('相册描述', 'gallery_description', 0),
        array('相册管理者电子邮件', 'gallery_admin_email', 0),
        array('电子卡片中包含 \'差看更多的图片\' 的链接', 'ecards_more_pic_target', 0),
        array('语言', 'lang', 5),
        array('风格', 'theme', 6),

        '专辑列表视图',
        array('主表格宽度 (像素或百分比)', 'main_table_width', 0),
        array('同一类别中子类别显示数', 'subcat_level', 0),
        array('显示的专辑数', 'albums_per_page', 0),
        array('专辑列表中的列数', 'album_list_cols', 0),
        array('微缩图的大小(像素)', 'alb_list_thumb_size', 0),
        array('主页面的内容', 'main_page_layout', 0),
        array('在类别中显示第一个专辑的微缩图','first_level',1), //new in cpg1.2.0

        '微缩图设置',
        array('微缩图页的列数', 'thumbcols', 0),
        array('微缩图页的行数', 'thumbrows', 0),
        array('显示的最大标签数', 'max_tabs', 0),
        array('显示于微缩图下方图片标题(附加的标题)', 'caption_in_thumbview', 1),
        array('显示于微缩图下方的评论数', 'display_comment_count', 1),
        array('图片缺省的排列次序', 'default_sort_order', 3),
        array('显示为 \'热门投票\' 的图片最少所需票数', 'min_votes_for_rating', 0),

        '观看图片 &amp; 评论设置',
        array('图片显示的表格宽度 (像素或百分比)', 'picture_table_width', 0),
        array('缺省图片讯息是不可见的', 'display_pic_info', 1),
        array('要在评论中过滤的不良文字', 'filter_bad_words', 1),
        array('允许在评论中使用笑脸图示', 'enable_smilies', 1),
        array('图片描述的最大长度', 'max_img_desc_length', 0),
        array('评论中每个单词的最大字符数', 'max_com_wlength', 0),
        array('评论中每行文字的最大字数', 'max_com_lines', 0),
        array('评论的最大长度', 'max_com_size', 0),
        array('展示电影剪辑', 'display_film_strip', 1), //new in cpg1.2.0
        array('电影剪辑中的项目数', 'max_film_strip_items', 0), //new in cpg1.2.0

        'Pictures and thumbnails settings',
        array('JPEG文件品质', 'jpeg_qual', 0),
        array('微缩图的最大宽度及高度 <b>*</b>', 'thumb_width', 0), //new in cpg1.2.0
        array('用尺寸(微缩图片的宽度或高度或特质)<b>*</b>', //new in cpg1.2.0 'thumb_use', 7),
        array('建立中等大小图片','make_intermediate',1),
        array('中等大小图片的宽度或高度 <b>*</b>', 'picture_width', 0),
        array('上传图片的最大字符数(KB)', 'max_upl_size', 0),
        array('上传图片的最大宽度或高度(像素)', 'max_upl_width_height', 0),

	'用户设置',
	array('允许新用户注册', 'allow_user_registration', 1),
	array('新用户需要电子邮件验证', 'reg_requires_valid_email', 1),
	array('允许不同用户使用同一个电子邮件', 'allow_duplicate_emails_addr', 1),
	array('用户可以有私人的专辑', 'allow_private_albums', 1),

	'图片描述定制字段(如果不使用请留空)',
	array('字段1', 'user_field1_name', 0),
	array('字段2', 'user_field2_name', 0),
	array('字段3', 'user_field3_name', 0),
	array('字段4', 'user_field4_name', 0),

        '图片和微缩图的高级设定',
        array('对未登入的用户显示私人专辑图标','show_private',1), //new in cpg1.2.0
        array('文件名中不允许出现的字符', 'forbiden_fname_char',0),
        array('上传图片可接受的文件扩展名', 'allowed_file_extensions',0),
        array('建立微缩图的方法','thumb_method',2),
        array('ImageMagick \'convert\' 程序路径 (例于 /usr/bin/X11/)', 'impath', 0),
        array('允许图片类型 (仅仅对ImageMagick有效)', 'allowed_img_types',0),
        array('ImageMagick的命令参数选项', 'im_options', 0),
        array('在JPEG文件中读EXIF资料', 'read_exif_data', 1),
        array('专辑 <b>*</b>', 'fullpath', 0),
        array('用户图片的目录 <b>*</b>', 'userpics', 0),
        array('中等大小图片文件名的前缀 <b>*</b>', 'normal_pfx', 0),
        array('微缩图片文件名的前缀 <b>*</b>', 'thumb_pfx', 0),
        array('目录缺省模式', 'default_dir_mode', 0),
        array('图片缺省模式', 'default_file_mode', 0),
        array('全屏弹出窗口下禁止鼠标右键功能', 'disable_popup_rightclick', 1), //new in cpg1.2.0
        array('在所有 &quot;常规&quot; 页面 (JavaScript - no foolproof method) 禁止鼠标右键功能', 'disable_gallery_rightclick', 1), //new in cpg1.2.0

        'Cookies &amp; 字符集设置',
        array('cookie名称', 'cookie_name', 0),
        array('cookie路径', 'cookie_path', 0),
        array('字符编码', 'charset', 4),

        '杂项设置',
        array('启动调试模式', 'debug_mode', 1),

        '<br /><div align="center">如果你的相册中有图片，标记为*的字段必须被改变</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => '请输入你的名字和评论内容',
	'com_added' => '你的评论已经加入',
	'alb_need_title' => '你必须为专辑提供一个标题！',
	'no_udp_needed' => '不必要进行更新。',
	'alb_updated' => '专辑已经更新',
	'unknown_album' => '所选择的专辑不存在或你没有权限上传图片到此专辑中',
	'no_pic_uploaded' => '没有图片被上传 !<br><br>如果你确定有选择图片上传, 请检查服务器是否允许上传文件...',
	'err_mkdir' => '不能建立目录 %s !',
	'dest_dir_ro' => '目的目录 %s 不能写入 !',
	'err_move' => '不能移动 %s 到 %s !',
	'err_fsize_too_large' => '你上传的图片太大 (最大图片尺寸是 %s x %s) !',
	'err_imgsize_too_large' => '你上传的图片太大 (最大图片字节数是 %s KB) !',
	'err_invalid_img' => '上传的文件不是有效的图片格式 !',
	'allowed_img_types' => '你只可以上传 %s 张图片.',
	'err_insert_pic' => '图片 \'%s\' 无法加入此专辑中 ',
	'upload_success' => '图片成功上传<br><br>当管理者审核后你就可以看到图片了.',
	'info' => '讯息',
	'com_added' => '评论已加入',
	'alb_updated' => '专辑已更新',
	'err_comment_empty' => '评论内容是空的 !',
	'err_invalid_fext' => '只有下列的文件扩展名才可以使用 : <br><br>%s.',
	'no_flood' => '抱歉，你已经是最后一个为此图片提供评论<br><br>你可以修改你发表过的评论',
	'redirect_msg' => '你正在转向.<br><br><br>按 \'继续\' 如果页面没有自动刷新',
	'upl_success' => '你的图片已经成功添加',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => '标题',
	'fs_pic' => '实际大小图片',
	'del_success' => '成功删除',
	'ns_pic' => '常规大小图片',
	'err_del' => '不能删除',
	'thumb_pic' => '微缩图',
	'comment' => '评论',
	'im_in_alb' => '专辑中的图片',
	'alb_del_success' => '专辑 \'%s\' 已删除',
	'alb_mgr' => '专辑管理',
	'err_invalid_data' => '接收到无效的数据于 \'%s\'',
	'create_alb' => '建立专辑 \'%s\'',
	'update_alb' => '更新专辑 \'%s\' 标题为 \'%s\' 索引值为 \'%s\'',
	'del_pic' => '删除图片',
	'del_alb' => '删除专辑',
	'del_user' => '删除用户',
	'err_unknown_user' => '所选择的用户不存在 !',
	'comment_deleted' => '评论已经删除',
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
	'confirm_del' => '确定要删除此图片吗 ? \\n相关评论也会被删除.',
	'del_pic' => '删除此图片',
	'size' => '%s x %s 像素',
	'views' => '%s 次',
	'slideshow' => '幻灯片播放',
	'stop_slideshow' => '停止幻灯片播放',
	'view_fs' => '点击观看全屏图片',
);

$lang_picinfo = array(
	'title' =>'图片信息',
	'Filename' => '文件名称',
	'Album name' => '专辑名称',
	'Rating' => '评分 (%s 次投票)',
	'Keywords' => '关键字',
	'File Size' => '文件大小',
	'Dimensions' => '维度',
	'Displayed' => '显示',
	'Camera' => '照相',
	'Date taken' => '取得日期',
	'Aperture' => '孔隙',
	'Exposure time' => '曝光时间',
	'Focal length' => '聚焦宽度',
	'Comment' => '评论'
        'addFav'=>'增加到收藏夹中', //new in cpg1.2.0
        'addFavPhrase'=>'收藏夹', //new in cpg1.2.0
        'remFav'=>'从收藏夹中移除', //new in cpg1.2.0
);

$lang_display_comments = array(
	'OK' => '好',
	'edit_title' => '编辑此评论',
	'confirm_delete' => '确定要删除此评论吗 ?',
	'add_your_comment' => '添加评论',
        'name'=>'名字', //new in cpg1.2.0
        'comment'=>'评论', //new in cpg1.2.0
        'your_name' => 'Anon', //new in cpg1.2.0
);

$lang_fullsize_popup = array(
        'click_to_close' => '点击图片关闭这个窗口', //new in cpg1.2.0
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => '寄送电子卡片',
	'invalid_email' => '<b>警告</b> : 不正确的电子邮件地址 !',
	'ecard_title' => '一张电子卡片 由 %s 寄来给你',
	'view_ecard' => '如果电子卡片无法正确显示, 请按这个链接',
	'view_more_pics' => '点这个链接查看更多的图片 !',
	'send_success' => '你的电子卡片已经送出',
	'send_failed' => '抱歉,服务器无法为你寄送电子卡片...',
	'from' => '从',
	'your_name' => '你的名字',
	'your_email' => '你的电子邮件',
	'to' => '到',
	'rcpt_name' => '收件者姓名',
	'rcpt_email' => '收件者电子邮件',
	'greetings' => '祝福语',
	'message' => '讯息',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '图片&nbsp;讯息',
	'album' => '专辑',
	'title' => '标题',
	'desc' => '描述',
	'keywords' => '关键字',
	'pic_info_str' => '%sx%s - %sKB - %s 次观看 - %s 次投票',
	'approve' => '审核图片',
	'postpone_app' => '延迟审核',
	'del_pic' => '删除图片',
	'reset_view_count' => '重置观看数',
	'reset_votes' => '重置投票',
	'del_comm' => '删除评论',
	'upl_approval' => '审核上传',
	'edit_pics' => '编辑图片',
	'see_next' => '观看下一张图片',
	'see_prev' => '观看上一张图片',
	'n_pic' => '%s 张图片',
	'n_of_pic_to_disp' => '图片显示数量',
	'apply' => '提交修改'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => '用户组名称',
	'disk_quota' => '空间容量',
	'can_rate' => '可以为图片评分',
	'can_send_ecards' => '可以寄送电子卡片',
	'can_post_com' => '可以发表评论',
	'can_upload' => '可以上传图片',
	'can_have_gallery' => '可以使用个人相册',
	'apply' => '提交修改',
	'create_new_group' => '建立新用户组',
	'del_groups' => '删除选择的用户组',
	'confirm_del' => '警告, 当删除了一个用户组, 属于该用户组的用户将被转移至 \'未注册\' 用户组中 !也就是说，他们将失去部份权限\n\n确定要删除吗 ?',
	'title' => '管理用户组',
	'approval_1' => '公用专辑上传审核 (1)',
	'approval_2' => '私人专辑上传审核 (2)',
	'note1' => '<b>(1)</b> 上传图片至公用的专辑需管理者审核',
	'note2' => '<b>(2)</b> 上传图片至自己的专辑需管理者审核',
	'notes' => '注释'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '欢迎 !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => '确定要删除这个专辑吗 ? \\n该专辑中所有图片和评论将会同时被删除.',
	'delete' => '删除',
	'modify' => '属性',
	'edit_pics' => '编辑图片',
);

$lang_list_categories = array(
	'home' => '主页',
	'stat1' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个专辑， <b>[cat]</b> 个类别，<b>[comments]</b> 个评论评论， 观看 <b>[views]</b> 次',
	'stat2' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个专辑， 观看 <b>[views]</b> 次',
	'xx_s_gallery' => '%s 的相册',
	'stat3' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个专辑， <b>[comments]</b> 个评论评论，观看 <b>[views]</b> 次'
);

$lang_list_users = array(
	'user_list' => '用户列表',
	'no_user_gal' => '没有用户相册',
	'n_albums' => '%s 个相册',
	'n_pics' => '%s 张图片'
);

$lang_list_albums = array(
	'n_pictures' => '%s 张图片',
	'last_added' => ', 最新新增于 %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => '登入',
	'enter_login_pswd' => '输入用户名和密码',
	'username' => '用户名',
	'password' => '密码',
	'remember_me' => '记住密码',
	'welcome' => '欢迎 %s ...',
	'err_login' => '*** 不能登入. 请重试 ***',
	'err_already_logged_in' => '你已经登入 !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => '登出',
	'bye' => '再见 %s ，欢迎你再来！',
	'err_not_loged_in' => '你没有登入 !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '更新专辑 %s',
	'general_settings' => '普通设置',
	'alb_title' => '专辑标题',
	'alb_cat' => '专辑类别',
	'alb_desc' => '专辑描述',
	'alb_thumb' => '专辑微缩图',
	'alb_perm' => '不能访问该专辑',
	'can_view' => '专辑可以观看被',
	'can_upload' => '访客可以上传图片',
	'can_post_comments' => '访客可以发表评论',
	'can_rate' => '访客可以为图片评分',
	'user_gal' => '用户相册',
	'no_cat' => '* 没有类别 *',
	'alb_empty' => '专辑是空的',
	'last_uploaded' => '最新上传',
	'public_alb' => '任何人 (公用专辑)',
	'me_only' => '只有我',
	'owner_only' => '只有专辑拥有着 (%s)',
	'groupp_only' => '只有用户组会员 \'%s\'',
	'err_no_alb_to_modify' => '数据库中没有你可以修改的专辑.',
	'update' => '更新专辑'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => '抱歉,你已经为此图片评过分了',
	'rate_ok' => '你的投票已经被接受',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
<B> {SITE_NAME} </B>的管理员会尽快查看你的帖子,但我们不可能随时详细观看每一个帖子. 因此你必需同意让本站有权利在任何时候做适当的调整你发表的帖子,以保持本站惯有的品质.<br>
<br>
你必须同意不可发表涉及任何有关色情, 暴力, 不良, 不正当, 不健康, 妨害国家安全的帖子.<B> {SITE_NAME} </B>在任何时候都有权利过滤并编辑你发表的内容,并有权修改你留在本站内你的资料. 但请放心,我们不会将你的资料转给其他人使用.除此之外,你在本站发表的内容本站都不会为你负任何责任.<br>
<br>
本站使用COOKIES来储存你的电脑上讯息. 这样是方便你更快速阅读本站讯息. 你的电子邮件只是让我们认证你的资料而已,我们不会外泄.<br>
<br>
按下 '我同意' 继续.
EOT;

$lang_register_php = array(
	'page_title' => '注册用户',
	'term_cond' => '条件与规则',
	'i_agree' => '我同意',
	'submit' => '提交注册',
	'err_user_exists' => '你所填写的用户名已被她人使用, 请重填一个',
	'err_password_mismatch' => '两次密码不一样, 请重填一次',
	'err_uname_short' => '用户名称至少需 2 个字符',
	'err_password_short' => '密码至少需 2 个字符',
	'err_uname_pass_diff' => '用户名和密码不可以相同',
	'err_invalid_email' => '邮件地址不正确',
	'err_duplicate_email' => '这个电子邮件地址已经被其他人使用过了',
	'enter_info' => '输入注册讯息',
	'required_info' => '必填的资料',
	'optional_info' => '选填的资料',
	'username' => '用户名',
	'password' => '密码',
	'password_again' => '确认密码',
	'email' => '电子邮件',
	'location' => '位置',
	'interests' => '兴趣',
	'website' => '主页',
	'occupation' => '职业',
	'error' => '错误',
	'confirm_email_subject' => '%s - 注册确认',
	'information' => '讯息',
	'failed_sending_email' => '不能送到你注册所提供的邮件中！',
	'thank_you' => '感谢你的注册.<br><br>一封激活你帐号的邮件将被送到你注册所提供的邮箱中.',
	'acct_created' => '你的帐号已经建立，你现在可以用你的用户名和密码登入',
	'acct_active' => '你的帐号已经激活，你现在可以用你的用户名和密码登入',
	'acct_already_act' => '你的帐号已经激活！',
	'acct_act_failed' => '此帐号不能激活！',
	'err_unk_user' => '选择的用户不存在！',
	'x_s_profile' => '%s\' 的个人资料',
	'group' => '用户组',
	'reg_date' => '加入日期',
	'disk_usage' => '空间使用量',
	'change_pass' => '修改密码',
	'current_pass' => '当前密码',
	'new_pass' => '新密码',
	'new_pass_again' => '再输一次新密码',
	'err_curr_pass' => '当前密码不正确',
	'apply_modif' => '提交修改',
	'change_pass' => '修改我的密码',
	'update_success' => '你的个人资料已经更新',
	'pass_chg_success' => '你的密码已经改变',
	'pass_chg_error' => '你的密码没有改变',
);

$lang_register_confirm_email = <<<EOT
感谢你在 {SITE_NAME} 的注册

你的帐号 : "{USER_NAME}"
你的密码 : "{PASSWORD}"

为了激活你的帐号，你必须点击下面的链接
或者拷贝这个链接然后粘贴到你的浏览器中。

{ACT_LINK}

祝福你，

{SITE_NAME} 管理团队

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => '观看评论',
	'no_comment' => '没有评论可以观看',
	'n_comm_del' => '%s 个评论已经删除',
	'n_comm_disp' => '要显示的评论数量',
	'see_prev' => '看前一个',
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
	'select_dir_msg' => '本功能可以让你批次加入你用FTP上传的图片.<br><br>请选择你所上传的图片目录',
	'no_pic_to_add' => '没有图片可以加入',
	'need_one_album' => '要使用此功能至少要有一个专辑',
	'warning' => '警告',
	'change_perm' => '程序无法写入这个目录, 请修改目录的属性 为 755 或 777 后再试一次!',
	'target_album' => '<b>新增图片 &quot;</b>%s<b>&quot; 到 </b>%s',
	'folder' => '文件夹',
	'image' => '图片',
	'album' => '相册',
	'result' => '结果',
	'dir_ro' => '不能写入. ',
	'dir_cant_read' => '不能读取. ',
	'insert' => '新增图片至相册',
	'list_new_pic' => '新图片列表',
	'insert_selected' => '加入选择的图片',
	'no_pic_found' => '没有新的图片',
	'be_patient' => '请耐心一点, 程序需要一些时间来新增图片',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : 表明图片已成功加入'.
				'<li><b>DP</b> : 表明图片重复或已存在于数据库中'.
				'<li><b>PB</b> : 表明图片无法加入, 请检查设置或图片存放目录的使用权限'.
				'<li>如果 OK, DP, PB \'符号\' 没有显示请按坏掉的图片看看 PHP 显示的错误讯息'.
				'<li>如果浏览器逾时, 请点击刷新按钮'.
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
                'title' => '禁止用户', //new in cpg1.2.0
                'user_name' => '用户名', //new in cpg1.2.0
                'ip_address' => 'IP地址', //new in cpg1.2.0
                'expiry' => '逾期(留空代表永久禁止该用户)', //new in cpg1.2.0
                'edit_ban' => '保存设定', //new in cpg1.2.0
                'delete_ban' => '删除', //new in cpg1.2.0
                'add_new' => '新增禁止用户', //new in cpg1.2.0
                'add_ban' => '增加', //new in cpg1.2.0
);

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => '上传图片',
	'max_fsize' => '允许上传文件最大尺寸为 %s KB',
	'album' => '专辑',
	'picture' => '图片',
	'pic_title' => '图片标题',
	'description' => '图片描述',
	'keywords' => '关键字(请以空格分开)',
	'err_no_alb_uploadables' => '抱歉，没有可以上传图片的专辑',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => '用户管理',
	'name_a' => '名称升序排列',
	'name_d' => '名字降序排列',
	'group_a' => '用户组升序排列',
	'group_d' => '用户组降序排列',
	'reg_a' => '注册日期升序排列',
	'reg_d' => '注册日期降序排列',
	'pic_a' => '图片数升序排列',
	'pic_d' => '图片数降序排列',
	'disku_a' => '磁盘使用量升序排列',
	'disku_d' => '磁盘使用量降序排列',
	'sort_by' => '用户排序按照',
	'err_no_users' => '用户资料表是空的 !',
	'err_edit_self' => '你无法编辑你的个人资料, 请利用 \'我的个人资料\' 来编辑',
	'edit' => '编辑',
	'delete' => '删除',
	'name' => '用户名',
	'group' => '用户组',
	'inactive' => '未激活',
	'operations' => '操作',
	'pictures' => '图片',
	'disk_space' => '空间 已使用 / 总计',
	'registered_on' => '注册于',
	'u_user_on_p_pages' => '%d 个用户于 %d 页',
	'confirm_del' => '确定要删除这个用户吗？\\n所有他的相册和图片都将被删除。',
	'mail' => '邮件',
	'err_unknown_user' => '选择的用户不存在！',
	'modify_user' => '编辑用户',
	'notes' => '注意',
	'note_list' => '<li>如果你不想改变当前的密码, 请将"密码"栏留空',
	'password' => '密码',
	'user_active' => '用户是激活的',
	'user_group' => '用户组',
	'user_email' => '用户电子邮件',
	'user_web_site' => '用户网站',
	'create_new_user' => '建立新用户',
	'user_location' => '用户位置',
	'user_interests' => '用户兴趣',
	'user_occupation' => '用户职业',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) $lang_util_php = array(
        'title' => '重新调整图片尺寸', //new in cpg1.2.0
        'what_it_does' => '做什么', //new in cpg1.2.0
        'what_update_titles' => '用文件名更新标题', //new in cpg1.2.0
        'what_delete_title' => '删除标题', //new in cpg1.2.0
        'what_rebuild' => '重建微缩图和重新调整过尺寸的图片', //new in cpg1.2.0
        'what_delete_originals' => '删除原始尺寸的图片并用新尺寸图片替代', //new in cpg1.2.0
        'file' => '文件', //new in cpg1.2.0
        'title_set_to' => '标题设置为', //new in cpg1.2.0
        'submit_form' => '提交', //new in cpg1.2.0
        'updated_succesfully' => '成功更新', //new in cpg1.2.0
        'error_create' => '建立错误', //new in cpg1.2.0
        'continue' => '处理更多的图片', //new in cpg1.2.0
        'main_success' => '文件 %s 已经成功的作为一个主图片', //new in cpg1.2.0
        'error_rename' => ' %s 到 %s 更名错误', //new in cpg1.2.0
        'error_not_found' => '文件 %s 不能被找到', //new in cpg1.2.0
        'back' => '返回主页面', //new in cpg1.2.0
        'thumbs_wait' => '更新微缩图和/或重新调整图片尺寸,请等候...', //new in cpg1.2.0
        'thumbs_continue_wait' => '继续更新微缩图和/或重新调整图片尺寸...', //new in cpg1.2.0
        'titles_wait' => '更新标题, 请等候...', //new in cpg1.2.0
        'delete_wait' => '删除标题, 请等候...', //new in cpg1.2.0
        'replace_wait' => '删除原始图片并用调整过尺寸的图片替代，请等候..', //new in cpg1.2.0
        'instruction' => '快速指令', //new in cpg1.2.0
        'instruction_action' => '选择动作', //new in cpg1.2.0
        'instruction_parameter' => '设置参数', //new in cpg1.2.0
        'instruction_album' => '选择专辑', //new in cpg1.2.0
        'instruction_press' => '点击 %s', //new in cpg1.2.0
        'update' => '更新相册和/或重新调整图片尺寸', //new in cpg1.2.0
        'update_what' => '什么应该被更新', //new in cpg1.2.0
        'update_thumb' => '仅仅微缩图', //new in cpg1.2.0
        'update_pic' => '仅仅重新调整过尺寸的图片', //new in cpg1.2.0
        'update_both' => '微缩图和重新调整过尺寸的图片', //new in cpg1.2.0
        'update_number' => '每次点击处理图片的数量', //new in cpg1.2.0
        'update_option' => '(假如问题依然存在，试着调低这个设置)', //new in cpg1.2.0
        'filename_title' => '文件名 &rArr; 图片标题', //new in cpg1.2.0
        'filename_how' => '文件名应该如何修改', //new in cpg1.2.0
        'filename_remove' => '移走.jpg结尾并用带空格的 _(下划线)替代', //new in cpg1.2.0
        'filename_euro' => '改变 2003_11_23_13_20_20.jpg 到 23/11/2003 13:20', //new in cpg1.2.0
        'filename_us' => '改变 2003_11_23_13_20_20.jpg 到 11/23/2003 13:20', //new in cpg1.2.0
        'filename_time' => '改变 2003_11_23_13_20_20.jpg to 13:20', //new in cpg1.2.0
        'delete' => '删除图片标题或者原始尺寸的图片', //new in cpg1.2.0
        'delete_title' => '删除图片标题', //new in cpg1.2.0
        'delete_original' => '删除原始尺寸的图片', //new in cpg1.2.0
        'delete_replace' => '删除原始的图片并用新的图片替代', //new in cpg1.2.0
        'select_album' => '选择专辑', //new in cpg1.2.0
);

?>