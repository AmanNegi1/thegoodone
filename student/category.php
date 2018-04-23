<?php 
require_once("include/cmsdb.php");
 ?>
 <?php 
if (isset($_POST['Submit'])) {
		$Connection1=mysqli_connect('localhost','root','root');
	    $ConnectingDB1=mysqli_select_db($Connection1,"phpdemo");
	    date_default_timezone_set("Asia/kolkata");
        $currenttime=time();
        $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
        $datetime;
        $Course=mysqli_real_escape_string($Connection1,$_POST["course"]);
        $query="INSERT INTO course (datetime,name) VALUES ('2013-07-17 18:33:55','$Course')";
   	    $execute=mysqli_query($Connection1,$query);
      	if ($execute) {
      
   		header("Location:category.php");
    	}
    	else{
   
   		header("Location:category.php");
    	}
    	if ($ConnectingDB1->multi_query($Connection1) === TRUE) {
            echo "New records created successfully";
       } else {
         echo "Error: " . $sql . "<br>" . $ConnectingDB1->error;
       }
}
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 	<title>Category</title>
 </head>
 <body>
 <form action="category.php" method="post">
    <fieldset>
						<div class="form-group">
						<label for="CourseName">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Name:</span></label>
						<input class="form-control" type="text" name="course" id="CourseName" placeholder="course">
						</div><br>
						<input class="btn btn-success" type="submit" name="Submit" value="Add New Course">
					</fieldset>	
 </form>
 </body>
 </html>