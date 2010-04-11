##  ********************************************
##  Coppermine Photo Gallery
##  ************************
##  Copyright (c) 2003-2010 Coppermine Dev Team
##  v1.0 originally written by Gregory Demar
##
##  This program is free software; you can redistribute it and/or modify
##  it under the terms of the GNU General Public License version 3
##  as published by the Free Software Foundation.
##
##  ********************************************
##  Coppermine version: 1.5.4
##  $HeadURL$
##  $Revision$
##  $LastChangedBy$
##  $Date$
##  ********************************************


#
# Table structure for table `CPG_categorymap`
#

CREATE TABLE IF NOT EXISTS `CPG_categorymap` (
  cid int(11) NOT NULL,
  group_id int(11) NOT NULL,
  PRIMARY KEY  (cid,group_id)
) ENGINE=MyISAM COMMENT='Holds the categories where groups can create albums';

# Create temporary table to store messages carried over from one page to the other
CREATE TABLE CPG_temp_messages (
  message_id varchar(80) NOT NULL default '',
  user_id int(11) default '0',
  time int(11) default NULL,
  message text NOT NULL,
  PRIMARY KEY (message_id)
) TYPE=MyISAM COMMENT='Used to store messages from one page to the other';
# --------------------------------------------------------

ALTER TABLE CPG_filetypes DROP INDEX `EXTENSION`, ADD PRIMARY KEY ( `extension` );
ALTER TABLE CPG_filetypes ADD `player` VARCHAR( 5 ) ;
ALTER TABLE CPG_filetypes CHANGE `mime` `mime` CHAR(254) default NULL;


INSERT INTO CPG_filetypes VALUES ('001', 'application/001', 'document', '');
INSERT INTO CPG_filetypes VALUES ('7z', 'application/7z', 'document', '');
INSERT INTO CPG_filetypes VALUES ('arj', 'application/arj', 'document', '');
INSERT INTO CPG_filetypes VALUES ('bz2', 'application/bz2', 'document', '');
INSERT INTO CPG_filetypes VALUES ('cab', 'application/cab', 'document', '');
INSERT INTO CPG_filetypes VALUES ('lzh', 'application/lzh', 'document', '');
INSERT INTO CPG_filetypes VALUES ('rpm', 'application/rpm', 'document', '');
INSERT INTO CPG_filetypes VALUES ('tar', 'application/tar', 'document', '');
INSERT INTO CPG_filetypes VALUES ('z', 'application/z', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odb', 'application/vnd.oasis.opendocument.database', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odt', 'application/vnd.oasis.opendocument.text', 'document', '');
INSERT INTO CPG_filetypes VALUES ('ods', 'application/vnd.oasis.opendocument.spreadsheet', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odp', 'application/vnd.oasis.opendocument.presentation', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odg', 'application/vnd.oasis.opendocument.graphics', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odc', 'application/vnd.oasis.opendocument.chart', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odf', 'application/vnd.oasis.opendocument.formula', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odi', 'application/vnd.oasis.opendocument.image', 'document', '');
INSERT INTO CPG_filetypes VALUES ('odm', 'application/vnd.oasis.opendocument.text-master', 'document', '');
INSERT INTO CPG_filetypes VALUES ('ott', 'application/vnd.oasis.opendocument.text-template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('ots', 'application/vnd.oasis.opendocument.spreadsheet-template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('otp', 'application/vnd.oasis.opendocument.presentation-template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('otg', 'application/vnd.oasis.opendocument.graphics-template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('otc', 'application/vnd.oasis.opendocument.chart-template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('otf', 'application/vnd.oasis.opendocument.formula-template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('oti', 'application/vnd.oasis.opendocument.image-template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('oth', 'application/vnd.oasis.opendocument.text-web', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sxw', 'application/vnd.sun.xml.writer', 'document', '');
INSERT INTO CPG_filetypes VALUES ('stw', 'application/vnd.sun.xml.writer.template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sxc', 'application/vnd.sun.xml.calc', 'document', '');
INSERT INTO CPG_filetypes VALUES ('stc', 'application/vnd.sun.xml.calc.template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sxd', 'application/vnd.sun.xml.draw', 'document', '');
INSERT INTO CPG_filetypes VALUES ('std', 'application/vnd.sun.xml.draw.template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sxi', 'application/vnd.sun.xml.impress', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sti', 'application/vnd.sun.xml.impress.template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sxg', 'application/vnd.sun.xml.writer.global', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sxm', 'application/vnd.sun.xml.math', 'document', '');
INSERT INTO CPG_filetypes VALUES ('docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'document', '');
INSERT INTO CPG_filetypes VALUES ('docm', 'application/vnd.ms-word.document.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('dotx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('dotm', 'application/vnd.ms-word.template.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('xlsx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'document', '');
INSERT INTO CPG_filetypes VALUES ('xlsm', 'application/vnd.ms-excel.sheet.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('xltx', 'application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('xltm', 'application/vnd.ms-excel.template.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('xlsb', 'application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('xlam', 'application/vnd.ms-excel.addin.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'document', '');
INSERT INTO CPG_filetypes VALUES ('pptm', 'application/vnd.ms-powerpoint.presentation.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('ppsx', 'application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'document', '');
INSERT INTO CPG_filetypes VALUES ('ppsm', 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('potx', 'application/vnd.openxmlformats-officedocument.presentationml.template', 'document', '');
INSERT INTO CPG_filetypes VALUES ('potm', 'application/vnd.ms-powerpoint.template.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('ppam', 'application/vnd.ms-powerpoint.addin.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sldx', 'application/vnd.openxmlformats-officedocument.presentationml.slide', 'document', '');
INSERT INTO CPG_filetypes VALUES ('sldm', 'application/vnd.ms-powerpoint.slide.macroEnabled.12', 'document', '');
INSERT INTO CPG_filetypes VALUES ('thmx', 'application/vnd.ms-officetheme', 'document', '');
INSERT INTO CPG_filetypes VALUES ('onetoc', 'application/onenote', 'document', '');
INSERT INTO CPG_filetypes VALUES ('onetoc2', 'application/onenote', 'document', '');
INSERT INTO CPG_filetypes VALUES ('onetmp', 'application/onenote', 'document', '');
INSERT INTO CPG_filetypes VALUES ('onepkg', 'application/onenote', 'document', '');


INSERT INTO CPG_config VALUES ('global_registration_pw','');

#movie download link -> to picinfo
INSERT INTO CPG_config VALUES ('picinfo_movie_download_link', '1');

#site token to use in forms
INSERT INTO CPG_config VALUES ('site_token', MD5(RAND()));
INSERT INTO CPG_config VALUES ('form_token_lifetime', '900');

INSERT INTO CPG_config VALUES ('rating_stars_amount', '5');
INSERT INTO CPG_config VALUES ('old_style_rating', '0');

###### watermark ########
INSERT INTO CPG_config VALUES ('enable_watermark', '0');
INSERT INTO CPG_config VALUES ('where_put_watermark', 'southeast');
INSERT INTO CPG_config VALUES ('watermark_file', 'images/watermark.png');
INSERT INTO CPG_config VALUES ('which_files_to_watermark', 'both');
INSERT INTO CPG_config VALUES ('orig_pfx', 'orig_');
INSERT INTO CPG_config VALUES ('watermark_transparency', '40');
INSERT INTO CPG_config VALUES ('reduce_watermark', '0');
INSERT INTO CPG_config VALUES ('watermark_transparency_featherx', '0');
INSERT INTO CPG_config VALUES ('watermark_transparency_feathery', '0');
INSERT INTO CPG_config VALUES ('enable_thumb_watermark', '1');
#########################

###### thumb sharpening and cropping ########
INSERT INTO CPG_config VALUES ('enable_unsharp', '0');
INSERT INTO CPG_config VALUES ('unsharp_amount', '120');
INSERT INTO CPG_config VALUES ('unsharp_radius', '0.5');
INSERT INTO CPG_config VALUES ('unsharp_threshold', '3');
INSERT INTO CPG_config VALUES ('thumb_height', '140');
#########################

# Modify structure for multi album pictures
ALTER TABLE `CPG_albums` ADD `owner` int(11)  NOT NULL DEFAULT '1' AFTER `category`;


UPDATE `CPG_config` SET value='$/\\\\:*?&quot;&#039;&lt;&gt;|` &amp;#@' WHERE name='forbiden_fname_char';


ALTER TABLE `CPG_users` ADD `user_language` varchar(40) default '' NOT NULL;

#
# Enlarge password field for MD5/SHA1 hash
#

ALTER TABLE `CPG_users` CHANGE `user_password` `user_password` VARCHAR( 40 ) NOT NULL default '';

INSERT INTO CPG_config VALUES ('login_method', 'username');

ALTER TABLE `CPG_hit_stats` ADD `uid` INT(11) NOT NULL default '0' ;

INSERT INTO CPG_config VALUES ('allow_unlogged_access', '3');

# Remove features that are no longer supported
DELETE FROM CPG_config WHERE `name` = 'vanity_block';
DELETE FROM CPG_config WHERE `name` = 'display_faq';
DELETE FROM CPG_config WHERE `name` = 'ban_private_ip';
DELETE FROM CPG_config WHERE `name` = 'language_fallback';
DELETE FROM CPG_config WHERE `name` = 'language_list';
DELETE FROM CPG_config WHERE `name` = 'language_flags';
DELETE FROM CPG_config WHERE `name` = 'language_reset';
DELETE FROM CPG_config WHERE `name` = 'theme_list';
DELETE FROM CPG_config WHERE `name` = 'theme_reset';
DELETE FROM CPG_config WHERE `name` = 'display_social_bookmarks';


# MySQL 5 compat fixes

ALTER TABLE `CPG_albums` CHANGE `description` `description` TEXT NOT NULL;

# Add display of rating on thumbnails page
INSERT INTO CPG_config VALUES ('display_thumbnail_rating', '0');

# Display disclaimer on user registration
INSERT INTO CPG_config VALUES ('user_registration_disclaimer', '1');

INSERT INTO CPG_config VALUES ('thumbnail_to_fullsize', '0');
INSERT INTO CPG_config VALUES ('fullsize_padding_x', '5');
INSERT INTO CPG_config VALUES ('fullsize_padding_y', '3');

# Config approval
ALTER TABLE CPG_comments add approval enum('YES','NO') NOT NULL default 'YES';
ALTER TABLE CPG_comments add spam enum('YES','NO') NOT NULL default 'NO';
INSERT INTO CPG_config VALUES ('comment_approval', '0');
INSERT INTO CPG_config VALUES ('display_comment_approval_only', '0');
INSERT INTO CPG_config VALUES ('comment_placeholder', '1');
INSERT INTO CPG_config VALUES ('comment_user_edit', '1');
INSERT INTO CPG_config VALUES ('comment_captcha', '1');

# Safe mode
INSERT INTO CPG_config VALUES ('silly_safe_mode', '0');

# Registration Captcha
INSERT INTO CPG_config VALUES ('registration_captcha', '0');

# Flash in ecards
INSERT INTO CPG_config VALUES ('ecard_flash', '0');

# Create user album in personal gallery on registration
INSERT INTO CPG_config VALUES ('personal_album_on_registration', '0');

# Count hits in slideshow
INSERT INTO CPG_config VALUES ('slideshow_hits', '1');

# Shorten Browser entries in hit stats and vote stats
UPDATE CPG_hit_stats SET `browser` = 'IE6' WHERE `browser` ='Microsoft Internet Explorer 6.0';
UPDATE CPG_hit_stats SET `browser` = 'IE5.5' WHERE `browser` ='Microsoft Internet Explorer 5.5';
UPDATE CPG_hit_stats SET `browser` = 'IE6' WHERE `browser` ='MSIE 6.0';
UPDATE CPG_hit_stats SET `browser` = 'IE5.5' WHERE `browser` ='IE5.5';
UPDATE CPG_hit_stats SET `browser` = 'IE3' WHERE `browser` ='MSIE 3.0';
UPDATE CPG_hit_stats SET `browser` = 'IE4' WHERE `browser` ='MSIE 4.0';
UPDATE CPG_hit_stats SET `browser` = 'IE5.0' WHERE `browser` ='MSIE 5.0';
UPDATE CPG_hit_stats SET `browser` = 'IE7' WHERE `browser` ='MSIE 7.0';
UPDATE CPG_vote_stats SET `browser` = 'IE6' WHERE `browser` ='Microsoft Internet Explorer 6.0';
UPDATE CPG_vote_stats SET `browser` = 'IE5.5' WHERE `browser` ='Microsoft Internet Explorer 5.5';
UPDATE CPG_vote_stats SET `browser` = 'IE6' WHERE `browser` ='MSIE 6.0';
UPDATE CPG_vote_stats SET `browser` = 'IE5.5' WHERE `browser` ='IE5.5';
UPDATE CPG_vote_stats SET `browser` = 'IE3' WHERE `browser` ='MSIE 3.0';
UPDATE CPG_vote_stats SET `browser` = 'IE4' WHERE `browser` ='MSIE 4.0';
UPDATE CPG_vote_stats SET `browser` = 'IE5.0' WHERE `browser` ='MSIE 5.0';
UPDATE CPG_vote_stats SET `browser` = 'IE7' WHERE `browser` ='MSIE 7.0';


# Add album moderator entry
ALTER TABLE `CPG_albums` ADD `moderator_group` INT NOT NULL default 0;
ALTER TABLE `CPG_albums` ADD INDEX `moderator_group` ( `moderator_group` );

# Add album hits field
ALTER TABLE `CPG_albums` ADD `alb_hits` INT( 10 ) NOT NULL default 0;

# Display transparent overlay on images
INSERT INTO CPG_config VALUES ('transparent_overlay', '0');


# Ask guests to log in to post comments
INSERT INTO CPG_config VALUES ('comment_promote_registration', '0');

# Add uid column to vote stats
ALTER TABLE `CPG_vote_stats` ADD `uid` INT(11) NOT NULL default '0';

# Allow users to delete their own user account
INSERT INTO CPG_config VALUES ('allow_user_account_delete', '0');

ALTER TABLE CPG_temp_messages CHANGE `message_id` `message_id` VARCHAR(80) NOT NULL;


# Display statistics on index page
INSERT INTO CPG_config VALUES ('display_stats_on_index', '1');


# Enable "browse by date" meta album
INSERT INTO CPG_config VALUES ('browse_by_date', '0');

# Allow users to move their albums from/to categories
INSERT INTO CPG_config VALUES ('allow_user_move_album', '0');

# Allow users to edit pics after admin closed category
INSERT INTO CPG_config VALUES ('allow_user_edit_after_cat_close', '0');

# Display redirection pages
INSERT INTO CPG_config VALUES ('display_redirection_page', '0');

# Display thumbnail previews on batch-add pages
INSERT INTO CPG_config VALUES ('display_thumbs_batch_add', '1');

# The ALL setting for filetypes is not a good idea - replace it!
UPDATE CPG_config SET `value` = 'jpeg/jpg/png/gif' WHERE `name` = 'allowed_img_types' AND `value` = 'ALL';
UPDATE CPG_config SET `value` = 'asf/asx/mpg/mpeg/wmv/swf/avi/mov' WHERE `name` = 'allowed_mov_types' AND `value` = 'ALL';
UPDATE CPG_config SET `value` = 'mp3/midi/mid/wma/wav/ogg' WHERE `name` = 'allowed_snd_types' AND `value` = 'ALL';
UPDATE CPG_config SET `value` = 'doc/txt/rtf/pdf/xls/pps/ppt/zip/gz/mdb' WHERE `name` = 'allowed_doc_types' AND `value` = 'ALL';

# Display the news section from coppermine-gallery.net
INSERT INTO CPG_config VALUES ('display_coppermine_news', '1');

# Contact form settings
INSERT INTO CPG_config VALUES ('contact_form_guest_enable', '0');
INSERT INTO CPG_config VALUES ('contact_form_guest_name_field', '2');
INSERT INTO CPG_config VALUES ('contact_form_guest_email_field', '2');
INSERT INTO CPG_config VALUES ('contact_form_registered_enable', '0');
INSERT INTO CPG_config VALUES ('contact_form_subject_content', 'Coppermine gallery contact form');
INSERT INTO CPG_config VALUES ('contact_form_subject_field', '0');
INSERT INTO CPG_config VALUES ('contact_form_sender_email', '1');

# Sidebar settings
INSERT INTO CPG_config VALUES ('display_sidebar_user', '0');
INSERT INTO CPG_config VALUES ('display_sidebar_guest', '0');

# Allow non-admin users to assign album keywords
INSERT INTO CPG_config VALUES ('allow_user_album_keyword', '1');

INSERT INTO CPG_config VALUES ('count_file_hits', '1');
INSERT INTO CPG_config VALUES ('count_album_hits', '1');

# Category system
ALTER TABLE CPG_categories ADD `lft` mediumint( 8 ) unsigned NOT NULL default '0';
ALTER TABLE CPG_categories ADD `rgt` mediumint( 8 ) unsigned NOT NULL default '0';
ALTER TABLE CPG_categories ADD `depth` mediumint( 8 ) unsigned NOT NULL default '0';
ALTER TABLE CPG_categories ADD INDEX `depth_cid` ( `depth` , `cid` );
ALTER TABLE CPG_categories ADD INDEX `lft_depth` ( `lft` , `depth` );

# Add menu icon option
INSERT INTO CPG_config VALUES ('enable_menu_icons', '0');

CREATE TABLE IF NOT EXISTS CPG_languages (
  lang_id  varchar(40) NOT NULL default '',
  english_name varchar(70) default NULL,
  native_name varchar(70) default NULL,
  custom_name varchar(70) default NULL,
  flag varchar(15) default NULL,
  abbr varchar(15) NOT NULL default '',
  available enum('YES','NO') NOT NULL default 'NO',
  enabled enum('YES','NO') NOT NULL default 'NO',
  complete enum('YES','NO') NOT NULL default 'NO',
  PRIMARY KEY (lang_id)
) TYPE=MyISAM COMMENT='Contains the language file definitions';

INSERT INTO CPG_languages (lang_id, english_name, native_name, flag, abbr, available, enabled, complete) VALUES ('luxembourgish', 'Luxembourgish','Lietuvi&#0353;kai','lt','', 'NO', 'NO', 'NO');

UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='bulgarian';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='chinese_gb';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='english_gb';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='english';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='finnish';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='french';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='german';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='german_formal';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='greek';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='polish';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='spanish';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='russian';
UPDATE CPG_languages SET `available` = 'YES' WHERE `lang_id`='slovenian';

INSERT INTO CPG_config VALUES ('display_xp_publish_link', '0');

# Modify banned table to allow ban by email and username
ALTER TABLE `CPG_banned` ADD email varchar(255) NOT NULL default '' AFTER `user_id`;
ALTER TABLE `CPG_banned` ADD user_name varchar(255) NOT NULL default '' AFTER `user_id`;

# Add auto-purging of expired bans
INSERT INTO CPG_config VALUES ('purge_expired_bans', '1');

# Add Akismet support
INSERT INTO CPG_config VALUES ('comment_akismet_enable', '0');
INSERT INTO CPG_config VALUES ('comment_akismet_api_key', '');
INSERT INTO CPG_config VALUES ('comment_akismet_counter', '0');
INSERT INTO CPG_config VALUES ('comment_akismet_group', '0');

# Remove the group "Banned", as it never was used anyway
DELETE FROM CPG_usergroups WHERE `group_name` = 'Banned';

INSERT INTO CPG_config VALUES ('language_autodetect', '1');

INSERT INTO CPG_config VALUES ('upload_mechanism', 'swfupload');
INSERT INTO CPG_config VALUES ('allow_user_upload_choice', '1');

ALTER TABLE CPG_usergroups ADD access_level tinyint(4) NOT NULL default '3';
ALTER TABLE CPG_usergroups ALTER access_level SET DEFAULT '3';

INSERT INTO CPG_config VALUES ('tabs_dropdown', '1');

ALTER TABLE CPG_dict ADD UNIQUE KEY `keyword` (keyword);

INSERT INTO CPG_config VALUES('keyword_separator', ' ');

# Remove the display filename in film strip config value
DELETE FROM CPG_config WHERE `name` = 'display_film_strip_filename';

# Add the column "abbreviation" for the language folder names within the docs folder
ALTER TABLE `CPG_languages` ADD `abbr` varchar(15) default '' NOT NULL AFTER `flag`;

# Add option for comments per page
INSERT INTO CPG_config VALUES ('comments_per_page', '20');

# Add option for batch add process limit
INSERT INTO CPG_config VALUES ('batch_proc_limit', '2');

UPDATE CPG_languages SET `abbr` = 'en' WHERE `lang_id`='english';
UPDATE CPG_languages SET `abbr` = 'de' WHERE `lang_id`='german';
UPDATE CPG_languages SET `abbr` = 'fr' WHERE `lang_id`='french';

TRUNCATE TABLE CPG_exif;
ALTER TABLE CPG_exif CHANGE `filename` `pid` int(11) NOT NULL;
ALTER TABLE CPG_exif DROP INDEX `filename`, ADD PRIMARY KEY ( `pid` );

ALTER TABLE CPG_sessions CHANGE `session_id` `session_id` char(32);

DROP TABLE CPG_temp_data;

ALTER TABLE `CPG_usergroups` DROP `upload_form_config`, DROP `custom_user_upload`, DROP `num_file_upload`, DROP `num_URI_upload`;

ALTER TABLE `CPG_pictures` DROP INDEX `pic_aid`, ADD INDEX `pic_aid` ( `aid` , `pid` );

INSERT INTO CPG_config VALUES ('display_reset_boxes_in_config', '0');

# Add performance metering records
INSERT INTO CPG_config VALUES ('performance_timestamp', '0');
INSERT INTO CPG_config VALUES ('performance_page_generation_time', '0');
INSERT INTO CPG_config VALUES ('performance_page_query_time', '0');
INSERT INTO CPG_config VALUES ('performance_page_query_count', '0');

INSERT INTO CPG_config VALUES ('rate_own_files', '0');

ALTER TABLE `CPG_pictures` DROP `owner_name`;

INSERT INTO CPG_config VALUES ('count_admin_hits', '0');

UPDATE CPG_filetypes SET player = 'HTMLA' WHERE extension = 'ogg' AND player = '';
INSERT INTO CPG_filetypes VALUES ('oga', 'audio/ogg', 'audio', 'HTMLA');
INSERT INTO CPG_filetypes VALUES ('ogv', 'video/ogg', 'movie', 'HTMLV');

INSERT INTO CPG_config VALUES ('picture_use', 'thumb');

ALTER TABLE CPG_comments ADD INDEX author_id (author_id);
ALTER TABLE CPG_users ADD INDEX user_group (user_group);

UPDATE CPG_albums SET owner = category - 10000 WHERE category > 10000;

# Fulltext index is no longer used when searching
ALTER TABLE CPG_pictures DROP INDEX `search`;

ALTER TABLE CPG_pictures ADD `guest_token` VARCHAR(32) DEFAULT '';