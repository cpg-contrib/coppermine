<?php

/**
 * cpgProcessKeyword
 *
 * This class is used to process keywords
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgProcessKeyword {
  var $db;
  var $config;

  /**
   * cpgProcessKeyword()
   *
   * Constructor of this class
   *
   * @param
   * @return
   */
  function cpgProcessKeyword() {
    $this->db = cpgDb::getInstance();
    $this->config = cpgConfig::getInstance();
  } // End of method 'cpgProcessKeyword'

  /**
   * buildKeywords()
   *
   * Method to build keywords
   *
   * @param
   * @return
   */
  function buildKeywords() {
    /**
     * Query to fetch keywords
     */
    $query = 'SELECT keywords FROM '.$this->config->conf['TABLE_PICTURES']." WHERE keywords != ''";
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

  /**
   * deleteKeyword()
   *
   * Method to delete a keyword
   *
   * @param
   * @return
   */
  function deleteKeyword() {
    $keyword = addslashes(trim($_GET['remov']));

    if (!empty($keyword)) {
      /**
       * Query to select pictures for a particular keyword
       */
      $query = 'SELECT pid, keywords FROM '.$this->config->conf['TABLE_PICTURES']." WHERE keywords = '$keyword' OR keywords LIKE '$keyword %' OR keywords LIKE '% $keyword %' OR keywords LIKE '% $keyword'";
      $this->db->query($query);

      if ($this->db->nf() > 0) {
        $newKeywordsArray = array();

        while ($row = $this->db->fetchRow()) {
          $tmpArr = array();
          $pid = (int)$row['pid'];
          $keywords = addslashes(trim($row['keywords']));

          /**
           * If database record has more than one keyword
           */
          if (ereg(' ', $keywords)) {
            $oldKeywordsArray = explode(' ', $keywords);

            reset($oldKeywordsArray);

            foreach ($oldKeywordsArray as $oldKeyword) {
              if ($keyword == $oldKeyword) continue;

              $tmpArr[] = $oldKeyword;
            }

            $newKeywordsArray[$pid] = implode(' ', $tmpArr);
          /**
           * If database record has only one keyword
           */
          } else if ($keyword == $keywords) {
            $newKeywordsArray[$pid] = '';
          }
        }

        reset($newKeywordsArray);

        foreach ($newKeywordsArray as $pid => $newKeywords) {
          /**
           * Query to update keywords
           */
          $query = 'UPDATE '.$this->config->conf['TABLE_PICTURES']." SET keywords = '$newKeywords' WHERE pid = '$pid'";
          $this->db->query($query);
        }
      }
    }
  } // End of method 'deleteKeyword'

  /**
   * updateKeyword()
   *
   * Method to update a keyword
   *
   * @param
   * @return
   */
  function updateKeyword() {
    $newKeyword = addslashes(trim($_POST['newword']));
    $origKeyword = addslashes(trim($_POST['keywordEdit']));

    if (!empty($newKeyword) && !empty($origKeyword)) {
      /**
       * Query to select pictures for a particular keyword
       */
      $query = 'SELECT pid, keywords FROM '.$this->config->conf['TABLE_PICTURES']." WHERE keywords = '$origKeyword' OR keywords LIKE '$origKeyword %' OR keywords LIKE '% $origKeyword %' OR keywords LIKE '% $origKeyword'";
      $this->db->query($query);

      if ($this->db->nf() > 0) {
        $newKeywordsArray = array();

        while ($row = $this->db->fetchRow()) {
          $tmpArr = array();
          $pid = (int)$row['pid'];
          $keywords = addslashes(trim($row['keywords']));

          /**
           * If database record has more than one keyword
           */
          if (ereg(' ', $keywords)) {
            $oldKeywordsArray = explode(' ', $keywords);

            reset($oldKeywordsArray);

            foreach ($oldKeywordsArray as $oldKeyword) {
              if ($oldKeyword == $origKeyword) {
                $tmpArr[] = $newKeyword;
              } else {
                $tmpArr[] = $oldKeyword;
              }
            }

            $newKeywordsArray[$pid] = implode(' ', $tmpArr);
          /**
           * If database record has only one keyword
           */
          } else if ($keywords == $origKeyword) {
            $newKeywordsArray[$pid] = $newKeyword;
          }
        }

        reset($newKeywordsArray);

        foreach ($newKeywordsArray as $pid => $newKeywords) {
          /**
           * Query to update keywords
           */
          $query = 'UPDATE '.$this->config->conf['TABLE_PICTURES']." SET keywords = '$newKeywords' WHERE pid = '$pid'";
          $this->db->query($query);
        }
      }
    }
  } // End of method 'updateKeyword'
} // End of class 'cpgProcessKeyword'

?>
