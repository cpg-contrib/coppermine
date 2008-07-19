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

	/* */
	var $lock_querytime = FALSE;	## when TRUE, cpggetmicrotime not available.
	var $update = FALSE;	## when TRUE, failure of query return no errors;
	var $nodb = FALSE;		## when TRUE, no database name is required in conect function (for install.php)
	var $install_auth_mode = 'windows';		##  when 'sqlserver', sql server authentication mode will be used.
    /**
     * 
     * @var array $queries
     */
    //var $queries = array();

    //var $query_stats = array();

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
        global $CONFIG;
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
		if ($this->nodb != TRUE) {
			$connect_info['Database'] = $Database;
			$check_sql_values = " please check the SQL values in include/config.inc.php";
		} else {
			$check_sql_values = '';
		}
		if ($CONFIG[auth_mode] == 'sqlserver' || $this->install_auth_mode == 'sqlserver') {
			$connect_info['UID'] = $User;	
			$connect_info['PWD'] = $Password;
		}
        /* establish connection, select database */
		if (0 == $this->Link_ID) {
			$this->Link_ID = sqlsrv_connect($Host, $connect_info);
			if (!$this->Link_ID) {
				//$this->halt("connect($Host) failed.");
				$this->Error = "<hr /><br />Could not create a MSSQL connection, $check_sql_values<br />MSSQL error was : <br />";
				foreach (sqlsrv_errors() as $err) {
					$this->Error .= "<br />SQLSTATE: ".$err['SQLSTATE']."<br/>";
					$this->Error .= "Code: ".$err['code']."<br/>";
					$this->Error .= "Message: ".($err['message'])."<br/><br />";
				}
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
		global $CONFIG, $query_stats, $queries;
		$args = func_get_args();
		$Query_String = array_shift($args);
	    /* No empty queries, please, since PHP4 chokes on them. */
        if ($Query_String == '' && !defined('UPDATE_PHP')) {
			/* The empty query string is passed on from the constructor,
			* when calling the class without a query, e.g. in situations
			* like these: '$db = new DB_Sql_Subclass;'
			*/
			$this->Error = "<br />There is no query to execute.<br />";
			$this->Error .= $this->FormatErrors(sqlsrv_errors());
			return 0;
		}
		if (count($args)) {
			$Query_String = vsprintf($Query_String, $args);
		}
		
        if (!$this->connect()) {
			$this->Error = "<br />Database connection not found.<br />";
			$this->Error .= $this->FormatErrors(sqlsrv_errors());
            return 0;
            /* we already complained in connect() about that. */
        } ; 
        // New query, discard previous result.
        if ($this->Query_ID) {
            $this->free();
        } 

		if ($this->lock_querytime != TRUE) {
			$query_start = cpgGetMicroTime();
		}

		$this->Query_ID = @sqlsrv_query($this->Link_ID, $Query_String );

        if ($this->lock_querytime != TRUE) {
			$query_end = cpgGetMicroTime();
		}
		
        $this->Row = 0;
        //$this->Errno = mysql_errno();
        //$this->Error =  @sqlsrv_errors();
        if (!$this->Query_ID && $this->update != TRUE) {
            //$this->halt("Invalid SQL: " . $Query_String);
			$this->Error = sqlsrv_errors();
			$this->db_error("Invalid SQL:".$Query_String);
        } 

		//if ($this->update != TRUE) {
			$this->nextRecord();
		//}	
		
		if ($this->lock_querytime != TRUE) {
			if (isset($CONFIG['debug_mode']) && (($CONFIG['debug_mode']==1) || ($CONFIG['debug_mode']==2) )) {
				$duration = round($query_end - $query_start, 3);
				$query_stats[] = $duration;
				$queries[] = $Query_String . " ({$duration}s)"; 
			}
		}
		
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
        if (!$this->Query_ID && $this->update!=TRUE) {
            $this->halt('nextRecord called with no query pending.');
            return 0;
        } 

        $this->Record = @sqlsrv_fetch_array($this->Query_ID, SQLSRV_FETCH_ASSOC); 	#
        $this->Row += 1;

		if ($this->update != TRUE) {
			$this->Error = sqlsrv_errors();
		}
		
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
		return @sqlsrv_rows_affected($this->Query_ID);
    } 


    /**
     * cpgDB::numFields()
     * 
     * @return 
     */
    function numFields()
    {
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

/**
 * cpg_db_error()
 *
 * Error message if a query failed
 *
 * @param $the_error
 * @return
 **/

	function db_error($the_error)
	{
		global $CONFIG,$lang_errors;
		print($the_error);
		if ($CONFIG['debug_mode'] === '0' || (!GALLERY_ADMIN_MODE)) {
			cpg_die(CRITICAL_ERROR, $lang_errors['database_query'], __FILE__, __LINE__);
		} else {
				$the_error .= "\n\nMSSQL error: \n";
				foreach ($this->Error as $err) {
					echo "<br />SQLSTATE: ".$err['SQLSTATE']."<br/>";
					echo "Code: ".$err['code']."<br/>";
					echo "Message: ".($err['message'])."<br/>";
				}
				$out = "<br />".$lang_errors['database_query'].".<br /><br/>
					<form name=\"mssql\" id=\"mssql\"><textarea rows=\"8\" cols=\"60\">".htmlspecialchars($the_error)."</textarea></form>";
			cpg_die(CRITICAL_ERROR, $out, __FILE__, __LINE__);
		}
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
        $this->Error = @sqlsrv_errors();
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
        $this->query($this->Link_ID,"SELECT table_name, table_catalog FROM INFORMATION_SCHEMA.TABLES");
		$i = 0;
		while ($row = sqlsrv_fetch($this->Query_ID, SQLSRV_FETCH_ASSOC)) {
			$return[$i]['table_name'] = $row['table_name'];
			$return[$i]['database'] = $row['table_catalog'];
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


//  function to return datetime in UNIX_TIMESTAMP
	function timestamp ($datetime_var = 'getdate()')
	{
		return "DATEDIFF(s, '19700101', $datetime_var)";
	}

	/**
	//closes the non-persistent connection 
	*cpgDB :: close () 
	*/
	function close($link='')
	{
		if ($link == ''){
			$link = $this->Link_ID;
		}
		sqlsrv_close($link);
	}

	/**
	//closes the non-persistent connection 
	*cpgDB :: close () 
	*/
	function escape($str_to_escape)
	{
		//if (get_magic_quotes_gpc()) {
		//	$str_to_escape = stripslashes($str_to_escape);
		//}
		//return addslashes($str_to_escape);
		return str_replace("'", "''", $str_to_escape);
	}
	
	function removeQuotes($str)
	{
		return str_replace("''", "'", $str);
	}
	/**
	// returns the database list
	*cpgDB :: ListDbs ()
	*/
	function ListDbs()
	{
		$db_list = array();
		$list_query = @sqlsrv_query($this->Link_ID, "SELECT name FROM sys.databases");
		while ($row = sqlsrv_fetch_array($list_query, SQLSRV_FETCH_ASSOC)) {
			$db_list[] = $row['name'];
		}
		return $db_list;
	}

	
	function FormatErrors($errors)
	{
		/* Display errors. */
		foreach ($errors as $err)
		{
			$this->Error .= "SQLSTATE: ".$err['SQLSTATE']."<br/>";
			$this->Error .= "Code: ".$err['code']."<br/>";
			$this->Error .= "Message: ".$err['message']."<br/>";
		}
	}


	function getLimits($limit1, $limit2)
	{
		$limits_array = array();
		$limits_array[] = ($limit1 != -1) ? 'TOP '.$limit1 : 'TOP 0';
		$limits_array[] = ($limit2 != -1) ? 'TOP '.$limit2 : 'TOP '.$this->get_pic_count();
		return $limits_array;
	}

	function get_pic_count()
	{
		global $CONFIG;
		$result = sqlsrv_query($this->Link_ID, "SELECT COUNT(*) AS count FROM {$CONFIG['TABLE_PICTURES']}");
		$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
		return $row['count'];
	}


	function getFullTableNames($database, $prefix, $table)
	{
		return $database.'.dbo.'.$prefix.''.$table;
	}
}

?>
