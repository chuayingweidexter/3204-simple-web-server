<?php

$host = "172.16.0.2";    
$port = 6603;
$user = "root";
$password = "abc123";
$dbname = "3204_db";

$con = new mysqli($host, $user, $password, $dbname, $port);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
