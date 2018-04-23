<?php 
newstop();
function newstop(){
$urlSource=file_get_contents('https://newsapi.org/v2/top-headlines?sources=ars-technica&apiKey=2e61b7dbecab41ca97eebfe76e814fe3');
     $urlSourceArray=json_decode($urlSource,true);
     $sources=$urlSourceArray['articles'];
     for ($i=0; $i <count($sources) ; $i++) { 
     	$articles=$urlSourceArray['articles'][$i];
     	
     //	  echo  $articles['urlToImage']; 
     	  // echo  $articles['title']; 
        break;
}    
     }
	//print_r($urlSource);
?>