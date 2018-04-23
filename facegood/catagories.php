<?php 
require_once("include/cmsdb.php");
require_once("include/session.php");
require_once("include/functions.php");
 ?>
 <?php 
 	$Connection=mysqli_connect('localhost','root','root');
	$ConnectingDB=mysqli_select_db($Connection,"phpcms");
if (isset($_POST['Submit'])) {

	$Catagory=mysqli_real_escape_string($Connection,$_POST["catagory"]);
	
	date_default_timezone_set("Asia/kolkata");
    $currenttime=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
    $datetime;
     $Admin="Aman Negi";
   if (empty($Catagory)){
   	 $_SESSION["ErrorMessage"]="All field must be filled";
     header("Location:catagories.php");
     exit;
  //or  Redirect_to("dashboard.php");//through functions .php
   }
   elseif(strlen($Catagory)>99){
    $_SESSION["ErrorMessage"]="To long Name";
     header("Location:catagories.php");
     exit;
   }
   else{
   
   	$query="INSERT INTO catagory(datetime,name,creatorname)VALUES('$datetime','$Catagory','$Admin')";
   	$execute=mysqli_query($Connection,$query);
   	if ($execute) {
   		$_SESSION["SuccessMessage"]="Catagory added successfully";
   		header("Location:catagories.php");
   	}
   	else{
   		$_SESSION["ErrorMessage"]="Failed to Add";
   		header("Location:catagories.php");
   	}
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
		<ul id="sidebar" class="nav nav-pills nav-stacked nav-hover">
		<li><a href="dashboard.php">
         <span class="glyphicon glyphicon-th"></span>
		 &nbsp;&nbsp;Dashboard</a></li>
		<li class="active"><a href="catagories.php"> <span class="glyphicon glyphicon-tags"></span>
		 &nbsp;&nbsp;
		Catagory</a></li>
		<li><a href="dashboard.php">
		 <span class="glyphicon glyphicon-th"></span>
		 &nbsp;&nbsp;Manage</a></li>
		<li><a href="addnewpost.php">
		 <span class="glyphicon glyphicon-list-alt"></span>
		 &nbsp;&nbsp;Add new post</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-user"></span>
		 &nbsp;&nbsp;Manage Admins</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-comment"></span>
		 &nbsp;&nbsp;Commments</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-equalizer"></span>
		 &nbsp;&nbsp;Live Preview</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-log-out"></span>
		 &nbsp;&nbsp;Logout</a></li>
		</ul>

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
				<form action="catagories.php" method="post">
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
		  			<th>Creator Name</th>
		  		</tr>
		  		<?php 
                global $ConnectingDB;
                $viewquery="SELECT * FROM catagory ORDER BY datetime desc";
               
                $execute=mysqli_query($Connection,$viewquery);
                $srno=1;
                while ($datarows=mysqli_fetch_array($execute)) {
                	$ID=$datarows['id'];
                	$DateTime=$datarows['datetime'];
                	$Catagory=$datarows['name'];
                	$CreatorName=$datarows['creatorname'];
                   
		  		 ?>
		  		 <tr>
		  		 	<td><?php echo $srno; ?></td>
		  		 	<td><?php echo $DateTime ?></td>
		  		 	<td><?php echo $Catagory ?></td>
		  		 	<td><?php echo  $CreatorName; ?></td>
		  		 </tr>
		  		 <?php 
		  		  $srno++;
  }//end of the while loop
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
