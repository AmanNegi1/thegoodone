<?php include 'functionBchain.php'; ?>
<?php

$urlSource=file_get_contents('https://newsapi.org/v2/everything?q=bitcoin&sortBy=publishedAt&apiKey=2e61b7dbecab41ca97eebfe76e814fe3');
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
<html>
<head>
  
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1097289429281432",
    enable_page_level_ads: true
  });
</script>
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
        text-align:justify;
      }
      #well2{
        overflow: hidden;
      }
       #block:hover{
     background-color:#72f70c;
     color:white;}

    </style>
 
</head>




<body >

  <div class="container-fluid">
    <div id="block" class="jumbotron"><center>
        <H2>BLOCKCHAIN</H2>
        <span>The trending Technology From Blockchain</span>
    </div>                      
  </div>
  

   

<div  class="container-fluid">
  <h1>Blockchain</h1>
  <p>To understand the blockchain completly first we should know the basic terms used in Blockchain.</p>
  <p style="font-family:Times New Roman; font-weight: bold;font-size: 1.4em;"><h3>what is bitcoin : </h3> Bitcoin is a form of digital currency,created and held electronically.No one controls it.Bitcoins aren’t printed,like dollars or euros–they’re produced by people,and increasingly businesses, running computers all around the world, using software that solves mathematical problems.Bitcoin is the first kind of the money which can be proceeded in physically or electrically.It has a lot of benefits over the another money system.<br><br><center><mark>1 bitcoin = 1052689.02 Indian Rupee<br><br>1 bitcoin = 16619.53 US Dollar <br><br> 1 bitcoin = 13814.81 Euro </mark></center></p>
  <br>
  
</div>
<div class="container">
 <div class="row">
     <div class="col-sm-4">
          <p ><br>In Bitcoin their is no need of the third party (like bank and other services) operation while transction,all transction happen peer to peer. Bitcoin can be used to buy things electronically.In that sense,it’s like conventional dollars,euros,or yen, which are also traded digitally.  As above mention that Bitcoin does not have 3rd party while transction so that our all infomation gets private to us.<br><br>A software developer called <mark>Satoshi Nakamoto</mark> proposed bitcoin, which was an electronic payment system based on mathematical proof. The idea was to produce a currency independent of any central authority, transferable electronically, more or less instantly, with very low transaction fees.
       </p>
       <h2>who prints it</h2>
       <p> No one. This currency isn’t physically printed in the shadows by a central bank, unaccountable to the population, and making its own rules. Those banks can simply produce more money to cover the national debt, thus devaluing their currency.

       Instead, bitcoin is created digitally, by a community of people that anyone can join. Bitcoins are ‘mined’, using computing power in a distributed network. This network also processes transactions made with the virtual currency, effectively making bitcoin its own payment network.<br><br>
       So you can’t churn out unlimited bitcoins?
      <br>
       That’s right. The Bitcoin protocol – the rules that make bitcoin work – say that only 21 million bitcoins can ever be created by miners. However, these coins can be divided into smaller parts (the smallest divisible amount is one hundred millionth of a bitcoin and is called a ‘Satoshi’, after the founder of bitcoin).</p>
       <center><div style="float:left;" id="chart_div"></div></center>
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
                   <img style="align:center" style="overflow: hidden;" src="dawncrop.jpeg" >
                  <?php } else{ ?>
                 
                  
                 
            <img width="200px" max-height="250px" min-height="250px" src="<?php echo $urlImg; ?>" >
            <?php }//end of else?>
          
        
          <p><?php echo $description?></p>
        </div>
        </a>
     </div><!--end of col-->
     <?php
        /* if ($c==3) {
            $c=0;break;
           

          
         ?>
      <?php   $c++; 
          } //end of if 
        
         }//end of the while loop...*/
       ?>
        <?php
    $c++;
    if($c==9){
        $c=0;
        break;
    }
    }?>
       <span style="float: right;" class="btn btn-primary"><a style="color:white;" href="blockchain.php">Read Full Post</a></span>
 </div>
</div>

<div  class="container">
  <h1></h1>
  <p></p>
  <p></p>
</div>
<!--<div class="container-fluid">
  <h1></h1>
  <p></p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
-->
</body>
</html>
