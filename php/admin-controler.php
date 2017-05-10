
<?php

require 'connection.php';





class developer  {



function developer_insert_data(){

    $devName = $_POST['dev-name'];
    $devImg  = $_POST['developer-img'];

    // $connection = new connection();
  
    // $connection->con();

    // $test =  $connection->con();
    // global  $conn;
    // var_dump($conn);

// Create connection
          $servername = "localhost";
          $username = "root";
          $password = "";
         $dbname = "appelo";


         $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
                } 


        $sql = "insert into tbl_project (project_developer,project_logo) values('$devName','$devImg')";


            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                    } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                            }



}


function save_images(){

    
}


}

$dev= new developer();
$dev->developer_insert_data();

// -------------------------------------------------





?>