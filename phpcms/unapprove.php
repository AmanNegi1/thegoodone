<?php 
require_once("include/cmsdb.php");
require_once("include/session.php");
require_once("include/functions.php");
 ?>
 <?php 
$ConnectingDB;
if (isset($_GET['id'])) {
	 $PostIdFromUrla=$_GET["id"];
                $viewquery="UPDATE comments SET status='OFF' WHERE id='$PostIdFromUrla' ORDER BY datetime desc";
                 $execute=mysqli_query($Connection,$viewquery);
                 if ($execute) {
                 	$_SESSION["SuccessMessage"]="Message added successfully";
   		             header("Location:comments.php");
                 }
                 else{
                 	$_SESSION["ErrorMessage"]="Failed to Add";
   		            header("Location:comments.php");
                 }
}
  ?>