<?php
	 include_once('../connection.php');

     $tile_value   = $_POST['value'];
     $fetch_pagination ="SELECT * FROM `tbl_unitdetail`ORDER BY id ASC LIMIT  $tile_value ,6";
    
  
  
    $result = mysqli_query($conn,$fetch_pagination);
 
  
    if ($result== TRUE) 
    
    {
           
                        
              
              
              
                while($rows = mysqli_fetch_array($result))
                {   
                    $id = $rows[0];
                    $fetch_unitdetail ="SELECT 
                    id,
                    unit_name,
                    unit_location,
                    unit_price,
                    unit_feature,  
                    (SELECT images_path FROM tbl_unit_sm_img AS tbl_img   WHERE tbl_img.unit_id ='$id' LIMIT 1 )
                    FROM tbl_unitdetail WHERE id= '$id'
                        ";
                    
                    $resultunitdetail = mysqli_query($conn,$fetch_unitdetail);
       
                if ($resultunitdetail == TRUE) 
    
                {
                while($rows_spec = mysqli_fetch_array($resultunitdetail)){


                $data[] =array('unit_id'             =>$rows_spec[0],
                              'unit_name'            =>$rows_spec[1],
                              'unit_location'        =>$rows_spec[2],
                              'unit_price'           =>$rows_spec[3],
                              'unit_feature'         =>$rows_spec[4],
                              'unit_image'           =>str_replace('../','',$rows_spec[5]),
                              );
                    }
                    }

            




                }
               


               
                 
                 

                $jsonData = json_encode(array('unitDetails'=>$data));
                echo  $jsonData;
    }




?>