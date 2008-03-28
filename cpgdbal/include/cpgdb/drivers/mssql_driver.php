<?php
/**
 * cpgDbMSsql.class.php
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
    var $Auto_Free = 0; ## Set to 1 for automatic sqsrvl_free_stmt()
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
    var $type = 'mssql';

    /* private: link and query handles */
    var $Link_ID = 0;
    var $Query_ID = 0;
	
	/* public: this is used to get the number of rows in the result */
	var $count = 0;

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

	function connect_to_existing($link)
	{
		$this->Link_ID = $link;
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
        sqlsrv_set_error_handling(0);
		sqlsrv_log_set_severity(0);
		sqlsrv_log_set_subsystems(0);
		sqlsrv_configure('warnings_return_as_errors', 0);
		/* Handle defaults */
		$connect_info = array();
		
		if ('' == $Host)
		{
            $Host = $this->Host;
		}
		if ('' == $Database)
        {
			$Database = $this->Database;
		}	
        if ('' == $User)
        {	
			$User = $this->User;
		}
        if ('' == $Password)
        {    
			$Password = $this->Password;
		}
		$connect_info['Database'] = $Database;
		//$connect_info['UID'] = $User;	// these two are not required for  windows authentication mode.
		//$connect_info['PWD'] = $Password;
				
        /* establish connection, select database */
        if (0 == $this->Link_ID) {
            $this->Link_ID = sqlsrv_connect($Host, $connect_info);
            if (!$this->Link_ID) {
                $this->halt("connect($Host) failed.");

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
        @sqlsrv_free_stmt($this->Query_ID);
        $this->Query_ID = 0;
    } 

    /* public: perform a query */
    /**
     * cpgDB::query()
     * 
     * @param  $Query_String 
     * @param integer $linkId 
     * @return 
     */
    function query()
    {
	$args = func_get_args();
	$Query_String = array_shift($args);
	    /* No empty queries, please, since PHP4 chokes on them. */
        if ($Query_String == '')
            /* The empty query string is passed on from the constructor,
       * when calling the class without a query, e.g. in situations
       * like these: '$db = new DB_Sql_Subclass;'
       */
        return 0;
		if (count($args)) {
			$Query_String = vsprintf($Query_String, $args);
		}
		
        if (!$this->connect()) {
            return 0;
            /* we already complained in connect() about that. */
        } ; 
        // New query, discard previous result.
        if ($this->Query_ID) {
            $this->free();
        } 
        $query_start = cpgGetMicroTime();

 
        $this->Query_ID = @sqlsrv_query($this->Link_ID, $Query_String );	#

        $query_end = cpgGetMicroTime();
        $this->Row = 0;
        //$this->Errno = mysql_errno();
        $this->Error =  @sqlsrv_errors();
        if (!$this->Query_ID) {
            $this->halt("Invalid SQL: " . $Query_String);
        } 

            $this->nextRecord();
        
        $duration = round($query_end - $query_start, 3);
        $this->query_stats[] = $duration;
        $this->queries[] = $Query_String . " ({$duration}s)"; 
		
	//	print_r($this->queries);echo"<br /><br />";
		
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

        $this->Record = @sqlsrv_fetch_array($this->Query_ID, SQLSRV_FETCH_ASSOC); 	#
        $this->Row += 1;

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
		if (!$this->Record) 
		{
			return $rowset;
		}
        do {
            $rowset[] = $this->Record;
        } while ($this->nextRecord());

        return ($rowset);
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
        $res = @sqlsrv_query($this->Link_ID, $query);
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

        $res = @sqlsrv_query($this->Link_ID," unlock tables");
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
        return @sqlsrv_rows_affected($this->Link_ID);
    } 


    /**
     * cpgDB::numFields()
     * 
     * @return 
     */
    function numFields()
    {
        //return @mysql_num_fields($this->Query_ID);
		return count(sqlsrv_field_metadata($this->Query_ID));
    } 

    /* public: shorthand notation */

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
            $id = @sqlsrv_query($this->Link_ID, $q);
            $res = @sqlsrv_fetch_array($id, SQLSRV_FETCH_ASSOC);

            /* No current value, make one */
            if (!is_array($res)) {
                $currentid = 0;
                $q = sprintf("insert into %s values('%s', %s)",
                    $this->Seq_Table,
                    $seq_name,
                    $currentid);
                $id = @sqlsrv_query($this->Link_ID, $q);
            } else {
                $currentid = $res["nextid"];
            } 
            $nextid = $currentid + 1;
            $q = sprintf("update %s set nextid = '%s' where seq_name = '%s'",
                $this->Seq_Table,
                $nextid,
                $seq_name);
            $id = @sqlsrv_query($this->Link_ID, $q);
            $this->unlock();
        } else {
            $this->halt("cannot lock " . $this->Seq_Table . " - has it been created?");
            return 0;
        } 
        return $nextid;
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
         if ($this->Halt_On_Error == 'no')
            return;

        $this->haltmsg($msg);

        if ($this->Halt_On_Error != 'report')
			die( 'Session Halted' );		#
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
	    /* Display errors. */
	    echo "Error information: <br/>";
	    foreach ( sqlsrv_errors() as $error )
	    {
	          echo "SQLSTATE: ".$error['SQLSTATE']."<br/>";
	          echo "Code: ".$error['code']."<br/>";
	          echo "Message: ".($error['message'])."<br/>";
	    }
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
        while ($info = sqlsrv_fetch($this->Query_ID)) {
            $return[$i]['table_name'] = $info[0];
            $return[$i]['tablespace_name'] = $this->Database;
            $return[$i]['database'] = $this->Database;
            $i++;
        }
        return $return;
    }

    /**
     * insertId()
     *
     * Used to return id of last inserted row
     *
     * return $id
     */
    function insertId()
    {
     sqlsrv_next_result($this->Query_ID);
	 sqlsrv_fetch($this->Query_ID);
	 return sqlsrv_get_field($this->Query_ID, 1);
	   
    }
}




?>
