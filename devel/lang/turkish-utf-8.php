<?php
// ------------------------------------------------------------------------- //
//  Coppermine Photo Gallery v1.1 Beta 2                                     //
// ------------------------------------------------------------------------- //
//  Copyright (C) 2002,2003  Gr√©gory DEMAR <gdemar@wanadoo.fr>               //
//  http://www.chezgreg.net/coppermine/                                      //
// ------------------------------------------------------------------------- //
//  Based on PHPhotoalbum by Henning St√∏verud <henning@stoverud.com>         //
//  http://www.stoverud.com/PHPhotoalbum/                                    //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
// ------------------------------------------------------------------------- //
//  Translation by Mustafa Tolga YILMAZ <mtolgay@yahoo.com>                  //
//  http://deermaker.cjb.net/                                                //
//  Translation Version 1.0 Alpha 2                                          //
// ------------------------------------------------------------------------- //

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bayt', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Paz', 'Pzt', 'Sal', '√ár≈ü', 'Pr≈ü', 'Cum', 'Cmt');
$lang_month = array('Oca', '≈ûub', 'Mar', 'Nis', 'May', 'Haz', 'Tem', 'Au&Auml;ü', 'Eyl', 'Eki', 'Kas', 'Ara');

// Some common strings
$lang_yes = 'Evet';
$lang_no  = 'Hay&Auml;±r';
$lang_back = 'GER&Auml;∞';
$lang_continue = '&Auml;∞LER&Auml;∞';
$lang_info = 'Bilgi';
$lang_error = 'Hata';

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =    '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y saat %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y at %H:%M';
$comment_date_fmt =  '%d %B %Y at %H:%M';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', '*sik*', 'am*', 'yarrak', 'yarak', 'orospu');

$lang_meta_album_names = array(
	'random' => 'Rasgele resimler',
	'lastup' => 'Son eklenenler',
	'lastcom' => 'Son yorumlar',
	'topn' => 'En √ßok izlenenler',
	'toprated' => 'En √ßok oy alanlar',
	'lasthits' => 'Son izlenenler',
	'search' => 'Arama sonu√ßlar'
);

$lang_errors = array(
	'access_denied' => 'Bu sayfay&Auml;± g√∂r√ºnt√ºlemeye izniniz yok.',
	'perm_denied' => 'Bu i≈ülemi y√ºr√ºtmeye izniniz yok.',
	'param_missing' => 'Program&Auml;± √ßal&Auml;±≈üt&Auml;±rmak i√ßin yetersiz komut(lar).',
	'non_exist_ap' => '≈ûe√ßilmi≈ü olan Alb√ºm/Resim yok !',
	'quota_exceeded' => 'Disk kotas&Auml;± a≈ü&Auml;±ld&Auml;±<br /><br />Sizin ≈üu an ki alan&Auml;±n&Auml;±z [quota]K, resimleriniz [space]K alan kapl&Auml;±yor, bu resim eklenseydi kotan&Auml;±z&Auml;± a≈üm&Auml;±≈ü olacakt&Auml;±n&Auml;±z.',
	'gd_file_type_err' => 'GD Resim K√ºt√ºphanesini kullan&Auml;±rken ge√ßerli olan resim tipleri JPG ve PNG.',
	'invalid_image' => 'Y√ºkledi&Auml;üiniz resim ya bozuk ya da GD K√ºt√ºphanesi taraf&Auml;±ndan tan&Auml;±mlanam&Auml;±yor.',
	'resize_failed' => 'K√º√ß√ºk resim veya d√º≈ü√ºk boyutlu resim olu≈üturulam&Auml;±yor.',
	'no_img_to_display' => 'G√∂sterilecek resim yok',
	'non_exist_cat' => 'Se√ßilmi≈ü olan kategori yok',
	'orphan_cat' => 'Bir kategorinin ana dal&Auml;± yok, bu sorunu haletmek i√ßin Kategori Y√∂neticisini √ßal&Auml;±≈üt&Auml;±r&Auml;±n.',
	'directory_ro' => 'Dizin \'%s\'  e yaz&Auml;±labilir de&Auml;üil, resimler silinemiyor',
	'non_exist_comment' => '≈ûe√ßilmi≈ü olan yorum yok.',
	'pic_in_invalid_album' => 'Resim var olmayan bir alb√ºmde (%s)!?'
);

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
	'alb_list_title' => 'Alb√ºm listesine git',
	'alb_list_lnk' => 'Alb√ºm listesi',
	'my_gal_title' => 'Ki≈üisel galerime git',
	'my_gal_lnk' => 'Ki≈üisel Galerim',
	'my_prof_lnk' => 'My profile',
	'adm_mode_title' => 'Y√∂netici konumuna ge√ßi≈ü yap',
	'adm_mode_lnk' => 'Y√∂netici konumu',
	'usr_mode_title' => 'Kullan&Auml;±c&Auml;± konumuna ge√ßi≈ü yap',
	'usr_mode_lnk' => 'Kullan&Auml;±c&Auml;± konumu',
	'upload_pic_title' => 'Bir resimi bir alb√ºme y√ºkle',
	'upload_pic_lnk' => 'Resim y√ºkle',
	'register_title' => 'Bir hesap olu≈ütur',
	'register_lnk' => 'Kay&Auml;±t ol',
	'login_lnk' => 'Giri≈ü',
	'logout_lnk' => '√á&Auml;±k&Auml;±≈ü',
	'lastup_lnk' => 'Son y√ºklenenler',
	'lastcom_lnk' => 'Son yorumlar',
	'topn_lnk' => 'En √ßok izlenenler',
	'toprated_lnk' => 'En √ßok oy alanlar',
	'search_lnk' => 'Ara',
);

$lang_gallery_admin_menu = array(
	'upl_app_lnk' => 'Y√ºkleme izini',
	'config_lnk' => 'Se√ßenekler',
	'albums_lnk' => 'Alb√ºmler',
	'categories_lnk' => 'Kategoriler',
	'users_lnk' => 'Kullan&Auml;±c&Auml;±lar',
	'groups_lnk' => 'Gruplar',
	'comments_lnk' => 'Yorumlar',
	'searchnew_lnk' => 'K√ºme resimleri ekle',
);

$lang_user_admin_menu = array(
	'albmgr_lnk' => 'Olu≈ütur veya alb√ºmleri iste',
	'modifyalb_lnk' => 'Alb√ºmlerde de&Auml;üi≈üiklik yap',
	'my_prof_lnk' => 'Profilim',
);

$lang_cat_list = array(
	'category' => 'Kategori',
	'albums' => 'Alb√ºmler',
	'pictures' => 'Resimler',
);

$lang_album_list = array(
	'album_on_page' => '%d alb√ºm√ºn√ºz %d sayfadad&Auml;±r'
);

$lang_thumb_view = array(
	'date' => 'TAR&Auml;∞H',
	'name' => 'AD',
	'sort_da' => 'Tarihi k√º√ß√ºkten b√ºy√ºy√º&Auml;üe s&Auml;±rala',
	'sort_dd' => 'Tarihi b√ºy√ºkten k√º√ß√ºy√º&Auml;üe s&Auml;±rala',
	'sort_na' => 'Ad&Auml;± k√º√ß√ºkten b√ºy√ºy√º&Auml;üe s&Auml;±rala',
	'sort_nd' => 'Ad&Auml;± b√ºy√ºkten k√º√ß√ºy√º&Auml;üe s&Auml;±rala',
	'pic_on_page' => '%d resim %d sayfadad&Auml;±r',
	'user_on_page' => '%d kullan&Auml;±c&Auml;± %d sayfadad&Auml;±r'
);

$lang_img_nav_bar = array(
	'thumb_title' => 'K√º√ß√ºk resim sayfas&Auml;±na geri d√∂n',
	'pic_info_title' => 'Resmi bilgilerine g√∂ster/sakla',
	'slideshow_title' => 'G√∂steri',
	'ecard_title' => 'Bu resimi e-Kart olarak yolla',
	'ecard_disabled' => 'e-Kart iptal edilmi≈ütir',
	'ecard_disabled_msg' => 'e-Kart g√∂ndermeye izininiz yok',
	'prev_title' => '√ñnceki resime bak',
	'next_title' => 'Bir sonraki resime bak',
	'pic_pos' => 'RES&Auml;∞M %s/%s',
);

$lang_rate_pic = array(
	'rate_this_pic' => 'Bu resimi oylay&Auml;±n ',
	'no_votes' => '(Oy yok ≈üimdilik)',
	'rating' => '(≈ûu anki durum : %s / 5 ile %s oy)',
	'rubbish' => 'Sa√ßma',
	'poor' => 'Yetersiz',
	'fair' => 'Orta',
	'good' => '&Auml;∞yi',
	'excellent' => 'M√ºkemmel',
	'great' => 'Harikulade',
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
	CRITICAL_ERROR => 'Ciddi hata',
	'file' => 'Dosya: ',
	'line' => 'Sat&Auml;±r: ',
);

$lang_display_thumbnails = array(
	'filename' => 'Dosya ad&Auml;± : ',
	'filesize' => 'Dosya boyutu : ',
	'dimensions' => 'Boyutlar&Auml;± : ',
	'date_added' => 'Eklenme tarihi : '
);

$lang_get_pic_data = array(
	'n_comments' => '%s yorum',
	'n_views' => '%s g√∂r√ºnt√ºleme',
	'n_votes' => '(%s oy)'
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
	'Exclamation' => '√únlem',
	'Question' => 'Soru',
	'Very Happy' => '√áok mutlu',
	'Smile' => 'G√ºl',
	'Sad' => 'Mutsuz',
	'Surprised' => '≈ûa≈ü&Auml;±rm&Auml;±≈ü',
	'Shocked' => 'Sars&Auml;±lm&Auml;±≈ü',
	'Confused' => 'Confused',
	'Cool' => 'S√ºper',
	'Laughing' => 'G√ºlerek',
	'Mad' => 'Deli',
	'Razz' => 'Razz',
	'Embarassed' => 'Utanm&Auml;±≈ü',
	'Crying or Very sad' => 'A&Auml;ülamak veya √ßok mutsuz',
	'Evil or Very Mad' => 'Bela veya √ßok deli',
	'Twisted Evil' => 'Cilveli Bela',
	'Rolling Eyes' => 'Yuvarlanan G√∂zler',
	'Wink' => 'G√∂z k&Auml;±rpma',
	'Idea' => 'Fikir',
	'Arrow' => 'Ok',
	'Neutral' => 'Tarafs&Auml;±z',
	'Mr. Green' => 'Bay Ye≈üil',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
	0 => 'Y√∂netici konumu kapat&Auml;±l&Auml;±yor...',
	1 => 'Y√∂netici konumu a√ß&Auml;±l&Auml;±yor...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
	'alb_need_name' => 'Alb√ºmleri isim vermelisiniz !',
	'confirm_modifs' => 'Bu de&Auml;üi≈üiklikleri uygulamak istedi&Auml;üinizden eminmisiniz ?',
	'no_change' => 'Herhangi bir de&Auml;üi≈üklik yap&Auml;±lmad&Auml;± !',
	'new_album' => 'Yeni Alb√ºm',
	'confirm_delete1' => 'Bu alb√ºm√º silmek istedi&Auml;üinizden emin misiniz ?',
	'confirm_delete2' => '\n&Auml;∞√ßerdi&Auml;üi b√ºt√ºn resim ve yorumlar silinecektir !',
	'select_first' => '√ñnce bir alb√ºm se√ßin',
	'alb_mrg' => 'Alb√ºm Y√∂neticisi',
	'my_gallery' => '* Benim Galerim *',
	'no_category' => '* Kategori Yok *',
	'delete' => 'Sil',
	'new' => 'Yeni',
	'apply_modifs' => 'De&Auml;üi≈üiklikleri uygula',
	'select_category' => 'Kategori se√ßin',
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
	'miss_param' => '\'%s\' i√ßin komutlar gerekli i≈ülem yap&Auml;±lamad&Auml;± !',
	'unknown_cat' => 'Se√ßilmi≈ü olan kategori veritaban&Auml;±nda bulunamad&Auml;±',
	'usergal_cat_ro' => 'Kullan&Auml;±c&Auml;± galerileri silinemez !',
	'manage_cat' => 'Kategorileri d√ºzenle',
	'confirm_delete' => 'Bu kategoriyi S&Auml;∞LMEK istedi&Auml;üinizden eminmisiniz ?',
	'category' => 'Kategori',
	'operations' => '&Auml;∞≈ülemler',
	'move_into' => 'S√ºr√ºkle',
	'update_create' => 'Kategori olu≈ütur/g√ºncelle',
	'parent_cat' => 'Ana kategori',
	'cat_title' => 'Kategori ba≈ül&Auml;±&Auml;ü&Auml;±',
	'cat_desc' => 'Kategori a√ß&Auml;±klamas&Auml;±'
);

// ------------------------------------------------------------------------- //
// File config.php
// ------------------------------------------------------------------------- //

if (defined('CONFIG_PHP')) $lang_config_php = array(
	'title' => 'Se√ßenekler',
	'restore_cfg' => 'Ayarlar&Auml;± s&Auml;±f&Auml;±rla',
	'save_cfg' => 'Yeni se√ßenekleri kaydet',
	'notes' => 'Notlar',
	'info' => 'Bilgi',
	'upd_success' => 'Coppermine se√ßenekleri g√ºncellendi',
	'restore_success' => 'Coppermine ayarlar&Auml;± s&Auml;±f&Auml;±rland&Auml;±',
	'name_a' => 'Ad k√º√ß√ºkten b√ºy√ºy√º&Auml;üe',
	'name_d' => 'Ad b√ºy√ºkten k√º√ß√ºy√º&Auml;üe',
	'date_a' => 'Tarih k√º√ß√ºkten b√ºy√ºy√º&Auml;üe',
	'date_d' => 'Date b√ºy√ºkten k√º√ß√ºy√º&Auml;üe'
);

if (defined('CONFIG_PHP')) $lang_config_data = array(
	'Genel Se√ßenekler',
	array('Galeri &Auml;∞smi', 'gallery_name', 0),
	array('Galeri A√ß&Auml;±klamas&Auml;±', 'gallery_description', 0),
	array('Galeri Y√∂neticisi e-Posta', 'gallery_admin_email', 0),
	array('\'See more pictures\' hedef adres ba&Auml;ülant&Auml;±s&Auml;± e-Kartlar i√ßinde', 'ecards_more_pic_target', 0),
	array('Dil', 'lang', 5),
	array('Aray√ºz', 'theme', 6),

	'Alb√ºm liste g√∂r√ºnt√ºs√º',
	array('Ana tablonun geni≈üli&Auml;üi (piksel veya %)', 'main_table_width', 0),
	array('G√∂sterilecek olan kategori d√ºzeylerinin say&Auml;±s&Auml;±', 'subcat_level', 0),
	array('G√∂sterilecek alb√ºmlerin say&Auml;±s&Auml;±', 'albums_per_page', 0),
	array('Alb√ºm listesi i√ßin s√ºtun say&Auml;±s&Auml;±', 'album_list_cols', 0),
	array('K√º√ß√ºk resimlerin boyutu piksel olarak', 'alb_list_thumb_size', 0),
	array('Ana sayfan&Auml;±n i√ßeri&Auml;üi', 'main_page_layout', 0),

	'K√º√ß√ºk resim g√∂r√ºnt√ºs√º',
	array('K√º√ß√ºk resim sayfas&Auml;±ndaki s√ºtun say&Auml;±s&Auml;±', 'thumbcols', 0),
	array('K√º√ß√ºk resim sayfas&Auml;±ndaki s&Auml;±ra say&Auml;±s&Auml;±', 'thumbrows', 0),
	array('En √ßok g√∂sterilecek etiket say&Auml;±s&Auml;±', 'max_tabs', 0),
	array('Resim man≈üet ba≈ül&Auml;±&Auml;ü&Auml;±n&Auml;± k√º√ß√ºk resim sayfas&Auml;±nda g√∂ster', 'caption_in_thumbview', 1),
	array('K√º√ß√ºk resimlerin alt&Auml;±nda yorum say&Auml;±s&Auml;±n&Auml;± g√∂r√ºnt√ºle', 'display_comment_count', 1),
	array('Haz&Auml;±r ayarlar&Auml;± kullanarak resimleri s&Auml;±rala', 'default_sort_order', 3),
	array('Bir resmin \'top-rated\' listesine g√∂z√ºkebilmesi i√ßin almas&Auml;± gerekn azami oy say&Auml;±s&Auml;±', 'min_votes_for_rating', 0),

	'Resim g√∂r√ºnt√ºleme &amp; Yorum se√ßenekleri',
	array('Resimlerin g√∂sterilece&Auml;üi tablonun geni≈üli&Auml;üi (piksel veya %)', 'picture_table_width', 0),
	array('Resim bilgilerine g√∂ster', 'display_pic_info', 1),
	array('K√ºf√ºrleri yorumlarda filtrele', 'filter_bad_words', 1),
	array('Yorumlar da smiley kullan&Auml;±m&Auml;±na izin ver', 'enable_smilies', 1),
	array('Bir resim a√ß&Auml;±klmas&Auml;±n&Auml;±n maksimum uzunlu&Auml;üu', 'max_img_desc_length', 0),
	array('Bir kelime i√ßindeki maksimum harf say&Auml;±s&Auml;±', 'max_com_wlength', 0),
	array('Bir yorum i√ßindeki maksimum sat&Auml;±r say&Auml;±s&Auml;±', 'max_com_lines', 0),
	array('Bir yorumun maksimum uzunlu&Auml;üu', 'max_com_size', 0),

	'Resim ve k√º√ß√ºk resim se√ßenekleri',
	array('JPEG dosyalar&Auml;± i√ßin kalite ayar&Auml;±', 'jpeg_qual', 0),
	array('Bir k√º√ß√ºk resimin maksiumum geni≈üli&Auml;üi veya boyu <b>*</b>', 'thumb_width', 0),
	array('Ara resimleri yarat','make_intermediate',1),
	array('Bir ara resmin maksium geni≈üli&Auml;üi veya boyu <b>*</b>', 'picture_width', 0),
	array('Y√ºklenecek olan resimler i√ßin maksimum boyut (KB)', 'max_upl_size', 0),
	array('Y√ºklenecek olan resimler i√ßin makisum geni≈ülik veya boy (piksel)', 'max_upl_width_height', 0),

	'Kullan&Auml;±c&Auml;± se√ßenekleri',
	array('Yeni kullan&Auml;±c&Auml;± kayd&Auml;±na izin ver', 'allow_user_registration', 1),
	array('Yeni kullan&Auml;±c&Auml;± kayd&Auml;± i√ßin e-Posta onay&Auml;±na ihtiya√ß var', 'reg_requires_valid_email', 1),
	array('&Auml;∞ki kullan&Auml;±c&Auml;± ayn&Auml;± e-Posta adresine sahip olmas&Auml;±na izin ver', 'allow_duplicate_emails_addr', 1),
	array('Kullan&Auml;±c&Auml;±lar&Auml;±n ki≈üisel galerileri olabilir', 'allow_private_albums', 1),

	'Resim a√ß&Auml;±klamalar&Auml;± i√ßin √∂zel alanlar (e&Auml;üer kullan&Auml;±lmayacaksa bo≈ü b&Auml;±rak&Auml;±n)',
	array('Alan 1 ad&Auml;±', 'user_field1_name', 0),
	array('Alan 2 ad&Auml;±', 'user_field2_name', 0),
	array('Alan 3 ad&Auml;±', 'user_field3_name', 0),
	array('Alan 4 ad&Auml;±', 'user_field4_name', 0),

	'Resim ve k√º√ß√ºk resim geli≈ümi≈ü se√ßenekleri',
	array('Dosya isimlerinde karakterlere izin verme', 'forbiden_fname_char',0),
	array('Y√ºklenmi≈ü olan resimler i√ßin kabul edilen uzant&Auml;±lar', 'allowed_file_extensions',0),
	array('Resimleri boyutland&Auml;±rmak i√ßin kullan&Auml;±lan y√∂ntem','thumb_method',2),
	array('ImageMagick i√ßin yol (example /usr/bin/X11/)', 'impath', 0),
	array('Kabul edilen resim tipleri (sadece ImageMagick i√ßin ge√ßerli)', 'allowed_img_types',0),
	array('Komut sat&Auml;±r se√ßenekleri ImageMagick i√ßin', 'im_options', 0),
	array('EXIF bilgisini oku JPEG dosyalar&Auml;±nda', 'read_exif_data', 1),
	array('Alb√ºm dizini <b>*</b>', 'fullpath', 0),
	array('Kullan&Auml;±c&Auml;± resimleri i√ßin dizin <b>*</b>', 'userpics', 0),
	array('Ara resimler i√ßin √∂nek <b>*</b>', 'normal_pfx', 0),
	array('K√º√ß√ºk resimler i√ßin √∂nek <b>*</b>', 'thumb_pfx', 0),
	array('Dizinler i√ßin haz&Auml;±r ayar', 'default_dir_mode', 0),
	array('Resimleri i√ßin haz&Auml;±r ayar', 'default_file_mode', 0),

	'Cookie &amp; Charset ayarlar&Auml;±',
	array('Program taraf&Auml;±ndan kullan&Auml;±lan cookielerin ad&Auml;±', 'cookie_name', 0),
	array('Program taraf&Auml;±ndan kullan&Auml;±lan cookielerin dizin yolu', 'cookie_path', 0),
	array('Karakter kodlama', 'charset', 4),

	'Di&Auml;üer se√ßenekler',
	array('Hata √ß√∂z√ºmleme se√ßene&Auml;üi a√ß', 'debug_mode', 1),
	
	'<br /><div align="center">(*) * ile g√∂sterilmi≈ü olan alanlar, resim galerinizde resim bulunuyorsa de&Auml;üi≈ütirilmemeli</div><br />'
);

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
	'empty_name_or_com' => 'Ad&Auml;±n&Auml;±z&Auml;± ve bir yorum yazman&Auml;±z gerek',
	'com_added' => 'Yorumunuz eklendi',
	'alb_need_title' => 'Alb√ºm i√ßin bir ba≈ül&Auml;±k vermeniz gerek !',
	'no_udp_needed' => 'G√ºncellemeye gerek yok.',
	'alb_updated' => 'Alb√ºm g√ºncellenmi≈ütir.',
	'unknown_album' => 'Alb√ºm yok veya sizin o alb√ºm√º de&Auml;üi≈ütirmeye izniniz yok',
	'no_pic_uploaded' => 'Hi√ßbir resim y√ºklenmedi !<br /><br />E&Auml;üer bir resim se√ßtiyseniz, ana makinanin resim y√ºklemeye izin verdi&Auml;üinden emin olun...',
	'err_mkdir' => '%s dizini yarat&Auml;±lamad&Auml;±!',
	'dest_dir_ro' => '%s dizinine program taraf&Auml;±ndan yaz&Auml;±lam&Auml;±yor !',
	'err_move' => '%s &Auml;± %s e s√ºr√ºklemek imkans&Auml;±z!',
	'err_fsize_too_large' => 'Y√ºklemeye √ßal&Auml;±≈üt&Auml;±&Auml;ü&Auml;±n&Auml;±z resmin boyutu √ßok b√ºy√ºk (izin verilen %s x %s) !',
	'err_imgsize_too_large' => 'Y√ºklemeye √ßal&Auml;±≈üt&Auml;±&Auml;ü&Auml;±n&Auml;±z resmin boyutu √ßok b√ºy√ºk (izin verilen %s KB) !',
	'err_invalid_img' => 'Y√ºklemeye √ßal&Auml;±≈üt&Auml;±&Auml;ü&Auml;±n&Auml;±z resim ge√ßersiz bir resim bi√ßimidir !',
	'allowed_img_types' => 'Sadece %s resim y√ºkleyebilirsiniz.',
	'err_insert_pic' => '\'%s\' resmi alb√ºme eklenemiyor ',
	'upload_success' => 'Resiminiz ba≈üar&Auml;± ile y√ºklenmi≈ütir<br /><br />Y√∂netici onay&Auml;±ndan sonra yay&Auml;±nlanacakt&Auml;±r.',
	'info' => 'Bilgi',
	'com_added' => 'Yorum eklendi',
	'alb_updated' => 'Alb√ºm g√ºncellendi',
	'err_comment_empty' => 'Yorumunuz bo≈ü !',
	'err_invalid_fext' => 'Sadece bu uzant&Auml;±lara sahip resimler kabul edilir : <br /><br />%s.',
	'no_flood' => 'Bu resim i√ßin son yorumu yollayan zaten sizsiniz<br /><br />E&Auml;üer ba≈üka bir≈üey eklemek istiyorsan&Auml;±z kendi yorumunuzu g√ºncelleyin',
	'redirect_msg' => '≈ûu anda y√∂nlendiriliyorsunuz.<br /><br /><br />\'CONTINUE\' a bas&Auml;±n e&Auml;üer sayfa kendili&Auml;üinden yenilenmezse',
	'upl_success' => 'Resminiz ba≈üar&Auml;± ile eklenmi≈ütir',
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
	'caption' => 'Ba≈ül&Auml;±k',
	'fs_pic' => 'tam boy resim',
	'del_success' => 'ba≈üar&Auml;± ile silindi',
	'ns_pic' => 'normal boyut resim',
	'err_del' => 'silinemiyor',
	'thumb_pic' => 'k√º√ß√ºk resim',
	'comment' => 'yorum',
	'im_in_alb' => 'alb√ºmdeki resim',
	'alb_del_success' => 'Alb√ºm \'%s\' silindi',
	'alb_mgr' => 'Alb√ºm Y√∂neticisi',
	'err_invalid_data' => 'Ge√ßersiz veri al&Auml;±nd&Auml;± \'%s\' da',
	'create_alb' => 'Alb√ºm \'%s\' olu≈üturuluyor',
	'update_alb' => 'Alb√ºm \'%s\' g√ºncelleniyor, \'%s\' ba≈ül&Auml;±&Auml;ü&Auml;±d&Auml;±r ve \'%s\' i√ßeri&Auml;üi ile',
	'del_pic' => 'Resimi sil',
	'del_alb' => 'Alb√ºm√º sil',
	'del_user' => 'Kullan&Auml;±c&Auml;± sil',
	'err_unknown_user' => 'Se√ßilen kullan&Auml;±c&Auml;± yok !',
	'comment_deleted' => 'Yorum ba≈üar&Auml;± ile silindi',
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
	'confirm_del' => 'Bu resmi silece&Auml;üinizden emin misiniz ? \\nYorumlar da silinecektir.',
	'del_pic' => 'BU RESM&Auml;∞ S&Auml;∞L',
	'size' => '%s x %s piksel',
	'views' => '%s kere',
	'slideshow' => 'G√∂steri',
	'stop_slideshow' => 'G√ñSTER&Auml;∞Y&Auml;∞ DURDUR',
	'view_fs' => 'Tam boy resmi g√∂rebilmek i√ßin t&Auml;±klay&Auml;±n',
);

$lang_picinfo = array(
	'title' =>'Resim bilgileri',
	'Filename' => 'Dosya ad&Auml;±',
	'Album name' => 'Alb√ºm ad&Auml;±',
	'Rating' => 'Be&Auml;üenilme (%s oy)',
	'Keywords' => 'Anahtar kelime',
	'File Size' => 'Dosya boyutu',
	'Dimensions' => 'Boyutlar',
	'Displayed' => 'G√∂sterilen',
	'Camera' => 'Kamera',
	'Date taken' => 'Al&Auml;±nan tarih',
	'Aperture' => 'Foto&Auml;üraf makinesi a√ß&Auml;±kl&Auml;±&Auml;ü&Auml;±',
	'Exposure time' => '&Auml;∞f≈üa zaman&Auml;±',
	'Focal length' => 'Merkez uzunlu&Auml;üu',
	'Comment' => 'Yorum'
);

$lang_display_comments = array(
	'OK' => 'TAMAM',
	'edit_title' => 'Bu yorumu g√ºncelle',
	'confirm_delete' => 'Bu yorumu silmek istedi&Auml;üinizden emin misiniz ?',
	'add_your_comment' => 'Yorumunuzu ekleyin',
	'your_name' => 'Ad&Auml;±n&Auml;±z',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
	'title' => 'Bir e-Kart yollay&Auml;±n',
	'invalid_email' => '<b>Dikkat</b> : yanl&Auml;±≈ü e-Posta adresi !',
	'ecard_title' => 'Size %s taraf&Auml;±ndan bir e-Kart g√∂nderilmi≈ütir',
	'view_ecard' => 'E&Auml;üer e-Kart&Auml;±n&Auml;±z&Auml;± do&Auml;üru g√∂r√ºnt√ºleyemiyorsan&Auml;±z buraya t&Auml;±klay&Auml;±n',
	'view_more_pics' => 'Daha fazla resim g√∂rebilmek i√ßin bu ba&Auml;ülant&Auml;±ya t&Auml;±klay&Auml;±n !',
	'send_success' => 'e-Kart&Auml;±n&Auml;±z g√∂nderilmi≈ütir',
	'send_failed' => 'Ana makina e-Kart&Auml;±n&Auml;±z&Auml;± g√∂nderemiyor',
	'from' => 'Kimden',
	'your_name' => 'Sizin ad&Auml;±n&Auml;±z',
	'your_email' => 'Sizin e-Posta adresiniz',
	'to' => 'Kime',
	'rcpt_name' => 'Al&Auml;±c&Auml;±n&Auml;±n &Auml;∞smi',
	'rcpt_email' => 'Al&Auml;±c&Auml;±n&Auml;±n e-Posta adresi',
	'greetings' => 'Selamlar',
	'message' => '&Auml;∞leti',
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
	'pic_info' => 'Resim bilgileri',
	'album' => 'Alb√ºm',
	'title' => 'Ba≈ül&Auml;±k',
	'desc' => 'A√ß&Auml;±klama',
	'keywords' => 'Anahta kelimeler',
	'pic_info_str' => '%sx%s - %sKB - %s g√∂r√ºnt√ºleme - %s oy',
	'approve' => 'Resimi onayla',
	'postpone_app' => 'Onaylamay&Auml;± ertele',
	'del_pic' => 'Resimi sil',
	'reset_view_count' => 'G√∂r√ºnt√ºleme sayac&Auml;±n&Auml;± s&Auml;±f&Auml;±rla',
	'reset_votes' => 'Oylamalar&Auml;± s&Auml;±f&Auml;±rla',
	'del_comm' => 'Yorumlar&Auml;± sil',
	'upl_approval' => 'Y√ºklemeyi onayla',
	'edit_pics' => 'Resimlerde de&Auml;üi≈üiklik yap',
	'see_next' => 'Sonraki resimleri g√∂r',
	'see_prev' => '√ñnceki resimleri g√∂r',
	'n_pic' => '%s resim',
	'n_of_pic_to_disp' => 'G√∂sterilecek olan resim say&Auml;±s&Auml;±',
	'apply' => 'De&Auml;üi≈üiklikleri uygula'
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
	'group_name' => 'Grup ad&Auml;±',
	'disk_quota' => 'Disk kotas&Auml;±',
	'can_rate' => 'Resimleri oylayabilir',
	'can_send_ecards' => 'e-Kart g√∂nderebilir',
	'can_post_com' => 'Yorum yazabilir',
	'can_upload' => 'Resim y√ºkleyebilir',
	'can_have_gallery' => 'Ki≈üisel galeri yapabilir',
	'apply' => 'De&Auml;üi≈üiklikleri uygula',
	'create_new_group' => 'Yeni grup yarat',
	'del_groups' => 'Se√ßilmi≈ü olan grup(lar&Auml;±) sil',
	'confirm_del' => 'Dikkat ! E&Auml;üer bu grubu silerseniz, gruptaki b√ºt√ºn kullan&Auml;±c&Auml;±lar \'Registered\' grubuna transfer edilecektir !\n\nDevam etmek istiyormusunuz ?',
	'title' => 'Kullan&Auml;±c&Auml;± gruplar&Auml;±n&Auml;± d√ºzenle',
	'approval_1' => 'Herkese a√ß&Auml;±k y√ºkleme onay&Auml;± (1)',
	'approval_2' => 'Ki≈üisel y√ºkleme onay&Auml;± (2)',
	'note1' => '<b>(1)</b> Ki≈üisel galeriye y√ºklenecek olan resimler y√∂netici taraf&Auml;±ndan onaylanmal&Auml;±',
	'note2' => '<b>(2)</b> Kullan&Auml;±c&Auml;±ya ait galeriye y√ºkleme yapmak i√ßin y√∂netici onay&Auml;±na gerek',
	'notes' => 'Notlar'
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
	'welcome' => 'Ho≈ügeldiniz !'
);

$lang_album_admin_menu = array(
	'confirm_delete' => 'Bu alb√ºm√º silmek istedi&Auml;üinizden emin misiniz ? \\nB√ºt√ºn resimler ve yorumlar da silinecektir.',
	'delete' => 'S&Auml;∞L',
	'modify' => '√ñZELL&Auml;∞KLER',
	'edit_pics' => 'RES&Auml;∞MLERDE DE&Auml;û&Auml;∞≈û&Auml;∞&Auml;∞KL&Auml;∞LK YAP',
);

$lang_list_categories = array(
	'home' => 'Ana',
	'stat1' => '<b>[pictures]</b> resimler <b>[albums]</b> alb√ºmde ve <b>[cat]</b> kategoride, <b>[comments]</b> yorum <b>[views]</b> kere g√∂r√ºnt√ºlenmi≈ütir',
	'stat2' => '<b>[pictures]</b> resim <b>[albums]</b> alb√ºmde <b>[views]</b> kere g√∂r√ºnt√ºlenmi≈ütir',
	'xx_s_gallery' => '%s\ in Galerisi',
	'stat3' => '<b>[pictures]</b> resim <b>[albums]</b> alb√ºmde <b>[comments]</b> yorum <b>[views]</b> kere g√∂r√ºnt√ºlenmi≈ütir'
);

$lang_list_users = array(
	'user_list' => 'Kullan&Auml;±c&Auml;± listesi',
	'no_user_gal' => 'Alb√ºm yaratma izni olan hi√ßbir kullan&Auml;±c&Auml;± yok',
	'n_albums' => '%s alb√ºm',
	'n_pics' => '%s resim'
);

$lang_list_albums = array(
	'n_pictures' => '%s resim',
	'last_added' => ', sonuncusu %s'
);

}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
	'login' => 'Giri≈ü',
	'enter_login_pswd' => 'Giri≈ü yapabilmek i√ßin kullan&Auml;±c&Auml;± ad&Auml;±n&Auml;±z&Auml;± ve ≈üifrenizi kullan&Auml;±n',
	'username' => 'Kullan&Auml;±c&Auml;± ad&Auml;±',
	'password' => '≈ûifre',
	'remember_me' => 'Beni hat&Auml;±rla',
	'welcome' => 'Ho≈ügeldin %s ...',
	'err_login' => '*** Giri≈ü yap&Auml;±lmad&Auml;± tekrar deneyim ***',
	'err_already_logged_in' => 'Zaten Giri≈ü yapm&Auml;±≈üs&Auml;±n&Auml;±z !',
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
	'logout' => '√á&Auml;±k&Auml;±≈ü',
	'bye' => 'G√∂r√º≈ümek √ºzere %s ...',
	'err_not_loged_in' => 'Giri≈ü yapmad&Auml;±n&Auml;±z ki !',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
	'upd_alb_n' => 'Alb√ºm√º g√ºncelle %s',
	'general_settings' => 'Genel se√ßenekler',
	'alb_title' => 'Alb√ºm ba≈ül&Auml;±&Auml;ü&Auml;±',
	'alb_cat' => 'Alb√ºm kategorisi',
	'alb_desc' => 'Alb√ºm a√ß&Auml;±klamas&Auml;±',
	'alb_thumb' => 'Alb√ºm k√º√ß√ºk resimler',
	'alb_perm' => 'Bu alb√ºm i√ßin izinler',
	'can_view' => 'Alb√ºm kimler taraf&Auml;±ndan g√∂r√ºnt√ºlenebilir',
	'can_upload' => 'Ziyaret√ßiler resim y√ºkleyebilir',
	'can_post_comments' => 'Ziyaret√ßiler yorum yollayabilir',
	'can_rate' => 'Ziyaret√ßiler resim oylayabilir',
	'user_gal' => 'Kullan&Auml;±c&Auml;± galerisi',
	'no_cat' => '* Kategori yok *',
	'alb_empty' => 'Alb√ºm bo≈ü',
	'last_uploaded' => 'Son y√ºklenen',
	'public_alb' => 'Herkes (a√ß&Auml;±k alb√ºm)',
	'me_only' => 'Sadece ben',
	'owner_only' => 'Alb√ºm sahibi (%s) sadece',
	'groupp_only' => '\'%s\' grubunun √ºyesi',
	'err_no_alb_to_modify' => 'G√ºncelleme yapabilece&Auml;üiniz bir alb√ºm yok veritaban&Auml;±nda.',
	'update' => 'Alb√ºm√º g√ºncelle'
);

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
	'already_rated' => 'Bu resimi √∂nceden oylad&Auml;±n&Auml;±z',
	'rate_ok' => 'Oyunuz kabul edildi',
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
{SITE_NAME} y√∂neticileri herhangi naho≈ü malzemeleri en k&Auml;±sa s√ºrede ortadan kald&Auml;±racakt&Auml;±r, her iletiyi okumak imkans&Auml;±zd&Auml;±r. B√∂ylelikle g√∂nderilen b√ºt√ºn iletilerin y√∂neticilerin veya site sahibinin g√∂r√º≈ülerini de&Auml;üil, yazar&Auml;±n&Auml;±n g√∂r√º≈ülerini yans&Auml;±tt&Auml;±&Auml;ü&Auml;±n&Auml;± kabul etmi≈ü oluyorsunuz (y√∂neticiler taraf&Auml;±ndan g√∂ndeirlenler hari√ß) bu nedenle y√∂neticiler veya site sahibi sorumlu tutulamaz. .<br />
<br />
B√∂ylelikle herhangi s√∂vg√º dolu, m√ºstehcen, kaba, karalay&Auml;±c&Auml;±, nefret dolu, tehdit edici, cinsel i√ßerikli ve uygulanabilir yasalar&Auml;± √ßi&Auml;üneyecek i√ßerikli ileti yollamamay&Auml;± kabul etmi≈ü oluyorsunuz. {SITE_NAME} in site sahibinin, y√∂neticilerinin ve moderat√∂rlerin uygun g√∂rd√ºkleri takdirde, i√ßerikleri silebilme veya bunlarda de&Auml;üi≈üiklikler yapabilme haklar&Auml;±na her i√ßerik i√ßin her zaman sahip olduklar&Auml;±n&Auml;± da kabul etmi≈ü oluyorsunuz. Bir kullan&Auml;±c&Auml;± olarak veritaban&Auml;±na eklenmi≈ü olan herhangi bir bilgiyi de kabul etmi≈ü oluyorsunuz. Bu bilgi sizin izniniz olmadan hi√ß bir≈üekilde √º√ß√ºn√ß√º ki≈üilere ula≈üt&Auml;±r&Auml;±lmayacakt&Auml;±r, fakat site sahibi ve y√∂neticileri hacklenme sonucu bu verilen kaybolmas&Auml;± ve/veya kullan&Auml;±lmas&Auml;± sonucu ve/veya √ßal&Auml;±nmas&Auml;± durumunda sorumlu tutulamaz..<br />
<br />
Bu site bilgisayar&Auml;±n&Auml;±zda bilgi kaydetmek amac&Auml;±yla cookie'ler kullan&Auml;±yor. Bu cookie'ler sadece sizin g√∂r√ºnt√ºleme zevkinizi geli≈ütirmek amac&Auml;±yla kullan&Auml;±l&Auml;±r. E-Posta adresiniz sadece kaydolma bilgilerinizi ve ≈üifrenizi onaylama amac&Auml;± ile kullan&Auml;±l&Auml;±r.<br />
<br />
'Kabul Ediyorum' a basarak bu ko≈üullara ba&Auml;ül&Auml;± kalmay&Auml;± kabul etmi≈ü oluyorsunuz.
EOT;

$lang_register_php = array(
	'page_title' => 'Kullan&Auml;±c&Auml;± kayd&Auml;±',
	'term_cond' => '≈ûartlar ve durumlar',
	'i_agree' => 'Kabul Ediyorum',
	'submit' => 'Kayd&Auml;± G√∂nder',
	'err_user_exists' => 'Yazd&Auml;±&Auml;ü&Auml;±n&Auml;±z kullan&Auml;±c&Auml;± ad&Auml;± kullan&Auml;±lmaktad&Auml;±r, ba≈üka bir kullan&Auml;±c&Auml;± ad&Auml;± deneyin',
	'err_password_mismatch' => 'Yazd&Auml;±&Auml;ü&Auml;±n&Auml;±z ≈üifreler tutmuyor l√ºtfen ≈üifreleriniz tekrar girin',
	'err_uname_short' => 'Kullan&Auml;±c&Auml;± ad&Auml;± en az 2 karakterden olu≈ümal&Auml;±',
	'err_password_short' => '≈ûifre en az 2 karakterden olu≈ümal&Auml;±',
	'err_uname_pass_diff' => 'Kullan&Auml;±c&Auml;± ad&Auml;± ve ≈üifre farkl&Auml;± olmal&Auml;±',
	'err_invalid_email' => 'E-Posta adresi ge√ßersizdir',
	'err_duplicate_email' => 'Ba≈üka bir kullan&Auml;±c&Auml;± bu E-Posta adresini kullanarak kaydolmu≈ütur',
	'enter_info' => 'Bilgilerinizi girin',
	'required_info' => 'Gerekli bilgiler',
	'optional_info' => 'Se√ßimlik bilgiler',
	'username' => 'Kullan&Auml;±c&Auml;± Ad&Auml;±',
	'password' => '≈ûifre',
	'password_again' => '≈ûifrenizi yeniden girin',
	'email' => 'E-Posta',
	'location' => 'Konum',
	'interests' => '&Auml;∞lgi alanlar&Auml;±',
	'website' => 'Ki≈üisel Sayfa',
	'occupation' => 'Meslek',
	'error' => 'HATA',
	'confirm_email_subject' => '%s - Kay&Auml;±t onay&Auml;±',
	'information' => 'Bilgi',
	'failed_sending_email' => 'Kay&Auml;±t onay&Auml;± e-Postas&Auml;± yollanam&Auml;±yor !',
	'thank_you' => 'Kaydoldu&Auml;üunuz i√ßin te≈üekk√ºr ederiz.<br /><br />Hesab&Auml;±n&Auml;±z&Auml;± nas&Auml;±l etkinle≈ütirece&Auml;üinizi yazan bir E-Posta adersinize yollanm&Auml;±≈üt&Auml;±r.',
	'acct_created' => 'Hesab&Auml;±n&Auml;±z olu≈üturulmu≈ütur, ≈üimdi kullan&Auml;±c&Auml;± ad&Auml;±n&Auml;±z&Auml;± ve ≈üifrenizi kullanarak giri≈ü yapabilirsiniz',
	'acct_active' => 'Hesab&Auml;±n&Auml;±z etkinle≈ütirildi, ≈üimdi sisteme giri≈ü yapabilirsiniz',
	'acct_already_act' => 'Bu hesap zaten etkin !',
	'acct_act_failed' => 'Bu hesab etkinle≈ütirilemiyor !',
	'err_unk_user' => 'Se√ßilen kullan&Auml;±c&Auml;± yok !',
	'x_s_profile' => '%s\'in profili',
	'group' => 'Grup',
	'reg_date' => 'Kat&Auml;±lma tarihi',
	'disk_usage' => 'Disk kullan&Auml;±m&Auml;±',
	'change_pass' => '≈ûifre de&Auml;üi≈ütir',
	'current_pass' => '≈ûu anki ≈üifre',
	'new_pass' => 'Yeni ≈üifre',
	'new_pass_again' => 'Yeni ≈üifre yeniden',
	'err_curr_pass' => '≈ûu anki ≈üifre yanl&Auml;±≈ü',
	'apply_modif' => 'De&Auml;üi≈üiklikleri uygula',
	'change_pass' => '≈ûifremi de&Auml;üi≈ütir',
	'update_success' => 'Profiliniz g√ºncelle≈ütirildi',
	'pass_chg_success' => '≈ûifreniz de&Auml;üi≈ütirildi',
	'pass_chg_error' => '≈ûifreniz de&Auml;üi≈ütirildi',
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME} de kaydoldu&Auml;üunuz i√ßin te≈üekk√ºr ederiz

Kullan&Auml;±c&Auml;± ad&Auml;±n&Auml;±z : "{USER_NAME}"
≈ûifreniz : "{PASSWORD}"

Hesab&Auml;±n&Auml;±z&Auml;± etkinle≈ütirebilmek i√ßin a≈üa&Auml;ü&Auml;±daki ba&Auml;ülant&Auml;±ya t&Auml;±klay&Auml;±n
Veya tarayc&Auml;±n&Auml;±z&Auml;±n adres √ßubu&Auml;üuna kopyalay&Auml;±n

{ACT_LINK}

Sayf&Auml;±lar&Auml;±m&Auml;±zla,

{SITE_NAME} y√∂neticileri

EOT;

}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
	'title' => 'Ele≈ütiri yorumlar&Auml;±',
	'no_comment' => 'Ele≈ütirilecek yorum yok',
	'n_comm_del' => '%s yorum silindi',
	'n_comm_disp' => 'G√∂sterilecek yorum say&Auml;±s&Auml;±',
	'see_prev' => '√ñncekini g√∂r',
	'see_next' => 'Sonrakini g√∂re',
	'del_comm' => 'Se√ßilmi≈ü yorumlar&Auml;± sil',
);


// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //

if (defined('SEARCH_PHP')) $lang_search_php = array(
	0 => 'Resim ar≈üivinde ara',
);

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
	'page_title' => 'Yeni resimler ara',
	'select_dir' => 'Dizin se√ß',
	'select_dir_msg' => 'Bu fonksiyon size FTP ile y√ºkled&Auml;üiniz bir grup resmi eklemenizi sa&Auml;ülar.<br /><br />Y√ºkledi&Auml;üiniz resimlerin dizinini se√ßin',
	'no_pic_to_add' => 'Eklenecek resim yok',
	'need_one_album' => 'Bu fonksiyonu kullanabilmek i√ßin en az bir alb√ºme ihtiyac&Auml;±n&Auml;±z var',
	'warning' => 'Dikkat',
	'change_perm' => 'Program bu dizine yazam&Auml;±yor, yazabilmek i√ßin CHMOD unu 755 veya 777 yapman&Auml;±z gerekiyor resimleri y√ºklemeden √∂nce !',
	'target_album' => '<b>Resimlerini &quot;</b>%s<b>&quot; e g√∂nder </b>%s',
	'folder' => 'Klas√∂r',
	'image' => 'Resim',
	'album' => 'Alb√ºm',
	'result' => 'Sonu√ß',
	'dir_ro' => 'Yaz&Auml;±lamaz. ',
	'dir_cant_read' => 'Okunamaz. ',
	'insert' => 'Galeriye yeni resim ekle',
	'list_new_pic' => 'Yeni resimlerin listesi',
	'insert_selected' => 'Se√ßilmi≈ü resimleri ekle',
	'no_pic_found' => 'Yeni resim bulunamad&Auml;±',
	'be_patient' => 'L√ºtfen bekleyiniz, program i≈üleminiz yapmaktad&Auml;±r',
	'notes' =>  '<ul>'.
				'<li><b>OK</b> : Resminiz ba≈üar&Auml;± ile eklenmi≈ütir.'.
				'<li><b>DP</b> : Resim bir kopya, ba≈üka bir kopyas&Auml;± veritaban&Auml;±nda bulunmaktad&Auml;±r'.
				'<li><b>PB</b> : Resim y√ºklenemedi, resimlerin bulundu&Auml;üu dizinlerin do&Auml;üru ayarlanm&Auml;±≈ü oldu&Auml;üundan emin olun'.
				'<li>E&Auml;üer OK, DP, PB \'signs\' i≈üaretlerinden biri √ß&Auml;±km&Auml;±yorsa, k&Auml;±r&Auml;±k resmin √ºzerine t&Auml;±klay&Auml;±n PHP hata iletisini g√∂rebilmek i√ßin'.
				'<li>E&Auml;üer sunucu zaman ba&Auml;ülant&Auml;± hatas&Auml;± olursa, yenile tu≈üuna bas&Auml;±n'.
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
	'title' => 'Resim y√ºkleme',
	'max_fsize' => 'En fazla izin verilen boyut %s KB',
	'album' => 'Alb√ºm',
	'picture' => 'Resim',
	'pic_title' => 'Resim Ba≈ül&Auml;±&Auml;ü&Auml;±',
	'description' => 'Resim a√ß&Auml;±klamas&Auml;±',
	'keywords' => 'Anahat kelimeler (her anahtar kelimesi aras&Auml;±nda bo≈üluk b&Auml;±rak&Auml;±n)',
	'err_no_alb_uploadables' => 'Y√ºkleyebilece&Auml;üiniz herhangi bir alb√ºm√ºn√ºz yok',
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
	'title' => 'Kullan&Auml;±c&Auml;±lar d√ºzenle',
	'name_a' => '&Auml;∞simler k√º√ß√ºkten b√ºy√º&Auml;üe s&Auml;±rala ',
	'name_d' => '&Auml;∞simler b√ºy√ºktan k√º√ß√º&Auml;üe s&Auml;±rala',
	'group_a' => 'Gruplar&Auml;± k√º√ß√ºkten b√ºy√º&Auml;üe s&Auml;±rala',
	'group_d' => 'Gruplar&Auml;± b√ºy√ºktan k√º√ß√º&Auml;üe s&Auml;±rala',
	'reg_a' => 'Kay&Auml;±t olma tarihi k√º√ß√ºkten b√ºy√º&Auml;üe s&Auml;±rala',
	'reg_d' => 'Kay&Auml;±t olma tarihi b√ºy√ºktan k√º√ß√º&Auml;üe s&Auml;±rala',
	'pic_a' => 'Resim sayma k√º√ß√ºkten b√º&Auml;ü√º&Auml;üe',
	'pic_d' => 'Resim sayma b√ºy√ºkten k√º√ß√º&Auml;üe',
	'disku_a' => 'Disk kullan&Auml;±m&Auml;± k√º√ß√ºkten b√ºy√º&Auml;üe',
	'disku_d' => 'Disk kullan&Auml;±m&Auml;± b√ºy√ºkten k√º√ß√º&Auml;üe',
	'sort_by' => 'Kullan&Auml;±c&Auml;±lar&Auml;± g√∂re s&Auml;±rala',
	'err_no_users' => 'Kullan&Auml;±c&Auml;± tablosu bo≈ü !',
	'err_edit_self' => 'Kendi profilinizi d√ºzenleyemezsiniz, bunun i√ßin \'My profile\' ba&Auml;ülant&Auml;±s&Auml;±n&Auml;± kullan&Auml;±n',
	'edit' => 'D√úZENLE',
	'delete' => 'S&Auml;∞L',
	'name' => 'Kullan&Auml;±c&Auml;± ad',
	'group' => 'Grup',
	'inactive' => 'Pasif',
	'operations' => '&Auml;∞≈ülemler',
	'pictures' => 'Resimler',
	'disk_space' => 'Kullan&Auml;±lan alan / kota',
	'registered_on' => 'Kay&Auml;±t olma tarihi',
	'u_user_on_p_pages' => '%d kullan&Auml;±c&Auml;± %d sayfada',
	'confirm_del' => 'Bu kullan&Auml;±c&Auml;±y S&Auml;∞LMEK istedi&Auml;üinizden emin misiniz ? \\nB√ºt√ºn resim ve alb√ºmleri silinecektir.',
	'mail' => 'POSTA',
	'err_unknown_user' => 'Se√ßilen kullan&Auml;±c&Auml;± yok !',
	'modify_user' => 'Kullan&Auml;±c&Auml;±y D√ºzenle',
	'notes' => 'Notlar',
	'note_list' => '<li>≈ûu anki ≈üifreyi de&Auml;üi≈ütirmek istemiyorsan&Auml;±z ≈ûifre alan&Auml;±n&Auml;± bo≈ü b&Auml;±rak&Auml;±n&Auml;±z',
	'password' => '≈ûifre',
	'user_active_cp' => 'Kulann&Auml;±c&Auml;± etkin',
	'user_group_cp' => 'Kullan&Auml;±c&Auml;± grubu',
	'user_email' => 'Kullan&Auml;±c&Auml;± e-Posta',
	'user_web_site' => 'Kullan&Auml;±c&Auml;± a&Auml;ü sitesi',
	'create_new_user' => 'Yeni kullan&Auml;±c&Auml;± olu≈ütur',
	'user_from' => 'Kullan&Auml;±c&Auml;± konumu',
	'user_interests' => 'Kullan&Auml;±c&Auml;± &Auml;∞lgi alanlar&Auml;±',
	'user_occ' => 'Kullan&Auml;±c&Auml;± Mesle&Auml;üi',
);
?>
