<?php
/**
 * Coppermine Photo Gallery Next Gen
 *
 * Copyright (c) 2003-2005 Coppermine Dev Team
 * v1.1 originaly written by Gregory DEMAR
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Coppermine version: 1.4.1
 * $Source: /home/cvs/cpgNGDevel/classes/cpgConfig.class.php,v $
 * $Revision$
 * $Author$
 * $Date$
 */
/**
 * cpgConfig
 *
 * @package
 * @author tarique
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgConfig {

    //require_once('../include/config.inc.php');

	var $conf = array();

    var $db;

    var $dbserver;

    var $dbuser;

    var $dbpass;

    var $dbname;

    var $table_prefix;

    /**
     * cpgConfig::cpgConfig()
     *
     * @return
     */
    function cpgConfig()
    {

        global $CONFIG;

		$this->dbserver = $CONFIG['dbserver'];

        $this->dbuser = $CONFIG['dbuser'];

		$this->dbpass = $CONFIG['dbpass'];

		$this->dbname = $CONFIG['dbname'];

		$this->table_prefix = $CONFIG['TABLE_PREFIX'];

    }

    /**
     * cpgConfig::populate()
     *
     * @return
     */
    function populate()
    {
        $this->db = cpgDB::getInstance();

        $this->conf['TABLE_PICTURES'] = $this->table_prefix . "pictures";
        $this->conf['TABLE_ALBUMS'] = $this->table_prefix . "albums";
        $this->conf['TABLE_COMMENTS'] = $this->table_prefix . "comments";
        $this->conf['TABLE_CATEGORIES'] = $this->table_prefix . "categories";
        $this->conf['TABLE_CONFIG'] = $this->table_prefix . "config";
        $this->conf['TABLE_USERGROUPS'] = $this->table_prefix . "usergroups";
        $this->conf['TABLE_VOTES'] = $this->table_prefix . "votes";
        $this->conf['TABLE_USERS'] = $this->table_prefix . "users";
        $this->conf['TABLE_BANNED'] = $this->table_prefix . "banned";
        $this->conf['TABLE_EXIF'] = $this->table_prefix . "exif";
        $this->conf['TABLE_FILETYPES'] = $this->table_prefix . "filetypes";
        $this->conf['TABLE_ECARDS'] = $this->table_prefix . "ecards";
        $this->conf['TABLE_TEMPDATA'] = $this->table_prefix . "temp_data";
        $this->conf['TABLE_FAVPICS'] = $this->table_prefix . "favpics";
        $this->conf['TABLE_BRIDGE'] = $this->table_prefix . "bridge";
        $this->conf['TABLE_VOTE_STATS'] = $this->table_prefix . "vote_stats";
        $this->conf['TABLE_HIT_STATS'] = $this->table_prefix . "hit_stats";
        $this->conf['TABLE_CATEGORY_MAP'] = $this->table_prefix . "categorymap";
        $this->conf['TABLE_PLUGINS'] = $this->table_prefix.'plugins';
		$this->conf['TABLE_INVITATIONS'] = $this->table_prefix . "invitations";
        // Connect to database
        $query = "SELECT * FROM {$this->conf['TABLE_CONFIG']}";

        if (!$this->db->query($query)) {
            die("<b>Coppermine critical error</b>:<br />Unable to connect to database !<br /><br />MySQL said: <b>" . mysql_error() . "</b>");
        }

        $this->conf['LINK_ID'] = $this->db->linkId();

        while ($row = $this->db->fetchRow()) {
            $this->conf[$row['name']] = $row['value'];
        }
        // Check for GD GIF Create support
        if ($this->conf['thumb_method'] == 'im' || function_exists('imagecreatefromgif')) {
            $this->conf['GIF_support'] = 1;
        } else {
            $this->conf['GIF_support'] = 0;
        }
        // Reference 'site_url' to 'ecards_more_pic_target'
        $this->conf['site_url'] = &$this->conf['ecards_more_pic_target'];
    }

    /**
     * cpgConfig::getInstance()
     *
     * @return
     */
    function &getInstance()
    {
        static $instance;

        if (!isset($instance)) {
            $instance = new cpgConfig;
        }
        return ($instance);
    }
   
   private function __get($nm)
   {
        if (isset($this->conf[$nm])) {
            return $this->conf[$nm];
        } elseif (isset($this->conf[strtoupper($nm)])) {
            return $this->conf[strtoupper($nm)];
        } elseif (isset($this->conf[strtolower($nm)])) {
            return $this->conf[strtolower($nm)];             
        } else {         
           throw new Exception('No cpgConfig __get for '.$nm);
        }
   }

   private function __set($nm, $val)
   {
        if (isset($this->conf[$nm])) {
            $this->conf[$nm]=$val;
        } elseif (isset($this->conf[strtoupper($nm)])) {
            $this->conf[strtoupper($nm)]=$val;
        } elseif (isset($this->conf[strtolower($nm)])) {
            $this->conf[strtolower($nm)]=$val;            
        } else {            
           throw new Exception('No cpgConfig __set for '.$nm);
        }
   }
}

?>
