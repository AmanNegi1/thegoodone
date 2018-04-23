<?php 

?>
<html>
<head>
	<title>Welcome to Swirlfeed!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="">
	<form action="login.php" method="POST">
		<input type="text" name="Email" placeholder="Enter your Email" required>
		<br>
		
		<input type="password" name="Password" placeholder="Password"  required>
		<br>
        <input type="submit" name="Logsubmit">
	</form>
   </div>
	<form class="form" action="login.php" method="POST">
		<input  type="text" name="Fname" placeholder="First Name" required>
		<br>
        <input type="text" name="Lname" placeholder="Last Name" required>
		<br>
		
		<input type="email" name="Email" placeholder="Email"  required>
		<br>

		<input type="email" name="Email2" placeholder="Confirm Email"  required>
		<br>
		

		<input type="password" name="Password" placeholder="Password" required>
		<br>
		<input type="password" name="Password2" placeholder="Confirm Password" required>
		<br>
		

		<input type="submit" name="Register" value="Register">
		<br>

		
	</form>


</body>
</html>