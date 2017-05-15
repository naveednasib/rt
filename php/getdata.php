<?php 


  			 include_once('connection.php');

			$sql = "SELECT id,project_developer,project_logo FROM tbl_project";
			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
    
    		while($row = $result->fetch_assoc()) {
        	
        	echo "id: " . $row["id"]. " - Name: " . $row["project_developer"]. " " . $row["project_logo"]. "<br>";
    									}
										}
										 else
										  {
    										echo "0 results";
														}

										$conn->close();

                ?>