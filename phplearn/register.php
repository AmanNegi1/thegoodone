<?php  
session_start();
$con = mysqli_connect("localhost", "root", "", "social"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}




<html>
<head>
	<title>Welcome to Swirlfeed!</title>
</head>
<body>

	<form action="register.php" method="POST">
		<input type="text" name="reg_fname" placeholder="First Name"  required>
		<br>

		
		


		<input type="text" name="reg_lname" placeholder="Last Name"  required>
		<br>
		

		<input type="email" name="reg_email" placeholder="Email" required>
		<br>

		<input type="email" name="reg_email2" placeholder="Confirm Email"  required>
		<br>
		


		<input type="password" name="reg_password" placeholder="Password" required>
		<br>
		<input type="password" name="reg_password2" placeholder="Confirm Password" required>
		<br>
		
		


		<input type="submit" name="register_button" value="Register">
		<br>

		
	</form>


</body>
</html>