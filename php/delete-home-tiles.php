<?php 


  			 include_once('connection.php');


  			 $getId = $_POST['id'];

  			 // DELETE FROM music WHERE msuic_id ='$music_number
			$sql = "SELECT id,project_developer,project_logo FROM tbl_project";
			$result = $conn->query($sql);


	

									

                ?>