#
# Modify structure for table `CPG_comments`
#

ALTER TABLE CPG_comments add msg_raw_ip tinytext;
ALTER TABLE CPG_comments add msg_hdr_ip tinytext;

INSERT INTO `cpg11d_config` VALUES ('thumb_use', 'ht');
INSERT INTO `cpg11d_config` VALUES ('show_private', '0');
INSERT INTO `cpg11d_config` VALUES ('first_level', '1');
INSERT INTO `cpg11d_config` VALUES ('display_film_strip', '1');
INSERT INTO `cpg11d_config` VALUES ('max_film_strip_items', '5');
