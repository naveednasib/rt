<?php
	 include_once('../connection.php');


     $fetch_pagination ='SELECT * FROM `tbl_unitdetail`ORDER BY id ASC LIMIT 5 ,2';
    
  
  
    $result = mysqli_query($conn,$fetch_pagination);
  
  
    if ($result== TRUE) 
    
    {
            $i=0;
        while($rows = mysqli_fetch_array($result))
                {
            

                 $data[$i] =array('unit_id'          =>$rows[0],
                              'unit_name'            =>$rows[1],
                              'unit_location'        =>$rows[2],
                              'unit_price'           =>$rows[3],
                              'unit_feature'         =>$rows[6]
                              );

                           
                $jsonData = json_encode(array($data[$i])   );
                // echo  "~~~~~~~~~~~~~~~~~~~~ ";
                echo  $jsonData[$i];
                
                $i++;
                 
                 }
                 
    }



?>