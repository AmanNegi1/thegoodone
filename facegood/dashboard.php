<?php 

require_once("include/session.php");
require_once("include/cmsdb.php");
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
<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	<title></title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-2 "><!--side div -->

		<h2>Aman</h2>
		<ul id="sidebar" class="nav nav-pills nav-stacked nav-hover">
		<li class="active"><a href="dashboard.php">
         <span class="glyphicon glyphicon-th"></span>
		 &nbsp;&nbsp;Dashboard</a></li>
		<li ><a href="catagories.php"> <span class="glyphicon glyphicon-tags"></span>
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
			<?php 
                 echo Message();
                 echo SuccessMessage();
				 ?>
			<h1>Admin Dashboard</h1>
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>NO.</th>
						<th>datetime</th>
						<th>Title</th>
						<th>Author</th>
						<th>Category</th>
						<th>Banner</th>
						<th>Commments</th>
						<th>Details</th>
						<th>Action</th>
					</tr>
					<?php 
					
					 global $ConnectingDB;
                      $viewquery="SELECT * FROM adminportal ORDER BY datetime desc";
                     

                      $execute=mysqli_query($Connection,$viewquery);
                       $srno=1;
             while ($dataRows=mysqli_fetch_array($execute)) {
                 	$Id=$dataRows["id"];
                	$DateTime=$dataRows["datetime"];
                	$Title=$dataRows["title"];
                	$Catagory=$dataRows["catagory"];
                	$Image=$dataRows["image"];
                	$Author=$dataRows["author"];
                	$Post=$dataRows["post"];
             	  
					
            
    		 ?>
    		 <tr>
    		 	<td> <?php echo $srno; ?></td>
    		 	<td> <?php
                 if (strlen($DateTime)>11) {
    		 		$DateTime=substr($DateTime,0,11).'..';
    
    		 	}
    		 	 echo $DateTime; ?></td>
    		 	<td> <?php 
    		 	if (strlen($Title)>4) {
    		 		$Title=substr($Title,0,20).'..';
    
    		 	}
    		 	echo $Title;
    		 	 ?></td>
    		 	<td><?php
                if (strlen($Author)>6) {
    		 		$Author=substr($Author,0,6).'..';
    
    		 	}
    		 	echo $Author; ?></td>
    		 	<td> <?php 
    		 	if (strlen($Catagory)>10) {
    		 		$Catagory=substr($Catagory,0,10).'..';
    
    		 	}
    		 	echo $Catagory; ?></td>
    		 	<td> <img style="width: 200px"> src="/upload/<?php echo $Image ?>"></td>

    		 	<td>Processing</td>
    		 	
    		 	<td><a href="EditPost.php?Edit=<?php echo $Id ;?>"><span class="btn btn-success">Edit</span> </a>
                 <a href="DeletePost.php?Delete=<?php echo $Id ;?>"><span class="btn btn-danger">Delete</span></a>
    		 	</td>
    		 	<td><a href="FullPost.php?id=<?php echo $Id; ?>" target="_blank"> <span class="btn btn-primary">Live Preview</span></a></td>
    		 </tr>
 <?php   $srno++; }//end of the while loop ?>
					
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