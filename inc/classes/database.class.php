<?php

/**
 * Database
 * 
 * @package TCMS
 */
class Db
{

	protected $query;
	
    // Constructor, Easy Connection
    public function __construct($user, $pass, $database, $host='localhost')
    {
        $this->connect($user, $pass, $database, $host);
    }
    
    // Method for Connecting
    private function connect($user, $pass, $database, $host)
    {
        mysql_connect($host, $user, $pass)or die(mysql_error());
        mysql_select_db($database)or die(mysql_error());
    }
    
    // Method for Querys
    public function query($input)
    {
        $this->query = $input;
        return mysql_query($input)or die(mysql_error());
    }
    
    // Method for Num Rows
    public function numrows($input=null)
    {
        if($input != null)
        {
            $return = $this->query($input);
        }
        else
        {
            $return = $this->query($this->query);
        }
        
        return mysql_num_rows($return);
    }
	
	// Method for escaping user data
	public function escape($data) 
	{
		return mysql_real_escape_string($data);
	}
	
}


?>