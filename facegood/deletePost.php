<?php 
require_once("include/cmsdb.php");
require_once("include/session.php");
require_once("include/functions.php");
 ?>
 <?php 
 	
if (isset($_POST['Submit'])) {

    $title=mysqli_real_escape_string($Connection,$_POST["Title"]);
	$Catagory=mysqli_real_escape_string($Connection,$_POST["Catagory"]);
	
	$post=mysqli_real_escape_string($Connection,$_POST["Post"]);
	date_default_timezone_set("Asia/kolkata");
    $currenttime=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
    $datetime;
    
    $image=$_FILES['Image']["name"];
    $Target="Upimg/".basename($_FILES["Image"]["name"]) ;
    
    $Admin="Aman Negi";
   if (empty($title)){
   	 $_SESSION["ErrorMessage"]="Title can not be empty";
     header("Location:addnewpost.php");
     exit;
  //or  Redirect_to("dashboard.php");//through functions .php
   }
   elseif(strlen($title)>13){
    $_SESSION["ErrorMessage"]="To long Name";
     header("Location:addnewpost.php");
     exit;
   }
   else{
        $Connection=mysqli_connect('localhost','root','root');
	    $ConnectingDB=mysqli_select_db($Connection,"phpcms");
	  
	     $DeleteIdFromUrl1=$_GET['Delete'];
   	    $query1="DELETE FROM adminportal WHERE id='$DeleteIdFromUrl1'";
   	$execute1=mysqli_query($Connection,$query1);

   	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

   	if ($execute1) {
   		
   		$_SESSION["SuccessMessage"]="Catagory added successfully";
   		header("Location:dashboard.php");
   	}
   	else{
   		  echo mysqli_error($Connection);
   		$_SESSION["ErrorMessage"]="failed to edit ,try again later";
   		header("Location:dashboard.php");
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
			<h1>Update Your Post</h1>
			
			<div >
				<?php 
                 
                 echo SuccessMessage();
                 echo Message();
				 
				 ?>
			</div>
			<div>
				<?php 
                  $ConnectingDB;
				  $DeleteIdFromUrl1=$_GET['Delete'];
                $viewquery="SELECT * FROM adminportal WHERE Id='$DeleteIdFromUrl1' ORDER BY datetime desc";
                
               
                $execute=mysqli_query($Connection,$viewquery);
             while ($dataRows=mysqli_fetch_array($execute)) {
             
             
             	$updateTitle=$dataRows["title"];
             	$updateCatagory=$dataRows["catagory"];
             	$updateImage=$dataRows["image"];
           
             	$updatePost=$dataRows["post"];
               }
				 ?>
			</div>
			<div>
				<form action="deletePost.php?Delete=<?php echo $DeleteIdFromUrl1; ?>" enctype="multipart/form-data" method="post">
					<fieldset>
						<div class="form-group">
						<label for="title">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Title:</span></label>

						<input class="form-control" value="<?php echo $updateTitle; ?>" type="text" name="Title" id="title" placeholder="Title goes Here">
					</div>

					<div class="form-group">

						<label for="catselect">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Select Catagory:</span></label>
                         <span>existing Category is </span>
                       <?php echo $updateCatagory; ?>
						<select class="form-control" id="SelCat"  name="Catagory">

			<?php 
                global $ConnectingDB;
                $viewquery="SELECT * FROM catagory ORDER BY datetime desc";
               
                $execute=mysqli_query($Connection,$viewquery);
                
                while ($datarows=mysqli_fetch_array($execute)) {
                	$ID=$datarows['id'];
                	
                	$Catagory=$datarows['name'];
                
		  		   ?>
		  		     <option>
		  		     	<?php
		  		     	 echo $Catagory;
        
		  		     	 ?>
		  		     </option>
                 <?php 
					}//end of the while loop
 					?>
					</select>
						</div>
                       <div class="form-group">

						<label for="SelectImage">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Select Images:</span></label>
                            <span>existing image is </span>
                       <img src="/upload/<?php echo $updateImage; ?>" width="160px" heigth="40px">
						<input class="form-control" type="file" value="<?php echo $updateImage; ?>" name="Image" id="selectimage">
					</div>

					<div class="form-group">
						<label for="post">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Post:</span></label>

						<textarea class="form-control"  name="Post" id="post" value="<?php echo $updatePost; ?>" placeholder="Put Your all Post here">
							<?php  echo $updatePost; ?>
						</textarea>
					</div>
					
						<br>
						<input class="btn btn-success" type="submit" name="Submit" value="Delete" onclick="warn()">
						<script >
							function warn(){
								alert("Are you sure to update this Post?");
							}
						</script>
					</fieldset><br>
				</form>
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
