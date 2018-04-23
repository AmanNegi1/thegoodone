<?php
require 'config/config.php';

if (isset($_SESSION['username'])) {
  $userLoggedIn = $_SESSION['username'];
  $user_details_query = mysqli_query($con, "SELECT * FROM social WHERE username='$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
}
else {
  header("Location: register.php");
}

?>
 
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<nav  class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
            <span class="sr-only"> Toggle nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
          <img src="includes/dawn.jpg" style="width: 160px;height: 60px;margin-top: -20px">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="collapse" >
        <ul class="nav navbar-nav">
          
        
          <li><a href="#">Donation</a></li>
      
       </ul>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="userprofile.php?name=<?php echo $user['username']; ?>"><?php echo $userLoggedIn; ?></a></li>
            <li><a href="#"></a></li>
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i></a>
            <ul class="dropdown-menu">
          
                <li><a href="includes\form_handlers\logout.php">SignOut</a></li>
                <?php    //  }
                //  else{
                 ?>
                <!-- <li><a href="register.php">SignIn</a></li> -->   <?php //}?>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
        </ul>
      </li>
  
        
     
 