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


          
                $fetchslider = "SELECT tbl_unitdetail.id,tbl_unitdetail.unit_name,tbl_homepage_lg_slider.unit_img_path
                    FROM  tbl_unitdetail
                    INNER JOIN tbl_homepage_lg_slider 
                    ON
                    tbl_unitdetail.id = tbl_homepage_lg_slider.unit_id
                    ";
                $fetch_Enquir_Result = mysqli_query($conn, $fetchslider);



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
                <h2>Upload home page slider data</h2>
            
        <form  action="php/add-homepage-lg-slider.php" enctype="multipart/form-data" method="post">



                <table class="table table-bordered table-condensed table-striped">




                <tr>
                <td>select unit</td>
                    <td class="form-group">
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
               
                <td>select large images</td>
                    <td class="form-group">
                            <input type="file" name="file_img[]" multiple>
                    </td>
                </tr>



                <tr>
                    <td>select heading</td>
                    <td class="form-group">
                            <input type="text"  class="form-control" name="unit_heading" >
                    </td>
                </tr>

                <tr>
                    <td>select usp</td>
                    <td class="form-group">
                            <input type="text"  class="form-control"  name="unit_usp" >
                    </td>
                </tr>
                <tr>
                    <td>select paragraph</td>
                    <td class="form-group">
                            <input type="text"  class="form-control"  name="unit_paragraph" >
                    </td>
                </tr>



                <tr>
                  
                    <td colspan="2" class="form-group">
                            <input type="submit" name="upload-images" class="btn btn-lg btn-success">                         
                    </td>
                </tr>




                </table>

  


        </form> 




            </div>
        

         <div class="col-xs-12 col-sm-6">

    <h2>Remove Slider</h2>

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
                      
                        <a href='javascript:void(0); ' onclick='deleteRow($row[id])'
                        id='delete$row[id]' data-imgpath='$row[2]' class='btn btn-danger delete' >Delete</a>
                                 
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


<?php 



?>

  <script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('unitname').value = ddl.options[ddl.selectedIndex].text;
    }
    
    function deleteRow(id)
                    {
        var del_id          = id;
        var $ele            = $("#delete"+del_id).parent().parent();
        var imgpath         =  $("#delete"+del_id).attr("data-imgpath");
      alert(imgpath );
     
        $.ajax({
            type:'POST',
            url:'php/delete-home-slider.php',
            data:{'del_id':del_id,'imgpath':imgpath},
            success: function(data){
               
                 if( data == " success"){
                    $ele.fadeOut().remove();
                 
                    alert("record deleted")
                 }else{
                        console.log(data);
                        alert("can't delete the row");
                        
                 }

             }

            });
    
        }
</script>
</body>
</html>
