<?php
//Check connection
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'latihan');
	define('DB_USER', 'root');
	define('DB_PASS', 'root');
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
 {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else
 {
 	//echo "berjaya masuk database <br>";
 }