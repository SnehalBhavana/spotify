<?php

 
// Error Reporting Turn On

 
ini_set('error_reporting', E_ALL);

 
 

 
// Setting up the time zone

 
date_default_timezone_set('Asia/Kolkata');

 
 

 
// Host Name

 
$dbhost = 'database.c100jh4vmti7.us-east-1.rds.amazonaws.com';

 
 

 
// Database Name

 
$dbname = 'slotifyfree';

 
 

 
// Database Username

 
$dbuser = 'admin';

 
 

 
// Database Password

 
$dbpass = 'admin123';

 
 

 
// Defining base url

 
define("BASE_URL", "http://slotify-env.eba-ddmint8v.us-east-1.elasticbeanstalk.com/register.php");

 
 

 
// Getting Admin url

 
define("ADMIN_URL", BASE_URL . "admin" . "/");

 
 

 
try {

 
$con = new con("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);

 
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
}

 
catch( PDOException $exception ) {

 
echo "Connection error :" . $exception->getMessage();

 
}