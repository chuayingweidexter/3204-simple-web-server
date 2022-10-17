<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from Accounts where User_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>Welcome: <?php echo $row['Username']; ?> </h3></center>
	 <div class="reminder">
    <?php
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
