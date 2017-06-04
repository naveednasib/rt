 <?php

<<<<<<< HEAD
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "appelo";
		     session_start();
=======
    session_start();
  
 		$servername = "localhost";
          $username = "root";
          $password = "";
         $dbname = "appelo";

>>>>>>> 9a1ce4b11f10b3ffd9c4582b9840807362968975

         $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
                } 
 ?>
