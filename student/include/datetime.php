<?php 

date_default_timezone_set("Asia/kolkata");
$currenttime=time();
$datetime=strftime("%B-%d-%Y %H:%M:%S",$currenttime);
echo $datetime;

?>