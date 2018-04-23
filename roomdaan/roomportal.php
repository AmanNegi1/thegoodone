<?php // require 'config/config.php';
 
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Room Portal</title>
 
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

 <?php include 'includes/navheader.php'; ?>
       <form action="roomportal.php" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control " placeholder="Search" name="Search">
          </div>
          <button class="btn-btn-default" name="SearchButton">Go</button>
        </form></ul>
     </div><!-- /.navbar-collapse -->
</nav>
    <!-- Page Content -->
    <div class="container-fluid">
     
      <div class="row">
         <div class="col-sm-2">
           <div class="list-group">
             
          
           </div>
         </div>
        <!-- /.col-lg-3 -->

        <div class="col-sm-9">

            <?php 
           $con=mysqli_connect('localhost','root','');
            $ConnectingDB=mysqli_select_db($con,"roomfinder");
       //      if ( $urlId==1) {
         //     $viewquery="SELECT * FROM roominfo WHERE statename LIKE '%'  ORDER BY datetime desc";
       //      }
             if (isset($_GET["SearchButton"])) {
                $Search=$_GET["Search"];
                $viewquery="SELECT * FROM roominfo WHERE datetime LIKE '%$Search%'  OR levelset LIKE '%$Search%' OR rent LIKE '%$Search%'";
              }else{ 
                $viewquery="SELECT * FROM roominfo";}
                $count=0;
                $execute=mysqli_query($con,$viewquery);
              while($dataRows=mysqli_fetch_array($execute)) {
              $Id=$dataRows["id"];
              $Landlord=$dataRows["landlord"];
              $Address=$dataRows["address"];
          //    $City=$dataRows["city"];
            //  $State=$dataRows["state"];
          //    $Contact=$dataRows["contact"];
              $Rent=$dataRows["rent"];
         
            //  $Contact=$dataRows["contact"];
              $Info=$dataRows["info"];
              $Image1=$dataRows["image1"];
              $Levelset=$dataRows["levelset"]; 
              $Datetime=$dataRows["datetime"];
            
              ?>          
          <div class="row">
  
            <div class="col-sm-3  col-sm-offset-1">
              <div class="card h-100">
                <a href="fullpost.php?fullid=<?php echo $Id ;?>"><img style="height:8cm;width:6cm; " class="card-img-top" src="uploadedimg/<?php echo htmlentities($Image1); ?>" alt="">
                <div class="card-body">
                  <h4 class="card-title">
                   Rent:<span > <?php echo htmlentities($Rent); ?> </span>
                  </h4>
                  <h5>Room Set<?php echo htmlentities($Levelset); ?></h5>
                  <h4>published on:<?php echo htmlentities($Datetime); ?></h4>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Contact: <?php// echo htmlentities($Contact); ?></small>
                </div>
              </a>  
              </div>
            </div>
            
            
          </div>
          <!-- /.row -->
 <?php  }//end of while loop ?>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright&copy;wayFinder</p>
      </div>
      
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
  </body>

</html>
