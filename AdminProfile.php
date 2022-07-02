<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="Styles/BasicStyles.css" />
</head>
<body>
	<div class="topnav">
  <img src="Images/Logo1.PNG" width="45" height="45">
  <img src="Images/Logo2.PNG" height="45">
  <a href="AdminEvents.php">Admin Events</a>
  <a href="AdminProducts.php?name=">Admin Products</a>
  <a class="active" href="#">Admin Profile</a>
  <a href="HomePage.php">Home</a>
  </div>
	<?php 
			$con = mysqli_connect("localhost","root","","companydb");
					if(!$con)
					{
						die("Cannot conect to the database server");
					}
					
					$sql = "SELECT * FROM tblregister";
					$results = mysqli_query($con,$sql);
				
					if(mysqli_num_rows($results)>0)
					{
						while($row = mysqli_fetch_assoc($results))
						{
			?>
	<div class="card">
  
  <div class="container">
    <h4><b>Company : <?php echo $row['companyName'];?></b></h4>
    <p>Name : <?php echo $row['fullName'];?></p>
	  <p>Email : <?php echo $row['email'];?></p>
	  <p>Company Type : <?php echo $row['companyType'];?></p>
	  <p>Company Address : <?php echo $row['companyAddress'];?></p>
	  <p>Country : <?php echo $row['country'];?></p>
	  <p>Years Of Experience : <?php echo $row['yearOfExperience'];?></p>
	  <p>Contact number : <?php echo $row['contactNo'];?></p>
		  <center><a href="AdminMessagePage.php?email=<?php echo $row['email'];?>"><img src="Images/MessageLogo.jpg" width="75" height="75"></a></button></center>
  </div>
</div>
	<?php
							
						}
					}
	mysqli_close($con);
	?>
</body>
</html>
