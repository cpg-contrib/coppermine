<?php

/**
 * cpgSearch
 *
 * This class is used to display search page
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgSearch {
  var $db;
  var $config;

  /**
   * cpgSearch()
   *
   * Constructor of this class
   *
   * @param
   * @return
   */
  function cpgSearch() {
    $this->db = cpgDb::getInstance();
    $this->config = cpgConfig::getInstance();
  } // End of method 'cpgSearch'

  /**
   * buildCustomFields()
   *
   * Method to build custom fields
   *
   * @param
   * @return
   */
  function buildCustomFields() {
    /**
     * Query to fetch custom fields
     */
    $query = 'SELECT * FROM '.$this->config->conf['TABLE_CONFIG']." WHERE name LIKE 'user_field%_name' AND value != '' ORDER BY name ASC";
    $this->db->query($query);

    if ($this->db->nf() > 0) {
      $this->customFields = array();

      while ($row = $this->db->fetchRow()) {
        $name = str_replace(array('_field', '_name'), '', $row['name']);

        $this->customFields[$name] = $row['value'];
      }
    }
  } // End of method 'buildCustomFields'

  /**
   * buildKeywords()
   *
   * Method to build keywords
   *
   * @param
   * @return
   */
  function buildKeywords() {
    $auth = cpgAuth::getInstance();

    if (is_array($auth->forbiddenSetData) && count($auth->forbiddenSetData) > 0) {
      $albumQuery = ' AND aid NOT IN ('.implode(', ', $auth->forbiddenSetData).')';
    } else {
      $albumQuery = '';
    }

    /**
     * Query to fetch keywords
     */
    $query = 'SELECT keywords FROM '.$this->config->conf['TABLE_PICTURES']." WHERE keywords != ''$albumQuery";
    $this->db->query($query);

    if ($this->db->nf() > 0) {
      $this->keywords = array();

      while ($row = $this->db->fetchRow()) {
        $keywords = explode(' ', $row['keywords']);

        reset($keywords);

        foreach ($keywords as $keyword) {
          if ($keyword && !in_array($keyword, $this->keywords)) {
            $this->keywords[] = $keyword;
          }
        }
      }

      sort($this->keywords);
    }
  } // End of method 'buildKeywords'
} // End of class 'cpgSearch'

?>
