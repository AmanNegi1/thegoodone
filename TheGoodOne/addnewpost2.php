<?php 

require_once("include/goodonedb.php");
require_once("include/session.php");

 ?>
 <?php 
	
if (isset($_POST['Submit'])) {
    $Connection=mysqli_connect('localhost','root','root');
	$ConnectingDB=mysqli_select_db($Connection,"goodone");
    $NAME=mysqli_real_escape_string($Connection,$_POST["TableName"]);
   
	
    date_default_timezone_set("Asia/kolkata");
    $currenttime1=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime1);
    $datetime;
   
  
    
  //  $Admin="Aman Negi";
    if (empty($NAME)){
   	 $_SESSION["ErrorMessage"]="NAME can not be empty";
     header("Location:addnewpost2.php");
     exit;
  //or  Redirect_to("dashboard.php");//through functions .php
   }
   elseif(strlen($NAME)>13){
    $_SESSION["ErrorMessage"]="To long Name";
     header("Location:addnewpost2.php");
     exit;
   }
   elseif (strlen($NAME)<3) {
    $_SESSION["ErrorMessage"]="To SHORT Name";
     header("Location:addnewpost2.php");
     exit;
   }
   else{
        
   	   $query1="INSERT INTO alltablename (datetime,name)
   	    VALUES('$datetime','$NAME')";
   	

if (mysqli_query($Connection, $query1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query1 . "<br>" . mysqli_error($Connection);
}
   }//end of the else


}//end of the if submit*/
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
		<li ><a href="catagories.php"> <span class="glyphicon glyphicon-tags"></span>
		 &nbsp;&nbsp;
		Catagory</a></li>
		<li><a href="">
		 <span class="glyphicon glyphicon-th"></span>
		 &nbsp;&nbsp;Manage</a></li>
		<li class="active"><a href="addnewpost.php">
		 <span class="glyphicon glyphicon-list-alt"></span>
		 &nbsp;&nbsp;Add New post</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-user"></span>
		 &nbsp;&nbsp;Manage Admins</a></li>
		 
		 <li><a href="#">
		 <span class="glyphicon glyphicon-comment"></span>
		 &nbsp;&nbsp;Manage DB and tables</a></li>
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
			<h1>Add New Table Name</h1>
			
			<div >
				<?php 
                 
                echo SuccessMessage();
                echo Message();
				 
				 ?>
			</div>
			<div>
				<form action="addnewpost2.php" enctype="multipart/form-data" method="post">
					<fieldset>
					
					<div class="form-group">
						<label for="TableName">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Table Name:</span></label>
						<input class="form-control" type="text" name="TableName" id="tablename" placeholder="Enter your exact Table Name">
					</div>
					<br>
						<input class="btn btn-success" type="submit" name="Submit" value="Add New Post">
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
                global $ConnectingDB;
                $viewquery="SELECT * FROM alltablename ORDER BY datetime desc";
               
                $execute=mysqli_query($Connection,$viewquery);
                $srno=1;
                while ($datarows=mysqli_fetch_array($execute)) {
                	$ID=$datarows['id'];
                	$DateTime=$datarows['datetime'];
                	$Name=$datarows['name'];
                		
                	
                   
		  		 ?>
		  		 <tr>
		  		 	<td><?php echo $srno; ?></td>
		  		 	<td><?php echo $DateTime ?></td>
		  		 	<td><?php echo $Name?></td>
		  		 	
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
