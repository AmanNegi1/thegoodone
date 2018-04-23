<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
 
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
 
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login">Login</button>
  	</div>
  	<p>
  		Registeration will go here? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>