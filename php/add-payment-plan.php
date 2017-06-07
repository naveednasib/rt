    <?php
 
 
        include_once("../connection.php");
        $number = count($_POST["payment1"]);
        $unitId =$_POST["unitId"];
<<<<<<< HEAD
       
=======
        echo  $unitId;
>>>>>>> c57325b660b414dad6f3d3f8f0d09926357e4978
        $payment1 =$_POST["payment1"];
        $payment2 =$_POST["payment2"];
        $payment3 =$_POST["payment3"];

if($number > 0){

    for($i=0;$i < $number;$i++){
       
       $value1 = ($payment1[$i]);
       $value2 = ($payment2[$i]);
       $value3 = ($payment3[$i]);
       
<<<<<<< HEAD
       $query = "INSERT INTO tbl_payment_plan2 (unit_id,plan_1,plan_2,plan_3) VALUES ('$unitId',' $value1 ', '$value2','$value3' ) ";
       $result = mysqli_query($conn,$query);


              if ( $result  === TRUE) {
                                     echo "New unit detail";
                                       } 
               else              {
                                     echo "Error: " . $result . "<br>" . $conn->error;
                                      }

    }

=======
       $query = "INSERT INTO tbl_payment_plan2 (unit_id,plan_1,plan_2,plan_3) VALUES ('$unitId',' $value1 ', $value2,$value3 ) ";
       $result = mysqli_query($conn,$query);

    }
>>>>>>> c57325b660b414dad6f3d3f8f0d09926357e4978

}
else{
    echo ( "error " .$number);
}









?>