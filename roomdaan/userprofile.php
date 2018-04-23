<?php 
$getname=$_GET['name'];
$IdofId;
require 'includes/headsection.php';
?>
	 <?php include 'includes/navheader.php'; ?>
       <form action="portal.php" class="navbar-form navbar-right">
          <div class="form-group">
            <input type="text" class="form-control " placeholder="Search" name="Search">
          </div>
          <button class="btn-btn-default" name="SearchButton">Go</button>
        </form>
     </div><!-- /.navbar-collapse -->
</nav>
<?php 
   /* $query="SELECT status FROM social WHERE username='$userLoggedIn'";
    $execute=mysqli_query($con,$query);
    $datarows=mysqli_fetch_array($execute);
    $status=datarows['status'];
    if (datarows['status']==0) {
        //  header("Location:citystate.php");
      $query1="UPDATE social SET 
        status='$status' WHERE id='$getid'";    
         }
*/

?>
<div  class="container">
    <div class="row">
  <?php
        $username2;
         $query="SELECT * FROM social WHERE username='$getname'";
         $execute=mysqli_query($con,$query);
         while ($datarows=mysqli_fetch_array($execute))
         {
         $username1=$datarows['username'];
         $username2=$datarows['username'];
   ?>
    
        <div class="col-sm-2 col-md-2">
            <img src="<?php echo $datarows['profilepic'] ;?>"
            alt="" class="img-rounded img-responsive" >
            
           <h3><cite title="Source Title"><?php echo $datarows['firstname'].' '. $datarows['lastname']; ?></cite></h3>
          </div>
            <div class="col-sm-4">
                <p> <i class="glyphicon glyphicon-envelope"></i><?php echo $datarows['email'] ; ?>
           <br/> 
                <i class="glyphicon glyphicon-gift"></i> January 30, 1974</p>
           
           <?php 
         

           if (strlen($userLoggedIn)==strlen($username1)) {
            
             ?>
             <blockquote>
           <a href="addnewrent.php"><button type="button" class="btn btn-light">Add new Rent</button></a>
           <?php }  ?> 
            </blockquote>
             <a href="Messages.php?messId=<?php echo $username1; ?>"><button type="button" class="btn btn-light">Message</button></a>

             <blockquote>
           <h3>User Name:<cite title="Source Title"><?php echo $username1; ?></cite></h3>
           </blockquote>
           </div>
            
       
       
      <?php  }//end of while ?>



          Appeals:
       <?php  
           //    $query1="SELECT username from roominfo WHERE status='off' AND idofid=''  ";
           //    $execute1=mysqli_query($con,$query1); 
           //    while ($datarows1=mysqli_fetch_array($execute1))
         //     {

        //     ?>
         
           <?php // } ?>


        </div>
        <div class="row">    
         <?php 
         //   $glbId;
            $username=$_SESSION['username'];
            $query="SELECT * from roominfo WHERE username='$getname'";
            $execute=mysqli_query($con,$query);
            while ($datarows=mysqli_fetch_array($execute)) {
              $Id=$datarows['id'];
              $Image1=$datarows['image1'];
              $Image2=$datarows['image2'];
              $Image3=$datarows['image3'];
              $Rent=$datarows['rent'];
              $Levelset=$datarows['levelset'];
              $Datetime=$datarows['datetime'];
              $Status=$datarows['status'];
              $IdofId=$datarows['idofid'];

               $Appealby=$datarows['appealby'];
          //    $Contact=$datarows['contact'];
          //     $query12="SELECT * FROM roominfo WHERE status='off' AND idofid='$IdofId'";
           //    $execute2=mysqli_query($con,$query12);
           //    $datarows1=mysqli_fetch_array($execute2)
         //      if (mysqli_query($con, $query12)) {
           //    echo "Successfully fatched";
              //  header("Location:FullPost.php?fullid={$getroominfoID}");
          //     }    
       // else {
      //       echo "Error: " . $query12 . "<br>" . mysqli_error($con);
       //      }  
           //    $query123="SELECT * FROM roominfo WHERE status='off' AND idofid='$IdofId'";
            //   $execute23=mysqli_query($con,$query123);
              //  while ($datarows1=mysqli_fetch_array($execute23)) {
               $query123="SELECT * FROM userappeal where username='$userLoggedIn'";
                $execute23=mysqli_query($con,$query123);
                while ($datarows1=mysqli_fetch_array($execute23)) {

          ?>
           Appeal: <span><a href="userprofile.php?name=<?php echo $datarows['username']; ?>"><?php echo $datarows['appealby']; ?></a>,</span>
            <?php } ?>
             <div class="col-sm-4 " >
              <div id="myCarousel" style="height:8cm;" class="carousel slide" data-interval="2000" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner"  >
                  <div class="item active"  >
                 <center>   <img class="img-responsive" style="overflow: hidden;border-radius:10px; height: 300px;width:550px " src="uploadedimg/<?php echo $Image1; ?>" alt="Not Available" style="width:100%;"></center>
                  </div>
             
    
                  <div class="item"  >
                     <center>   <img  class="img-responsive" style="overflow: hidden; border-radius:10px; height: 300px;width:550px ;"  src="uploadedimg/<?php echo $Image2; ?>" alt="Not Available" style="width:100%;"></center>
                  </div>
                
                  <div class="item" >
                     <center>   <img class="img-responsive" style="overflow: hidden; border-radius:10px;height: 300px;width:550px " src="uploadedimg/<?php echo $Image3; ?>" alt="Not Available" style="width:100%;"></center>
                  </div>
                </div>
               
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="row">
              <div class="col-sm-6"> <h3>Images of Room</h3> </div>
                 <?php  if (strlen($userLoggedIn)==strlen($username2)) { ?>
                   <a href="editrent.php?editpost=<?php echo $datarows['id']; ?>">
                     <div style="float: right" class="col-sm-6"> <h3>EDIT POST</h3></div>
                   </a> <?php }?>
              </div>
              <div class="row">
              <div class="col-sm-6"> <h3></h3> </div>
                 <?php  if (strlen($userLoggedIn)==strlen($username2)) { ?>
                   <a href="deleterent.php?deletepost=<?php echo $datarows['id']; ?>">
                     <div style="float: right" class="col-sm-6"> <h3>Delete POST</h3></div>
                   </a> <?php }?>
              </div>
             <div class="card h-100">
                
                <div class="card-body">
                  <h4 class="card-title">
                   Rent:<span > <?php echo htmlentities($Rent); ?> </span>
                  </h4>
                  <h5>Room Set<?php echo htmlentities($Levelset); ?></h5>
                  <h4>published on:<?php echo htmlentities($Datetime); ?></h4>
                 
                </div>
                <div class="card-footer">
                  <small class="text-muted">Contact: <?php // echo htmlentities($Contact); ?></small>
                </div>
               </div>
           </div><!--end of col -4-->
            <?php }//end of while loop ?>
          


</div>
<div class="row">
      <div class="col-sm-4 " >
           
         </div>
         </div>
 </div>
</div>
</body>
</html>