<?php 

require_once("include/sessdb.php");

 ?>
 <?php 
	
if (isset($_POST['Submit'])) {
    $Connection=mysqli_connect('localhost','root','');
	$ConnectingDB=mysqli_select_db($Connection,"goodone");
    $NAME=mysqli_real_escape_string($Connection,$_POST["Name"]);
    echo $NAME;
	$AGE=mysqli_real_escape_string($Connection,$_POST["Age"]);
	$CONTECT=mysqli_real_escape_string($Connection,$_POST["Contect"]);
	$SKILL=mysqli_real_escape_string($Connection,$_POST["Skill"]);
    date_default_timezone_set("Asia/kolkata");
    $currenttime1=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime1);
    $datetime;
    $COURSE=mysqli_real_escape_string($Connection,$_POST["Course"]);
       $POST=mysqli_real_escape_string($Connection,$_POST["Post"]);
    $image=$_FILES['Image']["name"];
    $Target="Upimg/".basename($_FILES["Image"]["name"]) ;
    
  //  $Admin="Aman Negi";
    if (empty($NAME)){
   	 $_SESSION["ErrorMessage"]="NAME can not be empty";
     header("Location:addnewpost.php");
     exit;
  //or  Redirect_to("dashboard.php");//through functions .php
   }
   elseif(strlen($NAME)>13){
    $_SESSION["ErrorMessage"]="To long Name";
     header("Location:addnewpost.php");
     exit;
   }
   elseif (strlen($NAME)<3) {
    $_SESSION["ErrorMessage"]="To SHORT Name";
     header("Location:addnewpost.php");
     exit;
   }
   else{
        
   	   $query1="INSERT INTO portal(datetime,name,age,contact,skills,course,image,post,publish_by)
   	    VALUES('$datetime','$NAME','$AGE','$CONTECT','$SKILL','$COURSE','$image','$POST','$userLoggedIn')";
   	

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
		
	
		<li class="active"><a href="addnewpost.php">
		 <span class="glyphicon glyphicon-list-alt"></span>
		 &nbsp;&nbsp;Add New Student</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-user"></span>
		 &nbsp;&nbsp;Comming Soon</a></li>
		 <li><a href="#">
		 <span class="glyphicon glyphicon-comment"></span>
		 &nbsp;&nbsp;Comming Soon</a></li>
		<li><a href="comments.php">
		 <span class="glyphicon glyphicon-comment"></span>
		 &nbsp;&nbsp;Commments</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-equalizer"></span>
		 &nbsp;&nbsp;Comming Soon</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-log-out"></span>
		 &nbsp;&nbsp;Back to Your profile</a></li>
		</ul>

		</div><!--end of the  side div-->
		
		<div class="col-sm-10"><!--middle div-->
			<h1>Add a Student</h1>

			<div>
				<form action="addnewpost.php" enctype="multipart/form-data" method="post">
					<fieldset>
						<div class="form-group">
						<label for="Name">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Name:</span></label>

						<input class="form-control" type="text" name="Name" id="name" placeholder="Name of the Student">
					</div>
					<div class="form-group">
						<label for="Age">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Age:</span></label>

						<input class="form-control" type="number" name="Age" id="age" placeholder="Age of the Student">
					</div>

					<div class="form-group">
						<label for="Contect">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Contect:</span></label>

						<input class="form-control" type="number" name="Contect" id="contect" placeholder="Contect of the Student">
					</div>

					<div class="form-group">
						<label for="Skill">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Skills:</span></label>

						<textarea class="form-control" type="textarea" name="Skill" id="skill" placeholder="Skills of the Student"></textarea>
					</div>


					<div class="form-group">
						<label for="catselect">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Course:</span></label>
                        <input class="form-control" type="text" name="Course" id="course" placeholder="Course Name">
					</div>
                      <div class="form-group">
						<label for="SelectImage">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Select Images:</span></label>

						<input class="form-control" type="file" name="Image" id="image">
					</div>


					<div class="form-group">
						<label for="post">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Post:</span></label>

						<textarea class="form-control"  name="Post" id="post" placeholder="Put Your all Post here"></textarea>
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
		  			<td>Age</td>
		  			<td>Contect</td>
		  			<th>Skills</th>
		  			<th>COURSE</th>
		  			<th>Image</th>
		  		
		  			<th>Post</th>
		  			
		  		</tr>
		  		<?php 
                global $ConnectingDB;
                $viewquery="SELECT * FROM portal ORDER BY datetime desc";
               
                $execute=mysqli_query($Connection,$viewquery);
                $srno=1;
                while ($datarows=mysqli_fetch_array($execute)) {
                	$ID=$datarows['id'];
                	$DateTime=$datarows['datetime'];
                	$Name=$datarows['name'];
                	$Age=$datarows['age'];
                	$Contect=$datarows['contact'];
                	$Skills=$datarows['skills'];
                	$Course=$datarows['course'];
                	$Image=$datarows['image'];
                
                	$Post=$datarows['post'];			
                	
                   
		  		 ?>
		  		 <tr>
		  		 	<td><?php echo $srno; ?></td>
		  		 	<td><?php echo $DateTime ?></td>
		  		 	<td><?php echo $Name?></td>
		  		 	<td><?php echo  $Age; ?></td>
		  		 	<td><?php echo $Contect; ?></td>
		  		 	<td><?php echo  $Skills; ?></td>
		  		 	<td><?php echo  $Course; ?></td>
		  		 	<td><?php echo  $Image; ?></td>
		  		 
		  		 	<td><?php echo  $Post; ?></td>
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
