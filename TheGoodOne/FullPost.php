<?php 
require_once("include/cmsdb.php");
require_once("include/session.php");
require_once("include/functions.php");
 ?>
 <?php 
    
if (isset($_POST['Submit'])) {

    $Name=mysqli_real_escape_string($Connection,$_POST["Name"]);
    $Email=mysqli_real_escape_string($Connection,$_POST["Email"]);
    $Status="off";
    $PostIdFromUrl=$_GET['id'];
    
    $Comment=mysqli_real_escape_string($Connection,$_POST["Comment"]);
    date_default_timezone_set("Asia/kolkata");
    $currenttime=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
    $datetime;
    //  $urlId = $_GET["ID"];

   if (empty($Name)||empty($Email)||empty($Comment)){
    // $PostIdFromUrl=$_GET['id'];
     $_SESSION["ErrorMessage"]="fill all the field";
    
     
  //or  Redirect_to("dashboard.php");//through functions .php
   }
   elseif(strlen($Comment)>500){
    
    $_SESSION["ErrorMessage"]="minimum length is of 500 characters";
 
   
   }
   else{
       

        $Connection=mysqli_connect('localhost','root','root');
        $ConnectingDB=mysqli_select_db($Connection,"phpcms");
        $query1="INSERT INTO comments( datetime,name,email,comment,status,adminportal_id)
        VALUES('$datetime','$Name','$Email','$Comment','$Status','$PostIdFromUrl')";

    $execute1=mysqli_query($Connection,$query1);
    if ($execute1) {
        
        $_SESSION["SuccessMessage"]="Catagory added successfully";
         header("Location:FullPost.php?id={$PostIdFromUrl}");
      //  header("Location:FullPost.php");
    }
    else{
          echo mysqli_error($Connection);
        $_SESSION["ErrorMessage"]="Failed to Add";
          header("Location:dasboard.php?id={$PostIdFromUrl}");
        //header("Location:FullPost.php");
    }
   }//end of the else


}//end of the if submit
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
	<title>full Post</title>
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
                <?php 
                 
                 echo SuccessMessage();
                 echo Message();
                 
                 ?>
    		<p class="lead">Welcome the world of the student</p>

              	</div>
    	<div class="=row">
    		<div   class="col-sm-8"> 
    		 
    		<?php 
             //this is for search
              global $ConnectingDB;
               
              if (isset($_GET["SearchButton"])) {
              	$Search=$_GET["Search"];
              	$viewquery="SELECT * FROM adminportal WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%' OR catagory LIKE '%$Search%' OR post LIKE '%$Search%' ";
              }
              else{
                   $PostIdFromUrla=$_GET["id"];
                $viewquery="SELECT * FROM adminportal WHERE Id='$PostIdFromUrla' ORDER BY datetime desc";
                }
               
                $execute=mysqli_query($Connection,$viewquery);
             while($dataRows=mysqli_fetch_array($execute)) {
             	$Id=$dataRows["id"];
             	$DateTime=$dataRows["datetime"];
             	$Title=$dataRows["title"];
             	$Catagory=$dataRows["catagory"];
             	$Image=$dataRows["image"];
             	$Author=$dataRows["author"];
             	$Post=$dataRows["post"];
             	

            
    		 ?>
    		 <div class="blogpost thumbnail">
    		 	<img src="/upload/<?php echo $Image ?>"><!--image path will goes here-->
    		 	<div class="caption">
    		 		<h1 style="color: orange;"> <?php echo htmlentities($Title); ?></h1>
    		 		<p>
    		 			<?php echo htmlentities($Catagory); ?> Published Date is <?php echo htmlentities($DateTime); ?>
    		 		</p>
    		 		<p>
    		 			<?php 
    		 				
    		 			echo htmlentities($Post); ?>
    		 		</p>
    		 		
    		 	</div>
                
    		 	<br>
    		 </div>
    		 <?php }//end of the while llopp ?>

             <?php 
             $ConnectingDB;
             $postcomts=$_GET['id'];
             $executeComts="SELECT * FROM comments WHERE adminportal_id='$postcomts' AND status='ON'";
             $execute=mysqli_query($Connection,$executeComts);
            while ($datarows=mysqli_fetch_array($execute)) {
                 
                    $ComDateTime=$datarows['datetime'];
                    $ComName=$datarows['Name'];
                    $Commment=$datarows['comment'];
                   
             
              ?>
              <div style="background-color: #d5ddea;border-radius: 10px;">
                   <img  class="pull-left" src="img/unknown.jpg" width="60px" height="60px" style="border-radius: 10px;margin-left: 10px;margin-top: 20px;">
                   <br>
                   <p style="margin-left: 80px;"> <?php echo $ComName;  ?></p>
                   <p style="margin-left: 80px;"><?php echo $Commment; ?></p>
                   <p style="margin-left: 80px;"><?php echo $ComDateTime; ?></p>
                   <hr>
              </div>
             <?php }//end of the while loop ?>
             <div>
                <form action="FullPost.php?id=<?php echo $PostIdFromUrla; ?>" enctype="multipart/form-data" method="post">
                    <fieldset>
                        <div class="form-group">
                        <label for="Name">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Name:</span></label>

                        <input class="form-control" type="text" name="Name" id="title" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">E-mail:</span></label>

                        <input type="email" class="form-control"  name="Email" id="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="Comment">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Comment:</span></label>

                        <textarea class="form-control"  name="Comment" id="Comment" placeholder="Comment"></textarea>
                    </div>
                        <br>
                        <input class="btn btn-success" type="submit" name="Submit" value="Submit">
                    </fieldset><br>
                </form>
            </div>
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