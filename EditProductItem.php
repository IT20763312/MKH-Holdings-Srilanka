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
	<form action="EditProductItem.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
		<?php
		$con = mysqli_connect("localhost","root","","companydb");
						if(!$con)
						{
							die("Cannot conect to the database server");
						}
					$sql = "SELECT * FROM tblproductitems WHERE productItemId = '".$_GET['id']."'";
					$results = mysqli_query($con,$sql);
					if(mysqli_num_rows($results)>0)
					{
						$row = mysqli_fetch_assoc($results);
						$image1  = $row['productItemImagepath1'];
						$image2  = $row['productItemImagepath2'];
						$image3  = $row['productItemImagepath3'];
						$image4  = $row['productItemImagepath4'];
						$image5  = $row['productItemImagepath5'];
		?>
		
      <table width="438" border="1" align="center">
      <tr bgcolor="#FF0004">
        <td colspan="2" bgcolor="#FF0004"><div align="center"></div>
          <h1 style="text-align: center" color:"black">Add Product Item</h1></td>
        </tr>
      <tr>
        <td width="146">Product Item Name</td>
        <td width="282"><input name="txtProductItemName" type="text" autofocus="autofocus" value="<?php echo $row['productItemName'];?>" id="txtProductItemName" /></td>
      </tr>
		  <tr>
		  <td width="1">Product Name</td>
			  <td width="282">
			  <select id="txtProductName" name="txtProductName">
				  <?php
				  $con = mysqli_connect("localhost","root","","companydb");
						if(!$con)
						{
							die("Cannot conect to the database server");
						}
					$sql = "SELECT * FROM tblproductitems";
					$results = mysqli_query($con,$sql);
					if(mysqli_num_rows($results)>0)
					{
						while($row = mysqli_fetch_assoc($results))
							{
				  ?>
				  <option value="<?php echo $row['productName'];?>"><?php echo $row['productName'];?></option>
				  <?php
						}
					}
				  mysqli_close($con);
				  ?>
				  </select>
			  </td>
		  </tr>
      <tr>
        <td>Image 1</td>
        <td><input name="file1" type="file" id="file1" /></td>
      </tr>
		  <tr>
        <td>Image 2</td>
        <td><input name="file2" type="file" id="file2" /></td>
      </tr>
		  <tr>
        <td>Image 3</td>
        <td><input name="file3" type="file" id="file3" /></td>
      </tr>
		  <tr>
        <td>Image 4</td>
        <td><input name="file4" type="file" id="file4" /></td>
      </tr>
		  <tr>
        <td>Image 5</td>
        <td><input name="file5" type="file" id="file5" /></td>
      </tr>
      <tr>
        <td colspan="2"><blockquote>
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <p>
               <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Update"   />
				 <input type="submit" value="DELETE" name="delete">
               <input type="submit" value="BACK" name="back">
             </p>
             
        </blockquote></td>
        </tr>
    </table>
		<?php
					}
		?>
    </form>
	<?php
	if(isset($_POST["btnSubmit"]))
	{
		$productName = $_POST['txtProductName'];
		
		$productItemName = $_POST['txtProductItemName'];
		
		$image1 = "ItemImages/".basename($_FILES["file1"]["name"]);
		$image2 = "ItemImages/".basename($_FILES["file2"]["name"]);
		$image3 = "ItemImages/".basename($_FILES["file3"]["name"]);
		$image4 = "ItemImages/".basename($_FILES["file4"]["name"]);
		$image5 = "ItemImages/".basename($_FILES["file5"]["name"]);
		
		move_uploaded_file($_FILES["file1"]["tmp_name"],$image1);
		move_uploaded_file($_FILES["file2"]["tmp_name"],$image2);
		move_uploaded_file($_FILES["file3"]["tmp_name"],$image3);
		move_uploaded_file($_FILES["file4"]["tmp_name"],$image4);
		move_uploaded_file($_FILES["file5"]["tmp_name"],$image5);
		
		$con = mysqli_connect("localhost","root","","companydb");
		
		if(!$con)
		{
			die("Cannot upload the file, Please choose another file");
		}
		
		$sql = "UPDATE tblproductitems SET productName = '$productName', productItemName = '$productItemName', productItemImagepath1 = '$image1', productItemImagepath2 = '$image2', productItemImagepath3 = '$image3', productItemImagepath4 = '$image4', productItemImagepath5 = '$image5' WHERE productItemId  = '".$_GET['id']."'";
		
		if(mysqli_query($con,$sql))
		{
			echo "Item Updated Successfully";
		}
		else
			echo "Opps something is wrong, Please Update the Item again";
		
		header('Location:AdminProducts.php?name=');
	}
	?>
	<?php
	if(isset($_POST['back']))
	{
		header('Location:AdminProducts.php?name=');
	}
	?>
	<?php
	if(isset($_POST["delete"]))
	{
		$productItemId = $_GET['id'];
		
		$con = mysqli_connect("localhost","root","","companydb");
		
		if(!$con)
		{
			die("Cannot upload the file, Please choose another file");
		}
		
		$sql = "DELETE FROM tblproductitems WHERE productItemId = '$productItemId'";
		
		if(mysqli_query($con,$sql))
		{
			echo "Item Deleted Successfully";
		}
		else
			echo "Opps something is wrong, Please try it again";
		
		header('Location:AdminProducts.php?name=');
	}
	?>
</body>
</html>
