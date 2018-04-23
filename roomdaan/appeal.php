<?php
require_once 'config/config.php';
if (isset($_SESSION['username'])) {
  $userLoggedIn = $_SESSION['username'];
  $user_details_query = mysqli_query($con, "SELECT * FROM social WHERE username='$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
}
else {
  header("Location: register.php");
}

 ?>

<?php
$getroominfoID=$_GET['id'];
$vq="SELECT * FROM roominfo WHERE id='$getroominfoID'";
$execute=mysqli_query($con,$vq);
$dataRows1=mysqli_fetch_array($execute);
$username1=$dataRows1['username'];
$roominfoID=$dataRows1['id'];

$vq1="SELECT * FROM userappeal WHERE id='$getroominfoID'";
$execute1=mysqli_query($con,$vq1);
$dataRows2=mysqli_fetch_array($execute1);

$Counter=$dataRows2['counter'];
 if ($Counter<=0) {
  	 $Counter++;
  
 //$qy="INSERT INTO userappeal (appeal_by,appeal_to,datetime,status,roominfoid,counter) VALUES('$userLoggedIn','$username1','$datetime','no','$roominfoID','$Counter')";
  	 $up="UPDATE userappeal SET appeal_by='$userLoggedIn',appeal_to='$username1',datetime='$datetime',status='no',roominfoid='$roominfoID',counter='$Counter'";
 if (mysqli_query($con, $up)) {
            echo "New record created successfully";
         }    
    else {
         echo "Error: " . $up . "<br>" . mysqli_error($con);
         }
        
}else{
    echo "Your are allready intrested";
}
//$viewquery="SELECT usercounter from roominfo  WHERE id='$getroominfoID' ";
// $execute=mysqli_query($con,$viewquery);
//$dataRows=mysqli_fetch_array($execute);
// $Usercounter=$dataRows["usercounter"];
//$Usercounter=$Usercounter+1;

//$query11="UPDATE  userappeal SET  idofid='$getroominfoID' ,appealby='$userLoggedIn',usercounter='$Usercounter' WHERE id='$getroominfoID'";
 // if (mysqli_query($con, $query11)) {
 //           echo "New record created successfully";
  //       }    
 //   else {
  //       echo "Error: " . $query1 . "<br>" . mysqli_error($con);
    //     }
//$query="UPDATE userappeal SET status='off' WHERE roominfoid='$getroominfoID'";
  // if (mysqli_query($con, $query)) {
  //          echo "Appealed successfully";
   //         header("Location:FullPost.php?fullid={$getroominfoID}");
   //      }    
  //  else {
  //       echo "Error: " . $query . "<br>" . mysqli_error($con);
  //       }  
?>