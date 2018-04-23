<?php include 'include/headsection.php';
//require_once("include/goodonedb.php");
 include 'include/navheader.php';?></ul></div></div></nav>
 <?php
   if (isset($_POST['Submit'])) {
   	$notice=mysqli_real_escape_string($Connection,$_POST["Notice"]);

     if(empty($notice)){
   	   echo "Please fill the Notice"; 
   	  }
   	  date_default_timezone_set("Asia/kolkata");
     $currenttime1=time();
     $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime1);
     $datetime;
             $query="SELECT * FROM teacherregister WHERE username='$userLoggedIn'";
             $execute=mysqli_query($Connection,$query);
    	  	 $teacher_info = mysqli_fetch_array($execute);
        	 $insert_query = "INSERT INTO notice_board (added_by,college_name,notice,date_time,status) VALUES ('$userLoggedIn','$teacher_info[collegename]','$notice','$datetime',1)";
         if (mysqli_query($Connection, $insert_query)) {
    echo "<div class='container well '>successful</div>";
} else {
    echo "Error: " . $insert_query . "<br>" . mysqli_error($Connection);
}


   }
 ?>

 <form action="notice.php" method="POST">
 <div class="container jumbotron">
 	<div class="row">
 		<div class="col-sm-4">
        <textarea class="form-control" name="Notice" required style="height: 300px;"></textarea>
        <input style="bottom: 0px;top:6cm;float: right;" type="submit" name="Submit">
        </div>
  	</div>
 </div>
 </form>

