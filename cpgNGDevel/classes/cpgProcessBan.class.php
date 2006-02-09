<?php

/**
 * cpgProcessBan
 *
 * This class is used to process banning
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgProcessBan {
  var $db;
  var $config;
  var $bans;
  var $message;

  /**
   * cpgProcessBan::cpgProcessBan()
   *
   * Constructor of class.
   *
   * @param
   * @return
   */
  function cpgProcessBan() {
    $this->message = '';
    $this->bans = array();
    $this->db = cpgDB::getInstance();
    $this->config = cpgConfig::getInstance();
  } // End of function 'cpgProcessBan'

  /**
   * cpgProcessBan::addBan()
   *
   * Method to add ban.
   *
   * @param
   * @return
   */
  function addBan() {
    global $lang_banning_php;

    $this->message = '';

    $banUid = 0;
    $ip = $_POST['add_ban_ip_addr'];
    $username = $_POST['add_ban_user_name'];
    $expiry = addslashes($_POST['add_ban_expires']);

    if (empty($ip) && empty($username)) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
    }

    if (empty($username)) {
      $banUid = 'NULL';
    } else {
      /**
       * Code to display error if admin tries to ban himself
       */
      if ($username == USER_NAME) {
        cpgUtils::cpgDie(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
      }

      /**
       * Code to grab user id of a particular username
       */
      $banUid = (int)cpgUtils::getUserid($username);

      /**
       * If user id is not valid then stop the script by displaying error message or continue
       */
      if ($banUid <= 0) {
        cpgUtils::cpgDie(CRITICAL_ERROR, $lang_banning_php['error_user'].' '.$username, __FILE__, __LINE__);
      }

      $banUid = "'$banUid'";
    }

    if (empty($ip)) {
      $ip = 'NULL';
    } else {
      /**
       * If ip is same as admin's ip then display error
       */
      if ($ip == $_SERVER['REMOTE_ADDR']) {
        cpgUtils::cpgDie(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
      }

      /**
       * If ip is same as server's ip then display error
       */
      if ($ip == $_SERVER['SERVER_ADDR']) {
        cpgUtils::cpgDie(ERROR, $lang_banning_php['error_server_ban'], __FILE__, __LINE__);
      }

      /**
       * If config is set to ban private IPs
       */
      if ($this->config->conf['ban_private_ip'] == 0) {
        $ipIsIllegal = false;
        $ipToCheck = 'ip'.$ip;

        for ($i = 224; $i <= 255; $i++) {
          if ($ipIsIllegal) break;

          if (strpos($ipToCheck, $i.'.') == 2) {
            $ipIsIllegal = true;
          }
        }

        if (!$ipIsIllegal) {
          /**
           * Array of illegal IPs
           */
          $illegalIPs = array('192.168.', '10.', '172.16.', '172.17.', '172.18.', '172.19.', '172.20.', '172.21.', '172.22.', '172.23.', '172.24.', '172.25.', '172.26.', '172.27.', '172.28.', '172.29.', '172.30.', '172.31.', '169.254.', '127.', '192.0.', '1.0.0.0', '204.152.64.', '204.152.65.');

          foreach ($illegalIPs as $illegalIP) {
            if ($ipIsIllegal) break;

            if (strpos($ipToCheck, $illegalIP) == 2) {
              $ipIsIllegal = true;
            }
          }
        }

        if ($ipIsIllegal) {
          cpgUtils::cpgDie(ERROR, $lang_banning_php['error_ip_forbidden'], __FILE__, __LINE__);
        }
      }

      $ip = "'".addslashes($ip)."'";
    }

    if (empty($expiry)) {
      $expiry = 'NULL';
    } else {
      $expiry = "'$expiry 00:00:00'";
    }

    /**
     * Query to insert ban into database table
     */
    $query = "INSERT INTO ".$this->config->conf['TABLE_BANNED']." SET user_id = $banUid, ip_addr = $ip, expiry = $expiry";
    $this->db->query($query);

    $this->message = $lang_banning_php['ban_added'];
  } // End of function 'addBan'

  /**
   * cpgProcessBan::deleteBan()
   *
   * Method to delete ban.
   *
   * @param
   * @return
   */
  function deleteBan() {
    global $lang_banning_php;

    $this->message = '';

    $banId = (int)$_POST['ban_id'];

    /**
     * Query to check ban record exists or not
     */
    $query = 'SELECT * FROM '.$this->config->conf['TABLE_BANNED']." WHERE ban_id = '$banId'";
    $this->db->query($query);

    if ($this->db->nf() > 0) {
      /**
       * Query to delete ban
       */
      $query = 'DELETE FROM '.$this->config->conf['TABLE_BANNED']." WHERE ban_id = '$banId'";
      $this->db->query($query);

      $this->message = $lang_banning_php['ban_deleted'];
    } else {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_banning_php['error_ban_id'], __FILE__, __LINE__);
    }
  } // End of function 'deleteBan'

  /**
   * cpgProcessBan::listBans()
   *
   * Method to list bans.
   *
   * @param
   * @return
   */
  function listBans() {
    global $lang_banning_php;

    $query = 'SELECT ban_id, user_id, ip_addr, UNIX_TIMESTAMP(expiry) AS expiry FROM '.$this->config->conf['TABLE_BANNED']." WHERE brute_force = '0'";
    $this->db->query($query);

    if ($this->db->nf() > 0) {
      $counter = 0;

      while ($row = $this->db->fetchRow()) {
        $banId = (int)$row['ban_id'];
        $expiry = (int)$row['expiry'];
        $userId = (int)$row['user_id'];
        $ip = stripslashes($row['ip_addr']);

        if ($expiry > 0) {
          $expiry = cpgUtils::localisedDate($expiry, '%Y-%m-%d');
        } else {
          $expiry = '';
        }

        $this->bans[$counter]['ip'] = $ip;
        $this->bans[$counter]['banId'] = $banId;
        $this->bans[$counter]['expiry'] = $expiry;
        $this->bans[$counter++]['userId'] = $userId;
      }

      reset($this->bans);

      foreach ($this->bans as $k => $v) {
        if ($v['userId'] > 0) {
          $this->bans[$k]['username'] = cpgUtils::getUsername($v['userId']);
        } else {
          $this->bans[$k]['username'] = '';
        }
      }
    }
  } // End of function 'listBans'

  /**
   * cpgProcessBan::updateBan()
   *
   * Method to update ban.
   *
   * @param
   * @return
   */
  function updateBan() {
    global $lang_banning_php;

    $this->message = '';

    $banUid = 0;
    $banId = (int)$_POST['ban_id'];
    $ip = $_POST['edit_ban_ip_addr'];
    $username = $_POST['edit_ban_user_name'];
    $expiry = addslashes($_POST['edit_ban_expires']);

    if ($banId <= 0) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_banning_php['error_ban_id'], __FILE__, __LINE__);
    }

    if (empty($ip) && empty($username)) {
      cpgUtils::cpgDie(CRITICAL_ERROR, $lang_banning_php['error_specify'], __FILE__, __LINE__);
    }

    if (empty($username)) {
      $banUid = 'NULL';
    } else {
      /**
       * Code to display error if admin tries to ban himself
       */
      if ($username == USER_NAME) {
        cpgUtils::cpgDie(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
      }

      /**
       * Code to grab user id of a particular username
       */
      $banUid = (int)cpgUtils::getUserid($username);

      /**
       * If user id is not valid then stop the script by displaying error message or continue
       */
      if ($banUid <= 0) {
        cpgUtils::cpgDie(CRITICAL_ERROR, $lang_banning_php['error_user'].' '.$username, __FILE__, __LINE__);
      }

      $banUid = "'$banUid'";
    }

    if (empty($ip)) {
      $ip = 'NULL';
    } else {
      /**
       * If ip is same as admin's ip then display error
       */
      if ($ip == $_SERVER['REMOTE_ADDR']) {
        cpgUtils::cpgDie(ERROR, $lang_banning_php['error_admin_ban'], __FILE__, __LINE__);
      }

      /**
       * If ip is same as server's ip then display error
       */
      if ($ip == $_SERVER['SERVER_ADDR']) {
        cpgUtils::cpgDie(ERROR, $lang_banning_php['error_server_ban'], __FILE__, __LINE__);
      }

      /**
       * If config is set to ban private IPs
       */
      if ($this->config->conf['ban_private_ip'] == 0) {
        $ipIsIllegal = false;
        $ipToCheck = 'ip'.$ip;

        for ($i = 224; $i <= 255; $i++) {
          if ($ipIsIllegal) break;

          if (strpos($ipToCheck, $i.'.') == 2) {
            $ipIsIllegal = true;
          }
        }

        if (!$ipIsIllegal) {
          /**
           * Array of illegal IPs
           */
          $illegalIPs = array('192.168.', '10.', '172.16.', '172.17.', '172.18.', '172.19.', '172.20.', '172.21.', '172.22.', '172.23.', '172.24.', '172.25.', '172.26.', '172.27.', '172.28.', '172.29.', '172.30.', '172.31.', '169.254.', '127.', '192.0.', '1.0.0.0', '204.152.64.', '204.152.65.');

          foreach ($illegalIPs as $illegalIP) {
            if ($ipIsIllegal) break;

            if (strpos($ipToCheck, $illegalIP) == 2) {
              $ipIsIllegal = true;
            }
          }
        }

        if ($ipIsIllegal) {
          cpgUtils::cpgDie(ERROR, $lang_banning_php['error_ip_forbidden'], __FILE__, __LINE__);
        }
      }

      $ip = "'".addslashes($ip)."'";
    }

    if (empty($expiry)) {
      $expiry = 'NULL';
    } else {
      $expiry = "'$expiry 00:00:00'";
    }

    /**
     * Query to insert ban into database table
     */
    $query = "UPDATE ".$this->config->conf['TABLE_BANNED']." SET user_id = $banUid, ip_addr = $ip, expiry = $expiry WHERE ban_id = '$banId'";
    $this->db->query($query);

    $this->message = $lang_banning_php['ban_updated'];
  } // End of function 'updateBan'
} // End of class 'cpgProcessBan'

?>
