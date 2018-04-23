<?php
$db = mysqli_connect('127.0.0.1','root','','onlineshop');
if(mysqli_connect_errno())
{
  echo 'Database Connection failed with the following errors: '.mysqli_connect_error();
  die();
}
 ?>
