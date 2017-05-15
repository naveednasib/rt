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


           
           


        if(isset($_POST['project_submit'])){


              $username                = $_POST['unit-project'];
              $unit_developerId        = $_POST["unit-developerName"];
              $unit_developerName      = $_POST["unit-developertxt"];


          

            if(trim($username) == "" && !empty($username)){
                echo ("plesae insert data");

            }

                else{

                     $insert_project="insert into tbl_projects(project_name,project_developer,project_devId) values
                ('$username',' $unit_developerName',' $unit_developerId')";

                  $result = mysqli_query($conn,$insert_project);

                  

               
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
          
        <div class="col-xs-12 ">
            <h2>Add Project</h2>

            <form action="add-projects.php" method="post">
            <table class="table table-striped table-responsive">
                <tr>
                   
                      <td colspan="2" class="form-group">

                         <input type="text" required name="unit-project" class="form-control" placeholder="add Projects" />  

                      </td>
                </tr>



                 <tr>
                        <td><strong>Developer Name </strong> </td>
                        <td class="form-group">


                              <select required name="unit-developerName" onchange="setTextField(this)" class="form-control select-option">
                                <?php   while($row1 = mysqli_fetch_array($selectresult)):; ?>

                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1] ?></option>

                                <?php  endwhile; ?>
                       
                                </select>
                            

                            <input required id="developer-txt" type = "hidden" 
                            name = "unit-developertxt" value = "" />

                        </td>
                    </tr>


                   <tr>
                   
                      <td colspan="2" class="form-group">

                         <input type="submit" required name="project_submit" class="form-control btn btn-success"  value="submit" />  

                      </td>
                </tr>
            </table>
                </form>
        </div>













         
        </div>
    
       
    </section>



    <!--footer-->
    <footer>
        <div class="mid-container">
            <div class="footer1 clearfix">

                <div class="col-xs-12 col-sm-3 col-1">
                    <img src="images/logo.png" width="200" height="61" />
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum consectetuer adipiscing.</p>
                    <p>If you are interested in castle do not wait and BUY IT NOW!</p>

                    <div class="social-icon-container">
                        <span class="f"><a href><i class="fa fa-facebook" aria-hidden="true"></i>     </a>  </span>
                        <span class="g"><a href><i class="fa fa-google-plus" aria-hidden="true"></i>  </a>      </span>
                        <span class="t"><a href><i class="fa fa-twitter" aria-hidden="true"></i>      </a>      </span>
                        <span class="v"><a href><i class="fa fa-vimeo" aria-hidden="true"></i>        </a>      </span>
                    </div>

                </div>





                <div class="col-xs-12 col-sm-3 col-2">
                    <h2 class="heading" data-toggle="collapse" href=".search-area" aria-expanded="false" aria-controls="search-area">Heading</h2>
                    <ul class="search-area" role="tabpanel" aria-expanded="false">
                        <li><a href="#."><i class="fa fa-map-signs"></i> Bayonne, New Jersey</a></li>
                        <li class="active"><a href="#." class=""><i class="fa fa-map-signs"></i> Greenville, New Jersey</a></li>
                        <li><a href="#."> <i class="fa fa-map-signs"></i> The Heights, New Jersey</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> West Side, New York</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> Upper East Side, New York</a></li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-3 col-2">
                    <h2 class="heading" data-toggle="collapse" href=".search-area" aria-expanded="false" aria-controls="search-area">Heading</h2>
                    <ul class="search-area" role="tabpanel" aria-expanded="false">
                        <li><a href="#."><i class="fa fa-map-signs"></i> Bayonne, New Jersey</a></li>
                        <li class="active"><a href="#." class=""><i class="fa fa-map-signs"></i> Greenville, New Jersey</a></li>
                        <li><a href="#."> <i class="fa fa-map-signs"></i> The Heights, New Jersey</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> West Side, New York</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> Upper East Side, New York</a></li>
                    </ul>
                </div>


                <div class="col-xs-12 col-sm-3 col-4">
                    <h2 class="heading" data-toggle="collapse" href=".search-area" aria-expanded="false" aria-controls="search-area">Heading</h2>
                    <ul class="search-area" role="tabpanel" aria-expanded="false">
                        <li><a href="#."><i class="glyphicon glyphicon-earphone"></i> 01 900 234 567 - 68</a></li>
                        <li class="active"><a href="#." class=""><i class="fa fa-map-signs"></i> Greenville, New Jersey</a></li>
                        <li><a href="#."> <i class="glyphicon glyphicon-globe"></i> www.offplandxb.ae</a></li>
                        <li><a href="#."><i class="glyphicon glyphicon-tags"></i> West Side, New York</a></li>
                        <li><a href="#."><i class="fa fa-map-signs"></i> Castle Melbourne, Merrick Way,FL 12345 australia</a></li>
                    </ul>
                </div>



            </div>
        </div>
    </footer>

    <!--footer-->


    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>

    <script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('developer-txt').value = ddl.options[ddl.selectedIndex].text;
    }
</script>


</body>
</html>
