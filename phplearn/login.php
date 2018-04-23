<?php 
if (isset($_POST['login'])  && !empty($_POST['login'])) {
	$username=$_POST['Username'];
	$Password=$_POST['Password'];
	if (!empty($username) or !empty($password)) {
		$username=$getFromU->checkInput($username);	
		$Password=$getFromU->checkInput($Password);
		 
		}
	else
	{
		$error="please enter valid username and password ";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>hello login</title>
</head>
<body>
	<center>
	<form action="login.php" method="post" enctype="multipart/form-data" >	
		<div class="col-sm-10">
	<table  class="table table-bordered">
		<tr>
			<td>
				Enter Your User Name:<input class="form-control" type="text" name="Username">
			</td>
		</tr>
		<tr>
			<td>
				Enter Your Password:<input class="form-control" type="password" value="" name="Password">
			</td>
		</tr>
		</div>
	</table>
	<tr>
		<td>
			<input type="submit" name="login" >
		</td>
	</tr>
	<?php
     if (isset($error)) {
     	//echo "<div style='background-color:yellow'>'.$error.'</div>";
   echo $error;
     }
	?>
	</form>
	</center>
</body>
</html>