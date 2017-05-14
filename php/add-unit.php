<?php 


      $servername = "localhost";
          $username = "root";
          $password = "";
         $dbname = "appelo";


         $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
                } 

                

 		$unitname                                =  $_POST['unit-name'];
 		$unit_loc                                = $_POST["unit-loc"];
 		$unit_prices                             = $_POST["unit-prices"];
 		$unit_size                               = $_POST["unit-size"];
 		$unit_readyBy                            = $_POST["unit-readyBy"];
 		$unit_feature                            = $_POST["unit-feature"];
 		$unit_fac_ami                            = $_POST["unit-fac-ami"];
 		$unit_video                              = $_POST["unit-video"];
 		$unit_floorPlan                          = $_POST["unit-floorPlan"];
 		$unit_sold                               = $_POST["unit-sold"];
        $unit_type                               = $_POST["unit-type"];
        $unit_developerId                        = $_POST["unit-developerName"];
        $unit_developerName                      = $_POST["unit-developertxt"];


  

 $sql =	"insert into tbl_unitdetail( unit_name, unit_location, unit_price, unit_size, unit_readyby, unit_feature, unit_facilityAminities, unit_video, unit_floorplan,unit_type,unit_developerid,unit_developerName)

 		 values (
 		 '$unitname',
 		 '$unit_loc',
 		 '$unit_prices',
 		 '$unit_size',
 		 '$unit_readyBy',
 		 '$unit_feature',
 		 '$unit_fac_ami',
 		 '$unit_video',
 		 '$unit_floorPlan',
     '$unit_type',
     '$unit_developerId',
     '$unit_developerName'    
     )";


 		

   if ($conn->query($sql) === TRUE) {
                echo "New unit detail";
                    } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                            }

?>
