<?php
// Path: freakyfree.com/index.php

include(dirname(__FILE__).'/define/define.php');

// Get the initial REQUEST_URI
$requestURL = $_SERVER['REQUEST_URI'];

// Create an array from the URL
$urlArray = preg_split('[\\/]', $requestURL, -1, PREG_SPLIT_NO_EMPTY);
	
// Load Controller
$controller = new Controller($urlArray);
$controller->loadController();

// Load Model
$model = new Model();
?>