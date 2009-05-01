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
  Coppermine version: 1.4.23
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_english' => 'Korean', //cpg1.4
  'lang_name_native' => '한국어', //cpg1.4
  'lang_country_code' => 'kr', //cpg1.4
  'trans_name'=> 'mle21',
  'trans_email' => '',
  'trans_website' => '',
  'trans_date' => '2005-08-17',
);

$lang_charset = 'euc-kr';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('바이트', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('일', '월', '화', '수', '목', '금', '토');
$lang_month = array('1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월');

// Some common strings
$lang_yes = '예';
$lang_no  = '아니오';
$lang_back = '뒤로';
$lang_continue = '다음';
$lang_info = '안내';
$lang_error = '오류';
$lang_check_uncheck_all = '모두 선택/해제 '; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%B %d, %Y';
$lastcom_date_fmt =  '%m/%d/%y @ %H:%M';
$lastup_date_fmt = '%B %d, %Y';
$register_date_fmt = '%B %d, %Y';
$lasthit_date_fmt = '%B %d, %Y @ %I:%M %p';
$comment_date_fmt =  '%B %d, %Y @ %I:%M %p';
$log_date_fmt = '%B %d, %Y @ %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => '무작위 이미지',
  'lastup' => '최근 이미지',
  'lastalb'=> '최근 수정된 앨범',
  'lastcom' => '최근 코멘트',
  'topn' => '최다 조회',
  'toprated' => '최고 평점',
  'lasthits' => '최근 조회',
  'search' => '검색 결과',
  'favpics'=> '즐겨찾기 이미지',  //cpg1.4
);

$lang_errors = array(
  'access_denied' => '회원님의 권한으로 이페이지를 볼 수 없습니다. 관리자에게 문의하세요.',
  'perm_denied' => '회원님의 권한으로 실행할 수 없는 명령입니다.',
  'param_missing' => '필요한 파라메타가 지정되지 않았습니다.',
  'non_exist_ap' => '선택한 앨범/이미지가 존재하지 않습니다 !',
  'quota_exceeded' => '디스크 할당량을 초과 사용하였습니다<br /><br /> 할당량은 [quota]K, 현재 사용량은 [space]K, 이 이미지를 추가하면 할당량을 초과합니다.',
  'gd_file_type_err' => 'GD 이미지 라이브러리에서 지원되는 이미지 타입은 오직 JPEG 와 PNG입니다.',
  'invalid_image' => '업로드한 이미지가 파손되었거나 혹은 GD 라이브러리가 처리할 수 없습니다. ',
  'resize_failed' => '썸네일 혹은 이미지 크기를 바꿀 수 없습니다.',
  'no_img_to_display' => '표시할 이미지가 없습니다.',
  'non_exist_cat' => '선택한 카테고리는 존재하지 않습니다.',
  'orphan_cat' => '카타고리의 상위레벨이 없습니다, 문제를 해결하기 위하여 카타고리-관리자를 수행하세요!',
  'directory_ro' => '디렉토리 \'%s\' 가 쓰기금지 상태입니다. 이미지를 삭제할 수 없습니다.',
  'non_exist_comment' => '선택한 코멘트가 존재하지 않습니다.',
  'pic_in_invalid_album' => '이미지가 존재하지 않는 앨범에 있습니다 (%s)!?',
  'banned' => '귀하는 사용금지자 명단에 들어있습니다.',
  'not_with_udb' => '이 기능을 코퍼마인에서 사용할 수 없습니다. 이 기능은 게시판 소프트웨어에 합병되었습니다. 입력하신 기능이 현재의 설정에서는 지원되지 않거나 게시판 소프트웨어에서만 처리되는 기능입니다.',
  'offline_title' => '오프라인',
  'offline_text' => '갤러리는 현재 오프라인 상태입니다 - 다시 방문하여 주세요.',
  'ecards_empty' => '현재 표시할 E-Card가 없습니다.',
  'action_failed' => '실행실패.  코퍼마인이 더 이상의 요구를 처리할 수 없습니다.',
  'no_zip' => 'Zip 화일을 처리하는데 필요한 라이브러리를 사용할 수 없습니다.  코퍼마인 관리자에게 연락하세요.',
  'zip_type' => '귀하는 ZIP 화일을 업로드하는 권한이 없습니다.',
  'database_query' => '데이타베이스 쿼리를 하는 도중에 오류가 발생하였습니다.', //cpg1.4
  'non_exist_comment' => '선택한 코멘트는 존재하지 않습니다.', //cpg1.4
);

$lang_bbcode_help_title = '비비코드 도움말'; //cpg1.4
$lang_bbcode_help = '이 필드에 클릭할 수 있는 경로를 추가하거나 비비코드 태그를 이용하여 포멭팅을 할 수 있습니다. 태그: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => '홈으로 가기',
  'home_lnk' => '홈',
  'alb_list_title' => '앨범목록으로 가기',
  'alb_list_lnk' => '앨범목록',
  'my_gal_title' => '개인갤러리로 가기',
  'my_gal_lnk' => '개인갤러리',
  'my_prof_title' => '개인정보로 가기', //cpg1.4
  'my_prof_lnk' => '개인정보',
  'adm_mode_title' => '관리자 모드로 전환',
  'adm_mode_lnk' => '관리자 모드',
  'usr_mode_title' => '사용자 모드로 가기',
  'usr_mode_lnk' => '사용자 모드',
  'upload_pic_title' => '앨범에 이미지 업로드',
  'upload_pic_lnk' => '이미지 업로드',
  'register_title' => '계정 만들기',
  'register_lnk' => '회원등록',
  'login_title' => '로그인', //cpg1.4
  'login_lnk' => '로그인',
  'logout_title' => '로그아웃', //cpg1.4
  'logout_lnk' => '로그아웃',
  'lastup_title' => '최근 이미지 보여주기', //cpg1.4
  'lastup_lnk' => '최근 이미지',
  'lastcom_title' => '최근 코멘트 보여주기', //cpg1.4
  'lastcom_lnk' => '최근 코멘트',
  'topn_title' => '최다 조회 보여주기', //cpg1.4
  'topn_lnk' => '최다 조회',
  'toprated_title' => '최고 평점 보여주기', //cpg1.4
  'toprated_lnk' => '최고 평점',
  'search_title' => '갤러리 찾기', //cpg1.4
  'search_lnk' => '검색',
  'fav_title' => '즐겨찾기로 가기', //cpg1.4
  'fav_lnk' => '즐겨찾기',
  'memberlist_title' => '회원명단 보기',
  'memberlist_lnk' => '회원명단',
  'faq_title' => '사진갤러리에 대한 자주 묻는 질문 &quot;코퍼마인&quot;',
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => '신규 업로드 승인', //cpg1.4
  'upl_app_lnk' => '업로드 승인',
  'admin_title' => '설정으로 가기', //cpg1.4
  'admin_lnk' => '설정', //cpg1.4
  'albums_title' => '앨범설정으로 가기', //cpg1.4
  'albums_lnk' => '앨범',
  'categories_title' => '카타고리설정으로 가기', //cpg1.4
  'categories_lnk' => '카타고리',
  'users_title' => '사용자설정으로 가기', //cpg1.4
  'users_lnk' => '사용자',
  'groups_title' => '그룹설정으로 가기', //cpg1.4
  'groups_lnk' => '그룹',
  'comments_title' => '모든 코멘트 보기', //cpg1.4
  'comments_lnk' => '코멘트 보기',
  'searchnew_title' => '일괄 추가로 가기', //cpg1.4
  'searchnew_lnk' => '일괄 추가 화일',
  'util_title' => '관리자 도구로 가기', //cpg1.4
  'util_lnk' => '관리자 도구',
  'key_title' => '키워드 사전으로 가기', //cpg1.4
  'key_lnk' => '키워드 사전', //cpg1.4
  'ban_title' => '사용금지자로 가기', //cpg1.4
  'ban_lnk' => '사용금지자',
  'db_ecard_title' => 'E-card 리뷰', //cpg1.4
  'db_ecard_lnk' => 'E-card 디스플레이',
  'pictures_title' => '나의 사진 배열', //cpg1.4
  'pictures_lnk' => '나의 사진 배열', //cpg1.4
  'documentation_lnk' => '자료모음', //cpg1.4
  'documentation_title' => '코퍼마인 매뉴얼', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => '개인앨범 생성 및 의뢰', //cpg1.4
  'albmgr_lnk' => '개인앨범 생성/의뢰',
  'modifyalb_title' => '개인앨범 수정으로 가기',  //cpg1.4
  'modifyalb_lnk' => '개인앨범 수정',
  'my_prof_title' => '개인정보로 가기', //cpg1.4
  'my_prof_lnk' => '개인정보',
);

$lang_cat_list = array(
  'category' => '카테고리',
  'albums' => '앨범',
  'pictures' => '이미지',
);

$lang_album_list = array(
  'album_on_page' => '앨범 %d 페이지 %d',
);

$lang_thumb_view = array(
  'date' => '일자',
  //Sort by filename and title
  'name' => '파일이름',
  'title' => '제목',
  'sort_da' => '일자별 순차배열',
  'sort_dd' => '일자별 역순',
  'sort_na' => '이름별 순차배열',
  'sort_nd' => '이름별 역순',
  'sort_ta' => '제목별 순차배열',
  'sort_td' => '제목별 역순',
  'position' => '위치', //cpg1.4
  'sort_pa' => '위치별 순차배열', //cpg1.4
  'sort_pd' => '위치별 역순', //cpg1.4
  'download_zip' => 'Zip 파일로 다운라인',
  'pic_on_page' => '이미지: %d  페이지: %d ',
  'user_on_page' => '사용자: %d  페이지: %d',
  'enter_alb_pass' => '앨범 비밀번호를 입력하세요', //cpg1.4
  'invalid_pass' => '비밀번호 오류', //cpg1.4
  'pass' => '비밀번호', //cpg1.4
  'submit' => '보냄', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => '썸네일 페이지로 돌아가기',
  'pic_info_title' => '사진정보 보기/숨기기',
  'slideshow_title' => '슬라이드쇼',
  'ecard_title' => '이미지를 e-card로 보내기',
  'ecard_disabled' => 'e-cards 사용금지',
  'ecard_disabled_msg' => '귀하는 e-cards 보내기 권한이 없습니다', //js-alert
  'prev_title' => '이전 이미지 보기',
  'next_title' => '다음 이미지 보기',
  'pic_pos' => '이미지 %s/%s',
  'report_title' => '이 이미지를 관리자에게 보고', //cpg1.4
  'go_album_end' => '마지막으로', //cpg1.4
  'go_album_start' => '처음으로 돌아가기', //cpg1.4
  'go_back_x_items' => '%s 아이템 이전으로', //cpg1.4
  'go_forward_x_items' => '%s 아이템 앞으로', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => '평가',
  'no_votes' => '(평가없음)',
  'rating' => '(현재평점 : %s / 5 평가횟수 %s 회)',
  'rubbish' => '아주나쁨',
  'poor' => '나쁨',
  'fair' => '보통',
  'good' => '좋음',
  'excellent' => '아주좋음',
  'great' => '최상',
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
  CRITICAL_ERROR => '심각한 오류발생',
  'file' => '파일: ',
  'line' => '라인: ',
);

$lang_display_thumbnails = array(
  'filename' => '파일명=', //cpg1.4
  'filesize' => '파일크기=', //cpg1.4
  'dimensions' => '너비,높이=', //cpg1.4
  'date_added' => '등록일=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s 코멘트',
  'n_views' => '%s 조회',
  'n_votes' => '(%s 평가)',
);

$lang_cpg_debug_output = array(
  'debug_info' => '디버그 정보',
  'select_all' => '모두 선택',
  'copy_and_paste_instructions' => '코퍼마인에 지원을 원하시면, 비밀번호는 *** 로 변환하여 디버그 출력과 함께 복사하여 보내주세요.  <br /> 이 메시지는 단지 정보이고, 이 갤러리에 오류가 있다는 것은 아닙니다.', //cpg1.4
  'phpinfo' => 'phpinfo 보기',
  'notices' => '공지사항', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => '초기설정 언어',
  'choose_language' => '언어를 선택하세요',
);

$lang_theme_selection = array(
  'reset_theme' => '초기설정 테마',
  'choose_theme' => '테마를 선택하세요',
);

$lang_version_alert = array(
  'version_alert' => '지원하지 않는 버젼!', //cpg1.4
  'no_stable_version' => '귀하는 코퍼마인 %s (%s) 를 사용하고 있습니다. 이것은 경험이 많은 고객용입니다. - 이 버젼은 지원과 워런티가 없습니다. 위험을 감수하며 사용을 하던가 아니면 지원이 가능한 안정된 버젼을 다운로드 하여 사용하세요.', //cpg1.4
  'gallery_offline' => '현재 이 갤러리는 오프라인 입니다. 관리자권한으로만 보여질 수 있습니다. 작업이 완료되면 온라인으로 전환시키십시요.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => '이전', //cpg1.4
  'next' => '다음', //cpg1.4
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
  'error_wakeup' => "플러그인을 기동할 수 없습니다 '%s'", //cpg1.4
  'error_install' => "플러그인을 설치할 수 없습니다 '%s'", //cpg1.4
  'error_uninstall' => "플러그인을 제거할 수 없습니다 '%s'", //cpg1.4
  'error_sleep' => "플러그인을 제거할 수 없습니다 '%s'<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Exclamation',
  'Question' => '궁금',
  'Very Happy' => '아주 기쁨',
  'Smile' => '스마일',
  'Sad' => '슬픔',
  'Surprised' => '놀람',
  'Shocked' => '쇼크',
  'Confused' => '혼란',
  'Cool' => 'Cool',
  'Laughing' => 'Laughing',
  'Mad' => 'Mad',
  'Razz' => 'Razz',
  'Embarassed' => 'Embarassed',
  'Crying or Very sad' => '아주 슬픔',
  'Evil or Very Mad' => 'Evil or Very Mad',
  'Twisted Evil' => 'Twisted Evil',
  'Rolling Eyes' => 'Rolling Eyes',
  'Wink' => '윙크',
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

if (defined('ADMIN_PHP')) $lang_admin_php = array(
        0 => '사용자모드로 전환합니다...',
        1 => '관리자모드로 전환합니다...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => '앨범명이 필요합니다 !', //js-alert
  'confirm_modifs' => '변경사항을 적용하시겠습니까 ?', //js-alert
  'no_change' => '변경사항이 없습니다 !', //js-alert
  'new_album' => '새 앨범',
  'confirm_delete1' => '앨범을 삭제하시겠습니까 ?', //js-alert
  'confirm_delete2' => '\n앨범에 등록된 모든 이미지와 코멘트가 삭제됩니다 !', //js-alert
  'select_first' => '먼저 앨범을 선택하세요.', //js-alert
  'alb_mrg' => '앨범 관리자',
  'my_gallery' => '* 개인 갤러리 *',
  'no_category' => '* 최상위 카테고리(메인) *',
  'delete' => '삭제',
  'new' => '생성',
  'apply_modifs' => '변경적용',
  'select_category' => '카테고리 선택',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => '사용금지자', //cpg1.4
  'user_name' => '회원아이디', //cpg1.4
  'ip_address' => 'IP 주소', //cpg1.4
  'expiry' => '유효기간 (공란은 영구적임)', //cpg1.4
  'edit_ban' => '수정 저장', //cpg1.4
  'delete_ban' => '삭제', //cpg1.4
  'add_new' => '사용금지자 추가', //cpg1.4
  'add_ban' => '추가', //cpg1.4
  'error_user' => '사용자 검색 실패', //cpg1.4
  'error_specify' => '회원아이디 혹은 IP 주소를 기술하세요', //cpg1.4
  'error_ban_id' => '금지자 아이디 오류!', //cpg1.4
  'error_admin_ban' => '귀하를 본인이 금지할 수 없습니다!', //cpg1.4
  'error_server_ban' => '귀하 자신의 서버를 금지하려 합니까? ㅋ ㅋ , 불가능합니다', //cpg1.4
  'error_ip_forbidden' => 'IP를 금지할 수 없음 - 개인용 입니다!<br />개인 IP를 금지하시려면 이것을 수정하세요 <a href="admin.php">구성</a> (쿠머마인이 LAN에서 운용될 경우).', //cpg1.4
  'lookup_ip' => 'IP 주소 조회 ', //cpg1.4
  'submit' => '실행!', //cpg1.4
  'select_date' => '일자 선택', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => '브릿지 마법사',
  'warning' => '주의: 이 마법사를 사용하실 때 센시티브 데이타는 html 형식으로 전송 되는 것을 숙지하여야 합니다. 이것은 귀하의 PC에서만 동작이 됩니다 (인터넷 카페등과 같은 공공 클라이언트에서는 안됨), 작업후에 브라우저 캐시와 인터넷 임시파일을 삭제하세요, 그렇지 않으면 다른사람들이 귀하의 데이타를 참조할 수 있습니다!',
  'back' => '뒤로',
  'next' => '앞으로',
  'start_wizard' => '브릿징 마법사 시작',
  'finish' => '완료',
  'hide_unused_fields' => '사용하지 않는 항목 숨기기 (권장)',
  'clear_unused_db_fields' => '부적절 데이타베이스 엔튜리 제거 (권장)',
  'custom_bridge_file' => '커스톰 브리지 파일명 (만일 브리지 파일명이 <i>myfile.inc.php</i> 이면 이 항목에 <i>myfile</i> 을 입력)',
  'no_action_needed' => '이 단계에서는 다른작업이 필요하지 않습니다. 계속하시려면 \'다음\' 을 클릭하세요.',
  'reset_to_default' => '기본설정으로 리셋',
  'choose_bbs_app' => '코퍼마인과 연결할 어플리케이션을 선택하세요.',
  'support_url' => '어플리케이션 지원으로 가기',
  'settings_path' => 'BBS app 사용하는 경로',
  'database_connection' => '데이타베이스 연결',
  'database_tables' => '데이타베이스 테이블',
  'bbs_groups' => 'BBS 그룹',
  'license_number' => '라이센스 번호',
  'license_number_explanation' => '귀하의 라이센스 번호를 입력하세요 (가능하면).',
  'db_database_name' => '데이타베이스 명',
  'db_database_name_explanation' => 'BBS app 사용하는 데이타베이스 명을 입력하세요.',
  'db_hostname' => '데이타베이스 호스트',
  'db_hostname_explanation' => 'mySQL 데이타베이스가 있는 호스트 명, 통상적으로 &quot;로칼호스트&quot;',
  'db_username' => '데이타베이스 사용자 계정',
  'db_username_explanation' => 'BBS에 연결하여 사용하려는 mySQL 사용자계정',
  'db_password' => '데이타베이스 비밀번호',
  'db_password_explanation' => 'MySQL 사용자계정 비밀번호',
  'full_forum_url' => ' 게시판 URL',
  'full_forum_url_explanation' => '귀하의 BBS app URL 주소 ( http:// 를 포함하여, 예: http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => '상대  게시판 경로',
  'relative_path_of_forum_from_webroot_explanation' => '웹루트에서 귀하의 BBS app 상대 경로 (예: 만일 BBS가 http://www.yourdomain.tld/forum/ 라면 , &quot;/forum/&quot; 로)',
  'relative_path_to_config_file' => 'BBS의 설정파일의 상대 경로',
  'relative_path_to_config_file_explanation' => '코퍼마인 폴더로 부터 귀하의 BBS로의 상대 경로 (예: &quot;../forum/&quot; 귀하의 BBS가 http://www.yourdomain.tld/forum/ 이고 코퍼마인이 http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => '쿠기 접두어',
  'cookie_prefix_explanation' => 'BBS 쿠키명',
  'table_prefix' => '테이블 접두어',
  'table_prefix_explanation' => 'BBS를 설정하기 위해서는 동일한 접두어를 사용해야 합니다.',
  'user_table' => '사용자 테이블',
  'user_table_explanation' => '(BBS가 표준으로 설치된 경우 대체적으로 디폴트 값이 무난)',
  'session_table' => '세션 테이블',
  'session_table_explanation' => '(BBS가 표준으로 설치된 경우 대체적으로 디폴트 값이 무난)',
  'group_table' => '그룹 테이블',
  'group_table_explanation' => '(BBS가 표준으로 설치된 경우 대체적으로 디폴트 값이 무난)',
  'group_relation_table' => '그룹 릴레이션 테이블',
  'group_relation_table_explanation' => '(BBS가 표준으로 설치된 경우 대체적으로 디폴트 값이 무난)',
  'group_mapping_table' => '그룹 매핑 테이블',
  'group_mapping_table_explanation' => '(BBS가 표준으로 설치된 경우 대체적으로 디폴트 값이 무난)',
  'use_standard_groups' => '표준 BBS 사용자그룹을 사용하세요',
  'use_standard_groups_explanation' => '표준 (빌트-인) 사용자그룹을 사용하세요 (권장사항). 이 페이지의 모든 커스텀 사용자 설정을 지울 것입니다. 무엇을 하는지 확실한 경우만 이 옵션을 금지하세요!',
  'validating_group' => '그룹 검증',
  'validating_group_explanation' => '검증을 필요로 하는 사용자계정이 있는 BBS의 그룹 아이디 (BBS가 표준으로 설치된 경우 대체적으로 디폴트 값이 무난)',
  'guest_group' => '손님 그룹',
  'guest_group_explanation' => '손님 (익명 사용자)이 있는 BBS의 그룹 아이디 (디폴트 값이 무난, 무엇을 하는지 확실한 경우만 편집을 하세요)',
  'member_group' => '회원 그룹',
  'member_group_explanation' => '&quot;일반적인&quot; 사용자가 있는 BBS의 그룹 아이디 (디폴트 값이 무난, 무엇을 하는지 확실한 경우만 편집을 하세요)',
  'admin_group' => '관리자 그룹',
  'admin_group_explanation' => '관리자가 있는 BBS의 그룹 아이디 (디폴트 값이 무난, 무엇을 하는지 확실한 경우만 편집을 하세요)',
  'banned_group' => '금지자 그룹',
  'banned_group_explanation' => '사용금지자가 있는 BBS의 그룹 아이디 (디폴트 값이 무난, 무엇을 하는지 확실한 경우만 편집을 하세요)',
  'global_moderators_group' => '글로벌 모더래이터 그룹',
  'global_moderators_group_explanation' => 'BBS의 글로벌 모더래이터가 있는 BBS의 그룹 아이디 (디폴트 값이 무난, 무엇을 하는지 확실한 경우만 편집을 하세요)',
  'special_settings' => 'BBS-상세 설정',
  'logout_flag' => 'phpBB 버젼 (로그아웃 플랙)',
  'logout_flag_explanation' => 'BBS 버젼이 무엇입니까 (이 설정은 어떻게 로그아웃을 처리하느냐를 기술합니다)',
  'use_post_based_groups' => 'post-based 그룹을 사용합니까?',
  'logout_flag_yes' => '2.0.5 혹은 이상',
  'logout_flag_no' => '2.0.4 혹은 이하',
  'use_post_based_groups_explanation' => 'BBS에 올린 글의 양에 의하여 정의된 그룹 (입자 승인 관리를 허용) 혹은 디폴트 그룹 (권장사항: 관리가 용이). 나중에 설정을 변경할 수 있습니다.',
  'use_post_based_groups_yes' => '예',
  'use_post_based_groups_no' => '아니오',
  'error_title' => '계속하기 전에 이 오류들을 교정하여야 합니다. 전번 화면으로 가세요.',
  'error_specify_bbs' => '코퍼마인 설치와 브리지하려는 어프리케이션을 기술하여야 합니다.',
  'error_no_blank_name' => '커스텀 브리지 파일명을 공란으로 할 수 없습니다.',
  'error_no_special_chars' => '브리지 파일명에 언더스코어(_)와 대시(-)를 제외한 특수문자를 사용하면 안됩니다!',
  'error_bridge_file_not_exist' => '브리지 파일 %s이 서버에 존재하지 않습니다. 실제로 업로드하였으면 확인하세요.',
  'finalize' => 'BBS 통합 사용/사용 안함',
  'finalize_explanation' => '기술한 내용이 데이타베이스에 기록되었습니다, 하지만 BBS 통합이 사용불가합니다. 통합기능을 언제든지 켜기/끄기 할 수 있습니다. 스탠드어론 코퍼마인 관리자 아이디와 비밀번호를 기억하세요, 나중에 수정을 하려면 필요로 합니다. 문제발생시에는 %s 로 가서 스탠드어론 (브릿지하지 않은) 관리자 계정(대체로 코퍼마인 설치시 설정한)을 사용하여 BBS 통합기능을 사용불가로 하세요.',
  'your_bridge_settings' => '브리지 설정',
  'title_enable' => '%s와 통합/브리징 사용 가능',
  'bridge_enable_yes' => '사용',
  'bridge_enable_no' => '사용안함',
  'error_must_not_be_empty' => '공백이면 안됨',
  'error_either_be' => '반드시 %s 혹은 %s 이어야 함',
  'error_folder_not_exist' => '%s 존재하지 않습니다. 입력한 값 %s 을 고치세요',
  'error_cookie_not_readible' => '코퍼마인이 쿠키명 %s을 읽을 수 없습니다. 입력한 값 %s을 교정하세요, 혹은 BBS 관리자 판넬에 가서 쿠키경로가 코퍼마인이 읽을 수 있는지 확인하세요.',
  'error_mandatory_field_empty' => '함수 %s를 공란으로 할 수 없습니다 - 적절한 값을 입력하세요.',
  'error_no_trailing_slash' => '함수 %s에는 슬래시가 마지막에 있으면 안됩니다.',
  'error_trailing_slash' => '함수 %s에는 슬래시가 마지막에 있어야 합니다.',
  'error_db_connect' => '입력한 데이타로 mySQL 데이타베이스에 연결할 수 없습니다. 다음은 mySQL이 알리는 말:',
  'error_db_name' => '코퍼마인이 연결을 확립하였지만 데이타베이스 %s을 찾을 수 없습니다. 기술한 %s이 적절한 것인지 확인하세요. 다음은 mySQL이 알리는 말:',
  'error_prefix_and_table' => '%s 그리고 ',
  'error_db_table' => '테이블 %s을 찾을 수 없습니다. 기술한 %s이 정확한지 확인하세요.',
  'recovery_title' => '브리지 관리자: 응급 복구',
  'recovery_explanation' => '코퍼마인 갤러리의 통합을 관리하려면, 먼저 관리자로 로그인 하세요. 브리징이 작동하지 않아서 로그인 할 수 없으면, 이 페이지로 BBS 통합을 사용안함을 할 수 있습니다. 아이디와 비밀번호를 입력하면 로그인은 할 수 없지만 BBS 통합을 사용금지 합니다. 상세내용은 문서를 참조하세요.',
  'username' => '아이디',
  'password' => '비밀번호',
  'disable_submit' => '보냄',
  'recovery_success_title' => '권한취득 성공',
  'recovery_success_content' => '성공적으로 BBS 브리징이 사용불가능하게 되었습니다. 코퍼마인 설치가 스탠드어론 모드로 수행합니다.',
  'recovery_success_advice_login' => '브리지 설정을 편집하기 위해  그리고/혹은 BBS 통합을 다시 사용가능하게 위하여 관리자로 로그인 하세요.',
  'goto_login' => '로그인 페이지로 가기',
  'goto_bridgemgr' => '브리지 관리자로 가기',
  'recovery_failure_title' => '권한취득 실패',
  'recovery_failure_content' => '틀린 자격증서입니다. 표준 버젼의 관리자 계정 데이타를 입력하세요 (대체적으로 코퍼마인 설치시의 계정).',
  'try_again' => '재시도 하세요',
  'recovery_wait_title' => '대기시간이 경과하지 않았습니다',
  'recovery_wait_content' => '보안상 이 스크립는 로그인 오류시 일정시간 대기하여야 합니다, 재시도에 대한 승인이 될 때까지 기다려야 합니다.',
  'wait' => '기다리세요',
  'create_redir_file' => '리디렉숀 파일 생성 (권장사항)',
  'create_redir_file_explanation' => 'BBS에 로그인 한 후에 사용자를 코퍼마인으로 전환시키려면  BBS 폴더에 리디렉숀 파일을 생성하여야 합니다. 이 옵션이 선택되면 브리지 관리자가 이 파일을 생성하거나 파일을 수동으로 복사-붙여넣기 형식으로 만드는 코드를 제공합니다.',
  'browse' => '보기',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => '칼렌다', //cpg1.4
  'close' => '닫기', //cpg1.4
  'clear_date' => '일자 삭제', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => ' \'%s\'작업에 필요한 함수가 지정되지 않았습니다 !',
  'unknown_cat' => '선택한 카테고리가 데이타베이스에 존재하지 않습니다.',
  'usergal_cat_ro' => '개인 갤러리 카타고리는 삭제할 수 없습니다 !',
  'manage_cat' => '카테고리 관리',
  'confirm_delete' => '이 카테고리를 삭제하시겠습니까?', //js-alert
  'category' => '카테고리',
  'operations' => '실행',
  'move_into' => '카테고리 변경',
  'update_create' => '카테고리 변경/생성',
  'parent_cat' => '상위 카테고리',
  'cat_title' => '카테고리 이름',
  'cat_thumb' => '카테고리 썸네일',
  'cat_desc' => '카테고리 설명',
  'categories_alpha_sort' => '카테고리를 순차배열 (커스톰 배열 순서 대신에)', //cpg1.4
  'save_cfg' => '시스템구성 저장', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => '갤러리 구성', //cpg1.4
  'manage_exif' => 'exif 표시 관리', //cpg1.4
  'manage_plugins' => '플러그인 관리', //cpg1.4
  'manage_keyword' => '키워드 관리', //cpg1.4
  'restore_cfg' => '기본설정으로',
  'save_cfg' => '변경사항 저장',
  'notes' => '메모',
  'info' => '알립니다',
  'upd_success' => '변경사항이 적용되었습니다!',
  'restore_success' => '기본설정으로 변경되었습니다',
  'name_a' => '이름별 순차배열',
  'name_d' => '이름별 역순',
  'title_a' => '제목별 순차배열',
  'title_d' => '제목별 역순',
  'date_a' => '일자순',
  'date_d' => '일자 역순',
  'pos_a' => '위치별 순차배열', //cpg1.4
  'pos_d' => '위치별 역순', //cpg1.4
  'th_any' => '최대 애스팩',
  'th_ht' => '높이',
  'th_wd' => '너비',
  'label' => '라벨',
  'item' => '아이템',
  'debug_everyone' => '일반용',
  'debug_admin' => '관리자용',
  'no_logs'=> '오프', //cpg1.4
  'log_normal'=> '보통', //cpg1.4
  'log_all' => '모두', //cpg1.4
  'view_logs' => '로그 보기', //cpg1.4
  'click_expand' => '확장할 섹션명 클릭', //cpg1.4
  'expand_all' => '모두 확장', //cpg1.4
  'notice1' => '(*) 데이타베이스에 이미 파일이 있으면 이 설정을 바꾸면 안됩니다.', //cpg1.4 - (relocated)
  'notice2' => '(**) 이 설정을 바꾸면, 추후 추가된 파일에만 적용이 됩니다, 그러므로 갤러리에 이미 파일이 있으면 이 설정을 바꾸지 않는 것이 좋습니다. 존재하는 파일에 적용을 하려면 &quot;<a href="util.php">관리자 도구</a> (사진 크기 변경)&quot; 관리자 메뉴의 유틸리티를 사용하세요.', //cpg1.4 - (relocated)
  'notice3' => '(***) 모든 로그파일은 영어로 기록됨.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'BB 통합을 하면 기능 사용못함', //cpg1.4
  'auto_resize_everyone' => '모두에게 허용', //cpg1.4
  'auto_resize_user' => '사용자용', //cpg1.4
  'ascending' => '순차', //cpg1.4
  'descending' => '역순', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  '일반사항 설정',
  array('갤러리 이름', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('갤러리 설명', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('갤러리 관리자 이메일', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('코퍼마인 갤러리 폴더의 URL (\'index.php\' 이나 끝이 비슷한 것은 안됨)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('홈페이지의 URL ', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('즐겨찾기의 ZIP 다운로드 허용', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('GMT와의 상대적인 다른 시간대 (현재시각: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('비밀번호 암호화 가동 (예외 없음)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('도움 아이콘 가동 (도움말은 영어에 한함)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('검색에서 클릭할 수 있는 키워드 허용','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('플러그인 가동', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('라우트 하지 않는(프라이빗) IP 주소 금지 허용', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('일괄처리 인터페이스 보이기', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  '언어 &amp; 캐랙터셋 설정',
  array('언어', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('번역문을 찾을 수 없으면 영어로 돌아가기?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('캐랙터 인코딩', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('언어 목록 보기', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('언어 상징표 보기', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('언어선택에서 &quot;리셋&quot; 보기', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('탭 페이지의 이전/다음 보기', 'previous_next_tab', 1), //cpg1.4

  '테마 설정',
  array('테마', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('테마 목록 보기', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('테마선택에서 &quot;리셋&quot; 보기', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('FAQ 보기', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('커스톰 메뉴 링크 명', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('커스톰 메뉴 링크 URL', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('bbcode 도움말 보기', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('XHTML 혹은 CSS compliant로 지정된 테마의 vanity block 보기','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('커스톰 해더 인쿠르드의 경로', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('커스톰 후터 인쿠르드의 경로', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  '앨범 목록 보기',
  array('메인 테이블의 너비 (화소수 혹은 %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('표시할 카타고리의 레벨수', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('표시할 앨범수', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('앨범목록의 칼람수', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('썸네일의 화소수', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('메인 페이지의 콘텐트', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('카타고리의 첫번째 레벨 앨범 썸네일 보기','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('카테고리 순차배열 (커스톰 배열방식 대신에)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('링크된 파일 보기','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  '썸네일 보기',
  array('썸네일 페이지의 칸(행)수', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('썸네일 페이지의 줄(열)수', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('표시할 최대 탶의 수', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('썸네일 아래 파일 캪션 보기 (제목에 덧붙여)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('썸네일 아래 조회수 보기', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('썸네일 아래 코멘트수 보기', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('썸네일 아래 업로드한 회원 보기', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('썸네일 아래에 업로드 관리자 이름 보기', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('썸네일 아래 파일명 보기', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('앨범 설명 보기', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('파일의 디폴트 배열방식', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array(' \'최고평점\' 목록에 포함할 파일의 최소 평가수', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  '이미지 보기', //cpg1.4
  array('파일보기에서 테이블의 너비 (화소 or %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('디폴트로 파일 정보 보여주기', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('이미지설명에 대한 최대 글자수', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('단어의 최대 글자수', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('필름 스트립 보기', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('필름 스트립 썸네일 아래 파일명 보여주기', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('필름 스트립의 아이템 갯수', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('슬라이드쇼의 간격을 밀리초로 (1 초 = 1000 밀리초)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  '코멘트 설정', //cpg1.4
  array('코멘트에 나쁜단어 걸르기', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('코멘트에 스마일 허용', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('동일한 회원이 동일한 파일에 연달아 코멘트 달기 허용 (범람방지 기능안함)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('코멘트의 최대 줄수', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('코멘트의 최대 글자수', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('이메일로 관리자에게 코멘트 통보하기', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('코멘트의 배열방식', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('익명 코멘트 생성자의 접두어', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  '파일 그리고 썸네일 설정',
  array('JPEG 파일의 질', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('썸네일의 최대 디멘젼 <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('디멘젼 사용 ( 너비 혹은 높이 혹은 썸네일의 최대 외관) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('중간 사진 생성','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('중간 사진/비디오의 최대 너비 혹은 높이 <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('업로드 파일의 최대 크기 (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('업로드 사진/비디오의 최대 너비 혹은 높이 (화소)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('최대 너비 혹은 높이를 초과하면 자동으로 이미지 크기가 변환', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  '파일과 썸네일의 고급 설정',
  array('앨범을 개인용으로 변경 (Note: 만일 \'예\' 가 \'아니오\'로 바뀌면 모든 개인앨범이 공개앨범으로 됨)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('개인앨범 아이콘을 로그인하지 않은 사람에게 보여줌','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('파일명에 사용하지 못하는 글자', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('업로드 파일에 허용되는 파일 확장자', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('허용하는 이미지 타입', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('허용하는 무비 타입', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('무비 재생시 자동시작', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('허용하는 오디오 타입', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('허용하는 문서 타입', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('이미지 크기 바꾸는 방법','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('ImageMagick \'변환\' 유틸리티의 경로 (예: /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('허용하는 이미지 타입 (ImageMagick에만 적용)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('ImageMagick의 코맨드 라인 옵션', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('JPEG 파일의 EXIF 데이타 읽기', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('JPEG 파일의 IPTC 데이타 읽기', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('앨범 디렉토리 <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('사용자 파일의 디렉토리 <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('중간 사진의 접두어 <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
  array('썸네일의 접두어 <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('디렉토리의 디폴트 모드', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('파일의 디폴트  모드', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  '사용자 설정',
  array('새로운 사용자 등록 허용', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('로그인 하지 않은 사람의 허용 (손님 혹은 익명인)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('사용자 등록시 이메일 검사 필요', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('사용자 등록을 관리자에게 이메일 통보', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('등록을 관리자가 활성화', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('두 사용자가 동일한 이메일 주소 사용 가능', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('승인을 기다리는 사용자 업로드를 관리자에게 통보', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('로그인한 사용자의 회원명단 보기 허용', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('사용자가 자신의 프로파일에서 이메일 주소 변경 가능', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('공개 갤러리에 있는 회원 본인의 사진을 변경 가능', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('로그인 실패 허용 횟수. 허용횟수를 초과하면 임시 사용제한상태로 됨 (해커 방지책)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('로그인 실패후 임시 사용제한 기간', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('관리자에게 보고 가능', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  '사용자 프로필의 커스톰 항목 (사용하지 않으면 공란으로).
  일대기와 같은 내용이 긴 경우에는 프로필 6 를 사용하세요.', //cpg1.4
  array('프로필 1 명칭', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('프로필 2 명칭', 'user_profile2_name', 0), //cpg1.4
  array('프로필 3 명칭', 'user_profile3_name', 0), //cpg1.4
  array('프로필 4 명칭', 'user_profile4_name', 0), //cpg1.4
  array('프로필 5 명칭', 'user_profile5_name', 0), //cpg1.4
  array('프로필 6 명칭', 'user_profile6_name', 0), //cpg1.4

  '이미지 설명을 위한 커스톰 항목 (사용하지 않으면 공란으로)',
  array('항목 1 명칭', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('항목 2 명칭', 'user_field2_name', 0),
  array('항목 3 명칭', 'user_field3_name', 0),
  array('항목 4 명칭', 'user_field4_name', 0),

  '쿠키 설정',
  array('쿠키이름', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('쿠키경로', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  '이메일 설정 (대체로 이곳에서 변경될 것이 없음; 확실하지 않으면 이 필드를 공란으로 남기세요)', //cpg1.4
  array('SMTP 호스트 (공란일 경우, 보낸메일이 사용됨)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('SMTP 아이디', 'smtp_username', 0), //cpg1.4
  array('SMTP 비밀번호', 'smtp_password', 0), //cpg1.4

  '로깅과 통계', //cpg1.4
  array('로깅 모드 <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('ecards 로그', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('상세한 평가통계 보관하기','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('상세한 조회통계 보관하기','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  '관리 설정', //cpg1.4
  array('디버그 모드 작동', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('디버그모드에서 경고사항 보이기', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('갤러리가 오프라인입니다', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'ecards 발송',
  'ecard_sender' => '보낸이',
  'ecard_recipient' => '받는이',
  'ecard_date' => '날자',
  'ecard_display' => 'ecard 보기',
  'ecard_name' => '성명',
  'ecard_email' => '이메일',
  'ecard_ip' => 'IP 주소',
  'ecard_ascending' => '순차배열',
  'ecard_descending' => '역순',
  'ecard_sorted' => '정렬을',
  'ecard_by_date' => '일자로',
  'ecard_by_sender_name' => '보낸이의 이름으로',
  'ecard_by_sender_email' => '보낸이의 이메일로',
  'ecard_by_sender_ip' => '보낸이의 IP 주소로',
  'ecard_by_recipient_name' => '받는이의 이름으로',
  'ecard_by_recipient_email' => '받는이의 이메일로',
  'ecard_number' => '레코드 %s 에서 %s 까지 보기, %s 에 있는',
  'ecard_goto_page' => '페이지로 가기',
  'ecard_records_per_page' => '페이지당 레코드',
  'check_all' => '모두 선택',
  'uncheck_all' => '모두 선택해제',
  'ecards_delete_selected' => '선택한 ecards 지우기',
  'ecards_delete_confirm' => '정말로 레코드를 삭제하시겠습니까?? 체크박스를 선택하세요!',
  'ecards_delete_sure' => '예! 확인합니다',
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => '이름과 코멘드를 입력하세요.',
  'com_added' => '코멘트가 등록되었습니다.',
  'alb_need_title' => '앨범의 제목을 입력하세요 !',
  'no_udp_needed' => '업데이트가 불필요합니다.',
  'alb_updated' => '앨범이 수정되었습니다.',
  'unknown_album' => '선택한 앨범이 존재하지 않습니다. 혹은 이 앨범에 업로드할 권한이 없습니다.',
  'no_pic_uploaded' => '업로드된 파일이 없습니다 !<br /><br />업로드할 파일을 선택하였었다면, 서버가 파일 업로드를 허용하는지 확인하세요...',
  'err_mkdir' => '디렉토리 %s 을 생성할 수 없습니다!',
  'dest_dir_ro' => '스크립터에 의하여 목적지 디렉토리 %s 에 기록을 할 수 없습니다 !',
  'err_move' => ' %s 에서 %s 로 이동할 수 없습니다!',
  'err_fsize_too_large' => '업로드한 파일이 너무 큽니다 (최대허용량은 %s x %s) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_imgsize_too_large' => '업로드한 파일이 너무 큽니다 (최대 허용치는 %s KB) !', //obsolete since cpg1.3 - consider removal in cpg1.4 once upload.php has been overhauled
  'err_invalid_img' => '업로드한 파일이 유효한 이미지가 아닙니다 !',
  'allowed_img_types' => '귀하는 %s 이미지만 업로드할 수 있습니다.',
  'err_insert_pic' => '파일 \'%s\' 을 앨범에 수록될 수 없습니다.',
  'upload_success' => '파일이 성공적으로 업로드 되었습니다.<br /><br />관리자 승인후에 볼 수 있습니다.',
  'notify_admin_email_subject' => '%s - 업로드 통보',
  'notify_admin_email_body' => ' %s이 업로드한 사진이 승인을 기다리고 있습니다.  %s을 방문하세요.',
  'info' => '알려드립니다',
  'com_added' => '코멘트 등록완료',
  'alb_updated' => '앨범 수정완료',
  'err_comment_empty' => '코멘트가 비어있습니다 !',
  'err_invalid_fext' => '다음 확장자를 가진 파일만 허용합니다 : <br /><br />%s.',
  'no_flood' => '미안합니다. 귀하는 이미 이 파일에 마지막 코멘트 작성자입니다 <br /><br />귀하의 코멘트를 변경하기를 원하시면 편집을 하세요',
  'redirect_msg' => '리디렉렉트 중입니다.<br /><br /><br />만일 자동으로 리후레시되지 않으면 \'다음\'을 클릭하세요',
  'upl_success' => '이미지가 추가 되었습니다.',
  'email_comment_subject' => '코퍼마인 포토 갤러리에 코멘트가 올라왔습니다.',
  'email_comment_body' => '혹자가 귀하의 갤러리에 코멘트를 달았습니다. 이곳에서 보세요.',
  'album_not_selected' => '앨범이 선택되지 않았습니다.', //cpg1.4
  'com_author_error' => '다른 회원이 이 닉네임을 사용합니다, 로그인 혹은 다른 것을 사용하세요.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => '캡션',
  'fs_pic' => '원본 이미지',
  'del_success' => '삭제되었습니다!',
  'ns_pic' => '보통 크기 이미지',
  'err_del' => '삭제되지 않았습니다',
  'thumb_pic' => '썸네일',
  'comment' => '코멘트',
  'im_in_alb' => '엘범에 있는 이미지',
  'alb_del_success' => '앨범 &laquo;%s&raquo; 삭제되었슴', //cpg1.4
  'alb_mgr' => '앨범 관리자',
  'err_invalid_data' => ' \'%s\' 에 오류 데이타 도착',
  'create_alb' => '\'%s\' 앨범생성',
  'update_alb' => '앨범 \'%s\' 을 제목 \'%s\' 과 인텍스 \'%s\' 로 수정',
  'del_pic' => '이미지 삭제',
  'del_alb' => '앨범 삭제',
  'del_user' => '사용자 삭제',
  'err_unknown_user' => '선택한 사용자가 존재하지 않습니다 !',
  'err_empty_groups' => '그룹테이블이 없습니다, 혹은 그룹테이블이 비어 있습니다!', //cpg1.4
  'comment_deleted' => '코멘트가 삭제되었습니다.',
  'npic' => '이미지', //cpg1.4
  'pic_mgr' => '이미지 관리자', //cpg1.4
  'update_pic' => '사진 수정중 \'%s\' 파일명 \'%s\' 인덱스 \'%s\'', //cpg1.4
  'username' => '사용자', //cpg1.4
  'anonymized_comments' => '%s 익명 코멘트', //cpg1.4
  'anonymized_uploads' => '%s 익명 공공 업로드', //cpg1.4
  'deleted_comments' => '%s 코멘트 삭제', //cpg1.4
  'deleted_uploads' => '%s 공개 업로드 삭제', //cpg1.4
  'user_deleted' => '사용자 %s 삭제', //cpg1.4
  'activate_user' => '활성화된 회원', //cpg1.4
  'user_already_active' => '계정이 이미 활성화중 입니다.', //cpg1.4
  'activated' => '활성화됨', //cpg1.4
  'deactivate_user' => '비활성화 회원', //cpg1.4
  'user_already_inactive' => '계정이 이미 비활성화중 입니다.', //cpg1.4
  'deactivated' => '비활성화됨', //cpg1.4
  'reset_password' => '비밀번호 리셋', //cpg1.4
  'password_reset' => '비밀번호를 %s 로 리셋', //cpg1.4
  'change_group' => '1차 그룹 수정', //cpg1.4
  'change_group_to_group' => '변경 %s 을 %s 로', //cpg1.4
  'add_group' => '2차 그룹 추가', //cpg1.4
  'add_group_to_group' => '사용자 %s를 그룹 %s에 추가. 이 사용자는 %s의 1차 그룹 그리고  %s의 2차그룹 회원입니다.', //cpg1.4
  'status' => '상태', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => '귀하가 참조하려는 ecard 의 자료가 메일 크라이언트에 의해 손실되었습니다. 경로를 확인하세요.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => '파일을 삭제하시렵니까 ? \\n코멘트도 삭제됩니다.', //js-alert
  'del_pic' => '파일 삭제',
  'size' => '%s x %s 화소',
  'views' => '%s 회',
  'slideshow' => '슬라이드쇼',
  'stop_slideshow' => '슬라이드쇼 중지',
  'view_fs' => '클릭하여 원래 크기로 보기',
  'edit_pic' => '사진 정보 수정', //cpg1.4
  'crop_pic' => '추출/회전',
  'set_player' => '플레어 변경',
);

$lang_picinfo = array(
  'title' =>'파일 정보',
  'Filename' => '파일명',
  'Album name' => '앨범명',
  'Rating' => '평점 (%s 평가)',
  'Keywords' => '키워드',
  'File Size' => '파일 크기',
  'Date Added' => '입력 날자', //cpg1.4
  'Dimensions' => '디멘죤',
  'Displayed' => '조회수',
  'URL' => 'URL', //cpg1.4
  'Make' => '제조업체', //cpg1.4
  'Model' => '제품명', //cpg1.4
  'DateTime' => '일자 시간', //cpg1.4
  'DateTimeOriginal' => '촬영일시', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => '최대 구경', //cpg1.4
  'FocalLength' => '포칼 렝스', //cpg1.4
  'Comment' => '코멘트',
  'addFav'=>'즐겨찾기에 추가',
  'addFavPhrase'=>'즐겨찾기',
  'remFav'=>'즐겨찾기에서 삭제',
  'iptcTitle'=>'IPTC 제목',
  'iptcCopyright'=>'IPTC 저작권',
  'iptcKeywords'=>'IPTC 키워드',
  'iptcCategory'=>'IPTC 카테고리',
  'iptcSubCategories'=>'IPTC 부-카테고리',
  'ColorSpace' => '칼라 스페이스', //cpg1.4
  'ExposureProgram' => '노출 프로그램', //cpg1.4
  'Flash' => '플래시', //cpg1.4
  'MeteringMode' => '메터링 모드', //cpg1.4
  'ExposureTime' => '노출 시간', //cpg1.4
  'ExposureBiasValue' => '노출 바이아스', //cpg1.4
  'ImageDescription' => ' 이미지 설명', //cpg1.4
  'Orientation' => '오리엔테이션', //cpg1.4
  'xResolution' => 'X 해상도', //cpg1.4
  'yResolution' => 'Y 해상도', //cpg1.4
  'ResolutionUnit' => '해상도 단위', //cpg1.4
  'Software' => '소프트웨어', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif 오프세트', //cpg1.4
  'IFD1Offset' => 'IFD1 오프세트', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif 버젼', //cpg1.4
  'DateTimeOriginal' => 'DateTime Original', //cpg1.4
  'DateTimedigitized' => 'DateTime digitized', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
  'LightSource' => 'Light 소스', //cpg1.4
  'ISOSetting' => 'ISO 설정', //cpg1.4
  'ColorMode' => '칼라 모드', //cpg1.4
  'Quality' => '퀄리티', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => '포커스 모드', //cpg1.4
  'FlashSetting' => '플래시 설정', //cpg1.4
  'ISOSelection' => 'ISO 선택', //cpg1.4
  'ImageAdjustment' => '이미지 조절', //cpg1.4
  'Adapter' => '아답터', //cpg1.4
  'ManualFocusDistance' => '메뉴얼 포커스 거리', //cpg1.4
  'DigitalZoom' => '디지탈 줌', //cpg1.4
  'AFFocusPosition' => 'AF 포커스 포지션', //cpg1.4
  'Saturation' => '채도', //cpg1.4
  'NoiseReduction' => '노이즈 제거', //cpg1.4
  'FlashPixVersion' => '플래쉬 픽스 버젼', //cpg1.4
  'ExifImageWidth' => 'Exif 이미지 너비', //cpg1.4
  'ExifImageHeight' => 'Exif 이미지 높이', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => '파일 소스', //cpg1.4
  'SceneType' => '씬 타입', //cpg1.4
  'CustomerRender' => '커스토머 렌더', //cpg1.4
  'ExposureMode' => '익스포져 모드', //cpg1.4
  'WhiteBalance' => '화이트 발란스', //cpg1.4
  'DigitalZoomRatio' => '디지탈 줌 비율', //cpg1.4
  'SceneCaptureMode' => '씬 캪쳐 모드', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => '콘트라스트', //cpg1.4
  'Saturation' => '채도', //cpg1.4
  'Sharpness' => '샤프니스', //cpg1.4
  'ManageExifDisplay' => 'Exif 보기 관리', //cpg1.4
  'submit' => '보냄', //cpg1.4
  'success' => '성공적으로 정보수정 완료.', //cpg1.4
  'details' => '세부사항', //cpg1.4
);

$lang_display_comments = array(
  'OK' => '등록',
  'edit_title' => '코멘트 편집',
  'confirm_delete' => '이 코멘트를 삭제하겠습니까 ?', //js-alert
  'add_your_comment' => '코멘트 등록',
  'name'=>'이름',
  'comment'=>'코멘트',
  'your_name' => '지매',
  'report_comment_title' => '이 코메트를 관리자에게 알림', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => '화면을 클릭하시면 창이 닫힙니다',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'e-card 보내기',
  'invalid_email' => '<font color="red"><b>주의</b></font>: 유효하지 않은 이메일 주소:', //cpg1.4
  'ecard_title' => '당신에게 %s가 보낸 e-card',
  'error_not_image' => 'ecard로 이미지만 전송할 수 있습니다.',
  'view_ecard' => 'e-card 가 정확하게 보여지지 않을 경우 교체 경로', //cpg1.4
  'view_ecard_plaintext' => 'ecard를 미리보기 위하여, url을 브라우저의 주소창에 복사하세요:', //cpg1.4
  'view_more_pics' => '더 많은 사진 보기 !', //cpg1.4
  'send_success' => 'ecard가 발송되었습니다',
  'send_failed' => '죄송합니다, 서버가 귀하의 e-card를 보낼 수 없습니다.',
  'from' => '보낸이',
  'your_name' => '보낸이 성명',
  'your_email' => '보낸이 이메일 주소',
  'to' => '받는이',
  'rcpt_name' => '받는이 성명',
  'rcpt_email' => '받는이 이메일 주소',
  'greetings' => '제목', //cpg1.4
  'message' => '메세지', //cpg1.4
  'ecards_footer' => '보맨이 %s IP 주소 %s 시각 %s (갤러리 시각)', //cpg1.4
  'preview' => 'ecard 미리보기', //cpg1.4
  'preview_button' => '미리보기', //cpg1.4
  'submit_button' => 'ecard 발송', //cpg1.4
  'preview_view_ecard' => 'ecard가 생성이 되면 이것은 그곳으로의 교체경로가 됩니다. 미리보기에서는 작동하지 않습니다.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => '관리자에게 알리기', //cpg1.4
  'invalid_email' => '<b>경고</b> : email 주소 오류 !', //cpg1.4
  'report_subject' => ' %s 가 갤러리 %s에서 보낸 보고서', //cpg1.4
  'view_report' => '리포트가 정확히 보이지 않을 때의 교체경로', //cpg1.4
  'view_report_plaintext' => '리포트를 보시려면, 브라우저 주소창에 이 url을 잘라내어 붙이세요:', //cpg1.4
  'view_more_pics' => '갤러리', //cpg1.4
  'send_success' => '귀하의 보고서가 발송 되었습니다.', //cpg1.4
  'send_failed' => '미안합니다. 서버가 귀하의 보고서를 보낼 수 없습니다...', //cpg1.4
  'from' => '보낸이', //cpg1.4
  'your_name' => '귀하의 성명', //cpg1.4
  'your_email' => '귀하의 이메일 주소', //cpg1.4
  'to' => '받는이', //cpg1.4
  'administrator' => '관리자/모드', //cpg1.4
  'subject' => '제목', //cpg1.4
  'comment_field_name' => '코멘트에 "%s" 가 작성', //cpg1.4
  'reason' => '사유', //cpg1.4
  'message' => '메세지', //cpg1.4
  'report_footer' => '%s가 IP %s에서 보냄 : %s (갤러리 시각)', //cpg1.4
  'obscene' => '부도덕함', //cpg1.4
  'offensive' => '불쾌함', //cpg1.4
  'misplaced' => '토픽과 무관/잘못 위치선정', //cpg1.4
  'missing' => '분실', //cpg1.4
  'issue' => '오류/볼 수 없음', //cpg1.4
  'other' => '기타', //cpg1.4
  'refers_to' => '다음에 관련한 파일 리포트', //cpg1.4
  'reasons_list_heading' => '보고 동기:', //cpg1.4
  'no_reason_given' => '사유 없음', //cpg1.4
  'go_comment' => '코멘트로 가기', //cpg1.4
  'view_comment' => '코멘트와 함께 전체 보고서 보기', //cpg1.4
  'type_file' => '파일', //cpg1.4
  'type_comment' => '코멘트', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => '이미지 상세정보',
  'album' => '앨범',
  'title' => '이미지 제목',
  'filename' => '파일명', //cpg1.4
  'desc' => '이미지 설명',
  'keywords' => '검색 키워드',
  'new_keyword' => '신규 키워드', //cpg1.4
  'new_keywords' => '신규 키워드 발견', //cpg1.4
  'existing_keyword' => '존재하는 키워드', //cpg1.4
  'pic_info_str' => '%s &times; %s - %s KB - %s 조회 - %s 평가',
  'approve' => '파일 승인',
  'postpone_app' => '승인 연기',
  'del_pic' => '이미지 삭제',
  'del_all' => '모든 이미지 삭제', //cpg1.4
  'read_exif' => 'EXIF info 를 다시보기',
  'reset_view_count' => '조회수 지우기',
  'reset_all_view_count' => '모든 조회수 지우기', //cpg1.4
  'reset_votes' => '평가 지우기',
  'reset_all_votes' => '모든 평가 지우기', //cpg1.4
  'del_comm' => '코멘트 지우기',
  'del_all_comm' => '모든 코멘트 지우기', //cpg1.4
  'upl_approval' => '업로드 승인', //cpg1.4
  'edit_pics' => '이미지 편집',
  'see_next' => '다음',
  'see_prev' => '이전',
  'n_pic' => '%s 이미지',
  'n_of_pic_to_disp' => '표시할 이미지수',
  'apply' => '변경 적용',
  'crop_title' => '코퍼마인 사진 편집기',
  'preview' => '미리보기',
  'save' => '이미지 저장',
  'save_thumb' =>'썸네일로 저장',
  'gallery_icon' => '이것을 나의 아이콘으로 만들기', //cpg1.4
  'sel_on_img' =>'선택은 모두 이미지 위에서 하여야 합니다!', //js-alert
  'album_properties' =>'앨범 프로퍼티', //cpg1.4
  'parent_category' =>'상위 카테고리', //cpg1.4
  'thumbnail_view' =>'쎔네일 보기', //cpg1.4
  'select_unselect' =>'모두 선택/선택해제', //cpg1.4
  'file_exists' => "목적지 파일 '%s' 이미 존재.", //cpg1.4
  'rename_failed' => " '%s' 을 '%s' 로 이름바꾸기 실패.", //cpg1.4
  'src_file_missing' => "원래 파일'%s' 을 분실하였읍니다.", // cpg 1.4
  'mime_conv' => " '%s' 을 '%s' 로 변환할 수 없습니다",//cpg1.4
  'forb_ext' => '파일 확장 금지.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => '자주 묻는 질문',
  'toc' => '목차',
  'question' => '질문: ',
  'answer' => '답변: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '일반적인 FAQ',
  array('왜 등록을 해야하나요?', '관리자에 따라서 등록이 필요 혹은 불필요합니다. 등록을 하면 업로드, 즐겨찾기, 사진 평가 그리고 코멘트 기록등의 기능이 주어집니다.', 'allow_user_registration', '1'),
  array('어떻게 등록을 하나요?', '&quot;회원등록&quot;으로 가서 필수 항목(원하실 경우는 선택항목포함)을 입력하세요.<br />관리자가 이메일 통보기능을 설정하였으면 귀하가 회원정보를 전송한 후에 입력한 이메일에 회원자격을 활성화하는 방법을 알려줍니다. 로그인을 하려면 회원자격이 활성화되어 있어야 합니다.', 'allow_user_registration', '1'), //cpg1.4
  array('어떻게 로그인을 하나요?', '&quot;로그인&quot;으로 가서, 아이디와 비밀번호를 입력하고 &quot;기억하기&quot;를 선택하세요. 이 사이트를 떠나는 경우에도 다시 로그인 할 수 있습니다.<br /><b>중요: &quot;기억하기&quot;를 사용하기 위하여는 쿠키사용이 가능하여야 하고 이 사이트의 쿠키가 삭제되면 안됩니다.</b>', 'offline', 0),
  array('왜 로그인이 되지 않나요?', '회원등록을 하고 이메일로 받은 경로를 클릭하였나요?. 그 경로로 귀하의 계정을 활성화합니다. 그외의 로그인문제는 사이트 관리자에게 연락하세요.', 'offline', 0),
  array('비밀번호를 잊었으면 어떻하지요?', '사이트가 &quot;비밀번호 분실&quot; 경로를 갖고 있으면 그것을 사용하세요. 그렇지 않으면 관리자에게 연락을 하여 새 비밀번호를 받으세요.', 'offline', 0),
  //array('이메일 주소가 바뀌었으면 어떻게 하나요?', '로그인하여 &quot;개인정보&quot;를 통하여 귀하의 이메일 주소를 변경하세요.', 'offline', 0),
  array('어떻게 사진을 &quot;즐겨찾기&quot;에 저장하나요?', '이미지를 클릭하고 &quot;사진 정보&quot;경로를 클릭하세요. (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); 아래에 있는 사진정보로 내려가서 &quot;즐겨찾기에 추가&quot;를 클릭하세요.<br />관리자가 &quot;파일 정보&quot; 보여주기를 디폴트로 선택하였을 수도 있습니다.<br />중요:쿠키사용이 가능하여야 하고 이 사이트의 쿠키가 삭제되면 안됩니다.', 'offline', 0),
  array('파일을 어떻게 평가하나요?', '썸네일을 클릭하고 아래로 내려가서 평점을 선택하세요.', 'offline', 0),
  array('어떻게 코멘트를 기록하나요?', '썸네일을 클릭하고 아래로 내려가서 코멘트를 입력하세요.', 'offline', 0),
  array('어떻게 사진을 업로드하나요?', '&quot;이미지 업로드&quot;에 가서 업로드하려고 하는 앨범을 선택하세요. &quot;찾아보기&quot;를 클릭하여 업로드할 파일을 찾은 후에, &quot;열기.&quot;를 클릭하고 다음을 클릭하세요. 제목과 설명을 입력한 후에 &quot;다음&quot;을 클릭하세요.<br /><br />또는 <b>Windows XP</b>를 사용하는 사용자는 XP Publishing 마법사를 사용하여 개인소유의 앨범에 여러 파일을 직접 업로드 할 수 있습니다.<br />사용 방법은 <a href="xp_publish.php">여기를 클릭하세요.</a>', 'allow_private_albums', 1), //cpg1.4
  array('어느곳에 사진을 업로드하나요?', '&quot;개인 갤러리&quot;에 있는 앨범에 파일을 업로드 할 수 있습니다. 또한 관리자는 귀하에게 메인 갤러리에 있는 앨범에 이미지를 업로드할 권한을 줄 수 있습니다.', 'allow_private_albums', 0),
  array('업로드할 수 있는 사진의 크기와 타입은 무엇인가요?', '사진의 크기와 타입(jpg, png, 등등...)은 관리자에 의하여 결정됩니다.', 'offline', 0),
  array('어떻게 &quot;개인 갤러리&quot;에 앨범을 생성,이름변경 그리고 삭제 할 수 있나요?', '&quot;관리자모드&quot;로 이동하세요.<br />&quot;개인앨범 생성/의뢰&quot;로 가서 &quot;생성&quot;을 클릭하세요. &quot;새 앨범&quot;을 원하는 이름으로 바꾸세요.<br />갤러리의 앨범명을 바꿀 수 있습니다.<br />&quot;변경 적용&quot;을 클릭하세요.', 'allow_private_albums', 0),
  array('어떻게 나의 앨범을 관람하는 사용자들을 제한하고 변경하나요?', '&quot;관리자모드&quot;로 가세요.<br />&quot;개인앨범 수정으로 가세요. &quot;앨범 수정&quot; 바에서 변경하려는 앨범을 선택하세요.<br />이곳에서 이름, 설명, 썸네일 사진, 보기 제한 그리고 코멘트/평가 승락등을 바꿀 수 있습니다.<br /> &quot;앨범 수정&quot;을 클릭하세요.', 'allow_private_albums', 0),
  array('어떻게 다른 사용자들의 갤러리를 볼 수 있나요?', '&quot;앨범 목록&quot;으로 가서 &quot;개인 갤러리&quot;를 선택하세요.', 'allow_private_albums', 0),
  array('쿠기는 무엇인가요?', '쿠키는 웹사이트에서 보내지어 귀하의 컴퓨터에 저장되는 텍스트로 구성된 데이타입니다.<br />쿠키는 사용자가 사이트를 떠난 후에 다시 로그인 없이 되돌아 올 수 있는 등의 자질구레한 일들을 제공합니다.', 'offline', 0),
  array('어떻게 이 프로그램을 얻을 수 있나요?', '코퍼마인은 GNU GPL 아래 제공되는 무료 멀티미디어 갤러리입니다. 다양한 기능을 갖고 있으며 여러 플래트폼에 장착을 할 수있습니다.  <a href="http://coppermine.sf.net/">코퍼마인 홈페이지</a>를 방문하여 자세한 사항과 다운로드를 받으세요.', 'offline', 0),

  '사이트 둘러보기',
  array('&quot;앨범 목록&quot;은 무엇인가요?', '현재 위치한 모든 카타고리와 각 앨범의 경로를 보여줍니다. 귀하가 카타고리 안에 있지 않으면, 전체 갤러리와 각 카타고리의 경로를 보여줍니다. 썸네일이 카타고리의 경로일 수 있습니다.', 'offline', 0),
  array('&quot;개인 갤러리&quot;는 무엇인가요?', '사용자가 각자의 갤러리를 생성하고 앨범을 추가, 삭제 그리고 변경할 수 있습니다. 그리고 파일을 그곳에 업로드합니다.', 'allow_private_albums', 1), //cpg1.4
  array('&quot;관리자 모드&quot; 와 &quot;사용자 모드&quot;의 차이는 무엇인가요?', '관리자 모드일 경우 사용자가 그들의 갤러리를 변경합니다(관리자가 허용하는 경우에는 다른 것들도).', 'allow_private_albums', 0),
  array('&quot;업로드 이미지&quot;는 무엇인가요?', '이 기능으로 사용자 혹은 관리자가가 선택한 갤러리로 사진 업로드를 수행합니다 (크기와 타입은 관리자가 설정).', 'allow_private_albums', 0),
  array('&quot;최근 이미지&quot;는 무엇인가요?', '가장 최근에 업로드한 파일들을 보여줍니다.', 'offline', 0),
  array('&quot;최근 코멘트&quot;는 무엇인가요?', '가장 최근에 코멘트를 기록한 파일들을 보여줍니다.', 'offline', 0),
  array('&quot;최다 조회&quot;는 무엇인가요?', '모든 사용자(로그인에 관계 없이)로부터 가장 많이 조회한 이미지들을 보여줍니다.', 'offline', 0),
  array('&quot;최고 평점&quot;은 무엇인가요?', '사용자가 최고 평점한 이미지들과 그들의 평균 평점을 보여줍니다(예: 다섯회원이 각기 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> 을 주었으면: 파일의 평균 평점은 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> 입니다 ;다섯 회원이 파일에게 1에서 5까지 (1,2,3,4,5) 평점을 주었으면 평균 <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />평균 평점은 <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (최상) 에서 <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (아주나쁨)까지.', 'offline', 0),
  array('&quot;즐겨찾기&quot;는 무엇인가요?', '사용자가 선택한 즐겨찾기 파일을 쿠키에 기록하여 귀하의 컴퓨터에 전송하여 줍니다.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => '비밀기호 기억자',
  'err_already_logged_in' => '이미 로그인 되었습니다 !',
  'enter_email' => '이메일 주소를 입력하세요.', //cpg1.4
  'submit' => '보냄',
  'failed_sending_email' => '비밀번호 기억자 이메일로 보낼 수 없읍니다 !',
  'email_sent' => '아이디와 비밀번호가 이메일로 %s 발송되었습니다 ',
  'err_unk_user' => '선택한 사용자는 존재하지 않습니다!',
  'passwd_reminder_subject' => '%s - 비밀번호 기억자',
  'passwd_reminder_body' => '기억을 돕기 위해 다음의 로그인자료를 요청하였습니다:
아이디: %s
비밀번호: %s
클릭 %s ',
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => '그룹', //cpg1.4
  'permissions' => '퍼미션', //cpg1.4
  'public_albums' => '공개 앨범 업로드', //cpg1.4
  'personal_gallery' => '개인 갤러리', //cpg1.4
  'upload_method' => '업로드 방법', //cpg1.4
  'disk_quota' => '할당량', //cpg1.4
  'rating' => '평점', //cpg1.4
  'ecards' => 'Ecards', //cpg1.4
  'comments' => '코멘트', //cpg1.4
  'allowed' => '허용', //cpg1.4
  'approval' => '승인', //cpg1.4
  'boxes_number' => '박스 갯수', //cpg1.4
  'variable' => '가변', //cpg1.4
  'fixed' => '고정', //cpg1.4
  'apply' => '변경사항 적용',
  'create_new_group' => '새그룹 생성',
  'del_groups' => '선택한 그룹삭제',
  'confirm_del' => '주의, 그룹을 삭제하면 이 그룹에 속한 사용자들은 \'Registered\' 그룹으로 옮겨집니다.  !\n\n계속하시겠습니까 ?', //js-alert
  'title' => '사용자그룹 관리',
  'num_file_upload' => '파일 업로드 박스', //cpg1.4
  'num_URI_upload' => 'URI 업로드 박스', //cpg1.4
  'reset_to_default' => '디폴트 이름으로 리셋 (%s) - 권장사항!', //cpg1.4
  'error_group_empty' => '그룹테이블이 비어 있습니다 !<br /><br />디폴트 그룹이 생성되었습니다. 이 페이지를 리로드하세요', //cpg1.4
  'explain_greyed_out_title' => '왜 이것이 뿌옇지요?', //cpg1.4
  'explain_guests_greyed_out_text' => '이그룹의 프로퍼티를 변경할 수 없습니다. 왜냐하면 설정에서 옵션 &quot; 로그인 하지 않은 사람의 허용 (손님 혹은 익명인)&quot; 을 &quot;아니오&quot; 로 하였기때문입니다. 모든 손님 (그룹 %s의 회원) 은 로그인 밖에는 할 수 없습니다. 그러므로 그룹설정이 그들에게 적용하지 않습니다.', //cpg1.4
  'explain_banned_greyed_out_text' => '그룹 %s의 프로퍼티를 수정할 수 없습니다. 왜냐하면 그룹의 회원은 할 수 없기 때문입니다.', //cpg1.4
  'group_assigned_album' => '할당된 앨범', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => '환영합니다 !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => '앨범을 삭제하시겠습니까? \\n모든 이미지와 코멘트도 삭제됩니다.', //js-alert
  'delete' => '삭제',
  'modify' => '앨범설정',
  'edit_pics' => '이미지별 정보수정 ',
);

$lang_list_categories = array(
  'home' => '홈',
  'stat1' => '<b>[pictures]</b> 파일 <b>[albums]</b> 앨범  <b>[cat]</b> 카테고리 <b>[comments]</b> 코멘트 조회 <b>[views]</b> 회',
  'stat2' => '<b>[pictures]</b> 파일 <b>[albums]</b> 앨범 조회 <b>[views]</b> 회',
  'xx_s_gallery' => '%s의 갤러리',
  'stat3' => '<b>[pictures]</b> 파일 <b>[albums]</b> 앨범 <b>[comments]</b> 코멘트 조회 <b>[views]</b> 회',
);

$lang_list_users = array(
  'user_list' => '사용자(회원)목록',
  'no_user_gal' => '사용자(회원) 갤러리가 없습니다.',
  'n_albums' => '%s 앨범',
  'n_pics' => '%s 이미지',
);

$lang_list_albums = array(
  'n_pictures' => '%s 이미지',
  'last_added' => ', %s 에 업로드한 최근 이미지',
  'n_link_pictures' => '%s 연결된 이미지', //cpg1.4
  'total_pictures' => ' 총 %s 이미지', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => '키워드 관리', //cpg1.4
  'edit' => '편집', //cpg1.4
  'delete' => '삭제', //cpg1.4
  'search' => '검색', //cpg1.4
  'keyword_test_search' => '새창에서 %s를 검색', //cpg1.4
  'keyword_del' => '키워드 %s를 삭제', //cpg1.4
  'confirm_delete' => '키워드 %s를 모든 갤러리에서 삭제하시겠습니까?', //cpg1.4  // js-alert
  'change_keyword' => '키워드 수정', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => '로그인',
  'enter_login_pswd' => '아이디와 비밀번호를 입력하세요!',
  'username' => '아이디',
  'password' => '비밀번호',
  'remember_me' => '기억하기',
  'welcome' => '%s 님 로그인 되었습니다.',
  'err_login' => '*** 로그인 되지 않았습니다 ***',
  'err_already_logged_in' => '이미 로그인 되었습니다 !',
  'forgot_password_link' => '비밀번호 분실',
  'cookie_warning' => '귀하의 브라우저는 스크립 쿠키를 수락하지 않습니다', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => '로그아웃',
  'bye' => '%s님 로그아웃 되었습니다 !!',
  'err_not_loged_in' => '로그인 되지 않았습니다 !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => '닫음', //cpg1.4
  'submit' => '보냄', //cpg1.4
  'up' => '상위 레벨로', //cpg1.4
  'current_path' => '현재 경로', //cpg1.4
  'select_directory' => '디렉토리를 선택하세요', //cpg1.4
  'click_to_close' => '이창을 닫으시려면 이미지에 클릭을 하세요',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => '%s님 앨범 업데이트',
  'general_settings' => '기본설정',
  'alb_title' => '앨범 제목',
  'alb_cat' => '앨범 카테고리',
  'alb_desc' => '앨범 설명',
  'alb_keyword' => '앨범 키워드', //cpg1.4
  'alb_thumb' => '앨범 썸네일',
  'alb_perm' => '앨범권한 설정',
  'can_view' => '앨범공개 설정',
  'can_upload' => '방문자가 이미지 업로드할 수 있슴',
  'can_post_comments' => '방문자가 코멘트 쓸 수 있슴',
  'can_rate' => '방문자가 평가할 수 있슴',
  'user_gal' => '사용자 갤러리',
  'no_cat' => '* 최상위 카테고리(메인) *',
  'alb_empty' => '앨범이 비어있습니다.',
  'last_uploaded' => '최근 업로드',
  'public_alb' => '모든 사람 (공개 앨범)',
  'me_only' => '나만 보기',
  'owner_only' => '앨범 주인 (%s) 만',
  'groupp_only' => '\'%s\' 그룹의 회원만 ',
  'err_no_alb_to_modify' => '귀하는 데이타베이스의 앨범을 수정할 수 없습니다.',
  'update' => '앨범 편집',
  'reset_album' => '앨범 리셋', //cpg1.4
  'reset_views' => '앨범 조회수를 &quot;0&quot;  %s 에 존재하는 ', //cpg1.4
  'reset_rating' => '%s 에 있는 모든 이미지의 평점을 리셋', //cpg1.4
  'delete_comments' => '%s 에 있는 모든 코멘트를 삭제', //cpg1.4
  'delete_files' => '%s복원불가능하게%s  %s에 존재하는 모든 이미지 삭제 ', //cpg1.4
  'views' => '조회', //cpg1.4
  'votes' => '평가', //cpg1.4
  'comments' => '코멘트', //cpg1.4
  'files' => '이미지', //cpg1.4
  'submit_reset' => '변경제출', //cpg1.4
  'reset_views_confirm' => '확인합니다', //cpg1.4
  'notice1' => '(*) %s그룹%s 설정에 따라서 ',  //cpg1.4 //(do not translate %s!)
  'alb_password' => '앨범 비밀번호', //cpg1.4
  'alb_password_hint' => '앨범 비밀번호 힌트', //cpg1.4
  'edit_files' =>'이미지 편집', //cpg1.4
  'parent_category' =>'상위 카테고리', //cpg1.4
  'thumbnail_view' =>'썸네일 보기', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP 정보',
  'explanation' => '이것은 PHP-function에 의하여 생성된 결과입니다. <a href="http://www.php.net/phpinfo">phpinfo()</a>, 코퍼마인에서 표시된(오른쪽 편에 출력을 정돈).',
  'no_link' => '다른사람이 귀하의 phpinfo를 보는 것은 위험요소가 있습니다. 그래서 귀하가 관리자로 로그인해야만 이 페이지를 볼 수 있습니다. 이 경로를 다른사람에게 보내주어도 그들은 이 페이지를 참조할 수 없습니다.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => '사진 관리자', //cpg1.4
  'select_album' => '앨범 선택', //cpg1.4
  'delete' => '삭제', //cpg1.4
  'confirm_delete1' => '이 사진을 삭제하시겠습니까 ?', //cpg1.4
  'confirm_delete2' => '\n사진이 영구적으로 삭제되었습니다.', //cpg1.4
  'apply_modifs' => '변경 적용', //cpg1.4
  'confirm_modifs' => '변경 확인', //cpg1.4
  'pic_need_name' => '사진 이름이 필요합니다 !', //cpg1.4
  'no_change' => '변동사항이 없습니다 !', //cpg1.4
  'no_album' => '* 앨범 없음 *', //cpg1.4
  'explanation_header' => '여기서 기술한 커스톰 배열 방식은 오직 다음과 같은 경우에 적용을 받습니다.', //cpg1.4
  'explanation1' => '관리자가 설정에 있는 "이미지 디폴트 배열 방식"을 "위치별 역순" 혹은 "위치별 순차배열" (개별적으로 다른 배열방식을 선택하지 않은 사용자를 위한 글로벌 세팅)을 한 경우', //cpg1.4
  'explanation2' => '사용자가 썸네일 페이지에 "위치별 역순" 혹은 "위치별 순차배열" 을 선택한 경우 (사용자 세팅별로)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => '이 플러그인을 제거하시겠습니까?', //cpg1.4
  'confirm_delete' => '이 플러그인을 삭제하시겠습니까?', //cpg1.4
  'pmgr' => '플러그인 관리자', //cpg1.4
  'name' => '이름', //cpg1.4
  'author' => '저자', //cpg1.4
  'desc' => '설명', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => '설치된 플러그인', //cpg1.4
  'n_plugins' => '설치되지 않은 플러그인', //cpg1.4
  'none_installed' => '설치된것 없음', //cpg1.4
  'operation' => '운영', //cpg1.4
  'not_plugin_package' => '이 파일 업로드는 플러그인 패케지가 아닙니다.', //cpg1.4
  'copy_error' => '패케지를 플러그인 폴더에 복사하는데 오류가 발생하였습니다.', //cpg1.4
  'upload' => '업로드', //cpg1.4
  'configure_plugin' => '플러그인 설정', //cpg1.4
  'cleanup_plugin' => '플러그인 제거', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => '이미 평가하셨습니다.',
  'rate_ok' => '평가해 주셔서 감사합니다.',
  'forbidden' => '본인의 이미지를 평가할 수 없습니다.',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
{SITE_NAME} 사이트의 관리자가 문제가 제기될 만한 자료를 가능한 신속히 삭제 혹은 편집하려고 시도를 하여도 모든 것들을 검사하는 것은 불가능합니다. 그러므로 이 사이트에 올려진 자료들은 관리자나 웹마스터의 의견이 아닌(이들이 작성한 것 제외) 작성자의 관점과 의견임을 인지하여야 합니다. 그러므로 관리자나 웹마스터는 이에 대하여 책임이 없습니다.<br />
<br />
귀하는 욕이나 외설적이거나 야비하거나 다른사람을 비방, 증오, 위협하는 자료 혹은 법에 어긋나는 자료를 올리지 않기를 동의합니다. 귀하는 {SITE_NAME} 사이트의 관리자나 웹마스터나 사회자가 언제든지 어떤 내용이든지 적절하게 편집 혹은 수정할 권리가 있음을 동의합니다. 귀하는 회원으로서 다음에 기입할 정보들이 데이타베이스에 저장되는 것을 동의 합니다. 이 정보들은 귀하가 웹마스터나 관리자에게 승락하지 않으면 다른사람들에게 절대로 공개되지 않을 것이고, 데이타의 손상을 가져오는 해킹에 대하여는 웹마스터나 관리자에게는 책임이 없습니다.<br />
<br />
이 사이트는 귀하의 컴퓨터에 정보를 수록하기 위하여 쿠기를 사용합니다. 이 쿠키는 귀하의 관람의 재미를 높이기 위하여 사용됩니다. 이메일 주소는 귀하의 등록 정보와 비밀번호를 확인하기 위해서만 사용이 됩니다.<br />
<br />
아래의 '동의합니다'를 클릭함으로 귀하는 이 조건들에 확실히 동의합니다.
EOT;

$lang_register_php = array(
  'page_title' => '회원등록',
  'term_cond' => '등록약관 및 이용안내',
  'i_agree' => '동의합니다!',
  'submit' => '회원등록',
  'err_user_exists' => '아이디가 이미 존재합니다, 다른 아이디를 입력하세요.',
  'err_password_mismatch' => '비밀번호가 동일하지 않습니다, 다시 입력하세요.',
  'err_uname_short' => '아이디는 2 글자 이상입니다.',
  'err_password_short' => '비밀번호는 2 글자 이상입니다.',
  'err_uname_pass_diff' => '아이디와 비밀번호는 달라야합니다.',
  'err_invalid_email' => '이메일 주소가 무효합니다.',
  'err_duplicate_email' => '입력한 이메일을 사용하는 기존 회원이 있습니다.',
  'enter_info' => '등록 정보 입력',
  'required_info' => '필수입력 항목',
  'optional_info' => '선택입력 항목',
  'username' => '아이디',
  'password' => '비밀번호',
  'password_again' => '비밀번호 재입력',
  'email' => '이메일',
  'location' => '지역',
  'interests' => '관심분야',
  'website' => '홈페이지',
  'occupation' => '직업',
  'error' => '오류',
  'confirm_email_subject' => '%s - 등록 확인',
  'information' => '안내',
  'failed_sending_email' => '등록 확인 이메일을 보낼 수 없습니다 !',
  'thank_you' => '등록하여 주셔서 감사합니다.<br /><br />귀하가 제공한 이메일로 계정활성화하는 방법을 발신하였습니다.',
  'acct_created' => '계정이 생성되었습니다. 아이디와 비밀번호로 로그인을 하실 수 있습니다.',
  'acct_active' => '귀하의 계정이 활성화 되었습니다. 아이디와 비밀번호로 로그인을 하실 수 있습니다.',
  'acct_already_act' => '계정이 이미 활성화 되었습니다 !', //cpg1.4
  'acct_act_failed' => '이 계정을 활성화 할 수 없습니다 !',
  'err_unk_user' => '선택한 사용자는 존재하지 않습니다 !',
  'x_s_profile' => '%s 의 개인정보',
  'group' => '그룹',
  'reg_date' => '회원가입일자',
  'disk_usage' => '디스크 사용량',
  'change_pass' => '비밀번호 변경',
  'current_pass' => '현재 비밀번호',
  'new_pass' => '새로운 비밀번호',
  'new_pass_again' => '새 비밀번호 재입력',
  'err_curr_pass' => '현재 비밀번호가 틀립니다.',
  'apply_modif' => '변경사항 적용',
  'change_pass' => '비밀번호 변경',
  'update_success' => '개인정보가 업데이트 되었습니다.',
  'pass_chg_success' => '비밀번호가 변경 되었습니다.',
  'pass_chg_error' => '비밀번호가 변경 되지 않았습니다.',
  'notify_admin_email_subject' => '%s - 등록 통보',
  'last_uploads' => '최근 업로드 파일.<br />모든 업로드를 보기:', //cpg1.4
  'last_comments' => '최근 코멘트.<br />모든 코멘트 보기: ', //cpg1.4
  'notify_admin_email_body' => '갤러리에 새로운 회원 "%s" 등록하였습니다',
  'pic_count' => '업로드 파일', //cpg1.4
  'notify_admin_request_email_subject' => '%s - 등록 신청', //cpg1.4
  'thank_you_admin_activation' => '감사합니다.<br /><br />계정활성화 요청이 관리자에게 통보되었습니다. 승락시에는 이메일을 통보를 보내드립니다.', //cpg1.4
  'acct_active_admin_activation' => '계정이 활성화 되었습니다. 이메일이 회원에게 발송되었습니다.', //cpg1.4
  'notify_user_email_subject' => '%s - 활성화 통보', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
 {SITE_NAME}사이트에 가입을 하여서 감사합니다.

 "{USER_NAME}"사이트의 회원으로 계정을 활성화 하려면  , 귀하의 웹브라우저에 아래 링크를 복사하여 붙이세요.

<a href="{ACT_LINK}">{ACT_LINK}</a>

감사합니다,

 {SITE_NAME} 사이트 운영자 

EOT;

$lang_register_approve_email = <<<EOT
새 회원 "{USER_NAME}" 갤러리에 등록하였습니다.

계정을 활성화 하시려면 , 아래의 링크를 클릭하거나 귀하의 웹브라우저에 그것을 복사하여 붙이세요.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
귀하의 계정은 승인이 되어 사용하실 수 있습니다.

로그인 하세요 <a href="{SITE_LINK}">{SITE_LINK}</a> 회원명 "{USER_NAME}"


감사합니다,

 {SITE_NAME} 운영자 

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => '코멘트 보기',
  'no_comment' => '리뷰할 코멘트가 없습니다',
  'n_comm_del' => '%s 코멘트가 삭제되었음',
  'n_comm_disp' => '표시할 코멘트 수',
  'see_prev' => '이전 보기',
  'see_next' => '다음 보기',
  'del_comm' => '선택한 코멘트 삭제',
  'user_name' => '이름', //cpg1.4
  'date' => '일자', //cpg1.4
  'comment' => '코멘트', //cpg1.4
  'file' => '파일', //cpg1.4
  'name_a' => '아이디 순차배열', //cpg1.4
  'name_d' => '아이디 역순', //cpg1.4
  'date_a' => '일자 순차배열', //cpg1.4
  'date_d' => '일자 역순', //cpg1.4
  'comment_a' => '코멘트 순차배열', //cpg1.4
  'comment_d' => '코멘트 역순', //cpg1.4
  'file_a' => '파일 순차배열', //cpg1.4
  'file_d' => '파일 역순', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => '파일 모으기를 위한 검색', //cpg1.4
  'submit_search' => '검색', //cpg1.4
  'keyword_list_title' => '키워드 목록', //cpg1.4
  'keyword_msg' => '위의 목록은 모든 것을 포함한 것이 아닙니다. 제목이나 설명에 있는 단어를 포함하지 않습니다. full-text 검색을 하세요.',  //cpg1.4
  'edit_keywords' => '키워드 편집', //cpg1.4
  'search in' => '검색할 곳:', //cpg1.4
  'ip_address' => 'IP 주소', //cpg1.4
  'fields' => '검색 항목', //cpg1.4
  'age' => '나이', //cpg1.4
  'newer_than' => '이전', //cpg1.4
  'older_than' => '이후', //cpg1.4
  'days' => '일', //cpg1.4
  'all_words' => '모두 매치 (AND)', //cpg1.4
  'any_words' => '일부단어 매치(OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => '제목', //cpg1.4
  'caption' => '캡션', //cpg1.4
  'keywords' => '키워드', //cpg1.4
  'owner_name' => '소유자명', //cpg1.4
  'filename' => '파일명', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => '새 이미지 검색',
  'select_dir' => '디렉토리 지정',
  'select_dir_msg' => '이 기능은 FTP를 이용하여 서버에 업로드된 파일을 일괄 추가하는 기능입니다.<br /><br />업로드된 파일이 존재하는 디렉토리를 선택하세요.', //cpg1.4
  'no_pic_to_add' => '추가할 파일이 없습니다.',
  'need_one_album' => '이 기능을 사용하려면 최소한 한 앨범이 필요합니다.',
  'warning' => '주의',
  'change_perm' => '스크립트가 이 디렉토리에 수록을 할 수 없습니다. 파일을 추가 하기전에 이것의 모드를 755 혹은 777로 변경하세요 !',
  'target_album' => '<b>&quot;</b>%s<b>&quot;에 있는 파일을 </b>%s로',
  'folder' => '폴더',
  'image' => '이미지',
  'album' => '앨범',
  'result' => '결과',
  'dir_ro' => '쓰기 권한 없습니다. ',
  'dir_cant_read' => '읽기 권한 없습니다. ',
  'insert' => '갤러리에 새로운 파일 추가',
  'list_new_pic' => '새로운 파일 보기',
  'insert_selected' => '선택한 파일 추가',
  'no_pic_found' => '새로운 파일이 없음',
  'be_patient' => '기다리세요. 파일을 추가하기위한 스크립은 시간을 필요로 합니다.',
  'no_album' => '앨범을 선택하세요.',
  'result_icon' => '상세내역/새로고침을 위하여 클릭',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : 파일이 성공적으로 추가되었습니다.'.
                          '<li><b>DP</b> : 파일이 중복되었고 이미 데이타베이스에 존재합니다.'.
                          '<li><b>PB</b> : 파일을 추가할 수 없습니다. 설정과 파일을 위치하고자 하는 디렉토리의 승인을 확인하세요.'.
                          '<li><b>NA</b> : 파일을 추가할 앨범을 선택하지 않았습니다. 다음을 \'<a href="javascript:history.back(1)">이전</a>\' 누른후에 앨범을 선택하세요. 앨범이 없으면 <a href="albmgr.php">앨범을 먼저 생성하세요.</a></li>'.
                          '<li>만일 OK, DP, PB \'signs\' 이 나타나지 않으면, 부서진 파일을 클릭하여 PHP가 생성한 오류메시지를 보세요.'.
                          '<li>만일 브라우저가 시간이 초과되면, 새로고침버튼을 누르세요.'.
                          '</ul>',
  'select_album' => '앨범 선택',
  'check_all' => '모두 선택',
  'uncheck_all' => '모두 선택해제',
  'no_folders' => ' "albums" 폴더안에 아직 폴더가 없습니다. "albums" 폴더안에 최소 한개 이상의 커스톰 폴더을 생성했는지 확인하세요. 그리고 그곳에 FTP를 이용하여 파일을 업로드하세요. "userpics" 혹은 "edit" 폴더에 업로드하면 안됩니다. 이들은 http 업로드와 내부 사용을 위한 곳입니다.', //cpg1.4
   'albums_no_category' => '카타고리에 속하지 않는 앨범', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* 개인 앨범', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => '브라우저블 인터페이스 (권장사항)', //cpg1.4
  'edit_pics' => '이미지 수정', //cpg1.4
  'edit_properties' => '앨범 프로퍼티', //cpg1.4
  'view_thumbs' => '썸네일 보기', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => '이 칼럼 보기/숨기기', //cpg1.4
  'vote' => '평가 내역', //cpg1.4
  'hits' => '조회 내역', //cpg1.4
  'stats' => '평가 통계', //cpg1.4
  'sdate' => '일자', //cpg1.4
  'rating' => '평점', //cpg1.4
  'search_phrase' => '검색어', //cpg1.4
  'referer' => '관람자', //cpg1.4
  'browser' => '브라우저', //cpg1.4
  'os' => '운영 시스텀', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => '%s 로 배열', //cpg1.4
  'ascending' => '순차배열', //cpg1.4
  'descending' => '역순', //cpg1.4
  'internal' => '내부', //cpg1.4
  'close' => '닫기', //cpg1.4
  'hide_internal_referers' => '내부 관람자 숨김', //cpg1.4
  'date_display' => '일자 보기', //cpg1.4
  'submit' => '보냄/ 지움', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => '업로드 파일',
  'custom_title' => '고객 요청 양식',
  'cust_instr_1' => '업로드 박스의 커스텀 갯수를 선택할 수 있습니다. 하지만 아래 열거한 제한된 갯수 이상을 선택할 수 없습니다.',
  'cust_instr_2' => '요청한 박스 수',
  'cust_instr_3' => '파일 업로드 박스: %s',
  'cust_instr_4' => 'URI/URL 업로드 박스: %s',
  'cust_instr_5' => 'URI/URL 업로드 박스:',
  'cust_instr_6' => '파일 업로드 박스:',
  'cust_instr_7' => '지금 원하시는 업로드 박스의 각 타입 갯수를 입력하세요.  그리고 \'다음\'을 클릭하세요. ',
  'reg_instr_1' => '폼 생성을 위한 유효하지 않은 액션.',
  'reg_instr_2' => '아래의 업로드 박스를 이용하여 파일을 업로드 할 수 있습니다. 업로드 파일의 크기는 각각 %s KB 을 초과하면 안됩니다. \'파일 업로드\' 와 \'URI/URL 업로드\' 섹션의 업로드된 ZIP 파일은 압축상태로 남습니다.',
  'reg_instr_3' => 'zip된 파일이나 어카이브의 압축을 풀려면, \'ZIP 업로드 압축풀기\' 에 있는 파일 업로드박스를 사용하세요.',
  'reg_instr_4' => 'URI/URL 업로드 섹션을 이용하실 때, 파일에 대한 경로를 이와같이 하세요: http://www.mysite.com/images/example.jpg',
  'reg_instr_5' => '모두 입력을 완료하였으면 \'다음\'을 클릭하세요.',
  'reg_instr_6' => '비압축 ZIP 업로드:',
  'reg_instr_7' => '파일 업로드:',
  'reg_instr_8' => 'URI/URL 업로드:',
  'error_report' => '오류 보고서',
  'error_instr' => '다음의 업로드에 오류가 있습니다:',
  'file_name_url' => '파일명/URL',
  'error_message' => '오류 메시지',
  'no_post' => '파일이 POST에 의하지 않은 업로드.',
  'forb_ext' => '파일 확장 금지.',
  'exc_php_ini' => '파일 크기가 php.ini에서 허용한 값을 초과.',
  'exc_file_size' => 'CPG가 허용하는 파일크기 초과.',
  'partial_upload' => '오직 부분 업로드.',
  'no_upload' => '업로드가 발생하지 않았습니다.',
  'unknown_code' => '알수 없는 PHP 업로드 오류코드.',
  'no_temp_name' => '업로드 안됨 - 임시 명 없음.',
  'no_file_size' => '데이타 없음/파손',
  'impossible' => '이동할 수 없습니다.',
  'not_image' => '이미지가 아님/파손',
  'not_GD' => 'GD 확장자가 아닙니다.',
  'pixel_allowance' => '업로드된 사진의 너비와 높이가 갤러리 설정에서 지정한 값을 초과하였읍니다.', //cpg1.4
  'incorrect_prefix' => 'URI/URL 접두어가 부정확합니다.',
  'could_not_open_URI' => 'URI을 열수 없읍니다.',
  'unsafe_URI' => '안전 검증을 못함.',
  'meta_data_failure' => '메타 데이타 오류',
  'http_401' => '401 권한 없음',
  'http_402' => '402 지불 요망',
  'http_403' => '403 금지',
  'http_404' => '404 찾지 못함',
  'http_500' => '500 서버 내부 오류',
  'http_503' => '503 서비스를 사용할 수 없음',
  'MIME_extraction_failure' => 'MIME 을 결정할 수 없음.',
  'MIME_type_unknown' => '알수없는 MIME 타입',
  'cant_create_write' => '저장 파일을 생성할 수 없음.',
  'not_writable' => '저장파일에 기록을 할 수 없음.',
  'cant_read_URI' => 'URI/URL을 읽을 수 없음.',
  'cant_open_write_file' => 'URI 저장 파일을 열 수 없음.',
  'cant_write_write_file' => 'URI 저장 파일에 기록할 수 없음.',
  'cant_unzip' => 'unzip 할수 없음',
  'unknown' => '알수 없는 오류',
  'succ' => '업로드 성공',
  'success' => '%s 업로드가 완료되었습니다.',
  'add' => ' \'다음\'을 클릭하여 이미지를 앨범에 추가하세요.',
  'failure' => '업로드 실패',
  'f_info' => '파일 정보',
  'no_place' => '이전 파일을 배치할 수 없습니다.',
  'yes_place' => '이전 파일을 배치하였습니다.',
  'max_fsize' => '최대 허용 파일 크기는 %s KB',
  'album' => '앨범',
  'picture' => '이미지',
  'pic_title' => '이미지 제목',
  'description' => '이미지 설명',
  'keywords' => '키워드 (콤마로 분리)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">목록으로부터 삽입</a>', //cpg1.4
  'keywords_sel' =>'키워드 선택', //cpg1.4
  'err_no_alb_uploadables' => '귀하가 파일을 업로드하려고 하는 앨범이 존재하지 않습니다.',
  'place_instr_1' => '지금 파일을 앨범에 배치하세요.  지금 각 파일에 적절한 정보를 입력하세요.',
  'place_instr_2' => '배치할 파일이 더 있습니다. \'다음\'을 클릭하세요.',
  'process_complete' => '모든 파일을 성공적으로 수행하였습니다.',
   'albums_no_category' => '카테고리가 없는 앨범들', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* 개인 앨범', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => '앨범 선택', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => '닫음', //cpg1.4
  'no_keywords' => '미안합니다, 키워드가 없습니다!', //cpg1.4
  'regenerate_dictionary' => '사전 다시 만들기', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => '회원명단', //cpg1.4
  'user_manager' => '회원 관리자', //cpg1.4
  'title' => '회원 관리',
  'name_a' => '이름 순차',
  'name_d' => '이름 역순',
  'group_a' => '그룹 순차',
  'group_d' => '그룹 역순',
  'reg_a' => '등록일 순차',
  'reg_d' => '등록일 역순',
  'pic_a' => '이미지 갯수 순차',
  'pic_d' => '이미지 갯수 역순',
  'disku_a' => '디스크 사용량 순차',
  'disku_d' => '디스크 사용량 역순',
  'lv_a' => '최근 방문 순차',
  'lv_d' => '최근 방문 역순',
  'sort_by' => '배열을 ',
  'err_no_users' => '사용자 테이블이 공백!',
  'err_edit_self' => '본인 자신의 프로필을 편집할 수 없습니다.  \'개인 정보\'를 이용하세요',
  'edit' => '편집', //cpg1.4
  'with_selected' => '선택하여:', //cpg1.4
  'delete' => '삭제', //cpg1.4
  'delete_files_no' => '공개파일 보존(익명으로)', //cpg1.4
  'delete_files_yes' => '공개파일도 삭제', //cpg1.4
  'delete_comments_no' => '코멘트 보존(익명으로)', //cpg1.4
  'delete_comments_yes' => '코멘트도 삭제', //cpg1.4
  'activate' => '활성화', //cpg1.4
  'deactivate' => '비활성화', //cpg1.4
  'reset_password' => '비밀번호 리셋', //cpg1.4
  'change_primary_membergroup' => '1차 회원그룹 변경', //cpg1.4
  'add_secondary_membergroup' => '2차 회원그룹 추가', //cpg1.4
  'name' => '사용자 이름',
  'group' => '그룹',
  'inactive' => '비활성',
  'operations' => '실행메뉴',
  'pictures' => '이미지',
  'disk_space_used' => '사용량', //cpg1.4
  'disk_space_quota' => '할당량', //cpg1.4
  'registered_on' => '등록', //cpg1.4
  'last_visit' => '마지막 방문',
  'u_user_on_p_pages' => '%d 사용자 %d 페이지',
  'confirm_del' => '이 사용자를 삭제하시겠습니까 ? \\n사용자의 모든 이미지와 모든 앨범이 삭제됩니다.', //js-alert
  'mail' => '메일',
  'err_unknown_user' => '선택한 회원이 존재하지 않습니다 !',
  'modify_user' => '회원정보 수정',
  'notes' => '메모',
  'note_list' => '<li>현재의 비밀번호를 바꾸지 않으시려면,  "비밀번호" 란을 공란으로 남겨두세요.',
  'password' => '비밀번호',
  'user_active' => '활성화된 사용자',
  'user_group' => '사용자 그룹',
  'user_email' => '사용자 이메일',
  'user_web_site' => '사용자 홈페이지',
  'create_new_user' => '새로운 사용자 생성',
  'user_location' => '접속지',
  'user_interests' => '관심분야',
  'user_occupation' => '직업',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Recent uploads',
  'never' => '없음',
  'search' => '회원 검색', //cpg1.4
  'submit' => '보냄', //cpg1.4
  'search_submit' => '실행!', //cpg1.4
  'search_result' => '검색결과: ', //cpg1.4
  'alert_no_selection' => '최소한 한 사용자를 먼저 선택하세요!', //cpg1.4 //js-alert
  'password' => '비밀번호', //cpg1.4
  'select_group' => '그룹선택', //cpg1.4
  'groups_alb_access' => '그룹별 앨범 퍼미션', //cpg1.4
  'album' => '앨범', //cpg1.4
  'category' => '카테고리', //cpg1.4
  'modify' => '수정?', //cpg1.4
  'group_no_access' => '이 그룹은 특별한 액세스가 없습니다.', //cpg1.4
  'notice' => '알림', //cpg1.4
  'group_can_access' => '"%s" 만을 액세스할 수 있는 앨범', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'파일명으로 제목 수정', //cpg1.4
'제목 삭제', //cpg1.4
'썸네일 재작성과 사진크기 수정', //cpg1.4
'원래크기의 사진을 삭제하고 크기를 변경한 사진으로 대체', //cpg1.4
'웹스페이스를 확복하기 위하여 원래 혹은 중간의 사진을 삭제', //cpg1.4
'원래 코멘트를 삭제', //cpg1.4
'파일크기와 디멘죤을 다시 읽기 (수동으로 사진을 편집할 경우)', //cpg1.4
'조횟수를 리셋', //cpg1.4
'phpinfo 보기', //cpg1.4
'데이타베이스 갱신', //cpg1.4
'로그파일 보기', //cpg1.4
);
$lang_util_php = array(
  'title' => '관리자 유틸리티 (사진크기 변경)',
  'what_it_does' => '기능',
  'file' => '파일',
  'problem' => '오류', //cpg1.4
  'status' => '상태', //cpg1.4
  'title_set_to' => '제목설정',
  'submit_form' => '보냄',
  'updated_succesfully' => '수정 성공',
  'error_create' => '오류 발생',
  'continue' => '계속 이미지 처리',
  'main_success' => '파일 %s 는 성공적으로 메인파일로 사용되었습니다.',
  'error_rename' => '%s 을  %s 로 이름 변경을 하는데 오류 ',
  'error_not_found' => '파일 %s 을 찾을 수 없습니다.',
  'back' => '메인으로 가기',
  'thumbs_wait' => '썸네일 혹은 사진크기 변경중입니다. 기다리세요...',
  'thumbs_continue_wait' => '썸네일과 사진크기 변경을 수행중...',
  'titles_wait' => '제목 수정중, 기다리세요...',
  'delete_wait' => '제목 삭제중, 기다리세요...',
  'replace_wait' => '원래 사진을 삭제하고 크기가 변경된 사진으로 교체중, 기다리세요..',
  'instruction' => '빠른 지시',
  'instruction_action' => '명령 선택',
  'instruction_parameter' => '변수 설정',
  'instruction_album' => '앨범 선택',
  'instruction_press' => '%s을 누르세요',
  'update' => '썸네일 혹은/그리고 크기변경된 사진 수정',
  'update_what' => '무엇을 수정합니까',
  'update_thumb' => '썸네일만',
  'update_pic' => '크기가 변경된 사진만',
  'update_both' => '썸네일과 크기가 변경된 사진 모두',
  'update_number' => '한번 클릭에 처리할 이미지 수',
  'update_option' => '(시간초과 문제가 있으면 이 옵션을 낮게 설정하세요)',
  'filename_title' => '파일명 &rArr; 파일 제목',
  'filename_how' => '어떻게 파일명을 바꾸겠습니까?',
  'filename_remove' => '끝의 .jpg 을 없애고  _ (언더스코어) 공란으로 바꿈',
  'filename_euro' => '2003_11_23_13_20_20.jpg 을 23/11/2003 13:20로 바꿈',
  'filename_us' => '2003_11_23_13_20_20.jpg 을 11/23/2003 13:20로 바꿈',
  'filename_time' => '2003_11_23_13_20_20.jpg 을 13:20로 바꿈',
  'delete' => '파일제목 혹은 원래크기 사진 삭제',
  'delete_title' => '파일제목 삭제',
  'delete_title_explanation' => '표기한 앨범 안에 있는 모든 파일을 제거합니다.', //cpg1.4
  'delete_original' => '원래크기의 사진을 삭제',
  'delete_original_explanation' => '풀사이즈 사진을 삭제.', //cpg1.4
  'delete_intermediate' => '중간크기의 사진을 삭제', //cpg1.4
  'delete_intermediate_explanation' => '중간(노말) 사진을 지울 것입니다.<br /> 만일 설정에서 \'중간 사진 생성\'을 사용금지하였으면 사진을 추가한 후에 이것을 사용하여 디스크 스페이스를 확보할 수 있습니다.', //cpg1.4
  'delete_replace' => '원래의 이미지를 삭제하고 이것을 크기를 수정한 버젼으로 대치함',
  'titles_deleted' => '기술한 앨범에 있는 모든 제목이 제거 되었습니다', //cpg1.4
  'deleting_intermediates' => '중간크기의 사진을 삭제중, 기다리세요...', //cpg1.4
  'searching_orphans' => '오펀(고아)를 찾는 중, 기다리세요...', //cpg1.4
  'select_album' => '앨범 선택',
  'delete_orphans' => '실종 파일에 대한 코멘트 삭제', //cpg1.4
  'delete_orphans_explanation' => '갤러리에 더 이상 존재하지 않는 파일과 연결된 코멘트를 발견하고 삭제합니다.<br />모든 앨범을 확인하세요.', //cpg1.4
  'refresh_db' => '파일 디멘죤과 크기 정보를 리로드', //cpg1.4
  'refresh_db_explanation' => '파일크기와 디멘죤을 다시 읽습니다. 할당량이 틀리거나 파일을 수동으로 변경하였으면 이것을 사용하세요.', //cpg1.4
  'reset_views' => '조횟수 리셋', //cpg1.4
  'reset_views_explanation' => '기술한 앨범의 파일 조횟수를 리셋', //cpg1.4
  'orphan_comment' => '파일이 없는 코멘트 발견',
  'delete' => '삭제',
  'delete_all' => '모두 삭제',
  'delete_all_orphans' => '모든 오펀을 삭제?', //cpg1.4
  'comment' => '코멘트: ',
  'nonexist' => '존재하지 않는 파일에 붙임 # ',
  'phpinfo' => 'phpinfo 보기',
  'phpinfo_explanation' => '서버에 관한 기술정보가 있습니다.<br /> - 지원요청을 할 경우 이 정보를 요구합니다.', //cpg1.4
  'update_db' => '데이타베이스 갱신',
  'update_db_explanation' => '코퍼마인 파일을 교체하였거나 변경사항을 추가하였거나 지난번의 코퍼마인에서 업그레이드를 하였으면, 데이타베이스 업데이트를 수행하여야 합니다. 그러면 코퍼마인 데이타베이스 안에 필요한 테이블 그리고/혹은 설정 값을 만들어 줍니다.',
  'view_log' => '로그파일 보기', //cpg1.4
  'view_log_explanation' => '코퍼마인은 사용자가 행한 여러가지 작업을 추적할 수 있습니다. 귀하가 <a href="admin.php">코퍼마인 설정</a>에서 로깅을 사용 가능하게 하였으면 이것들을 볼 수 있습니다.', //cpg1.4
  'versioncheck' => '버젼 확인', //cpg1.4
  'versioncheck_explanation' => '업그래드 후에 모든 파일을 교체하였는지 알기하기 위하여 파일 버젼을 확인하세요. 혹은 코퍼마인 소스 파일이 패케지 발표후에 수정이 되었는지 확인하세요.', //cpg1.4
  'bridgemanager' => '브리지 관리자', //cpg1.4
  'bridgemanager_explanation' => '코퍼마인과 다른 어플리케이션(예: BBS)과의 통합(브리징)을 사용함/사용안함.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Versioncheck', //cpg1.4
  'what_it_does' => '이 페이지는 코퍼마인 설치를 수정하는 사용자를 위한 것 입니다. 이 스크립트는 웹서버의 파일을 통하여 서버에 있는 로칼파일의 버젼이 http://coppermine.sourceforge.net에 있는 레포지토리와의 것과 동일한지를 판단합니다. 아울러 수정해야만 하는 파일도 보여줍니다.<br />붉은 색은 고쳐야 할 것들입니다. 노란 색은 살펴야 할 것들입니다. 녹색은(혹은 디폴트 폰트 칼라)은 OK입니다.<br />더 필요한 정보는 도움 아이콘을 클릭하세요.', //cpg1.4
  'online_repository_unable' => '온라인 리포지토리와 연결할 수 없습니다.', //cpg1.4
  'online_repository_noconnect' => '코퍼마인이 온라인 레포지토리와 연결할 수 없습니다. 두가지 경우일 수 있습니다:', //cpg1.4
  'online_repository_reason1' => '코퍼마인 온라인 레포지토리가 현재 다운 - 다음 페이지를 볼 수 있는지 확인: %s - 이 페이지를 처리할 수 없으면 , 다시 시도하세요.', //cpg1.4
  'online_repository_reason2' => '웹서버에 있는 PHP의 설정에 %s가 꺼져 있습니다(기본 설정은 켜짐). 만일 귀하가 서버의 관리자이면은 이 설정을 <i>php.ini</i>에서 변경하세요 (최소한 이것을 %s로 변경). 만일 웹호스를 할 경우에는 귀하의 파일과 온라인 레포지토리와 대조를 할 수 없습니다. 그러면 이 페이지는 오직 배포된 파일 버젼만을 보여줍니다. - 수정분은 보여주지 않습니다.', //cpg1.4
  'online_repository_skipped' => '온라인 리포지토리와의 연결이 생략됨', //cpg1.4
  'online_repository_to_local' => '스크립이 버젼파일의 로칼 카피를 디폴트로 합니다. 만일 코퍼마인을 업그래이드하고 모든 파일을 업로드하지 않았다면 이 데이타는 부적절할 수 있습니다. 배포후의 파일에 대하여서는 수정을 하지 않습니다.', //cpg1.4
  'local_repository_unable' => '서버의 레포지토리와 연결을 할 수 없습니다.', //cpg1.4
  'local_repository_explanation' => '코퍼마인이 서버의 레포지토리 파일 %s와 연결을 할 수 없습니다. 서버에 레포지토리 파일을 업로드 하지 않은 것 같습니다. 업로드하고 이 페이지를 다시 한번 수행하세요(새로고침을 누르세요).<br />만일 아직도 스크맆트가 실패하면 귀하의 웹호스트가 <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP의 파일시스템 기능</a> 부분을 사용금지 한 것 같습니다. 이 경우 귀하는 이 도구를 사용할 수 없습니다.', //cpg1.4
  'coppermine_version_header' => '설치된 코퍼마인의 버젼', //cpg1.4
  'coppermine_version_info' => '현재 설치된 버젼은: %s', //cpg1.4
  'coppermine_version_explanation' => '이 내용이 전적으로 틀리며 더 최신의 코퍼마인의 버젼을 수행하여야 한다고 생각이 드는 경우는, 가장 최신 버젼의 파일 <i>include/init.inc.php</i>을 업로드하지 않은 것입니다.', //cpg1.4
  'version_comparison' => '버젼 비교', //cpg1.4
  'folder_file' => '폴더/파일', //cpg1.4
  'coppermine_version' => 'cpg 버젼', //cpg1.4
  'file_version' => '파일 버젼', //cpg1.4
  'webcvs' => '웹 cvs', //cpg1.4
  'writable' => '기록가능', //cpg1.4
  'not_writable' => '기록불가', //cpg1.4
  'help' => '도움', //cpg1.4
  'help_file_not_exist_optional1' => '파일/폴더가 존재하지 않습니다.', //cpg1.4
  'help_file_not_exist_optional2' => '선택적이지만 귀하의 서버에서 파일/폴더 %s 를 찾을 수 없습니다. 문제가 발생하면  FTP 클라이언트를 사용하여 파일을 귀하의 서버에 업로드 하세요.', //cpg1.4
  'help_file_not_exist_mandatory1' => '파일/폴더가 존재하지 않습니다.', //cpg1.4
  'help_file_not_exist_mandatory2' => '필수적이지만 귀하의 서버에서 파일/폴더 %s 를 찾을 수 없습니다. FTP 클라이언트를 사용하여 파일을 귀하의 서버에 업로드하세요.', //cpg1.4
  'help_no_local_version1' => '로칼 파일 버젼이 없음', //cpg1.4
  'help_no_local_version2' => '스크립트가 로칼 파일 버젼을 발췌할 수 없습니다 - 파일이 오래 되었거나, 수정되었거나 혹은 해더 정보가 제거되었습니다. 파일을 수정하세요.', //cpg1.4
  'help_local_version_outdated1' => '로칼 버젼이 구식임', //cpg1.4
  'help_local_version_outdated2' => '이 파일의 버젼이 코퍼마인의 지난번 버젼에서 비롯된 것 같습니다(코퍼마인을 업그래드 한 것 같습니다). 이파일도 수정을하였는지 확인하세요.', //cpg1.4
  'help_local_version_na1' => 'cvs 버젼 정보를 발췌할 수 없습니다.', //cpg1.4
  'help_local_version_na2' => '스크립트가 웹서버의 cvs 버젼을 판단할 수 없습니다. 패케지로 부터 파일을 업로드하여야 합니다.', //cpg1.4
  'help_local_version_dev1' => '개발용 버젼', //cpg1.4
  'help_local_version_dev2' => '웹 서버에 있는 파일이 코퍼마인 버젼보다 신형인것 같습니다. 개발용 파일(자신이 무엇을 하는지 반드시 알아야 합니다)을 사용하거나 코퍼마인 설치를 업그레이드하고 include/init.inc.php을 업로드하지 않았습니다.', //cpg1.4
  'help_not_writable1' => '폴더가 기록금지상태', //cpg1.4
  'help_not_writable2' => '파일 퍼미션 (CHMOD)을 수정하여 스크립터가 폴더 %s 와 그 안에 있는 모든 것의 쓰기 처리를 할 수 있게 하십시요.', //cpg1.4
  'help_writable1' => '폴더가 기록가능한 상태', //cpg1.4
  'help_writable2' => '폴더 %s 기록가능함. 코퍼마인은 읽기/실행 처리만 필요하므로 이것은 필요하지 않은 위험을 갖습니다.', //cpg1.4
  'help_writable_undetermined' => '폴더가 기록가능한 상태인지 코퍼마인이 판단할 수 없습니다.', //cpg1.4
  'your_file' => '귀하의 파일
', //cpg1.4
  'reference_file' => '참조 파일', //cpg1.4
  'summary' => '요약', //cpg1.4
  'total' => '확인된 파일/폴더 합계', //cpg1.4
  'mandatory_files_missing' => '필수적인 파일이 없음', //cpg1.4
  'optional_files_missing' => '선택적인 파일이 없음', //cpg1.4
  'files_from_older_version' => '오래된 코퍼마인 버젼의 파일이 남아 있습니다.', //cpg1.4
  'file_version_outdated' => '오래된 파일 버젼', //cpg1.4
  'error_no_data' => '스크립트 오류, 정보를 검색할 수 없습니다. 불편을 드려서 죄송합니다.', //cpg1.4
  'go_to_webcvs' => ' %s로 가기', //cpg1.4
  'options' => '옵션', //cpg1.4
  'show_optional_files' => '선택적인 폴더/파일 보기', //cpg1.4
  'show_mandatory_files' => '필수 파일 보기', //cpg1.4
  'show_file_versions' => '파일 버젼 보기', //cpg1.4
  'show_errors_only' => '오류 폴더/파일만 보기', //cpg1.4
  'show_permissions' => '폴더 퍼미션 보기', //cpg1.4
  'show_condensed_output' => '요약된 출력 보기 (쉬운 스크린샽)', //cpg1.4
  'coppermine_in_webroot' => '코퍼마인이 웹루트에 설치되었습니다.', //cpg1.4
  'connect_online_repository' => '언라인 레포지토리에 연결 시도', //cpg1.4
  'show_additional_information' => '추가 정보 보기', //cpg1.4
  'no_webcvs_link' => 'web svn 경로 숨기기', //cpg1.4
  'stable_webcvs_link' => '스테이블 브랜치로의 web svn 경로 보여주기', //cpg1.4
  'devel_webcvs_link' => '데블 브랜치로의 web svn 경로 보여주기', //cpg1.4
  'submit' => '수정 적용 / 새로고침', //cpg1.4
  'reset_to_defaults' => '디폴트 값으로 리셋', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => '모든 로그 삭제', //cpg1.4
  'delete_this' => '이 로그 삭제', //cpg1.4
  'view_logs' => '로그 보기', //cpg1.4
  'no_logs' => '로그가 생성되지 않았습니다.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP 웹 퍼블리싱 마법사 클라이언트</h1><p>이 모듈은 코퍼마인을 <b>Windows XP</b> 웹 퍼블리싱 마법사로 사용할 수 있게 해 줍니다.</p><p>코드는 다음의 순서입니다.
EOT;

$lang_xp_publish_required = <<<EOT
<h2>필요 항목</h2><ul><li>마법사를 소지하기 위하여 Windows XP.</li><li><b>웹 업로드 작업이 정상 작동되는</b> 곳에 위치한 코퍼마인의 설치</li></ul><h2>클라이언트측 설치 방법</h2><ul><li>오른쪽 클릭
EOT;

$lang_xp_publish_select = <<<EOT
&quot;다른이름으로 대상 저장&quot;을 선택. 하드디스크에 파일을 저장. 파일을 저장할 때 권하는 파일명이 <b>cpg_###.reg</b> (###은 시간을 나타내는 숫자)인지 확인. 필요시 이름변경(숫자는 남겨두고). 다운로드할 때 파일에 더블 클릭을 하여 웹 퍼블리싱 마법사에 서버를 등록.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>테스팅</h2><ul><li>Windows 탐색기에서 어느 파일들을 선택하여 <b>Publish xxx on the web</b>의 왼쪽을 클릭.</li><li>파일 선택을 확인. <b>Next</b>를 클릭.</li><li>나타난 서비스 목록에서 포토갤러리를 선택(갤러리이름). 서비스가 나타나지 않으면, 위에서 설명한 <b>cpg_pub_wizard.reg</b>이 설치되었는지 확인.</li><li>필요하면 로그인 정보를 입력.</li><li>귀하의 사진이 있는 앨범을 선택 혹은 생성.</li><li>클릭 <b>next</b>. 사진의 업로드 시작.</li><li>완료후에 사진들이 정확히 추가 되었는지 확인.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>참고 :</h2><ul><li>업로드가 시작되면 마법사는 스크립트에서 보내는 오류 메세지를 보여줄 수 없습니다. 그래서 갤러리를 확인하기 전에는 업로드가 성공하였는지 실패하였는지 알 수 없습니다.</li><li>업로드가 실패하면 코퍼마인 관리자 페이지의 &quot;디버그 모드 작동&quot;을 예로 하세요. 한 파일을 업로드하여 시험하세요.
EOT;

$lang_xp_publish_flood = <<<EOT
(서버에 있는 코퍼마인 디렉토리에 있는 파일).</li><li>갤러리가 마법사를 통하여 업로드를 함으로 <i>범람</i>하는 경우를 피하기 위하여 <b>갤러리 관리자</b>와 <b>본인의 앨범을 소유한 회원</b>만이 이 기능을 사용할 수 있습니다.</li>
EOT;



$lang_xp_publish_php = array(
  'title' => '코퍼마인 - XP 웹 퍼블리싱 마법사', //cpg1.4
  'welcome' => '환영합니다 <b>%s</b>,', //cpg1.4
  'need_login' => '이 마법사를 사용하기 전에 웹 브라우저를 사용하여 갤러리에 로그인하세요.<p/><p>로그인을 할 때에 반드시 <b>기억하기</b> 옵션이 있으면 이것을 선택하세요.', //cpg1.4
  'no_alb' => '이 마법사로 귀하가 사진 업로드를 할 수 있는 권한이 있는 앨범이 없습니다.', //cpg1.4
  'upload' => '현재 있는 앨범에 사진 업로드', //cpg1.4
  'create_new' => '새 앨범 생성', //cpg1.4
  'album' => '앨범', //cpg1.4
  'category' => '카테고리', //cpg1.4
  'new_alb_created' => '새 앨범 &quot;<b>%s</b>&quot; 생성되었습니다.', //cpg1.4
  'continue' => '사진을 업로드하시려면 &quot;다음&quot; 을 누르세요', //cpg1.4
  'link' => '이 링크', //cpg1.4
);
}
?>
