##  ********************************************
##  Coppermine Photo Gallery
##  ************************
##  Copyright (c) 2003-2005 Coppermine Dev Team
##  v1.1 originaly written by Gregory DEMAR
##
##  This program is free software; you can redistribute it and/or modify
##  it under the terms of the GNU General Public License as published by
##  the Free Software Foundation; either version 2 of the License, or
##  (at your option) any later version.
##  ********************************************

#
# Table structure for table `CPG_albums`
#

CREATE TABLE IF NOT EXISTS CPG_albums (
  aid int(11) NOT NULL auto_increment,
  title varchar(255) NOT NULL default '',
  description text NOT NULL,
  visibility int(11) NOT NULL default '0',
  uploads enum('YES','NO') NOT NULL default 'NO',
  comments enum('YES','NO') NOT NULL default 'YES',
  votes enum('YES','NO') NOT NULL default 'YES',
  pos int(11) NOT NULL default '0',
  category int(11) NOT NULL default '0',
  pic_count int(11) NOT NULL default '0',
  thumb int(11) NOT NULL default '0',
  last_addition datetime NOT NULL default '0000-00-00 00:00:00',
  stat_uptodate enum('YES','NO') NOT NULL default 'NO',
  keyword varchar(50) default NULL,
  alb_password varchar(32) default NULL,
  alb_password_hint text,
  parent int(11) NOT NULL default '0',
  user_id int(11) NOT NULL default '0',
  PRIMARY KEY  (aid),
  KEY alb_category (category),
  KEY uid (user_id)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_banned`
#

CREATE TABLE IF NOT EXISTS CPG_banned (
  ban_id int(11) NOT NULL auto_increment,
  user_id int(11) default NULL,
  ip_addr tinytext,
  expiry datetime default NULL,
  brute_force tinyint(5) NOT NULL default '0',
  PRIMARY KEY  (ban_id)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_bridge`
#

CREATE TABLE IF NOT EXISTS CPG_bridge (
  `name` varchar(40) NOT NULL default '0',
  `value` varchar(255) NOT NULL default ''
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_categories`
#

CREATE TABLE IF NOT EXISTS CPG_categories (
  cid int(11) NOT NULL auto_increment,
  owner_id int(11) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  description text NOT NULL,
  pos int(11) NOT NULL default '0',
  parent int(11) NOT NULL default '0',
  thumb int(11) NOT NULL default '0',
  subcat_count int(11) NOT NULL default '0',
  alb_count int(11) NOT NULL default '0',
  pic_count int(11) NOT NULL default '0',
  stat_uptodate enum('YES','NO') NOT NULL default 'NO',
  PRIMARY KEY  (cid),
  KEY cat_parent (parent),
  KEY cat_pos (pos),
  KEY cat_owner_id (owner_id)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_categorymap`
#

CREATE TABLE IF NOT EXISTS CPG_categorymap (
  cid int(11) NOT NULL default '0',
  group_id int(11) NOT NULL default '0',
  PRIMARY KEY  (cid,group_id)
) TYPE=MyISAM COMMENT='To store the mapping for admin allowable category and their ';

# --------------------------------------------------------

#
# Table structure for table `CPG_cms`
#

CREATE TABLE IF NOT EXISTS CPG_cms (
  ID int(11) NOT NULL auto_increment,
  conid int(11) NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  content text NOT NULL,
  cpos int(11) NOT NULL default '0',
  `type` int(11) NOT NULL default '0',
  PRIMARY KEY  (ID,conid),
  FULLTEXT KEY title (title,content)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_comments`
#

CREATE TABLE IF NOT EXISTS CPG_comments (
  pid mediumint(10) NOT NULL default '0',
  msg_id mediumint(10) NOT NULL auto_increment,
  msg_parent int(11) NOT NULL default '0',
  msg_author varchar(25) NOT NULL default '',
  msg_body text NOT NULL,
  msg_date datetime NOT NULL default '0000-00-00 00:00:00',
  msg_raw_ip tinytext,
  msg_hdr_ip tinytext,
  author_md5_id varchar(32) NOT NULL default '',
  author_id int(11) NOT NULL default '0',
  deleted enum('0','1') NOT NULL default '0',
  PRIMARY KEY  (msg_id),
  KEY com_pic_id (pid),
  KEY msg_parent (msg_parent)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_config`
#

CREATE TABLE IF NOT EXISTS CPG_config (
  `name` varchar(40) NOT NULL default '',
  `value` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`name`)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_dict`
#

CREATE TABLE IF NOT EXISTS CPG_dict (
  keyId bigint(20) NOT NULL auto_increment,
  keyword varchar(60) NOT NULL default '',
  PRIMARY KEY  (keyId)
) TYPE=MyISAM COMMENT='Holds the keyword dictionary';

# --------------------------------------------------------

#
# Table structure for table `CPG_ecards`
#

CREATE TABLE IF NOT EXISTS CPG_ecards (
  eid int(11) NOT NULL auto_increment,
  sender_name varchar(50) NOT NULL default '',
  sender_email text NOT NULL,
  recipient_name varchar(50) NOT NULL default '',
  recipient_email text NOT NULL,
  link text NOT NULL,
  `date` tinytext NOT NULL,
  sender_ip tinytext NOT NULL,
  PRIMARY KEY  (eid)
) TYPE=MyISAM COMMENT='Used to log ecards';

# --------------------------------------------------------

#
# Table structure for table `CPG_exif`
#

CREATE TABLE IF NOT EXISTS CPG_exif (
  filename varchar(255) NOT NULL default '',
  exifData text NOT NULL,
  UNIQUE KEY filename (filename)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_favpics`
#

CREATE TABLE IF NOT EXISTS CPG_favpics (
  user_id int(11) NOT NULL default '0',
  user_favpics text NOT NULL,
  PRIMARY KEY  (user_id)
) TYPE=MyISAM COMMENT='Stores the server side favourites';

# --------------------------------------------------------

#
# Table structure for table `CPG_filetypes`
#

CREATE TABLE IF NOT EXISTS CPG_filetypes (
  extension varchar(7) NOT NULL default '',
  mime varchar(30) default NULL,
  content varchar(15) default NULL,
  player varchar(5) default NULL,
  PRIMARY KEY  (extension)
) TYPE=MyISAM COMMENT='Used to store the file extensions';

# --------------------------------------------------------

#
# Table structure for table `CPG_hit_stats`
#

CREATE TABLE IF NOT EXISTS CPG_hit_stats (
  sid int(11) NOT NULL auto_increment,
  pid varchar(100) NOT NULL default '',
  ip varchar(20) NOT NULL default '',
  search_phrase varchar(255) NOT NULL default '',
  sdate bigint(20) NOT NULL default '0',
  referer text NOT NULL,
  browser varchar(255) NOT NULL default '',
  os varchar(50) NOT NULL default '',
  PRIMARY KEY  (sid)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_pictures`
#

CREATE TABLE IF NOT EXISTS CPG_pictures (
  pid int(11) NOT NULL auto_increment,
  aid int(11) NOT NULL default '0',
  filepath varchar(255) NOT NULL default '',
  filename varchar(255) NOT NULL default '',
  filesize int(11) NOT NULL default '0',
  total_filesize int(11) NOT NULL default '0',
  pwidth smallint(6) NOT NULL default '0',
  pheight smallint(6) NOT NULL default '0',
  hits int(10) NOT NULL default '0',
  mtime datetime default NULL,
  ctime int(11) NOT NULL default '0',
  owner_id int(11) NOT NULL default '0',
  owner_name varchar(40) NOT NULL default '',
  pic_rating int(11) NOT NULL default '0',
  votes int(11) NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  caption text NOT NULL,
  keywords varchar(255) NOT NULL default '',
  approved enum('YES','NO') NOT NULL default 'NO',
  galleryicon int(10) unsigned NOT NULL default '0',
  user1 varchar(255) NOT NULL default '',
  user2 varchar(255) NOT NULL default '',
  user3 varchar(255) NOT NULL default '',
  user4 varchar(255) NOT NULL default '',
  url_prefix tinyint(4) NOT NULL default '0',
  pic_raw_ip tinytext,
  pic_hdr_ip tinytext,
  lasthit_ip tinytext,
  position int(11) NOT NULL default '0',
  PRIMARY KEY  (pid),
  KEY pic_hits (hits),
  KEY pic_rate (pic_rating),
  KEY aid_approved (aid,approved),
  KEY pic_aid (aid),
  KEY owner_id (owner_id),
  FULLTEXT KEY search (title,caption,keywords,filename)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_sessions`
#

CREATE TABLE IF NOT EXISTS CPG_sessions (
  session_id varchar(40) NOT NULL default '',
  user_id int(11) default '0',
  `time` int(11) default NULL,
  remember int(1) default '0',
  PRIMARY KEY  (session_id)
) TYPE=MyISAM COMMENT='Used to store sessions';

# --------------------------------------------------------

#
# Table structure for table `CPG_temp_data`
#

CREATE TABLE IF NOT EXISTS CPG_temp_data (
  unique_ID varchar(8) NOT NULL default '',
  encoded_string blob NOT NULL,
  `timestamp` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (unique_ID)
) TYPE=MyISAM COMMENT='Holds temporary file data for multiple file uploads';

# --------------------------------------------------------

#
# Table structure for table `CPG_useralbums`
#

CREATE TABLE IF NOT EXISTS CPG_useralbums (
  cid int(11) NOT NULL default '0',
  aid int(11) NOT NULL default '0',
  PRIMARY KEY  (cid,aid)
) TYPE=MyISAM COMMENT='Table to store mapping of user albums in public categories';

# --------------------------------------------------------

#
# Table structure for table `CPG_usergroups`
#

CREATE TABLE IF NOT EXISTS CPG_usergroups (
  group_id int(11) NOT NULL auto_increment,
  group_name varchar(255) NOT NULL default '',
  group_quota int(11) NOT NULL default '0',
  has_admin_access tinyint(4) NOT NULL default '0',
  can_rate_pictures tinyint(4) NOT NULL default '0',
  can_send_ecards tinyint(4) NOT NULL default '0',
  can_post_comments tinyint(4) NOT NULL default '0',
  can_upload_pictures tinyint(4) NOT NULL default '0',
  can_create_albums tinyint(4) NOT NULL default '0',
  pub_upl_need_approval tinyint(4) NOT NULL default '1',
  priv_upl_need_approval tinyint(4) NOT NULL default '1',
  upload_form_config tinyint(4) NOT NULL default '3',
  custom_user_upload tinyint(4) NOT NULL default '0',
  num_file_upload tinyint(4) NOT NULL default '5',
  num_URI_upload tinyint(4) NOT NULL default '3',
  PRIMARY KEY  (group_id)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_users`
#

CREATE TABLE IF NOT EXISTS CPG_users (
  user_id int(11) NOT NULL auto_increment,
  user_group int(11) NOT NULL default '2',
  user_active enum('YES','NO') NOT NULL default 'NO',
  user_name varchar(25) NOT NULL default '',
  user_password varchar(40) NOT NULL default '',
  user_lastvisit datetime NOT NULL default '0000-00-00 00:00:00',
  user_regdate datetime NOT NULL default '0000-00-00 00:00:00',
  user_group_list varchar(255) NOT NULL default '',
  user_email varchar(255) NOT NULL default '',
  user_profile1 varchar(255) NOT NULL default '',
  user_profile2 varchar(255) NOT NULL default '',
  user_profile3 varchar(255) NOT NULL default '',
  user_profile4 varchar(255) NOT NULL default '',
  user_profile5 varchar(255) NOT NULL default '',
  user_profile6 text NOT NULL,
  user_actkey varchar(32) NOT NULL default '',
  reset_key varchar(32) NOT NULL default '',
  PRIMARY KEY  (user_id),
  UNIQUE KEY user_name (user_name)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_vote_stats`
#

CREATE TABLE IF NOT EXISTS CPG_vote_stats (
  sid int(11) NOT NULL auto_increment,
  pid varchar(100) NOT NULL default '',
  rating smallint(6) NOT NULL default '0',
  ip varchar(20) NOT NULL default '',
  sdate bigint(20) NOT NULL default '0',
  referer text NOT NULL,
  browser varchar(255) NOT NULL default '',
  os varchar(50) NOT NULL default '',
  PRIMARY KEY  (sid)
) TYPE=MyISAM;

# --------------------------------------------------------

#
# Table structure for table `CPG_votes`
#

CREATE TABLE IF NOT EXISTS CPG_votes (
  pic_id mediumint(9) NOT NULL default '0',
  user_md5_id varchar(32) NOT NULL default '',
  vote_time int(11) NOT NULL default '0',
  PRIMARY KEY  (pic_id,user_md5_id)
) TYPE=MyISAM;
