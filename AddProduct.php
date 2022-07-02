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
  <a href="AdminEvents.php">Admin Events</a>
  <a href="AdminProducts.php?name=">Admin Products</a>
  <a href="AdminProfile.php">Admin Profile</a>
  <a href="HomePage.php">Home</a>
  </div>
	<form action="AddProduct.php" method="post" enctype="multipart/form-data">
      
      <table width="438" border="1" align="center">
      <tr bgcolor="#FF0004" >
        <td colspan="2" bgcolor="#FF0004"><div align="center"></div>
          <h1 style="text-align: center" color:"black">Add a Product</h1></td>
        </tr>
      <tr>
        <td width="146">Product Name</td>
        <td width="282"><input name="txtName" type="text" autofocus="autofocus" id="txtName" /></td>
      </tr>
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <p>
               <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add"   />
               <input type="submit" value="BACK" name="back">
             </p>
             
        </blockquote></td>
        </tr>
    </table>
    </form>
	<?php
	if(isset($_POST["btnSubmit"]))
	{
		$ProductName = $_POST['txtName'];
		
		$con = mysqli_connect("localhost","root","","companydb");
		
		if(!$con)
		{
			die("Cannot upload the file, Please choose another file");
		}
		
		$sql = "INSERT INTO tblproducts (productName) VALUES ('$ProductName')";
		
		if(mysqli_query($con,$sql))
		{
			echo "Product Added Successfully";
		}
		else
			echo "Opps something is wrong, Please Add the product again again";
		
		header('Location:AdminProducts.php?name=');
	}
	?>
	<?php
	if(isset($_POST['back']))
	{
		header('Location:AdminProducts.php?name=');
	}
	?>
</body>
</html>