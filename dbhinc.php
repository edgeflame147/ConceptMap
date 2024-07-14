<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "logins";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

if(!$conn) echo "Connection Error: " . mysqli_connect_error();

?>