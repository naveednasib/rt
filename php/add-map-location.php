<?php





  include_once("../connection.php");
                   $unit_id        =       $_POST['unitId'];
                   $unit_longitude =       $_POST['unit_longitude'];
                   $unit_latitude  =       $_POST['unit_latitude'];

         
       
                 $updateMap        =        ''; 
                 $id_exit          =        "SELECT * FROM tbl_unit_map WHERE unit_id = '$unit_id'  ";
                 $id_exit_query    =        mysqli_query($conn,$id_exit);
        







        
        if ( $id_exit_query->num_rows == 0) {


                    $insertMap ="insert into tbl_unit_map (unit_id,unit_longitude,unit_latitude) value(' $unit_id ','$unit_longitude','$unit_latitude')";
                     $query =mysqli_query($conn, $insertMap);
                       echo "data insert....";

           
                    
        } else {
                   

                    $updateMap ="update  tbl_unit_map set 
                     unit_longitude='$unit_longitude',unit_latitude='$unit_latitude'
                    where  unit_id='$unit_id'
                     ";
                  
                     $update_query =mysqli_query($conn, $updateMap);
                    
                     echo "data update....";
                
        }


        




?>