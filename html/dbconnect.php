<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'efish');
define('DB_PASSWORD', 'efish');
define('DB_NAME', 'ABET');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
