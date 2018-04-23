<?php
require_once("include/cmsdb.php");
require_once("include/session.php");
require_once("include/functions.php");
 ?> 
 <?php 
  ConnectingDB1;
  query="SELECT *FROM "
  ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron"><h3>WeLcome to the world which you never forget</h3></div>
        
  <div class="row">

    <div class="col-sm-3" style="background-color:;">
    	<img src="img/dawn.jpg" style="height: 4cm;overflow: hidden;width: 5cm;position: relative;border-radius: 5px   "><br>
        <label>Name:</label><br>
        <label>Skills:</label><br>
        <span class="btn btn-success">Read more</span>
    </div>

    <div class="col-sm-offset-1 col-sm-3" style="background-color:;">
    	<img src="img/unknown.jpg" style="width: 5cm;height: 4cm;position: relative;border-radius: 5px"><br>
    	<label>Name:</label><br>
        <label>Skills:</label><br>
        <span class="btn btn-success">Read more</span>
       
    </div>

     <div class="col-sm-offset-1 col-sm-3" style="background-color:;">
    	<img src="img/dawn.jpg" style="width: 5cm;height: 4cm;position: relative;border-radius: 5px"><br>
    	<label>Name:</label><br>
        <label>Skills:</label><br>
        <span class="btn btn-success">Read more</span>
        
    </div>
  </div>
</div>
    
</body>
</html>
