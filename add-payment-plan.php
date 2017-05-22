<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/css/main.css" rel="stylesheet" />
    <title>Add developer</title>
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 


    <style>        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        vertical-align:middle;
        }
     
    </style>


        <?php 
                    include_once('connection.php');


                $sql = "SELECT id,unit_name FROM tbl_unitdetail";
                $selectresult = mysqli_query($conn, $sql);


          
            
                if(isset($_POST['payment_plan']) )
                {
                        $unit_id        = $_POST['unitId'];
                        $payment_plan1  = $_POST['payment_1'];
                        $payment_plan2  = $_POST['payment_2'];
                        $payment_plan3  = $_POST['payment_3'];
                        $payment_plan4  = $_POST['payment_4'];
                        $payment_plan5  = $_POST['payment_5'];
                        $payment_plan6  = $_POST['payment_6'];
                        $payment_plan7  = $_POST['payment_7'];
                        $payment_plan8  = $_POST['payment_8'];
                        $payment_plan9  = $_POST['payment_9'];
                        $payment_plan10 = $_POST['payment_10'];
                        $payment_plan11 = $_POST['payment_11'];
                        $payment_plan12 = $_POST['payment_12'];
                        
                      
                        $check_unitid = "select * from tbl_payment_plan where unit_id =  $unit_id  ";
                        $checkquery = mysqli_query($conn, $check_unitid);
                      
                        


                          $fetch_paymentId = mysqli_fetch_array( $checkquery);                        
                         if ($fetch_paymentId[1] == $unit_id) {
                            $insert_payment ="
                            UPDATE  tbl_payment_plan 
                            SET  
                            unit_id    =['$payment_plan2'],
                            payment_2  =['$payment_plan3'], 
                            payment_3  =['$payment_plan4'], 
                            payment_4  =['$payment_plan5'], 
                            payment_5  =['$payment_plan6'], 
                            payment_6  =['$payment_plan7'], 
                            payment_7  =['$payment_plan8'], 
                            payment_8  =['$payment_plan9'], 
                            payment_9  =['$payment_plan1'], 
                            payment_1  =['$payment_plan10'], 
                            payment_10 =['$payment_plan1'], 
                            payment_11 =['$payment_plan11'], 
                            payment_12 =['$payment_plan12'] 
                            WHERE '$unit_id'";
                            $inset_query = mysqli_query($conn, $insert_payment);
                            echo "<h3 style='margin-top:50px'>data Updated</h3>";
                          }
                      
                        else{     

                        $insert_payment = " INSERT INTO  
                        tbl_payment_plan
                         (  unit_id ,  payment_2 ,  payment_3 ,  payment_4 ,  payment_5 ,  payment_6 ,  payment_7 ,  payment_8 ,  payment_9 ,  payment_1 ,  payment_10 ,  payment_11 ,  payment_12 ) 
                         VALUES 
                         ('$unit_id ',
                         '$payment_plan2',
                         '$payment_plan3',
                         '$payment_plan4',
                         '$payment_plan5',
                         '$payment_plan6',
                         '$payment_plan7',
                         '$payment_plan8',
                         '$payment_plan9',
                         '$payment_plan1',
                         '$payment_plan10',
                         '$payment_plan11',
                         '$payment_plan12')";
                          $inset_query = mysqli_query($conn, $insert_payment);
                         echo "<h3 style='margin-top:50px'>data insert</h3>";
                            }

                               



                                       
                         
                            




                }
   


                    ?>

</head>
<body>
   
  <!--header-->
        <?php  
                include_once('layout/cms-header.php');
        ?>
        <!--header-->

    <section class="datasets top-container">

        <div class="mid-container clearfix">
            <div class="col-xs-12 col-sm-6">
                <h2>payment plan </h2>
            
        <form  action="add-payment-plan.php" enctype="multipart/form-data" method="post">



                <table class="table table-responsive">




                <tr>
                <td>select unit</td>
                    <td colspan="2" class="form-group">
                            <select name="unitId" onchange="setTextField(this)" class="form-control select-option">

                             <?php   while($row1 = mysqli_fetch_array($selectresult)):; ?>
                            <option value="<?php echo $row1[0];?>"><?php echo $row1[1] ?></option>
                            <?php  endwhile; ?>                       
                        </select>

                        <input required id="unitname" type = "hidden" 
                            name = "unitname" value = "" />

                    </td>
                </tr>

                <tr>
                <td><input class="form-control"  type="text" name="payment_1"></td>
                <td><input class="form-control"  type="text" name="payment_2"></td>
                <td><input class="form-control"  type="text" name="payment_3"></td>

                </tr>
                 <tr>
                <td><input class="form-control"   type="text" name="payment_4"></td>
                <td><input class="form-control"   type="text" name="payment_5"></td>
                <td><input class="form-control"   type="text" name="payment_6"></td>

                </tr>
                 <tr>
                <td><input class="form-control"   type="text" name="payment_7"></td>
                <td><input class="form-control"   type="text" name="payment_8"></td>
                <td><input class="form-control"   type="text" name="payment_9"></td>

                </tr>
                 <tr>
                <td><input class="form-control"   type="text" name="payment_10"></td>
                <td><input class="form-control"   type="text" name="payment_11"></td>
                <td><input class="form-control"   type="text" name="payment_12"></td>

                </tr>




                <tr>
                    <td colspan="3"><input type="submit" class="btn btn-success" value="submit" name="payment_plan"/></td>

                </tr>


            




                </table>

  


        </form> 




            </div>
        

     
         
        </div>
    
       
    </section>



    <!--footer-->
    <?php
       

    include_once('layout/footer.php');

    ?>

    <!--footer-->


    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>


<?php 



?>

  <script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('unitname').value = ddl.options[ddl.selectedIndex].text;
    }
</script>
</body>
</html>
