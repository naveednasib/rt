    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head >

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="style/css/main.css" rel="stylesheet" />
    <title>Home page</title>
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 


    <style>        .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        vertical-align:middle;
        }
     
    </style>

    <?php 

    // $urld = "asd";


    // setcookie( $urld ,$_POST['urld']);
    // echo  $_COOKIE['urld'] ;

 // Hello David!
    ?>
         <?php 



              include_once('connection.php'); 

                $sql = "SELECT id ,unit_name FROM tbl_unitdetail";
                $fetch_Enquir_Result = mysqli_query($conn, $sql);
<<<<<<< HEAD

            
=======
  
     
>>>>>>> 9a1ce4b11f10b3ffd9c4582b9840807362968975

?>


</head>
<body>
    <!--header-->
                <?php 
                include_once ('layout/cms-header.php');
                ?>
    <!--header-->


    <section class="datasets top-container">

        <div class="mid-container clearfix">
          
        













            <div class="col-xs-12 ">
                <h2>Unit Detail</h2>



<?php

if (($fetch_Enquir_Result) && ($fetch_Enquir_Result->num_rows > 0))
{
    echo "<table class='table table-bordered table-condensed table-striped'>";
    //convert query result into an associative array

 
   
    while ($row = $fetch_Enquir_Result->fetch_array())
    {         
            echo "<tr class='$row[0] '>";
            
           echo"<td>     $row[0]          </td>";

            echo"<td>    $row[1]          </td>";

            echo"<td class='  $row[1] '>   
                        <a href='edit-unit.php?id=$row[id]'  class='btn btn-success' onclick='addRow($row[id])'>Edit</a>
                        <a href='javascript:void(0); ' onclick='deleteRow($row[id])'
                        id='delete$row[id]' class='btn btn-danger delete' >Delete</a>
                                 
                                  </td>";


           

        
    }
             echo "</table>";

    // $fetch_Enquir_Result->free();   
}  
        $conn->close();  
?>



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

    <script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('developer-txt').value = ddl.options[ddl.selectedIndex].text;
    }



    function deleteRow(id)
                    {
       var del_id = id;
        var $ele   = $("#delete"+del_id).parent().parent();
      
     
        $.ajax({
            type:'POST',
            url:'php/delete-home-tiles.php',
            data:{'del_id':del_id},
            success: function(data){
               
                 if( data == " success"){
                    $ele.fadeOut().remove();
                    alert("record deleted")
                 }else{
                        alert("can't delete the row");
                        
                 }

             }

            });
    
        }



    </script>


</body>
</html>
