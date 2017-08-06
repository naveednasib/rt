<?php


        include_once("../connection.php");


        $unitId         = $_POST['unitId'];
        $unitHighLights = $_POST['unit_highlights'];
        $unitBedroom    = $_POST['unit_bedrooms'];

       // echo (  $unitId .$unitHighLights. $unitBedroom  );

        $id_exit          =        "SELECT * FROM tbl_highlights WHERE unit_id = '$unitId' ";
       
        $excute_query = mysqli_query($conn,$id_exit);
     




    



    
        if($excute_query->num_rows == 0){
            $insertHighLights ="insert into tbl_highlights
            
             (unit_id,hightlights,unit_bedrooms) 
            
             value
             
             (' $unitId ','$unitHighLights','$unitBedroom') ";

             $insertQuery = mysqli_query($conn,$insertHighLights);
            
             echo "Data insert";

        }

        else{
            $upDateQuery ="update tbl_highlights set 
        
            hightlights   = '$unitHighLights',
            unit_bedrooms =  '$unitBedroom'
            where  unit_id='$unitId'
             ";

            $insertQuery = mysqli_query($conn,$upDateQuery);
             echo "Data update";


        }



?>