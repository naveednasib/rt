    <?php
 
 
        include_once("../connection.php");
        $number = count($_POST["payment1"]);
        $unitId =$_POST["unitId"];
       
        $payment1 =$_POST["payment1"];
        $payment2 =$_POST["payment2"];
        $payment3 =$_POST["payment3"];

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

if($number > 0){

    for($i=0;$i < $number;$i++){
       
       $value1 = ($payment1[$i]);
       $value2 = ($payment2[$i]);
       $value3 = ($payment3[$i]);
       
       $query = "INSERT INTO tbl_payment_plan2 (unit_id,plan_1,plan_2,plan_3) VALUES ('$unitId',' $value1 ', '$value2','$value3' ) ";
       $result = mysqli_query($conn,$query);


              if ( $result  === TRUE) {
                                     echo "New unit detail";
                                       } 
               else              {
                                     echo "Error: " . $result . "<br>" . $conn->error;
                                      }

    }


}
else{
    echo ( "error " .$number);
}









?>