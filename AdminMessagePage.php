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
  <a href="AdminProfile.php">Admin Profile</a>
  <a href="HomePage.php">Home</a>
  </div>
	<?php
	$clientEmail = $_GET['email'];
	$con = mysqli_connect("localhost","root","","companydb");
		if(!$con)
		{
			die("Cannot conect to the database server");
		}
	$sql = "SELECT * FROM tblmessage WHERE client = '$clientEmail'";
	$results = mysqli_query($con,$sql);
	if(mysqli_num_rows($results)>0)
					{
						while($row = mysqli_fetch_assoc($results))
						{
	?>
	<p align="left"><?php echo $row['clientMessage'];?></p>
	<p align="right"><?php echo $row['adminMessage'];?></p>
	<?php
						}
	                }
	?>
	<form action="AdminMessagePage.php?email=<?php echo($clientEmail);?>" method="post">
		<textarea name="txtMessage" cols="165" rows="3" autofocus="autofocus" id="txtCompanyAddress"></textarea>
	  <input type="submit" name="submit" id="submit" value="SEND"><input type="submit" value="BACK" name="back">
</form>
	<?php
	if(isset($_POST['submit']))
	{
		$adminMessage = $_POST["txtMessage"];
		$admin = "admin";
		$con = mysqli_connect("localhost","root","","companydb");
			if(!$con)
			{
				die("Cannot connect to the database server");
			}
		
		$sql = "INSERT INTO tblmessage (adminMessage,admin,client) VALUES ('$adminMessage','$admin','$clientEmail')";
		
		mysqli_query($con,$sql);
		
		header("Location:AdminMessagePage.php?email=".$clientEmail);
		
		mysqli_close($con);
		
	}
	?>
	<?php
	if(isset($_POST['back']))
	{
		header('Location:AdminProfile.php');
	}
	?>
</body>
</html>
