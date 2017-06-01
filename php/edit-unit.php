<?php 


        include_once('../connection.php');
       
        
                
$id = $_GET['id'];
 		$unitname                                =  $_POST['unit-name'];
 		$unit_loc                                = $_POST["unit-loc"];
 		$unit_prices                             = $_POST["unit-prices"];
 		$unit_size                               = $_POST["unit-size"];
 		$unit_readyBy                            = $_POST["unit-readyBy"];
 		$unit_feature                            = addslashes($_POST["unit-feature"]);
 	 	$unit_sold                               = $_POST["unit-sold"];
        $unit_type                               = $_POST["unit-type-text"];
        $unit_developerId                        = $_POST["unit-developerName"];
        $unit_developerName                      = $_POST["unit-developer-name"];
        $unit_bedrooms                           = $_POST["unit-bedrooms"];
        $unit_bathrooms                          = $_POST["unit-bathrooms"];
        $unit_status                             = $_POST["unit-status"];
        $unit_floors                             = $_POST["unit-floors"];
        $unit_launched                           = $_POST["unit-launched"];


  

 $sql =	"UPDATE
         tbl_unitdetail
         SET
         unit_name                          =  '$unitname',
         unit_location                      =  '$unit_loc',
         unit_price                        =  '$unit_prices',
         unit_size                          = '$unit_size',
         unit_readyby                       ='$unit_readyBy', 
         unit_feature                       ='$unit_feature', 
         unit_type                          ='$unit_type',
         unit_developerid                   = '$unit_developerId',
         unit_developerName                 ='$unit_developerName',
         unit_bedrooms                      ='$unit_bedrooms',
         unit_bathroom                      ='$unit_bathrooms',
         unit_status                        ='$unit_status',
         unit_floor                         ='$unit_floors',
         unit_launched                      ='$unit_launched'

         where

         id = '$id'";
 		

                                     if ($conn->query($sql) === TRUE) {
                                     echo "Unit Update";
                                       } 
                                     else              {
                                     echo "Error: " . $sql . "<br>" . $conn->error;
                                      }
 		 
 		 
 		 
 		 		 
 		 
        
  


 		

 //                if ($conn->query($sql) === TRUE) {
 //                                     echo "New unit detail";
 //                                       } 
 //                    else              {
 //                                     echo "Error: " . $sql . "<br>" . $conn->error;
 //                                      }






?>
