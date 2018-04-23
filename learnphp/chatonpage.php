<?php 
include('database.php');
include('process.php');
?>

<?php 


$sql = "SELECT * FROM userchating ORDER by id  desc";
$result1 = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<center>
<body>
	 
	<div id="chatuser">
		<ul>
			
		</ul>
	</div>
	<div id="input">
	<?php 
	if (isset($_GET['error'])) :?>
  <div class="error"><?php echo $_GET['error']; ?></div>
	<?php endif; ?>	
	
   <div class="container">
  <form class="form-inline" action="process.php" method="post">
    <div class="form-group">
      <label class="sr-only" for="name">Name:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter your good Name"  name="user">
    </div>
    <div class="form-group">
      <label class="sr-only" for="textarea">Message:</label>
      <input type="textarea" class="form-control" id="message" placeholder="Enter Your message" name="message">
    </div>
    <input type="submit" class="btn btn-default" name="submit">
   
  </form>
</div>
<br><br><br><br><br>
   <ol>
   	<?php  while($row = mysqli_fetch_assoc($result1)) : ?>
				
			
             
  <div class="container">
         
  <table class="table table-bordered">
    <thead>
      <tr style="background-color: #afa0ab">
        <th>Name</th>

        <th>Message</th>
        
        
      </tr>
    </thead>
    <tbody>
      <tr style="background-color: #adc8f7">
        <td><?php echo $row['user']; ?> </td>
       
        <td><?php echo $row['message'] ?></td>
        
      </tr>
     <tr> <td><p>like<span class="glyphicon glyphicon-thumbs-up"></span></p> </td></tr>
    </tbody>
  </table>
</div>


        <br>

			
			<?php endwhile; ?>		
   </ol>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</center>
</html>