#
#---------- Table structure for table `CPG_sessions`------------------------
#
CREATE TABLE CPG_sessions (
  session_id VARCHAR(40) NOT NULL DEFAULT '',
  user_id INTEGER DEFAULT 0 ,
  time INTEGER DEFAULT NULL ,
  remember INTEGER DEFAULT 0 ,
  PRIMARY KEY(session_id));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_categorymap` --------------------
#
IF NOT EXISTS (select * from dbo.sysobjects where id = object_id(N'CPG_categorymap') and type = 'U')
BEGIN
CREATE TABLE CPG_categorymap (
  cid INTEGER  NOT NULL ,
  group_id INTEGER NOT NULL ,
  PRIMARY KEY(cid, group_id))
END;
#----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_albums` -------------------------
#
CREATE TABLE CPG_albums (
  aid INTEGER NOT NULL IDENTITY ,
  title VARCHAR(255) NOT NULL DEFAULT '',
  description TEXT NOT NULL ,
  visibility INTEGER NOT NULL DEFAULT 0 ,
  uploads VARCHAR(30) NOT NULL DEFAULT 'NO', CHECK(uploads IN('YES','NO')) ,
  comments VARCHAR(30) NOT NULL DEFAULT 'YES', CHECK(comments IN('YES','NO')) ,
  votes VARCHAR(30) NOT NULL DEFAULT 'YES', CHECK(votes IN('YES','NO')) ,
  pos INTEGER NOT NULL DEFAULT 0 ,
  category INTEGER  NOT NULL DEFAULT 0 ,
  owner INTEGER NOT NULL DEFAULT 1 ,
  thumb INTEGER NOT NULL DEFAULT 0 ,
  keyword VARCHAR(50) DEFAULT NULL ,
  alb_password VARCHAR(32) DEFAULT NULL ,
  alb_password_hint TEXT DEFAULT NULL ,
  moderator_group INTEGER NOT NULL DEFAULT 0 ,
  alb_hits INTEGER NOT NULL DEFAULT 0  ,
  PRIMARY KEY(aid));

CREATE INDEX alb_category ON CPG_albums (category);

CREATE INDEX moderator_group ON CPG_albums (moderator_group);

CREATE INDEX visibility ON CPG_albums (visibility);

#----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_categories` ---------------------
#
CREATE TABLE CPG_categories (
  cid INTEGER NOT NULL IDENTITY ,
  owner_id INTEGER NOT NULL DEFAULT 0 ,
  name VARCHAR(255) NOT NULL DEFAULT '',
  description TEXT NOT NULL ,
  pos INTEGER NOT NULL DEFAULT 0 ,
  parent INTEGER NOT NULL DEFAULT 0 ,
  thumb INTEGER NOT NULL DEFAULT 0  ,
  lft INTEGER NOT NULL DEFAULT 0,
  rgt INTEGER NOT NULL DEFAULT 0,
  depth TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY(cid));

CREATE INDEX cat_parent ON CPG_categories (parent);

CREATE INDEX cat_pos ON CPG_categories (pos);

CREATE INDEX cat_owner_id ON CPG_categories (owner_id);

CREATE INDEX depth_cid ON CPG_categories (depth, cid);
	
CREATE INDEX lft_depth ON CPG_categories (lft, depth);

#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_comments` -----------------------
#
CREATE TABLE CPG_comments (
  pid INTEGER NOT NULL DEFAULT 0 ,
  msg_id INTEGER NOT NULL IDENTITY ,
  msg_author VARCHAR(25) NOT NULL DEFAULT '',
  msg_body VARCHAR(MAX) NOT NULL ,
  msg_date DATETIME  DEFAULT NULL ,
  msg_raw_ip VARCHAR(255) DEFAULT NULL ,
  msg_hdr_ip VARCHAR(255) DEFAULT NULL ,
  author_md5_id VARCHAR(32) NOT NULL DEFAULT '',
  author_id INTEGER NOT NULL DEFAULT 0 ,
  approval VARCHAR(30) NOT NULL DEFAULT 'YES', CHECK(approval IN('YES','NO'))  ,
  PRIMARY KEY(msg_id));

CREATE INDEX com_pic_id ON CPG_comments (pid);
#----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_config` -------------------------
#
CREATE TABLE CPG_config (
  name VARCHAR(40) NOT NULL DEFAULT '',
  value VARCHAR(255) NOT NULL DEFAULT '',
  PRIMARY KEY(name));
#----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_pictures` -----------------------
#
CREATE TABLE CPG_pictures (
  pid INTEGER NOT NULL IDENTITY ,
  aid INTEGER NOT NULL DEFAULT 0 ,
  filepath VARCHAR(255) NOT NULL DEFAULT '',
  filename VARCHAR(255) NOT NULL DEFAULT '',
  filesize INTEGER NOT NULL DEFAULT 0 ,
  total_filesize INTEGER NOT NULL DEFAULT 0 ,
  pwidth SMALLINT NOT NULL DEFAULT 0 ,
  pheight SMALLINT NOT NULL DEFAULT 0 ,
  hits INTEGER NOT NULL DEFAULT 0 ,
  mtime DATETIME DEFAULT NULL ,
  ctime INTEGER NOT NULL DEFAULT 0 ,
  owner_id INTEGER NOT NULL DEFAULT 0 ,
  owner_name VARCHAR(40) NOT NULL DEFAULT '',
  pic_rating INTEGER NOT NULL DEFAULT 0 ,
  votes INTEGER NOT NULL DEFAULT 0 ,
  title VARCHAR(255) NOT NULL DEFAULT '',
  caption VARCHAR(MAX) NOT NULL ,
  keywords VARCHAR(255) NOT NULL DEFAULT '',
  approved VARCHAR(30) NOT NULL DEFAULT 'NO', CHECK(approved IN('YES','NO')) ,
  galleryicon INTEGER NOT NULL DEFAULT 0 ,
  user1 VARCHAR(255) NOT NULL DEFAULT '',
  user2 VARCHAR(255) NOT NULL DEFAULT '',
  user3 VARCHAR(255) NOT NULL DEFAULT '',
  user4 VARCHAR(255) NOT NULL DEFAULT '',
  url_prefix TINYINT NOT NULL DEFAULT 0 ,
  pic_raw_ip VARCHAR(255) DEFAULT NULL ,
  pic_hdr_ip VARCHAR(255) DEFAULT NULL ,
  lasthit_ip VARCHAR(255) DEFAULT NULL ,
  position INTEGER NOT NULL DEFAULT 0 ,
  PRIMARY KEY(pid));

CREATE INDEX owner_id ON CPG_pictures (owner_id);

CREATE INDEX pic_hits ON CPG_pictures (hits);

CREATE INDEX pic_rate ON CPG_pictures (pic_rating);

CREATE INDEX aid_approved ON CPG_pictures (aid, approved);

CREATE INDEX pic_aid ON CPG_pictures (aid);

CREATE INDEX search ON CPG_pictures (title, keywords, filename);
#-----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_usergroups` ----------------------
#
CREATE TABLE CPG_usergroups (
  group_id INTEGER NOT NULL IDENTITY ,
  group_name VARCHAR(255) NOT NULL DEFAULT '',
  group_quota INTEGER NOT NULL DEFAULT 0 ,
  has_admin_access TINYINT NOT NULL DEFAULT 0 ,
  can_rate_pictures TINYINT NOT NULL DEFAULT 0 ,
  can_send_ecards TINYINT NOT NULL DEFAULT 0 ,
  can_post_comments TINYINT NOT NULL DEFAULT 0 ,
  can_upload_pictures TINYINT NOT NULL DEFAULT 0 ,
  can_create_albums TINYINT NOT NULL DEFAULT 0 ,
  pub_upl_need_approval TINYINT NOT NULL DEFAULT 1 ,
  priv_upl_need_approval TINYINT NOT NULL DEFAULT 1 ,
  upload_form_config TINYINT NOT NULL DEFAULT 3 ,
  custom_user_upload TINYINT NOT NULL DEFAULT 0 ,
  num_file_upload TINYINT NOT NULL DEFAULT 1 ,
  num_URI_upload TINYINT NOT NULL DEFAULT 0  ,
  PRIMARY KEY(group_id));
#-----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_users` ---------------------------
#
CREATE TABLE CPG_users (
  user_id INTEGER  NOT NULL IDENTITY ,
  user_group INTEGER  NOT NULL DEFAULT 2 ,
  user_active VARCHAR(30) NOT NULL DEFAULT 'NO', CHECK(user_active IN('YES','NO')) ,
  user_name VARCHAR(25) NOT NULL DEFAULT '',
  user_password VARCHAR(40) NOT NULL DEFAULT '',
  user_lastvisit DATETIME DEFAULT NULL ,
  user_regdate DATETIME DEFAULT NULL ,
  user_group_list VARCHAR(255) NOT NULL DEFAULT '',
  user_email VARCHAR(255) NOT NULL DEFAULT '',
  user_profile1 VARCHAR(255) NOT NULL DEFAULT '',
  user_profile2 VARCHAR(255) NOT NULL DEFAULT '',
  user_profile3 VARCHAR(255) NOT NULL DEFAULT '',
  user_profile4 VARCHAR(255) NOT NULL DEFAULT '',
  user_profile5 VARCHAR(255) NOT NULL DEFAULT '',
  user_profile6 TEXT NOT NULL ,
  user_actkey VARCHAR(32) NOT NULL DEFAULT '',
  user_language VARCHAR(40) NOT NULL DEFAULT '',
  PRIMARY KEY(user_id), UNIQUE(user_name)  );
#-----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_votes` ---------------------------
#
CREATE TABLE CPG_votes (
  pic_id INTEGER NOT NULL DEFAULT 0 ,
  user_md5_id VARCHAR(32) NOT NULL DEFAULT '',
  vote_time INTEGER NOT NULL DEFAULT 0 ,
  PRIMARY KEY(pic_id, user_md5_id));
#----------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_banned` -------------------------
#
CREATE TABLE CPG_banned (
  ban_id INTEGER NOT NULL IDENTITY ,
  user_id INTEGER DEFAULT NULL ,
  ip_addr VARCHAR(255) DEFAULT NULL ,
  expiry DATETIME DEFAULT NULL ,
  brute_force TINYINT NOT NULL DEFAULT 0 ,
  PRIMARY KEY(ban_id));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_exif` --------------------------
#
CREATE TABLE CPG_exif (
  filename VARCHAR(255) NOT NULL DEFAULT '',
  exifData TEXT NOT NULL ,
  UNIQUE(filename));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_filetypes` ---------------------
#
IF NOT EXISTS (select * from dbo.sysobjects where id = object_id(N'CPG_filetypes') and type = 'U')
BEGIN
CREATE TABLE CPG_filetypes (
  extension VARCHAR(7) NOT NULL DEFAULT '',
  mime VARCHAR(255) DEFAULT NULL ,
  content VARCHAR(15) DEFAULT NULL ,
  player VARCHAR(5) DEFAULT NULL ,
  PRIMARY KEY(extension))
END;
#-------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_ecards` -----------------------
#
CREATE TABLE CPG_ecards (
  eid INTEGER NOT NULL IDENTITY ,
  sender_name VARCHAR(50) NOT NULL DEFAULT '',
  sender_email TEXT NOT NULL ,
  recipient_name VARCHAR(50) NOT NULL DEFAULT '',
  recipient_email TEXT NOT NULL ,
  link TEXT NOT NULL ,
  date VARCHAR(255) NOT NULL ,
  sender_ip VARCHAR(255) NOT NULL ,
  PRIMARY KEY(eid));
#--------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_plugins` ----------------------
#
CREATE TABLE CPG_plugins (
  plugin_id INTEGER NOT NULL IDENTITY ,
  name VARCHAR(64) NOT NULL DEFAULT '',
  path VARCHAR(128) NOT NULL DEFAULT '',
  priority INTEGER NOT NULL DEFAULT 0 ,
  PRIMARY KEY(plugin_id),
  UNIQUE(name), UNIQUE(path));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_temp_data` ---------------------
#
IF NOT EXISTS (select * from dbo.sysobjects where id = object_id(N'CPG_temp_data') and type = 'U')
BEGIN
CREATE TABLE CPG_temp_data (
  unique_ID VARCHAR(8) NOT NULL ,
  encoded_string VARBINARY(MAX) NOT NULL ,
  timestamp INTEGER NOT NULL ,
  PRIMARY KEY(unique_ID))
END;
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_favpics` -----------------------
#
CREATE TABLE CPG_favpics (
  user_id INTEGER NOT NULL ,
  user_favpics TEXT NOT NULL ,
  PRIMARY KEY(user_id));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_dict` --------------------------
#
CREATE TABLE CPG_dict (
  keyId BIGINT NOT NULL IDENTITY ,
  keyword VARCHAR(60) NOT NULL DEFAULT '',
  PRIMARY KEY(keyId));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_bridge` ------------------------
#
CREATE TABLE CPG_bridge (
  name VARCHAR(40) NOT NULL DEFAULT 0 ,
  value VARCHAR(255) NOT NULL DEFAULT '',
  UNIQUE(name));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_vote_stats` --------------------
#
CREATE TABLE CPG_vote_stats (
  sid INTEGER NOT NULL IDENTITY ,
  pid VARCHAR(100) NOT NULL DEFAULT '',
  rating SMALLINT NOT NULL DEFAULT 0 ,
  ip VARCHAR(20) NOT NULL DEFAULT '',
  sdate BIGINT NOT NULL DEFAULT 0 ,
  referer TEXT NOT NULL ,
  browser VARCHAR(255) NOT NULL DEFAULT '',
  os VARCHAR(50) NOT NULL ,
  uid INTEGER NOT NULL DEFAULT 0 ,
  PRIMARY KEY(sid));
#---------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_hit_stats` ---------------------
#
CREATE TABLE CPG_hit_stats (
  sid INTEGER NOT NULL IDENTITY ,
  pid VARCHAR(100) NOT NULL DEFAULT '',
  ip VARCHAR(20) NOT NULL DEFAULT '',
  search_phrase VARCHAR(255) NOT NULL DEFAULT '',
  sdate BIGINT NOT NULL DEFAULT 0 ,
  referer TEXT NOT NULL ,
  browser VARCHAR(255) NOT NULL DEFAULT '',
  os VARCHAR(50) NOT NULL ,
  uid INTEGER NOT NULL DEFAULT 0 ,
  PRIMARY KEY(sid));
#--------------------------------------------------------------------------


#
#----------  Table structure for table `CPG_temp_messages` ----------------
#
CREATE TABLE CPG_temp_messages (
  message_id VARCHAR(80) NOT NULL DEFAULT '',
  user_id INTEGER DEFAULT 0 ,
  time INTEGER DEFAULT NULL ,
  message TEXT NOT NULL ,
  PRIMARY KEY(message_id));
#--------------------------------------------------------------------------



#---------  Table structure for table CPG_languages  ---------

CREATE TABLE CPG_languages (
  lang_id  VARCHAR(40) NOT NULL DEFAULT '',
  english_name VARCHAR(70) DEFAULT NULL,
  native_name VARCHAR(70) DEFAULT NULL,
  custom_name VARCHAR(70) DEFAULT NULL,
  flag VARCHAR(15) DEFAULT NULL,
  available VARCHAR(10) NOT NULL DEFAULT 'NO', CHECK(available IN('YES','NO')),
  enabled VARCHAR(10) NOT NULL DEFAULT 'NO', CHECK(enabled IN('YES','NO')),
  complete VARCHAR(10) NOT NULL DEFAULT 'NO', CHECK(complete IN('YES','NO')),
  PRIMARY KEY (lang_id)
);
# --------------------------------------------------------