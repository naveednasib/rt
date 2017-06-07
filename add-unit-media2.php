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

             

         
            
                if(isset($_POST['unit_media']) )
                {
                   
                    $unit_Id                  = $_POST['unitId'];
                    $media_type               = $_POST['media-type'];                   
                    $brochure                 = $_FILES['file']["tmp_name"];
                    $brochure_check           = 0;
                    $paymentplan_check        = 1;
                    $floorplan_check          = 2;
                     
                   
   
                            function media_upload($mediaType) {
                                 global $brochure,$brochure_folder,$unit_Id  ,$conn  ;
                              
                              

                             $brochuretmp    = $brochure;
                            $brochurename   = $_FILES["file"]["name"];
                            $extension = pathinfo("$brochurename",PATHINFO_EXTENSION);


                             $result =  glob ($brochure_folder."unit-".$unit_Id.".*");
                           
                          

                             if($result){
                                 unlink($result[0]);    
                           
                              $brochurename = "unit-".$unit_Id.".".$extension;
                              $brochuretype   = $_FILES["file"]["type"];                                
                              $brochurepath   = $brochure_folder.($brochurename) ;
                              move_uploaded_file($brochuretmp , $brochurepath );
                           
                              $brochure_query = "   Update  tbl_unit_media2
                                                    Set
                                                    link       ='$brochurepath'
                                                    where
                                                    ( unit_id =  '$unit_Id') 
                                                    &&
                                                    (media_type = '$mediaType');

                                                     ";                              
                              if($conn->query( $brochure_query)===TRUE){
                                 echo "Data Update ".$brochurepath;
                              }
                              else{
                                  echo "Error:". $brochure_query."<br/>".$conn->error;
                                  }
                         

                             }
                             
                                else{
                              $brochurename = "unit-".$unit_Id.".".$extension;
                              $brochuretype   = $_FILES["file"]["type"];                                
                              $brochurepath   = $brochure_folder.($brochurename) ;
                              move_uploaded_file($brochuretmp , $brochurepath );

                              $brochure_query = "insert into tbl_unit_media2(unit_id,media_type,link) values ( '$unit_Id','$mediaType','$brochurepath') ";
                             
                
                             if ($conn->query($brochure_query) === TRUE) {
                              echo "Data insert ".$brochurepath; 
                                   } 
                             else  {
                               echo "Error: " . $brochure_query . "<br>" . $conn->error;     
                                   }




                                }
                                
                            }
          


                         // for brochure
                         if($media_type == $brochure_check ){
                         $brochure_folder   = "media/brochure/";   
                            
                              media_upload($brochure_check);
                            
                                
                                 }

                        // for brochure









    
                        // for payement

                         if($media_type == $paymentplan_check ){
                         $brochure_folder   = "media/paymentplan/";   
                            
                            
                      media_upload($paymentplan_check);
                            
                                
                                 }


                        // for payment plan




                         // for floor plan

                         if($media_type == $floorplan_check ){
                            $brochure_folder   = "media/floorplan/";   
                            
                           media_upload($floorplan_check);
                                
                                 }


                        // for floor plan

    
   
   
   
   
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
            <div class="col-xs-12 col-sm-12">
                <h2> upload Unit media </h2>
            
        <form  action="add-unit-media2.php" enctype="multipart/form-data" method="post">



                <table class="table table-responsive">




                <tr>
                <td>select unit</td>
                    <td  class="form-group">
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
                    <td>Upload Brochure</td>
                    
                    <td> 
                   <select name="media-type" class="form-control">
                   <option value='0'> Brochure</option>
                   <option value='1'>Payment Plan</option>
                   <option value='2'>Floor Plan</option>
                   </select>
                    </td>
                </tr>


                <tr>
                    <td>Upload Brochure</td>
                    <td>  <input type = "file"  name = "file" value = "upload" /></td>
                </tr>

           


                <tr>
                    <td colspan="2"><input type="submit" class="btn btn-success" value="submit" name="unit_media"/></td>

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
