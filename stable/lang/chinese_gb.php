<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery v1.1 Beta 2                                     //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gregory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning Stoverud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //

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
	'lastup' => '最近加入图片',
	'lastcom' => '最近的评论意见',
	'topn' => '热门图片',
	'toprated' => '热门投票',
	'lasthits' => '最近观看',
	'search' => '搜寻结果'
);

$lang_errors = array(
	'access_denied' => '你没有使用本页的权限.',
	'perm_denied' => '你没有权限执行此动作.',
	'param_missing' => '程式呼叫不到需要的参数.',
	'non_exist_ap' => '所选择的 相本/图片 不存在!',
	'quota_exceeded' => '磁碟使用超过<br><br>您可以使用的空间有 [quota]K, 目前使用了 [space]K, 加入此图片可能超过您可以使用的空间大小.',
	'gd_file_type_err' => '当使用 GD 图形程式库则可使用的图片型态为 JPEG 和 PNG.',
	'invalid_image' => '您上传的图片已经中断或无法被 GD 程式库控制',
	'resize_failed' => '无法建立缩图或产生适中的图档.',
	'no_img_to_display' => '尚未有图片可以显示',
	'non_exist_cat' => '所选择的类别并不存在',
	'orphan_cat' => '这个子类别存于一个不存在的父类别, 请先至类别管理修正这个问题.',
	'directory_ro' => '目录 \'%s\' 无法写入, 导致图片无法删除',
	'non_exist_comment' => '所选择的意见并不存在.',
	'pic_in_invalid_album' => '此图片存于不存在的图库夹 (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => '返回图库夹主页',
	'alb_list_lnk' => '图库夹主页',
	'my_gal_title' => '返回个人相簿',
	'my_gal_lnk' => '个人相簿',
	'my_prof_lnk' => '我的个人资料',
	'adm_mode_title' => '执行管理模式',
	'adm_mode_lnk' => '管理模式',
	'usr_mode_title' => '执行使用者模式',
	'usr_mode_lnk' => '使用者模式',
	'upload_pic_title' => '上传图片至相簿',
	'upload_pic_lnk' => '上传图片',
	'register_title' => '建立帐号',
	'register_lnk' => '注册',
	'login_lnk' => '登入',
	'logout_lnk' => '登出',
	'lastup_lnk' => '最近上传',
	'lastcom_lnk' => '最近的评论',
	'topn_lnk' => '热门图片',
	'toprated_lnk' => '热门投票',
	'search_lnk' => '搜寻',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => '核准上传',
	'config_lnk' => '设置',
	'albums_lnk' => '图库夹',
	'categories_lnk' => '类别',
	'users_lnk' => '使用者',
	'groups_lnk' => '群组',
	'comments_lnk' => '评论意见',
	'searchnew_lnk' => '整批上传图片',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => '建立 / 重整 图库夹',
	'modifyalb_lnk' => '编辑我的相本',
	'my_prof_lnk' => '个人资料',
);

$lang_cat_list = array(
	'category' => '类别',
	'albums' => '相本',
	'pictures' => '图片',
);

$lang_album_list = array(
	'album_on_page' => '%d 个相本于 %d 页'
);

$lang_thumb_view = array(
	'date' => '日期',
	'name' => '名称',
	'sort_da' => '升次排序依日期',
	'sort_dd' => '降次排序依日期',
	'sort_na' => '升次排序依名称',
	'sort_nd' => '降次排序依名称',
	'pic_on_page' => '%d 张图片于 %d 页',
	'user_on_page' => '%d 位使用者于 %d 页'
);

$lang_img_nav_bar = array(
	'thumb_title' => '返回缩图页',
	'pic_info_title' => '显示/隐藏 图片资讯',
	'slideshow_title' => '连续播放',
	'ecard_title' => '寄送 e-card',
	'ecard_disabled' => 'e-cards 暂不可用',
	'ecard_disabled_msg' => '您没有使用权',
	'prev_title' => '观看前一张图片',
	'next_title' => '观看下一张图片',
	'pic_pos' => '图片 %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => '投票 ',
	'no_votes' => '(尚未有投票)',
	'rating' => '(目前得分 : %s / 5 于 %s 个投票)',
	'rubbish' => '不好',
	'poor' => '差',
	'fair' => '逊弊了',
	'good' => '不错',
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
	CRITICAL_ERROR => '错误',
	'file' => '档案: ',
	'line' => '行数: ',
);

$lang_display_thumbnails = array(
	'filename' => '档名 : ',
	'filesize' => '档案大小 : ',
	'dimensions' => '维度 : ',
	'date_added' => '新增日期 : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s 个意见',
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
	'alb_need_name' => '您需要给图库夹一个名称 !',
	'confirm_modifs' => '确定要做这些修改吗 ?',
	'no_change' => '您没有做任何改变 !',
	'new_album' => '新图库夹',
	'confirm_delete1' => '确定要删除此图库夹吗 ?',
	'confirm_delete2' => '\n那么此图库夹内的所有图片及意见都会删除 !',
	'select_first' => '请先选择一个图库夹',
	'alb_mrg' => '图库夹管理',
	'my_gallery' => '* 我的相本 *',
	'no_category' => '* 没有类别 *',
	'delete' => '删除',
	'new' => '新增',
	'apply_modifs' => '提报修改',
	'select_category' => '选择类别',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => '\'%s\'动作所需要的参数并未被提供使用!',
	'unknown_cat' => '所选择的类别并不存在',
	'usergal_cat_ro' => '使用者相本类别无法删除 !',
	'manage_cat' => '类别管理',
	'confirm_delete' => '确定要删除此类别吗',
	'category' => '类别',
	'operations' => '操作',
	'move_into' => '搬移至',
	'update_create' => '更新/建立 类别',
	'parent_cat' => '父类别',
	'cat_title' => '类别名称',
	'cat_desc' => '类别描述'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => '组态设定',
	'restore_cfg' => '回复预设组态',
	'save_cfg' => '储存新设定',
	'notes' => '注意',
	'info' => '讯息',
	'upd_success' => '组态设定已更新',
	'restore_success' => '预设组态已回复',
	'name_a' => '名称升次排序',
	'name_d' => '名称降次排序',
	'date_a' => '日期升次排序',
	'date_d' => '日期降次排序'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'基本设定',
	array('相簿名称', 'gallery_name', 0),
	array('相簿描述', 'gallery_description', 0),
	array('相簿管理人 email', 'gallery_admin_email', 0),
	array('在寄送的e-cards内显示观看更多图片的连结网址', 'ecards_more_pic_target', 0),
	array('语言', 'lang', 5),
	array('布景', 'theme', 6),

	'图库夹显示设定',
	array('主要表格宽度 (pixels or %)', 'main_table_width', 0),
	array('同一类别的子类别显示几个', 'subcat_level', 0),
	array('图库夹显示个数', 'albums_per_page', 0),
	array('图库夹栏数', 'album_list_cols', 0),
	array('显示缩图的大小(pixels)', 'alb_list_thumb_size', 0),
	array('主页的内容', 'main_page_layout', 0),

	'缩图设定',
	array('缩图页栏数', 'thumbcols', 0),
	array('缩图页列数', 'thumbrows', 0),
	array('新进图片纪录显示几个', 'max_tabs', 0),
	array('显示图片标题 (附加的标题) 于缩图下方', 'caption_in_thumbview', 1),
	array('显示意见数于缩图下方', 'display_comment_count', 1),
	array('图片的排序次序', 'default_sort_order', 3),
	array('要显示在 \'热门投票\' 内的图片最少需投几票', 'min_votes_for_rating', 0),

	'观看图片 &amp; 评论意见设定',
	array('图片显示的表格宽度 (pixels or %)', 'picture_table_width', 0),
	array('图片资讯依预设值显示', 'display_pic_info', 1),
	array('过滤不良字于评论意见', 'filter_bad_words', 1),
	array('评论意见可以使用笑脸图示', 'enable_smilies', 1),
	array('图片描述内容的最大长度', 'max_img_desc_length', 0),
	array('描述内容的最大字元数', 'max_com_wlength', 0),
	array('每行意见文字的最大数', 'max_com_lines', 0),
	array('评论意见内容的最大长度', 'max_com_size', 0),

	'图片及缩图设定',
	array('JPEG 格式品质', 'jpeg_qual', 0),
	array('缩图的最大宽度及高度 <b>*</b>', 'thumb_width', 0),
	array('建立适中大小图片','make_intermediate',1),
	array('适中大小图片的宽度或高度 <b>*</b>', 'picture_width', 0),
	array('上传图档的最大限制 (KB)', 'max_upl_size', 0),
	array('上传图片的宽度或高度最大限制 (pixels)', 'max_upl_width_height', 0),

	'使用者设定',
	array('允许新使用者注册', 'allow_user_registration', 1),
	array('新注册者需要 email 验证', 'reg_requires_valid_email', 1),
	array('允许不同使用者使用同一个 email', 'allow_duplicate_emails_addr', 1),
	array('使用者可以有私人的相簿', 'allow_private_albums', 1),

	'访客使用图片描述的栏位 (如果不使用请留下空白)',
	array('图片描述1', 'user_field1_name', 0),
	array('图片描述2', 'user_field2_name', 0),
	array('图片描述3', 'user_field3_name', 0),
	array('图片描述4', 'user_field4_name', 0),

	'图片和缩图的进阶设定',
	array('档案名称排斥的字元', 'forbiden_fname_char',0),
	array('上传图片可接受的副档名', 'allowed_file_extensions',0),
	array('建立缩图的方法','thumb_method',2),
	array('ImageMagick \'convert\' 程式的路径 (例如 /usr/bin/X11/)', 'impath', 0),
	array('允许图片型态 (只对 ImageMagick 有效)', 'allowed_img_types',0),
	array('ImageMagick 的命令列选项', 'im_options', 0),
	array('可读EXIF 资料于 JPEG 档案', 'read_exif_data', 1),
	array('图库夹目录 <b>*</b>', 'fullpath', 0),
	array('使用者图片目录 <b>*</b>', 'userpics', 0),
	array('产生适中图档的前置字元 <b>*</b>', 'normal_pfx', 0),
	array('产生缩图档的前置字元 <b>*</b>', 'thumb_pfx', 0),
	array('放置图档目录的预设CHMOD', 'default_dir_mode', 0),
	array('上传图片的预设CHMOD', 'default_file_mode', 0),

	'Cookies &amp; Charset 设定',
	array('本程式所使用的 cookie 名称', 'cookie_name', 0),
	array('本程式所使用的 cookie 路径', 'cookie_path', 0),
	array('编码设定', 'charset', 4),

	'Miscellaneous settings',
	array('启动除错模式', 'debug_mode', 1),

	'<br><div align="center">(*) 栏位内标示有 * 符号表示必需视需要修改，也就是说一定要填写</div><br>'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => '请输入大名和评论意见',
	'com_added' => '您提供的评论意见已经加入',
	'alb_need_title' => '您必需为图库夹提供一个标题 !',
	'no_udp_needed' => '没有更新的必要.',
	'alb_updated' => '图库夹已经更新',
	'unknown_album' => '所选择的图库夹并不存在或您没有权限上传图片到此图库夹',
	'no_pic_uploaded' => '没有图片被上传 !<br><br>如果您确定有选择图片上传, 请检查伺服器是或允许上传档案...',
	'err_mkdir' => '无法建立目录 %s !',
	'dest_dir_ro' => '目的目录 %s 无法写入 !',
	'err_move' => '无法搬移 %s 到 %s !',
	'err_fsize_too_large' => '您上传的图片太大 (不能超过 %s x %s) !',
	'err_imgsize_too_large' => '您上传的图档太大 (不能超过 %s KB) !',
	'err_invalid_img' => '上传的档案并不是正确的图片格式 !',
	'allowed_img_types' => '您只可以上传 %s 张图片.',
	'err_insert_pic' => '图片 \'%s\' 无法加入此图库夹 ',
	'upload_success' => '图片上传完成<br><br>当管理者核准后您就可以看到图片了.',
	'info' => '讯息',
	'com_added' => '评论意见已加入',
	'alb_updated' => '图库夹已更新',
	'err_comment_empty' => '评论意见是空的 !',
	'err_invalid_fext' => '只有下列的副档名才可以用 : <br><br>%s.',
	'no_flood' => '抱歉，您已经是最后一个为此图片提供意见<br><br>您可以修改您张贴过的意见',
	'redirect_msg' => '您已重整.<br><br><br>按 \'继续\' 如果页面没有自动刷新',
	'upl_success' => '您的图片已加入完成',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => '标题',
	'fs_pic' => '实际大小图片',
	'del_success' => '完成删除',
	'ns_pic' => '标准大小图片',
	'err_del' => '无法删除',
	'thumb_pic' => '缩图',
	'comment' => '评论意见',
	'im_in_alb' => '图片于图库夹',
	'alb_del_success' => '图库夹 \'%s\' 已删除',
	'alb_mgr' => '图库夹管理',
	'err_invalid_data' => '接收到不正确的资料于 \'%s\'',
	'create_alb' => '建立图库夹 \'%s\'',
	'update_alb' => '更新图库夹 \'%s\' 标题为 \'%s\' 索引值为 \'%s\'',
	'del_pic' => '删除图片',
	'del_alb' => '删除图库夹',
	'del_user' => '删除使用者',
	'err_unknown_user' => '所选择的使用者并不存在 !',
	'comment_deleted' => '评论意见已经删除',
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
	'confirm_del' => '确定要删除此片吗 ? \\n连同意见也会被删除.',
	'del_pic' => '删除此图片',
	'size' => '%s x %s pixels',
	'views' => '%s 次',
	'slideshow' => '连续播放',
	'stop_slideshow' => '停止连续播放',
	'view_fs' => '按一下观看整张图片',
);

$lang_picinfo = array(
	'title' =>'图片信息',
	'Filename' => '档案名称',
	'Album name' => '图库夹名称',
	'Rating' => '评分 (%s 次投票)',
	'Keywords' => '关键字',
	'File Size' => '档案大小',
	'Dimensions' => '维度',
	'Displayed' => '显示',
	'Camera' => '图片',
	'Date taken' => '取得日期',
	'Aperture' => '内容',
	'Exposure time' => '时间',
	'Focal length' => '大小',
	'Comment' => '意见'
);

$lang_display_comments = array(
	'OK' => 'OK',
	'edit_title' => '编辑此评论意见',
	'confirm_delete' => '确定要删除此意见吗 ?',
	'add_your_comment' => '提供你的意见',
	'your_name' => '您的大名',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => '寄送 e-card',
	'invalid_email' => '<b>警告</b> : 不正确的 email !',
	'ecard_title' => '一张 e-card 由 %s 寄来给你',
	'view_ecard' => '如果 e-card 无法正确显示, 请按这个连结',
	'view_more_pics' => '按这里看更多图片 !',
	'send_success' => '您的卡片已经送出',
	'send_failed' => '抱歉,本伺服器无法为你寄送 e-card...',
	'from' => '从',
	'your_name' => '你的大名',
	'your_email' => '你的 email',
	'to' => '到',
	'rcpt_name' => '收件者姓名',
	'rcpt_email' => '收件者 email',
	'greetings' => '祝福语',
	'message' => '讯息内容',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => '图片&nbsp;资讯',
	'album' => '图库夹',
	'title' => '标题',
	'desc' => '描述',
	'keywords' => '关键字',
	'pic_info_str' => '%sx%s - %sKB - %s 次观看 - %s 次投票',
	'approve' => '核准图片',
	'postpone_app' => 'Postpone approval',
	'del_pic' => '删除图片',
	'reset_view_count' => '重设观看数计数器',
	'reset_votes' => '重设投票',
	'del_comm' => '删除评论意见',
	'upl_approval' => '核准上传',
	'edit_pics' => '编辑图片',
	'see_next' => '观看下一张图片',
	'see_prev' => '观看上一张图片',
	'n_pic' => '%s 张图片',
	'n_of_pic_to_disp' => '图片显示数量',
	'apply' => '提报修改'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => '群组名称',
	'disk_quota' => '使碟容量',
	'can_rate' => '可以为图片评分',
	'can_send_ecards' => '可以寄送 ecards',
	'can_post_com' => '可以张贴评论意见',
	'can_upload' => '可以上传图片',
	'can_have_gallery' => '可以使用个人化相簿',
	'apply' => '提报修改',
	'create_new_group' => '建立新群组',
	'del_groups' => '删除所选择的群组',
	'confirm_del' => '警告, 当删除了一个群组, 属于该群组的使用者将被转移至 \'Registered\' 群组中 !也就是说，他们将失去部份权限\n\n确定要删除吗 ?',
	'title' => '管理使用者群组',
	'approval_1' => '公用图库夹上传核准 (1)',
	'approval_2' => '私人图库夹上传核准 (2)',
	'note1' => '<b>(1)</b> 上传图片至公用的相簿需管理者核准',
	'note2' => '<b>(2)</b> 上传图片至自己的相簿需管理者核准',
	'notes' => '注意'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => '欢迎 !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => '确定要删除这个图库夹吗 ? \\n该图库夹内所有图片和意见将会同时被删除.',
	'delete' => '删除',
	'modify' => '属性',
	'edit_pics' => '编辑图片',
);

$lang_list_categories = array(
	'home' => '主页',
	'stat1' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个图库夹， <b>[cat]</b> 个类别，<b>[comments]</b> 个评论意见， 观看 <b>[views]</b> 次',
	'stat2' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个图库夹， 观看 <b>[views]</b> 次',
	'xx_s_gallery' => '%s 的相簿',
	'stat3' => '<b>[pictures]</b> 张图片于 <b>[albums]</b> 个图库夹， <b>[comments]</b> 个评论意见，观看 <b>[views]</b> 次'
);

$lang_list_users = array(
	'user_list' => '使用者列表',
	'no_user_gal' => '尚未有使用者被允许使用图库夹',
	'n_albums' => '%s 个图库夹',
	'n_pics' => '%s 张图片'
);

$lang_list_albums = array(
	'n_pictures' => '%s 张图片',
	'last_added' => ', 最近新增于 %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => '登入',
	'enter_login_pswd' => '输入使用者名称和密码',
	'username' => '使用者名称',
	'password' => '密码',
	'remember_me' => '记住密码',
	'welcome' => '欢迎 %s ...',
	'err_login' => '*** 无法登入. 请重试 ***',
	'err_already_logged_in' => '您已经登入 !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => '登出',
	'bye' => '再见了 %s ...',
	'err_not_loged_in' => '您尚未登入 !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => '更新图库夹 %s',
	'general_settings' => '一般设定',
	'alb_title' => '图库夹标题',
	'alb_cat' => '图库夹类别',
	'alb_desc' => '图库夹描述',
	'alb_thumb' => '图库夹缩图',
	'alb_perm' => '该图库夹存取遭拒',
	'can_view' => '图库夹可观看依',
	'can_upload' => '访客可以上传图片',
	'can_post_comments' => '访客可以张贴评论意见',
	'can_rate' => '访客可以为图片评分',
	'user_gal' => '使用者相簿',
	'no_cat' => '* 没有类别 *',
	'alb_empty' => '图库夹是空的',
	'last_uploaded' => '最近上传',
	'public_alb' => '任何人 (公用图库夹)',
	'me_only' => '只有我',
	'owner_only' => '只有图库夹拥有人 (%s)',
	'groupp_only' => '只有群组会员 \'%s\'',
	'err_no_alb_to_modify' => '资料库内尚未有您可以编修的图库夹.',
	'update' => '更新图库夹'
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
管理者于<B> {SITE_NAME} </B>会尽快整理您的资料,但我们不可能随时详细观看每一份张文件. 因此您必需同意让本站有权利在任何时候做适当的调整您张贴的文件,以保持本站的品质.<br>
<br>
您必需同意不可张贴任何色情, 暴力, 不良, 不正当, 不健康, 妨害国家安全, 或其他非正当取得文件.<B> {SITE_NAME} </B>在任何时候都有权利过滤并编辑您张贴的内容,并有权修改你留在本站内的资料. 但请放心,我们不会将您的资料转给其他人使用.除此之外,您在本站张贴的内容本站都不为您负任何责任.<br>
<br>
本站使用COOKIES来储存您的电脑上资讯. 这样是方便您更快速阅读本站资讯. 您的 email 只是让我们认证您的资料而已,我们不会外泄.<br>
<br>
按下 '我同意' 继续.
EOT;

$lang_register_php = array(
	'page_title' => '注册使用者',
	'term_cond' => '条件与规则',
	'i_agree' => '我同意',
	'submit' => '送出注册',
	'err_user_exists' => '您所填写的使用者名称已被人使用, 请重填一个',
	'err_password_mismatch' => '两次密码不合, 请重填一次',
	'err_uname_short' => '使用者名称至少需 2 个字元',
	'err_password_short' => '密码至少需 2 个字元',
	'err_uname_pass_diff' => '使用者名称和密码不可以相同',
	'err_invalid_email' => 'Email 不正确',
	'err_duplicate_email' => '这个 email 已经被其他人使用过了',
	'enter_info' => '加入注册者资料',
	'required_info' => '必要的资料',
	'optional_info' => '非必要的资料',
	'username' => '使用者名称',
	'password' => '密码',
	'password_again' => '确认密码',
	'email' => 'Email',
	'location' => '位置',
	'interests' => '兴趣',
	'website' => '首页',
	'occupation' => '职业',
	'error' => '错误',
	'confirm_email_subject' => '%s - 注册管理设定',
	'information' => '讯息',
	'failed_sending_email' => '所注册的 email 无法送出 !',
	'thank_you' => '感谢您的注册.<br><br>一封 email 内含有如何启用帐号的资讯将被送到您所提供的信箱.',
	'acct_created' => '您的帐号已经建立，现在您可以登入管理',
	'acct_active' => '您的帐号已经启用，现在您可以登入管理个人资料',
	'acct_already_act' => '您的帐号已经启用 !',
	'acct_act_failed' => '此帐号无法启用 !',
	'err_unk_user' => '所选择的使用者并不存在 !',
	'x_s_profile' => '%s\' 的个人资料',
	'group' => '群组',
	'reg_date' => '加入',
	'disk_usage' => '空间使用量',
	'change_pass' => '修改密码',
	'current_pass' => '旧密码',
	'new_pass' => '新密码',
	'new_pass_again' => '确认密码',
	'err_curr_pass' => '旧密码不正确',
	'apply_modif' => '提报修改',
	'change_pass' => '修改我的密码',
	'update_success' => '你的个人资料已经更新',
	'pass_chg_success' => '你的密码已经修改',
	'pass_chg_error' => '你的密码没有修改',
);

$lang_register_confirm_email = <<<EOT
感谢您注册于 {SITE_NAME}

您的帐号 : "{USER_NAME}"
您的密码 : "{PASSWORD}"

为了方便启动您的帐号,您必需按一下下面的连结
或者先将这个连结存起来.

{ACT_LINK}

祝福您,

 {SITE_NAME} 敬上

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => '观看意见',
	'no_comment' => '尚未有意见可以观看',
	'n_comm_del' => '%s 个意见已删除',
	'n_comm_disp' => '要显示的意见数量',
	'see_prev' => '看前一个',
	'see_next' => '看下一个',
	'del_comm' => '删除所选的意见',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => '投寻图片内容',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => '寻找新图片',
	'select_dir' => '选择目录',
	'select_dir_msg' => '本功能可以让你整批汇入你用 FTP 上传的图片.<br><br>请选择你所上传的图片目录',
	'no_pic_to_add' => '没有图片可以加入',
	'need_one_album' => '要使用此功能必需少要有一个图库夹',
	'warning' => '警告',
	'change_perm' => '程式无法写入这个目录, 请修改CHMOD 为 755 或 777 后再试一次!',
	'target_album' => '<b>加入图片 &quot;</b>%s<b>&quot; 到 </b>%s',
	'folder' => '资料夹',
	'image' => '图片',
	'album' => '图库夹',
	'result' => '结果',
	'dir_ro' => '无法写入. ',
	'dir_cant_read' => '无法读取. ',
	'insert' => '新增图片至相簿',
	'list_new_pic' => '列出新图片',
	'insert_selected' => '加入所选择的图片',
	'no_pic_found' => '没有找到新图片',
	'be_patient' => '请耐心等候, 程式需要一点时间来加入所选图片',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : 表示图片已成功被加入'.
				'<li><b>DP</b> : 表示图片重覆或已存在资料库'.
				'<li><b>PB</b> : 表示图片无法加入, 请检查组态设定或图片存放目录的使用权限'.
				'<li>如果 OK, DP, PB \'符号\' 没有显示请按坏掉的图片看看 PHP 显示的错误讯息'.
				'<li>如果浏览器延迟, 请按重新整理'.
				'</ul>',
);


// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void


// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
	'title' => '上传图片',
	'max_fsize' => '可允许的档案最大为 %s KB',
	'album' => '图库夹',
	'picture' => '图片',
	'pic_title' => '图片标题',
	'description' => '图片描述',
	'keywords' => '关键字 (请以空格区隔)',
	'err_no_alb_uploadables' => '目前尚未有图库夹可以供您上传图片',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => '使用者管理',
	'name_a' => '名称升次排序',
	'name_d' => '名称降次排序',
	'group_a' => '群组升次排序',
	'group_d' => '群组降次排序',
	'reg_a' => '注册日期升次排序',
	'reg_d' => '注册日期降次排序',
	'pic_a' => '图片数升次排序',
	'pic_d' => '图片数降次排序',
	'disku_a' => '使用量升次排序',
	'disku_d' => '使用量降次排序',
	'sort_by' => '使用者排序依',
	'err_no_users' => '使用者资料表是空的 !',
	'err_edit_self' => '您无法编辑个人资料, 请利用 \'我的个人资料\' 来编辑',
	'edit' => '编辑',
	'delete' => '删除',
	'name' => '使用者名称',
	'group' => '群组',
	'inactive' => '未启动',
	'operations' => '动作',
	'pictures' => '图片',
	'disk_space' => '空间 使用量 / 总量',
	'registered_on' => '注册日',
	'u_user_on_p_pages' => '%d 个使用者于 %d 页',
	'confirm_del' => '确定要删除这个使用者吗 ? \\n连同他的图库夹及图片都会被删除.',
	'mail' => 'MAIL',
	'err_unknown_user' => '所选择的使用者并不存在 !',
	'modify_user' => '编辑使用者',
	'notes' => '注意',
	'note_list' => '<li>如果你不想改变目前的密码, 请将 "密码" 位留下空白',
	'password' => '密码',
	'user_active' => '使用者启动中',
	'user_group' => '使用者群组',
	'user_email' => '使用者 email',
	'user_web_site' => '使用者首页',
	'create_new_user' => '建立新使用者',
	'user_location' => '使用者位置',
	'user_interests' => '使用者兴趣',
	'user_occupation' => '使用者职业',
);
?>
