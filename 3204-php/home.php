<?php 
include('dbcon.php');
include('session.php'); 

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome</h3></center>
	 <div class="reminder">
    <?php
    $sql ="SELECT * FROM [SSH Credentials] WHERE Accounts_User_id IN ('$session_id')";
		print "<p> $sql </p>";
		print "<hr>";
		$result = mysqli_query($con, $sql);
		$queryResult = mysqli_num_rows($result);
    if($queryResult > 0){
        while($row = mysqli_fetch_assoc($result)){
          echo "<tr><td>".$row["IP_Address"]."</td>";
          echo "<td>".$row["Username"]."</td>";
          echo "<td>".$row["Password"]."</td>";
        }
      }
    ?>
    <p><a href="logout.php">Log out</a></p>
  </div>
</div>

</body>
</html>
