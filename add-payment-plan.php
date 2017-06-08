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
                        $unit_id         = $_POST['unitId'];
                        $payment_plan1   = $_POST['payment_1'];
                        $payment_plan2   = $_POST['payment_2'];
                        $payment_plan3   = $_POST['payment_3'];
                    
                        
                      
                        $check_unitid = "select * from tbl_payment_plan where unit_id =  $unit_id  ";
                        $checkquery   =    mysqli_query($conn, $check_unitid);
                      
                        

                          
                          $fetch_paymentId = mysqli_fetch_array( $checkquery);                        
                       
                      

                               



                                       
                         
                            




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
            
        <form  action="php/add-payment-plan.php" method="post"   name="add_payment_plan"   id="pm_plan">



                <table class="table table-responsive">




                <tr>
                <td>select unit</td>
                    <td colspan="2" class="form-group">
                            <select name="unitId" onchange="setTextField(this)" class="form-control select-option">

                             <?php   while($row1 = mysqli_fetch_array($selectresult)):; ?>
                            <option value="<?php echo $row1[0];?>"><?php echo $row1[1] ?></option>

         
                            <?php  endwhile;    ?>                       
                        </select>


                        <input required id="unitname" type = "hidden" 
                            name = "unitname" value = "" />

                    </td>
                </tr>

                <tr class="paymentplan_row">
                <td><input class="form-control"  type="text" name="payment1[]"></td>
                <td><input class="form-control"  type="text" name="payment2[]"></td>
                <td><input class="form-control"  type="text" name="payment3[]"></td>

                </tr>
            

           

            




                </table>

  
<div class="col-xs-12">
     <button type="button" class="btn btn-info btn-lg addmore_row">Add more  row</button>
  
     <input type="submit" id="submit" class="btn btn-success btn-lg" value="submit" name="payment_plan"/>
 
  </div>
  <br/>  <br/>  <br/>
  
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

var i =0;
    $(".addmore_row").click(function(){
    i++;
    var row = "  <tr class='paymentplan_row'> ";
    row +=  "<td><input class='form-control'  type='text' name='payment1[]'></td>";
    row +=  "<td><input class='form-control'  type='text' name='payment2[]'></td>";
    row +=  "<td><input class='form-control'  type='text' name='payment3[]'></td>";
    row +=  " </tr>";     


$("table tbody").append(row );
    });

    // $("#submit").click(function(){
    //     $.ajax({
    //         url:"php/add-payment-plan.php",
    //         method:"POST",
    //         data:$('#pm_plan').serialize(),
    //         success:function(data){
    //               console.log(data);
           
    //          $('#pm_plan')[0].reset();
    //         }

    //     });

    // });

</script>
</body>
</html>
