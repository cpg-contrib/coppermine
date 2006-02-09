<?php

/**
 * cpgProcessLogs
 *
 * This class is used to process logs
 *
 * @package cpgNG
 * @author amit
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public
 */
class cpgProcessLogs {
  var $logs;
  var $logName;
  var $logText;

  /**
   * cpgProcessLogs()
   *
   * Constructor of class.
   *
   * @param
   * @return
   */
  function cpgProcessLogs() {
    $this->logName = '';
    $this->logText = '';
    $this->logs = array();
    $this->config = cpgConfig::getInstance();
  } // End of method 'cpgProcessLogs'

  /**
   * displayLogList()
   *
   * This method is used to display log list.
   *
   * @param
   * @return
   */
  function displayLogList() {
    global $lang_viewlog_php;

    $logList = array();
    $logList = getloglist('logs/'); // Function in 'libs/logger.inc.php'

    if (count($logList) > 0) {
      foreach ($logList as $log) {
        $this->logs[] = array('logName' => $log['logname'], 'logSize' => $log['filesize']);
      }
    } else {
      cpgUtils::cpgDie(INFORMATION, $lang_viewlog_php['no_logs'], __FILE__, __LINE__);
    }
  } // End of method 'displayLogList'

  /**
   * displayLog()
   *
   * This method is used to display a particular log.
   *
   * @param
   * @return
   */
  function displayLog() {
    $this->logName = $_GET['log'];
    $logName = addslashes($_GET['log']);

    ob_start();
    log_read($logName);
    $this->logText = ob_get_contents();
    ob_end_clean();
  } // End of method 'displayLog'
} // End of class 'cpgProcessLogs'

?>
