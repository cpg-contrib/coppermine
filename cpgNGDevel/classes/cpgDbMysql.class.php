<?php
/**
 * cpgDbMysql.class.php
 * 
 * Database abstraction layer class
 * 
 * @package cpgNG
 * @author Abbas <abbas@sanisoft.com> 
 * @version $Id$
 */
/**
 * cpgDB
 * 
 * @package 
 * @author tarique 
 * @copyright Copyright (c) 2005
 * @version $Id$
 * @access public 
 */
class cpgDB {
    /* public: connection parameters */
    var $Host = '';
    var $Database = '';
    var $User = '';
    var $Password = '';

    /* public: configuration parameters */
    var $Auto_Free = 0; ## Set to 1 for automatic mysql_free_result()
    var $Debug = 0; ## Set to 1 for debugging messages.
    var $Halt_On_Error = 'yes'; ## "yes" (halt with message), "no" (ignore errors quietly), "report" (ignore errror, but spit a warning)
    var $Seq_Table = 'db_sequence';

    /* public: result array and current row number */
    var $Record = array();
    var $Row;

    /* public: current error number and error text */
    var $Errno = 0;
    var $Error = '';

    /* public: this is an api revision, not a CVS revision. */
    var $type = 'mysql';

    /* private: link and query handles */
    var $Link_ID = 0;
    var $Query_ID = 0;

    /**
     * 
     * @var array $queries
     */
    var $queries = array();

    var $query_stats = array();

    /* public: constructor */
    /**
     * cpgDB::cpgDB()
     * 
     * @param string $query 
     * @return 
     */
    function cpgDB($query = "")
    {
        $config = cpgConfig::getInstance();

        $this->Host = $config->dbserver;
        $this->Database = $config->dbname;
        $this->User = $config->dbuser;
        $this->Password = $config->dbpass;
        $this->query($query);
    } 

    /**
     * cpgDB::getInstance()
     * 
     * @return 
     */
    function &getInstance()
    {
        static $instance;

        if (!isset($instance)) {
            $instance = new cpgDB;
        } 

        return ($instance);
    } 

    /* public: some trivial reporting */
    /**
     * cpgDB::linkId()
     * 
     * @return 
     */
    function linkId()
    {
        return $this->Link_ID;
    } 

    function queryId()
    {
        return $this->Query_ID;
    } 

    /**
     * cpgDB::connect()
     * 
     * @param string $Database 
     * @param string $Host 
     * @param string $User 
     * @param string $Password 
     * @return 
     */
    function connect($Database = '', $Host = '', $User = '', $Password = '')
    {
        /* Handle defaults */
        if ('' == $Database)
            $Database = $this->Database;
        if ('' == $Host)
            $Host = $this->Host;
        if ('' == $User)
            $User = $this->User;
        if ('' == $Password)
            $Password = $this->Password;

        /* establish connection, select database */
        if (0 == $this->Link_ID) {
            $this->Link_ID = mysql_connect($Host, $User, $Password);
            if (!$this->Link_ID) {
                $this->halt("connect($Host, $User, \$Password) failed.");
                return 0;
            } 

            if (!@mysql_select_db($Database, $this->Link_ID)) {
                $this->halt("cannot use database " . $this->Database);
                return 0;
            } 
        } 

        return $this->Link_ID;
    } 

    /* public: discard the query result */
    /**
     * cpgDB::free()
     * 
     * @return 
     */
    function free()
    {
        @mysql_free_result($this->Query_ID);
        $this->Query_ID = 0;
    } 

    /* Added by vinay */
    /**
     * cpgDB::changeDB()
     * 
     * @param string $database 
     * @return 
     */
    function changeDB($database = "")
    {
        if (empty($database)) return;

        $re = mysql_select_db($database, $this->Link_ID);
        if (!$re) {
            if ($this->Debug)
                echo "Cannot change db to $database";
        } 
        return $re;
    } 
    /* end of addition by vinay */

    /* public: perform a query */
    /**
     * cpgDB::query()
     * 
     * @param  $Query_String 
     * @param integer $linkId 
     * @return 
     */
    function query($Query_String, $linkId = 0)
    {
        /* No empty queries, please, since PHP4 chokes on them. */
        if ($Query_String == '')
            /* The empty query string is passed on from the constructor,
       * when calling the class without a query, e.g. in situations
       * like these: '$db = new DB_Sql_Subclass;'
       */
            return 0;

        if ($linkId == 0 && !$this->connect()) {
            return 0;
            /* we already complained in connect() about that. */
        } ; 
        // New query, discard previous result.
        if ($this->Query_ID) {
            $this->free();
        } 
        $query_start = cpgGetMicroTime();

        if ($linkId) {
            $this->Query_ID = @mysql_query($Query_String, $linkId);
        } else {
            $this->Query_ID = @mysql_query($Query_String, $this->Link_ID);
        } 

        $query_end = cpgGetMicroTime();
        $this->Row = 0;
        $this->Errno = mysql_errno();
        $this->Error = mysql_error();
        if (!$this->Query_ID) {
            $this->halt("Invalid SQL: " . $Query_String);
        } 

        if ($this->nf() > 0) {
            $this->nextRecord();
        } 
        $duration = round($query_end - $query_start, 3);
        $this->query_stats[] = $duration;
        $this->queries[] = $Query_String . " ({$duration}s)"; 
        // Will return nada if it fails. That's fine. // '
        return $this->Query_ID;
    } 

    /* public: walk result set */
    /**
     * cpgDB::nextRecord()
     * 
     * @return 
     */
    function nextRecord()
    {
        if (!$this->Query_ID) {
            $this->halt('nextRecord called with no query pending.');
            return 0;
        } 

        $this->Record = @mysql_fetch_array($this->Query_ID, MYSQL_BOTH);
        $this->Row += 1;
        $this->Errno = mysql_errno();
        $this->Error = mysql_error();

        $stat = is_array($this->Record);
        if (!$stat && $this->Auto_Free) {
            $this->free();
        } 
        return $stat;
    } 

    /**
     * cpgDB::fetchRow()
     * 
     * @return 
     */
    function fetchRow()
    {
        $row = $this->Record;
        $this->nextRecord();
        return ($row);
    } 

    /**
     * cpgDB::fetchRowSet()
     * 
     * @return 
     */
    function fetchRowSet()
    {
        $rowset = array();
        do {
            $rowset[] = $this->Record;
        } while ($this->nextRecord());

        return ($rowset);
    } 

    /* public: position in result set */
    /**
     * cpgDB::seek()
     * 
     * @param integer $pos 
     * @return 
     */
    function seek($pos = 0)
    {
        $status = @mysql_data_seek($this->Query_ID, $pos);
        if ($status) {
            $this->Row = $pos;
            $this->nextRecord();
        } else {
            $this->halt("seek($pos) failed: result has " . $this->numRows() . " rows");

            /* half assed attempt to save the day,
       * but do not consider this documented or even
       * desireable behaviour.
       */
            @mysql_data_seek($this->Query_ID, $this->numRows());
            $this->Row = $this->numRows;
            return 0;
        } 

        return 1;
    } 

    /* public: table locking */
    /**
     * cpgDB::lock()
     * 
     * @param  $table 
     * @param string $mode 
     * @return 
     */
    function lock($table, $mode = 'write')
    {
        $this->connect();

        $query = 'lock tables ';
        if (is_array($table)) {
            while (list($key, $value) = each($table)) {
                if ($key == 'read' && $key != 0) {
                    $query .= "$value read, ";
                } else {
                    $query .= "$value $mode, ";
                } 
            } 
            $query = substr($query, 0, -2);
        } else {
            $query .= "$table $mode";
        } 
        $res = @mysql_query($query, $this->Link_ID);
        if (!$res) {
            $this->halt("lock($table, $mode) failed.");
            return 0;
        } 
        return $res;
    } 

    /**
     * cpgDB::unlock()
     * 
     * @return 
     */
    function unlock()
    {
        $this->connect();

        $res = @mysql_query("unlock tables", $this->Link_ID);
        if (!$res) {
            $this->halt('unlock() failed.');
            return 0;
        } 
        return $res;
    } 

    /* public: evaluate the result (size, width) */
    /**
     * cpgDB::affectedRows()
     * 
     * @return 
     */
    function affectedRows()
    {
        return @mysql_affected_rows($this->Link_ID);
    } 

    /**
     * cpgDB::numRows()
     * 
     * @return 
     */
    function numRows()
    {
        return @mysql_num_rows($this->Query_ID);
    } 

    /**
     * cpgDB::numFields()
     * 
     * @return 
     */
    function numFields()
    {
        return @mysql_num_fields($this->Query_ID);
    } 

    /* public: shorthand notation */
    /**
     * cpgDB::nf()
     * 
     * @return 
     */
    function nf()
    {
        return $this->numRows();
    } 

    /**
     * cpgDB::np()
     * 
     * @return 
     */
    function np()
    {
        print $this->numRows();
    } 

    /**
     * cpgDB::f()
     * 
     * @param  $Name 
     * @return 
     */
    function f($Name)
    {
        return $this->Record[$Name];
    } 

    /**
     * cpgDB::p()
     * 
     * @param  $Name 
     * @return 
     */
    function p($Name)
    {
        print $this->Record[$Name];
    } 

    /* public: sequence numbers */
    /**
     * cpgDB::nextid()
     * 
     * @param  $seq_name 
     * @return 
     */
    function nextid($seq_name)
    {
        $this->connect();

        if ($this->lock($this->Seq_Table)) {
            /* get sequence number (locked) and increment */
            $q = sprintf("select nextid from %s where seq_name = '%s'",
                $this->Seq_Table,
                $seq_name);
            $id = @mysql_query($q, $this->Link_ID);
            $res = @mysql_fetch_array($id);

            /* No current value, make one */
            if (!is_array($res)) {
                $currentid = 0;
                $q = sprintf("insert into %s values('%s', %s)",
                    $this->Seq_Table,
                    $seq_name,
                    $currentid);
                $id = @mysql_query($q, $this->Link_ID);
            } else {
                $currentid = $res["nextid"];
            } 
            $nextid = $currentid + 1;
            $q = sprintf("update %s set nextid = '%s' where seq_name = '%s'",
                $this->Seq_Table,
                $nextid,
                $seq_name);
            $id = @mysql_query($q, $this->Link_ID);
            $this->unlock();
        } else {
            $this->halt("cannot lock " . $this->Seq_Table . " - has it been created?");
            return 0;
        } 
        return $nextid;
    } 

    /* public: return table metadata */
    /**
     * cpgDB::metadata()
     * 
     * @param string $table 
     * @param boolean $full 
     * @return 
     */
    function metadata($table = '', $full = false)
    {
        $count = 0;
        $id = 0;
        $res = array(); 
        // if no $table specified, assume that we are working with a query
        // result
        if ($table) {
            $this->connect();
            $id = @mysql_list_fields($this->Database, $table);
            if (!$id)
                $this->halt('Metadata query failed.');
        } else {
            $id = $this->Query_ID;
            if (!$id)
                $this->halt('No query specified.');
        } 

        $count = @mysql_num_fields($id); 
        // made this IF due to performance (one if is faster than $count if's)
        if (!$full) {
            for ($i = 0; $i < $count; $i++) {
                $res[$i]['table'] = @mysql_field_table ($id, $i);
                $res[$i]['name'] = @mysql_field_name ($id, $i);
                $res[$i]['type'] = @mysql_field_type ($id, $i);
                $res[$i]['len'] = @mysql_field_len ($id, $i);
                $res[$i]['flags'] = @mysql_field_flags ($id, $i);
            } 
        } else { // full
            $res['num_fields'] = $count;

            for ($i = 0; $i < $count; $i++) {
                $res[$i]['table'] = @mysql_field_table ($id, $i);
                $res[$i]['name'] = @mysql_field_name ($id, $i);
                $res[$i]['type'] = @mysql_field_type ($id, $i);
                $res[$i]['len'] = @mysql_field_len ($id, $i);
                $res[$i]['flags'] = @mysql_field_flags ($id, $i);
                $res['meta'][$res[$i]['name']] = $i;
            } 
        } 
        // free the result only if we were called on a table
        if ($table) @mysql_free_result($id);
        return $res;
    } 

    /* private: error handling */
    /**
     * cpgDB::halt()
     * 
     * @param  $msg 
     * @return 
     */
    function halt($msg)
    {
        $this->Error = @mysql_error($this->Link_ID);
        $this->Errno = @mysql_errno($this->Link_ID);
        if ($this->Halt_On_Error == 'no')
            return;

        $this->haltmsg($msg);

        if ($this->Halt_On_Error != 'report')
            die('Session halted.');
    } 

    /**
     * cpgDB::haltmsg()
     * 
     * @param  $msg 
     * @return 
     */
    function haltmsg($msg)
    {
        printf("</td></tr></table><b>Database error:</b> %s<br>\n", $msg);
        printf("<b>MySQL Error</b>: %s (%s)<br>\n",
            $this->Errno,
            $this->Error);
    } 

    /**
     * cpgDB::tableNames()
     * 
     * @return 
     */
    function tableNames()
    {
        $this->query("SHOW TABLES");
        $i = 0;
        while ($info = mysql_fetch_row($this->Query_ID)) {
            $return[$i]['table_name'] = $info[0];
            $return[$i]['tablespace_name'] = $this->Database;
            $return[$i]['database'] = $this->Database;
            $i++;
        } 
        return $return;
    } 
} 

?>
