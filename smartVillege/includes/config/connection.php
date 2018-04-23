<?php
session_start();
    $con=mysqli_connect('localhost','root','root');
	$ConnectingDB=mysqli_select_db($con,"");
	if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }else{

  }
/*
$con = mysqli_connect("localhost", "root", "root", "smartvillege"); //Connection variable
$timezone=
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}*/
?>