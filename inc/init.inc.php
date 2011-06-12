<?php

// Required Includes
include('functions.inc.php');

// Initialise Settings
include('settings.inc.php');

// Initialise Classes
$classes = array('database.class');
Bootstrap($classes, './inc/classes/');

// Page List
$pages = array('index','register');

// Defines
$p        = htmlentities($_GET['page']);
$location = 'views/'.$p.'.php';
