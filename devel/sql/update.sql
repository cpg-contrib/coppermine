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

ALTER TABLE `CPG_pictures` ADD `description` VARCHAR( 255 ) NOT NULL AFTER `caption` ;
INSERT INTO CPG_config VALUES ('disable_popup_rightclick', '0');
INSERT INTO CPG_config VALUES ('disable_gallery_rightclick', '0');

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