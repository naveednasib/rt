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

                $sql = "SELECT id,project_developer FROM tbl_developer";
                $selectresult = mysqli_query($conn, $sql);

                $fetch_projects = "SELECT id,project_name FROM tbl_projects";
                $projectsresult = mysqli_query($conn, $fetch_projects);

 

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





        <form action="php/add-unit.php" method="post">

                <table class="table table-striped table-responsive">
                    <tr>
                        <td><strong>Unit Name </strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-name" class="form-control" placeholder="Unit Name " />
                        </td>
                    </tr>




                     <tr>
                        <td><strong>Developer Name </strong> </td>
                        <td class="form-group">


                              <select id="asd" required name="unit-developerName" onchange="getdevelopName(this)" class="form-control select-option">


                                <?php   while($row2 = mysqli_fetch_array($selectresult)):; ?>

                                    <option value="<?php echo $row2[0];?>"><?php echo $row2[1] ?></option>
                                    <?php $get_developer_name =  $row2[1];?>
                                 <?php  endwhile; ?>
                       
                                </select>
                            
 
                            <input id="developer-nametxt" type = "hidden" 
                            name = "unit-developer-name" value = "<?php echo $get_developer_name; ?>" />
                 
                        </td>
                    </tr>


                        <tr>
                        <td><strong>Project Name </strong> </td>
                        <td class="form-group">


                              <select required name="unit-developerName" onchange="setprojectName(this)" class="form-control select-option">
                                <?php   while($row2 = mysqli_fetch_array($projectsresult)):; ?>

                                    <option value="<?php echo $row2[0];?>"><?php echo $row2[1] ?></option>

                                <?php  endwhile; ?>
                       
                                </select>
                            

                            <input required id="project-txt-name" type = "hidden" 
                            name = "unit-projecttxt" value = "" />

                        </td>
                    </tr>
                


                    <tr>
                        <td><strong>Location</strong> </td>
                        <td class="form-group">
                            <input required type="text" name="unit-loc" class="form-control" placeholder="Location " />
                        </td>
                    </tr>


                    <tr>
                        <td><strong>Prices</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-prices" class="form-control" placeholder="Prices " />
                        </td>
                    </tr>


                    <tr>
                        <td><strong>Size</strong> </td>
                        <td class="form-group">
                            <input type="text"required name="unit-size" class="form-control" placeholder="Size " />
                        </td>
                    </tr>



                    <tr>
                        <td><strong>Ready By</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-readyBy" class="form-control" placeholder="Ready By" />
                        </td>
                    </tr>



                    <tr>
                        <td><strong>Project Feature</strong> </td>
                        <td class="form-group">
                           <!--  <input type="text" required name="unit-feature" class="form-control" placeholder="Project Feature" /> -->
                              <textarea rows="10"  name="unit-feature" class="form-control" placeholder="Project Feature" ></textarea>
                            
                        </td>
                    </tr>


              

                  


                    <tr>
                        <td><strong>Sold</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-sold" class="form-control" placeholder="Sold " />
                        </td>
                    </tr>

                     <tr>
                        <td><strong>Unit type</strong> </td>
                        <td class="form-group">
               
                      

                                    <select required name="unit-type" onchange="getunit_type(this)"  class="form-control" >
                                    
                                    <option value="1">Apartment</option>
                                    <option value="2">Villa</option>
                                    <option value="3">Townhouse</option>
                                    <option value="3">Penthouse</option>
                                    <option value="5">Compound</option>
                                    <option value="6">Duplex</option>
                                    <option value="7">Full floor</option>
                                    <option value="8">Whole Building</option>
                                    <option value="9">Bulk Rent Units</option>
                                    <option value="10">Bungalow</option>
                                    <option value="11">Hotel/Hotel Apartment</option>
                                    <option value="12">Labor Camp</option>

                                    </select>

                             <input required id="unit-type" type = "hidden" 
                            name ="unit-type-text" value = "Apartment" />


                                                        </td>
                    </tr>


                         <tr>
                        <td><strong>Number of Bedrooms</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-bedrooms" class="form-control" placeholder="Add Bedrooms" />
                        </td>
                    </tr>



                    <tr>
                        <td><strong>Number of Bathrooms</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-bathrooms" class="form-control" placeholder="Bathrooms" />
                        </td>
                    </tr>




                    <tr>
                        <td><strong>Property Status</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-status" class="form-control" placeholder="Property status" />
                        </td>
                    </tr>



                      <tr>
                        <td><strong>Location</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-floors" class="form-control" 
                            placeholder="Property Floors" />
                        </td>
                    </tr>


                       <tr>
                        <td><strong>Property launched Date</strong> </td>
                        <td class="form-group">
                            <input type="text" required name="unit-launched" class="form-control" placeholder="Property Luanched Date" />
                        </td>
                    </tr>








                  









                    <tr>

                        <td class="form-group" colspan="2">
                            <input type="submit" class="btn pull-right btn-lg btn-success" />
                        </td>
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

    <script type="text/javascript">
    function setprojectName(ddl) {
        document.getElementById('project-txt-name').value = ddl.options[ddl.selectedIndex].text;
    }
      function getunit_type(ddl) {
        document.getElementById('unit-type').value = ddl.options[ddl.selectedIndex].text;
    }
     function getdevelopName(ddl) {
             document.getElementById('developer-nametxt').value = ddl.options[ddl.selectedIndex].text;
    }
    
    </script>


</body>
</html>
