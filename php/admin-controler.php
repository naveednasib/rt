
<?php

require 'connection.php';





class developer  {



        include_once('../connection.php');
 // $url = $_COOKIE['url'];
    // echo $url; 

    // $connection = new connection();
  
    // $connection->con();

    // $test =  $connection->con();
    // global  $conn;
    // var_dump($conn);

// Create connection

    $devName = $_POST['dev-name'];
    $devImg  = $_POST['developer-img'];
  
    if(   isset($devImg) &&  $devName ){

         $sql = "insert into tbl_project (project_developer,project_logo) values('$devName','$devImg')";


            if ($conn->query($sql) === TRUE) {
              echo "<script>
            alert('data insert');

            </script>";
    }



       else{
         echo "you enter invalid data ";
       }


// header("Location: /index.php");
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