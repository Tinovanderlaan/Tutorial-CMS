<?php

// Function for Loading Files
function Bootstrap($array, $folder=null)
{
    foreach($array as $key)
    {
        include_once($folder.$key.'.php');
    }
}

// Function for Redirecting
function Redirect($location)
{
    header('Location: ' . $location);
}
