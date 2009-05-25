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
  'lang_name_english' => 'Japanese',
  'lang_name_native' => 'Japanese',
  'lang_country_code' => 'ja',
  'trans_name'=> 'Mitsuhiro Yoshida',
  'trans_email' => 'mits@mitstek.com',
  'trans_website' => 'http://mitstek.com/',
  'trans_date' => '2005-12-1',
);

$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('バイト', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('日', '月', '火', '水', '木', '金', '土');
$lang_month = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

// Some common strings
$lang_yes = 'Yes';
$lang_no  = 'No';
$lang_back = '戻る';
$lang_continue = '続ける';
$lang_info = '情報';
$lang_error = 'エラー';
$lang_check_uncheck_all = '全てをチェックする/チェックしない';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%Y年 %B月 %d日';
$lastcom_date_fmt =  '%y/%m/%d/ %H:%M';
$lastup_date_fmt =   '%Y年 %B月 %d日';
$register_date_fmt = '%Y年 %B月 %d日';
$lasthit_date_fmt =  '%Y年 %B月 %d日 %I:%M %p';
$comment_date_fmt =  '%Y年 %B月 %d日 %I:%M %p';
$log_date_fmt = '%Y年 %B月 %d日 %I:%M %p';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'ランダムファイル',
  'lastup' => '新着写真',
  'lastalb'=> '最新アルバム',
  'lastcom' => '最新コメント',
  'topn' => '閲覧最多',
  'toprated' => 'トップレート',
  'lasthits' => '最終閲覧',
  'search' => '検索結果',
  'favpics'=> 'お気に入り', 
);

$lang_errors = array(
  'access_denied' => 'このページに対するアクセス権がありません。',
  'perm_denied' => 'この操作を行う権限がありません。',
  'param_missing' => '必要なパラメータ無しでスクリプトが実行されました。',
  'non_exist_ap' => '選択されたアルバムは存在しません!', 
  'quota_exceeded' => 'ディスク使用量オーバー<br /><br />あなたが使用できるディスク容量は [quota]Kです。現在 [space]Kを使用しています。このファイルを追加するとディスク容量をオーバーします。',
  'gd_file_type_err' => 'GDイメージライブラリーを使用する場合、JPEGとPNG形式のファイルのみ使用可能です。',
  'invalid_image' => 'あなたがアップロードしたイメージが破損したか、GDライブラリーで処理することができません。',
  'resize_failed' => 'イメージサイズが小さいため、サムネイルを作成できません。',
  'no_img_to_display' => '表示するイメージはありません。',
  'non_exist_cat' => '選択したカテゴリは存在しません。',
  'orphan_cat' => '存在しない親カテゴリを持っています。カテゴリマネージャーを使って問題を解決してください!',
  'directory_ro' => 'ディレクトリ「 %s 」に書込み権がありません。ファイルの削除はできません。',
  'non_exist_comment' => '選択したコメントは存在しません。',
  'pic_in_invalid_album' => '存在しないアルバム(%s)内にファイルがあります !?',
  'banned' => 'あなたは現在このサイトへのアクセスを禁止されています。',
  'not_with_udb' => 'フォーラムソフトに統合されたため、この機能はCoppermineで無効にされています。フォーラムソフトで管理されるため、この機能に関する設定は、ここでサポートされません。',
  'offline_title' => 'オフライン', 
  'offline_text' => '現在ギャラリーはオフラインです - もう暫くお待ちください',
  'ecards_empty' => '表示するeカードレコードがありません。eカードを使用可能にしているか設定画面で確認してください!',
  'action_failed' => 'エラーが発生しました。Coppermineは、処理を正常に終了できませんでした。', 
  'no_zip' => 'ZIPファイルを生成するライブラリが使用できません。Coppermine管理者に連絡してください。', 
  'zip_type' => 'ZIPファイルをアップロードする権限がありません。',
  'database_query' => 'データベース参照時にエラーが発生しました。',
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'bbcodeヘルプ';
$lang_bbcode_help = 'bbcode記述方法: <li>[b]<b>太字</b>[/b]</li> <li>[i]<i>斜体</i>[/i]</li> <li>[url=http://yoursite.com/]Url Text[/url]</li> <li>[email]user@domain.com[/email]</li>';

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'ホームページへ移動',
  'home_lnk' => 'Home',
  'alb_list_title' => 'アルバムリストへ移動',
  'alb_list_lnk' => 'アルバムリスト',
  'my_gal_title' => 'パーソナルギャラリーへ移動',
  'my_gal_lnk' => 'マイギャラリー',
  'my_prof_title' => 'マイプロフィールへ移動',
  'my_prof_lnk' => 'マイプロフィール',
  'adm_mode_title' => '管理者モードに変更',
  'adm_mode_lnk' => '管理者モード',
  'usr_mode_title' => 'ユーザモードに変更',
  'usr_mode_lnk' => 'ユーザモード',
  'upload_pic_title' => 'アルバムにファイルをアップロード', 
  'upload_pic_lnk' => 'ファイルのアップロード',
  'register_title' => 'アカウントの作成',
  'register_lnk' => 'ユーザ登録',
  'login_title' => 'ログイン',
  'login_lnk' => 'ログイン',
  'logout_title' => 'ログアウト',
  'logout_lnk' => 'ログアウト',
  'lastup_title' => '最新アップロードの表示',
  'lastup_lnk' => '最新アップロード',
  'lastcom_title' => '最新コメントの表示',
  'lastcom_lnk' => '最新コメント',
  'topn_title' => '閲覧最多の表示',
  'topn_lnk' => '閲覧最多',
  'toprated_title' => 'トップレートの表示',
  'toprated_lnk' => 'トップレート',
  'search_title' => 'ギャラリーの検索',
  'search_lnk' => '検索',
  'fav_title' => 'お気に入りへ移動',
  'fav_lnk' => 'お気に入り',
  'memberlist_title' => 'メンバーリストの表示',
  'memberlist_lnk' => 'メンバーリスト',
  'faq_title' => '写真ギャラリー&quot;Coppermine&quot;に関するよくある質問と答え', 
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'アップロードの承認',
  'upl_app_lnk' => 'アップロード承認',
  'admin_title' => '設定へ移動',
  'admin_lnk' => '設定',
  'albums_title' => 'アルバム設定へ移動',
  'albums_lnk' => 'アルバム',
  'categories_title' => 'カテゴリ設定へ移動',
  'categories_lnk' => 'カテゴリ',
  'users_title' => 'ユーザ設定へ移動',
  'users_lnk' => 'ユーザ',
  'groups_title' => 'グループ設定へ移動',
  'groups_lnk' => 'グループ',
  'comments_title' => '全てのコメントをレビュー',
  'comments_lnk' => 'コメントのレビュー',
  'searchnew_title' => 'ファイルの一括追加へ移動',
  'searchnew_lnk' => 'ファイルの一括追加',
  'util_title' => '管理ツールへ移動',
  'util_lnk' => '管理ツール',
  'key_title' => 'キーワードディレクトリへ移動',
  'key_lnk' => 'キーワードディレクトリ',
  'ban_title' => 'アクセス禁止ユーザへ移動',
  'ban_lnk' => 'アクセス禁止ユーザ',
  'db_ecard_title' => 'eカードのレビュー',
  'db_ecard_lnk' => 'eカードの表示',
  'pictures_title' => 'マイ アルバムの並び替え',
  'pictures_lnk' => 'マイ アルバムの並び替え',
  'documentation_lnk' => 'ドキュメンテーション',
  'documentation_title' => 'Coppermineマニュアル',
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'マイアルバムの作成 / 整理',
  'albmgr_lnk' => 'マイアルバムの作成 / 整理',
  'modifyalb_title' => 'マイアルバムの修正へ移動', 
  'modifyalb_lnk' => 'マイアルバムの修正',
  'my_prof_title' => 'マイプロフィールへ移動',
  'my_prof_lnk' => 'マイプロフィール',
);

$lang_cat_list = array(
  'category' => 'カテゴリ',
  'albums' => 'アルバム',
  'pictures' => 'ファイル',
);

$lang_album_list = array(
  'album_on_page' => 'アルバム数 %d / %dページ中'
);

$lang_thumb_view = array(
  'date' => '日付',
  //Sort by filename and title
  'name' => 'ファイル名',
  'title' => 'タイトル',
  'sort_da' => '日付の昇順で並び替え',
  'sort_dd' => '日付の降順で並び替え',
  'sort_na' => 'ファイル名の昇順で並び替え',
  'sort_nd' => 'ファイル名の降順で並び替え',
  'sort_ta' => '写真タイトルの昇順で並び替え',
  'sort_td' => '写真タイトルの降順で並び替え',
  'position' => 'ポジション',
  'sort_pa' => 'ポジションの昇順で並び替え',
  'sort_pd' => 'ポジションの降順で並び替え',
  'download_zip' => 'ZIPファイルとしてダウンロードする',
  'pic_on_page' => 'ファイル数 %d / %dページ中',
  'user_on_page' => 'ユーザ数 %d / %dページ中',
  'enter_alb_pass' => 'アルバムパスワードの入力',
  'invalid_pass' => 'パスワードが違います。',
  'pass' => 'パスワード',
  'submit' => '送信',
);

$lang_img_nav_bar = array(
  'thumb_title' => 'サムネイルページに戻る',
  'pic_info_title' => 'ファイル情報の表示/非表示',
  'slideshow_title' => 'スライドショー',
  'ecard_title' => 'この写真をeカードとして送信する',
  'ecard_disabled' => 'eカードは送信できません。',
  'ecard_disabled_msg' => 'eカードを送信する権限がありません。',
  'prev_title' => '前へ',
  'next_title' => '次へ',
  'pic_pos' => 'ファイル %s/%s',
  'report_title' => 'このファイルを管理者に報告',
  'go_album_end' => '最後にスキップ',
  'go_album_start' => '最初に戻る',
  'go_back_x_items' => '%s アイテムへ戻る',
  'go_forward_x_items' => '%s アイテムへ進む',
);

$lang_rate_pic = array(
  'rate_this_pic' => 'このファイルを評価する',
  'no_votes' => '( 未投票 )',
  'rating' => '( 現在のレーティング: %s/5&nbsp;&nbsp;&nbsp;投票数 %s件 )',
  'rubbish' => '酷い',
  'poor' => '悪い',
  'fair' => '普通',
  'good' => '良い',
  'excellent' => '素晴らしい',
  'great' => '凄い',
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
  CRITICAL_ERROR => '致命的なエラー',
  'file' => 'ファイル: ',
  'line' => '行: ',
);

$lang_display_thumbnails = array(
  'filename' => 'ファイル名 : ',
  'filesize' => 'ファイルサイズ : ',
  'dimensions' => 'ディメンション : ',
  'date_added' => '登録日 : '
);

$lang_get_pic_data = array(
  'n_comments' => 'コメント数 %s',
  'n_views' => '閲覧回数 %s',
  'n_votes' => '( 投票数 %s )'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'デバッグ情報',
  'select_all' => '全てを選択',
  'copy_and_paste_instructions' => 'coppermineのサポート掲示板にサポートの依頼を投稿する場合は、このデバッグ表示をコピー&ペーストしてください。投稿前にパスワードを***に書換えてください。',
  'phpinfo' => 'phpinfoを表示',
  'notices' => '注意',
);

$lang_language_selection = array(
  'reset_language' => 'デフォルト言語',
  'choose_language' => '言語を選択してください',
);

$lang_theme_selection = array(
  'reset_theme' => 'デフォルトテーマ',
  'choose_theme' => 'テーマを選択してください',
);

$lang_version_alert = array(
  'version_alert' => 'サポートされていないバージョンです!',
  'no_stable_version' => 'あなたは非常に経験豊かなユーザ用のCoppermine %s (%s) を使用しています - このバージョンにはサポートおよび保証はありません。あなたの自己責任でこのバージョンを使用するか、サポートが必要な場合は、ステイブルバージョンをダウングレードしてください!',
  'gallery_offline' => '現在、ギャラリーはオフラインで管理者のあなたのみ見ることができます。メンテナンス終了後、忘れずにオンラインに戻してください。',
);

$lang_create_tabs = array(
  'previous' => '前へ',
  'next' => '次へ',
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
  'error_wakeup' => "プラグイン「 %s 」を起動できません。",
  'error_install' => "プラグイン「 %s 」をインストールできません。",
  'error_uninstall' => "プラグイン「 %s 」をアンインストールできません。",
  'error_sleep' => "プラグイン「 %s 」を停止できません。<br />",
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'ビックリ',
  'Question' => '質問',
  'Very Happy' => 'とても幸せ',
  'Smile' => 'スマイル',
  'Sad' => '悲しい',
  'Surprised' => '驚き',
  'Shocked' => 'ショック',
  'Confused' => '混乱',
  'Cool' => 'クール',
  'Laughing' => '笑い',
  'Mad' => '怒り',
  'Razz' => '苦笑い',
  'Embarassed' => '恥ずかしい',
  'Crying or Very sad' => '号泣またはとても悲しい',
  'Evil or Very Mad' => '悪いまたはとても怒った',
  'Twisted Evil' => '意地悪い',
  'Rolling Eyes' => '転がる目',
  'Wink' => 'ウインク',
  'Idea' => 'アイディア',
  'Arrow' => '許可',
  'Neutral' => '中立',
  'Mr. Green' => 'ミスター・グリーン',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => '管理者モードを終了中 ...',
  1 => '管理者モードに移行中 ...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'アルバムにはアルバム名が必要です !',
  'confirm_modifs' => '本当に更新してもよろしいですか ?',
  'no_change' => '何も変更されていません !',
  'new_album' => '新しいアルバム',
  'confirm_delete1' => '本当にこのアルバムを削除してもよろしいですか ?',
  'confirm_delete2' => '\nアルバムに含まれる全ての写真とコメントは削除されます !',
  'select_first' => '最初にアルバムを選択してください。',
  'alb_mrg' => 'アルバム管理',
  'my_gallery' => '* マイギャラリー *',
  'no_category' => '* カテゴリ無し *',
  'delete' => '削除',
  'new' => '新規作成',
  'apply_modifs' => '更新の適用',
  'select_category' => 'カテゴリ選択',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'アクセス禁止ユーザ',
  'user_name' => 'ユーザ名',
  'ip_address' => 'IPアドレス',
  'expiry' => '禁止終了 ( 空白は永久 )',
  'edit_ban' => '変更を保存',
  'delete_ban' => '削除',
  'add_new' => '新しい禁止ユーザを追加',
  'add_ban' => '追加',
  'error_user' => 'ユーザが見つかりません',
  'error_specify' => 'ユーザ名またはIPアドレスを特定してください',
  'error_ban_id' => 'アクセス禁止IDが違います!',
  'error_admin_ban' => '自分自身をアクセス禁止にできません!',
  'error_server_ban' => '自分自身のサーバをアクセス禁止にしますか? それはできません...',
  'error_ip_forbidden' => 'このIPアドレスをアクセス禁止にできません - ルーティング出来ないIPアドレスです!',
  'lookup_ip' => 'IPアドレスのルックアップ',
  'submit' => 'go!',
  'select_date' => '日付を選択',
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'ブリッジウィザード',
  'warning' => '警告: このウィザードを使用する場合、htmlフォームを使用して重要なデータが送信されることを理解してください。あなたのパソコンのみ ( インターネットカフェのパソコンのような公共のクライアントでは無く ) で動作させてください。終わった後は、ブラウザキャッシュと一時ファイルを忘れずにクリアしてください。クリアしないと他の人があなたのデータにアクセスできることになります!',
  'back' => '戻る',
  'next' => '次へ',
  'start_wizard' => 'ブリッジウィザードを開始',
  'finish' => '終了',
  'hide_unused_fields' => '未使用のフォームフィールドを隠す ( 推奨 )',
  'clear_unused_db_fields' => '無効なデータベースエントリを消去する ( 推奨 )',
  'custom_bridge_file' => 'あなたのカスタムブリッジファイル名 ( ブリッジファイル名が <i>myfile.inc.php</i>の場合、このフィールドに<i>myfile</i>と入力 )',
  'no_action_needed' => 'このステップの処理はありません。続けるには「次へ」ボタンをクリックしてください。',
  'reset_to_default' => 'デフォルト値にリセットする',
  'choose_bbs_app' => 'coppermineとブリッジするアプリケーションを選択',
  'support_url' => 'このアプリケーションのサポートにはここをクリック',
  'settings_path' => 'BBSアプリケーションに使用されるパス',
  'database_connection' => 'データベース接続',
  'database_tables' => 'データベーステーブル',
  'bbs_groups' => 'BBSグループ',
  'license_number' => 'ライセンスナンバー',
  'license_number_explanation' => 'ライセンスナンバーを入力してください ( 有効な場合 )。',
  'db_database_name' => 'データベース名',
  'db_database_name_explanation' => 'BBSアプリケーションが使用するデータベースのユーザ名を入力してください。',
  'db_hostname' => 'データベースホスト',
  'db_hostname_explanation' => 'MySQLデータベースが存在するホスト名 ( 通常は localhost) を入力してください。',
  'db_username' => 'データベースユーザアカウント',
  'db_username_explanation' => 'BBSとの接続に使用するMySQLユーザアカウント名を入力してください。',
  'db_password' => 'データベースパスワード',
  'db_password_explanation' => 'このMySQLユーザアカウントのパスワード',
  'full_forum_url' => 'フォーラムURL',
  'full_forum_url_explanation' => 'BBSアプリケーションへの完全なURL ( http:// を含みます。例 http://www.yourdomain.tld/forum )',
  'relative_path_of_forum_from_webroot' => 'フォーラムの相対パス',
  'relative_path_of_forum_from_webroot_explanation' => 'BBSアプリケーションのウェブルートからの相対パス ( 例: BBSが http://www.yourdomain.tld/forum/ にある場合、このフィールドに「 /forum 」と入力してください。)',
  'relative_path_to_config_file' => 'BBSアプリケーションのconfigファイルへの相対パス',
  'relative_path_to_config_file_explanation' => 'BBSアプリケーションのCoppermineフォルダからの相対パス ( 例: BBSが http://www.yourdomain.tld/forum/ にあり、Coppermineが http://www.yourdomain.tld/gallery/ にある場合、「../forum/」と入力してください。)',
  'cookie_prefix' => 'クッキー接頭辞',
  'cookie_prefix_explanation' => 'あなたのBBSのクッキー名を設定してください。',
  'table_prefix' => 'テーブル接頭辞',
  'table_prefix_explanation' => 'BBSの設定時にあなたが選択した接頭辞に合致する必要があります。',
  'user_table' => 'ユーザテーブル',
  'user_table_explanation' => '( BBSが標準の方法でインストールされている限り、デフォルトの値で利用できます。)',
  'session_table' => 'セッションテーブル',
  'session_table_explanation' => '( BBSが標準の方法でインストールされている限り、デフォルトの値で利用できます。)',
  'group_table' => 'グループテーブル',
  'group_table_explanation' => '( BBSが標準の方法でインストールされている限り、デフォルトの値で利用できます。)',
  'group_relation_table' => 'グループ関連テーブル',
  'group_relation_table_explanation' => '( BBSが標準の方法でインストールされている限り、デフォルトの値で利用できます。)',
  'group_mapping_table' => 'グループマッピングテーブル',
  'group_mapping_table_explanation' => '( BBSが標準の方法でインストールされている限り、デフォルトの値で利用できます。)',
  'use_standard_groups' => '標準的なBBSユーザグループを使用する',
  'use_standard_groups_explanation' => 'スタンダード ( ビルドイン ) ユーザグループを使用する ( 推奨 )。このページの全てのカスタムユーザグループ設定を無効にします。あなたが何をしているか本当に理解できる場合のみ、このオプションを無効にしてください!',
  'validating_group' => 'グループ認証',
  'validating_group_explanation' => '認証が必要なユーザアカウントが入っているBBSのグループID ( BBSが標準の方法でインストールされている限り、デフォルトの値で利用できます。)',
  'guest_group' => 'ゲストグループ',
  'guest_group_explanation' => 'ゲスト ( 匿名ユーザ ) が入っているBBSのグループID ( デフォルトの値で利用できます。あなたが何をしているか本当に理解できる場合のみ編集してください。)',
  'member_group' => 'メンバグループ',
  'member_group_explanation' => '「通常」のユーザアカウントが入っているBBSのグループID ( デフォルトの値で利用できます。あなたが何をしているか本当に理解できる場合のみ編集してください。)',
  'admin_group' => '管理グループ',
  'admin_group_explanation' => '管理者が入っているBBSのグループID ( デフォルトの値で利用できます。あなたが何をしているか本当に理解できる場合のみ編集してください。)',
  'banned_group' => 'アクセス禁止グループ',
  'banned_group_explanation' => 'アクセス禁止ユーザが入っているBBSのグループID ( デフォルトの値で利用できます。あなたが何をしているか本当に理解できる場合のみ編集してください。)',
  'global_moderators_group' => 'グローバルモデレータグループ',
  'global_moderators_group_explanation' => 'グローバルモデレータが入っているBBSのグループID ( デフォルトの値で利用できます。あなたが何をしているか本当に理解できる場合のみ編集してください。)',
  'special_settings' => 'BBS詳細設定',
  'logout_flag' => 'phpBBバージョン ( ログアウトフラグ )',
  'logout_flag_explanation' => 'あなたのBBSバージョンは? ( この設定はログアウトがどのように処理されるか指定します。 )',
  'use_post_based_groups' => '投稿ベースのグループを使用しますか?',
  'logout_flag_yes' => '2.0.5 またはそれ以上',
  'logout_flag_no' => '2.0.4 またはそれ以下',
  'use_post_based_groups_explanation' => '投稿数で定義されたグループをBBSからアカウントに取り込む ( 粒上のパーミッション管理を許可する ) またはデフォルトグループを使用する ( 管理を簡単にします、推奨 )。後でこの設定を変更することができます。',
  'use_post_based_groups_yes' => 'yes',
  'use_post_based_groups_no' => 'no',
  'error_title' => '続けるには、これらのエラーを修正してください。前の画面に戻る。',
  'error_specify_bbs' => 'インストール済みCoppermineとブリッジしたいアプリケーションを指定してください。',
  'error_no_blank_name' => 'カスタムブリッジファイル名を空白にはできません。',
  'error_no_special_chars' => 'ブリッジファイル名にはアンダースコア(_)およびダッシュ(-)以外の特殊文字は使用できません!',
  'error_bridge_file_not_exist' => 'ブリッジファイル %s がサーバに存在していません。ブリッジファイルをアップロードしたか確認してください。',
  'finalize' => 'BBSインテグレーションのアクティベート/ディアクティベート',
  'finalize_explanation' => '設定内容がデータベースに登録されましたが、BBSインテグレーションは有効化されていません。後でインテグレーションをon/offに切り替えることができます。後で変更する場合に必要ですので、スタンドアロンCoppermineより管理者ユーザ名およびパスワードを控えてください。正常に動作しない場合、スタンドアロン ( ブリッジ無し ) 管理者アカウント ( 通常、Coppermineインストールでセットアップしたもの ) でログインして %s でBBSインテグレーションをディアクティベートしてください。',
  'your_bridge_settings' => 'ブリッジ設定',
  'title_enable' => '%s とのインテグレーション/ブリッジングを有効にする',
  'bridge_enable_yes' => '有効',
  'bridge_enable_no' => '無効',
  'error_must_not_be_empty' => '空白は許可されません。',
  'error_either_be' => '%s または %s を入力してください。',
  'error_folder_not_exist' => '%s がありません。%s で入力した値を訂正してください。',
  'error_cookie_not_readible' => 'Coppermineがクッキー %s を読むことができません。%s のために入力した値を修正するか、BBS管理パネルでクッキーのパスをcoppermineで読むことができるか確認してください。',
  'error_mandatory_field_empty' => 'フィールド %s は空白にできません - 適正な値を入力してください。',
  'error_no_trailing_slash' => 'フィールド %s にトレイリング・スラッシュは不要です。',
  'error_trailing_slash' => 'フィールド %s にトレイリング・スラッシュが必要です。',
  'error_db_connect' => '指定されたデータでMySQLデータベースに接続することができませんでした。MySQLのメッセージ:',
  'error_db_name' => 'Coppermineが接続を確立しましたが、データベース %s を見つけることができませんでした。%s を正しく指定したか確認してください。MySQLのメッセージ:',
  'error_prefix_and_table' => '%s および ',
  'error_db_table' => 'テーブル %s が見つかりません。%s を正しく指定したか確認してください。',
  'recovery_title' => 'ブリッジマネージャー: 緊急リカバリー',
  'recovery_explanation' => 'CoppermineギャラリーのBBSインテグレーションを管理するため、ここにアクセスした場合、最初に管理者としてログインしてください。ブリッジが期待した通りに動作せずにログインできない場合、このページでBBSインテグレーションをディアクティベートすることができます。あなたのユーザ名およびパスワード入力することでログインできなくなることはありません。BBSインテグレーションをディアクティベートするだけです。詳細はドキュメンテーションをご覧ください。',
  'username' => 'ユーザ名',
  'password' => 'パスワード',
  'disable_submit' => '送信',
  'recovery_success_title' => '認証成功',
  'recovery_success_content' => 'BBSブリッジを正常に無効にしました。Coppermineはスタンドアロンモードで動作しています。',
  'recovery_success_advice_login' => 'ブリッジ設定および/またはBBSインテグレーションを再度有効にするには、adminとしてログインしてください。',
  'goto_login' => 'ログインページへ移動',
  'goto_bridgemgr' => 'ブリッジマネージャーへ移動',
  'recovery_failure_title' => '認証失敗',
  'recovery_failure_content' => '提供された証明書が間違っています。スタンドアロンバージョンの管理者アカウントを提供する必要があります ( 通常、Coppermineインストール中に設定したアカウントです )。',
  'try_again' => 'もう一度',
  'recovery_wait_title' => '待ち時間が経過していません。',
  'recovery_wait_content' => 'セキュリティ上の理由から、このスクリプトでは短時間でのログイン失敗が許可されていません。認証が許可されるまで、暫くの間お待ちください。',
  'wait' => '待機',
  'create_redir_file' => 'リダイレクションファイルの作成 ( 推奨 )',
  'create_redir_file_explanation' => 'BBSにログインしたユーザをCoppermineにリダイレクトするには、BBSフォルダにリダイレクトファイルを作成する必要があります。このオプションがチェックされた場合、ブリッジマネージャーはこのファイルの作成を試みます。または、ファイルを手動で作成してコピー&ペーストするためのコードを作成します。',
  'browse' => '閲覧',
);

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'カレンダー',
  'close' => '閉じる',
  'clear_date' => '日付をクリア',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '「 %s 」の操作に必要なパラメータが渡されていません !',
  'unknown_cat' => '選択したカテゴリはデータベースに存在しません。',
  'usergal_cat_ro' => 'ユーザギャラリーのカテゴリは削除できません !',
  'manage_cat' => 'カテゴリの管理',
  'confirm_delete' => '本当にこのカテゴリを削除してもよろしいですか ?',
  'category' => 'カテゴリ',
  'operations' => '操作',
  'move_into' => '移動先',
  'update_create' => 'カテゴリの作成/更新',
  'parent_cat' => '親カテゴリ',
  'cat_title' => 'カテゴリ名',
  'cat_thumb' => 'カテゴリサムネイル',
  'cat_desc' => 'カテゴリ説明',
  'categories_alpha_sort' => 'カテゴリをアルファベット順に並び替え ( カスタム並び順の代わりに )',
  'save_cfg' => '設定を保存',
);

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'ギャラリー設定',
  'manage_exif' => 'exif情報の管理',
  'manage_plugins' => 'プラグインの管理',
  'manage_keyword' => 'キーワードの管理',
  'restore_cfg' => '工場出荷時の設定のリストア',
  'save_cfg' => '設定を保存',
  'notes' => 'ノート',
  'info' => '情報',
  'upd_success' => 'Coppermine設定が更新されました。',
  'restore_success' => 'Coppermineデフォルト設定がリストアされました。',
  'name_a' => '名称昇順',
  'name_d' => '名称降順',
  'title_a' => 'タイトル昇順',
  'title_d' => 'タイトル降順',
  'date_a' => '日付昇順',
  'date_d' => '日付降順',
  'pos_a' => 'ポジション昇順',
  'pos_d' => 'ポジション降順',
  'th_any' => '最大アスペクト',
  'th_ht' => '高さ',
  'th_wd' => '幅',
  'label' => 'ラベル',
  'item' => 'アイテム',
  'debug_everyone' => '全員',
  'debug_admin' => '管理者のみ',
  'no_logs'=> 'Off',
  'log_normal'=> 'ノーマル',
  'log_all' => '全て',
  'view_logs' => 'ログの表示',
  'click_expand' => '広げるにはセクション名をクリック',
  'expand_all' => '全てを広げる',
  'notice1' => '(*) データベース内に既にデータがある場合、これらの設定は変更しないでください。',
  'notice2' => '(**) この設定を変更する場合、更新した時点以降のファイルに適用されます。ギャラリー内にファイルがある場合は、この設定を変更しないことをお勧めします。しかし、管理メニューの「<a href="util.php">管理ツール</a> ( 写真のリサイズ ) ユーティリティ」より、登録されているファイルに変更を適用することができます。',
  'notice3' => '(***) 全てのログファイルは英語で記録されます。',
  'bbs_disabled' => 'bbsインテグレーション使用時に機能は利用停止にされます。',
  'auto_resize_everyone' => '全員',
  'auto_resize_user' => 'ユーザのみ',
  'ascending' => '昇順',
  'descending' => '降順',
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  '一般設定',
  array('ギャラリー名', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'),
  array('ギャラリー説明', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'),
  array('ギャラリー管理者メールアドレス', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'),
  array('coppermineギャラリーフォルダのURL ( index.php または類似のファイルを末尾に付けないでください。 )', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'),
  array('ホームページのURL', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'),
  array('お気に入りのZIPダウンロードを許可', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'),
  array('GMTと比較したタイムゾーンの差 ( 現在時刻: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'),
  array('暗号化パスワードを使用 (can not be undone)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('ヘルプアイコンを使用 ( 英語のみ利用可 )','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'),
  array('検索でクリッカブル・キーワードを使用','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'),
  array('プラグインを使用', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'), 
  array('ノンルータブル ( プライベート ) IPアドレスの拒否を許可', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'),
  array('ブラウザブル一括追加インターフェース', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'),

  '言語 &amp; 文字設定',
  array('言語', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'),
  array('訳語が無い場合は英語を表示?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'),
  array('キャラクタエンコーディング', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'),
  array('言語リストを表示する', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'),
  array('言語の旗を表示する', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'),
  array('言語選択に「リセット」を表示する', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'),
  //array('前の/次のタブページを表示する', 'previous_next_tab', 1),

  'テーマ設定',
  array('テーマ', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'),
  array('テーマリストの表示', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'),
  array('「リセット」をテーマ選択一覧に表示', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'),
  array('FAQの表示', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'),
  array('カスタムメニューリンク名', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'),
  array('カスタムメニューリンクURL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'),
  array('bbcodeヘルプの表示', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'),
  array('XHTMLおよびCSS仕様により定義されたヴァニティーブロックをテーマに表示','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'),
  array('カスタムヘッダのパス', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'),
  array('カスタムフッタのパス', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'),

  'アルバムリストビュー',
  array('メインテーブルの幅 ( ピクセルまたは % )', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'),
  array('カテゴリのレベル表示数', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'),
  array('アルバムの表示数', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'),
  array('アルバムリストのカラム数', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'),
  array('サムネイルのピクセルサイズ', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'),
  array('メインページのコンテンツ', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'),
  array('カテゴリに最初のレベルのアルバムサムネイルを表示する','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'),
  array('カテゴリをアルファベット順に並び替える ( 特別のソート順の代わりに )','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'),
  array('リンクファイル数を表示する','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'),

  'サムネイルビュー',
  array('サムネイルページのカラム数', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'),
  array('サムネイルページの列数', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'),
  array('タブの最大表示数', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'),
  array('サムネイル下部に ( タイトルに加えて ) ファイル説明文を表示する', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'),
  array('サムネイル下部に閲覧数を表示する', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'),
  array('サムネイル下部にコメント数を表示する', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'),
  array('サムネイル下部にアップローダ名を表示する', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'),
  //array('サムネイルの下に管理者の名前を表示する', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'),
  array('サムネイル下部にファイル名を表示する', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'),
  array('アルバム説明を表示する', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'),
  array('ファイルのデフォルトのソート順', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'),
  array('「トップレート」リストにファイルが表示されるための最小投票数', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'),

  'イメージビュー',
  array('ファイル表示テーブルの幅 ( ピクセルまたは % )', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'),
  array('デフォルトでファイル情報を表示する', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'),
  array('イメージ説明の最大長', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'),
  array('1語の最大文字数', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'),
  array('フィルム・ストリップを表示する', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'),
  array('フィルム・ストリップサムネイル下部にファイル名を表示する', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'),
  array('フィルム・ストリップ内のアイテム数', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'),
  array('スライドショー間隔 - 1000分の1秒単位 ( 1秒 = 1000ミリ秒 )', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'),

  'コメント設定',
  array('コメント中の使用禁止用語をフィルタする', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'),
  array('コメント中のスマイりーを許可する', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'),
  array('同一ユーザによる1つのファイルに対する連続したコメントを許可する ( フラッドプロテクションを無効 )', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'),
  array('コメントの最大行', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'),
  array('コメントの最大長', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'),
  array('管理者にコメントの投稿をメール通知する', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'),
  array('コメントの並び順', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'),
  array('匿名コメント投稿者の接頭辞', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'),

  'ファイルおよびサムネイル設定',
  array('JPEGファイルのクオリティ', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'),
  array('サムネイルの最大長 <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'),
  array('使用する長さ ( 幅 または 高さ または サムネイルの最大アスペクト ) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'),
  array('中間写真を作成する','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'),
  array('中間写真/ビデオの最大幅または高さ <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'),
  array('アップロードファイルの最大サイズ ( KB )', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'),
  array('アップロード写真/ビデオの最大幅または高さ ( ピクセル )', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'),
  array('最大幅または高さより大きなイメージをオートリサイズする', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'),

  'ファイルおよびサムネイルの高度な設定',
  array('アルバムをプライベートにする ( 注意: 「Yes」から「No」に変更した場合、現在のプライベートアルバムは全て公開されます。)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'),
  array('未登録のユーザにプライベートアルバムアイコンを表示する','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'),
  array('ファイル名の禁止文字', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'),
  //array('アップロード写真に許可されたファイル拡張子', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'),
  array('利用可能なイメージタイプ', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'),
  array('利用可能なムービータイプ', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'),
  array('ムービープレイバック自動スタート', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'),
  array('利用可能なオーディオタイプ', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'),
  array('利用可能なドキュメントタイプ', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'),
  array('イメージのリサイズ方法','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'),
  array('ImageMagick「コンバート」ユーティリティのパス ( 例 /usr/bin/X11/ )', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'),
  //array('利用可能なイメージタイプ ( ImageMagickにのみ有効 )', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'),
  array('ImageMagickのコマンドラインオプション', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'),
  array('JPEGファイルのEXIFデータを取得する', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'),
  array('JPEGファイルのIPTCデータを取得する', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'),
  array('アルバムディレクトリ <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'),
  array('ユーザファイルのディレクトリ <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'),
  array('中間写真の接頭辞 <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'),
  array('サムネイルの接頭辞 <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'),
  array('ディレクトリのデフォルトモード', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'),
  array('ファイルのデフォルトモード', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'),

  'ユーザ設定',
  array('新しいユーザの登録を許可する', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'),
  array('未登録ユーザ ( ゲストまたは匿名 ) のアクセスを許可する', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'),
  array('ユーザ登録でメール確認が必要', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'),
  array('ユーザ登録を管理者にメール通知する', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'),
  array('ユーザ登録の自動アクティベーション', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'), 
  array('2人のユーザが同一メールアドレスを持つことを許可する', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'),
  array('ユーザアップロードの認証待ち状態を管理者に通知する', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'),
  array('ログインユーザにメンバリストの閲覧を許可する', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'),
  array('ユーザにプロフィール画面でのメールアドレス変更を許可する', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'),
  array('ユーザにパブリックギャラリーでの写真の保持を許可する', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'),
  array('一時的な利用禁止を行うまでのログイン失敗数 ( ブルートフォースアタックを避けるため )', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'),
  array('ログイン失敗後の一時的利用禁止の継続時間', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'),
  array('アルバムへのレポートを有効にする', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'), 

// custom profile fields, 
  'ユーザプロフィールのカスタムフィールド (使用しない場合は空白にしてください。) 
  経歴等の長い情報はプロフィール6に入力してください。',
  array('プロフィール1の名称', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'),
  array('プロフィール2の名称', 'user_profile2_name', 0),
  array('プロフィール3の名称', 'user_profile3_name', 0),
  array('プロフィール4の名称', 'user_profile4_name', 0),
  array('プロフィール5の名称', 'user_profile5_name', 0),
  array('プロフィール6の名称', 'user_profile6_name', 0),

  'イメージ説明のカスタムフィールド ( 使用しない場合は空白にしてください。 )',
  array('フィールド1の名称', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'),
  array('フィールド2の名称', 'user_field2_name', 0),
  array('フィールド3の名称', 'user_field3_name', 0),
  array('フィールド4の名称', 'user_field4_name', 0),

  'クッキー設定',
  array('クッキー名', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'),
  array('クッキーパス', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'),

  'メール設定  ( 通常、ここを変更する必要はありません。分からない場合は、全てを空白にしてください。 )',
  array('SMTPホスト ( 空白にした場合、sendmailが使用されます。 )', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'),
  array('SMTPユーザ名', 'smtp_username', 0),
  array('SMTPパスワード', 'smtp_password', 0),

  'ロギングおよび統計',
  array('ロギングモード <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'),
  array('eカードのログ', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'),
  array('投票統計詳細を保存','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'),
  array('ヒット統計詳細を保存','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'),

  'メンテナンス設定',
  array('デバッグモードを有効にする', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'),
  array('デバッグモードで警告を表示', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'),
  array('ギャラリーをオフラインにする', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'),
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => '送信済みeカード',
  'ecard_sender' => '送信者',
  'ecard_recipient' => '受取人',
  'ecard_date' => '送信日時',
  'ecard_display' => 'eカードの表示',
  'ecard_name' => '名前',
  'ecard_email' => 'メールアドレス',
  'ecard_ip' => 'IP #',
  'ecard_ascending' => '昇順',
  'ecard_descending' => '降順',
  'ecard_sorted' => '並び替え:',
  'ecard_by_date' => '日付',
  'ecard_by_sender_name' => '送信者名',
  'ecard_by_sender_email' => '送信者メールアドレス',
  'ecard_by_sender_ip' => '送信者IPアドレス',
  'ecard_by_recipient_name' => '受取人名',
  'ecard_by_recipient_email' => '受取人メールアドレス',
  'ecard_number' => '表示レコード %s - %s (%s 件中)',
  'ecard_goto_page' => 'ページ移動',
  'ecard_records_per_page' => '1ページ当たりのレコード数',
  'check_all' => '全てを選択',
  'uncheck_all' => 'すべての選択を解除 ',
  'ecards_delete_selected' => '選択したeカードを削除する',
  'ecards_delete_confirm' => '本当にレコードを削除してもよろしいですか? チェックボックスをチェックしてください!',
  'ecards_delete_sure' => '削除確認',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'お名前とコメントを入力してください。',
  'com_added' => 'あなたのコメントは追加されました。',
  'alb_need_title' => 'アルバム名を入力してください !',
  'no_udp_needed' => '更新は必要ありません。',
  'alb_updated' => 'アルバムが更新されました。',
  'unknown_album' => '選択したアルバムが存在しない、またはこのアルバムにアップロードする権限がありません。',
  'no_pic_uploaded' => 'ファイルはアップロードされませんでした !<br /><br />アップロードするファイルを正しく選択している場合は、サーバが</br>ファイルのアップロードを許可しているか確認してください ...',
  'err_mkdir' => 'ディレクトリ %s の作成に失敗しました !',
  'dest_dir_ro' => '対象ディレクトリ %s はスクリプトによる書込みができません !',
  'err_move' => '%s を %s に移動できません !',
  'err_fsize_too_large' => 'あなたがアップロードしたファイルのサイズは大き過ぎます ( 最大サイズは%sx%sです ) !',
  'err_imgsize_too_large' => 'あなたがアップロードしたファイルのサイズは大き過ぎます ( 最大サイズは%sKBです ) !',
  'err_invalid_img' => 'あなたがアップロードしたファイルは有効なイメージではありません !',
  'allowed_img_types' => '%s のイメージのみアップロードできます。',
  'err_insert_pic' => 'ファイル「 %s 」はアルバムに登録できません。 ',
  'upload_success' => 'あなたのファイルは正常にアップロードされました。<br /><br />管理者の承認後に表示されます。',
  'notify_admin_email_subject' => '%s - アップロード通知',
  'notify_admin_email_body' => '%s によって写真がアップロードされました。認証するには、次のリンクをクリックしてください。 %s',
  'info' => '情報',
  'com_added' => 'コメントが追加されました。',
  'alb_updated' => 'アルバムが更新されました。',
  'err_comment_empty' => 'コメントが空白です !',
  'err_invalid_fext' => '次の拡張子のファイルのみ使用できます: <br /><br />%s',
  'no_flood' => '申し訳ございません、あなたは既にこのファイルにコメントを投稿しています。<br /><br />修正したい場合は、コメントを編集してください。',
  'redirect_msg' => 'リダイレクトされました。<br /><br /><br />ページが自動的に更新されない場合は「続ける」をクリックしてください。',
  'upl_success' => 'あなたのファイルが正常に登録されました。',
  'email_comment_subject' => 'Coppermine Photo Galleryにコメントが投稿されました。',
  'email_comment_body' => 'ギャラリーにコメントが投稿されました。こちらをご覧ください:',
  'album_not_selected' => 'アルバムが選択されていません。',
  'com_author_error' => '登録済みユーザがこのニックネームを使用しています。他のニックネームを使用してください。',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'キャプション',
  'fs_pic' => 'フルサイズイメージ',
  'del_success' => '削除成功',
  'ns_pic' => 'ノーマルサイズイメージ',
  'err_del' => '削除不可',
  'thumb_pic' => 'サムネイル',
  'comment' => 'コメント',
  'im_in_alb' => 'アルバム内のイメージ',
  'alb_del_success' => 'アルバム「 %s 」が削除されました。',
  'alb_mgr' => 'アルバムマネージャー',
  'err_invalid_data' => '「 %s 」に不正なデータが発生しました。',
  'create_alb' => 'アルバム「 %s 」の作成中',
  'update_alb' => 'アルバム「 %s 」 アルバム名「 %s 」 インデックス「 %s 」を更新しています。',
  'del_pic' => 'ファイルの削除',
  'del_alb' => 'アルバムの削除',
  'del_user' => 'ユーザの削除',
  'err_unknown_user' => '選択したユーザは存在していません !',
  'err_empty_groups' => 'グループテーブルが存在していません、またはグループテーブルが空です!',
  'comment_deleted' => 'コメントが削除されました。',
  'npic' => '写真',
  'pic_mgr' => '写真マネージャー',
  'update_pic' => '写真 \'%s\' を更新中 - ファイル名: 「 %s 」 インデックス: 「 %s 」',
  'username' => 'ユーザ名',
  'anonymized_comments' => '%s 件のコメントが匿名化されました。',
  'anonymized_uploads' => '%s 件のパブリックアップロードが匿名化されました。',
  'deleted_comments' => '%s 件のコメントが削除されました。',
  'deleted_uploads' => '%s 件のパブリックアップロードが削除されました。',
  'user_deleted' => 'ユーザ %s が削除されました。',
  'activate_user' => 'ユーザの有効化',
  'user_already_active' => 'アカウントは既に有効にされています。',
  'activated' => '有効化',
  'deactivate_user' => 'ユーザのディアクティベート',
  'user_already_inactive' => 'アカウントは既に無効にされています。',
  'deactivated' => 'ディアクティベート済み',
  'reset_password' => 'パスワードのリセット',
  'password_reset' => 'パスワードのリセット: %s',
  'change_group' => '第1グループの変更',
  'change_group_to_group' => '%s から %s へ変更',
  'add_group' => '第2グループの追加',
  'add_group_to_group' => 'ユーザ追加 - ユーザ: %s → グループ: %s 現在、第1グループ: %s  第2グループ: %s のユーザです。',
  'status' => 'ステータス',
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'あなたがアクセスしようとしたeカードのデータが、あなたのメールクライアントによって破損しています。リンクが完全なものか確認してください。',
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => '本当にこのファイルを削除してもよろしいですか ? \\n同時にコメントも削除されます。',
  'del_pic' => 'この写真を削除',
  'size' => '%s x %s ピクセル',
  'views' => '%s 回',
  'slideshow' => 'スライドショー',
  'stop_slideshow' => 'スライドショーを停止',
  'view_fs' => 'クリックでフルサイズのイメージを表示',
  'edit_pic' => '説明の編集',
  'crop_pic' => 'クロップおよび回転',
  'set_player' => 'プレイヤーの変更',
);

$lang_picinfo = array(
  'title' =>'ファイル情報',
  'Filename' => 'ファイル名',
  'Album name' => 'アルバム名',
  'Rating' => 'レーティング ( 投票数 %s件 )',
  'Keywords' => 'キーワード',
  'File Size' => 'ファイルサイズ',
  'Date Added' => '追加年月日',
  'Dimensions' => 'ディメンション',
  'Displayed' => '表示',
  'URL' => 'URL',
  'Make' => '型',
  'Model' => 'モデル',
  'DateTime' => '日時',
  'DateTimeOriginal' => '撮影日時',
  'ISOSpeedRatings'=>'ISO',
  'MaxApertureValue' => '最大絞り',
  'FocalLength' => '焦点距離',
  'Comment' => 'コメント',
  'addFav'=>'お気に入りに追加',
  'addFavPhrase'=>'お気に入り',
  'remFav'=>'お気に入りから削除',
  'iptcTitle'=>'IPTCタイトル',
  'iptcCopyright'=>'IPTCコピーライト',
  'iptcKeywords'=>'IPTCキーワード',
  'iptcCategory'=>'IPTCカテゴリ',
  'iptcSubCategories'=>'IPTCサブカテゴリ',
  'ColorSpace' => 'カラースペース',
  'ExposureProgram' => '露出プログラム',
  'Flash' => 'フラッシュ',
  'MeteringMode' => '計器モード',
  'ExposureTime' => '露出時間',
  'ExposureBiasValue' => '露出バイアス',
  'ImageDescription' => ' イメージ説明',
  'Orientation' => 'オリエンテーション',
  'xResolution' => 'X 解像度',
  'yResolution' => 'Y 解像度',
  'ResolutionUnit' => '解像度ユニット',
  'Software' => 'ソフトウェア',
  'YCbCrPositioning' => '画素構成',
  'ExifOffset' => 'Exifオフセット',
  'IFD1Offset' => 'IFD1オフセット',
  'FNumber' => 'FNumber',
  'ExifVersion' => 'Exifバージョン',
  'DateTimeOriginal' => 'オリジナルの日時',
  'DateTimedigitized' => 'デジタル化した日時',
  'ComponentsConfiguration' => 'コンポーネント設定',
  'CompressedBitsPerPixel' => 'ピクセルあたりの圧縮ビット',
  'LightSource' => '光源',
  'ISOSetting' => 'ISO設定',
  'ColorMode' => 'カラーモード',
  'Quality' => '画質',
  'ImageSharpening' => 'イメージシャープネス',
  'FocusMode' => 'フォーカスモード',
  'FlashSetting' => 'フラッシュ設定',
  'ISOSelection' => 'ISO選択',
  'ImageAdjustment' => 'イメージアジャストメント',
  'Adapter' => 'アダプタ',
  'ManualFocusDistance' => 'マニュアルフォーカス距離',
  'DigitalZoom' => 'デジタルズーム',
  'AFFocusPosition' => 'AFフォーカスポジション',
  'Saturation' => '彩度',
  'NoiseReduction' => 'ノイズリダクション',
  'FlashPixVersion' => 'Flash Pixバージョン',
  'ExifImageWidth' => 'Exifイメージ幅',
  'ExifImageHeight' => 'Exifイメージ高',
  'ExifInteroperabilityOffset' => 'Exif相互接続オフセット',
  'FileSource' => 'ファイルソース',
  'SceneType' => 'シーンタイプ',
  'CustomerRender' => 'カスタマレンダ',
  'ExposureMode' => '露光モード',
  'WhiteBalance' => 'ホワイトバランス',
  'DigitalZoomRatio' => 'デジタルズームレシオ',
  'SceneCaptureMode' => 'シーンキャプチャモード',
  'GainControl' => 'ゲインコントロール',
  'Contrast' => 'コントラスト',
  'Saturation' => '彩度',
  'Sharpness' => 'シャープネス',
  'ManageExifDisplay' => 'Exif表示管理',
  'submit' => '送信',
  'success' => '情報が更新されました。',
  'details' => '詳細',
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'このコメントを編集する',
  'confirm_delete' => '本当にこのコメントを削除してもよろしいですか ?',
  'add_your_comment' => 'コメントを追加する',
  'name'=>'名前',
  'comment'=>'コメント',
  'your_name' => 'お名前',
  'report_comment_title' => 'このコメントを管理者に報告する。',
);

$lang_fullsize_popup = array(
  'click_to_close' => 'イメージのクリックでウインドウを閉じる',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'eカードの送信',
  'invalid_email' => '<b>警告</b> : メールアドレスが正しくありません !',
  'ecard_title' => '%s のeカード',
  'error_not_image' => 'イメージ以外はeカードとして送信できません。',
  'view_ecard' => 'eカードが正常に表示されない場合の代わりのリンク',
  'view_ecard' => 'eカードが正常に表示されない場合は、このリンクをクリックしてください。',
  'view_more_pics' => 'もっと写真を見る場合は、このリンクをクリックしてください !',
  'send_success' => 'eカードが送信されました。',
  'send_failed' => '申し訳ございません、eカードを送信できませんでした ...',
  'from' => 'From',
  'your_name' => '名前',
  'your_email' => 'メールアドレス',
  'to' => 'To',
  'rcpt_name' => '受取人の名前',
  'rcpt_email' => '受取人のメールアドレス',
  'greetings' => 'あいさつ',
  'message' => 'メッセージ',
  'ecards_footer' => '%s によりIPアドレス %s より %s ( ギャラリー時間 ) に送信されました。',
  'preview' => 'eカードのプレビュー',
  'preview_button' => 'プレビュー',
  'submit_button' => 'eカードの送信',
  'preview_view_ecard' => 'これは、eカードが生成された後の代替的なリンクとなります。プレビューでは動作しません。',
);

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => '管理者に報告',
  'invalid_email' => '<b>警告</b> : メールアドレスが正しくありません!',
  'report_subject' => '%s によるレポート / ギャラリー: %s',
  'view_report' => 'レポートが正常に表示されない場合の代替リンク',
  'view_report_plaintext' => 'レポートを閲覧するには、このURLをブラウザのアドレスバーにコピー＆ペーストしてください:',
  'view_more_pics' => 'ギャラリー',
  'send_success' => 'あなたのレポートが送信されました。',
  'send_failed' => '申し訳ございません。サーバはあなたのリクエストを送信できません ...',
  'from' => 'From',
  'your_name' => 'あなたの名前',
  'your_email' => 'あなたのメールアドレス',
  'to' => 'To',
  'administrator' => '管理者/モデレータ',
  'subject' => '題名',
  'comment_field_name' => '「 %s 」によるコメントのリポート',
  'reason' => '理由',
  'message' => 'メッセージ',
  'report_footer' => '送信者: %s IPアドレス: %s ギャラリー時間: %s',
  'obscene' => '節度を欠いた',
  'offensive' => '攻撃',
  'misplaced' => 'オフ・トピック/場所違い',
  'missing' => '不明',
  'issue' => 'エラー/閲覧不可',
  'other' => '他',
  'refers_to' => 'ファイルレポート参照',
  'reasons_list_heading' => 'レポートの理由:',
  'no_reason_given' => '理由が与えられていません。',
  'go_comment' => 'コメントへ移動',
  'view_comment' => 'コメントのフルリポートを表示',
  'type_file' => 'ファイル',
  'type_comment' => 'コメント',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'ファイル情報',
  'album' => 'アルバム',
  'title' => '写真名',
  'filename' => 'ファイル名',
  'desc' => '説明',
  'keywords' => 'キーワード',
  'new_keyword' => '新しいキーワード',
  'new_keywords' => '新しいキーワードが見つかりました。',
  'existing_keyword' => '存在するキーワード',
  'pic_info_str' => '%s &times; %s - %s KB - 閲覧回数 %s - 投票件数 %s',
  'approve' => 'ファイルの承認',
  'postpone_app' => '承認の延期',
  'del_pic' => 'ファイルの削除',
  'del_all' => '全てのファイルを削除',
  'read_exif' => 'EXIF情報の再取得',
  'reset_view_count' => '閲覧カウンタをリセット',
  'reset_all_view_count' => '全ての閲覧カウンタをリセット',
  'reset_votes' => '投票をリセット',
  'reset_all_votes' => '全ての投票をリセット',
  'del_comm' => 'コメントの削除',
  'del_all_comm' => '全てのコメントを削除',
  'upl_approval' => 'アップロード承認',
  'edit_pics' => 'ファイルの編集',
  'see_next' => '前へ',
  'see_prev' => '次へ',
  'n_pic' => 'ファイル数 %s',
  'n_of_pic_to_disp' => 'ファイル表示数',
  'apply' => '修正の適用',
  'crop_title' => 'Coppermineピクチャーエディタ',
  'preview' => 'プレビュー',
  'save' => '写真の保存',
  'save_thumb' =>'サムネイルとして保存',
  'gallery_icon' => 'この画像をマイアイコンにする',
  'sel_on_img' =>'選択はイメージ内で行ってください!',
  'album_properties' =>'アルバム属性',
  'parent_category' =>'親カテゴリ',
  'thumbnail_view' =>'サムネイルビュー',
  'select_unselect' =>'全てを選択/選択解除',
  'file_exists' => "ファイル「 %s 」は既に登録されています。",
  'rename_failed' => "'%s' から '%s へのリネームが失敗しました。",
  'src_file_missing' => "ソースファイル「 %s 」が見つかりません。",
  'mime_conv' => "ファイルを「 %s 」から「 %s 」にコンバートできません。",
  'forb_ext' => '使用が許可されていないファイル拡張子です。',
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'よくある質問と答え ',
  'toc' => '目次',
  'question' => '質問: ',
  'answer' => '答え: ', 
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '一般的なFAQ',
  array('なぜユーザ登録する必要がありますか?', 'ユーザ登録の要否は管理者によって決定されます。ユーザ登録することで、メンバーはファイルのアップロード、お気に入りの追加、写真の評価、コメントの投稿等の機能を使用することができます。', 'allow_user_registration', '0'),
  array('ユーザ登録方法は?', '&quot;ユーザ登録&quot;にアクセスして必須項目フィールドに必要事項を入力してください(必要であれば任意項目も)。<br />管理者がメール承認を利用可にしている場合は個人情報を送信した後、登録メールアドレス宛にアカウントのアクティベートに関する説明が記載されたメールが送信されます。ログインするためにはアカウントのアクティベートを行ってください。', 'allow_user_registration', '1'),
  array('ログインの方法は?', '&quot;ログイン&quot;画面にアクセスしてユーザ名とパスワードを入力してください。&quot;次回からユーザ名・パスワードの入力を省略&quot;をチェックすると以後自動的にログインすることができます。 <br /><b>重要:クッキーは利用可にしてください。&quot;次回からユーザ名・パスワードの入力を省略&quot;を使用する場合は、このサイト発行のクッキーを削除しないでください。</b>', 'offline', 0),
  array('なぜログイン出来ないのですか?', 'ユーザ登録後に送信されるメールに記載されていたリンクをクリックしましたか? リンクをクリックすることでアカウントをアクティベートすることができます。他のログインに関するトラブルは管理者にお問合せください。', 'offline', 0),
  array('パスワードを忘れたら?', 'このサイトに&quot;パスワードを忘れました&quot;リンクがある場合はお使いください。その他の場合はサイト管理者に新しいパスワードの発行を依頼してください。', 'offline', 0),
  // array('普段使用しているメールアドレスを変更したら?', 'ログイン後、&quot;マイプロフィール&quot;で変更してください。', 'offline', 0),
  array('&quot;お気に入り&quot;に写真を保存する方法は?', '写真をクリックした後、&quot;写真情報&quot;リンク(<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />)をクリックしてください。写真情報の下方にある&quot;お気に入りに追加&quot;をクリックしてください。<br />管理者には&quot;写真情報&quot;がデフォルトで表示されています。<br /><b>重要:クッキーを使用可にして、このサイト発行のクッキーを削除しないでください。', 'offline', 0),
  array('写真の評価方法は?', '写真のサムネイルをクリックして、下方に表示されるレーティングを選択してください。', 'offline', 0),
  array('写真へのコメント投稿方法は?', '写真のサムネイルをクリックして、下方に表示されるコメント欄に投稿してください。', 'offline', 0),
  array('写真のアップロード方法は?', '&quot;ファイルのアップロード&quot;にアクセスして、ファイルをアップロードしたいアルバムを選択してください。&quot;参照&quot;をクリックした後、アップロードしたいファイルを選択して&quot;開く&quot;をクリックします。(必要に応じてタイトル、説明文を付加えてください) 最後に&quot;ファイルのアップロード&quot;をクリックしてください。', 'allow_private_albums', 0),
  array('どこに写真をアップロードすれば良いですか?', '&quot;マイギャラリー&quot;内のアルバムに写真をアップロードすることができます。管理者の設定により、メインギャラリー内のアルバムに写真をアップロードすることもできます。', 'allow_private_albums', 0),
  array('どのような種類とサイズの写真をアップロードできますか?', 'アップロード出来るサイズと種類(jpg,gif,等)は管理者により決定されます。', 'offline', 0),
  array('&quot;マイギャラリー&quot;内のアルバム作成・リネーム・削除方法は?', 'まず、&quot;管理者モード&quot;にしてください。<br />&quot;アルバム&quot;にアクセスして&quot;新規作成&quot;をクリックしてください。 &quot;新しいアルバム&quot;を好きな名称に変更してください。<br />ギャラリー内の全てのアルバムの名称を変更することができます。<br />&quot;更新の適用&quot;をクリックしてください。', 'allow_private_albums', 0),
  array('マイアルバムの修正および閲覧の制限方法は?', 'まず、&quot;管理者モード&quot;にしてください。<br />&quot;アルバムの更新&quot;バーにある&quot;マイアルバムの修正&quot;にアクセスして、修正したいアルバムを選択してください。<br />ここでアルバム名、説明、サムネイル、閲覧制限、コメント/レーティングのパーミッションを変更することができます。<br />&quot;アルバムの更新&quot;をクリックしてください。', 'allow_private_albums', 0),
  array('他のユーザのギャラリーを閲覧する方法は?', '&quot;アルバムリスト&quot;にアクセスして、&quot;ユーザギャラリー&quot;を選択してください。', 'allow_private_albums', 0),
  array('クッキーとは?', 'クッキーは、ウェブサイトからあなたのコンピュータに保存されるプレインテキストのデータです。<br />通常、クッキーはユーザがサイトに戻って来た時に、再度ログインしなくても済むように利用されます。また、他の多くの役割を持っています。', 'offline', 0),
  array('このプログラムの入手方法は?', 'Coppermineは、GNU GPLによりリリースされたフリーのマルチメディアギャラリーです。Coppermineは、多機能なシステムであり、様々なプラットフォームに移植されています。詳細情報の閲覧、ダウンロードは<a href="http://coppermine-gallery.net/">Coppermineホームページ</a>にアクセスして行ってください。', 'offline', 0),

  'サイト運用',
  array('&quot;アルバムリスト&quot;とは?', 'アルバムリストでは、ギャラリー全てをそれぞれのカテゴリへのリンクと共に表示します。サムネイルは、カテゴリへリンクされています。', 'offline', 0),
  array('&quot;マイギャラリー&quot;とは?', 'マイギャラリーでは、ユーザが自身のギャラリーを作成することができます。ユーザは、写真のアップロードと同様に、アルバムの追加、削除、修正を行うことができます。', 'allow_private_albums', 0),
  array('&quot;管理者モード&quot;と&quot;ユーザモード&quot;の違いは?', '管理者モードでは、ユーザが自分のギャラリーを(管理者が許可している場合は他の人のギャラリーも)修正することができます。', 'allow_private_albums', 0),
  array('&quot;ファイルのアップロード&quot;とは?', 'ユーザは自分または管理者が選択したギャラリーに写真をアップロードすることができます。 (サイズと種類は管理者により設定されます)', 'allow_private_albums', 0),
  array('&quot;最新アップロード&quot;とは?', '最新アップロードでは、サイトにアップロードされた直近のファイルが表示されます。', 'offline', 0),
  array('&quot;最新コメント&quot;とは?', '最新コメントでは、写真に投稿された直近のコメントが表示されます。', 'offline', 0),
  array('&quot;閲覧最多&quot;とは?', '閲覧最多では、ログインの有無に係わらず全ユーザから最も閲覧された写真が表示されます。', 'offline', 0),
  array('&quot;トップレート&quot;とは?', 'トップレートでは、ユーザによりレーティングされたトップレートの写真が、平均レーティングと共に表示されます。(例: 5名のユーザが<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />のレーティングを行った場合、写真の平均レーティングは<img src="images/rating3.gif" width="65" height="14" border="0" alt="" />となります。5名のユーザが1から5のレーティングを行った場合(1,2,3,4,5)、平均レーティングは<img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> になります。)<br />レーティングの範囲は、<img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (最高) から <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (最低)の間です。', 'offline', 0),
  array('&quot;お気に入り&quot;とは?', 'お気に入りでは、お気に入りの写真情報を、あなたのコンピュータにクッキーで保存します。', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'パスワードリマインダ', 
  'err_already_logged_in' => '既にログインしています !',
  'enter_username_email' => 'ユーザ名またはメールアドレスを入力してください',
  'submit' => 'go',
  'failed_sending_email' => 'パスワードリマインダによるメールは送信できません!',
  'email_sent' => 'ユーザ名とパスワードを記載したメールが %s 宛に送信されました。',
  'err_unk_user' => '選択したユーザは登録されていません!',
  'passwd_reminder_subject' => '%s - パスワードリマインダー',
  'passwd_reminder_body' => 'ログインデータが請求されました:
ユーザ名: %s
パスワード: %s
ログインはこちら %s ',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'グループ名',
  'permissions' => 'パーミッション',
  'public_albums' => 'パブリックアルバムアップロード',
  'personal_gallery' => 'パーソナルギャラリー',
  'upload_method' => 'アップロード方法',
  'disk_quota' => 'ディスク容量',
  'rating' => 'レーティング',
  'ecards' => 'Eカード',
  'comments' => 'コメント',
  'allowed' => '許可',
  'approval' => '承認',
  'boxes_number' => 'ボックスNo.',
  'variable' => '変数',
  'fixed' => '固定',
  'apply' => '更新の適用',
  'create_new_group' => '新規グループの作成',
  'del_groups' => '選択したグループの削除',
  'confirm_del' => '警告、グループを削除した場合、グループに属していたユーザは\'Registered\'グループに移動されます !\n\n処理を続けますか ?',
  'title' => 'ユーザグループの管理',
  'num_file_upload'=>'ファイルアップロードボックスの最大数',
  'num_URI_upload'=>'URLアップロードボックスの最大数',
  'reset_to_default' => 'デフォルト名 (%s) のリセット - 推奨!',
  'error_group_empty' => 'グループテーブルが空です!<br /><br />デフォルトグループが作成されました。このページをリロードしてください。',
  'explain_greyed_out_title' => 'なぜこの列がグレーになっていますか?',
  'explain_guests_greyed_out_text' => '設定ページで「未登録ユーザ ( ゲストまたは匿名 )」オプションを「No」に設定したため、あなたはグループの属性を変更することはできません。全てのゲスト ( %s のメンバー) は、ログイン以外の処理を行うことができません。従ってグループ設定は適用されません。',
  'explain_banned_greyed_out_text' => 'メンバーに属しているため、あなたはグループ %s の属性を変更することはできません。',
  'group_assigned_album' => '割り当てられたアルバム',
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'ようこそ !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '本当にこのアルバムを削除してもよろしいですか ? \\n同時に全ての写真とコメントは削除されます。',
  'delete' => '削除',
  'modify' => 'プロパティ',
  'edit_pics' => 'ファイルの編集',
);

$lang_list_categories = array(
  'home' => 'Home',
  'stat1' => 'カテゴリ数:<b>[cat]</b>&nbsp;&nbsp;&nbsp;アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;コメント数:<b>[comments]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>',
  'stat2' => 'アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>',
  'xx_s_gallery' => '%sのギャラリー',
  'stat3' => 'アルバム数:<b>[albums]</b>&nbsp;&nbsp;&nbsp;写真枚数:<b>[pictures]</b>&nbsp;&nbsp;&nbsp;コメント数:<b>[comments]</b>&nbsp;&nbsp;&nbsp;閲覧回数:<b>[views]</b>'
);

$lang_list_users = array(
  'user_list' => 'ユーザリスト',
  'no_user_gal' => 'ユーザギャラリーはありません。',
  'n_albums' => 'アルバム数 %s',
  'n_pics' => 'ファイル数 %s'
);

$lang_list_albums = array(
  'n_pictures' => 'ファイル数:%s',
  'last_added' => '、最終追加日:%s',
  'n_link_pictures' => 'リンクファイル数:%s',
  'total_pictures' => '合計ファイル数:%s',
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'キーワードの管理',
  'edit' => '編集',
  'delete' => '削除',
  'search' => '検索',
  'keyword_test_search' => '新しいウインドウで %s を検索',
  'keyword_del' => 'キーワード %s の削除',
  'confirm_delete' => '本当にキーワード %s をギャラリー全てから削除してもよろしいですか?',  // js-alert
  'change_keyword' => 'キーワードの変更',
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'ログイン',
  'enter_login_pswd' => 'ユーザ名とパスワードを入力してください。',
  'username' => 'ユーザ名',
  'password' => 'パスワード',
  'remember_me' => '次回からユーザ名・パスワードの入力を省略',
  'welcome' => 'ようこそ %s さん...',
  'err_login' => '*** ログインできませんでした。再度ログインしてください ***',
  'err_already_logged_in' => '既にログインしています !',
  'forgot_password_link' => 'パスワードを忘れました。',
  'cookie_warning' => '警告: あなたのブラウザはスクリプトのクッキーを許可していません。',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'ログアウト',
  'bye' => '%sさん、さようなら...',
  'err_not_loged_in' => 'ログインしていません !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => '閉じる',
  'submit' => 'OK',
  'up' => '1レベル上へ',
  'current_path' => 'カレントパス',
  'select_directory' => 'ディレクトリを選択してください。',
  'click_to_close' => 'ウインドウを閉じるにはイメージをクリックしてください。',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'アルバムの更新 %s',
  'general_settings' => '一般設定',
  'alb_title' => 'アルバム名',
  'alb_cat' => 'カテゴリ',
  'alb_desc' => '説明',
  'alb_keyword' => 'アルバムキーワード',
  'alb_thumb' => 'サムネイル',
  'alb_perm' => 'このアルバムに対するパーミッション',
  'can_view' => 'アルバム閲覧可能',
  'can_upload' => 'ビジターは写真をアップロード出来る',
  'can_post_comments' => 'ビジターはコメントを投稿できる',
  'can_rate' => 'ビジターは写真を評価出来る',
  'user_gal' => 'ユーザギャラリー',
  'no_cat' => '* カテゴリ無し *',
  'alb_empty' => 'アルバムには何も入っていません',
  'last_uploaded' => '最新アップロード',
  'public_alb' => '全員 ( パブリックアルバム )',
  'me_only' => '私のみ',
  'owner_only' => 'アルバムの所有者 (%s) のみ',
  'groupp_only' => '%s グループメンバーのみ',
  'err_no_alb_to_modify' => '修正できるアルバムがデータベースにありません。',
  'update' => 'アルバムの更新',
  'reset_album' => 'アルバムのリセット',
  'reset_views' => '%s の閲覧カウンタをゼロにリセットする。',
  'reset_rating' => '%s の全てのファイルのレーティングをリセットする',
  'delete_comments' => '%s の全てのコメントを削除する',
  'delete_files' => '%s完全%s %s 内の全てのファイルを削除する',
  'views' => '閲覧',
  'votes' => '投票',
  'comments' => 'コメント',
  'files' => 'ファイル',
  'submit_reset' => '変更を送信',
  'reset_views_confirm' => '実行します',
  'notice1' => '(*) %sグループ%s 設定による',
  'alb_password' => 'アルバムパスワード',
  'alb_password_hint' => 'アルバムパスワードヒント',
  'edit_files' =>'ファイルの編集',
  'parent_category' =>'親カテゴリ',
  'thumbnail_view' =>'サムネイルビュー',
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP情報',
  'explanation' => 'この内容はPHP関数<a href="http://www.php.net/phpinfo">phpinfo()</a>によって生成され、Coppermine内に表示されているものです。 ( 右側の余白をトリミングしています。)',
  'no_link' => '他の人にphpinfoを見られることでセキュリティ上のリスクが生じます。このページは管理者としてログインした時のみ閲覧することができます。このページへのリンクを他のページに張っても、管理者としてログインしない限りアクセスは拒否されます。',
);

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'ピクチャーマネージャー',
  'select_album' => 'アルバムの選択',
  'delete' => '削除',
  'confirm_delete1' => '本当のこの写真を削除してもよろしいですか?',
  'confirm_delete2' => '\n写真が完全に削除されました。',
  'apply_modifs' => '修正の適用',
  'confirm_modifs' => '修正の確認',
  'pic_need_name' => '写真名をつける必要があります!',
  'no_change' => 'あなたは変更を行っていません!',
  'no_album' => '* アルバム無し *',
  'explanation_header' => '特別ソート順では、管理者が「ファイルのデフォルトのソート順」設定を「ポジションの昇順で並び替え」または',
  'explanation1' => '「ポジションの降順で並び替え」( 他のソートオプションを選択していないユーザの全体的な設定 ) に',
  'explanation2' => '設定した場合のみ、ユーザが「ポジションの昇順で並び替え」または「ポジションの降順で並び替え」選択したものがアカウントに取り込まれます。',
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => '本当にこのプラグインをアンインストールしてもよろしいですか',
  'confirm_delete' => '本当にこのプラグインを削除してもよろしいですか',
  'pmgr' => 'プラグインマネージャー',
  'name' => '名称',
  'author' => '作者',
  'desc' => '説明',
  'vers' => 'v',
  'i_plugins' => 'インストール済みプラグイン',
  'n_plugins' => 'プラグインがインストールされていません。',
  'none_installed' => '未インストール',
  'operation' => '操作',
  'not_plugin_package' => 'アップロードされたファイルはプラグインパッケージではありません。',
  'copy_error' => 'プラグインフォルダへのパッケージのコピーにエラーが発生しました。',
  'upload' => 'アップロード',
  'configure_plugin' => 'プラグインの設定',
  'cleanup_plugin' => 'プラグインのクリーンアップ',
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => '申し訳ございません、あなたは既にこのファイルを評価しています。',
  'rate_ok' => 'あなたの投票は受理されました。',
  'forbidden' => '自分の写真を評価することはできません。',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
{SITE_NAME}の管理者は、一般的に好ましくない投稿を出来るだけ速やかに削除するよう試みますが、全ての投稿を閲覧することは不可能です。従って、このサイトに対する全投稿の見解が投稿者によるものであり、管理者やウェブマスターのもので無く ( これらの人々の投稿は除く )、管理者やウェブマスターに投稿の責任が無いことをあなたは認めます。
<br />
<br />
あなたは、公序良俗に反する投稿や、個人への誹謗中傷の投稿、性的な投稿、その他法に反する投稿をしない事に同意します。
あなたは、{SITE_NAME}の管理者、ウェブマスター、モデレーターがいかなる時も投稿内容を編集・削除する権利を有することに同意します。あなたは、ユーザとしてあなたが投稿した情報がデータベースに保存されることに同意します。この情報は、あなたの同意無しに管理者、ウェブマスターより第三者に開示されることはありませんが、データが流出する恐れのあるハッキング等の行為に対して管理者、ウェブマスターは責任を負うことはありません。
<br />
<br />
このサイトでは、あなたのコンピュータに情報を保存するためにクッキーを使用します。クッキーはあなたの閲覧を快適にするためだけに使用されます。メールアドレスは、あなたの登録に関する詳細およびパスワードの認証のためだけに使用されます。 
<br />
<br />
「同意します」をクリックすることで、あなたは上記の利用規約に同意します。
EOT;

$lang_register_php = array(
  'page_title' => 'ユーザ登録',
  'term_cond' => '利用規約',
  'i_agree' => '同意します',
  'submit' => '登録実行',
  'err_user_exists' => '入力されたユーザ名は既に登録されています、別のユーザ名を入力してください。',
  'err_password_mismatch' => 'パスワードが一致しません、再度入力してください。',
  'err_uname_short' => 'ユーザ名は2文字以上にしてください。',
  'err_password_short' => 'パスワードは2文字以上にしてください。',
  'err_uname_pass_diff' => 'ユーザ名とパスワードは異なる必要があります。',
  'err_invalid_email' => 'メールアドレスが正しくありません。',
  'err_duplicate_email' => '他のユーザが既に同じメールアドレスを登録しています。',
  'enter_info' => '登録情報を入力してください。',
  'required_info' => '必須項目',
  'optional_info' => '任意項目',
  'username' => 'ユーザ名',
  'password' => 'パスワード',
  'password_again' => 'パスワードをもう一度',
  'email' => 'メールアドレス',
  'location' => '居住地',
  'interests' => '興味のあること',
  'website' => 'ホームページ',
  'occupation' => '職業',
  'error' => 'エラー',
  'confirm_email_subject' => '%s - 登録確認',
  'information' => '情報',
  'failed_sending_email' => '登録確認メールが送信できません !',
  'thank_you' => 'ご登録ありがとうございます。<br /><br />アカウントのアクティベートに関する情報が登録されたメールアドレス宛に送信されました。',
  'acct_created' => 'あなたのアカウントが作成されました。ユーザ名とパスワードでログインできます。',
  'acct_active' => 'あなたのアカウントがアクティベートされました。ユーザ名とパスワードでログインできます。',
  'acct_already_act' => 'あなたのアカウントは既にアクティベートされています !',
  'acct_act_failed' => 'このアカウントはアクティベートできません !',
  'err_unk_user' => '選択したユーザは存在しません !',
  'x_s_profile' => '%s のプロフィール',
  'group' => 'グループ',
  'reg_date' => '登録年月日',
  'disk_usage' => 'ディスク使用量',
  'change_pass' => 'パスワードの変更',
  'current_pass' => '現在のパスワード',
  'new_pass' => '新しいパスワード',
  'new_pass_again' => '新しいパスワードをもう一度',
  'err_curr_pass' => '現在のパスワードが正しくありません。',
  'apply_modif' => '更新の適用',
  'change_pass' => 'パスワードの変更',
  'update_success' => 'プロフィールが更新されました。',
  'pass_chg_success' => 'パスワードが変更されました。',
  'pass_chg_error' => 'パスワードが変更されませんでした。',
  'notify_admin_email_subject' => '%s - 登録通知',
  'last_uploads' => '最新アップロードファイル<br />全てのアップロードファイルを見るにはクリックしてください。',
  'last_comments' => '最新コメント<br />全てのコメントを見るにはクリックしてください。',
  'notify_admin_email_body' => 'ギャラリーにユーザ名 "%s" の新しいユーザが登録されました',
  'pic_count' => 'アップロードファイル',
  'notify_admin_request_email_subject' => '%s - 登録リクエスト',
  'thank_you_admin_activation' => 'ありがとうございます。<br /><br />あなたのアカウントアクティベートに関するリクエストが管理者に送信されました。認証された場合、あなたのメールアドレス宛にメールが送信されます。',
  'acct_active_admin_activation' => 'アカウントがアクティベートされ、ユーザにメールが送信されました。',
  'notify_user_email_subject' => '%s - アクティベート通知',
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME} へのご登録ありがとうございます。

あなたのユーザ名は "{USER_NAME}" です。
あなたのパスワードは "{PASSWORD}" です。

アカウントのアクティベートをするには下記のリンクをクリックまたは
ブラウザのアドレス欄にコピーしてください。

{ACT_LINK}管理者

{SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
新しいユーザ「 {USER_NAME} 」がギャラリーに登録されました。

アカウントをアクティベートするには、下記のリンクをクリックするか、ブラウザにコピー＆ペーストしてください。

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
あなたのアカウントがアクティベートされました。

ユーザ名「 {USER_NAME} 」を使用して <a href="{SITE_LINK}">{SITE_LINK}</a> にログインすることができます。


{SITE_NAME} 管理者

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'コメントのレビュー',
  'no_comment' => 'レビューするコメントはありません。',
  'n_comm_del' => '%s件のコメントが削除されました。',
  'n_comm_disp' => '表示するコメント数',
  'see_prev' => '前へ',
  'see_next' => '次へ',
  'del_comm' => '選択したコメントを削除',
  'user_name' => '名前',
  'date' => '登録日時',
  'comment' => 'コメント',
  'file' => 'ファイル',
  'name_a' => 'ユーザ名昇順',
  'name_d' => 'ユーザ名降順',
  'date_a' => '日付昇順',
  'date_d' => '日付降順',
  'comment_a' => 'コメントメッセージ昇順',
  'comment_d' => 'コメントメッセージ降順',
  'file_a' => 'ファイル昇順',
  'file_d' => 'ファイル降順',
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'ファイルコレクションの検索',
  'submit_search' => '検索',
  'keyword_list_title' => 'キーワードリスト',
  'keyword_msg' => '上記のリストは全てを含んでいません。写真のタイトルまたは説明を含んでいません。フルテキスト検索をお試しください。', 
  'edit_keywords' => 'キーワードの編集',
  'search in' => '検索対象:',
  'ip_address' => 'IPアドレス',
  'fields' => '検索対象',
  'age' => 'エイジ',
  'newer_than' => '新しい',
  'older_than' => '古い',
  'days' => '日',
  'all_words' => 'すべて含む (AND)',
  'any_words' => '少なくとも一つを含む (OR)',
);

$lang_adv_opts = array(
  'title' => 'タイトル',
  'caption' => 'キャプション',
  'keywords' => 'キーワード',
  'owner_name' => '所有者名',
  'filename' => 'ファイル名',
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '新しいファイルの検索',
  'select_dir' => 'ディレクトリ選択',
  'select_dir_msg' => 'ここではFTPによりサーバにアップロードしたファイルをアルバムに一括登録します。<br /><br />ファイルをアップロードしたディレクトリを選択してください。',
  'no_pic_to_add' => '追加するファイルはありません。',
  'need_one_album' => 'この機能を使うためには1つ以上のアルバムが必要です。',
  'warning' => '警告',
  'change_perm' => 'スクリプトがこのディレクトリに書込めませんでした。ファイルを追加する前にディレクトリのパーミッションモードを755または777に変更する必要があります !',
  'target_album' => '<b>「</b>%s<b>」内のファイルを</b>%s<b>に追加する</b>',
  'folder' => 'フォルダ',
  'image' => 'イメージ',
  'album' => 'アルバム',
  'result' => '結果',
  'dir_ro' => '書込み権がありません。',
  'dir_cant_read' => '読取り権がありません。',
  'insert' => '新規ファイルのギャラリーへの追加',
  'list_new_pic' => '新規ファイル一覧',
  'insert_selected' => '選択したファイルの追加',
  'no_pic_found' => '新しいファイルは見つかりませんでした。',
  'be_patient' => '暫くお待ちください。',
  'no_album' => 'アルバムが選択されていません',
  'result_icon' => '詳細表示またはリロードをするには、ここをクリック', 
  'notes' =>  '<ul>'.
                         '<li><b>OK</b> : 正常にファイルが追加されました。'.
                         '<li><b>DP</b> : ファイルが重複して既にデータベースに登録されています。'.
                         '<li><b>PB</b> : ファイルを追加できませんでした、設定およびファイルが登録されるディレクトリのパーミッションを確認してください。'.
                         '<li><b>NA</b> : ファイルを追加するアルバムが選択されていません。\'<a href="javascript:history.back(1)">戻る</a>\'をクリックしてアルバムを選択してください。アルバムを作成していない場合は、<a href="albmgr.php">最初に作成してください。</a></li>'.
                          '<li>OK、DP、PBサインのいずれも表示されなかった場合は、PHPエラーを表示するために破損した写真をクリックしてください。'.
                         '<li>タイムアウトが発生した場合、ブラウザの更新ボタンをクリックしてください。'.
                         '</ul>',
  'select_album' => 'アルバムを選択してください',
  'check_all' => '全てを選択',
  'uncheck_all' => '全てを選択解除',
  'no_folders' => 'まだ「アルバム」フォルダ内にフォルダがありません。少なくとも1つのカスタムフォルダを「アルバム」フォルダに作成して、そのフォルダにファイルをアップロードしてください。httpアップロードおよび内部的な目的に使用されますので「userpics」フォルダおよび「edit」フォルダにアップロードしないでください。',
   'albums_no_category' => 'カテゴリ無しのアルバム', // album pulldown mod, added by frogfoot
  'personal_albums' => '* パーソナルアルバム', // album pulldown mod, added by frogfoot
  'browse_batch_add' => '閲覧可能インターフェース ( 推奨 )',
  'edit_pics' => 'ファイルの編集',
  'edit_properties' => 'アルバム属性',
  'view_thumbs' => 'サムネイルビュー',
);

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'このカラムを表示/非表示',
  'vote' => '投票詳細',
  'hits' => 'ヒット詳細',
  'stats' => '投票統計',
  'sdate' => '日付',
  'rating' => 'レーティング',
  'search_phrase' => '検索キーワード',
  'referer' => 'リファラ',
  'browser' => 'ブラウザ',
  'os' => 'オペレーティングシステム',
  'ip' => 'IP',
  'sort_by_xxx' => '%s による並び替え',
  'ascending' => '昇順',
  'descending' => '降順',
  'internal' => 'インターナショナル',
  'close' => '閉じる',
  'hide_internal_referers' => 'インターナショナルリファラを隠す',
  'date_display' => '日付表示',
  'submit' => '送信 / リフレッシュ',
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'ファイルのアップロード',
  'custom_title' => 'カスタマイズ・リクエストフォーム',
  'cust_instr_1' => 'アップロードボックス数を選択することができます。下記の制限値以上に選択することはできません。',
  'cust_instr_2' => 'ボックス数リクエスト',
  'cust_instr_3' => 'ファイルアップロードボックス: %s',
  'cust_instr_4' => 'URI/URL アップロードボックス: %s',
  'cust_instr_5' => 'URI/URL アップロードボックス:',
  'cust_instr_6' => 'ファイルアップロードボックス:',
  'cust_instr_7' => '作成したいそれぞれの種類のアップロードボックス数を入力してください。その後「続ける」をクリックしてください。 ',
  'reg_instr_1' => 'フォームの作成に間違いがあります。',
  'reg_instr_2' => '下記のアップロードボックスを使用してファイルをアップロードすることができます。サーバにアップロードするファイルのサイズは、%s KBを超えないようにしてください。ZIPファイルは「ファイルのアップロード」および「URI/URLのアップロード」セクションより圧縮されたままアップロードされます。',
  'reg_instr_3' => 'ZIP圧縮されたファイルまたは圧縮されたアーカイブを展開したい場合は、ZIPファイルの展開アップロード」を使用してください。',
  'reg_instr_4' => 'URI/URLアップロードセクションを使用するときは、http://www.mysite.com/images/example.jpg のようにファイルのパスを入力してください。',
  'reg_instr_5' => 'フォームの入力完了後、「続ける」をクリックしてください。',
  'reg_instr_6' => 'ZIPファイルの展開アップロード:',
  'reg_instr_7' => 'ファイルのアップロード:',
  'reg_instr_8' => 'URI/URLアップロード:',
  'error_report' => 'エラーレポート',
  'error_instr' => '次のアップロードファイルにエラーが発生しました:',
  'file_name_url' => 'ファイル名/URL',
  'error_message' => 'エラーメッセージ',
  'no_post' => 'ファイルの投稿はありません。',
  'forb_ext' => '許可されていないファイル拡張子です。',
  'exc_php_ini' => 'php.iniで許可されているファイルサイズを超えました。',
  'exc_file_size' => 'CPGで許可されたファイルサイズを超えました。', 
  'partial_upload' => '一部のみアップロードされました。',
  'no_upload' => 'アップロードされませんでした。',
  'unknown_code' => '不明なPHPアップロードエラーコードです。',
  'no_temp_name' => 'アップロードされませんでした - テンポラリ名称がありません。',
  'no_file_size' => 'データがありません。',
  'impossible' => '移動できません。',
  'not_image' => 'イメージがありません。',
  'not_GD' => 'GD extensionではありません。',
  'pixel_allowance' => '許可されたピクセルの範囲を超えました。',
  'incorrect_prefix' => '間違ったURI/URL接頭辞です。',
  'could_not_open_URI' => 'URIをオープンできません。',
  'unsafe_URI' => '安全性が検証できません。',
  'meta_data_failure' => 'メタデータエラー',
  'http_401' => '401 Unauthorized',
  'http_402' => '402 Payment Required',
  'http_403' => '403 Forbidden',
  'http_404' => '404 Not Found',
  'http_500' => '500 Internal Server Error',
  'http_503' => '503 Service Unavailable',
  'MIME_extraction_failure' => 'MIMEタイプを決定できません。',
  'MIME_type_unknown' => '不明なMIMEタイプです。',
  'cant_create_write' => '書込みファイルを作成できません。',
  'not_writable' => '書込みファイルに書き込めません。',
  'cant_read_URI' => 'URI/URLを読み込めません。',
  'cant_open_write_file' => 'URI書込みファイルをオープンできません。',
  'cant_write_write_file' => 'URI書込みファイルに書き込めません。',
  'cant_unzip' => 'ZIPファイルの展開ができません。',
  'unknown' => '不明なエラー',
  'succ' => 'アップロード完了',
  'success' => '%s のファイルアップロードが正常に完了しました。',
  'add' => 'アルバムにファイルを追加する場合は「続ける」をクリックしてください。',
  'failure' => 'アップロードエラー',
  'f_info' => 'ファイル情報',
  'no_place' => 'ファイルはアップロードされませんでした。',
  'yes_place' => 'ファイルが正常にアップロードされました。',
  'max_fsize' => 'アップロード可能な最大ファイルサイズは %sKB です。',
  'album' => 'アルバム',
  'picture' => 'ファイル',
  'pic_title' => 'ファイル名',
  'description' => 'ファイルの説明',
  'keywords' => 'キーワード (半角スペースで区切る)',
  'keywords_sel' =>'キーワードの選択',
  'err_no_alb_uploadables' => '申し訳ございません。あなたがファイルをアップロード許可されているアルバムはありません。',
  'place_instr_1' => 'アルバムにファイルをアップロードしてください。各ファイルに関連情報を入力することもできます。',
  'place_instr_2' => '更にファイルをアップロードする必要があります。「続ける」をクリックしてください。',
  'process_complete' => '全てのファイルが正常にアップロードされました。',
   'albums_no_category' => 'カテゴリ無しのアルバム',
  'personal_albums' => '* パーソナルアルバム',
  'select_album' => 'アルバムの選択',
  'close' => '閉じる',
  'no_keywords' => '申し訳ございません。利用可能なキーワードはありません!',
  'regenerate_dictionary' => 'ディレクトリの再作成',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'メンバリスト',
  'user_manager' => 'ユーザマネージャ',
  'title' => 'ユーザの管理',
  'name_a' => 'ユーザ名の昇順',
  'name_d' => 'ユーザ名の降順',
  'group_a' => 'グループ名の昇順',
  'group_d' => 'グループ名の降順',
  'reg_a' => '登録日の昇順',
  'reg_d' => '登録日の降順',
  'pic_a' => '写真枚数の昇順',
  'pic_d' => '写真枚数の降順',
  'disku_a' => 'ディスク使用量の昇順',
  'disku_d' => 'ディスク使用量の降順',
  'lv_a' => '最終アクセスの昇順',
  'lv_d' => '最終アクセスの降順',
  'sort_by' => 'ユーザの並び替え',
  'err_no_users' => 'ユーザテーブルが空です !',
  'err_edit_self' => '自分自身のプロフィールは編集できません。「マイプロフィール」を使用してください。',
  'edit' => '編集',
  'with_selected' => '選択したファイル:',
  'delete' => '削除',
  'delete_files_no' => 'パブリックファイルを保持する ( しかし匿名にする )',
  'delete_files_yes' => 'パブリックファイルを同様に削除する',
  'delete_comments_no' => 'コメントを保持する ( しかし匿名にする )',
  'delete_comments_yes' => '同様にコメントも削除する',
  'activate' => 'アクティベート',
  'deactivate' => 'ディアクティベート',
  'reset_password' => 'パスワードのリセット',
  'change_primary_membergroup' => '第1メンバーグループの変更',
  'add_secondary_membergroup' => '第2メンバーグループの追加',
  'name' => 'ユーザ名',
  'group' => 'グループ',
  'inactive' => '非活性',
  'operations' => '操作',
  'pictures' => 'ファイル',
  'disk_space_used' => '使用済み容量',
  'disk_space_quota' => 'ディスク容量',
  'registered_on' => '登録年月日',
  'last_visit' => '最終訪問日',
  'u_user_on_p_pages' => '%d ユーザ/ %d ページ中',
  'confirm_del' => '本当にこのユーザを削除してもよろしいですか ? \\ユーザに属する全てのファイルとアルバムは削除されます。',
  'mail' => 'メール',
  'err_unknown_user' => '選択したユーザは登録されていません!',
  'modify_user' => 'ユーザの変更',
  'notes' => '注意',
  'note_list' => '<li>現在のパスワードを変更したくない場合は、「パスワード」フィールドを空白にしてください。',
  'password' => 'パスワード',
  'user_active' => 'ユーザをアクティベートする',
  'user_group' => 'グループ',
  'user_email' => 'メールアドレス',
  'user_web_site' => 'ホームページ',
  'create_new_user' => '新規ユーザの作成',
  'user_location' => '居住地',
  'user_interests' => '興味のあること',
  'user_occupation' => '職業',
  'user_profile1' => '$user_profile1',
  'user_profile2' => '$user_profile2',
  'user_profile3' => '$user_profile3',
  'user_profile4' => '$user_profile4',
  'user_profile5' => '$user_profile5',
  'user_profile6' => '$user_profile6',
  'latest_upload' => '最新アップロード',
  'never' => '無し',
  'search' => 'ユーザ検索',
  'submit' => '送信',
  'search_submit' => 'Go!',
  'search_result' => '検索結果: ',
  'alert_no_selection' => '最初に少なくとも1ユーザを選択してください!', //js-alert
  'password' => 'パスワード',
  'select_group' => 'グループの選択',
  'groups_alb_access' => 'グループのアルバムアクセス権',
  'album' => 'アルバム',
  'category' => 'カテゴリ',
  'modify' => '修正?',
  'group_no_access' => 'このグループには特別アクセス権がありません。',
  'notice' => 'Notice',
  'group_can_access' => '「 %s 」のみがアクセス可能なアルバム',
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'ファイル名からタイトルを更新',
'タイトルの削除',
'サムネイルの再構築および写真のリサイズ',
'オリジナルサイズの写真を削除してリサイズしたバージョンと入れ替える',
'ウェブスペースを解放するため、オリジナルまたは中間サイズの写真を削除する',
'迷子コメントの削除',
'ファイルサイズおよび画面サイズを再読み込みする ( 写真を手動で編集した場合 )',
'表示カウンタをリセット',
'phpinfoの表示',
'データベースの更新',
'ログファイルの表示する',
);
$lang_util_php = array(
  'title' => '管理ツール ( 写真のリサイズ )',
  'what_it_does' => '処理内容',
  'file' => 'ファイル',
  'problem' => '問題',
  'status' => 'ステータス',
  'title_set_to' => 'タイトル設定',
  'submit_form' => '送信',
  'updated_succesfully' => '更新完了',
  'error_create' => '作成中にエラーが発生しました',
  'continue' => 'さらにイメージを処理する',
  'main_success' => 'ファイル %s がメインファイルに設定されました',
  'error_rename' => '%s を %s にリネーム中にエラーが発生しました',
  'error_not_found' => 'ファイル %s が見つかりませんでした',
  'back' => 'メインに戻る',
  'thumbs_wait' => 'サムネイルの更新 および/または 写真のリサイズを行っています、お待ちください...',
  'thumbs_continue_wait' => 'サムネイルの更新 および/または 写真のリサイズを行っています...',
  'titles_wait' => 'タイトルの更新を行っています、お待ちください...',
  'delete_wait' => 'タイトルを削除しています、お待ちください...',
  'replace_wait' => 'オリジナルサイズのイメージを削除して変更後のイメージと入れ替えを行っています、お待ちください...',
  'instruction' => 'クイックインストラクション',
  'instruction_action' => 'アクションの選択',
  'instruction_parameter' => 'パラメータの設定',
  'instruction_album' => 'アルバムの選択',
  'instruction_press' => '%s を押す',
  'update' => 'サムネイルの更新 および/または 写真のリサイズ',
  'update_what' => '更新対象',
  'update_thumb' => 'サムネイルの作成のみ',
  'update_pic' => '写真のリサイズのみ',
  'update_both' => 'サムネイルの作成および写真のリサイズ',
  'update_number' => 'クリックあたりのイメージ処理数',
  'update_option' => '( タイムアウトする場合は、この数値を低めに設定してください。 )',
  'filename_title' => 'ファイル名 &rArr; ファイルタイトル',
  'filename_how' => 'ファイル名の変更方法',
  'filename_remove' => '.jpgを空白付きの _ ( アンダースコア ) に変更する。',
  'filename_euro' => '2003_11_23_13_20_20.jpg を 23/11/2003 13:20 に変更する。',
  'filename_us' => '2003_11_23_13_20_20.jpg を 11/23/2003 13:20 に変更する。',
  'filename_time' => '2003_11_23_13_20_20.jpg を 13:20 に変更する。',
  'delete' => 'ファイルタイトルまたはオリジナルサイズの写真を削除する',
  'delete_title' => 'ファイルタイトルを削除する',
  'delete_title_explanation' => 'あなたが指定したアルバム内にあるファイルの全てのタイトルを削除します。',
  'delete_original' => 'オリジナルサイズの写真を削除する',
  'delete_original_explanation' => 'フルサイズの写真を削除します。',
  'delete_intermediate' => '中間写真を削除する',
  'delete_intermediate_explanation' => '中間 ( ノーマル ) 写真を削除します。<br />写真を追加した後に「中間写真を作成する」設定を無効にした場合、ディスクスペースを空けるために使用してください。',
  'delete_replace' => 'オリジナルのイメージを削除して、サイズを変更したバージョンと入れ替えます。',
  'titles_deleted' => '指定されたアルバムの全てのタイトルが削除されました。',
  'deleting_intermediates' => '中間ファイルを削除しています。お待ちください...',
  'searching_orphans' => '迷子を捜しています、お待ちください ...',
  'select_album' => 'アルバムの選択',
  'delete_orphans' => '不明ファイルのコメントを削除する',
  'delete_orphans_explanation' => 'もはやギャラリーに存在していないファイルを確認して関連するコメントを削除することができます。<br />全てのアルバムを確認します。',
  'refresh_db' => 'ファイルのディメンションとサイズ情報をリロードする。',
  'refresh_db_explanation' => 'ファイルのサイズとディメンションを再読み込みします。容量が間違っていたり、ファイルを手動で変更した場合に使用してください。',
  'reset_views' => '表示カウンタをリセットする',
  'reset_views_explanation' => '指定したアルバムにあるファイル全ての閲覧カウンタをゼロにします。',
  'orphan_comment' => '不明ファイルのコメントが見つかりました。',
  'delete' => '削除',
  'delete_all' => '全てを削除する',
  'delete_all_orphans' => '全ての不明ファイルのコメントを削除しますか?',
  'comment' => 'コメント: ',
  'nonexist' => '存在しないファイル # に割り当てられています。',
  'phpinfo' => 'phpinfoの表示',
  'phpinfo_explanation' => 'あなたのサーバに関するテクニカル情報を含んでいます。<br /> - サポートを必要とする場合、この情報を尋ねられる場合があります。',
  'update_db' => 'データベースの更新',
  'update_db_explanation' => 'coppermineの入れ替え、修正の追加、以前のバージョンよりアップグレードを行った場合は、データベースの更新を必ず1度実行してください。データベースの更新では必要なテーブルの追加およびcoppermineデータベースの設定を行います。',
  'view_log' => 'ログファイルの表示',
  'view_log_explanation' => 'Coppermineはユーザが行う様々な行動を記録することができます。<a href="admin.php">coppermine設定</a>でロギングを有効にしている場合、それらのログを閲覧することができます。',
  'versioncheck' => 'バージョンのチェック',
  'versioncheck_explanation' => 'アップグレード後に全てのファイルを入れ替えたか、パッケージのリリース後にcoppermineソースファイルが更新されたか、ファイルバージョンをチェックします。',
  'bridgemanager' => 'ブリッジマネージャー',
  'bridgemanager_explanation' => '別のアプリケーションとCoppermineのインテグレーション ( ブリッジング ) を有効化/無効化します ( 例 BBS )。',
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'バージョンチェック',
  'what_it_does' => 'このページは、coppermineをアップデートしたユーザのためにあります。このスクリプトは、ウェブサーバ内のファイルのバージョンがリポジトリ http://coppermine.sourceforge.net と同一であるか確認します。同様にアップデートするファイルを表示します。<br />修正が必要な部分は全て赤色で表示されます。黄色で表示されるものは調査が必要です。緑色で表示されるもの ( またはデフォルトフォント色 ) はOKです。<br />詳細はヘルプアイコンをクリックしてください。',
  'online_repository_unable' => 'オンラインレポジトリに接続できません。',
  'online_repository_noconnect' => 'Coppermineが、オンラインレポジトリに接続できませんでした。2つの理由が考えられます:',
  'online_repository_reason1' => 'coppermineオンラインレポジトリは現在停止しています - このページを閲覧できるか確認してください: %s - このページにアクセス可能な場合、後程お試しください。',
  'online_repository_reason2' => 'あなたのウェブサーバのPHPの設定は、 %s turned off ( デフォルトでは turned on ) とされています。あなたがサーバの管理者の場合、<i>php.ini</i> にあるオプションを有効にしてください ( 少なくとも %s でオーバライドできるようにしてください。)。ウェブホストを利用している場合、あなたのファイルとオンラインリポジトリを恐らく比較できないことを理解してください。この場合、このページは、あなたのディストリビューションのバージョンのみを表示することになります - アップデートは表示されません。',
  'online_repository_skipped' => 'オンラインリポジトリへの接続をスキップしました。',
  'online_repository_to_local' => 'スクリプトは、現在のローカルコピーのバージョンファイルに違反しています。あなたがCoppermineをアップグレードして全てのファイルをアップロードしていない場合、データは不正確な可能性があります。同様にファイルの変更は、アカウントの中に取り込まれません。',
  'local_repository_unable' => 'あなたのサーバのリポジトリに接続できません。',
  'local_repository_explanation' => 'Coppermineは、あなたのウェブサーバのリポジトリファイル %s に接続できませんでした。これは、恐らくウェブサーバにリポジトリファイルがアップロードされていないことを意味します。リポジトリファイルをアップロードして、このページをもう一度実行してください ( 更新ボタンをクリック )。<br />スクリプトを実行できない場合、あなたのウェブホストが <a href="http://www.php.net/manual/en/ref.filesystem.php">PHPファイルシステム関数</a> を完全に無効にしている可能性があります。この場合、このツールを使用することはできません。申し訳ございません。',
  'coppermine_version_header' => 'インストール済みCoppermineバージョン',
  'coppermine_version_info' => 'インストールしたバージョン: %s',
  'coppermine_version_explanation' => 'これが完全に間違っていて、あなたが新しいバージョンのCoppermineを動作させていると考える場合、あなたは恐らく最新バージョンの <i>include/init.inc.php</i> ファイルをアップロードしていません。',
  'version_comparison' => 'バージョン比較',
  'folder_file' => 'フォルダ/ファイル',
  'coppermine_version' => 'cpgバージョン',
  'file_version' => 'ファイルバージョン',
  'webcvs' => 'ウェブcvs',
  'writable' => '書き込み可',
  'not_writable' => '書き込み不可',
  'help' => 'ヘルプ',
  'help_file_not_exist_optional1' => 'ファイル/フォルダが存在していません。',
  'help_file_not_exist_optional2' => 'あなたのサーバにファイル/フォルダ %s が見つかりました。問題がある場合は、任意でファイルをウェブサーバに ( FTPクライアントを使用して ) アップロードしてください。',
  'help_file_not_exist_mandatory1' => 'ファイル/フォルダが存在していません。',
  'help_file_not_exist_mandatory2' => 'あなたのサーバに必須のファイル/フォルダ %s が見つかりませんでした。( FTPクライアントを使用して ) ウェブサーバにファイルをアップロードしてください。',
  'help_no_local_version1' => 'ローカルファイルバージョン無し',
  'help_no_local_version2' => 'スクリプトはローカルファイルバージョンを展開できませんでした - あなたのファイルが古い、または途中でヘッダ情報を取り除いて修正されています。ファイルの更新をお勧めします。',
  'help_local_version_outdated1' => '古いローカルバージョン',
  'help_local_version_outdated2' => 'このファイルは古いバージョンのCoppermineのファイルのようです。( 恐らくアップグレードされています。) このファイルも同様に更新してください。',
  'help_local_version_na1' => 'cvsバージョン情報を引用することができません。',
  'help_local_version_na2' => 'あなたのサーバにどのcvsバージョンがあるのかスクリプトが判断できません。パッケージよりファイルをアップロードしてください。',
  'help_local_version_dev1' => '開発バージョン',
  'help_local_version_dev2' => 'ウェブサーバ内のファイルは、あなたのCoppermineバージョンより新しいようです。あなたは開発ファイルを選択したか ( あなたが自分で何をしているか理解できる場合のみ行ってください。)、Coppermineをアップグレードして include/init.inc.php ファイルをアップロードしていません。',
  'help_not_writable1' => 'フォルダが書き込み可能ではありません。',
  'help_not_writable2' => 'スクリプトがフォルダ %s およびフォルダ内のファイルにアクセスする許可を与えるためにファイルパーミッション (CHMOD) を変更します。',
  'help_writable1' => 'フォルダ書き込み可能',
  'help_writable2' => 'フォルダ %s は書き込み可能です。これは不要なリスクです。coppermineには、読み込み/実行権のみ必要です。',
  'help_writable_undetermined' => 'Coppermineは、どのフォルダが書込み可能か判断できません。',
  'your_file' => 'あなたのファイル',
  'reference_file' => '参照ファイル',
  'summary' => '要約',
  'total' => '全てのファイル/フォルダがチェックされました。',
  'mandatory_files_missing' => '必須ファイルが見つかりません。',
  'optional_files_missing' => '任意ファイルが見つかりません。',
  'files_from_older_version' => '古いCoppermineバージョンのファイルが残されています。',
  'file_version_outdated' => '古いファイルバージョン',
  'error_no_data' => 'スクリプトにエラーが発生したので情報を取得することができません。ご迷惑お掛け致します。',
  'go_to_webcvs' => '%s へ移動',
  'options' => 'オプション',
  'show_optional_files' => '任意フォルダ/ファイルを表示する',
  'show_mandatory_files' => '必須ファイルを表示する',
  'show_file_versions' => 'ファイルバージョンを表示する',
  'show_errors_only' => 'エラーのあるフォルダ/ファイルのみを表示する',
  'show_permissions' => 'フォルダパーミッションを表示する',
  'show_condensed_output' => '縮小表示を行う ( スクリーンショットが簡単 )',
  'coppermine_in_webroot' => 'coppermineはウェブルートにインストールされています。',
  'connect_online_repository' => 'オンラインリポジトリへの接続を試みる',
  'show_additional_information' => '補足情報を表示する',
  'no_webcvs_link' => 'ウェブCVSリンクを表示しない',
  'stable_webcvs_link' => 'stableブランチのウェブCVSリンクを表示する',
  'devel_webcvs_link' => 'develブランチのウェブCVSリンクを表示する',
  'submit' => '変更を適用 / リフレッシュ',
  'reset_to_defaults' => 'デフォルト値にリセット',
);

// ------------------------------------------------------------------------- //
// File view_log.php 
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => '全てのログを削除',
  'delete_this' => 'このログを削除',
  'view_logs' => 'ログを表示',
  'no_logs' => 'ログは作成されていません。',
);


// ------------------------------------------------------------------------- //
// File xp_publish.php
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XPウェブパブリッシング・ウィザードクライアント</h1><p>このモジュールでは、Coppermineと<b>Windows XP</b>ウェブパブリッシング・ウィザードを使用することができます。</p><p>コードは次の記事をベースにしています。投稿者:
EOT;

$lang_xp_publish_required = <<<EOT
<h2>必要なもの</h2><ul><li>ウィザードを実行するために、Windows XPが必要です。</li><li><b>ウェブアップロード機能が正常に動作する</b>Coppermineインストレーション。</li></ul><h2>クライアントサイドでインストールするには、</h2><ul><li>右クリックして、
EOT;

$lang_xp_publish_select = <<<EOT
「 対象をファイルに保存.. 」を選択してください。ファイルをハードディスクに保存してください。ファイルを保存した後、ファイル名が <b>cpg_###.reg</b> になっているか確認してください ( ### は数値のタイムスタンプを表します。)。 必要な場合、ファイル名を変更してください ( 数値は残したまま )。ダウンロード後、あなたのサーバをウェブパブリッシング・ウィザードで登録するためにファイルをダブルクリックしてください。</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>テスト</h2><ul><li>Windows Explorerではファイルを選択して、左のウインドウで <b>Publish xxx on the web</b> を選択してください。</li><li>ファイルの選択を確定してください。<b>Next</b> をクリックしてください。</li><li>表示されるサービスのリストから、あなたのフォトギャラリー用に1つ選択してください ( あなたのギャラリー名を持っています )。サービスが表示されない場合、上記に記載されている <b>cpg_pub_wizard.reg</b> がインストールされているか確認してください。</li><li>必要な場合、ログイン情報を入力してください。</li><li>あなたの写真のターゲットアルバムを選択するか、新しいアルバムを作成してください。</li><li><b>next</b> をクリックしてください。写真のアップロードが開始されます。</li><li>完了した場合、写真が適切に追加されているかギャラリーを確認してください。</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>注意 :</h2><ul><li>アップロードが開始すると、ウィザードはスクリプトによるエラーメッセージを表示することができませんので、あなたがギャラリーを確認するまでアップロードが失敗したか成功したか分かりません。</li><li>ファイルのアップロードが失敗した場合、Coppermine設定ページの「デバッグモードを有効にする」を有効にしてください。その後、あなたのCoppermineディレクトリの１つの写真ファイルで、
EOT;

$lang_xp_publish_flood = <<<EOT
エラーメッセージが表示されるか確認してください。</li><li>ギャラリーがウィザードを通じた写真アップロードの<i>flood</i>を避けるため、<b>ギャラリー管理者</b> および <b>自分のアルバムを所有しているユーザ</b> のみこの機能を使用することができます。</li>
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - XPウェブパブリッシングウィザード',
  'welcome' => 'ようこそ <b>%s</b> さん',
  'need_login' => 'このウィザードを使用する前に、ウェブブラウザを使用してギャラリーにログインしてください。<p/><p>表示されている場合、<b>次回からユーザ名・パスワードの入力を省略</b>オプションの選択をログイン時に忘れずに行ってください。',
  'no_alb' => '申し訳ございません。あなたがこのウィザードで写真のアップロードを許可したアルバムが存在していません。',
  'upload' => 'あなたの写真をアルバムにアップロードする',
  'create_new' => 'あなたの写真の新しいアルバムを作成',
  'album' => 'アルバム',
  'category' => 'カテゴリ',
  'new_alb_created' => 'あなたの新しいアルバム「<b>%s</b>」が作成されました。',
  'continue' => '写真をアップロードするには「次へ」をクリックしてください。',
  'link' => 'このリンク',
);
}
?>