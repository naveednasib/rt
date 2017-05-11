
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

?>


<?php

$firstname 		 =  $_POST['firstname'];
$lastname 		 =  $_POST['lastname'];
$email			 =  $_POST['email'];
$phonenumber 	 =  $_POST['phonenumber'];
$developerName 	 =  $_POST['developerName'];



	$sql = "INSERT INTO tbl_unit_enquiry(user_firstName, user_lastName, user_email,user_phoneNumber, user_selected_developer,user_selected_date) VALUES ('$firstname','$lastname' ,'$email','$phonenumber','$developerName',now())";






if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    // the message
$msg = "your email has been send";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$headers = "From: webmaster@example.com" . "\r\n" .
// send email
$varf = mail( $email + ",mnnasib7777@gmail.com","test",$msg,$headers);


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>