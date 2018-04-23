<?php
include 'database.php';
if (isset($_POST['submit'])) {
	# code...
  $user=mysqli_real_escape_string($conn,$_POST['user']);

  $message=mysqli_real_escape_string($conn,$_POST['message']);
   echo "$message";
   echo "$user";
  date_default_timezone_set('Asia/kolkata');  	
  $time=date('h:i:s a',time());
  echo "$time";
  if (!isset($user)||$user=='' || !isset($message)|| $message=='') {
   $error="please try again";
   header("Location:chatonpage.php?error=".urlencode($error));
   exit();
   }
   else {
    	$query="INSERT INTO userchating (user,message) values ('$user','$message')";
    	//echo "$query";
 /*   	if (!mysqli_query($conn,$query)) {
    		# code...
    		die('just error ');
    	}
    	else{
    		header("Location:chatonpage.php");
    		exit();    	}*/

    		if ($conn->query($query) === TRUE) {
                   header("Location:chatonpage.php");
                   exit();
             } else {
            echo "Error: " . $query . "<br>" . $conn->error;
         }
       } 
}

?>