<? php


?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">
    <style type="text/css">
      img{
        width:7cm;
      }
      .div2{
        width: 9cm;
      }
    </style>
  </head>
     <body>
  <?php include 'includes/navheader.php'; ?>
       <form action="index.php" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control " placeholder="Search" name="Search">
          </div>
          <button class="btn-btn-default" name="SearchButton">Go</button>
        </form>
     </div><!-- /.navbar-collapse -->
</nav>

     <div class="container">
      <?php  if (isset($_GET["SearchButton"])) {
                $Search=$_GET["Search"];
                $viewquery="SELECT * FROM social WHERE datetime LIKE '%$Search%' OR jobtype LIKE '%$Search%' OR   datetime LIKE '%$Search%' ";
              }?>
      <div style="margin-top: 20px;" class="row">
        <div class="col-sm-4">
       <a href="portal.php">
        
          <img class="img-circle img-responsive" src="images/ineedjob.jpg" alt="">
          <center><h3>One little change in world 
            <small>when their will not a unemployee in any house</small>
          </h3>
          <p>A lot of people find jobs here.</p></center>
       
        </a>
        </div>
         <div class="col-sm-4">
      <a href="portal.php">
       
          <img class="img-circle img-responsive" src="images/formar2.jpg" alt="">
          <center><h3>Now formar can sold or buy stuffs with 
            <small>fair price</small>
          </h3>
          <p>Find buyer and solder near you</p></center>
       
        </a>
        </div>
        <div class="col-sm-4">
       <a href="portal.php">
       
          <img class="img-circle img-responsive" src="images/smartvillage.jpg" alt=""><br>
         <center><h3>other services
            <small>other</small>
          </h3>
          <p>now the villeges will not be a villege now they should call smart villeges</p></center>
      
       </a>
       </div>
      </div>

    </div>
   <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
