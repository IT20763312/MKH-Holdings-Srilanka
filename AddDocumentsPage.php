<?php session_start(); 
if(!isset($_SESSION["txtEmail"]))
{
	header('Location:loginPage.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" type="text/css" href="Styles/LoginStyle.css" />
	<link rel="stylesheet" type="text/css" href="Styles/BasicStyles.css" />
</head>

<body>
	<div class="topnav">
  <img src="Images/Logo1.PNG" width="45" height="45">
  <img src="Images/Logo2.PNG" height="45">
  <a href="Contact Us.php">Contact Us</a>
  <a href="Events.php">Events</a>
  <a href="LoginPage.php">Login</a>
  <a href="RegisterPage.php">Register</a>
  <a href="MyProfile.php">My Profile</a>
  <a href="About Us.php">About us</a>
  <a href="Products.php?name=">Products</a>
  <a href="HomePage.php">Home</a>
  </div>
	<form action="AddDocumentsPage.php" method="post" enctype="multipart/form-data">
      
      <table width="438" border="1" align="center">
      <tr bgcolor="#FF0004" >
        <td colspan="2" bgcolor="#FF0004"><div align="center"></div>
          <h1 style="text-align: center" color:"black">Add Documents</h1></td>
        </tr>
      <tr>
        <td width="146">Document Type</td>
        <td width="282"><input name="txtTitle" type="text" autofocus="autofocus" required="required" id="txtFullName" /></td>
      </tr>
      <tr>
        <td>Document</td>
        <td><input name="file" type="file" required="required" id="file" /></td>
      </tr>
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <p>
               <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now"   />
               <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
               
             </p>
             
        </blockquote></td>
        </tr>
    </table>
    </form>
	<?php
	if(isset($_POST["btnSubmit"]))
	{
		$documentType = $_POST['txtTitle'];
		
		$document = "Uploads/".basename($_FILES["file"]["name"]);
		
		move_uploaded_file($_FILES["file"]["tmp_name"],$document);
		
		$con = mysqli_connect("localhost","root","","companydb");
		
		if(!$con)
		{
			die("Cannot upload the file, Please choose another file");
		}
		
		$sql = "INSERT INTO tbldocument (email,documentType,path) VALUES ('".$_SESSION["txtEmail"]."','$documentType','$document')";
		
		if(mysqli_query($con,$sql))
		{
			echo "Document uploaded Successfully";
		}
		else
			echo "Opps something is wrong, Please select the document again";
		
		header('Location:MyProfile.php');
	}
	?>
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
