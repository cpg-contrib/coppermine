<?php
/*************************
  Coppermine Photo Gallery
  ************************
  Copyright (c) 2003-2006 Coppermine Dev Team
  v1.1 originally written by Gregory DEMAR

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.
  ********************************************
  Coppermine version: 1.4.10
  $Source: /cvsroot/coppermine/stable/lang/indonesian.php,v $
  $Revision: 3125 $
  $Author: gaugau $
  $Date: 2006-06-16 08:48:03 +0200 (Fr, 16 Jun 2006) $
**********************************************/

if (!defined('IN_COPPERMINE')) { die('Not in Coppermine...');}

// info about translators and translated language
$lang_translation_info = array(
'lang_name_english' => 'Indonesian',
'lang_name_native' => 'Bahasa_Indonesia',
'lang_country_code' => 'id',
'trans_name'=> 'Johan Ng',
'trans_email' => '',
'trans_website' => 'http://www.cariartis.com/',
'trans_date' => '2006-09-02',
);

$lang_charset = 'UTF-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Byte, Kilo, Mega
$lang_byte_units = array('Bytes', 'KB', 'MB');

// Day of weeks and months
$lang_day_of_week = array('Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab');
$lang_month = array('Jan', 'Peb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nop', 'Des');

// Some common strings
$lang_yes = 'Iya';
$lang_no  = 'Tidak';
$lang_back = 'Kembali';
$lang_continue = 'Teruskan';
$lang_info = 'Informasi';
$lang_error = 'Rusak';
$lang_check_uncheck_all = 'cek/tidak cek semua'; //cpg1.4

// The various date formats
// See http://www.php.net/manual/en/function.strftime.php to define the variable below
$album_date_fmt =  '%d %B %Y';
$lastcom_date_fmt =  '%d/%m/%y pada %H:%M';
$lastup_date_fmt = '%d %B %Y';
$register_date_fmt = '%d %B %Y';
$lasthit_date_fmt = '%d %B %Y pada %I:%M %p'; 
$comment_date_fmt =  '%d %B %Y pada %I:%M %p';
$log_date_fmt = '%d %B, %Y pada %I:%M %p'; //cpg1.4

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack', 'penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*', 'ngentot', 'vagina', 'gembel', 'hombreng', 'sialan', 'jembut', 'puting', 'tetek', 'titit', 'bangsat', 'tai', 'memek', 'bangsat');

$lang_meta_album_names = array(
  'random' => 'File secara acak',
  'lastup' => 'Yang terbaru ',
  'lastalb'=> 'Album terbaru',
  'lastcom' => 'Komentar terakhir',
  'topn' => 'Paling popular',
  'toprated' => 'Paling dipilih',
  'lasthits' => 'Terakhir dilihat',
  'search' => 'Hasil pencarian',
  'favpics'=> 'Foto Favorit', //cpg1.4
);

$lang_errors = array(
  'access_denied' => 'Kamu tidak punya hak untuk mengakses halaman ini.',
  'perm_denied' => 'Kamu tidak punya hak untuk melakukan kegiatan ini.',
  'param_missing' => 'Skrip di eksekusi tanpa parameter yang dibutuhkan.',
  'non_exist_ap' => 'album/file yang dipilih tidak ada !',
  'quota_exceeded' => 'pemakaian melebihi ruang<br /><br />kamu mempunyai ruang sebesar [quota]K, File kamu sekarang memakai ruang [space]K, menambahkan file ini maka akan melebihi ruang yang tersedia bagi kamu.',
  'gd_file_type_err' => 'Ketika menggunakan GD image library hanya bisa dengan file tipe JPEG dan PNG.',
  'invalid_image' => 'Gambar yang kamu upload, korup atau tidak bisa digunakan oleh GD library',
  'resize_failed' => 'Tidak bisa membuat thumbnail atau mengecilkan ukuran gambar.',
  'no_img_to_display' => 'Tidak ada gambar untuk di tampilkan',
  'non_exist_cat' => 'Pemilihan kategori tidak ada',
  'orphan_cat' => 'Kategori tidak memiliki parent, jalankan kategori manajer untuk memperbaiki masalah.',
  'directory_ro' => 'Direktori \'%s\' n\' tidak bisa di ubah, File tidak bisa di hapus.',
  'non_exist_comment' => 'Komentar dipilih tidak ada.',
  'pic_in_invalid_album' => 'File di dalam album yang tidak ada (%s)!?',
  'banned' => 'Kamu saat ini di banned dari website ini.',
  'not_with_udb' => 'Fungsi ini tidak dapat digunakan karena telah integrasi dengan perangkat lunak forum. Tiap apa yang kamu coba tidak didukung di konfigurasi, atau fungsi seharusnya bisa dilaksanakan oleh perangkat lunak forum.',
  'offline_title' => 'Sambungan Tertutup',
  'offline_text' => 'Galeri saat ini sedang tertutup - Dalam kembali nanti',
  'ecards_empty' => 'Tidak ada nomor catatan e-card yang untuk diperlihatkan.',
  'action_failed' => 'Aksi gagal. Coppermine tidak bisa melanjutkan permintaan anda.', 
  'no_zip' => 'Libraries yang penting untuk memproses ZIP files tidak tersedia. Tolong hubungi Coppermine administrator kamu.', 
  'zip_type' => 'Kamu tidak mempunyai hak untuk upload file ZIP.', 
  'database_query' => 'Aksi gagal ketika memproses database query', //cpg1.4
  'non_exist_comment' => 'Komentar yang dipilih tidak ada', //cpg1.4
);

$lang_bbcode_help_title = 'Bantuan bbkode'; //cpg1.4
$lang_bbcode_help = 'Kamu bisa menambahkan link dan beberapa format di field ini dengan menggunakan bbkode: <li>[b]Tebal[/b] =&gt; <b>Tebal</b></li><li>[i]Miring[/i] =&gt; <i>Miring</i></li><li>[url=http://domainanda.com/]Teks URL[/url] =&gt; <a href="http://domainanda.com">Teks URL</a></li><li>[email]namauser@domainanda.com[/email] =&gt; <a href="mailto:namauser@domainanda.com">namauser@domainanda.com</a></li><li>[color=red]beberapa teks[/color] =&gt; <span style="color:beberapa teks</span></li><li>[img]http://coppermine.sf.net/demo/images/red.gif[/img] => <img src="../images/red.gif" border="0" alt="" /></li>'; //cpg1.4

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu = array(
  'home_title' => 'Ke halaman utama',
  'home_lnk' => 'halaman utama',
  'alb_list_title' => 'Ke daftar album',
  'alb_list_lnk' => 'Daftar album-album',
  'my_gal_title' => 'Ke galeri pribadi',
  'my_gal_lnk' => 'galeri ku',
  'my_prof_title' => 'ke halaman profil pribadi', //cpg1.4
  'my_prof_lnk' => 'profil ku',
  'adm_mode_title' => 'ganti ke halaman admin',
  'adm_mode_lnk' => 'halaman admin',
  'usr_mode_title' => 'ganti ke halaman user',
  'usr_mode_lnk' => 'halaman user',
  'upload_pic_title' => 'Upload sebuah file ke suatu album',
  'upload_pic_lnk' => 'Upload file',
  'register_title' => 'Buat sebuah akun',
  'register_lnk' => 'Registrasi',
  'login_title' => 'Masuk akun', //cpg1.4
  'login_lnk' => 'Masuk',
  'logout_title' => 'Keluar akun', //cpg1.4
  'logout_lnk' => 'keluar',
  'lastup_title' => 'Lihat upload terbaru', //cpg1.4
  'lastup_lnk' => 'Terakhir di upload',
  'lastcom_title' => 'Lihat komentar terbaru', //cpg1.4
  'lastcom_lnk' => 'Komentar terakhir',
  'topn_title' => 'Lihat file paling di lihat', //cpg1.4
  'topn_lnk' => 'Paling di lihat',
  'toprated_title' => 'Lihat paling di kasih rate', //cpg1.4
  'toprated_lnk' => 'Paling di rate',
  'search_title' => 'Cari di galeri', //cpg1.4
  'search_lnk' => 'Cari',
  'fav_title' => 'Ke favorit ku', //cpg1.4
  'fav_lnk' => 'Favorit ku',
  'memberlist_title' => 'Lihat daftar anggota', 
  'memberlist_lnk' => 'Daftar anggota', 
  'faq_title' => 'Pertanyaan sering ditanyakan di galeri gambar &quot;Coppermine&quot;', 
  'faq_lnk' => 'Tanya jawab', 
);

$lang_gallery_admin_menu = array(
  'upl_app_title' => 'Setuju upload file baru', //cpg1.4
  'upl_app_lnk' => 'Izin upload',
  'admin_title' => 'Ke konfigurasi', //cpg1.4
  'admin_lnk' => 'Konfigurasi', //cpg1.4
  'albums_title' => 'ke konfigurasi album', //cpg1.4
  'albums_lnk' => 'Album',
  'categories_title' => 'Ke konfigurasi kategori', //cpg1.4
  'categories_lnk' => 'Kategori',
  'users_title' => 'Ke konfigurasi pemakai', //cpg1.4
  'users_lnk' => 'Pemakai',
  'groups_title' => 'Ke konfigurasi grup', //cpg1.4
  'groups_lnk' => 'Grup',
  'comments_title' => 'Review semua komentar', //cpg1.4
  'comments_lnk' => 'Review komentar-komentar',
  'searchnew_title' => 'Ke proses penambahan file', //cpg1.4
  'searchnew_lnk' => 'Tambah file',
  'util_title' => 'ke perabotan admin', //cpg1.4
  'util_lnk' => 'Perabotan admin',
  'key_title' => 'Ke kata kunci kamus', //cpg1.4
  'key_lnk' => 'Kata kunci kamus', //cpg1.4
  'ban_title' => 'Ke banned pemakai', //cpg1.4
  'ban_lnk' => 'Ban pemakai',
  'db_ecard_title' => 'Review Ecards', //cpg1.4
  'db_ecard_lnk' => 'Tampilkan Ecards',
  'pictures_title' => 'Tampilkan foto-foto ku', //cpg1.4
  'pictures_lnk' => 'Tampilkan foto-foto ku', //cpg1.4
  'documentation_lnk' => 'Dokumentasi', //cpg1.4
  'documentation_title' => 'Pedoman manual Coppermine', //cpg1.4
);

$lang_user_admin_menu = array(
  'albmgr_title' => 'Buat dan pesan albumku', //cpg1.4
  'albmgr_lnk' => 'Buat / pesan albumku',
  'modifyalb_title' => 'Ke modifikasi album',  //cpg1.4
  'modifyalb_lnk' => 'Modifikasi albumku',
  'my_prof_title' => 'Ke pribadi profilku', //cpg1.4
  'my_prof_lnk' => 'Profilku',
);

$lang_cat_list = array(
  'category' => 'Kategori',
  'albums' => 'Album',
  'pictures' => 'File',
);

$lang_album_list = array(
  'album_on_page' => '%d album dalam %d page(s)',
);

$lang_thumb_view = array(
  'date' => 'Tanggal',
  //Sort by filename and title
  'name' => 'NAMA FILE',
  'title' => 'JUDUL',
  'sort_da' => 'Urut dengan tanggal awal',
  'sort_dd' => 'Urut dengan tanggal terakhir',
  'sort_na' => 'Urut dengan nama awal',
  'sort_nd' => 'Urut dengan nama terakhir',
  'sort_ta' => 'Urut dengan judul awal',
  'sort_td' => 'Urut dengan nama terakhir',
  'position' => 'POSISI', //cpg1.4
  'sort_pa' => 'Urut dengan posisi awal', //cpg1.4
  'sort_pd' => 'Urut dengan posisi terakhir', //cpg1.4
  'download_zip' => 'Download sebagai file ZIP', 
  'pic_on_page' => '%d file dalam %d halaman',
  'user_on_page' => '%d user dalam %d halaman',
  'enter_alb_pass' => 'Masukan Katasandi Album', //cpg1.4
  'invalid_pass' => 'Katasandi Salah', //cpg1.4
  'pass' => 'Katasandi', //cpg1.4
  'submit' => 'Masuk', //cpg1.4
);

$lang_img_nav_bar = array(
  'thumb_title' => 'Kembali ke halaman thumbnail',
  'pic_info_title' => 'Tampilkan/sembunyikan informasi file',
  'slideshow_title' => 'Tampilkan slide',
  'ecard_title' => 'Kirimfile ini sebagai e-card',
  'ecard_disabled' => 'e-card tidak berfungsi',
  'ecard_disabled_msg' => 'Kamu tidak ada hak untuk mengirim ecard',//js-alert
  'prev_title' => 'lihat file sebelumnya',
  'next_title' => 'lihat file selanjutnya',
  'pic_pos' => 'FILE %s/%s',
  'report_title' => 'Lapor file ini ke administrasi', //cpg1.4
  'go_album_end' => 'Lompat ke terakhir', //cpg1.4
  'go_album_start' => 'Balik ke pertama', //cpg1.4
  'go_back_x_items' => 'kembali %s hal', //cpg1.4
  'go_forward_x_items' => 'ke depan %s hal', //cpg1.4
);

$lang_rate_pic = array(
  'rate_this_pic' => 'Rate file ini ',
  'no_votes' => '(Belum ada yang memilih)',
  'rating' => '(Rating saat ini : %s / 5 dengan %s suara)',
  'rubbish' => 'Sampah',
  'poor' => 'Kurang',
  'fair' => 'Cukup',
  'good' => 'Bagus',
  'excellent' => 'Keren',
  'great' => 'Super keren',
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
  CRITICAL_ERROR => 'Kritik kesalahan',
  'file' => 'File: ',
  'line' => 'Baris: ',
);

$lang_display_thumbnails = array(
  'filename' => 'Nama file : ',  //cpg1.4
  'filesize' => 'Ukuran file : ', //cpg1.4
  'dimensions' => 'Dimensi : ',  //cpg1.4	
  'date_added' => 'Tanggal dimasukkan : ',  //cpg1.4
);

$lang_get_pic_data = array(
  'n_comments' => '%s komentar',
  'n_views' => 'sudah %s kali dilihat',
  'n_votes' => '(%s suara)',
);

$lang_cpg_debug_output = array(
  'debug_info' => 'Info Debug', 
  'select_all' => 'Pilih semua', 
  'copy_and_paste_instructions' => 'Bila kamu ingin meminta bantuan di bantuan forum diskusi coppermine, salin dan paste debug yang keluar ini ke postingan ketika meminta bantuan, Teruskan dengan pesan keliru (error) yang kamu dapat (bila ada). Pastikan untuk mengganti katasandi dari kueri denan *** sebelum posting. <br /> Pesan: Ini adalah untuk informasi saja dan bukan maksud ada keliru dengan galeri kamu', 
//cpg1.4
  'phpinfo' => 'tampilakn phpinfo',
  'notices' => 'Pemberitahuan', //cpg1.4
);

$lang_language_selection = array(
  'reset_language' => 'Bahasa sebenarnya', 
  'choose_language' => 'Pilih bahasamu :',
);

$lang_theme_selection = array(
  'reset_theme' => 'Tema sebenarnya', 
  'choose_theme' => 'Pilih tema', 
);

$lang_version_alert = array(
  'version_alert' => 'Versi tidak didukung!', //cpg1.4
  'security_alert' => 'Sinyal Keamanan!', //cpg1.4.3
  'relocate_exists' => 'Hapus <a href="http://coppermine-gallery.net/forum/index.php?topic=24217.0" target=_blank>relocate_server.php</a> file dari websitemu!',
  'no_stable_version' => 'kamu menggunakan Coppermine  %s (%s) yang artinya digunakan oleh sangat eksperimen pemakai - Versi ini tidak ada support (bantuan) atau garansi. Gunakan dengan resiko sendiri atau downgrade ke versi stabil yang terbaru bila kamu butuh support (bantuan)!', //cpg1.4
  'gallery_offline' => 'Galeri saat ini sedang keadaan tertutup dan hanya bisa digunakan (dilihat) oleh kamu admin. Jangan lupa untuk merubah (online) kembali setelah selesai pemeliharaan.', //cpg1.4
);

$lang_create_tabs = array(
  'previous' => 'sebelumnya', //cpg1.4
  'next' => 'selanjutnya', //cpg1.4
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
  'error_wakeup' => 'Tidak memungkinkan untuk di bangun pluginnya \'%s\'', //cpg1.4
  'error_install' => 'Tidak memungkinkan untuk di install pluginnya \'%s\'', //cpg1.4
  'error_uninstall' => 'Tidak memungkinkan untuk di uninstall pluginnya \'%s\'', //cpg1.4
  'error_sleep' => 'Tidak memungkinkan untuk di uninstall pluginnya \'%s\'<br />', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //

if (defined('SMILIES_PHP')) $lang_smilies_inc_php = array(
  'Exclamation' => 'Kata seru',
  'Question' => 'Pertanyaan',
  'Very Happy' => 'Sangat Bahagia',
  'Smile' => 'Senyum',
  'Sad' => 'Sedih',
  'Surprised' => 'Terkejut',
  'Shocked' => 'Kaget',
  'Confused' => 'Bingung',
  'Cool' => 'Keren',
  'Laughing' => 'Tertawa',
  'Mad' => 'Marah',
  'Razz' => 'Ejek',
  'Embarassed' => 'Malu',
  'Crying or Very sad' => 'Sangat sedih atau menangis',
  'Evil or Very Mad' => 'Jahat atau sangat marah',
  'Twisted Evil' => 'Sadis',
  'Rolling Eyes' => 'Berputar mata',
  'Wink' => 'Berkedip',
  'Idea' => 'Ide',
  'Arrow' => 'Panah',
  'Neutral' => 'Netral',
  'Mr. Green' => 'Pak. Hijau',
);

// ------------------------------------------------------------------------- //
// File addpic.php
// ------------------------------------------------------------------------- //

// void

// ------------------------------------------------------------------------- //
// File mode.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MODE_PHP')) $lang_mode_php = array(
  0 => 'Keluar sebagai administrasi...',
  1 => 'Masuk sebagai administrasi...',
);

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

if (defined('ALBMGR_PHP')) $lang_albmgr_php = array(
  'alb_need_name' => 'Album butuh sebuah nama!',//js-alert
  'confirm_modifs' => 'Apakah kamu yakin untuk memodifikasi ini ?', //js-alert
  'no_change' => 'Kami tidak membuat merubah satupun!',//js-alert
  'new_album' => 'Album baru',
  'confirm_delete1' => 'Apakah kamu yakin untuk menghapus album ini ?', //js-alert
  'confirm_delete2' => '\nSemua file dan komentar yang didalamnya akan hilang !', //js-alert
  'select_first' => 'Pilih album terlebih dulu',//js-alert
  'alb_mrg' => 'Mengatur album',
  'my_gallery' => '* Galeri ku *',
  'no_category' => '* Tidak ada kategori *',
  'delete' => 'Hapus',
  'new' => 'Baru',
  'apply_modifs' => 'Gunakan modifikasi',
  'select_category' => 'Pilih kategori',
);

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) $lang_banning_php = array(
  'title' => 'Ban pemakai', //cpg1.4
  'user_name' => 'Nama pemakai', //cpg1.4
  'ip_address' => 'Alamat IP', //cpg1.4
  'expiry' => 'Berakhir (Kosonkan untuk permanen)', //cpg1.4
  'edit_ban' => 'Simpan perubahan', //cpg1.4
  'delete_ban' => 'Hapus', //cpg1.4
  'add_new' => 'Tambah ban baru', //cpg1.4
  'add_ban' => 'Tambah', //cpg1.4
  'error_user' => 'Tidak bisa mencari pemakai', //cpg1.4
  'error_specify' => 'Kamu butuh spesifikasi entah itu nama pemakai atau sebuah alamat IP', //cpg1.4
  'error_ban_id' => 'Salah ban ID!', //cpg1.4
  'error_admin_ban' => 'Kamu tidak bisa ban diri sendiri!', //cpg1.4
  'error_server_ban' => 'Kamu mencoba untuk ban server sendiri? Ck ck, kamu tidak bisa...', //cpg1.4
  'error_ip_forbidden' => 'Kamu tidak bisa ban IP ini, ini tidak-routable (pribadi)!<br />Bila kamu mau mem ban untuk pribadi IP, rubah ini di <a href="admin.php">konfigurasi</a> (Hanya dimengerti ketika Coppermine berjalan di LAN).', //cpg1.4
  'lookup_ip' => 'Lihat alamat IP', //cpg1.4
  'submit' => 'Teruskan!', //cpg1.4
  'select_date' => 'Pilih tanggal', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File bridgemgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('BRIDGEMGR_PHP')) $lang_bridgemgr_php = array(
  'title' => 'Sambungan Wizard',
'warning' => 'Perhatian: Ketika menggunakan Wizard ini kamu harus mengerti jika data yang sensitif sedang dikirim dengan menggunakan format html. Hanya berjalan di Komputer kamu (Tidak di tempat umum seperti Warung Internet), dan yakin untuk menghapus browse cache dan temporary files setelah selesai, atau orang lain mungkin bisa mengakses data kamu!',
  'back' => 'Kembali',
  'next' => 'Selanjutnya',
  'start_wizard' => 'Mulai sambungan wizard',
  'finish' => 'Selesai',
  'hide_unused_fields' => 'sembunyikan form bagian yang tidak digunakan (rekomendasi)',
  'clear_unused_db_fields' => 'Hapus masukan database yang keliru (rekomendasi)',
  'custom_bridge_file' => 'modif nama sambungan file (Bila sambungan nama file adalah <i>fileku.inc.php</i>, masukan <i>filekur</i> dibagian ini)',
  'no_action_needed' => 'Tidak ada aksi yang dibutuhkan disini. klik \'Selanjutnya\' untuk meneruskan.',
  'reset_to_default' => 'Reset ke value default',
  'choose_bbs_app' => 'Pilih aplikasi untuk disambungkan dengan Coppermine',
  'support_url' => 'Ke sini untuk bantuan aplikasi ini',
  'settings_path' => 'Jalur digunakan untuk aplikasi BBS',
  'database_connection' => 'Koneksi database',
  'database_tables' => 'Meja (table) database',
  'bbs_groups' => 'Grup BBS (forum)',
  'license_number' => 'Nomor lisensi',
  'license_number_explanation' => 'Masukkan nomor lisensi kamu  (bila diperlukan)',
  'db_database_name' => 'Nama database',
  'db_database_name_explanation' => 'Masukan nama database BBS (forum) kamu pakai',
  'db_hostname' => 'Host databse',
  'db_hostname_explanation' => 'Nama host dimana mySQL database terletak, biasanya &quot;localhost&quot;',
  'db_username' => 'Nama pemakai database',
  'db_username_explanation' => 'Nama pemakai database mySQL digunakan untuk koneksi dengan BBS (forum)',
  'db_password' => 'Katasandi database',
  'db_password_explanation' => 'Katasandi pemakai mySQL',
  'full_forum_url' => 'URL forum',
  'full_forum_url_explanation' => 'alamat lengkap forum (contoh  http://www.namawebsite.com/forum)',
  'relative_path_of_forum_from_webroot' => 'Relatif jalur (path) forum',
  'relative_path_of_forum_from_webroot_explanation' => 'Relatif jalus (path) ke forum aplikasi dari web root (contoh: bila alama forum kamu di http://www.namawebsite.com/forum/, masukkan &quot;/forum/&quot; dalam kotak)',
  'relative_path_to_config_file' => 'Relatif jalur (path) ke file konfigurasi forum',
  'relative_path_to_config_file_explanation' => 'Relatif jalur (path) ke forum, dilihat dari Folder Coopermine (Contoh &quot;../forum/&quot; Bila forum di http://www.yourdomain.tld/forum/ dan Coppermine di http://www.yourdomain.tld/gallery/)',
  'cookie_prefix' => 'Prefix Cookie',
  'cookie_prefix_explanation' => 'ini harus nama cookie forum kamu',
  'table_prefix' => 'Table prefix',
  'table_prefix_explanation' => 'Mesti diperhatikan prefix yang kamu pilih untuk BBS (forum) setingan.',
  'user_table' => 'Table pemakai',
  'user_table_explanation' => '(Biasanya dibiarkan default (tanpa diganti) oke, kecuali BBS (forum) yang kamu install tidak standart)',
  'session_table' => 'Table sesi',
  'session_table_explanation' => '(Biasanya dibiarkan default (tanpa diganti) oke, kecuali BBS (forum) yang kamu install tidak standart)',
  'group_table' => 'Table grup',
  'group_table_explanation' => '(Biasanya dibiarkan default (tanpa diganti) oke, kecuali BBS (forum) yang kamu install tidak standart)',
  'group_relation_table' => 'Table relasi grup',
  'group_relation_table_explanation' => '(Biasanya dibiarkan default (tanpa diganti) oke, kecuali BBS (forum) yang kamu install tidak standart)',
  'group_mapping_table' => 'Table peta grup',
  'group_mapping_table_explanation' => '(Biasanya dibiarkan default (tanpa diganti) oke, kecuali BBS (forum) yang kamu install tidak standart)',
  'use_standard_groups' => 'Gunakan standart BBS (forum) pemakaigrup',
  'use_standard_groups_explanation' => 'Gunakan standart (built-in) pemakaigrup (rekomendasi). Ini akan membuat semua settingan custom grup di halaman ini menjadi kosong. Disable pilihan ini bila kamu BENAR tahu apa yang kamu lakukan!',
  'validating_group' => 'Validasi grup',
  'validating_group_explanation' => 'Identifikasi (ID) BBS (forum) grup kamu dimana akun pemakai yang dibutuhkan validasi didalamnya (Biasanya dibiarkan default (tanpa diganti) oke, kecuali BBS (forum) yang kamu install tidak standart)',
  'guest_group' => 'Grup tamu',
  'guest_group_explanation' => 'Identifikasi (id) grup BBS (forum) kamu dimana tamu (pemakai tidak dikenal) ada di dalam (Biasanya dibiarkan default (tanpa diganti) oke, hanya diganti bila kamu tahu apa yang kamu lakukan)',
  'member_group' => 'Grup anggota',
  'member_group_explanation' => 'Identifikasi (id) grup BBS (forum) kamu dimana anggota pemakai ada di dalam (Biasanya dibiarkan default (tanpa diganti) oke, hanya diganti bila kamu tahu apa yang kamu lakukan)',
  'admin_group' => 'Grup Admin',
  'admin_group_explanation' => 'Identifikasi (id) grup BBS (forum) kamu dimana admin ada di dalam (Biasanya dibiarkan default (tanpa diganti) oke, hanya diganti bila kamu tahu apa yang kamu lakukan)',
  'banned_group' => 'Grup Banned',
  'banned_group_explanation' => 'Identifikasi (id) grup BBS (forum) kamu dimana banned pemakai ada di dalam (Biasanya dibiarkan default (tanpa diganti) oke, hanya diganti bila kamu tahu apa yang kamu lakukan)',
  'global_moderators_group' => 'Global grup moderator',
  'global_moderators_group_explanation' => 'Identifikasi (id) grup BBS (forum) kamu dimana anggota global grup moderator ada di dalam (Biasanya dibiarkan default (tanpa diganti) oke, hanya diganti bila kamu tahu apa yang kamu lakukan)',
  'special_settings' => 'Spesifikasi settingan BBS (forum)',
  'logout_flag' => 'Versi phpBB (bendera keluar)',
  'logout_flag_explanation' => 'Apa versi BBS (forum) kamu (Settingan ini spesifikasi bagaimana mengatur keluar)',
  'use_post_based_groups' => 'Gunakan grup berdasar-post ?',
  'logout_flag_yes' => '2.0.5 atau lebih tinggi',
  'logout_flag_no' => '2.0.4 atau lebih rendah',
  'use_post_based_groups_explanation' => 'haruska grup dari BBS (forum) yang di definisi oleh jumlah postingan untuk dimasukan ke akun (Mengizinkan sebuah management permission) atau hanya grup default (tanpa diubah) (membuat administrasi lebih mudah, rekomendasi). Kamu bisa mengganti settingan ini nantinya',
  'use_post_based_groups_yes' => 'iya',
  'use_post_based_groups_no' => 'tidak',
  'error_title' => 'Kamu perlu mengkoreksi keliru (Error) ini sebelum melanjutkan. Ke halaman sebelumnya.',
  'error_specify_bbs' => 'Kamu harus meng-spesifikasi aplikasi apa yang kamu mau sambungkan dengan Coppermine.',
  'error_no_blank_name' => 'Kamu tidak bisa membiarkan nama dari custom sambungan kamu kosong.',
  'error_no_special_chars' => 'Nama sambungan file kamu mesti tidak terdiri dari spesial karakter kecuali garis bawah (_) dan strip (-)!',
  'error_bridge_file_not_exist' => 'Sambungan file tidak ada di dalam server. Cek kembali bila kamu sudah upload file itu.',
  'finalize' => 'Aktifkan/Tidak aktif integrasi BBS (forum)',
  'finalize_explanation' => 'sejauh ini, settingan yang kamu spesifikasikan telah di tulis kedalam database tapi BBS (forum) integrasi belum diaktifkan. Kamu bisa mengganti integrasi aktif/tidak nanti ata setiap waktu. Haruslah kamu mengingat nama admin dan kata sandi dari Coppermine, kamu mungkin membutuhkan nanti untuk membuat perubahan. Jika semuanya berjalan salah. ke %s dan tidak aktifkan integrasi BBS (forum) disana dengan menggunakan akun admin standalone (non-bridgé) (Biasanya akun admin yang kamu pilih ketika install Coppermine).',
  'your_bridge_settings' => 'Settingan sambungan kamu',
  'title_enable' => 'Aktif integrasi/sambungan dengan %s',
  'bridge_enable_yes' => 'Aktif',
  'bridge_enable_no' => 'Tidak aktif',
  'error_must_not_be_empty' => 'Tidak boleh dikosongkan',
  'error_either_be' => 'harusnya %s atau %s',
  'error_folder_not_exist' => '%s tidak ada. Koreksi value yang kamu masukkan untuk %s',
  'error_cookie_not_readible' => 'Coppermine tidak bisa membaca nama cookie %s. Koreksi value yang kamu masukkan untuk %s, atau ke BBS (forum) administrasi panel dan yakinkan jalur (path) cookie bisa dibaca oleh Coppermine.',
  'error_mandatory_field_empty' => 'Kamu tidak bisa membiarkan field %s kosong - Masukkan dengan value yang benar.',
  'error_no_trailing_slash' => 'Mesti tidak boleh ada tanda slash \'/\' di field %s.',
  'error_trailing_slash' => 'Mesti ada tanda slash \'/\' di field.',
  'error_db_connect' => 'Tidak bisa berhubung dengan database mySQL dengan data yang kamu spesifikasikan. Ini pesan dari mySQL:',
  'error_db_name' => 'Walau Coppermine bisa aktif dengan koneksi, itu tidak bisa untuk mencari database %s. Yakinlah kamu spesifikasi %s dengan benar. ini pesan dari mySQL:',
  'error_prefix_and_table' => '%s dan ',
  'error_db_table' => 'tidak bisa mencari table %s. Yakinlah yang kamu spesifikasikan untuk  %s dengan benar.',
  'recovery_title' => 'Sambungan manager: recovery darurat',
  'recovery_explanation' => 'Jika kamu masuk kesini sebagai admin BBS (forum) integrasi dengan galeri Coopermine, Kamu harus masuk dulu sebagau admin. Jika kamu tidak bisa masuk dikarenakan sambungan tidak akan bekerja dengan yang kamu harapkan. Memasukkan nama pemakai dan katasandi tidak akan membuat kamu masuk, itu hanya mengtidak aktifkan integrasi dengan BBS (forum). Lanjut ke dokumentasi untuk lebih jelas.',
  'username' => 'Nama pemakai',
  'password' => 'Katasandi',
  'disable_submit' => 'Tidak aktifkan',
  'recovery_success_title' => 'Autorisasi berhasil',
  'recovery_success_content' => 'Kamu telah berhasil mengtidak aktifkan sambungan BBS (forum). Coopermine kamu sekarang berjalan tanpa ada sambungan.',
  'recovery_success_advice_login' => 'Masuk sebagai admin untuk merubah settingan sambungan dan mengaktifkan integrasi BBS (forum) kembali.',
  'goto_login' => 'Ke halaman identifikasi',
  'goto_bridgemgr' => 'ke sambungan manager',
  'recovery_failure_title' => 'Autorisasi gagal',
  'recovery_failure_content' => 'Kamu beri detil yang salah. Kamu akan memberi detil ke akun admin data dari versi standalone (Biasanya aku yang kamu set ketika menginstall Coppermine).',
  'try_again' => 'Coba kembali',
  'recovery_wait_title' => 'Tunggu waktu belum lewat',
  'recovery_wait_content' => 'Untuk keamanan script ini tidak mengizinkan login (masuk) salah dalam jangka sukses yang dekat, jadi kamu harus menunggu sebental sampai kamu diizinkan untuk memberi bukti.',
  'wait' => 'Tunggu',
  'create_redir_file' => 'Buat mengalihkan file (rekomendasi)',
  'create_redir_file_explanation' => 'Untuk mengalihkan pemakai kembali ke Coppermine ketika mereka masuk ke forim, kamu butuh sebuah pengalihan file untuk dibuat di dalam folder BBS (forum). Ketika pilihan ini dipilih, sambungan manager akan berusaha membuat file ini untuk kamu, atau memberikan kamu kode untuk di salin dan paste untuk membuat file secaru manual.',
  'browse' => 'Melihat',
);

// ------------------------------------------------------------------------- //
// File calendar.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('CALENDAR_PHP')) $lang_calendar_php = array(
  'title' => 'Kalendar', //cpg1.4
  'close' => 'Tutup', //cpg1.4
  'clear_date' => 'hapus tanggal', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

if (defined('CATMGR_PHP')) $lang_catmgr_php = array(
  'miss_param' => 'Parameter dibutuhkan untuk operasi \'%s\' tidak tersedia!',
  'unknown_cat' => 'Kategori yang dipilih tidak ada di database',
  'usergal_cat_ro' => 'Kategori galeri pemakai tidak bisa dihapus!',
  'manage_cat' => 'Mengatur kategori',
  'confirm_delete' => 'Apakah kamu yakin untuk meng HAPUS kategori ini?',//js-alert
  'category' => 'Kategori',
  'operations' => 'Opérasi',
  'move_into' => 'Pindah ke dalam',
  'update_create' => 'Memperbaharui / Buat kategori',
  'parent_cat' => 'Orangtuakan (parent) kategori',
  'cat_title' => 'Judul kategori',
  'cat_thumb' => 'Thumbanil kategori', 
  'cat_desc' => 'Deskripsi kategori',
  'categories_alpha_sort' => 'urut kategori secara alphabet (menggantikan urut sendiri)', //cpg1.4
  'save_cfg' => 'Simpan konfigurasi', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File admin.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('ADMIN_PHP')) $lang_admin_php = array(
  'title' => 'Konfigurasi galeri', //cpg1.4
  'manage_exif' => 'Mengatur tampilan ke luar', //cpg1.4
  'manage_plugins' => 'Mengatur plugin', //cpg1.4
  'manage_keyword' => 'Mengatur kata kunci', //cpg1.4
  'restore_cfg' => 'simpan kembali dengan orisinal konfigurasi',
  'save_cfg' => 'Simpan konfigurasi yang baru',
  'notes' => 'Catatan',
  'info' => 'Informasi',
  'upd_success' => 'Konfigurasi Coppermine berhasil diperbaharui',
  'restore_success' => 'Konfigurasi orisinal Coppermine berhasil',
  'name_a' => 'Urut dari nama awal',
  'name_d' => 'Urut dari nama akhir',
  'title_a' => 'Urut dari judul awal',
  'title_d' => 'Urut dari judul akhir',
  'date_a' => 'Urut dari tanggal awal',
  'date_d' => 'Urut dari tanggal akhir',
  'pos_a' => 'Urut dari posisi awal', //cpg1.4
  'pos_d' => 'Urut dari posisi akhir', //cpg1.4
  'th_any' => 'Maksimum aspek',
  'th_ht' => 'Tinggi',
  'th_wd' => 'Lebar',
  'label' => 'Label', 
  'item' => 'Hal (item)', 
  'debug_everyone' => 'semua orang', 
  'debug_admin' => 'hanya admin', 
  'no_logs'=> 'tidak aktif', //cpg1.4
  'log_normal'=> 'Normal', //cpg1.4
  'log_all' => 'Semua', //cpg1.4
  'view_logs' => 'Lihat logs', //cpg1.4
  'click_expand' => 'Klik nama setiap bagian untuk diperlihat', //cpg1.4
  'expand_all' => 'Perlihakan semua', //cpg1.4
  'notice1' => '(*) Settingan ini mesti tidak di ganti jika kamu sudah punya filedi database.', //cpg1.4 - (relocated)
  'notice2' => '(**) Ketika mengganci settingan ini, hanya file yang dimasukkan dari poin untuk membuat efek, jadi ini disarankan settingan ini tidak mesti diganti jika sudah ada file di galeri. Kamu bisa, bagaimanapun, memakai penggantian file yang sudah ada dengan  &quot;<a href="util.php">Perlengkapan admin</a> (Merubah ukuran gambar)&quot; perlengkapan dari menu admin.', //cpg1.4 - (relocated)
  'notice3' => '(***) Semua log file ditulis dalam bahasa Inggris.', //cpg1.4 - (relocated)
  'bbs_disabled' => 'Fungsi tidak aktif ketika integrasi dengan BB', //cpg1.4
  'auto_resize_everyone' => 'Semua orang', //cpg1.4
  'auto_resize_user' => 'Hanya pemakai (user)', //cpg1.4
  'ascending' => 'urut awal', //cpg1.4
  'descending' => 'urut akhir', //cpg1.4
);

if (defined('ADMIN_PHP')) $lang_admin_data = array(
  'Paramètres généraux',
  array('Nama galeri', 'gallery_name', 0, 'f=index.htm&amp;as=admin_general_name&amp;ae=admin_general_name_end'), //cpg1.4
  array('Deskripsi galeri', 'gallery_description', 0, 'f=index.htm&amp;as=admin_general_description&amp;ae=admin_general_description_end'), //cpg1.4
  array('Email galeri administrasi', 'gallery_admin_email', 0, 'f=index.htm&amp;as=admin_general_email&amp;ae=admin_general_email_end'), //cpg1.4
  array('URL folder galeri Coppermine (tidak \'index.php\' atau sama dengan yang terakhir)', 'ecards_more_pic_target', 0, 'f=index.htm&amp;as=admin_general_coppermine-url&amp;ae=admin_general_coppermine-url_end'), //cpg1.4
  array('URL halaman depan', 'home_target', 0, 'f=index.htm&amp;as=admin_general_home-url&amp;ae=admin_general_home-url_end'), //cpg1.4
  array('Izinkan download ZIP dari favorit', 'enable_zipdownload', 1, 'f=index.htm&amp;as=admin_general_zip-download&amp;ae=admin_general_zip-download_end'), //cpg1.4
  array('Perbedaan zona waktu relatif ke GMT (jam sekarang: ' . localised_date(-1, $comment_date_fmt) . ')','time_offset',0, 'f=index.htm&amp;as=admin_general_time-offset&amp;ae=admin_general_time-offset_end&amp;top=1'), //cpg1.4
  array('Aktifkan katasandi enkripsi (tidak bisa dirusak)','enable_encrypted_passwords',1, 'f=index.htm&amp;as=admin_general_encrypt_password_start&amp;ae=admin_general_encrypt_password_end&amp;top=1'), // cpg 1.4
  array('Aktifkan ikon bantuan (bantuan hanya tersedia dalam bahasa Inggris)','enable_help',9, 'f=index.htm&amp;as=admin_general_help&amp;ae=admin_general_help_end'), //cpg1.4
  array('Aktifkan kata kunci di pencarian','clickable_keyword_search',14, 'f=index.htm&amp;as=admin_general_keywords_start&amp;ae=admin_general_keywords_end'), //cpg1.4
  array('Aktifkan plugin', 'enable_plugins', 12, 'f=index.htm&amp;as=admin_general_enable-plugins&amp;ae=admin_general_enable-plugins_end'),  //cpg1.4
  array('Mengizinkan banning dari alamat IP non-routable (pribadi)', 'ban_private_ip', 1,  'f=index.htm&amp;as=admin_general_private-ip&amp;ae=admin_general_private-ip_end'), //cpg1.4
  array('Membuka tampilan batch-add', 'browse_batch_add', 1, 'f=index.htm&amp;as=admin_general_browsable_batch_add&amp;ae=admin_general_browsable_batch_add_end'), //cpg1.4

  'Langue &amp; Settingan Karakterset',
  array('Bahasa', 'lang', 5, 'f=index.htm&amp;as=admin_language_language&amp;ae=admin_language_language_end'), //cpg1.4
  array('Balik ke bahasa Inggris bila translasi kata tidak ditemukan?', 'language_fallback', 1, 'f=index.htm&amp;as=admin_language_fallback&amp;ae=admin_language_fallback_end'), //cpg1.4
  array('Encoding huruf karakter', 'charset', 4, 'f=index.htm&amp;as=admin_language_charset&amp;ae=admin_language_charset_end'), //cpg1.4
  array('Tampilkan daftar bahasa', 'language_list', 1, 'f=index.htm&amp;as=admin_language_list&amp;ae=admin_language_list_end'), //cpg1.4
  array('Tampilkan bendera bahasa', 'language_flags', 8, 'f=index.htm&amp;as=admin_language_flags&amp;ae=admin_language_flags_end&amp;top=1'), //cpg1.4
  array('Tampilkan &quot;reset&quot; dalam bagian bahasa', 'language_reset', 1, 'f=index.htm&amp;as=admin_language_reset&amp;ae=admin_language_reset_end&amp;top=1'), //cpg1.4
  //array('Tampilkan sebelumnya/selanjutnya dalam halaman tabbed', 'previous_next_tab', 1), //cpg1.4

  'Settingan tema',
  array('Tema', 'theme', 6, 'f=index.htm&amp;as=admin_theme_theme&amp;ae=admin_theme_theme_end'), //cpg1.4
  array('Tampilkan daftar tema', 'theme_list', 1, 'f=index.htm&amp;as=admin_theme_theme_list&amp;ae=admin_theme_theme_list_end'), //cpg1.4
  array('Tampilkan &quot;reset&quot; dalam tema yang dipilih', 'theme_reset', 1, 'f=index.htm&amp;as=admin_theme_theme_reset&amp;ae=admin_theme_theme_reset_end'), //cpg1.4
  array('Tampilkan Tanya-jawab', 'display_faq', 1, 'f=index.htm&amp;as=admin_theme_faq&amp;ae=admin_theme_faq_end'), //cpg1.4
  array('Bikin nama menu', 'custom_lnk_name', 0,'f=index.htm&amp;as=admin_theme_custom_lnk_name&amp;ae=admin_theme_custom_lnk_name_end'), //cpg1.4
  array('Bikin URL menu', 'custom_lnk_url', 0,'f=index.htm&amp;as=admin_language_custom_lnk_url&amp;ae=admin_language_custom_lnk_url_end'), //cpg1.4
  array('Tampilkan bantuan kodebb', 'show_bbcode_help', 1, 'f=index.htm&amp;as=admin_theme_bbcode&amp;ae=admin_theme_bbcode_end&amp;top=1'), //cpg1.4
  array('Tampilkan kotak menu di tema untuk meng-definisi sebagai XHTML dan CSS
compliant','vanity_block',1, 'f=index.htm&amp;as=vanity_block&amp;ae=vanity_block_end'), //cpg1.4
  array('Jalur (path) ke custom header include', 'custom_header_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4
  array('Jalur (path) ke custom footer include', 'custom_footer_path', 0, 'f=index.htm&amp;as=admin_theme_include_path_start&amp;ae=admin_theme_include_path_end'), //cpg1.4

  'Melihat daftar albim',
  array('lebar table utama (dalam pixel atau %)', 'main_table_width', 0, 'f=index.htm&amp;as=admin_album_table-width&amp;ae=admin_album_table-width_end'), //cpg1.4
  array('Jumlah level untuk tampilan kategori', 'subcat_level', 0, 'f=index.htm&amp;as=admin_album_category-levels&amp;ae=admin_album_category-levels_end'), //cpg1.4
  array('Jumlah album yang ditampilkan', 'albums_per_page', 0, 'f=index.htm&amp;as=admin_album_number&amp;ae=admin_album_number_end'), //cpg1.4
  array('Jumlah kolom untuk daftar album', 'album_list_cols', 0, 'f=index.htm&amp;as=admin_album_columns&amp;ae=admin_album_columns_end'), //cpg1.4
  array('Ukuran thumbnail dalam pixel', 'alb_list_thumb_size', 0, 'f=index.htm&amp;as=admin_album_thumbnail-size&amp;ae=admin_album_thumbnail-size_end'), //cpg1.4
  array('Isi dari halaman utama', 'main_page_layout', 0, 'f=index.htm&amp;as=admin_album_list_content&amp;ae=admin_album_list_content_end'), //cpg1.4
  array('Tampilkan level album thumbnail pertama dalam kategori','first_level',1, 'f=index.htm&amp;as=admin_album_first-level_thumbs&amp;ae=admin_album_first-level_thumbs_end'), //cpg1.4
  array('Urut kategori secara alfabet (Menggantikan mengurut sendiri)','categories_alpha_sort',1, 'f=index.htm&amp;as=admin_album_list_alphasort_start&amp;ae=admin_album_list_alphasort_end'), //cpg1.4
  array('Tampilkan jumlah file yang berhubungan','link_pic_count',1, 'f=index.htm&amp;as=admin_album_linked_files_start&amp;ae=admin_album_linked_files_end'), //cpg1.4

  'Tampilan thumbnail',
  array('Jumlah kolom dalam halaman thumbnail', 'thumbcols', 0, 'f=index.htm&amp;as=admin_thumbnail_columns&amp;ae=admin_thumbnail_columns_end'), //cpg1.4
  array('Jumlah baris dalam halaman thumbnail', 'thumbrows', 0, 'f=index.htm&amp;as=admin_thumbnail_rows&amp;ae=admin_thumbnail_rows_end'), //cpg1.4
  array('Jumlah maksimum untuk tampilan label', 'max_tabs', 10, 'f=index.htm&amp;as=admin_thumbnail_tabs&amp;ae=admin_thumbnail_tabs_end'), //cpg1.4
  array('Tampilkan judul file (tambahan untuk judul) dibawah thumbnail', 'caption_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_caption&amp;ae=admin_thumbnail_display_caption_end'), //cpg1.4
  array('Tampilkan jumlah berapa kali telah dilihat di bawah thumbnail', 'views_in_thumbview', 1, 'f=index.htm&amp;as=admin_thumbnail_display_views&amp;ae=admin_thumbnail_display_views_end'), //cpg1.4
  array('Tampilkan jumlah berapa komentar dibawah thumbnail', 'display_comment_count', 1, 'f=index.htm&amp;as=admin_thumbnail_display_comments&amp;ae=admin_thumbnail_display_comments_end'), //cpg1.4
  array('Tampilkan nama yang upload dibawah thumbnail', 'display_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_uploader&amp;ae=admin_thumbnail_display_uploader_end'), //cpg1.4
  //array('Tampilkan nama admin yang upload dibawah thumbnail', 'display_admin_uploader', 1, 'f=index.htm&amp;as=admin_thumbnail_display_admin_uploader&amp;ae=admin_thumbnail_display_admin_uploader_end'), //cpg1.4
  array('Tampilkan nama file dibawah thumbnail', 'display_filename', 1, 'f=index.htm&amp;as=admin_thumbnail_display_filename&amp;ae=admin_thumbnail_display_filename_end'), //cpg1.4
  array('Tampilkan deskripsi album', 'alb_desc_thumb', 1, 'f=index.htm&amp;as=admin_thumbnail_display_description&amp;ae=admin_thumbnail_display_description_end'), //cpg1.4
  array('Urutan default (tanpa diubah) untuk file', 'default_sort_order', 3, 'f=index.htm&amp;as=admin_thumbnail_default_sortorder&amp;ae=admin_thumbnail_default_sortorder_end'), //cpg1.4
  array('Jumlah minimal suara untuk sebuah file yang terlihat di bagian \'Paling dipilih\'', 'min_votes_for_rating', 0, 'f=index.htm&amp;as=admin_thumbnail_minimum_votes&amp;ae=admin_thumbnail_minimum_votes_end'), //cpg1.4

  'Tampilan gambar', //cpg1.4
  array('Lebar table ketika file ditampilkan (pixel atau %)', 'picture_table_width', 0, 'f=index.htm&amp;as=admin_image_comment_table-width&amp;ae=admin_image_comment_table-width_end'), //cpg1.4
  array('Informasi dilihat secara default', 'display_pic_info', 1, 'f=index.htm&amp;as=admin_image_comment_info_visible&amp;ae=admin_image_comment_info_visible_end'), //cpg1.4
  array('Panjang maksimum untuk deskripsi gambar', 'max_img_desc_length', 0, 'f=index.htm&amp;as=admin_image_comment_descr_length&amp;ae=admin_image_comment_descr_length_end'), //cpg1.4
  array('Jumlah maksimum karakter dalam satu kata', 'max_com_wlength', 0, 'f=index.htm&amp;as=admin_image_comment_chars_per_word&amp;ae=admin_image_comment_chars_per_word_end'), //cpg1.4
  array('Tampilkan negatif film', 'display_film_strip', 1, 'f=index.htm&amp;as=admin_image_comment_filmstrip_toggle&amp;ae=admin_image_comment_filmstrip_toggle_end'), //cpg1.4
  array('Tampilkan nama file dibawah thumbnail negatif film', 'display_film_strip_filename', 1, 'f=index.htm&amp;as=admin_image_comment_display_film_strip_filename&amp;ae=admin_image_comment_display_film_strip_filename_end'), //cpg1.4
  array('Jumlah file di negatif film', 'max_film_strip_items', 0, 'f=index.htm&amp;as=admin_image_comment_filmstrip_number&amp;ae=admin_image_comment_filmstrip_number_end'), //cpg1.4
  array('Jarak waktu slideshow dalam millisecondes (1 detik = 1000 millisekon)', 'slideshow_interval', 0, 'f=index.htm&amp;as=admin_image_comment_slideshow_interval&amp;ae=admin_image_comment_slideshow_interval_end'), //cpg1.4

  'Settingan komentar', //cpg1.4
  array('Filterisasi komentar dari kata kata buruk', 'filter_bad_words', 1, 'f=index.htm&amp;as=admin_image_comment_bad_words&amp;ae=admin_image_comment_bad_words_end'), //cpg1.4
  array('Izinkan icon smile di komentar', 'enable_smilies', 1, 'f=index.htm&amp;as=admin_image_comment_smilies&amp;ae=admin_image_comment_smilies_end'), //cpg1.4
  array('Izinkan beberapa komentar di satu file dari pemakai yang sama (Mentidak aktifkan pencegahan spam)', 'disable_comment_flood_protect', 1, 'f=index.htm&amp;as=admin_image_comment_flood&amp;ae=admin_image_comment_flood_end'), //cpg1.4
  array('Jumlah maksimum baris di komentar', 'max_com_lines', 0, 'f=index.htm&amp;as=admin_image_comment_lines&amp;ae=admin_image_comment_lines_end'), //cpg1.4
  array('Panjang maksimum komentar', 'max_com_size', 0, 'f=index.htm&amp;as=admin_image_comment_length&amp;ae=admin_image_comment_length_end'), //cpg1.4
  array('Beritahu komentar ke admin dengan email', 'email_comment_notification', 1, 'f=index.htm&amp;as=admin_image_comment_admin_notify&amp;ae=admin_image_comment_admin_notify_end'), //cpg1.4
  array('Urut komentar dari yang terbaru', 'comments_sort_descending', 17, 'f=index.htm&amp;as=admin_comment_sort_start&amp;ae=admin_comment_sort_end'), //cpg1.4
  array('Nama awalan komentar untuk pemakai yang tidak dikenal', 'comments_anon_pfx', 0, 'f=index.htm&amp;as=comments_anon_pfx&amp;ae=comments_anon_pfx_end'), //cpg1.4

  'Settingan file dan thumbnail',
  array('Kualitas untuk file JPG', 'jpeg_qual', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_jpeg_quality&amp;ae=admin_picture_thumbnail_jpeg_quality_end'), //cpg1.4
  array('Maksimum dimensi untuk thumbnail <a href="#notice2" class="clickable_option">**</a>', 'thumb_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max-dimension&amp;ae=admin_picture_thumbnail_max-dimension_end'), //cpg1.4
  array('Gunakan dimensi (lebar atau tinggi atau maksimum aspek untuk thumbnail) <a href="#notice2" class="clickable_option">**</a>', 'thumb_use', 7, 'f=index.htm&amp;as=admin_picture_thumbnail_use-dimension&amp;ae=admin_picture_thumbnail_use-dimension_end'), //cpg1.4
  array('Buat tingkatan untuk gambar','make_intermediate',1, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_toggle&amp;ae=admin_picture_thumbnail_intermediate_toggle_end'), //cpg1.4
  array('Maksimum lebar atau tinggi dari tingkatan gambar/video <a href="#notice2" class="clickable_option">**</a>', 'picture_width', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_intermediate_dimension&amp;ae=admin_picture_thumbnail_intermediate_dimension_end'), //cpg1.4
  array('Maksimum ukuran untuk upload file (Kb)', 'max_upl_size', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_size&amp;ae=admin_picture_thumbnail_max_upload_size_end'), //cpg1.4
  array('Maksimum lebar atau tinggi untuk upload gambar/video (pixels)', 'max_upl_width_height', 0, 'f=index.htm&amp;as=admin_picture_thumbnail_max_upload_dimension&amp;ae=admin_picture_thumbnail_max_upload_dimension_end'), //cpg1.4
  array('Otomatis mengukur gambar yang lebih besar dari lebar dan tinggi', 'auto_resize', 16, 'f=index.htm&amp;as=admin_picture_thumbnail_auto-resize&amp;ae=admin_picture_thumbnail_auto-resize_end'), //cpg1.4

  'Settingan tingkat tinggi file dan thumbnail',
  array('Album bisa di jadikan pribadi (Note: bila kamu mengganti dari \'iya\' ke \'tidak\' Semua album pribadi sekarang menjadi publik)', 'allow_private_albums', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_toggle&amp;ae=admin_picture_thumb_advanced_private_toggle_end'), //cpg1.4
  array('Tampilkan ikon album pribadi ke pemakai yang tidak dikenal','show_private',1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_private_icon_show&amp;ae=admin_picture_thumb_advanced_private_icon_show_end'), //cpg1.4
  array('Karakter yang dilarang di nama file', 'forbiden_fname_char',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_filename_forbidden_chars&amp;ae=admin_picture_thumb_advanced_filename_forbidden_chars_end'), //cpg1.4
  //array('Terima ekstensi file untuk upload gambar', 'allowed_file_extensions',0, 'f=index.htm&amp;as=&amp;ae=_end'), //cpg1.4
  array('Izinkan tipe gambar', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_pic_extensions&amp;ae=admin_picture_thumb_advanced_pic_extensions_end'), //cpg1.4
  array('Izinkan tipe video', 'allowed_mov_types',0, 'f=index.htm&amp;as=admin_thumbs_advanced_movie&amp;ae=admin_thumbs_advanced_movie_end'), //cpg1.4
  array('Otomatis putar video', 'media_autostart',1, 'f=index.htm&amp;as=admin_movie_autoplay&amp;ae=admin_movie_autoplay_end'), //cpg1.4
  array('Izinkan tipe suara', 'allowed_snd_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_audio_extensions&amp;ae=admin_picture_thumb_advanced_audio_extensions_end'), //cpg1.4
  array('Izinkan tipe dokumen', 'allowed_doc_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_doc_extensions&amp;ae=admin_picture_thumb_advanced_doc_extensions_end'), //cpg1.4
  array('Metode untuk merubah ukuran gambar','thumb_method',2, 'f=index.htm&amp;as=admin_picture_thumb_advanced_resize_method&amp;ae=admin_picture_thumb_advanced_resize_method_end'), //cpg1.4
  array('Jalur ke ImageMagick \'ubah\' (contoh /usr/bin/X11/)', 'impath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_path&amp;ae=admin_picture_thumb_advanced_im_path_end'), //cpg1.4
  //array('Izinkan tipe gambar (hanya bisa untuk ImageMagick)', 'allowed_img_types',0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_allowed_imagetypes&amp;ae=admin_picture_thumb_advanced_allowed_imagetypes_end'), //cpg1.4
  array('Pilihan perintah untuk ImageMagick', 'im_options', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_im_commandline&amp;ae=admin_picture_thumb_advanced_im_commandline_end'), //cpg1.4
  array('Tampilkan data EXIF dalam file JPEG', 'read_exif_data', 13, 'f=index.htm&amp;as=admin_picture_thumb_advanced_exif&amp;ae=admin_picture_thumb_advanced_exif_end'), //cpg1.4
  array('Tampilkan data IPTC dalamfile JPEg', 'read_iptc_data', 1, 'f=index.htm&amp;as=admin_picture_thumb_advanced_iptc&amp;ae=admin_picture_thumb_advanced_iptc_end'), //cpg1.4
  array('Album direktori <a href="#notice1" class="clickable_option">*</a>', 'fullpath', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_albums_dir&amp;ae=admin_picture_thumb_advanced_albums_dir_end'), //cpg1.4
  array('Direktori file untuk pemakai <a href="#notice1" class="clickable_option">*</a>', 'userpics', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_userpics_dir&amp;ae=admin_picture_thumb_advanced_userpics_dir_end'), //cpg1.4
  array('Nama prefix untuk gambar tingkatan tinggi <a href="#notice1" class="clickable_option">*</a>', 'normal_pfx', 0), 
  array('Nama prefix untuk file thumbnail <a href="#notice1" class="clickable_option">*</a>', 'thumb_pfx', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_thumbs_prefix&amp;ae=admin_picture_thumb_advanced_thumbs_prefix_end'), //cpg1.4
  array('Direktori untuk tidak diubah (default) mode', 'default_dir_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_folder&amp;ae=admin_picture_thumb_advanced_chmod_folder_end'), //cpg1.4
  array('File tidak diubah (default) mode', 'default_file_mode', 0, 'f=index.htm&amp;as=admin_picture_thumb_advanced_chmod_files&amp;ae=admin_picture_thumb_advanced_chmod_files_end'), //cpg1.4

  'Settingan pemakai',
  array('Izinkan registrasi pemakai baru', 'allow_user_registration', 1, 'f=index.htm&amp;as=admin_allow_registration&amp;ae=admin_allow_registration_end'), //cpg1.4
  array('Izinkan tamu (pengunjung atau tidak dikenal) untuk akses', 'allow_unlogged_access', 1, 'f=index.htm&amp;as=admin_allow_unlogged_access&amp;ae=admin_allow_unlogged_access_end'), //cpg1.4
  array('Registrasi pemakai membutuhkan verikasi email', 'reg_requires_valid_email', 1, 'f=index.htm&amp;as=admin_registration_verify&amp;ae=admin_registration_verify_end'), //cpg1.4
  array('Beritahu admin setiap pemakai, register lewat email', 'reg_notify_admin_email', 1, 'f=index.htm&amp;as=admin_registration_notify&amp;ae=admin_registration_notify_end'), //cpg1.4
  array('Register aktif oleh admin', 'admin_activation', 1, 'f=index.htm&amp;as=admin_activation&amp;ae=admin_activation_end'),  //cpg1.4
  array('Izinkan dua pemakai untuk mempunyai alamat email yang sama', 'allow_duplicate_emails_addr', 1, 'f=index.htm&amp;as=admin_allow_duplicate_emails_addr&amp;ae=admin_allow_duplicate_emails_addr_end'), //cpg1.4
  array('Beritahu admin untuk mengizinkan file yang di upload pemakai', 'upl_notify_admin_email', 1, 'f=index.htm&amp;as=admin_approval_notify&amp;ae=admin_approval_notify_end'), //cpg1.4
  array('Izinkan pemakai yang masuk melihat daftar anggota', 'allow_memberlist', 1, 'f=index.htm&amp;as=admin_user_memberlist&amp;ae=admin_user_memberlist_end'), //cpg1.4
  array('Izinkan pemakai untuk menggantu alamat email di profil', 'allow_email_change', 1, 'f=index.htm&amp;as=admin_user_allow_email_change&amp;ae=admin_user_allow_email_change_end'), //cpg1.4
  array('Izinkan pemakai untuk mengontrol langsung gambar meraka di galeri umum', 'users_can_edit_pics', 1, 'f=index.htm&amp;as=admin_user_editpics_public_start&amp;ae=admin_user_editpics_public_end'), //cpg1.4
  array('Jumlah gagal login sampai kena ban sementara (mencegah serangan hacker)', 'login_threshold', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Durasi ban sementara setelah gagal login', 'login_expiry', 0, 'f=index.htm&amp;as=admin_user_login_start&amp;ae=admin_user_login_end'), //cpg1.4
  array('Aktifkan laporan ke admin', 'report_post', 1, 'f=index.htm&amp;as=admin_user_enable_report&amp;ae=admin_user_enable_report_end'),  //cpg1.4

// custom profile fields,  //cpg1.4
  'Tambah nama file untuk profil pemakai (kosongkan bila tidak perlu).
  Utilisez le profil 6 pour les longs textes, comme les biographies', //cpg1.4
  array('Nama profil 1', 'user_profile1_name', 0, 'f=index.htm&amp;as=admin_custom&amp;ae=admin_custom_end'), //cpg1.4
  array('Nama profil 2', 'user_profile2_name', 0), //cpg1.4
  array('Nama profil 3', 'user_profile3_name', 0), //cpg1.4
  array('Nama profil 4', 'user_profile4_name', 0), //cpg1.4
  array('Nama profil 5', 'user_profile5_name', 0), //cpg1.4
  array('Nama profil 6', 'user_profile6_name', 0), //cpg1.4

  'Tambah nama file untuk deksripsi gambar (kosongkan bila tidak perlu)',
  array('Kolom 1', 'user_field1_name', 0, 'f=index.htm&amp;as=admin_custom_image&amp;ae=admin_custom_image_end'), //cpg1.4
  array('Kolom 2', 'user_field2_name', 0),
  array('Kolom 3', 'user_field3_name', 0),
  array('Kolom 4', 'user_field4_name', 0),

  'Settingan Cookie',
  array('Nama cookie', 'cookie_name', 0, 'f=index.htm&amp;as=admin_cookie_name&amp;ae=admin_cookie_name_end'), //cpg1.4
  array('Jalur (path) cookie', 'cookie_path', 0, 'f=index.htm&amp;as=admin_cookie_path&amp;ae=admin_cookie_path_end'), //cpg1.4

  'Settingan email  (Biasanya tidak perlu diubah disini; biarkan kosong bila tidak yakin)', //cpg1.4
  array('Server SMTP (si le champ est vide, sendmail sera utilisé)', 'smtp_host', 0, 'f=index.htm&amp;as=admin_email&amp;ae=admin_email_end'), //cpg1.4
  array('Nama SMTP', 'smtp_username', 0), //cpg1.4
  array('Katasandi SMTP', 'smtp_password', 0), //cpg1.4

  'Laporan dan statistik', //cpg1.4
  array('Laporan <a href="#notice3" class="clickable_option">***</a>', 'log_mode', 11, 'f=index.htm&amp;as=admin_logging_log_mode&amp;ae=admin_logging_log_mode_end'), //cpg1.4
  array('Laporan ecard', 'log_ecards', 1, 'f=index.htm&amp;as=admin_general_log_ecards&amp;ae=admin_general_log_ecards_end'), //cpg1.4
  array('Biarkan detil statistik suara','vote_details',1, 'f=index.htm&amp;as=admin_logging_votedetails&amp;ae=admin_logging_votedetails_end'), //cpg1.4
  array('Biarkan detil statistik hit','hit_details',1, 'f=index.htm&amp;as=admin_logging_hitdetails&amp;ae=admin_logging_hitdetails_end'), //cpg1.4

  'Settingan pemeliharaan', //cpg1.4
  array('Aktifkan debug mode', 'debug_mode', 9, 'f=index.htm&amp;as=debug_mode&amp;ae=debug_mode_end'), //cpg1.4
  array('Tampilkan catatan dalam debug mode', 'debug_notice', 1, 'f=index.htm&amp;as=admin_misc_debug_notices&amp;ae=admin_misc_debug_notices_end'), //cpg1.4
  array('Galeri di tutup', 'offline', 1, 'f=index.htm&amp;as=admin_general_offline&amp;ae=admin_general_offline_end'), //cpg1.4
);


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //

if (defined('DB_ECARD_PHP')) $lang_db_ecard_php = array(
  'title' => 'Kirim ecard', 
  'ecard_sender' => 'Pengirim', 
  'ecard_recipient' => 'Penerima', 
  'ecard_date' => 'Tanggal', 
  'ecard_display' => 'Tampilkan ecard', 
  'ecard_name' => 'Nama', 
  'ecard_email' => 'Email', 
  'ecard_ip' => 'IP #', 
  'ecard_ascending' => 'Urut dari awal', 
  'ecard_descending' => 'Urut dari akhir', 
  'ecard_sorted' => 'Urutkan', 
  'ecard_by_date' => 'dengan tanggal', 
  'ecard_by_sender_name' => 'dengan nama pengirim', 
  'ecard_by_sender_email' => 'dengan email pengirim', 
  'ecard_by_sender_ip' => 'dengan alamat IP', 
  'ecard_by_recipient_name' => 'dengan nama penerima', 
  'ecard_by_recipient_email' => 'dengan email penerima', 
  'ecard_number' => 'Tampilkan simpanan %s untuk %s dari %s', 
  'ecard_goto_page' => 'ke halaman', 
  'ecard_records_per_page' => 'simpan per halaman', 
  'check_all' => 'Pilih semua', 
  'uncheck_all' => 'Tidak pilih semua', 
  'ecards_delete_selected' => 'Hapus yang dipilih', 
  'ecards_delete_confirm' => 'Apakah kamu yakin ingin menghapus simpanan? Pilih di kotak cek!', 
  'ecards_delete_sure' => 'Saya yakin', 
);


// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

if (defined('DB_INPUT_PHP')) $lang_db_input_php = array(
  'empty_name_or_com' => 'Kamu perlu isi nama dan komentar',
  'com_added' => 'komentar anda telah di masukkan',
  'alb_need_title' => 'Kamu harus menyediakan judul untuk album!',
  'no_udp_needed' => 'Tidak perlu di update (perbaharui).',
  'alb_updated' => 'Album telah di update (perbaharui)',
  'unknown_album' => 'Album yang dipilih tidak ada atau kamu tidak punya hak untuk upload ini ke album',
  'no_pic_uploaded' => 'Tidak ada file di upload!<br /><br /> jika kamu benar telah memilih file untuk di upload, Cek bila server mengizinkan upload file...',
  'err_mkdir' => 'Gagal membuat direktori %s&nbsp;!',
  'dest_dir_ro' => 'Tujuan direktori (%s) Tidak bisa di ubah (ganti) oleh skrip!',
  'err_move' => 'tidak memungkinkan untuk dipindah %s ke %s&nbsp;!',
  'err_fsize_too_large' => 'Ukuran file yang kamu upload terlalu besar (Maksimum adalah %s x %s)&nbsp;!',
  'err_imgsize_too_large' => 'Ukuran file yang kamu upload terlalu besar (Maksimum adalah %s Kb)&nbsp;!',
  'err_invalid_img' => 'File yang kamu upload bukan gambar!',
  'allowed_img_types' => 'Kamu hanya bisa bisa upload %s gambar.',
  'err_insert_pic' => 'File \'%s\' Tidak bisa masuk ke dalam album',
  'upload_success' => 'File telah berhasil di upload.<br /><br />Akan segera kelihatan setelah diizinkan admin.',
  'notify_admin_email_subject' => '%s - Pemberitahuan upload', 
  'notify_admin_email_body' => 'Sebuah gambar telah di upload %s kamu membutuhkan izin untuk terus. kunjungi %s', 
  'info' => 'Informasi',
  'com_added' => 'Komentar telah dimasukkan',
  'alb_updated' => 'Album diperbaharui',
  'err_comment_empty' => 'Komentar kamu kosong!',
  'err_invalid_fext' => 'Hanya file seperti ini yang di izinkan : <br /><br />%s.',
  'no_flood' => 'Maaf tetapi kamu sudah memberikan di komentar yang terakhir untuk file ini.<br /><br />Edit komentar bila ingin me modifikasikan.',
  'redirect_msg' => 'Kamu sedang dialihkan.<br /><br /><br />Klik \'LANJUT\' Bila halaman tidak otomatis refresh',
  'upl_success' => 'File kamu berhasil dimasukkan',
  'email_comment_subject' => 'Komentar diposkan di Coppermine Photo Gallery', 
  'email_comment_body' => 'Seseorang telah memberikan komentar di galeri kamu. Lihat itu di', 
  'album_not_selected' => 'Album tidak dipilih', //cpg1.4
  'com_author_error' => 'Seorang register pemakai menggunakan nama pemakai ini, login atau gunakan yang lain', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //

if (defined('DELETE_PHP')) $lang_delete_php = array(
  'caption' => 'Judul',
  'fs_pic' => 'Gambar ukuran besar',
  'del_success' => 'Berhasil dihapus',
  'ns_pic' => 'Gambar ukuran normal',
  'err_del' => 'Tidak bisa dihapus',
  'thumb_pic' => 'thumbnail',
  'comment' => 'komentar',
  'im_in_alb' => 'gambar di album',
  'alb_del_success' => 'Album \'%s\' dihapus',
  'alb_mgr' => 'Manager album',
  'err_invalid_data' => 'Data keliru diterima dalam \'%s\'',
  'create_alb' => 'Buat album \'%s\'',
  'update_alb' => 'Perbaharui album \'%s\' dengan judul \'%s\' dan index \'%s\'',
  'del_pic' => 'Hapus file',
  'del_alb' => 'Hapus album',
  'del_user' => 'Hapus pemakai',
  'err_unknown_user' => 'Pemakai dipilih tidak ada!',
  'err_empty_groups' => 'Tidak ada table grup, atau table grup kosong!', //cpg1.4
  'comment_deleted' => 'Komentar berhasil dihapus',
  'npic' => 'Gambar', //cpg1.4
  'pic_mgr' => 'Manager Gambar', //cpg1.4
  'update_pic' => 'Perbaharui gambar \'%s\' dengan nama file \'%s\' dan index \'%s\'', //cpg1.4
  'username' => 'Nama pemakai', //cpg1.4
  'anonymized_comments' => '%s Komentar tidak dikenal', //cpg1.4
  'anonymized_uploads' => '%s upload umum tidak dikenal', //cpg1.4
  'deleted_comments' => '%s Komentar dihapus', //cpg1.4
  'deleted_uploads' => '%s upload umum dihapus', //cpg1.4
  'user_deleted' => 'hapus pemakai %s ', //cpg1.4
  'activate_user' => 'Aktifkan pemakai', //cpg1.4
  'user_already_active' => 'Akun sudah aktif', //cpg1.4
  'activated' => 'Aktif', //cpg1.4
  'deactivate_user' => 'Nonaktif pemakai', //cpg1.4
  'user_already_inactive' => 'Akun sudah nonaktif', //cpg1.4
  'deactivated' => 'Nonaktif', //cpg1.4
  'reset_password' => 'Ganti katasandi', //cpg1.4
  'password_reset' => 'Katasandi ganti dengan %s', //cpg1.4
  'change_group' => 'Ubah grup primary', //cpg1.4
  'change_group_to_group' => 'Ganti dari %s ke %s', //cpg1.4
  'add_group' => 'Tambah grup kedua', //cpg1.4
  'add_group_to_group' => 'Tambah pemakai %s ke grp %s. Dia sekarang member dari %s sebagai primary dan dari %s sebagai member grup kedua.', //cpg1.4
  'status' => 'Status', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File displayecard.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYECARD_PHP')) {

$lang_displayecard_php = array(
  'invalid_data' => 'Le données de la carte électronique que vous essayez d\'envoyer ont été corrompues par votre client courriel. Vérifiez que le lien est complet.', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //

if (defined('DISPLAYIMAGE_PHP')){

$lang_display_image_php = array(
  'confirm_del' => 'Apakah kamu yakin ingin menghapus file ini?\\nKomentar akan dihapus juga.',//js-alert
  'del_pic' => 'HAPUS FILE INI',
  'size' => '%s x %s pixel',
  'views' => '%s kali dilihat',
  'slideshow' => 'Slideshow',
  'stop_slideshow' => 'STOP SLIDESHOW',
  'view_fs' => 'Klik untuk melihat ukuran besar',
  'edit_pic' => 'Ubah informasi file', 
  'crop_pic' => 'Ubah dan Putar', 
  'set_player' => 'Ganti player',
);

$lang_picinfo = array(
  'title' =>'Informasi file',
  'Filename' => 'Nama file',
  'Album name' => 'Nama album',
  'Rating' => 'dipilih (%s Suara)',
  'Keywords' => 'Katakunci',
  'File Size' => 'Ukuran file',
  'Date Added' => 'Tanggal dimasukkan', //cpg1.4
  'Dimensions' => 'Dimensi',
  'Displayed' => 'Tampilkan',
  'URL' => 'URL', //cpg1.4
  'Make' => 'Buat', //cpg1.4
  'Model' => 'Model', //cpg1.4
  'DateTime' => 'Tanggal Jam', //cpg1.4
  'DateTimeOriginal' => 'Tanggal Jam original', //cpg1.4
  'ISOSpeedRatings'=>'ISO', //cpg1.4
  'MaxApertureValue' => 'Maksimum celah (aperture)', //cpg1.4
  'FocalLength' => 'Panjang fokal',
  'Comment' => 'Komentar',
  'addFav'=>'Masuka ke favorit',
  'addFavPhrase'=>'Favorit',
  'remFav'=>'Hapus dari favorit',
  'iptcTitle'=>'Judul IPTC', 
  'iptcCopyright'=>'Copyright IPTC', 
  'iptcKeywords'=>'Kata kunci IPTC', 
  'iptcCategory'=>'Kategori IPTC', 
  'iptcSubCategories'=>'Anak kategori IPTC', 
  'ColorSpace' => 'Ruang warna', //cpg1.4
  'ExposureProgram' => 'Program exposisi', //cpg1.4
  'Flash' => 'Flash', //cpg1.4
  'MeteringMode' => 'Mode meteran', //cpg1.4
  'ExposureTime' => 'Exposisi waktu', //cpg1.4
  'ExposureBiasValue' => 'Bias exposure', //cpg1.4
  'ImageDescription' => ' Deskripsi gambar', //cpg1.4
  'Orientation' => 'Orientasi', //cpg1.4
  'xResolution' => 'Resolusi X', //cpg1.4
  'yResolution' => 'Resolusi Y', //cpg1.4
  'ResolutionUnit' => 'Resolusi unit', //cpg1.4
  'Software' => 'Software (perangkat lunak)', //cpg1.4
  'YCbCrPositioning' => 'Elemen konfigurasi YCbCr', //cpg1.4
  'ExifOffset' => 'Exif Offset', //cpg1.4
  'IFD1Offset' => 'IFD1 Offset', //cpg1.4
  'FNumber' => 'FNumber', //cpg1.4
  'ExifVersion' => 'Versi Exif', //cpg1.4
  'DateTimeOriginal' => 'TanggalJam sebenarnya', //cpg1.4
  'DateTimedigitized' => 'TanggalJam angka', //cpg1.4
  'ComponentsConfiguration' => 'konfigurasi komponen', //cpg1.4
  'CompressedBitsPerPixel' => 'Kompres bit per pixel', //cpg1.4
  'LightSource' => 'Sumber cahaya', //cpg1.4
  'ISOSetting' => 'Settingan ISO', //cpg1.4
  'ColorMode' => 'Mode warna', //cpg1.4
  'Quality' => 'Kualitas', //cpg1.4
  'ImageSharpening' => 'Ketajaman gambar', //cpg1.4
  'FocusMode' => 'Mode jarak (focus)', //cpg1.4
  'FlashSetting' => 'Konfigurasi Flash', //cpg1.4
  'ISOSelection' => 'Pilihan ISO', //cpg1.4
  'ImageAdjustment' => 'Adjust gambar', //cpg1.4
  'Adapter' => 'Adapter', //cpg1.4
  'ManualFocusDistance' => 'Manual Focus Distance', //cpg1.4
  'DigitalZoom' => 'Digital Zoom', //cpg1.4
  'AFFocusPosition' => 'Posisi Fokus AF', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'NoiseReduction' => 'Noise reduction', //cpg1.4
  'FlashPixVersion' => 'Flash Pix Version', //cpg1.4
  'ExifImageWidth' => 'Dimensi lebar pixel X', //cpg1.4
  'ExifImageHeight' => 'Dimensi tinggi pixel y', //cpg1.4
  'ExifInteroperabilityOffset' => 'Exif interoperability Offset', //cpg1.4
  'FileSource' => 'Sumber file', //cpg1.4
  'SceneType' => 'Tipe scene', //cpg1.4
  'CustomerRender' => 'Customer Render', //cpg1.4
  'ExposureMode' => 'Mode exposisi', //cpg1.4
  'WhiteBalance' => 'Keseimbangan putih', //cpg1.4
  'DigitalZoomRatio' => 'Digital Rasio zoom', //cpg1.4
  'SceneCaptureMode' => 'Scene Capture mode', //cpg1.4
  'GainControl' => 'Menambah kontrol', //cpg1.4
  'Contrast' => 'Kontras', //cpg1.4
  'Saturation' => 'Saturation', //cpg1.4
  'Sharpness' => 'Ketajaman', //cpg1.4
  'ManageExifDisplay' => 'Atur tampilan Exif', //cpg1.4
  'submit' => 'Mengajukan', //cpg1.4
  'success' => 'Informasi perbaharui berhasil.', //cpg1.4
  'details' => 'Detil', //cpg1.4
);

$lang_display_comments = array(
  'OK' => 'OK',
  'edit_title' => 'Ubah komentar ini',
  'confirm_delete' => 'Apakah kamu yakin ingin menghapus komentar ini?',//js-alert
  'add_your_comment' => 'Tambah komentar mu',
  'name'=>'Nama',
  'comment'=>'Komentar',
  'your_name' => 'Tamu',
  'report_comment_title' => 'Laporkan komentar ini ke administrasi', //cpg1.4
);

$lang_fullsize_popup = array(
  'click_to_close' => 'Klik gambar untuk menutup window ini',
);

}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP') || defined('DISPLAYECARD_PHP')) $lang_ecard_php =array(
  'title' => 'Kirim sebuah ecard',
  'invalid_email' => '<b>Perhatian</b> : Alamat email salah;!',
  'ecard_title' => 'Sebuah ecard dari %s , untuk kamu',
  'error_not_image' => 'Hanya gambar yang bisa dikirim dengan ecard.', 
  'view_ecard' => 'Alternatif link bila ecard tidak tampil dengan benar',
  'view_ecard_plaintext' => 'Untuk melihat ecard, salin dan paste Url di bar alamat browser kamu:', //cpg1.4
  'view_more_pics' => 'Lihat gambar lagi !',
  'send_success' => 'Ecard kamu telah dikirim',
  'send_failed' => 'Maaf server tidak bisa mengirim ecard kamu...',
  'from' => 'Dari',
  'your_name' => 'Nama kamu',
  'your_email' => 'Alamat email kamu',
  'to' => 'Ke',
  'rcpt_name' => 'Nama penerima',
  'rcpt_email' => 'Alamat email penerima',
  'greetings' => 'Judul',
  'message' => 'Pesan',
  'ecards_footer' => 'Dikirim oleh %s dari alamat IP %s pada %s (Waktu galeri)', //cpg1.4
  'preview' => 'Lihat sebelum kirim ecardnya', //cpg1.4
  'preview_button' => 'Lihat sebelum kirim', //cpg1.4
  'submit_button' => 'Kirim ecard', //cpg1.4
  'preview_view_ecard' => 'Ce sera le lien inclu à la carte électronique lorsqu\'elle sera générée. Ne fonctionne pas pour les prévisualisations.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File report_file.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP') || defined('DISPLAYREPORT_PHP')) $lang_report_php =array(
  'title' => 'Lapor ke administrasi', //cpg1.4
  'invalid_email' => '<b>Perhatian</b> : alamat email salah', //cpg1.4
  'report_subject' => 'Sebuah laporan %s dalam galeri %s', //cpg1.4
  'view_report' => 'Alternatif link bila laporan tidak tampil dengan benar', //cpg1.4
  'view_report_plaintext' => 'Untuk melihat laporan, salin dan paster this url di bar alamat browser kau:', //cpg1.4
  'view_more_pics' => 'Galeri', //cpg1.4
  'send_success' => 'Laporan telah dikirim', //cpg1.4
  'send_failed' => 'Maaf server tidak bisa mengirim laporan kamu...', //cpg1.4
  'from' => 'Dari', //cpg1.4
  'your_name' => 'Nama kamu', //cpg1.4
  'your_email' => 'Alamat email kamu', //cpg1.4
  'to' => 'ke', //cpg1.4
  'administrator' => 'Administrasi', //cpg1.4
  'subject' => 'Tentang', //cpg1.4
  'comment_field_name' => 'Laporan ditulis oleh "%s" ', //cpg1.4
  'reason' => 'Alasan', //cpg1.4
  'message' => 'Pesan', //cpg1.4
  'report_footer' => 'Dikirim oleh %s dari alamat IP %s pada %s (Waktu galeri)', //cpg1.4
  'obscene' => 'luar topik', //cpg1.4
  'offensive' => 'menyerang', //cpg1.4
  'misplaced' => 'ga nyambung/gak sesuai', //cpg1.4
  'missing' => 'hilang', //cpg1.4
  'issue' => 'Keliru/tidak bisa dilihat', //cpg1.4
  'other' => 'lainnya', //cpg1.4
  'refers_to' => 'Laporan file rujuk ke', //cpg1.4
  'reasons_list_heading' => 'Alasan di laporkan:', //cpg1.4
  'no_reason_given' => 'Tidak ada alasan diberi', //cpg1.4
  'go_comment' => 'Ke komentar', //cpg1.4
  'view_comment' => 'Lihat semua laporan dari komentar ini', //cpg1.4
  'type_file' => 'file', //cpg1.4
  'type_comment' => 'Komentar', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) $lang_editpics_php = array(
  'pic_info' => 'Informasi file',
  'album' => 'Album',
  'title' => 'Judul',
  'filename' => 'Nama file', //cpg1.4
  'desc' => 'Deskripsi',
  'keywords' => 'Kata kunci',
  'new_keyword' => 'Kata kunci baru', //cpg1.4
  'new_keywords' => 'ditemukan Kata kunci baru', //cpg1.4
  'existing_keyword' => 'Kata kunci sekarang', //cpg1.4
  'pic_info_str' => '%sx%s - %sKb - %s kali dilihat - %s suara',
  'approve' => 'Izinkan file',
  'postpone_app' => 'Tunda izin',
  'del_pic' => 'Hapus file',
  'del_all' => 'Hapus semua file', //cpg1.4
  'read_exif' => 'Tampil info EXIF kembali', 
  'reset_view_count' => 'Reset hitungan berapa kali dilihat ',
  'reset_all_view_count' => 'Reset semua hitungan berapa kali dilihat', //cpg1.4
  'reset_votes' => 'Reset suara',
  'reset_all_votes' => 'Reset semua suara', //cpg1.4
  'del_comm' => 'Hapus komentar',
  'del_all_comm' => 'Hapus semua komentar', //cpg1.4
  'upl_approval' => 'izin upload',
  'edit_pics' => 'Ubah file',
  'see_next' => 'Lihat file selanjutnya',
  'see_prev' => 'Lihat file sebelumnya',
  'n_pic' => '%s file',
  'n_of_pic_to_disp' => 'Jumlah file untuk ditampilkan',
  'apply' => 'Pakai modifikasi',
  'crop_title' => 'Coppermine Foto Editor', 
  'preview' => 'Preview', 
  'save' => 'Simpan gambar', 
  'save_thumb' =>'Simpan sebagai thumbnail', 
  'gallery_icon' => 'Buat ini sebagai ikon ku', //cpg1.4
  'sel_on_img' =>'Yang dipilih harus semua gambar', //js-alert 
  'album_properties' =>'Album properti', //cpg1.4
  'parent_category' =>'Kategori orangtua (parent)', //cpg1.4
  'thumbnail_view' =>'Lihat thumbnail', //cpg1.4
  'select_unselect' =>'pilih/non-pilih semua', //cpg1.4
  'file_exists' => "File yang dituju '%s' sudah ada", //cpg1.4
  'rename_failed' => "tidak memungkinkan di rubah namanya '%s' ke '%s'.", //cpg1.4
  'src_file_missing' => "Sumber file '%s'hilang.", // cpg 1.4
  'mime_conv' => "File tidak bisa diubah dari '%s' ke '%s'",//cpg1.4
  'forb_ext' => 'Tidak diizinkan ekstensi file.',//cpg1.4
);

// ------------------------------------------------------------------------- //
// File faq.php
// ------------------------------------------------------------------------- //

if (defined('FAQ_PHP')) $lang_faq_php = array(
  'faq' => 'Pertanyaan sering ditanyakan(faq)', 
  'toc' => 'Daftar isi', 
  'question' => 'Pertanyaan : ', 
  'answer' => 'Jawaban : ', 
);

if (defined('FAQ_PHP')) $lang_faq_data = array(
  '<br>Umum tanya-jawab<br>',
  array('Kenapa aku harus register?', 'Registrasi mungkin atau tidak dimungkin dibutuh kan oleh administrati. Registrasi memberikan tambahan fitur seperti upload, mempunyai daftar favorit, rating gambar dan, memberi komentar dan lain lain...', 'allow_user_registration', '0'), //cpg1.4
  array('Bagaimana saya registrasi (login)?', 'Ke &quot;Registrasi&quot; dan isi formulir yang diperlukan (dan yang lainnya bila kamu mau).<br />bila admin mengaktifkan emil aktifasi, kemudian setelah mengirim semua inforasi kamu seharusnya mendapatkan email di email yang telah kamu masukkan sebelumnya. kamu diberi instruksi dengan bagaimana mengaktifkan keanggotaan kamu. Ke anggotaan kamu mesti aktif untuk kamu bisa masuk (login).', 'allow_user_registration', '1'), //cpg1.4
  array('Bagaimana cara login?', 'Klik &quot;Login&quot;, masukkan nama login dan password anda lalu tandai &quot;Ingat Saya&quot; agar anda tetap login ke situs ini walaupun anda meninggalkan situs ini.<br /><b>PENTING: Cookie harus diaktifkan dan cookie dari situs ini tidak boleh dihapus untuk menggunakan fungsi &quot;Ingat Saya&quot;.</b>', 'offline', 0), 
  array('Mengapa saya tidak bisa login?', 'Apakah anda telah mendaftar dan mengklik link yang dikirimkan kepada anda lewat email?. Link tersebut akan mengaktifkan keanggotaan anda. Untuk masalah login yang lain silahkan hubungi administrator.', 'offline', 0), 
  array('Bagaimana jika saya lupa password?', 'Jika situs ini memiliki link &quot;Lupa password&quot;, anda bisa menggunakannya. Jika tidak hubungi administrator situs untuk mendapatkan password baru.', 'offline', 0), 
  //array('Bagaimana jika saya menganti alamat email saya?', 'Login dan ganti alamat email anda melalui &quot;Profil&quot;', 'offline', 0), 
  array('Bagaimana cara menyimpan file kedalam &quot;Favoritku&quot;?', 'Klik foto kemudian klik link &quot;info foto&quot; (<img src="images/info.gif" width="16" height="16" border="0" alt="Informasi Foto" />); scroll ke arah bawah foto dan klik link &quot;Tambahkan ke favorit&quot;.<br />Administrator mungkin menampilkan &quot;informasi foto&quot; secara default.<br />PENTING:Cookie harus diaktifkan dan cookie dari situs ini tidak boleh dihapus.', 'offline', 0), 
  array('Bagaimana cara menilai file?', 'Klik thumbnail file, scroll kebawah kemudian pilih nilai.', 'offline', 0), 
  array('Bagaimana cara mengirim komentar untuk file?', 'Klik thumbnail file, scroll kebawah kemudian kirim komentar.', 'offline', 0), 
  array('Bagaimana cara mengupload file?', 'Klik &quot;Upload Foto&quot;, pilih album tempat anda ingin memasukkan foto, klik &quot;Browse&quot; untuk mencari foto yang akan anda upload  kemudian klik &quot;open&quot; (tambahkan judul dan keterangan jika anda mau) dan klik &quot;Upload File&quot;.', 'allow_private_albums', 0), 
  array('Kemana saya mengupload file?', 'Anda bisa mengupload file ke salah satu album anda di &quot;Galeriku&quot;. Administrator situs juga mungkin mengizinkan anda mengupload foto ke satu atau beberapa album di Galeri Utama.', 'allow_private_albums', 0), 
  array('Apa jenis file dan berapa ukuran file yang bisa saya upload?', 'Ukuran dan jenis file (jpg, png etc.) ditentukan oleh Administrator.', 'offline', 0), 
  array('Apa itu &quot;Galeriku&quot;?', '&quot;Galeriku&quot; adalah galeri pribadi dimana user bisa mengupload dan mengatur file.', 'allow_private_albums', 0), 
  array('Bagaimana cara membuat, merubah nama atau menghapus album dalam &quot;Galeriku&quot;?', 'Anda harus berada dalam &quot;Mode Admin&quot;<br />Klik &quot;Buat/Ubah Album&quot;klik &quot;Baru&quot;. Ganti &quot;Album baru&quot; dengan nama yang anda inginkan.<br />Anda juga bisa merubah nama album lain yang ada dalam galeri anda.<br />Klik &quot;Lakukan Perubahan&quot;.', 'allow_private_albums', 0), 
  array('Bagaimana cara merubah atau membatasi user dari melihat album saya?', 'Anda harus berada dalam &quot;Mode Admin&quot;<br />Klik &quot;Modifikasi Album&quot;. Pilih album yang akan anda modifikasi pada &quot;Update Album&quot;.<br />Disini anda bisa merubah judul, keterangan, image thumbnail, membatasi izin akses untuk melihat, mengirim komentar, maupun menilai.<br />Click &quot;Update Album&quot;.', 'allow_private_albums', 0), 
  array('Bagaimana cara melihat galeri user lain?', 'Klik &quot;Daftar Album&quot; dan pilih &quot;User Galleries&quot;.', 'allow_private_albums', 0), 
  array('Apa itu cookie?', 'Cookie adalah data berupa file teks yang dikirimkan dari sebuah situs web dan disimpan di komputer anda.<br />Cookie biasanya memudahkan user untuk meninggalkan sebuah situs dan kembali lagi ke situs tersebut tanpa harus login lagi serta beberapa fungsi lainnya.', 'offline', 0), 
  array('Dimana aku bisa mendapatkan program ini?', 'Coppermine adalah software Galeri Multimedia yang bersifat freeware, dibawah lisesnsi GNU GPL. Memiliki banyak fitur dan telah diport dan bisa digunakan di berbagai system. Kunjungi <a href="http://coppermine.sf.net/">Situs Web Coppermine</a> untuk informasi lebih lanjut atau untuk mendownloadnya.', 'offline', 0), 

  'Menjelajahi situs ini', 
  array('Apa itu &quot;Daftar Album&quot;?', 'Ini akan memperlihatkan kepada anda keseluruhan kategori dimana anda sedang berada, dengan link ke setiap album. Jika anda tidak berada dalam kategori, ia akan menampilkan keseluruhan galeri dengan link ke setiap kategori. Thumbnail juga bisa merupakan link ke kategori.', 'offline', 0), 
  array('Apa itu &quot;Galeriku&quot;?', 'Fitur ini memperbolehkan user untuk membuat galeri mereka sendiri dan menambahkan, menghapus atau merubah album serta mengupload file kedalamnya.', 'allow_private_albums', 0), 
  array('Apa perbedaan &quot;Mode Admin&quot; dan &quot;Mode User&quot;?', 'Fitur ini, saat berada dalam mode admin, memperbolehkan user untuk merubah galeri mereka (serta yang lain jika diizinkan oleh administrator).', 'allow_private_albums', 0), 
  array('Apa itu &quot;Upload File&quot;?', 'Fitur ini memperbolehkan user untuk mengupload file (ukuran dan jenis file ditentukan oleh administrator) kedalam galeri yang dipileh oleh anda atau administrator.', 'allow_private_albums', 0), 
  array('Apa itu &quot;Upload Terakhir&quot;?', 'Fitur ini menampilkan file-file yang terakhir diupload ke situs.', 'offline', 0), 
  array('Apa itu &quot;Komentar Terakhir&quot;?', 'Fitur ini menampilkan file yang terakhir dikomentari user.', 'offline', 0), 
  array('Apa itu &quot;Terbanyak Dilihat&quot;?', 'Fitur ini menampilkan file yang terbanyak dilihat oleh user (member maupun pengunjung).', 'offline', 0), 
  array('Apa itu &quot;Nilai Tertinggi&quot;?', 'Fitur ini menampilkan file yang memiliki nilai tertinggi, beserta nilai rata-ratanya (mis.: lima user masing - masing memberi nilai <img src="images/rating3.gif" width="65" height="14" border="0" alt="" />: foto akan mendapat nilai rata-rata <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> ; Lima user menilai foto mulai 1 sama 5 (1,2,3,4,5) akan mendapatkan rata-rata <img src="images/rating3.gif" width="65" height="14" border="0" alt="" /> .)<br />Nilai dimulai dari <img src="images/rating5.gif" width="65" height="14" border="0" alt="terbaik" /> (terbaik) sampai <img src="images/rating0.gif" width="65" height="14" border="0" alt="terburuk" /> (terburuk).', 'offline', 0), 
  array('Apa itu &quot;Favoritku&quot;?', 'Fitur ini membolehkan user menyimpan file favorit menggunakan cookie.', 'offline', 0), 
);



// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) $lang_forgot_passwd_php = array(
  'forgot_passwd' => 'Pengingat katasandi', 
  'err_already_logged_in' => 'Kamu sudah masuk!', 
  'enter_email' => 'Masukkan alamat email', 
  'submit' => 'kirim', 
  'illegal_session' => 'Sesi katasandi keliru atau telah expired.', //cpg1.4
  'failed_sending_email' => 'Katasandi pengingat tidak bisa dikirim!', 
  'email_sent' => 'Sebuah email dengan nama pemakai dan katasandi baru telah dikirim ke %s', 
  'verify_email_sent' => 'sebuah email telah dikirim ke %s. Cek email kamu untuk melengkapi proses.', //cpg1.4
  'err_unk_user' => 'Pilihan nama pemakai tidak ada!', 
  'account_verify_subject' => '%s - Meminta katasandi baru', //cpg1.4
  'account_verify_body' => 'Kamu telah meminta katasandi yang baru. Bila kamu ingin memproses dengan katasandi baru yang telah dikirm ke kamu, klik di link:

%s', //cpg1.4
  'passwd_reset_subject' => '%s - Katasandi baru kamu', 
  'passwd_reset_body' => 'Ini adalah katasandi baru kamu minta :
Nama pemakai: %s
Katasandi : %s
Klik %s untuk masuk.', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

if (defined('GROUPMGR_PHP')) $lang_groupmgr_php = array(
  'group_name' => 'Grup',
  'permissions' => 'Izin', //cpg1.4
  'public_albums' => 'Umum album upload', //cpg1.4
  'personal_gallery' => 'Galeri pribadi', //cpg1.4
  'upload_method' => 'Metode upload', //cpg1.4
  'disk_quota' => 'Kuota',
  'rating' => 'Rating', //cpg1.4
  'ecards' => 'Ecard', //cpg1.4
  'comments' => 'Komentar', //cpg1.4
  'allowed' => 'Izin', //cpg1.4
  'approval' => 'Diizinkan', //cpg1.4
  'boxes_number' => 'Jumlah kotak', //cpg1.4
  'variable' => 'variabel', //cpg1.4
  'fixed' => 'stabil', //cpg1.4
  'apply' => 'Pakai modifikasi',
  'create_new_group' => 'Buat grup baru',
  'del_groups' => 'Hapus grup yang dipilih',
  'confirm_del' => 'Perhatian, Ketika menghapus sebuah grup, pemakai kepunyaan grup tersebut akan di transfer ke grup yang telah di \'register\'!\n\nKamu ingin memproses?',//js-alert
  'title' => 'Atur grup pemakai',
  'num_file_upload' => 'Jumlah kotak upload', //cpg1.4
  'num_URI_upload' => 'Jumlah kotak URI', //cpg1.4
  'reset_to_default' => 'Ubah ke nama default (%s) - rekomendasi!', //cpg1.4
  'error_group_empty' => 'Tabel grup kosong!<br /><br />grup default dibuat, Refresh halaman ini', //cpg1.4
  'explain_greyed_out_title' => 'Kenapa barus ini keluar kelabu?', //cpg1.4
  'explain_guests_greyed_out_text' => 'Kamu tidak bisa mengganti properto dari grup ini karena set pilihan &quot; Izinkan tamu pemakai (tidak dikenal) akses &quot; ke &quot;No&quot; dalam halaman konfigurasi. Semua tamu (anggota dari grup %s) tidak bisa melakukan apa apa kecuali login; Dan grup setting tidak pengaruh ke mereka', //cpg1.4
  'explain_banned_greyed_out_text' => 'Kamu tidak bisa mengganti properti dari grup %s karena lagipula anggota tidak bisa melakukan apa apa la.', //cpg1.4
  'group_assigned_album' => 'album dipilih', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

if (defined('INDEX_PHP')){

$lang_index_php = array(
  'welcome' => 'Selamat datang!'
);

$lang_album_admin_menu = array(
  'confirm_delete' => 'Apakah kamu yakin ingin meng HAPUS album ini? \\nSemua file dan komentar akan juga dihapus.',//js-alert
  'delete' => 'HAPUS',
  'modify' => 'PROPERTI',
  'edit_pics' => 'RUBAH FILE',
);

$lang_list_categories = array(
  'home' => 'Halaman depan',
  'stat1' => '<b>[pictures]</b> file dalam <b>[albums]</b> album dan <b>[cat]</b> kategori dengan <b>[comments]</b> komentas dilihat <b>[views]</b> kali',
  'stat2' => '<b>[pictures]</b> file dalam <b>[albums]</b> album dilihat <b>[views]</b> kali',
  'xx_s_gallery' => '%s\ Galeri',
  'stat3' => '<b>[pictures]</b> file dalam <b>[albums]</b> albums dengan <b>[comments]</b> komentar dilihat <b>[views]</b> kali'
);

$lang_list_users = array(
  'user_list' => 'Daftar anggota',
  'no_user_gal' => 'Tidak ada galeri dari anggota pemakai',
  'n_albums' => '%s album',
  'n_pics' => '%s file',
);

$lang_list_albums = array(
  'n_pictures' => '%s file',
  'last_added' => ', terakhir ditambah pada %s',
  'n_link_pictures' => '%s file berhubungan', //cpg1.4
  'total_pictures' => '%s jumlah file', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File keywordmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('KEYWORDMGR_PHP')) $lang_keywordmgr_php = array(
  'title' => 'Mengatur kata kunci', //cpg1.4
  'edit' => 'rubah', //cpg1.4
  'delete' => 'hapus', //cpg1.4
  'search' => 'cari', //cpg1.4
  'keyword_test_search' => 'cari untuk %s dalam window baru', //cpg1.4
  'keyword_del' => 'hapus kata kunci %s', //cpg1.4
  'confirm_delete' => 'apakah kamu yakin untuk menghapus kata kunci %s dari seluruh galeri?', //cpg1.4  // js-alert
  'change_keyword' => 'rubah kata kunci', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //

if (defined('LOGIN_PHP')) $lang_login_php = array(
  'login' => 'masuk',
  'enter_login_pswd' => 'Masukan nama pemakai dan katasandi untuk masuk',
  'username' => 'Nama pemakai',
  'password' => 'Katasandi',
  'remember_me' => 'Ingatlah saya',
  'welcome' => 'Selamat datang %s ...',
  'err_login' => '*** Tidak bisa masuk. Coba kembali ***',
  'err_already_logged_in' => 'Kamu telah masuk!',
  'forgot_password_link' => 'Aku lupa katasandi ku!', 
  'cookie_warning' => 'Perhatian browser kamu tidak menerima skrip untuk cookies', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) $lang_logout_php = array(
  'logout' => 'Keluar',
  'bye' => 'Sampai jumpa %s ...',
  'err_not_loged_in' => 'Kamu belum masuk!',
);

// ------------------------------------------------------------------------- //
// File minibrowser.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('MINIBROWSER_PHP')) $lang_minibrowser_php = array(
  'close' => 'tutup', //cpg1.4
  'submit' => 'OK', //cpg1.4
  'up' => 'naik satu tingkat', //cpg1.4
  'current_path' => 'jalur (path) sekarang', //cpg1.4
  'select_directory' => 'pilih direktori', //cpg1.4
  'click_to_close' => 'Klik gambar untuk mentutup jendela ini',
);

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //

if (defined('MODIFYALB_PHP')) $lang_modifyalb_php = array(
  'upd_alb_n' => 'Perbaharui album %s',
  'general_settings' => 'Settingan umum',
  'alb_title' => 'Judul album',
  'alb_cat' => 'Kategori album',
  'alb_desc' => 'Deskripsi album',
  'alb_keyword' => 'Kata kunci album', //cpg1.4
  'alb_thumb' => 'Thumbnail album',
  'alb_perm' => 'Izin untuk album ini',
  'can_view' => 'Album bisa dilihat oleh',
  'can_upload' => 'Tamu bisa upload file',
  'can_post_comments' => 'Tamu bisa pos komentar',
  'can_rate' => 'Tamu bisa memberi rate ke file',
  'user_gal' => 'Galeri pemakai',
  'no_cat' => '* Tidak ada kategori *',
  'alb_empty' => 'Album kosong',
  'last_uploaded' => 'terakhir di upload',
  'public_alb' => 'semua orang (album umum)',
  'me_only' => 'Hanya saya',
  'owner_only' => 'Pemilik album (%s) saja',
  'groupp_only' => 'Anggota dari grup \'%s\'',
  'err_no_alb_to_modify' => 'No album yang kamu bisa rubah di database.',
  'update' => 'Perbaharui album',
  'reset_album' => 'Reset album', //cpg1.4
  'reset_views' => 'Reset jumlah file dilihat berapa kali ke &quot;0&quot; dalam %s', //cpg1.4
  'reset_rating' => 'Reset jumlah suara dalam semua file di %s', //cpg1.4
  'delete_comments' => 'hapus semua komentar dibuat di %s', //cpg1.4
  'delete_files' => '%Semua%s Hapus semua filedi %s', //cpg1.4
  'views' => 'lihat', //cpg1.4
  'votes' => 'suara', //cpg1.4
  'comments' => 'komentar', //cpg1.4
  'files' => 'file', //cpg1.4
  'submit_reset' => 'Pakai perubahan', //cpg1.4
  'reset_views_confirm' => 'saya yakin', //cpg1.4
  'notice1' => '(*) depending on %sgroups%s settings',  //cpg1.4 //(do not translate %s!)
  'alb_password' => 'Katasandi album', //cpg1.4
  'alb_password_hint' => 'Masukan katasandi album', //cpg1.4
  'edit_files' =>'Rubah file', //cpg1.4
  'parent_category' =>'Orangtua (parent) kategori', //cpg1.4
  'thumbnail_view' =>'lihat thumbnail', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //

if (defined('PHPINFO_PHP')) $lang_phpinfo_php = array(
  'php_info' => 'info PHP',
  'explanation' => 'Ini hasil yang dihasilkan oleh PHP-function <a href="http://www.php.net/phpinfo">phpinfo()</a>, ditampilkan dalam Coppermine (hasil kondisi ada di sebelah kanan).',
  'no_link' => 'Orang lain melihat phpinfo bisa menjadi resiko dalam keamana, ini kenapa halaman ini bisa dilihat oleh kamu ketika masuk sebagai admin. Kamu tidak bisa pos link ini ke lainnya, mereka tidak bisa mengakses.',
);

// ------------------------------------------------------------------------- //
// File picmgr.php //cpg1.4
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) $lang_picmgr_php = array(
  'pic_mgr' => 'Mengatur Gambar', //cpg1.4
  'select_album' => 'Pilih album', //cpg1.4
  'delete' => 'Hapus', //cpg1.4
  'confirm_delete1' => 'apakah kamu yakin ingin menghapus gambar ini ?', //cpg1.4
  'confirm_delete2' => '\nGambar akan dihapus permanen.', //cpg1.4
  'apply_modifs' => 'Setuju modifikasi', //cpg1.4
  'confirm_modifs' => 'Konfirmasi modifikasi', //cpg1.4
  'pic_need_name' => 'Gambar butuh sebuah nama!', //cpg1.4
  'no_change' => 'Kamu tidak membuat perubahan!', //cpg1.4
  'no_album' => '* tidak ada album *', //cpg1.4
  'explanation_header' => 'Penambahan urutan yang kamu berikan di halaman ini hanya akan dimasukan ke akun bila', //cpg1.4
  'explanation1' => 'Admin telah set "Default urutan untuk file" dalam konfigurasi ke "Posisi Urut dari terakhir" atau "Posisi dari awal" (Settingan global untuk semua pemakai dimana belum memakai pilihan urutan order tersendiri)', //cpg1.4
  'explanation2' => 'Pemakai telah memilih "Posisi dari terakhir" atau "Posisi dari awal" dalam halaman thumbnail (setiap settingan pemakai)', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File pluginmgr.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('PLUGINMGR_PHP')){

$lang_pluginmgr_php = array(
  'confirm_uninstall' => 'Apakah kamu yakin mau meng UNINSTALL plugin ini', //cpg1.4
  'confirm_delete' => 'Apakah kamu yakin mau meng HAPUS plugin ini', //cpg1.4
  'pmgr' => 'Mengatur Plugin', //cpg1.4
  'name' => 'Nama', //cpg1.4
  'author' => 'Pembuat', //cpg1.4
  'desc' => 'Deskripsi', //cpg1.4
  'vers' => 'v', //cpg1.4
  'i_plugins' => 'Plugin dipakai', //cpg1.4
  'n_plugins' => 'Plugin tidak dipakai', //cpg1.4
  'none_installed' => 'tidak ada installasi', //cpg1.4
  'operation' => 'Operasi', //cpg1.4
  'not_plugin_package' => 'File yang diupload bukan paket buat plugin.', //cpg1.4
  'copy_error' => 'Ada suatu kesalahan menyalin paket ke folder plugin.', //cpg1.4
  'upload' => 'Upload', //cpg1.4
  'configure_plugin' => 'Konfigurasi plugin', //cpg1.4
  'cleanup_plugin' => 'Bersihkan plugin', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //

if (defined('RATEPIC_PHP')) $lang_rate_pic_php = array(
  'already_rated' => 'Kamu sudah memberi suara di file ini',
  'rate_ok' => 'Suara kamu sudah diterima',
  'forbidden' => 'Kamu tidak bisa memberi suara file sendiri.', 
);

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //

if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {

$lang_register_disclamer = <<<EOT
Dimana admin {SITE_NAME} dapat memindahkan, hapus, atau mengubah setiap material (gambar, video, objek) secara cepat, adalah tidak memungkinkan untuk memeriksa setiap pos/gambar/video yang telah dibuat. Oleh karena itu apa yang kamu pos/upload di website ini haruslah anda tahu dengan jelas dengan melihat dengan melihat dan opini dari pembuat pos/gambar/video dan bukan pertanggung jawabn dari admin atau webmaster (kecuali pos yang dibuat oleh mereka sendiri).<br/>
<br />
Kamu setuju untuk tidak memasang kata/gambar/video yang menghina, cabul, vulgar, memfitnah, kebencian, mengancam, seks orientasi dan semua materi yang mungkin melanggar hukum. Kamu setuju bahwa admin, webmaster, dan moderator of {SITE_NAME} punya hak untuk menghapus, mengubah setiap gambar/kata/video setiap saat mereka mau. Sebagai user kamu setuju setiap informasi yang kamu berikan akan disimpan di database. Dimana informasi ini tidak akan memperlihatkan kepada pihak ketiga tanpa persetujuan dari webmaster dan admin tidak dapat bertanggung jawab setiap perusakan yang mungkin menghancurkan data dan fatal akibatnya.<br/>
<br />
Website ini mengunakan sistem cookies untuk menyimpan informasi dikomputer lokal. Cookies ini hanya melayani untuk meningkatkan kinerja website. Alamat email digunakan untuk konfirmasi detail dari registrasi dan kata sandi(password).<br/>
<br />
Dengan meng-klik 'Saya setuju' dibawah kamu setuju dengan peraturan dan larangan diatas.<br/>
EOT;

$lang_register_php = array(
  'page_title' => 'Registrasi pemakai',
  'term_cond' => 'Syarat dan kondisi',
  'i_agree' => 'Saya setuju',
  'submit' => 'Kirim registrasi',
  'err_user_exists' => 'Nama pemakai yang kamu pilih sudah dipakai, pilih yang nama yang lain',
  'err_password_mismatch' => 'dua katasandi tidak samam, masukan mereka sekali lagi',
  'err_uname_short' => 'Nama pemakai mesti lebih dari 2 huruf',
  'err_password_short' => 'Katasandi mesti lebih dari 2 huruf',
  'err_uname_pass_diff' => 'Nama pemakai dan katasandi mesti berbeda',
  'err_invalid_email' => 'Alamat email salah',
  'err_duplicate_email' => 'Orang lain telah registrasi dengan email yang telah kamu masukkan',
  'enter_info' => 'Masukkan informasi registrasi',
  'required_info' => 'Informasi yang diperlukan',
  'optional_info' => 'Informasi bebas',
  'username' => 'Nama pemakai',
  'password' => 'Katasandi',
  'password_again' => 'Masukkan kembali katasandi',
  'email' => 'Email',
  'location' => 'Lokasi',
  'interests' => 'Kesukaan',
  'website' => 'Website',
  'occupation' => 'Pekerjaan',
  'error' => 'KELIRU',
  'confirm_email_subject' => '%s - Konfirmasi register',
  'information' => 'Informasi',
  'failed_sending_email' => 'Konfirmasi email tidak bisa dikirim!',
  'thank_you' => 'Terima kasih telah registrasi.<br /><br />Sebuah email dengan informasi bagaimana cara untuk mengaktifkan telah dikirim ke email yang kamu berikan.',
  'acct_created' => 'Akun kamu telah dibuat dan aktif dan kamu sekarang bisa masuk dengan nama pemakai dan katasandi',
  'acct_active' => 'Akun kamu sudah aktif dan kamu bisa masuk dengan nama pemakai dan katasandi',
  'acct_already_act' => 'Akun sudah aktif!',
  'acct_act_failed' => 'Akun ini tidak bisa diaktifkan!',
  'err_unk_user' => 'Pilihan user pemakai tidak ada!',
  'x_s_profile' => 'Profil  %s',
  'group' => 'Grup',
  'reg_date' => 'Tanggal registrasi',
  'disk_usage' => 'Memori dipakai',
  'change_pass' => 'Rubah katasandi',
  'current_pass' => 'Katasandi sekarang',
  'new_pass' => 'Katasandi baru',
  'new_pass_again' => 'Katasandi baru lagi',
  'err_curr_pass' => 'Katasandi baru salah',
  'apply_modif' => 'Setuju modifikasi',
  'change_pass' => 'Ganti katasandiku',
  'update_success' => 'Profil kamu telah diperbaharui',
  'pass_chg_success' => 'Katasandi kamu telah diperbaharui',
  'pass_chg_error' => 'Katasandi kamu tidak berubah',
  'notify_admin_email_subject' => '%s - Catatan registrasi',
  'last_uploads' => 'File terakhir diupload.<br />Klik untuk melihat semua upload oleh', //cpg1.4
  'last_comments' => 'Komentar terakhir.<br />Klik untuk melihay semua komentar dibuat oleh', //cpg1.4
  'notify_admin_email_body' => 'Sebuah pemakai baru dengan nama pemakai %s telah register di galeri kamu',
  'pic_count' => 'File di upload', //cpg1.4
  'notify_admin_request_email_subject' => '%s - Permohonan registrasi', //cpg1.4
  'thank_you_admin_activation' => 'Terima kasih.<br /><br />Permohonan kamu untuk aktifasi akun telah dikirim ke admin. Kamu akan mendapatkan email bila diterima', //cpg1.4
  'acct_active_admin_activation' => 'Akun sekarang aktif dan sebuah email telah dikirim ke pemakai.', //cpg1.4
  'notify_user_email_subject' => '%s - Pemberitahuan aktifasi', //cpg1.4
);

$lang_register_confirm_email = <<<EOT
Terima kasih telah register di {SITE_NAME}

Untuk mengaktifkan akun kamu dengan nama pemakai "{USER_NAME}", Kamu perlu klik link dibawah atau salin dan paste di web browser kamu.

<a href="{ACT_LINK}">{ACT_LINK}</a>

Salam,

Managemen dari {SITE_NAME}

EOT;

$lang_register_approve_email = <<<EOT
Seorang pemakai dengan nama pemakai "{USER_NAME}" telah register di galeri kamu.

Untuk mengaktifkan akun, kamu perlu klik link dibawah atau salin dan paste di browser kamu.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_activated_email = <<<EOT
Akun kamu telah di kasih izin dan aktif.

Kamu bisa masuk di <a href="{SITE_LINK}">{SITE_LINK}</a> Menggunakan nama pemakai "{USER_NAME}"


Salam,

Managemen {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //

if (defined('REVIEWCOM_PHP')) $lang_reviewcom_php = array(
  'title' => 'Evaluasi komentar',
  'no_comment' => 'Tidak ada komentar untuk di evaluasi',
  'n_comm_del' => '%s komentar dihapus',
  'n_comm_disp' => 'Jumlah komentar untuk ditampilkan',
  'see_prev' => 'Lihat sebelumnya',
  'see_next' => 'Lihat selanjutnya',
  'del_comm' => 'Hapus komentar yang dipilih',
  'user_name' => 'Nama', //cpg1.4
  'date' => 'Tanggal', //cpg1.4
  'comment' => 'Komentar', //cpg1.4
  'file' => 'File', //cpg1.4
  'name_a' => 'urut nama dari awal', //cpg1.4
  'name_d' => 'urut nama dari akhir', //cpg1.4
  'date_a' => 'Urut tanggal dari awal', //cpg1.4
  'date_d' => 'Urut tanggal dari akhir', //cpg1.4
  'comment_a' => 'Urut pesan komentar dari awal', //cpg1.4
  'comment_d' => 'Urut pesan komentar dari akhir', //cpg1.4
  'file_a' => 'Urut file dari awal', //cpg1.4
  'file_d' => 'Urut file dari akhir', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File search.php                                                           //
// ------------------------------------------------------------------------- //


if (defined('SEARCH_PHP')){

$lang_search_php = array(
  'title' => 'Cari koleksi file', //cpg1.4
  'submit_search' => 'cari', //cpg1.4
  'keyword_list_title' => 'daftar katakunci', //cpg1.4
  'keyword_msg' => 'Data diatas tidak termasuk semua. Semua tidak termasuk kata-kata dari judul foto atau deskripsi.',  //cpg1.4
  'edit_keywords' => 'Rubah katakunci', //cpg1.4
  'search in' => 'Cari di :', //cpg1.4
  'ip_address' => 'Alamat IP', //cpg1.4
  'fields' => 'Cari di', //cpg1.4
  'age' => 'Usia', //cpg1.4
  'newer_than' => 'Baru daripada', //cpg1.4
  'older_than' => 'Lama daripada', //cpg1.4
  'days' => 'hari', //cpg1.4
  'all_words' => 'Sesuaikan semua kata (dan)', //cpg1.4
  'any_words' => 'Sesuaikan setiap kata (atau)', //cpg1.4
);

$lang_adv_opts = array(
  'title' => 'Judul', //cpg1.4
  'caption' => 'Catatan', //cpg1.4
  'keywords' => 'Kata kunci', //cpg1.4
  'owner_name' => 'Nama pemilik', //cpg1.4
  'filename' => 'Nama file', //cpg1.4
);

}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //

if (defined('SEARCHNEW_PHP')) $lang_search_new_php = array(
  'page_title' => 'cari file baru',
  'select_dir' => 'Pilih direktori',
  'select_dir_msg' => 'Fungsi ini mengizinkan kamu untuk menambah file dari yang kamu upload dengan FTP ke server.<br /><br />Pilih kategori dimana kamu upload file tersebut',
  'no_pic_to_add' => 'Tidak ada file yang di tambah',
  'need_one_album' => 'Kamu paling tidak membutuhkan satu album untuk menggunakan fungsi ini',
  'warning' => 'Peringatan',
  'change_perm' => 'Skrip tidak bisa di tulis di dalam direktori ini, kamu perlu ubah mode dari 755 atau 777 sebelum mencoba menambahkan file!',
  'target_album' => '<b>Taruh file &quot;</b>%s<b>&quot; kedalam </b>%s',
  'folder' => 'Folder',
  'image' => 'file',
  'album' => 'Album',
  'result' => 'Hasil',
  'dir_ro' => 'Tidak bisa di tulis. ',
  'dir_cant_read' => 'Tidak bisa di baca. ',
  'insert' => 'Tambah file baru ke galeri',
  'list_new_pic' => 'daftar file baru',
  'insert_selected' => 'Masukkan file yang dipilih',
  'no_pic_found' => 'Tidak ada file baru yang ditemukan',
  'be_patient' => 'Harap sabar. Skrip butuh waktu untuk memasukan file',
  'no_album' => 'Tidak ada album yang dipilih',
  'result_icon' => 'Klik untuk lebih jelas atau refresh',  //cpg1.4
  'notes' =>  '<ul>'.
                          '<li><b>OK</b> : Maksudnya file berhasil dimasukkan'.
                          '<li><b>DP</b> : Maksudnya file adalah duplikat dan sudah ada di dalam database'.
                          '<li><b>PB</b> : Maksudnya file tidak bisa dimasukkan, cek konfigurasi kamu dan izin direktori kamu dimana file terletak'.
                          '<li><b>NA</b> : Maksudnya file mau kamu masukan belum dipilih album mana akan dimasukkan, klik \'<a href="javascript:history.back(1)">kembali</a>\' dan pilih album. Bila kamu tidak punya album <a href="albmgr.php">bikin dahulu</a></li>'.
                          '<li>Bila tanda OK, DP, PB tidak terlihat, klik ke link yang rusak dan lihat setiap pesan keliru yang dibuat oleh PHP'.
                          '<li>Bila browser timeout, tekan tombol refresh.'.
                          '</ul>',
  'select_album' => 'Pilih album',
  'check_all' => 'ceks semua', 
  'uncheck_all' => 'Jangan cek semua', 
  'no_folders' => 'Tidak ada folder didalamfolder "albums". Yakinkan untuk membuat paling tidak satu folder dalam folder "albums" dan pakai ftp-upload file kesana. Kamu mesti tidak upload ke folder "userpics" atau "edit", Mereka di pesan untuk http-upload dan tujuan lainnya.', //cpg1.4
   'albums_no_category' => 'Album tanpa kategori', //cpg1.4 // album pulldown mod, added by frogfoot
  'personal_albums' => '* Album pribadi', //cpg1.4 // album pulldown mod, added by frogfoot
  'browse_batch_add' => 'Interface browse (rekomendasi)', //cpg1.4
  'edit_pics' => 'Rubah file', //cpg1.4
  'edit_properties' => 'Album properti', //cpg1.4
  'view_thumbs' => 'Lihat thumbnail', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File stat_details.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) $lang_stat_details_php = array(
  'show_hide' => 'tampilkan / sembunyikan kolom ini', //cpg1.4
  'vote' => 'Detil suara', //cpg1.4
  'hits' => 'Detil hit', //cpg1.4
  'stats' => 'Statistik suara', //cpg1.4
  'sdate' => 'Tanggal', //cpg1.4
  'rating' => 'Rating', //cpg1.4
  'search_phrase' => 'cari frase', //cpg1.4
  'referer' => 'dari', //cpg1.4
  'browser' => 'Browser', //cpg1.4
  'os' => 'Sistem Operasi', //cpg1.4
  'ip' => 'IP', //cpg1.4
  'sort_by_xxx' => 'Urut dari %s', //cpg1.4
  'ascending' => 'awal', //cpg1.4
  'descending' => 'akhir', //cpg1.4
  'internal' => 'dalam', //cpg1.4
  'close' => 'tutup', //cpg1.4
  'hide_internal_referers' => 'sembunyikan darimana datangnya', //cpg1.4
  'date_display' => 'Tampilkan tanggal', //cpg1.4
  'submit' => 'Ajukan / refresh', //cpg1.4
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
  'custom_title' => 'Tambahkan formulir permohonan',
  'cust_instr_1' => 'Kamu boleh menambah jumlah kotak untuk upload. Bagaimanapun, kamu tidak diperbolehkan pilih lebih dari jumlah batasan dibawah.',
  'cust_instr_2' => 'Jumlah kotak permohonan',
  'cust_instr_3' => 'Kotak upload file : %s',
  'cust_instr_4' => 'Kotak upload URI/URL : %s',
  'cust_instr_5' => 'Kotak upload URI/URL :',
  'cust_instr_6' => 'Kotak upload file :',
  'cust_instr_7' => 'Masukkan nomot setiap tipe kotak box yang kamu mau disaat ini. Kemudian klik \'Lanjut\'. ',
  'reg_instr_1' => 'aksi keliru dari pembuatan formulir.',
  'reg_instr_2' => 'Kamu sekarang bisa upload file menggunakan kotak upload dibawah. Ukuran file upload dari client ke server seharusnya tidak lebih %s Kb masing file. File ZIP upload di \'Upload de fichier\' dan \'Upload URI/URL\' bagian akan tinggal mengkompres.',
  'reg_instr_3' => 'Bila kamu mau file yang di ZIP atau di arsip untuk tidak dikompres, kamu mesti menggunakan kotak file upload yang tersedia di \'Tidak kompres file ZIP\'',
  'reg_instr_4' => 'Ketika menggunakan bagian upload URI/URL, masukkan jalur (path) file seperti http://www.nama-website.com/images/contoh.jpg',
  'reg_instr_5' => 'Ketika kamu telah selesai, klik \'lanjut\'.',
  'reg_instr_6' => 'Tidak kompres file ZIP:',
  'reg_instr_7' => 'Upload file :',
  'reg_instr_8' => 'Upload URI/URL :',
  'error_report' => 'Laporkan keliru',
  'error_instr' => 'Upload ini terdapat masalah :',
  'file_name_url' => 'Nama file / URL',
  'error_message' => 'Pesan keliru',
  'no_post' => 'File tidak diupload dengan POST.',
  'forb_ext' => 'Tidak diperbolehkan ekstensi file.',
  'exc_php_ini' => 'Melebihi ukuran file dalam php.ini.',
  'exc_file_size' => 'Melebihi ukuran file dalam Coppermine.',
  'partial_upload' => 'Upload hanya partial.',
  'no_upload' => 'Tidak ada upload terjadi.',
  'unknown_code' => 'Tidak diketahui kode keliru upload php.',
  'no_temp_name' => 'Tidak ada upload - Tidak ada nama temp.',
  'no_file_size' => 'Tidak ada data/korup',
  'impossible' => 'Tidak mungkin di pindah.',
  'not_image' => 'Bukan gambar/korup',
  'not_GD' => 'Tidak ada ekstensi GD.',
  'pixel_allowance' => 'Tinggi atau lebar file lebih dari yang diizinkan di konfigurasi galeri.', //cpg1.4
  'incorrect_prefix' => 'Prefix URI/URL salah',
  'could_not_open_URI' => 'Tidak bisa buka URI.',
  'unsafe_URI' => 'Tidak aman URI.',
  'meta_data_failure' => 'Data meta rusak',
  'http_401' => '401 tidak ada izin',
  'http_402' => '402 Butuh pembayaran',
  'http_403' => '403 Dilarang',
  'http_404' => '404 Tidak ditemukan',
  'http_500' => '500 Rusak dalam server',
  'http_503' => '503 Pelayanan tidak tersedia',
  'MIME_extraction_failure' => 'Tipe MIME tidak bisa ditentukan.',
  'MIME_type_unknown' => 'Tipe MIME tidak diketahui',
  'cant_create_write' => 'Tidak bisa menulis file.',
  'not_writable' => 'Tidak bisa tulis untuk menulis file.',
  'cant_read_URI' => 'Tidak bisa menbaca URI/URL',
  'cant_open_write_file' => 'Tidak bisa membuka tulisan file URI.',
  'cant_write_write_file' => 'Tidak bisa tulis untuk menulis file URI.',
  'cant_unzip' => 'Tidak bisa di UNZIP.',
  'unknown' => 'Keliru tidak diketahui.',
  'succ' => 'Upload berhasil',
  'success' => '%s upload telah berhasil.',
  'add' => 'Klik \'lanjut\' untuk menambahkan file ke album.',
  'failure' => 'Upload gagal',
  'f_info' => 'Informasi file',
  'no_place' => 'File sebelumnya tidak bisa di replace.',
  'yes_place' => 'File sebelumnya berhasil di replace',
  'max_fsize' => 'Maksimum file diizinkan adalah %s Kb',
  'album' => 'Album',
  'picture' => 'File',
  'pic_title' => 'Judul file',
  'description' => 'Deskripsi file',
  'keywords' => 'Kata kunci (Pisahkan dengan space)<br /><a href="#" onClick="return MM_openBrWindow(\'keyword_select.php\',\'selectKey\',\'width=250, height=400, scrollbars=yes,toolbar=no,status=yes,resizable=yes\')">Insert from list</a>', //cpg1.4
  'keywords_sel' =>'Pilih katakunci', //cpg1.4
  'err_no_alb_uploadables' => 'Maaf tidak ada album dimana untuk diiznkan menaruh file',
  'place_instr_1' => 'Tolong taruh file dalam album saat ini.  Kamu mungkin juga masukkan informasi yang relevan dengan setiap file sekarang.',
  'place_instr_2' => 'Tambah file butuh placement. Silahkan klik \'Lanjut\'.',
  'process_complete' => 'Kamu telah berhasil menaruh semua file.',
   'albums_no_category' => 'Album tanpa kategori', //cpg1.4. //album pulldown mod, added by frogfoot
  'personal_albums' => '* Album pribadi', //cpg1.4 //album pulldown mod, added by frogfoot
  'select_album' => 'Pilih album', //cpg1.4 //album pulldown mod, added by frogfoot
  'close' => 'Tutup', //cpg1.4
  'no_keywords' => 'Maaf, Katakunci tidak ditemukan!', //cpg1.4
  'regenerate_dictionary' => 'Hasilkan kamus', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //

if (defined('USERMGR_PHP')) $lang_usermgr_php = array(
  'memberlist' => 'Daftar anggota', //cpg1.4
  'user_manager' => 'Atur pemakai', //cpg1.4
  'title' => 'Menata pemakai',
  'name_a' => 'Urut nama dari awal',
  'name_d' => 'Urut nama dari akhir',
  'group_a' => 'Urut grup dari awal',
  'group_d' => 'Urut grup dari akhir',
  'reg_a' => 'Urut tanggal pendaftaran dari awal',
  'reg_d' => 'Urut tanggal pendaftaran dari akhir',
  'pic_a' => 'Urut jumlah file dari awal',
  'pic_d' => 'Urut jumlah file dari akhir',
  'disku_a' => 'Urut pemakaian ruang dari kecil',
  'disku_d' => 'Urut pemakaian ruang dari besar',
  'lv_a' => 'Urut pengunjung dari awal',
  'lv_d' => 'Urut pengunjung dari akhir',
  'sort_by' => 'Urutkan pemakai dari',
  'err_no_users' => 'Table pemakai kosong!',
  'err_edit_self' => 'Kamu tidak bisa rubah profil sendiri, gunakan link \'profil ku\' untuk merubah',
  'edit' => 'Rubah',
  'with_selected' => 'Dengan dipilih:', //cpg1.4
  'delete' => 'Hapus', //cpg1.4
  'delete_files_no' => 'Biarkan file yang umum (kecuali takdikenal)', //cpg1.4
  'delete_files_yes' => 'Hapuskan file yang umum juga', //cpg1.4
  'delete_comments_no' => 'Biarkan komentar (kecuali takdikenal)', //cpg1.4
  'delete_comments_yes' => 'Hapuskan komentar juga', //cpg1.4
  'activate' => 'Aktif', //cpg1.4
  'deactivate' => 'Tidak aktif', //cpg1.4
  'reset_password' => 'Rubah katasandi', //cpg1.4
  'change_primary_membergroup' => 'Ganti anggota grup pertama', //cpg1.4
  'add_secondary_membergroup' => 'Ganti anggota grup kedua', //cpg1.4
  'name' => 'Nama pemakai',
  'group' => 'Grup',
  'inactive' => 'Tidak aktif',
  'operations' => 'Operasi',
  'pictures' => 'File',
  'disk_space_used' => 'Ruang dipakai', //cpg1.4
  'disk_space_quota' => 'Kuota ruang', //cpg1.4
  'registered_on' => 'Registrasi',
  'last_visit' => 'Terakhir dikunjungi',
  'u_user_on_p_pages' => '%d pemakai dalam %d halaman',
  'confirm_del' => 'Apakah kamu yakin mau menghapus pemakai ini?\\nSemua file dia dan album akan juga dihapus.', //js-alert
  'mail' => 'SURAT',
  'err_unknown_user' => 'Pemakai dipilih tidak ada!',
  'modify_user' => 'Modifikasi pemakai',
  'notes' => 'Catatan',
  'note_list' => '<li>Bila kamu tidak ingin mengganti katasandi yang sekarang, Biarkan kolom "katasandi" kosong.',
  'password' => 'Katasandi',
  'user_active' => 'Pemakai aktif',
  'user_group' => 'Grup pemakai',
  'user_email' => 'Email pemakai',
  'user_web_site' => 'Website pemakai',
  'create_new_user' => 'Buat pemakai baru',
  'user_location' => 'Lokasi pemakai',
  'user_interests' => 'Kesukaan pemakai',
  'user_occupation' => 'Aktifitas pemakai',
  'user_profile1' => '$user_profile1', //cpg1.4
  'user_profile2' => '$user_profile2', //cpg1.4
  'user_profile3' => '$user_profile3', //cpg1.4
  'user_profile4' => '$user_profile4', //cpg1.4
  'user_profile5' => '$user_profile5', //cpg1.4
  'user_profile6' => '$user_profile6', //cpg1.4
  'latest_upload' => 'Baru uploads',
  'never' => 'tidak pernah',
  'search' => 'cari pemakai', //cpg1.4
  'submit' => 'Kirim', //cpg1.4
  'search_submit' => 'Terus!', //cpg1.4
  'search_result' => 'Hasil cari untuk : ', //cpg1.4
  'alert_no_selection' => 'Kamu harus pilih palingtidak satu pemakai!', //cpg1.4 //js-alert
  'password' => 'katasandi', //cpg1.4
  'select_group' => 'Pilih grup', //cpg1.4
  'groups_alb_access' => 'Hak album dengan grup', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'modify' => 'Modifikasi?', //cpg1.4
  'group_no_access' => 'Grup ini tidak mempunyai hak spesial', //cpg1.4
  'notice' => 'catatan', //cpg1.4
  'group_can_access' => 'Album hany bisa diakses oleh grup "%s"', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //

if (defined('UTIL_PHP')) {
$lang_util_desc_php = array(
'Perbaharui judul dari nama file', //cpg1.4
'Hapus judul', //cpg1.4
'Bangun kembali thumbnail dan ukur kembali foto', //cpg1.4
'Hapus ukuran orisinil foto dan taruh dengan versi yang sudah di ukur', //cpg1.4
'Hapus orisinal foto atau tingkatkan ukuran foto untuk ruang web', //cpg1.4
'Hapus komentar yang tidak ada filenya', //cpg1.4
'Baca kembali ukuran dan dimensi fie (Jika kamu rubah foto secara manual)', //cpg1.4
'Reset jumlah dilihat berapakali', //cpg1.4
'Tampilkan phpinfo', //cpg1.4
'Perbaharui database', //cpg1.4
'Tampilkan file log (buku harian)', //cpg1.4
);
$lang_util_php = array(
  'title' => 'Perlengkapan admin (Ukur kembali foto)',
  'what_it_does' => 'Apa yang bisa dilakukan',
  'file' => 'File',
  'problem' => 'Masalah', //cpg1.4
  'status' => 'Status', //cpg1.4
  'title_set_to' => 'Judul ganti ke',
  'submit_form' => 'Kirim',
  'updated_succesfully' => 'Perbaharui berhasil',
  'error_create' => 'Masalah ketika membuat',
  'continue' => 'Proses foto lagi',
  'main_success' => 'File %s Berhasil digunakan sebagai file utama',
  'error_rename' => 'Bermasalah menamai %s ke %s',
  'error_not_found' => 'File %s tidak ditemukan',
  'back' => 'Balik ke depan',
  'thumbs_wait' => 'Perbaharui thumbnail dan/atau mengukur gambar, harap tunggu...',
  'thumbs_continue_wait' => 'Melanjutkan untuk perbaharui thumbnail dan/atau mengukur gambar...',
  'titles_wait' => 'Perbaharui judul, harap tunggu...',
  'delete_wait' => 'Hapus judul, harap tunggu...',
  'replace_wait' => 'Hapus orisinal dan taruh mereka dengan gambar yang sudah di ukur, harap tunggu...',
  'instruction' => 'Instruksi cepat',
  'instruction_action' => 'Pilih fungsi',
  'instruction_parameter' => 'Set parameter',
  'instruction_album' => 'Pilih album',
  'instruction_press' => 'Klik %s',
  'update' => 'Update thumbnail dan/atau ubah dimensi foto',
  'update_what' => 'Apa yang harus diupdater',
  'update_thumb' => 'Thumbnail saja',
  'update_pic' => 'Ubah dimensi foto saja', 
  'update_both' => 'Thumbnail dan ubah ukuran foto', 
  'update_number' => 'Jumlah image yang diproses per klik', 
  'update_option' => '(Coba set dengan nilai yang lebih kecil jika anda mengalami masalah timeout browser)', 
  'filename_title' => 'Nama File &rarr; Judul foto', 
  'filename_how' => 'Bagaimana nama file akan diubah', 
  'filename_remove' => 'Hapus akhiran .jpg dan ganti _ (underscore) dengan spasi', 
  'filename_euro' => 'Ubah 2003_11_23_13_20_20.jpg ke 23/11/2003 13:20', 
  'filename_us' => 'Ubah 2003_11_23_13_20_20.jpg ke 11/23/2003 13:20', 
  'filename_time' => 'Ubah 2003_11_23_13_20_20.jpg ke 13:20',
  'delete' => 'Hapus judul foto atau image yang tela diubah dimensinya', 
  'delete_title' => 'Hapus judul foto',
  'delete_title_explanation' => 'Ini akan menghapus semua judul file dalam album yang kamu sepsifikasikan.', //cpg1.4
  'delete_original' => 'Hapus foto yang ukuran sebenernya',
  'delete_original_explanation' => 'Ini akan hapus semua ukuran besar gambar', //cpg1.4
  'delete_intermediate' => 'Hapus tingkatan gambar', //cpg1.4
  'delete_intermediate_explanation' => 'Ini akan mengapus tingkatan (normal) gambar.<br />Gunakan ini untuk memberi ruang jika kamu menonaktifkan \'Hapus tingkatan gambar\' dalamkonfigurasi setelah memasukan gambar.', //cpg1.4
  'delete_replace' => 'Hapus image original ganti dengan image yang telah diubah dimensinya',
  'titles_deleted' => 'Semua judul dalam spesifikasi album akan dihapus', //cpg1.4
  'deleting_intermediates' => 'Hapus tingkatan gambar, harap tunggu...', //cpg1.4
  'searching_orphans' => 'Cari yang tunggal, harap tunggu...', //cpg1.4
  'select_album' => 'Pilih album',
  'delete_orphans' => 'Hapus komentar tunggal(tanpa file)', //cpg1.4
  'delete_orphans_explanation' => 'Ini akan mengidentifikasi dan izinkan kamu untuk menghapus komentar yang berhubingan file yang tidak ada.<br />cek semua album.', //cpg1.4
  'refresh_db' => 'Refresh dimensi file dan informasi ukuran', //cpg1.4
  'refresh_db_explanation' => 'Ini akan membaca ukuran dan dimensi file. Gunakan ini bila kuota salah atau kamu telah mengganti file secara manual.', //cpg1.4
  'reset_views' => 'Reset dilihat berapakali', //cpg1.4
  'reset_views_explanation' => 'Set semua dihitung berapakali ke kosong atau nol di albm yang di spesifikasikan.', //cpg1.4
  'orphan_comment' => 'Komentar tunggal ditemukan', 
  'delete' => 'Hapus',
  'delete_all' => 'Hapus semua',
  'delete_all_orphans' => 'Hapus semua komentar tunggal?', //cpg1.4
  'comment' => 'Komentar: ',
  'nonexist' => 'Lampirkan ke bukan file # ',
  'phpinfo' => 'Tampilkan phpinfo',
  'phpinfo_explanation' => 'Berisikan informasik teknisi tentang server kamu.<br /> - Kamu ungkin ditanyai informasi untuk memohon support ini.', //cpg1.4
  'update_db' => 'Update database',
  'update_db_explanation' => 'Jika anda telah mengganti file coppermine, menambah modifikasi atau upgrade dari versi coppermine sebelumnya, jalankan update database ini SATU KALI SAJA. Fungsi ini akan membuat database dan/atau menambahkan nilai konfigurasi yang perlu.', 
  'view_log' => 'Lihat catatan file', //cpg1.4
  'view_log_explanation' => 'Coppermine bisa menjaga variasi peforma pemakai. Kamu bisa browse ini jika kamu aktifkan loggin di <a href="admin.php">Konfigurasi</a>.', //cpg1.4
  'versioncheck' => 'Cek versi', //cpg1.4
  'versioncheck_explanation' => 'Cek file versi kamu untuk mencari tahu jika kamu telah menaruh semua file setelah upgrade, atau jika sumber file Coppermine telah di perbaharui setelah peluncuran sebuah paket.', //cpg1.4
  'bridgemanager' => 'Sambungan Manager', //cpg1.4
  'bridgemanager_explanation' => 'Aktif/non-aktifkan integrasi (sambungan) Coppermine kamu dengan aplikasi lain (contoh Forum).', //cpg1.4
);
}

// ------------------------------------------------------------------------- //
// File versioncheck.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VERSIONCHECK_PHP')) $lang_versioncheck_php = array(
  'title' => 'Cek Versi', //cpg1.4
  'what_it_does' => 'Halaman ini bermaksud untuk pemakai yang mau mengupdate Coppermine mereka. Skrip ini akan melihat semua file yang ada di webserver dan mengecek jika lokal file versi kamu di server sama dengan yang ada di http://coppermine.sourceforge.net, dengan ini akan menampilkan dile yang di update juga.<br />Ini akan menampilkan semua yang berwarna merah untuk di perbaikin. Yang berwarna kuning perlu di perhatikan. Yang berwarna hijau (atau teks font tidak berubah) adalah oke.<br />Klik ikon bantuan untuk lebih jelas.', //cpg1.4
  'online_repository_unable' => 'Tidak bisa berhubungan dengan repository online', //cpg1.4
  'online_repository_noconnect' => 'Coppermine tidak bisa berhubunan dengan repository online. Ini karena dua alasan:', //cpg1.4
  'online_repository_reason1' => 'Coppermine repository sedang down - Cek ke halaman ini: %s - jika kamu tidak bisa akses halaman ini,cobalah nanti.', //cpg1.4
  'online_repository_reason2' => 'PHP dalam server kamu konfigurasi dengan %s sedang tidak aktif (biasanya, itu aktif). Bila server ini kamu adminnya, aktifkan pilihan ini dalam <i>php.ini</i> (paling tidak izinkan overriden dengan %s). Jika kamu sewa hosting, Kamu harus terima dengan kenyataan kalau kamu tidak bisa membandingkan file kamu ke repository online. Halaman ini akan tampilkan versi file yang datang dengan saluran kamu - Update tidak akan di tampilkan.', //cpg1.4
  'online_repository_skipped' => 'Koneksi ke repository di skip', //cpg1.4
  'online_repository_to_local' => 'Skrip ini tidak berubah dari lokal salinan dari versi yang sekarang. Data mungkin tidak akurat jika kamu upgrade Coppermine dan kamu belom upload semua file. Ganti semua file setelah yang di keluarkan tidak akan diambil dari akun juga.', //cpg1.4
  'local_repository_unable' => 'Tidak memungkinkan untuk berhubungan dengan repository dengan server kamu', //cpg1.4
  'local_repository_explanation' => 'Coppermine tidak bisa berhubungan dengan file repository %s dalam server kamu. Ini mungkin kamu belum upload file repository ke server kamu. Lakukan sekarang dan coba untuk menjalankan halaman ini sekali lagi (tekan refresh).<br />Bila skrip tetap gagal, webhost kamu mungkin mentidakatifkan <a target="_blank" href="http://www.php.net/manual/fr/ref.filesystem.php">Fungsu PHP sistem file</a> selengkapnya. Dalam masalah ini, Kamu tidak bisa menggunakan file ini, maafkan.', //cpg1.4
  'coppermine_version_header' => 'Instalasi versi Coppermine', //cpg1.4
  'coppermine_version_info' => 'Kamu saat ini menginstal versi: %s', //cpg1.4
  'coppermine_version_explanation' => 'Bila kamu pikir semuanya salah dan kamu harusnya untuk menjalankan versi yang lebih baru, kamu harusnya belum upload semua file versi <i>include/init.inc.php</i>', //cpg1.4
  'version_comparison' => 'Bandingkan versi', //cpg1.4
  'folder_file' => 'Folder/file', //cpg1.4
  'coppermine_version' => 'Versi Coppermine', //cpg1.4
  'file_version' => 'Versi file', //cpg1.4
  'webcvs' => 'web cvs', //cpg1.4
  'writable' => 'dapat ditulis', //cpg1.4
  'not_writable' => 'tidak dapat ditulis', //cpg1.4
  'help' => 'Bantuan', //cpg1.4
  'help_file_not_exist_optional1' => 'file/folder tidak ada', //cpg1.4
  'help_file_not_exist_optional2' => 'file/folder %s tidak dapat ditemukan di server kamu. Adapun pilihan seharusnya upload itu (gunakan client FTP) ke webserver kamu jika kamu mempunyai masalah.', //cpg1.4
  'help_file_not_exist_mandatory1' => 'File/folder tidak ada', //cpg1.4
  'help_file_not_exist_mandatory2' => 'file/folder %s tidak dapat ditemukan didalam server. Adapun ini sangat penting. Upload file ke webserver kamu (menggunkana client FTP).', //cpg1.4
  'help_no_local_version1' => 'Tidak ada versi file lokal', //cpg1.4
  'help_no_local_version2' => 'Skrip ini tidak dapat di ektractke versi file lokal - file kamu telah kadarluasa atau kamu telah modifikasi, Hapus informasi header. Update file lebih di rekomendasikan.', //cpg1.4
  'help_local_version_outdated1' => 'Versi lokal kadarluasa', //cpg1.4
  'help_local_version_outdated2' => 'Versi file kamu terlihat versi tua dari Coppermine (Kamu mesti upgrade). Yakinkan update file ini juga.', //cpg1.4
  'help_local_version_na1' => 'Tidak bisa ektrakt file versi CVS', //cpg1.4
  'help_local_version_na2' => 'Skript tidak dapat mengecek versi csv apa di server kamu. Kamu harus upload file dari paket.', //cpg1.4
  'help_local_version_dev1' => 'Versi pembangunan', //cpg1.4
  'help_local_version_dev2' => 'File dalam server kamu terlihat lebih baru dari versi Coppermine. Kamu menggunkan file dalam masa pembangunan (kamu hanya bisa gunakan bila kamu tahu apa yang kamu lakukan), atau kamu upgrade install Coppermine dan jangan upload include/init.inc.php', //cpg1.4
  'help_not_writable1' => 'Folder tidak bisa di tulis', //cpg1.4
  'help_not_writable2' => 'Ganti izin file (CHMOD) untuk meneruskan script untuk akses ke folder %s dan semuanya didalamnya.', //cpg1.4
  'help_writable1' => 'Folder bisa ditulus', //cpg1.4
  'help_writable2' => 'Folder %s bisa ditulis. Ini resiko yang tidak penting, Coppermine hanya butuh baca/menjalankan akses.', //cpg1.4
  'help_writable_undetermined' => 'Coppermine tidak dapat mengecek folder bisa dicek.', //cpg1.4
  'your_file' => 'File kamu', //cpg1.4
  'reference_file' => 'Referensi file', //cpg1.4
  'summary' => 'Ringkasan', //cpg1.4
  'total' => 'Jumlah file/folder yang dicek', //cpg1.4
  'mandatory_files_missing' => 'File perintah hilang', //cpg1.4
  'optional_files_missing' => 'File terpisah hilang', //cpg1.4
  'files_from_older_version' => 'File tertinggal jauh dari kadaluarsa versi Coppermine', //cpg1.4
  'file_version_outdated' => 'versi file kadarluasa', //cpg1.4
  'error_no_data' => 'Skrip buat boo, tidak dapat memberi satu informasi. Maaf untuk ketidaknyamanan ini.', //cpg1.4
  'go_to_webcvs' => 'pergi ke %s', //cpg1.4
  'options' => 'Pilihan', //cpg1.4
  'show_optional_files' => 'Tampilkan folder/file terpisah', //cpg1.4
  'show_mandatory_files' => 'Tampilkan file yang penting', //cpg1.4
  'show_file_versions' => 'Tampilkan versi file', //cpg1.4
  'show_errors_only' => 'Tampilkan folder/file dengan hanya masalah', //cpg1.4
  'show_permissions' => 'Tampilkan izin permisi folder', //cpg1.4
  'show_condensed_output' => 'Tampilkan hasil singkatan (kemudahan lihat screenshot)', //cpg1.4
  'coppermine_in_webroot' => 'Coppermine install di webroot', //cpg1.4
  'connect_online_repository' => 'Mencoba berhubungan dengan repository online', //cpg1.4
  'show_additional_information' => 'Tampilkan informasi tambahan', //cpg1.4
  'no_webcvs_link' => 'jangan tampilkan link web cvs', //cpg1.4
  'stable_webcvs_link' => 'tampilkan link web csv ke cabang stabil', //cpg1.4
  'devel_webcvs_link' => 'tampilkan link web csv ke cabang pembangunan', //cpg1.4
  'submit' => 'gunakan perubahan/refresh', //cpg1.4
  'reset_to_defaults' => 'Reset ke angka tak diubah (default)', //cpg1.4
);

// ------------------------------------------------------------------------- //
// File view_log.php  //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('VIEWLOG_PHP')) $lang_viewlog_php = array(
  'delete_all' => 'Hapus semua log (catatan)', //cpg1.4
  'delete_this' => 'Hapus log (catatan) ini', //cpg1.4
  'view_logs' => 'Lihat log (catatan)', //cpg1.4
  'no_logs' => 'Tidak ada pembuatan log (catatan).', //cpg1.4
);


// ------------------------------------------------------------------------- //
// File xp_publish.php //cpg1.4
// ------------------------------------------------------------------------- //

if (defined('XP_PUBLISH_PHP')) {

$lang_xp_publish_client = <<<EOT
<h1>Client Web Wizard Publishing XP</h1>\n<p>Modul ini mengizinkan untuk menggunakan <b>Windows XP</b> publikasi wizard dengan Coppermine.</p>\n<p>Kode adalah dari artike di pos oleh
EOT;

$lang_xp_publish_required = <<<EOT
\n<h2>Kondisi yang dibutuhkan</h2>\n<ul>\n<li>Windows XP yang memiliki wizard.</li>\n<li>Instalasi yang bekerja dengan Coppermine yang artinya <b>funsi web upload bekerja dengan benar.</b></li>\n</ul>\n<h2>Bagaimana cara menginstal sisi client</h2>\n<ul>\n<li>klik kanan pada
EOT;

$lang_xp_publish_select = <<<EOT
pilih &quot;save target as (simpan sebagai)...&quot;. Simpan file di hard disk kamu. Ketika menyimpan file, cek nama diajukan adalah <b>cpg_###.reg</b> (### menandakan sebuah angka timestamp). ganti itu nama jika penting (biarkan nomor). Ketika download, klik dua kali di file untuk register server kamu dengan publikasi web wizard.</li>\n</ul>\n
EOT;

$lang_xp_publish_testing = <<<EOT
\n<h2>Mencoba</h2>\n<ul>\n<li>Di Windows Explorer, pilih beberapa file dan klik pada <b>Publikasi xxx on the web</b> di panel kiri.</li>\n<li>Konfirmasi seleksi file. Klik pada <b>Selanjutnya</b>.</li><li>Dalam daftar pelayanan yang terlihat, pilih salah satu galeri foto (Itu punya nama dari galeri kamu). Jika pelayanan tidak telihat, cek jika kamu telah install <b>cpg_pub_wizard.reg</b> seperti di deskripsikan diatas.</li>\n<li>Masukkan informasi login jika diperlukan</li>\n<li>Pilih target album untuk foto kamu atau buat baru.</li>\n<li>Klik pada <b>Selanjutnya</b>. Upload gambar akan mulai.</li>\n<li>setelah selesai, cek galeri kamu untuk melihat jika gambar sudah benar di tambahkan.</li>\n</ul>\n
EOT;

$lang_xp_publish_notes = <<<EOT
<h2>Catatan :</h2>\n<ul>\n<li>Sekali upload mulai, Wizard tidak tampilkan pesan yang keliru balik ke skip jadi kamu tidak tahu jika file berhasil atau tidak sampai kamu cek galeri kamu.</li>\n<li>Jika upload gagal, aktifkan &quot;Mode debug&quot; di konfigurasi Coppermine, oba dengan satu gambar dan cek pesan keliru di
EOT;

$lang_xp_publish_flood = <<<EOT
file yang berada di direktori Coppermine di server kamu.</li>\n<li>Untuk step mencegah galeri menjadi <i>penuh</i> dengan upload gambar lewat wizard, hanya <b>galeri admin</b> dan <b>pemakai yang punya album sendiri</b> yang bisa menggunkan fitur ini.</li>\n</ul>\n
EOT;



$lang_xp_publish_php = array(
  'title' => 'Coppermine - Asisten Publikasi Wizard Web XP', //cpg1.4
  'welcome' => 'Selamat dayang <b>%s</b>,', //cpg1.4
  'need_login' => 'Kamu perlu login ke galeri menggunakan web browser kamu sebelum kamu menggunakan wizard ini.<p/><p>Ketika kamu login jangan lupa untuk memilih, pilihan <b>ingatlah saya</b> bila terlihat.', //cpg1.4
  'no_alb' => 'Maaf tetapi tidak ada album dimana kamu di izinkan untuk upload gambar dengan wizard.', //cpg1.4
  'upload' => 'Upload gambar kamu ke album yang ada', //cpg1.4
  'create_new' => 'Buat album baru untuk gambar kamu', //cpg1.4
  'album' => 'Album', //cpg1.4
  'category' => 'Kategori', //cpg1.4
  'new_alb_created' => 'Album &quot;<b>%s</b>&quot; baru saja dibuat.', //cpg1.4
  'continue' => 'Tekan &quot;Lanjut&quot; untuk memulai upload gambar kamu', //cpg1.4
  'link' => 'link ini', //cpg1.4
);
}
?>
