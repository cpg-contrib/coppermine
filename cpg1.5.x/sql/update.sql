##  ********************************************
##  Coppermine Photo Gallery
##  ************************
##  Copyright (c) 2003-2008 Dev Team
##  v1.1 originally written by Gregory DEMAR
##
##  This program is free software; you can redistribute it and/or modify
##  it under the terms of the GNU General Public License version 3
##  as published by the Free Software Foundation.
##
##  ********************************************
##  Coppermine version: 1.5.0
##  $Source: /cvsroot/coppermine/devel/sql/update.sql,v $
##  $Revision$
##  $LastChangedBy$
##  $Date$
##  ********************************************


#
# Table structure for table `CPG_sessions`
#

CREATE TABLE CPG_sessions (
  session_id varchar(40) NOT NULL default '',
  user_id int(11) default '0',
  time int(11) default NULL,
  remember int(1) default '0',
  PRIMARY KEY (session_id)
) TYPE=MyISAM COMMENT='Used to store sessions';



#
# Table structure for table `CPG_categorymap`
#

CREATE TABLE IF NOT EXISTS `CPG_categorymap` (
  cid int(11) NOT NULL,
  group_id int(11) NOT NULL,
  PRIMARY KEY  (cid,group_id)
) ENGINE=MyISAM COMMENT='Holds the categories where groups can create albums';



#
# Table structure for table `CPG_filetypes`
#

CREATE TABLE CPG_filetypes (
  extension char(7) NOT NULL default '',
  mime varchar(70) default NULL,
  content char(15) default NULL,
  KEY extension (extension)
) TYPE=MyISAM COMMENT='Used to store the file extensions';

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


INSERT INTO CPG_config VALUES ('allowed_img_types', 'jpeg/jpg/png/gif');

INSERT INTO CPG_config VALUES ('allowed_mov_types', 'asf/asx/mpg/mpeg/wmv/swf/avi/mov');

INSERT INTO CPG_config VALUES ('allowed_snd_types', 'mp3/midi/mid/wma/wav/ogg');

INSERT INTO CPG_config VALUES ('allowed_doc_types', 'doc/txt/rtf/pdf/xls/pps/ppt/zip/gz/mdb');
INSERT INTO CPG_filetypes VALUES ('001', 'application/001', 'document', '');
INSERT INTO CPG_filetypes VALUES ('7z', 'application/7z', 'document', '');
INSERT INTO CPG_filetypes VALUES ('arj', 'application/arj', 'document', '');
INSERT INTO CPG_filetypes VALUES ('bz2', 'application/bz2', 'document', '');
INSERT INTO CPG_filetypes VALUES ('cab', 'application/cab', 'document', '');
INSERT INTO CPG_filetypes VALUES ('lzh', 'application/lzh', 'document', '');
INSERT INTO CPG_filetypes VALUES ('rpm', 'application/rpm', 'document', '');
INSERT INTO CPG_filetypes VALUES ('tar', 'application/tar', 'document', '');
INSERT INTO CPG_filetypes VALUES ('z', 'application/z', 'document', '');
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


#
# Add default media player for movie/audio files
#
UPDATE CPG_filetypes SET player='WMP' WHERE extension IN ('asf','asx','mpg','mpeg','wmv','avi','mp3','midi','mid','wma','wav');
UPDATE CPG_filetypes SET player='QT' WHERE extension IN ('mov');
UPDATE CPG_filetypes SET player='RMP' WHERE extension IN ('ra','ram','rm');
UPDATE CPG_filetypes SET player='SWF' WHERE extension IN ('swc','swf');


INSERT INTO CPG_config VALUES ('display_film_strip_filename', '0');
# INSERT INTO CPG_config VALUES ('display_admin_uploader','0');
INSERT INTO CPG_config VALUES ('display_filename','0');
INSERT INTO CPG_config VALUES ('global_registration_pw','');

#movie download link -> to picinfo
INSERT INTO CPG_config VALUES ('picinfo_movie_download_link', '1');

INSERT INTO CPG_config VALUES ('vanity_block','0');

INSERT INTO CPG_config VALUES ('log_mode', '0');

INSERT INTO CPG_config VALUES ('media_autostart', '1');

INSERT INTO CPG_config VALUES ('enable_encrypted_passwords','0');

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


#
# Table structure for table `CPG_banned`
#

CREATE TABLE CPG_banned (
        ban_id int(11) NOT NULL auto_increment,
        user_id int(11) DEFAULT NULL,
        ip_addr tinytext,
        expiry datetime DEFAULT NULL,
        PRIMARY KEY  (ban_id)
) TYPE=MyISAM;

UPDATE `CPG_config` SET value='$/\\\\:*?&quot;\'&lt;&gt;|` &amp;' WHERE name='forbiden_fname_char';

#
# Fix usermgr timing out with 1k+ users -Omni
#
## Disabled dropping the index 'owner_id' since it gets recreated.
## ALTER TABLE CPG_pictures DROP INDEX ( `owner_id` );
ALTER TABLE CPG_pictures DROP INDEX ( `owner_id_2` );
ALTER TABLE CPG_pictures ADD INDEX owner_id( `owner_id` );


#
# Allows user gallery icons
#
ALTER TABLE CPG_pictures ADD `galleryicon` INT UNSIGNED DEFAULT '0' NOT NULL AFTER `approved`;

#
# Record the last hit IP
#

ALTER TABLE `CPG_pictures` ADD `lasthit_ip` TINYTEXT ;

#
# Table structure for table `CPG_favpics`
#

CREATE TABLE `CPG_favpics` (
`user_id` INT( 11 ) NOT NULL ,
`user_favpics` TEXT NOT NULL ,
PRIMARY KEY ( `user_id` )
) COMMENT = 'Stores the server side favourites';


#
# Table structure for table `CPG_dict`
#

CREATE TABLE CPG_dict (
  keyId bigint(20) NOT NULL auto_increment,
  keyword varchar(60) NOT NULL default '',
  PRIMARY KEY  (keyId)
) TYPE=MyISAM  COMMENT = 'Holds the keyword dictionary';

#
# Add config profile rows
#

ALTER TABLE `CPG_users` CHANGE `user_location` `user_profile1` VARCHAR(255);
ALTER TABLE `CPG_users` CHANGE `user_interests` `user_profile2` VARCHAR(255);
ALTER TABLE `CPG_users` CHANGE `user_website` `user_profile3` VARCHAR(255);
ALTER TABLE `CPG_users` CHANGE `user_occupation` `user_profile4` VARCHAR(255);

ALTER TABLE `CPG_users` ADD `user_profile5` varchar(255) default '' NOT NULL;
ALTER TABLE `CPG_users` ADD `user_profile6` varchar(255) default '' NOT NULL;

#
# Enlarge password field for MD5/SHA1 hash
#

ALTER TABLE `CPG_users` CHANGE `user_password` `user_password` VARCHAR( 40 ) NOT NULL default '';



INSERT INTO CPG_config VALUES ('user_profile1_name', 'Location');
INSERT INTO CPG_config VALUES ('user_profile2_name', 'Interests');
INSERT INTO CPG_config VALUES ('user_profile3_name', 'Website');
INSERT INTO CPG_config VALUES ('user_profile4_name', 'Occupation');
INSERT INTO CPG_config VALUES ('user_profile5_name', '');
INSERT INTO CPG_config VALUES ('user_profile6_name', 'Biography');


INSERT INTO CPG_config VALUES ('language_fallback', '0');

INSERT INTO CPG_config VALUES ('time_offset', '0');

ALTER TABLE `CPG_users` CHANGE `user_profile6` `user_profile6` TEXT NOT NULL;

ALTER TABLE `CPG_albums` ADD `alb_password` varchar(32) default '';

INSERT INTO CPG_config VALUES ('ban_private_ip', '0');

INSERT INTO CPG_config VALUES ('smtp_host', '');
INSERT INTO CPG_config VALUES ('smtp_username', '');
INSERT INTO CPG_config VALUES ('smtp_password', '');

INSERT INTO CPG_config VALUES ('enable_plugins', '1');

CREATE TABLE CPG_plugins (
  plugin_id int(10) unsigned NOT NULL auto_increment,
  name varchar(64) NOT NULL default '',
  path varchar(128) NOT NULL default '',
  priority int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (plugin_id),
  UNIQUE KEY name (name),
  UNIQUE KEY path (path)
) TYPE=MyISAM COMMENT='Stores the plugins';

INSERT INTO CPG_config VALUES ('enable_help', '2');

INSERT INTO CPG_config VALUES ('allow_email_change', '0');
INSERT INTO CPG_config VALUES ('show_which_exif', '|0|0|0|0|0|0|0|0|1|0|1|1|0|0|0|0|0|0|0|0|0|0|0|1|0|0|0|1|0|0|0|1|1|0|0|0|0|1|0|0|0|1|0|0|1|1|0|0|0|0|0|1|0|1|1');
INSERT INTO CPG_config VALUES ('alb_desc_thumb', '1');

ALTER TABLE `CPG_albums` ADD `alb_password_hint` TEXT ;

INSERT INTO CPG_config VALUES ('categories_alpha_sort', '0');
ALTER TABLE `CPG_banned` ADD `brute_force` TINYINT( 5 ) DEFAULT '0' NOT NULL ;
INSERT INTO CPG_config VALUES ('login_method', 'username');
INSERT INTO CPG_config VALUES ('login_threshold', '5');
INSERT INTO CPG_config VALUES ('login_expiry', '10');
INSERT INTO CPG_config VALUES ('clickable_keyword_search', '1');
INSERT INTO CPG_config VALUES ('link_pic_count', '0');
ALTER TABLE CPG_pictures ADD position INT(11) DEFAULT '0' NOT NULL;

INSERT INTO CPG_config VALUES ('auto_resize', '0');

#
# Table structure for table `CPG_bridge`
#

CREATE TABLE CPG_bridge (
  name varchar(40) NOT NULL default '0',
  value varchar(255) NOT NULL default '',
  UNIQUE KEY name (name)
) TYPE=MyISAM;

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


INSERT INTO CPG_config VALUES ('bridge_enable', '0');

#
# Table structure for table 'CPG_vote_stats'
#
CREATE TABLE CPG_vote_stats (
  `sid` int(11) NOT NULL auto_increment,
  `pid` varchar(100) NOT NULL default '',
  `rating` smallint(6) NOT NULL default '0',
  `ip` varchar(20) NOT NULL default '',
  `sdate` bigint(20) NOT NULL default '0',
  `referer` text NOT NULL,
  `browser` varchar(255) NOT NULL default '',
  `os` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`sid`)
);

INSERT INTO CPG_config VALUES ('vote_details', '0');

CREATE TABLE CPG_hit_stats (
  `sid` int(11) NOT NULL auto_increment,
  `pid` varchar(100) NOT NULL default '',
  `ip` varchar(20) NOT NULL default '',
  `search_phrase` varchar(255) NOT NULL default '',
  `sdate` bigint(20) NOT NULL default '0',
  `referer` text NOT NULL,
  `browser` varchar(255) NOT NULL default '',
  `os` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`sid`)
);

INSERT INTO CPG_config VALUES ('hit_details', '0');

INSERT INTO CPG_config VALUES ('browse_batch_add', '1');

INSERT INTO CPG_config VALUES ('custom_header_path', '');
INSERT INTO CPG_config VALUES ('custom_footer_path', '');

INSERT INTO CPG_config VALUES ('comments_sort_descending', '0');

INSERT INTO CPG_config VALUES ('report_post', '0');

INSERT INTO CPG_config VALUES ('users_can_edit_pics', '0');

INSERT INTO CPG_config VALUES ('allow_unlogged_access', '3');

INSERT INTO CPG_config VALUES ('home_target', 'index.php');

DELETE FROM CPG_config WHERE `name` = 'comment_email_notification';
DELETE FROM CPG_config WHERE `name` = 'hide_admin_uploader';


INSERT INTO CPG_config VALUES ('custom_lnk_name', '');
INSERT INTO CPG_config VALUES ('custom_lnk_url', '');
INSERT INTO CPG_config VALUES ('comments_anon_pfx', 'Guest_');

DELETE FROM CPG_config WHERE `name` = 'admin_activate';
INSERT INTO CPG_config VALUES ('admin_activation', '0');
ALTER TABLE CPG_pictures CHANGE `mtime` `mtime` DATETIME;

DELETE FROM CPG_exif;

#
# Remove support for random keying that has been abandoned.
#
DELETE FROM CPG_config WHERE `name` = 'randpos_interval';
ALTER TABLE CPG_pictures DROP INDEX `randpos`;
ALTER TABLE CPG_pictures DROP `randpos`;

# MySQL 5 compat fixes
ALTER TABLE `CPG_pictures` CHANGE `mtime` `mtime` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00';
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
ALTER TABLE `CPG_albums` DROP INDEX ( `moderator_group` );
ALTER TABLE `CPG_albums` ADD INDEX ( `moderator_group` );

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
UPDATE CPG_config SET `allowed_img_types` = 'jpeg/jpg/png/gif' WHERE `allowed_img_types`='ALL';
UPDATE CPG_config SET `allowed_mov_types` = 'asf/asx/mpg/mpeg/wmv/swf/avi/mov' WHERE `allowed_mov_types`='ALL';
UPDATE CPG_config SET `allowed_snd_types` = 'mp3/midi/mid/wma/wav/ogg' WHERE `allowed_snd_types`='ALL';
UPDATE CPG_config SET `allowed_doc_types` = 'doc/txt/rtf/pdf/xls/pps/ppt/zip/gz/mdb' WHERE `allowed_doc_types`='ALL';

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

# Social bookmarks settings
INSERT INTO CPG_config VALUES ('display_social_bookmarks','0');

# Sidebar settings
INSERT INTO CPG_config VALUES ('display_sidebar_user', '0');
INSERT INTO CPG_config VALUES ('display_sidebar_guest', '0');

# Allow non-admin users to assign album keywords
INSERT INTO CPG_config VALUES ('allow_user_album_keyword', '1');

INSERT INTO CPG_config VALUES ('count_file_hits', '1');
INSERT INTO CPG_config VALUES ('count_album_hits', '1');
