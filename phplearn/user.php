<?php
class User{
	protected $pdo;
	function __construct($pdo){
		this->$pdo=$pdo;
	}
	public function checkInput($var){
		$var=htmlspecialchars($var);
		$var=trim($var);
		$var=stripcslashes($var);
		return $var;
	}
	public function login($username,$password){
		$stmt=$this->pdo->prepare("SELECT * FROM 'USER' WHERE 'username'=:username AND 'password'=:password ");
		      $stmt->bindParam(":username",$username,PDO::PARAM_STR);
		      $stmt->bindParam(":password",$password,PDO::PARAM_STR); 
		      $stmt->execute();
		      $user=$stmt->fetch(PDO::FETCH_OBJ);
		      $count=$stmt->rowCount();
		      if ($count>0) {
		      	$_SESSION['username']=$user->username;
		      	header('Location:home.php');
		      }
	}
}
?>
