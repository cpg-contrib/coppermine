IF NOT EXISTS (select * from dbo.sysobjects where id = object_id(N'CPG_mod_online') and type = 'U')
BEGIN
CREATE TABLE CPG_mod_online (
  user_id INTEGER NOT NULL DEFAULT 0,
  user_name VARCHAR(25) NOT NULL DEFAULT '',
  user_ip VARCHAR(255) NOT NULL,
  last_action datetime default NULL,
PRIMARY KEY(user_id), UNIQUE(user_ip) )
END;

INSERT INTO CPG_config VALUES ('record_online_users', '');
INSERT INTO CPG_config VALUES ('record_online_date', '');