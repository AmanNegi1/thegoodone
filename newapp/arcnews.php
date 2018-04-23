<?php include 'arcTFunction.php'; ?>
<?php

$urlSource=file_get_contents('https://newsapi.org/v2/top-headlines?sources=ars-technica&apiKey=2e61b7dbecab41ca97eebfe76e814fe3');
     $urlSourceArray=json_decode($urlSource,true);
     $sources=$urlSourceArray['articles'];
     for ($i=0; $i <count($sources) ; $i++) { 
     	$articles=$urlSourceArray['articles'][$i];
     	
     	//  echo  $articles['urlToImage']; 
     	  // echo  $articles['title']; 
        break;
}    
     
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>news</title>
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
    	img{
    		width: 100%;
    		border-radius: 5px;
    		height: auto;
    	}
    	p{
    		overflow: hidden;
    	}
    	#well2{
    		overflow: hidden;
    	}

    </style>
</head>
<body>
<div class="container jumbotron">
	<center><h2>TheDawn's TechNews</h2>
	<p>welcome </p></center>
	</div>

	<div class="container"> 
     <div class="row">
     	<?php 
         $urlSourceArray=json_decode($urlSource,true);
          $sources=$urlSourceArray['articles'];
           $c=0;
     for ($i=0; $i <count($sources) ; $i++) {
       
         	
          
     	$articles=$urlSourceArray['articles'][$i];
     	    
     	    $urlImg=$articles['urlToImage']; 
     	     $title= $articles['title']; 
     	     $weburl= $articles['url']; 
     	      $description= $articles['description']; 
     	    
      ?>

    

     	
     	<div class="col-sm-4">
     	<a href="<?php echo $weburl ;?>">	
     		<div id="well2" class="well" style="height: 300px;">
     			<h4><?php
                 if (strlen($title)>25) {
    		 					$title=substr($title,0,25).'...';
    		 				}
    		 				echo htmlentities($title);
     			 ?></h4>
     			 <?php
     		
                   if($urlImg===null){
                   ?> 
                   <img style="align:center" style="overflow: hidden;" src="dawncrop.jpeg" >
                  <?php } else{ ?>
                 
                  
                 
     			  <img width="200px" max-height="250px" min-height="250px" src="<?php echo $urlImg; ?>" >
     			  <?php }//end of else?>
     			
     		
     			<p><?php echo $description?></p>
     		</div>
     		</a>
     	</div>
       <?php
         if ($c==2) {
     	     	$c=0;
             "<br>"
     	     
         ?>
     	<?php $c++; 
     	    } //end of if
     	   }//end of the while loop...
     	 ?>
     </div>
	</div>
</body>
</html>