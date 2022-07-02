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
  <a href="Contact Us.php">Contact Us</a>
  <a class="active" href="#">Events</a>
  <a href="loginPage.php">Login</a>
  <a href="RegisterPage.php">Register</a>
  <a href="MyProfile.php">My Profile</a>
  <a href="About Us.php">About us</a>
  <a href="Products.php?name=">Products</a>
  <a href="HomePage.php">Home</a>
  </div>
	<center><h1>Events</h1></center>
	<?php 
			$con = mysqli_connect("localhost","root","","companydb");
					if(!$con)
					{
						die("Cannot conect to the database server");
					}
					
					$sql = "SELECT * FROM tblevents";
					$results = mysqli_query($con,$sql);
				
					if(mysqli_num_rows($results)>0)
					{
						while($row = mysqli_fetch_assoc($results))
						{
			?>
	<div class="card">
  
  <div class="container">
		  <center><img src="<?php echo $row['eventImagePath'];?>" width="33%" height="33%"></center>
		<center><p><?php echo $row['eventDescription'];?></p></center>
  </div>
</div>
	<p>
	  <?php
							
						}
					}
	mysqli_close($con);
	?>
</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<footer>
  <h3><p><a href="HomePage.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Products.php">Products</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="About Us.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="MyProfile.php">My Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="RegisterPage.php">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="loginPage.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Events.php">Events</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Contact Us.php">Contact us</a></p></h3>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="33%"><p>MKH Holdings</p>
        <p>No. 380 P, Bathgammulla,</p>
        <p>Ragama, 11010,</p>
		  <p>Sri Lanka.</p></td>
		<td width="34%"><p> Tel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: +94 112 958 496</p>
        <p>Hotline: +94 771 772 729</p>
        <p>Mobile&nbsp;: +94 714 577 800</p>
        <p>&nbsp;</p></td>
      <td width="33%"><p>Email: mkhholdingssrilanka@gmail.com</p>
        <p>Fax&nbsp;&nbsp;&nbsp;: +94 112 955 080 / +94 112 958 496</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
    </tr>
  </tbody>
</table>
</footer>
</body>
</html>
