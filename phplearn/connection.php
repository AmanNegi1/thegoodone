<?php

$dsn='mysql:host=localhost;dbname=objectphp';
$user='root';
$pass='root';
try {
	$pdo=new PDO($dsn,$user,$pass);
} catch (PDOException $e) {
	echo "COnnection error". $e->getMessage() ;
	
}
?>