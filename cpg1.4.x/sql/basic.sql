##  ********************************************
##  Coppermine Photo Gallery
##  ************************
##  Copyright (c) 2003-2009 Coppermine Dev Team
##  v1.1 originally written by Gregory DEMAR
##
##  This program is free software; you can redistribute it and/or modify
##  it under the terms of the GNU General Public License version 3
##  as published by the Free Software Foundation.
##
##  ********************************************
##  Coppermine version: 1.4.23
##  $HeadURL$
##  $Revision$
##  $Author$
##  $Date$
##  ********************************************

#
# Dumping data for table `CPG_config`
#

INSERT INTO CPG_config VALUES ('albums_per_page', '12');
INSERT INTO CPG_config VALUES ('album_list_cols', '2');
INSERT INTO CPG_config VALUES ('display_pic_info', '0');
INSERT INTO CPG_config VALUES ('alb_list_thumb_size', '50');

#INSERT INTO CPG_config VALUES ('allowed_file_extensions', 'GIF/PNG/JPG/JPEG/TIF/TIFF');


# FOR USE WITH VIDEO MOD
INSERT INTO CPG_config VALUES ('allowed_mov_types', 'ALL');
INSERT INTO CPG_config VALUES ('allowed_doc_types', 'doc/txt/rtf/pdf/xls/pps/ppt/zip/gz/mdb');
INSERT INTO CPG_config VALUES ('allowed_snd_types', 'mp3/midi/mid/wma/wav/ogg');
INSERT INTO CPG_config VALUES ('allowed_img_types', 'ALL');


INSERT INTO CPG_config VALUES ('allow_private_albums', '1');
INSERT INTO CPG_config VALUES ('allow_user_registration', '0');
INSERT INTO CPG_config VALUES ('allow_unlogged_access', '1');
INSERT INTO CPG_config VALUES ('allow_duplicate_emails_addr', '0');
INSERT INTO CPG_config VALUES ('caption_in_thumbview', '1');
INSERT INTO CPG_config VALUES ('views_in_thumbview', '1');
INSERT INTO CPG_config VALUES ('charset', 'utf-8');
INSERT INTO CPG_config VALUES ('cookie_name', 'coppermine');
INSERT INTO CPG_config VALUES ('cookie_path', '/');
INSERT INTO CPG_config VALUES ('debug_mode', '0');
INSERT INTO CPG_config VALUES ('debug_notice', '0');
INSERT INTO CPG_config VALUES ('default_dir_mode', '0755');
INSERT INTO CPG_config VALUES ('default_file_mode', '0644');
INSERT INTO CPG_config VALUES ('default_sort_order', 'na');
INSERT INTO CPG_config VALUES ('ecards_more_pic_target', 'http://yoursite.tld/your_coppermine_folder/');
INSERT INTO CPG_config VALUES ('home_target', 'index.php');
INSERT INTO CPG_config VALUES ('custom_lnk_name', '');
INSERT INTO CPG_config VALUES ('custom_lnk_url', '');
INSERT INTO CPG_config VALUES ('enable_smilies', '1');
INSERT INTO CPG_config VALUES ('filter_bad_words', '0');
INSERT INTO CPG_config VALUES ('forbiden_fname_char', '$/\\\\:*?"\'<>|` &');
INSERT INTO CPG_config VALUES ('fullpath', 'albums/');
INSERT INTO CPG_config VALUES ('gallery_admin_email', 'you@example.com');
INSERT INTO CPG_config VALUES ('gallery_description', 'Your online photo album');
INSERT INTO CPG_config VALUES ('gallery_name', 'Coppermine Photo Gallery');
INSERT INTO CPG_config VALUES ('im_options', '-antialias');
INSERT INTO CPG_config VALUES ('impath', '');
INSERT INTO CPG_config VALUES ('jpeg_qual', '80');
INSERT INTO CPG_config VALUES ('keep_votes_time', '30');
INSERT INTO CPG_config VALUES ('lang', 'english');
INSERT INTO CPG_config VALUES ('main_page_layout', 'breadcrumb/catlist/alblist/random,2/lastup,2');
INSERT INTO CPG_config VALUES ('main_table_width', '100%');
INSERT INTO CPG_config VALUES ('make_intermediate', '1');
INSERT INTO CPG_config VALUES ('max_com_lines', '10');
INSERT INTO CPG_config VALUES ('max_com_size', '512');
INSERT INTO CPG_config VALUES ('max_com_wlength', '38');
INSERT INTO CPG_config VALUES ('max_img_desc_length', '512');
INSERT INTO CPG_config VALUES ('max_tabs', '12');
INSERT INTO CPG_config VALUES ('max_upl_size', '1024');
INSERT INTO CPG_config VALUES ('max_upl_width_height', '2048');
INSERT INTO CPG_config VALUES ('auto_resize', '0');
INSERT INTO CPG_config VALUES ('min_votes_for_rating', '1');
INSERT INTO CPG_config VALUES ('normal_pfx', 'normal_');
INSERT INTO CPG_config VALUES ('offline', '0');
INSERT INTO CPG_config VALUES ('picture_table_width', '600');
INSERT INTO CPG_config VALUES ('picture_width', '400');
# INSERT INTO CPG_config VALUES ('randpos_interval', '1063623637');
INSERT INTO CPG_config VALUES ('read_exif_data', '0');
INSERT INTO CPG_config VALUES ('reg_requires_valid_email', '1');
INSERT INTO CPG_config VALUES ('subcat_level', '2');
INSERT INTO CPG_config VALUES ('theme', 'core');
INSERT INTO CPG_config VALUES ('thumbcols', '4');
INSERT INTO CPG_config VALUES ('thumbrows', '3');
INSERT INTO CPG_config VALUES ('thumb_method', 'im');
INSERT INTO CPG_config VALUES ('thumb_pfx', 'thumb_');
INSERT INTO CPG_config VALUES ('thumb_width', '100');
INSERT INTO CPG_config VALUES ('userpics', 'userpics/');
INSERT INTO CPG_config VALUES ('vanity_block','1');
#
# added custom profile
#
INSERT INTO CPG_config VALUES ('user_profile1_name', 'Location');
INSERT INTO CPG_config VALUES ('user_profile2_name', 'Interests');
INSERT INTO CPG_config VALUES ('user_profile3_name', 'Website');
INSERT INTO CPG_config VALUES ('user_profile4_name', 'Occupation');
INSERT INTO CPG_config VALUES ('user_profile5_name', '');
INSERT INTO CPG_config VALUES ('user_profile6_name', 'Biography');
INSERT INTO CPG_config VALUES ('user_field1_name', '');
INSERT INTO CPG_config VALUES ('user_field2_name', '');
INSERT INTO CPG_config VALUES ('user_field3_name', '');
INSERT INTO CPG_config VALUES ('user_field4_name', '');
INSERT INTO CPG_config VALUES ('display_comment_count', '0');
INSERT INTO CPG_config VALUES ('show_private', '0');
INSERT INTO CPG_config VALUES ('first_level', '1');
INSERT INTO CPG_config VALUES ('display_film_strip', '1');
INSERT INTO CPG_config VALUES ('display_film_strip_filename', '0');
INSERT INTO CPG_config VALUES ('max_film_strip_items', '5');
INSERT INTO CPG_config VALUES ('thumb_use', 'any');
#INSERT INTO CPG_config VALUES ('comment_email_notification', '0');
#INSERT INTO CPG_config VALUES ('disable_popup_rightclick', '0');
#INSERT INTO CPG_config VALUES ('disable_gallery_rightclick', '0');
INSERT INTO CPG_config VALUES ('read_iptc_data', '0');
INSERT INTO CPG_config VALUES ('reg_notify_admin_email', '0');
INSERT INTO CPG_config VALUES ('disable_comment_flood_protect', '0');
INSERT INTO CPG_config VALUES ('upl_notify_admin_email', '0');
INSERT INTO CPG_config VALUES ('display_uploader', '0');
# INSERT INTO CPG_config VALUES ('display_admin_uploader','0');
INSERT INTO CPG_config VALUES ('display_filename','0');

INSERT INTO CPG_config VALUES ('language_list', '0');
INSERT INTO CPG_config VALUES ('language_flags', '0');
INSERT INTO CPG_config VALUES ('theme_list', '0');
INSERT INTO CPG_config VALUES ('language_reset', '1');
INSERT INTO CPG_config VALUES ('theme_reset', '1');

INSERT INTO CPG_config VALUES ('allow_memberlist', '0');
INSERT INTO CPG_config VALUES ('display_faq', '0');
INSERT INTO CPG_config VALUES ('show_bbcode_help', '1');
INSERT INTO CPG_config VALUES ('log_ecards', '0');
INSERT INTO CPG_config VALUES ('email_comment_notification', '0');
INSERT INTO CPG_config VALUES ('enable_zipdownload', '1');
INSERT INTO CPG_config VALUES ('slideshow_interval', '5000');

INSERT INTO CPG_config VALUES ('log_mode', '0');
INSERT INTO CPG_config VALUES ('media_autostart', '1');

INSERT INTO CPG_config VALUES ('enable_encrypted_passwords','1');

INSERT INTO CPG_config VALUES ('time_offset', '0');

INSERT INTO CPG_config VALUES ('ban_private_ip', '0');

INSERT INTO CPG_config VALUES ('smtp_host', '');
INSERT INTO CPG_config VALUES ('smtp_username', '');
INSERT INTO CPG_config VALUES ('smtp_password', '');

INSERT INTO CPG_config VALUES ('enable_plugins', '1');

INSERT INTO CPG_config VALUES ('enable_help', '2');

INSERT INTO CPG_config VALUES ('categories_alpha_sort', '0');

INSERT INTO CPG_config VALUES ('login_threshold', '5');
INSERT INTO CPG_config VALUES ('login_expiry', '10');


INSERT INTO CPG_config VALUES ('allow_email_change', '0');

INSERT INTO CPG_config VALUES ('clickable_keyword_search', '1');
INSERT INTO CPG_config VALUES ('users_can_edit_pics', '0');


#
# Dumping data for table `CPG_filetypes`
#

INSERT INTO CPG_filetypes VALUES ('jpg', 'image/jpg', 'image', '');
INSERT INTO CPG_filetypes VALUES ('jpeg', 'image/jpeg', 'image', '');
INSERT INTO CPG_filetypes VALUES ('jpe', 'image/jpe', 'image', '');
INSERT INTO CPG_filetypes VALUES ('gif', 'image/gif', 'image', '');
INSERT INTO CPG_filetypes VALUES ('png', 'image/png', 'image', '');
INSERT INTO CPG_filetypes VALUES ('bmp', 'image/bmp', 'image', '');
INSERT INTO CPG_filetypes VALUES ('jpc', 'image/jpc', 'image', '');
INSERT INTO CPG_filetypes VALUES ('jp2', 'image/jp2', 'image', '');
INSERT INTO CPG_filetypes VALUES ('jpx', 'image/jpx', 'image', '');
INSERT INTO CPG_filetypes VALUES ('jb2', 'image/jb2', 'image', '');
INSERT INTO CPG_filetypes VALUES ('swc', 'image/swc', 'image', '');
INSERT INTO CPG_filetypes VALUES ('iff', 'image/iff', 'image', '');

INSERT INTO CPG_filetypes VALUES ('asf', 'video/x-ms-asf', 'movie', 'WMP');
INSERT INTO CPG_filetypes VALUES ('asx', 'video/x-ms-asx', 'movie', 'WMP');
INSERT INTO CPG_filetypes VALUES ('mpg', 'video/mpeg', 'movie', 'WMP');
INSERT INTO CPG_filetypes VALUES ('mpeg', 'video/mpeg', 'movie', 'WMP');
INSERT INTO CPG_filetypes VALUES ('wmv', 'video/x-ms-wmv', 'movie', 'WMP');
INSERT INTO CPG_filetypes VALUES ('swf', 'application/x-shockwave-flash', 'movie', 'SWF');
INSERT INTO CPG_filetypes VALUES ('avi', 'video/avi', 'movie', 'WMP');
INSERT INTO CPG_filetypes VALUES ('mov', 'video/quicktime', 'movie', 'QT');

INSERT INTO CPG_filetypes VALUES ('mp3', 'audio/mpeg3', 'audio', 'WMP');
INSERT INTO CPG_filetypes VALUES ('midi', 'audio/midi', 'audio', 'WMP');
INSERT INTO CPG_filetypes VALUES ('mid', 'audio/midi', 'audio', 'WMP');
INSERT INTO CPG_filetypes VALUES ('wma', 'audio/x-ms-wma', 'audio', 'WMP');
INSERT INTO CPG_filetypes VALUES ('wav', 'audio/wav', 'audio', 'WMP');
INSERT INTO CPG_filetypes VALUES ('ogg', 'audio/ogg', 'audio', '');

INSERT INTO CPG_filetypes VALUES ('psd', 'image/psd', 'image', '');
INSERT INTO CPG_filetypes VALUES ('ram', 'audio/x-pn-realaudio', 'document', 'RMP');
INSERT INTO CPG_filetypes VALUES ('ra', 'audio/x-realaudio', 'document', 'RMP');
INSERT INTO CPG_filetypes VALUES ('rm', 'audio/x-realmedia', 'document', 'RMP');
INSERT INTO CPG_filetypes VALUES ('tiff', 'image/tiff', 'document', '');
INSERT INTO CPG_filetypes VALUES ('tif', 'image/tif', 'document', '');
INSERT INTO CPG_filetypes VALUES ('doc', 'application/msword', 'document', '');
INSERT INTO CPG_filetypes VALUES ('txt', 'text/plain', 'document', '');
INSERT INTO CPG_filetypes VALUES ('rtf', 'text/richtext', 'document', '');
INSERT INTO CPG_filetypes VALUES ('pdf', 'application/pdf', 'document', '');
INSERT INTO CPG_filetypes VALUES ('xls', 'application/excel', 'document', '');
INSERT INTO CPG_filetypes VALUES ('pps', 'application/powerpoint', 'document', '');
INSERT INTO CPG_filetypes VALUES ('ppt', 'application/powerpoint', 'document', '');
INSERT INTO CPG_filetypes VALUES ('zip', 'application/zip', 'document', '');
INSERT INTO CPG_filetypes VALUES ('rar', 'application/rar', 'document', '');
INSERT INTO CPG_filetypes VALUES ('gz', 'application/gz', 'document', '');
INSERT INTO CPG_filetypes VALUES ('mdb', 'application/msaccess', 'document', '');


#
# Dumping data for table `CPG_usergroups`
#

INSERT INTO CPG_usergroups VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0, 3, 0, 5, 3);
INSERT INTO CPG_usergroups VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0, 3, 0, 5, 3);
INSERT INTO CPG_usergroups VALUES (3, 'Anonymous', 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3);
INSERT INTO CPG_usergroups VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 5, 3);

#
# Dumping data for table `CPG_categories`
#

INSERT INTO CPG_categories (cid, name, description) VALUES (1, 'User galleries', 'This category contains albums that belong to Coppermine users.');

INSERT INTO CPG_config VALUES ('show_which_exif', '|0|0|0|0|0|0|0|0|1|0|1|1|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|1|0|0|0|1|1|0|0|0|0|1|0|0|0|1|0|0|1|1|0|0|0|0|0|1|0|1|1');
# INSERT INTO CPG_config VALUES ('alb_desc_thumb', '1');
INSERT INTO CPG_config VALUES ('link_pic_count', '0');

INSERT INTO CPG_config VALUES ('bridge_enable', '0');

#
# Data for table `CPG_bridge`
# Used for bridging by user interface
#

INSERT INTO CPG_bridge VALUES ('short_name', '');
INSERT INTO CPG_bridge VALUES ('license_number', '');
INSERT INTO CPG_bridge VALUES ('db_database_name', '');
INSERT INTO CPG_bridge VALUES ('db_hostname', '');
INSERT INTO CPG_bridge VALUES ('db_username', '');
INSERT INTO CPG_bridge VALUES ('db_password', '');
INSERT INTO CPG_bridge VALUES ('full_forum_url', '');
INSERT INTO CPG_bridge VALUES ('relative_path_of_forum_from_webroot', '');
INSERT INTO CPG_bridge VALUES ('relative_path_to_config_file', '');
INSERT INTO CPG_bridge VALUES ('logout_flag', '');
INSERT INTO CPG_bridge VALUES ('use_post_based_groups', '');
INSERT INTO CPG_bridge VALUES ('cookie_prefix', '');
INSERT INTO CPG_bridge VALUES ('table_prefix', '');
INSERT INTO CPG_bridge VALUES ('user_table', '');
INSERT INTO CPG_bridge VALUES ('session_table', '');
INSERT INTO CPG_bridge VALUES ('group_table', '');
INSERT INTO CPG_bridge VALUES ('group_relation_table', '');
INSERT INTO CPG_bridge VALUES ('group_mapping_table', '');
INSERT INTO CPG_bridge VALUES ('use_standard_groups', '1');
INSERT INTO CPG_bridge VALUES ('validating_group', '');
INSERT INTO CPG_bridge VALUES ('guest_group', '');
INSERT INTO CPG_bridge VALUES ('member_group', '');
INSERT INTO CPG_bridge VALUES ('admin_group', '');
INSERT INTO CPG_bridge VALUES ('banned_group', '');
INSERT INTO CPG_bridge VALUES ('global_moderators_group', '');
INSERT INTO CPG_bridge VALUES ('recovery_logon_failures', '0');
INSERT INTO CPG_bridge VALUES ('recovery_logon_timestamp', '');

INSERT INTO CPG_config VALUES ('language_fallback', '1');
INSERT INTO CPG_config VALUES ('vote_details', '0');
INSERT INTO CPG_config VALUES ('hit_details', '0');
INSERT INTO CPG_config VALUES ('browse_batch_add', '1');
INSERT INTO CPG_config VALUES ('custom_header_path', '');
INSERT INTO CPG_config VALUES ('custom_footer_path', '');
INSERT INTO CPG_config VALUES ('comments_sort_descending', '0');
INSERT INTO CPG_config VALUES ('report_post', '0');
INSERT INTO CPG_config VALUES ('comments_anon_pfx', 'Guest_');
INSERT INTO CPG_config VALUES ('admin_activation', '0');