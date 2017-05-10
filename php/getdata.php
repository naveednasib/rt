<?php 


      $servername = "localhost";
          $username = "root";
          $password = "";
         $dbname = "appelo";


         $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
                } 


$sql = "SELECT id,project_developer,project_logo FROM tbl_project";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["project_developer"]. " " . $row["project_logo"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

                ?>