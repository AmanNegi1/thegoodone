<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="css/gallery.css">
<script src="js/bootstrap.min.js"></script>
<style>
body
{
    background-image: url(../images/background.jpg);
    background-size:100% 100%;
}
</style>


<div class="tab">


  <button class="tablinks" onclick="openCity(event, 'Category')"  Disabled>Category</button>

  <button class="tablinks" onclick="openCity(event, 'Jeans')" id="defaultOpen">Jeans</button>
  <button class="tablinks" onclick="openCity(event, 'toy')" id="defaultOpen">toys</button>


<button class="tablinks" onclick="openCity(event, 'Food')">Food</button>


</div>

<div id="Category" class="tabcontent">
  <h3>Category</h3>
  <p>Category is the capital city of England.</p>
</div>

<div id="Jeans" class="tabcontent">
  <h3 style="background-image: url(../images/le.jpg);"></h3>
  <center>
  <div class="col-md-12">
    <div class="row">
      
      <h2 class="text-center">Featured Products</h2>
      <?php 
          $query="SELECT * FROM catagory WHERE name='jeans'";
          $execute=mysqli_query($con,$query);
          while($dataRows=mysqli_fetch_array($execute)) {
             
              $Id=$dataRows["id"];
                                         

       ?>
      <div class="col-md-3">
        <h4><?php echo $dataRows['brand']; ?></h4>
        <img src="images/<?php echo($dataRows['image']) ?>" alt="levis Jeans" id="images"/>
        <p class="list-price text-danger">List Price:<s><?php echo $dataRows['list_price']; ?></s></p>
        <p class="price"><?php echo $dataRows['our_price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div><?php }//end of while loop... ?>
      </div></div>
    </center>

</div>

<!--start of toy cat-->
<div id="toy" class="tabcontent">
  <h3>toys</h3>
   <?php 
          $query="SELECT * FROM catagory WHERE name='toys'";
          $execute=mysqli_query($con,$query);
          while($dataRows=mysqli_fetch_array($execute)) {
             
              $Id=$dataRows["id"];
                                         

       ?>
      <div class="col-md-3">
        <h4><?php echo $dataRows['brand']; ?></h4>
        <img src="images/<?php echo($dataRows['image']) ?>" alt="levis Jeans" id="images"/>
        <p class="list-price text-danger">List Price:<s><?php echo $dataRows['list_price']; ?></s></p>
        <p class="price"><?php echo $dataRows['our_price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div><?php }//end of while loop... ?>

</div>


<!--start of food cat-->
<div id="Food" class="tabcontent">
  <h3>Food</h3>
  <?php 
          $query="SELECT * FROM catagory WHERE name='foods'";
          $execute=mysqli_query($con,$query);
          while($dataRows=mysqli_fetch_array($execute)) {
             
              $Id=$dataRows["id"];
                                         

       ?>
      <div class="col-md-3">
        <h4><?php echo $dataRows['brand']; ?></h4>
        <img src="images/<?php echo($dataRows['image']) ?>" alt="levis Jeans" id="images"/>
        <p class="list-price text-danger">List Price:<s><?php echo $dataRows['list_price']; ?></s></p>
        <p class="price"><?php echo $dataRows['our_price']; ?></p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div><?php }//end of while loop... ?>

</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <a href="gallery.php" class="navbar-brand" id="text">The Alladin shop</a>




</body>
</html>
