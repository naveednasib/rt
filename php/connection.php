<?php
   
 class connection{

 public	 function con(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appelo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


return $conn;
$conn->close();

 }



 	 }
 	
?>
