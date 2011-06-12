<?php

/**
 * Database
 * 
 * @package TCMS
 */
class Db
{
    // Constructor, Easy Connection
    public function __Construct($user, $pass, $database, $host='localhost')
    {
        $this->Connect($user, $pass, $database, $host);
    }
    
    // Method for Connecting
    private function Connect($user, $pass, $database, $host)
    {
        mysql_connect($host, $user, $pass)or die(mysql_error());
        mysql_select_db($database)or die(mysql_error());
    }
    
    // Method for Querys
    public function Query($input)
    {
        $this->Query = $input;
        return mysql_query($input)or die(mysql_error());
    }
    
    // Method for Num Rows
    public function Numrows($input=null)
    {
        if($input != null)
        {
            $return = $this->Query($input);
        }
        else
        {
            $return = $this->Query($this->Query);
        }
        
        return mysql_num_rows($return);
    }
}


?>