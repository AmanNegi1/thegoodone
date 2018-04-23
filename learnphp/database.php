
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname="userchat";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
