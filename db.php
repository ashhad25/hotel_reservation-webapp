<?php
$host = 'localhost';
$username ='root';
$password = '';
$database = 'hoteldb';
$dbcon = @mysqli_connect($host, $username, $password, $database);
if(!$dbcon){
	die('could not find database'. mysqli_error($dbcon));
}

?>