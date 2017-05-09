<?php
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
?>



<?php

$devName = $_POST['dev-name'];
$devImg	 = $_POST['developer-img'];



$insertDev = "insert into tbl_project (project_developer,project_logo) values('$devName','$devImg')";

if($conn->query($insertDev) === True){
	echo  "New record created successfully";
}
 else{

 echo "Error:".$insertDev."<br>".$conn-->error;

 }



$getall = "select project_developer,project_logo from tbl_project";
$result = $conn->query($getall) ;


if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo  $row["project_developer"].$row["project_logo"];
     }
} else {
     echo "0 results";
}

$conn->close();
?>