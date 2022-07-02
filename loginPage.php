<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LoginPage</title>
<link rel="stylesheet" type="text/css" href="Styles/LoginStyle.css" />
	<link rel="stylesheet" type="text/css" href="Styles/BasicStyles.css" />
</head>

<body>
	<div class="topnav">
  <img src="Images/Logo1.PNG" width="45" height="45">
  <img src="Images/Logo2.PNG" height="45">
  <a href="Contact Us.php">Contact Us</a>
  <a href="Events.php">Events</a>
  <a class="active" href="#">Login</a>
  <a href="RegisterPage.php">Register</a>
  <a href="MyProfile.php">My Profile</a>
  <a href="About Us.php">About us</a>
  <a href="Products.php?name=">Products</a>
  <a href="HomePage.php">Home</a>
  </div>
<form id="form1" name="form1" method="post">
  <table align="center" width="417" height="295" border="1">
    <tbody>
      <tr>
        <td height="53" colspan="2" align="center"><h1>LOGIN</h1></td>
      </tr>
      <tr>
        <td width="146" height="91"><h2>Email</h2></td>
        <td width="257"><input name="txtEmail" type="text" autofocus="autofocus" required="required" id="textfield" autocomplete="on"></td>
      </tr>
      <tr>
        <td height="93"><h2>Password</h2></td>
        <td><p>
          <input name="password" type="password" required="required" id="password">
        </p></td>
      </tr>
      <tr>
        <td height="41"><center><p>Haven't an Account:-</p>
        <p><a href="RegisterPage.php">REGISTER</a></p></center></td>
        <td><input type="submit" name="submit" id="" value="Login">  <input type="reset" name="btnreset" id="btnreset" value="Reset"></td>
      </tr>
    </tbody>
  </table>
  <center><p><a href="AdminLoginPage.php">Log in as an admin</a><br>
	  <?php
				if(isset($_POST["submit"]))
				{
			  		$email = $_POST["txtEmail"]; 
			  		$password = $_POST["password"];
					
					$con = mysqli_connect("localhost","root","","companydb");
					if(!$con)
					{
						die("Cannot conect to the database server");
					}
					
					$sql = "SELECT * FROM tblregister WHERE email ='$email' AND password ='$password'";
					$results = mysqli_query($con,$sql);
				
					if(mysqli_num_rows($results)>0)
					{
						$_SESSION["txtEmail"] = $email;
						header('Location:MyProfile.php');
					}
					else
					{
						echo"Username Or Password is incorrect";
					}
				}
			  ?>
	  </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </center>
</form>
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