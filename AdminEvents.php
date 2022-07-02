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
  <a class="active" href="#">Admin Events</a>
  <a href="AdminProducts.php?name=">Admin Products</a>
  <a href="AdminProfile.php">Admin Profile</a>
  <a href="HomePage.php">Home</a>
  </div>
	<form action="AdminEvents.php" method="post" enctype="multipart/form-data">
      
      <table width="438" border="1" align="center">
      <tr bgcolor="#FF0004" >
        <td colspan="2" bgcolor="#FF0004"><div align="center"></div>
          <h1 style="text-align: center" color:"black">Add a Event</h1></td>
        </tr>
      <tr>
        <td width="146">Event Description</td>
        <td width="282"><textarea name="txtEvent" rows="5" autofocus="autofocus" required="required" id="txtEvent" ></textarea></td>
      </tr>
      <tr>
        <td>Event Picture</td>
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
		$eventDescription = $_POST['txtEvent'];
		
		$eventPic = "Events/".basename($_FILES["file"]["name"]);
		
		move_uploaded_file($_FILES["file"]["tmp_name"],$eventPic);
		
		$con = mysqli_connect("localhost","root","","companydb");
		
		if(!$con)
		{
			die("Cannot upload the file, Please choose another file");
		}
		
		$sql = "INSERT INTO tblevents (eventDescription,eventImagePath) VALUES ('$eventDescription','$eventPic')";
		
		if(mysqli_query($con,$sql))
		{
			echo "Event uploaded Successfully";
		}
		else
			echo "Opps something is wrong, Please add it again";
		
		header('Location:AdminProfile.php');
	}
	?>
</body>
</html>