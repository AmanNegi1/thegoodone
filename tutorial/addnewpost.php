<?php 

require_once("config.php");

 ?>
 <?php 
 	
if (isset($_POST['Submit'])) {

    $catagory=mysqli_real_escape_string($con,$_POST["Catagory"]);
    echo "$catagory";
	$listPrice=mysqli_real_escape_string($con,$_POST["ListPrice"]);
	$brand=mysqli_real_escape_string($con,$_POST["Brand"]);	
	$yourPrice=mysqli_real_escape_string($con,$_POST["YourPrice"]);
	date_default_timezone_set("Asia/kolkata");
    $currenttime=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
    $datetime;
    echo $datetime;
    $image=$_FILES['Image']["name"];
    $Target="Upimg/".basename($_FILES["Image"]["name"]) ;
    
   $con = mysqli_connect("localhost", "root", "", "alladinshop"); //Connection variable

       $query1="INSERT INTO catagory ( datetime,name,list_price,our_price,image,brand)
   	    VALUES('$datetime','$catagory','$listPrice','$yourPrice','$image','$brand')";

   	$execute1=mysqli_query($con,$query1);

   	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);

   	if ($execute1) {
   		
   		echo "successfull";
   		header("Location:addnewpost.php");
   	}
   	else{
   		  echo mysqli_error($con);
       	echo "error";
   		header("Location:addnewpost.php");
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
		
		<div class="col-sm-10"><!--middle div-->
			<h1>Add New Catagory</h1>
			
			<div >
			
			</div>
			<div>
				<form action="addnewpost.php" enctype="multipart/form-data" method="post">
					<fieldset>
						<select class="form-control" id="SelCat" name="Catagory">
								<option>
		  		     		       Jeans
		  		     		    </option>
								<option>
		  		     		       foods
		  		     		    </option>		  		     		    
                	</select>

						<div class="form-group">
						<label for="List Price">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">List Price:</span></label>

						<input class="form-control" type="number" name="ListPrice" id="listprice" placeholder="Enter the list price">
					</div>

					<div class="form-group">
						<label for="Your Price">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Your Price:</span></label>
                        <input class="form-control" type="number" name="YourPrice" id="YourPrice" placeholder="Enter Your price">
						</div>
                       <div class="form-group">
						<label for="SelectImage">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Select Images:</span></label>

						<input class="form-control" type="file" name="Image" id="selectimage">
					</div>

					<div class="form-group">
						<label for="post">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Enter the brand name:</span></label>
                        <input class="form-control" type="text" name="Brand" id="Text">
						
					</div>
						<br>
						<input class="btn btn-success" type="submit" name="Submit" value="Add New Catagory">
					</fieldset><br>
				</form>
			</div>

		 
		</div><!--end of the middle div-->
	</div><!--end of the row div-->
	
</div><!--end of the container fluid class -->

</body> 
</html>
