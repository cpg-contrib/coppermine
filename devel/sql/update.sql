#
# Modify structure for table `CPG_comments`
#

ALTER TABLE CPG_comments add msg_raw_ip tinytext;
ALTER TABLE CPG_comments add msg_hdr_ip tinytext;