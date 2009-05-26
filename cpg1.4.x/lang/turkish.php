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
  Coppermine version: 1.4.25
  $HeadURL$
  $Revision$
  $Author$
  $Date$
**********************************************/
if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
  'lang_name_turkish' => 'Turkish',
  'lang_name_native' => 'Türkçe',
  'lang_country_code' => 'tr',
  'trans_name'=> 'Ibrahim ALTINOK(v1,3 sürümüne kadar) Katip(v1,4 sürümü)',
  'trans_email' => 'ibrahim@lavinya.net(v1,3 sürümüne kadar), Katip2002@yahoo.com (v1,4 sürümü)',
  'trans_website' => 'http://www.lavinya.net/',
  'trans_date' => '2006-05-06',
);

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Paz', 'Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt');
$lang_month = array('Ock', 'Şub', 'Mrt', 'Nis', 'May', 'Haz', 'Tem', 'Agu', 'Eyl', 'Ekm', 'Kas', 'Arl');

// Some common strings
$lang_yes = 'Evet';
$lang_no  = 'Hayır';
$lang_back = 'GERİ';
$lang_continue = 'DEVAM ET';
$lang_info = 'Bilgi';
$lang_error = 'Hata';
$lang_check_uncheck_all = 'tamamı/hiçbiri'; //cpg1.4

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
$lang_bad_words = array('bok*', '*erefsiz', 'sikerim', 'göt*', 'eşeko*', 'orosp*', 'pezev*', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names = array(
  'random' => 'Rastgele Resim',
  'lastup' => 'Son Yüklenenler',
  'lastalb'=> 'Son Yorum Yapılanlar',
  'lastcom' => 'Son Yorumlar',
  'topn' => 'En Son Bakınlan',
  'toprated' => 'En Beğenilen',
  'lasthits' => 'Son Bakılan',
  'search' => 'Arama Sonuçları',
  'favpics'=> 'Favori Resimler', //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Bu Sayfaya erişim hakkınız yok.',
  'perm_denied' => 'Bu işlemi yapma hakkınız yok.',
  'param_missing' => 'Eksik parametre(ler)!',
  'non_exist_ap' => 'Böyle bir Album, Resim yok !',
  'quota_exceeded' => 'Diks alanı aşıldı<br /><br />[quota]K da boş bir alanınız var, resimleriniz şuanda kullanılıyor [space]K, bu resmi eklemek alanınızı aşıracaktır.',
  'gd_file_type_err' => 'Eğer GD image library kullanılıyorsa sadece JPEG ve PNG formatları işlenebilir.',
  'invalid_image' => 'Yolladığınız resim hasarlı yada GD library tarafından işlenemiyor',
  'resize_failed' => 'Simge yada Düşürülmüş kalite resmi yaratılmadı.',
  'no_img_to_display' => 'Gösterilebilecek resim yok',
  'non_exist_cat' => 'Seçili Kategori yok',
  'orphan_cat' => 'Katagorinin Üst katagorisi belli değil, Düzeltmek için katagori yönete gidiniz.', //cpg1.3.0
  'directory_ro' => ' \'%s\'  klasörü yazılabilir değil, resimler silinemedi.', //cpg1.3.0
  'non_exist_comment' => 'Seçili Yorum aslında yok.',
  'pic_in_invalid_album' => 'Seçili resim geçersiz bir albumde (%s)!?', //cpg1.3.0
  'banned' => 'Kullanılan bu siteden banlandınız',
  'not_with_udb' => 'Bu fonksiyon Coppermine da kullanılamaz çünkü forum yazılımı ile bütünleştirildi. Yapmaya çalıştığınız şey bü şekilde kaldırılamadı, yada fonksiyon forum yazlımı tarafından elegeçirildi.',
  'offline_title' => 'Kapalı',
  'offline_text' => 'Galeri kapalı- ilerde tekrar deneyin', //cpg1.3.0
  'ecards_empty' => 'Ekart kayıtı bulunmamaktadır. Coppermine seçeneklerindeki  ekart giriş imkanını kontrol edin!', //cpg1.3.0
  'action_failed' => 'İşlem olmadı.  Coppermine sizin talebinizi işleyemedi.', //cpg1.3.0
  'no_zip' => 'ZIP dosyası oluşturmak için gerekli dosyalar bulunamadı.  Lütfen Coppermine admininiz ile iletişime geçin.', //cpg1.3.0
  'zip_type' => 'ZIP dosyalarını yüklemek için yetkiniz yok.', //cpg1.3.0
  'database_query' => 'Veritabanı yazarken hata oluştu', //cpg1.4
  'register_globals_on' => 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off. [<a href="http://forum.coppermine-gallery.net/index.php/topic,59569.0.html" rel="external" class="external">more</a>]',
);

$lang_bbcode_help_title = 'bbcode yardım'; //cpg1.4
$lang_bbcode_help = 'Kullanabileceginiz bbcodlari: <li>[b]Bold[/b] =&gt; <b>Bold</b></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://coppermine-gallery.net/demo/cpg14x/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Ana Sayfa',
  'home_lnk' => 'Ana Sayfa',
  'alb_list_title' => 'Albüm listesine git',
  'alb_list_lnk' => 'Albüm Listesi',
  'my_gal_title' => 'Kişisel galerime git',
  'my_gal_lnk' => 'Galerim',
  'my_prof_title' => 'Kişisel profilime git', //cpg1.4
  'my_prof_lnk' => 'Kişisel profilim',
  'adm_mode_title' => 'Yönetici moduna Geç',
  'adm_mode_lnk' => 'Admin modu',
  'usr_mode_title' => 'Kullanıcı moduna Geç',
  'usr_mode_lnk' => 'Kullanıcı modu',
  'upload_pic_title' => 'Bir Albüme Resim Ekle', //cpg1.3.0
  'upload_pic_lnk' => 'Resim yükle', //cpg1.3.0
  'register_title' => 'Albüme resim ekle',
  'register_lnk' => 'Kayıt ol',
  'login_title' => 'Giriş', //cpg1.4
  'login_lnk' => 'Giriş',
  'logout_title' => 'Çıkış', //cpg1.4
  'logout_lnk' => 'Çıkış',
  'lastup_title' => 'Son yüklenenleri göster', //cpg1.4
  'lastup_lnk' => 'Son yüklenenler',
  'lastcom_title' => 'Son yorumları göster', //cpg1.4
  'lastcom_lnk' => 'Son yorumlar',
  'topn_title' => 'En çok bakılanları göster', //cpg1.4
  'topn_lnk' => 'En çok bakılanlar',
  'toprated_title' => 'En beğenilenler göster', //cpg1.4
  'toprated_lnk' => 'En beğenilenler',
  'search_title' => 'Galeride ara', //cpg1.4
  'search_lnk' => 'Ara',
  'fav_title' => 'Favorilerime git', //cpg1.4
  'fav_lnk' => 'Favorilerim',
  'memberlist_title' => 'Üye listesini göster', //cpg1.3.0
  'memberlist_lnk' => 'Üye listesi', //cpg1.3.0
  'faq_title' => 'Resim galerisi üzerindeki Sorulan Soru &quot;Coppermine&quot;', //cpg1.3.0
  'faq_lnk' => 'FAQ',
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Resim yükleme onayları', //cpg1.4
  'upl_app_lnk' => 'Resim yükleme onayları',
  'admin_title' => 'Ayarlar', //cpg1.4
  'admin_lnk' => 'Ayarlar', //cpg1.4
  'albums_title' => 'Albüm ayarları', //cpg1.4
  'albums_lnk' => 'Albümler',
  'categories_title' => 'Kategori ayarları', //cpg1.4
  'categories_lnk' => 'Kategoriler',
  'users_title' => 'Kullanıcı ayarları', //cpg1.4
  'users_lnk' => 'Kullanıcılar',
  'groups_title' => 'Grup ayarları', //cpg1.4
  'groups_lnk' => 'Gruplar',
  'comments_title' => 'Yorum ayarları', //cpg1.4
  'comments_lnk' => 'Yorumlar', //cpg1.3.0
  'searchnew_title' => 'Çoklu resim eklemeyi aç', //cpg1.4
  'searchnew_lnk' => 'Çoklu resim ekleme', //cpg1.3.0
  'util_title' => 'Admin seçenekleri', //cpg1.4
  'util_lnk' => 'Admin seçenekleri', //cpg1.3.0
  'key_title' => 'Arama sözlügü', //cpg1.4
  'key_lnk' => 'Arama sözlügü', //cpg1.4
  'ban_title' => 'Kullanıcı banla', //cpg1.4
  'ban_lnk' => 'Kullanıcı banla',
  'db_ecard_title' => 'Ekart gösterimi', //cpg1.4
  'db_ecard_lnk' => 'Ekart gösterimi', //cpg1.3.0
  'pictures_title' => 'Resimlerimi sırala', //cpg1.4
  'pictures_lnk' => 'Resimlerimi sırala', //cpg1.4
  'documentation_lnk' => 'Belgeler', //cpg1.4
  'documentation_title' => 'Coppermine kullanım kılavuzu', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Albüm oluştur / düzenle', //cpg1.4
  'albmgr_lnk' => 'Albüm oluştur / düzenle',
  'modifyalb_title' => 'Albüm seçenekleri',  //cpg1.4
  'modifyalb_lnk' => 'Albüm seçenekleri',
  'my_prof_title' => 'Kişisel Profilim', //cpg1.4
  'my_prof_lnk' => 'Kişisel Profilim',
);

$lang_cat_list = array(
        'category' => 'Kategori',
        'albums' => 'Albümler',
  	  'pictures' => 'Resimler', //cpg1.3.0
);

$lang_album_list = array(
        'album_on_page' => '%d album var %d sayfada'
);

$lang_thumb_view = array(
  'date' => 'Tarih',
  //Sort by filename and title
  'name' => 'Ad',
  'title' => 'Konu',
  'sort_da' => 'Tarihe göre ARTAN sırala',
  'sort_dd' => 'Tarihe göre AZALAN sırala',
  'sort_na' => 'Ada göre ARTAN sırala',
  'sort_nd' => 'Ada göre AZALAN sırala',
  'sort_ta' => 'Konuya göre ARTAN sırala',
  'sort_td' => 'Konuya göre AZALAN sırala',
  'position' => 'Konum', //cpg1.4
  'sort_pa' => 'Yükselen sınıflama', //cpg1.4
  'sort_pd' => 'Alçalan sınıflama ', //cpg1.4
  'download_zip' => 'Zip dosyası olarak indir', //cpg1.3.0
  'pic_on_page' => '%d resim var %d sayfada',
  'user_on_page' => '%d kullanıcı var %d sayfada', //cpg1.3.0
  'enter_alb_pass' => 'Albüm şifresi', //cpg1.4
  'invalid_pass' => 'Yanlış şifre', //cpg1.4
  'pass' => 'Şifre', //cpg1.4
  'submit' => 'Tamam', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Küçük resim sayfasına dön',
  'pic_info_title' => 'Resim özelliklerini göster/sakla', //cpg1.3.0
  'slideshow_title' => 'Ard arda (slide) gösterim',
  'ecard_title' => 'Bu resmi bir e-kartpostal olarak yolla ', //cpg1.3.0
  'ecard_disabled' => 'e-kartpostal özelliği etkin değil',
  'ecard_disabled_msg' => 'E-kartpostal yollama izniniz yok', //js-alert //cpg1.3.0
  'prev_title' => 'Önceki resme bak', //cpg1.3.0
  'next_title' => 'Sonraki resme bak', 
  'pic_pos' => 'Resim %s/%s', 
  'report_title' => 'Bu dosyayı yöneticiye bildir', //cpg1.4
  'go_album_end' => 'Sona git', //cpg1.4
  'go_album_start' => 'Başa dön', //cpg1.4
  'go_back_x_items' => ' %s dosya dön', //cpg1.4
  'go_forward_x_items' => ' %s dosya ileri git', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Bu resimi puanla', 
  'no_votes' => '(Puanlama henuz yok)',
  'rating' => '(Güncel Beğeni Oranı : %s / 5 etkiyen %s oy',
  'rubbish' => 'Berbat',
  'poor' => 'Değersiz',
  'fair' => 'İdare Eder',
  'good' => 'İyi',
  'excellent' => 'Çok İyi',
  'great' => 'Mükemmel',
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
  CRITICAL_ERROR => 'Kritik Hata',
  'file' => 'Dosya: ',
  'line' => 'Satır: ',);

$lang_display_thumbnails = array(
  'filename' => 'Dosya adı=', //cpg1.4
  'filesize' => 'Dosya büyüklüğü=', //cpg1.4
  'dimensions' => 'Ölçüler=', //cpg1.4
  'date_added' => 'Eklenen tarih=', //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s yorum yapıldı',
  'n_views' => '%s kez bakıldı',
  'n_votes' => '(%s oy verildi)'
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Hata temizleme bilgisi', 
  'select_all' => 'Tümünü Seç', 
  'copy_and_paste_instructions' => 'Coppermine den yardım talebinde bulunacaksanız, hata temizleme bilgisini kopyala yapıştır ile gönderiniz. Yollamadan önce *** ile olan yerleri tekrar doldurun.', 
  'phpinfo' => 'phpbilgilerini göster', 
  'notices' => 'Not', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Varsayılan dil', 
  'choose_language' => 'Dil seçin', 
);

$lang_theme_selection = array(
  'reset_theme' => 'Varsayılan konu', 
  'choose_theme' => 'Konu seçiniz', 
);

$lang_version_alert = array(
  'version_alert' => 'Desteksiz sürüm!', //cpg1.4
  'no_stable_version' => 'Kullandıgınız Coppermine sürümü %s (%s) Bu sürüm sadece deneyimli kullanıcılar içindir - bu sürüme herhangi bir teknik destek verilmemektedir. Kullanmak tamamen kendi risikonuzda olup. Desteklenen çalışır sürmler için önceki sürümleri kullanınız!', //cpg1.4
  'gallery_offline' => 'Galeri şu anda kapalı ve sadece admin tarafından görülebilmektedir. Ayarları bitirdikten sonra tekrar açmayı unutmayınız.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => ' ÖNCEKİ EKRAN ', //cpg1.4
  'next' => ' SONRAKİ EKRAN ', //cpg1.4
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
  'error_wakeup' => "'%s'plugini uyandıramadı", //cpg1.4
  'error_install' => "'%s'plugini kuramadı", //cpg1.4
  'error_uninstall' => "'%s' plugini kaldıramadı", //cpg1.4
  'error_sleep' => " '%s'  plugini kaldıramadı<br />", //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Ünlem',
  'Question' => 'Soru',
  'Very Happy' => 'Çok mutlu',
  'Smile' => 'Gülümsiyen',
  'Sad' => 'Üzgün',
  'Surprised' => 'Şaşırmış',
  'Shocked' => 'Şok olmuş',
  'Confused' => 'Kafası karışık',
  'Cool' => 'Cool',
  'Laughing' => 'Gülen',
  'Mad' => 'Deli',
  'Razz' => 'Razz',
  'Embarassed' => 'Utanmış',
  'Crying or Very sad' => 'Çok üzgün veya ağlama',
  'Evil or Very Mad' => 'Şeytan veye manyak',
  'Twisted Evil' => 'Sapıtmış şeytan',
  'Rolling Eyes' => 'Gözü dönmüş',
  'Wink' => 'Gözkırpan',
  'Idea' => 'Ampül fikirli',
  'Arrow' => 'Ok',
  'Neutral' => 'Doğal',
  'Mr. Green' => 'Bay yeşil',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Yönetici modu terkediliyor...',
  1 => 'Yönetici moduna geçiliyor...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Albumlerin adı olmalı!', //js-alert
  'confirm_modifs' => 'Bu değişiklikleri yapmak istediğinizden eminmisiniz?', //js-alert
  'no_change' => 'Değişiklik yapmadınız!', //js-alert
  'new_album' => 'Yeni albüm',
  'confirm_delete1' => 'Bu albumu silmek istediğinizden eminmisiniz ?', //js-alert
  'confirm_delete2' => '\n Bütün RESİMLER,YORUMLAR ve İÇERİĞİ YOK OLACAK !', //js-alert
  'select_first' => 'İlk önce bir album seçiniz', //js-alert
  'alb_mrg' => 'Albüm ayarları',
  'my_gallery' => '* Kişisel galerim *',
  'no_category' => '* Katagori yok *',
  'delete' => 'Sil',
  'new' => 'Yeni',
  'apply_modifs' => 'Değişiklikleri yap',
  'select_category' => 'Katagori seç',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Kullanıcıyı banla', //cpg1.4
  'user_name' => 'Üye adı', //cpg1.4
  'ip_address' => 'İP adresi', //cpg1.4
  'expiry' => 'Süre (Sürekli banlamak için boş bırakın)', //cpg1.4
  'edit_ban' => 'Tamam', //cpg1.4
  'delete_ban' => 'Sil', //cpg1.4
  'add_new' => 'Yeni ban ekle', //cpg1.4
  'add_ban' => 'Ekle', //cpg1.4
  'error_user' => 'Kullanıcı bulanamıyor', //cpg1.4
  'error_specify' => 'Banlamak istediginiz kişinin kullanıcı adını veya ip adresini girmelisiniz', //cpg1.4
  'error_ban_id' => 'Yanlış ban ID si!', //cpg1.4
  'error_admin_ban' => 'Kendinizi banlıyamazsınız!', //cpg1.4
  'error_server_ban' => 'Kendi sunucunuzu banlamak üzerisiniz! Bunu yapmak mümkün degil...', //cpg1.4
  'error_ip_forbidden' => 'Bu İP adresini banlıyamazsınız - Bu bir Lan (network) adresi!<br />Eğer bu özel ip adresini banlamak isterseniz <a href="admin.php">Config</a> dan değiştiriniz. (Bu işlemin şalışabilmesi için Coppermine bir LAN (network) ortamında çalişıyor olması gerekli).', //cpg1.4
  'lookup_ip' => 'IP adres arama', //cpg1.4
  'submit' => 'Başla!', //cpg1.4
  'select_date' => 'Tarih seç', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Köprü sihirbazı',
  'warning' => 'Uyarı!: Bu sihirbazı kullandıgınız taktirde hassas bilgilerin html formu olarak gönderilecektir. Onun için lütfen bu sihirbazı sadece kendi bilgisayarınızda kullanın (Örnegin bir internet kafede kullanmayın)  ve ayrıca kullandıktan sonra Explorerdaki cache and temporary dosyalarını temizlemeyi unutmayınız.!',
  'back' => 'geri',
  'next' => 'ileri',
  'start_wizard' => 'Köprü sihirbazını başlat',
  'finish' => 'Sonlandır',
  'hide_unused_fields' => 'kullanılmayanları gizle(tavsiye edilir)',
  'clear_unused_db_fields' => 'hatalı veritabanı verilerini temizle (tavsiye edilir)',
  'custom_bridge_file' => 'bağlantı dosyanızın ismi (bağlantı dosyanızın adı <i>myfile.inc.php</i> ise, <i>myfile</i> yazınız)',
  'no_action_needed' => 'Bu aşamada herhangi bir şey yapmanız gerekmiyor. Sadece devam etmek için \'ileri\' tuşuna basmanız yeterli.',
  'reset_to_default' => 'Hazır değerlere geri dön',
  'choose_bbs_app' => 'coppermine ile köprü oluşturmak istediginiz program',
  'support_url' => 'Program destegi için',
  'settings_path' => 'BBS programınızın kullandıgı adres(ler)',
  'database_connection' => 'veritabanı bağlantı',
  'database_tables' => 'veritabanı tabloları',
  'bbs_groups' => 'BBS grupları',
  'license_number' => 'Lisans numarası',
  'license_number_explanation' => 'lisans numaranızı girin',
  'db_database_name' => 'veritabanı ismi',
  'db_database_name_explanation' => 'Sizin BBs programının kullandıgı veritabanı ismi',
  'db_hostname' => 'veritabanı sunucu',
  'db_hostname_explanation' => 'mySQL veritabanının suduldugu sunucu, genelde &quot;localhost&quot;',
  'db_username' => 'veritabanı kullanıcı adı',
  'db_username_explanation' => 'BBS programı ile bağlantı yapması için mySQL kullanıcı adı',
  'db_password' => 'veritabanı şifresi',
  'db_password_explanation' => 'mySQL kullanıcı şifresi',
  'full_forum_url' => 'URL adresi',
  'full_forum_url_explanation' => 'BBS programınızın tam URL (http:// de içinde, mesala http://www.yourdomain.tld/forum)',
  'relative_path_of_forum_from_webroot' => 'Forum adresi',
  'relative_path_of_forum_from_webroot_explanation' => 'Webroot dan BBS programınızın adresi(örnek: Eğer BBS programınız http://www.yourdomain.tld/forum/, siz &quot;/forum/&quot; olarak girin)',
  'relative_path_to_config_file' => 'BBS programınızdaki config dosyasının adresi',
  'relative_path_to_config_file_explanation' => 'Coppermine klasöründen bakıldıgında sizin BBS programınızın adresi (e.g. &quot;../forum/&quot; eğer sizin BBS proğramınız http://www.yourdomain.tld/forum/ ise ve Coppermine http://www.yourdomain.tld/gallery/ da ise)',
		'cookie_prefix' => 'Kurabiye öneki', //cpg1.4
		'cookie_prefix_explanation' => 'BBS programınızdaki Kurabiye ismi', //cpg1.4
		'table_prefix' => 'Tablo öneki', //cpg1.4
		'table_prefix_explanation' => 'BBS programınızı installerken kullandıgınız öneki ile aynı olmak zorunda.', //cpg1.4
		'user_table' => 'Kullanıcı tablosu', //cpg1.4
		'user_table_explanation' => '(Standart programlarda bu bilgiler varsayılan veriler olmalı)', //cpg1.4 //cpg1.4
		'session_table' => 'Oturum tablosu', //cpg1.4
		'session_table_explanation' => '(Standart programlarda bu bilgiler varsayılan veriler olmalı)', //cpg1.4
		'group_table' => 'Grup tablosu', //cpg1.4
		'group_table_explanation' => '(Standart programlarda bu bilgiler varsayılan veriler olmalı)', //cpg1.4
		'group_relation_table' => 'Grup bağlantı tablosu', //cpg1.4
		'group_relation_table_explanation' => '(Standart programlarda bu bilgiler varsayılan veriler olmalı)', //cpg1.4
		'group_mapping_table' => 'Grup harita tablosu', //cpg1.4
		'group_mapping_table_explanation' => '(Standart programlarda bu bilgiler varsayılan veriler olmalı)', //cpg1.4
		'use_standard_groups' => 'Genel BBS kullanıcı gruplarını kullan', //cpg1.4
		'use_standard_groups_explanation' => 'Mevcut kullanıcı guruplarını kullanınız (tavsiye edilir). Bu seçenek sizin yaptığınız değişiklikleri iptal eder. Be seçeneği ne yaptığınızı biliyorsanız kullanınız.!', //cpg1.4
		'validating_group' => 'Onaylanmış gruplar', //cpg1.4
		'validating_group_explanation' => 'Kullanıcılarınızın buludugu grup onaylanması gerekmektedir. (Standart programlarda bu bilgiler varsayılan veriler olmalı)', //cpg1.4
		'guest_group' => 'Misafir grup', //cpg1.4
		'guest_group_explanation' => 'Misafir kullanıcıların buludugu grup onaylanması gerekmektedir. (Varsayılan veriler doğru olmalı)', //cpg1.4
		'member_group' => 'Üyeler grup', //cpg1.4
		'member_group_explanation' => 'Üyelerin buludugu grup onaylanması gerekmektedir. (Varsayılan veriler doğru olmalı)', //cpg1.4
		'admin_group' => 'Yönetici grubu', //cpg1.4
		'admin_group_explanation' => 'Yöneticilerin buludugu grup onaylanması gerekmektedir. (Varsayılan veriler doğru olmalı)', //cpg1.4
		'banned_group' => 'Banlanmış grup', //cpg1.4
		'banned_group_explanation' => 'Banlanmış üyelerin eklendigi grup adı. (Varsayılan veriler doğru olmalı)', //cpg1.4
		'global_moderators_group' => 'Moderators groep', //cpg1.4
		'global_moderators_group_explanation' => 'Moderatorların buludugu grup adı. (Varsayılan veriler doğru olmalı)', //cpg1.4
		'special_settings' => 'BBS proğramına özel ayarlar', //cpg1.4
		'logout_flag' => 'phpBB sürümü (çıkış verileri)', //cpg1.4
		'logout_flag_explanation' => 'BBS programının sürümü (bu ayarlar çıkışların nasıl işleme alındıgını ayarlar.)', //cpg1.4
		'use_post_based_groups' => 'Mesaj kullanan gruplar oluştur?', //cpg1.4
		'logout_flag_yes' => '2.0.5 ve daha yüksegi', //cpg1.4
		'logout_flag_no' => '2.0.4 ve daha düşügü', //cpg1.4
		'use_post_based_groups_explanation' => 'BBS proğramı tarafından mesaj sayısına göre oluşturulan gruplar işleme alınsınmı (degişik giriş izinleri) veya sadece genel gruplar mı işleme alınsın?(yönetimi daha kolay - tavsiye edilir). Bu ayarlar sonrada değiştirilebilir.', //cpg1.4
		'use_post_based_groups_yes' => 'evet', //cpg1.4
		'use_post_based_groups_no' => 'hayır', //cpg1.4
		'error_title' => 'Devam edebilmek için önce yanlışları düzeltmeniz gerekmektedir. Bir önceki ekran geri dönünüz.', //cpg1.4
		'error_specify_bbs' => 'Hangi Coppermine ile birleştirmek istediğinizi seçiniz.', //cpg1.4
		'error_no_blank_name' => 'Birleştirme dosyasına bir adı veriniz.', //cpg1.4
		'error_no_special_chars' => 'Birleştirme dosya adı alt çizgi (_) ve (-) dışında özel karakter kullanılmamalı!', //cpg1.4
		'error_bridge_file_not_exist' => 'Birleştirme dosyası %s sunucunuzda bulunamadı. Doğru yüklenildiğine emin olmak için kontrol ediniz.', //cpg1.4
		'finalize' => 'BBS bağlantısını aç/kapat', //cpg1.4
		'finalize_explanation' => 'Bu ana kadarki ayarlar veritabanına kaydedildi, ama şu anda BBS proğram bağlantısı açılmadı. Bağlantıyı istediginiz zaman açıp veya kapatabilirsiniz. Lütfen Coppermine (standalone) giriş şifrenizi unutmayınız. Bu şifreyi kullanarak istediğiniz zaman ayarlarda değişiklik yapabilirsiniz. Bir şey yanlış giderse, %s gidin ve BBS bağlantısını kapatınız ve standalone Coppermine kullanıcı ismi ve şifreniz (Coppermine kurarken yazdığınız) ile giriş yapınız.', //cpg1.4
		'your_bridge_settings' => 'Bağlantı ayarları', //cpg1.4
		'title_enable' => '%s ile bağlantıyı aç', //cpg1.4
		'bridge_enable_yes' => 'Aç', //cpg1.4
		'bridge_enable_no' => 'Kapat', //cpg1.4
		'error_must_not_be_empty' => 'boş bırakmayınız', //cpg1.4
		'error_either_be' => '%s veya %s olmalı', //cpg1.4
		'error_folder_not_exist' => '%s bulunamadı. %s ni düzeltiniz.', //cpg1.4
		'error_cookie_not_readible' => 'Coppermine %s adlı Kurabiye dosyasını okuyamıyor. %s daki kullanıdığınız verileri düzeltin, veya BBS kur ekranında Kurabiye dosyasını okunabilir duruma getiriniz.',  //cpg1.4
		'error_mandatory_field_empty' => '%s alanını boş bırakmayınız. Doğru verileri giriniz.', //cpg1.4
		'error_no_trailing_slash' => '%s alanının sonunda (\\) işareti olmamalı.', //cpg1.4
		'error_trailing_slash' => '%s alanının sonunda (\\) işareti olmalı.', //cpg1.4
		'error_db_connect' => 'mySQL veritabanı ile bağlantı kurulamıyor. mySQL şu hatayı veriyor:', //cpg1.4
		'error_db_name' => 'Coppermine bağlanmasına rağmen, veritabanı %s ile bağlantı kuramıyor. %s ayarlarını doğru yaptığınıza emin olunuz. mySQL şu hatayı veriyor:', //cpg1.4
		'error_prefix_and_table' => '%s ve ', //cpg1.4
		'error_db_table' => '%s tablosunu bulamıyor. %s daki bilğilerin doğru oldugundan emin olunuz.', //cpg1.4
		'recovery_title' => 'Bağlantı ayarları: acil tamir', //cpg1.4
		'recovery_explanation' => 'Buraya Coppirmine bağlantı yöneticisi olarak geldiyseniz, önce yönetici olarak giriş yapmalısınız. Eğer bir oluşan bir hata sonucu giriş yapamıyorsanız, bunu bu sayfadan kapatabilirsiniz. Kullanıcı ismi ve şifreden sonra size ğiriş izni vermez fakat BBS programı bağlantısını açıp kapatmanıza izin veriri.', //cpg1.4
		'username' => 'Üye adı', //cpg1.4
		'password' => 'Şifre', //cpg1.4
		'disable_submit' => 'Gönder', //cpg1.4
		'recovery_success_title' => 'Giriş başarılı', //cpg1.4
		'recovery_success_content' => 'BBS bağlantısını kapatıldı. Coppermine şu anda gene standalone olarak çalışıyor.', //cpg1.4
		'recovery_success_advice_login' => 'BBS bağlantısını kapatıp, açmak veya değiştirmek için yönetici olarak giriş yapınız.', //cpg1.4
		'goto_login' => 'Giriş sayfasına gidiniz', //cpg1.4
		'goto_bridgemgr' => 'Bağlantı ayar sayfasına gidiniz', //cpg1.4
		'recovery_failure_title' => 'Giriş başarısız', //cpg1.4
		'recovery_failure_content' => 'Giriş için kullandıgınız bilgiler doğru değil. Coppermine standalone proğramının Yönetici adı ve şifresi girilmeli.', //cpg1.4
		'try_again' => 'tekrar deneyiniz', //cpg1.4
		'recovery_wait_title' => 'Bekleme süresi bitti', //cpg1.4
		'recovery_wait_content' => 'Güvenlik nedeni ile bu kadar sıklıkta ğiriş denemesine sistem tarafından izin verilmemekte. Lütfen bir süre sonra tekrar deneyiniz.', //cpg1.4
		'wait' => 'Bekle', //cpg1.4
		'create_redir_file' => 'İşaret dosyası oluştur (tavsiye edilir)', //cpg1.4
		'create_redir_file_explanation' => 'BBS proğramına giriş yapmış kullanıcıları Coppermine yönlendirmek için, BBS proğram klasörünün içine bir yönlendirme dosyası oluşturulması gerekmektedir. Eğer bu seçeneği seçerseniz, bağlantı programı bu dosyayı oluşturmaya çalıcaktır, veya size bu dosyanın kodunu verecektir, o takdirde verilen kodları kopyala yapıştır yöntemi ile dosya oluşturunuz.', //cpg1.4
		'browse' => 'Gez', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Takvim', //cpg1.4
  'close' => 'kapat', //cpg1.4
  'clear_date' => 'tarihi temizle', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => '\'%s\' işlemi için gerekli parametreler eksik !',
  'unknown_cat' => 'Seçilen kategori veritabanında bulunamadı',
  'usergal_cat_ro' => 'Kullanıcı galerileri katagorisi silinemez!',
  'manage_cat' => 'Kategorileri yönet',
  'confirm_delete' => 'Bu katagoriyi silmek istediğinizden eminmisiniz ?', //js-alert
  'category' => 'Kategoriler',
  'operations' => 'İşlemler',
  'move_into' => 'Taşı',
  'update_create' => 'Kategori güncelle/ekle',
  'parent_cat' => 'Ana katogori',
  'cat_title' => 'Katogori adı',
  'cat_thumb' => 'Katagori görüntüsü',
  'cat_desc' => 'Katagori tanımı',
  'categories_alpha_sort' => 'Katagorileri alfabetik sıraya göre diz', //cpg1.4
  'save_cfg' => 'Tamam', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Galeri Ayarları', //cpg1.4
  'manage_exif' => 'Exif ekranını yönet', //cpg1.4
  'manage_plugins' => 'Pluginsleri yönet', //cpg1.4
  'manage_keyword' => 'Arama terimlerini yönet', //cpg1.4
  'restore_cfg' => 'Fabrika ayarlarına Geri DÖN',
  'save_cfg' => 'Yeni Ayarları kaydet',
  'notes' => 'Notlar',
  'info' => 'Bilgi',
  'upd_success' => 'Coppermine galeri ayarları güncellendi',
  'restore_success' => 'Coppermine Galeri Ayarları Varsayılana Döndü',
  'name_a' => 'Ada göre ARTAN',
  'name_d' => 'Ada göre AZALAN',
  'title_a' => 'Title artan',
  'title_d' => 'Title azalan',
  'date_a' => 'Tarihe göre ARTAN',
  'date_d' => 'Tarihe göre AZALAN',
  'pos_a' => 'Artan konum', //cpg1.4
  'pos_d' => 'Azalan konum', //cpg1.4
  'th_any' => 'Maksimum Aspect',
  'th_ht' => 'Yükseklik',
  'th_wd' => 'Genişlik',
  'label' => 'Etiket', 
  'item' => 'item', 
  'debug_everyone' => 'Herkes', 
  'debug_admin' => 'Sadece Admin', 
  'no_logs'=> 'Kapat', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Hepsi', //cpg1.4
  'view_logs' => 'Günlük göster', //cpg1.4
  'click_expand' => 'Ayarları görmek için konu başlıgı seçiniz', //cpg1.4
  'expand_all' => 'Hepsini Aç / Kapat', //cpg1.4
  'notice1' => '(*) Bu ayarlar veritabanındaki dosyalarınızı değiştirmeyecek.', //cpg1.4 - (relocated)
  'notice2' => '(**) Değerlerde yapacagınız degişiklikler tüm dosyalarınıza yansıyacaktır. Bunun için dosyalarınız veritabanında kayıtlı ise değiştirmemenizi tavsiye ederiz. Değerleri degiştirmek için &quot;<a href="util.php">Admin İşlevleri</a> seçeneğini kullanınız (resim büyüklügü ayarla)&quot;.',  //cpg1.4
  'notice3' => '(***) Günlük dosyalrı ingilizcedir.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'BBS köprüsü kullanırken bu bu fonksiyon kapalıdır', //cpg1.4
  'auto_resize_everyone' => 'herkez', //cpg1.4
  'auto_resize_user' => 'sadece kullanıcı', //cpg1.4
  'ascending' => 'artan', //cpg1.4
  'descending' => 'azalan', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Genel ayarlar',
		array('Galeri adı', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
		array('Galeri tanımı', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
		array('Galari yöneticisinin emaili', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
		array('Coppermi klasörünün URL adresi (\'index.php\' eklemeyin)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
		array('Başlangıç sayfasının URL adı (örnek: index.php)', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
		array('Zip dosya indirilmesine izin ver', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
		array('GMT saatine göre saat durumu (şimdiki tarih ve saat: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
		array('Kullanıcı şifrelerini şifreli şekilde sakla (dikkat: geri çeviremezsiniz)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
		array('Yardım seçenegini göster (İngilizce)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
		array('Arama terimleri interaktief','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
		array('Pluginsleri aç', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
		array('Bulunamayan (NAT/locale) IP adreslerini banlamaya imkan ver', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
		array('Kullanıcıların kolay batch eklemelerini imkan ver', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Dil &amp; karakter ayarları',
		array('Dil', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
		array('Seçili dil bulunamaz ise otamatik olarak ingilizceye geç?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
		array('Karakter seti', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
		array('Dil seçenek kutusunu ekranda göster', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
		array('Dil seçenek bayraklarını ekranda göster', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
		array('&quot;varsayılan&quot; seçenegini dil kutusunda göster', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
		//array('Display previous/next on tabbed pages', 'previous_next_tab', 1), //cpg1.4

  'Görüntü seçenekleri',
		array('Görünüm', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
		array('Görünüm listesini göster', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
		array('&quot;varsayılan&quot; seçenegini görünüm listesinde göster', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
		array('Yardım göster', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
		array('Kendi menu ayar başlıgı', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
		array('Kendi menu URL adresi', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
		array('bbcode yardım ekranını göster', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
		array('XHTML ve CSS uygunluk bilgilerini destekleyen görünümlerde göster','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
		array('Header olarak yayınlamak için include dosyasının URL adresi', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
		array('Header olarak yayınlamak için include dosyasının URL adresi', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Albüm listesi ayarları',
		array('Ana tablonun genişligi (pixelin %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
		array('Seviye ve katogori sayısı', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
		array('Sayfadaki albüm sayısı', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
		array('Albüm listesindeki kolonların sayısı', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
		array('Ekrandaki küçük resimlerin pixel olarak boyları', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
		array('Ana sayfanın görünüşü', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
		array('Resimleri katogorilerdeki ana seviyeye göre göster','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
		array('Katogorileri alfabetik sıra ile göster (kişisel sıralama yerine)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
		array('Albümdeki resim sayısını göster','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Önizleme ayarları',
		array('Önizleme sayfasındaki kolon sayısı', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
		array('Önizleme sayfasındaki satır sayısı', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
		array('Makimum gösterilecek tab sayısı', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
		array('Dosya ismini göster (başlık ile birlikte)', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
		array('Resmin kaç kez bakıldıgını göster', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
		array('Yapılan yorumların adetini göster', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
		array('Resmin sahibinin adını göster', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
		//array('Display name of admin uploaders below the önizleme', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
		array('Dosya ismini göster', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
		//array('Albüm tanımlamasını göster', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
		array('Varsayılan sıralama', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
		array('Resimlerin en beğenilen listesine girebilmesi için gerekli en az oy oranı', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Resim görüntü ayarları', //cpg1.4
		array('Resim genişligi (pixel %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
		array('Bilgileri geniş olarak standart yayınla', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
		array('Resim tanımlarının makimum boyu', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
		array('Bir kelimedeki makimum boyu', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
		array('Film şeritini göster', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
		array('Film şeritinin altında dosya ismini göster', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
		array('Film şeritindeki makimum resim sayısı', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
		array('Dia gösterimlerinde zaman ayarı (1 seniye = 1000 milisaniye)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Yorum ayarları', //cpg1.4
		array('Uygun olmayan kelimeleri yorumdan çıkart', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
		array('Yorumda smilies kullanılmasına izin ver', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
		array('Aynı kullanıcının birden fazla ard arda yorum yapmasına izin ver (flood protection)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
		array('Yorumda kullanılabilecek makimum satır sayısı', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
		array('Yorumun makimum uzunlugu', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
		array('Yapılan yorumlardan yöneticiyi email ile haberdar et', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
		array('Yorumların sıralanması', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
            array('Üye olmayan kişiler', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Dosya ve önizleme ayarları',
		array('JPEG dosyalarının kaliesi', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
		array('Önizleme dosyasının makimum boyutu <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
		array('Resmin boyutları (genişlik veya yükseklik veya maximum önizleme) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
		array('Orta boyut resimler oluşturulsunmu?','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
		array('Orta boyutlardaki resimlerin genişligi veya boyları <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
		array('Yüklenen dosyaların makimum boyutları (KB)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
		array('Yüklenen dosyaların makimum genişlikleri veya boyları(pixel)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
		array('Eğer resimler izin verilen boyutlardan daha büyük olursa otamatik uyarla?', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Dosya ve önizleme ayarları (genişletilmiş)',
		array('Albümler kişisel olabilir (Dikkat: Bu ayarları \'evet\' den \'hayır\'a çevirmeniz kişisel albümlerin tamamını herkeze açacaktır.)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
		array('Sistemi giriş yapmamış kullanıcıl özel albümlerde sadece bir ikon göster','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
		array('Dosya isminde kullanılmaması gereken karakterler', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
		//array('Accepted file extensions for uploaded pictures', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
		array('Yüklenmesine izin verilen resim dosya uzantıları', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
		array('Yüklenmesine izin verilen film dosya uzantıları', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
		array('Film gösteriminde otamatik çalıştırılsın', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
		array('Yüklenmesine izin verilen ses dosyaları', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
		array('Yüklenmesine izin verilen dosya uzantıları', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
		array('Resimleri değiştirme şekli','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
		array('ImageMagick adresi (mesala /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
		//array('Allowed image types (only valid for ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
		array('ImageMagick için satır komut ayarları', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
		array('JPEG dosyalarındaki EXIF kayıtlarını oku', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
		array('JPEG dosyalarındaki IPTC kayıtlarını oku', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
		array('Albüm klasörü <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
		array('Kullanıcı dosyaları klasörü <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
		array('Sistem tarafından oluşturulan orta büyüklükteki resimlerin başlangıç adı <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_intermediate_prefix&amp;ae=admin_picture_thumb_advanced_intermediate_prefix_end'), //cpg1.4
		array('Sistem tarafından oluşturulan küçük önizleme resimlerinin başlangıç adı  <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
		array('Varsayılan klasör izinleri', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
		array('Varsaıylan dosya izinleri', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Kulannıcı ayarları',
		array('Yeni kullanıcıların üye olmasına izin ver', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
		array('Misafir kullanıcılara izin ver (Misafir)', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
		array('Üyeliklerin aktifleşmesi için yeni üyelerden email doğrulamasını gerekli', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
		array('Yeni üye kayıtlarını yöneticiye bildir', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
		array('Üyeliklerin aktifleşmesi için yönetici yeni üyelikleri onaylaması gerekir', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
		array('Bir üyenin aynı email adresini birden fazla kullanmasına izin ver', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
		array('Yüklenmiş yayınlanma izni bekleyen dosyalardan yöneticiyi haberdar et.', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
		array('Üyelerin üye listesini görmelerine izin ver', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
		array('Giriş yamış üyelerin üye listesini görmesine izin ver', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
		array('Üyelerin yayınladıkları kişisel resimleri yönetmesine izin ver', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
		array('Bir kişinin yapabilecegi makimum giriş deneme sayısı. (Geçici olarak banlar. Hacklere karşı güvenlik,) ', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
		array('Giriş sırasında banlanmış kullanıcıların banlanma süresi (dakika)', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
		array('Yöneticiye şikayette bulunulmasına izin ver', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Üye profilinde kullanabileceginiz ek bilgiler (kullanmıyorsanız boş bırakın). (Uzun yazılar için 6. yı kullanın)', //cpg1.4
		array('Profil 1 adı', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
		array('Profil 2 adı', 'user_profile2_name', 0), //cpg1.4
		array('Profil 3 adı', 'user_profile3_name', 0), //cpg1.4
		array('Profil 4 adı', 'user_profile4_name', 0), //cpg1.4
		array('Profil 5 adı', 'user_profile5_name', 0), //cpg1.4
		array('Profil 6 adı', 'user_profile6_name', 0), //cpg1.4

  'Resimlerde kullanbileceginiz ek bilgiler (kullanmıyorsanız boş bırakın)',
		array('Satır 1 adı', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
		array('Satır 2 adı', 'user_field2_name', 0), 
		array('Satır 3 adı', 'user_field3_name', 0), 
		array('Satır 4 adı', 'user_field4_name', 0), 

  'Kurabiye ayarları',
		array('Kurabiye adı', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
		array('Kurabiye adresi', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Email ayarları  (normalde hiç bir şey değiştirmeyin buradan; bilmediginiz kutuları boş bırakın)', //cpg1.4
		array('SMTP Host (Sendmail olanagından yararlanmak için boş bırakın)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
		array('SMTP kullanıcı adı', 'smtp_username', 0), //cpg1.4
		array('SMTP şifresi', 'smtp_password', 0), //cpg1.4

  'Girişler ve statistikler', //cpg1.4
		array('Giriş modu <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
		array('E-kart günlügü', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
		array('Geniş oy istatistikklerini tut','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
		array('Geniş izlenme istatistiklerini tut','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Onarma ayarları', //cpg1.4
		array('Hata ayıklama modunu aç', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
		array('Hata ayıklama modunda mesajları göster', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
		array('Galeri yayın dışı', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
 'title' => 'Ekart yollama', 
  'ecard_sender' => 'Gönderen', 
  'ecard_recipient' => 'Alan', 
  'ecard_date' => 'Tarih', 
  'ecard_display' => 'Ekart gösterimi', 
  'ecard_name' => 'Ad', 
  'ecard_email' => 'Email', 
  'ecard_ip' => 'IP #', 
  'ecard_ascending' => 'artan', 
  'ecard_descending' => 'azalan', 
  'ecard_sorted' => 'Sıralandı', 
  'ecard_by_date' => 'tarihe göre', 
  'ecard_by_sender_name' => 'Gönderen adı', 
  'ecard_by_sender_email' => 'Gönderen email', 
  'ecard_by_sender_ip' => 'Gönderen IP adresi', 
  'ecard_by_recipient_name' => 'Alanın ismi', 
  'ecard_by_recipient_email' => 'Alanın email', 
  'ecard_number' => 'gösterim kayıtı %s to %s of %s', 
  'ecard_goto_page' => 'sayfaya git', 
  'ecard_records_per_page' => 'Sayfa başındaki kayıtlar', 
  'check_all' => 'Tümünü kontrol et', 
  'uncheck_all' => 'Hiçbirini kontrol etme', 
  'ecards_delete_selected' => 'Seçilen ekartları sil', 
  'ecards_delete_confirm' => 'Silmek istediğinizden emin misiniz?Kontrol kutusunu işaretleyin!', 
  'ecards_delete_sure' => 'Eminim', 
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => ' Adınızı ve bir yorum yazmalısınız',
  'com_added' => 'Yorumunuz eklendi',
  'alb_need_title' => 'Albüm için bir başlık seçmelisiniz !',
  'no_udp_needed' => 'Güncellemeye gerek yok.',
  'alb_updated' => 'Albüm güncelleşti',
  'unknown_album' => 'Seçilen albüm bulunamadı yada bu albüme yükleme izniniz yok',
  'no_pic_uploaded' => 'Resim Yüklenmedi !<br /><br />Eğer gerçekten yüklemek için resim seçtiyseniz, sunucunun izin veridiği resim yüklemelerini kontrol edin...', 
  'err_mkdir' => 'Yaratma klasörü başarısız %s !',
  'dest_dir_ro' => 'Gönderilen adres %s script tarafından yazılamaz !',
  'err_move' => '%s ya %s geçmek imkansız!',
  'err_fsize_too_large' => 'Yüklediğiniz resim çok büyük(izin verilen maksimum büyklük %s x %s) !', 
  'err_imgsize_too_large' => 'Yüklediğiniz resim boyuttu çok geniş (izin verilen maksimum genişlik %s KB) !',
  'err_invalid_img' => 'Yüklediğiniz resim geçerli değil !',
  'allowed_img_types' => 'sadece %s imajları yükleyebilirsiniz.',
  'err_insert_pic' => ' \'%s\' resim albüme yerleşmedi ', 
  'upload_success' => 'Resminiz başarı ile yüklendi.<br /><br />Admin onayından sonra resminiz eklenecektir.', 
  'notify_admin_email_subject' => '%s - Yükleme bildirisi', 
  'notify_admin_email_body' => ' %s tarafından onayınızı bekleyen resim eklendi. %s bak', 
  'info' => 'Bilgi',
  'com_added' => 'Yorum eklendi',
  'alb_updated' => 'Album updated',
  'err_comment_empty' => 'Yorumunuz boş !',
  'err_invalid_fext' => 'Sadece izin verilen resimler büyütülebilir : <br /><br />%s.',
  'no_flood' => 'Üzgümün ama bu dosya için son yorumun yazarı sizsiniz<br /><br /> Eğer istiyorsanız yorumunuzu düzeltin', 
  'redirect_msg' => 'Adresiniz değiştiriliyor.<br /><br /><br />Click \'DEVAM\' eğer sayfa otomatik olarak yenilenmezse',
  'upl_success' => 'Resminiz başarılyla eklendi', 
  'email_comment_subject' => 'Yorum İbrahim ALTINOK Galeri de yolandı', 
  'email_comment_body' => 'Birisi galerinize bir yorum yolladı. Buradan bakın',
  'album_not_selected' => 'Album seçili degil', //cpg1.4
  'com_author_error' => 'Bu kullanıcı ismi bir başka üye tarafından kullanılmakta. Ltf bir başka kullanıcı ismi seçiniz', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Başlık',
  'fs_pic' => 'Tam boy görüntü',
  'del_success' => 'Başarıyla silindi',
  'ns_pic' => 'Normal boy görüntü',
  'err_del' => 'silinemedi',
  'thumb_pic' => 'küçük resim',
  'comment' => 'yorum',
  'im_in_alb' => 'albümde görüntü',
  'alb_del_success' => '\'%s\' albüm silindi',
  'alb_mgr' => 'Albüm Yöneticisi',
  'err_invalid_data' => '\'%s\' da Veri almada hata',
  'create_alb' => 'Albüm oluşturma\'%s\'',
  'update_alb' => 'Albüm güncelleme\'%s\' başlıkla \'%s\' ve index \'%s\'',
  'del_pic' => 'Resmi sil', 
  'del_alb' => 'Albümü sil',
  'del_user' => 'Kullanıcıyı sil',
  'err_unknown_user' => 'Seçilen kullanıcı bulunamadı !',
  'err_empty_groups' => 'Herhangi bir grup taplosu oluşturulmadı!', //cpg1.4
  'comment_deleted' => 'Yorum başarıyla silindi',  'npic' => 'Picture', //cpg1.4
  'pic_mgr' => 'Resim yönetimi', //cpg1.4
  'update_pic' => 'Yüklenen resim: \'%s\' dosya adı: \'%s\' ve index \'%s\'', //cpg1.4
  'username' => 'Üye adı', //cpg1.4
  'anonymized_comments' => '%s yorum(lar) anonimleştirildi', //cpg1.4
  'anonymized_uploads' => '%s herkeze açık dosyalar anonimleştirildi', //cpg1.4
  'deleted_comments' => '%s yorum(lar)silindi', //cpg1.4
  'deleted_uploads' => '%s yükleme(ler) silindi', //cpg1.4
  'user_deleted' => '%s kullanıcı(lar) silindi', //cpg1.4
  'activate_user' => 'Kullanıcı aktifleştir', //cpg1.4
  'user_already_active' => 'Kullanıcı daha önce aktifleştirildi', //cpg1.4
  'activated' => 'Aktifleştirildi', //cpg1.4
  'deactivate_user' => 'Kullanıcı passifleştir', //cpg1.4
  'user_already_inactive' => 'Kullanıcı daha önçe passifleştirildi', //cpg1.4
  'deactivated' => 'Passifleştirildi', //cpg1.4
  'reset_password' => 'Şifreyi sıfırla', //cpg1.4
  'password_reset' => 'Şifreyi %s olarak degiştir', //cpg1.4
  'change_group' => 'İlk gurubu degiştir', //cpg1.4
  'change_group_to_group' => 'Changing from %s to %s', //cpg1.4
  'add_group' => 'İkinçi bir gurup ekle', //cpg1.4
  'add_group_to_group' => ' %s yi %s gurubuna ekle. Bu kullanıcı artık ilk olarak %s gurubunun ve ikinçi olarak %s grubunun üyesi.', //cpg1.4
  'status' => 'Durum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Hata oluştu! Bu ekart sizin email programınız için uygun olmıyabilir. Verilen http linkin dogru olarak yazıldıgını kontrol ediniz.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Bu resmi SİLMEK istediğinizden emin misiniz ? \\nYorum silinmiş olmalı.', //js-alert 
  'del_pic' => 'BU RESMİ SİL', 
  'size' => '%s x %s pixels',
  'views' => '%s kez',
  'slideshow' => 'Ardarda gösterim',
  'stop_slideshow' => 'Gösterimi durdur',
  'view_fs' => 'Tam boy görünüm için tıklayın',
  'edit_pic' => 'Açıklamayı düzenle', 
  'crop_pic' => 'Kes ve yer değiştir', 
  'set_player' => 'Göstericiyi degiştir',
);

$lang_picinfo = array(
  'title' =>'Resim bilgisi', 
  'Filename' => 'Resim Adı',
  'Album name' => 'Albüm Adı',
  'Rating' => 'Oylar (%s oy)',
  'Keywords' => 'Anahtarsözcük',
  'File Size' => 'Resim boyutu',
  'Date Added' => 'Yüklenme tarihi', //cpg1.4
  'Dimensions' => 'Boyutlar',
  'Displayed' => 'Gösterilme',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Oluşturan', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Tarih / Zaman', //cpg1.4
  'DateTimeOriginal' => 'Orjinal tarih', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Max Aperture', //cpg1.4
  'FocalLength' => 'Focal length', //cpg1.4
  'Comment' => 'Yorum',
  'addFav'=>'Favorilere ekle', 
  'addFavPhrase'=>'Favoriler', 
  'remFav'=>'Favorilerden ayrıl', 
  'iptcTitle'=>'IPTC başlık', 
  'iptcCopyright'=>'IPTC kopyalama', 
  'iptcKeywords'=>'IPTC anahtarsözcük', 
  'iptcCategory'=>'IPTC kategori', 
  'iptcSubCategories'=>'IPTC alt kategoriler', 
  'ColorSpace' => 'Renk', //cpg1.4
  'ExposureProgram' => 'Kamera programı', //cpg1.4
  'Flash' => 'Flaş', //cpg1.4
  'MeteringMode' => 'Metering modu', //cpg1.4
  'ExposureTime' => 'Exposure zamanı', //cpg1.4
  'ExposureBiasValue' => 'Exposure Bias', //cpg1.4
  'ImageDescription' => ' Image Description', //cpg1.4
  'Orientation' => 'Orientation', //cpg1.4
  'xResolution' => 'X Resolution', //cpg1.4
  'yResolution' => 'Y Resolution', //cpg1.4
  'ResolutionUnit' => 'Resolution Unit', //cpg1.4
  'Software' => 'Program', //cpg1.4
  'YCbCrPositioning' => 'YCbCrPositioning', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Exif Version', //cpg1.4
  'DateTimeOriginal' => 'DateTime Original', //cpg1.4
  'DateTimedigitized' => 'DateTime digitized', //cpg1.4
  'ComponentsConfiguration' => 'Components Configuration', //cpg1.4
  'CompressedBitsPerPixel' => 'Compressed Bits Per Pixel', //cpg1.4
  'LightSource' => 'Light Source', //cpg1.4
  'ISOSetting' => 'ISO Setting', //cpg1.4
  'ColorMode' => 'Color Mode', //cpg1.4
  'Quality' => 'Quality', //cpg1.4
  'ImageSharpening' => 'Image Sharpening', //cpg1.4
  'FocusMode' => 'Focus Mode', //cpg1.4
  'FlashSetting' => 'Flash Setting', //cpg1.4
  'ISOSelection' => 'ISO Selection', //cpg1.4
  'ImageAdjustment' => 'Image Adjustment', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'AF Focus Position', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Noise Reduction', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Exif Image Width', //cpg1.4
  'ExifImageHeight' => 'Exif Image Height', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif Interoperability Offset', //cpg1.4
  'FileSource' => 'File Source', //cpg1.4
  'SceneType' => 'Scene Type', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Exposure Mode', //cpg1.4
  'WhiteBalance' => 'White Balance', //cpg1.4
  'DigitalZoomRatio' => 'Digital Zoom Ratio', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture Mode', //cpg1.4
  'GainControl' => 'Gain Control', //cpg1.4
  'Contrast' => 'Contrast', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'Sharpness' => 'Sharpness', //cpg1.4
  'ManageExifDisplay' => 'Manage Exif Display', //cpg1.4
  'submit' => 'Gönder', //cpg1.4
  'success' => 'Bilgiler kaydedildi.', //cpg1.4
  'details' => 'Ayrıntılar', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'TAMAM',
  'edit_title' => 'Bu yorumu düzenle',
  'confirm_delete' => 'Bu yorumu silmek istediğinizden emin misiniz?', //js-alert
  'add_your_comment' => 'Yorumunuzu ekleyin',
  'name'=>'İsim',
  'comment'=>'Yorum',
  'your_name' => 'Adınız',
  'report_comment_title' => 'Admine bu yorumu bildirin', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Bu pencereyi kapatmak için götüntüye tıklayın',);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Ekart gönder',
  'invalid_email' => '<b>Uyarı</b> : geçersiz email adres !',
  'ecard_title' => ' %s den sizin için bir ekart ',
  'error_not_image' => 'Sadece görüntüler ekart olarak gönderilebilir', 
  'view_ecard' => 'Eğer ekart tam olarak görünmezse bu linki yıklayınız',
  'view_ecard_plaintext' => 'Kartı görmek için verilen adresi kopyala yapıştır yöntemi ile web programınıza yazınız ve bakınız.:', //cpg1.4
  'view_more_pics' => 'Daha fazla resim resim için bu linki tıklayınız !',
  'send_success' => 'Ekartınız yolandı',
  'send_failed' => 'Üzgünüm ama sunucu ekartınızı yollayamadı...',
  'from' => 'Kimden',
  'your_name' => 'Adınız',
  'your_email' => 'Email adresiniz',
  'to' => 'Kime',
  'rcpt_name' => 'Alanın Adı',
  'rcpt_email' => 'Alanın email adresi',
  'greetings' => 'Başlık',
  'message' => 'Mesajınız',
  'ecards_footer' => 'Sent by %s from IP %s at %s (Gallery time)', //cpg1.4
  'preview' => 'Önizle', //cpg1.4
  'preview_button' => 'Önizle', //cpg1.4
  'submit_button' => 'E kart gönder', //cpg1.4
  'preview_view_ecard' => 'Bu gönderilen bir ekartın alternatif linki olabilir. Ön izlemede çalışmayabilir.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Admine bildir', //cpg1.4
  'invalid_email' => '<b>Uyarı</b> : yanlış email adresi !', //cpg1.4
  'report_subject' => 'Bildiri yapılan yer: %s galeri: %s', //cpg1.4
  'view_report' => 'Alternatif link adresi Eğer bildiri dogru çalışmazsa', //cpg1.4
  'view_report_plaintext' => 'Bildiriyi görmek için browser daki url adresini kopyala yapıştır yöntemini kullanının:', //cpg1.4
  'view_more_pics' => 'Galeri', //cpg1.4
  'send_success' => 'Bildiriniz gönderildi', //cpg1.4
  'send_failed' => 'Özür dilerim. Sunucu sizin bildirinizi gönderemedi...', //cpg1.4
  'from' => 'Gönderen', //cpg1.4
  'your_name' => 'Adınız', //cpg1.4
  'your_email' => 'Email adresiniz', //cpg1.4
  'to' => 'Alanın', //cpg1.4
  'administrator' => 'Admin / Mod', //cpg1.4
  'subject' => 'Konu', //cpg1.4
  'comment_field_name' => 'Yorum yapan "%s" isimli kullanıcının yorumu ', //cpg1.4
  'reason' => 'Sebeb', //cpg1.4
  'message' => 'Mesaj', //cpg1.4
  'report_footer' => 'Gönderen %s, İP adresi %s saat %s (Galeri zamanı)', //cpg1.4
  'obscene' => 'müstehcen', //cpg1.4
  'offensive' => 'saldırgan', //cpg1.4
  'misplaced' => 'konu dışı / gereksiz', //cpg1.4
  'missing' => 'olmayan', //cpg1.4
  'issue' => 'hata / görünmüyor', //cpg1.4
  'other' => 'degişik', //cpg1.4
  'refers_to' => 'Konuyla ilgili dosya', //cpg1.4
  'reasons_list_heading' => 'şikayetin sebebi:', //cpg1.4
  'no_reason_given' => 'sebeb bildirilmeden', //cpg1.4
  'go_comment' => 'Yoruma git', //cpg1.4
  'view_comment' => 'Tüm şikayeti yorum ile birlikte göster', //cpg1.4
  'type_file' => 'dosya', //cpg1.4
  'type_comment' => 'yorum', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Resim bilgisi', 
  'album' => 'Albüm',
  'title' => 'Başlık',
  'filename' => 'Dosya ismi', //cpg1.4
  'desc' => 'Açıklama',
  'keywords' => 'anahtarsözcük',
  'new_keyword' => 'Yeni anahtarsözcük', //cpg1.4
  'new_keywords' => 'Yeni anahtarsözcük bulunamadı', //cpg1.4
  'existing_keyword' => 'Varolan anaktarsözcük', //cpg1.4
  'pic_info_str' => '%s &kez; %s - %s KB - %s görüntülenmiş - %s oylanmış',
  'approve' => 'Resmi onayla', 
  'postpone_app' => 'Onayı ertele',
  'del_pic' => 'Resmi sil', 
  'del_all' => 'Tüm dosyaları sil', //cpg1.4
  'read_exif' => 'EXIF bilgisini tekrar okuyunuz', 
  'reset_view_count' => 'Görüntü sayacını yenile',
  'reset_all_view_count' => 'Gürüntü sayacını sıfırla', //cpg1.4
  'reset_votes' => 'Oyları yenile',
  'reset_all_votes' => 'Oyları sıfırla', //cpg1.4
  'del_comm' => 'Yorumları sil',
  'del_all_comm' => 'Yorumları sil', //cpg1.4
  'upl_approval' => 'Onay gönder',
  'edit_pics' => 'Resimleri Düzenle', 
  'see_next' => 'Diğer resimlere bak', 
  'see_prev' => 'Gerideki resimlere bak', 
  'n_pic' => '%s resimler', 
  'n_of_pic_to_disp' => 'Gösterim için resimlerin numaraları', 
  'apply' => 'Değişiklikleri kaydet', 
  'crop_title' => 'Coppermine resim editoru', 
  'preview' => 'Özel gösterim', 
  'save' => 'Resimleri kaydet', 
  'save_thumb' =>'Küçük resim olarak kaydet',   'gallery_icon' => 'Galareimin ikonu yap', //cpg1.4
  'sel_on_img' =>'Seçilen alan resimin üzerinde olmalı!', //js-alert
  'album_properties' =>'Albüm ayarları', //cpg1.4
  'parent_category' =>'Ana katogori', //cpg1.4
  'thumbnail_view' =>'Önizleme', //cpg1.4
  'select_unselect' =>'Hepsini işaretleri/işaretleri kaldır', //cpg1.4
  'file_exists' => "'%s' zaten mevcut.", //cpg1.4
  'rename_failed' => "'%s' ismini '%s' olarak değiştirme isteginiz başarısız oldu.", //cpg1.4
  'src_file_missing' => "Source dosyası '%s' bulunamıyor.", // cpg 1.4
  'mime_conv' => "'%s' dan '%s' çevirme işlemi başarısız oldu.",//cpg1.4
  'forb_ext' => 'Yasak olan uzantı.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Frequently Asked Questions',
  'toc' => 'Table of contents',
  'question' => 'Question: ',
  'answer' => 'Answer: ',
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  'General FAQ',
		'Sıkça sorulan sorular - genel',
		array('Niçin kayıt olmak zorundayım?', 'Üyelik zorunlulugu site yönetimi tarafında zorunlu koşulabilir. Üyelik kullanıcılara daha çok imkanlar sunar. Sunulan imkanlar mesala: dosya yükleme, favorit listesi tutma, resimleri oylama ve yorum yapma ve buna benzer ayrıcalıklar tanır.', 'allow_user_registration', '0'),
		array('Nasıl kayıt olabilirim?', 'Bunun için &quot;Registreer&quot; git ve gereken bilgileri gir (isterseniz opsiyonel bölümleride doldurabilirsiniz).<br/>Site yönetiminin ayarlarına bağlı olarak, kayıt bilgilerini gönderdikten sonra size kayıt anında verdiginiz email adresine bir elektronik posta gelir. Burada üyeliginizin aktifleştirilmesi için neler yapmanı gerektigi yazılıdır. Giriş yapabilmeniz için önce üyeliginiz aktifleşmiş olamalıdır.', 'allow_user_registration', '1'),
		array('Nasıl giriş yapılır?', '&quot;Login&quot; git, kullanıcı ismini ve şifreni gir ve &quot;Onthoud mij&quot; seçki bir sonraki ziyaretinizde otamatik giriş yapabilesiniz.<br/><b>Önemli: Sisteminiz kurabiye dosyalarına açık olmalı ve sitenin kurabiye &quot;Onthoud mij&quot; kullanabilmek için silinmemeli.</b>', 'Çevrimdışı', 0),
  array('Why can I not login?', 'Did you register and click the link that was sent to you via email?. The link will activate your account. For other login problems contact the site administrator.', 'offline', 0),
  array('What if I forgot my password?', 'If this site has a &quot;Forgot password&quot; link then use it. Other than that contact the site administrator for a new password.', 'offline', 0),
  //array('What if I changed my email address?', 'Just simply login and change your email address through &quot;Profile&quot;', 'offline', 0),
  array('How do I save a picture to &quot;My Favorites&quot;?', 'Click on a picture and click on the &quot;picture info&quot; link (<img src="images/info.gif" width="16" height="16" border="0" alt="Picture information" />); scroll down to the picture information set and click &quot;Add to fav&quot;.<br />The administrator may have the &quot;picture information&quot; on by default.<br />IMPORTANT:Cookies must be enabled and the cookie from this site must not be deleted.', 'offline', 0),
  array('How do I rate a file?', 'Click on a thumbnail and go to the bottom and choose a rating.', 'offline', 0),
  array('How do I post a comment for a picture?', 'Click on a thumbnail and go to the bottom and post a comment.', 'offline', 0),
  array('How do I upload a file?', 'Go to &quot;Upload&quot;and select the album that you want to upload to. Click &quot;Browse,&quot; find the file to upload, and click &quot;open.&quot; Add a title and description if you want. Click &quot;Submit&quot;.<br /><br />Alternatively, for those users using <b>Windows XP</b>, you can upload multiple files directly to your own private albums using the XP Publishing wizard.<br />For instructions on how, and to get the required registry file, click <a href="xp_publish.php">here.</a>', 'allow_private_albums', 1), //cpg1.4
  array('Where do I upload a picture to?', 'You will be able to upload a file to one of your albums in &quot;My Gallery&quot;. The Administrator may also allow you to upload a file to one or more of the albums in the Main Gallery.', 'allow_private_albums', 0),
  array('What type and size of a file can I upload?', 'The size and type (jpg, png, etc.) is up to the administrator.', 'offline', 0),
  array('How do I create, rename or delete an album in &quot;My Gallery&quot;?', 'You should already be in &quot;Admin-Mode&quot;<br />Go to &quot;Create/Order My Albums&quot;and click &quot;New&quot;. Change &quot;New Album&quot; to your desired name.<br />You can also rename any of the albums in your gallery.<br />Click &quot;Apply Modifications&quot;.', 'allow_private_albums', 0),
  array('How can I modify and restrict users from viewing my albums?', 'You should already be in &quot;Admin Mode&quot;<br />Go to &quot;Modify My Albums. On the &quot;Update Album&quot; bar, select the album that you want to modify.<br />Here, you can change the name, description, thumbnail picture, restrict viewing and comment/rating permissions.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0),
  array('How can I view other users\' galleries?', 'Go to &quot;Album List&quot; and select &quot;User Galleries&quot;.', 'allow_private_albums', 0),
  array('What are cookies?', 'Cookies are a plain text piece of data that is sent from a website and is put on to your computer.<br />Cookies usually allow a user to leave and return to the site without having to login again and other various chores.', 'offline', 0),
  array('Where can I get this program for my site?', 'Coppermine is a free Multimedia Gallery, released under GNU GPL. It is full of features and has been ported to various platforms. Visit the <a href="http://coppermine-gallery.net/">Coppermine Home Page</a> to find out more or download it.', 'offline', 0),

  'Navigating the Site',
  array('What\'s &quot;Album List&quot;?', 'This will show you the entire kategori you are currently in, with a link to each album. If you are not in a kategori, it will show you the entire gallery with a link to each category. Thumbnails may be a link to the category.', 'offline', 0),
  array('What\'s &quot;My Gallery&quot;?', 'This feature lets users create their own galleries and add, delete or modify albums as well as upload to them.', 'allow_private_albums', 1), //cpg1.4
  array('What\'s the difference between &quot;Admin Mode&quot; and &quot;User Mode&quot;?', 'This feature, when in admin-mode, allows a user to modify their gallery (as well as others if allowed by the administrator).', 'allow_private_albums', 0),
  array('What\'s &quot;Upload Picture&quot;?', 'This feature allows a user to upload a file (size and type is set by the site administrator) to a gallery selected by either you or the administrator.', 'allow_private_albums', 0),
  array('What\'s &quot;Last Uploads&quot;?', 'This feature shows the last uploads to the site.', 'offline', 0),
  array('What\'s &quot;Last Comments&quot;?', 'This feature shows the last comments along with the files posted by users.', 'offline', 0),
  array('What\'s &quot;Most Viewed&quot;?', 'This feature shows the most viewed files by all users (whether logged in or not).', 'offline', 0),
  array('What\'s &quot;Top Rated&quot;?', 'This feature shows the top rated files rated by the users, showing the average rating (e.g: five users each gave a <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: the file would have an average rating of <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ;Five users rated the file from 1 to 5 (1,2,3,4,5) would result in an average <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />The ratings go from <img src="images/rating5.gif" width="65" height="14" border="0" alt="best" /> (best) to <img src="images/rating0.gif" width="65" height="14" border="0" alt="worst" /> (worst).', 'offline', 0),
  array('What\'s &quot;My Favorites&quot;?', 'This feature will let a user store a favorite file in the cookie that was sent to your computer.', 'offline', 0),
);


// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Şifremi unuttum', 
  'err_already_logged_in' => 'Daha önceden giriş yapmışsınız !', 
  'enter_email' => 'Email adresinizi yazın', //cpg1.4
  'submit' => 'Gönder', 
  'illegal_session' => 'Şifre gönder işleminde hata oluştu.', //cpg1.4
  'failed_sending_email' => 'Şifreniz yollanamadı !', 
  'email_sent' => 'Üye adınız ve şifrenize email yoluyla %s a yollandı', 
  'verify_email_sent' => ' %s adresine email gönderildi. İşlemi tamamlamak için elektronik postanızı kontrol ediniz.', //cpg1.4
  'err_unk_user' => 'Seçilen kullanıcı bulunamadı!', 
  'account_verify_subject' => '%s - Yeni şifre', //cpg1.4
  'account_verify_body' => 'Şifrenizi yenilemek istiyorsunuz. Size yeni bir şifre gönderilmeisini istiyorsanız aşagıdaki linke tıklayınız:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Yeni şifreniz', //cpg1.4
  'passwd_reset_body' => 'İstediginiz yeni şifreniz:
Üye adı: %s
Şifre: %s
Giriş için %s i tıklayın.', 
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grup Adı',
  'permissions' => 'Yetkiler', //cpg1.4
  'public_albums' => 'Herkese açık yükleme', //cpg1.4
  'personal_gallery' => 'Kişisel galari', //cpg1.4
  'upload_method' => 'Yükleme metodu', //cpg1.4
  'disk_quota' => 'Disk boyutu', //cpg1.4
  'rating' => 'Oylama', //cpg1.4
  'ecards' => 'Ekard', //cpg1.4
  'comments' => 'Yorum', //cpg1.4
  'allowed' => 'İzin', //cpg1.4
  'approval' => 'Onay', //cpg1.4
  'boxes_number' => 'Gönderme kutu sayısı', //cpg1.4
  'variable' => 'degişken', //cpg1.4
  'fixed' => 'sabit', //cpg1.4
  'apply' => 'Değişiklikleri kaydet',
  'create_new_group' => 'Yeni grup ',
  'del_groups' => 'Seçilen grup (-ları) sil',
  'confirm_del' => 'Uyarı, ne zaman bir grubu silerseniz, o gruba ait olan kullanıcılar \'Kayıtlı\' grubuna transfer edilecektir !\n\nDevam etmek istiyor musunuz?', //js-alert 
  'title' => 'Kullanıcı gruplarını yönet',
  'num_file_upload' => 'Dosya yükleme kutusu', //cpg1.4
  'num_URI_upload' => 'URI yükleme kutusu', //cpg1.4
  'reset_to_default' => 'Orjinal ayarlara geri dön (%s) - tavsiye edilir!', //cpg1.4
  'error_group_empty' => 'Grup tablosu boş !<br /><br />Bir grup oluşturuldu, lütfen sayfayı yükleyiniz.', //cpg1.4
  'explain_greyed_out_title' => 'Bu sıra neden kapalı?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Bu grup ayarlarını değiştiremezsiniz. Çünkü ayarları &quot; Config sayfasından herkeze açık giriş iznini (misafir) &quot; den &quot;No&quot; a çeviriniz. Bütün misafirler (bu grup üyeleri %s) giriş dışında her şeyi yapabilirler; bu yüzden bu ayarlar onlar için geçerli değil.', //cpg1.4
  'explain_banned_greyed_out_text' => 'Bu grup ayarlarını değiştiremezsiniz. Çünkü bu grub zaten bir şey yapamıyor.', //cpg1.4
  'group_assigned_album' => 'tanımlanımş album(ler)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Hoşgeldiniz !',
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Bu albümü SİLMEK istediğinizden emin misiniz ? \\nBütün resimler ve yorumlar silinmiş olacaktır.', //js-alert 
  'delete' => 'Sil',
  'modify' => 'Özellikler',
  'edit_pics' => 'Resimleri düzenle', 
);

$lang_list_categories = array(
  'home' => 'Ana sayfa',
  'stat1' => 'Sitemizde yayınlanan <b>[albums]</b> albümdeki <b>[pictures]</b> adet resimler <b>[views]</b> kez izlenilmiş ve <b>[comments]</b> kez yorum yazılmıştır. ', 
  'stat2' => 'resim sayısı:<b>[pictures]</b>, albüm sayısı <b>[albums]</b>, izlenme sayısı: <b>[views]</b>', 
  'xx_s_gallery' => '%s\'nin galarisi',
  'stat3' => 'Sitemizde yayınlanan <b>[albums]</b> albümün içindeki <b>[pictures]</b> adet resimler <b>[views]</b> kez izlenmiş ve bu resimlere <b>[comments]</b> adet yorum gönderilmiştir. ', 
);

$lang_list_users = array(
  'user_list' => 'Kullanıcı listesi',
  'no_user_gal' => 'Kullanıcı galerisi yok',
  'n_albums' => '%s albüm(-ler)',
  'n_pics' => '%s resim(-ler)', 
);

$lang_list_albums = array(
  'n_pictures' => '%s resimler', 
  'last_added' => ', sonuncusu %s da eklendi',
  'n_link_pictures' => '%s bağlı dosyalar', //cpg1.4
  'total_pictures' => '%s dosya toplamı', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Anahtarsözcük yönetimi', //cpg1.4
  'edit' => 'değiştir', //cpg1.4
  'delete' => 'sil', //cpg1.4
  'search' => 'ara', //cpg1.4
  'keyword_test_search' => 'yeni ekranda %s ara', //cpg1.4
  'keyword_del' => '%s anahtarsözcügünü sil', //cpg1.4
  'confirm_delete' => '%s anahtarsözcügünü silmek istediginize eminmisiniz?', //cpg1.4  // js-alert
  'change_keyword' => 'anahtarsözcügünü değiştir', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'Giriş',
  'enter_login_pswd' => 'Giriş yapmak için kullanıcı adınızı ve şifrenizi yazın',
  'username' => 'Üye adı',
  'password' => 'Şifre',
  'remember_me' => 'Beni hatırla',
  'welcome' => 'Hoşgeldin %s ...',
  'err_login' => '*** Giriş yapılamadı! Lütfen tekrar deneyin ***',
  'err_already_logged_in' => 'Daha önceden giriş yapmışsınız !',
  'forgot_password_link' => 'Şifremi unuttum', 
  'cookie_warning' => 'Web proğramınız kurabiyeleri kabul etmiyor', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Çıkış',
  'bye' => 'Güle güle %s ...',
  'err_not_loged_in' => 'Giriş yapmamışsınız !',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'kapat', //cpg1.4
  'submit' => 'Tamam', //cpg1.4
  'up' => 'bir klasör yukarı', //cpg1.4
  'current_path' => 'şu andaki pat', //cpg1.4
  'select_directory' => 'Lütfen bir klasör seçiniz', //cpg1.4
  'click_to_close' => 'Ekranı kapatmak için resime tıklayınız',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Güncellenen albüm %s',
  'general_settings' => 'Genel ayarlar',
  'alb_title' => 'Albüm başlığı',
  'alb_cat' => 'Albüm kategorisi',
  'alb_desc' => 'Albüm açıklaması',
  'alb_keyword' => 'Albüm anahtarsözcükleri', //cpg1.4
  'alb_thumb' => 'Albüm küçük resmi',
  'alb_perm' => 'Bu albüm için izinler',
  'can_view' => 'Albüm tarafından görüntülenebilir',
  'can_upload' => 'Ziyaretçiler resim yükleyebilirler',
  'can_post_comments' => 'Ziyaretçiler yorum ekleyebilirler',
  'can_rate' => 'Ziyaretçiler oy verebilirler',
  'user_gal' => 'Kullanıcı galerisi',
  'no_cat' => '* Kategori yok *',
  'alb_empty' => 'Albüm boş',
  'last_uploaded' => 'Son yüklenenler',
  'public_alb' => 'Herkes (Herkese açık albüm)',
  'me_only' => 'Sadece ben',
  'owner_only' => 'Sadece (%s) albüm sahibi',
  'groupp_only' => ' \'%s\' grubunun üyeleri',
  'err_no_alb_to_modify' => 'veritabanında albüm düzenleyemazsiniz.',
  'update' => 'Albümü güncelle', 
  'reset_album' => 'Albümü sıfırla', //cpg1.4
  'reset_views' => 'İzlenme sayacını ayarla &quot;0&quot; in %s', //cpg1.4
  'reset_rating' => 'Oylama sayacını sıfırla %s', //cpg1.4
  'delete_comments' => 'Yorumları sil %s', //cpg1.4
  'delete_files' => '%sIrreversibly%s dosyaların tamamını sil %s', //cpg1.4
  'views' => 'izlenme', //cpg1.4
  'votes' => 'oylar', //cpg1.4
  'comments' => 'yorumlar', //cpg1.4
  'files' => 'dosyalar', //cpg1.4
  'submit_reset' => 'degişiklikleri kaydet', //cpg1.4
  'reset_views_confirm' => 'evet eminim', //cpg1.4
  'notice1' => '(*) %sgroups%s grup ayarlarına bağlı',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Albüm şifresi', //cpg1.4
  'alb_password_hint' => 'Albüm hatırlatma', //cpg1.4
  'edit_files' =>'dosya ayarları', //cpg1.4
  'parent_category' =>'Kategoriler', //cpg1.4
  'thumbnail_view' =>'Toplu halde göster', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'PHP info',
  'explanation' => 'PHP tarafından üretilen bilgiler <a href="http://www.php.net/phpinfo">phpinfo()</a>, Coppermine içinde gösterilir (sağ tarafta).',
  'no_link' => 'Bu bilğilerin yayınlanması güvenlik rizikos oluşturabileceginden bu sayfa sadece yöneticilere açıktır. Bu sayfanın linkini de gönderemezsiniz. Yöneticiler dışında kimse açamaz bu sayfayı.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Resim yönetimi', //cpg1.4
  'select_album' => 'Albüm seç', //cpg1.4
  'delete' => 'Sil', //cpg1.4
  'confirm_delete1' => 'Bu dosyayı silmek istediginize eminmisiniz?', //cpg1.4
  'confirm_delete2' => '\nDosya tamamen silinecektir.', //cpg1.4
  'apply_modifs' => 'Degişiklikleri uygula', //cpg1.4
  'confirm_modifs' => 'Degişiklikleri onayla', //cpg1.4
  'pic_need_name' => 'Resimlerin bir ismi olmalı!', //cpg1.4
  'no_change' => 'Herhangi bir değişiklik yapılmadı !', //cpg1.4
  'no_album' => '* Albüm yok *', //cpg1.4
  'explanation_header' => 'Kişisel sınıflandırma sadece bazı koşullarda gösterilecektir', //cpg1.4
  'explanation1' => 'yönetici varsayılan sınıflandırmayı ayarlarda "azalan" veya "artan" olarak ayarlar (sınıflandırma seçmemiş kullanıcılar için varsayılan ayarlar)', //cpg1.4
  'explanation2' => 'kullanıcı "azalan" veya "artan" seçer (kullanıcı ayarları)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Bu pluginsi kaldırmak istediğinize eminmisiniz?', //cpg1.4
  'confirm_delete' => 'Bu pluginis silmek istediğinize eminmisiniz?', //cpg1.4
  'pmgr' => 'Plugin Ayarları', //cpg1.4
  'name' => 'Ad', //cpg1.4
  'author' => 'Yazar', //cpg1.4
  'desc' => 'Tanımla', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugins Kur', //cpg1.4
  'n_plugins' => 'Plugins Kurulmadı', //cpg1.4
  'none_installed' => 'Kurulmadı', //cpg1.4
  'operation' => 'Çalışma', //cpg1.4
  'not_plugin_package' => 'Yüklenen dosya plugin paketi değil.', //cpg1.4
  'copy_error' => 'Plugin klasöre kopyalamada bir hata oluştu.', //cpg1.4
  'upload' => 'Yükle', //cpg1.4
  'configure_plugin' => 'Plugin ayarları', //cpg1.4
  'cleanup_plugin' => 'Plugin temizle', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Bu resme daha önceden oy verdiniz', 
  'rate_ok' => 'Oyunuz kabul edildi',
  'forbidden' => 'Kendi resimlerinize oy veremezsiniz.', 
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Her nekadar{SITE_NAME} da istenmeyen yayınlar veya yorumlar site yönetimi tarafından en kısa sürede silinsede, yöneticinin herşeyi takip etmesi oldukca zor. Bunların tamamen onları yazan kişilerin görüşü olduğu ve yöneticilerin görüş ve düşüncelerini temsil etmediğini kabul etmiş olursunuz.<br />
<br />
Kaba, hakaret içeren, yanlış, sıkıcı, tehdit içeren, diğer kullanıcıların kişilik haklarını ihlal edici, cinsel öğeler içeren, TC yasalarını çiğneyen mesajlardan lütfen kaçınınız. Foruma telif haklarına muhalif metaryel göndermeyiniz. Mesajın içeri mesajı gönderenin sorumluğundadır,  --sitenizin adı--- bağlamaz. Foruma mesaj gönderdiğinizde gönderim tarih, saati, IP numaranız gibi bilgiler kaydedilir. Sitemize kaydedilen ve yüklenen bilgiler sizin izniniz olmadan bir başkasına verilmez. Yanlız yöneticilerin kontrolü dışında hack gibi olaylardan dolayı alınan bilgilerden doğacak maddi ve manevi zararlardan sitemiz ve yönetiçilerimiz sorumlu tutulamıyacagını kabul emiş olursunuz.<br />
<br />
Bu site yerel bilgisayarlar krabiye dosyası bırakır. Bu sadece üyelerimizi tanımak içindir. Email adesiniz sadece kayıt anında kullanılır.<br />
<br />
Kabul ediyorum tuşuna seçtiğiniz andan itibaren bunlarıda kabul etmiş olursunuz.
EOT;

$lang_register_php = array(
  'page_title' => 'Kullanıcı kayıdı',
  'term_cond' => 'Durumlar ve süreler',
  'i_agree' => 'Kabul ediyorum',
  'submit' => 'Üyelik oluştur',
  'err_user_exists' => 'Yazdığınız kullanıcı adı bulunamadı, lütfen başka birtane seçin',
  'err_password_mismatch' => 'İki şifre birbirine uymuyor, lütfen tekrar yazın',
  'err_uname_short' => 'Kullanıcı dı en az 2 karakterden fazla olmalıdır',
  'err_password_short' => 'Şifre en az 2 karakterden fazla olmalıdır',
  'err_uname_pass_diff' => 'Üye adı ve şifre birbirinden farklı olmalıdır',
  'err_invalid_email' => 'Email adresi geçersiz',
  'err_duplicate_email' => 'Yazdıgınız email adresi zaten sitemizde kayıtlıdır. Lütfen size ait bir email adresi yazınız.',
  'enter_info' => 'Kayıt bilgilerini girin',
  'required_info' => 'Zorunlu bilgiler',
  'optional_info' => 'İsteğe bağlı bilgiler',
  'username' => 'Üye adı',
  'password' => 'Şifre',
  'password_again' => 'Şifreyi tekrar yazın',
  'email' => 'Email',
  'location' => 'Nereden',
  'interests' => 'Hobiler',
  'website' => 'Web sitesi',
  'occupation' => 'Meslek',
  'error' => 'HATA',
  'confirm_email_subject' => '%s - Kayıt Doğrulama',
  'information' => 'Bilgi',
  'failed_sending_email' => 'Kayıt doğrulama maili yollanamadı !',
  'thank_you' => 'Kayıt olduğunuz için teşekkürler.<br /><br />Email adresinize üyeliğinizi aktif etmeniz için bir mail gönderildi.',
  'acct_created' => 'Üyeliğiniz oluşturuldu ve şimdi siteye girip kullanıcı adınız ve şifrenizle giriş yapabilirsiniz',
  'acct_active' => 'Tebrikler! Üyeliğiniz başarı ile oluşturulmuş ve aktif hale getirilmiştir. Üye adınız ve şifrenizle giriş yapabilirsiniz',
  'acct_already_act' => 'Üyeliğiniz daha önceden aktif edilmiş !',
  'acct_act_failed' => 'Bu üyelik aktif edilemez !',
  'err_unk_user' => 'Seçilen kullanıcı bulunamadı !',
  'x_s_profile' => '%s\'nin profili',
  'group' => 'Grup',
  'reg_date' => 'Üyelik tarihi',
  'disk_usage' => 'Kullanıdıgı disk alanı',
  'current_pass' => 'Şimdiki şifre',
  'new_pass' => 'Yeni şifre',
  'new_pass_again' => 'Yeni şifre tekrarı',
  'err_curr_pass' => 'Şimdiki şifreniz yanlış',
  'apply_modif' => 'Değişiklikleri kaydet',
  'change_pass' => 'Şifremi değiştir',
  'update_success' => 'Profiliniz güncellendi',
  'pass_chg_success' => 'Şifreniz değişti',
  'pass_chg_error' => 'Şifreniz değişmedi',
  'notify_admin_email_subject' => '%s - Kayıt Bildirisi', 
  'notify_admin_email_body' => 'Yeni bi kullanıcı "%s" galerinize kayıt oldu', 
  'last_uploads' => 'Son yüklenen dosya.<br /> Yüklemelerin tamamını görmek için tıla', //cpg1.4
  'last_comments' => 'Son yorum.<br />Yorumların tamamını görmek için tıkla', //cpg1.4
  'notify_admin_email_body' => '"%s" isimli yeni üye galarinize üye oldu',
  'pic_count' => 'Dosya yüklendi', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Kayıt taleb', //cpg1.4
  'thank_you_admin_activation' => 'Teşekkürler.<br /><br />Üyelik kayıt aktifleştirme isteğiniz site yönetimine gönderildi. Üyeliğiniz aktifleştirildiği email ile bildirilecektir.', //cpg1.4
  'acct_active_admin_activation' => 'üyelik aktifleştirilmiştir. Üyeye email gönderilerek bu bildirilmiştir.', //cpg1.4
  'notify_user_email_subject' => '%s - Aktif tebliği', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
{SITE_NAME}e kayıt olduğunuz için teşekkürler.

Üye adınız : "{USER_NAME}"
Şifreniz : "{PASSWORD}"

Üyeliğinizi aktif etmek için, aşağıdaki linki tıklamalısınız.
Eğer bu işlem başarısız olur ise aşagıdaki adresi internet programınıza kopyalayın ve adres satırına yapıştırıp enter ile açınız.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Teşekkürler,

{SITE_NAME} yönetimi

EOT;

$lang_register_approve_email = <<<EOT
"{USER_NAME}" adlı kullanıcı sitenize üye oldu.

Üyeligi aktif etmek için linke tıklayınız.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Üyeliğiniz kabul edildi ve aktifleştirildi.

<a href="{SITE_LINK}">{SITE_LINK}</a> adresine "{USER_NAME}" üyelik adı ve şifrenizle girebilirsiniz.


Saygılar,

{SITE_NAME} sitesinin yönetimi

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Yorumları incele',
  'no_comment' => 'İnceleme için bir yorum bulunamadı',
  'n_comm_del' => '%s yorum(-lar) silindi',
  'n_comm_disp' => 'Ekranda gösterilen yorum adeti',
  'see_prev' => 'Geriye bak',
  'see_next' => 'İleriye bak',
  'del_comm' => 'Seçilen yorumları sil',
  'user_name' => 'Ad', //cpg1.4
  'date' => 'Tarih', //cpg1.4
  'comment' => 'Yorum', //cpg1.4
  'file' => 'Dosya', //cpg1.4
  'name_a' => 'Üye adı artan', //cpg1.4
  'name_d' => 'Üye adı azalan', //cpg1.4
  'date_a' => 'Tarih artan', //cpg1.4
  'date_d' => 'Tarih azalan', //cpg1.4
  'comment_a' => 'Yorumlar artan', //cpg1.4
  'comment_d' => 'Yorumlar azalan', //cpg1.4
  'file_a' => 'Dosya artan', //cpg1.4
  'file_d' => 'Dosya azalan', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Site içi ara', //cpg1.4
  'submit_search' => 'ara', //cpg1.4
  'keyword_list_title' => 'Kelimeler', //cpg1.4
  'keyword_msg' => 'Yukardaki liste bütün kelimeleri içermez. Lütfen aradıgınız kelimeleri yazınız.',  //cpg1.4
  'edit_keywords' => 'Anahtarsözcük değiştir', //cpg1.4
  'search in' => 'Aranacak seçenekler:', //cpg1.4
  'ip_address' => 'IP adresi', //cpg1.4
  'fields' => 'Gelişmiş arama seçenekleri', //cpg1.4
  'age' => 'Zaman', //cpg1.4
  'newer_than' => 'En yeni', //cpg1.4
  'older_than' => 'En eski', //cpg1.4
  'days' => 'gün', //cpg1.4
  'all_words' => 'Tam kelimler (AND)', //cpg1.4
  'any_words' => 'Bütün kelimeler (OR)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Adı', //cpg1.4
  'caption' => 'Tarifi', //cpg1.4
  'keywords' => 'Arama kelimesi', //cpg1.4
  'owner_name' => 'Sahibinin adı', //cpg1.4
  'filename' => 'Dosya adı', //cpg1.4
);

}
// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'Yeni resimler ara', 
  'select_dir' => 'Klasör seç',
  'select_dir_msg' => 'Bu fonksiyon size FTP ile sunucunuza resim grubu eklemenize izin verir.<br /><br />Resimlerinizi eklediğiniz klsörü seçin', 
  'no_pic_to_add' => 'Eklemek için resim bulunamadı', 
  'need_one_album' => 'Son olarak bu fonksiyonu kullanabilmek için bir albüme ihtiyacınız var',
  'warning' => 'Uyarı',
  'change_perm' => 'Script bu klasörü yazamaz , modunu resimleri eklemeden önce 755 e vaya 777 ye çevirmeniz gerekir !', 
  'target_album' => '<b>Resimlerini koy &quot;</b>%s<b>&quot; içine </b>%s', 
  'folder' => 'Klasör',
  'image' => 'Dosya',
  'album' => 'Albüm',
  'result' => 'Sonuç',
  'dir_ro' => 'Yazılamaz. ',
  'dir_cant_read' => 'Okunamaz. ',
  'insert' => 'Galeriye yeni resimler ekleme', 
  'list_new_pic' => 'Yeni resimlerin listesi', 
  'insert_selected' => 'Seçilen resimleri ekle', 
  'no_pic_found' => 'Yeni resim bulunamadı', 
  'be_patient' => 'Lütfen sabırlı olun, scriptin resimleri eklemek için zamana ihtiyacı var', 
  'no_album' => 'Albüm seçilmedi',  
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : anlamı resim başarıyla eklendi'.
                          '<li><b>DP</b> : anlamı resim aynı ve daha öneceden veri tabanın içinde'.
                          '<li><b>PB</b> : anlamı resim eklanamedi, biçiminizi ve resimlerin nerede kloasör izninine sahip olduğunuzu konyrol ediniz'.
                          '<li><b>NA</b> : anlamı resime gidebilmek için bir albüm seçmediniz, \' <a href="javascript:history.back(1)">geriye gidin</a>\' ve bir albüm seçin. Eğer albümünüz yoksa<a href="albmgr.php">birtane oluşturun</a></li>'.
                          '<li>Eğer TAMAM, DP, PB \'signs\' gözükmüyorsa hata görmemek için resme tıklayın'.
                          '<li>Eğer browserınız timeout ise, tekrar yükle butonunu tıklayınız'.
                          '</ul>', 
  'select_album' => 'albüm seç', 
  'check_all' => 'Tümünü kontrol et', 
  'uncheck_all' => 'Tümünü kontrol etme', 
  'no_folders' => '"Albums" klasörünün içinde hiç bir klasör yok henüz. Bu klasörün içinde en az bir klasör oluşturmanız gerekiyor. Daha sonrada dosyalarınızı bu klasörün içine ftp ile yükleyiniz. Dikkat:  "userpics" ve "edit" klasörlerinin içine hiç bir şey yüklemeyin. Bu klasörler sistem dosyaları ve http yüklemeleri için kullanılmakta.', //cpg1.4
   'albums_no_category' => 'Kategori dışı albümler', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Kişisel albümler', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Browsable görünüm (tavsiye edilir)', //cpg1.4
  'edit_pics' => 'Dosyaları değiştir', //cpg1.4
  'edit_properties' => 'Albüm ayarları', //cpg1.4
  'view_thumbs' => 'Önizleme', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'Bu sütunu göster/gizle', //cpg1.4
  'vote' => 'Oy ayrıntıları', //cpg1.4
  'hits' => 'İzlenme ayrıntıları', //cpg1.4
  'stats' => 'Oy istatistikleri', //cpg1.4
  'sdate' => 'Tarih', //cpg1.4
  'rating' => 'İzlenme oranı', //cpg1.4
  'search_phrase' => 'Arama tarzı', //cpg1.4
  'referer' => 'Referer', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Operating System', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Sıralam şekli: %s', //cpg1.4
  'ascending' => 'artan', //cpg1.4
  'descending' => 'azalan', //cpg1.4
  'internal' => 'int', //cpg1.4
  'close' => 'kapat', //cpg1.4
  'hide_internal_referers' => 'internal referers gizle', //cpg1.4
  'date_display' => 'Tarih ekranı', //cpg1.4
  'submit' => 'gönder / yenile', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File thumbnails.php
// ------------------------------------------------------------------------- //

// Void

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) $lang_upload_php = array(
  'title' => 'Upload file', 
  'custom_title' => 'Talep Formu Düzenleme', 
  'cust_instr_1' => 'Yükleme kutularının numarasını seçebilirisin. Bununla birlikte, Aşağıda listelenen limitin üstünde seçim yapamzsınız.', 
  'cust_instr_2' => 'Kutu numarası talebi', 
  'cust_instr_3' => 'Resim yükleme kutuları: %s', 
  'cust_instr_4' => 'URI/URL yükleme kutulrı: %s', 
  'cust_instr_5' => 'URI/URL yükleme kutuları:', 
  'cust_instr_6' => 'Resim yükleme kutuları:', 
  'cust_instr_7' => 'Lütfen istediğiniz yükleme kutusunun numarasını girin.  sonra tıklayın \'Devam et\'. ', 
  'reg_instr_1' => 'Forum aluşumunda geçersiz durum.', 
  'reg_instr_2' => 'Aşağıda kullanılan yükleme kutularından resimlerinizi yükleyebilirsiniz. Sunucuya yüklediğiniz resimler boyutu aşmamalıdır ve herbiri için %s KB olmalıdır. ZIP resimleri \'File Upload\' e yüklendi ve  \'URI/URL Upload\' bölümleri sıkışmış olarak kalacaktır.', 
  'reg_instr_3' => 'Eğer sıkıştırılmış resimleri açmak istiyorsanız, \'Decompressive ZIP Upload\' daki yükleme kutusunu kullanmalısınız.', //cpg1.3.0
  'reg_instr_4' => 'URI/URL yükleme seçeneklerini kullandığınız zaman, lütfen örnekteki gibi: http://www.mysite.com/images/example.jpg yol verin', //cpg1.3.0
  'reg_instr_5' => 'Formu tamamladığınızda, lütfen tıklayın \'Devam et\'.', //cpg1.3.0
  'reg_instr_6' => 'Zipli dosyaları açma:', //cpg1.3.0
  'reg_instr_7' => 'Resim yüklemeleri:', //cpg1.3.0
  'reg_instr_8' => 'URI/URL Yüklemeleri:', //cpg1.3.0
  'error_report' => 'Hata raporu', //cpg1.3.0
  'error_instr' => 'Takip edilen yükleme karşılaştırma hataları:', //cpg1.3.0
  'file_name_url' => 'Resim Adı/URL', //cpg1.3.0
  'error_message' => 'Hata Mesajı', //cpg1.3.0
  'no_post' => 'Resim yüklenemedi.', //cpg1.3.0
  'forb_ext' => 'Resim büyütmek yasaktır.', //cpg1.3.0
  'exc_php_ini' => 'php.ini de izinverilen dasya boyutu aşıldı.', //cpg1.3.0
  'exc_file_size' => 'CPG tarafından izin verilen dosya boyutu aşıldı.', //cpg1.3.0
  'partial_upload' => 'Sadece kısmi yükleme.', //cpg1.3.0
  'no_upload' => 'Yükleme yok.', //cpg1.3.0
  'unknown_code' => 'Bilinmeyen PHP yükleme hata kodu.', //cpg1.3.0
  'no_temp_name' => 'Yükleme yok - Temp adı yok.', //cpg1.3.0
  'no_file_size' => 'İçerilen veri bulunamadı/Bozulmuş', //cpg1.3.0
  'impossible' => 'Hareket etmek imkansız.', //cpg1.3.0
  'not_image' => 'İmaj notu/bozma', //cpg1.3.0
  'not_GD' => 'GD genişletme değil.', //cpg1.3.0
  'pixel_allowance' => 'Piksel izini aşıldı.', //cpg1.3.0
  'incorrect_prefix' => 'Yanlış URI/URL ', //cpg1.3.0
  'could_not_open_URI' => 'URI açılamadı.', //cpg1.3.0
  'unsafe_URI' => 'Güvenlik kanıtlanamadı.', //cpg1.3.0
  'meta_data_failure' => 'Meta verisi başarısız', //cpg1.3.0
  'http_401' => '401 Yetkisiz', //cpg1.3.0
  'http_402' => '402 Ödeme gerekli', //cpg1.3.0
  'http_403' => '403 Yasak', //cpg1.3.0
  'http_404' => '404 Bulunamadı', //cpg1.3.0
  'http_500' => '500 Sunucu hatası', //cpg1.3.0
  'http_503' => '503 Servis bulunamadı', //cpg1.3.0
  'MIME_extraction_failure' => 'MIME belirtilemedi.', //cpg1.3.0
  'MIME_type_unknown' => 'Bilinmeyen MIME türü', //cpg1.3.0
  'cant_create_write' => 'Yazı dosyası oluşturulamadı.', //cpg1.3.0
  'not_writable' => 'Yazı dosyası yazamazsınız.', //cpg1.3.0
  'cant_read_URI' => 'URI/URL okunamaz', //cpg1.3.0
  'cant_open_write_file' => 'URI yazma dosyası açılamadı.', //cpg1.3.0
  'cant_write_write_file' => 'URI yazma dosyasına yazamazsınız.', //cpg1.3.0
  'cant_unzip' => 'Uzip yapamazsınız.', //cpg1.3.0
  'unknown' => 'Bilinmeyen hata', //cpg1.3.0
  'succ' => 'Başarılı Yüklemeler', //cpg1.3.0
  'success' => '%s yüklemesi başarılı.', //cpg1.3.0
  'add' => 'Lütfen albüme resim eklemek için tıklayın \'Devam et\' .', //cpg1.3.0
  'failure' => 'Yükleme başarısız', //cpg1.3.0
  'f_info' => 'Resim bilgisi', //cpg1.3.0
  'no_place' => 'Önceki resim yerleştirilemedi.', //cpg1.3.0
  'yes_place' => 'Önceki resim başarıyla yerleştirildi.', //cpg1.3.0
  'max_fsize' => 'Maksimum resim boyutu %s KB',
  'album' => 'Albüm',
  'picture' => 'Resim', //cpg1.3.0
  'pic_title' => 'Resim başlığı', //cpg1.3.0
  'description' => 'Resim açıklaması', //cpg1.3.0
  'keywords' => 'anahtarsözcük (araları bölük bırakınız)',
  'err_no_alb_uploadables' => 'Önce albüm oluşturmalısınız', //cpg1.3.0
  'place_instr_1' => 'Lütfen resimleri yerleştirin.  Her resim için gerekli bilgiyi girin.', //cpg1.3.0
  'place_instr_2' => 'Daha fazla resim alana ihtiyaç duyar. Lütfen tıklayın \'Devam et\'.', //cpg1.3.0
  'process_complete' => 'Başarıyla bütün resimleri yerleştirdiniz.', //cpg1.3.0
   'albums_no_category' => 'Kategori dışı albümler', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Kişisel albümler', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Albüm seç', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => ' Kapat ', //cpg1.4
  'no_keywords' => 'Özür dileriz, herhangi bir anahtarsözcük bulunamadı!', //cpg1.4
  'regenerate_dictionary' => 'Klasörü yeniden yapılandır', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Üye listesi', //cpg1.4
  'user_manager' => 'Kullanıcı yönetimi', //cpg1.4
  'title' => 'Kullanıcıları yönet',
  'name_a' => 'Ada göre artan',
  'name_d' => 'Ada göre azalan',
  'group_a' => 'Gruba göre artan',
  'group_d' => 'Gruba göre azalan',
  'reg_a' => 'Kayıt tarihine göre artan',
  'reg_d' => 'Kayıt tarihine göre azalan',
  'pic_a' => 'Resim içeriğine göre artan',
  'pic_d' => 'Resim içeriğine göre azalan',
  'disku_a' => 'Disk kullanımına göre artan',
  'disku_d' => 'Disk kullanımına göre azalan',
  'lv_a' => 'Son ziyarete göre artan', //cpg1.3.0
  'lv_d' => 'Son ziyarete göre azalan', //cpg1.3.0
  'sort_by' => 'kullanıcıları sırala',
  'err_no_users' => 'Kullanıcı çizelgesi boş !',
  'err_edit_self' => 'Kendi profilinizi düzeltemezsiniz,  \'Kişisel profilim\' linkini kullanın',
  'edit' => 'DÜZELT',
  'with_selected' => 'Bir uygulama seç', //cpg1.4
  'delete' => 'Sil',
  'delete_files_no' => 'herkeze acık dosyaları koru (anonimleştir)', //cpg1.4
  'delete_files_yes' => 'herkeze acık dosyalarınıda sil', //cpg1.4
  'delete_comments_no' => 'yorumlarını koru (anonimleştir)', //cpg1.4
  'delete_comments_yes' => 'yorumlarınıda sil', //cpg1.4
  'activate' => 'Aktifleştir', //cpg1.4
  'deactivate' => 'Pasifleştir', //cpg1.4
  'reset_password' => 'Şifreyi sıfırla', //cpg1.4
  'change_primary_membergroup' => 'Ana grubu degiştir', //cpg1.4
  'add_secondary_membergroup' => 'İkinci grup ekle', //cpg1.4
  'name' => 'Üye adı',
  'group' => 'Grup',
  'inactive' => 'Inaktif',
  'operations' => 'İşlemler',
  'pictures' => 'Resimler', //cpg1.3.0
  'disk_space_used' => 'Kullandıgı alan', //cpg1.4
  'disk_space_quota' => 'Kullanabilecegi alan', //cpg1.4
  'registered_on' => 'Kayıt tarihi',
  'last_visit' => 'Son ziyaret tarihi', //cpg1.3.0
  'u_user_on_p_pages' => '%d kullanıcılar %d sayfa(-lar)da',
  'confirm_del' => 'Bu kullanıcıyı silmek istediğinizden emin misiniz? \\nOnun büyünresimleri ve albümleri silinecek.', //js-alert //cpg1.3.0
  'mail' => 'MAİL',
  'err_unknown_user' => 'Seçilen kullanıcı bulunamadı !',
  'modify_user' => 'Kullanıcıyı bilgileri',
  'notes' => 'Notlar',
  'note_list' => '<li>Şimdiki şifreni değiştirmek istemiyorsan, "şifre" alanını boş bırakınız',
  'password' => 'Şifre',
  'user_active' => 'Kullanıcı Aktif',
  'user_group' => 'Kullanıcı grubu',
  'user_email' => 'Kullanıcı emaili',
  'user_web_site' => 'Kullanıcı web sitesi',
  'create_new_user' => 'Yeni kullanıcı oluştur',
  'user_location' => 'Kullanıcı yeri',
  'user_interests' => 'Kullanıcı hobileri',
  'user_occupation' => 'Kullanıcı mesleği',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Yakınlardaki yüklemeler', //cpg1.3.0
  'never' => 'asla', //cpg1.3.0
  'search' => 'Kullanıcı ara', //cpg1.4
  'submit' => 'Ekle', //cpg1.4
  'search_submit' => 'Devam', //cpg1.4
  'search_result' => 'Arama sonuçları: ', //cpg1.4
  'alert_no_selection' => 'En azından bir kullanıcı seçmelisiniz!', //cpg1.4 //js-alert
  'password' => 'Şifre', //cpg1.4
  'select_group' => 'Grup seç', //cpg1.4
  'groups_alb_access' => 'Gruplar için albüm yetkileri', //cpg1.4
  'album' => 'Albüm', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'modify' => 'Değiştirilsinmi?', //cpg1.4
  'group_no_access' => 'Bu grup için giriş yok', //cpg1.4
  'notice' => 'Not: ', //cpg1.4
  'group_can_access' => 'Sadece "%s" bu albüme uluşma yetkisine sahiptir.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Dosyalardaki adı günceller', //cpg1.4
'Adı siler', //cpg1.4
'Küçük resimleri tekrar oluşturur ve boyutlandırır', //cpg1.4
'Orjinal boyutlardaki fotoğrafları tekrar yeni boyutlarla yerleştirir', //cpg1.4
'Orta boyutlardaki orjinal fotoğrafları silerek yer açar', //cpg1.4
'Seçilen yorumları siler', //cpg1.4
'Dosya boyutlarını ve boyutunu ayarlar (el ile fotoğrafları degiştirdikten sonra)', //cpg1.4
'Bakılma oranlarını sıfırlar', //cpg1.4
'php hakkında bilgi gösterir', //cpg1.4
'Veritabanını günceller', //cpg1.4
'Günlügü gösterir', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Admin İşlevleri (Resimleri yeniden boyutlandır)', //cpg1.3.0
  'what_it_does' => 'Ne yapar',
  'file' => 'Resim',
  'problem' => 'Problem', //cpg1.4
  'status' => 'Durum', //cpg1.4
  'title_set_to' => 'ayarlama için başlık',
  'submit_form' => 'Gönder',
  'updated_succesfully' => 'Güncelleme başarılı',
  'error_create' => 'Oluşturmada HATA',
  'continue' => 'daha fazla görüntü',
  'main_success' => 'Resim %s ana dosyada kullanılıyor', //cpg1.3.0
  'error_rename' => ' %s  %s ye yeni adlandırmada hata ',
  'error_not_found' => 'Resim %s bulunamadı',
  'back' => 'ana sayfaya dön',
  'thumbs_wait' => 'Küçük resimler ve/veya yeniden boyutlanan resimler Güncelleniyor, lütfen bekliyor...',
  'thumbs_continue_wait' => 'Küçük resimleri ve/veya yeniden boyutlanan resimleri gücelleme devam ediyor...',
  'titles_wait' => 'Başlıklar güncelleniyor, Lütfen bekleyin...',
  'delete_wait' => 'Başlılar siliniyor, lütfen bekleiyin...',
  'replace_wait' => 'Orjinal resimler yeniden boyutlanana resimler ile orjinal halde siliniyor, lütfen bekleyin..',
  'instruction' => 'Hızlı talimat',
  'instruction_action' => 'İşlem seç',
  'instruction_parameter' => 'Parametreleri ayarla',
  'instruction_album' => 'Albüm seç',
  'instruction_press' => 'Bas %s',
  'update' => 'Küçük resimleri ve/veya yeniden boyutlandırılan resimler güncelleniyor',
  'update_what' => 'Ne güncellenmeli',
  'update_thumb' => 'Sadece küçük resimler',
  'update_pic' => 'Sadece yeniden boyutlandırılan resimler',
  'update_both' => 'Küçük resimler ve yeniden boyutlandırılan reimler',
  'update_number' => 'Resimleri tılama sürecini numaralandır',
  'update_option' => '(Bu tecihi azaltma ayarlarını deneyin eğer timeout problemlerinde tecrübeliysen)',
  'filename_title' => 'Resim adı ve Resim başlıgı', //cpg1.3.0
  'filename_how' => 'Resim adı nasıl düzenlenmeli',
  'filename_remove' => ' .jpg sonlandırmasını sil ve yerine _ (alt tire) ekle ',
  'filename_euro' => '2003_11_23_13_20_20.jpg ği  23/11/2003 13:20 ğe çevir',
  'filename_us' => '2003_11_23_13_20_20.jpg ği  23/11/2003 13:20 ğe çevir',
  'filename_time' => '2003_11_23_13_20_20.jpg ği  13:20 e çevir',
  'delete' => 'Resim adlarını yada orjinal forğraf boyutlarını sil', //cpg1.3.0
  'delete_title' => 'Resim başlıklarını sil', //cpg1.3.0
  'delete_title_explanation' => 'Bu seçtiginiz albümdeki resimlerin başlıklarını sileçektir.', //cpg1.4
  'delete_original' => 'Orjinal foroğraf boyutlarını sil',
  'delete_original_explanation' => 'Fotoğraflarınızın orjinal boyutlardakiler silinecektir.', //cpg1.4
  'delete_intermediate' => 'Oluşturulan orta boyutluktaki resimleri sil', //cpg1.4
  'delete_intermediate_explanation' => 'Bu sistemde oluşturulan orta büyüklükteki resimleri silecektir.', //cpg1.4
  'delete_replace' => 'Yeniden boyutlanma versiyonu ile fotoğrafları orjinal boyutlarını siler',
  'titles_deleted' => 'Seçilen albumdeki başlıklar silinecek', //cpg1.4
  'deleting_intermediates' => 'Orta boyuttaki resimler siliniyor, lütfen bekleyiniz...', //cpg1.4
  'searching_orphans' => 'Searching for orphans, please wait...', //cpg1.4
  'select_album' => 'Albüm seç',
  'delete_orphans' => 'Olmayan dosyaların yorumlarını sil (bütün albümlerin üzerinde çalışır)', //cpg1.3.0
  'delete_orphans_explanation' => 'Bu şekilde sistemde artık olmayan dosyalara yapılan yorumları temizleyebilirsiniz.<br />Albümlerin tamamını seç.', //cpg1.4
  'refresh_db' => 'Dosya boyutlarını ve bilgilerini tekrar kontrol et.', //cpg1.4
  'refresh_db_explanation' => 'Dosyaların boyutları ve bilgilerini tekrar kontrol edip güncelleyebilirsiniz. Eğer dosyalarınız kendiniz yazdıysanız bu seçenegi seçiniz.', //cpg1.4
  'reset_views' => 'Bakılma sayacını sıfırla', //cpg1.4
  'reset_views_explanation' => 'Seçilen albumdeki bakılma sayaçlarını sıfırla.', //cpg1.4
  'orphan_comment' => 'bağlantısız bir yorum bulundu',
  'delete' => 'Sil', //cpg1.3.0
  'delete_all' => 'Tümünü sil', //cpg1.3.0
  'delete_all_orphans' => 'Bağlantısız yorumların tamamını sil?', //cpg1.4
  'comment' => 'Yorum: ', //cpg1.3.0
  'nonexist' => 'olmayan bir dosyaya bağlı # ', //cpg1.3.0
  'phpinfo' => 'phpinfo göster', //cpg1.3.0
  'phpinfo_explanation' => 'Web sunucunuz hakkında teknik bilgi içerir.<br /> - Bu bilgiler herhangi bir konuda bilgi destegi istediginizde gerekli olabilir.', //cpg1.4
  'update_db' => 'veritabanını güncelle', //cpg1.3.0
  'update_db_explanation' => 'Eğer coppermine resimleri tekrar yerleştirmişsen, değişiklik, eklenti yada Copperminenin yeni versiyonu yüklemişsen bu seçenegi kullanabilirsiniz, sisteminizdeki veritabanın güncellenir. Bu gerekli çizelgeleri ve/veya seçenekleri coppermine veri tabanında değerlendirir.', //cpg1.3.0
  'view_log' => 'Günlük dosyalarını göster', //cpg1.4
  'view_log_explanation' => 'Buradan Coppermine sistemindeki yapılanları detaylı bir günlükte görebilirsiniz. Bu günlüge girebilmek için <a href="admin.php">coppermine config</a>.', //cpg1.4
  'versioncheck' => 'Sürüm kontrol', //cpg1.4
  'versioncheck_explanation' => 'Buradan kullandıgınız sistemin güncel sürümlerini görebilirsiniz.', //cpg1.4
  'bridgemanager' => 'Köprü ayarları', //cpg1.4
  'bridgemanager_explanation' => 'Diger programlarla kurdugunuz köprüleri açıp kapatabilir veya ayarlarını degiştirebilirsniz.', //cpg1.4
);
}
// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Sürüm kontrol', //cpg1.4
  'what_it_does' => 'Bu ekran Coppermine sürümünü güncellemiş kullanıcılar içindir. Bu yazılım sizin dosyalarınızın Coppirme sitesindeki (http://coppermine.sourceforge.net) dosyalarla aynı olup olmadığını kontrol eder ve bu şekilde programdaki eksiklikleri görebilirsiniz. <br />Düzeltilmesi gerekenler kırmızı gösterir. Sarı ile tekrar kontrol edilmesi gereken yerleri gösterir. Yeşil olarak gösterilenlerde ise bir sorun yok. Yardım tuşlarına basarak geniş bilgi alabilirsiniz.', //cpg1.4
  'online_repository_unable' => 'Depoya ulaşılamıyor', //cpg1.4
  'online_repository_noconnect' => 'Coppermine depoya ulaşamıyor. Sebeb olarak şu sorunlar olabilir:', //cpg1.4
  'online_repository_reason1' => 'Coppermine deposu şu anda hizmet dışı olabilir - Sayfayı kontrol ediniz: %s - Bu sayfaya ulaşamıyorsanız, tekrar deneyiniz.', //cpg1.4
  'online_repository_reason2' => 'Sunucunuzdaki PHP ayarlarıdn %s kapalı (normalde acık olmalı). Sunucu yöneticinize bu seçenegi açtırınız. <i>php.ini</i> (at least allow it to be overridden with %s). Eğer bu dosyalar değiştirilemez ise dosyaları karşılaştırmak mümkün olmıyacaktır. Ve sadece burada kullandığınız sürüm yazılacaktır.', //cpg1.4
  'online_repository_skipped' => 'Depoya ulaşmayı iptal et', //cpg1.4
  'online_repository_to_local' => 'Bu yazılım şimdi tekrar yerel klasöre geri döndü. Eğer dosyaları kontrol etmiş ve yükleme anında kapatmışsanız programınız belki güvenilir bir şekilde çalışmayabilir. Bu sürümden sonraki değişiklikler uygulanmıyacaktır.', //cpg1.4
  'local_repository_unable' => 'Sunucunuzdaki depoya ulaşılamıyor', //cpg1.4
  'local_repository_explanation' => 'Coppermine sizin depo dosyalarınıza %s ulaşamıyor. Bu belki sizin dosyalarınızı depoya yüklemediğinizden dolayı kaynaklanabilir. Dosyaları yükleyin ve tekrar deneyiniz.<br />Eğer hala düzelmediyse belki web sunucunuz <a href="http://www.php.net/manual/en/ref.filesystem.php">PHP\'s dosya sistemlerinin bir kısmını kapatmış olabilir.</a>. Eğer öyle ise malesef bu modulu kullanamazsınız.', //cpg1.4
  'coppermine_version_header' => 'Kurulu Coppermine sürümü', //cpg1.4
  'coppermine_version_info' => 'Kullandıgınız Coppermine sürümü: %s', //cpg1.4
  'coppermine_version_explanation' => 'Son sürümünü yüklediğiniz halde ekranda gösterilen sürüm doğru degil ise büyük bi ihtimalle <i>include/init.inc.php</i> dosyasının son sürmü sisteminizde yüklü değil.', //cpg1.4
  'version_comparison' => 'Sürüm karşılaştır', //cpg1.4
  'folder_file' => 'klasör/dosya', //cpg1.4
  'coppermine_version' => 'Coppermine sürümü', //cpg1.4
  'file_version' => 'Sizin kullandığınız sürüm', //cpg1.4
  'webcvs' => 'web svn', //cpg1.4
  'writable' => 'yazılabilir', //cpg1.4
  'not_writable' => 'yazılamaz', //cpg1.4
  'help' => 'Yardım', //cpg1.4
  'help_file_not_exist_optional1' => 'dosya/klasör bulunamadı', //cpg1.4
  'help_file_not_exist_optional2' => 'dosya/klasör bulunamadı %s sunucunuzda bulunamadı. Meçburi bir dosya/klasör olmamasına karşın sorunla karşılaşırsanız yükleyiniz.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'dosya/klasör bulunamadı', //cpg1.4
  'help_file_not_exist_mandatory2' => 'dosya/klasör bulunamadı %s sunucunuzda bulunamadı. Meçburi bir dosya/klasör olmamasına karşın sunucunuza ftp ile yükleyiniz.', //cpg1.4
  'help_no_local_version1' => 'Yerel sürümü bulunamadı veya okunamıyor', //cpg1.4
  'help_no_local_version2' => 'Yerel dosya bulunamdı veya okunamıyor - dosyanız eskimiş veya değiştirilmiş olabilir. Lütfen yeniden yükleyiniz.', //cpg1.4
  'help_local_version_outdated1' => 'Yerel dosya sürümü eskimiş', //cpg1.4
  'help_local_version_outdated2' => 'Bu dosyanın sürümü eskimiş. Büyük bir ihtimalle eski sürümlerden kalmış. Lütfen yeni sürümü ile değiştirin.', //cpg1.4
  'help_local_version_na1' => 'cvs bilgileri okunamıyor', //cpg1.4
  'help_local_version_na2' => 'Proğram sizin sunucunuzdaki cvs dosyasının sürümünü okuyamıyor. Lütfen yeniden yükleyiniz.', //cpg1.4
  'help_local_version_dev1' => 'Geliştirme sürümü', //cpg1.4
  'help_local_version_dev2' => 'Bu dosya göründüğü kadarı ile Coppermine resmi sürümünden daha yeni. Büyük bir ihtimalle geliştirme sürümünü kullanıyorsunuz. (Geliştirme sürümleri sadece uzman kullanıcılar içindir), veya include/init.inc.php dosyanızda sorun var', //cpg1.4
  'help_not_writable1' => 'Klasör yazılamıyor', //cpg1.4
  'help_not_writable2' => 'Lütfen %s klasörünün ve onun altındakilerin yetkilerini (CHMOD) tekrar yazılabilecek şekilde ayarlayın.', //cpg1.4
  'help_writable1' => 'Klasör yazılabilir', //cpg1.4
  'help_writable2' => 'Klasör %s şu anda yazılabilir. Bu gereksiz risk oluşturabilir, coppermine sadece okuma/uygulama yetkilerini kullanır.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine klasörün yazılabilirliğini tespit edemedi.', //cpg1.4
  'your_file' => 'sizin dosyanız', //cpg1.4
  'reference_file' => 'internet dosyası', //cpg1.4
  'summary' => 'Acıklama', //cpg1.4
  'total' => 'Toplam bakılan dosya/klasör', //cpg1.4
  'mandatory_files_missing' => 'Bulunamıyan gerekli dosya', //cpg1.4
  'optional_files_missing' => 'Opsiyonel bulunamıyan dosya', //cpg1.4
  'files_from_older_version' => 'Eski Coppermine sürümlerinden kalan dosya', //cpg1.4
  'file_version_outdated' => 'Eskimiş dosya sürümlü', //cpg1.4
  'error_no_data' => 'Bu modulde bir hata oluştu, bu yüzden gereken doğru bilgileri gösteremedi. Özür dileriz.', //cpg1.4
  'go_to_webcvs' => '%s a git', //cpg1.4
  'options' => 'Ayarlar', //cpg1.4
  'show_optional_files' => 'opsiyonel dosya/klasörleri göster', //cpg1.4
  'show_mandatory_files' => 'gerekl dosyaları göster', //cpg1.4
  'show_file_versions' => 'dosya sürümünü göster', //cpg1.4
  'show_errors_only' => 'sadece hatalı dosya/klasörleri göster', //cpg1.4
  'show_permissions' => 'klasör yetkilerini göster', //cpg1.4
  'show_condensed_output' => 'basit sunuçları göster(mesala ekran kopyası için)', //cpg1.4
  'coppermine_in_webroot' => 'coppermine sunucunun webroot bölümünde kurulu', //cpg1.4
  'connect_online_repository' => 'Coppermine deposuna bağlanmaya çalış', //cpg1.4
  'show_additional_information' => 'geniş bilgileri göster', //cpg1.4
  'no_webcvs_link' => 'cvs linkini gösterme', //cpg1.4
  'stable_webcvs_link' => 'sağlam çalışan cvs linkini göster', //cpg1.4
  'devel_webcvs_link' => 'geliştirme cvs linkini göster', //cpg1.4
  'submit' => 'değişiklikleri uygula / yenile', //cpg1.4
  'reset_to_defaults' => 'fabrika ayarlarına geri dön', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Günlüklerin tamamını sil', //cpg1.4
  'delete_this' => 'Günlüğü sil', //cpg1.4
  'view_logs' => 'Günlüğü göster', //cpg1.4
  'no_logs' => 'Herhangi bir günlük oluşturulmadı.', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>XP Web Publishing Wizard Client</h1><p>This module allows to use <b>Windows XP</b> web publishing wizard with Coppermine.</p><p>Code is based on article posted by
EOT;

$lang_xp_publish_required = <<<EOT
<h2>What is required</h2><ul><li>Windows XP in order to have the wizard.</li><li>A working installation of Coppermine on which <b>the web upload function works properly.</b></li></ul><h2>How to install on client side</h2><ul><li>Right click on
EOT;

$lang_xp_publish_select = <<<EOT
Select &quot;save target as..&quot;. Save the file on your hard drive. When saving the file, check that the proposed file name is <b>cpg_###.reg</b> (the ### represents a numerical timestamp). Change it to that name if necessary (leave the numbers). When downloaded, double click on the file in order to register your server with the web publishing wizard.</li></ul>
EOT;

$lang_xp_publish_testing = <<<EOT
<h2>Testing</h2><ul><li>In Windows Explorer, select some files and click on <b>Publish xxx on the web</b> in the left pane.</li><li>Confirm your file selection. Click on <b>Next</b>.</li><li>In the list of services that appear, select the one for your photo gallery (it has the name of your gallery). If the service does not appear, check that you have installed <b>cpg_pub_wizard.reg</b> as described above.</li><li>Input your login information if required.</li><li>Select the target album for your pictures or create a new one.</li><li>Click on <b>next</b>. The upload of your pictures starts.</li><li>When it is completed, check your gallery to see if pictures have been properly added.</li></ul>
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Notes :</h2><ul><li>Once the upload has started, the wizard can't display any error message returned by the script so you can't know if the upload failed or succeeded until you check your gallery.</li><li>If the upload fails, enable &quot;Debug mode&quot; on the Coppermine admin page, try with one single picture and check error messages in the
EOT;

$lang_xp_publish_flood = <<<EOT
file that is located in Coppermine directory on your server.</li><li>In order to avoid that the gallery be <i>flooded</i> by pictures uploaded through the wizard, only the <b>gallery admins</b> and <b>users that can have their own albums</b> can use this feature.</li>
EOT;

$lang_xp_publish_php = array(
  'title' => 'Coppermine - XP Web yayınlama sihirbazı', //cpg1.4
  'welcome' => 'Hoşgeidiniz <b>%s</b>,', //cpg1.4
			'need_login' => 'Sihirbazı kullanabilmek için galeriye giriş yapmış olmalısınız.<p/><p>Giriş yaparken <b>beni hatırla</b> seçenegini kullanmayı unutmayın.', //cpg1.4
			'no_alb' => 'Özürdilerim, Ama malesef şu anda bu resimleri yükleyebileceginiz bir albüm bulunamadı.', //cpg1.4
			'upload' => 'Olan bir albümün içine resimleri yükle.', //cpg1.4
			'create_new' => 'Albüm için yeni bir albüm oluştur.', //cpg1.4
			'album' => 'Albüm', //cpg1.4
			'category' => 'Katagori',
			'new_alb_created' => '&quot;<b>%s</b>&quot; isimli albümünüz oluşturuldu.', //cpg1.4
			'continue' => 'Devam etmek için &quot;Sonraki&quot; tuşuna basınız', //cpg1.4
			'link' => 'bu link', //cpg1.4
);
}
?>