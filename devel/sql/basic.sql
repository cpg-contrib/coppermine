#
# Dumping data for table `CPG_config`
#

INSERT INTO `cpg11d_config` VALUES ('albums_per_page', '12');
INSERT INTO `cpg11d_config` VALUES ('album_list_cols', '2');
INSERT INTO `cpg11d_config` VALUES ('display_pic_info', '0');
INSERT INTO `cpg11d_config` VALUES ('alb_list_thumb_size', '50');
INSERT INTO `cpg11d_config` VALUES ('allowed_file_extensions', 'GIF/PNG/JPG/JPEG/TIF/TIFF');
INSERT INTO `cpg11d_config` VALUES ('allowed_img_types', 'JPG/GIF/PNG/TIFF');
INSERT INTO `cpg11d_config` VALUES ('allow_private_albums', '1');
INSERT INTO `cpg11d_config` VALUES ('allow_user_registration', '0');
INSERT INTO `cpg11d_config` VALUES ('allow_duplicate_emails_addr', '0');
INSERT INTO `cpg11d_config` VALUES ('caption_in_thumbview', '1');
INSERT INTO `cpg11d_config` VALUES ('charset', 'language file');
INSERT INTO `cpg11d_config` VALUES ('cookie_name', 'cpg11d');
INSERT INTO `cpg11d_config` VALUES ('cookie_path', '/');
INSERT INTO `cpg11d_config` VALUES ('debug_mode', '0');
INSERT INTO `cpg11d_config` VALUES ('default_dir_mode', '0777');
INSERT INTO `cpg11d_config` VALUES ('default_file_mode', '0666');
INSERT INTO `cpg11d_config` VALUES ('default_sort_order', 'na');
INSERT INTO `cpg11d_config` VALUES ('ecards_more_pic_target', 'http://coppermine.sourceforge.net/');
INSERT INTO `cpg11d_config` VALUES ('enable_smilies', '1');
INSERT INTO `cpg11d_config` VALUES ('filter_bad_words', '0');
INSERT INTO `cpg11d_config` VALUES ('forbiden_fname_char', '$/\\\\:*?&quot;\'&lt;&gt;|`');
INSERT INTO `cpg11d_config` VALUES ('fullpath', 'albums/');
INSERT INTO `cpg11d_config` VALUES ('gallery_admin_email', 'you@somewhere.com');
INSERT INTO `cpg11d_config` VALUES ('gallery_description', 'Your online photo album');
INSERT INTO `cpg11d_config` VALUES ('gallery_name', 'Coppermine Photo Gallery');
INSERT INTO `cpg11d_config` VALUES ('im_options', '-antialias');
INSERT INTO `cpg11d_config` VALUES ('impath', '/usr/bin/X11/');
INSERT INTO `cpg11d_config` VALUES ('jpeg_qual', '80');
INSERT INTO `cpg11d_config` VALUES ('keep_votes_time', '30');
INSERT INTO `cpg11d_config` VALUES ('lang', 'english');
INSERT INTO `cpg11d_config` VALUES ('main_page_layout', 'catlist/alblist/random,2/lastup,2');
INSERT INTO `cpg11d_config` VALUES ('main_table_width', '100%');
INSERT INTO `cpg11d_config` VALUES ('make_intermediate', '1');
INSERT INTO `cpg11d_config` VALUES ('max_com_lines', '10');
INSERT INTO `cpg11d_config` VALUES ('max_com_size', '512');
INSERT INTO `cpg11d_config` VALUES ('max_com_wlength', '38');
INSERT INTO `cpg11d_config` VALUES ('max_img_desc_length', '512');
INSERT INTO `cpg11d_config` VALUES ('max_tabs', '12');
INSERT INTO `cpg11d_config` VALUES ('max_upl_size', '1024');
INSERT INTO `cpg11d_config` VALUES ('max_upl_width_height', '2048');
INSERT INTO `cpg11d_config` VALUES ('min_votes_for_rating', '1');
INSERT INTO `cpg11d_config` VALUES ('normal_pfx', 'normal_');
INSERT INTO `cpg11d_config` VALUES ('picture_table_width', '600');
INSERT INTO `cpg11d_config` VALUES ('picture_width', '400');
INSERT INTO `cpg11d_config` VALUES ('randpos_interval', '1063623637');
INSERT INTO `cpg11d_config` VALUES ('read_exif_data', '0');
INSERT INTO `cpg11d_config` VALUES ('reg_requires_valid_email', '1');
INSERT INTO `cpg11d_config` VALUES ('subcat_level', '2');
INSERT INTO `cpg11d_config` VALUES ('theme', 'igames');
INSERT INTO `cpg11d_config` VALUES ('thumbcols', '4');
INSERT INTO `cpg11d_config` VALUES ('thumbrows', '3');
INSERT INTO `cpg11d_config` VALUES ('thumb_method', 'im');
INSERT INTO `cpg11d_config` VALUES ('thumb_pfx', 'thumb_');
INSERT INTO `cpg11d_config` VALUES ('thumb_width', '100');
INSERT INTO `cpg11d_config` VALUES ('userpics', 'userpics/');
INSERT INTO `cpg11d_config` VALUES ('user_field1_name', 'Photographer');
INSERT INTO `cpg11d_config` VALUES ('user_field2_name', '');
INSERT INTO `cpg11d_config` VALUES ('user_field3_name', '');
INSERT INTO `cpg11d_config` VALUES ('user_field4_name', '');
INSERT INTO `cpg11d_config` VALUES ('display_comment_count', '0');
INSERT INTO `cpg11d_config` VALUES ('show_private', '0');
INSERT INTO `cpg11d_config` VALUES ('first_level', '1');
INSERT INTO `cpg11d_config` VALUES ('display_film_strip', '1');
INSERT INTO `cpg11d_config` VALUES ('max_film_strip_items', '5');
INSERT INTO `cpg11d_config` VALUES ('thumb_use', 'ht');



#
# Dumping data for table `CPG_usergroups`
#

INSERT INTO CPG_usergroups VALUES (1, 'Administrators', 0, 1, 1, 1, 1, 1, 1, 0, 0);
INSERT INTO CPG_usergroups VALUES (2, 'Registered', 1024, 0, 1, 1, 1, 1, 1, 1, 0);
INSERT INTO CPG_usergroups VALUES (3, 'Anonymous', 0, 0, 1, 1, 0, 0, 0, 1, 1);
INSERT INTO CPG_usergroups VALUES (4, 'Banned', 0, 0, 0, 0, 0, 0, 0, 1, 1);

#
# Dumping data for table `CPG_categories`
#

INSERT INTO CPG_categories VALUES (1, 0, 'User galleries', 'This category contains albums that belong to Coppermine users.', 0, 0, 0, 0, 0, 'NO');
