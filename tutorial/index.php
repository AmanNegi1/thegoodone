<?php 
include 'include/usersession.php'; ?>
<!doctype html>
<html>
<head>
  <title>The Alladin shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/gallery.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <a href="gallery.php" class="navbar-brand" id="text">The Alladin shop</a>
    <ul class="nav navbar-nav">
      <!--Drop down menu-->
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Shirts</a></li>
          <li><a href="#">Pants</a></li>
          <li><a href="#">Shoes</a></li>
          <li><a href="#">Accessories</a></li>
        </ul>
      </li>

    </ul>
<ul class="nav navbar-nav navbar-right">
            <li><a href="userprofile.php?name=<?php echo $userLoggedIn ?>"><?php  echo $userLoggedIn; ?></a></li>
            <li><a href="#"></a></li>
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">more</a>
            <ul class="dropdown-menu">
          
                <li><a href="include\logout.php">SignOut</a></li>
                <?php  //   }
                //  else{
                 ?>
                <!-- <li><a href="register.php">SignIn</a></li> -->   <?php //}?>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
        </ul>
      </li>
</ul>
    <ul><!--search button-->
      
            <form action="index.php" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control " placeholder="Search" name="Search">
          </div>
          <button class="btn-btn-default" name="SearchButton">Go</button>
        </form>
    </ul>
  </div>
</nav>
<!--insert images-->
<div id="background-image">
<center style="font-style: italic; font-size: 100px; margin-top:10px">  <img src = "alladin.png" height=400px; />The Alladin Shop<img src = "alladin.png" height=400px; /></center>
</div>
<!-- remove spaces and centre the product-->
<div class="col-md-2"></div>
<!--main content-->
<div class="col-md-8">
  <div class="row">
    <h2 class="text-center">Featured Products</h2>
    <?php 
          $query="SELECT * FROM catagory ";
          $execute=mysqli_query($con,$query);
          while($dataRows=mysqli_fetch_array($execute)) {
             
              $Id=$dataRows["id"];
              ?>
    <div class="col-md-3">
     <h4><?php echo $dataRows['brand']; ?></h4>
        <img src="images/<?php echo($dataRows['image']) ?>" alt="levis Jeans" id="images"/>
        <p class="list-price text-danger">List Price:<s><?php echo $dataRows['list_price']; ?></s></p>
        <p class="price"><?php echo $dataRows['our_price']; ?></p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
    </div>
<?php }//end of while loop ?>
  </div>
  <footer class="text-center" id="footer">&copy; Copyright 2018-2019 The Alladin Shop</footer>
</div>

<!--details modal-->
<?php
      include 'details-modal-LevisJeans.php';
      include 'details-modal-Basketball.php';
      include 'details-modal-watch.php';
?>
<!--end of details-->


</body>
</html>
