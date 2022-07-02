<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Styles/SideBar.css" />
<link rel="stylesheet" type="text/css" href="Styles/BasicStyles.css" />
</head>

<body>
	<div class="topnav">
  <img src="Images/Logo1.PNG" width="45" height="45">
  <img src="Images/Logo2.PNG" height="45">
  <a href="Contact Us.php">Contact Us</a>
  <a href="Events.php">Events</a>
  <a href="loginPage.php">Login</a>
  <a href="RegisterPage.php">Register</a>
  <a href="MyProfile.php">My Profile</a>
  <a href="About Us.php">About us</a>
  <a class="active" href="#">Products</a>
  <a href="HomePage.php">Home</a>
  </div>
	<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <?php
	$con = mysqli_connect("localhost","root","","companydb");
		if(!$con)
		{
			die("Cannot conect to the database server");
		}
	$sql = "SELECT * FROM tblproducts";
	$results = mysqli_query($con,$sql);
	if(mysqli_num_rows($results)>0)
	{
		while($row = mysqli_fetch_assoc($results))
			{
		?>
  <a href="Products.php?name=<?php echo $row['productName'];?>"><?php echo $row['productName'];?></a>
		<?php
			}
	}
		mysqli_close($con);
		?>
</div>

<div id="main">
<button class="openbtn" onclick="openNav()">☰ Our Products</button><br>  
  <?php
	if($_GET['name'] == !NULL)
	{
		$con = mysqli_connect("localhost","root","","companydb");
			if(!$con)
			{
				die("Cannot conect to the database server");
			}
		$sql = "SELECT * FROM tblproductitems WHERE productName = '".$_GET['name']."'";
		$results = mysqli_query($con,$sql);
		if(mysqli_num_rows($results)>0)
		{
			while($row = mysqli_fetch_assoc($results))
				{
	?>
	<div class="carda">
    <h4><b><?php echo $row['productItemName'];?></b></h4>
		  <center>
			  <?php 
				if($row['productItemImagepath1']==!NULL && $row['productItemImagepath1']!=="ItemImages/" )
	            {
		         ?>
			  <img src="<?php echo $row['productItemImagepath1'];?>" width="19%">
			  <?php
	            }
				if($row['productItemImagepath2']==!NULL && $row['productItemImagepath2']!=="ItemImages/" )
				{
				?>
				  <img src="<?php echo $row['productItemImagepath2'];?>" width="19%">
			  <?php
				}
				if($row['productItemImagepath3']==!NULL && $row['productItemImagepath3']!=="ItemImages/" )
				{
				?>
			  <img src="<?php echo $row['productItemImagepath3'];?>" width="19%">
			  <?php
				}
				if($row['productItemImagepath4']==!NULL && $row['productItemImagepath4']!=="ItemImages/" )
				{
				?>
			  <img src="<?php echo $row['productItemImagepath4'];?>" width="19%">
			  <?php
				}
				if($row['productItemImagepath5']==!NULL && $row['productItemImagepath5']!=="ItemImages/" )
				{
				?>
			  <img src="<?php echo $row['productItemImagepath5'];?>" width="19%">
		<?php
				}
				?>
		</center>
</div>
	<?php
				}
		}
	
	mysqli_close($con);
	}
	?>
</div>

<p>
  <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
	</script></p>

</body>
</html>
