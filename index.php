<?php
// Include Initialisation File
//include('inc/init.inc.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('app/mvc.php');

// Check if the requested page is in our system's page list
/*if( in_array($p, $pages) )
{
    // If the file exists then
    if( file_exists($location) == true )
    {
        // include the file
        require_once($location);
    }
}
else
{
    echo 'File does not exist';
}
*/