<?php include 'function.php';?>
<?php

$urlSource=file_get_contents('https://newsapi.org/v2/top-headlines?sources=hacker-news&apiKey=2e61b7dbecab41ca97eebfe76e814fe3');
     $urlSourceArray=json_decode($urlSource,true);
     $sources=$urlSourceArray['articles'];
     for ($i=0; $i <count($sources) ; $i++) { 
      $articles=$urlSourceArray['articles'][$i];
      
        echo  $articles['urlToImage']; 
        // echo  $articles['title']; 
        break;
}    
     
 ?>
<!DOCTYPE html>
<html lang="en" >

<head>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

<meta name="robots" content="noarchive">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112747284-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112747284-1');
</script>

    
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1097289429281432",
    enable_page_level_ads: true
  });
</script>

<style>
   .anonsbutton {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
  #grad1 {
    height: 45px;
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /* Standard syntax (must be last) */
     }
     
@font-face {
   font-family: myFirstFont;
   src: url(sansation_light.woff);
}

* {
   font-family: myFirstFont;
} 


</style>
    <meta charset="UTF-8">
    <title>Welcome to the TheDawn</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
      <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['bitcoin ', 4],
          ['Ethereum', 2],
          ['Ripple', 1],
          ['Bitcoin Cash', 2.5],
          ['Litecoin', 1]
        ]);

        // Set chart options
        var options = {'title':'cryptocurrency Price',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
<div class="container">
<gcse:search enableAutoComplete="true"></gcse:search>
</div>
<body  style="padding:10px"  onload="winalert()">
<br>

<!--facbook group plug-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=327846614385548&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  
 <script>
  (function() {
  var cx = '017643444788069204610:4gvhea_mvga'; // Insert your own Custom Search engine ID here
  var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
  gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
      '//www.google.com/cse/cse.js?cx=' + cx;
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
  
  function winalert(){
      alert("This website is still in construction,so some of the pages won't have  any kind of contend for you kind information.  Team TheDawn")
  }
 </script>
</body>

<div class="container">
  <div id="page">  
   <div class="wrap">
     <header id="header" class="row cf" >
     
  <!--
      <a style="margin-left:10px" href="index.html" class="btn btn-success" class="navbar-brand">TheDawn</a>-->
      <button id="primary-nav-button" type="button">Menu</button>
     
      <nav  id="primary-nav" class="dropdown cf" style="border-radius:5px">
        <ul  class="dropdown menu">
          <li class='active' style="margin-right:15px"> <a class="btn " href="index.html">Home</a></li>
          <li > <a class="btn btn-primary" href="other/tiding.html">Hack</a> </li>
          <li><a class="btn btn-info" href="other/addressyouknow.html">changing world</a> </li>
          <li>  <a class="btn btn-danger" href="#">Back Store </a> 
            <ul class="sub-menu">
              
              <li><a class="btn btn-primary" href="other/programming.html">Programming</a> 
              <!--  <ul class="sub-menu">
                 <li><a class="btn btn-primary" href="other/language.html">Languages</a> 
                    <ul class="sub-menu">
                      <li><a class="btn btn-default" href="other/java.html">java</a> </li>
                      <li><a class="btn btn-default" href="other/python.html">Python</a> </li>
                      <li><a class="btn btn-default" href="other/cpp.html">cpp</a> </li>
                      <li><a class="btn btn-default" href="other/clang.html">C Languages</a></li>
                    </ul>
                  </li>-->
                 <!-- <li><a class="btn btn-primary" href="other/webbased.html">Web technology</a>
             <ul class="sub-menu">
                      <li><a class="btn btn-default" href="other/html.html">HTML</a></li>
                      <li><a class="btn btn-default" href="other/css.html">CSS</a></li>
                      <li><a class="btn btn-default" href="other/janda.html">jquery and Ajax</a></li>
                      <li><a class="btn btn-default" href="other/jsonxml.html">Json and xml</a></li>
                    </ul>
          </li>

                </ul>-->
              </li>
              <li><a class="btn btn-primary" href="techno.html">Tradding technology</a>
                <ul class="sub-menu">
                  <li><a class="btn btn-default" href="other/cloud.html">Cloud computing</a></li>
                   <!-- <li><a class="btn btn-default" href="other/iot.html">IOT</a></li>
                  <li><a class="btn btn-default" href="other/aimachine.html">Machine Learning</a></li>-->
                  <li><a class="btn btn-default" href="other/gadgets.html">gadgets</a></li>
                
                </ul>
              </li>
              <li><a class="btn btn-primary" href="other/bookpdf.html">book and pdf</a> </li>
            </ul>
          </li>
         
          <li><a class="btn btn-primary" href="#">follow me</a>
            <ul class="sub-menu">
              <li><a class="btn btn-default" href="https://www.linkedin.com/in/aron-san-338458147/">linkedIn</a></li>
              <li><a class="btn btn-default" href="https://www.facebook.com/abhay.negi.7524">facebook</a></li>
              <li><a class="btn btn-default" href="https://github.com/AmanNegi1">github</a></li>
            </ul>
          </li>
         
         </ul>
       </nav>
       </header>
     </div>
   </div>
  </div><!--end of nav container-->
  <body> 
  <div id="fb-root"></div>
<script>(function(d, s, id) {  //login with facebook
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=327846614385548';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
</body>


<div style="padding:10px">

</div>

<div style="color: #DDEF06 " id="grad1">
  <center>
    <h2 >We will change the world</h2><br>
  </center>
 <!--<img style=" width:300px;height:200px; margin: 0px 750px 0px 0px;" src="AAAA.png" class="img-responsive" alt="welcome">-->
</div>
<div style="padding:5px"></div>    
 <center>
<div class="g-plus" data-action="share"></div>

<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/112434186141514035044" data-rel="author"></div><br>


</center>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=327846614385548';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 <script src="https://apis.google.com/js/platform.js" async defer></script>


<script src="https://apis.google.com/js/platform.js" async defer></script>



</body>

<div class="container"><body>
  <center>
    <div class="wall">
<!--<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:180px;border-radius: 10px">-->
 <div class="jumbotron">
  <center><h2 style="font-family:"Comic Sans MS", cursive, sans-serif;" class="display-2">The AnonsCreation</h2></center>     
  <h3>"Good software are like wine takes time."</h3>
  <p>“The best method for accelerating a computer is the one that boosts it by 9.8 m/s2.” - Anonymous</p>
  </div>

</div>
</center>
<br>

<body>
<center>  <div   style="background-color: #DAF7A6  ;" ><font color="#581845" >Use TheDawnTech ,who will provide you the best way to search while you are on this website.That is really Awesome.TheDawnTech search without render the page.</font></div></center>
</body><br>
</body>


  <div class="panel panel-primary">
 
  </div>
  </div> 
<body>
<div  class="container">
  <div class="row">
    <div class="col-sm-8">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img style="overflow:hidden;" src="alon.jpg" alt="master" style="width:60%;">
        <div class="carousel-caption">
          <h3 style="color:#0DE863;">Albert Einstein said that</h3>
          <p style="color:#0DE863;">Imagination is more important than your knowleage</p>
        </div>
      </div>

      <div class="item">
        <img style="overflow:hidden;" src="ambi.jpg" alt="racers" style="width:60%;">
        <div class="carousel-caption">
          <h3 style="color:blue;">Their is a difference b/w</h3>
          <p style="color:blue;">A Driver and A racer</p>
        </div>
      </div>
    
      <div class="item">
        <img style="overflow:hidden;" src="blade.jpg"  style="width:60%;">
        <div class="carousel-caption">
          <h2 style="color:#FC130C  ;">Riders are</h2>
          <p style="color:#FC130C  ;">curious about there owns</p>
        </div>
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
  </div>
    </div>
   
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
                   <img style="height:200px;width:100%;position:relative;background-attachment:fixed;overflow: hidden;" src="dawncrop.jpeg" >
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
          break;
         }//end of the while loop...
       ?>

  </div>
  <div class="row">
    <?php 
         $urlSourceArray=json_decode($urlSource,true);
          $sources=$urlSourceArray['articles'];
           $c=0;
     for ($i=1; $i <4 ; $i++) {
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
                   <img style="height:200px;width:100%;position:relative;background-attachment:fixed;overflow: hidden;" src="dawncrop.jpeg" >
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

</div><!--end oof container-->

</body>
<br>
<center>
<div class="fb-like" data-href="http://www.thedawn.info" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div><br>

  <div class="container">   
   <h1>Top View</h1>
  <div class="row">
  <a href="other/addressyouknow.html" name="block1">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">blockchain in the real world</div>
        <div class="panel-body"><img src="blockchain.jpg" class="img-responsive" style="width:100%" alt="blockchain"></div>
        <div class="panel-footer">what is blockchain and why it is growing day day?</div>
      </div>
    </div>
    </a>

    <a href="other/programming.html" name="probos">
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">flud of Programming languages</div>
        <div class="panel-body"><img src="prolan.jpg" class="img-responsive" style="width:81%" alt="Progrms"></div>
        <div class="panel-footer">Advantages over all </div>
      </div>
    </div>
   </a>
   
    <a href="other/gadgets.html" name="devices">
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">These are the technology anyone want of buy</div>
        <div class="panel-body"><img src="hightech.jpg" class="img-responsive" style="width:90%" alt="technograph"></div>
        <div class="panel-footer">Some Awesome gadgets</div>
      </div>
    </div>
   </a> <br>
  
  </div>
 </div><br>
  </div>
 </div><br>
 <div class="container">
     <div style="color: #DDEF06 " id="grad1">
       <center>
         <h2 >Games</h2><br>
       </center>
    </div><br>
      <div style="float:" class="col-sm-4">
    <a href="games/index-FINISH.html">
         <div class="well">
                         <img style="position:relative;overflow:hidden;  background-attachment: fixed;height:200px;width:100%"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqzwgiaS_ZWu_oI5AV6bn72Tn-C1nIZhL1VDwRVDV4O7g5ah5wEw">   
                         <span>Addition Adiction</span>        

         </div>
    </a>

</div>
  <div style="float:" class="col-sm-4">
    <a href="piggame/index.html">
         <div class="well">
                         <img style="position:relative;overflow:hidden;  background-attachment: fixed;height:200px;width:100%"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_EJS1pmyGgC5RWLCN8GFdK21n5xX2TfTUJWr0YEuBse7Px7o9">   
                         <span>Dice Adiction</span>        

         </div>
    </a>

</div>
  <div style="float:right" class="col-sm-4">
<div  class="fb-page" data-href="https://www.facebook.com/aaronmwCtech/" data-tabs="timeline" data-width="700" data-height="300"
     data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/aaronmwCtech/" 
     class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/aaronmwCtech/">Since The Era Of Computers</a></blockquote></div>

 </div>
 </div>
 <br>
 <div class="container">
     <!-- <center><div style="float:left;" id="chart_div"></div></center>
     -->
</div>

 
 <!-- Container (Contact Section) -->
 <div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Dehradun,India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 9758063773</p>
      <p> <span><img class="img-fluid" class="img-circle"  src="man.jpg" style="width:4cm;height:5cm;border-radius:5px"></span></p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: amannegi227@gmail.com</p>
    </div>
    
     <div class="fb-comments"></div>
  <div id="fb-root"></div>
    <div class="fb-page" data-href="https://www.facebook.com/aaronmwCtech/" data-tabs="timeline" 
    data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" 
 data-show-facepile="true"><blockquote cite="https://www.facebook.com/aaronmwCtech/" 
 class="fb-xfbml-parse-ignore">
 <a href="https://www.facebook.com/aaronmwCtech/">Since The Era Of Computers</a></blockquote>
<center>save whatever text you feel important</center>
 <body onload="fetchIssues()" style="width: 500px">
    <div class="container">
   
      <div class="jumbotron">
       <h3>Your Private Save</h3>
        <form id="issueInputForm">
          <div class="form-group">
            <label for="issueDescInput">Name of the topic..</label>
            <input type="text" class="form-control" id="issueDescInput" placeholder="Enter your Topic Name">
          </div>
         
          <div class="form-group">
            <label for="issueAssignedToInput">all text will go here</label>
            <input type="text" class="form-control" id="issueAssignedToInput" placeholder="Enter your Query Here">
          </div>
          <button type="submit" class="btn btn-primary">Add </button>
        </form>
      </div>
      <div class="col-lg-12">
        <div id="issuesList">
        </div>
      </div>
     
    </div>
    <script src="chance.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "messages", // Facebook page ID
            whatsapp: "9758063773", // WhatsApp number
            email: "amannegi227@gmail.com", // Email
            call: "9758063773", // Call phone number
            company_logo_url: "//www.thedawn.info/", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            button_color: "#A8CE50", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,call,email" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
    
  </body>
 </div>

  <br>
   
  </div>
  
 <div id="fb-root"></div>
 <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=282857088731555';
  fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>

 
  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=282857088731555';
   fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
 </center>
</html>
  
