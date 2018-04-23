<?php 
require_once("include/cmsdb.php");
require_once("include/session.php");
require_once("include/functions.php");
 ?>
 <?php 
 	$Connection=mysqli_connect('localhost','root','root');
	$ConnectingDB=mysqli_select_db($Connection,"phpdemo");
if (isset($_POST['Submit'])) {

	$Catagory=mysqli_real_escape_string($Connection,$_POST["catagory"]);
	
	date_default_timezone_set("Asia/kolkata");
    $currenttime=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
    $datetime;
    
  
   
   	$query="INSERT INTO course(datetime,name)VALUES('$datetime','$Catagory')";
   	$execute=mysqli_query($Connection,$query);
   	if ($execute) {
   		//$_SESSION["SuccessMessage"]="Catagory added successfully";
   		header("Location:studform.php");
   	}
   	else{
   	//	$_SESSION["ErrorMessage"]="Failed to Add";
   		header("Location:studform.php");
   	}
   


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
<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	<title></title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-2 "><!--side div -->
       
		<h2></h2>
		

		</div><!--end of the  side div-->
		
		<div class="col-sm-10"><!--middle div-->
			<h1>Manage Catagory</h1>
			<div >
				<?php 
                 
                 echo SuccessMessage();
                 echo Message();
				 ?>
			</div>
			<div>
				<form action="studform.php" method="post">
					<fieldset>
						<div class="form-group">
						<label for="catname">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Name:</span></label>
						<input class="form-control" type="text" name="catagory" id="catname" placeholder="Name">
						</div><br>
						<input class="btn btn-success" type="submit" name="Submit" value="Add New Catagory">
					</fieldset><br>
				</form>
			</div>

		  <div class="table-responsive">
		  	<table class="table table-striped table-hover">
		  		<tr>
		  			<th>Sr. NO</th>
		  			<th>Date Time</th>
		  			<th>Name</th>
		  			
		  		</tr>
		  		<?php 
           /*     global $ConnectingDB;
                $viewquery="SELECT * FROM catagory ORDER BY datetime desc";
               
                $execute=mysqli_query($Connection,$viewquery);
                $srno=1;
                while ($datarows=mysqli_fetch_array($execute)) {
                	$ID=$datarows['id'];
                	$DateTime=$datarows['datetime'];
                	$Catagory=$datarows['name'];
                	$CreatorName=$datarows['creatorname'];
                   
		  		*/ ?>
		  		 <tr>
		  		 	<td><?//php echo $srno; ?></td>
		  		 	<td><?php// echo $DateTime ?></td>
		  		 	<td><?php// echo $Catagory ?></td>
		  		 	<td><?php //echo  $CreatorName; ?></td>
		  		 </tr>
		  		 <?php 
		  		  //$srno++;
 // }//end of the while loop
		  		  ?>
		  	</table>
		  </div>	
		</div><!--end of the middle div-->
	</div><!--end of the row div-->
	
</div><!--end of the container fluid class -->
<footer style="background-color: black" class="Footer"><hr>
	<p>Page By || Aman Negi  || &copy:2018-2020 -------All right reserved</p>
	<p>
		This Site is only used for study purpose.
	</p>
	<hr>
</footer>
</body> 
</html>
