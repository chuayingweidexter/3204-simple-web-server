<?php

$host = "xxx.xxx.xxx.xxx:3333";    
$port = 3306;
$user = "user";
$password = "password";
$dbname = "db01";

$con = new mysqli($host, $user, $password, $dbname, $port);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
