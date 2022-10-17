<?php
$con = mysqli_connect("172.16.0.2","root","abc123","3204_db", "6603");

// Check connection
if ($dblink->connect_error) {
    die('Connect Error (' . $dblink->connect_errno . ') '. $dblink->connect_error);
}
echo $dblink->host_info;
?>
