<?php include 'include/headsection.php'; ?>
<?php require_once("include/navheader.php"); ?>  

  </ul></div></div></nav>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-2 "><!--side div -->

		<h4>&nbsp;&nbsp;Faculty Dashboard</h4>
		<ul id="sidebar" class="nav nav-pills nav-stacked nav-hover">
		<li class="active"><a href="dashboard.php">
         <span class="glyphicon glyphicon-th"></span>
		 &nbsp;&nbsp;Dashboard</a></li>
		
		<li><a href="addnewpost.php">
		 <span class="glyphicon glyphicon-list-alt"></span>
		 &nbsp;&nbsp;Add new Student</a></li>
		<li><a href="notice.php">
		 <span class="glyphicon glyphicon-user"></span>
		 &nbsp;&nbsp;Add a notice</a></li>
		<li><a href="comments.php">
		 <span class="glyphicon glyphicon-comment"></span>
		 &nbsp;&nbsp;Commments
        <?php 
      /*               $ConnectingDB;
                     $Qdapproved="SELECT COUNT(*) FROM comments WHERE  status='OFF'";
                     $ExecutedAppr=mysqli_query($Connection,$Qdapproved);
                     $rowdAppr=mysqli_fetch_array($ExecutedAppr);
                     $totaldAppr=array_shift($rowdAppr);
                    */
    		 		 ?>
                      <span class="label  label-danger"><?php // echo $totaldAppr; ?></span>
		</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-equalizer"></span>
		 &nbsp;&nbsp;Live Preview</a></li>
		<li><a href="#">
		 <span class="glyphicon glyphicon-log-out"></span>
		 &nbsp;&nbsp;Logout</a></li>
		</ul>

		</div><!--end of the  side div-->
		
		<div class="col-sm-10"><!--middle div-->
		
			<h1>Dashboard</h1>
			<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<th>NO.</th>
						<th>datetime</th>
						<th>Name</th>
						<th>Course</th>
						<th>email</th>
						<th>Banner</th>
						<th>Commments</th>
						<th>Details</th>
						<th>Action</th>
					</tr>
					<?php 
					
					 global $ConnectingDB;
                      $viewquery="SELECT * FROM portal ORDER BY datetime desc";
                     

                      $execute=mysqli_query($Connection,$viewquery);
                       $srno=1;
             while ($dataRows=mysqli_fetch_array($execute)) {
                 	$Id=$dataRows["id"];
                	$DateTime=$dataRows["datetime"];
                	$Name=$dataRows["name"];
                    $Age=$dataRows["age"];
                	$Course=$dataRows["course"];
                    $Contact=$dataRows["contact"];
                	$Image=$dataRows["image"];
                	$Skills=$dataRows["skills"];
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
    		 	if (strlen($Name)>4) {
    		 		$Name=substr($Name,0,20).'..';
    
    		 	}
    		 	echo $Name;
    		 	 ?></td>
    		 	<td><?php
                if (strlen($Post)>6) {
    		 		$Post=substr($Post,0,6).'..';
    
    		 	}
    		 	echo $Post; ?></td>
    		 	<td> <?php 
    		 	if (strlen($Skills)>10) {
    		 		$Skills=substr($Skills,0,10).'..';
    
    		 	}
    		 	echo $Skills; ?></td>
    		 	<td> <img style="width: 200px" src="/upload/<?php echo $Image ?>"></td>

    		 	<td>
    		 		<?php 
                     $ConnectingDB;
                     $Qapproved="SELECT COUNT(*) FROM comments WHERE adminportal_id='$Id' AND status='ON'";
                     $ExecuteAppr=mysqli_query($Connection,$Qapproved);
                     $rowAppr=mysqli_fetch_array($ExecuteAppr);
                     $totalAppr=array_shift($rowAppr);
                    
    		 		 ?>
                      <span class="label pull-right label-success"><?php echo $totalAppr; ?></span>

                      <?php 
                     $ConnectingDB;
                     $Qdapproved="SELECT COUNT(*) FROM comments WHERE adminportal_id='$Id' AND status='OFF'";
                     $ExecutedAppr=mysqli_query($Connection,$Qdapproved);
                     $rowdAppr=mysqli_fetch_array($ExecutedAppr);
                     $totaldAppr=array_shift($rowdAppr);
                    
    		 		 ?>
                      <span class="label  label-danger"><?php echo $totaldAppr; ?></span>
    		 	</td>
    		 	
    		 	<td><a href="EditPost.php?Edit=<?php echo $Id ;?>"><span class="btn btn-success">Edit</span> </a>
                 <a href="DeletePost.php?Delete=<?php echo $Id ;?>"><span class="btn btn-danger">Delete</span></a>
    		 	</td>
    		 	<td><a href="describe.php?id=<?php echo $Id; ?>" target="_blank"> <span class="btn btn-primary">Live Preview</span></a></td>
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