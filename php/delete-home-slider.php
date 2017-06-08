<?php 


  			     include_once('../connection.php');


  			 $getId = $_POST['del_id'];
			 $imgpath = $_POST['imgpath'];

function recursiveRemoveDirectory($directory)
{
    foreach(glob("{$directory}/*") as $file)
    {
        if(is_dir($file)) { 
            recursiveRemoveDirectory($file);
        } else {
            unlink($file);
        }
    }
    rmdir($directory);
}
  		
			$deletequery = "Delete FROM tbl_homepage_lg_slider  where unit_id = '$getId' ";		       
			$result = mysqli_query($conn, $deletequery );
	
	 	$file_name   = "/images/homepage-lg-slider/".$getId;

		 $file_delete=	dirname(__FILE__, 2) . '/' . $file_name;
				  
			


			if($result == true) {
   			echo "success";
			   
           recursiveRemoveDirectory($file_delete);

		
		

			} else {
		    echo "NO";
			}
									

                ?>