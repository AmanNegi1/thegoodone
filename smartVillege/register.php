<?php
include "includes/header.php";
include "includes/config/connection.php";  
?>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url("/images/villcity.jpg");">

	<form action="register.php" method="POST">
		<input type="text" name="reg_fname" placeholder="First Name" value="
		<?php 
          if(isset($_SESSION['reg_fname'])){
          	echo $_SESSION['reg_fname'];
          }
		 ?>"  required>
		<br>
         <?php
         if (in_array("please enter character length between 2 to 25", $error_array)) {
         	echo "please enter character length between 2 to 25";
         }
         ?>
		
		


		<input type="text" name="reg_lname" placeholder="Last Name" value="
		<?php 
          if(isset($_SESSION['reg_lname'])){
          	echo $_SESSION['reg_lname'];
          }
		 ?>"  required>
		<br>
		 <?php
         if (in_array("please enter character length between 2 to 25", $error_array)) {
         	echo "please enter character length between 2 to 25";
         }
         ?>

		<input type="email" name="reg_email" placeholder="Email" value="
		<?php 
          if(isset($_SESSION['reg_email'])){
          	echo $_SESSION['reg_email'];
          }
		 ?>" required>
		<br>
        <?php
         if (in_array("Please enter valid email", $error_array)) {
         	echo "Please enter valid email";
         }
         ?>

		<input type="email" name="reg_email2" placeholder="Confirm Email" value="
		<?php 
          if(isset($_SESSION['reg_email2'])){
          	echo $_SESSION['reg_email2'];
          }
		 ?>" required>
		<br>
		<?php
         if (in_array("Please enter valid email<br>", $error_array)) {
         	echo "Please enter valid email<br>";
         }else if (in_array("Email already exist<br>", $error_array)) {
         	echo "Email already exist<br>";
         }elseif (in_array("Invaid email format<br>", $error_array)) {
           echo "Invaid email format<br>";
         }
         ?>


		<input type="password" name="reg_password" placeholder="Password" value="
		<?php 
          if(isset($_SESSION['reg_password'])){
          	echo $_SESSION['reg_password'];
          }
		 ?>" required>
		<br>
		<input type="password" name="reg_password2" placeholder="Confirm Password" value="
		<?php 
          if(isset($_SESSION['reg_password2'])){
          	echo $_SESSION['reg_password2'];
          }
		 ?>" required>
		<br>
		<?php
         if (in_array("Your  Password do not match '' <br>", $error_array)) {
         	echo "Your  Password do not match <br>";
         }else if (in_array("your password can only contain character or number<br>", $error_array)) {
         	echo "your password can only contain character or number<br>";
         }elseif (in_array("your password must be between 5 and 40 character<br>", $error_array)) {
           echo "your password must be between 5 and 40 character<br>";
         }
         ?>
		


		<input type="submit" name="reg_Submit" value="Register">
		<br>
       
		<?php if(in_array("<span style='color: #14C800;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
	</form>  

</body>
</html>