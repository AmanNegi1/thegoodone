<?php
//require_once("include/goodonedb.php");
require_once("include/headsection.php");
require_once("include/navheader.php");

//require_once("include/functions.php");
 ?> </ul></div></div></nav>
 <?php 
 $Connection=mysqli_connect('localhost','root','root');
 $ConnectingDB=mysqli_select_db($Connection,"goodone");

  ?>

<div class="container">
  <div class="jumbotron"><h3>WeLcome to the world which you never forget</h3></div>
        
  <div class="row">
    &nbsp;&nbsp;&nbsp;<h3>Top One</h3>
    <?php
               
               global $ConnectingDB;
               if (isset($_GET["SearchButton"])) {
                   $Search=$_GET["Search"];
                   $viewquery="SELECT * FROM portal WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%' OR catagory LIKE '%$Search%' OR post LIKE '%$Search%' ";
                  }
              else{
                 $viewquery="SELECT * FROM portal ORDER BY datetime desc";
                 }
               
                $execute=mysqli_query($Connection,$viewquery);
              while($dataRows=mysqli_fetch_array($execute)) {
             
              $Id=$dataRows["id"];
              $DateTime=$dataRows["datetime"];
              $Name=$dataRows["name"];
              $Age=$dataRows["age"];
              $Skills=$dataRows["skills"];
              $Course=$dataRows["course"];
              $Image=$dataRows["image"];
                $Post=$dataRows["post"];
                
             ?>
          
    <div class="col-sm-3" style="background-color:;">
   <a href="describe.php?id=<?php echo $Id; ?>">
       <div class="hovereffect">

       <img class="img-responsive"  src="/upload/<?php echo htmlentities($Image); ?>" style="height:5.5cm; overflow: hidden;position: relative;border-radius: 5px">
        <div class="overlay">
          <br><br><br>
           <h2><?php echo htmlentities($Name);?></h2>
            <span style="font-family: Courier New", Courier, monospace;"><h2><?php echo htmlentities($Skills); ?></h2></span>
         </div>
     </div></a>
     <br>
        <label>Name&nbsp;:&nbsp;<?php echo htmlentities($Name); ?></label><br>
        <label>Skills&nbsp;:&nbsp;<?php echo htmlentities($Skills); ?></label><br>
        <a href="describe.php?id=<?php echo $Id; ?>"><span  class="btn btn-success">Read More</span>
      </a><br> <br> 
    </div>
  <?php    
    
   }//end of the while loop

   ?>
  
     <br>
    
    </div>
  </div>
</div>
    
</body>
</html>
