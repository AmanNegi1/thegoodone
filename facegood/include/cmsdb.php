 
 <?php
	/*
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$dbname = 'phpcms';

	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
	*/
	$Connection=mysqli_connect('localhost','root','root');
	$ConnectingDB=mysqli_select_db($Connection,"phpcms");
	if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }else{

  }
?>
