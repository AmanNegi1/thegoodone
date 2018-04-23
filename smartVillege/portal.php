<?php require 'config/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>


    <!-- Page Content -->
    <div class="container-fluid">
     
      <div class="row">
         <div class="col-sm-2">
           <div class="list-group">
            <h4 class="my-4">Filter</h4>
            <span  class="list-group-item">
            <!-- Example single danger button -->
                <div class="btn-group">
                  <button type="button" style="width: 4cm" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">level
                 </button>
                 <div class="dropdown-menu">
                    <?php $state=1; ?>
                   <a class="dropdown-item" href="portal.php?Name=<?php echo $state; ?>">State</a>
                   <a class="dropdown-item" href="#">District</a>
                   <a class="dropdown-item" href="#">city</a>
                   
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">District and city</a>
                   <a class="dropdown-item" href="#">city and local</a>
                </div>
              </div>
            </span>
            <span href="#" class="list-group-item">
         <div class="btn-group">
              <button type="button" style="width: 4cm" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Qualification</button>
                <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                </div>
          </div>    
           </span>
            <spna href="#" class="list-group-item">Category 3</span>
           </div>
         </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" style="height: 350px;width: 980px" src="images/indianVillege.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" style="height: 350px;width: 980px" src="images/india.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" style="height: 350px;width: 980px" src="images/hotelJobs.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            <?php 
        //    $urlId=$_GET["state"];
              
              $viewquery="SELECT * FROM jobdatabase ORDER BY datetime desc";
                $count=0;
                $execute=mysqli_query($con,$viewquery);
              while($dataRows=mysqli_fetch_array($execute)) {
              $Id=$dataRows["id"];
              $DateTime=$dataRows["datetime"];
              $Statename=$dataRows["statename"];
              $Distname=$dataRows["distname"];
              $Cityname=$dataRows["cityname"];
              $Villagename=$dataRows["villagename"];
              $Jobtype=$dataRows["jobtype"];
              $Qualification=$dataRows["qualification"]; 
              $Contact=$dataRows["contact"];
              $Image=$dataRows["image"];
              $Sallary=$dataRows["sallary"]; 
              $Jobdiscription=$dataRows["jobdiscription"];
              $Viewongooglemap=$dataRows["viewongooglemap"];
              ?>  
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img style="height:8cm;" class="card-img-top" src="/upload/<?php echo htmlentities($Image); ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                   Job:<span > <?php echo htmlentities($Jobtype); ?> </span>
                  </h4>
                  <h5>Salary:<?php echo htmlentities($Sallary); ?></h5>
                  <h4>Qualification: <?php echo htmlentities($Qualification); ?></h4>
                </div>
                <div class="card-footer">
                  <small class="text-muted">Contact: <?php echo htmlentities($Contact); ?></small>
                </div>
              </div>
            </div>
             <?php  }//end of while loop ?>
            
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
