<?php
/**
 * cpgBridgeManager
 *
 * This class is used for plugin management
 *
 * @package cpgNG
 * @author donnoman@donovanbray.com
 * @copyright Copyright (c) 2006
 * @version $Id: cpgPluginManager.class.php 52 2006-06-20 12:36:33Z abbas $
 * @access public
 */
class cpgBridgeManager {
    private $db;
    private $config;
    private $auth;
    private $t;
    public $lang;
    public function __construct() {
        global $lang_errors,$lang_bridgemgr_php,$lang_yes,$lang_no;
        $this->t= cpgTemplate :: getInstance(); // $t = Template class
        $this->db= cpgDb :: getInstance(); // Database object
        $this->config= cpgConfig :: getInstance(); // Config object
        $this->auth= cpgAuth :: getInstance(); // Config object
        $this->lang->errors=(object)$lang_errors;
        $this->lang->bridgemgr_php=(object)$lang_bridgemgr_php;
        $this->lang->yes=$lang_yes;
        $this->lang->no=$lang_no;
        //var_dump($this->lang);
    }
    /**
     * cpgBridgeManager::php_file_test($test)
     *
     * Filter method to limit bridge files examined for the available bridge list.
     *
     * @param String $test
     * @return bool
     */
    private function php_file_test($test) {
        // ends in inc.php and isn't the coppermine default bridge or udb_base.
        return (strtolower(substr($test, -7, 7)) == 'inc.php' && (substr($test, 0, 10) != 'coppermine' && substr($test, 0, 8) != 'udb_base'));
    }
    /**
     * cpgBridgeManager::availableBridges()
     * 
     * Queries bridge folder to discover all bridges that are available for
     * BridgeManager installation.
     * 
     * @return array
     */
    private function availableBridges() {
        static $availableBridges;
        if (empty($availableBridges)) {
            $availableBridges = new stdclass;
            $bridgeDir= dirname(__FILE__) . '/../bridge/';
            $bridgeFiles= scandir($bridgeDir);
            $bridgeFiles= array_filter($bridgeFiles, array (
                $this,
                'php_file_test'
            ));
            foreach ($bridgeFiles as $bridgeFile) {
                include_once ($bridgeDir . $bridgeFile);
                $bridge=substr($bridgeFile,0,-8);
                eval('$availableBridges->$bridge='.$bridge.'_udb::defaults();');
            }
            //var_dump($availableBridges);
        }
        return $availableBridges;
    }
    /**
     * cpgBridgeManager::installedBridge()
     * 
     * Returns current bridge database settings.
     * 
     * @return array
     */    
    private function installedBridge($reset=false) {
        static $bridge;
        if (empty($bridge) || $reset) {
            $this->db->query("SELECT * FROM " . $this->config->table_bridge);
            $bridge= new stdclass;
            while ($row=$this->db->fetchRow()) {
                $bridge->$row['name']=$row['value'];
            }
            if (!empty($bridge->short_name)) {
                $bridge->defaults = $this->availableBridges->{$bridge->short_name};
            } 
        }
        return $bridge;
    }
    
    private function __get($nm) {
        switch ($nm) {
            case 'availableBridges' :
                return $this->availableBridges();
                break;
            case 'installedBridge' :
                return $this->installedBridge();
                break;
            default :
                throw new Exception('No cpgBridgeManager __get for ' . $nm);
        }
    }
    /*
     * cpgBridgeManager::choose()
     * 
     * Set the bridge to continue configuring bridging with
     * @return bool
     */
    public function choose() {
        if (isset($_GET['b'])) {
            $bridges=$this->availableBridges();
            if (isset($bridges->$_GET['b'])) { //You can only select a bridge that we have info on.
                $bridge = $bridges->$_GET['b']; //all GPC vars are hostile until sanitized and assigned to a holder variable.
            } else {
                cpgUtils::cpgDie(CRITICAL_ERROR, sprintf($this->lang->bridgemgr_php->error_bridge_file_not_exist, strip_tags($__GET['b'])), __FILE__, __LINE__);//using strip_tags before reflecting unsanitized submitted vars back to prevent xss.
            }
        } else {
            cpgUtils::cpgDie(CRITICAL_ERROR, $this->lang->bridgemgr_php->error_must_not_be_empty, __FILE__, __LINE__);
        }
        $this->db->query("UPDATE {$this->config->table_bridge} SET value = '{$bridge->short_name}' WHERE name = 'short_name';");
        foreach ($bridge->config as $key=>$default) {
            $this->db->query("UPDATE {$this->config->table_bridge} SET value = '{$default->setting}' WHERE name = '$key';");            
        }
    }
    
    /*
     * cpgBridgeManager::reset()
     * 
     * resets the bridge table to installation defaults and disables bridging in
     * the config table.
     */
    public function reset() {
        $this->db->query("UPDATE {$this->config->table_config} SET value = '0' WHERE name ='bridge_enable';");
        $this->db->query("DELETE FROM {$this->config->table_bridge};");
        $sql=file('sql/basic.sql');
        foreach ($sql as $line) {
            if (stripos($line,'CPG_bridge')){
                $this->db->query(str_replace('CPG_bridge',$this->config->table_bridge,$line));
            }
        }
    }
} // End of class 'cpgBridgeManager'
?>