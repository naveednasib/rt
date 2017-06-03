<?php 


  			     include_once('../connection.php');


  			 $getId = $_POST['del_id'];


  			 // DELETE FROM music WHERE msuic_id ='$music_number
			$deletequery = "Delete FROM tbl_unitdetail where id = '$getId' ";
		       
			$result = mysqli_query($conn, $deletequery );
			//$result=mysqli_query($deletequery);

	
			if($result == true) {
   			echo "success";
			} else {
		    echo "NO";
			}
									

                ?>