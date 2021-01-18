<?php

#create database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'global');
define('DB_PASSWORD', 'global2020');
define('DB_NAME', 'doc_automation');


#connect to mysql database
$link = MYSQLI_CONNECT(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


#check connection
if($link === false){
    die('ERROR: Could not connect. ' .mysqli_connect_error());
}

?>
