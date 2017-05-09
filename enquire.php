
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>


<?php

$firstname 		 =  $_POST['firstname'];
$lastname 		 =  $_POST['lastname'];
$email			 =  $_POST['email'];
$phonenumber 	 =  $_POST['phonenumber'];



	$sql = "INSERT INTO testtable(firstName, lastName, projectName, phoneNumber) VALUES ('$firstname','$lastname' ,'$email','$phonenumber')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>