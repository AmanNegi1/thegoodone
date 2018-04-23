<?php
//require_once("include/goodonedb.php");
include 'include/headsection.php';
include "include/navheader.php";
 ?>  </ul></div></div></nav>
 <?php 
    
if (isset($_POST['Submit'])) {

    $Name=mysqli_real_escape_string($Connection,$_POST["Name"]);
    $Email=mysqli_real_escape_string($Connection,$_POST["Email"]);
    $Status="off";
    $urlId=$_GET['id'];
    
    $Comment=mysqli_real_escape_string($Connection,$_POST["Comment"]);
    date_default_timezone_set("Asia/kolkata");
    $currenttime=time();
    $datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
    $datetime;
    //  $urlId = $_GET["ID"];

   if (empty($Name)||empty($Email)||empty($Comment)){
    // $PostIdFromUrl=$_GET['id'];
   //  $_SESSION["ErrorMessage"]="fill all the field";
    
     
  //or  Redirect_to("dashboard.php");//through functions .php
   }
   elseif(strlen($Comment)>500){
    
 //   $_SESSION["ErrorMessage"]="minimum length is of 15000 characters";
 
   
   }
   else{
       

        $Connection=mysqli_connect('localhost','root','');
        $ConnectingDB=mysqli_select_db($Connection,"goodone");
        $query1="INSERT INTO comments( datetime,name,email,comment,status,adminportal_id)
        VALUES('$datetime','$Name','$Email','$Comment','$Status','$urlId')";

    $execute1=mysqli_query($Connection,$query1);
    if ($execute1) {
        
     //   $_SESSION["SuccessMessage"]="Catagory added successfully";
         header("Location:describe.php?id={$urlId}");
      //  header("Location:FullPost.php");
    }
    else{
          echo mysqli_error($Connection);
     //   $_SESSION["ErrorMessage"]="Failed to Add";
          header("Location:describe.php?id={$urlId}");
        //header("Location:FullPost.php");
    }
   }//end of the else


}//end of the if submit
  ?>


 <div class="container">
      <div class="blog-header">
                <?php 
                 
            //     echo SuccessMessage();
            //     echo Message();
                 
                 ?>
        <p class="lead">Welcome the world of the student</p>
     </div>
      <div class="=row">
        <div class="col-sm-4 blogpost thumbnail"> 
         
        <?php 
             //this is for search
              global $ConnectingDB;
               
              if (isset($_GET["SearchButton"])) {
                $Search=$_GET["Search"];
                $viewquery="SELECT * FROM portal WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%' OR catagory LIKE '%$Search%' OR post LIKE '%$Search%' ";
              }
              else{
                   $urlId=$_GET["id"];
                $viewquery="SELECT * FROM portal WHERE Id='$urlId' ORDER BY datetime desc";
                }
               
                $execute=mysqli_query($Connection,$viewquery);
             while($dataRows=mysqli_fetch_array($execute)) {
              $Id=$dataRows["id"];
                $DateTime=$dataRows["datetime"];
                $Name=$dataRows["name"];
                $Age=$dataRows["age"];
                $Contact=$dataRows["contact"];
                $Skills=$dataRows["skills"];
                $Course=$dataRows["course"];
                $Image=$dataRows["image"];
                $Post=$dataRows["post"];
              

            
         ?>
      
            
             <img style="border-radius: 10px;" src="/upload/<?php echo $Image ?>"><!--image path will goes here-->
              <table class="table table-hover">
               <tbody>
                <tr>
                  <td> <h3 style="color: orange;"><span>Name : </span> <?php echo htmlentities($Name); ?></h3></td>
                               </tr>

               <tr>
                 <td> <h3 style="color: orange;"><span>Contect : </span> <?php echo htmlentities($Contact); ?></h3></td>
               </tr>
              </tbody>
             </table> 
       </div>
 
           <div class="col-sm-offset-1 col-sm-6  blogpost thumbnail">
              <div class="jumbotron">
                <p style="background-color: #34bbf9;border-radius: 5px;">
                  Student of <span style="color:#292cce;background-color:#96eadb;border-radius: 2px;"><?php echo htmlentities($Course); ?> </span>in Graphic Era university Published Date is <span style="color:#292cce;background-color:#96eadb"><?php echo htmlentities($DateTime); ?></span>
                </p>
                <p class="text-justify" >
              <?php 
                
              echo htmlentities($Post); ?>
              </p>
              </div>
            </div><!--en of the post div-->
          
         </div><!--end of the row div-->
         <?php  }//end of the while llopp ?>

        
           

        <!-- <div style="background-color: #91bbff;border-radius: 10px;height: 500px" class="col-sm-offset-1 col-sm-3">
          <h2>Solution</h2>
          <p >
            her is the solution
          </p>

         </div>-->
      </div><!-- end of the contaier class-->
      <div class="container">
         <?php 
             $ConnectingDB;
             $postcomts=$_GET['id'];
             $executeComts="SELECT * FROM comments WHERE adminportal_id='$urlId' AND status='off'";
             $execute=mysqli_query($Connection,$executeComts);

            while ($datarows=mysqli_fetch_array($execute)) {
                 
                    $ComDateTime=$datarows['datetime'];
                    $ComName=$datarows['name'];
                    $Commment=$datarows['comment'];
                   
             
              ?>
             
               <div style="background-color: #d5ddea;border-radius: 10px;">
                   <img  class="pull-left" src="img/unknown.jpg" width="60px" height="60px" style="border-radius: 10px;margin-left: 10px;margin-top: 20px;">
                   <br>
                   <p style="margin-left: 80px;"> <?php echo $ComName;  ?></p>
                   <p style="margin-left: 80px;"><?php echo $Commment; ?></p>
                   <p style="margin-left: 80px;"><?php echo $ComDateTime; ?></p>
                   <hr>
              </div>
             <?php }//end of the while loop ?>
    <div class="row">
              <div>
                <form action="describe.php?id=<?php echo $urlId; ?>" enctype="multipart/form-data" method="post">
                    <fieldset>
                        <div class="form-group">
                        <label for="Name">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Name:</span></label>

                        <input class="form-control" type="text" name="Name" id="title" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">E-mail:</span></label>

                        <input type="email" class="form-control"  name="Email" id="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="Comment">&nbsp;<span style="font-style: bold;color:black;font-size: medium;">Comment:</span></label>

                        <textarea class="form-control"  name="Comment" id="Comment" placeholder="Comment"></textarea>
                    </div>
                        <br>
                        <input class="btn btn-success" type="submit" name="Submit" value="Submit">
                    </fieldset><br>
                </form>
            </div>
           </div><!--end of the second row--></div>
    
</body>
</html>
