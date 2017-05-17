<?php 


        include_once('../connection.php');
                

 		$unitname                                =  $_POST['unit-name'];
 		$unit_loc                                = $_POST["unit-loc"];
 		$unit_prices                             = $_POST["unit-prices"];
 		$unit_size                               = $_POST["unit-size"];
 		$unit_readyBy                            = $_POST["unit-readyBy"];
 		$unit_feature                            = $_POST["unit-feature"];
 	 	$unit_sold                               = $_POST["unit-sold"];
        $unit_type                               = $_POST["unit-type"];
        $unit_developerId                        = $_POST["unit-developerName"];
        $unit_developerName                      = $_POST["unit-developertxt"];
        $unit_bedrooms                           = $_POST["unit-bedrooms"];
        $unit_bathrooms                          = $_POST["unit-bathrooms"];


  

 $sql =	"insert into tbl_unitdetail( unit_name, unit_location, unit_price, unit_size, unit_readyby, unit_feature, unit_type,unit_developerid,unit_developerName,unit_bedrooms,unit_bathroom)

 		 values (
 		 '$unitname',
 		 '$unit_loc',
 		 '$unit_prices',
 		 '$unit_size',
 		 '$unit_readyBy',
 		 '$unit_feature', 		 
 		 '$unit_type',
         '$unit_developerId',
         '$unit_developerName',
         '$unit_bedrooms',
         '$unit_bathrooms'

     )";


 		

                if ($conn->query($sql) === TRUE) {
                                     echo "New unit detail";
                                       } 
                    else              {
                                     echo "Error: " . $sql . "<br>" . $conn->error;
                                      }

?>
