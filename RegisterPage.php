<html>
<head>
<meta charset="utf-8">
<title>RegisterPage</title>
<link rel="stylesheet" type="text/css" href="Styles/RegisterStyle.css" />
<link rel="stylesheet" type="text/css" href="Styles/BasicStyles.css" />
<script type="text/javascript">
	function validateFullName()
	{
		var fname = document.getElementById("txtFullName").value;
	
	
	
		 if(fname=="  "|| fname==null)
		    {
				alert("Please enter the full name");
				return false;
			}
	      return true;
			 
	}
	
	function validateEmail()
	{
		var email= document.getElementById("txtEmail").value;
		
		var at= email.indexOf("@");
		var dt= email.lastIndexOf(".");
		var len= email.length;
		
		if((at<2) || (dt-at <2) || (len-dt<2))
			{
				alert("Plese enter a valid email address")
				return false;
			}
		return true;
	}
	
	function validatePassword()
    {
	  var pwd=document.getElementById("txtPassword").value;
	  var cpwd=document.getElementById("txtConfirmPassword").value;
	  
	  if((pwd.length<5) || (pwd!= cpwd))
		  {
			  alert("Please enter correct password and matching confirm password");
			  return false;
		  }
	  return true;
    }
	
	function validateCompanyName()
	{
		var fcn = document.getElementById("txtCompanyName").value;
	
	
	
		 if(fcn=="  "|| fcn==null)
		    {
				alert("Please enter the Company Name");
				return false;
			}
	      return true;
			 
	}
	
	function validateCompanyType()
	{
		if((document.getElementById("CompanyType_0").checked)||(document.getElementById("CompanyType_1").checked))
			{
				return true;
			}
		else{
			alert("Please Select one CompanyType");
			return false;
		}
	}
	
	function validateCompanyAddress()
	{
		var fca = document.getElementById("txtCompanyAddress").value;
	
	
	
		 if(fca=="  "|| fca==null)
		    {
				alert("Please enter the Company Address");
				return false;
			}
	      return true;
			 
	}
	
	function validateYearOfExperience()
	{
		var fyoe = document.getElementById("txtYearOfExpience").value;
	
	
	
		 if(fyoe==" "|| fyoe==null)
		    {
				alert("Please enter the Years of experience");
				return false;
			}
	      return true;
			 
	}
	
	function validateCountry()
	{
		var fcountry = document.getElementById("txtCountry").value;
	
	
	
		 if(fcountry=="  "|| fcountry==null)
		    {
				alert("Please enter the Country");
				return false;
			}
	      return true;
			 
	}
	
	function validateContactNo()
	{
		var fcno = document.getElementById("txtContactNo").value;
	
	
	
		 if(fcno=="  "|| fcno==null)
		    {
				alert("Please enter the Contact No");
				return false;
			}
	      return true;
			 
	}
	
	function validateAll()
	{
		if(validateFullName()&&validateEmail()&&validatePassword()&&validateCompanyName()&&validateCompanyType()&&validateCompanyAddress()&&validateYearOfExperience()&&validateCountry()&&validateContactNo())
			{
				alert("You have been Registered SuccessFully");
			}
		else
			{
				event.preventDefault();
			}
	}
	</script>
</head>

<body>
	<div class="topnav">
  <img src="Images/Logo1.PNG" width="45" height="45">
  <img src="Images/Logo2.PNG" height="45">
  <a href="Contact Us.php">Contact Us</a>
  <a href="Events.php">Events</a>
  <a href="LoginPage.php">Login</a>
  <a class="active" href="#">Register</a>
  <a href="MyProfile.php">My Profile</a>
  <a href="About Us.php">About us</a>
  <a href="Products.php?name=">Products</a>
  <a href="HomePage.php">Home</a>
  </div>
<form id="form1" name="form1" method="post" action="RegisterPage.php">
  <table  align="center" width="430" height="747" border="1">
    <tbody>
      <tr>
        <td height="59" colspan="2" align="center"><h1>Register</h1></td>
      </tr>
      <tr>
        <td align="center" width="174" height="58"><h4>Full Name</h4></td>
        <td width="240"><input name="txtFullName" type="text" autofocus="autofocus" required="required" id="txtFullName" autocomplete="on"></td>
      </tr>
      <tr>
        <td align="center" height="58"><h4>Email</h4></td>
        <td><input name="txtEmail" type="text" required="required" id="txtEmail" autocomplete="on"></td>
      </tr>
      <tr>
        <td align="center" height="56"><h4>Password</h4></td>
        <td><input name="txtpassword" type="password" required="required" id="txtPassword"></td>
      </tr>
      <tr>
        <td align="center" height="61"><h4>Confirm Password</h4></td>
        <td><input name="txtConfirmPassword" type="password" required="required" id="txtConfirmPassword"></td>
      </tr>
      <tr>
        <td align="center" height="61"><h4>Company Name</h4></td>
        <td><input name="txtCompanyName" type="text" required="required" id="txtCompanyName" autocomplete="on"></td>
      </tr>
      <tr>
        <td align="center" height="61"><h4>Company Type</h4></td>
        <td><p>
          <label>
            <input name="CompanyType" type="radio" required="required" id="CompanyType_0" value="Manufacturing Company">
            Manufacturing Company</label>
          <br>
          <label>
            <input name="CompanyType" type="radio" required="required" id="CompanyType_1" value="Trading Company">
            Trading Company</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td align="center" height="61"><h4>Company Address</h4></td>
        <td><textarea name="txtCompanyAddress" required="required" id="txtCompanyAddress"></textarea></td>
      </tr>
      <tr>
        <td align="center" height="61"><h4>Years Of Experience</h4></td>
        <td><input name="txtYearsOfExpience" type="text" required="required" id="txtYearOfExpience" autocomplete="on"></td>
      </tr>
      <tr>
        <td align="center" height="61"><h4>Country</h4></td>
        <td><input name="txtCountry" type="text" required="required" id="txtCountry" autocomplete="on"></td>
      </tr>
      <tr>
        <td align="center" height="61"><h4>Contact No</h4></td>
        <td><input name="txtContactNo" type="text" required="required" id="txtContactNo" autocomplete="on"></td>
      </tr>
      <tr>
        <td height="61">Have an account:-<a href="LoginPage.php">LOGIN</a></td>
        <td><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" onClick="validateAll()">  <input type="reset" name="btnreset" id="btnreset" value="Reset"></td>
      </tr>
    </tbody>
  </table>
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
<?php
	if(isset($_POST["btnsubmit"]))
	{
		$fullName = $_POST["txtFullName"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtpassword"];
		$companyName = $_POST["txtCompanyName"];
		$companyType = $_POST["CompanyType"];
		$companyAddress = $_POST["txtCompanyAddress"];
		$yearsOfExpeirence = $_POST["txtYearsOfExpience"];
		$country = $_POST["txtCountry"];
		$contactNo = $_POST["txtContactNo"];
		
		$con = mysqli_connect("localhost","root","","companydb");
					if(!$con)
					{
						die("Cannot conect to the database server");
					}
					
					$sql = "INSERT INTO tblregister (fullName,email,password,companyName,companyType,companyAddress,yearOfExperience,country,contactNo) VALUES ('$fullName','$email','$password','$companyName','$companyType','$companyAddress','$yearsOfExpeirence','$country','$contactNo')";
		
					mysqli_query($con,$sql);
		            
					mysqli_close($con);
		
		            echo "<script type='text/javascript'> document.location = 'loginPage.php'; </script>";
					
	}
?>
	
</html>