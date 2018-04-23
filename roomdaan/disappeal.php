<?php
require_once 'config/config.php';
 ?>

<?php
$getroominfoID=$_GET['id'];
$query="UPDATE  roominfo SET  idofid='$getroominfoID' ,appealby='' WHERE id='$getroominfoID'";
//$viewquery="SELECT usercounter from roominfo  WHERE id='$getroominfoID' ";
// $execute=mysqli_query($con,$viewquery);
//$dataRows=mysqli_fetch_array($execute);
// $Usercounter=$dataRows["usercounter"];


$query11="UPDATE  roominfo SET  idofid='$getroominfoID' ,appealby='$userLoggedIn',usercounter='0' WHERE id='$getroominfoID'";
   if (mysqli_query($con, $query)) {
            echo "Successfully Upapprove";
            header("Location:FullPost.php?fullid={$getroominfoID}");
         }    
    else {
         echo "Error: " . $query . "<br>" . mysqli_error($con);
         } 
$query="UPDATE roominfo SET status='on' WHERE id='$getroominfoID'";
   if (mysqli_query($con, $query)) {
            echo "Upapprove successfully";
            header("Location:FullPost.php?fullid={$getroominfoID}");
         }    
    else {
         echo "Error: " . $query . "<br>" . mysqli_error($con);
         }  
?>