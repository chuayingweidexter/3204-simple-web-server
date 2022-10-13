<?php
$con = mysqli_connect("172.18.0.24","root","abc123","3204_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
