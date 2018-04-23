
<?php 
require_once("include/cmsdb.php");
require_once("include/session.php");
require_once("include/functions.php");
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/blogcss.css">
  <title>blog</title>
</head>
<body>
  <div style="margin-top: 5px;background-color: transparent;"></div>
     <nav  class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
            <span class="sr-only"> Toggle nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="blog.php">
          <img src="/phpcms/img/dawn.jpg" style="width: 160px;height: 60px;margin-top: -20px">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="collapse" >
        <ul class="nav navbar-nav">
          
          <li class="active">
            <a href="#">Home</a>
          </li>
          <li><a href="#">Students</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="#">Top 5</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="#">Contect us</a></li>
          <li><a href="#">LogOut</a></li>
        </ul>
        
        <form action="blog.php" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control " placeholder="Search" name="Search">
          </div>
          <button class="btn-btn-default" name="SearchButton">Go</button>
        </form>
      </div>
      </div>
    </nav>
    <div class="container">
      <div class="blog-header">
        <p class="lead">Welcome the world of the student</p>
      </div>
      <div class="=row">
        <div   class="col-sm-8"> 
         
        <?php 
         
              global $ConnectingDB;
              if (isset($_GET["SearchButton"])) {
                $Search=$_GET["Search"];
                $viewquery="SELECT * FROM adminportal WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%' OR catagory LIKE '%$Search%' OR post LIKE '%$Search%' ";
              }
              else{
                $viewquery="SELECT * FROM adminportal ORDER BY datetime desc";
                }
               
                $execute=mysqli_query($Connection,$viewquery);
             while ($dataRows=mysqli_fetch_array($execute)) {
              $Id=$dataRows["id"];
              $DateTime=$dataRows["datetime"];
              $Title=$dataRows["title"];
              $Catagory=$dataRows["catagory"];
              $Image=$dataRows["image"];
              $Author=$dataRows["author"];
              $Post=$dataRows["post"];
              

            
         ?>
      
         <div class="container-fluid bg-3 text-center">    
            <div class="row">
              <div class="col-sm-3">
                    <p>Some text..</p>
                     <img width="100%" src="/upload/<?php echo $Image ?>">
                      <div class="caption">
            <h1 style="color: orange;"> <?php echo htmlentities($Title); ?></h1>
            <p>
              <?php echo htmlentities($Catagory); ?> Published Date is <?php echo htmlentities($DateTime); ?>
            </p>
            <p>
              <?php 
                if (strlen($Post)>166) {
                  $Post=substr($Post,0,166).'....';
                }
              echo htmlentities($Post); ?>
            </p>
            <a href="FullPost.php?id=<?php echo $Id; ?>"><span style="float: right;" class="btn btn-success">Read More</span><hr>
          </a>
          </div>


              </div>
           </div>
       </div>
 
        <!--  <img src="/upload/<?php// echo $Image ?>"><!--image path will goes here-->
           
         
          <br>
        <hr>
         <?php } ?>
         </div>
         <div style="background-color: green;" class="col-sm-offset-1 col-sm-3">
          <h2>Solution</h2>
          <p >
            her is the solution
          </p>

         </div>
      </div>
    </div>
</body>
</html>