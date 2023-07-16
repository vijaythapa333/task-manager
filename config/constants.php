<?php 
//Start Session
session_start();

//Create Constants to save Database Credentials
define('LOCALHOST', 'mysql');
define('DB_USERNAME', 'php');
define('DB_PASSWORD', 'php');
define('DB_NAME', 'default');

define('SITEURL', sprintf("http://%s/", $_SERVER['HTTP_HOST']));
?>