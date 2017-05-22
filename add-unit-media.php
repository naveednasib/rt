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
                    $brochure                 = $_FILES['brochure']["tmp_name"];
                    $paymentplan              = $_FILES['paymentplan']["tmp_name"];
                    $floorplan                = $_FILES['floorplan']["tmp_name"];

                    $empty_brochure           = !empty($brochure);
                    $empty_paymentplan        = !empty($paymentplan);
                    $empty_floorplan          = !empty($floorplan);
                    
                    $brochure_tableName       = '';
                    $paymentplan_tableName    = '';
                    $floorplane_tableName     = '';

                    $brochure_uploadpth       = '';
                    $paymentplan_uploadpth    = '';
                    $floorplane_uploadpth     = '';

                    $brochure_count         = '';
                    $paymentplan_count        = '';
                    $floorplane_count         = '';


                if($empty_brochure  ||  $empty_paymentplan   || $empty_floorplan )
                {
                       // for brochure
                    if($empty_brochure ){
                        $create_brochure_folder   = "media/brochure/".$unit_Id ."/";   
                         if (!file_exists($create_brochure_folder)) {  
                            mkdir($create_brochure_folder);
                            $brochuretmp    = $brochure;
                            $brochurename   = $_FILES["brochure"]["name"];
                            $brochuretype   = $_FILES["brochure"]["type"];
                            $brochurepath   = $create_brochure_folder.$brochurename ;
                            move_uploaded_file($brochuretmp , $brochurepath );
                            $brochure_tableName  = " , unit_brochure";
                            $brochure_uploadpth  =", '$brochurepath'"  ;
                            $brochure_count =1;
                           }

                         else{
                            echo "files exits";
                           }
                         
                    }


                    // for $paymentplan
                    if($empty_paymentplan ){

                            $create_paymentplan_folder   = "media/paymentplan/".$unit_Id ."/";   
                         if (!file_exists($create_paymentplan_folder)) {  
                            mkdir($create_paymentplan_folder );
                            $paymentplantmp    = $paymentplan ;
                            $paymentplanname   = $_FILES["paymentplan"]["name"];
                            $paymentplantype   = $_FILES["paymentplan"]["type"];
                            $paymentplanpath   = $create_paymentplan_folder .$paymentplanname ;
                            move_uploaded_file($paymentplantmp , $paymentplanpath );
                            $paymentplan_tableName  = " , unit_payment_plan";
                            $paymentplan_uploadpth  = ", '$paymentplanpath'" ;
                            $paymentplan_count =1;
                           }

                         else{
                            echo "files exits";
                           }
                    }

                     // for $floorplan 
                     if($empty_floorplan   ){

                        $create_floorplan_folder            = "media/floorplan/".$unit_Id ."/";   
                         if (!file_exists($create_floorplan_folder )) {  
                            mkdir($create_floorplan_folder);
                            $floorplanetmp                  = $floorplan ;
                            $floorplanname                  = $_FILES["floorplan"]["name"];
                            $floorplantype                  = $_FILES["floorplan"]["type"];
                            $floorplanpath                  = $create_floorplan_folder.$floorplanname ;
                            move_uploaded_file($floorplanetmp , $floorplanpath );
                            $floorplane_tableName           = " , unit_floor_plan";
                            $floorplane_uploadpth           = ", '$floorplanpath'";
                            $floorplane_count =1;
                           }

                         else{
                            echo "files exits";
                           }
                    }

                     $count = $brochure_count.$paymentplan_count.$floorplane_count;
                      
                  
                        $getTables = $brochure_tableName . $paymentplan_tableName .$floorplane_tableName ;
                       $getTables = preg_replace('/,/', ' ', $getTables, 1);

                       $getfilepaths = $brochure_uploadpth.$paymentplan_uploadpth .$floorplane_uploadpth;
                        $getfilepaths= preg_replace('/,/', ' ', $getfilepaths, 1);
                      
                    

                    // $getTables = $brochure_tableName . $paymentplan_uploadpth .$floorplane_tableName ;
                    // $getvalues ='';


                   $insertImage = " INSERT INTO tbl_unit_media($getTables,unit_Id) VALUES ($getfilepaths,$unit_Id ) ";

                     $result = mysqli_query($conn,$insertImage);                         
                     echo '<h3 style="color:green;">Files Added</h3>' ;

                }    

                else{
                    echo "<h3 style='color:red;margin-top:50px;'>atleast select 1 file to upload</h3>";
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
            <div class="col-xs-12 col-sm-12">
                <h2> upload Unit media </h2>
            
        <form  action="add-unit-media.php" enctype="multipart/form-data" method="post">



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
                    <td>  <input type = "file"  name = "brochure" value = "upload brochure" /></td>
                </tr>

                

                <tr>
                    <td>Upload Payment Plan</td>
                    <td>  <input type = "file"  name = "paymentplan" value = "upload brochure" /></td>
                </tr>
               
               <tr>
                    <td>Upload Floor Plan</td>
                    <td>  <input type = "file"    name = "floorplan" value = "upload brochure" /></td>
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
