<?php
//require 'include/goodonedb.php';

if (isset($_SESSION['username'])) {
        $userLoggedIn = $_SESSION['username'];
        $user_details_query = mysqli_query($Connection, "SELECT * FROM studentregister WHERE username='$userLoggedIn'");
        $user = mysqli_fetch_array($user_details_query);
      }
else  {
      header("Location: landing.php");
      }
?>
 