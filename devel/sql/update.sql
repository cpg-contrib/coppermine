#
# Modify structure for table `CPG_comments`
#

ALTER TABLE CPG_comments add msg_raw_ip tinytext;
ALTER TABLE CPG_comments add msg_hdr_ip tinytext;
ALTER TABLE CPG_pictures add pic_raw_ip tinytext;
ALTER TABLE CPG_pictures add pic_hdr_ip tinytext;

INSERT INTO CPG_config VALUES ('thumb_use', 'any');
INSERT INTO CPG_config VALUES ('show_private', '0');
INSERT INTO CPG_config VALUES ('first_level', '1');
INSERT INTO CPG_config VALUES ('display_film_strip', '1');
INSERT INTO CPG_config VALUES ('max_film_strip_items', '5');
INSERT INTO CPG_config VALUES ('comment_email_notification', '0');
INSERT INTO CPG_config VALUES ('read_iptc_data', '0');
INSERT INTO CPG_config VALUES ('display_uploader', '0');

#gtroll wil implement
#INSERT INTO CPG_config VALUES ('picinfo_display_filename', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_album_name', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_file_size', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_dimensions', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_count_displayed', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_URL', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_URL_bookmark', '1');
#INSERT INTO CPG_config VALUES ('picinfo_display_favorites', 1');

INSERT INTO CPG_config VALUES ('reg_notify_admin_email', '0');
INSERT INTO CPG_config VALUES ('disable_comment_flood_protect', '0');
INSERT INTO CPG_config VALUES ('upl_notify_admin_email', '0');

# Modify structure for category thumb
# ALTER TABLE `CPG_categories` ADD `thumb` INT NOT NULL AFTER `parent` ;


#
# Table structure for table `CPG_banned`
#

CREATE TABLE CPG_banned (
        ban_id int(11) NOT NULL auto_increment,
        user_id int(11) DEFAULT NULL,
        ip_addr tinytext DEFAULT NULL,
        expiry datetime DEFAULT NULL,
        PRIMARY KEY  (ban_id)
) TYPE=MyISAM;

#
# Table structure for table `CPG_exif`
#
CREATE TABLE CPG_exif (
  `filename` varchar(255) NOT NULL default '',
  `exifData` text NOT NULL,
  UNIQUE KEY `filename` (`filename`)
) TYPE=MyISAM;
