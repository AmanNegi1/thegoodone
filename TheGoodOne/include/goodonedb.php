 
 <?php
	/*
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root';
	$dbname = 'phpcms';

	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
	*/
    ob_start(); //Turns on output buffering 
    session_start();
    date_default_timezone_set("Asia/kolkata");
    $currenttime1=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime1);
	$Connection=mysqli_connect('localhost','root','');
	$ConnectingDB=mysqli_select_db($Connection,"goodone");
	if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }else{
      //echo "Connected successfully";
  }
?>
